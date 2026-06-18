<?php

declare(strict_types=1);

namespace LogoObjects\Utils;

/** LOGO_DEBUG ortam degiskeni ayarliysa stderr'e basit istek/yanit gunlugu. */
class Debug
{
    public static function enabled(): bool
    {
        return (bool) (getenv('LOGO_DEBUG'));
    }

    public static function log(string $line): void
    {
        if (self::enabled()) {
            fwrite(STDERR, '[logo] ' . $line . "\n");
        }
    }
}