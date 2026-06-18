<?php

declare(strict_types=1);

namespace LogoObjects\Clients\purchaseOrders;

/**
 * RscollectionrsOrdtransxml
 */
class RscollectionrsOrdtransxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchaseOrders\RsOrdtransxml::class],
        ]);
    }
}

/**
 * RscollectionrsOrddettrnxml
 */
class RscollectionrsOrddettrnxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchaseOrders\RsOrddettrnxml::class],
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
            'items' => [\LogoObjects\Clients\purchaseOrders\RsCampcodeslistxml::class],
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
            'items' => [\LogoObjects\Clients\purchaseOrders\ExtendedFieldDefinitions::class],
        ]);
    }
}

/**
 * RscollectionrsAddtaxmultilinex
 */
class RscollectionrsAddtaxmultilinex extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchaseOrders\RsAddtaxmultilinex::class],
        ]);
    }
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
            'items' => [\LogoObjects\Clients\purchaseOrders\RsPaylstxml::class],
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
            'items' => [\LogoObjects\Clients\purchaseOrders\RsDiscpaytrxml::class],
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
            'items' => [\LogoObjects\Clients\purchaseOrders\DemandPeggings::class],
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
            'items' => [\LogoObjects\Clients\purchaseOrders\RsLabelxml::class],
        ]);
    }
}

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
 * RsOrdtransxml
 */
class RsOrdtransxml extends \LogoObjects\Types\BaseEntity
{
    public ?string $DEVIR = null;
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
    public $CALC_TYPE = null;
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
    public $NET_DSC_FLAG = null;
    /** @var int|float|null */
    public $NET_DSC_RATE = null;
    /** @var int|float|null */
    public $NET_DSC_AMOUNT = null;
    /** @var int|float|null */
    public $PRODUCED = null;
    public ?string $ORDER_CODE = null;
    /** @var RscollectionrsOrddettrnxml|null */
    public $DETAILS = null;
    public ?string $DETDELLIST = null;
    /** @var int|float|null */
    public $REASON_FOR_NOT_SHP = null;
    /** @var int|float|null */
    public $CMPG_LINE_REF = null;
    /** @var RscollectionrsCampcodeslistxml|null */
    public $CAMPAIGN_INFOS = null;
    /** @var int|float|null */
    public $CAMPAIGN_POINT = null;
    public ?string $PROM_CLAS_ITEM_CODE = null;
    /** @var int|float|null */
    public $PR_RATE = null;
    /** @var int|float|null */
    public $GROSS_U_INFO1 = null;
    /** @var int|float|null */
    public $GROSS_U_INFO2 = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    /** @var int|float|null */
    public $DEM_PEGGED_AMNT = null;
    public ?string $SALESMAN_CODE = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $DEFNFLDS = null;
    /** @var int|float|null */
    public $CURR_TRANSACTIN = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $PRCLISTREF = null;
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
    public $PRIORITY = null;
    /** @var int|float|null */
    public $ADD_TAX_RATE = null;
    /** @var int|float|null */
    public $ADD_TAX_CONVFACT = null;
    /** @var int|float|null */
    public $ADD_TAX_AMOUNT = null;
    /** @var int|float|null */
    public $ADD_TAX_ACCREF = null;
    /** @var int|float|null */
    public $ADD_TAX_CENTERREF = null;
    /** @var int|float|null */
    public $ADD_TAX_AMNTISUPD = null;
    /** @var int|float|null */
    public $ADD_TAX_DISC_AMOUNT = null;
    /** @var int|float|null */
    public $EX_ADD_TAX_RATE = null;
    /** @var int|float|null */
    public $EX_ADD_TAX_CONVF = null;
    /** @var int|float|null */
    public $EX_ADD_TAX_AMOUNT = null;
    /** @var int|float|null */
    public $EU_VAT_STATUS = null;
    /** @var int|float|null */
    public $MULTI_ADD_TAX = null;
    /** @var RscollectionrsAddtaxmultilinex|null */
    public $ADDTAXLINELIST = null;
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
    /** @var int|float|null */
    public $EDT_PRICE = null;
    /** @var int|float|null */
    public $EDT_CURR = null;
    public ?string $ORG_DUE_DATE = null;
    /** @var int|float|null */
    public $ORG_QUANTITY = null;
    /** @var int|float|null */
    public $ORG_PRICE = null;
    public ?string $AUXIL_CODE2 = null;
    public ?string $RESERVE_DATE = null;
    /** @var int|float|null */
    public $RESERVE_AMOUNT = null;
    public ?string $PRCLISTCODE = null;
    /** @var int|float|null */
    public $PRCLISTTYPE = null;
    public ?string $GLOBAL_ID = null;
    /** @var int|float|null */
    public $DEDUCTION_PART1 = null;
    /** @var int|float|null */
    public $DEDUCTION_PART2 = null;
    /** @var int|float|null */
    public $CANDEDUCT = null;
    /** @var int|float|null */
    public $DEDUCTION_TOT = null;
    /** @var int|float|null */
    public $DEDUCTION_TOT_TC = null;
    /** @var int|float|null */
    public $OFFERREF = null;
    /** @var int|float|null */
    public $OFFTRANSREF = null;
    public ?string $PRODUCER_CODE = null;
    /** @var int|float|null */
    public $BOMREF = null;
    public ?string $BOM_CODE = null;
    /** @var int|float|null */
    public $BOM_TYPE = null;
    /** @var int|float|null */
    public $BOMREVREF = null;
    public ?string $BOM_REV_CODE = null;
    /** @var int|float|null */
    public $ROUTINGREF = null;
    public ?string $ROUTING_CODE = null;
    /** @var int|float|null */
    public $OPERATIONREF = null;
    public ?string $OPERATION_CODE = null;
    /** @var int|float|null */
    public $WSREF = null;
    public ?string $WS_CODE = null;
    public ?string $ADDITIONAL_ITEMS_CODE = null;
    public ?string $PROMOTION_CODE = null;
    /** @var int|float|null */
    public $APPLY_ADD_TAX = null;
    public ?string $VATEXCEPT_CODE = null;
    public ?string $VATEXCEPT_REASON = null;
    public ?string $ADDTAXEXCEPT_CODE = null;
    public ?string $ADDTAXEXCEPT_REASON = null;
    public ?string $CPA_CODE = null;
    public ?string $GTIP_CODE = null;
    /** @var int|float|null */
    public $PUBLICCOUNTRYREF = null;
    public ?string $PUBLIC_COUNTRY_CODE = null;
    public ?string $PUBLIC_COUNTRY_NAME = null;
    /** @var int|float|null */
    public $DIST_DISC_VAT = null;
    public ?string $DEDUCT_CODE = null;
    public ?string $DEDUCT_DEF = null;
    public ?string $GUID = null;
    /** @var int|float|null */
    public $PARENTLNREF = null;
    /** @var int|float|null */
    public $ITMDISC = null;
    /** @var int|float|null */
    public $ADD_TAX_REF = null;
    /** @var int|float|null */
    public $ADD_TAX_EFFECT_KDV = null;
    /** @var int|float|null */
    public $ADD_TAX_INLNNET = null;
    public ?string $DRAFTSTOCKNAME = null;
    public ?string $DRAFTSTOCKNAME2 = null;
    public ?string $DRAFTSTOCKNAME3 = null;
    /** @var int|float|null */
    public $PARENTSTOCKREF = null;
    public ?string $PURCHOFFCAPTION = null;
    /** @var int|float|null */
    public $ADD_TAX_TYPE = null;
    public ?string $GETSTOCKLINEPRICE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DETAILS' => \LogoObjects\Clients\purchaseOrders\RscollectionrsOrddettrnxml::class,
            'CAMPAIGN_INFOS' => \LogoObjects\Clients\purchaseOrders\RscollectionrsCampcodeslistxml::class,
            'DEFNFLDS' => \LogoObjects\Clients\purchaseOrders\Rscollectionextendedfielddefinitions::class,
            'ADDTAXLINELIST' => \LogoObjects\Clients\purchaseOrders\RscollectionrsAddtaxmultilinex::class,
        ]);
    }
}

