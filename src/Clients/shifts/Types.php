<?php

declare(strict_types=1);

namespace LogoObjects\Clients\shifts;

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
 * RscollectionrsShiftlines
 */
class RscollectionrsShiftlines extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\shifts\RsShiftlines::class],
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
 * RsShiftlines
 */
class RsShiftlines extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $SHIFTREF = null;
    /** @var int|float|null */
    public $BEG_TIME = null;
    /** @var int|float|null */
    public $END_TIME = null;
    /** @var int|float|null */
    public $UPDATED = null;
    public ?string $FLDALS = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $COST_FACTOR = null;
}

/**
 * Shifts
 */
class Shifts extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $NAME = null;
    /** @var int|float|null */
    public $TYPE = null;
    public ?string $SPECODE = null;
    public ?string $CYPHCODE = null;
    /** @var int|float|null */
    public $UPDATED = null;
    /** @var RscollectionrsShiftlines|null */
    public $SHIFT_LINES = null;
    public ?string $DELLIST = null;
    public ?string $FLDALS = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $COST_FACTOR = null;
    /** @var int|float|null */
    public $WHOLE_DAY = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'SHIFT_LINES' => \LogoObjects\Clients\shifts\RscollectionrsShiftlines::class,
        ]);
    }
}

/**
 * ShiftsQueryOptions
 */
class ShiftsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ShiftsSortSpec|null */
    public $sort = null;
}

/**
 * ShiftsSearchCriteria
 */
class ShiftsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $name = null;
    /** @var mixed */
    public $type = null;
    /** @var mixed */
    public $recordStatus = null;
    /** @var mixed */
    public $specode = null;
    /** @var mixed */
    public $cyphcode = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $dataReference = null;
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
    public $textinc = null;
    /** @var mixed */
    public $updated = null;
    /** @var mixed */
    public $shiftLines = null;
    /** @var mixed */
    public $dellist = null;
    /** @var mixed */
    public $fldals = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $textchg = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $costFactor = null;
    /** @var mixed */
    public $wholeDay = null;
}

/**
 * ShiftsAnalytics
 */
class ShiftsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
