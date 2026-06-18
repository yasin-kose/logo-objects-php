<?php

declare(strict_types=1);

namespace LogoObjects\Clients\purchaseProposalOffers;

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
 * RscollectionrsPaylstxml
 */
class RscollectionrsPaylstxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchaseProposalOffers\RsPaylstxml::class],
        ]);
    }
}

/**
 * RscollectionrsDiscpaytrxml
 */
class RscollectionrsDiscpaytrxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchaseProposalOffers\RsDiscpaytrxml::class],
        ]);
    }
}

/**
 * RscollectionrsPurchoffertransx
 */
class RscollectionrsPurchoffertransx extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchaseProposalOffers\RsPurchoffertransx::class],
        ]);
    }
}

/**
 * RscollectionrsCampcodeslistxml
 */
class RscollectionrsCampcodeslistxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchaseProposalOffers\RsCampcodeslistxml::class],
        ]);
    }
}

/**
 * RscollectionrsPurchofferdetxml
 */
class RscollectionrsPurchofferdetxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchaseProposalOffers\RsPurchofferdetxml::class],
        ]);
    }
}

/**
 * Rscollectionextendedfielddefinitions
 */
class Rscollectionextendedfielddefinitions extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchaseProposalOffers\ExtendedFieldDefinitions::class],
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
 * RsPaylstxml
 */
class RsPaylstxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $CARDREF = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $MODULENR = null;
    /** @var int|float|null */
    public $SIGN = null;
    /** @var int|float|null */
    public $FICHEREF = null;
    /** @var int|float|null */
    public $FICHELINEREF = null;
    /** @var int|float|null */
    public $TRCODE = null;
    /** @var int|float|null */
    public $TOTAL = null;
    /** @var int|float|null */
    public $PAID = null;
    /** @var int|float|null */
    public $DAYS = null;
    /** @var int|float|null */
    public $EARLYINTRATE = null;
    /** @var int|float|null */
    public $LATELYINTRATE = null;
    /** @var int|float|null */
    public $CROSSREF = null;
    /** @var int|float|null */
    public $PAIDINCASH = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    public ?string $PROCDATE = null;
    /** @var int|float|null */
    public $TRCURR = null;
    /** @var int|float|null */
    public $TRRATE = null;
    /** @var int|float|null */
    public $REPORTRATE = null;
    /** @var int|float|null */
    public $MODIFIED = null;
    /** @var int|float|null */
    public $REMIND_LEVEL = null;
    /** @var int|float|null */
    public $REMIND_SENT = null;
    /** @var int|float|null */
    public $CROSSCURR = null;
    /** @var int|float|null */
    public $CROSSTOTAL = null;
    /** @var int|float|null */
    public $DISCOUNTED = null;
    /** @var int|float|null */
    public $DATE_SITEID = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
    /** @var int|float|null */
    public $CLOSINGRATE = null;
    public ?string $DISCOUNT_DUEDATE = null;
    /** @var int|float|null */
    public $OP_STATUS = null;
    /** @var int|float|null */
    public $INFLATION_IDX = null;
    /** @var int|float|null */
    public $PAY_NO = null;
    /** @var int|float|null */
    public $DELAY_TOTAL = null;
    /** @var int|float|null */
    public $LAST_SEND_REM_LEV = null;
    /** @var int|float|null */
    public $POINT_TRANS = null;
    public ?string $BANK_PAY_DATE = null;
    /** @var int|float|null */
    public $POS_COMSN = null;
    /** @var int|float|null */
    public $POINT_COMSN = null;
    /** @var int|float|null */
    public $BANKACCREF = null;
    public ?string $BANKACC_CODE = null;
    /** @var int|float|null */
    public $PAYMENT_TYPE = null;
    /** @var RscollectionrsDiscpaytrxml|null */
    public $DISCTRLIST = null;
    public ?string $DISCTRDELLIST = null;
    /** @var int|float|null */
    public $CASHACCREF = null;
    public ?string $CASHACC_CODE = null;
    /** @var int|float|null */
    public $TRNET = null;
    /** @var int|float|null */
    public $REPAYPLANREF = null;
    /** @var int|float|null */
    public $DUEDIFF_COMSN = null;
    /** @var int|float|null */
    public $CALC_TYPE = null;
    /** @var int|float|null */
    public $NET_TOTAL = null;
    /** @var int|float|null */
    public $REPAYPLN_APPLIED = null;
    /** @var int|float|null */
    public $PAYTR_CURR = null;
    /** @var int|float|null */
    public $PAYTR_RATE = null;
    /** @var int|float|null */
    public $PAYTR_NET = null;
    public ?string $REPAYPLAN_CODE = null;
    /** @var int|float|null */
    public $BNFCLINE = null;
    public ?string $ORGLOGOID = null;
    public ?string $CREDIT_CARD_NUMBER = null;
    public ?string $VAL_BEG_DATE = null;
    public ?string $RET_REF_NUMBER = null;
    public ?string $DO_CODE = null;
    public ?string $BATCH_NUMBER = null;
    public ?string $APPROVE_NUMBER = null;
    public ?string $POS_TERMINAL_NUMBER = null;
    public ?string $GLOBAL_CODE = null;
    public ?string $CL_BNACC_NUMBER = null;
    /** @var int|float|null */
    public $OLD_TOTAL = null;
    public ?string $OLD_BNACC_NUMBER = null;
    public ?string $LINE_EXP = null;
    /** @var int|float|null */
    public $CURR_DIFF_RATE = null;
    /** @var int|float|null */
    public $CURR_DIFF_CLOSED = null;
    /** @var int|float|null */
    public $CURR_DIFF_CLSREF = null;
    /** @var int|float|null */
    public $VAT_FLAG = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DISCTRLIST' => \LogoObjects\Clients\purchaseProposalOffers\RscollectionrsDiscpaytrxml::class,
        ]);
    }
}

/**
 * RsDiscpaytrxml
 */
class RsDiscpaytrxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $PAYTRANREF = null;
    /** @var int|float|null */
    public $CARDREF = null;
    /** @var int|float|null */
    public $TRCODE = null;
    /** @var int|float|null */
    public $MODULENR = null;
    /** @var int|float|null */
    public $TSIGN = null;
    /** @var int|float|null */
    public $FICHEREF = null;
    /** @var int|float|null */
    public $FICHELINEREF = null;
    /** @var int|float|null */
    public $DISC_RATE = null;
    public ?string $DISCDUE_DATE = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
}

/**
 * RsPurchoffertransx
 */
