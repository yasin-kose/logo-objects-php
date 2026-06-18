<?php

declare(strict_types=1);

namespace LogoObjects\Clients\itemSlips;

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
 * RscollectionrsMattransxml
 */
class RscollectionrsMattransxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\itemSlips\RsMattransxml::class],
        ]);
    }
}

/**
 * RscollectionrsFaregtrnxml
 */
class RscollectionrsFaregtrnxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\itemSlips\RsFaregtrnxml::class],
        ]);
    }
}

/**
 * RscollectionrsSlloctrnxml
 */
class RscollectionrsSlloctrnxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\itemSlips\RsSlloctrnxml::class],
        ]);
    }
}

/**
 * RscollectionrsQccvalentryxml
 */
class RscollectionrsQccvalentryxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\itemSlips\RsQccvalentryxml::class],
        ]);
    }
}

/**
 * RscollectionrsQccvallistxml
 */
class RscollectionrsQccvallistxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\itemSlips\RsQccvallistxml::class],
        ]);
    }
}

/**
 * RscollectionrsDetmattrxml
 */
class RscollectionrsDetmattrxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\itemSlips\RsDetmattrxml::class],
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
            'items' => [\LogoObjects\Clients\itemSlips\ExtendedFieldDefinitions::class],
        ]);
    }
}

/**
 * Rscollectiondemandpeggings
 */
class Rscollectiondemandpeggings extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\itemSlips\DemandPeggings::class],
        ]);
    }
}

/**
 * RscollectionrsLabelxml
 */
class RscollectionrsLabelxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\itemSlips\RsLabelxml::class],
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
 * RsMattransxml
 */
class RsMattransxml extends \LogoObjects\Types\BaseEntity
{
    public ?string $ITEM_CODE = null;
    /** @var int|float|null */
    public $ITEM_REFERENCE = null;
    /** @var int|float|null */
    public $LINE_TYPE = null;
    /** @var int|float|null */
    public $PREVLINEREF = null;
    /** @var int|float|null */
    public $PREVLINENO = null;
    /** @var int|float|null */
    public $DETLINE = null;
    /** @var int|float|null */
    public $TYPE = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $TIME = null;
    /** @var int|float|null */
    public $DETAIL_LEVEL = null;
    /** @var int|float|null */
    public $DISCEXP_CALC = null;
    public ?string $PORDER_CODE = null;
    /** @var int|float|null */
    public $PRORD_SITE = null;
    /** @var int|float|null */
    public $PRORD_REFERENCE = null;
    /** @var int|float|null */
    public $PORDER_SLP_INRESERVE = null;
    /** @var int|float|null */
    public $PRORD_TYPE = null;
    /** @var int|float|null */
    public $QPROD_TYPE = null;
    /** @var int|float|null */
    public $QPROD_ITEM_TYPE = null;
    /** @var int|float|null */
    public $SUBCONTORDERREF = null;
    public ?string $SCORDER_NUMBER = null;
    /** @var int|float|null */
    public $SOURCETYPE = null;
    /** @var int|float|null */
    public $SOURCEINDEX = null;
    /** @var int|float|null */
    public $SOURCECOSTGRP = null;
    /** @var int|float|null */
    public $SOURCEWSREF = null;
    /** @var int|float|null */
    public $SOURCEPOLN_REFERENCE = null;
    /** @var int|float|null */
    public $DESTTYPE = null;
    /** @var int|float|null */
    public $DESTINDEX = null;
    /** @var int|float|null */
    public $DESTCOSTGRP = null;
    /** @var int|float|null */
    public $DESTWSREF = null;
    /** @var int|float|null */
    public $DESTPOLN_REFERENCE = null;
    /** @var int|float|null */
    public $FACTORYNR = null;
    /** @var int|float|null */
    public $IOCODE = null;
    /** @var int|float|null */
    public $STFICHEREF = null;
    /** @var int|float|null */
    public $LINE_NUMBER = null;
    /** @var int|float|null */
    public $INVOICEREF = null;
    /** @var int|float|null */
    public $INVOICELNNO = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    public ?string $ORDER_VOUCH_NR = null;
    /** @var int|float|null */
    public $ORDTRANSREF = null;
    /** @var int|float|null */
    public $ORDFICHEREF = null;
    public ?string $GL_CODE1 = null;
    public ?string $OHP_CODE1 = null;
    /** @var int|float|null */
    public $CENTERREF = null;
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
    public ?string $PAYMENT_CODE = null;
    /** @var int|float|null */
    public $PAYDEFREF = null;
    public ?string $AUXIL_CODE = null;
    public ?string $DELVRY_CODE = null;
    /** @var int|float|null */
    public $QUANTITY = null;
    /** @var int|float|null */
    public $PRICE = null;
    /** @var int|float|null */
    public $TOTAL = null;
    /** @var int|float|null */
    public $NET_TOTAL = null;
    /** @var int|float|null */
    public $CURR_PRICE = null;
    /** @var int|float|null */
    public $PC_PRICE = null;
    /** @var int|float|null */
    public $CURR_TRANS = null;
    /** @var int|float|null */
    public $TC_XRATE = null;
    /** @var int|float|null */
    public $RC_XRATE = null;
    /** @var int|float|null */
    public $TCOST_DISTR = null;
    /** @var int|float|null */
    public $DISCOUNT_DISTR = null;
    /** @var int|float|null */
    public $EXPENSE_DISTR = null;
    /** @var int|float|null */
    public $PROMOTION_DISTR = null;
    /** @var int|float|null */
    public $DISCOUNT_PERC = null;
    public ?string $DESCRIPTION = null;
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
    public $PLNAMOUNT = null;
    /** @var int|float|null */
    public $VAT_INCLUDED = null;
    /** @var int|float|null */
    public $VAT_PERC = null;
    /** @var int|float|null */
    public $VAT_AMNT = null;
    /** @var int|float|null */
    public $VAT_BASE = null;
    /** @var int|float|null */
    public $BILLEDITEM = null;
    /** @var int|float|null */
    public $BILLED = null;
    /** @var int|float|null */
    public $COMPOSITE = null;
    /** @var int|float|null */
    public $RET_COST_TYPE = null;
    /** @var int|float|null */
    public $SOURCELINK = null;
    /** @var int|float|null */
    public $RET_COST = null;
    /** @var int|float|null */
    public $CURR_RET_COST = null;
    /** @var int|float|null */
    public $OUT_COST = null;
    /** @var int|float|null */
    public $CURR_OUT_COST = null;
    /** @var int|float|null */
    public $RET_QUANTITY = null;
    public ?string $FAREG_CODE = null;
    /** @var int|float|null */
    public $FAREGREF = null;
    /** @var int|float|null */
    public $FA_STATUS = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    /** @var int|float|null */
    public $DISTADDEXP = null;
    /** @var int|float|null */
    public $FADACCREF = null;
    /** @var int|float|null */
    public $FADCENTERREF = null;
    /** @var int|float|null */
    public $FARACCREF = null;
    /** @var int|float|null */
    public $FARCENTERREF = null;
    /** @var int|float|null */
    public $PRICE_ADJUSTMENT = null;
    /** @var int|float|null */
    public $COST_ADJUSTMENT_PR = null;
    /** @var int|float|null */
    public $NEGPRC_ADJUSTMENT = null;
    /** @var int|float|null */
    public $LPRODSTAT = null;
    /** @var int|float|null */
    public $PRDEXPTOTAL = null;
    /** @var int|float|null */
    public $RC_PRJADJUST = null;
    /** @var int|float|null */
    public $RC_COSTADJUST = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    /** @var int|float|null */
    public $FAPLACCREF = null;
    /** @var int|float|null */
    public $FAPLCENTERREF = null;
    public ?string $OUTPUT_IDCODE = null;
    /** @var int|float|null */
    public $DREF = null;
    /** @var int|float|null */
    public $COST_RATE = null;
    /** @var int|float|null */
    public $XPRICEUPD = null;
    /** @var int|float|null */
    public $XPRICE = null;
    /** @var int|float|null */
    public $XREPRATE = null;
    /** @var int|float|null */
    public $DISTCOEF = null;
    /** @var int|float|null */
    public $QC_STATUS = null;
    /** @var RscollectionrsFaregtrnxml|null */
    public $FA_INFO = null;
    /** @var RscollectionrsSlloctrnxml|null */
    public $SL_DETAILS = null;
    public ?string $SLDELLIST = null;
    /** @var RscollectionrsDetmattrxml|null */
    public $DETAILS = null;
    public ?string $DETDELLIST = null;
    public ?string $QCLIST = null;
    /** @var int|float|null */
    public $VEND_COMM = null;
    /** @var int|float|null */
    public $PREV_OUT_COST = null;
    /** @var int|float|null */
    public $COSTOFSALEACCREF = null;
    public ?string $COST_OF_SALE_GL_CODE = null;
    /** @var int|float|null */
    public $PURCHACCREF = null;
    public ?string $PURCH_GL_CODE = null;
    /** @var int|float|null */
    public $COSTOFSALECNTREF = null;
    public ?string $COST_OF_SALE_OHP_CODE = null;
    /** @var int|float|null */
    public $PURCHCENTREF = null;
    public ?string $PURCH_OHP_CODE = null;
    /** @var int|float|null */
    public $PREV_OUT_COST_CURR = null;
    /** @var int|float|null */
    public $EU_VAT_AMOUNT = null;
    /** @var int|float|null */
    public $EU_VAT_STATUS = null;
    /** @var int|float|null */
    public $PR_RATE = null;
    /** @var int|float|null */
    public $ADD_TAX_RATE = null;
    /** @var int|float|null */
    public $ADD_TAX_CONV_FACT = null;
    /** @var int|float|null */
    public $ADD_TAX_AMOUNT = null;
    /** @var int|float|null */
    public $ADD_TAX_PRCOST = null;
    /** @var int|float|null */
    public $ADD_TAX_RETCOST = null;
    /** @var int|float|null */
    public $ADD_TAX_RETCOSTCURR = null;
    /** @var int|float|null */
    public $GROSS_U_INFO1 = null;
    /** @var int|float|null */
    public $GROSS_U_INFO2 = null;
    /** @var int|float|null */
    public $ADD_TAX_PRCOSTCURR = null;
    /** @var int|float|null */
    public $ADD_TAX_ACCREF = null;
    public ?string $GL_CODE5 = null;
    /** @var int|float|null */
    public $ADD_TAX_CENTERREF = null;
    public ?string $OHP_CODE5 = null;
    /** @var int|float|null */
    public $ADD_TAX_AMNT_IS_UPD = null;
    /** @var int|float|null */
    public $PLN_STTRANS_PER_NR = null;
    /** @var int|float|null */
    public $PORD_CLS_PLN_AMNT = null;
    /** @var int|float|null */
    public $PLN_STTRANS_REFERENCE = null;
    /** @var int|float|null */
    public $PLN_AMOUNT = null;
    /** @var int|float|null */
    public $INFLATION_IDX = null;
    /** @var int|float|null */
    public $PRDORD_TOT_COEF = null;
    /** @var int|float|null */
    public $DEMPEGGED_AMNT = null;
    /** @var int|float|null */
    public $STDUNIT_COST = null;
    /** @var int|float|null */
    public $STDRPUNIT_COST = null;
    /** @var int|float|null */
    public $INFLDX = null;
    /** @var int|float|null */
    public $COSTDIFF_ACCREF = null;
    public ?string $COSTDIFF_ACCCODE = null;
    /** @var int|float|null */
    public $COSTDIFF_CENREF = null;
    public ?string $COSTDIFF_CENCODE = null;
    /** @var int|float|null */
    public $ADDTAXDISC_AMNT = null;
    public ?string $ORGLOGOID = null;
    public ?string $EXIM_FICHENO = null;
    /** @var int|float|null */
    public $EXIM_FILELINENR = null;
    public ?string $ITEXT = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    /** @var int|float|null */
    public $ORGLINKREF = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $DEFNFLDSLIST = null;
    /** @var int|float|null */
    public $PORDSYMOUTLN = null;
    /** @var int|float|null */
    public $PRCLISTREF = null;
    /** @var int|float|null */
    public $EXADDTAXRATE = null;
    /** @var int|float|null */
    public $EXADDTAXCONVF = null;
    public ?string $EXADDTAXACODE = null;
    /** @var int|float|null */
    public $EXADDTAXAREF = null;
    public ?string $EXADDTAXCCODE = null;
    /** @var int|float|null */
    public $EXADDTAXCREF = null;
    public ?string $OTHRADDTAXACODE = null;
    /** @var int|float|null */
    public $OTHRADDTAXAREF = null;
    public ?string $OTHRADDTAXCCODE = null;
    /** @var int|float|null */
    public $OTHRADDTAXCREF = null;
    /** @var int|float|null */
    public $EXADDTAXAMNT = null;
    /** @var int|float|null */
    public $AFFECT_COLLATRL = null;
    /** @var int|float|null */
    public $VARIANTREF = null;
    public ?string $VARIANTCODE = null;
    public ?string $VARIANTNAME = null;
    /** @var int|float|null */
    public $CANCONFIG = null;
    public ?string $VCHARLIST = null;
    /** @var int|float|null */
    public $EDT_PRICE = null;
    /** @var int|float|null */
    public $EDT_CURR = null;
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
    public $ADD_TAX_VAT_MATRAH = null;
    /** @var int|float|null */
    public $EXCLINE_ADD_TAX_VAT_MATRAH = null;
    /** @var int|float|null */
    public $RELTRANSLNREF = null;
    /** @var int|float|null */
    public $FROMTRANSFER = null;
    /** @var int|float|null */
    public $MAIN_MT_REFERENCE = null;
    /** @var int|float|null */
    public $MAIN_MT_SITEID = null;
    public ?string $PRCLISTCODE = null;
    /** @var int|float|null */
    public $PRCLISTTYPE = null;
    public ?string $FAPL_GL_CODE = null;
    public ?string $FAPL_OHP_CODE = null;
    /** @var int|float|null */
    public $FAPROFITACCREF = null;
    public ?string $FAPROFIT_GL_CODE = null;
    /** @var int|float|null */
    public $FAPROFITCENTREF = null;
    public ?string $FAPROFIT_OHP_CODE = null;
    /** @var int|float|null */
    public $FALOSSACCREF = null;
    public ?string $FALOSS_GL_CODE = null;
    /** @var int|float|null */
    public $FALOSSCENTREF = null;
    public ?string $FALOSS_OHP_CODE = null;
    public ?string $GLOBAL_ID = null;
    public ?string $AUXIL_CODE2 = null;
    public ?string $INF_DATE = null;
    /** @var int|float|null */
    public $DEST_STATUS = null;
    /** @var int|float|null */
    public $REGTYPREF = null;
    public ?string $REG_TYPE_CODE = null;
    public ?string $CPA_CODE = null;
    public ?string $GTIP_CODE = null;
    /** @var int|float|null */
    public $PUBLICCOUNTRYREF = null;
    public ?string $PUBLIC_COUNTRY_CODE = null;
    public ?string $PUBLIC_COUNTRY_NAME = null;
    /** @var int|float|null */
    public $FUTURE_MONTH_COUNT = null;
    public ?string $FUTURE_MONTH_BEGDATE = null;
    public ?string $FUTURE_MONTH_ENDDATE = null;
    /** @var int|float|null */
    public $QC_TRANSFER_REF = null;
    /** @var int|float|null */
    public $QC_TRANSFER_AMOUNT = null;
    /** @var int|float|null */
    public $FA_KKEG_AMOUNT = null;
    /** @var int|float|null */
    public $KKEGACCREF = null;
    public ?string $KKEG_GL_CODE = null;
    /** @var int|float|null */
    public $KKEGCENREF = null;
    public ?string $KKEG_OHP_CODE = null;
    /** @var int|float|null */
    public $KKEGVATACCREF = null;
    public ?string $KKEG_VAT_GL_CODE = null;
    /** @var int|float|null */
    public $KKEGVATCENREF = null;
    public ?string $KKEG_VAT_OHP_CODE = null;
    /** @var int|float|null */
    public $EXPRACCREF = null;
    public ?string $EXPR_GL_CODE = null;
    /** @var int|float|null */
    public $EXPRCNTRREF = null;
    public ?string $EXPR_OHP_CODE = null;
    /** @var int|float|null */
    public $ADDTAXVATACCREF = null;
    public ?string $ADD_TAX_VAT_ACC_CODE = null;
    /** @var int|float|null */
    public $ADDTAXVATCENREF = null;
    public ?string $ADD_TAX_VAT_OHP_CODE = null;
    /** @var int|float|null */
    public $MIDDLEMAN_EXP_TYPE = null;
    public ?string $MARKING_TAGNO = null;
    public ?string $OWNER = null;
    public ?string $TCK_TAXNR = null;
    /** @var int|float|null */
    public $EXP_DAYS = null;
    /** @var int|float|null */
    public $FROMINTEGTYPE = null;
    /** @var int|float|null */
    public $FROMINTEGREF = null;
    /** @var int|float|null */
    public $TAXFREEACCREF = null;
    /** @var int|float|null */
    public $TAXFREECNTRREF = null;
    /** @var int|float|null */
    public $EISRVDSTADDTAXINC = null;
    /** @var int|float|null */
    public $QCTRANSFERREF2 = null;
    /** @var int|float|null */
    public $QCTRANSFERAMNT2 = null;
    /** @var int|float|null */
    public $ITMDISC = null;
    /** @var int|float|null */
    public $MERGED_COUNT = null;
    /** @var int|float|null */
    public $ADD_TAX_REF = null;
    /** @var int|float|null */
    public $ADD_TAX_EFFECT_KDV = null;
    /** @var int|float|null */
    public $ADD_TAX_INLNNET = null;
    /** @var int|float|null */
    public $ORDFICHECMREF = null;
    /** @var int|float|null */
    public $PURCHACCREFINFL = null;
    /** @var int|float|null */
    public $PURCHCENTREFINFL = null;
    /** @var int|float|null */
    public $COSACCREFINFL = null;
    /** @var int|float|null */
    public $COSCNTREFINFL = null;
    /** @var int|float|null */
    public $PROUTCOSTINFLDIFF = null;
    /** @var int|float|null */
    public $PROUTCOSTCRINFLDIFF = null;
    /** @var int|float|null */
    public $ORGPRICE = null;
    /** @var int|float|null */
    public $RETSOURCELINK = null;
    public ?string $DIIBLINECODE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'FA_INFO' => \LogoObjects\Clients\itemSlips\RscollectionrsFaregtrnxml::class,
            'SL_DETAILS' => \LogoObjects\Clients\itemSlips\RscollectionrsSlloctrnxml::class,
            'DETAILS' => \LogoObjects\Clients\itemSlips\RscollectionrsDetmattrxml::class,
            'DEFNFLDSLIST' => \LogoObjects\Clients\itemSlips\Rscollectionextendedfielddefinitions::class,
        ]);
    }
}

