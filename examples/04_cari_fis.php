<?php

declare(strict_types=1);

/**
 * CARI HESAP FISI ornekleri - nakit tahsilat / nakit odeme / virman (ArpSlips).
 *
 * ArpSlips.TYPE ve satir TRCODE degerleri (Logo surumune gore degisebilir):
 *   1  Nakit Tahsilat     2  Nakit Odeme
 *   5  Virman Fisi        41 Kredi Karti Fisi
 */

require __DIR__ . '/bootstrap.php';

use LogoObjects\Exception\LogoApiError;

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

    // 3) VIRMAN (TYPE = 5) - iki cari arasinda aktarim
    $virman = $logo->ArpSlips->create([
        'TYPE'   => 5,
        'DATE'   => date('d.m.Y'),
        'NUMBER' => '~',
        'TRANSACTIONS' => [
            'items' => [
                ['TRCODE' => 5, 'ARP_CODE' => '120.001', 'TOTAL' => 500.0, 'SIGN' => 0], // borc
                ['TRCODE' => 5, 'ARP_CODE' => '120.002', 'TOTAL' => 500.0, 'SIGN' => 1], // alacak
            ],
        ],
    ]);
    echo "Virman: #{$virman->INTERNAL_REFERENCE}" . PHP_EOL;
} catch (LogoApiError $e) {
    echo "HATA (HTTP {$e->getStatusCode()}): {$e->getMessage()}" . PHP_EOL;
}