class RsPurchoffertransx extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $TYPE = null;
    public ?string $MASTER_CODE = null;
    /** @var int|float|null */
    public $STOCKREF = null;
    /** @var int|float|null */
    public $ORDFICHEREF = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    /** @var int|float|null */
    public $LINETYPE = null;
    /** @var int|float|null */
    public $PREVLINEREF = null;
    /** @var int|float|null */
    public $PREVLINENO = null;
    /** @var int|float|null */
    public $DETLINE = null;
    /** @var int|float|null */
    public $LINENO = null;
    /** @var int|float|null */
    public $TRCODE = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $TIME = null;
    /** @var int|float|null */
    public $GLOBTRANS = null;
    /** @var int|float|null */
    public $CALCTYPE = null;
    public ?string $OHP_CODE1 = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    public ?string $GL_CODE1 = null;
    /** @var int|float|null */
    public $ACCOUNTREF = null;
    public ?string $GL_CODE2 = null;
    /** @var int|float|null */
    public $VATACCREF = null;
    public ?string $OHP_CODE2 = null;
    /** @var int|float|null */
    public $VATCENTERREF = null;
    public ?string $GL_CODE3 = null;
    /** @var int|float|null */
    public $PRACCREF = null;
    public ?string $OHP_CODE3 = null;
    /** @var int|float|null */
    public $PRCENTERREF = null;
    public ?string $GL_CODE4 = null;
    /** @var int|float|null */
    public $PRVATACCREF = null;
    public ?string $OHP_CODE4 = null;
    /** @var int|float|null */
    public $PRVATCENREF = null;
    /** @var int|float|null */
    public $PROMREF = null;
    public ?string $AUXIL_CODE = null;
    public ?string $DELVRY_CODE = null;
    /** @var int|float|null */
    public $QUANTITY = null;
    /** @var int|float|null */
    public $PRICE = null;
    /** @var int|float|null */
    public $TOTAL = null;
    /** @var int|float|null */
    public $SHIPPEDAMOUNT = null;
    /** @var int|float|null */
    public $DISCPER = null;
    /** @var int|float|null */
    public $DISTCOST = null;
    /** @var int|float|null */
    public $DISTDISC = null;
    /** @var int|float|null */
    public $DISTEXP = null;
    /** @var int|float|null */
    public $DISTPROM = null;
    /** @var int|float|null */
    public $VAT = null;
    /** @var int|float|null */
    public $VATAMNT = null;
    /** @var int|float|null */
    public $VATMATRAH = null;
    public ?string $LINEEXP = null;
    /** @var int|float|null */
    public $UOMREF = null;
    /** @var int|float|null */
    public $USREF = null;
    /** @var int|float|null */
    public $UINFO1 = null;
    /** @var int|float|null */
    public $UINFO2 = null;
    /** @var int|float|null */
    public $UINFO3 = null;
    /** @var int|float|null */
    public $UINFO4 = null;
    /** @var int|float|null */
    public $UINFO5 = null;
    /** @var int|float|null */
    public $UINFO6 = null;
    /** @var int|float|null */
    public $UINFO7 = null;
    /** @var int|float|null */
    public $UINFO8 = null;
    /** @var int|float|null */
    public $VATINC = null;
    /** @var int|float|null */
    public $CLOSED = null;
    /** @var int|float|null */
    public $DORESERVE = null;
    /** @var int|float|null */
    public $INUSE = null;
    public ?string $DUEDATE = null;
    /** @var int|float|null */
    public $PRCURR = null;
    /** @var int|float|null */
    public $PRPRICE = null;
    /** @var int|float|null */
    public $REPORTRATE = null;
    /** @var int|float|null */
    public $BILLEDITEM = null;
    public ?string $PAYMENT_CODE = null;
    /** @var int|float|null */
    public $PAYDEFREF = null;
    /** @var int|float|null */
    public $EXTENREF = null;
    /** @var int|float|null */
    public $CPSTFLAG = null;
    /** @var int|float|null */
    public $SOURCEINDEX = null;
    /** @var int|float|null */
    public $SOURCECOSTGRP = null;
    /** @var int|float|null */
    public $BRANCH = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $LINENET = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    /** @var int|float|null */
    public $ORDER_STATUS = null;
    /** @var int|float|null */
    public $DREF = null;
    /** @var int|float|null */
    public $TRGFLAG = null;
    /** @var int|float|null */
    public $FACTORYNR = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
    /** @var int|float|null */
    public $NETDISCFLAG = null;
    /** @var int|float|null */
    public $NETDISCPERC = null;
    /** @var int|float|null */
    public $NETDISCAMNT = null;
    /** @var int|float|null */
    public $REASONFORNOTSHP = null;
    /** @var RscollectionrsCampcodeslistxml|null */
    public $CAMPAIGN_INFOS = null;
    /** @var int|float|null */
    public $CAMPPOINT = null;
    /** @var int|float|null */
    public $CMPGLINEREF = null;
    public ?string $PROM_CLAS_ITEM_CODE = null;
    /** @var int|float|null */
    public $PRRATE = null;
    /** @var int|float|null */
    public $GROSSUINFO1 = null;
    /** @var int|float|null */
    public $GROSSUINFO2 = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    /** @var int|float|null */
    public $DEMPEGGEDAMNT = null;
    /** @var int|float|null */
    public $OFFERREF = null;
    /** @var int|float|null */
    public $ORDERPARAM = null;
    /** @var int|float|null */
    public $ITEMASGREF = null;
    /** @var int|float|null */
    public $EXIMAMOUNT = null;
    /** @var int|float|null */
    public $OFFTRANSREF = null;
    /** @var int|float|null */
    public $ORDEREDAMOUNT = null;
    public ?string $ORGLOGOID = null;
    /** @var int|float|null */
    public $TRCURR = null;
    /** @var int|float|null */
    public $TRRATE = null;
    /** @var int|float|null */
    public $WITHPAYTRANS = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    /** @var int|float|null */
    public $AFFECTCOLLATRL = null;
    /** @var int|float|null */
    public $FCTYP = null;
    /** @var int|float|null */
    public $PURCHOFFNR = null;
    /** @var int|float|null */
    public $DEMFICHEREF = null;
    /** @var int|float|null */
    public $DEMTRANSREF = null;
    public ?string $UEDIT = null;
    /** @var int|float|null */
    public $ALTREF = null;
    /** @var int|float|null */
    public $PRODUCED = null;
    public ?string $ORDCODE = null;
    /** @var RscollectionrsPurchofferdetxml|null */
    public $DETAILS = null;
    public ?string $DETDELLIST = null;
    /** @var int|float|null */
    public $DISTVAT = null;
    /** @var int|float|null */
    public $ALTPROMFLAG = null;
    public ?string $SALORDDEMPEGLIST = null;
    public ?string $DELSALORDDEMPEGLIST = null;
    public ?string $ITEXT = null;
    public ?string $SALESMANCODE = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $DEFNFLDS = null;
    /** @var int|float|null */
    public $PRCLISTREF = null;
    /** @var int|float|null */
    public $VARIANTREF = null;
    public ?string $VARIANTCODE = null;
    public ?string $VARIANTNAME = null;
    /** @var int|float|null */
    public $CANCONFIG = null;
    public ?string $VCHARLIST = null;
    /** @var int|float|null */
    public $ADD_TAX_EFFECT_KDV = null;
    /** @var int|float|null */
    public $EXCLINE_INTERNAL_REFERENCE = null;
    /** @var int|float|null */
    public $EXCLINE_TRANS_REF = null;
    /** @var int|float|null */
    public $EXCLINE_PRICE = null;
    /** @var int|float|null */
    public $EXCLINE_TOTAL = null;
    /** @var int|float|null */
    public $EXCLINE_DIST_COST = null;
    /** @var int|float|null */
    public $EXCLINE_DIST_DISC = null;
    /** @var int|float|null */
    public $EXCLINE_DIST_EXP = null;
    /** @var int|float|null */
    public $EXCLINE_DIST_PROM = null;
    /** @var int|float|null */
    public $EXCLINE_VAT_AMOUNT = null;
    /** @var int|float|null */
    public $EXCLINE_VAT_MATRAH = null;
    /** @var int|float|null */
    public $EXCLINE_LINE_NET = null;
    /** @var int|float|null */
    public $EXCLINE_DIST_ADD_EXP = null;
    /** @var int|float|null */
    public $EXCLINE_NET_DISC_AMOUNT = null;
    /** @var int|float|null */
    public $EXCLINE_VAT_CALC_DIFF = null;
    /** @var int|float|null */
    public $EXCLINE_EU_VAT_AMOUNT = null;
    /** @var int|float|null */
    public $EXCLINE_ADD_TAX_AMOUNT = null;
    /** @var int|float|null */
    public $EXCLINE_ADD_TAX_CONV_FACT = null;
    /** @var int|float|null */
    public $EXCLINE_ADD_TAX_DISC_AMOUNT = null;
    /** @var int|float|null */
    public $EXCLINE_EX_ADD_TAX_AMOUNT = null;
    /** @var int|float|null */
    public $EXCLINE_EX_ADD_TAX_CONVF = null;
    /** @var int|float|null */
    public $RPRICE = null;
    /** @var int|float|null */
    public $EDT_RPRICE = null;
    /** @var int|float|null */
    public $EDT_PRICE = null;
    /** @var int|float|null */
    public $EDT_CURR = null;
    public ?string $PRCLISTCODE = null;
    /** @var int|float|null */
    public $CANDEDUCT = null;
    /** @var int|float|null */
    public $DEDUCTION_PART1 = null;
    /** @var int|float|null */
    public $DEDUCTION_PART2 = null;
    public ?string $DEDUCT_CODE = null;
    /** @var int|float|null */
    public $DIST_DISC_VAT = null;
    /** @var int|float|null */
    public $DEVIR = null;
    /** @var int|float|null */
    public $PARENTLNREF = null;
    /** @var int|float|null */
    public $ITMDISC = null;
    /** @var int|float|null */
    public $ADD_TAX_REF = null;
    /** @var int|float|null */
    public $ADD_TAX_INLNNET = null;
    public ?string $PURCHOFFCAPTION = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'CAMPAIGN_INFOS' => \LogoObjects\Clients\purchaseProposalOffers\RscollectionrsCampcodeslistxml::class,
            'DETAILS' => \LogoObjects\Clients\purchaseProposalOffers\RscollectionrsPurchofferdetxml::class,
            'DEFNFLDS' => \LogoObjects\Clients\purchaseProposalOffers\Rscollectionextendedfielddefinitions::class,
        ]);
    }
}