/**
 * RsOrddettrnxml
 */
class RsOrddettrnxml extends \LogoObjects\Types\BaseEntity
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
    public $CALC_TYPE = null;
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
    public $PRODUCED = null;
    public ?string $ORDER_CODE = null;
    public ?string $DETLIST = null;
    public ?string $DETDELLIST = null;
    /** @var int|float|null */
    public $REASON_FOR_NOT_SHP = null;
    /** @var int|float|null */
    public $CMPG_LINE_REF = null;
    /** @var int|float|null */
    public $DEM_PEGGED_AMNT = null;
    /** @var int|float|null */
    public $PRCLISTREF = null;
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
    public $PRIORITY = null;
    /** @var int|float|null */
    public $ADD_TAX_RATE = null;
    /** @var int|float|null */
    public $ADD_TAX_CONVFACT = null;
    /** @var int|float|null */
    public $ADD_TAX_AMOUNT = null;
    /** @var int|float|null */
    public $ADD_TAX_ACCREF = null;
    /** @var int|float|null */
    public $ADD_TAX_CENTERREF = null;
    /** @var int|float|null */
    public $ADD_TAX_AMNTISUPD = null;
    /** @var int|float|null */
    public $ADD_TAX_DISC_AMOUNT = null;
    /** @var int|float|null */
    public $EX_ADD_TAX_RATE = null;
    /** @var int|float|null */
    public $EX_ADD_TAX_CONVF = null;
    /** @var int|float|null */
    public $EX_ADD_TAX_AMOUNT = null;
    /** @var int|float|null */
    public $EU_VAT_STATUS = null;
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
    /** @var int|float|null */
    public $EDT_PRICE = null;
    /** @var int|float|null */
    public $EDT_CURR = null;
    public ?string $ORG_DUE_DATE = null;
    /** @var int|float|null */
    public $ORG_QUANTITY = null;
    /** @var int|float|null */
    public $ORG_PRICE = null;
    public ?string $AUXIL_CODE2 = null;
    public ?string $RESERVE_DATE = null;
    public ?string $PRCLISTCODE = null;
    /** @var int|float|null */
    public $PRCLISTTYPE = null;
    public ?string $GLOBAL_ID = null;
    /** @var int|float|null */
    public $DEDUCTION_PART1 = null;
    /** @var int|float|null */
    public $DEDUCTION_PART2 = null;
    /** @var int|float|null */
    public $BOMREF = null;
    public ?string $BOM_CODE = null;
    /** @var int|float|null */
    public $BOM_TYPE = null;
    /** @var int|float|null */
    public $BOMREVREF = null;
    public ?string $BOM_REV_CODE = null;
    /** @var int|float|null */
    public $ROUTINGREF = null;
    public ?string $ROUTING_CODE = null;
    /** @var int|float|null */
    public $OPERATIONREF = null;
    public ?string $OPERATION_CODE = null;
    /** @var int|float|null */
    public $WSREF = null;
    public ?string $WS_CODE = null;
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
    public $ADD_TAX_EFFECT_KDV = null;
    /** @var int|float|null */
    public $ADD_TAX_INLNNET = null;
    public ?string $DRAFTSTOCKNAME = null;
    public ?string $DRAFTSTOCKNAME2 = null;
    public ?string $DRAFTSTOCKNAME3 = null;
    /** @var int|float|null */
    public $PARENTSTOCKREF = null;
    public ?string $PURCHOFFCAPTION = null;
    /** @var int|float|null */
    public $ADD_TAX_TYPE = null;
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
 * RsAddtaxmultilinex
 */
