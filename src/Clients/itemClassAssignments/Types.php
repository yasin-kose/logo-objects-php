<?php

declare(strict_types=1);

namespace LogoObjects\Clients\itemClassAssignments;

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
 * ItemClassAssignments
 */
class ItemClassAssignments extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $PARENTREF = null;
    /** @var int|float|null */
    public $CHILDREF = null;
    public ?string $CLASS_CODE = null;
    public ?string $CLASS_NAME = null;
    /** @var int|float|null */
    public $UPLEVEL = null;
    public ?string $DMNT_FLGS = null;
    /** @var int|float|null */
    public $SET_UOM_DMNT = null;
    public ?string $ITEM_CODE = null;
    public ?string $ITEM_NAME = null;
}

/**
 * ItemClassAssignmentsQueryOptions
 */
class ItemClassAssignmentsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ItemClassAssignmentsSortSpec|null */
    public $sort = null;
}

/**
 * ItemClassAssignmentsSearchCriteria
 */
class ItemClassAssignmentsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $parentref = null;
    /** @var mixed */
    public $childref = null;
    /** @var mixed */
    public $classCode = null;
    /** @var mixed */
    public $className = null;
    /** @var mixed */
    public $uplevel = null;
    /** @var mixed */
    public $dmntFlgs = null;
    /** @var mixed */
    public $setUomDmnt = null;
    /** @var mixed */
    public $itemCode = null;
    /** @var mixed */
    public $itemName = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
}

/**
 * ItemClassAssignmentsAnalytics
 */
class ItemClassAssignmentsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
