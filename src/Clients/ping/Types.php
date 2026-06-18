<?php

declare(strict_types=1);

namespace LogoObjects\Clients\ping;

/**
 * Ping
 */
class Ping extends \LogoObjects\Types\BaseEntity
{
}

/**
 * PingQueryOptions
 */
class PingQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var PingSortSpec|null */
    public $sort = null;
}

/**
 * PingSearchCriteria
 */
class PingSearchCriteria extends \LogoObjects\Support\Entity
{
}

/**
 * PingAnalytics
 */
class PingAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