class RsAddtaxmultilinex extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $FICHETYPE = null;
    /** @var int|float|null */
    public $FICHEREF = null;
    /** @var int|float|null */
    public $LINEREF = null;
    /** @var int|float|null */
    public $ADDTAXREF = null;
    public ?string $ADD_TAX_CODE = null;
    public ?string $ADD_TAX_GLOBAL_CODE = null;
    /** @var int|float|null */
    public $ADD_TAX_AMOUNT = null;
    /** @var int|float|null */
    public $ADD_TAX_VATMATRAH = null;
    /** @var int|float|null */
    public $ADD_TAX_AMNTISUPD = null;
    /** @var int|float|null */
    public $ADD_TAX_RATE = null;
    /** @var int|float|null */
    public $ADD_TAX_CONVFACT = null;
    /** @var int|float|null */
    public $ADD_TAX_DISCAMOUNT = null;
    /** @var int|float|null */
    public $ADD_TAX_ACCREF = null;
    public ?string $ADD_TAX_GL_CODE = null;
    /** @var int|float|null */
    public $ADD_TAX_CENTERREF = null;
    public ?string $ADD_TAX_OHP_CODE = null;
    /** @var int|float|null */
    public $ADD_TAX_AMOUNTX = null;
    /** @var int|float|null */
    public $ADD_TAX_VATMATRAHX = null;
    /** @var int|float|null */
    public $ADD_TAX_CONVFACTX = null;
    /** @var int|float|null */
    public $ADD_TAX_DISCAMOUNTX = null;
    /** @var int|float|null */
    public $EX_ADD_TAX_AMNTX = null;
    /** @var int|float|null */
    public $EX_ADD_TAX_CONVFX = null;
    /** @var int|float|null */
    public $EX_ADD_TAX_AMNT = null;
    /** @var int|float|null */
    public $EX_ADD_TAX_RATE = null;
    /** @var int|float|null */
    public $EX_ADD_TAX_CONVF = null;
    /** @var int|float|null */
    public $EX_ADD_TAX_AREF = null;
    public ?string $EX_ADD_TAX_GL_CODE = null;
    /** @var int|float|null */
    public $EX_ADD_TAX_CREF = null;
    public ?string $EX_ADD_TAX_OHP_CODE = null;
    /** @var int|float|null */
    public $OTHR_ADD_TAX_AREF = null;
    public ?string $OTHR_ADD_TAX_GL_CODE = null;
    /** @var int|float|null */
    public $OTHR_ADD_TAX_CREF = null;
    public ?string $OTHR_ADD_TAX_OHP_CODE = null;
    /** @var int|float|null */
    public $VATMATRAH = null;
    /** @var int|float|null */
    public $ADD_TAX_TYPE = null;
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
            'DISCTRLIST' => \LogoObjects\Clients\purchaseOrders\RscollectionrsDiscpaytrxml::class,
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
 * PurchaseOrders
 */