/**
 * RsFaregtrnxml
 */
class RsFaregtrnxml extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    /** @var int|float|null */
    public $DIVISION = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $SOURCE_WH = null;
    /** @var int|float|null */
    public $TRANSFER = null;
    /** @var int|float|null */
    public $CRDREF = null;
    /** @var int|float|null */
    public $FICHEREF = null;
    public ?string $DATE_ACQUIRED = null;
    public ?string $DATE_DEPRSTART = null;
    /** @var int|float|null */
    public $QUANTITY = null;
    /** @var int|float|null */
    public $QUANTITY_OUT = null;
    /** @var int|float|null */
    public $ACQ_VALUE = null;
    /** @var int|float|null */
    public $VAT_AMOUNT = null;
    /** @var int|float|null */
    public $VAT_POST_DUR = null;
    /** @var int|float|null */
    public $DEPR_RATE = null;
    /** @var int|float|null */
    public $DEPR_DUR = null;
    /** @var int|float|null */
    public $DEPR_TYPE = null;
    /** @var int|float|null */
    public $REVALUATE = null;
    /** @var int|float|null */
    public $REV_DEPR = null;
    /** @var int|float|null */
    public $PARTIAL_DEPR = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    /** @var int|float|null */
    public $RC_XRATE = null;
    /** @var int|float|null */
    public $RC_ACQ_VALUE = null;
    /** @var int|float|null */
    public $TOTAL_EXPENSES = null;
    /** @var int|float|null */
    public $ACCUM_DEPR = null;
    /** @var int|float|null */
    public $ACCUM_REVAL = null;
    /** @var int|float|null */
    public $RC_TOTAL_EXPN = null;
    /** @var int|float|null */
    public $RC_ACCUM_DEPR = null;
    /** @var int|float|null */
    public $RC_ACCUM_REVAL = null;
    /** @var int|float|null */
    public $DEPR_TYPE2 = null;
    /** @var int|float|null */
    public $DEPR_RATE2 = null;
    /** @var int|float|null */
    public $DEPR_DUR2 = null;
    /** @var int|float|null */
    public $REVALUATE2 = null;
    /** @var int|float|null */
    public $REV_DEPR2 = null;
    /** @var int|float|null */
    public $OPEN_REVAL = null;
    /** @var int|float|null */
    public $OPEN_DEPR = null;
    /** @var int|float|null */
    public $OPEN_REVDEPR = null;
    /** @var int|float|null */
    public $RC_OPENREV = null;
    /** @var int|float|null */
    public $RC_OPENDEPR = null;
    /** @var int|float|null */
    public $RC_OPENREVDEPR = null;
    /** @var int|float|null */
    public $OPEN_REVAL2 = null;
    /** @var int|float|null */
    public $OPEN_DEPR2 = null;
    /** @var int|float|null */
    public $OPEN_REVDEPR2 = null;
    /** @var int|float|null */
    public $RC_OPENREV2 = null;
    /** @var int|float|null */
    public $RC_OPENDEPR2 = null;
    /** @var int|float|null */
    public $RC_OPENREVDEPR2 = null;
    /** @var int|float|null */
    public $DATE_DEPRSTART2 = null;
    /** @var int|float|null */
    public $PART_DEP2 = null;
    /** @var int|float|null */
    public $DIFF_PRICE = null;
    /** @var int|float|null */
    public $DIFFREP_PRICE = null;
    /** @var int|float|null */
    public $DISC_INCL = null;
    /** @var int|float|null */
    public $DISC_RATE = null;
    /** @var int|float|null */
    public $ANNUAL_DIST_VAL = null;
    /** @var int|float|null */
    public $INF_BASED_VALUE = null;
    public ?string $REGTYPCODE = null;
    public ?string $REGTYPDEF = null;
    public ?string $REGEXPENSCODE = null;
    public ?string $REGEXPENSDEF = null;
    /** @var int|float|null */
    public $APPROVE = null;
    public ?string $APPROVE_DATE = null;
    /** @var int|float|null */
    public $OTV_AMOUNT = null;
    public ?string $GUID = null;
    /** @var int|float|null */
    public $FIGS_TOT_COST = null;
    /** @var int|float|null */
    public $FIGS_TOT_COSTX = null;
}

