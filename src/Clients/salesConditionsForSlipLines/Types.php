<?php

declare(strict_types=1);

namespace LogoObjects\Clients\salesConditionsForSlipLines;

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
 * SalesConditionsForSlipLines
 */
class SalesConditionsForSlipLines extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $DEFINITION = null;
    /** @var int|float|null */
    public $USE_TYPE = null;
    /** @var int|float|null */
    public $LINE_NO = null;
    /** @var int|float|null */
    public $CARDREF = null;
    /** @var int|float|null */
    public $LINE_TYPE = null;
    /** @var int|float|null */
    public $PRIORITY = null;
    public ?string $BEG_DATE = null;
    public ?string $END_DATE = null;
    public ?string $STCODES = null;
    public ?string $CICODES = null;
    public ?string $PAYCODES = null;
    /** @var int|float|null */
    public $ITEM_TYPE = null;
}

/**
 * SalesConditionsForSlipLinesQueryOptions
 */
class SalesConditionsForSlipLinesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var SalesConditionsForSlipLinesSortSpec|null */
    public $sort = null;
}

/**
 * SalesConditionsForSlipLinesSearchCriteria
 */
class SalesConditionsForSlipLinesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $definition = null;
    /** @var mixed */
    public $useType = null;
    /** @var mixed */
    public $lineNo = null;
    /** @var mixed */
    public $cardref = null;
    /** @var mixed */
    public $lineType = null;
    /** @var mixed */
    public $recordStatus = null;
    /** @var mixed */
    public $priority = null;
    /** @var mixed */
    public $begDate = null;
    /** @var mixed */
    public $endDate = null;
    /** @var mixed */
    public $stcodes = null;
    /** @var mixed */
    public $cicodes = null;
    /** @var mixed */
    public $paycodes = null;
    /** @var mixed */
    public $itemType = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $xmlAttribute = null;
}

/**
 * SalesConditionsForSlipLinesAnalytics
 */
class SalesConditionsForSlipLinesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
