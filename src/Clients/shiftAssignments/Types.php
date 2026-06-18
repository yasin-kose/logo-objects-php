<?php

declare(strict_types=1);

namespace LogoObjects\Clients\shiftAssignments;

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
 * ShiftAssignments
 */
class ShiftAssignments extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $SOURCE_TYPE = null;
    public ?string $SOURCE_CODE = null;
    public ?string $SHIFT_CODE = null;
    /** @var int|float|null */
    public $SOURCEREF = null;
    /** @var int|float|null */
    public $SHIFTREF = null;
    public ?string $BEGDATE = null;
    /** @var int|float|null */
    public $LINENR = null;
    /** @var int|float|null */
    public $SHIFTTREF = null;
}

/**
 * ShiftAssignmentsQueryOptions
 */
class ShiftAssignmentsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ShiftAssignmentsSortSpec|null */
    public $sort = null;
}

/**
 * ShiftAssignmentsSearchCriteria
 */
class ShiftAssignmentsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $sourceType = null;
    /** @var mixed */
    public $sourceCode = null;
    /** @var mixed */
    public $shiftCode = null;
    /** @var mixed */
    public $sourceref = null;
    /** @var mixed */
    public $shiftref = null;
    /** @var mixed */
    public $begdate = null;
    /** @var mixed */
    public $linenr = null;
    /** @var mixed */
    public $shifttref = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
}

/**
 * ShiftAssignmentsAnalytics
 */
class ShiftAssignmentsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
