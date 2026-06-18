<?php

declare(strict_types=1);

namespace LogoObjects\Clients\districts;

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
 * Districts
 */
class Districts extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $INFO_TOWNNR = null;
    public ?string $CODE = null;
    public ?string $NAME = null;
    /** @var int|float|null */
    public $CITYNR = null;
    /** @var int|float|null */
    public $CNTRNR = null;
    public ?string $COUNTRYCODE = null;
    public ?string $CITYCODE = null;
    public ?string $TOWNCODE = null;
    public ?string $POSTCODE = null;
}

/**
 * DistrictsQueryOptions
 */
class DistrictsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var DistrictsSortSpec|null */
    public $sort = null;
}

/**
 * DistrictsSearchCriteria
 */
class DistrictsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $infoTownnr = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $name = null;
    /** @var mixed */
    public $citynr = null;
    /** @var mixed */
    public $cntrnr = null;
    /** @var mixed */
    public $countrycode = null;
    /** @var mixed */
    public $citycode = null;
    /** @var mixed */
    public $towncode = null;
    /** @var mixed */
    public $postcode = null;
}

/**
 * DistrictsAnalytics
 */
class DistrictsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
