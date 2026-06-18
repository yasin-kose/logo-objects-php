<?php

declare(strict_types=1);

namespace LogoObjects\Clients\extendedFieldCategories;

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
 * ExtendedFieldCategories
 */
class ExtendedFieldCategories extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $CATEGID = null;
    /** @var int|float|null */
    public $LINENO = null;
    /** @var int|float|null */
    public $TAG = null;
    public ?string $CATDESC = null;
    /** @var int|float|null */
    public $CUSTOM = null;
    /** @var int|float|null */
    public $RECORDID = null;
}

/**
 * ExtendedFieldCategoriesQueryOptions
 */
class ExtendedFieldCategoriesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ExtendedFieldCategoriesSortSpec|null */
    public $sort = null;
}

/**
 * ExtendedFieldCategoriesSearchCriteria
 */
class ExtendedFieldCategoriesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $categid = null;
    /** @var mixed */
    public $lineno = null;
    /** @var mixed */
    public $tag = null;
    /** @var mixed */
    public $catdesc = null;
    /** @var mixed */
    public $custom = null;
    /** @var mixed */
    public $recordid = null;
}

/**
 * ExtendedFieldCategoriesAnalytics
 */
class ExtendedFieldCategoriesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
