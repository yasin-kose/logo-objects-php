<?php

declare(strict_types=1);

namespace LogoObjects\Clients\exportCredits;

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
 * RscollectionrsEximcreditlinexm
 */
class RscollectionrsEximcreditlinexm extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\exportCredits\RsEximcreditlinexm::class],
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
 * RsEximcreditlinexm
 */
class RsEximcreditlinexm extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $EXCREDIT_REF = null;
    public ?string $GTIPCODE = null;
    /** @var int|float|null */
    public $UNITSETREF = null;
    /** @var int|float|null */
    public $UOM_REF = null;
    /** @var int|float|null */
    public $AMOUNT = null;
    /** @var int|float|null */
    public $TRCURR = null;
    /** @var int|float|null */
    public $TRTOTAL = null;
    /** @var int|float|null */
    public $TRRATE = null;
    /** @var int|float|null */
    public $REPORT_RATE = null;
    /** @var int|float|null */
    public $LINENO = null;
    public ?string $UNIT_SET_CODE = null;
    public ?string $UNIT_CODE = null;
}

/**
 * ExportCredits
 */
class ExportCredits extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $NAME = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $CREDIT_TYPE = null;
    public ?string $BEGIN_DATE = null;
    public ?string $END_DATE = null;
    /** @var int|float|null */
    public $TR_CURRENCY = null;
    /** @var int|float|null */
    public $TR_TOTAL = null;
    /** @var int|float|null */
    public $TR_RATE = null;
    /** @var int|float|null */
    public $REPORT_RATE = null;
    /** @var int|float|null */
    public $STATUS = null;
    /** @var int|float|null */
    public $INTEREST_RATE = null;
    /** @var int|float|null */
    public $INTEREST_TOTAL = null;
    /** @var int|float|null */
    public $BANK_REF = null;
    public ?string $BANK_ACCOUNT = null;
    /** @var int|float|null */
    public $BANKACCREF = null;
    /** @var RscollectionrsEximcreditlinexm|null */
    public $LINES = null;
    public ?string $DELLIST = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'LINES' => \LogoObjects\Clients\exportCredits\RscollectionrsEximcreditlinexm::class,
        ]);
    }
}

/**
 * ExportCreditsQueryOptions
 */
class ExportCreditsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ExportCreditsSortSpec|null */
    public $sort = null;
}

/**
 * ExportCreditsSearchCriteria
 */
class ExportCreditsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $name = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $creditType = null;
    /** @var mixed */
    public $beginDate = null;
    /** @var mixed */
    public $endDate = null;
    /** @var mixed */
    public $trCurrency = null;
    /** @var mixed */
    public $trTotal = null;
    /** @var mixed */
    public $trRate = null;
    /** @var mixed */
    public $reportRate = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
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
    public $status = null;
    /** @var mixed */
    public $interestRate = null;
    /** @var mixed */
    public $interestTotal = null;
    /** @var mixed */
    public $textinc = null;
    /** @var mixed */
    public $bankRef = null;
    /** @var mixed */
    public $bankAccount = null;
    /** @var mixed */
    public $bankaccref = null;
    /** @var mixed */
    public $lines = null;
    /** @var mixed */
    public $dellist = null;
}

/**
 * ExportCreditsAnalytics
 */
class ExportCreditsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
