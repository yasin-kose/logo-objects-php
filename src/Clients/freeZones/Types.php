<?php

declare(strict_types=1);

namespace LogoObjects\Clients\freeZones;

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
 * FreeZones
 */
class FreeZones extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $COUNTRY_NO = null;
    public ?string $CODE = null;
    public ?string $NAME = null;
    public ?string $EDICODE = null;
    public ?string $COUNTRY_CODE = null;
}

/**
 * FreeZonesQueryOptions
 */
class FreeZonesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var FreeZonesSortSpec|null */
    public $sort = null;
}

/**
 * FreeZonesSearchCriteria
 */
class FreeZonesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $countryNo = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $name = null;
    /** @var mixed */
    public $edicode = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $countryCode = null;
}

/**
 * FreeZonesAnalytics
 */
class FreeZonesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
