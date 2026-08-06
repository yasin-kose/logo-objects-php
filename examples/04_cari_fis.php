<?php

declare(strict_types=1);

/**
 * NAKIT TAHSILAT / ODEME ornekleri - iki ayri belge turu vardir:
 *
 *   ArpSlips          Cari Hesap Fisi - yalnizca cari hesap hareketi olusur.
 *   safeDepositSlips  Kasa Fisi       - cari hesap + KASA bakiyesi birlikte hareket eder.
 *                                       Para fiziksel olarak bir kasaya giriyorsa bunu kullanin.
 *
 * ArpSlips.TYPE ve satir TRCODE degerleri (Logo surumune gore degisebilir):
 *   1  Nakit Tahsilat     2  Nakit Odeme
 *   5  Virman Fisi        41 Kredi Karti Fisi
 */

require __DIR__ . '/bootstrap.php';

use LogoObjects\Exception\LogoApiError;
use LogoObjects\Exception\ValidationError;

/**
 * Kasa fisi islem turleri (safeDepositSlips.TYPE) - canli veriden dogrulandi:
 *   11  Cari hesaptan kasaya NAKIT TAHSILAT
 *         ATTACHMENT_ARP satiri: TRCODE=1, DEBIT=0, CREDIT=tutar, SIGN=1
 *   73  Kasalar arasi virman - GIRIS  (karsi kasa: SD_CODE_CROSS / VCARDREF)
 *   74  Kasalar arasi virman - CIKIS
 * Logo surumune gore degisebilir; kendi sunucunuzda teyit edin.
 */
const KASA_NAKIT_TAHSILAT = 11;

/**
 * Kasa kodu: safeDeposits.CODE ile ayni degerdir (CARDREF ise ayni kasanin
 * INTERNAL_REFERENCE degeridir). Kendi kasa kodlarinizi listelemek icin
 * (hicbir kayit olusturmaz):
 *
 *   foreach ($logo->safeDeposits->getAll(['limit' => 25])->items as $k) {
 *       echo $k->CODE . ' - ' . $k->DESCRIPTION . PHP_EOL;
 *   }
 *
 * Not: sunucu 'limit' icin en fazla 25 kabul eder.
 */
const KASA_KODU = 'KASA.01';

$logo = makeClient();

try {
    // 1) NAKIT TAHSILAT (TYPE = 1) - cariden tahsilat
    $tahsilat = $logo->ArpSlips->create([
        'TYPE'   => 1,
        'DATE'   => date('d.m.Y'),
        'NUMBER' => '~',
        'TRANSACTIONS' => [
            'items' => [
                ['TRCODE' => 1, 'ARP_CODE' => '120.001', 'TOTAL' => 1500.0, 'LINEEXP' => 'Nakit tahsilat'],
            ],
        ],
    ]);
    echo "Nakit tahsilat: #{$tahsilat->INTERNAL_REFERENCE}" . PHP_EOL;

    // 2) NAKIT ODEME (TYPE = 2) - cariye odeme
    $odeme = $logo->ArpSlips->create([
        'TYPE'   => 2,
        'DATE'   => date('d.m.Y'),
        'NUMBER' => '~',
        'TRANSACTIONS' => [
            'items' => [
                ['TRCODE' => 2, 'ARP_CODE' => '320.001', 'TOTAL' => 800.0, 'LINEEXP' => 'Nakit odeme'],
            ],
        ],
    ]);
    echo "Nakit odeme: #{$odeme->INTERNAL_REFERENCE}" . PHP_EOL;

    // 3) CARI VIRMAN (TYPE = 5) - iki cari hesap arasinda aktarim.
    //    Canli veriden dogrulandi: fis iki satir tasir, ikisi de TRCODE=5 / MODULENR=5;
    //    SIGN=0 olan satir DEBIT (borclanan), SIGN=1 olan satir CREDIT (alacaklanan) alir.
    //    Iki satirin tutari esit olmalidir.
    $virmanTutar = 500.0;
    $virman = $logo->ArpSlips->create([
        'TYPE'   => 5,
        'DATE'   => date('d.m.Y'),
        'NUMBER' => '~',
        'TRANSACTIONS' => [
            'items' => [
                [   // borclanan cari
                    'TRCODE'   => 5,
                    'ARP_CODE' => '120.001',
                    'SIGN'     => 0,
                    'DEBIT'    => $virmanTutar,
                    'CREDIT'   => 0,
                    'AMOUNT'   => $virmanTutar,
                ],
                [   // alacaklanan cari
                    'TRCODE'   => 5,
                    'ARP_CODE' => '120.002',
                    'SIGN'     => 1,
                    'DEBIT'    => 0,
                    'CREDIT'   => $virmanTutar,
                    'AMOUNT'   => $virmanTutar,
                ],
            ],
        ],
    ]);
    echo "Virman: #{$virman->INTERNAL_REFERENCE}" . PHP_EOL;

    // 4) KASA FISI ile NAKIT TAHSILAT (safeDepositSlips)
    //    Yukaridaki 1. ornekten farki: para bir kasaya girer, kasa bakiyesi de hareket eder.
    //    Cari baglantisi ATTACHMENT_ARP satirlariyla kurulur.
    $tutar = 1500.0;
    $kasaTahsilat = $logo->safeDepositSlips->create([
        'TYPE'        => KASA_NAKIT_TAHSILAT,
        'SD_CODE'     => KASA_KODU,        // kasa kodu (safeDeposits.CODE)
        'DATE'        => date('d.m.Y'),
        'NUMBER'      => '~',              // ~ = sirayi Logo versin
        'DESCRIPTION' => 'Nakit tahsilat',
        'AMOUNT'      => $tutar,
        'SIGN'        => 0,                // 0 = kasaya giris (tahsilat)
        'ATTACHMENT_ARP' => [
            'items' => [
                [
                    'ARP_CODE'    => '120.001',
                    'TRCODE'      => 1,     // 1 = nakit tahsilat hareketi
                    'DEBIT'       => 0,
                    'CREDIT'      => $tutar, // tahsilatta cari alacaklanir
                    'SIGN'        => 1,
                    'AMOUNT'      => $tutar,
                    'DESCRIPTION' => 'Nakit tahsilat',
                ],
            ],
        ],
    ]);
    echo "Kasa fisi (nakit tahsilat): #{$kasaTahsilat->INTERNAL_REFERENCE}" . PHP_EOL;
} catch (ValidationError $e) {
    // Sunucunun reddetme gerekcesi: ozeti mesajda, tam listesi burada.
    echo "DOGRULAMA HATASI (HTTP {$e->getStatusCode()}): {$e->getMessage()}" . PHP_EOL;
    foreach ($e->getValidationErrors() as $err) {
        echo "  - $err" . PHP_EOL;
    }
} catch (LogoApiError $e) {
    echo "HATA (HTTP {$e->getStatusCode()}): {$e->getMessage()}" . PHP_EOL;
}