/**
 * RsSlloctrnxml
 */
class RsSlloctrnxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $STFICHEREF = null;
    /** @var int|float|null */
    public $STTRANSREF = null;
    /** @var int|float|null */
    public $SOURCE_MT_SITEID = null;
    /** @var int|float|null */
    public $SOURCE_MT_REFERENCE = null;
    /** @var int|float|null */
    public $SOURCE_SLT_SITEID = null;
    /** @var int|float|null */
    public $SOURCE_SLT_REFERENCE = null;
    /** @var int|float|null */
    public $SOURCE_QUANTITY = null;
    /** @var int|float|null */
    public $LINENR = null;
    /** @var int|float|null */
    public $ITEMREF = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $IOCODE = null;
    /** @var int|float|null */
    public $SOURCE_WH = null;
    /** @var int|float|null */
    public $FICHETYPE = null;
    /** @var int|float|null */
    public $SL_TYPE = null;
    public ?string $SL_CODE = null;
    public ?string $SL_NAME = null;
    public ?string $GROUPL_CODE = null;
    /** @var int|float|null */
    public $SLREF = null;
    public ?string $LOCATION_CODE = null;
    /** @var int|float|null */
    public $LOCREF = null;
    public ?string $DEST_LOCATION_CODE = null;
    /** @var int|float|null */
    public $MU_QUANTITY = null;
    public ?string $UNIT_CODE = null;
    /** @var int|float|null */
    public $UOMREF = null;
    /** @var int|float|null */
    public $QUANTITY = null;
    /** @var int|float|null */
    public $REM_QUANTITY = null;
    /** @var int|float|null */
    public $LU_REM_QUANTITY = null;
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
    public ?string $DATE_EXPIRED = null;
    public ?string $DATE_URT = null;
    /** @var int|float|null */
    public $RATE_SCORE = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    /** @var int|float|null */
    public $OUT_COST = null;
    /** @var int|float|null */
    public $TC_OUT_COST = null;
    /** @var int|float|null */
    public $PRCDIF_COST = null;
    /** @var int|float|null */
    public $TC_PRCDIF_COST = null;
    /** @var int|float|null */
    public $SL_QC_OK = null;
    /** @var int|float|null */
    public $LPRODSTAT = null;
    /** @var int|float|null */
    public $SOURCE_TYPE = null;
    /** @var int|float|null */
    public $SOURCEWSREF = null;
    /** @var int|float|null */
    public $WF_STATUS = null;
    /** @var int|float|null */
    public $DESTLOCREF = null;
    public ?string $SLNAME = null;
    public ?string $LOCNAME = null;
    public ?string $DESTLOCCODE = null;
    public ?string $DESTLOCNAME = null;
    /** @var int|float|null */
    public $INTRANSAMOUNT = null;
    /** @var int|float|null */
    public $INTRLNAMOUNT = null;
    /** @var RscollectionrsQccvalentryxml|null */
    public $QCLIST = null;
    public ?string $INSLUNITCODE = null;
    /** @var int|float|null */
    public $INSLUNITREF = null;
    /** @var int|float|null */
    public $DESTYPE = null;
    /** @var int|float|null */
    public $DESTWSREF = null;
    /** @var int|float|null */
    public $DISTORDREF = null;
    /** @var int|float|null */
    public $DISTORDLNREF = null;
    /** @var int|float|null */
    public $SOURCE_DIST_SL_SITEID = null;
    /** @var int|float|null */
    public $SOURCE_DIST_SL_REFERENCE = null;
    /** @var int|float|null */
    public $GROSS_U_INFO1 = null;
    /** @var int|float|null */
    public $GROSS_U_INFO2 = null;
    /** @var int|float|null */
    public $ADD_TAX_PRCOST = null;
    /** @var int|float|null */
    public $ADD_TAX_PRCOSTCURR = null;
    /** @var int|float|null */
    public $INFLATION_IDX = null;
    public ?string $ORGLOGOID = null;
    /** @var int|float|null */
    public $ORGLINKREF = null;
    public ?string $LINEEXP = null;
    public ?string $GRP_BEG_CODE = null;
    public ?string $GRP_END_CODE = null;
    /** @var int|float|null */
    public $PRODORDREF = null;
    public ?string $PORDER_FICHE_NR = null;
    /** @var int|float|null */
    public $PORDER_SLP_INRESERVE = null;
    /** @var int|float|null */
    public $INPLN_SLT_SITEID = null;
    /** @var int|float|null */
    public $INPLN_SLT_REFERENCE = null;
    /** @var int|float|null */
    public $DELIVERABLE = null;
    /** @var int|float|null */
    public $QC_TRANSFER_REF = null;
    /** @var int|float|null */
    public $QC_TRANSFER_AMOUNT = null;
    public ?string $GUID = null;
    public ?string $SPECODE = null;
    public ?string $SPECODE2 = null;
    /** @var int|float|null */
    public $QCTRANSFERREF2 = null;
    /** @var int|float|null */
    public $QCTRANSFERAMNT2 = null;
    public ?string $TIBBICIHAZURTDATE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'QCLIST' => \LogoObjects\Clients\itemSlips\RscollectionrsQccvalentryxml::class,
        ]);
    }
}

/**
 * RsQccvalentryxml
 */
class RsQccvalentryxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $ASGNTYPE = null;
    /** @var int|float|null */
    public $ITEMREF = null;
    /** @var int|float|null */
    public $FICHEREF = null;
    /** @var int|float|null */
    public $STTRANSREF = null;
    /** @var int|float|null */
    public $SLTRANSREF = null;
    /** @var int|float|null */
    public $QCSETREF = null;
    /** @var int|float|null */
    public $QCCODEREF = null;
    /** @var int|float|null */
    public $QCVALREF = null;
    /** @var int|float|null */
    public $QCASGNLOGICREF = null;
    /** @var int|float|null */
    public $QCREVNO = null;
    /** @var int|float|null */
    public $QTYPE = null;
    /** @var int|float|null */
    public $LINENR = null;
    /** @var int|float|null */
    public $AMOUNT = null;
    /** @var int|float|null */
    public $QVALUE = null;
    /** @var int|float|null */
    public $CONFIRMED = null;
    public ?string $QDATE = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    public ?string $DESCRIPTION = null;
    /** @var int|float|null */
    public $CONDCONAMOUNT = null;
    public ?string $QCODE = null;
    public ?string $QNAME = null;
    public ?string $VALCODE = null;
    public ?string $VALNAME = null;
    /** @var RscollectionrsQccvallistxml|null */
    public $VALLIST = null;
    public ?string $VDELLIST = null;
    public ?string $TLIST = null;
    /** @var int|float|null */
    public $NOMVALUE = null;
    /** @var int|float|null */
    public $MINVALUE = null;
    /** @var int|float|null */
    public $MAXVALUE = null;
    public ?string $MUNIT = null;
    public ?string $QUNIT = null;
    /** @var int|float|null */
    public $FREQUENCY = null;
    /** @var int|float|null */
    public $COUNTER = null;
    /** @var int|float|null */
    public $SAMPLESIZE = null;
    /** @var int|float|null */
    public $NONCONAMOUNT = null;
    /** @var int|float|null */
    public $QCRESULT = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'VALLIST' => \LogoObjects\Clients\itemSlips\RscollectionrsQccvallistxml::class,
        ]);
    }
}

/**
 * RsQccvallistxml
 */
class RsQccvallistxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $ASGNTYPE = null;
    /** @var int|float|null */
    public $ITEMREF = null;
    /** @var int|float|null */
    public $FICHEREF = null;
    /** @var int|float|null */
    public $STTRANSREF = null;
    /** @var int|float|null */
    public $SLTRANSREF = null;
    /** @var int|float|null */
    public $QCSETREF = null;
    /** @var int|float|null */
    public $QCCODEREF = null;
    /** @var int|float|null */
    public $QCVALREF = null;
    /** @var int|float|null */
    public $QCASGNLOGICREF = null;
    /** @var int|float|null */
    public $QCREVNO = null;
    /** @var int|float|null */
    public $QTYPE = null;
    /** @var int|float|null */
    public $LINENR = null;
    /** @var int|float|null */
    public $AMOUNT = null;
    /** @var int|float|null */
    public $QVALUE = null;
    /** @var int|float|null */
    public $CONFIRMED = null;
    public ?string $QDATE = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    public ?string $DESCRIPTION = null;
    /** @var int|float|null */
    public $CONDCONAMOUNT = null;
    public ?string $QCODE = null;
    public ?string $QNAME = null;
    public ?string $VALCODE = null;
    public ?string $VALNAME = null;
    public ?string $VALLIST = null;
    public ?string $VDELLIST = null;
    public ?string $TLIST = null;
    /** @var int|float|null */
    public $NOMVALUE = null;
    /** @var int|float|null */
    public $MINVALUE = null;
    /** @var int|float|null */
    public $MAXVALUE = null;
    public ?string $MUNIT = null;
    public ?string $QUNIT = null;
    /** @var int|float|null */
    public $FREQUENCY = null;
    /** @var int|float|null */
    public $COUNTER = null;
    /** @var int|float|null */
    public $SAMPLESIZE = null;
    /** @var int|float|null */
    public $NONCONAMOUNT = null;
    /** @var int|float|null */
    public $QCRESULT = null;
}

