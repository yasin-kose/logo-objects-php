<?php

declare(strict_types=1);

namespace LogoObjects\Clients\extendedFieldDefinitions;

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
 * ExtendedFieldDefinitions
 */
class ExtendedFieldDefinitions extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $MODULENR = null;
    /** @var int|float|null */
    public $LEVEL_ = null;
    /** @var int|float|null */
    public $PARENTREF = null;
    /** @var int|float|null */
    public $OWNERREF = null;
    public ?string $TEXTFLDS1 = null;
    public ?string $TEXTFLDS2 = null;
    public ?string $TEXTFLDS3 = null;
    public ?string $TEXTFLDS4 = null;
    public ?string $TEXTFLDS5 = null;
    public ?string $TEXTFLDS6 = null;
    public ?string $TEXTFLDS7 = null;
    public ?string $TEXTFLDS8 = null;
    public ?string $TEXTFLDS9 = null;
    public ?string $TEXTFLDS10 = null;
    public ?string $TEXTFLDS11 = null;
    public ?string $TEXTFLDS12 = null;
    public ?string $TEXTFLDS13 = null;
    public ?string $TEXTFLDS14 = null;
    public ?string $TEXTFLDS15 = null;
    public ?string $TEXTFLDS16 = null;
    public ?string $TEXTFLDS17 = null;
    public ?string $TEXTFLDS18 = null;
    public ?string $TEXTFLDS19 = null;
    public ?string $TEXTFLDS20 = null;
    public ?string $TEXTFLDS21 = null;
    public ?string $TEXTFLDS22 = null;
    public ?string $TEXTFLDS23 = null;
    public ?string $TEXTFLDS24 = null;
    public ?string $TEXTFLDS25 = null;
    public ?string $TEXTFLDS26 = null;
    public ?string $TEXTFLDS27 = null;
    public ?string $TEXTFLDS28 = null;
    public ?string $TEXTFLDS29 = null;
    public ?string $TEXTFLDS30 = null;
    public ?string $TEXTFLDS31 = null;
    public ?string $TEXTFLDS32 = null;
    public ?string $TEXTFLDS33 = null;
    public ?string $TEXTFLDS34 = null;
    public ?string $TEXTFLDS35 = null;
    public ?string $TEXTFLDS36 = null;
    public ?string $TEXTFLDS37 = null;
    public ?string $TEXTFLDS38 = null;
    public ?string $TEXTFLDS39 = null;
    public ?string $TEXTFLDS40 = null;
    public ?string $TEXTFLDS41 = null;
    public ?string $TEXTFLDS42 = null;
    public ?string $TEXTFLDS43 = null;
    public ?string $TEXTFLDS44 = null;
    public ?string $TEXTFLDS45 = null;
    public ?string $TEXTFLDS46 = null;
    public ?string $TEXTFLDS47 = null;
    public ?string $TEXTFLDS48 = null;
    public ?string $TEXTFLDS49 = null;
    public ?string $TEXTFLDS50 = null;
    /** @var int|float|null */
    public $NUMFLDS1 = null;
    /** @var int|float|null */
    public $NUMFLDS2 = null;
    /** @var int|float|null */
    public $NUMFLDS3 = null;
    /** @var int|float|null */
    public $NUMFLDS4 = null;
    /** @var int|float|null */
    public $NUMFLDS5 = null;
    /** @var int|float|null */
    public $NUMFLDS6 = null;
    /** @var int|float|null */
    public $NUMFLDS7 = null;
    /** @var int|float|null */
    public $NUMFLDS8 = null;
    /** @var int|float|null */
    public $NUMFLDS9 = null;
    /** @var int|float|null */
    public $NUMFLDS10 = null;
    /** @var int|float|null */
    public $NUMFLDS11 = null;
    /** @var int|float|null */
    public $NUMFLDS12 = null;
    /** @var int|float|null */
    public $NUMFLDS13 = null;
    /** @var int|float|null */
    public $NUMFLDS14 = null;
    /** @var int|float|null */
    public $NUMFLDS15 = null;
    /** @var int|float|null */
    public $NUMFLDS16 = null;
    /** @var int|float|null */
    public $NUMFLDS17 = null;
    /** @var int|float|null */
    public $NUMFLDS18 = null;
    /** @var int|float|null */
    public $NUMFLDS19 = null;
    /** @var int|float|null */
    public $NUMFLDS20 = null;
    /** @var int|float|null */
    public $NUMFLDS21 = null;
    /** @var int|float|null */
    public $NUMFLDS22 = null;
    /** @var int|float|null */
    public $NUMFLDS23 = null;
    /** @var int|float|null */
    public $NUMFLDS24 = null;
    /** @var int|float|null */
    public $NUMFLDS25 = null;
    /** @var int|float|null */
    public $NUMFLDS26 = null;
    /** @var int|float|null */
    public $NUMFLDS27 = null;
    /** @var int|float|null */
    public $NUMFLDS28 = null;
    /** @var int|float|null */
    public $NUMFLDS29 = null;
    /** @var int|float|null */
    public $NUMFLDS30 = null;
    /** @var int|float|null */
    public $NUMFLDS31 = null;
    /** @var int|float|null */
    public $NUMFLDS32 = null;
    /** @var int|float|null */
    public $NUMFLDS33 = null;
    /** @var int|float|null */
    public $NUMFLDS34 = null;
    /** @var int|float|null */
    public $NUMFLDS35 = null;
    /** @var int|float|null */
    public $NUMFLDS36 = null;
    /** @var int|float|null */
    public $NUMFLDS37 = null;
    /** @var int|float|null */
    public $NUMFLDS38 = null;
    /** @var int|float|null */
    public $NUMFLDS39 = null;
    /** @var int|float|null */
    public $NUMFLDS40 = null;
    /** @var int|float|null */
    public $NUMFLDS41 = null;
    /** @var int|float|null */
    public $NUMFLDS42 = null;
    /** @var int|float|null */
    public $NUMFLDS43 = null;
    /** @var int|float|null */
    public $NUMFLDS44 = null;
    /** @var int|float|null */
    public $NUMFLDS45 = null;
    /** @var int|float|null */
    public $NUMFLDS46 = null;
    /** @var int|float|null */
    public $NUMFLDS47 = null;
    /** @var int|float|null */
    public $NUMFLDS48 = null;
    /** @var int|float|null */
    public $NUMFLDS49 = null;
    /** @var int|float|null */
    public $NUMFLDS50 = null;
}

