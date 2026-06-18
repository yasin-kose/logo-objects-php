<?php

declare(strict_types=1);

namespace LogoObjects\Clients\distributionOrders;

/**
 * RscollectionrsDistordlinexml
 */
class RscollectionrsDistordlinexml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\distributionOrders\RsDistordlinexml::class],
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
            'items' => [\LogoObjects\Clients\distributionOrders\RsSlloctrnxml::class],
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
            'items' => [\LogoObjects\Clients\distributionOrders\RsQccvalentryxml::class],
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
            'items' => [\LogoObjects\Clients\distributionOrders\RsQccvallistxml::class],
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
            'items' => [\LogoObjects\Clients\distributionOrders\RsCampcodeslistxml::class],
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
 * RsDistordlinexml
 */
class RsDistordlinexml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $DISTORDERREF = null;
    /** @var int|float|null */
    public $ITEMREF = null;
    /** @var int|float|null */
    public $LINE_TYPE = null;
    /** @var int|float|null */
    public $ORD_SITEID = null;
    /** @var int|float|null */
    public $ORD_REFERENCE = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    /** @var int|float|null */
    public $SALESMAN = null;
    public ?string $DATE = null;
    public ?string $DUE_DATE = null;
    /** @var int|float|null */
    public $ORDER_AMOUNT = null;
    /** @var int|float|null */
    public $SHIP_AMOUNT = null;
    /** @var int|float|null */
    public $REM_AMOUNT = null;
    /** @var int|float|null */
    public $UOMREF = null;
    public ?string $COUNTRY_CODE = null;
    public ?string $CITY_CODE = null;
    public ?string $TOWN_CODE = null;
    public ?string $DISTRICT_CODE = null;
    /** @var int|float|null */
    public $BRANCH = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $FACTORY = null;
    /** @var int|float|null */
    public $SOURCE_INDEX = null;
    /** @var int|float|null */
    public $RISK_STATUS = null;
    /** @var int|float|null */
    public $CAMPAIGNREFS1 = null;
    /** @var int|float|null */
    public $CAMPAIGNREFS2 = null;
    /** @var int|float|null */
    public $CAMPAIGNREFS3 = null;
    /** @var int|float|null */
    public $CAMPAIGNREFS4 = null;
    /** @var int|float|null */
    public $CAMPAIGNREFS5 = null;
    /** @var int|float|null */
    public $POINTCAMPREF = null;
    /** @var int|float|null */
    public $ITEM_TRACK_TYPE = null;
    /** @var int|float|null */
    public $LOC_TRACKING = null;
    /** @var int|float|null */
    public $LINE_NO = null;
    /** @var int|float|null */
    public $REASON_FOR_NOT_SHIP = null;
    /** @var int|float|null */
    public $CMPGLINEREF = null;
    /** @var int|float|null */
    public $D_ORD_STATUS = null;
    public ?string $D_ORD_GO_DATE = null;
    public ?string $D_ORD_RETURN_DATE = null;
    /** @var int|float|null */
    public $LOGICALREF = null;
    /** @var int|float|null */
    public $LINETYPE = null;
    /** @var int|float|null */
    public $ORDFICHEREF = null;
    /** @var int|float|null */
    public $ORDLINEREF = null;
    public ?string $DUEDATE = null;
    /** @var int|float|null */
    public $ORDERAMOUNT = null;
    /** @var int|float|null */
    public $SHIPAMOUNT = null;
    /** @var int|float|null */
    public $REMAMOUNT = null;
    public ?string $COUNTRYCODE = null;
    public ?string $CITYCODE = null;
    public ?string $TOWNCODE = null;
    public ?string $DISTRICTCODE = null;
    /** @var int|float|null */
    public $SOURCEINDEX = null;
    /** @var int|float|null */
    public $RISKSTATUS = null;
    /** @var int|float|null */
    public $ITEMTRACKTYPE = null;
    /** @var int|float|null */
    public $LOCTRACKING = null;
    /** @var int|float|null */
    public $LINENR = null;
    /** @var int|float|null */
    public $REASONFORNOTSHIP = null;
    /** @var int|float|null */
    public $DORDSTATUS = null;
    public ?string $DORDGODATE = null;
    public ?string $DORDRETURNDATE = null;
    public ?string $ITEM_CODE = null;
    public ?string $ITEM_NAME = null;
    public ?string $ORD_FICHE_NO = null;
    public ?string $CL_CODE = null;
    /** @var int|float|null */
    public $ORD_VOLUME = null;
    /** @var int|float|null */
    public $ORD_WEIGHT = null;
    /** @var int|float|null */
    public $V_AMOUNT = null;
    /** @var int|float|null */
    public $W_AMOUNT = null;
    /** @var int|float|null */
    public $ORD_DIST_RESERVED = null;
    /** @var int|float|null */
    public $ORD_UNIT_PRICE = null;
    /** @var int|float|null */
    public $VAT = null;
    /** @var int|float|null */
    public $LAST_COMPLN = null;
    /** @var int|float|null */
    public $DIST_POINT = null;
    /** @var RscollectionrsSlloctrnxml|null */
    public $SL_DETAILS = null;
    public ?string $SLDELLIST = null;
    /** @var int|float|null */
    public $U_INFO1 = null;
    /** @var int|float|null */
    public $U_INFO2 = null;
    /** @var int|float|null */
    public $U_INFO3 = null;
    /** @var int|float|null */
    public $U_INFO4 = null;
    /** @var int|float|null */
    public $U_INFO5 = null;
    /** @var int|float|null */
    public $U_INFO6 = null;
    /** @var int|float|null */
    public $U_INFO7 = null;
    /** @var int|float|null */
    public $U_INFO8 = null;
    public ?string $CLIENT_NAME = null;
    public ?string $TOWN_NAME = null;
    public ?string $DISTRICT_NAME = null;
    public ?string $UNIT_CODE = null;
    /** @var RscollectionrsCampcodeslistxml|null */
    public $CAMPAIGN_INFOS = null;
    public ?string $PROM_CLAS_ITEM_CODE = null;
    /** @var int|float|null */
    public $SHIP_STATUS = null;
    /** @var int|float|null */
    public $P_AMOUNT = null;
    public ?string $CITY = null;
    /** @var int|float|null */
    public $VAT_INC = null;
    /** @var int|float|null */
    public $GROSS_U_INFO1 = null;
    /** @var int|float|null */
    public $GROSS_U_INFO2 = null;
    /** @var int|float|null */
    public $AFFECT_COLLATRL = null;
    /** @var int|float|null */
    public $VARIANTREF = null;
    public ?string $VARIANTCODE = null;
    public ?string $VARIANTNAME = null;
    /** @var int|float|null */
    public $CANCONFIG = null;
    /** @var int|float|null */
    public $AFFECT_RISK = null;
    public ?string $GUID = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'SL_DETAILS' => \LogoObjects\Clients\distributionOrders\RscollectionrsSlloctrnxml::class,
            'CAMPAIGN_INFOS' => \LogoObjects\Clients\distributionOrders\RscollectionrsCampcodeslistxml::class,
        ]);
    }
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
            'QCLIST' => \LogoObjects\Clients\distributionOrders\RscollectionrsQccvalentryxml::class,
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
            'VALLIST' => \LogoObjects\Clients\distributionOrders\RscollectionrsQccvallistxml::class,
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
 * DistributionOrders
 */
