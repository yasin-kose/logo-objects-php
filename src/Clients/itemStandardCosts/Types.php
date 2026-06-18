<?php

declare(strict_types=1);

namespace LogoObjects\Clients\itemStandardCosts;

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
 * ItemStandardCosts
 */
class ItemStandardCosts extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $CARDTYPE = null;
    /** @var int|float|null */
    public $CARDREF = null;
    /** @var int|float|null */
    public $PERIODREF = null;
    /** @var int|float|null */
    public $FACTORYNR = null;
    /** @var int|float|null */
    public $UNITCOST = null;
    /** @var int|float|null */
    public $REPUNITCOST = null;
    /** @var int|float|null */
    public $TRUNITCOST = null;
    /** @var int|float|null */
    public $TRCURR = null;
    /** @var int|float|null */
    public $TRRATE = null;
    /** @var int|float|null */
    public $REPORTRATE = null;
    /** @var int|float|null */
    public $LINENO = null;
    /** @var int|float|null */
    public $LOGICALREF = null;
    public ?string $PERIODCODE = null;
    public ?string $PERIODNAME = null;
    public ?string $FACTNAME = null;
    public ?string $CARD_CODE = null;
}

/**
 * ItemStandardCostsQueryOptions
 */
class ItemStandardCostsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ItemStandardCostsSortSpec|null */
    public $sort = null;
}

/**
 * ItemStandardCostsSearchCriteria
 */
class ItemStandardCostsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $cardtype = null;
    /** @var mixed */
    public $cardref = null;
    /** @var mixed */
    public $periodref = null;
    /** @var mixed */
    public $factorynr = null;
    /** @var mixed */
    public $unitcost = null;
    /** @var mixed */
    public $repunitcost = null;
    /** @var mixed */
    public $trunitcost = null;
    /** @var mixed */
    public $trcurr = null;
    /** @var mixed */
    public $trrate = null;
    /** @var mixed */
    public $reportrate = null;
    /** @var mixed */
    public $lineno = null;
    /** @var mixed */
    public $logicalref = null;
    /** @var mixed */
    public $periodcode = null;
    /** @var mixed */
    public $periodname = null;
    /** @var mixed */
    public $factname = null;
    /** @var mixed */
    public $cardCode = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
}

/**
 * ItemStandardCostsAnalytics
 */
class ItemStandardCostsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
