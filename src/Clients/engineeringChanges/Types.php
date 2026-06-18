<?php

declare(strict_types=1);

namespace LogoObjects\Clients\engineeringChanges;

/**
 * RscollectionrsBomlinexml
 */
class RscollectionrsBomlinexml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\engineeringChanges\RsBomlinexml::class],
        ]);
    }
}

/**
 * RscollectionrsBomdetlistxml
 */
class RscollectionrsBomdetlistxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\engineeringChanges\RsBomdetlistxml::class],
        ]);
    }
}

/**
 * RscollectionrsBomlnfrmllistxml
 */
class RscollectionrsBomlnfrmllistxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\engineeringChanges\RsBomlnfrmllistxml::class],
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
            'items' => [\LogoObjects\Clients\engineeringChanges\ExtendedFieldDefinitions::class],
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
 * RsBomlinexml
 */
class RsBomlinexml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $BOMREVREF = null;
    /** @var int|float|null */
    public $LINE_TYPE = null;
    /** @var int|float|null */
    public $LINE_NO = null;
    /** @var int|float|null */
    public $OUTITEMREF = null;
    /** @var int|float|null */
    public $ITEMREF = null;
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
    public $AMOUNT = null;
    /** @var int|float|null */
    public $SCRAP_FACT = null;
    /** @var int|float|null */
    public $SCRAP_CALC = null;
    /** @var int|float|null */
    public $SCALABLE = null;
    /** @var int|float|null */
    public $ALT_ITEM_USE = null;
    /** @var int|float|null */
    public $TEMP_IN_USE = null;
    /** @var int|float|null */
    public $NEXTLEVELBOMREF = null;
    public ?string $AUXIL_CODE = null;
    public ?string $BOM_LINE_EXP = null;
    /** @var int|float|null */
    public $INVEN_NO = null;
    /** @var int|float|null */
    public $ENGINEERING = null;
    /** @var int|float|null */
    public $PRODUCTION = null;
    /** @var int|float|null */
    public $COST = null;
    /** @var int|float|null */
    public $COST_RATE = null;
    public ?string $FORMULA = null;
    /** @var int|float|null */
    public $WF_STATUS = null;
    /** @var int|float|null */
    public $BOMMASTERREF = null;
    /** @var int|float|null */
    public $LINE_CLS_TYPE = null;
    /** @var int|float|null */
    public $DET_LINE = null;
    /** @var int|float|null */
    public $PREVLINEREF = null;
    /** @var int|float|null */
    public $ROUTLINEREF = null;
    /** @var int|float|null */
    public $OPERATIONREF = null;
    /** @var int|float|null */
    public $FORMULAITEMREF = null;
    /** @var int|float|null */
    public $NEXTLEVREVREF = null;
    /** @var int|float|null */
    public $EFFECT_OP_TIME = null;
    /** @var int|float|null */
    public $DISTTEMPREF = null;
    /** @var int|float|null */
    public $BY_DEFAULT_EXISTS = null;
    public ?string $ITEM_CODE = null;
    public ?string $ITEM_NAME = null;
    /** @var int|float|null */
    public $VARIANTREF = null;
    public ?string $VARIANTCODE = null;
    public ?string $VARIANTNAME = null;
    /** @var int|float|null */
    public $CANCONFIG = null;
    public ?string $VCHARLIST = null;
    public ?string $UNIT_SET_CODE = null;
    public ?string $UNIT_CODE = null;
    public ?string $BOM_CODE = null;
    public ?string $BOM_NAME = null;
    /** @var int|float|null */
    public $BOM_TYPE = null;
    /** @var int|float|null */
    public $BOM_TYPE_NEXT_LEVEL = null;
    public ?string $OUT_ITEM_CODE = null;
    public ?string $OUT_ITEM_NAME = null;
    public ?string $ASGN_LIST = null;
    public ?string $ASGNDELLIST = null;
    /** @var RscollectionrsBomdetlistxml|null */
    public $DET_LIST = null;
    public ?string $DETDELLIST = null;
    /** @var int|float|null */
    public $COASGNREF = null;
    public ?string $FORMULA_ITEM_CODE = null;
    public ?string $FORMULA_ITEM_NAME = null;
    public ?string $OP_CODE = null;
    public ?string $OP_NAME = null;
    public ?string $REV_CODE = null;
    public ?string $REV_NAME = null;
    /** @var int|float|null */
    public $FORMULA_ERR = null;
    /** @var int|float|null */
    public $OPTIONAL = null;
    /** @var int|float|null */
    public $GROSS_U_INFO1 = null;
    /** @var int|float|null */
    public $GROSS_U_INFO2 = null;
    public ?string $PRODUCER_CODE = null;
    /** @var int|float|null */
    public $DEF_COST_TYPE = null;
    /** @var int|float|null */
    public $OVERLAP_WITH = null;
    /** @var int|float|null */
    public $OVERLAP_METHOD = null;
    /** @var int|float|null */
    public $OVERLAP_TYPE = null;
    /** @var int|float|null */
    public $OVERLAP_VALUE = null;
    /** @var int|float|null */
    public $OVERLAP_UNIT = null;
    /** @var RscollectionrsBomlnfrmllistxml|null */
    public $VARIANT_FORMULA_LIST = null;
    /** @var RscollectionrsBomlnfrmllistxml|null */
    public $VARIANT_CONDITION_LIST = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $DEFNFLDSLIST = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DET_LIST' => \LogoObjects\Clients\engineeringChanges\RscollectionrsBomdetlistxml::class,
            'VARIANT_FORMULA_LIST' => \LogoObjects\Clients\engineeringChanges\RscollectionrsBomlnfrmllistxml::class,
            'VARIANT_CONDITION_LIST' => \LogoObjects\Clients\engineeringChanges\RscollectionrsBomlnfrmllistxml::class,
            'DEFNFLDSLIST' => \LogoObjects\Clients\engineeringChanges\Rscollectionextendedfielddefinitions::class,
        ]);
    }
}

