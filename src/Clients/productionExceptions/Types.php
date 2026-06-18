<?php

declare(strict_types=1);

namespace LogoObjects\Clients\productionExceptions;

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
 * ProductionExceptions
 */
class ProductionExceptions extends \LogoObjects\Types\BaseEntity
{
    public ?string $BEG_DATE = null;
    public ?string $END_DATE = null;
    /** @var int|float|null */
    public $BEG_TIME = null;
    /** @var int|float|null */
    public $END_TIME = null;
    /** @var int|float|null */
    public $WORKING_DAY = null;
    public ?string $LINE_EXP = null;
    /** @var int|float|null */
    public $SOURCE_TYPE = null;
    /** @var int|float|null */
    public $SOURCEREF = null;
    /** @var int|float|null */
    public $LINE_NO = null;
    /** @var int|float|null */
    public $COST_FACTOR = null;
    public ?string $SOURCE_CODE = null;
}

/**
 * ProductionExceptionsQueryOptions
 */
class ProductionExceptionsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ProductionExceptionsSortSpec|null */
    public $sort = null;
}

/**
 * ProductionExceptionsSearchCriteria
 */
class ProductionExceptionsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $begDate = null;
    /** @var mixed */
    public $endDate = null;
    /** @var mixed */
    public $begTime = null;
    /** @var mixed */
    public $endTime = null;
    /** @var mixed */
    public $workingDay = null;
    /** @var mixed */
    public $lineExp = null;
    /** @var mixed */
    public $sourceType = null;
    /** @var mixed */
    public $sourceref = null;
    /** @var mixed */
    public $lineNo = null;
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
    public $costFactor = null;
    /** @var mixed */
    public $sourceCode = null;
    /** @var mixed */
    public $xmlAttribute = null;
}

/**
 * ProductionExceptionsAnalytics
 */
class ProductionExceptionsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
