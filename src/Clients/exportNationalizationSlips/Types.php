<?php

declare(strict_types=1);

namespace LogoObjects\Clients\exportNationalizationSlips;

/**
 * RscollectionrsEximwhfclinexml
 */
class RscollectionrsEximwhfclinexml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\exportNationalizationSlips\RsEximwhfclinexml::class],
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
            'items' => [\LogoObjects\Clients\exportNationalizationSlips\RsSlloctrnxml::class],
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
            'items' => [\LogoObjects\Clients\exportNationalizationSlips\RsQccvalentryxml::class],
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
            'items' => [\LogoObjects\Clients\exportNationalizationSlips\RsQccvallistxml::class],
        ]);
    }
}

/**
 * RscollectionrsEximwhfcdetxml
 */
class RscollectionrsEximwhfcdetxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\exportNationalizationSlips\RsEximwhfcdetxml::class],
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
 * RsEximwhfclinexml
 */
class RsEximwhfclinexml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $EXIMWHFCREF = null;
    /** @var int|float|null */
    public $TRCODE = null;
    /** @var int|float|null */
    public $ITEMREF = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $FTIME = null;
    /** @var int|float|null */
    public $FACTORY = null;
    /** @var int|float|null */
    public $SOURCEINDEX = null;
    /** @var int|float|null */
    public $DESTINDEX = null;
    /** @var int|float|null */
    public $UOMREF = null;
    /** @var int|float|null */
    public $USREF = null;
    /** @var int|float|null */
    public $AMOUNT = null;
    /** @var int|float|null */
    public $PRICE = null;
    /** @var int|float|null */
    public $TOTAL = null;
    /** @var int|float|null */
    public $TRCURR = null;
    /** @var int|float|null */
    public $TRRATE = null;
    /** @var int|float|null */
    public $REPORTRATE = null;
    public ?string $AUXIL_CODE = null;
    public ?string $LINEEXP = null;
    /** @var int|float|null */
    public $LINENO = null;
    /** @var int|float|null */
    public $AV_AMOUNT = null;
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
    public $GROSSUINFO1 = null;
    /** @var int|float|null */
    public $GROSSUINFO2 = null;
    /** @var int|float|null */
    public $LINETYPE = null;
    /** @var int|float|null */
    public $PREVLINEREF = null;
    /** @var int|float|null */
    public $PREVLINENO = null;
    /** @var int|float|null */
    public $DETLINE = null;
    /** @var RscollectionrsSlloctrnxml|null */
    public $SL_LINES = null;
    public ?string $SLDELLIST = null;
    /** @var RscollectionrsEximwhfcdetxml|null */
    public $DETAILS = null;
    public ?string $DETDELLIST = null;
    public ?string $WHSRCNAME = null;
    public ?string $WHDESNAME = null;
    public ?string $STCODE = null;
    public ?string $STDEF = null;
    /** @var int|float|null */
    public $HASSLLINE = null;
    /** @var int|float|null */
    public $LOCTRACKING = null;
    /** @var int|float|null */
    public $TRACKTYPE = null;
    /** @var int|float|null */
    public $CARDTYPE = null;
    public ?string $IMPUEDIT = null;
    /** @var int|float|null */
    public $IMPUINFO1 = null;
    /** @var int|float|null */
    public $IMPUINFO2 = null;
    /** @var int|float|null */
    public $IMPUINFO3 = null;
    /** @var int|float|null */
    public $IMPUINFO4 = null;
    /** @var int|float|null */
    public $IMPUINFO5 = null;
    /** @var int|float|null */
    public $IMPUINFO6 = null;
    /** @var int|float|null */
    public $IMPUINFO7 = null;
    /** @var int|float|null */
    public $IMPUINFO8 = null;
    /** @var int|float|null */
    public $IMPGROSSUINFO1 = null;
    /** @var int|float|null */
    public $IMPGROSSUINFO2 = null;
    public ?string $UNITSET_CODE = null;
    public ?string $UNIT_CODE = null;
    /** @var int|float|null */
    public $EDTPRICE = null;
    /** @var int|float|null */
    public $EDTTOTAL = null;
    /** @var int|float|null */
    public $EDTCURR = null;
    /** @var int|float|null */
    public $EDTRATE = null;
    /** @var int|float|null */
    public $IMPPRICE = null;
    /** @var int|float|null */
    public $IMPCURR = null;
    /** @var int|float|null */
    public $IMPRATE = null;
    /** @var int|float|null */
    public $OLDPRC = null;
    /** @var int|float|null */
    public $OLDEDTPRC = null;
    public ?string $SLINETYPE = null;
    /** @var int|float|null */
    public $UNITEXPENCE = null;
    /** @var int|float|null */
    public $VARIANTREF = null;
    public ?string $VARIANTCODE = null;
    public ?string $VARIANTNAME = null;
    /** @var int|float|null */
    public $CANCONFIG = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $EXIMFILEREF = null;
    /** @var int|float|null */
    public $EXIMPROCNR = null;
    public ?string $EXIMFILECODE = null;
    /** @var int|float|null */
    public $EXIMFILELNNR = null;
    /** @var int|float|null */
    public $ORIGINCNTRREF = null;
    public ?string $ORIGIN_COUNTRY_CODE = null;
    /** @var int|float|null */
    public $STATUS = null;
    /** @var int|float|null */
    public $SRCEXPACCREF = null;
    public ?string $SRCEXP_GL_CODE = null;
    /** @var int|float|null */
    public $SRCEXPCENREF = null;
    public ?string $SRCEXP_OHP_CODE = null;
    /** @var int|float|null */
    public $DSTEXPACCREF = null;
    public ?string $DSTEXP_GL_CODE = null;
    /** @var int|float|null */
    public $DSTEXPCENREF = null;
    public ?string $DSTEXP_OHP_CODE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'SL_LINES' => \LogoObjects\Clients\exportNationalizationSlips\RscollectionrsSlloctrnxml::class,
            'DETAILS' => \LogoObjects\Clients\exportNationalizationSlips\RscollectionrsEximwhfcdetxml::class,
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
            'QCLIST' => \LogoObjects\Clients\exportNationalizationSlips\RscollectionrsQccvalentryxml::class,
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
            'VALLIST' => \LogoObjects\Clients\exportNationalizationSlips\RscollectionrsQccvallistxml::class,
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
 * RsEximwhfcdetxml
 */
class RsEximwhfcdetxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $EXIMWHFCREF = null;
    /** @var int|float|null */
    public $TRCODE = null;
    /** @var int|float|null */
    public $ITEMREF = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $FTIME = null;
    /** @var int|float|null */
    public $FACTORY = null;
    /** @var int|float|null */
    public $SOURCEINDEX = null;
    /** @var int|float|null */
    public $DESTINDEX = null;
    /** @var int|float|null */
    public $UOMREF = null;
    /** @var int|float|null */
    public $USREF = null;
    /** @var int|float|null */
    public $AMOUNT = null;
    /** @var int|float|null */
    public $PRICE = null;
    /** @var int|float|null */
    public $TOTAL = null;
    /** @var int|float|null */
    public $TRCURR = null;
    /** @var int|float|null */
    public $TRRATE = null;
    /** @var int|float|null */
    public $REPORTRATE = null;
    public ?string $AUXIL_CODE = null;
    public ?string $LINEEXP = null;
    /** @var int|float|null */
    public $LINENO = null;
    /** @var int|float|null */
    public $AV_AMOUNT = null;
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
    public $GROSSUINFO1 = null;
    /** @var int|float|null */
    public $GROSSUINFO2 = null;
    /** @var int|float|null */
    public $LINETYPE = null;
    /** @var int|float|null */
    public $PREVLINEREF = null;
    /** @var int|float|null */
    public $PREVLINENO = null;
    /** @var int|float|null */
    public $DETLINE = null;
    /** @var RscollectionrsSlloctrnxml|null */
    public $SL_LINES = null;
    public ?string $SLDELLIST = null;
    public ?string $DETAILS = null;
    public ?string $DETDELLIST = null;
    public ?string $WHSRCNAME = null;
    public ?string $WHDESNAME = null;
    public ?string $STCODE = null;
    public ?string $STDEF = null;
    /** @var int|float|null */
    public $HASSLLINE = null;
    /** @var int|float|null */
    public $LOCTRACKING = null;
    /** @var int|float|null */
    public $TRACKTYPE = null;
    /** @var int|float|null */
    public $CARDTYPE = null;
    public ?string $IMPUEDIT = null;
    /** @var int|float|null */
    public $IMPUINFO1 = null;
    /** @var int|float|null */
    public $IMPUINFO2 = null;
    /** @var int|float|null */
    public $IMPUINFO3 = null;
    /** @var int|float|null */
    public $IMPUINFO4 = null;
    /** @var int|float|null */
    public $IMPUINFO5 = null;
    /** @var int|float|null */
    public $IMPUINFO6 = null;
    /** @var int|float|null */
    public $IMPUINFO7 = null;
    /** @var int|float|null */
    public $IMPUINFO8 = null;
    /** @var int|float|null */
    public $IMPGROSSUINFO1 = null;
    /** @var int|float|null */
    public $IMPGROSSUINFO2 = null;
    public ?string $UNITSET_CODE = null;
    public ?string $UNIT_CODE = null;
    /** @var int|float|null */
    public $EDTPRICE = null;
    /** @var int|float|null */
    public $EDTTOTAL = null;
    /** @var int|float|null */
    public $EDTCURR = null;
    /** @var int|float|null */
    public $EDTRATE = null;
    /** @var int|float|null */
    public $OLDPRC = null;
    /** @var int|float|null */
    public $OLDEDTPRC = null;
    public ?string $SLINETYPE = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $EXIMFILEREF = null;
    /** @var int|float|null */
    public $EXIMPROCNR = null;
    public ?string $EXIMFILECODE = null;
    /** @var int|float|null */
    public $EXIMFILELNNR = null;
    /** @var int|float|null */
    public $ORIGINCNTRREF = null;
    public ?string $ORIGIN_COUNTRY_CODE = null;
    /** @var int|float|null */
    public $STATUS = null;
    /** @var int|float|null */
    public $SRCEXPACCREF = null;
    public ?string $SRCEXP_GL_CODE = null;
    /** @var int|float|null */
    public $SRCEXPCENREF = null;
    public ?string $SRCEXP_OHP_CODE = null;
    /** @var int|float|null */
    public $DSTEXPACCREF = null;
    public ?string $DSTEXP_GL_CODE = null;
    /** @var int|float|null */
    public $DSTEXPCENREF = null;
    public ?string $DSTEXP_OHP_CODE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'SL_LINES' => \LogoObjects\Clients\exportNationalizationSlips\RscollectionrsSlloctrnxml::class,
        ]);
    }
}