/**
 * RsBomdetlistxml
 */
class RsBomdetlistxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $BOMREVREF = null;
    /** @var int|float|null */
    public $LINE_TYPE = null;
    /** @var int|float|null */
    public $LINE_NO = null;
    /** @var int|float|null */
    public $OUTITEMREF = null;
    /** @var int|float|null */
    public $ITEMREF = null;
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
    public $AMOUNT = null;
    /** @var int|float|null */
    public $SCRAP_FACT = null;
    /** @var int|float|null */
    public $SCRAP_CALC = null;
    /** @var int|float|null */
    public $SCALABLE = null;
    /** @var int|float|null */
    public $ALT_ITEM_USE = null;
    /** @var int|float|null */
    public $TEMP_IN_USE = null;
    /** @var int|float|null */
    public $NEXTLEVELBOMREF = null;
    public ?string $AUXIL_CODE = null;
    public ?string $BOM_LINE_EXP = null;
    /** @var int|float|null */
    public $INVEN_NO = null;
    /** @var int|float|null */
    public $ENGINEERING = null;
    /** @var int|float|null */
    public $PRODUCTION = null;
    /** @var int|float|null */
    public $COST = null;
    /** @var int|float|null */
    public $COST_RATE = null;
    public ?string $FORMULA = null;
    /** @var int|float|null */
    public $WF_STATUS = null;
    /** @var int|float|null */
    public $BOMMASTERREF = null;
    /** @var int|float|null */
    public $LINE_CLST_YPE = null;
    /** @var int|float|null */
    public $DET_LINE = null;
    /** @var int|float|null */
    public $PREVLINEREF = null;
    /** @var int|float|null */
    public $ROUTLINEREF = null;
    /** @var int|float|null */
    public $OPERATIONREF = null;
    /** @var int|float|null */
    public $FORMULAITEMREF = null;
    /** @var int|float|null */
    public $NEXTLEVREVREF = null;
    /** @var int|float|null */
    public $EFFECT_OP_TIME = null;
    /** @var int|float|null */
    public $DISTTEMPREF = null;
    /** @var int|float|null */
    public $BY_DEFAULT_EXISTS = null;
    public ?string $ITEM_CODE = null;
    public ?string $ITEM_NAME = null;
    public ?string $UNIT_SET_CODE = null;
    public ?string $UNIT_CODE = null;
    public ?string $BOM_CODE = null;
    public ?string $BOM_NAME = null;
    public ?string $OUT_ITEM_CODE = null;
    public ?string $OUT_ITEM_NAME = null;
    public ?string $ASGN_LIST = null;
    public ?string $ASGNDELLIST = null;
    public ?string $DET_LIST = null;
    public ?string $DETDELLIST = null;
    /** @var int|float|null */
    public $COASGNREF = null;
    public ?string $FORMULA_ITEM_CODE = null;
    public ?string $FORMULA_ITEM_NAME = null;
    public ?string $OP_CODE = null;
    public ?string $OP_NAME = null;
    public ?string $REV_CODE = null;
    public ?string $REV_NAME = null;
    /** @var int|float|null */
    public $FORMULA_ERR = null;
    /** @var int|float|null */
    public $OPTIONAL = null;
    /** @var int|float|null */
    public $DEF_COST_TYPE = null;
}

