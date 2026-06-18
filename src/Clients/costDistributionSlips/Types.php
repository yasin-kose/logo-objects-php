<?php

declare(strict_types=1);

namespace LogoObjects\Clients\costDistributionSlips;

/**
 * RscollectionrsCostdisttrans
 */
class RscollectionrsCostdisttrans extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\costDistributionSlips\RsCostdisttrans::class],
        ]);
    }
}

/**
 * RscollectionrsCostdistpeg
 */
class RscollectionrsCostdistpeg extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\costDistributionSlips\RsCostdistpeg::class],
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
 * RsCostdisttrans
 */
class RsCostdisttrans extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $SRVREF = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $FTIME = null;
    /** @var int|float|null */
    public $COSTDISTFCREF = null;
    public ?string $SRVINVFICHENO = null;
    /** @var int|float|null */
    public $SRVINVFICHELNNR = null;
    /** @var int|float|null */
    public $SRVFICHEREF = null;
    /** @var int|float|null */
    public $SRVINVTRANSREF = null;
    /** @var int|float|null */
    public $FICHE_TYPE = null;
    /** @var int|float|null */
    public $LINENR = null;
    public ?string $SRVCODE = null;
    public ?string $SRVNAME = null;
    /** @var int|float|null */
    public $SRVTOTAL = null;
    /** @var int|float|null */
    public $SRVDISTTYPE = null;
    /** @var int|float|null */
    public $DISTTOTAL = null;
    /** @var int|float|null */
    public $SRVACCREF = null;
    public ?string $SRV_GL_CODE = null;
    /** @var int|float|null */
    public $SRVCENTERREF = null;
    public ?string $SRV_OHP_CODE = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
    /** @var int|float|null */
    public $SRVTRINFO_LOGICALREF = null;
    /** @var int|float|null */
    public $STOCKREF = null;
    /** @var int|float|null */
    public $LINETYPE = null;
    /** @var int|float|null */
    public $PREVLINEREF = null;
    /** @var int|float|null */
    public $PREVLINENO = null;
    /** @var int|float|null */
    public $DETLINE = null;
    /** @var int|float|null */
    public $TRCODE = null;
    /** @var int|float|null */
    public $GLOBTRANS = null;
    /** @var int|float|null */
    public $CALCTYPE = null;
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
    public $STFICHELNNO = null;
    /** @var int|float|null */
    public $INVOICEREF = null;
    /** @var int|float|null */
    public $INVOICELNNO = null;
    public ?string $ARP_CODE = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    /** @var int|float|null */
    public $ORDTRANSREF = null;
    /** @var int|float|null */
    public $ORDFICHEREF = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    /** @var int|float|null */
    public $ACCOUNTREF = null;
    /** @var int|float|null */
    public $VATACCREF = null;
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
    /** @var int|float|null */
    public $PAYDEFREF = null;
    public ?string $SPECODE = null;
    public ?string $DELVRYCODE = null;
    /** @var int|float|null */
    public $AMOUNT = null;
    /** @var int|float|null */
    public $PRICE = null;
    /** @var int|float|null */
    public $TOTAL = null;
    /** @var int|float|null */
    public $PRCURR = null;
    /** @var int|float|null */
    public $PRPRICE = null;
    /** @var int|float|null */
    public $TRCURR = null;
    /** @var int|float|null */
    public $TRRATE = null;
    /** @var int|float|null */
    public $REPORTRATE = null;
    /** @var int|float|null */
    public $DISTCOST = null;
    /** @var int|float|null */
    public $DISTDISC = null;
    /** @var int|float|null */
    public $DISTEXP = null;
    /** @var int|float|null */
    public $DISTPROM = null;
    /** @var int|float|null */
    public $DISCPER = null;
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
    public $PLNAMOUNT = null;
    /** @var int|float|null */
    public $VATINC = null;
    /** @var int|float|null */
    public $VAT = null;
    /** @var int|float|null */
    public $VATAMNT = null;
    /** @var int|float|null */
    public $VATMATRAH = null;
    /** @var int|float|null */
    public $BILLEDITEM = null;
    /** @var int|float|null */
    public $BILLED = null;
    /** @var int|float|null */
    public $CPSTFLAG = null;
    /** @var int|float|null */
    public $RETCOSTTYPE = null;
    /** @var int|float|null */
    public $SOURCELINK = null;
    /** @var int|float|null */
    public $RETCOST = null;
    /** @var int|float|null */
    public $RETCOSTCURR = null;
    /** @var int|float|null */
    public $OUTCOST = null;
    /** @var int|float|null */
    public $OUTCOSTCURR = null;
    /** @var int|float|null */
    public $RETAMOUNT = null;
    /** @var int|float|null */
    public $FAREGREF = null;
    /** @var int|float|null */
    public $FAATTRIB = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    /** @var int|float|null */
    public $LINENET = null;
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
    public $DIFFPRICE = null;
    /** @var int|float|null */
    public $DIFFPRCOST = null;
    /** @var int|float|null */
    public $DECPRDIFF = null;
    /** @var int|float|null */
    public $LPRODSTAT = null;
    /** @var int|float|null */
    public $PRDEXPTOTAL = null;
    /** @var int|float|null */
    public $DIFFREPPRICE = null;
    /** @var int|float|null */
    public $DIFFPRCRCOST = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    /** @var int|float|null */
    public $FAPLACCREF = null;
    /** @var int|float|null */
    public $FAPLCENTERREF = null;
    /** @var int|float|null */
    public $FAPROFITACCREF = null;
    /** @var int|float|null */
    public $FAPROFITCENTREF = null;
    /** @var int|float|null */
    public $FALOSSACCREF = null;
    /** @var int|float|null */
    public $FALOSSCENTREF = null;
    public ?string $OUTPUTIDCODE = null;
    /** @var int|float|null */
    public $DREF = null;
    /** @var int|float|null */
    public $COSTRATE = null;
    /** @var int|float|null */
    public $XPRICEUPD = null;
    /** @var int|float|null */
    public $XPRICE = null;
    /** @var int|float|null */
    public $XREPRATE = null;
    /** @var int|float|null */
    public $DISTCOEF = null;
    /** @var int|float|null */
    public $TRANSQCOK = null;
    /** @var int|float|null */
    public $POLINEREF = null;
    /** @var int|float|null */
    public $PLNSTTRANSREF = null;
    /** @var int|float|null */
    public $NETDISCFLAG = null;
    /** @var int|float|null */
    public $NETDISCPERC = null;
    /** @var int|float|null */
    public $NETDISCAMNT = null;
    /** @var int|float|null */
    public $VATCALCDIFF = null;
    /** @var int|float|null */
    public $CONDITIONREF = null;
    /** @var int|float|null */
    public $DISTORDERREF = null;
    /** @var int|float|null */
    public $DISTORDLINEREF = null;
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
    public $CAMPPOINT = null;
    /** @var int|float|null */
    public $PROMCLASITEMREF = null;
    /** @var int|float|null */
    public $CMPGLINEREF = null;
    /** @var int|float|null */
    public $PLNSTTRANSPERNR = null;
    /** @var int|float|null */
    public $PORDCLSPLNAMNT = null;
    /** @var int|float|null */
    public $VENDCOMM = null;
    /** @var int|float|null */
    public $PREVIOUSOUTCOST = null;
    /** @var int|float|null */
    public $COSTOFSALEACCREF = null;
    /** @var int|float|null */
    public $PURCHACCREF = null;
    /** @var int|float|null */
    public $COSTOFSALECNTREF = null;
    /** @var int|float|null */
    public $PURCHCENTREF = null;
    /** @var int|float|null */
    public $PREVOUTCOSTCURR = null;
    /** @var int|float|null */
    public $EUVATAMOUNT = null;
    /** @var int|float|null */
    public $EUVATSTATUS = null;
    /** @var int|float|null */
    public $PRRATE = null;
    /** @var int|float|null */
    public $ADDTAXRATE = null;
    /** @var int|float|null */
    public $ADDTAXCONVFACT = null;
    /** @var int|float|null */
    public $ADDTAXAMOUNT = null;
    /** @var int|float|null */
    public $ADDTAXPRCOST = null;
    /** @var int|float|null */
    public $ADDTAXRETCOST = null;
    /** @var int|float|null */
    public $ADDTAXRETCOSTCURR = null;
    /** @var int|float|null */
    public $GROSSUINFO1 = null;
    /** @var int|float|null */
    public $GROSSUINFO2 = null;
    /** @var int|float|null */
    public $ADDTAXPRCOSTCURR = null;
    /** @var int|float|null */
    public $ADDTAXACCREF = null;
    /** @var int|float|null */
    public $ADDTAXCENTERREF = null;
    /** @var int|float|null */
    public $ADDTAXAMNTISUPD = null;
    /** @var int|float|null */
    public $INFIDX = null;
    /** @var int|float|null */
    public $ADDTAXCOSACCREF = null;
    /** @var int|float|null */
    public $ADDTAXCOSCNTREF = null;
    /** @var int|float|null */
    public $PREVIOUSATAXPRCOST = null;
    /** @var int|float|null */
    public $PREVATAXPRCOSTCURR = null;
    /** @var int|float|null */
    public $PRDORDTOTCOEF = null;
    /** @var int|float|null */
    public $DEMPEGGEDAMNT = null;
    /** @var int|float|null */
    public $STDUNITCOST = null;
    /** @var int|float|null */
    public $STDRPUNITCOST = null;
    /** @var int|float|null */
    public $COSTDIFFACCREF = null;
    /** @var int|float|null */
    public $COSTDIFFCENREF = null;
    /** @var int|float|null */
    public $ADDTAXDISCAMOUNT = null;
    public ?string $ORGLOGOID = null;
    public ?string $EXIMFICHENO = null;
    /** @var int|float|null */
    public $EXIMFCTYPE = null;
    /** @var int|float|null */
    public $TRANSEXPLINE = null;
    /** @var int|float|null */
    public $INSEXPLINE = null;
    /** @var int|float|null */
    public $EXIMWHFCREF = null;
    /** @var int|float|null */
    public $EXIMWHLNREF = null;
    /** @var int|float|null */
    public $EXIMFILEREF = null;
    /** @var int|float|null */
    public $EXIMPROCNR = null;
    /** @var int|float|null */
    public $EISRVDSTTYP = null;
    /** @var int|float|null */
    public $MAINSTLNREF = null;
    /** @var int|float|null */
    public $MADEOFSHRED = null;
    /** @var int|float|null */
    public $FROMORDWITHPAY = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    /** @var int|float|null */
    public $STATUS = null;
    /** @var int|float|null */
    public $DORESERVE = null;
    /** @var int|float|null */
    public $POINTCAMPREFS1 = null;
    /** @var int|float|null */
    public $POINTCAMPREFS2 = null;
    /** @var int|float|null */
    public $POINTCAMPREFS3 = null;
    /** @var int|float|null */
    public $POINTCAMPREFS4 = null;
    /** @var int|float|null */
    public $CAMPPOINTS1 = null;
    /** @var int|float|null */
    public $CAMPPOINTS2 = null;
    /** @var int|float|null */
    public $CAMPPOINTS3 = null;
    /** @var int|float|null */
    public $CAMPPOINTS4 = null;
    /** @var int|float|null */
    public $CMPGLINEREFS1 = null;
    /** @var int|float|null */
    public $CMPGLINEREFS2 = null;
    /** @var int|float|null */
    public $CMPGLINEREFS3 = null;
    /** @var int|float|null */
    public $CMPGLINEREFS4 = null;
    /** @var int|float|null */
    public $PRCLISTREF = null;
    /** @var int|float|null */
    public $PORDSYMOUTLN = null;
    /** @var int|float|null */
    public $MONTH = null;
    /** @var int|float|null */
    public $YEAR = null;
    /** @var int|float|null */
    public $EXADDTAXRATE = null;
    /** @var int|float|null */
    public $EXADDTAXCONVF = null;
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
    public $DISTEDTOTAL = null;
    public ?string $SRCNAME = null;
    public ?string $FICHENO = null;
    /** @var RscollectionrsCostdistpeg|null */
    public $PEGLINELIST = null;
    public ?string $PEGDELLIST = null;
    /** @var int|float|null */
    public $SRVREPTOTAL = null;
    /** @var int|float|null */
    public $DISTEDREPTOT = null;
    /** @var int|float|null */
    public $DISTREPTOTAL = null;
    /** @var int|float|null */
    public $TYPE = null;
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
            'PEGLINELIST' => \LogoObjects\Clients\costDistributionSlips\RscollectionrsCostdistpeg::class,
        ]);
    }
}

