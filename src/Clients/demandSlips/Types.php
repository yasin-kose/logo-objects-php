<?php

declare(strict_types=1);

namespace LogoObjects\Clients\demandSlips;

/**
 * RscollectionrsDemandtrans
 */
class RscollectionrsDemandtrans extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\demandSlips\RsDemandtrans::class],
        ]);
    }
}

/**
 * RscollectionrsDetdemandtrans
 */
class RscollectionrsDetdemandtrans extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\demandSlips\RsDetdemandtrans::class],
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
            'items' => [\LogoObjects\Clients\demandSlips\ExtendedFieldDefinitions::class],
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
            'items' => [\LogoObjects\Clients\demandSlips\RsLabelxml::class],
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
 * RsDemandtrans
 */
class RsDemandtrans extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $DEMANDFICHEREF = null;
    /** @var int|float|null */
    public $ITEMREF = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    /** @var int|float|null */
    public $AMOUNT = null;
    /** @var int|float|null */
    public $MEET_AMOUNT = null;
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
    public $MEET_TYPE = null;
    public ?string $PROCURE_DATE = null;
    /** @var int|float|null */
    public $SOURCE_INDEX = null;
    /** @var int|float|null */
    public $BRANCH = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $FACTORY_NR = null;
    /** @var int|float|null */
    public $BOMMASTERREF = null;
    /** @var int|float|null */
    public $BOMREVREF = null;
    public ?string $AUXIL_CODE = null;
    public ?string $DESCRIPTION = null;
    /** @var int|float|null */
    public $STATUS = null;
    /** @var int|float|null */
    public $WF_STATUS = null;
    /** @var int|float|null */
    public $PAYDEFREF = null;
    /** @var int|float|null */
    public $LINE_TYPE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $CPST_FLAG = null;
    /** @var int|float|null */
    public $DET_LINE = null;
    /** @var int|float|null */
    public $PREVLINEREF = null;
    /** @var int|float|null */
    public $PREV_LINE_NO = null;
    /** @var int|float|null */
    public $LINE_NO = null;
    public ?string $USER_NAME = null;
    public ?string $FICHE_DATE = null;
    /** @var int|float|null */
    public $MRPLINEREF = null;
    /** @var int|float|null */
    public $MRPHEADREF = null;
    /** @var int|float|null */
    public $ALT_ITEM_USE = null;
    /** @var int|float|null */
    public $MRP_HEAD_TYPE = null;
    public ?string $ARP_CODE = null;
    public ?string $ARP_NAME = null;
    public ?string $ITEM_CODE = null;
    public ?string $ITEM_NAME = null;
    /** @var int|float|null */
    public $CARD_TYPE = null;
    public ?string $UNIT_CODE = null;
    public ?string $BOM_CODE = null;
    public ?string $BOM_REV_CODE = null;
    public ?string $PAY_CODE = null;
    /** @var RscollectionrsDetdemandtrans|null */
    public $DETAILS = null;
    public ?string $DETDELLIST = null;
    /** @var int|float|null */
    public $LAST_COMPL = null;
    /** @var int|float|null */
    public $ORD_PEG_USE = null;
    /** @var int|float|null */
    public $ORD_PEG_AMNT = null;
    /** @var int|float|null */
    public $CANC_AMOUNT = null;
    /** @var int|float|null */
    public $PRICE = null;
    /** @var int|float|null */
    public $PROCURE_TIME = null;
    /** @var int|float|null */
    public $INVUSE_PARAM = null;
    /** @var int|float|null */
    public $PROD_ORD_REF = null;
    /** @var int|float|null */
    public $PROD_ORD_LN_REF = null;
    /** @var int|float|null */
    public $WORK_ORD_REF = null;
    /** @var int|float|null */
    public $PLN_STFC_REF = null;
    /** @var int|float|null */
    public $PLN_STLN_REF = null;
    /** @var int|float|null */
    public $STFC_PERIOD_NR = null;
    /** @var int|float|null */
    public $REAL_SRC_INDEX = null;
    /** @var int|float|null */
    public $ACCOUNTREF = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    /** @var int|float|null */
    public $CROSS_ACC_REF = null;
    /** @var int|float|null */
    public $CROSS_CENT_REF = null;
    /** @var int|float|null */
    public $CROSS_PROJ_REF = null;
    /** @var int|float|null */
    public $VARIANTREF = null;
    public ?string $VARIANTCODE = null;
    public ?string $VARIANTNAME = null;
    /** @var int|float|null */
    public $CANCONFIG = null;
    public ?string $VCHARLIST = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $PR_CURR = null;
    /** @var int|float|null */
    public $PR_PRICE = null;
    /** @var int|float|null */
    public $MEET_WITH_STOCK = null;
    /** @var int|float|null */
    public $FICHE_TYPE = null;
    public ?string $PRODUCER_CODE = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $DEFNFLDSLIST = null;
    /** @var int|float|null */
    public $PORDER_TYPE = null;
    /** @var int|float|null */
    public $BOM_TYPE = null;
    public ?string $GUID = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DETAILS' => \LogoObjects\Clients\demandSlips\RscollectionrsDetdemandtrans::class,
            'DEFNFLDSLIST' => \LogoObjects\Clients\demandSlips\Rscollectionextendedfielddefinitions::class,
        ]);
    }
}

