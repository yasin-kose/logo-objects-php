<?php

declare(strict_types=1);

namespace LogoObjects\Clients\productionLines;

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
 * ProductionLines
 */
class ProductionLines extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $ACTIVE = null;
    public ?string $CODE = null;
    public ?string $NAME = null;
    public ?string $SPECODE = null;
    public ?string $CYPHCODE = null;
    /** @var int|float|null */
    public $FACTORY_NO = null;
    /** @var int|float|null */
    public $FACTORY_DIV = null;
    /** @var int|float|null */
    public $DAILYCAPACHRS = null;
    /** @var int|float|null */
    public $MAXCAPACHRS = null;
    /** @var int|float|null */
    public $MINCAPACHRS = null;
    /** @var int|float|null */
    public $WF_STATUS = null;
}

/**
 * ProductionLinesQueryOptions
 */
class ProductionLinesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ProductionLinesSortSpec|null */
    public $sort = null;
}

/**
 * ProductionLinesSearchCriteria
 */
class ProductionLinesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $active = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $name = null;
    /** @var mixed */
    public $specode = null;
    /** @var mixed */
    public $cyphcode = null;
    /** @var mixed */
    public $factoryNo = null;
    /** @var mixed */
    public $factoryDiv = null;
    /** @var mixed */
    public $dailycapachrs = null;
    /** @var mixed */
    public $maxcapachrs = null;
    /** @var mixed */
    public $mincapachrs = null;
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
    public $wfStatus = null;
}

/**
 * ProductionLinesAnalytics
 */
class ProductionLinesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