/**
 * RsCampcodeslistxml
 */
class RsCampcodeslistxml extends \LogoObjects\Types\BaseEntity
{
    public ?string $CAMPCODE1 = null;
    public ?string $CAMPCODE2 = null;
    public ?string $CAMPCODE3 = null;
    public ?string $CAMPCODE4 = null;
    public ?string $CAMPCODE5 = null;
    public ?string $PCAMPCODE = null;
    /** @var int|float|null */
    public $CAMP_LN_NO = null;
}

/**
 * RsPurchofferdetxml
 */
class RsPurchofferdetxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $TYPE = null;
    public ?string $MASTER_CODE = null;
    /** @var int|float|null */
    public $STOCKREF = null;
    /** @var int|float|null */
    public $ORDFICHEREF = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    /** @var int|float|null */
    public $PREVLINEREF = null;
    /** @var int|float|null */
    public $PREVLINENO = null;
    /** @var int|float|null */
    public $DETLINE = null;
    /** @var int|float|null */
    public $LINENO = null;
    /** @var int|float|null */
    public $SLIP_TYPE = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $TIME = null;
    /** @var int|float|null */
    public $DETAIL_LEVEL = null;
    /** @var int|float|null */
    public $CALCTYPE = null;
    public ?string $OHP_CODE1 = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    public ?string $GL_CODE1 = null;
    /** @var int|float|null */
    public $ACCOUNTREF = null;
    public ?string $GL_CODE2 = null;
    /** @var int|float|null */
    public $VATACCREF = null;
    public ?string $OHP_CODE2 = null;
    /** @var int|float|null */
    public $VATCENTERREF = null;
    /** @var int|float|null */
    public $PRACCREF = null;
    /** @var int|float|null */
    public $PRCENTERREF = null;
    /** @var int|float|null */
    public $PRVATACCREF = null;
    /** @var int|float|null */
    public $PRVATCENREF = null;
    /** @var int|float|null */
    public $PROMREF = null;
    public ?string $AUXIL_CODE = null;
    public ?string $DELVRY_CODE = null;
    /** @var int|float|null */
    public $QUANTITY = null;
    /** @var int|float|null */
    public $PRICE = null;
    /** @var int|float|null */
    public $TOTAL = null;
    /** @var int|float|null */
    public $QUANTITY_SHIPPED = null;
    /** @var int|float|null */
    public $DISCOUNT_RATE = null;
    /** @var int|float|null */
    public $COST_DISTR = null;
    /** @var int|float|null */
    public $DISCOUNT_DISTR = null;
    /** @var int|float|null */
    public $EXPENSE_DISTR = null;
    /** @var int|float|null */
    public $PROMOTION_DISTR = null;
    /** @var int|float|null */
    public $VAT_RATE = null;
    /** @var int|float|null */
    public $VAT_AMOUNT = null;
    /** @var int|float|null */
    public $VAT_BASE = null;
    public ?string $TRANS_DESCRIPTION = null;
    public ?string $UNIT_CODE = null;
    /** @var int|float|null */
    public $UOMREF = null;
    /** @var int|float|null */
    public $USREF = null;
    /** @var int|float|null */
    public $UNIT_CONV1 = null;
    /** @var int|float|null */
    public $UNIT_CONV2 = null;
    /** @var int|float|null */
    public $UNIT_CONV3 = null;
    /** @var int|float|null */
    public $UNIT_CONV4 = null;
    /** @var int|float|null */
    public $UNIT_CONV5 = null;
    /** @var int|float|null */
    public $UNIT_CONV6 = null;
    /** @var int|float|null */
    public $UNIT_CONV7 = null;
    /** @var int|float|null */
    public $UNIT_CONV8 = null;
    /** @var int|float|null */
    public $VAT_INCLUDED = null;
    /** @var int|float|null */
    public $ORDER_CLOSED = null;
    /** @var int|float|null */
    public $ORDER_RESERVE = null;
    /** @var int|float|null */
    public $INUSE = null;
    public ?string $DUE_DATE = null;
    /** @var int|float|null */
    public $CURR_PRICE = null;
    /** @var int|float|null */
    public $PC_PRICE = null;
    /** @var int|float|null */
    public $RC_XRATE = null;
    /** @var int|float|null */
    public $BILLED_ITEM = null;
    public ?string $PAYMENT_CODE = null;
    /** @var int|float|null */
    public $PAYDEFREF = null;
    /** @var int|float|null */
    public $EXTENREF = null;
    /** @var int|float|null */
    public $COMPOSITE = null;
    /** @var int|float|null */
    public $SOURCE_WH = null;
    /** @var int|float|null */
    public $SOURCE_COST_GRP = null;
    /** @var int|float|null */
    public $DIVISION = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $TOTAL_NET = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    /** @var int|float|null */
    public $ORDER_STATUS = null;
    /** @var int|float|null */
    public $DREF = null;
    /** @var int|float|null */
    public $TRGFLAG = null;
    /** @var int|float|null */
    public $FACTORY = null;
    /** @var int|float|null */
    public $OFFERREF = null;
    /** @var int|float|null */
    public $ORDERPARAM = null;
    /** @var int|float|null */
    public $ITEMASGREF = null;
    /** @var int|float|null */
    public $EXIMAMOUNT = null;
    /** @var int|float|null */
    public $OFFTRANSREF = null;
    /** @var int|float|null */
    public $ORDEREDAMOUNT = null;
    public ?string $ORGLOGOID = null;
    /** @var int|float|null */
    public $AFFECTCOLLATRL = null;
    /** @var int|float|null */
    public $PURCHOFFNR = null;
    /** @var int|float|null */
    public $PRODUCED = null;
    public ?string $ORDER_CODE = null;
    public ?string $DETLIST = null;
    /** @var int|float|null */
    public $REASON_FOR_NOT_SHP = null;
    /** @var int|float|null */
    public $CMPG_LINE_REF = null;
    /** @var int|float|null */
    public $DEM_PEGGED_AMNT = null;
    /** @var int|float|null */
    public $PRCLISTREF = null;
    /** @var int|float|null */
    public $ADD_TAX_EFFECT_KDV = null;
    /** @var int|float|null */
    public $EXCLINE_INTERNAL_REFERENCE = null;
    /** @var int|float|null */
    public $EXCLINE_TRANS_REF = null;
    /** @var int|float|null */
    public $EXCLINE_PRICE = null;
    /** @var int|float|null */
    public $EXCLINE_TOTAL = null;
    /** @var int|float|null */
    public $EXCLINE_DIST_COST = null;
    /** @var int|float|null */
    public $EXCLINE_DIST_DISC = null;
    /** @var int|float|null */
    public $EXCLINE_DIST_EXP = null;
    /** @var int|float|null */
    public $EXCLINE_DIST_PROM = null;
    /** @var int|float|null */
    public $EXCLINE_VAT_AMOUNT = null;
    /** @var int|float|null */
    public $EXCLINE_VAT_MATRAH = null;
    /** @var int|float|null */
    public $EXCLINE_LINE_NET = null;
    /** @var int|float|null */
    public $EXCLINE_DIST_ADD_EXP = null;
    /** @var int|float|null */
    public $EXCLINE_NET_DISC_AMOUNT = null;
    /** @var int|float|null */
    public $EXCLINE_VAT_CALC_DIFF = null;
    /** @var int|float|null */
    public $EXCLINE_EU_VAT_AMOUNT = null;
    /** @var int|float|null */
    public $EXCLINE_ADD_TAX_AMOUNT = null;
    /** @var int|float|null */
    public $EXCLINE_ADD_TAX_CONV_FACT = null;
    /** @var int|float|null */
    public $EXCLINE_ADD_TAX_DISC_AMOUNT = null;
    /** @var int|float|null */
    public $EXCLINE_EX_ADD_TAX_AMOUNT = null;
    /** @var int|float|null */
    public $EXCLINE_EX_ADD_TAX_CONVF = null;
    public ?string $PRCLISTCODE = null;
    /** @var int|float|null */
    public $CANDEDUCT = null;
    /** @var int|float|null */
    public $DEDUCTION_PART1 = null;
    /** @var int|float|null */
    public $DEDUCTION_PART2 = null;
    public ?string $DEDUCT_CODE = null;
    /** @var int|float|null */
    public $DIST_DISC_VAT = null;
    /** @var int|float|null */
    public $DEVIR = null;
    /** @var int|float|null */
    public $PARENTLNREF = null;
    /** @var int|float|null */
    public $ITMDISC = null;
    /** @var int|float|null */
    public $ADD_TAX_REF = null;
    /** @var int|float|null */
    public $ADD_TAX_INLNNET = null;
    public ?string $DRAFTSTOCKNAME = null;
    public ?string $DRAFTSTOCKNAME2 = null;
    public ?string $DRAFTSTOCKNAME3 = null;
    /** @var int|float|null */
    public $PARENTSTOCKREF = null;
    public ?string $PURCHOFFCAPTION = null;
}

