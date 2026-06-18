<?php

declare(strict_types=1);

namespace LogoObjects\Clients\transaction;

/**
 * Transaction
 */
class Transaction extends \LogoObjects\Types\BaseEntity
{
}

/**
 * TransactionQueryOptions
 */
class TransactionQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var TransactionSortSpec|null */
    public $sort = null;
}

/**
 * TransactionSearchCriteria
 */
class TransactionSearchCriteria extends \LogoObjects\Support\Entity
{
}

/**
 * TransactionAnalytics
 */
class TransactionAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
