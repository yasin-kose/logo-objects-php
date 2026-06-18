<?php

declare(strict_types=1);

/**
 * OKUMA (GET) ornekleri - her endpoint client'i ayni desende calisir.
 */

require __DIR__ . '/bootstrap.php';

use LogoObjects\Exception\LogoApiError;

$logo = makeClient();

try {
    // 1) Listeleme -- ApiResponse doner; items[] tipli nesnelerdir
    $res = $logo->salesOrders->getAll([
        'limit'  => 10,
        'fields' => ['INTERNAL_REFERENCE', 'NUMBER', 'DATE', 'ARP_CODE', 'TOTAL_NET'],
        'sort'   => ['DATE', 'desc'],
    ]);
    echo 'Toplam: ' . ($res->totalCount ?? '?') . PHP_EOL;
    foreach (($res->items ?? []) as $row) {
        echo "  #{$row->INTERNAL_REFERENCE}  {$row->NUMBER}  {$row->DATE}" . PHP_EOL;
    }

    // 2) Tek kayit (ID ile) -- tipli nesne doner
    // $siparis = $logo->salesOrders->getById(123);

    // 3) Kriterle arama (camelCase alanlar -> OData'ya cevrilir)
    $cariler = $logo->Arps->search(['code' => '120', 'active' => 0]);
    echo 'Bulunan cari: ' . count($cariler->items ?? []) . PHP_EOL;

    // 4) Ham OData filtresi gerekiyorsa getAll + q
    $aktif = $logo->Arps->getAll(['q' => "ACTIVE eq 0 and CODE like '120*'", 'limit' => 5]);
    echo 'Aktif cari: ' . count($aktif->items ?? []) . PHP_EOL;

    // 5) Kayit sayisi
    echo 'Cari adedi: ' . $logo->Arps->getCount() . PHP_EOL;
} catch (LogoApiError $e) {
    echo "HATA (HTTP {$e->getStatusCode()}): {$e->getMessage()}" . PHP_EOL;
}
