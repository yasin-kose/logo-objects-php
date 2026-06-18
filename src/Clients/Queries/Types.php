<?php

declare(strict_types=1);

namespace LogoObjects\Clients\Queries;

/**
 * ResultData
 */
class ResultData extends \LogoObjects\Support\Entity
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
    /** @var mixed */
    public $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'first' => \LogoObjects\Types\Meta::class,
            'next' => \LogoObjects\Types\Meta::class,
            'previous' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * Queries
 */
class Queries extends \LogoObjects\Types\BaseEntity
{
}

/**
 * QueriesQueryOptions
 */
class QueriesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var QueriesSortSpec|null */
    public $sort = null;
}

/**
 * QueriesSearchCriteria
 */
class QueriesSearchCriteria extends \LogoObjects\Support\Entity
{
}

/**
 * QueriesAnalytics
 */
class QueriesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
