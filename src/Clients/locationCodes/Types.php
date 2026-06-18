<?php

declare(strict_types=1);

namespace LogoObjects\Clients\locationCodes;

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
 * LocationCodes
 */
class LocationCodes extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $INVENNR = null;
    public ?string $CODE = null;
    public ?string $NAME = null;
    /** @var int|float|null */
    public $WIDTH = null;
    /** @var int|float|null */
    public $LENGTH = null;
    /** @var int|float|null */
    public $HEIGHT = null;
    /** @var int|float|null */
    public $WIDTHREF = null;
    /** @var int|float|null */
    public $LENGTHREF = null;
    /** @var int|float|null */
    public $HEIGHTREF = null;
    /** @var int|float|null */
    public $MIN_LEVEL = null;
    /** @var int|float|null */
    public $MAX_LEVEL = null;
    /** @var int|float|null */
    public $SHELF_TYPE = null;
    /** @var int|float|null */
    public $CONTENT_TYPE = null;
    /** @var int|float|null */
    public $PRIORITY = null;
    /** @var int|float|null */
    public $USETREF = null;
    /** @var int|float|null */
    public $UOMREF = null;
    /** @var int|float|null */
    public $IS_EURO_PALETTE = null;
    /** @var int|float|null */
    public $WF_STATUS = null;
    public ?string $WIDTH_CODE = null;
    public ?string $LENGTH_CODE = null;
    public ?string $HEIGHT_CODE = null;
    public ?string $USET_CODE = null;
    public ?string $UOM_CODE = null;
}

/**
 * LocationCodesQueryOptions
 */
class LocationCodesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var LocationCodesSortSpec|null */
    public $sort = null;
}

/**
 * LocationCodesSearchCriteria
 */
class LocationCodesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $invennr = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $name = null;
    /** @var mixed */
    public $width = null;
    /** @var mixed */
    public $length = null;
    /** @var mixed */
    public $height = null;
    /** @var mixed */
    public $widthref = null;
    /** @var mixed */
    public $lengthref = null;
    /** @var mixed */
    public $heightref = null;
    /** @var mixed */
    public $minLevel = null;
    /** @var mixed */
    public $maxLevel = null;
    /** @var mixed */
    public $shelfType = null;
    /** @var mixed */
    public $contentType = null;
    /** @var mixed */
    public $priority = null;
    /** @var mixed */
    public $usetref = null;
    /** @var mixed */
    public $uomref = null;
    /** @var mixed */
    public $isEuroPalette = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $wfStatus = null;
    /** @var mixed */
    public $widthCode = null;
    /** @var mixed */
    public $lengthCode = null;
    /** @var mixed */
    public $heightCode = null;
    /** @var mixed */
    public $usetCode = null;
    /** @var mixed */
    public $uomCode = null;
}

/**
 * LocationCodesAnalytics
 */
class LocationCodesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
