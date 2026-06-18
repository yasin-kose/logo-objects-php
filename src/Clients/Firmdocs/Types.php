<?php

declare(strict_types=1);

namespace LogoObjects\Clients\Firmdocs;

/**
 * Firmdocs
 */
class Firmdocs extends \LogoObjects\Types\BaseEntity
{
}

/**
 * FirmdocsQueryOptions
 */
class FirmdocsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var FirmdocsSortSpec|null */
    public $sort = null;
}

/**
 * FirmdocsSearchCriteria
 */
class FirmdocsSearchCriteria extends \LogoObjects\Support\Entity
{
}

/**
 * FirmdocsAnalytics
 */
class FirmdocsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
