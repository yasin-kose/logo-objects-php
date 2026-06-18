<?php

declare(strict_types=1);

namespace LogoObjects\Clients\variants;

/**
 * Items
 */
class Items extends \LogoObjects\Support\Entity
{
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
 * RscollectionrsVariantasgnsxml
 */
class RscollectionrsVariantasgnsxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\variants\RsVariantasgnsxml::class],
        ]);
    }
}

/**
 * RscollectionrsItemunitasgn
 */
class RscollectionrsItemunitasgn extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\variants\RsItemunitasgn::class],
        ]);
    }
}

/**
 * RscollectionrsBarcodexml
 */
class RscollectionrsBarcodexml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\variants\RsBarcodexml::class],
        ]);
    }
}

/**
 * RscollectionrsIteminvenxml
 */
class RscollectionrsIteminvenxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\variants\RsIteminvenxml::class],
        ]);
    }
}

/**
 * RscollectionrsItemfactoryxml
 */
class RscollectionrsItemfactoryxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\variants\RsItemfactoryxml::class],
        ]);
    }
}

/**
 * RscollectionrsGlpostxml
 */
class RscollectionrsGlpostxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\variants\RsGlpostxml::class],
        ]);
    }
}

/**
 * RscollectionrsItemsuppxml
 */
class RscollectionrsItemsuppxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\variants\RsItemsuppxml::class],
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
 * RsVariantasgnsxml
 */
class RsVariantasgnsxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $ITEMREF = null;
    /** @var int|float|null */
    public $VARIANTREF = null;
    /** @var int|float|null */
    public $CHARCODEREF = null;
    public ?string $CHARCODE = null;
    public ?string $CHARDEF = null;
    /** @var int|float|null */
    public $CHARVALREF = null;
    public ?string $CHARVAL = null;
    /** @var int|float|null */
    public $LINENR = null;
    /** @var int|float|null */
    public $SITEID = null;
    public ?string $ORGLOGOID = null;
}

/**
 * RsItemunitasgn
 */
class RsItemunitasgn extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $UNITLINEREF = null;
    public ?string $UNIT_CODE = null;
    public ?string $BARCODE = null;
    /** @var int|float|null */
    public $USEF_MTRLCLASS = null;
    /** @var int|float|null */
    public $USEF_PURCHCLAS = null;
    /** @var int|float|null */
    public $USEF_SALESCLAS = null;
    /** @var int|float|null */
    public $MTRL_PRIORITY = null;
    /** @var int|float|null */
    public $PURCH_PRIORTY = null;
    /** @var int|float|null */
    public $SALES_PRIORITY = null;
    /** @var int|float|null */
    public $WIDTH = null;
    /** @var int|float|null */
    public $LENGTH = null;
    /** @var int|float|null */
    public $HEIGHT = null;
    /** @var int|float|null */
    public $AREA = null;
    /** @var int|float|null */
    public $VOLUME = null;
    /** @var int|float|null */
    public $WEIGHT = null;
    /** @var int|float|null */
    public $WIDTHREF = null;
    /** @var int|float|null */
    public $LENGTHREF = null;
    /** @var int|float|null */
    public $HEIGHTREF = null;
    /** @var int|float|null */
    public $AREAREF = null;
    /** @var int|float|null */
    public $VOLUMEREF = null;
    /** @var int|float|null */
    public $WEIGHTREF = null;
    /** @var int|float|null */
    public $GROSS_VOLUME = null;
    /** @var int|float|null */
    public $GROSS_WEIGHT = null;
    /** @var int|float|null */
    public $GROSSVOLREF = null;
    /** @var int|float|null */
    public $GROSSWGHTREF = null;
    /** @var int|float|null */
    public $CONV_FACT1 = null;
    /** @var int|float|null */
    public $CONV_FACT2 = null;
    /** @var int|float|null */
    public $EXT_ACC_FLAGS = null;
    public ?string $WIDTH_CODE = null;
    public ?string $LENGTH_CODE = null;
    public ?string $HEIGHT_CODE = null;
    public ?string $AREA_CODE = null;
    public ?string $VOLUME_CODE = null;
    public ?string $WEIGHT_CODE = null;
    public ?string $GROSS_VOL_CODE = null;
    public ?string $GROSS_WGHT_CODE = null;
    public ?string $BARCODE2 = null;
    public ?string $BARCODE3 = null;
    public ?string $WITHUNIT_BARCODE = null;
    /** @var int|float|null */
    public $WBARCODESHIFT = null;
    /** @var RscollectionrsBarcodexml|null */
    public $BARCODE_LIST = null;
    public ?string $GLOBAL_ID = null;
    public ?string $FORMULA = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'BARCODE_LIST' => \LogoObjects\Clients\variants\RscollectionrsBarcodexml::class,
        ]);
    }
}

