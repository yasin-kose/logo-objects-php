<?php

declare(strict_types=1);

namespace LogoObjects\Clients\items;

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
            'items' => [\LogoObjects\Clients\items\RsItemfactoryxml::class],
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
            'items' => [\LogoObjects\Clients\items\RsIteminvenxml::class],
        ]);
    }
}

/**
 * RscollectionrsItemchcodesxml
 */
class RscollectionrsItemchcodesxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\items\RsItemchcodesxml::class],
        ]);
    }
}

/**
 * RscollectionrsItemchvaluesxml
 */
class RscollectionrsItemchvaluesxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\items\RsItemchvaluesxml::class],
        ]);
    }
}

/**
 * RscollectionrsXmldomcls
 */
class RscollectionrsXmldomcls extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\items\RsXmldomcls::class],
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
            'items' => [\LogoObjects\Clients\items\RsItemunitasgn::class],
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
            'items' => [\LogoObjects\Clients\items\RsBarcodexml::class],
        ]);
    }
}

/**
 * RscollectionrsItemcmpxml
 */
class RscollectionrsItemcmpxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\items\RsItemcmpxml::class],
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
            'items' => [\LogoObjects\Clients\items\RsGlpostxml::class],
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
            'items' => [\LogoObjects\Clients\items\RsItemsuppxml::class],
        ]);
    }
}

/**
 * RscollectionrsAddtaxmultixml
 */
class RscollectionrsAddtaxmultixml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\items\RsAddtaxmultixml::class],
        ]);
    }
}

/**
 * RscollectionrsItemqprodxml
 */
class RscollectionrsItemqprodxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\items\RsItemqprodxml::class],
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
            'items' => [\LogoObjects\Clients\items\ExtendedFieldDefinitions::class],
        ]);
    }
}

/**
 * RscollectionrsExclistnodexml
 */
class RscollectionrsExclistnodexml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\items\RsExclistnodexml::class],
        ]);
    }
}

/**
 * RscollectionrsExclistnodevalxm
 */
class RscollectionrsExclistnodevalxm extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\items\RsExclistnodevalxm::class],
        ]);
    }
}

/**
 * RscollectionrsVrntcdtemplatexm
 */
class RscollectionrsVrntcdtemplatexm extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\items\RsVrntcdtemplatexm::class],
        ]);
    }
}

/**
 * RscollectionrsVrntcdtempvaluex
 */
class RscollectionrsVrntcdtempvaluex extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\items\RsVrntcdtempvaluex::class],
        ]);
    }
}

/**
 * Rscollectionitemalternatives
 */
class Rscollectionitemalternatives extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\items\ItemAlternatives::class],
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
            'items' => [\LogoObjects\Clients\items\RsLabelxml::class],
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
 * RsItemchcodesxml
 */
class RsItemchcodesxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $ITEMREF = null;
    /** @var int|float|null */
    public $CHARCODEREF = null;
    /** @var int|float|null */
    public $CHARVALREF = null;
    /** @var int|float|null */
    public $LINENR = null;
    /** @var int|float|null */
    public $MATRIXLOC = null;
    /** @var int|float|null */
    public $PRIORITY = null;
    public ?string $DLIST = null;
    public ?string $CCODE = null;
    public ?string $CNAME = null;
    /** @var RscollectionrsItemchvaluesxml|null */
    public $VALUES = null;
    public ?string $VCODE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'VALUES' => \LogoObjects\Clients\items\RscollectionrsItemchvaluesxml::class,
        ]);
    }
}

/**
 * RsItemchvaluesxml
 */
class RsItemchvaluesxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $ITEMREF = null;
    /** @var int|float|null */
    public $CHARCODEREF = null;
    /** @var int|float|null */
    public $CHARVALREF = null;
    /** @var int|float|null */
    public $LINENR = null;
    /** @var int|float|null */
    public $MATRIXLOC = null;
    /** @var int|float|null */
    public $PRIORITY = null;
    public ?string $VLIST = null;
    public ?string $DLIST = null;
    public ?string $CCODE = null;
    public ?string $CNAME = null;
    public ?string $VCODE = null;
    public ?string $VNAME = null;
}

/**
 * RsXmldomcls
 */
class RsXmldomcls extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $DOM_TYPE = null;
    public ?string $CLASS_CODE = null;
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
            'BARCODE_LIST' => \LogoObjects\Clients\items\RscollectionrsBarcodexml::class,
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
 * RsItemcmpxml
 */
class RsItemcmpxml extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    /** @var int|float|null */
    public $STCREF = null;
    /** @var int|float|null */
    public $QUANTITY = null;
    /** @var int|float|null */
    public $PRICE = null;
    /** @var int|float|null */
    public $SHARE_PERC = null;
    /** @var int|float|null */
    public $MAINCREF = null;
    /** @var int|float|null */
    public $LINENO = null;
    public ?string $DESCRIPTION = null;
    /** @var int|float|null */
    public $VARIANTREF = null;
    public ?string $VARIANTCODE = null;
    /** @var int|float|null */
    public $ALT_ITEM_USE = null;
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
    public $GROSS_U_INFO1 = null;
    /** @var int|float|null */
    public $GROSS_U_INFO2 = null;
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
 * RsAddtaxmultixml
 */
class RsAddtaxmultixml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $CARD_TYPE = null;
    /** @var int|float|null */
    public $CARDREF = null;
    /** @var int|float|null */
    public $ADDTAXREF = null;
    /** @var int|float|null */
    public $ORDER_NUMBER = null;
    public ?string $ADD_TAX_CODE = null;
    public ?string $ADD_TAX_DEF = null;
    /** @var int|float|null */
    public $EFFECT_KDV = null;
    /** @var int|float|null */
    public $INLINENET = null;
}