/**
 * ExportNationalizationSlips
 */
class ExportNationalizationSlips extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $TRCODE = null;
    public ?string $FICHENO = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $FTIME = null;
    public ?string $DOCODE = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $EXIMFILEREF = null;
    /** @var int|float|null */
    public $EXIMPROCNR = null;
    /** @var int|float|null */
    public $BRANCH = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $FACTORY = null;
    /** @var int|float|null */
    public $SOURCEINDEX = null;
    /** @var int|float|null */
    public $GENEXCTYPE = null;
    /** @var int|float|null */
    public $LINEEXCTYPE = null;
    /** @var int|float|null */
    public $NETTOTAL = null;
    /** @var int|float|null */
    public $TRCURR = null;
    /** @var int|float|null */
    public $TRRATE = null;
    /** @var int|float|null */
    public $REPORTRATE = null;
    /** @var int|float|null */
    public $IMP_CURR = null;
    /** @var int|float|null */
    public $IMP_RATE = null;
    public ?string $EXIMFILECODE = null;
    /** @var int|float|null */
    public $EXIMFILELNNR = null;
    /** @var RscollectionrsEximwhfclinexml|null */
    public $TRANSACTIONS = null;
    public ?string $DELLIST = null;
    public ?string $WHNAME = null;
    /** @var int|float|null */
    public $UPDATED = null;
    /** @var int|float|null */
    public $LINECOUNT = null;
    /** @var int|float|null */
    public $FCNOCHANGED = null;
    /** @var int|float|null */
    public $DOCNRREF = null;
    /** @var int|float|null */
    public $EDTNETTOTAL = null;
    /** @var int|float|null */
    public $CUROP = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    /** @var int|float|null */
    public $ITEXT = null;
    /** @var int|float|null */
    public $XBUFS = null;
    /** @var int|float|null */
    public $DOCALS = null;
    /** @var int|float|null */
    public $PRINTCNT = null;
    public ?string $PRINT_DATE = null;
    /** @var int|float|null */
    public $APPROVE = null;
    public ?string $APPROVE_DATE = null;
    /** @var int|float|null */
    public $ACCFICHEREF = null;
    /** @var int|float|null */
    public $ACCOUNTED = null;
    /** @var int|float|null */
    public $ACC_FICHE_SITEID = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $DISTRIBUTION_TYPE = null;
    /** @var int|float|null */
    public $STATUS = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'TRANSACTIONS' => \LogoObjects\Clients\exportNationalizationSlips\RscollectionrsEximwhfclinexml::class,
        ]);
    }
}