class DistributionOrders extends \LogoObjects\Types\BaseEntity
{
    public ?string $FICHE_NO = null;
    public ?string $DATE = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $VEHICLEREF = null;
    /** @var int|float|null */
    public $ROUTREF = null;
    /** @var int|float|null */
    public $STATUS = null;
    /** @var int|float|null */
    public $MAX_CLIENT_LIMIT = null;
    /** @var int|float|null */
    public $LOAD_RATE = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    public ?string $GODATE = null;
    public ?string $RETURNDATE = null;
    /** @var int|float|null */
    public $PRINT_COUNTER = null;
    public ?string $PRINT_DATE = null;
    /** @var int|float|null */
    public $LOGICALREF = null;
    public ?string $FICHENO = null;
    public ?string $SPECODE = null;
    public ?string $CYPHCODE = null;
    /** @var int|float|null */
    public $MAXCLIENTLIMIT = null;
    /** @var int|float|null */
    public $LOADRATE = null;
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
    /** @var RscollectionrsDistordlinexml|null */
    public $DIST_ORDER_LINES = null;
    public ?string $DELLIST = null;
    public ?string $CL_CODE = null;
    public ?string $ROUT_CODE = null;
    public ?string $ROUTNAME = null;
    public ?string $VEHICLECODE = null;
    public ?string $VEHICLENAME = null;
    /** @var int|float|null */
    public $FC_NO_CHANGED = null;
    /** @var int|float|null */
    public $W_CAPACITY = null;
    /** @var int|float|null */
    public $W_LOADED = null;
    /** @var int|float|null */
    public $W_PERCENT = null;
    /** @var int|float|null */
    public $V_CAPACITY = null;
    /** @var int|float|null */
    public $V_LOADED = null;
    /** @var int|float|null */
    public $V_PERCENT = null;
    /** @var int|float|null */
    public $P_CAPACITY = null;
    /** @var int|float|null */
    public $P_LOADED = null;
    /** @var int|float|null */
    public $P_PERCENT = null;
    /** @var int|float|null */
    public $VUNITREF = null;
    /** @var int|float|null */
    public $WUNITREF = null;
    public ?string $SALESMAN_CODE = null;
    /** @var int|float|null */
    public $CLIENT_COUNT = null;
    /** @var int|float|null */
    public $AFFECT_COLLATRL = null;
    /** @var int|float|null */
    public $AFFECT_RISK = null;
    /** @var int|float|null */
    public $DIVISION = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $AUTOFILL_SLDETAILS = null;
    /** @var int|float|null */
    public $LOC_CONTROL_OFF = null;
    public ?string $GUID = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DIST_ORDER_LINES' => \LogoObjects\Clients\distributionOrders\RscollectionrsDistordlinexml::class,
        ]);
    }
}

