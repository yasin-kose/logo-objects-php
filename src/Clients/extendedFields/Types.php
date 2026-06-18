<?php

declare(strict_types=1);

namespace LogoObjects\Clients\extendedFields;

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
 * ExtendedFields
 */
class ExtendedFields extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $MODULENR = null;
    /** @var int|float|null */
    public $LEVEL_ = null;
    /** @var int|float|null */
    public $NR = null;
    /** @var int|float|null */
    public $TYP = null;
    public ?string $CAPTION = null;
    public ?string $FIRMSTR1 = null;
    public ?string $FIRMSTR2 = null;
    public ?string $FIRMSTR3 = null;
    public ?string $FIRMSTR4 = null;
    public ?string $FIRMSTR5 = null;
    public ?string $FIRMSTRCAP = null;
    public ?string $LINEINFO = null;
}

/**
 * ExtendedFieldsQueryOptions
 */
class ExtendedFieldsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ExtendedFieldsSortSpec|null */
    public $sort = null;
}

/**
 * ExtendedFieldsSearchCriteria
 */
class ExtendedFieldsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $modulenr = null;
    /** @var mixed */
    public $level_ = null;
    /** @var mixed */
    public $nr = null;
    /** @var mixed */
    public $typ = null;
    /** @var mixed */
    public $caption = null;
    /** @var mixed */
    public $firmstr1 = null;
    /** @var mixed */
    public $firmstr2 = null;
    /** @var mixed */
    public $firmstr3 = null;
    /** @var mixed */
    public $firmstr4 = null;
    /** @var mixed */
    public $firmstr5 = null;
    /** @var mixed */
    public $firmstrcap = null;
    /** @var mixed */
    public $lineinfo = null;
}

/**
 * ExtendedFieldsAnalytics
 */
class ExtendedFieldsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