/**
 * ExtendedFieldDefinitions
 */
class ExtendedFieldDefinitions extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $MODULENR = null;
    /** @var int|float|null */
    public $LEVEL_ = null;
    /** @var int|float|null */
    public $PARENTREF = null;
    /** @var int|float|null */
    public $OWNERREF = null;
    public ?string $TEXTFLDS1 = null;
    public ?string $TEXTFLDS2 = null;
    public ?string $TEXTFLDS3 = null;
    public ?string $TEXTFLDS4 = null;
    public ?string $TEXTFLDS5 = null;
    public ?string $TEXTFLDS6 = null;
    public ?string $TEXTFLDS7 = null;
    public ?string $TEXTFLDS8 = null;
    public ?string $TEXTFLDS9 = null;
    public ?string $TEXTFLDS10 = null;
    public ?string $TEXTFLDS11 = null;
    public ?string $TEXTFLDS12 = null;
    public ?string $TEXTFLDS13 = null;
    public ?string $TEXTFLDS14 = null;
    public ?string $TEXTFLDS15 = null;
    public ?string $TEXTFLDS16 = null;
    public ?string $TEXTFLDS17 = null;
    public ?string $TEXTFLDS18 = null;
    public ?string $TEXTFLDS19 = null;
    public ?string $TEXTFLDS20 = null;
    public ?string $TEXTFLDS21 = null;
    public ?string $TEXTFLDS22 = null;
    public ?string $TEXTFLDS23 = null;
    public ?string $TEXTFLDS24 = null;
    public ?string $TEXTFLDS25 = null;
    public ?string $TEXTFLDS26 = null;
    public ?string $TEXTFLDS27 = null;
    public ?string $TEXTFLDS28 = null;
    public ?string $TEXTFLDS29 = null;
    public ?string $TEXTFLDS30 = null;
    public ?string $TEXTFLDS31 = null;
    public ?string $TEXTFLDS32 = null;
    public ?string $TEXTFLDS33 = null;
    public ?string $TEXTFLDS34 = null;
    public ?string $TEXTFLDS35 = null;
    public ?string $TEXTFLDS36 = null;
    public ?string $TEXTFLDS37 = null;
    public ?string $TEXTFLDS38 = null;
    public ?string $TEXTFLDS39 = null;
    public ?string $TEXTFLDS40 = null;
    public ?string $TEXTFLDS41 = null;
    public ?string $TEXTFLDS42 = null;
    public ?string $TEXTFLDS43 = null;
    public ?string $TEXTFLDS44 = null;
    public ?string $TEXTFLDS45 = null;
    public ?string $TEXTFLDS46 = null;
    public ?string $TEXTFLDS47 = null;
    public ?string $TEXTFLDS48 = null;
    public ?string $TEXTFLDS49 = null;
    public ?string $TEXTFLDS50 = null;
    /** @var int|float|null */
    public $NUMFLDS1 = null;
    /** @var int|float|null */
    public $NUMFLDS2 = null;
    /** @var int|float|null */
    public $NUMFLDS3 = null;
    /** @var int|float|null */
    public $NUMFLDS4 = null;
    /** @var int|float|null */
    public $NUMFLDS5 = null;
    /** @var int|float|null */
    public $NUMFLDS6 = null;
    /** @var int|float|null */
    public $NUMFLDS7 = null;
    /** @var int|float|null */
    public $NUMFLDS8 = null;
    /** @var int|float|null */
    public $NUMFLDS9 = null;
    /** @var int|float|null */
    public $NUMFLDS10 = null;
    /** @var int|float|null */
    public $NUMFLDS11 = null;
    /** @var int|float|null */
    public $NUMFLDS12 = null;
    /** @var int|float|null */
    public $NUMFLDS13 = null;
    /** @var int|float|null */
    public $NUMFLDS14 = null;
    /** @var int|float|null */
    public $NUMFLDS15 = null;
    /** @var int|float|null */
    public $NUMFLDS16 = null;
    /** @var int|float|null */
    public $NUMFLDS17 = null;
    /** @var int|float|null */
    public $NUMFLDS18 = null;
    /** @var int|float|null */
    public $NUMFLDS19 = null;
    /** @var int|float|null */
    public $NUMFLDS20 = null;
    /** @var int|float|null */
    public $NUMFLDS21 = null;
    /** @var int|float|null */
    public $NUMFLDS22 = null;
    /** @var int|float|null */
    public $NUMFLDS23 = null;
    /** @var int|float|null */
    public $NUMFLDS24 = null;
    /** @var int|float|null */
    public $NUMFLDS25 = null;
    /** @var int|float|null */
    public $NUMFLDS26 = null;
    /** @var int|float|null */
    public $NUMFLDS27 = null;
    /** @var int|float|null */
    public $NUMFLDS28 = null;
    /** @var int|float|null */
    public $NUMFLDS29 = null;
    /** @var int|float|null */
    public $NUMFLDS30 = null;
    /** @var int|float|null */
    public $NUMFLDS31 = null;
    /** @var int|float|null */
    public $NUMFLDS32 = null;
    /** @var int|float|null */
    public $NUMFLDS33 = null;
    /** @var int|float|null */
    public $NUMFLDS34 = null;
    /** @var int|float|null */
    public $NUMFLDS35 = null;
    /** @var int|float|null */
    public $NUMFLDS36 = null;
    /** @var int|float|null */
    public $NUMFLDS37 = null;
    /** @var int|float|null */
    public $NUMFLDS38 = null;
    /** @var int|float|null */
    public $NUMFLDS39 = null;
    /** @var int|float|null */
    public $NUMFLDS40 = null;
    /** @var int|float|null */
    public $NUMFLDS41 = null;
    /** @var int|float|null */
    public $NUMFLDS42 = null;
    /** @var int|float|null */
    public $NUMFLDS43 = null;
    /** @var int|float|null */
    public $NUMFLDS44 = null;
    /** @var int|float|null */
    public $NUMFLDS45 = null;
    /** @var int|float|null */
    public $NUMFLDS46 = null;
    /** @var int|float|null */
    public $NUMFLDS47 = null;
    /** @var int|float|null */
    public $NUMFLDS48 = null;
    /** @var int|float|null */
    public $NUMFLDS49 = null;
    /** @var int|float|null */
    public $NUMFLDS50 = null;
}