/**
 * RsDetmattrxml
 */
class RsDetmattrxml extends \LogoObjects\Types\BaseEntity
{
    public ?string $ITEM_CODE = null;
    /** @var int|float|null */
    public $ITEM_REFERENCE = null;
    /** @var int|float|null */
    public $LINE_TYPE = null;
    /** @var int|float|null */
    public $PREVLINEREF = null;
    /** @var int|float|null */
    public $PREVLINENO = null;
    /** @var int|float|null */
    public $DETLINE = null;
    /** @var int|float|null */
    public $TYPE = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $TIME = null;
    /** @var int|float|null */
    public $DETAIL_LEVEL = null;
    /** @var int|float|null */
    public $DISCEXP_CALC = null;
    public ?string $PORDER_CODE = null;
    /** @var int|float|null */
    public $PRODORDERREF = null;
    /** @var int|float|null */
    public $QPROD_ITEM_TYPE = null;
    /** @var int|float|null */
    public $SOURCETYPE = null;
    /** @var int|float|null */
    public $SOURCEINDEX = null;
    /** @var int|float|null */
    public $SOURCECOSTGRP = null;
    /** @var int|float|null */
    public $SOURCEWSREF = null;
    /** @var int|float|null */
    public $SOURCEPOLNREF = null;
    /** @var int|float|null */
    public $DESTTYPE = null;
    /** @var int|float|null */
    public $DESTINDEX = null;
    /** @var int|float|null */
    public $DESTCOSTGRP = null;
    /** @var int|float|null */
    public $DESTWSREF = null;
    /** @var int|float|null */
    public $DESTPOLNREF = null;
    /** @var int|float|null */
    public $FACTORYNR = null;
    /** @var int|float|null */
    public $IOCODE = null;
    /** @var int|float|null */
    public $STFICHEREF = null;
    /** @var int|float|null */
    public $LINE_NUMBER = null;
    /** @var int|float|null */
    public $INVOICEREF = null;
    /** @var int|float|null */
    public $INVOICELNNO = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    public ?string $ORDER_VOUCH_NR = null;
    /** @var int|float|null */
    public $ORDER_REFERENCE = null;
    /** @var int|float|null */
    public $ORDER_SITE = null;
    public ?string $GL_CODE1 = null;
    public ?string $OHP_CODE1 = null;
    /** @var int|float|null */
    public $CENTERREF = null;
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
    public ?string $PAYMENT_CODE = null;
    /** @var int|float|null */
    public $PAYDEFREF = null;
    public ?string $AUXIL_CODE = null;
    public ?string $DELVRY_CODE = null;
    /** @var int|float|null */
    public $QUANTITY = null;
    /** @var int|float|null */
    public $PRICE = null;
    /** @var int|float|null */
    public $TOTAL = null;
    /** @var int|float|null */
    public $NET_TOTAL = null;
    /** @var int|float|null */
    public $CURR_PRICE = null;
    /** @var int|float|null */
    public $PC_PRICE = null;
    /** @var int|float|null */
    public $CURR_TRANS = null;
    /** @var int|float|null */
    public $TC_XRATE = null;
    /** @var int|float|null */
    public $RC_XRATE = null;
    /** @var int|float|null */
    public $TCOST_DISTR = null;
    /** @var int|float|null */
    public $DISCOUNT_DISTR = null;
    /** @var int|float|null */
    public $EXPENSE_DISTR = null;
    /** @var int|float|null */
    public $PROMOTION_DISTR = null;
    /** @var int|float|null */
    public $DISCOUNT_PERC = null;
    public ?string $DESCRIPTION = null;
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
    public $PLNAMOUNT = null;
    /** @var int|float|null */
    public $VAT_INCLUDED = null;
    /** @var int|float|null */
    public $VAT_PERC = null;
    /** @var int|float|null */
    public $VAT_AMNT = null;
    /** @var int|float|null */
    public $VAT_BASE = null;
    /** @var int|float|null */
    public $BILLEDITEM = null;
    /** @var int|float|null */
    public $BILLED = null;
    /** @var int|float|null */
    public $COMPOSITE = null;
    /** @var int|float|null */
    public $RET_COST_TYPE = null;
    /** @var int|float|null */
    public $SOURCE_SITE = null;
    /** @var int|float|null */
    public $SOURCE_REFERENCE = null;
    /** @var int|float|null */
    public $RET_COST = null;
    /** @var int|float|null */
    public $CURR_RET_COST = null;
    /** @var int|float|null */
    public $OUT_COST = null;
    /** @var int|float|null */
    public $CURR_OUT_COST = null;
    /** @var int|float|null */
    public $RET_QUANTITY = null;
    public ?string $FAREG_CODE = null;
    /** @var int|float|null */
    public $FAREGREF = null;
    /** @var int|float|null */
    public $FA_STATUS = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    /** @var int|float|null */
    public $DISTADDEXP = null;
    /** @var int|float|null */
    public $FADACCREF = null;
    /** @var int|float|null */
    public $FADCENTERREF = null;
    /** @var int|float|null */
    public $FARACCREF = null;
    /** @var int|float|null */
    public $FARCENTERREF = null;
    /** @var int|float|null */
    public $FAPROFITACCREF = null;
    public ?string $FAPROFIT_GL_CODE = null;
    /** @var int|float|null */
    public $FAPROFITCENTREF = null;
    public ?string $FAPROFIT_OHP_CODE = null;
    /** @var int|float|null */
    public $FALOSSACCREF = null;
    public ?string $FALOSS_GL_CODE = null;
    /** @var int|float|null */
    public $FALOSSCENTREF = null;
    public ?string $FALOSS_OHP_CODE = null;
    /** @var int|float|null */
    public $PRICE_ADJUSTMENT = null;
    /** @var int|float|null */
    public $COST_ADJUSTMENT_PR = null;
    /** @var int|float|null */
    public $NEGPRC_ADJUSTMENT = null;
    /** @var int|float|null */
    public $LPRODSTAT = null;
    /** @var int|float|null */
    public $PRDEXPTOTAL = null;
    /** @var int|float|null */
    public $RC_PRJADJUST = null;
    /** @var int|float|null */
    public $RC_COSTADJUST = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    /** @var int|float|null */
    public $FAPLACCREF = null;
    /** @var int|float|null */
    public $FAPLCENTERREF = null;
    public ?string $OUTPUT_IDCODE = null;
    /** @var int|float|null */
    public $DREF = null;
    /** @var int|float|null */
    public $COST_RATE = null;
    /** @var int|float|null */
    public $XPRICEUPD = null;
    /** @var int|float|null */
    public $XPRICE = null;
    /** @var int|float|null */
    public $XREPRATE = null;
    /** @var int|float|null */
    public $DISTCOEF = null;
    /** @var int|float|null */
    public $QC_STATUS = null;
    /** @var RscollectionrsFaregtrnxml|null */
    public $FA_INFO = null;
    /** @var RscollectionrsSlloctrnxml|null */
    public $SL_DETAILS = null;
    public ?string $SLDELLIST = null;
    public ?string $DETLIST = null;
    public ?string $DETDELLIST = null;
    public ?string $QCLIST = null;
    /** @var int|float|null */
    public $CMPG_LINE_REF = null;
    /** @var int|float|null */
    public $VEND_COMM = null;
    /** @var int|float|null */
    public $PREV_OUT_COST = null;
    /** @var int|float|null */
    public $COSTOFSALEACCREF = null;
    public ?string $COST_OF_SALE_GL_CODE = null;
    /** @var int|float|null */
    public $PURCHACCREF = null;
    public ?string $PURCH_GL_CODE = null;
    /** @var int|float|null */
    public $COSTOFSALECNTREF = null;
    public ?string $COST_OF_SALE_OHP_CODE = null;
    /** @var int|float|null */
    public $PURCHCENTREF = null;
    public ?string $PURCH_OHP_CODE = null;
    /** @var int|float|null */
    public $PREV_OUT_COST_CURR = null;
    /** @var int|float|null */
    public $EU_VAT_AMOUNT = null;
    /** @var int|float|null */
    public $EU_VAT_STATUS = null;
    /** @var int|float|null */
    public $PR_RATE = null;
    /** @var int|float|null */
    public $ADD_TAX_RATE = null;
    /** @var int|float|null */
    public $ADD_TAX_CONV_FACT = null;
    /** @var int|float|null */
    public $ADD_TAX_AMOUNT = null;
    /** @var int|float|null */
    public $ADD_TAX_PRCOST = null;
    /** @var int|float|null */
    public $ADD_TAX_RETCOST = null;
    /** @var int|float|null */
    public $ADD_TAX_RETCOSTCURR = null;
    /** @var int|float|null */
    public $GROSS_U_INFO1 = null;
    /** @var int|float|null */
    public $GROSS_U_INFO2 = null;
    /** @var int|float|null */
    public $ADD_TAX_PRCOSTCURR = null;
    /** @var int|float|null */
    public $ADD_TAX_ACCREF = null;
    public ?string $GL_CODE5 = null;
    /** @var int|float|null */
    public $ADD_TAX_CENTERREF = null;
    public ?string $OHP_CODE5 = null;
    /** @var int|float|null */
    public $ADD_TAX_AMNT_IS_UPD = null;
    /** @var int|float|null */
    public $PLN_STTRANS_PER_NR = null;
    /** @var int|float|null */
    public $PORD_CLS_PLN_AMNT = null;
    /** @var int|float|null */
    public $PLN_STTRANS_REFERENCE = null;
    /** @var int|float|null */
    public $PLN_AMOUNT = null;
    /** @var int|float|null */
    public $INFLATION_IDX = null;
    /** @var int|float|null */
    public $PRDORD_TOT_COEFF = null;
    /** @var int|float|null */
    public $DEMPEGGED_AMNT = null;
    /** @var int|float|null */
    public $STDUNIT_COST = null;
    /** @var int|float|null */
    public $STDRPUNIT_COST = null;
    /** @var int|float|null */
    public $INFLDX = null;
    /** @var int|float|null */
    public $COSTDIFF_ACCREF = null;
    public ?string $COSTDIFF_ACCCODE = null;
    /** @var int|float|null */
    public $COSTDIFF_CENREF = null;
    public ?string $COSTDIFF_CENCODE = null;
    /** @var int|float|null */
    public $ADDTAXDISC_AMNT = null;
    public ?string $ORGLOGOID = null;
    public ?string $EXIM_FICHENO = null;
    /** @var int|float|null */
    public $EXIM_FILELINENR = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $MONTH = null;
    /** @var int|float|null */
    public $YEAR = null;
    /** @var int|float|null */
    public $PORDSYMOUTLN = null;
    /** @var int|float|null */
    public $PRCLISTREF = null;
    /** @var int|float|null */
    public $EXADDTAXRATE = null;
    /** @var int|float|null */
    public $EXADDTAXCONVF = null;
    public ?string $EXADDTAXACODE = null;
    /** @var int|float|null */
    public $EXADDTAXAREF = null;
    public ?string $EXADDTAXCCODE = null;
    /** @var int|float|null */
    public $EXADDTAXCREF = null;
    public ?string $OTHRADDTAXACODE = null;
    /** @var int|float|null */
    public $OTHRADDTAXAREF = null;
    public ?string $OTHRADDTAXCCODE = null;
    /** @var int|float|null */
    public $OTHRADDTAXCREF = null;
    /** @var int|float|null */
    public $EXADDTAXAMNT = null;
    /** @var int|float|null */
    public $AFFECT_COLLATRL = null;
    /** @var int|float|null */
    public $EDT_PRICE = null;
    /** @var int|float|null */
    public $EDT_CURR = null;
    /** @var int|float|null */
    public $ADD_TAX_EFFECT_KDV = null;
    /** @var int|float|null */
    public $AFFECT_RISK = null;
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
    public $ADD_TAX_VAT_MATRAH = null;
    /** @var int|float|null */
    public $EXCLINE_ADD_TAX_VAT_MATRAH = null;
    public ?string $ADDTAX_GLOBAL_CODE = null;
    public ?string $UNIT_GLOBAL_CODE = null;
    public ?string $PAYPL_GLOBAL_CODE = null;
    public ?string $PRCURR_GLOBAL_CODE = null;
    public ?string $TRCURR_GLOBAL_CODE = null;
    public ?string $EDTCURR_GLOBAL_CODE = null;
    public ?string $PRCLISTCODE = null;
    /** @var int|float|null */
    public $PRCLISTTYPE = null;
    public ?string $ADDTAXEXCEPT_REASON = null;
    public ?string $ADDTAXEXCEPT_CODE = null;
    public ?string $GLOBAL_ID = null;
    /** @var int|float|null */
    public $DEDUCTION_PART1 = null;
    /** @var int|float|null */
    public $DEDUCTION_PART2 = null;
    public ?string $GUID = null;
    public ?string $INF_DATE = null;
    /** @var int|float|null */
    public $DEST_STATUS = null;
    /** @var int|float|null */
    public $REGTYPREF = null;
    public ?string $REG_TYPE_CODE = null;
    public ?string $CPA_CODE = null;
    public ?string $GTIP_CODE = null;
    /** @var int|float|null */
    public $PUBLICCOUNTRYREF = null;
    public ?string $PUBLIC_COUNTRY_CODE = null;
    public ?string $PUBLIC_COUNTRY_NAME = null;
    /** @var int|float|null */
    public $FUTURE_MONTH_COUNT = null;
    public ?string $FUTURE_MONTH_BEGDATE = null;
    public ?string $FUTURE_MONTH_ENDDATE = null;
    /** @var int|float|null */
    public $QC_TRANSFER_REF = null;
    /** @var int|float|null */
    public $QC_TRANSFER_AMOUNT = null;
    /** @var int|float|null */
    public $FA_KKEG_AMOUNT = null;
    /** @var int|float|null */
    public $KKEGACCREF = null;
    public ?string $KKEG_GL_CODE = null;
    /** @var int|float|null */
    public $KKEGCENREF = null;
    public ?string $KKEG_OHP_CODE = null;
    /** @var int|float|null */
    public $KKEGVATACCREF = null;
    public ?string $KKEG_VAT_GL_CODE = null;
    /** @var int|float|null */
    public $KKEGVATCENREF = null;
    public ?string $KKEG_VAT_OHP_CODE = null;
    /** @var int|float|null */
    public $EXPRACCREF = null;
    public ?string $EXPR_GL_CODE = null;
    /** @var int|float|null */
    public $EXPRCNTRREF = null;
    public ?string $EXPR_OHP_CODE = null;
    /** @var int|float|null */
    public $ADDTAXVATACCREF = null;
    public ?string $ADD_TAX_VAT_ACC_CODE = null;
    /** @var int|float|null */
    public $ADDTAXVATCENREF = null;
    public ?string $ADD_TAX_VAT_OHP_CODE = null;
    /** @var int|float|null */
    public $MIDDLEMAN_EXP_TYPE = null;
    public ?string $MARKING_TAGNO = null;
    public ?string $OWNER = null;
    public ?string $TCK_TAXNR = null;
    /** @var int|float|null */
    public $EXP_DAYS = null;
    /** @var int|float|null */
    public $FROMINTEGTYPE = null;
    /** @var int|float|null */
    public $FROMINTEGREF = null;
    /** @var int|float|null */
    public $TAXFREEACCREF = null;
    /** @var int|float|null */
    public $TAXFREECNTRREF = null;
    /** @var int|float|null */
    public $EISRVDSTADDTAXINC = null;
    /** @var int|float|null */
    public $QCTRANSFERREF2 = null;
    /** @var int|float|null */
    public $QCTRANSFERAMNT2 = null;
    /** @var int|float|null */
    public $ITMDISC = null;
    /** @var int|float|null */
    public $ADD_TAX_REF = null;
    /** @var int|float|null */
    public $ADD_TAX_INLNNET = null;
    /** @var int|float|null */
    public $ORDFICHECMREF = null;
    /** @var int|float|null */
    public $PURCHACCREFINFL = null;
    /** @var int|float|null */
    public $PURCHCENTREFINFL = null;
    /** @var int|float|null */
    public $COSACCREFINFL = null;
    /** @var int|float|null */
    public $COSCNTREFINFL = null;
    /** @var int|float|null */
    public $PROUTCOSTINFLDIFF = null;
    /** @var int|float|null */
    public $PROUTCOSTCRINFLDIFF = null;
    /** @var int|float|null */
    public $ORGPRICE = null;
    /** @var int|float|null */
    public $RETSOURCELINK = null;
    public ?string $DIIBLINECODE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'FA_INFO' => \LogoObjects\Clients\itemSlips\RscollectionrsFaregtrnxml::class,
            'SL_DETAILS' => \LogoObjects\Clients\itemSlips\RscollectionrsSlloctrnxml::class,
        ]);
    }
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
 * DemandPeggings
 */