/**
 * RsItemqprodxml
 */
class RsItemqprodxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $STCREF = null;
    /** @var int|float|null */
    public $AMNT = null;
    /** @var int|float|null */
    public $PRICE = null;
    /** @var int|float|null */
    public $PERC = null;
    /** @var int|float|null */
    public $MAINCREF = null;
    /** @var int|float|null */
    public $LINENO = null;
    /** @var int|float|null */
    public $LOSTFACTOR = null;
    /** @var int|float|null */
    public $SOURCEINDEX = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $UOMREF = null;
    /** @var int|float|null */
    public $CARDTYPE = null;
    public ?string $SCODE = null;
    public ?string $SDEF = null;
    public ?string $UEDIT = null;
    public ?string $UUNIT = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    public ?string $ARP_CODE = null;
    /** @var int|float|null */
    public $COMP_TYPE = null;
    /** @var int|float|null */
    public $ALT_ITEM_USE = null;
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
    public $GROSS_U_INFO1 = null;
    /** @var int|float|null */
    public $GROSS_U_INFO2 = null;
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
 * RsExclistnodexml
 */
class RsExclistnodexml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $EINFOSZ = null;
    /** @var int|float|null */
    public $EPOLICY = null;
    /** @var int|float|null */
    public $NUMOFVAL = null;
    public ?string $CHAR_CODE = null;
    /** @var RscollectionrsExclistnodevalxm|null */
    public $VALREFSLIST = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'VALREFSLIST' => \LogoObjects\Clients\items\RscollectionrsExclistnodevalxm::class,
        ]);
    }
}

/**
 * RsExclistnodevalxm
 */
class RsExclistnodevalxm extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $VALREF = null;
    public ?string $VALCODE = null;
}

/**
 * RsVrntcdtemplatexm
 */
class RsVrntcdtemplatexm extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $TYP = null;
    /** @var int|float|null */
    public $ITEMREF = null;
    /** @var int|float|null */
    public $INCREMENT = null;
    /** @var int|float|null */
    public $CHARREF = null;
    /** @var int|float|null */
    public $LENGTH = null;
    public ?string $SSTART = null;
    public ?string $SEND = null;
    /** @var int|float|null */
    public $CHARVALREF = null;
    public ?string $CHARABBREV = null;
    /** @var int|float|null */
    public $LINENR = null;
    public ?string $CHARCODE = null;
    public ?string $INCCODE = null;
    public ?string $TILLCODE = null;
    /** @var int|float|null */
    public $FIRSTTIME = null;
    /** @var int|float|null */
    public $VISITED = null;
    /** @var int|float|null */
    public $VCOUNT = null;
    /** @var int|float|null */
    public $COUNT = null;
    /** @var RscollectionrsVrntcdtempvaluex|null */
    public $TEMPVALS = null;
    public ?string $DELLIST = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'TEMPVALS' => \LogoObjects\Clients\items\RscollectionrsVrntcdtempvaluex::class,
        ]);
    }
}

/**
 * RsVrntcdtempvaluex
 */
class RsVrntcdtempvaluex extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $CHARVALREF = null;
    /** @var int|float|null */
    public $CHARCODEREF = null;
    public ?string $CHARVALCODE = null;
    public ?string $CHARABBREV = null;
    /** @var int|float|null */
    public $VALCHECKED = null;
}

/**
 * ItemAlternatives
 */
class ItemAlternatives extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $MAINITEMREF = null;
    /** @var int|float|null */
    public $SUBITEMREF = null;
    /** @var int|float|null */
    public $LINE_NO = null;
    /** @var int|float|null */
    public $PRIORITY = null;
    /** @var int|float|null */
    public $CONV_FACT1 = null;
    /** @var int|float|null */
    public $CONV_FACT2 = null;
    /** @var int|float|null */
    public $MAX_QUANTITY = null;
    /** @var int|float|null */
    public $MIN_QUANTITY = null;
    public ?string $BEG_DATE = null;
    public ?string $END_DATE = null;
    public ?string $SUBS_CODE = null;
    public ?string $MAIN_CODE = null;
    /** @var int|float|null */
    public $MAINVRNTREF = null;
    /** @var int|float|null */
    public $SUBVRNTREF = null;
    public ?string $MAIN_VRNTCODE = null;
    public ?string $SUBS_VRNTCODE = null;
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
 * Items
 */
