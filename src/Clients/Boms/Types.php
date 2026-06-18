<?php

declare(strict_types=1);

namespace LogoObjects\Clients\Boms;

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
            'items' => [\LogoObjects\Clients\Boms\RsBomlinexml::class],
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
            'items' => [\LogoObjects\Clients\Boms\RsBomdetlistxml::class],
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
            'items' => [\LogoObjects\Clients\Boms\RsBomlnfrmllistxml::class],
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
            'items' => [\LogoObjects\Clients\Boms\ExtendedFieldDefinitions::class],
        ]);
    }
}

/**
 * RscollectionrsBomprmlistxml
 */
class RscollectionrsBomprmlistxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\Boms\RsBomprmlistxml::class],
        ]);
    }
}

/**
 * RscollectionrsToolreqlistxml
 */
class RscollectionrsToolreqlistxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\Boms\RsToolreqlistxml::class],
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
            'DET_LIST' => \LogoObjects\Clients\Boms\RscollectionrsBomdetlistxml::class,
            'VARIANT_FORMULA_LIST' => \LogoObjects\Clients\Boms\RscollectionrsBomlnfrmllistxml::class,
            'VARIANT_CONDITION_LIST' => \LogoObjects\Clients\Boms\RscollectionrsBomlnfrmllistxml::class,
            'DEFNFLDSLIST' => \LogoObjects\Clients\Boms\Rscollectionextendedfielddefinitions::class,
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
 * RsBomprmlistxml
 */
class RsBomprmlistxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $PARAMREF = null;
    /** @var int|float|null */
    public $BOMMASTERREF = null;
    /** @var int|float|null */
    public $LINE_NO = null;
    public ?string $PARAM_CODE = null;
    public ?string $PARAM_NAME = null;
    /** @var int|float|null */
    public $PARAM_DEFAULT = null;
}

/**
 * RsToolreqlistxml
 */
class RsToolreqlistxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $OPREQREF = null;
    /** @var int|float|null */
    public $LINE_NO = null;
    /** @var int|float|null */
    public $TOOLREF = null;
    /** @var int|float|null */
    public $AMOUNT = null;
    /** @var int|float|null */
    public $UOMREF = null;
    public ?string $ITEM_CODE = null;
    public ?string $ITEM_NAME = null;
    public ?string $UNIT_SET_CODE = null;
    public ?string $UNIT_CODE = null;
    /** @var int|float|null */
    public $TOOL_TYPE = null;
    /** @var int|float|null */
    public $REVREF = null;
    public ?string $REVISION_CODE = null;
    /** @var int|float|null */
    public $OPERATIONREF = null;
    public ?string $OPERATION_CODE = null;
}

/**
 * Boms
 */