/**
 * RsCostdistpeg
 */
class RsCostdistpeg extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $COSTDISTFCREF = null;
    /** @var int|float|null */
    public $COSTDISTLNREF = null;
    /** @var int|float|null */
    public $SRVFICHEREF = null;
    /** @var int|float|null */
    public $SRVTRANSREF = null;
    /** @var int|float|null */
    public $INVOICEREF = null;
    public ?string $STFICHENO = null;
    /** @var int|float|null */
    public $STFICHEREF = null;
    /** @var int|float|null */
    public $STTRANSREF = null;
    /** @var int|float|null */
    public $STFICHELNNR = null;
    /** @var int|float|null */
    public $PARENTSTTRREF = null;
    /** @var int|float|null */
    public $EXIMWHFCREF = null;
    /** @var int|float|null */
    public $EXIMWHLNREF = null;
    /** @var int|float|null */
    public $LINENR = null;
    /** @var int|float|null */
    public $ITEMREF = null;
    /** @var int|float|null */
    public $TOTALAMNT = null;
    /** @var int|float|null */
    public $UNITPRICE = null;
    /** @var int|float|null */
    public $UNITRPPRICE = null;
    /** @var int|float|null */
    public $ADDEXPENSE = null;
    /** @var int|float|null */
    public $ADDRPEXPENSE = null;
    /** @var int|float|null */
    public $ISDISTRIBUTED = null;
    /** @var int|float|null */
    public $DISTRATE = null;
    /** @var int|float|null */
    public $DISTTOTAL = null;
    /** @var int|float|null */
    public $STACCREF = null;
    public ?string $STC_GL_CODE = null;
    /** @var int|float|null */
    public $STCENTERREF = null;
    public ?string $STC_OHP_CODE = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
    /** @var int|float|null */
    public $STTRINFO_LOGICALREF = null;
    /** @var int|float|null */
    public $STOCKREF = null;
    /** @var int|float|null */
    public $LINETYPE = null;
    /** @var int|float|null */
    public $PREVLINEREF = null;
    /** @var int|float|null */
    public $PREVLINENO = null;
    /** @var int|float|null */
    public $DETLINE = null;
    /** @var int|float|null */
    public $TRCODE = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $FTIME = null;
    /** @var int|float|null */
    public $GLOBTRANS = null;
    /** @var int|float|null */
    public $CALCTYPE = null;
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
    public ?string $INVFICHENO = null;
    /** @var int|float|null */
    public $INVOICELNNO = null;
    public ?string $ARP_CODE = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    /** @var int|float|null */
    public $ORDTRANSREF = null;
    /** @var int|float|null */
    public $ORDFICHEREF = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    /** @var int|float|null */
    public $ACCOUNTREF = null;
    /** @var int|float|null */
    public $VATACCREF = null;
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
    /** @var int|float|null */
    public $PAYDEFREF = null;
    public ?string $SPECODE = null;
    public ?string $DELVRYCODE = null;
    /** @var int|float|null */
    public $AMOUNT = null;
    /** @var int|float|null */
    public $PRICE = null;
    /** @var int|float|null */
    public $TOTAL = null;
    /** @var int|float|null */
    public $PRCURR = null;
    /** @var int|float|null */
    public $PRPRICE = null;
    /** @var int|float|null */
    public $TRCURR = null;
    /** @var int|float|null */
    public $TRRATE = null;
    /** @var int|float|null */
    public $REPORTRATE = null;
    /** @var int|float|null */
    public $DISTCOST = null;
    /** @var int|float|null */
    public $DISTDISC = null;
    /** @var int|float|null */
    public $DISTEXP = null;
    /** @var int|float|null */
    public $DISTPROM = null;
    /** @var int|float|null */
    public $DISCPER = null;
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
    public $PLNAMOUNT = null;
    /** @var int|float|null */
    public $VATINC = null;
    /** @var int|float|null */
    public $VAT = null;
    /** @var int|float|null */
    public $VATAMNT = null;
    /** @var int|float|null */
    public $VATMATRAH = null;
    /** @var int|float|null */
    public $BILLEDITEM = null;
    /** @var int|float|null */
    public $BILLED = null;
    /** @var int|float|null */
    public $CPSTFLAG = null;
    /** @var int|float|null */
    public $RETCOSTTYPE = null;
    /** @var int|float|null */
    public $SOURCELINK = null;
    /** @var int|float|null */
    public $RETCOST = null;
    /** @var int|float|null */
    public $RETCOSTCURR = null;
    /** @var int|float|null */
    public $OUTCOST = null;
    /** @var int|float|null */
    public $OUTCOSTCURR = null;
    /** @var int|float|null */
    public $RETAMOUNT = null;
    /** @var int|float|null */
    public $FAREGREF = null;
    /** @var int|float|null */
    public $FAATTRIB = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    /** @var int|float|null */
    public $LINENET = null;
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
    public $DIFFPRICE = null;
    /** @var int|float|null */
    public $DIFFPRCOST = null;
    /** @var int|float|null */
    public $DECPRDIFF = null;
    /** @var int|float|null */
    public $LPRODSTAT = null;
    /** @var int|float|null */
    public $PRDEXPTOTAL = null;
    /** @var int|float|null */
    public $DIFFREPPRICE = null;
    /** @var int|float|null */
    public $DIFFPRCRCOST = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    /** @var int|float|null */
    public $FAPLACCREF = null;
    /** @var int|float|null */
    public $FAPLCENTERREF = null;
    /** @var int|float|null */
    public $FAPROFITACCREF = null;
    /** @var int|float|null */
    public $FAPROFITCENTREF = null;
    /** @var int|float|null */
    public $FALOSSACCREF = null;
    /** @var int|float|null */
    public $FALOSSCENTREF = null;
    public ?string $OUTPUTIDCODE = null;
    /** @var int|float|null */
    public $DREF = null;
    /** @var int|float|null */
    public $COSTRATE = null;
    /** @var int|float|null */
    public $XPRICEUPD = null;
    /** @var int|float|null */
    public $XPRICE = null;
    /** @var int|float|null */
    public $XREPRATE = null;
    /** @var int|float|null */
    public $DISTCOEF = null;
    /** @var int|float|null */
    public $TRANSQCOK = null;
    /** @var int|float|null */
    public $XML_REFERENCE = null;
    /** @var int|float|null */
    public $POLINEREF = null;
    /** @var int|float|null */
    public $PLNSTTRANSREF = null;
    /** @var int|float|null */
    public $NETDISCFLAG = null;
    /** @var int|float|null */
    public $NETDISCPERC = null;
    /** @var int|float|null */
    public $NETDISCAMNT = null;
    /** @var int|float|null */
    public $VATCALCDIFF = null;
    /** @var int|float|null */
    public $CONDITIONREF = null;
    /** @var int|float|null */
    public $DISTORDERREF = null;
    /** @var int|float|null */
    public $DISTORDLINEREF = null;
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
    public $CAMPPOINT = null;
    /** @var int|float|null */
    public $PROMCLASITEMREF = null;
    /** @var int|float|null */
    public $CMPGLINEREF = null;
    /** @var int|float|null */
    public $PLNSTTRANSPERNR = null;
    /** @var int|float|null */
    public $PORDCLSPLNAMNT = null;
    /** @var int|float|null */
    public $VENDCOMM = null;
    /** @var int|float|null */
    public $PREVIOUSOUTCOST = null;
    /** @var int|float|null */
    public $COSTOFSALEACCREF = null;
    /** @var int|float|null */
    public $PURCHACCREF = null;
    /** @var int|float|null */
    public $COSTOFSALECNTREF = null;
    /** @var int|float|null */
    public $PURCHCENTREF = null;
    /** @var int|float|null */
    public $PREVOUTCOSTCURR = null;
    /** @var int|float|null */
    public $EUVATAMOUNT = null;
    /** @var int|float|null */
    public $EUVATSTATUS = null;
    /** @var int|float|null */
    public $PRRATE = null;
    /** @var int|float|null */
    public $ADDTAXRATE = null;
    /** @var int|float|null */
    public $ADDTAXCONVFACT = null;
    /** @var int|float|null */
    public $ADDTAXAMOUNT = null;
    /** @var int|float|null */
    public $ADDTAXPRCOST = null;
    /** @var int|float|null */
    public $ADDTAXRETCOST = null;
    /** @var int|float|null */
    public $ADDTAXRETCOSTCURR = null;
    /** @var int|float|null */
    public $GROSSUINFO1 = null;
    /** @var int|float|null */
    public $GROSSUINFO2 = null;
    /** @var int|float|null */
    public $ADDTAXPRCOSTCURR = null;
    /** @var int|float|null */
    public $ADDTAXACCREF = null;
    /** @var int|float|null */
    public $ADDTAXCENTERREF = null;
    /** @var int|float|null */
    public $ADDTAXAMNTISUPD = null;
    /** @var int|float|null */
    public $INFIDX = null;
    /** @var int|float|null */
    public $ADDTAXCOSACCREF = null;
    /** @var int|float|null */
    public $ADDTAXCOSCNTREF = null;
    /** @var int|float|null */
    public $PREVIOUSATAXPRCOST = null;
    /** @var int|float|null */
    public $PREVATAXPRCOSTCURR = null;
    /** @var int|float|null */
    public $PRDORDTOTCOEF = null;
    /** @var int|float|null */
    public $DEMPEGGEDAMNT = null;
    /** @var int|float|null */
    public $STDUNITCOST = null;
    /** @var int|float|null */
    public $STDRPUNITCOST = null;
    /** @var int|float|null */
    public $COSTDIFFACCREF = null;
    /** @var int|float|null */
    public $COSTDIFFCENREF = null;
    /** @var int|float|null */
    public $ADDTAXDISCAMOUNT = null;
    public ?string $ORGLOGOID = null;
    public ?string $EXIMFICHENO = null;
    /** @var int|float|null */
    public $EXIMFCTYPE = null;
    /** @var int|float|null */
    public $TRANSEXPLINE = null;
    /** @var int|float|null */
    public $INSEXPLINE = null;
    /** @var int|float|null */
    public $EXIMFILEREF = null;
    /** @var int|float|null */
    public $EXIMPROCNR = null;
    /** @var int|float|null */
    public $EISRVDSTTYP = null;
    /** @var int|float|null */
    public $MAINSTLNREF = null;
    /** @var int|float|null */
    public $MADEOFSHRED = null;
    /** @var int|float|null */
    public $FROMORDWITHPAY = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    /** @var int|float|null */
    public $STATUS = null;
    /** @var int|float|null */
    public $DORESERVE = null;
    /** @var int|float|null */
    public $POINTCAMPREFS1 = null;
    /** @var int|float|null */
    public $POINTCAMPREFS2 = null;
    /** @var int|float|null */
    public $POINTCAMPREFS3 = null;
    /** @var int|float|null */
    public $POINTCAMPREFS4 = null;
    /** @var int|float|null */
    public $CAMPPOINTS1 = null;
    /** @var int|float|null */
    public $CAMPPOINTS2 = null;
    /** @var int|float|null */
    public $CAMPPOINTS3 = null;
    /** @var int|float|null */
    public $CAMPPOINTS4 = null;
    /** @var int|float|null */
    public $CMPGLINEREFS1 = null;
    /** @var int|float|null */
    public $CMPGLINEREFS2 = null;
    /** @var int|float|null */
    public $CMPGLINEREFS3 = null;
    /** @var int|float|null */
    public $CMPGLINEREFS4 = null;
    /** @var int|float|null */
    public $PRCLISTREF = null;
    /** @var int|float|null */
    public $PORDSYMOUTLN = null;
    /** @var int|float|null */
    public $MONTH = null;
    /** @var int|float|null */
    public $YEAR = null;
    /** @var int|float|null */
    public $EXADDTAXRATE = null;
    /** @var int|float|null */
    public $EXADDTAXCONVF = null;
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
    public ?string $FICHENO = null;
    public ?string $ITEMCODE = null;
    public ?string $ITEMNAME = null;
    public ?string $ITEMMAINUNITE = null;
    /** @var int|float|null */
    public $VARIANTREF = null;
    public ?string $VARIANTCODE = null;
    public ?string $VARIANTNAME = null;
    /** @var int|float|null */
    public $TYPE = null;
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
}

