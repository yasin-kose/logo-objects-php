<?php

declare(strict_types=1);

/**
 * Ornekler icin ortak baslangic dosyasi.
 * - composer ile kurulduysa vendor/autoload.php kullanir.
 * - kurulmadiysa depo kokundeki autoload.php devreye girer.
 */

$vendor = __DIR__ . '/../vendor/autoload.php';
require is_file($vendor) ? $vendor : __DIR__ . '/../autoload.php';

use LogoObjects\LogoClient;

function makeClient(): LogoClient
{
    return new LogoClient([
        'baseUrl'   => getenv('LOGO_BASE_URL') ?: 'http://SUNUCU_IP:32001/api/v1',
        'username'  => getenv('LOGO_USERNAME') ?: 'KULLANICI',
        'password'  => getenv('LOGO_PASSWORD') ?: 'PAROLA',
        'firmno'    => getenv('LOGO_FIRMNO') ?: '1',
        'basicAuth' => getenv('LOGO_BASIC_AUTH') ?: 'BASE64_CLIENT_BILGISI',
        // 'verifySsl' => false, // self-signed sertifika icin
    ]);
}