/**
 * RsDetdemandtrans
 */
class RsDetdemandtrans extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $DEMANDFICHEREF = null;
    /** @var int|float|null */
    public $ITEMREF = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    /** @var int|float|null */
    public $AMOUNT = null;
    /** @var int|float|null */
    public $MEET_AMOUNT = null;
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
    public $MEET_TYPE = null;
    public ?string $PROCURE_DATE = null;
    /** @var int|float|null */
    public $SOURCE_INDEX = null;
    /** @var int|float|null */
    public $BRANCH = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $FACTORY_NR = null;
    /** @var int|float|null */
    public $BOMMASTERREF = null;
    /** @var int|float|null */
    public $BOMREVREF = null;
    public ?string $AUXIL_CODE = null;
    public ?string $DESCRIPTION = null;
    /** @var int|float|null */
    public $STATUS = null;
    /** @var int|float|null */
    public $WF_STATUS = null;
    /** @var int|float|null */
    public $PAYDEFREF = null;
    /** @var int|float|null */
    public $LINE_TYPE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $CPST_FLAG = null;
    /** @var int|float|null */
    public $DET_LINE = null;
    /** @var int|float|null */
    public $PREVLINEREF = null;
    /** @var int|float|null */
    public $PREV_LINE_NO = null;
    /** @var int|float|null */
    public $LINE_NO = null;
    public ?string $USER_NAME = null;
    public ?string $FICHE_DATE = null;
    /** @var int|float|null */
    public $MRPLINEREF = null;
    /** @var int|float|null */
    public $MRPHEADREF = null;
    /** @var int|float|null */
    public $ALT_ITEM_USE = null;
    /** @var int|float|null */
    public $MRP_HEAD_TYPE = null;
    public ?string $ARP_CODE = null;
    public ?string $ARP_NAME = null;
    public ?string $ITEM_CODE = null;
    public ?string $ITEM_NAME = null;
    /** @var int|float|null */
    public $CARD_TYPE = null;
    public ?string $UNIT_CODE = null;
    public ?string $BOM_CODE = null;
    public ?string $BOM_REV_CODE = null;
    public ?string $PAY_CODE = null;
    public ?string $DETAILS = null;
    public ?string $DETDELLIST = null;
    /** @var int|float|null */
    public $LAST_COMPL = null;
    /** @var int|float|null */
    public $ORD_PEG_USE = null;
    /** @var int|float|null */
    public $ORD_PEG_AMNT = null;
    /** @var int|float|null */
    public $PRICE = null;
    /** @var int|float|null */
    public $CANC_AMOUNT = null;
    /** @var int|float|null */
    public $PROCURE_TIME = null;
    /** @var int|float|null */
    public $INVUSE_PARAM = null;
    /** @var int|float|null */
    public $PROD_ORD_REF = null;
    /** @var int|float|null */
    public $PROD_ORD_LN_REF = null;
    /** @var int|float|null */
    public $WORK_ORD_REF = null;
    /** @var int|float|null */
    public $PLN_STFC_REF = null;
    /** @var int|float|null */
    public $PLN_STLN_REF = null;
    /** @var int|float|null */
    public $STFC_PERIOD_NR = null;
    /** @var int|float|null */
    public $ACCOUNT_REF = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    /** @var int|float|null */
    public $CROSS_ACC_REF = null;
    /** @var int|float|null */
    public $CROSS_CENT_REF = null;
    /** @var int|float|null */
    public $CROSS_PROJ_REF = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $PR_CURR = null;
    /** @var int|float|null */
    public $PR_PRICE = null;
    /** @var int|float|null */
    public $PORDER_TYPE = null;
    /** @var int|float|null */
    public $BOM_TYPE = null;
    public ?string $GUID = null;
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
 * DemandSlips
 */