class Boms extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $NAME = null;
    /** @var int|float|null */
    public $TYPE = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    public ?string $ARP_CODE = null;
    /** @var int|float|null */
    public $VALIDREVREF = null;
    /** @var int|float|null */
    public $MAINPRODREF = null;
    /** @var int|float|null */
    public $APPROVED = null;
    /** @var int|float|null */
    public $DEMONTAJ = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUXIL_CODE2 = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $WF_STATUS = null;
    /** @var int|float|null */
    public $ROUTINGREF = null;
    /** @var int|float|null */
    public $LOGICALREF = null;
    public ?string $REV_CODE = null;
    public ?string $REV_NAME = null;
    /** @var int|float|null */
    public $REV_RECORD_STATUS = null;
    /** @var int|float|null */
    public $BOMMASTERREF = null;
    /** @var int|float|null */
    public $ENGCHGREF = null;
    public ?string $REV_DATE = null;
    /** @var int|float|null */
    public $REV_DATA_SITEID = null;
    /** @var int|float|null */
    public $RECSTATUS = null;
    /** @var int|float|null */
    public $REV_DATA_REFERENCE = null;
    /** @var int|float|null */
    public $REV_WF_STATUS = null;
    /** @var int|float|null */
    public $QTY_DEPT_TIME = null;
    /** @var int|float|null */
    public $QTY_UNDEPT_TIME = null;
    public ?string $STD_OVHD_FORMULA = null;
    public ?string $STD_OVHD_RP_FORMULA = null;
    /** @var int|float|null */
    public $QTY_DEP_DURATION = null;
    /** @var int|float|null */
    public $QTY_INDEP_DURATION = null;
    /** @var int|float|null */
    public $OVERLAP_TYPE = null;
    /** @var int|float|null */
    public $OVERLAP_AMOUNT = null;
    /** @var int|float|null */
    public $OVERLAP_PERCENT = null;
    /** @var int|float|null */
    public $REV_PRINT_CNT = null;
    public ?string $REV_PRINT_DATE = null;
    /** @var int|float|null */
    public $UPDATED = null;
    /** @var int|float|null */
    public $REVUPDATED = null;
    /** @var int|float|null */
    public $SAVE_NEW_REV = null;
    public ?string $OLD_REV_NAME = null;
    public ?string $OLD_REV_CODE = null;
    /** @var RscollectionrsBomlinexml|null */
    public $LINES = null;
    public ?string $DELLINELIST = null;
    public ?string $MP_CODE = null;
    public ?string $MP_NAME = null;
    public ?string $ROUT_CODE = null;
    public ?string $ROUT_NAME = null;
    /** @var int|float|null */
    public $WARNACTIVE = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    public ?string $FLDALS = null;
    public ?string $XBUFS = null;
    /** @var RscollectionrsBomprmlistxml|null */
    public $BOM_PARAMETERS = null;
    public ?string $PARAMDELLIST = null;
    /** @var int|float|null */
    public $PRODUCTLINEREF = null;
    /** @var int|float|null */
    public $PRINT_CNT = null;
    public ?string $PRINT_DATE = null;
    public ?string $PRODUCT_LINE_CODE = null;
    public ?string $STD_OVHD_FORMULA2 = null;
    public ?string $STD_OVHD_RP_FORMULA2 = null;
    public ?string $STD_OVHD_FORMULA3 = null;
    public ?string $STD_OVHD_RP_FORMULA3 = null;
    public ?string $STD_OVHD_FORMULA4 = null;
    public ?string $STD_OVHD_RP_FORMULA4 = null;
    public ?string $STD_OVHD_FORMULA5 = null;
    public ?string $STD_OVHD_RP_FORMULA5 = null;
    public ?string $STD_OVHD_FORMULA6 = null;
    public ?string $STD_OVHD_RP_FORMULA6 = null;
    public ?string $STD_OVHD_FORMULA7 = null;
    public ?string $STD_OVHD_RP_FORMULA7 = null;
    public ?string $STD_OVHD_FORMULA8 = null;
    public ?string $STD_OVHD_RP_FORMULA8 = null;
    public ?string $STD_OVHD_FORMULA9 = null;
    public ?string $STD_OVHD_RP_FORMULA9 = null;
    public ?string $STD_OVHD_FORMULA10 = null;
    public ?string $STD_OVHD_RP_FORMULA10 = null;
    public ?string $VARIABLE_DEF1 = null;
    public ?string $VARIABLE_DEF2 = null;
    public ?string $VARIABLE_DEF3 = null;
    public ?string $VARIABLE_DEF4 = null;
    public ?string $VARIABLE_DEF5 = null;
    public ?string $VARIABLE_DEF6 = null;
    public ?string $VARIABLE_DEF7 = null;
    public ?string $VARIABLE_DEF8 = null;
    public ?string $VARIABLE_DEF9 = null;
    public ?string $VARIABLE_DEF10 = null;
    /** @var int|float|null */
    public $WITHOUT_ROUTING = null;
    /** @var int|float|null */
    public $USE_DEPT_TIME_FOR_PRD = null;
    /** @var int|float|null */
    public $PEG_TYPE = null;
    public ?string $PEG_GUID = null;
    public ?string $GUID = null;
    /** @var int|float|null */
    public $USE_WS_FOR_PRD = null;
    /** @var int|float|null */
    public $WSREF = null;
    public ?string $WS_CODE = null;
    /** @var int|float|null */
    public $WS_TYPE = null;
    /** @var int|float|null */
    public $OPREQREF = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $DEFNFLDSLIST = null;
    /** @var RscollectionrsToolreqlistxml|null */
    public $MOLDREQLIST = null;
    public ?string $DELMOLDREQLIST = null;
    /** @var int|float|null */
    public $IMAGE2INC = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'LINES' => \LogoObjects\Clients\Boms\RscollectionrsBomlinexml::class,
            'BOM_PARAMETERS' => \LogoObjects\Clients\Boms\RscollectionrsBomprmlistxml::class,
            'DEFNFLDSLIST' => \LogoObjects\Clients\Boms\Rscollectionextendedfielddefinitions::class,
            'MOLDREQLIST' => \LogoObjects\Clients\Boms\RscollectionrsToolreqlistxml::class,
        ]);
    }
}

/**
 * BomsQueryOptions
 */
class BomsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var BomsSortSpec|null */
    public $sort = null;
}

/**
 * BomsSearchCriteria
 */
class BomsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $name = null;
    /** @var mixed */
    public $type = null;
    /** @var mixed */
    public $clientref = null;
    /** @var mixed */
    public $arpCode = null;
    /** @var mixed */
    public $validrevref = null;
    /** @var mixed */
    public $mainprodref = null;
    /** @var mixed */
    public $approved = null;
    /** @var mixed */
    public $recordStatus = null;
    /** @var mixed */
    public $demontaj = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $auxilCode2 = null;
    /** @var mixed */
    public $authCode = null;
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
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $wfStatus = null;
    /** @var mixed */
    public $routingref = null;
    /** @var mixed */
    public $logicalref = null;
    /** @var mixed */
    public $revCode = null;
    /** @var mixed */
    public $revName = null;
    /** @var mixed */
    public $revRecordStatus = null;
    /** @var mixed */
    public $bommasterref = null;
    /** @var mixed */
    public $engchgref = null;
    /** @var mixed */
    public $revDate = null;
    /** @var mixed */
    public $revDataSiteid = null;
    /** @var mixed */
    public $recstatus = null;
    /** @var mixed */
    public $revDataReference = null;
    /** @var mixed */
    public $revWfStatus = null;
    /** @var mixed */
    public $qtyDeptTime = null;
    /** @var mixed */
    public $qtyUndeptTime = null;
    /** @var mixed */
    public $stdOvhdFormula = null;
    /** @var mixed */
    public $stdOvhdRpFormula = null;
    /** @var mixed */
    public $qtyDepDuration = null;
    /** @var mixed */
    public $qtyIndepDuration = null;
    /** @var mixed */
    public $overlapType = null;
    /** @var mixed */
    public $overlapAmount = null;
    /** @var mixed */
    public $overlapPercent = null;
    /** @var mixed */
    public $revPrintCnt = null;
    /** @var mixed */
    public $revPrintDate = null;
    /** @var mixed */
    public $updated = null;
    /** @var mixed */
    public $revupdated = null;
    /** @var mixed */
    public $saveNewRev = null;
    /** @var mixed */
    public $oldRevName = null;
    /** @var mixed */
    public $oldRevCode = null;
    /** @var mixed */
    public $lines = null;
    /** @var mixed */
    public $dellinelist = null;
    /** @var mixed */
    public $mpCode = null;
    /** @var mixed */
    public $mpName = null;
    /** @var mixed */
    public $routCode = null;
    /** @var mixed */
    public $routName = null;
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
    public $bomParameters = null;
    /** @var mixed */
    public $paramdellist = null;
    /** @var mixed */
    public $productlineref = null;
    /** @var mixed */
    public $printCnt = null;
    /** @var mixed */
    public $printDate = null;
    /** @var mixed */
    public $productLineCode = null;
    /** @var mixed */
    public $stdOvhdFormula2 = null;
    /** @var mixed */
    public $stdOvhdRpFormula2 = null;
    /** @var mixed */
    public $stdOvhdFormula3 = null;
    /** @var mixed */
    public $stdOvhdRpFormula3 = null;
    /** @var mixed */
    public $stdOvhdFormula4 = null;
    /** @var mixed */
    public $stdOvhdRpFormula4 = null;
    /** @var mixed */
    public $stdOvhdFormula5 = null;
    /** @var mixed */
    public $stdOvhdRpFormula5 = null;
    /** @var mixed */
    public $stdOvhdFormula6 = null;
    /** @var mixed */
    public $stdOvhdRpFormula6 = null;
    /** @var mixed */
    public $stdOvhdFormula7 = null;
    /** @var mixed */
    public $stdOvhdRpFormula7 = null;
    /** @var mixed */
    public $stdOvhdFormula8 = null;
    /** @var mixed */
    public $stdOvhdRpFormula8 = null;
    /** @var mixed */
    public $stdOvhdFormula9 = null;
    /** @var mixed */
    public $stdOvhdRpFormula9 = null;
    /** @var mixed */
    public $stdOvhdFormula10 = null;
    /** @var mixed */
    public $stdOvhdRpFormula10 = null;
    /** @var mixed */
    public $variableDef1 = null;
    /** @var mixed */
    public $variableDef2 = null;
    /** @var mixed */
    public $variableDef3 = null;
    /** @var mixed */
    public $variableDef4 = null;
    /** @var mixed */
    public $variableDef5 = null;
    /** @var mixed */
    public $variableDef6 = null;
    /** @var mixed */
    public $variableDef7 = null;
    /** @var mixed */
    public $variableDef8 = null;
    /** @var mixed */
    public $variableDef9 = null;
    /** @var mixed */
    public $variableDef10 = null;
    /** @var mixed */
    public $withoutRouting = null;
    /** @var mixed */
    public $useDeptTimeForPrd = null;
    /** @var mixed */
    public $pegType = null;
    /** @var mixed */
    public $pegGuid = null;
    /** @var mixed */
    public $guid = null;
    /** @var mixed */
    public $useWsForPrd = null;
    /** @var mixed */
    public $wsref = null;
    /** @var mixed */
    public $wsCode = null;
    /** @var mixed */
    public $wsType = null;
    /** @var mixed */
    public $opreqref = null;
    /** @var mixed */
    public $defnfldslist = null;
    /** @var mixed */
    public $moldreqlist = null;
    /** @var mixed */
    public $delmoldreqlist = null;
    /** @var mixed */
    public $imageinc = null;
    /** @var mixed */
    public $image2inc = null;
}

/**
 * BomsAnalytics
 */
class BomsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
