<?php

declare(strict_types=1);

namespace LogoObjects\Types;

use LogoObjects\Support\Entity;

/** Ic ice diziler (TRANSACTIONS, LINES, ...) icin genel koleksiyon sarmalayicisi. */
class TransactionCollection extends Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var mixed[]|null */
    public ?array $items = null;

    protected static function casts(): array
    {
        return ['Meta' => \LogoObjects\Types\Meta::class];
    }
}