/**
 * RsBarcodexml
 */
class RsBarcodexml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $ITMUNITAREF = null;
    /** @var int|float|null */
    public $ITEMREF = null;
    /** @var int|float|null */
    public $VARIANTREF = null;
    /** @var int|float|null */
    public $UNITLINEREF = null;
    /** @var int|float|null */
    public $LINENR = null;
    public ?string $BARCODE = null;
    /** @var int|float|null */
    public $TYPE = null;
    /** @var int|float|null */
    public $WBARCODESHIFT = null;
    public ?string $GLOBAL_ID = null;
}

/**
 * RsIteminvenxml
 */
class RsIteminvenxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $WH_NUMBER = null;
    /** @var int|float|null */
    public $ITEMREF = null;
    /** @var int|float|null */
    public $MIN_LEVEL = null;
    /** @var int|float|null */
    public $MAX_LEVEL = null;
    /** @var int|float|null */
    public $SAFETY_LEVEL = null;
    public ?string $LOCATION_CODE = null;
    /** @var int|float|null */
    public $LOCATIONREF = null;
    public ?string $PERIOD_CLOSE_DATE = null;
    /** @var int|float|null */
    public $ABC_CODE = null;
    /** @var int|float|null */
    public $IO_FLAG = null;
    /** @var int|float|null */
    public $MIN_LEVEL_FLAG = null;
    /** @var int|float|null */
    public $MAX_LEVEL_FLAG = null;
    /** @var int|float|null */
    public $SAFETY_LEVEL_FLAG = null;
    /** @var int|float|null */
    public $BACKORDER_FLAG = null;
    /** @var int|float|null */
    public $CLAS = null;
    /** @var int|float|null */
    public $OUT_FLAG = null;
}

/**
 * RsItemfactoryxml
 */
class RsItemfactoryxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $FACTORYNR = null;
    /** @var int|float|null */
    public $ITEMREF = null;
    /** @var int|float|null */
    public $SPECIALIZED = null;
    /** @var int|float|null */
    public $PROCURECLASS = null;
    /** @var int|float|null */
    public $LOWLEVELCODE = null;
    /** @var int|float|null */
    public $DIVLOTSIZE = null;
    /** @var int|float|null */
    public $MRPCNTRL = null;
    /** @var int|float|null */
    public $PLANPOLICY = null;
    /** @var int|float|null */
    public $LOTSIZINGMTD = null;
    /** @var int|float|null */
    public $FIXEDLOTSIZE = null;
    /** @var int|float|null */
    public $YIELD = null;
    /** @var int|float|null */
    public $MINORDERQTY = null;
    /** @var int|float|null */
    public $MAXORDERQTY = null;
    /** @var int|float|null */
    public $MULTORDERQTY = null;
    /** @var int|float|null */
    public $MINORDERDAY = null;
    /** @var int|float|null */
    public $MAXORDERDAY = null;
    /** @var int|float|null */
    public $REORDERPOINT = null;
    /** @var int|float|null */
    public $AUTOMTRISSUE = null;
    public ?string $PLANNERREF = null;
    public ?string $BUYERREF = null;
    public ?string $SELADMINREF = null;
    public ?string $CSTANALYSTREF = null;
    public ?string $DEFSERILOTNO = null;
    /** @var int|float|null */
    public $AUTOLOTOUTMTD = null;
    /** @var int|float|null */
    public $LOTPARTY = null;
    /** @var int|float|null */
    public $OUTLOTSIZE = null;
    /** @var int|float|null */
    public $COUNTFORMPS = null;
    /** @var int|float|null */
    public $LOT_SIZING_MTD2 = null;
    /** @var int|float|null */
    public $FIXED_LOT_SIZE2 = null;
    /** @var int|float|null */
    public $YIELD2 = null;
    /** @var int|float|null */
    public $MIN_ORDER_QTY2 = null;
    /** @var int|float|null */
    public $MAX_ORDER_QTY2 = null;
    /** @var int|float|null */
    public $MULT_ORDER_QTY2 = null;
    public ?string $FACTORYNAME = null;
    /** @var int|float|null */
    public $CLAS = null;
    /** @var int|float|null */
    public $DOMINANTFLAG = null;
    /** @var int|float|null */
    public $DOMINANTREF = null;
    public ?string $DOMINANTCODE = null;
    /** @var int|float|null */
    public $UPDATED = null;
    /** @var int|float|null */
    public $PROCURE_INVEN = null;
}