/**
 * CostDistributionSlips
 */
class CostDistributionSlips extends \LogoObjects\Types\BaseEntity
{
    public ?string $FICHENO = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $FTIME = null;
    public ?string $DOCODE = null;
    public ?string $SPECODE = null;
    public ?string $CYPHCODE = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $ACCOUNTED = null;
    /** @var int|float|null */
    public $ACCFICHEREF = null;
    /** @var int|float|null */
    public $ACCOUNTEDCNT = null;
    /** @var int|float|null */
    public $SITEID = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
    /** @var RscollectionrsCostdisttrans|null */
    public $TRANSACTIONS = null;
    public ?string $DOCALS = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $DOCNRREF = null;
    /** @var int|float|null */
    public $LINECNT = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $FCNOCHANGED = null;
    /** @var int|float|null */
    public $CURREDLNSRVTRNREF = null;
    /** @var RscollectionrsCostdistpeg|null */
    public $CURREDLNPEGLIST = null;
    /** @var int|float|null */
    public $APPROVE = null;
    public ?string $APPROVE_DATE = null;
    /** @var int|float|null */
    public $ACC_FICHE_SITEID = null;
    /** @var int|float|null */
    public $TYPE = null;
    /** @var int|float|null */
    public $CANCEL_AUTO_GL_PROC = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'TRANSACTIONS' => \LogoObjects\Clients\costDistributionSlips\RscollectionrsCostdisttrans::class,
            'CURREDLNPEGLIST' => \LogoObjects\Clients\costDistributionSlips\RscollectionrsCostdistpeg::class,
        ]);
    }
}

