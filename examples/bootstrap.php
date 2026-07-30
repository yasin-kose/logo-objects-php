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

/**
 * Depo kokundeki .env dosyasini (varsa) ortam degiskenlerine yukler.
 * .env gitignore'ludur; sablon icin .env.example dosyasina bakin.
 * Halihazirda tanimli bir degiskenin uzerine yazilmaz.
 */
function loadDotEnv(string $file): void
{
    if (!is_file($file)) {
        return;
    }
    foreach (file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        $line = trim($line);
        if ($line === '' || $line[0] === '#' || strpos($line, '=') === false) {
            continue;
        }
        list($key, $value) = explode('=', $line, 2);
        $key = trim($key);
        if ($key !== '' && getenv($key) === false) {
            putenv($key . '=' . trim(trim($value), "\"'"));
        }
    }
}

loadDotEnv(__DIR__ . '/../.env');

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