/**
 * DistributionOrdersQueryOptions
 */
class DistributionOrdersQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var DistributionOrdersSortSpec|null */
    public $sort = null;
}

/**
 * DistributionOrdersSearchCriteria
 */
class DistributionOrdersSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $ficheNo = null;
    /** @var mixed */
    public $date = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $vehicleref = null;
    /** @var mixed */
    public $routref = null;
    /** @var mixed */
    public $status = null;
    /** @var mixed */
    public $maxClientLimit = null;
    /** @var mixed */
    public $loadRate = null;
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
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $wfstatus = null;
    /** @var mixed */
    public $salesmanref = null;
    /** @var mixed */
    public $godate = null;
    /** @var mixed */
    public $returndate = null;
    /** @var mixed */
    public $printCounter = null;
    /** @var mixed */
    public $printDate = null;
    /** @var mixed */
    public $logicalref = null;
    /** @var mixed */
    public $ficheno = null;
    /** @var mixed */
    public $specode = null;
    /** @var mixed */
    public $cyphcode = null;
    /** @var mixed */
    public $maxclientlimit = null;
    /** @var mixed */
    public $loadrate = null;
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
    public $distOrderLines = null;
    /** @var mixed */
    public $dellist = null;
    /** @var mixed */
    public $clCode = null;
    /** @var mixed */
    public $routCode = null;
    /** @var mixed */
    public $routname = null;
    /** @var mixed */
    public $vehiclecode = null;
    /** @var mixed */
    public $vehiclename = null;
    /** @var mixed */
    public $fcNoChanged = null;
    /** @var mixed */
    public $wCapacity = null;
    /** @var mixed */
    public $wLoaded = null;
    /** @var mixed */
    public $wPercent = null;
    /** @var mixed */
    public $vCapacity = null;
    /** @var mixed */
    public $vLoaded = null;
    /** @var mixed */
    public $vPercent = null;
    /** @var mixed */
    public $pCapacity = null;
    /** @var mixed */
    public $pLoaded = null;
    /** @var mixed */
    public $pPercent = null;
    /** @var mixed */
    public $vunitref = null;
    /** @var mixed */
    public $wunitref = null;
    /** @var mixed */
    public $salesmanCode = null;
    /** @var mixed */
    public $clientCount = null;
    /** @var mixed */
    public $affectCollatrl = null;
    /** @var mixed */
    public $affectRisk = null;
    /** @var mixed */
    public $division = null;
    /** @var mixed */
    public $department = null;
    /** @var mixed */
    public $autofillSldetails = null;
    /** @var mixed */
    public $locControlOff = null;
    /** @var mixed */
    public $guid = null;
}

/**
 * DistributionOrdersAnalytics
 */
class DistributionOrdersAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
