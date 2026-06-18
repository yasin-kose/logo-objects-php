<?php

declare(strict_types=1);

namespace LogoObjects\Clients\QCCriteriaAssignments;

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
 * Qccriteriaassignments
 */
class Qccriteriaassignments extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $SETREF = null;
    /** @var int|float|null */
    public $LINEREF = null;
    public ?string $IMPORTANCE = null;
    /** @var int|float|null */
    public $FREQUENCY = null;
    /** @var int|float|null */
    public $COUNTER = null;
    /** @var int|float|null */
    public $SAMPLESIZE = null;
    /** @var int|float|null */
    public $NOMVAL = null;
    /** @var int|float|null */
    public $MINVAL = null;
    /** @var int|float|null */
    public $MINTOL = null;
    /** @var int|float|null */
    public $MAXVAL = null;
    /** @var int|float|null */
    public $PLUSTOL = null;
    /** @var int|float|null */
    public $INSPPOINT = null;
    /** @var int|float|null */
    public $INSPFICHES1 = null;
    /** @var int|float|null */
    public $INSPFICHES2 = null;
    /** @var int|float|null */
    public $INSPFICHES3 = null;
    /** @var int|float|null */
    public $ASGNREF = null;
    /** @var int|float|null */
    public $OPITEMREF = null;
    /** @var int|float|null */
    public $ASGNTYPE = null;
    /** @var int|float|null */
    public $VALREF = null;
    /** @var int|float|null */
    public $LINENO = null;
    /** @var int|float|null */
    public $REVISIONNO = null;
    /** @var int|float|null */
    public $CONFORMRATE = null;
    public ?string $TOOLCODE = null;
    /** @var int|float|null */
    public $CONTROLLER = null;
    /** @var int|float|null */
    public $TOOLREF = null;
    /** @var int|float|null */
    public $ORGREVNO = null;
    /** @var int|float|null */
    public $REVSITEID = null;
    /** @var int|float|null */
    public $IMPORTANCEVAL = null;
    public ?string $QCODE = null;
    public ?string $LCODE = null;
    public ?string $ASGNCODE = null;
    public ?string $IOCODE = null;
    public ?string $VCODE = null;
    public ?string $CCODE = null;
    /** @var int|float|null */
    public $UPDATE_CHILD = null;
}

/**
 * QccriteriaassignmentsQueryOptions
 */
class QccriteriaassignmentsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var QccriteriaassignmentsSortSpec|null */
    public $sort = null;
}

/**
 * QccriteriaassignmentsSearchCriteria
 */
class QccriteriaassignmentsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $setref = null;
    /** @var mixed */
    public $lineref = null;
    /** @var mixed */
    public $importance = null;
    /** @var mixed */
    public $frequency = null;
    /** @var mixed */
    public $counter = null;
    /** @var mixed */
    public $samplesize = null;
    /** @var mixed */
    public $nomval = null;
    /** @var mixed */
    public $minval = null;
    /** @var mixed */
    public $mintol = null;
    /** @var mixed */
    public $maxval = null;
    /** @var mixed */
    public $plustol = null;
    /** @var mixed */
    public $insppoint = null;
    /** @var mixed */
    public $inspfiches1 = null;
    /** @var mixed */
    public $inspfiches2 = null;
    /** @var mixed */
    public $inspfiches3 = null;
    /** @var mixed */
    public $asgnref = null;
    /** @var mixed */
    public $opitemref = null;
    /** @var mixed */
    public $asgntype = null;
    /** @var mixed */
    public $valref = null;
    /** @var mixed */
    public $lineno = null;
    /** @var mixed */
    public $revisionno = null;
    /** @var mixed */
    public $conformrate = null;
    /** @var mixed */
    public $toolcode = null;
    /** @var mixed */
    public $controller = null;
    /** @var mixed */
    public $toolref = null;
    /** @var mixed */
    public $orgrevno = null;
    /** @var mixed */
    public $revsiteid = null;
    /** @var mixed */
    public $importanceval = null;
    /** @var mixed */
    public $qcode = null;
    /** @var mixed */
    public $lcode = null;
    /** @var mixed */
    public $asgncode = null;
    /** @var mixed */
    public $iocode = null;
    /** @var mixed */
    public $vcode = null;
    /** @var mixed */
    public $ccode = null;
    /** @var mixed */
    public $updateChild = null;
}

/**
 * QccriteriaassignmentsAnalytics
 */
class QccriteriaassignmentsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
