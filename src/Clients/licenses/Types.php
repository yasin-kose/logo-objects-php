<?php

declare(strict_types=1);

namespace LogoObjects\Clients\licenses;

/**
 * Licenses
 */
class Licenses extends \LogoObjects\Types\BaseEntity
{
}

/**
 * LicensesQueryOptions
 */
class LicensesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var LicensesSortSpec|null */
    public $sort = null;
}

/**
 * LicensesSearchCriteria
 */
class LicensesSearchCriteria extends \LogoObjects\Support\Entity
{
}

/**
 * LicensesAnalytics
 */
class LicensesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
