<?php

declare(strict_types=1);

namespace LogoObjects\Clients\postCodes;

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
 * PostCodes
 */
class PostCodes extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $INFO_COUNTRY = null;
    /** @var int|float|null */
    public $INFO_CITY = null;
    public ?string $CODE = null;
    public ?string $COUNTRYCODE = null;
    public ?string $CITYCODE = null;
}

/**
 * PostCodesQueryOptions
 */
class PostCodesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var PostCodesSortSpec|null */
    public $sort = null;
}

/**
 * PostCodesSearchCriteria
 */
class PostCodesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $infoCountry = null;
    /** @var mixed */
    public $infoCity = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $countrycode = null;
    /** @var mixed */
    public $citycode = null;
}

/**
 * PostCodesAnalytics
 */
class PostCodesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
