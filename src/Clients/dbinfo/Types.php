<?php

declare(strict_types=1);

namespace LogoObjects\Clients\dbinfo;

/**
 * Dbinfo
 */
class Dbinfo extends \LogoObjects\Types\BaseEntity
{
}

/**
 * DbinfoQueryOptions
 */
class DbinfoQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var DbinfoSortSpec|null */
    public $sort = null;
}

/**
 * DbinfoSearchCriteria
 */
class DbinfoSearchCriteria extends \LogoObjects\Support\Entity
{
}

/**
 * DbinfoAnalytics
 */
class DbinfoAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