class Items extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $CARD_TYPE = null;
    public ?string $CODE = null;
    public ?string $NAME = null;
    public ?string $GROUP_CODE = null;
    public ?string $PRODUCER_CODE = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $CLASS_TYPE = null;
    /** @var int|float|null */
    public $USEF_PURCHASING = null;
    /** @var int|float|null */
    public $USEF_SALES = null;
    /** @var int|float|null */
    public $USEF_MM = null;
    /** @var int|float|null */
    public $VAT = null;
    public ?string $PAYMENT_CODE = null;
    /** @var int|float|null */
    public $PAYMENTREF = null;
    /** @var int|float|null */
    public $TRACK_TYPE = null;
    /** @var int|float|null */
    public $LOCATION_TRACKING = null;
    /** @var int|float|null */
    public $TOOL = null;
    /** @var int|float|null */
    public $AUTOINCSL = null;
    /** @var int|float|null */
    public $LOTS_DIVISIBLE = null;
    public ?string $DEMAND_MEET_SORT_FLD1 = null;
    public ?string $DEMAND_MEET_SORT_FLD2 = null;
    public ?string $DEMAND_MEET_SORT_FLD3 = null;
    public ?string $DEMAND_MEET_SORT_FLD4 = null;
    public ?string $DEMAND_MEET_SORT_FLD5 = null;
    /** @var int|float|null */
    public $SHELF_LIFE = null;
    /** @var int|float|null */
    public $SHELF_DATE = null;
    /** @var int|float|null */
    public $DOMINANTREFS1 = null;
    /** @var int|float|null */
    public $DOMINANTREFS2 = null;
    /** @var int|float|null */
    public $DOMINANTREFS3 = null;
    /** @var int|float|null */
    public $DOMINANTREFS4 = null;
    /** @var int|float|null */
    public $DOMINANTREFS5 = null;
    /** @var int|float|null */
    public $DOMINANTREFS6 = null;
    /** @var int|float|null */
    public $DOMINANTREFS7 = null;
    /** @var int|float|null */
    public $DOMINANTREFS8 = null;
    /** @var int|float|null */
    public $DOMINANTREFS9 = null;
    /** @var int|float|null */
    public $DOMINANTREFS10 = null;
    /** @var int|float|null */
    public $DOMINANTREFS11 = null;
    /** @var int|float|null */
    public $DOMINANTREFS12 = null;
    /** @var int|float|null */
    public $DEPREC_TYPE = null;
    /** @var int|float|null */
    public $DEPREC_RATE = null;
    /** @var int|float|null */
    public $DEPREC_DURATION = null;
    /** @var int|float|null */
    public $SALVAGE_VALUE = null;
    /** @var int|float|null */
    public $REVAL_FLAG = null;
    /** @var int|float|null */
    public $REVDEPREC_RFLAG = null;
    /** @var int|float|null */
    public $PARTIAL_DEPREC = null;
    /** @var int|float|null */
    public $DEPREC_TYPE2 = null;
    /** @var int|float|null */
    public $DEPREC_RATE2 = null;
    /** @var int|float|null */
    public $DEPREC_DURATION2 = null;
    /** @var int|float|null */
    public $REVAL_FLAG2 = null;
    /** @var int|float|null */
    public $REVDEPREC_FLAG2 = null;
    /** @var int|float|null */
    public $PARTIAL_DEPREC2 = null;
    /** @var int|float|null */
    public $APPROVED = null;
    public ?string $UNITSET_CODE = null;
    /** @var int|float|null */
    public $UNITSETREF = null;
    public ?string $QCCSET_CODE = null;
    /** @var int|float|null */
    public $QCCSETREF = null;
    /** @var int|float|null */
    public $DISTRIBUTED_AMOUNT = null;
    public ?string $UNIVERSAL_ID = null;
    /** @var int|float|null */
    public $DIST_LOT_UNITS = null;
    /** @var int|float|null */
    public $COMB_LOT_UNITS = null;
    public ?string $MAINUNIT = null;
    /** @var RscollectionrsItemfactoryxml|null */
    public $FACTORY_PARAMS = null;
    public ?string $INVENLIST = null;
    /** @var RscollectionrsIteminvenxml|null */
    public $WH_PARAMS = null;
    public ?string $INVENDEFDELLIST = null;
    /** @var RscollectionrsItemchcodesxml|null */
    public $CHARACTERISTICS = null;
    public ?string $CHARDELLIST = null;
    public ?string $VALLIST = null;
    public ?string $VALDELLIST = null;
    /** @var RscollectionrsXmldomcls|null */
    public $DOMINANT_CLASSES = null;
    public ?string $CLASDELLIST = null;
    /** @var RscollectionrsItemunitasgn|null */
    public $UNITS = null;
    public ?string $UNITDELLIST = null;
    /** @var RscollectionrsItemcmpxml|null */
    public $COMPOSITES = null;
    public ?string $CMPDELLIST = null;
    /** @var RscollectionrsGlpostxml|null */
    public $GL_LINKS = null;
    /** @var RscollectionrsItemsuppxml|null */
    public $SUPPLIERS = null;
    public ?string $SUPPDELLIST = null;
    public ?string $WSLIST = null;
    public ?string $WSTOTLIST = null;
    public ?string $SUBSLIST = null;
    public ?string $SUBSDELLIST = null;
    public ?string $BOMLIST = null;
    public ?string $BOMDELLIST = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $XCNT = null;
    public ?string $ITEXT = null;
    public ?string $IMAGE = null;
    public ?string $LANGP = null;
    /** @var int|float|null */
    public $DIST_POINT = null;
    /** @var int|float|null */
    public $CAN_USE_IN_TRANS = null;
    public ?string $ISO_NR = null;
    public ?string $GROUP_NR = null;
    public ?string $PROD_COUNTRY = null;
    /** @var int|float|null */
    public $ADD_TAX_REF = null;
    /** @var int|float|null */
    public $EXT_ACC_FLAGS = null;
    public ?string $ADD_TAX_CODE = null;
    /** @var int|float|null */
    public $MULTI_ADD_TAX = null;
    /** @var RscollectionrsAddtaxmultixml|null */
    public $ADDTAXLIST = null;
    public ?string $ADDTAXDELLIST = null;
    /** @var int|float|null */
    public $PACKET = null;
    /** @var int|float|null */
    public $SALVAGE_VAL = null;
    /** @var int|float|null */
    public $SELVAT = null;
    /** @var int|float|null */
    public $RETURNVAT = null;
    /** @var int|float|null */
    public $SELPRVAT = null;
    /** @var int|float|null */
    public $RETURNPRVAT = null;
    public ?string $LOGOID = null;
    /** @var int|float|null */
    public $LID_CONFIRMED = null;
    /** @var RscollectionrsItemqprodxml|null */
    public $QPRODS = null;
    public ?string $QPRODDELLIST = null;
    /** @var RscollectionrsItemqprodxml|null */
    public $QPRODSUBCONTS = null;
    public ?string $QPRODSUBCONTDELLIST = null;
    public ?string $GTIPCODE = null;
    public ?string $B2CCODE = null;
    /** @var int|float|null */
    public $MARKREF = null;
    public ?string $MARKCODE = null;
    /** @var int|float|null */
    public $IMG2INC = null;
    public ?string $EXPCTGNR = null;
    /** @var int|float|null */
    public $EXTCRD_FLAGS = null;
    /** @var int|float|null */
    public $MIN_ORD_AMNT = null;
    public ?string $FREIGHT_PLACE = null;
    public ?string $FREIGHT_TYPE_CODE1 = null;
    public ?string $FREIGHT_TYPE_CODE2 = null;
    public ?string $FREIGHT_TYPE_CODE3 = null;
    public ?string $FREIGHT_TYPE_CODE4 = null;
    public ?string $FREIGHT_TYPE_CODE5 = null;
    public ?string $FREIGHT_TYPE_CODE6 = null;
    public ?string $FREIGHT_TYPE_CODE7 = null;
    public ?string $FREIGHT_TYPE_CODE8 = null;
    public ?string $FREIGHT_TYPE_CODE9 = null;
    public ?string $FREIGHT_TYPE_CODE10 = null;
    /** @var int|float|null */
    public $FREIGHT_TYPE_DEF1 = null;
    /** @var int|float|null */
    public $FREIGHT_TYPE_DEF2 = null;
    /** @var int|float|null */
    public $FREIGHT_TYPE_DEF3 = null;
    /** @var int|float|null */
    public $FREIGHT_TYPE_DEF4 = null;
    /** @var int|float|null */
    public $FREIGHT_TYPE_DEF5 = null;
    /** @var int|float|null */
    public $FREIGHT_TYPE_DEF6 = null;
    /** @var int|float|null */
    public $FREIGHT_TYPE_DEF7 = null;
    /** @var int|float|null */
    public $FREIGHT_TYPE_DEF8 = null;
    /** @var int|float|null */
    public $FREIGHT_TYPE_DEF9 = null;
    /** @var int|float|null */
    public $FREIGHT_TYPE_DEF10 = null;
    /** @var int|float|null */
    public $QPRODAMNT = null;
    /** @var int|float|null */
    public $QPROD_UOM = null;
    public ?string $QPROD_UNITCODE = null;
    /** @var int|float|null */
    public $QPRODSOURCEINDEX = null;
    /** @var int|float|null */
    public $QPROD_DEPARTMENT = null;
    /** @var int|float|null */
    public $QPRODSUB_AMOUNT = null;
    /** @var int|float|null */
    public $QPRODSUB_UOM = null;
    public ?string $QPRODSUB_UNITCODE = null;
    /** @var int|float|null */
    public $QPRODSUB_SOURCEINDEX = null;
    /** @var int|float|null */
    public $QPRODSUB_DEPARTMENT = null;
    public ?string $EXPCATEGORY = null;
    public ?string $EAN_BARCODE = null;
    /** @var int|float|null */
    public $TEXTINCENG = null;
    public ?string $ITEXTENG = null;
    /** @var int|float|null */
    public $LOSTFACTOR = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $GENIUSFLDSLIST = null;
    public ?string $DEPRCLASSTYPE = null;
    /** @var int|float|null */
    public $ADD_COST = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $DEFNFLDSLIST = null;
    /** @var int|float|null */
    public $WFLOWCARDREF = null;
    public ?string $ORGLOGOID = null;
    /** @var int|float|null */
    public $CODE_CHANGED = null;
    /** @var int|float|null */
    public $AVR_WH_DURAITON = null;
    public ?string $IMAGE1 = null;
    /** @var int|float|null */
    public $IMAGE1_SIZE = null;
    public ?string $IMAGE2 = null;
    /** @var int|float|null */
    public $IMAGE2_SIZE = null;
    /** @var int|float|null */
    public $CANCONFIGURE = null;
    /** @var int|float|null */
    public $CHARSETREF = null;
    public ?string $CHARSET = null;
    public ?string $CHARSETNAME = null;
    /** @var int|float|null */
    public $VGEN_DATA_REFERENCE = null;
    /** @var RscollectionrsExclistnodexml|null */
    public $VRNTEXCEPTIONS = null;
    /** @var RscollectionrsVrntcdtemplatexm|null */
    public $VRNTCODETEMPS = null;
    /** @var RscollectionrsVrntcdtemplatexm|null */
    public $VRNTEXCPTEMPS = null;
    /** @var int|float|null */
    public $CONSCODEREF = null;
    public ?string $CONSCODE = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    public ?string $PROJECT_CODE = null;
    public ?string $AUXIL_CODE2 = null;
    public ?string $AUXIL_CODE3 = null;
    public ?string $AUXIL_CODE4 = null;
    public ?string $AUXIL_CODE5 = null;
    /** @var int|float|null */
    public $UPDATECHILDS = null;
    /** @var int|float|null */
    public $CAN_DEDUCT = null;
    /** @var int|float|null */
    public $EXPENSE = null;
    /** @var int|float|null */
    public $EXIM_TAX1 = null;
    /** @var int|float|null */
    public $EXIM_TAX2 = null;
    /** @var int|float|null */
    public $EXIM_TAX3 = null;
    /** @var int|float|null */
    public $EXIM_TAX4 = null;
    /** @var int|float|null */
    public $EXIM_TAX5 = null;
    public ?string $REYON_CODE = null;
    /** @var int|float|null */
    public $KDV_DEPT_NR = null;
    /** @var int|float|null */
    public $SCALES = null;
    /** @var int|float|null */
    public $SCALE_NR = null;
    public ?string $ORIGIN = null;
    public ?string $NAME2 = null;
    /** @var int|float|null */
    public $APP_SPE_VAT_MATRAH = null;
    public ?string $NAME3 = null;
    public ?string $NAME4 = null;
    public ?string $GLOBAL_ID = null;
    /** @var int|float|null */
    public $FLTIMAGE1 = null;
    /** @var int|float|null */
    public $FLTIMAGE2 = null;
    public ?string $DEDUCT_CODE = null;
    public ?string $DEDUCT_DEF = null;
    /** @var int|float|null */
    public $SALE_DEDUCTION_PART1 = null;
    /** @var int|float|null */
    public $SALE_DEDUCTION_PART2 = null;
    /** @var int|float|null */
    public $PURCH_DEDUCTION_PART1 = null;
    /** @var int|float|null */
    public $PURCH_DEDUCTION_PART2 = null;
    public ?string $CATEGORY_ID = null;
    public ?string $CATEGORY_NAME = null;
    public ?string $KEYWORD1 = null;
    public ?string $KEYWORD2 = null;
    public ?string $KEYWORD3 = null;
    public ?string $KEYWORD4 = null;
    public ?string $KEYWORD5 = null;
    public ?string $SUBSGOOD_CODE = null;
    /** @var int|float|null */
    public $PRODUCT_LEVEL = null;
    /** @var int|float|null */
    public $PORD_AMOUNT_TOLERANCE = null;
    /** @var int|float|null */
    public $SORD_AMOUNT_TOLERANCE = null;
    /** @var Rscollectionitemalternatives|null */
    public $ALTERNATIVES = null;
    /** @var RscollectionrsLabelxml|null */
    public $LABEL_LIST = null;
    public ?string $CPA_CODE = null;
    /** @var int|float|null */
    public $PUBLICCOUNTRYREF = null;
    public ?string $PUBLIC_COUNTRY_CODE = null;
    public ?string $PUBLIC_COUNTRY_NAME = null;
    public ?string $FA_USEFUL_LIFE_CODE1 = null;
    public ?string $FA_USEFUL_LIFE_CODE2 = null;
    /** @var int|float|null */
    public $MOLD = null;
    /** @var int|float|null */
    public $MOLD_LIFETRACKTYPE = null;
    /** @var int|float|null */
    public $MOLD_USAGELIFE = null;
    /** @var int|float|null */
    public $MOLD_FACTOR = null;
    /** @var int|float|null */
    public $MOLD_MAINTNUMBER = null;
    /** @var int|float|null */
    public $MOLD_MAINTLIFETYPE = null;
    /** @var int|float|null */
    public $MOLD_MAINTLIFE = null;
    /** @var int|float|null */
    public $MOLD_LIFEASRATIO = null;
    /** @var int|float|null */
    public $MOLD_MAINTTYPE = null;
    public ?string $MOLD_MAINTBEGDATE = null;
    /** @var int|float|null */
    public $MOLD_MAINTPERIOD = null;
    /** @var int|float|null */
    public $MOLD_MAINTPERUNIT = null;
    /** @var int|float|null */
    public $OBTAIN_TYPE = null;
    /** @var int|float|null */
    public $GAIN_TYPE = null;
    public ?string $FORE_CAST_CODE = null;
    /** @var int|float|null */
    public $SALES_LIMIT_QUANTITY = null;
    /** @var int|float|null */
    public $NO_DISCOUNT = null;
    /** @var int|float|null */
    public $LEVEL_CONTROL = null;
    public ?string $GUID = null;
    public ?string $TSENR = null;
    public ?string $PAYERNAME = null;
    public ?string $PAYERSUBTITLE = null;
    public ?string $PAYERBARCODE = null;
    /** @var int|float|null */
    public $PAYERPURCHPRICE = null;
    /** @var int|float|null */
    public $PAYERSALESPRICE = null;
    public ?string $PAYERID = null;
    /** @var int|float|null */
    public $PAYERACTIVE = null;
    public ?string $PURCH_DEDUCT_CODE = null;
    /** @var int|float|null */
    public $EXIMREGTYPREF = null;
    /** @var int|float|null */
    public $PROFITMARGINRATE = null;
    public ?string $ORDCMPRICETYPECODE = null;
    /** @var int|float|null */
    public $PURCHDISPRATETOT = null;
    /** @var int|float|null */
    public $SALESDISPRATETOT = null;
    /** @var int|float|null */
    public $ADDTAXPURCHBRWS = null;
    /** @var int|float|null */
    public $ADDTAXSALESBRWS = null;
    /** @var int|float|null */
    public $DRAFTOFFERBRWS = null;
    /** @var int|float|null */
    public $PRODCLREF = null;
    /** @var int|float|null */
    public $TIBBICIHAZ = null;
    public ?string $GTIN_UNO = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'FACTORY_PARAMS' => \LogoObjects\Clients\items\RscollectionrsItemfactoryxml::class,
            'WH_PARAMS' => \LogoObjects\Clients\items\RscollectionrsIteminvenxml::class,
            'CHARACTERISTICS' => \LogoObjects\Clients\items\RscollectionrsItemchcodesxml::class,
            'DOMINANT_CLASSES' => \LogoObjects\Clients\items\RscollectionrsXmldomcls::class,
            'UNITS' => \LogoObjects\Clients\items\RscollectionrsItemunitasgn::class,
            'COMPOSITES' => \LogoObjects\Clients\items\RscollectionrsItemcmpxml::class,
            'GL_LINKS' => \LogoObjects\Clients\items\RscollectionrsGlpostxml::class,
            'SUPPLIERS' => \LogoObjects\Clients\items\RscollectionrsItemsuppxml::class,
            'ADDTAXLIST' => \LogoObjects\Clients\items\RscollectionrsAddtaxmultixml::class,
            'QPRODS' => \LogoObjects\Clients\items\RscollectionrsItemqprodxml::class,
            'QPRODSUBCONTS' => \LogoObjects\Clients\items\RscollectionrsItemqprodxml::class,
            'GENIUSFLDSLIST' => \LogoObjects\Clients\items\Rscollectionextendedfielddefinitions::class,
            'DEFNFLDSLIST' => \LogoObjects\Clients\items\Rscollectionextendedfielddefinitions::class,
            'VRNTEXCEPTIONS' => \LogoObjects\Clients\items\RscollectionrsExclistnodexml::class,
            'VRNTCODETEMPS' => \LogoObjects\Clients\items\RscollectionrsVrntcdtemplatexm::class,
            'VRNTEXCPTEMPS' => \LogoObjects\Clients\items\RscollectionrsVrntcdtemplatexm::class,
            'ALTERNATIVES' => \LogoObjects\Clients\items\Rscollectionitemalternatives::class,
            'LABEL_LIST' => \LogoObjects\Clients\items\RscollectionrsLabelxml::class,
        ]);
    }
}

