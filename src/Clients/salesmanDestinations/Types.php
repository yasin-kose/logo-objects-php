<?php

declare(strict_types=1);

namespace LogoObjects\Clients\salesmanDestinations;

/**
 * KeyValueParameter
 */
class KeyValueParameter extends \LogoObjects\Support\Entity
{
    public ?string $Name = null;
    /** @var mixed */
    public $Value = null;
}

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
 * Dbcolumnproperties
 */
class Dbcolumnproperties extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?string $ColumnName = null;
    public ?string $DataType = null;
    public ?string $MaximumCharacterLength = null;
    public ?string $NumericPrecision = null;
    public ?string $NumericPrecisionRadix = null;
    public ?string $NumericScale = null;
    public ?string $DatetimePrecision = null;
    public ?string $IsNullable = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * SalesmanDestinations
 */
class SalesmanDestinations extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $DEFINITION = null;
    /** @var int|float|null */
    public $TYP = null;
    public ?string $BEG_DATE = null;
    public ?string $END_DATE = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    public ?string $ST_CODE = null;
    public ?string $ST_GROUP_CODE = null;
    /** @var int|float|null */
    public $TARGET_SALE_AMOUNT = null;
    /** @var int|float|null */
    public $SALE_AMOUNT_LIMIT = null;
    /** @var int|float|null */
    public $NET_SALE_AMOUNT = null;
    /** @var int|float|null */
    public $SALE_DISCOUNT_LIMIT = null;
    /** @var int|float|null */
    public $SALE_EXPENSE_LIMIT = null;
    public ?string $SALESMAN_CODE = null;
}

/**
 * SalesmanDestinationsQueryOptions
 */
class SalesmanDestinationsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var SalesmanDestinationsSortSpec|null */
    public $sort = null;
}

/**
 * SalesmanDestinationsSearchCriteria
 */
class SalesmanDestinationsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $definition = null;
    /** @var mixed */
    public $typ = null;
    /** @var mixed */
    public $begDate = null;
    /** @var mixed */
    public $endDate = null;
    /** @var mixed */
    public $salesmanref = null;
    /** @var mixed */
    public $stCode = null;
    /** @var mixed */
    public $stGroupCode = null;
    /** @var mixed */
    public $targetSaleAmount = null;
    /** @var mixed */
    public $saleAmountLimit = null;
    /** @var mixed */
    public $netSaleAmount = null;
    /** @var mixed */
    public $saleDiscountLimit = null;
    /** @var mixed */
    public $saleExpenseLimit = null;
    /** @var mixed */
    public $createdBy = null;
    /** @var mixed */
    public $dateCreated = null;
    /** @var mixed */
    public $hourCreated = null;
    /** @var mixed */
    public $minCreated = null;
    /** @var mixed */
    public $secCreated = null;
    /** @var mixed */
    public $modifiedBy = null;
    /** @var mixed */
    public $dateModified = null;
    /** @var mixed */
    public $hourModified = null;
    /** @var mixed */
    public $minModified = null;
    /** @var mixed */
    public $secModified = null;
    /** @var mixed */
    public $salesmanCode = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
}

/**
 * SalesmanDestinationsAnalytics
 */
class SalesmanDestinationsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