class DemandPeggings extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $DEMAND_REFERENCE = null;
    /** @var int|float|null */
    public $DEMAND_SITEID = null;
    /** @var int|float|null */
    public $PARENTTYPE = null;
    /** @var int|float|null */
    public $PARENTREF = null;
    /** @var int|float|null */
    public $CHILD_TYPE = null;
    /** @var int|float|null */
    public $CHILD_REFERENCE = null;
    /** @var int|float|null */
    public $FICHE_TYPE = null;
    /** @var int|float|null */
    public $ITEM_ALTER = null;
    /** @var int|float|null */
    public $ITEMREF = null;
    /** @var int|float|null */
    public $UNITREF = null;
    /** @var int|float|null */
    public $MAINITEMREF = null;
    /** @var int|float|null */
    public $MAINUNITREF = null;
    /** @var int|float|null */
    public $MEET_AMNT = null;
    /** @var int|float|null */
    public $MAIN_MEET_AMNT = null;
    /** @var int|float|null */
    public $ORD_PERIOD = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    /** @var int|float|null */
    public $BOMMASTERREF = null;
    /** @var int|float|null */
    public $BOMREVREF = null;
    /** @var int|float|null */
    public $LINE_TYPE = null;
    /** @var int|float|null */
    public $DET_LINE = null;
    /** @var int|float|null */
    public $PREVLINEREF = null;
    /** @var int|float|null */
    public $PREV_LINE_NO = null;
    /** @var int|float|null */
    public $LINE_NO = null;
    public ?string $FICHE_NO = null;
    public ?string $FICHE_DATE = null;
    public ?string $ITEM_CODE = null;
    public ?string $ITEM_NAME = null;
    /** @var int|float|null */
    public $TR_AMNT = null;
    public ?string $U_EDIT = null;
    public ?string $BOM_CODE = null;
    public ?string $BOM_REV_CODE = null;
    public ?string $ARP_CODE = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $PEGREF = null;
    /** @var int|float|null */
    public $DOCNRREF = null;
    public ?string $LINE_PTR = null;
    /** @var int|float|null */
    public $FCNOCGHD = null;
    public ?string $DET_LIST = null;
    public ?string $DET_DEL_LIST = null;
    /** @var int|float|null */
    public $PROPOSAL = null;
    /** @var int|float|null */
    public $WAIT_AMNT = null;
    /** @var int|float|null */
    public $FACTORY_NR = null;
    /** @var int|float|null */
    public $SOURCE_INDEX = null;
    /** @var int|float|null */
    public $AMNTCONVF = null;
    public ?string $DO_CODE = null;
    public ?string $ARP_NAME = null;
    /** @var int|float|null */
    public $FIC_STATUS = null;
    public ?string $MAIN_ITEM_CODE = null;
    public ?string $MAIN_ITEM_NAME = null;
    public ?string $MAIN_U_EDIT = null;
    /** @var int|float|null */
    public $PRICE = null;
    /** @var int|float|null */
    public $PAYPLANREF = null;
    public ?string $PAYPLAN_CODE = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $PrOJECTREF = null;
    /** @var int|float|null */
    public $VARIANTREF = null;
    /** @var int|float|null */
    public $MAINVARIANTREF = null;
    public ?string $VARIANTCODE = null;
    public ?string $VARIANTNAME = null;
    /** @var int|float|null */
    public $BOM_TYPE = null;
}

/**
 * RsLabelxml
 */
class RsLabelxml extends \LogoObjects\Types\BaseEntity
{
    public ?string $NAME = null;
    public ?string $DEFINITION = null;
    /** @var int|float|null */
    public $USER_TYPE = null;
}

