<?php

declare(strict_types=1);

namespace LogoObjects\Clients\bankCredits;

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
 * RscollectionrsBankcrepayxml
 */
class RscollectionrsBankcrepayxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\bankCredits\RsBankcrepayxml::class],
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
 * RsBankcrepayxml
 */
class RsBankcrepayxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $CREDITREF = null;
    /** @var int|float|null */
    public $PER_NR = null;
    /** @var int|float|null */
    public $TRANS_TYPE = null;
    /** @var int|float|null */
    public $PARENT_REF = null;
    public ?string $DUE_DATE = null;
    public ?string $OPR_DATE = null;
    /** @var int|float|null */
    public $LINE_NR = null;
    /** @var int|float|null */
    public $TOTAL = null;
    /** @var int|float|null */
    public $INT_TOTAL = null;
    /** @var int|float|null */
    public $BSMV_TOTAL = null;
    /** @var int|float|null */
    public $KKDF_TOTAL = null;
    /** @var int|float|null */
    public $BANK_FICHE_REF = null;
    /** @var int|float|null */
    public $MODIFIED = null;
    /** @var int|float|null */
    public $BNACCREF = null;
    /** @var int|float|null */
    public $TR_RATE_CR = null;
    /** @var int|float|null */
    public $TR_RATE_ACC = null;
    /** @var int|float|null */
    public $EARLY_INT_RATE = null;
    /** @var int|float|null */
    public $EARLY_INT_TOT = null;
    /** @var int|float|null */
    public $LATE_INT_RATE = null;
    /** @var int|float|null */
    public $LATE_INT_TOT = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
    public ?string $LN_ACC_CODE = null;
    public ?string $LN_BN_CR_CODE = null;
    /** @var int|float|null */
    public $TR_CURR_ACC = null;
    /** @var int|float|null */
    public $TR_CURR_CR = null;
    public ?string $BANK_CREDIT_CODE = null;
    public ?string $TRANS_LINE_EXP = null;
    public ?string $TRANS_AUXIL_CODE = null;
    /** @var int|float|null */
    public $INTEREST_RATE = null;
    /** @var int|float|null */
    public $BSMV_RATE = null;
    /** @var int|float|null */
    public $STRUCTED = null;
    /** @var int|float|null */
    public $BNCRPARENTREF = null;
    public ?string $BANK_CREDIT_PARENT_CODE = null;
}

/**
 * BankCredits
 */
class BankCredits extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $NAME = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $CRCARD_TYPE = null;
    /** @var int|float|null */
    public $CREDIT_TYPE = null;
    /** @var int|float|null */
    public $CRCALC_TYPE = null;
    public ?string $GKSNO = null;
    public ?string $BEG_DATE = null;
    public ?string $END_DATE = null;
    public ?string $PAYMENT_BEG_DATE = null;
    /** @var int|float|null */
    public $TRCURR = null;
    /** @var int|float|null */
    public $TRTOTAL = null;
    /** @var int|float|null */
    public $TRRATECR = null;
    /** @var int|float|null */
    public $TRRATEACC = null;
    /** @var int|float|null */
    public $REPORTRATE = null;
    /** @var int|float|null */
    public $BNCRACCREF = null;
    public ?string $CR_BANK_ACC_CODE = null;
    /** @var int|float|null */
    public $BNCRREF = null;
    public ?string $CR_BANK_CODE = null;
    /** @var int|float|null */
    public $BNACCREF = null;
    public ?string $BANK_ACC_CODE = null;
    /** @var int|float|null */
    public $BNREF = null;
    public ?string $BANK_CODE = null;
    /** @var int|float|null */
    public $REPAYPLANREF = null;
    public ?string $REPAY_PLAN_CODE = null;
    /** @var int|float|null */
    public $INT_RATE = null;
    /** @var int|float|null */
    public $INT_TOTAL = null;
    /** @var int|float|null */
    public $BSMV_RATE = null;
    /** @var int|float|null */
    public $BSMV_TOTAL = null;
    /** @var int|float|null */
    public $KKDF_RATE = null;
    /** @var int|float|null */
    public $KKDF_TOTAL = null;
    /** @var int|float|null */
    public $COMM_TOTAL = null;
    /** @var int|float|null */
    public $TEXT_INC = null;
    /** @var int|float|null */
    public $VTR_CURR = null;
    /** @var int|float|null */
    public $CLOSED_TOT = null;
    /** @var int|float|null */
    public $REM_TOT = null;
    /** @var int|float|null */
    public $CLOSED_INT_TOT = null;
    /** @var int|float|null */
    public $REM_INT_TOT = null;
    /** @var int|float|null */
    public $CLOSED_BSMV_TOT = null;
    /** @var int|float|null */
    public $REM_BSMV_TOT = null;
    /** @var int|float|null */
    public $CLOSED_KKDF_TOT = null;
    /** @var int|float|null */
    public $REM_KKDF_TOT = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $XCNT = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    public ?string $ITEXT = null;
    public ?string $FLDALS = null;
    public ?string $PAYPP = null;
    /** @var RscollectionrsBankcrepayxml|null */
    public $BANK_CRE_PAYMENT_LIST = null;
    /** @var int|float|null */
    public $BRANCH = null;
    /** @var int|float|null */
    public $REVERSE_PAYMENT = null;
    /** @var int|float|null */
    public $DUE_DATE = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    /** @var int|float|null */
    public $CREATE_BANK_SLIP = null;
    /** @var int|float|null */
    public $PPI_DEDUCT = null;
    public ?string $STRUCT_DATE = null;
    /** @var int|float|null */
    public $PERIOD_END_PAY = null;
    /** @var int|float|null */
    public $PARENTREF = null;
    public ?string $PARENT_CODE = null;
    public ?string $GUID = null;
    /** @var int|float|null */
    public $VALORCALC = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'BANK_CRE_PAYMENT_LIST' => \LogoObjects\Clients\bankCredits\RscollectionrsBankcrepayxml::class,
        ]);
    }
}

