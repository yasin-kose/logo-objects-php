<?php

declare(strict_types=1);

namespace LogoObjects\Types;

/**
 * Listeleme sorgu secenekleri icin kolaylik sinifi.
 * Metotlar dizi de kabul eder; bu sinif yalnizca tipli kullanim icindir.
 */
class QueryOptions
{
    public ?string $expandLevel = null;
    public ?string $expand = null;
    /** @var string[]|null */
    public ?array $fields = null;
    public ?bool $withCount = null;
    public ?bool $count = null;
    public ?bool $first = null;
    public ?bool $last = null;
    /** @var int|null */
    public ?int $limit = null;
    /** @var int|null */
    public ?int $offset = null;
    public ?string $q = null;
    /** @var mixed */
    public $sort = null;

    /** @return array<string,mixed> */
    public function toArray(): array
    {
        $out = [];
        foreach (get_object_vars($this) as $k => $v) {
            if ($v !== null) {
                $out[$k] = $v;
            }
        }
        return $out;
    }
}