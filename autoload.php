<?php

declare(strict_types=1);

/**
 * Composer'siz kullanim icin basit autoloader.
 * Composer ile kuruyorsaniz bunun yerine vendor/autoload.php kullanin.
 *
 * Types.php dosyalari birden cok sinif barindirir; bu yukleyici, ilgili
 * entity'nin herhangi bir tipi istendiginde Types.php'yi tumuyle yukler.
 */

spl_autoload_register(static function (string $class): void {
    $prefix = 'LogoObjects\\';
    if (strncmp($class, $prefix, strlen($prefix)) !== 0) {
        return;
    }
    $src = __DIR__ . '/src';
    $rel = str_replace('\\', '/', substr($class, strlen($prefix)));

    $direct = $src . '/' . $rel . '.php';
    if (is_file($direct)) {
        require $direct;
        return;
    }

    // Coklu-sinif Types.php: LogoObjects\Clients\<Entity>\<Class>
    if (preg_match('#^Clients/([^/]+)/#', $rel, $m)) {
        $types = $src . '/Clients/' . $m[1] . '/Types.php';
        if (is_file($types)) {
            require_once $types;
        }
    }
});