/**
 * ExportNationalizationSlipsQueryOptions
 */
class ExportNationalizationSlipsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ExportNationalizationSlipsSortSpec|null */
    public $sort = null;
}

/**
 * ExportNationalizationSlipsSearchCriteria
 */
class ExportNationalizationSlipsSearchCriteria extends \LogoObjects\Support\Entity
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
    public $ftime = null;
    /** @var mixed */
    public $docode = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $eximfileref = null;
    /** @var mixed */
    public $eximprocnr = null;
    /** @var mixed */
    public $branch = null;
    /** @var mixed */
    public $department = null;
    /** @var mixed */
    public $factory = null;
    /** @var mixed */
    public $sourceindex = null;
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
    public $genexctype = null;
    /** @var mixed */
    public $lineexctype = null;
    /** @var mixed */
    public $nettotal = null;
    /** @var mixed */
    public $textinc = null;
    /** @var mixed */
    public $trcurr = null;
    /** @var mixed */
    public $trrate = null;
    /** @var mixed */
    public $reportrate = null;
    /** @var mixed */
    public $impCurr = null;
    /** @var mixed */
    public $impRate = null;
    /** @var mixed */
    public $eximfilecode = null;
    /** @var mixed */
    public $eximfilelnnr = null;
    /** @var mixed */
    public $transactions = null;
    /** @var mixed */
    public $dellist = null;
    /** @var mixed */
    public $whname = null;
    /** @var mixed */
    public $updated = null;
    /** @var mixed */
    public $linecount = null;
    /** @var mixed */
    public $fcnochanged = null;
    /** @var mixed */
    public $docnrref = null;
    /** @var mixed */
    public $edtnettotal = null;
    /** @var mixed */
    public $curop = null;
    /** @var mixed */
    public $textchg = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $docals = null;
    /** @var mixed */
    public $printcnt = null;
    /** @var mixed */
    public $printDate = null;
    /** @var mixed */
    public $approve = null;
    /** @var mixed */
    public $approveDate = null;
    /** @var mixed */
    public $accficheref = null;
    /** @var mixed */
    public $accounted = null;
    /** @var mixed */
    public $accFicheSiteid = null;
    /** @var mixed */
    public $projectref = null;
    /** @var mixed */
    public $projectCode = null;
    /** @var mixed */
    public $distributionType = null;
    /** @var mixed */
    public $status = null;
}

/**
 * ExportNationalizationSlipsAnalytics
 */
class ExportNationalizationSlipsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
