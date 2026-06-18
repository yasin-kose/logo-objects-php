<?php

declare(strict_types=1);

namespace LogoObjects\Clients\itemAlternatives;

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
 * ItemAlternatives
 */
class ItemAlternatives extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $MAINITEMREF = null;
    /** @var int|float|null */
    public $SUBITEMREF = null;
    /** @var int|float|null */
    public $LINE_NO = null;
    /** @var int|float|null */
    public $PRIORITY = null;
    /** @var int|float|null */
    public $CONV_FACT1 = null;
    /** @var int|float|null */
    public $CONV_FACT2 = null;
    /** @var int|float|null */
    public $MAX_QUANTITY = null;
    /** @var int|float|null */
    public $MIN_QUANTITY = null;
    public ?string $BEG_DATE = null;
    public ?string $END_DATE = null;
    public ?string $SUBS_CODE = null;
    public ?string $MAIN_CODE = null;
    /** @var int|float|null */
    public $MAINVRNTREF = null;
    /** @var int|float|null */
    public $SUBVRNTREF = null;
    public ?string $MAIN_VRNTCODE = null;
    public ?string $SUBS_VRNTCODE = null;
}

/**
 * ItemAlternativesQueryOptions
 */
class ItemAlternativesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ItemAlternativesSortSpec|null */
    public $sort = null;
}

/**
 * ItemAlternativesSearchCriteria
 */
class ItemAlternativesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $mainitemref = null;
    /** @var mixed */
    public $subitemref = null;
    /** @var mixed */
    public $lineNo = null;
    /** @var mixed */
    public $priority = null;
    /** @var mixed */
    public $convFact1 = null;
    /** @var mixed */
    public $convFact2 = null;
    /** @var mixed */
    public $maxQuantity = null;
    /** @var mixed */
    public $minQuantity = null;
    /** @var mixed */
    public $begDate = null;
    /** @var mixed */
    public $endDate = null;
    /** @var mixed */
    public $subsCode = null;
    /** @var mixed */
    public $mainCode = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $mainvrntref = null;
    /** @var mixed */
    public $subvrntref = null;
    /** @var mixed */
    public $mainVrntcode = null;
    /** @var mixed */
    public $subsVrntcode = null;
}

/**
 * ItemAlternativesAnalytics
 */
class ItemAlternativesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
