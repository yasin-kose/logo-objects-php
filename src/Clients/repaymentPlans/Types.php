<?php

declare(strict_types=1);

namespace LogoObjects\Clients\repaymentPlans;

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
 * RscollectionrsRepayplanslnxml
 */
class RscollectionrsRepayplanslnxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\repaymentPlans\RsRepayplanslnxml::class],
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
 * RsRepayplanslnxml
 */
class RsRepayplanslnxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $REPAYPLANREF = null;
    /** @var int|float|null */
    public $LINENO = null;
    public ?string $FORMULA = null;
    public ?string $CONDITION = null;
    public ?string $DAY = null;
    public ?string $MONTH = null;
    public ?string $YEAR = null;
    /** @var int|float|null */
    public $RNDVALUE = null;
    /** @var int|float|null */
    public $DISCRATE = null;
    /** @var int|float|null */
    public $POS_COMSN = null;
    /** @var int|float|null */
    public $POINT_COMSN = null;
    /** @var int|float|null */
    public $DUEDIFF_COMSN = null;
    /** @var int|float|null */
    public $CALCTYPE = null;
    public ?string $REPAY_DAY = null;
    public ?string $REPAY_MONTH = null;
    public ?string $FORMULA1 = null;
    public ?string $FORMULA2 = null;
    public ?string $FORMULA3 = null;
}

/**
 * RepaymentPlans
 */
class RepaymentPlans extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $TITLE = null;
    public ?string $BANKACC_CODE = null;
    /** @var int|float|null */
    public $BANKACC_TYPE = null;
    /** @var int|float|null */
    public $BANKACCREF = null;
    public ?string $BEG_DATE = null;
    public ?string $END_DATE = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $WRKDAYS = null;
    /** @var int|float|null */
    public $ACTIVE = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
    /** @var RscollectionrsRepayplanslnxml|null */
    public $LINES = null;
    public ?string $DELLINELIST = null;
    /** @var int|float|null */
    public $UPDATED = null;
    /** @var int|float|null */
    public $EARLY_INTEREST = null;
    /** @var int|float|null */
    public $LATE_INTEREST = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'LINES' => \LogoObjects\Clients\repaymentPlans\RscollectionrsRepayplanslnxml::class,
        ]);
    }
}

/**
 * RepaymentPlansQueryOptions
 */
class RepaymentPlansQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var RepaymentPlansSortSpec|null */
    public $sort = null;
}

/**
 * RepaymentPlansSearchCriteria
 */
class RepaymentPlansSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $title = null;
    /** @var mixed */
    public $bankaccCode = null;
    /** @var mixed */
    public $bankaccType = null;
    /** @var mixed */
    public $bankaccref = null;
    /** @var mixed */
    public $begDate = null;
    /** @var mixed */
    public $endDate = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $wrkdays = null;
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
    public $active = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $wfstatus = null;
    /** @var mixed */
    public $lines = null;
    /** @var mixed */
    public $dellinelist = null;
    /** @var mixed */
    public $updated = null;
    /** @var mixed */
    public $earlyInterest = null;
    /** @var mixed */
    public $lateInterest = null;
}

/**
 * RepaymentPlansAnalytics
 */
class RepaymentPlansAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