class PurchaseOrders extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $TYPE = null;
    public ?string $NUMBER = null;
    public ?string $DOC_TRACK_NR = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $TIME = null;
    public ?string $DOC_NUMBER = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    public ?string $ARP_CODE = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    public ?string $ARP_CODE_SHPM = null;
    /** @var int|float|null */
    public $RECVREF = null;
    public ?string $SHIPLOC_CODE = null;
    public ?string $GL_CODE = null;
    /** @var int|float|null */
    public $ACCOUNTREF = null;
    public ?string $OHP_CODE = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    /** @var int|float|null */
    public $SOURCE_WH = null;
    /** @var int|float|null */
    public $SOURCE_COST_GRP = null;
    /** @var int|float|null */
    public $UPDCURR = null;
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
    public $TOTAL_PROMOTIONS = null;
    /** @var int|float|null */
    public $TOTAL_VAT = null;
    /** @var int|float|null */
    public $TOTAL_GROSS = null;
    /** @var int|float|null */
    public $TOTAL_NET = null;
    /** @var int|float|null */
    public $RC_RATE = null;
    /** @var int|float|null */
    public $RC_NET = null;
    public ?string $NOTES1 = null;
    public ?string $NOTES2 = null;
    public ?string $NOTES3 = null;
    public ?string $NOTES4 = null;
    public ?string $NOTES5 = null;
    public ?string $NOTES6 = null;
    /** @var int|float|null */
    public $EXTENREF = null;
    public ?string $PAYMENT_CODE = null;
    /** @var int|float|null */
    public $PAYDEFREF = null;
    /** @var int|float|null */
    public $PRINT_COUNTER = null;
    public ?string $PRINT_DATE = null;
    /** @var int|float|null */
    public $DIVISION = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $ORDER_STATUS = null;
    public ?string $SALESMAN_CODE = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    public ?string $SHIPMENT_TYPE = null;
    public ?string $SHIPPING_AGENT = null;
    /** @var int|float|null */
    public $CURRSEL_TOTAL = null;
    /** @var int|float|null */
    public $CURRSEL_DETAILS = null;
    public ?string $TRADING_GRP = null;
    /** @var int|float|null */
    public $FACTORY = null;
    /** @var RscollectionrsOrdtransxml|null */
    public $TRANSACTIONS = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $XCNT = null;
    public ?string $DOCALS = null;
    public ?string $ITEXT = null;
    public ?string $CUST_ORD_NO = null;
    /** @var int|float|null */
    public $DLV_CLIENT = null;
    public ?string $DOC_TRACKING_NR = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    public ?string $ORGLOGOID = null;
    /** @var int|float|null */
    public $OFFER_REFERENCE = null;
    /** @var int|float|null */
    public $OFFALT_REFERENCE = null;
    /** @var int|float|null */
    public $OFFER_TYP = null;
    /** @var int|float|null */
    public $OFFER_ALTNR = null;
    /** @var int|float|null */
    public $CURR_TRANSACTIN = null;
    /** @var int|float|null */
    public $TC_RATE = null;
    /** @var int|float|null */
    public $TC_NET = null;
    /** @var int|float|null */
    public $WITH_PAYMENT = null;
    /** @var RscollectionrsPaylstxml|null */
    public $PAYMENT_LIST = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $DEFNFLDSLIST = null;
    /** @var int|float|null */
    public $WFLOWCARDREF = null;
    /** @var int|float|null */
    public $OP_STATUS = null;
    /** @var int|float|null */
    public $UPD_CURR = null;
    /** @var int|float|null */
    public $UPD_TRCURR = null;
    /** @var int|float|null */
    public $GUARANTOR1_FICHETYPE = null;
    /** @var int|float|null */
    public $GUARANTOR1_NR = null;
    public ?string $GUARANTOR1_NAMESURNAME = null;
    public ?string $GUARANTOR1_ADDR1 = null;
    public ?string $GUARANTOR1_ADDR2 = null;
    public ?string $GUARANTOR1_DISTRICT = null;
    public ?string $GUARANTOR1_TOWN = null;
    public ?string $GUARANTOR1_CITY = null;
    public ?string $GUARANTOR1_COUNTRY = null;
    public ?string $GUARANTOR1_POSTCODE = null;
    public ?string $GUARANTOR1_TELNR1 = null;
    public ?string $GUARANTOR1_TELNR2 = null;
    public ?string $GUARANTOR1_FAXNR = null;
    /** @var int|float|null */
    public $GUARANTOR1_SITEID = null;
    /** @var int|float|null */
    public $GUARANTOR1_ORGLOGICREF = null;
    /** @var int|float|null */
    public $GUARANTOR1_CLIENTREF = null;
    public ?string $GUARANTOR1_TAXNR = null;
    public ?string $GUARANTOR1_TAXOFFICE = null;
    public ?string $GUARANTOR1_TAXXOFFCODE = null;
    public ?string $GUARANTOR1_BANKBRANCHCODE = null;
    public ?string $GUARANTOR1_BANKBRANCHS = null;
    public ?string $GUARANTOR1_BANKACCOUNTS = null;
    /** @var int|float|null */
    public $GUARANTOR2_FICHETYPE = null;
    /** @var int|float|null */
    public $GUARANTOR2_NR = null;
    public ?string $GUARANTOR2_NAMESURNAME = null;
    public ?string $GUARANTOR2_ADDR1 = null;
    public ?string $GUARANTOR2_ADDR2 = null;
    public ?string $GUARANTOR2_DISTRICT = null;
    public ?string $GUARANTOR2_TOWN = null;
    public ?string $GUARANTOR2_CITY = null;
    public ?string $GUARANTOR2_COUNTRY = null;
    public ?string $GUARANTOR2_POSTCODE = null;
    public ?string $GUARANTOR2_TELNR1 = null;
    public ?string $GUARANTOR2_TELNR2 = null;
    public ?string $GUARANTOR2_FAXNR = null;
    /** @var int|float|null */
    public $GUARANTOR2_SITEID = null;
    /** @var int|float|null */
    public $GUARANTOR2_ORGLOGICREF = null;
    /** @var int|float|null */
    public $GUARANTOR2_CLIENTREF = null;
    public ?string $GUARANTOR2_TAXNR = null;
    public ?string $GUARANTOR2_TAXOFFICE = null;
    public ?string $GUARANTOR2_TAXOFFCODE = null;
    public ?string $GUARANTOR2_BANKBRANCHCODE = null;
    public ?string $GUARANTOR2_BANKBRANCHS = null;
    public ?string $GUARANTOR2_BANKACCOUNTS = null;
    /** @var int|float|null */
    public $AFFECT_COLLATRL = null;
    /** @var Rscollectiondemandpeggings|null */
    public $DEMANDPEGGINGS = null;
    /** @var int|float|null */
    public $TOTAL_ADD_TAX = null;
    /** @var int|float|null */
    public $TOTAL_EX_ADD_TAX = null;
    /** @var int|float|null */
    public $AFFECT_RISK = null;
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
    public $PAYMENT_TYPE = null;
    /** @var int|float|null */
    public $APPROVE = null;
    public ?string $APPROVE_DATE = null;
    public ?string $GUID = null;
    public ?string $FC_STATUS_NAME = null;
    /** @var int|float|null */
    public $DEDUCTIONPART1 = null;
    /** @var int|float|null */
    public $DEDUCTIONPART2 = null;
    public ?string $GLOBAL_ID = null;
    /** @var int|float|null */
    public $CANCEL_AUTO_CAMP_PROC = null;
    public ?string $CAMPAIGN_CODE = null;
    /** @var int|float|null */
    public $APPLY_ARP_DISCOUNT = null;
    /** @var int|float|null */
    public $DEVIR = null;
    public ?string $DELIVERY_CODE = null;
    public ?string $ORIGINAL_DATE = null;
    /** @var int|float|null */
    public $ACTIVITY_RENTING = null;
    /** @var int|float|null */
    public $ADD_DISCOUNTS_VAT = null;
    /** @var int|float|null */
    public $EINVOICE_TYPE = null;
    /** @var int|float|null */
    public $EINVOICE = null;
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
    /** @var int|float|null */
    public $EINVOICE_TAXTYPE = null;
    public ?string $EINVOICE_TUNAME = null;
    public ?string $EINVOICE_TUSURNAME = null;
    public ?string $EINVOICE_TUPASSPORTNO = null;
    public ?string $EINVOICE_TUPASSPORTDATE = null;
    public ?string $EINVOICE_TUNATIONALITY = null;
    public ?string $EINVOICE_TUNATIONALITYNAME = null;
    public ?string $EINVOICE_TUBANKNAME = null;
    public ?string $EINVOICE_TUBNACCOUNTNO = null;
    public ?string $EINVOICE_TUBNBRANCH = null;
    public ?string $EINVOICE_TUPAYMENTNOTE = null;
    public ?string $EINVOICE_TUBNCURR = null;
    public ?string $EINVOICE_ADDR1 = null;
    public ?string $EINVOICE_ADDR2 = null;
    public ?string $EINVOICE_CITYCODE = null;
    public ?string $EINVOICE_CITY = null;
    public ?string $EINVOICE_COUNTRYCODE = null;
    public ?string $EINVOICE_COUNTRY = null;
    public ?string $EINVOICE_DISTRICTCODE = null;
    public ?string $EINVOICE_DISTRICT = null;
    public ?string $EINVOICE_TOWNCODE = null;
    public ?string $EINVOICE_TOWN = null;
    public ?string $EINVOICE_EXITTOWN = null;
    public ?string $EINVOICE_EXITGATECODE = null;
    public ?string $EINVOICE_EXITGATE = null;
    public ?string $EINVOICE_AGENCYCODE = null;
    public ?string $EINVOICE_AGENCY = null;
    public ?string $EINVOICE_EXITCOUNTRYCODE = null;
    public ?string $EINVOICE_EXITCOUNTRY = null;
    /** @var int|float|null */
    public $EINVOICE_TRANSPORTTYP = null;
    public ?string $EINVOICE_TRANSPORTTYPCODE = null;
    public ?string $EINVOICE_TRANSPORTTYPNAME = null;
    public ?string $EINVOICE_EXITDATE = null;
    /** @var int|float|null */
    public $EINVOICE_EXITTIME = null;
    public ?string $EINVOICE_FLIGHTNUMBER = null;
    public ?string $EINVOICE_GUIDE = null;
    /** @var int|float|null */
    public $EINVOICE_TURETPRICE = null;
    public ?string $EINVOICE_TURETPRICESTR = null;
    /** @var int|float|null */
    public $EINVOICE_SENDEINVCUSTOM = null;
    /** @var int|float|null */
    public $EINVOICE_EINVOICETYPSGK = null;
    public ?string $EINVOICE_TAXPAYERCODE = null;
    public ?string $EINVOICE_TAXPAYERNAME = null;
    public ?string $EINVOICE_DOCUMENTNOSGK = null;
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
    public $PUBLICBNACCREF = null;
    public ?string $PUBLIC_BNACC_CODE = null;
    public ?string $PUBLIC_BNACC_IBAN = null;
    /** @var int|float|null */
    public $PUBLIC_BNACC_CURRENCY = null;
    /** @var int|float|null */
    public $ACCEPT_EINV_PUBLIC = null;
    /** @var int|float|null */
    public $EINSTEAD_OF_DISPATCH = null;
    public ?string $VATEXCEPT_CODE = null;
    public ?string $VATEXCEPT_REASON = null;
    public ?string $ADDTAXEXCEPT_CODE = null;
    public ?string $ADDTAXEXCEPT_REASON = null;
    /** @var int|float|null */
    public $TAX_FREE_CHECK = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_LOGICALREF = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_ORDFCREF = null;
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
    /** @var RscollectionrsLabelxml|null */
    public $LABEL_LIST = null;
    public ?string $PAYERID = null;
    /** @var int|float|null */
    public $PAYERTYPE = null;
    /** @var int|float|null */
    public $CANT_CRE_DEDUCT = null;
    /** @var int|float|null */
    public $COMMITMENT = null;
    public ?string $CMBEGDATE = null;
    public ?string $CMENDDATE = null;
    public ?string $CMEXP = null;
    /** @var int|float|null */
    public $CMTYPE = null;
    /** @var int|float|null */
    public $CMAMOUNT = null;
    /** @var int|float|null */
    public $CMTOTAL = null;
    /** @var int|float|null */
    public $CMSHIPPEDAMOUNT = null;
    /** @var int|float|null */
    public $CMSHIPPEDTOTAL = null;
    /** @var int|float|null */
    public $CMPAYMENTTOTAL = null;
    /** @var int|float|null */
    public $CMPRICE = null;
    public ?string $EINVOICE_TELCODE = null;
    public ?string $EINVOICE_TELNR = null;
    /** @var int|float|null */
    public $CMPAIDTOTAL = null;
    /** @var int|float|null */
    public $CMCANDEDUCT = null;
    /** @var int|float|null */
    public $CMDEDUCTPART1 = null;
    /** @var int|float|null */
    public $CMDEDUCTPART2 = null;
    /** @var int|float|null */
    public $CMVAT = null;
    /** @var int|float|null */
    public $CMDEVIRODEMEBAKIYE = null;
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
    /** @var int|float|null */
    public $PAYERMICRO = null;
    /** @var int|float|null */
    public $CONTACTREF = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'TRANSACTIONS' => \LogoObjects\Clients\purchaseOrders\RscollectionrsOrdtransxml::class,
            'PAYMENT_LIST' => \LogoObjects\Clients\purchaseOrders\RscollectionrsPaylstxml::class,
            'DEFNFLDSLIST' => \LogoObjects\Clients\purchaseOrders\Rscollectionextendedfielddefinitions::class,
            'DEMANDPEGGINGS' => \LogoObjects\Clients\purchaseOrders\Rscollectiondemandpeggings::class,
            'LABEL_LIST' => \LogoObjects\Clients\purchaseOrders\RscollectionrsLabelxml::class,
        ]);
    }
}

