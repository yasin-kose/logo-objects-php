<?php

declare(strict_types=1);

namespace LogoObjects\Clients\istokenvalid;

/**
 * Void
 */
class VoidType extends \LogoObjects\Support\Entity
{
}

/**
 * Istokenvalid
 */
class Istokenvalid extends \LogoObjects\Types\BaseEntity
{
}

/**
 * IstokenvalidQueryOptions
 */
class IstokenvalidQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var IstokenvalidSortSpec|null */
    public $sort = null;
}

/**
 * IstokenvalidSearchCriteria
 */
class IstokenvalidSearchCriteria extends \LogoObjects\Support\Entity
{
}

/**
 * IstokenvalidAnalytics
 */
class IstokenvalidAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