/**
 * ItemsQueryOptions
 */
class ItemsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ItemsSortSpec|null */
    public $sort = null;
}

/**
 * ItemsSearchCriteria
 */
class ItemsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $recordStatus = null;
    /** @var mixed */
    public $cardType = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $name = null;
    /** @var mixed */
    public $groupCode = null;
    /** @var mixed */
    public $producerCode = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $classType = null;
    /** @var mixed */
    public $usefPurchasing = null;
    /** @var mixed */
    public $usefSales = null;
    /** @var mixed */
    public $usefMm = null;
    /** @var mixed */
    public $vat = null;
    /** @var mixed */
    public $paymentCode = null;
    /** @var mixed */
    public $paymentref = null;
    /** @var mixed */
    public $trackType = null;
    /** @var mixed */
    public $locationTracking = null;
    /** @var mixed */
    public $tool = null;
    /** @var mixed */
    public $autoincsl = null;
    /** @var mixed */
    public $lotsDivisible = null;
    /** @var mixed */
    public $demandMeetSortFld1 = null;
    /** @var mixed */
    public $demandMeetSortFld2 = null;
    /** @var mixed */
    public $demandMeetSortFld3 = null;
    /** @var mixed */
    public $demandMeetSortFld4 = null;
    /** @var mixed */
    public $demandMeetSortFld5 = null;
    /** @var mixed */
    public $shelfLife = null;
    /** @var mixed */
    public $shelfDate = null;
    /** @var mixed */
    public $dominantrefs1 = null;
    /** @var mixed */
    public $dominantrefs2 = null;
    /** @var mixed */
    public $dominantrefs3 = null;
    /** @var mixed */
    public $dominantrefs4 = null;
    /** @var mixed */
    public $dominantrefs5 = null;
    /** @var mixed */
    public $dominantrefs6 = null;
    /** @var mixed */
    public $dominantrefs7 = null;
    /** @var mixed */
    public $dominantrefs8 = null;
    /** @var mixed */
    public $dominantrefs9 = null;
    /** @var mixed */
    public $dominantrefs10 = null;
    /** @var mixed */
    public $dominantrefs11 = null;
    /** @var mixed */
    public $dominantrefs12 = null;
    /** @var mixed */
    public $imageinc = null;
    /** @var mixed */
    public $textinc = null;
    /** @var mixed */
    public $deprecType = null;
    /** @var mixed */
    public $deprecRate = null;
    /** @var mixed */
    public $deprecDuration = null;
    /** @var mixed */
    public $salvageValue = null;
    /** @var mixed */
    public $revalFlag = null;
    /** @var mixed */
    public $revdeprecRflag = null;
    /** @var mixed */
    public $partialDeprec = null;
    /** @var mixed */
    public $deprecType2 = null;
    /** @var mixed */
    public $deprecRate2 = null;
    /** @var mixed */
    public $deprecDuration2 = null;
    /** @var mixed */
    public $revalFlag2 = null;
    /** @var mixed */
    public $revdeprecFlag2 = null;
    /** @var mixed */
    public $partialDeprec2 = null;
    /** @var mixed */
    public $approved = null;
    /** @var mixed */
    public $unitsetCode = null;
    /** @var mixed */
    public $unitsetref = null;
    /** @var mixed */
    public $qccsetCode = null;
    /** @var mixed */
    public $qccsetref = null;
    /** @var mixed */
    public $distributedAmount = null;
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
    public $universalId = null;
    /** @var mixed */
    public $distLotUnits = null;
    /** @var mixed */
    public $combLotUnits = null;
    /** @var mixed */
    public $mainunit = null;
    /** @var mixed */
    public $factoryParams = null;
    /** @var mixed */
    public $invenlist = null;
    /** @var mixed */
    public $whParams = null;
    /** @var mixed */
    public $invendefdellist = null;
    /** @var mixed */
    public $characteristics = null;
    /** @var mixed */
    public $chardellist = null;
    /** @var mixed */
    public $vallist = null;
    /** @var mixed */
    public $valdellist = null;
    /** @var mixed */
    public $dominantClasses = null;
    /** @var mixed */
    public $clasdellist = null;
    /** @var mixed */
    public $units = null;
    /** @var mixed */
    public $unitdellist = null;
    /** @var mixed */
    public $composites = null;
    /** @var mixed */
    public $cmpdellist = null;
    /** @var mixed */
    public $glLinks = null;
    /** @var mixed */
    public $suppliers = null;
    /** @var mixed */
    public $suppdellist = null;
    /** @var mixed */
    public $wslist = null;
    /** @var mixed */
    public $wstotlist = null;
    /** @var mixed */
    public $subslist = null;
    /** @var mixed */
    public $subsdellist = null;
    /** @var mixed */
    public $bomlist = null;
    /** @var mixed */
    public $bomdellist = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $xcnt = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $image = null;
    /** @var mixed */
    public $langp = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $distPoint = null;
    /** @var mixed */
    public $canUseInTrans = null;
    /** @var mixed */
    public $isoNr = null;
    /** @var mixed */
    public $groupNr = null;
    /** @var mixed */
    public $prodCountry = null;
    /** @var mixed */
    public $addTaxRef = null;
    /** @var mixed */
    public $extAccFlags = null;
    /** @var mixed */
    public $addTaxCode = null;
    /** @var mixed */
    public $multiAddTax = null;
    /** @var mixed */
    public $addtaxlist = null;
    /** @var mixed */
    public $addtaxdellist = null;
    /** @var mixed */
    public $packet = null;
    /** @var mixed */
    public $salvageVal = null;
    /** @var mixed */
    public $selvat = null;
    /** @var mixed */
    public $returnvat = null;
    /** @var mixed */
    public $selprvat = null;
    /** @var mixed */
    public $returnprvat = null;
    /** @var mixed */
    public $logoid = null;
    /** @var mixed */
    public $lidConfirmed = null;
    /** @var mixed */
    public $qprods = null;
    /** @var mixed */
    public $qproddellist = null;
    /** @var mixed */
    public $qprodsubconts = null;
    /** @var mixed */
    public $qprodsubcontdellist = null;
    /** @var mixed */
    public $gtipcode = null;
    /** @var mixed */
    public $b2ccode = null;
    /** @var mixed */
    public $markref = null;
    /** @var mixed */
    public $markcode = null;
    /** @var mixed */
    public $img2inc = null;
    /** @var mixed */
    public $expctgnr = null;
    /** @var mixed */
    public $extcrdFlags = null;
    /** @var mixed */
    public $minOrdAmnt = null;
    /** @var mixed */
    public $freightPlace = null;
    /** @var mixed */
    public $freightTypeCode1 = null;
    /** @var mixed */
    public $freightTypeCode2 = null;
    /** @var mixed */
    public $freightTypeCode3 = null;
    /** @var mixed */
    public $freightTypeCode4 = null;
    /** @var mixed */
    public $freightTypeCode5 = null;
    /** @var mixed */
    public $freightTypeCode6 = null;
    /** @var mixed */
    public $freightTypeCode7 = null;
    /** @var mixed */
    public $freightTypeCode8 = null;
    /** @var mixed */
    public $freightTypeCode9 = null;
    /** @var mixed */
    public $freightTypeCode10 = null;
    /** @var mixed */
    public $freightTypeDef1 = null;
    /** @var mixed */
    public $freightTypeDef2 = null;
    /** @var mixed */
    public $freightTypeDef3 = null;
    /** @var mixed */
    public $freightTypeDef4 = null;
    /** @var mixed */
    public $freightTypeDef5 = null;
    /** @var mixed */
    public $freightTypeDef6 = null;
    /** @var mixed */
    public $freightTypeDef7 = null;
    /** @var mixed */
    public $freightTypeDef8 = null;
    /** @var mixed */
    public $freightTypeDef9 = null;
    /** @var mixed */
    public $freightTypeDef10 = null;
    /** @var mixed */
    public $qprodamnt = null;
    /** @var mixed */
    public $qprodUom = null;
    /** @var mixed */
    public $qprodUnitcode = null;
    /** @var mixed */
    public $qprodsourceindex = null;
    /** @var mixed */
    public $qprodDepartment = null;
    /** @var mixed */
    public $qprodsubAmount = null;
    /** @var mixed */
    public $qprodsubUom = null;
    /** @var mixed */
    public $qprodsubUnitcode = null;
    /** @var mixed */
    public $qprodsubSourceindex = null;
    /** @var mixed */
    public $qprodsubDepartment = null;
    /** @var mixed */
    public $expcategory = null;
    /** @var mixed */
    public $eanBarcode = null;
    /** @var mixed */
    public $textinceng = null;
    /** @var mixed */
    public $itexteng = null;
    /** @var mixed */
    public $lostfactor = null;
    /** @var mixed */
    public $geniusfldslist = null;
    /** @var mixed */
    public $deprclasstype = null;
    /** @var mixed */
    public $addCost = null;
    /** @var mixed */
    public $defnfldslist = null;
    /** @var mixed */
    public $wflowcardref = null;
    /** @var mixed */
    public $orglogoid = null;
    /** @var mixed */
    public $codeChanged = null;
    /** @var mixed */
    public $avrWhDuraiton = null;
    /** @var mixed */
    public $image1 = null;
    /** @var mixed */
    public $image1Size = null;
    /** @var mixed */
    public $image2 = null;
    /** @var mixed */
    public $image2Size = null;
    /** @var mixed */
    public $canconfigure = null;
    /** @var mixed */
    public $charsetref = null;
    /** @var mixed */
    public $charset = null;
    /** @var mixed */
    public $charsetname = null;
    /** @var mixed */
    public $vgenDataReference = null;
    /** @var mixed */
    public $vrntexceptions = null;
    /** @var mixed */
    public $vrntcodetemps = null;
    /** @var mixed */
    public $vrntexcptemps = null;
    /** @var mixed */
    public $conscoderef = null;
    /** @var mixed */
    public $conscode = null;
    /** @var mixed */
    public $projectref = null;
    /** @var mixed */
    public $projectCode = null;
    /** @var mixed */
    public $auxilCode2 = null;
    /** @var mixed */
    public $auxilCode3 = null;
    /** @var mixed */
    public $auxilCode4 = null;
    /** @var mixed */
    public $auxilCode5 = null;
    /** @var mixed */
    public $updatechilds = null;
    /** @var mixed */
    public $canDeduct = null;
    /** @var mixed */
    public $expense = null;
    /** @var mixed */
    public $eximTax1 = null;
    /** @var mixed */
    public $eximTax2 = null;
    /** @var mixed */
    public $eximTax3 = null;
    /** @var mixed */
    public $eximTax4 = null;
    /** @var mixed */
    public $eximTax5 = null;
    /** @var mixed */
    public $reyonCode = null;
    /** @var mixed */
    public $kdvDeptNr = null;
    /** @var mixed */
    public $scales = null;
    /** @var mixed */
    public $scaleNr = null;
    /** @var mixed */
    public $origin = null;
    /** @var mixed */
    public $name2 = null;
    /** @var mixed */
    public $appSpeVatMatrah = null;
    /** @var mixed */
    public $name3 = null;
    /** @var mixed */
    public $name4 = null;
    /** @var mixed */
    public $globalId = null;
    /** @var mixed */
    public $fltimage1 = null;
    /** @var mixed */
    public $fltimage2 = null;
    /** @var mixed */
    public $deductCode = null;
    /** @var mixed */
    public $deductDef = null;
    /** @var mixed */
    public $saleDeductionPart1 = null;
    /** @var mixed */
    public $saleDeductionPart2 = null;
    /** @var mixed */
    public $purchDeductionPart1 = null;
    /** @var mixed */
    public $purchDeductionPart2 = null;
    /** @var mixed */
    public $categoryId = null;
    /** @var mixed */
    public $categoryName = null;
    /** @var mixed */
    public $keyword1 = null;
    /** @var mixed */
    public $keyword2 = null;
    /** @var mixed */
    public $keyword3 = null;
    /** @var mixed */
    public $keyword4 = null;
    /** @var mixed */
    public $keyword5 = null;
    /** @var mixed */
    public $subsgoodCode = null;
    /** @var mixed */
    public $productLevel = null;
    /** @var mixed */
    public $pordAmountTolerance = null;
    /** @var mixed */
    public $sordAmountTolerance = null;
    /** @var mixed */
    public $alternatives = null;
    /** @var mixed */
    public $labelList = null;
    /** @var mixed */
    public $cpaCode = null;
    /** @var mixed */
    public $publiccountryref = null;
    /** @var mixed */
    public $publicCountryCode = null;
    /** @var mixed */
    public $publicCountryName = null;
    /** @var mixed */
    public $faUsefulLifeCode1 = null;
    /** @var mixed */
    public $faUsefulLifeCode2 = null;
    /** @var mixed */
    public $mold = null;
    /** @var mixed */
    public $moldLifetracktype = null;
    /** @var mixed */
    public $moldUsagelife = null;
    /** @var mixed */
    public $moldFactor = null;
    /** @var mixed */
    public $moldMaintnumber = null;
    /** @var mixed */
    public $moldMaintlifetype = null;
    /** @var mixed */
    public $moldMaintlife = null;
    /** @var mixed */
    public $moldLifeasratio = null;
    /** @var mixed */
    public $moldMainttype = null;
    /** @var mixed */
    public $moldMaintbegdate = null;
    /** @var mixed */
    public $moldMaintperiod = null;
    /** @var mixed */
    public $moldMaintperunit = null;
    /** @var mixed */
    public $obtainType = null;
    /** @var mixed */
    public $gainType = null;
    /** @var mixed */
    public $foreCastCode = null;
    /** @var mixed */
    public $salesLimitQuantity = null;
    /** @var mixed */
    public $noDiscount = null;
    /** @var mixed */
    public $levelControl = null;
    /** @var mixed */
    public $guid = null;
    /** @var mixed */
    public $tsenr = null;
    /** @var mixed */
    public $payername = null;
    /** @var mixed */
    public $payersubtitle = null;
    /** @var mixed */
    public $payerbarcode = null;
    /** @var mixed */
    public $payerpurchprice = null;
    /** @var mixed */
    public $payersalesprice = null;
    /** @var mixed */
    public $payerid = null;
    /** @var mixed */
    public $payeractive = null;
    /** @var mixed */
    public $purchDeductCode = null;
    /** @var mixed */
    public $eximregtypref = null;
    /** @var mixed */
    public $profitmarginrate = null;
    /** @var mixed */
    public $ordcmpricetypecode = null;
    /** @var mixed */
    public $purchdispratetot = null;
    /** @var mixed */
    public $salesdispratetot = null;
    /** @var mixed */
    public $addtaxpurchbrws = null;
    /** @var mixed */
    public $addtaxsalesbrws = null;
    /** @var mixed */
    public $draftofferbrws = null;
    /** @var mixed */
    public $prodclref = null;
    /** @var mixed */
    public $tibbicihaz = null;
    /** @var mixed */
    public $gtinUno = null;
}

/**
 * ItemsAnalytics
 */
class ItemsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