/**
 * RsBomlnfrmllistxml
 */
class RsBomlnfrmllistxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $BOMLREF = null;
    /** @var int|float|null */
    public $TYP = null;
    /** @var int|float|null */
    public $LINENR = null;
    /** @var int|float|null */
    public $MAINITEMREF = null;
    /** @var int|float|null */
    public $MAINCHARREF = null;
    /** @var int|float|null */
    public $OPERATOR = null;
    /** @var int|float|null */
    public $ASGTYP = null;
    /** @var int|float|null */
    public $CARDREF = null;
    /** @var int|float|null */
    public $LOGICOP = null;
    /** @var int|float|null */
    public $ISITEMREFCBOML = null;
    /** @var int|float|null */
    public $MAINVALREF = null;
    public ?string $MAIN_ITEM_CODE = null;
    public ?string $MAIN_CHAR_CODE = null;
    public ?string $CARD_CODE = null;
    public ?string $CHARC = null;
    public ?string $MAINVALC = null;
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
 * EngineeringChanges
 */
class EngineeringChanges extends \LogoObjects\Types\BaseEntity
{
    public ?string $FICHENO = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    public ?string $ARP_CODE = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $APPSTATUS = null;
    public ?string $REASON = null;
    /** @var int|float|null */
    public $BOMMASTERREF = null;
    /** @var int|float|null */
    public $OLDREVREF = null;
    /** @var int|float|null */
    public $NEWREVREF = null;
    /** @var int|float|null */
    public $METHOD = null;
    public ?string $DATEFROM = null;
    public ?string $SERILOTFROM = null;
    /** @var int|float|null */
    public $BOMLINEREF = null;
    /** @var int|float|null */
    public $ITEMREF = null;
    public ?string $VALIDDATE = null;
    /** @var int|float|null */
    public $VALIDSTATUS = null;
    /** @var int|float|null */
    public $APPROVED = null;
    /** @var int|float|null */
    public $ACTIVE = null;
    /** @var int|float|null */
    public $MASTER_INTERNAL_REFERENCE = null;
    public ?string $MASTER_CODE = null;
    public ?string $MASTER_NAME = null;
    /** @var int|float|null */
    public $MASTER_TYPE = null;
    /** @var int|float|null */
    public $MASTER_VALIDREVREF = null;
    public ?string $MASTER_VALID_REV_CODE = null;
    /** @var int|float|null */
    public $MASTER_MAINPRODREF = null;
    /** @var int|float|null */
    public $MASTER_APPROVED = null;
    /** @var int|float|null */
    public $MASTER_ACTIVE = null;
    /** @var int|float|null */
    public $MASTER_DEMONTAJ = null;
    public ?string $MASTER_AUXIL_CODE = null;
    public ?string $MASTER_AUXIL_CODE2 = null;
    public ?string $MASTER_AUTH_CODE = null;
    /** @var int|float|null */
    public $MASTER_TEXTINC = null;
    /** @var int|float|null */
    public $MASTER_DATA_SITEID = null;
    /** @var int|float|null */
    public $MASTER_XML_ATTRIBUTE = null;
    /** @var int|float|null */
    public $MASTER_DATA_REFERENCE = null;
    /** @var int|float|null */
    public $MASTER_WFSTATUS = null;
    /** @var int|float|null */
    public $MASTER_ROUTINGREF = null;
    /** @var int|float|null */
    public $MASTER_PRODUCTLINEREF = null;
    /** @var int|float|null */
    public $MASTER_PRINTCNT = null;
    public ?string $MASTER_PRINT_DATE = null;
    /** @var int|float|null */
    public $REV_INTERNAL_REFERENCE = null;
    public ?string $REV_CODE = null;
    public ?string $REV_NAME = null;
    /** @var int|float|null */
    public $REV_TYPE = null;
    /** @var int|float|null */
    public $REV_ACTIVE = null;
    /** @var int|float|null */
    public $REV_BOMMASTERREF = null;
    /** @var int|float|null */
    public $REV_ROUTINGREF = null;
    /** @var int|float|null */
    public $REV_ENGCHGREF = null;
    public ?string $REV_REVDATE = null;
    /** @var int|float|null */
    public $REV_DATA_SITEID = null;
    /** @var int|float|null */
    public $REV_XML_ATTRIBUTE = null;
    /** @var int|float|null */
    public $REV_DATA_REFERENCE = null;
    /** @var int|float|null */
    public $REV_WFSTATUS = null;
    /** @var int|float|null */
    public $REV_QTYDEPTTIME = null;
    /** @var int|float|null */
    public $REV_QTYUNDEPTTIME = null;
    public ?string $REV_STDOVHDFORMULA = null;
    public ?string $REV_STDOVHDRPFORMULA = null;
    /** @var int|float|null */
    public $REV_QTYDEPDURATION = null;
    /** @var int|float|null */
    public $REV_QTYINDEPDURATION = null;
    /** @var int|float|null */
    public $REV_OVERLAPTYPE = null;
    /** @var int|float|null */
    public $REV_OVERLAPAMNT = null;
    /** @var int|float|null */
    public $REV_OVERLAPPERC = null;
    public ?string $REV_STDOVHDFORMULA2 = null;
    public ?string $REV_STDOVHDRPFORMULA2 = null;
    public ?string $REV_STDOVHDFORMULA3 = null;
    public ?string $REV_STDOVHDRPFORMULA3 = null;
    public ?string $REV_STDOVHDFORMULA4 = null;
    public ?string $REV_STDOVHDRPFORMULA4 = null;
    public ?string $REV_STDOVHDFORMULA5 = null;
    public ?string $REV_STDOVHDRPFORMULA5 = null;
    public ?string $REV_STDOVHDFORMULA6 = null;
    public ?string $REV_STDOVHDRPFORMULA6 = null;
    public ?string $REV_STDOVHDFORMULA7 = null;
    public ?string $REV_STDOVHDRPFORMULA7 = null;
    public ?string $REV_STDOVHDFORMULA8 = null;
    public ?string $REV_STDOVHDRPFORMULA8 = null;
    public ?string $REV_STDOVHDFORMULA9 = null;
    public ?string $REV_STDOVHDRPFORMULA9 = null;
    public ?string $REV_STDOVHDFORMULA10 = null;
    public ?string $REV_STDOVHDRPFORMULA10 = null;
    /** @var int|float|null */
    public $REV_PRINT_CNT = null;
    public ?string $REV_PRINT_DATE = null;
    /** @var int|float|null */
    public $UPDATED = null;
    /** @var int|float|null */
    public $REVUPDATED = null;
    /** @var int|float|null */
    public $SAVENEWREV = null;
    public ?string $OLDREVNAME = null;
    public ?string $OLDREVCODE = null;
    /** @var RscollectionrsBomlinexml|null */
    public $LINELIST = null;
    public ?string $DELLINELIST = null;
    public ?string $MPCODE = null;
    public ?string $MPNAME = null;
    public ?string $ROUTCODE = null;
    public ?string $ROUTNAME = null;
    /** @var int|float|null */
    public $WARNACTIVE = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    public ?string $FLDALS = null;
    public ?string $XBUFS = null;
    public ?string $PARAMLIST = null;
    public ?string $PARAMDELLIST = null;
    public ?string $PRODUCTLINECODE = null;
    /** @var int|float|null */
    public $MAINITEMTYPE = null;
    /** @var int|float|null */
    public $CANCONFIG = null;
    public ?string $ITEMCODE = null;
    public ?string $ITEMNAME = null;
    public ?string $DOCALS = null;
    /** @var int|float|null */
    public $FCNOCHANGED = null;
    /** @var int|float|null */
    public $REV_WITHOUT_ROUTING = null;
    /** @var int|float|null */
    public $REV_USE_DEPT_TIME_FOR_PRD = null;
    /** @var int|float|null */
    public $REV_PEG_TYPE = null;
    public ?string $REV_PEG_GUID = null;
    public ?string $REV_GUID = null;
    /** @var int|float|null */
    public $REV_USE_WS_FOR_PRD = null;
    /** @var int|float|null */
    public $REV_WS_TYPE = null;
    /** @var int|float|null */
    public $REV_WSREF = null;
    public ?string $REV_WSCODE = null;
    /** @var int|float|null */
    public $REV_OPREQREF = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'LINELIST' => \LogoObjects\Clients\engineeringChanges\RscollectionrsBomlinexml::class,
        ]);
    }
}

