<?php

declare(strict_types=1);

/**
 * YAZMA ornekleri - ekleme / guncelleme / silme.
 */

require __DIR__ . '/bootstrap.php';

use LogoObjects\Exception\LogoApiError;

$logo = makeClient();

try {
    // EKLEME (POST) -- olusturulan kayit tipli nesne olarak doner
    $yeni = $logo->salesOrders->create([
        'TYPE'      => 2,
        'NUMBER'    => '~',
        'DATE'      => date('d.m.Y'),
        'ARP_CODE'  => '120.001',
        'TRANSACTIONS' => [
            'items' => [
                ['TYPE' => 0, 'MASTER_CODE' => 'MAL.001', 'QUANTITY' => 1, 'PRICE' => 100.0],
            ],
        ],
    ]);
    $id = $yeni->INTERNAL_REFERENCE;
    echo "Olusturuldu: #$id" . PHP_EOL;

    // GUNCELLEME (PUT - tam) ve (PATCH - kismi)
    $logo->salesOrders->update($id, ['DOC_NUMBER' => 'A-001']);
    $logo->salesOrders->patch($id, ['GENEXP1' => 'Aciklama']);

    // SILME (DELETE)
    $logo->salesOrders->delete($id);
    echo "Silindi: #$id" . PHP_EOL;
} catch (LogoApiError $e) {
    echo "HATA (HTTP {$e->getStatusCode()}): {$e->getMessage()}" . PHP_EOL;
}