/**
 * PurchaseOrdersQueryOptions
 */
class PurchaseOrdersQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var PurchaseOrdersSortSpec|null */
    public $sort = null;
}

/**
 * PurchaseOrdersSearchCriteria
 */
class PurchaseOrdersSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $type = null;
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
    public $arpCode = null;
    /** @var mixed */
    public $clientref = null;
    /** @var mixed */
    public $arpCodeShpm = null;
    /** @var mixed */
    public $recvref = null;
    /** @var mixed */
    public $shiplocCode = null;
    /** @var mixed */
    public $glCode = null;
    /** @var mixed */
    public $accountref = null;
    /** @var mixed */
    public $ohpCode = null;
    /** @var mixed */
    public $centerref = null;
    /** @var mixed */
    public $sourceWh = null;
    /** @var mixed */
    public $sourceCostGrp = null;
    /** @var mixed */
    public $updcurr = null;
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
    public $totalPromotions = null;
    /** @var mixed */
    public $totalVat = null;
    /** @var mixed */
    public $totalGross = null;
    /** @var mixed */
    public $totalNet = null;
    /** @var mixed */
    public $rcRate = null;
    /** @var mixed */
    public $rcNet = null;
    /** @var mixed */
    public $notes1 = null;
    /** @var mixed */
    public $notes2 = null;
    /** @var mixed */
    public $notes3 = null;
    /** @var mixed */
    public $notes4 = null;
    /** @var mixed */
    public $notes5 = null;
    /** @var mixed */
    public $notes6 = null;
    /** @var mixed */
    public $extenref = null;
    /** @var mixed */
    public $paymentCode = null;
    /** @var mixed */
    public $paydefref = null;
    /** @var mixed */
    public $printCounter = null;
    /** @var mixed */
    public $printDate = null;
    /** @var mixed */
    public $division = null;
    /** @var mixed */
    public $department = null;
    /** @var mixed */
    public $orderStatus = null;
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
    public $salesmanCode = null;
    /** @var mixed */
    public $salesmanref = null;
    /** @var mixed */
    public $shipmentType = null;
    /** @var mixed */
    public $shippingAgent = null;
    /** @var mixed */
    public $currselTotal = null;
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
    public $factory = null;
    /** @var mixed */
    public $transactions = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $xcnt = null;
    /** @var mixed */
    public $docals = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $custOrdNo = null;
    /** @var mixed */
    public $dlvClient = null;
    /** @var mixed */
    public $docTrackingNr = null;
    /** @var mixed */
    public $cancelled = null;
    /** @var mixed */
    public $orglogoid = null;
    /** @var mixed */
    public $offerReference = null;
    /** @var mixed */
    public $offaltReference = null;
    /** @var mixed */
    public $offerTyp = null;
    /** @var mixed */
    public $offerAltnr = null;
    /** @var mixed */
    public $currTransactin = null;
    /** @var mixed */
    public $tcRate = null;
    /** @var mixed */
    public $tcNet = null;
    /** @var mixed */
    public $withPayment = null;
    /** @var mixed */
    public $paymentList = null;
    /** @var mixed */
    public $projectCode = null;
    /** @var mixed */
    public $projectref = null;
    /** @var mixed */
    public $defnfldslist = null;
    /** @var mixed */
    public $wflowcardref = null;
    /** @var mixed */
    public $opStatus = null;
    /** @var mixed */
    public $updCurr = null;
    /** @var mixed */
    public $updTrcurr = null;
    /** @var mixed */
    public $guarantor1Fichetype = null;
    /** @var mixed */
    public $guarantor1Nr = null;
    /** @var mixed */
    public $guarantor1Namesurname = null;
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
    public $guarantor1Telnr1 = null;
    /** @var mixed */
    public $guarantor1Telnr2 = null;
    /** @var mixed */
    public $guarantor1Faxnr = null;
    /** @var mixed */
    public $guarantor1Siteid = null;
    /** @var mixed */
    public $guarantor1Orglogicref = null;
    /** @var mixed */
    public $guarantor1Clientref = null;
    /** @var mixed */
    public $guarantor1Taxnr = null;
    /** @var mixed */
    public $guarantor1Taxoffice = null;
    /** @var mixed */
    public $guarantor1Taxxoffcode = null;
    /** @var mixed */
    public $guarantor1Bankbranchcode = null;
    /** @var mixed */
    public $guarantor1Bankbranchs = null;
    /** @var mixed */
    public $guarantor1Bankaccounts = null;
    /** @var mixed */
    public $guarantor2Fichetype = null;
    /** @var mixed */
    public $guarantor2Nr = null;
    /** @var mixed */
    public $guarantor2Namesurname = null;
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
    public $guarantor2Telnr1 = null;
    /** @var mixed */
    public $guarantor2Telnr2 = null;
    /** @var mixed */
    public $guarantor2Faxnr = null;
    /** @var mixed */
    public $guarantor2Siteid = null;
    /** @var mixed */
    public $guarantor2Orglogicref = null;
    /** @var mixed */
    public $guarantor2Clientref = null;
    /** @var mixed */
    public $guarantor2Taxnr = null;
    /** @var mixed */
    public $guarantor2Taxoffice = null;
    /** @var mixed */
    public $guarantor2Taxoffcode = null;
    /** @var mixed */
    public $guarantor2Bankbranchcode = null;
    /** @var mixed */
    public $guarantor2Bankbranchs = null;
    /** @var mixed */
    public $guarantor2Bankaccounts = null;
    /** @var mixed */
    public $affectCollatrl = null;
    /** @var mixed */
    public $demandpeggings = null;
    /** @var mixed */
    public $totalAddTax = null;
    /** @var mixed */
    public $totalExAddTax = null;
    /** @var mixed */
    public $affectRisk = null;
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
    public $paymentType = null;
    /** @var mixed */
    public $approve = null;
    /** @var mixed */
    public $approveDate = null;
    /** @var mixed */
    public $guid = null;
    /** @var mixed */
    public $fcStatusName = null;
    /** @var mixed */
    public $deductionpart1 = null;
    /** @var mixed */
    public $deductionpart2 = null;
    /** @var mixed */
    public $globalId = null;
    /** @var mixed */
    public $cancelAutoCampProc = null;
    /** @var mixed */
    public $campaignCode = null;
    /** @var mixed */
    public $applyArpDiscount = null;
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
    public $einvoiceType = null;
    /** @var mixed */
    public $einvoice = null;
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
    public $einvoiceTaxtype = null;
    /** @var mixed */
    public $einvoiceTuname = null;
    /** @var mixed */
    public $einvoiceTusurname = null;
    /** @var mixed */
    public $einvoiceTupassportno = null;
    /** @var mixed */
    public $einvoiceTupassportdate = null;
    /** @var mixed */
    public $einvoiceTunationality = null;
    /** @var mixed */
    public $einvoiceTunationalityname = null;
    /** @var mixed */
    public $einvoiceTubankname = null;
    /** @var mixed */
    public $einvoiceTubnaccountno = null;
    /** @var mixed */
    public $einvoiceTubnbranch = null;
    /** @var mixed */
    public $einvoiceTupaymentnote = null;
    /** @var mixed */
    public $einvoiceTubncurr = null;
    /** @var mixed */
    public $einvoiceAddr1 = null;
    /** @var mixed */
    public $einvoiceAddr2 = null;
    /** @var mixed */
    public $einvoiceCitycode = null;
    /** @var mixed */
    public $einvoiceCity = null;
    /** @var mixed */
    public $einvoiceCountrycode = null;
    /** @var mixed */
    public $einvoiceCountry = null;
    /** @var mixed */
    public $einvoiceDistrictcode = null;
    /** @var mixed */
    public $einvoiceDistrict = null;
    /** @var mixed */
    public $einvoiceTowncode = null;
    /** @var mixed */
    public $einvoiceTown = null;
    /** @var mixed */
    public $einvoiceExittown = null;
    /** @var mixed */
    public $einvoiceExitgatecode = null;
    /** @var mixed */
    public $einvoiceExitgate = null;
    /** @var mixed */
    public $einvoiceAgencycode = null;
    /** @var mixed */
    public $einvoiceAgency = null;
    /** @var mixed */
    public $einvoiceExitcountrycode = null;
    /** @var mixed */
    public $einvoiceExitcountry = null;
    /** @var mixed */
    public $einvoiceTransporttyp = null;
    /** @var mixed */
    public $einvoiceTransporttypcode = null;
    /** @var mixed */
    public $einvoiceTransporttypname = null;
    /** @var mixed */
    public $einvoiceExitdate = null;
    /** @var mixed */
    public $einvoiceExittime = null;
    /** @var mixed */
    public $einvoiceFlightnumber = null;
    /** @var mixed */
    public $einvoiceGuide = null;
    /** @var mixed */
    public $einvoiceTuretprice = null;
    /** @var mixed */
    public $einvoiceTuretpricestr = null;
    /** @var mixed */
    public $einvoiceSendeinvcustom = null;
    /** @var mixed */
    public $einvoiceEinvoicetypsgk = null;
    /** @var mixed */
    public $einvoiceTaxpayercode = null;
    /** @var mixed */
    public $einvoiceTaxpayername = null;
    /** @var mixed */
    public $einvoiceDocumentnosgk = null;
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
    public $publicbnaccref = null;
    /** @var mixed */
    public $publicBnaccCode = null;
    /** @var mixed */
    public $publicBnaccIban = null;
    /** @var mixed */
    public $publicBnaccCurrency = null;
    /** @var mixed */
    public $acceptEinvPublic = null;
    /** @var mixed */
    public $einsteadOfDispatch = null;
    /** @var mixed */
    public $vatexceptCode = null;
    /** @var mixed */
    public $vatexceptReason = null;
    /** @var mixed */
    public $addtaxexceptCode = null;
    /** @var mixed */
    public $addtaxexceptReason = null;
    /** @var mixed */
    public $taxFreeCheck = null;
    /** @var mixed */
    public $earchivedetrLogicalref = null;
    /** @var mixed */
    public $earchivedetrOrdfcref = null;
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
    public $labelList = null;
    /** @var mixed */
    public $payerid = null;
    /** @var mixed */
    public $payertype = null;
    /** @var mixed */
    public $cantCreDeduct = null;
    /** @var mixed */
    public $commitment = null;
    /** @var mixed */
    public $cmbegdate = null;
    /** @var mixed */
    public $cmenddate = null;
    /** @var mixed */
    public $cmexp = null;
    /** @var mixed */
    public $cmtype = null;
    /** @var mixed */
    public $cmamount = null;
    /** @var mixed */
    public $cmtotal = null;
    /** @var mixed */
    public $cmshippedamount = null;
    /** @var mixed */
    public $cmshippedtotal = null;
    /** @var mixed */
    public $cmpaymenttotal = null;
    /** @var mixed */
    public $cmprice = null;
    /** @var mixed */
    public $einvoiceTelcode = null;
    /** @var mixed */
    public $einvoiceTelnr = null;
    /** @var mixed */
    public $cmpaidtotal = null;
    /** @var mixed */
    public $cmcandeduct = null;
    /** @var mixed */
    public $cmdeductpart1 = null;
    /** @var mixed */
    public $cmdeductpart2 = null;
    /** @var mixed */
    public $cmvat = null;
    /** @var mixed */
    public $cmdevirodemebakiye = null;
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
    public $payermicro = null;
    /** @var mixed */
    public $contactref = null;
}

/**
 * PurchaseOrdersAnalytics
 */
class PurchaseOrdersAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