/**
 * CostDistributionSlipsQueryOptions
 */
class CostDistributionSlipsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var CostDistributionSlipsSortSpec|null */
    public $sort = null;
}

/**
 * CostDistributionSlipsSearchCriteria
 */
class CostDistributionSlipsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $ficheno = null;
    /** @var mixed */
    public $date = null;
    /** @var mixed */
    public $ftime = null;
    /** @var mixed */
    public $docode = null;
    /** @var mixed */
    public $specode = null;
    /** @var mixed */
    public $cyphcode = null;
    /** @var mixed */
    public $projectref = null;
    /** @var mixed */
    public $projectCode = null;
    /** @var mixed */
    public $accounted = null;
    /** @var mixed */
    public $accficheref = null;
    /** @var mixed */
    public $accountedcnt = null;
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
    public $textinc = null;
    /** @var mixed */
    public $siteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $wfstatus = null;
    /** @var mixed */
    public $transactions = null;
    /** @var mixed */
    public $docals = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $docnrref = null;
    /** @var mixed */
    public $linecnt = null;
    /** @var mixed */
    public $textchg = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $fcnochanged = null;
    /** @var mixed */
    public $curredlnsrvtrnref = null;
    /** @var mixed */
    public $curredlnpeglist = null;
    /** @var mixed */
    public $approve = null;
    /** @var mixed */
    public $approveDate = null;
    /** @var mixed */
    public $accFicheSiteid = null;
    /** @var mixed */
    public $type = null;
    /** @var mixed */
    public $cancelAutoGlProc = null;
}

/**
 * CostDistributionSlipsAnalytics
 */
class CostDistributionSlipsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
