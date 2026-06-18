<?php

declare(strict_types=1);

namespace LogoObjects\Clients\paymentPlans;

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
 * RscollectionrsPaymtermsxml
 */
class RscollectionrsPaymtermsxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\paymentPlans\RsPaymtermsxml::class],
        ]);
    }
}

/**
 * RscollectionrsDiscpaylnxml
 */
class RscollectionrsDiscpaylnxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\paymentPlans\RsDiscpaylnxml::class],
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
 * RsPaymtermsxml
 */
class RsPaymtermsxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $PAYPLANREF = null;
    /** @var int|float|null */
    public $LINENO = null;
    /** @var int|float|null */
    public $AFTER_DAYS = null;
    public ?string $FORMULA = null;
    public ?string $CONDITION = null;
    public ?string $DAY = null;
    public ?string $MOUNTH = null;
    public ?string $YEAR = null;
    /** @var int|float|null */
    public $ROUND_BASE = null;
    public ?string $ABSOLUTE_DATE = null;
    /** @var int|float|null */
    public $DATE_SELECTOR = null;
    /** @var int|float|null */
    public $DISC_RATE = null;
    /** @var RscollectionrsDiscpaylnxml|null */
    public $DISCLIST = null;
    public ?string $DISCDELLIST = null;
    /** @var int|float|null */
    public $PAYMENT_TYPE = null;
    /** @var int|float|null */
    public $BANKACCREF = null;
    /** @var int|float|null */
    public $REPAYDEFREF = null;
    public ?string $BANKACC_CODE = null;
    public ?string $REPAYPLAN_CODE = null;
    /** @var int|float|null */
    public $TR_CURR = null;
    public ?string $GLOBAL_CODE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DISCLIST' => \LogoObjects\Clients\paymentPlans\RscollectionrsDiscpaylnxml::class,
        ]);
    }
}

/**
 * RsDiscpaylnxml
 */
class RsDiscpaylnxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $PAYPLANREF = null;
    /** @var int|float|null */
    public $PAYLINEREF = null;
    public ?string $DAY = null;
    /** @var int|float|null */
    public $DISCRATE = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
}

/**
 * PaymentPlans
 */
class PaymentPlans extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $DESCRIPTION = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $EARLY_INTRATE = null;
    /** @var int|float|null */
    public $LATE_INTRATE = null;
    /** @var int|float|null */
    public $COUNTER = null;
    /** @var int|float|null */
    public $WORK_DAYS = null;
    /** @var RscollectionrsPaymtermsxml|null */
    public $PAYMENT_TERMS = null;
    public ?string $XBUFS = null;
    public ?string $PP_GROUP_CODE = null;
    /** @var int|float|null */
    public $BANKACCREF = null;
    public ?string $CRDCARD_CODE = null;
    /** @var int|float|null */
    public $PP_GROUP_REF = null;
    public ?string $GLOBAL_CODE = null;
    /** @var int|float|null */
    public $SEPERATE_DAYS = null;
    /** @var int|float|null */
    public $LAST_DAY_MONTH = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'PAYMENT_TERMS' => \LogoObjects\Clients\paymentPlans\RscollectionrsPaymtermsxml::class,
        ]);
    }
}

/**
 * PaymentPlansQueryOptions
 */
class PaymentPlansQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var PaymentPlansSortSpec|null */
    public $sort = null;
}

/**
 * PaymentPlansSearchCriteria
 */
class PaymentPlansSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
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
    public $earlyIntrate = null;
    /** @var mixed */
    public $lateIntrate = null;
    /** @var mixed */
    public $counter = null;
    /** @var mixed */
    public $workDays = null;
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
    public $dataReference = null;
    /** @var mixed */
    public $paymentTerms = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $ppGroupCode = null;
    /** @var mixed */
    public $bankaccref = null;
    /** @var mixed */
    public $crdcardCode = null;
    /** @var mixed */
    public $ppGroupRef = null;
    /** @var mixed */
    public $globalCode = null;
    /** @var mixed */
    public $seperateDays = null;
    /** @var mixed */
    public $lastDayMonth = null;
}

/**
 * PaymentPlansAnalytics
 */
class PaymentPlansAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