/**
 * RsGlpostxml
 */
class RsGlpostxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $CARDTYPE = null;
    /** @var int|float|null */
    public $CARDREF = null;
    /** @var int|float|null */
    public $INFO_TYPE = null;
    public ?string $GLACC_CODE = null;
    /** @var int|float|null */
    public $ACCOUNTREF = null;
    public ?string $OHP_CODE = null;
    /** @var int|float|null */
    public $CENTERREF = null;
}

/**
 * RsItemsuppxml
 */
class RsItemsuppxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $ITEMREF = null;
    /** @var int|float|null */
    public $SUPPLY_TYPE = null;
    /** @var int|float|null */
    public $PRIORITY = null;
    /** @var int|float|null */
    public $LINE_NO = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    public ?string $TRADING_GRP = null;
    /** @var int|float|null */
    public $CL_CARD_TYPE = null;
    /** @var int|float|null */
    public $QCC_CHECK = null;
    /** @var int|float|null */
    public $LEAD_TIME = null;
    /** @var int|float|null */
    public $MAX_QUANTITY = null;
    /** @var int|float|null */
    public $MIN_QUANTITY = null;
    public ?string $BEG_DATE = null;
    /** @var int|float|null */
    public $SPECIALIZED = null;
    public ?string $ICUST_SUP_CODE = null;
    public ?string $ICUST_SUP_NAME = null;
    /** @var int|float|null */
    public $QTY_DEP_LEAD_TIME = null;
    public ?string $ARP_CODE = null;
    /** @var int|float|null */
    public $PACKETREF = null;
    public ?string $PACKET_CODE = null;
    /** @var int|float|null */
    public $PACKAGING_AMNT = null;
    /** @var int|float|null */
    public $PACKAGINGUOMREF = null;
    public ?string $UNIT_CODE = null;
    /** @var int|float|null */
    public $PACKET_USE_TYPE = null;
    public ?string $UNITSET_CODE = null;
    /** @var int|float|null */
    public $ORD_PERC = null;
    /** @var int|float|null */
    public $ORD_FREC = null;
    /** @var int|float|null */
    public $VARIANT_REF = null;
}

/**
 * Variants
 */