/**
 * PurchaseProposalOffers
 */
class PurchaseProposalOffers extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $TRCODE = null;
    public ?string $FICHENO = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $TIME = null;
    public ?string $DOCODE = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    public ?string $ARP_CODE = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    public ?string $ARP_CODE_SHPM = null;
    /** @var int|float|null */
    public $RECVREF = null;
    public ?string $GL_CODE = null;
    /** @var int|float|null */
    public $ACCOUNTREF = null;
    public ?string $OHP_CODE = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    /** @var int|float|null */
    public $SOURCEINDEX = null;
    /** @var int|float|null */
    public $SOURCECOSTGRP = null;
    /** @var int|float|null */
    public $UPDCURR = null;
    /** @var int|float|null */
    public $ADDDISCOUNTS = null;
    /** @var int|float|null */
    public $TOTALDISCOUNTS = null;
    /** @var int|float|null */
    public $TOTALDISCOUNTED = null;
    /** @var int|float|null */
    public $ADDEXPENSES = null;
    /** @var int|float|null */
    public $TOTALEXPENSES = null;
    /** @var int|float|null */
    public $TOTALPROMOTIONS = null;
    /** @var int|float|null */
    public $TOTALVAT = null;
    /** @var int|float|null */
    public $GROSSTOTAL = null;
    /** @var int|float|null */
    public $NETTOTAL = null;
    /** @var int|float|null */
    public $REPORTRATE = null;
    /** @var int|float|null */
    public $REPORTNET = null;
    public ?string $GENEXP1 = null;
    public ?string $GENEXP2 = null;
    public ?string $GENEXP3 = null;
    public ?string $GENEXP4 = null;
    /** @var int|float|null */
    public $EXTENREF = null;
    public ?string $PAYMENT_CODE = null;
    public ?string $PAYDEF = null;
    /** @var int|float|null */
    public $PAYDEFREF = null;
    /** @var int|float|null */
    public $PRINTCNT = null;
    public ?string $PRINT_DATE = null;
    /** @var int|float|null */
    public $BRANCH = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $STATUS = null;
    /** @var int|float|null */
    public $CAPIBLOCK_CREATEDBY = null;
    public ?string $CAPIBLOCK_CREADEDDATE = null;
    /** @var int|float|null */
    public $CAPIBLOCK_CREATEDHOUR = null;
    /** @var int|float|null */
    public $CAPIBLOCK_CREATEDMIN = null;
    /** @var int|float|null */
    public $CAPIBLOCK_CREATEDSEC = null;
    /** @var int|float|null */
    public $CAPIBLOCK_MODIFIEDBY = null;
    public ?string $CAPIBLOCK_MODIFIEDDATE = null;
    /** @var int|float|null */
    public $CAPIBLOCK_MODIFIEDHOUR = null;
    /** @var int|float|null */
    public $CAPIBLOCK_MODIFIEDMIN = null;
    /** @var int|float|null */
    public $CAPIBLOCK_MODIFIEDSEC = null;
    public ?string $SALESMAN_CODE = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    public ?string $SHPTYPCOD = null;
    public ?string $SHPAGNCOD = null;
    /** @var int|float|null */
    public $GENEXCTYP = null;
    /** @var int|float|null */
    public $LINEEXCTYP = null;
    public ?string $TRADINGGRP = null;
    /** @var int|float|null */
    public $FACTORYNR = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
    /** @var int|float|null */
    public $SHIPINFOREF = null;
    public ?string $CUSTORDNO = null;
    /** @var int|float|null */
    public $SENDCNT = null;
    /** @var int|float|null */
    public $DLVCLIENT = null;
    public ?string $DOCTRACKINGNR = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    public ?string $ORGLOGOID = null;
    /** @var int|float|null */
    public $OFFERREF = null;
    /** @var int|float|null */
    public $OFFALTREF = null;
    /** @var int|float|null */
    public $TYP = null;
    /** @var int|float|null */
    public $ALTNR = null;
    /** @var int|float|null */
    public $ADVANCEPAYM = null;
    /** @var int|float|null */
    public $TRCURR = null;
    /** @var int|float|null */
    public $TRRATE = null;
    /** @var int|float|null */
    public $TRNET = null;
    /** @var int|float|null */
    public $PAYMENTTYPE = null;
    /** @var int|float|null */
    public $ONLYONEPAYLINE = null;
    /** @var int|float|null */
    public $OPSTAT = null;
    /** @var int|float|null */
    public $WITHPAYTRANS = null;
    /** @var RscollectionrsPaylstxml|null */
    public $PAYMENT_LIST = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    /** @var int|float|null */
    public $WFLOWCRDREF = null;
    /** @var int|float|null */
    public $UPDTRCURR = null;
    /** @var int|float|null */
    public $AFFECTCOLLATRL = null;
    public ?string $POFFERBEGDT = null;
    public ?string $POFFERENDDT = null;
    public ?string $REVISNR = null;
    /** @var int|float|null */
    public $LASTREVISION = null;
    /** @var int|float|null */
    public $CHECKAMOUNT = null;
    /** @var RscollectionrsPurchoffertransx|null */
    public $TRANSACTIONS = null;
    /** @var int|float|null */
    public $TOTBEFVAT = null;
    public ?string $TITLE = null;
    /** @var int|float|null */
    public $ALLSHIPPED = null;
    /** @var int|float|null */
    public $ALLCLOSED = null;
    /** @var int|float|null */
    public $TRUNCATED = null;
    /** @var int|float|null */
    public $PRICEIDX = null;
    /** @var int|float|null */
    public $LINECNT = null;
    /** @var int|float|null */
    public $UPDATED = null;
    /** @var int|float|null */
    public $ADDEXPVAT = null;
    /** @var int|float|null */
    public $CONDRUN = null;
    /** @var int|float|null */
    public $LOGEVENT = null;
    /** @var int|float|null */
    public $LINESINUSE = null;
    /** @var int|float|null */
    public $SHIPMENTS = null;
    /** @var int|float|null */
    public $DISTRIBUTIONS = null;
    /** @var int|float|null */
    public $PRODLINKED = null;
    /** @var int|float|null */
    public $PROMLINKED = null;
    public ?string $OLDFDATE = null;
    /** @var int|float|null */
    public $GLOBALPROM = null;
    /** @var int|float|null */
    public $BTYPE = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $XCNT = null;
    /** @var int|float|null */
    public $CUROP = null;
    /** @var int|float|null */
    public $OLDSTATUS = null;
    public ?string $DOCALS = null;
    /** @var int|float|null */
    public $CLCARDACTIVE = null;
    /** @var int|float|null */
    public $PAYPLANACTIVE = null;
    /** @var int|float|null */
    public $SLSMANACTIVE = null;
    /** @var int|float|null */
    public $WARNACTIVE = null;
    /** @var int|float|null */
    public $EDTTOTEXPENSE = null;
    /** @var int|float|null */
    public $EDTTOTALDISC = null;
    /** @var int|float|null */
    public $EDTTOTBEFVAT = null;
    /** @var int|float|null */
    public $EDTTOTALVAT = null;
    /** @var int|float|null */
    public $EDTNETTOTAL = null;
    public ?string $SHPCLTITLE = null;
    /** @var int|float|null */
    public $FCNOCHANGED = null;
    /** @var int|float|null */
    public $DOCNRREF = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    public ?string $ITEXT = null;
    public ?string $SHIPINFCODE = null;
    public ?string $SHIPINFDEF = null;
    /** @var int|float|null */
    public $VATEXEMPT = null;
    /** @var int|float|null */
    public $FASTDATAWINON = null;
    public ?string $CONTRACTNO = null;
    public ?string $PAYOUTLINES = null;
    /** @var int|float|null */
    public $FROMPOS = null;
    /** @var int|float|null */
    public $GUARANTOR1_LOGICALR = null;
    /** @var int|float|null */
    public $GUARANTOR1_FICHETYP = null;
    /** @var int|float|null */
    public $GUARANTOR1_FICHEREF = null;
    /** @var int|float|null */
    public $GUARANTOR1_GUARANTO = null;
    public ?string $GUARANTOR1_GNAMESUR = null;
    public ?string $GUARANTOR1_ADDR1 = null;
    public ?string $GUARANTOR1_ADDR2 = null;
    public ?string $GUARANTOR1_DISTRICT = null;
    public ?string $GUARANTOR1_TOWN = null;
    public ?string $GUARANTOR1_CITY = null;
    public ?string $GUARANTOR1_COUNTRY = null;
    public ?string $GUARANTOR1_POSTCODE = null;
    public ?string $GUARANTOR1_TELNRS1 = null;
    public ?string $GUARANTOR1_TELNRS2 = null;
    public ?string $GUARANTOR1_FAXNR = null;
    /** @var int|float|null */
    public $GUARANTOR1_SITEID = null;
    /** @var int|float|null */
    public $GUARANTOR1_RECSTATU = null;
    /** @var int|float|null */
    public $GUARANTOR1_ORGLOGIC = null;
    /** @var int|float|null */
    public $GUARANTOR1_CLIENTRE = null;
    public ?string $GUARANTOR1_TAXNR = null;
    public ?string $GUARANTOR1_TAXOFFIC = null;
    public ?string $GUARANTOR1_TAXOFFCO = null;
    public ?string $GUARANTOR1_BANKBRAN = null;
    public ?string $GUARANTOR1_BANKACCO = null;
    /** @var int|float|null */
    public $GUARANTOR2_LOGICALR = null;
    /** @var int|float|null */
    public $GUARANTOR2_FICHETYP = null;
    /** @var int|float|null */
    public $GUARANTOR2_FICHEREF = null;
    /** @var int|float|null */
    public $GUARANTOR2_GUARANTO = null;
    public ?string $GUARANTOR2_GNAMESUR = null;
    public ?string $GUARANTOR2_ADDR1 = null;
    public ?string $GUARANTOR2_ADDR2 = null;
    public ?string $GUARANTOR2_DISTRICT = null;
    public ?string $GUARANTOR2_TOWN = null;
    public ?string $GUARANTOR2_CITY = null;
    public ?string $GUARANTOR2_COUNTRY = null;
    public ?string $GUARANTOR2_POSTCODE = null;
    public ?string $GUARANTOR2_TELNRS1 = null;
    public ?string $GUARANTOR2_TELNRS2 = null;
    public ?string $GUARANTOR2_FAXNR = null;
    /** @var int|float|null */
    public $GUARANTOR2_SITEID = null;
    /** @var int|float|null */
    public $GUARANTOR2_RECSTATU = null;
    /** @var int|float|null */
    public $GUARANTOR2_ORGLOGIC = null;
    /** @var int|float|null */
    public $GUARANTOR2_CLIENTRE = null;
    public ?string $GUARANTOR2_TAXNR = null;
    public ?string $GUARANTOR2_TAXOFFIC = null;
    public ?string $GUARANTOR2_TAXOFFCO = null;
    public ?string $GUARANTOR2_BANKBRAN = null;
    public ?string $GUARANTOR2_BANKACCO = null;
    /** @var int|float|null */
    public $FROMINSTAL = null;
    /** @var int|float|null */
    public $PROJECTCACTIVE = null;
    /** @var int|float|null */
    public $FROMTASKBRW = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $DEFNFLDSLIST = null;
    /** @var int|float|null */
    public $BDGTERRNO = null;
    /** @var int|float|null */
    public $BDGTERRACCREF1 = null;
    /** @var int|float|null */
    public $BDGTERRACCREF2 = null;
    /** @var int|float|null */
    public $NORESERVATION = null;
    /** @var int|float|null */
    public $FROMDEVIR = null;
    /** @var int|float|null */
    public $ACTALTNR = null;
    /** @var int|float|null */
    public $TRANSFERTYP = null;
    /** @var int|float|null */
    public $SLSOPPERREF = null;
    public ?string $SLSOPPRNO = null;
    /** @var int|float|null */
    public $SLSACTREF = null;
    /** @var int|float|null */
    public $SLSCUSTREF = null;
    public ?string $SLSCUSTCODE = null;
    /** @var int|float|null */
    public $EXCHINFO_INTERNAL_REFERENCE = null;
    /** @var int|float|null */
    public $EXCHINFO_FICHE_REF = null;
    /** @var int|float|null */
    public $EXCHINFO_ADD_DISCOUNTS = null;
    /** @var int|float|null */
    public $EXCHINFO_TOTAL_DISCOUNTS = null;
    /** @var int|float|null */
    public $EXCHINFO_TOTAL_DISCOUNTED = null;
    /** @var int|float|null */
    public $EXCHINFO_ADD_EXPENSES = null;
    /** @var int|float|null */
    public $EXCHINFO_TOTAL_EXPENSES = null;
    /** @var int|float|null */
    public $EXCHINFO_DIST_EXPENSE = null;
    /** @var int|float|null */
    public $EXCHINFO_TOTAL_DEPOZITO = null;
    /** @var int|float|null */
    public $EXCHINFO_TOTAL_PROMOTIONS = null;
    /** @var int|float|null */
    public $EXCHINFO_VAT_INC_GROSS = null;
    /** @var int|float|null */
    public $EXCHINFO_TOTAL_VAT = null;
    /** @var int|float|null */
    public $EXCHINFO_GROSS_TOTAL = null;
    /** @var int|float|null */
    public $EXCHINFO_TOTAL_ADD_TAX = null;
    /** @var int|float|null */
    public $EXCHINFO_TOTAL_EX_ADD_TAX = null;
    /** @var int|float|null */
    public $EXCHINFO_BAGKUR = null;
    /** @var int|float|null */
    public $EXCHINFO_STOPAJ = null;
    /** @var int|float|null */
    public $EXCHINFO_SSDF = null;
    /** @var int|float|null */
    public $EXCHINFO_BORSA = null;
    /** @var int|float|null */
    public $EXCHINFO_KOMISYON = null;
    /** @var int|float|null */
    public $EXCHINFO_KOM_KDV = null;
    /** @var int|float|null */
    public $EXCHINFO_EK1 = null;
    /** @var int|float|null */
    public $EXCHINFO_EK2 = null;
    /** @var int|float|null */
    public $EXCHINFO_EK3 = null;
    /** @var int|float|null */
    public $EXCHINFO_EK4 = null;
    /** @var int|float|null */
    public $EXCHINFO_EK5 = null;
    /** @var int|float|null */
    public $APPROVE = null;
    public ?string $APPROVE_DATE = null;
    /** @var int|float|null */
    public $APPLY_ARP_DISCOUNT = null;
    /** @var int|float|null */
    public $DEDUCTION_PART1 = null;
    /** @var int|float|null */
    public $DEDUCTION_PART2 = null;
    /** @var int|float|null */
    public $DEVIR = null;
    public ?string $DELIVERY_CODE = null;
    public ?string $ORIGINAL_DATE = null;
    /** @var int|float|null */
    public $ACTIVITY_RENTING = null;
    /** @var int|float|null */
    public $ADD_DISCOUNTS_VAT = null;
    public ?string $PAYERID = null;
    /** @var int|float|null */
    public $PAYERTYPE = null;
    /** @var int|float|null */
    public $CANT_CRE_DEDUCT = null;
    /** @var int|float|null */
    public $PAYERMICRO = null;
    /** @var int|float|null */
    public $CONTACTREF = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'PAYMENT_LIST' => \LogoObjects\Clients\purchaseProposalOffers\RscollectionrsPaylstxml::class,
            'TRANSACTIONS' => \LogoObjects\Clients\purchaseProposalOffers\RscollectionrsPurchoffertransx::class,
            'DEFNFLDSLIST' => \LogoObjects\Clients\purchaseProposalOffers\Rscollectionextendedfielddefinitions::class,
        ]);
    }
}

