<?php

declare(strict_types=1);

namespace LogoObjects\Clients\revoke;

/**
 * Void
 */
class VoidType extends \LogoObjects\Support\Entity
{
}

/**
 * Revoke
 */
class Revoke extends \LogoObjects\Types\BaseEntity
{
}

/**
 * RevokeQueryOptions
 */
class RevokeQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var RevokeSortSpec|null */
    public $sort = null;
}

/**
 * RevokeSearchCriteria
 */
class RevokeSearchCriteria extends \LogoObjects\Support\Entity
{
}

/**
 * RevokeAnalytics
 */
class RevokeAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