/**
 * ItemSlips
 */
class ItemSlips extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $GROUP = null;
    /** @var int|float|null */
    public $TYPE = null;
    /** @var int|float|null */
    public $IO_TYPE = null;
    public ?string $NUMBER = null;
    public ?string $DOC_TRACK_NR = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $TIME = null;
    public ?string $DOC_NUMBER = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    public ?string $ARP_CODE = null;
    /** @var int|float|null */
    public $PRODORDERREF = null;
    public ?string $PORDER_FICHE_NR = null;
    /** @var int|float|null */
    public $PORDER_SLP_INRESERVE = null;
    /** @var int|float|null */
    public $PORDER_TYPE = null;
    /** @var int|float|null */
    public $QPROD_TYPE = null;
    /** @var int|float|null */
    public $SOURCE_TYPE = null;
    /** @var int|float|null */
    public $SOURCE_WH = null;
    public ?string $SOURCE_WSCODE = null;
    /** @var int|float|null */
    public $SOURCEWSREF = null;
    public ?string $SPO_DETAIL_CODE = null;
    /** @var int|float|null */
    public $SRCPOLN_REFERENCE = null;
    /** @var int|float|null */
    public $SOURCE_COST_GRP = null;
    /** @var int|float|null */
    public $DEST_TYPE = null;
    /** @var int|float|null */
    public $DEST_WH = null;
    public ?string $DEST_WSCODE = null;
    /** @var int|float|null */
    public $DESTWSREF = null;
    public ?string $DPO_DETAIL_CODE = null;
    /** @var int|float|null */
    public $DESTPOLN_REFERENCE = null;
    /** @var int|float|null */
    public $DEST_COST_GRP = null;
    /** @var int|float|null */
    public $SOURCE_FACTORY_NR = null;
    /** @var int|float|null */
    public $SOURCE_DIVISION_NR = null;
    /** @var int|float|null */
    public $SOURCE_DEPARTMENT_NR = null;
    /** @var int|float|null */
    public $DEST_DIVISION_NR = null;
    /** @var int|float|null */
    public $DEST_DEPARTMENT_NR = null;
    /** @var int|float|null */
    public $DEST_FACTORY = null;
    /** @var int|float|null */
    public $PORDER_STATUS = null;
    /** @var int|float|null */
    public $FY_TRANSFER = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    /** @var int|float|null */
    public $GL_STATUS = null;
    /** @var int|float|null */
    public $XRATE_STATUS = null;
    /** @var int|float|null */
    public $ADD_DISCOUNTS = null;
    /** @var int|float|null */
    public $TOTAL_DISCOUNTS = null;
    /** @var int|float|null */
    public $TOTAL_DISCOUNTED = null;
    /** @var int|float|null */
    public $ADD_EXPENSES = null;
    /** @var int|float|null */
    public $TOTAL_EXPENSES = null;
    /** @var int|float|null */
    public $TOTAL_DEPOSITED = null;
    /** @var int|float|null */
    public $TOTAL_PROMOTIONS = null;
    /** @var int|float|null */
    public $TOTAL_VAT = null;
    /** @var int|float|null */
    public $TOTAL_GROSS = null;
    /** @var int|float|null */
    public $TOTAL_NET = null;
    public ?string $FOOTNOTE1 = null;
    public ?string $FOOTNOTE2 = null;
    public ?string $FOOTNOTE3 = null;
    public ?string $FOOTNOTE4 = null;
    /** @var int|float|null */
    public $RC_RATE = null;
    /** @var int|float|null */
    public $RC_NET = null;
    /** @var int|float|null */
    public $TC_CURR = null;
    /** @var int|float|null */
    public $TC_RATE = null;
    /** @var int|float|null */
    public $TC_NET = null;
    /** @var int|float|null */
    public $PRINT_COUNTER = null;
    public ?string $PRINT_DATE = null;
    /** @var int|float|null */
    public $FICHECNT = null;
    /** @var int|float|null */
    public $ACCFICHEREF = null;
    /** @var int|float|null */
    public $GL_CANCELLED = null;
    public ?string $SHIPMENT_TYPE = null;
    public ?string $SHIPPING_AGENT = null;
    public ?string $TRACK_NR = null;
    /** @var int|float|null */
    public $CURRSEL_TOTALS = null;
    /** @var int|float|null */
    public $CURRSEL_DETAILS = null;
    public ?string $TRADING_GRP = null;
    /** @var RscollectionrsMattransxml|null */
    public $TRANSACTIONS = null;
    public ?string $DELLIST = null;
    public ?string $ACCLIST = null;
    public ?string $DELACCLIST = null;
    public ?string $ACCCODE = null;
    public ?string $CSTCODE = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $XCNT = null;
    public ?string $PFICHENO = null;
    /** @var int|float|null */
    public $PFICHEDATE = null;
    public ?string $DOCALS = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $ADD_TAX_CALC = null;
    /** @var int|float|null */
    public $TOTAL_ADD_TAX = null;
    public ?string $U_DOC_TRACKING_NR = null;
    /** @var int|float|null */
    public $VA_ACCREF = null;
    public ?string $VA_ACCCODE = null;
    /** @var int|float|null */
    public $VA_CENTERREF = null;
    public ?string $VA_CENTERCODE = null;
    public ?string $ORGLOGOID = null;
    /** @var int|float|null */
    public $FROM_EXIM = null;
    public ?string $FRG_TYP_CODE = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $DEFNFLDSLIST = null;
    /** @var int|float|null */
    public $TOTALEXADDTAX = null;
    /** @var int|float|null */
    public $AFFECT_COLLATRL = null;
    /** @var int|float|null */
    public $QPRODFCREF = null;
    /** @var int|float|null */
    public $GRPFIRMTRANS = null;
    /** @var Rscollectiondemandpeggings|null */
    public $DEMANDPEGGINGS = null;
    /** @var RscollectionrsLabelxml|null */
    public $LABEL_LIST = null;
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
    public $CONTROL_INFO = null;
    /** @var int|float|null */
    public $APPROVE = null;
    public ?string $APPROVE_DATE = null;
    /** @var int|float|null */
    public $ACC_FICHE_SITEID = null;
    public ?string $SHIPLOC_CODE = null;
    public ?string $SHIP_DATE = null;
    /** @var int|float|null */
    public $SHIP_TIME = null;
    public ?string $DOC_DATE = null;
    /** @var int|float|null */
    public $DOC_TIME = null;
    /** @var int|float|null */
    public $AUTOFILL_SLDETAILS = null;
    /** @var int|float|null */
    public $RELTRANSFCREF = null;
    /** @var int|float|null */
    public $FROMTRANSFER = null;
    /** @var int|float|null */
    public $STATUS = null;
    public ?string $GLOBAL_ID = null;
    /** @var int|float|null */
    public $LOC_CONTROL_OFF = null;
    /** @var int|float|null */
    public $CANCEL_AUTO_GL_PROC = null;
    /** @var int|float|null */
    public $OFFER_REFERENCE = null;
    public ?string $DELIVERY_CODE = null;
    /** @var int|float|null */
    public $DEST_STATUS = null;
    public ?string $CANCEL_EXP = null;
    public ?string $UNDO_EXP = null;
    public ?string $CANCEL_DATE = null;
    /** @var int|float|null */
    public $CREATE_WHERE = null;
    /** @var int|float|null */
    public $IS_OKC_FICHE = null;
    public ?string $GUID = null;
    public ?string $ESEND_DATE = null;
    public ?string $EBOOK_DOCDATE = null;
    /** @var int|float|null */
    public $EBOOK_NODOCUMENT = null;
    public ?string $EBOOK_DOCNR = null;
    /** @var int|float|null */
    public $EBOOK_DOCTYPE = null;
    public ?string $EBOOK_EXPLAIN = null;
    public ?string $EBOOK_PAYTYPE = null;
    /** @var int|float|null */
    public $EBOOK_NOPAY = null;
    /** @var int|float|null */
    public $EDESPATCH = null;
    /** @var int|float|null */
    public $EDESPATCH_PROFILEID = null;
    /** @var int|float|null */
    public $EDESPATCH_STATUS = null;
    /** @var int|float|null */
    public $EINVOICE = null;
    /** @var int|float|null */
    public $EINVOICE_TYPE = null;
    /** @var int|float|null */
    public $EINVOICE_PROFILEID = null;
    /** @var int|float|null */
    public $EINVOICE_STATUS = null;
    public ?string $EINVOICE_STARTDATE = null;
    public ?string $EINVOICE_ENDDATE = null;
    public ?string $EINVOICE_DESCRIPTION = null;
    /** @var int|float|null */
    public $EINVOICE_DURATION = null;
    /** @var int|float|null */
    public $EINVOICE_DURATIONTYPE = null;
    public ?string $EINVOICE_DRIVERNAME1 = null;
    public ?string $EINVOICE_DRIVERSURNAME1 = null;
    public ?string $EINVOICE_DRIVERTCKNO1 = null;
    public ?string $EINVOICE_PLATENUM1 = null;
    public ?string $EINVOICE_CHASSISNUM1 = null;
    public ?string $EINVOICE_DRIVERNAME2 = null;
    public ?string $EINVOICE_DRIVERSURNAME2 = null;
    public ?string $EINVOICE_DRIVERTCKNO2 = null;
    public ?string $EINVOICE_PLATENUM2 = null;
    public ?string $EINVOICE_CHASSISNUM2 = null;
    public ?string $EINVOICE_DRIVERNAME3 = null;
    public ?string $EINVOICE_DRIVERSURNAME3 = null;
    public ?string $EINVOICE_DRIVERTCKNO3 = null;
    public ?string $EINVOICE_PLATENUM3 = null;
    public ?string $EINVOICE_CHASSISNUM3 = null;
    /** @var int|float|null */
    public $EINVOICE_CHAINDELIVERY = null;
    /** @var int|float|null */
    public $EINVOICE_SELLERCLIENTREF = null;
    public ?string $EINVOICE_SELLERCLIENTCODE = null;
    public ?string $EINVOICE_TAXNRTOPAY = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_LOGICALREF = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_STREF = null;
    public ?string $EARCHIVEDETR_INSTALLMENTNUMBER = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_EARCHIVESTATUS = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_EARCHIVESTATUSOLD = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_SENDMOD = null;
    public ?string $EARCHIVEDETR_INTSALESADDR = null;
    public ?string $EARCHIVEDETR_INTPAYMENTDESC = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_INTPAYMENTTYPE = null;
    public ?string $EARCHIVEDETR_INTPAYMENTAGENT = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_INTPAYMENTDATEORG = null;
    public ?string $EARCHIVEDETR_INTPAYMENTDATE = null;
    public ?string $EARCHIVEDETR_OCKSERIALNUMBER = null;
    public ?string $EARCHIVEDETR_OCKZNUMBER = null;
    public ?string $EARCHIVEDETR_OCKFICHENUMBER = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_OCKFICHEDATEORG = null;
    public ?string $EARCHIVEDETR_OCKFICHEDATE = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_ISCOMP = null;
    public ?string $EARCHIVEDETR_TAXNR = null;
    public ?string $EARCHIVEDETR_TCKNO = null;
    public ?string $EARCHIVEDETR_NAME = null;
    public ?string $EARCHIVEDETR_SURNAME = null;
    public ?string $EARCHIVEDETR_DEFINITION = null;
    public ?string $EARCHIVEDETR_ADDR1 = null;
    public ?string $EARCHIVEDETR_ADDR2 = null;
    public ?string $EARCHIVEDETR_CITYCODE = null;
    public ?string $EARCHIVEDETR_CITY = null;
    public ?string $EARCHIVEDETR_COUNTRYCODE = null;
    public ?string $EARCHIVEDETR_COUNTRY = null;
    public ?string $EARCHIVEDETR_POSTCODE = null;
    public ?string $EARCHIVEDETR_DISTRICTCODE = null;
    public ?string $EARCHIVEDETR_DISTRICT = null;
    public ?string $EARCHIVEDETR_TOWNCODE = null;
    public ?string $EARCHIVEDETR_TOWN = null;
    public ?string $EARCHIVEDETR_EMAILADDR = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_ISPERCURR = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_INSTEADOFDESP = null;
    public ?string $EARCHIVEDETR_TAXOFFICE = null;
    public ?string $EARCHIVEDETR_TELCODES1 = null;
    public ?string $EARCHIVEDETR_TELCODES2 = null;
    public ?string $EARCHIVEDETR_TELNRS1 = null;
    public ?string $EARCHIVEDETR_TELNRS2 = null;
    public ?string $EARCHIVEDETR_DRIVERNAME1 = null;
    public ?string $EARCHIVEDETR_DRIVERSURNAME1 = null;
    public ?string $EARCHIVEDETR_DRIVERTCKNO1 = null;
    public ?string $EARCHIVEDETR_PLATENUM1 = null;
    public ?string $EARCHIVEDETR_CHASSISNUM1 = null;
    public ?string $EARCHIVEDETR_DRIVERNAME2 = null;
    public ?string $EARCHIVEDETR_DRIVERSURNAME2 = null;
    public ?string $EARCHIVEDETR_DRIVERTCKNO2 = null;
    public ?string $EARCHIVEDETR_PLATENUM2 = null;
    public ?string $EARCHIVEDETR_CHASSISNUM2 = null;
    public ?string $EARCHIVEDETR_DRIVERNAME3 = null;
    public ?string $EARCHIVEDETR_DRIVERSURNAME3 = null;
    public ?string $EARCHIVEDETR_DRIVERTCKNO3 = null;
    public ?string $EARCHIVEDETR_PLATENUM3 = null;
    public ?string $EARCHIVEDETR_CHASSISNUM3 = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_CHAINDELIVERY = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_SELLERCLIENTREF = null;
    public ?string $EARCHIVEDETR_SELLERCLIENTCODE = null;
    /** @var int|float|null */
    public $FROMINTEGTYPE = null;
    /** @var int|float|null */
    public $FROMINTEGREF = null;
    /** @var int|float|null */
    public $EPRINTCNT = null;
    /** @var int|float|null */
    public $CLNOTREFLAACCREF = null;
    /** @var int|float|null */
    public $CLNOTREFLACNTRREF = null;
    public ?string $PAYERCRPROVIDER = null;
    public ?string $PAYERCRKEY = null;
    /** @var int|float|null */
    public $FORENTRUST = null;
    public ?string $EINVOICE_TELCODE = null;
    public ?string $EINVOICE_TELNR = null;
    /** @var int|float|null */
    public $ORDFICHECMREF = null;
    public ?string $EARCHIVEDETR_ENRGPLATENUM = null;
    public ?string $EARCHIVEDETR_ENRGCARID = null;
    public ?string $EARCHIVEDETR_CHRGBEGDATE = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_CHRGBEGTIME = null;
    public ?string $EARCHIVEDETR_CHRGENDDATE = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_CHRGENDTIME = null;
    public ?string $EARCHIVEDETR_ESURAPORID = null;
    public ?string $EARCHIVEDETR_ESURAPORIDDATE = null;
    public ?string $EINVOICE_ENRGPLATENUM = null;
    public ?string $EINVOICE_ENRGCARID = null;
    public ?string $EINVOICE_CHRGBEGDATE = null;
    /** @var int|float|null */
    public $EINVOICE_CHRGBEGTIME = null;
    public ?string $EINVOICE_CHRGENDDATE = null;
    /** @var int|float|null */
    public $EINVOICE_CHRGENDTIME = null;
    public ?string $EINVOICE_ESURAPORID = null;
    public ?string $EINVOICE_ESURAPORIDDATE = null;
    /** @var int|float|null */
    public $ESENDTIME = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'TRANSACTIONS' => \LogoObjects\Clients\itemSlips\RscollectionrsMattransxml::class,
            'DEFNFLDSLIST' => \LogoObjects\Clients\itemSlips\Rscollectionextendedfielddefinitions::class,
            'DEMANDPEGGINGS' => \LogoObjects\Clients\itemSlips\Rscollectiondemandpeggings::class,
            'LABEL_LIST' => \LogoObjects\Clients\itemSlips\RscollectionrsLabelxml::class,
        ]);
    }
}

