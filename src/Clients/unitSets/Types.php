<?php

declare(strict_types=1);

namespace LogoObjects\Clients\unitSets;

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
 * RscollectionrsUnitsetlinexml
 */
class RscollectionrsUnitsetlinexml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\unitSets\RsUnitsetlinexml::class],
        ]);
    }
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
 * RsUnitsetlinexml
 */
class RsUnitsetlinexml extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $NAME = null;
    /** @var int|float|null */
    public $UNITSETREF = null;
    /** @var int|float|null */
    public $UNIT_ORDER = null;
    /** @var int|float|null */
    public $MAIN_UNIT = null;
    /** @var int|float|null */
    public $CONV_FACT1 = null;
    /** @var int|float|null */
    public $CONV_FACT2 = null;
    /** @var int|float|null */
    public $WIDTH = null;
    /** @var int|float|null */
    public $LENGTH = null;
    /** @var int|float|null */
    public $HEIGHT = null;
    /** @var int|float|null */
    public $AREA = null;
    /** @var int|float|null */
    public $VOLUME = null;
    /** @var int|float|null */
    public $WEIGHT = null;
    /** @var int|float|null */
    public $WIDTHREF = null;
    /** @var int|float|null */
    public $LENGTHREF = null;
    /** @var int|float|null */
    public $HEIGHTREF = null;
    /** @var int|float|null */
    public $AREAREF = null;
    /** @var int|float|null */
    public $VOLUMEREF = null;
    /** @var int|float|null */
    public $WEIGHTREF = null;
    /** @var int|float|null */
    public $DIVISIBLE = null;
    public ?string $WIDTH_CODE = null;
    public ?string $LENGTH_CODE = null;
    public ?string $HEIGHT_CODE = null;
    public ?string $AREA_CODE = null;
    public ?string $VOLUME_CODE = null;
    public ?string $WEIGHT_CODE = null;
    public ?string $GLOBAL_CODE = null;
}

/**
 * UnitSets
 */
class UnitSets extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $DESCRIPTION = null;
    /** @var int|float|null */
    public $TYPE = null;
    /** @var int|float|null */
    public $ITEM_SPECIFIC = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $WF_STATUS = null;
    /** @var RscollectionrsUnitsetlinexml|null */
    public $UNITS = null;
    public ?string $DELLINELIST = null;
    public ?string $MAINUNITCODE = null;
    public ?string $XBUFS = null;
    public ?string $GUID = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'UNITS' => \LogoObjects\Clients\unitSets\RscollectionrsUnitsetlinexml::class,
        ]);
    }
}

/**
 * UnitSetsQueryOptions
 */
class UnitSetsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var UnitSetsSortSpec|null */
    public $sort = null;
}

/**
 * UnitSetsSearchCriteria
 */
class UnitSetsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $description = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $type = null;
    /** @var mixed */
    public $itemSpecific = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $createdBy = null;
    /** @var mixed */
    public $dateCreated = null;
    /** @var mixed */
    public $hourCreated = null;
    /** @var mixed */
    public $minCreated = null;
    /** @var mixed */
    public $secCreated = null;
    /** @var mixed */
    public $modifiedBy = null;
    /** @var mixed */
    public $dateModified = null;
    /** @var mixed */
    public $hourModified = null;
    /** @var mixed */
    public $minModified = null;
    /** @var mixed */
    public $secModified = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $wfStatus = null;
    /** @var mixed */
    public $units = null;
    /** @var mixed */
    public $dellinelist = null;
    /** @var mixed */
    public $mainunitcode = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $guid = null;
}

/**
 * UnitSetsAnalytics
 */
class UnitSetsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