class Variants extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $ITEMREF = null;
    /** @var int|float|null */
    public $CARDTYPE = null;
    public ?string $CODE = null;
    public ?string $NAME = null;
    public ?string $NAME2 = null;
    /** @var int|float|null */
    public $ACTIVE = null;
    public ?string $SPECODE = null;
    public ?string $SPECODE2 = null;
    public ?string $SPECODE3 = null;
    public ?string $SPECODE4 = null;
    public ?string $SPECODE5 = null;
    public ?string $STGRPCODE = null;
    public ?string $PRODUCERCODE = null;
    public ?string $CYPHCODE = null;
    /** @var int|float|null */
    public $UNITSETREF = null;
    public ?string $UNITSETCODE = null;
    /** @var int|float|null */
    public $QCCSETREF = null;
    public ?string $QCCSETCODE = null;
    public ?string $GTIP_CODE = null;
    /** @var int|float|null */
    public $SITEID = null;
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
    /** @var RscollectionrsVariantasgnsxml|null */
    public $VRNT_ASSIGNS = null;
    public ?string $VALDELLIST = null;
    /** @var int|float|null */
    public $IREF = null;
    public ?string $ICODE = null;
    public ?string $IDEF = null;
    public ?string $XBUFS = null;
    public ?string $FLDALS = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    public ?string $ITEXT = null;
    /** @var RscollectionrsItemunitasgn|null */
    public $UNITLIST = null;
    /** @var int|float|null */
    public $ASGN_INTERNAL_REFERENCE = null;
    /** @var int|float|null */
    public $ASGN_ITEMREF = null;
    /** @var int|float|null */
    public $ASGN_LINENR = null;
    /** @var int|float|null */
    public $ASGN_UNITLINEREF = null;
    public ?string $ASGN_BARCODE = null;
    /** @var int|float|null */
    public $ASGN_MTRLCLAS = null;
    /** @var int|float|null */
    public $ASGN_PURCHCLAS = null;
    /** @var int|float|null */
    public $ASGN_SALESCLAS = null;
    /** @var int|float|null */
    public $ASGN_MTRLPRIORITY = null;
    /** @var int|float|null */
    public $ASGN_PURCHPRIORTY = null;
    /** @var int|float|null */
    public $ASGN_SALESPRIORITY = null;
    /** @var int|float|null */
    public $ASGN_WIDTH = null;
    /** @var int|float|null */
    public $ASGN_LENGTH = null;
    /** @var int|float|null */
    public $ASGN_HEIGHT = null;
    /** @var int|float|null */
    public $ASGN_AREA = null;
    /** @var int|float|null */
    public $ASGN_VOLUME = null;
    /** @var int|float|null */
    public $ASGN_WEIGHT = null;
    /** @var int|float|null */
    public $ASGN_WIDTHREF = null;
    /** @var int|float|null */
    public $ASGN_LENGTHREF = null;
    /** @var int|float|null */
    public $ASGN_HEIGHTREF = null;
    /** @var int|float|null */
    public $ASGN_AREAREF = null;
    /** @var int|float|null */
    public $ASGN_VOLUMEREF = null;
    /** @var int|float|null */
    public $ASGN_WEIGHTREF = null;
    /** @var int|float|null */
    public $ASGN_GROSSVOLUME = null;
    /** @var int|float|null */
    public $ASGN_GROSSWEIGHT = null;
    /** @var int|float|null */
    public $ASGN_GROSSVOLREF = null;
    /** @var int|float|null */
    public $ASGN_GROSSWGHTREF = null;
    /** @var int|float|null */
    public $ASGN_CONVFACT1 = null;
    /** @var int|float|null */
    public $ASGN_CONVFACT2 = null;
    /** @var int|float|null */
    public $ASGN_EXTACCESSFLAG = null;
    /** @var int|float|null */
    public $ASGN_SITEID = null;
    /** @var int|float|null */
    public $ASGN_XML_ATTRIBUTE = null;
    /** @var int|float|null */
    public $ASGN_DATA_REFERENCE = null;
    public ?string $ASGN_BARCODE2 = null;
    public ?string $ASGN_BARCODE3 = null;
    public ?string $ASGN_WBARCODE = null;
    /** @var int|float|null */
    public $ASGN_WBARCODESHIFT = null;
    /** @var int|float|null */
    public $ASGN_VARIANTREF = null;
    /** @var int|float|null */
    public $INFO_INTERNAL_REFERENCE = null;
    public ?string $INFO_CODE = null;
    public ?string $INFO_NAME = null;
    /** @var int|float|null */
    public $INFO_UNITSETREF = null;
    /** @var int|float|null */
    public $INFO_LINENR = null;
    /** @var int|float|null */
    public $INFO_MAINUNIT = null;
    /** @var int|float|null */
    public $INFO_CONVFACT1 = null;
    /** @var int|float|null */
    public $INFO_CONVFACT2 = null;
    /** @var int|float|null */
    public $INFO_WIDTH = null;
    /** @var int|float|null */
    public $INFO_LENGTH = null;
    /** @var int|float|null */
    public $INFO_HEIGHT = null;
    /** @var int|float|null */
    public $INFO_AREA = null;
    /** @var int|float|null */
    public $INFO_VOLUME = null;
    /** @var int|float|null */
    public $INFO_WEIGHT = null;
    /** @var int|float|null */
    public $INFO_WIDTHREF = null;
    /** @var int|float|null */
    public $INFO_LENGTHREF = null;
    /** @var int|float|null */
    public $INFO_HEIGHTREF = null;
    /** @var int|float|null */
    public $INFO_AREAREF = null;
    /** @var int|float|null */
    public $INFO_VOLUMEREF = null;
    /** @var int|float|null */
    public $INFO_WEIGHTREF = null;
    /** @var int|float|null */
    public $INFO_DIVUNIT = null;
    public ?string $WIDTHCODE = null;
    public ?string $LENGTHCODE = null;
    public ?string $HEIGHTCODE = null;
    public ?string $AREACODE = null;
    public ?string $VOLUMECODE = null;
    public ?string $WEIGHTCODE = null;
    public ?string $GROSSVOLCODE = null;
    public ?string $GROSSWGHTCODE = null;
    public ?string $MAINUNIT = null;
    /** @var int|float|null */
    public $XINFOFLAGS1 = null;
    /** @var int|float|null */
    public $XINFOFLAGS2 = null;
    /** @var int|float|null */
    public $XINFOFLAGS3 = null;
    /** @var int|float|null */
    public $XINFOFLAGS4 = null;
    /** @var int|float|null */
    public $XINFOFLAGS5 = null;
    /** @var int|float|null */
    public $XINFOFLAGS6 = null;
    /** @var int|float|null */
    public $XINFOFLAGS7 = null;
    /** @var int|float|null */
    public $XINFOFLAGS8 = null;
    /** @var int|float|null */
    public $XINFOFLAGS9 = null;
    /** @var int|float|null */
    public $XINFOFLAGS10 = null;
    /** @var int|float|null */
    public $INFOCHGD1 = null;
    /** @var int|float|null */
    public $INFOCHGD2 = null;
    /** @var int|float|null */
    public $INFOCHGD3 = null;
    /** @var int|float|null */
    public $INFOCHGD4 = null;
    /** @var int|float|null */
    public $INFOCHGD5 = null;
    /** @var int|float|null */
    public $INFOCHGD6 = null;
    /** @var int|float|null */
    public $INFOCHGD7 = null;
    /** @var int|float|null */
    public $INFOCHGD8 = null;
    /** @var int|float|null */
    public $INFOCHGD9 = null;
    /** @var int|float|null */
    public $INFOCHGD10 = null;
    /** @var int|float|null */
    public $USETREF = null;
    /** @var int|float|null */
    public $SELINDEX = null;
    /** @var int|float|null */
    public $SELREF = null;
    /** @var int|float|null */
    public $ALWLST = null;
    public ?string $SELLST = null;
    /** @var int|float|null */
    public $SELECTED = null;
    public ?string $INVENLIST = null;
    /** @var RscollectionrsIteminvenxml|null */
    public $WH_PARAMS = null;
    public ?string $INVENDEFDELLIST = null;
    /** @var RscollectionrsItemfactoryxml|null */
    public $FACTORY_PARAMS = null;
    /** @var int|float|null */
    public $CTYP = null;
    /** @var int|float|null */
    public $TRACKTYP = null;
    /** @var int|float|null */
    public $LOCTRACK = null;
    public ?string $ITEMPRICELIST = null;
    public ?string $VRNTPRICELIST = null;
    /** @var RscollectionrsGlpostxml|null */
    public $ACCLIST = null;
    /** @var RscollectionrsItemsuppxml|null */
    public $SUPPLIST = null;
    public ?string $ORGLOGOID = null;
    /** @var int|float|null */
    public $PORD_AMOUNT_TOLERANCE = null;
    /** @var int|float|null */
    public $SORD_AMOUNT_TOLERANCE = null;
    public ?string $PAYERID = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'VRNT_ASSIGNS' => \LogoObjects\Clients\variants\RscollectionrsVariantasgnsxml::class,
            'UNITLIST' => \LogoObjects\Clients\variants\RscollectionrsItemunitasgn::class,
            'WH_PARAMS' => \LogoObjects\Clients\variants\RscollectionrsIteminvenxml::class,
            'FACTORY_PARAMS' => \LogoObjects\Clients\variants\RscollectionrsItemfactoryxml::class,
            'ACCLIST' => \LogoObjects\Clients\variants\RscollectionrsGlpostxml::class,
            'SUPPLIST' => \LogoObjects\Clients\variants\RscollectionrsItemsuppxml::class,
        ]);
    }
}

