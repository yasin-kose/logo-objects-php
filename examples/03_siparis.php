<?php

declare(strict_types=1);

/**
 * SIPARIS ornekleri - satis siparisi (salesOrders).
 * Alan adlari Logo surumune gore degisebilir; ornek niteligindedir.
 */

require __DIR__ . '/bootstrap.php';

use LogoObjects\Exception\LogoApiError;

$logo = makeClient();

try {
    // Satis siparisi (TYPE = 2)
    $siparis = $logo->salesOrders->create([
        'TYPE'     => 2,
        'NUMBER'   => '~',                 // otomatik numara
        'DATE'     => date('d.m.Y'),
        'ARP_CODE' => '120.001',           // cari hesap kodu
        'DOCODE'   => 'SIP-' . date('YmdHis'),
        'TRANSACTIONS' => [
            'items' => [
                ['TYPE' => 0, 'MASTER_CODE' => 'MAL.001', 'QUANTITY' => 5, 'PRICE' => 100.0, 'VAT_RATE' => 20],
                ['TYPE' => 0, 'MASTER_CODE' => 'MAL.002', 'QUANTITY' => 2, 'PRICE' => 250.0, 'VAT_RATE' => 20],
            ],
        ],
    ]);
    echo "Satis siparisi olusturuldu: #{$siparis->INTERNAL_REFERENCE}" . PHP_EOL;

    // Satinalma siparisi de ayni desende: $logo->purchaseOrders->create([...]);
} catch (LogoApiError $e) {
    echo "HATA (HTTP {$e->getStatusCode()}): {$e->getMessage()}" . PHP_EOL;
}
