<?php

declare(strict_types=1);

/**
 * CEK / SENET ornekleri (chequeAndPnotes).
 *   TYPE = 1  Cek
 *   TYPE = 2  Senet
 * Alan adlari Logo surumune gore degisebilir.
 */

require __DIR__ . '/bootstrap.php';

use LogoObjects\Exception\LogoApiError;

$logo = makeClient();

try {
    // CEK girisi (TYPE = 1)
    $cek = $logo->chequeAndPnotes->create([
        'TYPE'        => 1,
        'PORTFOY_NO'  => 'CEK-' . date('YmdHis'),
        'OWING'       => '120.001',          // borclu cari
        'DUE_DATE'    => date('d.m.Y', strtotime('+30 days')),
        'AMOUNT'      => 2500.0,
        'BANK_NAME'   => 'X BANKASI',
    ]);
    echo "Cek olusturuldu: #{$cek->INTERNAL_REFERENCE}" . PHP_EOL;

    // SENET girisi (TYPE = 2)
    $senet = $logo->chequeAndPnotes->create([
        'TYPE'        => 2,
        'PORTFOY_NO'  => 'SEN-' . date('YmdHis'),
        'OWING'       => '120.001',
        'DUE_DATE'    => date('d.m.Y', strtotime('+60 days')),
        'AMOUNT'      => 1750.0,
    ]);
    echo "Senet olusturuldu: #{$senet->INTERNAL_REFERENCE}" . PHP_EOL;

    // Toplu giris/cikis icin: $logo->chequeAndPnoteRolls->create([...]);
} catch (LogoApiError $e) {
    echo "HATA (HTTP {$e->getStatusCode()}): {$e->getMessage()}" . PHP_EOL;
}