/**
 * BankCreditsQueryOptions
 */
class BankCreditsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var BankCreditsSortSpec|null */
    public $sort = null;
}

/**
 * BankCreditsSearchCriteria
 */
class BankCreditsSearchCriteria extends \LogoObjects\Support\Entity
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
    public $crcardType = null;
    /** @var mixed */
    public $creditType = null;
    /** @var mixed */
    public $crcalcType = null;
    /** @var mixed */
    public $gksno = null;
    /** @var mixed */
    public $begDate = null;
    /** @var mixed */
    public $endDate = null;
    /** @var mixed */
    public $paymentBegDate = null;
    /** @var mixed */
    public $trcurr = null;
    /** @var mixed */
    public $trtotal = null;
    /** @var mixed */
    public $trratecr = null;
    /** @var mixed */
    public $trrateacc = null;
    /** @var mixed */
    public $reportrate = null;
    /** @var mixed */
    public $bncraccref = null;
    /** @var mixed */
    public $crBankAccCode = null;
    /** @var mixed */
    public $bncrref = null;
    /** @var mixed */
    public $crBankCode = null;
    /** @var mixed */
    public $bnaccref = null;
    /** @var mixed */
    public $bankAccCode = null;
    /** @var mixed */
    public $bnref = null;
    /** @var mixed */
    public $bankCode = null;
    /** @var mixed */
    public $repayplanref = null;
    /** @var mixed */
    public $repayPlanCode = null;
    /** @var mixed */
    public $intRate = null;
    /** @var mixed */
    public $intTotal = null;
    /** @var mixed */
    public $bsmvRate = null;
    /** @var mixed */
    public $bsmvTotal = null;
    /** @var mixed */
    public $kkdfRate = null;
    /** @var mixed */
    public $kkdfTotal = null;
    /** @var mixed */
    public $commTotal = null;
    /** @var mixed */
    public $textInc = null;
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
    public $vtrCurr = null;
    /** @var mixed */
    public $closedTot = null;
    /** @var mixed */
    public $remTot = null;
    /** @var mixed */
    public $closedIntTot = null;
    /** @var mixed */
    public $remIntTot = null;
    /** @var mixed */
    public $closedBsmvTot = null;
    /** @var mixed */
    public $remBsmvTot = null;
    /** @var mixed */
    public $closedKkdfTot = null;
    /** @var mixed */
    public $remKkdfTot = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $xcnt = null;
    /** @var mixed */
    public $textchg = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $fldals = null;
    /** @var mixed */
    public $paypp = null;
    /** @var mixed */
    public $bankCrePaymentList = null;
    /** @var mixed */
    public $branch = null;
    /** @var mixed */
    public $reversePayment = null;
    /** @var mixed */
    public $dueDate = null;
    /** @var mixed */
    public $projectCode = null;
    /** @var mixed */
    public $projectref = null;
    /** @var mixed */
    public $createBankSlip = null;
    /** @var mixed */
    public $ppiDeduct = null;
    /** @var mixed */
    public $structDate = null;
    /** @var mixed */
    public $periodEndPay = null;
    /** @var mixed */
    public $parentref = null;
    /** @var mixed */
    public $parentCode = null;
    /** @var mixed */
    public $guid = null;
    /** @var mixed */
    public $valorcalc = null;
}

/**
 * BankCreditsAnalytics
 */
class BankCreditsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