/**
 * VariantsQueryOptions
 */
class VariantsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var VariantsSortSpec|null */
    public $sort = null;
}

/**
 * VariantsSearchCriteria
 */
class VariantsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $itemref = null;
    /** @var mixed */
    public $cardtype = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $name = null;
    /** @var mixed */
    public $name2 = null;
    /** @var mixed */
    public $active = null;
    /** @var mixed */
    public $specode = null;
    /** @var mixed */
    public $specode2 = null;
    /** @var mixed */
    public $specode3 = null;
    /** @var mixed */
    public $specode4 = null;
    /** @var mixed */
    public $specode5 = null;
    /** @var mixed */
    public $stgrpcode = null;
    /** @var mixed */
    public $producercode = null;
    /** @var mixed */
    public $cyphcode = null;
    /** @var mixed */
    public $unitsetref = null;
    /** @var mixed */
    public $unitsetcode = null;
    /** @var mixed */
    public $qccsetref = null;
    /** @var mixed */
    public $qccsetcode = null;
    /** @var mixed */
    public $textinc = null;
    /** @var mixed */
    public $gtipCode = null;
    /** @var mixed */
    public $siteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
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
    public $vrntAssigns = null;
    /** @var mixed */
    public $valdellist = null;
    /** @var mixed */
    public $iref = null;
    /** @var mixed */
    public $icode = null;
    /** @var mixed */
    public $idef = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $fldals = null;
    /** @var mixed */
    public $textchg = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $unitlist = null;
    /** @var mixed */
    public $asgnInternalReference = null;
    /** @var mixed */
    public $asgnItemref = null;
    /** @var mixed */
    public $asgnLinenr = null;
    /** @var mixed */
    public $asgnUnitlineref = null;
    /** @var mixed */
    public $asgnBarcode = null;
    /** @var mixed */
    public $asgnMtrlclas = null;
    /** @var mixed */
    public $asgnPurchclas = null;
    /** @var mixed */
    public $asgnSalesclas = null;
    /** @var mixed */
    public $asgnMtrlpriority = null;
    /** @var mixed */
    public $asgnPurchpriorty = null;
    /** @var mixed */
    public $asgnSalespriority = null;
    /** @var mixed */
    public $asgnWidth = null;
    /** @var mixed */
    public $asgnLength = null;
    /** @var mixed */
    public $asgnHeight = null;
    /** @var mixed */
    public $asgnArea = null;
    /** @var mixed */
    public $asgnVolume = null;
    /** @var mixed */
    public $asgnWeight = null;
    /** @var mixed */
    public $asgnWidthref = null;
    /** @var mixed */
    public $asgnLengthref = null;
    /** @var mixed */
    public $asgnHeightref = null;
    /** @var mixed */
    public $asgnArearef = null;
    /** @var mixed */
    public $asgnVolumeref = null;
    /** @var mixed */
    public $asgnWeightref = null;
    /** @var mixed */
    public $asgnGrossvolume = null;
    /** @var mixed */
    public $asgnGrossweight = null;
    /** @var mixed */
    public $asgnGrossvolref = null;
    /** @var mixed */
    public $asgnGrosswghtref = null;
    /** @var mixed */
    public $asgnConvfact1 = null;
    /** @var mixed */
    public $asgnConvfact2 = null;
    /** @var mixed */
    public $asgnExtaccessflag = null;
    /** @var mixed */
    public $asgnSiteid = null;
    /** @var mixed */
    public $asgnXmlAttribute = null;
    /** @var mixed */
    public $asgnDataReference = null;
    /** @var mixed */
    public $asgnBarcode2 = null;
    /** @var mixed */
    public $asgnBarcode3 = null;
    /** @var mixed */
    public $asgnWbarcode = null;
    /** @var mixed */
    public $asgnWbarcodeshift = null;
    /** @var mixed */
    public $asgnVariantref = null;
    /** @var mixed */
    public $infoInternalReference = null;
    /** @var mixed */
    public $infoCode = null;
    /** @var mixed */
    public $infoName = null;
    /** @var mixed */
    public $infoUnitsetref = null;
    /** @var mixed */
    public $infoLinenr = null;
    /** @var mixed */
    public $infoMainunit = null;
    /** @var mixed */
    public $infoConvfact1 = null;
    /** @var mixed */
    public $infoConvfact2 = null;
    /** @var mixed */
    public $infoWidth = null;
    /** @var mixed */
    public $infoLength = null;
    /** @var mixed */
    public $infoHeight = null;
    /** @var mixed */
    public $infoArea = null;
    /** @var mixed */
    public $infoVolume = null;
    /** @var mixed */
    public $infoWeight = null;
    /** @var mixed */
    public $infoWidthref = null;
    /** @var mixed */
    public $infoLengthref = null;
    /** @var mixed */
    public $infoHeightref = null;
    /** @var mixed */
    public $infoArearef = null;
    /** @var mixed */
    public $infoVolumeref = null;
    /** @var mixed */
    public $infoWeightref = null;
    /** @var mixed */
    public $infoDivunit = null;
    /** @var mixed */
    public $widthcode = null;
    /** @var mixed */
    public $lengthcode = null;
    /** @var mixed */
    public $heightcode = null;
    /** @var mixed */
    public $areacode = null;
    /** @var mixed */
    public $volumecode = null;
    /** @var mixed */
    public $weightcode = null;
    /** @var mixed */
    public $grossvolcode = null;
    /** @var mixed */
    public $grosswghtcode = null;
    /** @var mixed */
    public $mainunit = null;
    /** @var mixed */
    public $xinfoflags1 = null;
    /** @var mixed */
    public $xinfoflags2 = null;
    /** @var mixed */
    public $xinfoflags3 = null;
    /** @var mixed */
    public $xinfoflags4 = null;
    /** @var mixed */
    public $xinfoflags5 = null;
    /** @var mixed */
    public $xinfoflags6 = null;
    /** @var mixed */
    public $xinfoflags7 = null;
    /** @var mixed */
    public $xinfoflags8 = null;
    /** @var mixed */
    public $xinfoflags9 = null;
    /** @var mixed */
    public $xinfoflags10 = null;
    /** @var mixed */
    public $infochgd1 = null;
    /** @var mixed */
    public $infochgd2 = null;
    /** @var mixed */
    public $infochgd3 = null;
    /** @var mixed */
    public $infochgd4 = null;
    /** @var mixed */
    public $infochgd5 = null;
    /** @var mixed */
    public $infochgd6 = null;
    /** @var mixed */
    public $infochgd7 = null;
    /** @var mixed */
    public $infochgd8 = null;
    /** @var mixed */
    public $infochgd9 = null;
    /** @var mixed */
    public $infochgd10 = null;
    /** @var mixed */
    public $usetref = null;
    /** @var mixed */
    public $selindex = null;
    /** @var mixed */
    public $selref = null;
    /** @var mixed */
    public $alwlst = null;
    /** @var mixed */
    public $sellst = null;
    /** @var mixed */
    public $selected = null;
    /** @var mixed */
    public $invenlist = null;
    /** @var mixed */
    public $whParams = null;
    /** @var mixed */
    public $invendefdellist = null;
    /** @var mixed */
    public $factoryParams = null;
    /** @var mixed */
    public $ctyp = null;
    /** @var mixed */
    public $tracktyp = null;
    /** @var mixed */
    public $loctrack = null;
    /** @var mixed */
    public $itempricelist = null;
    /** @var mixed */
    public $vrntpricelist = null;
    /** @var mixed */
    public $acclist = null;
    /** @var mixed */
    public $supplist = null;
    /** @var mixed */
    public $orglogoid = null;
    /** @var mixed */
    public $pordAmountTolerance = null;
    /** @var mixed */
    public $sordAmountTolerance = null;
    /** @var mixed */
    public $payerid = null;
}

/**
 * VariantsAnalytics
 */
class VariantsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
