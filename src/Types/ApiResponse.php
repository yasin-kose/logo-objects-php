<?php

declare(strict_types=1);

namespace LogoObjects\Types;

use LogoObjects\Support\Entity;

/** Sayfali liste yaniti (RSCollection). */
class ApiResponse extends Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $offset = null;
    /** @var int|float|null */
    public $count = null;
    /** @var int|float|null */
    public $totalCount = null;
    /** @var int|float|null */
    public $limit = null;
    /** @var Meta|null */
    public $first = null;
    /** @var Meta|null */
    public $next = null;
    /** @var Meta|null */
    public $previous = null;
    /** @var mixed[]|null */
    public ?array $items = null;

    protected static function casts(): array
    {
        return [
            'Meta' => \LogoObjects\Types\Meta::class,
            'first' => \LogoObjects\Types\Meta::class,
            'next' => \LogoObjects\Types\Meta::class,
            'previous' => \LogoObjects\Types\Meta::class,
        ];
    }

    /**
     * Ham yaniti, items'lari verilen sinifa hydrate ederek doldurur.
     *
     * @param mixed       $data
     * @param string|null $itemClass
     * @return self
     */
    public static function of($data, ?string $itemClass = null): self
    {
        $resp = self::fromArray($data);
        if ($itemClass !== null && is_array($resp->items)) {
            $hydrated = [];
            foreach ($resp->items as $it) {
                $hydrated[] = is_array($it) ? $itemClass::fromArray($it) : $it;
            }
            $resp->items = $hydrated;
        }
        return $resp;
    }
}