/**
 * EngineeringChangesQueryOptions
 */
class EngineeringChangesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var EngineeringChangesSortSpec|null */
    public $sort = null;
}

/**
 * EngineeringChangesSearchCriteria
 */
class EngineeringChangesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $ficheno = null;
    /** @var mixed */
    public $date = null;
    /** @var mixed */
    public $clientref = null;
    /** @var mixed */
    public $arpCode = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $appstatus = null;
    /** @var mixed */
    public $reason = null;
    /** @var mixed */
    public $bommasterref = null;
    /** @var mixed */
    public $oldrevref = null;
    /** @var mixed */
    public $newrevref = null;
    /** @var mixed */
    public $method = null;
    /** @var mixed */
    public $datefrom = null;
    /** @var mixed */
    public $serilotfrom = null;
    /** @var mixed */
    public $bomlineref = null;
    /** @var mixed */
    public $itemref = null;
    /** @var mixed */
    public $validdate = null;
    /** @var mixed */
    public $validstatus = null;
    /** @var mixed */
    public $approved = null;
    /** @var mixed */
    public $active = null;
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
    public $masterInternalReference = null;
    /** @var mixed */
    public $masterCode = null;
    /** @var mixed */
    public $masterName = null;
    /** @var mixed */
    public $masterType = null;
    /** @var mixed */
    public $masterValidrevref = null;
    /** @var mixed */
    public $masterValidRevCode = null;
    /** @var mixed */
    public $masterMainprodref = null;
    /** @var mixed */
    public $masterApproved = null;
    /** @var mixed */
    public $masterActive = null;
    /** @var mixed */
    public $masterDemontaj = null;
    /** @var mixed */
    public $masterAuxilCode = null;
    /** @var mixed */
    public $masterAuxilCode2 = null;
    /** @var mixed */
    public $masterAuthCode = null;
    /** @var mixed */
    public $masterTextinc = null;
    /** @var mixed */
    public $masterDataSiteid = null;
    /** @var mixed */
    public $masterXmlAttribute = null;
    /** @var mixed */
    public $masterDataReference = null;
    /** @var mixed */
    public $masterWfstatus = null;
    /** @var mixed */
    public $masterRoutingref = null;
    /** @var mixed */
    public $masterProductlineref = null;
    /** @var mixed */
    public $masterPrintcnt = null;
    /** @var mixed */
    public $masterPrintDate = null;
    /** @var mixed */
    public $revInternalReference = null;
    /** @var mixed */
    public $revCode = null;
    /** @var mixed */
    public $revName = null;
    /** @var mixed */
    public $revType = null;
    /** @var mixed */
    public $revActive = null;
    /** @var mixed */
    public $revBommasterref = null;
    /** @var mixed */
    public $revRoutingref = null;
    /** @var mixed */
    public $revEngchgref = null;
    /** @var mixed */
    public $revRevdate = null;
    /** @var mixed */
    public $revDataSiteid = null;
    /** @var mixed */
    public $revXmlAttribute = null;
    /** @var mixed */
    public $revDataReference = null;
    /** @var mixed */
    public $revWfstatus = null;
    /** @var mixed */
    public $revQtydepttime = null;
    /** @var mixed */
    public $revQtyundepttime = null;
    /** @var mixed */
    public $revStdovhdformula = null;
    /** @var mixed */
    public $revStdovhdrpformula = null;
    /** @var mixed */
    public $revQtydepduration = null;
    /** @var mixed */
    public $revQtyindepduration = null;
    /** @var mixed */
    public $revOverlaptype = null;
    /** @var mixed */
    public $revOverlapamnt = null;
    /** @var mixed */
    public $revOverlapperc = null;
    /** @var mixed */
    public $revStdovhdformula2 = null;
    /** @var mixed */
    public $revStdovhdrpformula2 = null;
    /** @var mixed */
    public $revStdovhdformula3 = null;
    /** @var mixed */
    public $revStdovhdrpformula3 = null;
    /** @var mixed */
    public $revStdovhdformula4 = null;
    /** @var mixed */
    public $revStdovhdrpformula4 = null;
    /** @var mixed */
    public $revStdovhdformula5 = null;
    /** @var mixed */
    public $revStdovhdrpformula5 = null;
    /** @var mixed */
    public $revStdovhdformula6 = null;
    /** @var mixed */
    public $revStdovhdrpformula6 = null;
    /** @var mixed */
    public $revStdovhdformula7 = null;
    /** @var mixed */
    public $revStdovhdrpformula7 = null;
    /** @var mixed */
    public $revStdovhdformula8 = null;
    /** @var mixed */
    public $revStdovhdrpformula8 = null;
    /** @var mixed */
    public $revStdovhdformula9 = null;
    /** @var mixed */
    public $revStdovhdrpformula9 = null;
    /** @var mixed */
    public $revStdovhdformula10 = null;
    /** @var mixed */
    public $revStdovhdrpformula10 = null;
    /** @var mixed */
    public $revPrintCnt = null;
    /** @var mixed */
    public $revPrintDate = null;
    /** @var mixed */
    public $updated = null;
    /** @var mixed */
    public $revupdated = null;
    /** @var mixed */
    public $savenewrev = null;
    /** @var mixed */
    public $oldrevname = null;
    /** @var mixed */
    public $oldrevcode = null;
    /** @var mixed */
    public $linelist = null;
    /** @var mixed */
    public $dellinelist = null;
    /** @var mixed */
    public $mpcode = null;
    /** @var mixed */
    public $mpname = null;
    /** @var mixed */
    public $routcode = null;
    /** @var mixed */
    public $routname = null;
    /** @var mixed */
    public $warnactive = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $textchg = null;
    /** @var mixed */
    public $fldals = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $paramlist = null;
    /** @var mixed */
    public $paramdellist = null;
    /** @var mixed */
    public $productlinecode = null;
    /** @var mixed */
    public $mainitemtype = null;
    /** @var mixed */
    public $canconfig = null;
    /** @var mixed */
    public $itemcode = null;
    /** @var mixed */
    public $itemname = null;
    /** @var mixed */
    public $docals = null;
    /** @var mixed */
    public $fcnochanged = null;
    /** @var mixed */
    public $revWithoutRouting = null;
    /** @var mixed */
    public $revUseDeptTimeForPrd = null;
    /** @var mixed */
    public $revPegType = null;
    /** @var mixed */
    public $revPegGuid = null;
    /** @var mixed */
    public $revGuid = null;
    /** @var mixed */
    public $revUseWsForPrd = null;
    /** @var mixed */
    public $revWsType = null;
    /** @var mixed */
    public $revWsref = null;
    /** @var mixed */
    public $revWscode = null;
    /** @var mixed */
    public $revOpreqref = null;
}

/**
 * EngineeringChangesAnalytics
 */
class EngineeringChangesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