/**
 * ItemSlipsQueryOptions
 */
class ItemSlipsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ItemSlipsSortSpec|null */
    public $sort = null;
}

/**
 * ItemSlipsSearchCriteria
 */
class ItemSlipsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $group = null;
    /** @var mixed */
    public $type = null;
    /** @var mixed */
    public $ioType = null;
    /** @var mixed */
    public $number = null;
    /** @var mixed */
    public $docTrackNr = null;
    /** @var mixed */
    public $date = null;
    /** @var mixed */
    public $time = null;
    /** @var mixed */
    public $docNumber = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $clientref = null;
    /** @var mixed */
    public $arpCode = null;
    /** @var mixed */
    public $prodorderref = null;
    /** @var mixed */
    public $porderFicheNr = null;
    /** @var mixed */
    public $porderSlpInreserve = null;
    /** @var mixed */
    public $porderType = null;
    /** @var mixed */
    public $qprodType = null;
    /** @var mixed */
    public $sourceType = null;
    /** @var mixed */
    public $sourceWh = null;
    /** @var mixed */
    public $sourceWscode = null;
    /** @var mixed */
    public $sourcewsref = null;
    /** @var mixed */
    public $spoDetailCode = null;
    /** @var mixed */
    public $srcpolnReference = null;
    /** @var mixed */
    public $sourceCostGrp = null;
    /** @var mixed */
    public $destType = null;
    /** @var mixed */
    public $destWh = null;
    /** @var mixed */
    public $destWscode = null;
    /** @var mixed */
    public $destwsref = null;
    /** @var mixed */
    public $dpoDetailCode = null;
    /** @var mixed */
    public $destpolnReference = null;
    /** @var mixed */
    public $destCostGrp = null;
    /** @var mixed */
    public $sourceFactoryNr = null;
    /** @var mixed */
    public $sourceDivisionNr = null;
    /** @var mixed */
    public $sourceDepartmentNr = null;
    /** @var mixed */
    public $destDivisionNr = null;
    /** @var mixed */
    public $destDepartmentNr = null;
    /** @var mixed */
    public $destFactory = null;
    /** @var mixed */
    public $porderStatus = null;
    /** @var mixed */
    public $fyTransfer = null;
    /** @var mixed */
    public $cancelled = null;
    /** @var mixed */
    public $glStatus = null;
    /** @var mixed */
    public $xrateStatus = null;
    /** @var mixed */
    public $addDiscounts = null;
    /** @var mixed */
    public $totalDiscounts = null;
    /** @var mixed */
    public $totalDiscounted = null;
    /** @var mixed */
    public $addExpenses = null;
    /** @var mixed */
    public $totalExpenses = null;
    /** @var mixed */
    public $totalDeposited = null;
    /** @var mixed */
    public $totalPromotions = null;
    /** @var mixed */
    public $totalVat = null;
    /** @var mixed */
    public $totalGross = null;
    /** @var mixed */
    public $totalNet = null;
    /** @var mixed */
    public $footnote1 = null;
    /** @var mixed */
    public $footnote2 = null;
    /** @var mixed */
    public $footnote3 = null;
    /** @var mixed */
    public $footnote4 = null;
    /** @var mixed */
    public $rcRate = null;
    /** @var mixed */
    public $rcNet = null;
    /** @var mixed */
    public $tcCurr = null;
    /** @var mixed */
    public $tcRate = null;
    /** @var mixed */
    public $tcNet = null;
    /** @var mixed */
    public $printCounter = null;
    /** @var mixed */
    public $printDate = null;
    /** @var mixed */
    public $fichecnt = null;
    /** @var mixed */
    public $accficheref = null;
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
    public $glCancelled = null;
    /** @var mixed */
    public $shipmentType = null;
    /** @var mixed */
    public $shippingAgent = null;
    /** @var mixed */
    public $trackNr = null;
    /** @var mixed */
    public $currselTotals = null;
    /** @var mixed */
    public $currselDetails = null;
    /** @var mixed */
    public $tradingGrp = null;
    /** @var mixed */
    public $textinc = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $transactions = null;
    /** @var mixed */
    public $dellist = null;
    /** @var mixed */
    public $acclist = null;
    /** @var mixed */
    public $delacclist = null;
    /** @var mixed */
    public $acccode = null;
    /** @var mixed */
    public $cstcode = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $xcnt = null;
    /** @var mixed */
    public $pficheno = null;
    /** @var mixed */
    public $pfichedate = null;
    /** @var mixed */
    public $docals = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $addTaxCalc = null;
    /** @var mixed */
    public $totalAddTax = null;
    /** @var mixed */
    public $uDocTrackingNr = null;
    /** @var mixed */
    public $vaAccref = null;
    /** @var mixed */
    public $vaAcccode = null;
    /** @var mixed */
    public $vaCenterref = null;
    /** @var mixed */
    public $vaCentercode = null;
    /** @var mixed */
    public $orglogoid = null;
    /** @var mixed */
    public $fromExim = null;
    /** @var mixed */
    public $frgTypCode = null;
    /** @var mixed */
    public $projectCode = null;
    /** @var mixed */
    public $projectref = null;
    /** @var mixed */
    public $defnfldslist = null;
    /** @var mixed */
    public $totalexaddtax = null;
    /** @var mixed */
    public $affectCollatrl = null;
    /** @var mixed */
    public $qprodfcref = null;
    /** @var mixed */
    public $grpfirmtrans = null;
    /** @var mixed */
    public $demandpeggings = null;
    /** @var mixed */
    public $labelList = null;
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
    public $controlInfo = null;
    /** @var mixed */
    public $approve = null;
    /** @var mixed */
    public $approveDate = null;
    /** @var mixed */
    public $accFicheSiteid = null;
    /** @var mixed */
    public $shiplocCode = null;
    /** @var mixed */
    public $shipDate = null;
    /** @var mixed */
    public $shipTime = null;
    /** @var mixed */
    public $docDate = null;
    /** @var mixed */
    public $docTime = null;
    /** @var mixed */
    public $autofillSldetails = null;
    /** @var mixed */
    public $reltransfcref = null;
    /** @var mixed */
    public $fromtransfer = null;
    /** @var mixed */
    public $status = null;
    /** @var mixed */
    public $globalId = null;
    /** @var mixed */
    public $locControlOff = null;
    /** @var mixed */
    public $cancelAutoGlProc = null;
    /** @var mixed */
    public $offerReference = null;
    /** @var mixed */
    public $deliveryCode = null;
    /** @var mixed */
    public $destStatus = null;
    /** @var mixed */
    public $cancelExp = null;
    /** @var mixed */
    public $undoExp = null;
    /** @var mixed */
    public $cancelDate = null;
    /** @var mixed */
    public $createWhere = null;
    /** @var mixed */
    public $isOkcFiche = null;
    /** @var mixed */
    public $guid = null;
    /** @var mixed */
    public $esendDate = null;
    /** @var mixed */
    public $ebookDocdate = null;
    /** @var mixed */
    public $ebookNodocument = null;
    /** @var mixed */
    public $ebookDocnr = null;
    /** @var mixed */
    public $ebookDoctype = null;
    /** @var mixed */
    public $ebookExplain = null;
    /** @var mixed */
    public $ebookPaytype = null;
    /** @var mixed */
    public $ebookNopay = null;
    /** @var mixed */
    public $edespatch = null;
    /** @var mixed */
    public $edespatchProfileid = null;
    /** @var mixed */
    public $edespatchStatus = null;
    /** @var mixed */
    public $einvoice = null;
    /** @var mixed */
    public $einvoiceType = null;
    /** @var mixed */
    public $einvoiceProfileid = null;
    /** @var mixed */
    public $einvoiceStatus = null;
    /** @var mixed */
    public $einvoiceStartdate = null;
    /** @var mixed */
    public $einvoiceEnddate = null;
    /** @var mixed */
    public $einvoiceDescription = null;
    /** @var mixed */
    public $einvoiceDuration = null;
    /** @var mixed */
    public $einvoiceDurationtype = null;
    /** @var mixed */
    public $einvoiceDrivername1 = null;
    /** @var mixed */
    public $einvoiceDriversurname1 = null;
    /** @var mixed */
    public $einvoiceDrivertckno1 = null;
    /** @var mixed */
    public $einvoicePlatenum1 = null;
    /** @var mixed */
    public $einvoiceChassisnum1 = null;
    /** @var mixed */
    public $einvoiceDrivername2 = null;
    /** @var mixed */
    public $einvoiceDriversurname2 = null;
    /** @var mixed */
    public $einvoiceDrivertckno2 = null;
    /** @var mixed */
    public $einvoicePlatenum2 = null;
    /** @var mixed */
    public $einvoiceChassisnum2 = null;
    /** @var mixed */
    public $einvoiceDrivername3 = null;
    /** @var mixed */
    public $einvoiceDriversurname3 = null;
    /** @var mixed */
    public $einvoiceDrivertckno3 = null;
    /** @var mixed */
    public $einvoicePlatenum3 = null;
    /** @var mixed */
    public $einvoiceChassisnum3 = null;
    /** @var mixed */
    public $einvoiceChaindelivery = null;
    /** @var mixed */
    public $einvoiceSellerclientref = null;
    /** @var mixed */
    public $einvoiceSellerclientcode = null;
    /** @var mixed */
    public $einvoiceTaxnrtopay = null;
    /** @var mixed */
    public $earchivedetrLogicalref = null;
    /** @var mixed */
    public $earchivedetrStref = null;
    /** @var mixed */
    public $earchivedetrInstallmentnumber = null;
    /** @var mixed */
    public $earchivedetrEarchivestatus = null;
    /** @var mixed */
    public $earchivedetrEarchivestatusold = null;
    /** @var mixed */
    public $earchivedetrSendmod = null;
    /** @var mixed */
    public $earchivedetrIntsalesaddr = null;
    /** @var mixed */
    public $earchivedetrIntpaymentdesc = null;
    /** @var mixed */
    public $earchivedetrIntpaymenttype = null;
    /** @var mixed */
    public $earchivedetrIntpaymentagent = null;
    /** @var mixed */
    public $earchivedetrIntpaymentdateorg = null;
    /** @var mixed */
    public $earchivedetrIntpaymentdate = null;
    /** @var mixed */
    public $earchivedetrOckserialnumber = null;
    /** @var mixed */
    public $earchivedetrOckznumber = null;
    /** @var mixed */
    public $earchivedetrOckfichenumber = null;
    /** @var mixed */
    public $earchivedetrOckfichedateorg = null;
    /** @var mixed */
    public $earchivedetrOckfichedate = null;
    /** @var mixed */
    public $earchivedetrIscomp = null;
    /** @var mixed */
    public $earchivedetrTaxnr = null;
    /** @var mixed */
    public $earchivedetrTckno = null;
    /** @var mixed */
    public $earchivedetrName = null;
    /** @var mixed */
    public $earchivedetrSurname = null;
    /** @var mixed */
    public $earchivedetrDefinition = null;
    /** @var mixed */
    public $earchivedetrAddr1 = null;
    /** @var mixed */
    public $earchivedetrAddr2 = null;
    /** @var mixed */
    public $earchivedetrCitycode = null;
    /** @var mixed */
    public $earchivedetrCity = null;
    /** @var mixed */
    public $earchivedetrCountrycode = null;
    /** @var mixed */
    public $earchivedetrCountry = null;
    /** @var mixed */
    public $earchivedetrPostcode = null;
    /** @var mixed */
    public $earchivedetrDistrictcode = null;
    /** @var mixed */
    public $earchivedetrDistrict = null;
    /** @var mixed */
    public $earchivedetrTowncode = null;
    /** @var mixed */
    public $earchivedetrTown = null;
    /** @var mixed */
    public $earchivedetrEmailaddr = null;
    /** @var mixed */
    public $earchivedetrIspercurr = null;
    /** @var mixed */
    public $earchivedetrInsteadofdesp = null;
    /** @var mixed */
    public $earchivedetrTaxoffice = null;
    /** @var mixed */
    public $earchivedetrTelcodes1 = null;
    /** @var mixed */
    public $earchivedetrTelcodes2 = null;
    /** @var mixed */
    public $earchivedetrTelnrs1 = null;
    /** @var mixed */
    public $earchivedetrTelnrs2 = null;
    /** @var mixed */
    public $earchivedetrDrivername1 = null;
    /** @var mixed */
    public $earchivedetrDriversurname1 = null;
    /** @var mixed */
    public $earchivedetrDrivertckno1 = null;
    /** @var mixed */
    public $earchivedetrPlatenum1 = null;
    /** @var mixed */
    public $earchivedetrChassisnum1 = null;
    /** @var mixed */
    public $earchivedetrDrivername2 = null;
    /** @var mixed */
    public $earchivedetrDriversurname2 = null;
    /** @var mixed */
    public $earchivedetrDrivertckno2 = null;
    /** @var mixed */
    public $earchivedetrPlatenum2 = null;
    /** @var mixed */
    public $earchivedetrChassisnum2 = null;
    /** @var mixed */
    public $earchivedetrDrivername3 = null;
    /** @var mixed */
    public $earchivedetrDriversurname3 = null;
    /** @var mixed */
    public $earchivedetrDrivertckno3 = null;
    /** @var mixed */
    public $earchivedetrPlatenum3 = null;
    /** @var mixed */
    public $earchivedetrChassisnum3 = null;
    /** @var mixed */
    public $earchivedetrChaindelivery = null;
    /** @var mixed */
    public $earchivedetrSellerclientref = null;
    /** @var mixed */
    public $earchivedetrSellerclientcode = null;
    /** @var mixed */
    public $fromintegtype = null;
    /** @var mixed */
    public $fromintegref = null;
    /** @var mixed */
    public $eprintcnt = null;
    /** @var mixed */
    public $clnotreflaaccref = null;
    /** @var mixed */
    public $clnotreflacntrref = null;
    /** @var mixed */
    public $payercrprovider = null;
    /** @var mixed */
    public $payercrkey = null;
    /** @var mixed */
    public $forentrust = null;
    /** @var mixed */
    public $einvoiceTelcode = null;
    /** @var mixed */
    public $einvoiceTelnr = null;
    /** @var mixed */
    public $ordfichecmref = null;
    /** @var mixed */
    public $earchivedetrEnrgplatenum = null;
    /** @var mixed */
    public $earchivedetrEnrgcarid = null;
    /** @var mixed */
    public $earchivedetrChrgbegdate = null;
    /** @var mixed */
    public $earchivedetrChrgbegtime = null;
    /** @var mixed */
    public $earchivedetrChrgenddate = null;
    /** @var mixed */
    public $earchivedetrChrgendtime = null;
    /** @var mixed */
    public $earchivedetrEsuraporid = null;
    /** @var mixed */
    public $earchivedetrEsuraporiddate = null;
    /** @var mixed */
    public $einvoiceEnrgplatenum = null;
    /** @var mixed */
    public $einvoiceEnrgcarid = null;
    /** @var mixed */
    public $einvoiceChrgbegdate = null;
    /** @var mixed */
    public $einvoiceChrgbegtime = null;
    /** @var mixed */
    public $einvoiceChrgenddate = null;
    /** @var mixed */
    public $einvoiceChrgendtime = null;
    /** @var mixed */
    public $einvoiceEsuraporid = null;
    /** @var mixed */
    public $einvoiceEsuraporiddate = null;
    /** @var mixed */
    public $esendtime = null;
}

/**
 * ItemSlipsAnalytics
 */
class ItemSlipsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