class DemandSlips extends \LogoObjects\Types\BaseEntity
{
    public ?string $NUMBER = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $TIME = null;
    public ?string $DO_CODE = null;
    /** @var int|float|null */
    public $STATUS = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $SOURCE_INDEX = null;
    /** @var int|float|null */
    public $BRANCH = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $FACTORY_NR = null;
    /** @var int|float|null */
    public $WF_STATUS = null;
    /** @var int|float|null */
    public $DEMAND_TYPE = null;
    /** @var int|float|null */
    public $DEMANDREF = null;
    /** @var int|float|null */
    public $PRINT_CNT = null;
    public ?string $PRINT_DATE = null;
    /** @var int|float|null */
    public $USER_NO = null;
    /** @var int|float|null */
    public $LOGICALREF = null;
    public ?string $FICHENO = null;
    public ?string $DOCODE = null;
    public ?string $SPECODE = null;
    public ?string $CYPHCODE = null;
    /** @var int|float|null */
    public $SOURCEINDEX = null;
    /** @var int|float|null */
    public $FACTORYNR = null;
    /** @var int|float|null */
    public $SITEID = null;
    /** @var int|float|null */
    public $RECSTATUS = null;
    /** @var int|float|null */
    public $ORGLOGICREF = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
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
    /** @var int|float|null */
    public $DEMANDTYPE = null;
    /** @var int|float|null */
    public $PRINTCNT = null;
    /** @var int|float|null */
    public $USERNO = null;
    /** @var RscollectionrsDemandtrans|null */
    public $TRANSACTIONS = null;
    public ?string $DELLIST = null;
    /** @var int|float|null */
    public $WARNACTIVE = null;
    public ?string $DOCALS = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $DOCNRREF = null;
    public ?string $MPS_CODE = null;
    public ?string $PROD_ORD_NO = null;
    /** @var int|float|null */
    public $LINE_CNT = null;
    /** @var int|float|null */
    public $HAS_NO_UNIT_LN = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    public ?string $ITEXT = null;
    public ?string $OLD_F_DATE = null;
    /** @var int|float|null */
    public $WFLOWCARDREF = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    public ?string $PROJECT_CODE = null;
    public ?string $EMPLOYEE_CODE = null;
    /** @var int|float|null */
    public $PERREF = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $DEFNFLDSLIST = null;
    /** @var RscollectionrsLabelxml|null */
    public $LABEL_LIST = null;
    public ?string $GUID = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'TRANSACTIONS' => \LogoObjects\Clients\demandSlips\RscollectionrsDemandtrans::class,
            'DEFNFLDSLIST' => \LogoObjects\Clients\demandSlips\Rscollectionextendedfielddefinitions::class,
            'LABEL_LIST' => \LogoObjects\Clients\demandSlips\RscollectionrsLabelxml::class,
        ]);
    }
}

/**
 * DemandSlipsQueryOptions
 */
class DemandSlipsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var DemandSlipsSortSpec|null */
    public $sort = null;
}

/**
 * DemandSlipsSearchCriteria
 */
class DemandSlipsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $number = null;
    /** @var mixed */
    public $date = null;
    /** @var mixed */
    public $time = null;
    /** @var mixed */
    public $doCode = null;
    /** @var mixed */
    public $status = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $sourceIndex = null;
    /** @var mixed */
    public $branch = null;
    /** @var mixed */
    public $department = null;
    /** @var mixed */
    public $factoryNr = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $wfStatus = null;
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
    public $demandType = null;
    /** @var mixed */
    public $demandref = null;
    /** @var mixed */
    public $printCnt = null;
    /** @var mixed */
    public $printDate = null;
    /** @var mixed */
    public $textinc = null;
    /** @var mixed */
    public $userNo = null;
    /** @var mixed */
    public $logicalref = null;
    /** @var mixed */
    public $ficheno = null;
    /** @var mixed */
    public $docode = null;
    /** @var mixed */
    public $specode = null;
    /** @var mixed */
    public $cyphcode = null;
    /** @var mixed */
    public $sourceindex = null;
    /** @var mixed */
    public $factorynr = null;
    /** @var mixed */
    public $siteid = null;
    /** @var mixed */
    public $recstatus = null;
    /** @var mixed */
    public $orglogicref = null;
    /** @var mixed */
    public $wfstatus = null;
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
    public $demandtype = null;
    /** @var mixed */
    public $printcnt = null;
    /** @var mixed */
    public $userno = null;
    /** @var mixed */
    public $transactions = null;
    /** @var mixed */
    public $dellist = null;
    /** @var mixed */
    public $warnactive = null;
    /** @var mixed */
    public $docals = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $docnrref = null;
    /** @var mixed */
    public $mpsCode = null;
    /** @var mixed */
    public $prodOrdNo = null;
    /** @var mixed */
    public $lineCnt = null;
    /** @var mixed */
    public $hasNoUnitLn = null;
    /** @var mixed */
    public $textchg = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $oldFDate = null;
    /** @var mixed */
    public $wflowcardref = null;
    /** @var mixed */
    public $projectref = null;
    /** @var mixed */
    public $projectCode = null;
    /** @var mixed */
    public $employeeCode = null;
    /** @var mixed */
    public $perref = null;
    /** @var mixed */
    public $defnfldslist = null;
    /** @var mixed */
    public $labelList = null;
    /** @var mixed */
    public $guid = null;
}

/**
 * DemandSlipsAnalytics
 */
class DemandSlipsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
