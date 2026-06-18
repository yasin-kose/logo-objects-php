<?php

declare(strict_types=1);

/**
 * STOK ornekleri - malzeme (stok) karti (items) ve malzeme fisi (itemSlips).
 * Alan adlari Logo surumune gore degisebilir.
 */

require __DIR__ . '/bootstrap.php';

use LogoObjects\Exception\LogoApiError;

$logo = makeClient();

try {
    // 1) STOK KARTI olusturma (items)
    $malzeme = $logo->items->create([
        'CODE'      => 'MAL.' . date('His'),
        'NAME'      => 'Ornek Malzeme',
        'CARDTYPE'  => 1,            // 1: Ticari mal
        'UNITSET_CODE' => 'ADET',
    ]);
    echo "Stok karti: #{$malzeme->INTERNAL_REFERENCE} ({$malzeme->CODE})" . PHP_EOL;

    // 2) Stok listesi okuma
    $liste = $logo->items->getAll(['limit' => 5, 'fields' => ['CODE', 'NAME']]);
    echo 'Stok adedi (sayfa): ' . count($liste->items ?? []) . PHP_EOL;

    // 3) MALZEME FISI (itemSlips) - ornegin ambar fazlasi giris
    $fis = $logo->itemSlips->create([
        'TYPE'   => 50,                // ornek: ambar fazlasi giris fisi
        'DATE'   => date('d.m.Y'),
        'NUMBER' => '~',
        'TRANSACTIONS' => [
            'items' => [
                ['TYPE' => 0, 'MASTER_CODE' => $malzeme->CODE, 'QUANTITY' => 10, 'PRICE' => 0],
            ],
        ],
    ]);
    echo "Malzeme fisi: #{$fis->INTERNAL_REFERENCE}" . PHP_EOL;
} catch (LogoApiError $e) {
    echo "HATA (HTTP {$e->getStatusCode()}): {$e->getMessage()}" . PHP_EOL;
}
