<?php

declare(strict_types=1);

namespace LogoObjects\Clients\vehicles;

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
 * Vehicles
 */
class Vehicles extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $DEFINITION = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    public ?string $PLAQUE = null;
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
    public $SCORE = null;
    public ?string $USER1 = null;
    public ?string $USER2 = null;
    /** @var int|float|null */
    public $ACTIVE = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
    public ?string $WIDTHCODE = null;
    public ?string $LENGTHCODE = null;
    public ?string $HEIGHTCODE = null;
    public ?string $AREACODE = null;
    public ?string $VOLUMECODE = null;
    public ?string $WEIGHTCODE = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $UNIT_COST = null;
    public ?string $UNIT_COST_CODE = null;
    /** @var int|float|null */
    public $WAITING_PROCE = null;
    /** @var int|float|null */
    public $FIXED_PRICE = null;
    /** @var int|float|null */
    public $MINIMAL_PRICE = null;
    public ?string $ITEM_AUXIL_CODE1 = null;
    public ?string $ITEM_AUXIL_CODE2 = null;
    public ?string $ITEM_AUXIL_CODE3 = null;
    public ?string $ITEM_AUXIL_CODE4 = null;
    public ?string $ITEM_AUXIL_CODE5 = null;
}

/**
 * VehiclesQueryOptions
 */
class VehiclesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var VehiclesSortSpec|null */
    public $sort = null;
}

/**
 * VehiclesSearchCriteria
 */
class VehiclesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $definition = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $plaque = null;
    /** @var mixed */
    public $width = null;
    /** @var mixed */
    public $length = null;
    /** @var mixed */
    public $height = null;
    /** @var mixed */
    public $area = null;
    /** @var mixed */
    public $volume = null;
    /** @var mixed */
    public $weight = null;
    /** @var mixed */
    public $widthref = null;
    /** @var mixed */
    public $lengthref = null;
    /** @var mixed */
    public $heightref = null;
    /** @var mixed */
    public $arearef = null;
    /** @var mixed */
    public $volumeref = null;
    /** @var mixed */
    public $weightref = null;
    /** @var mixed */
    public $score = null;
    /** @var mixed */
    public $user1 = null;
    /** @var mixed */
    public $user2 = null;
    /** @var mixed */
    public $active = null;
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
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $textinc = null;
    /** @var mixed */
    public $wfstatus = null;
    /** @var mixed */
    public $widthcode = null;
    /** @var mixed */
    public $lengthcode = null;
    /** @var mixed */
    public $heightcode = null;
    /** @var mixed */
    public $areacode = null;
    /** @var mixed */
    public $volumecode = null;
    /** @var mixed */
    public $weightcode = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $unitCost = null;
    /** @var mixed */
    public $unitCostCode = null;
    /** @var mixed */
    public $waitingProce = null;
    /** @var mixed */
    public $fixedPrice = null;
    /** @var mixed */
    public $minimalPrice = null;
    /** @var mixed */
    public $itemAuxilCode1 = null;
    /** @var mixed */
    public $itemAuxilCode2 = null;
    /** @var mixed */
    public $itemAuxilCode3 = null;
    /** @var mixed */
    public $itemAuxilCode4 = null;
    /** @var mixed */
    public $itemAuxilCode5 = null;
}

/**
 * VehiclesAnalytics
 */
class VehiclesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