/**
 * PurchaseProposalOffersQueryOptions
 */
class PurchaseProposalOffersQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var PurchaseProposalOffersSortSpec|null */
    public $sort = null;
}

/**
 * PurchaseProposalOffersSearchCriteria
 */
class PurchaseProposalOffersSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $trcode = null;
    /** @var mixed */
    public $ficheno = null;
    /** @var mixed */
    public $date = null;
    /** @var mixed */
    public $time = null;
    /** @var mixed */
    public $docode = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $arpCode = null;
    /** @var mixed */
    public $clientref = null;
    /** @var mixed */
    public $arpCodeShpm = null;
    /** @var mixed */
    public $recvref = null;
    /** @var mixed */
    public $glCode = null;
    /** @var mixed */
    public $accountref = null;
    /** @var mixed */
    public $ohpCode = null;
    /** @var mixed */
    public $centerref = null;
    /** @var mixed */
    public $sourceindex = null;
    /** @var mixed */
    public $sourcecostgrp = null;
    /** @var mixed */
    public $updcurr = null;
    /** @var mixed */
    public $adddiscounts = null;
    /** @var mixed */
    public $totaldiscounts = null;
    /** @var mixed */
    public $totaldiscounted = null;
    /** @var mixed */
    public $addexpenses = null;
    /** @var mixed */
    public $totalexpenses = null;
    /** @var mixed */
    public $totalpromotions = null;
    /** @var mixed */
    public $totalvat = null;
    /** @var mixed */
    public $grosstotal = null;
    /** @var mixed */
    public $nettotal = null;
    /** @var mixed */
    public $reportrate = null;
    /** @var mixed */
    public $reportnet = null;
    /** @var mixed */
    public $genexp1 = null;
    /** @var mixed */
    public $genexp2 = null;
    /** @var mixed */
    public $genexp3 = null;
    /** @var mixed */
    public $genexp4 = null;
    /** @var mixed */
    public $extenref = null;
    /** @var mixed */
    public $paymentCode = null;
    /** @var mixed */
    public $paydef = null;
    /** @var mixed */
    public $paydefref = null;
    /** @var mixed */
    public $printcnt = null;
    /** @var mixed */
    public $printDate = null;
    /** @var mixed */
    public $branch = null;
    /** @var mixed */
    public $department = null;
    /** @var mixed */
    public $status = null;
    /** @var mixed */
    public $capiblockCreatedby = null;
    /** @var mixed */
    public $capiblockCreadeddate = null;
    /** @var mixed */
    public $capiblockCreatedhour = null;
    /** @var mixed */
    public $capiblockCreatedmin = null;
    /** @var mixed */
    public $capiblockCreatedsec = null;
    /** @var mixed */
    public $capiblockModifiedby = null;
    /** @var mixed */
    public $capiblockModifieddate = null;
    /** @var mixed */
    public $capiblockModifiedhour = null;
    /** @var mixed */
    public $capiblockModifiedmin = null;
    /** @var mixed */
    public $capiblockModifiedsec = null;
    /** @var mixed */
    public $salesmanCode = null;
    /** @var mixed */
    public $salesmanref = null;
    /** @var mixed */
    public $shptypcod = null;
    /** @var mixed */
    public $shpagncod = null;
    /** @var mixed */
    public $genexctyp = null;
    /** @var mixed */
    public $lineexctyp = null;
    /** @var mixed */
    public $tradinggrp = null;
    /** @var mixed */
    public $textinc = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $factorynr = null;
    /** @var mixed */
    public $wfstatus = null;
    /** @var mixed */
    public $shipinforef = null;
    /** @var mixed */
    public $custordno = null;
    /** @var mixed */
    public $sendcnt = null;
    /** @var mixed */
    public $dlvclient = null;
    /** @var mixed */
    public $doctrackingnr = null;
    /** @var mixed */
    public $cancelled = null;
    /** @var mixed */
    public $orglogoid = null;
    /** @var mixed */
    public $offerref = null;
    /** @var mixed */
    public $offaltref = null;
    /** @var mixed */
    public $typ = null;
    /** @var mixed */
    public $altnr = null;
    /** @var mixed */
    public $advancepaym = null;
    /** @var mixed */
    public $trcurr = null;
    /** @var mixed */
    public $trrate = null;
    /** @var mixed */
    public $trnet = null;
    /** @var mixed */
    public $paymenttype = null;
    /** @var mixed */
    public $onlyonepayline = null;
    /** @var mixed */
    public $opstat = null;
    /** @var mixed */
    public $withpaytrans = null;
    /** @var mixed */
    public $paymentList = null;
    /** @var mixed */
    public $projectCode = null;
    /** @var mixed */
    public $projectref = null;
    /** @var mixed */
    public $wflowcrdref = null;
    /** @var mixed */
    public $updtrcurr = null;
    /** @var mixed */
    public $affectcollatrl = null;
    /** @var mixed */
    public $pofferbegdt = null;
    /** @var mixed */
    public $pofferenddt = null;
    /** @var mixed */
    public $revisnr = null;
    /** @var mixed */
    public $lastrevision = null;
    /** @var mixed */
    public $checkamount = null;
    /** @var mixed */
    public $transactions = null;
    /** @var mixed */
    public $totbefvat = null;
    /** @var mixed */
    public $title = null;
    /** @var mixed */
    public $allshipped = null;
    /** @var mixed */
    public $allclosed = null;
    /** @var mixed */
    public $truncated = null;
    /** @var mixed */
    public $priceidx = null;
    /** @var mixed */
    public $linecnt = null;
    /** @var mixed */
    public $updated = null;
    /** @var mixed */
    public $addexpvat = null;
    /** @var mixed */
    public $condrun = null;
    /** @var mixed */
    public $logevent = null;
    /** @var mixed */
    public $linesinuse = null;
    /** @var mixed */
    public $shipments = null;
    /** @var mixed */
    public $distributions = null;
    /** @var mixed */
    public $prodlinked = null;
    /** @var mixed */
    public $promlinked = null;
    /** @var mixed */
    public $oldfdate = null;
    /** @var mixed */
    public $globalprom = null;
    /** @var mixed */
    public $btype = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $xcnt = null;
    /** @var mixed */
    public $curop = null;
    /** @var mixed */
    public $oldstatus = null;
    /** @var mixed */
    public $docals = null;
    /** @var mixed */
    public $clcardactive = null;
    /** @var mixed */
    public $payplanactive = null;
    /** @var mixed */
    public $slsmanactive = null;
    /** @var mixed */
    public $warnactive = null;
    /** @var mixed */
    public $edttotexpense = null;
    /** @var mixed */
    public $edttotaldisc = null;
    /** @var mixed */
    public $edttotbefvat = null;
    /** @var mixed */
    public $edttotalvat = null;
    /** @var mixed */
    public $edtnettotal = null;
    /** @var mixed */
    public $shpcltitle = null;
    /** @var mixed */
    public $fcnochanged = null;
    /** @var mixed */
    public $docnrref = null;
    /** @var mixed */
    public $textchg = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $shipinfcode = null;
    /** @var mixed */
    public $shipinfdef = null;
    /** @var mixed */
    public $vatexempt = null;
    /** @var mixed */
    public $fastdatawinon = null;
    /** @var mixed */
    public $contractno = null;
    /** @var mixed */
    public $payoutlines = null;
    /** @var mixed */
    public $frompos = null;
    /** @var mixed */
    public $guarantor1Logicalr = null;
    /** @var mixed */
    public $guarantor1Fichetyp = null;
    /** @var mixed */
    public $guarantor1Ficheref = null;
    /** @var mixed */
    public $guarantor1Guaranto = null;
    /** @var mixed */
    public $guarantor1Gnamesur = null;
    /** @var mixed */
    public $guarantor1Addr1 = null;
    /** @var mixed */
    public $guarantor1Addr2 = null;
    /** @var mixed */
    public $guarantor1District = null;
    /** @var mixed */
    public $guarantor1Town = null;
    /** @var mixed */
    public $guarantor1City = null;
    /** @var mixed */
    public $guarantor1Country = null;
    /** @var mixed */
    public $guarantor1Postcode = null;
    /** @var mixed */
    public $guarantor1Telnrs1 = null;
    /** @var mixed */
    public $guarantor1Telnrs2 = null;
    /** @var mixed */
    public $guarantor1Faxnr = null;
    /** @var mixed */
    public $guarantor1Siteid = null;
    /** @var mixed */
    public $guarantor1Recstatu = null;
    /** @var mixed */
    public $guarantor1Orglogic = null;
    /** @var mixed */
    public $guarantor1Clientre = null;
    /** @var mixed */
    public $guarantor1Taxnr = null;
    /** @var mixed */
    public $guarantor1Taxoffic = null;
    /** @var mixed */
    public $guarantor1Taxoffco = null;
    /** @var mixed */
    public $guarantor1Bankbran = null;
    /** @var mixed */
    public $guarantor1Bankacco = null;
    /** @var mixed */
    public $guarantor2Logicalr = null;
    /** @var mixed */
    public $guarantor2Fichetyp = null;
    /** @var mixed */
    public $guarantor2Ficheref = null;
    /** @var mixed */
    public $guarantor2Guaranto = null;
    /** @var mixed */
    public $guarantor2Gnamesur = null;
    /** @var mixed */
    public $guarantor2Addr1 = null;
    /** @var mixed */
    public $guarantor2Addr2 = null;
    /** @var mixed */
    public $guarantor2District = null;
    /** @var mixed */
    public $guarantor2Town = null;
    /** @var mixed */
    public $guarantor2City = null;
    /** @var mixed */
    public $guarantor2Country = null;
    /** @var mixed */
    public $guarantor2Postcode = null;
    /** @var mixed */
    public $guarantor2Telnrs1 = null;
    /** @var mixed */
    public $guarantor2Telnrs2 = null;
    /** @var mixed */
    public $guarantor2Faxnr = null;
    /** @var mixed */
    public $guarantor2Siteid = null;
    /** @var mixed */
    public $guarantor2Recstatu = null;
    /** @var mixed */
    public $guarantor2Orglogic = null;
    /** @var mixed */
    public $guarantor2Clientre = null;
    /** @var mixed */
    public $guarantor2Taxnr = null;
    /** @var mixed */
    public $guarantor2Taxoffic = null;
    /** @var mixed */
    public $guarantor2Taxoffco = null;
    /** @var mixed */
    public $guarantor2Bankbran = null;
    /** @var mixed */
    public $guarantor2Bankacco = null;
    /** @var mixed */
    public $frominstal = null;
    /** @var mixed */
    public $projectcactive = null;
    /** @var mixed */
    public $fromtaskbrw = null;
    /** @var mixed */
    public $defnfldslist = null;
    /** @var mixed */
    public $bdgterrno = null;
    /** @var mixed */
    public $bdgterraccref1 = null;
    /** @var mixed */
    public $bdgterraccref2 = null;
    /** @var mixed */
    public $noreservation = null;
    /** @var mixed */
    public $fromdevir = null;
    /** @var mixed */
    public $actaltnr = null;
    /** @var mixed */
    public $transfertyp = null;
    /** @var mixed */
    public $slsopperref = null;
    /** @var mixed */
    public $slsopprno = null;
    /** @var mixed */
    public $slsactref = null;
    /** @var mixed */
    public $slscustref = null;
    /** @var mixed */
    public $slscustcode = null;
    /** @var mixed */
    public $exchinfoInternalReference = null;
    /** @var mixed */
    public $exchinfoFicheRef = null;
    /** @var mixed */
    public $exchinfoAddDiscounts = null;
    /** @var mixed */
    public $exchinfoTotalDiscounts = null;
    /** @var mixed */
    public $exchinfoTotalDiscounted = null;
    /** @var mixed */
    public $exchinfoAddExpenses = null;
    /** @var mixed */
    public $exchinfoTotalExpenses = null;
    /** @var mixed */
    public $exchinfoDistExpense = null;
    /** @var mixed */
    public $exchinfoTotalDepozito = null;
    /** @var mixed */
    public $exchinfoTotalPromotions = null;
    /** @var mixed */
    public $exchinfoVatIncGross = null;
    /** @var mixed */
    public $exchinfoTotalVat = null;
    /** @var mixed */
    public $exchinfoGrossTotal = null;
    /** @var mixed */
    public $exchinfoTotalAddTax = null;
    /** @var mixed */
    public $exchinfoTotalExAddTax = null;
    /** @var mixed */
    public $exchinfoBagkur = null;
    /** @var mixed */
    public $exchinfoStopaj = null;
    /** @var mixed */
    public $exchinfoSsdf = null;
    /** @var mixed */
    public $exchinfoBorsa = null;
    /** @var mixed */
    public $exchinfoKomisyon = null;
    /** @var mixed */
    public $exchinfoKomKdv = null;
    /** @var mixed */
    public $exchinfoEk1 = null;
    /** @var mixed */
    public $exchinfoEk2 = null;
    /** @var mixed */
    public $exchinfoEk3 = null;
    /** @var mixed */
    public $exchinfoEk4 = null;
    /** @var mixed */
    public $exchinfoEk5 = null;
    /** @var mixed */
    public $approve = null;
    /** @var mixed */
    public $approveDate = null;
    /** @var mixed */
    public $applyArpDiscount = null;
    /** @var mixed */
    public $deductionPart1 = null;
    /** @var mixed */
    public $deductionPart2 = null;
    /** @var mixed */
    public $devir = null;
    /** @var mixed */
    public $deliveryCode = null;
    /** @var mixed */
    public $originalDate = null;
    /** @var mixed */
    public $activityRenting = null;
    /** @var mixed */
    public $addDiscountsVat = null;
    /** @var mixed */
    public $payerid = null;
    /** @var mixed */
    public $payertype = null;
    /** @var mixed */
    public $cantCreDeduct = null;
    /** @var mixed */
    public $payermicro = null;
    /** @var mixed */
    public $contactref = null;
}

/**
 * PurchaseProposalOffersAnalytics
 */
class PurchaseProposalOffersAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
