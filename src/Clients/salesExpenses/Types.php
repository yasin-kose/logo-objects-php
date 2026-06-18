<?php

declare(strict_types=1);

namespace LogoObjects\Clients\salesExpenses;

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
 * SalesExpenses
 */
class SalesExpenses extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $CARDTYPE = null;
    public ?string $CODE = null;
    public ?string $DESCRIPTION = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    public ?string $FORMULA = null;
    /** @var int|float|null */
    public $ROUND_BASE = null;
    /** @var int|float|null */
    public $VAT_PERC = null;
    /** @var int|float|null */
    public $COUNTER = null;
    public ?string $UNIT = null;
    /** @var int|float|null */
    public $PROD_STATUS = null;
    /** @var int|float|null */
    public $UPDATED = null;
    /** @var int|float|null */
    public $TRCODE = null;
    /** @var int|float|null */
    public $CARDREF = null;
    /** @var int|float|null */
    public $TYP = null;
    public ?string $GL_CODE = null;
    /** @var int|float|null */
    public $ACCOUNTREF = null;
    public ?string $OHP_CODE = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $EXT_ACCESS_FLAGS = null;
    /** @var int|float|null */
    public $STOPPAGE_DISC = null;
    public ?string $UNICODE = null;
    public ?string $UNICODE_DEF = null;
}

/**
 * SalesExpensesQueryOptions
 */
class SalesExpensesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var SalesExpensesSortSpec|null */
    public $sort = null;
}

/**
 * SalesExpensesSearchCriteria
 */
class SalesExpensesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $cardtype = null;
    /** @var mixed */
    public $recordStatus = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $description = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $formula = null;
    /** @var mixed */
    public $roundBase = null;
    /** @var mixed */
    public $vatPerc = null;
    /** @var mixed */
    public $counter = null;
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
    public $unit = null;
    /** @var mixed */
    public $prodStatus = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $updated = null;
    /** @var mixed */
    public $trcode = null;
    /** @var mixed */
    public $cardref = null;
    /** @var mixed */
    public $typ = null;
    /** @var mixed */
    public $glCode = null;
    /** @var mixed */
    public $accountref = null;
    /** @var mixed */
    public $ohpCode = null;
    /** @var mixed */
    public $centerref = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $extAccessFlags = null;
    /** @var mixed */
    public $stoppageDisc = null;
    /** @var mixed */
    public $unicode = null;
    /** @var mixed */
    public $unicodeDef = null;
}

/**
 * SalesExpensesAnalytics
 */
class SalesExpensesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
