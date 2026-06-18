<?php

declare(strict_types=1);

namespace LogoObjects\Clients\itemBoms;

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
 * ItemBoms
 */
class ItemBoms extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $ITEMREF = null;
    /** @var int|float|null */
    public $BOMREF = null;
    /** @var int|float|null */
    public $REL_TYPE = null;
    /** @var int|float|null */
    public $FACTORY_NR = null;
    /** @var int|float|null */
    public $PRIORITY = null;
    /** @var int|float|null */
    public $LINE_NR = null;
    /** @var int|float|null */
    public $MAX_QUANTITY = null;
    /** @var int|float|null */
    public $MIN_QUANTITY = null;
    public ?string $BEG_DATE = null;
    public ?string $END_DATE = null;
    /** @var int|float|null */
    public $STD_COST_FLAG = null;
    public ?string $BOM_CODE = null;
    /** @var int|float|null */
    public $BOM_TYPE = null;
    public ?string $BOMDEF = null;
    public ?string $ITEM_CODE = null;
    /** @var int|float|null */
    public $FOR_MRP = null;
    /** @var int|float|null */
    public $STD_COSTFLAG = null;
}

/**
 * ItemBomsQueryOptions
 */
class ItemBomsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ItemBomsSortSpec|null */
    public $sort = null;
}

/**
 * ItemBomsSearchCriteria
 */
class ItemBomsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $itemref = null;
    /** @var mixed */
    public $bomref = null;
    /** @var mixed */
    public $relType = null;
    /** @var mixed */
    public $factoryNr = null;
    /** @var mixed */
    public $priority = null;
    /** @var mixed */
    public $lineNr = null;
    /** @var mixed */
    public $maxQuantity = null;
    /** @var mixed */
    public $minQuantity = null;
    /** @var mixed */
    public $begDate = null;
    /** @var mixed */
    public $endDate = null;
    /** @var mixed */
    public $stdCostFlag = null;
    /** @var mixed */
    public $bomCode = null;
    /** @var mixed */
    public $bomType = null;
    /** @var mixed */
    public $bomdef = null;
    /** @var mixed */
    public $itemCode = null;
    /** @var mixed */
    public $forMrp = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $stdCostflag = null;
}

/**
 * ItemBomsAnalytics
 */
class ItemBomsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
