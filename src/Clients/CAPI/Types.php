<?php

declare(strict_types=1);

namespace LogoObjects\Clients\CAPI;

/**
 * Capi
 */
class Capi extends \LogoObjects\Types\BaseEntity
{
}

/**
 * CapiQueryOptions
 */
class CapiQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var CapiSortSpec|null */
    public $sort = null;
}

/**
 * CapiSearchCriteria
 */
class CapiSearchCriteria extends \LogoObjects\Support\Entity
{
}

/**
 * CapiAnalytics
 */
class CapiAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
