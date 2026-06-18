<?php

declare(strict_types=1);

namespace LogoObjects\Clients\workstationCosts;

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
 * WorkstationCosts
 */
class WorkstationCosts extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $RESTYPE = null;
    /** @var int|float|null */
    public $RESREF = null;
    public ?string $BEGDATE = null;
    /** @var int|float|null */
    public $UNITREF = null;
    /** @var int|float|null */
    public $HOURLY_STD_COST = null;
    /** @var int|float|null */
    public $HOURLY_STDRP_COST = null;
    /** @var int|float|null */
    public $APPROVED = null;
    public ?string $WS_CODE = null;
    public ?string $WS_NAME = null;
    /** @var int|float|null */
    public $UPDATED = null;
}

/**
 * WorkstationCostsQueryOptions
 */
class WorkstationCostsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var WorkstationCostsSortSpec|null */
    public $sort = null;
}

/**
 * WorkstationCostsSearchCriteria
 */
class WorkstationCostsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $restype = null;
    /** @var mixed */
    public $resref = null;
    /** @var mixed */
    public $begdate = null;
    /** @var mixed */
    public $unitref = null;
    /** @var mixed */
    public $hourlyStdCost = null;
    /** @var mixed */
    public $hourlyStdrpCost = null;
    /** @var mixed */
    public $approved = null;
    /** @var mixed */
    public $recordStatus = null;
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
    public $wsCode = null;
    /** @var mixed */
    public $wsName = null;
    /** @var mixed */
    public $updated = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
}

/**
 * WorkstationCostsAnalytics
 */
class WorkstationCostsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