/**
 * ExtendedFieldDefinitionsQueryOptions
 */
class ExtendedFieldDefinitionsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ExtendedFieldDefinitionsSortSpec|null */
    public $sort = null;
}

/**
 * ExtendedFieldDefinitionsSearchCriteria
 */
class ExtendedFieldDefinitionsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $modulenr = null;
    /** @var mixed */
    public $level_ = null;
    /** @var mixed */
    public $parentref = null;
    /** @var mixed */
    public $ownerref = null;
    /** @var mixed */
    public $textflds1 = null;
    /** @var mixed */
    public $textflds2 = null;
    /** @var mixed */
    public $textflds3 = null;
    /** @var mixed */
    public $textflds4 = null;
    /** @var mixed */
    public $textflds5 = null;
    /** @var mixed */
    public $textflds6 = null;
    /** @var mixed */
    public $textflds7 = null;
    /** @var mixed */
    public $textflds8 = null;
    /** @var mixed */
    public $textflds9 = null;
    /** @var mixed */
    public $textflds10 = null;
    /** @var mixed */
    public $textflds11 = null;
    /** @var mixed */
    public $textflds12 = null;
    /** @var mixed */
    public $textflds13 = null;
    /** @var mixed */
    public $textflds14 = null;
    /** @var mixed */
    public $textflds15 = null;
    /** @var mixed */
    public $textflds16 = null;
    /** @var mixed */
    public $textflds17 = null;
    /** @var mixed */
    public $textflds18 = null;
    /** @var mixed */
    public $textflds19 = null;
    /** @var mixed */
    public $textflds20 = null;
    /** @var mixed */
    public $textflds21 = null;
    /** @var mixed */
    public $textflds22 = null;
    /** @var mixed */
    public $textflds23 = null;
    /** @var mixed */
    public $textflds24 = null;
    /** @var mixed */
    public $textflds25 = null;
    /** @var mixed */
    public $textflds26 = null;
    /** @var mixed */
    public $textflds27 = null;
    /** @var mixed */
    public $textflds28 = null;
    /** @var mixed */
    public $textflds29 = null;
    /** @var mixed */
    public $textflds30 = null;
    /** @var mixed */
    public $textflds31 = null;
    /** @var mixed */
    public $textflds32 = null;
    /** @var mixed */
    public $textflds33 = null;
    /** @var mixed */
    public $textflds34 = null;
    /** @var mixed */
    public $textflds35 = null;
    /** @var mixed */
    public $textflds36 = null;
    /** @var mixed */
    public $textflds37 = null;
    /** @var mixed */
    public $textflds38 = null;
    /** @var mixed */
    public $textflds39 = null;
    /** @var mixed */
    public $textflds40 = null;
    /** @var mixed */
    public $textflds41 = null;
    /** @var mixed */
    public $textflds42 = null;
    /** @var mixed */
    public $textflds43 = null;
    /** @var mixed */
    public $textflds44 = null;
    /** @var mixed */
    public $textflds45 = null;
    /** @var mixed */
    public $textflds46 = null;
    /** @var mixed */
    public $textflds47 = null;
    /** @var mixed */
    public $textflds48 = null;
    /** @var mixed */
    public $textflds49 = null;
    /** @var mixed */
    public $textflds50 = null;
    /** @var mixed */
    public $numflds1 = null;
    /** @var mixed */
    public $numflds2 = null;
    /** @var mixed */
    public $numflds3 = null;
    /** @var mixed */
    public $numflds4 = null;
    /** @var mixed */
    public $numflds5 = null;
    /** @var mixed */
    public $numflds6 = null;
    /** @var mixed */
    public $numflds7 = null;
    /** @var mixed */
    public $numflds8 = null;
    /** @var mixed */
    public $numflds9 = null;
    /** @var mixed */
    public $numflds10 = null;
    /** @var mixed */
    public $numflds11 = null;
    /** @var mixed */
    public $numflds12 = null;
    /** @var mixed */
    public $numflds13 = null;
    /** @var mixed */
    public $numflds14 = null;
    /** @var mixed */
    public $numflds15 = null;
    /** @var mixed */
    public $numflds16 = null;
    /** @var mixed */
    public $numflds17 = null;
    /** @var mixed */
    public $numflds18 = null;
    /** @var mixed */
    public $numflds19 = null;
    /** @var mixed */
    public $numflds20 = null;
    /** @var mixed */
    public $numflds21 = null;
    /** @var mixed */
    public $numflds22 = null;
    /** @var mixed */
    public $numflds23 = null;
    /** @var mixed */
    public $numflds24 = null;
    /** @var mixed */
    public $numflds25 = null;
    /** @var mixed */
    public $numflds26 = null;
    /** @var mixed */
    public $numflds27 = null;
    /** @var mixed */
    public $numflds28 = null;
    /** @var mixed */
    public $numflds29 = null;
    /** @var mixed */
    public $numflds30 = null;
    /** @var mixed */
    public $numflds31 = null;
    /** @var mixed */
    public $numflds32 = null;
    /** @var mixed */
    public $numflds33 = null;
    /** @var mixed */
    public $numflds34 = null;
    /** @var mixed */
    public $numflds35 = null;
    /** @var mixed */
    public $numflds36 = null;
    /** @var mixed */
    public $numflds37 = null;
    /** @var mixed */
    public $numflds38 = null;
    /** @var mixed */
    public $numflds39 = null;
    /** @var mixed */
    public $numflds40 = null;
    /** @var mixed */
    public $numflds41 = null;
    /** @var mixed */
    public $numflds42 = null;
    /** @var mixed */
    public $numflds43 = null;
    /** @var mixed */
    public $numflds44 = null;
    /** @var mixed */
    public $numflds45 = null;
    /** @var mixed */
    public $numflds46 = null;
    /** @var mixed */
    public $numflds47 = null;
    /** @var mixed */
    public $numflds48 = null;
    /** @var mixed */
    public $numflds49 = null;
    /** @var mixed */
    public $numflds50 = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $dataReference = null;
}

/**
 * ExtendedFieldDefinitionsAnalytics
 */
class ExtendedFieldDefinitionsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
