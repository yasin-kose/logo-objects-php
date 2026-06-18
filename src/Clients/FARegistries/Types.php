<?php

declare(strict_types=1);

namespace LogoObjects\Clients\FARegistries;

/**
 * RscollectionrsFayearxml
 */
class RscollectionrsFayearxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\FARegistries\RsFayearxml::class],
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
            'items' => [\LogoObjects\Clients\FARegistries\ExtendedFieldDefinitions::class],
        ]);
    }
}

/**
 * RscollectionrsFaprodnumxml
 */
class RscollectionrsFaprodnumxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\FARegistries\RsFaprodnumxml::class],
        ]);
    }
}

/**
 * RscollectionrsFamaintainxml
 */
class RscollectionrsFamaintainxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\FARegistries\RsFamaintainxml::class],
        ]);
    }
}

/**
 * RscollectionrsFaguaranteexml
 */
class RscollectionrsFaguaranteexml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\FARegistries\RsFaguaranteexml::class],
        ]);
    }
}

/**
 * RscollectionrsFaregnewvalxml
 */
class RscollectionrsFaregnewvalxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\FARegistries\RsFaregnewvalxml::class],
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
 * RsFayearxml
 */
class RsFayearxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $TABLE_TYPE = null;
    /** @var int|float|null */
    public $FREGREF = null;
    /** @var int|float|null */
    public $YEAR = null;
    /** @var int|float|null */
    public $DEPR_RATE = null;
    /** @var int|float|null */
    public $REVAL_RATE = null;
    /** @var int|float|null */
    public $DEPR_TYPE = null;
    /** @var int|float|null */
    public $QUANTITY_OUT = null;
    /** @var int|float|null */
    public $LC_INIT_COST = null;
    /** @var int|float|null */
    public $LC_EXPENSES = null;
    /** @var int|float|null */
    public $LC_EXPENSES_EXCLRV = null;
    /** @var int|float|null */
    public $LC_CUMEXPEN_EXCLRV = null;
    /** @var int|float|null */
    public $LC_AMOUNT_OUT = null;
    /** @var int|float|null */
    public $LC_AMNOUT_EXCLRV = null;
    /** @var int|float|null */
    public $LC_BOOKVAL_OPEN = null;
    /** @var int|float|null */
    public $LC_ACCDEPR_OPEN = null;
    /** @var int|float|null */
    public $LC_ACCDEPR_OUT = null;
    /** @var int|float|null */
    public $LC_BOOKVAL_REVD = null;
    /** @var int|float|null */
    public $LC_ACCDEPR_REVD = null;
    /** @var int|float|null */
    public $LC_ANNDEPR = null;
    /** @var int|float|null */
    public $LC_ACCDEPR_YREND = null;
    /** @var int|float|null */
    public $LC_ACCDEPR_INCOST = null;
    /** @var int|float|null */
    public $LC_REV_AMOUNT_IN = null;
    /** @var int|float|null */
    public $LC_REV_AMOUNT_OUT = null;
    /** @var int|float|null */
    public $LC_NET_VAL_RV = null;
    /** @var int|float|null */
    public $LC_PERIOD_REVD = null;
    /** @var int|float|null */
    public $LC_PERIOD_ACCDEPR_REVD = null;
    /** @var int|float|null */
    public $LC_PERIOD_DEPR = null;
    /** @var int|float|null */
    public $LC_PERIOD_DEPR_KKEG = null;
    /** @var int|float|null */
    public $LC_REV_FUND = null;
    /** @var int|float|null */
    public $FC_INIT_COST = null;
    /** @var int|float|null */
    public $FC_EXPENSES = null;
    /** @var int|float|null */
    public $FC_EXPENSES_EXCLRV = null;
    /** @var int|float|null */
    public $FC_CUMEXPEN_EXCLRV = null;
    /** @var int|float|null */
    public $FC_AMOUNT_OUT = null;
    /** @var int|float|null */
    public $FC_AMNOUT_EXCLRV = null;
    /** @var int|float|null */
    public $FC_BOOKVAL_OPEN = null;
    /** @var int|float|null */
    public $FC_ACCDEPR_OPEN = null;
    /** @var int|float|null */
    public $FC_ACCDEPR_OUT = null;
    /** @var int|float|null */
    public $FC_BOOKVAL_REVD = null;
    /** @var int|float|null */
    public $FC_ACCDEPR_REVD = null;
    /** @var int|float|null */
    public $FC_ANNDEPR = null;
    /** @var int|float|null */
    public $FC_ACCDEPR_YREND = null;
    /** @var int|float|null */
    public $FC_ACCDEPR_INCOST = null;
    /** @var int|float|null */
    public $FC_REV_AMOUNT_IN = null;
    /** @var int|float|null */
    public $FC_REV_AMOUNT_OUT = null;
    /** @var int|float|null */
    public $FC_NET_VAL_RV = null;
    /** @var int|float|null */
    public $FC_PERIOD_REVD = null;
    /** @var int|float|null */
    public $FC_PERIOD_ACCDEPR_REVD = null;
    /** @var int|float|null */
    public $FC_PERIOD_DEPR = null;
    /** @var int|float|null */
    public $FC_PERIOD_DEPR_KKEG = null;
    /** @var int|float|null */
    public $FC_REV_FUND = null;
    /** @var int|float|null */
    public $VAT_DEDUCTED = null;
    /** @var int|float|null */
    public $DEPR_POSTED = null;
    /** @var int|float|null */
    public $REVAL_POSTED = null;
    /** @var int|float|null */
    public $VAT_POSTED = null;
    /** @var int|float|null */
    public $MONTH_CALC = null;
    /** @var int|float|null */
    public $ACCFICHEREF = null;
    /** @var int|float|null */
    public $INFIDX = null;
    /** @var int|float|null */
    public $CLOSED = null;
    /** @var int|float|null */
    public $FA_EXP_ITEM_REF = null;
    /** @var int|float|null */
    public $FA_EXP_TYPE = null;
    public ?string $FA_EXP_ITEM_CODE = null;
    /** @var int|float|null */
    public $PROD_AMOUNT = null;
    /** @var int|float|null */
    public $CUT_DEPR_AMOUNT = null;
    /** @var int|float|null */
    public $STOPPED = null;
    /** @var int|float|null */
    public $DIVISION = null;
    /** @var int|float|null */
    public $ALLOCATE_ALL = null;
    /** @var int|float|null */
    public $SKIP_DEPR = null;
    public ?string $REV_PRICE_IDX_DATE = null;
    /** @var int|float|null */
    public $REV_ACC_FICHE_REF = null;
    /** @var int|float|null */
    public $LC_TOT_COST = null;
    /** @var int|float|null */
    public $FC_TOT_COST = null;
    /** @var int|float|null */
    public $REVCALCTYPE = null;
    /** @var int|float|null */
    public $LC_NETFAVAL = null;
    /** @var int|float|null */
    public $FC_NETFAVAL = null;
    /** @var int|float|null */
    public $INFREVRATE = null;
    /** @var int|float|null */
    public $PERDINFCORRECT = null;
    /** @var int|float|null */
    public $PERDACCDEPRCORRECT = null;
    /** @var int|float|null */
    public $PERDINFCORRECTCALC = null;
    /** @var int|float|null */
    public $PERDACCDEPRCORRECT2 = null;
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
 * RsFaprodnumxml
 */
class RsFaprodnumxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $YEAR = null;
    /** @var int|float|null */
    public $MONTH_TOTALS1 = null;
    /** @var int|float|null */
    public $MONTH_TOTALS2 = null;
    /** @var int|float|null */
    public $MONTH_TOTALS3 = null;
    /** @var int|float|null */
    public $MONTH_TOTALS4 = null;
    /** @var int|float|null */
    public $MONTH_TOTALS5 = null;
    /** @var int|float|null */
    public $MONTH_TOTALS6 = null;
    /** @var int|float|null */
    public $MONTH_TOTALS7 = null;
    /** @var int|float|null */
    public $MONTH_TOTALS8 = null;
    /** @var int|float|null */
    public $MONTH_TOTALS9 = null;
    /** @var int|float|null */
    public $MONTH_TOTALS10 = null;
    /** @var int|float|null */
    public $MONTH_TOTALS11 = null;
    /** @var int|float|null */
    public $MONTH_TOTALS12 = null;
    /** @var int|float|null */
    public $YEAR_TOTAL = null;
}

/**
 * RsFamaintainxml
 */
class RsFamaintainxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $MNTLOCTYPE = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    /** @var int|float|null */
    public $FAREF = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $QUANTITY = null;
    /** @var int|float|null */
    public $TOTAL = null;
    public ?string $EXP = null;
    public ?string $CLIENTCODE = null;
}

/**
 * RsFaguaranteexml
 */
class RsFaguaranteexml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $FAREF = null;
    public ?string $GRNTDOCNO = null;
    public ?string $BEGDATE = null;
    public ?string $ENDDATE = null;
    public ?string $EXP = null;
    /** @var int|float|null */
    public $DATA_REFRENCE = null;
}

/**
 * RsFaregnewvalxml
 */
class RsFaregnewvalxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $FAREGREF = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $NEWVALUE = null;
    /** @var int|float|null */
    public $LINENO = null;
    /** @var int|float|null */
    public $ACCFLG = null;
    /** @var int|float|null */
    public $ACCFICHEREF = null;
    /** @var int|float|null */
    public $REPORTRATE = null;
    /** @var int|float|null */
    public $NEWREPORTNET = null;
    /** @var int|float|null */
    public $LASTBOOKVAL = null;
    /** @var int|float|null */
    public $DIFFVALINC = null;
    /** @var int|float|null */
    public $DIFFVALDEC = null;
    /** @var int|float|null */
    public $DIFFREPVALINC = null;
    /** @var int|float|null */
    public $DIFFREPVALDEC = null;
    /** @var int|float|null */
    public $LASTREPBOOKVAL = null;
    public ?string $GL_CODE1 = null;
    public ?string $GL_CODE2 = null;
    public ?string $OHP_CODE1 = null;
    public ?string $OHP_CODE2 = null;
}

/**
 * Faregistries
 */
class Faregistries extends \LogoObjects\Types\BaseEntity
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
    public ?string $ITEM_CODE = null;
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
    public ?string $XBUFS = null;
    /** @var RscollectionrsFayearxml|null */
    public $YEARLY_LOCAL = null;
    /** @var RscollectionrsFayearxml|null */
    public $YEARLY_FC = null;
    /** @var RscollectionrsFayearxml|null */
    public $YEARLY_LOCAL_INFL = null;
    /** @var RscollectionrsFayearxml|null */
    public $YEARLY_FC_INFL = null;
    /** @var int|float|null */
    public $DATE_DEPRSTART2ORG = null;
    public ?string $DATE_DEPRSTART2 = null;
    /** @var int|float|null */
    public $PART_DEP2 = null;
    /** @var int|float|null */
    public $DEPR_TYPE3 = null;
    /** @var int|float|null */
    public $DEPR_RATE3 = null;
    /** @var int|float|null */
    public $DEPR_DUR3 = null;
    /** @var int|float|null */
    public $PART_DEP3 = null;
    public ?string $DATE_DEPRSTART3 = null;
    /** @var int|float|null */
    public $OPEN_REVAL3 = null;
    /** @var int|float|null */
    public $OPEN_DEPR3 = null;
    /** @var int|float|null */
    public $OPEN_REVDEPR3 = null;
    /** @var int|float|null */
    public $RC_OPENREV3 = null;
    /** @var int|float|null */
    public $RC_OPENDEPR3 = null;
    /** @var int|float|null */
    public $RC_OPENREVDEPR3 = null;
    /** @var int|float|null */
    public $DIFF_PRICE = null;
    /** @var int|float|null */
    public $DIFFREP_PRICE = null;
    /** @var int|float|null */
    public $PACKET = null;
    /** @var int|float|null */
    public $SELLVAT = null;
    /** @var int|float|null */
    public $RETURNVAT = null;
    public ?string $CRD_LOGOID = null;
    /** @var int|float|null */
    public $INFLDX = null;
    /** @var int|float|null */
    public $LID_CONFIRMED = null;
    /** @var int|float|null */
    public $DISC_INCL = null;
    /** @var int|float|null */
    public $DISC_RATE = null;
    /** @var int|float|null */
    public $ANNUAL_DIST_VAL = null;
    /** @var int|float|null */
    public $INF_BASED_VALUE = null;
    public ?string $REGDEFINITION = null;
    /** @var int|float|null */
    public $DEPRTYPE4 = null;
    /** @var int|float|null */
    public $DEPRRATE4 = null;
    /** @var int|float|null */
    public $DEPRDUR4 = null;
    /** @var int|float|null */
    public $PARTDEP4 = null;
    public ?string $DATEOFDEPR4 = null;
    /** @var int|float|null */
    public $RC_OPENREV4 = null;
    /** @var int|float|null */
    public $RC_OPENDEPR4 = null;
    /** @var int|float|null */
    public $RC_OPENREVDEPR4 = null;
    /** @var int|float|null */
    public $RC_OPENREV4X = null;
    /** @var int|float|null */
    public $RC_OPENDEPR4X = null;
    /** @var int|float|null */
    public $INFIDX2 = null;
    /** @var int|float|null */
    public $ANNUALDISTVAL2 = null;
    /** @var int|float|null */
    public $INFLBASEDVALUE2 = null;
    public ?string $DATE_ACTIVE = null;
    /** @var int|float|null */
    public $TAXEXPRATE2 = null;
    /** @var int|float|null */
    public $TAXACCFLAG = null;
    /** @var int|float|null */
    public $ACCFICHEREF = null;
    public ?string $REGTYPCOD = null;
    public ?string $REGTYPDEF = null;
    public ?string $REGEXPENSCOD = null;
    public ?string $REGEXPENSDEF = null;
    /** @var int|float|null */
    public $DEPRSTPREASN = null;
    public ?string $DEPRSTPDATE = null;
    /** @var int|float|null */
    public $PRODCAPACITY = null;
    public ?string $CAPACITY_UNIT = null;
    /** @var int|float|null */
    public $TAXEXPTYP2 = null;
    /** @var int|float|null */
    public $CURRTYPE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $APPROVE = null;
    public ?string $APPROVEDATE = null;
    /** @var int|float|null */
    public $DATEOFDEPR5 = null;
    /** @var int|float|null */
    public $DEPRRATE5 = null;
    /** @var int|float|null */
    public $DEPRDUR5 = null;
    /** @var int|float|null */
    public $DEPRTYPE5 = null;
    /** @var int|float|null */
    public $REVALFLAG5 = null;
    /** @var int|float|null */
    public $REVDEPRFLAG5 = null;
    /** @var int|float|null */
    public $PARTDEP5 = null;
    /** @var int|float|null */
    public $OPEN_REV5 = null;
    /** @var int|float|null */
    public $OPEN_DEPR5 = null;
    /** @var int|float|null */
    public $OPEN_REVDEPR5 = null;
    /** @var int|float|null */
    public $RC_OPENREV5 = null;
    /** @var int|float|null */
    public $RC_OPENDEPR5 = null;
    /** @var int|float|null */
    public $RC_OPENREVDEPR5 = null;
    /** @var int|float|null */
    public $DEPRDURTYPE2 = null;
    public ?string $FA_USEFUL_LIFE_CODE1 = null;
    public ?string $FA_USEFUL_LIFE_CODE2 = null;
    public ?string $FA_USEFUL_LIFE_CODE3 = null;
    public ?string $FA_USEFUL_LIFE_CODE4 = null;
    public ?string $FA_USEFUL_LIFE_CODE5 = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    public ?string $OHP_CODE = null;
    /** @var int|float|null */
    public $TOTAL_REV_AMOUNT = null;
    /** @var int|float|null */
    public $TOTAL_REV_AMOUNTX = null;
    /** @var int|float|null */
    public $FIGS_COST_OP = null;
    /** @var int|float|null */
    public $FIGS_COST_OPX = null;
    /** @var int|float|null */
    public $WSREF = null;
    public ?string $WS_CODE = null;
    /** @var int|float|null */
    public $MAINT_LIFETRACKTYPE = null;
    /** @var int|float|null */
    public $MAINT_USAGELIFE = null;
    /** @var int|float|null */
    public $MAINT_FACTOR = null;
    /** @var int|float|null */
    public $MAINT_NUMBER = null;
    /** @var int|float|null */
    public $MAINT_LIFETYPE = null;
    /** @var int|float|null */
    public $MAINT_LIFE = null;
    /** @var int|float|null */
    public $MAINT_LIFEASRATIO = null;
    /** @var int|float|null */
    public $MAINT_TYPE = null;
    public ?string $MAINT_BEGDATE = null;
    /** @var int|float|null */
    public $MAINT_PERIOD = null;
    /** @var int|float|null */
    public $MAINT_PERIODUNIT = null;
    /** @var int|float|null */
    public $OTV_AMOUNT = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $DEFNDLDSLIST = null;
    /** @var RscollectionrsFaprodnumxml|null */
    public $PRDNUMLST = null;
    public ?string $PRDNUMDELLST = null;
    /** @var RscollectionrsFamaintainxml|null */
    public $MAINTANENCELIST = null;
    public ?string $MAINTANENCEDELLIST = null;
    /** @var RscollectionrsFaguaranteexml|null */
    public $GUARANTEELIST = null;
    public ?string $GUARANTEEDELLIST = null;
    public ?string $GUID = null;
    /** @var RscollectionrsFaregnewvalxml|null */
    public $VALUE_INFOS = null;
    /** @var int|float|null */
    public $FIGS_TOT_COST = null;
    /** @var int|float|null */
    public $FIGS_TOT_COSTX = null;
    public ?string $SPECODE = null;
    /** @var int|float|null */
    public $BEGSKIPCNT = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'YEARLY_LOCAL' => \LogoObjects\Clients\FARegistries\RscollectionrsFayearxml::class,
            'YEARLY_FC' => \LogoObjects\Clients\FARegistries\RscollectionrsFayearxml::class,
            'YEARLY_LOCAL_INFL' => \LogoObjects\Clients\FARegistries\RscollectionrsFayearxml::class,
            'YEARLY_FC_INFL' => \LogoObjects\Clients\FARegistries\RscollectionrsFayearxml::class,
            'DEFNDLDSLIST' => \LogoObjects\Clients\FARegistries\Rscollectionextendedfielddefinitions::class,
            'PRDNUMLST' => \LogoObjects\Clients\FARegistries\RscollectionrsFaprodnumxml::class,
            'MAINTANENCELIST' => \LogoObjects\Clients\FARegistries\RscollectionrsFamaintainxml::class,
            'GUARANTEELIST' => \LogoObjects\Clients\FARegistries\RscollectionrsFaguaranteexml::class,
            'VALUE_INFOS' => \LogoObjects\Clients\FARegistries\RscollectionrsFaregnewvalxml::class,
        ]);
    }
}

/**
 * FaregistriesQueryOptions
 */
class FaregistriesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var FaregistriesSortSpec|null */
    public $sort = null;
}

/**
 * FaregistriesSearchCriteria
 */
class FaregistriesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $division = null;
    /** @var mixed */
    public $department = null;
    /** @var mixed */
    public $sourceWh = null;
    /** @var mixed */
    public $transfer = null;
    /** @var mixed */
    public $itemCode = null;
    /** @var mixed */
    public $crdref = null;
    /** @var mixed */
    public $ficheref = null;
    /** @var mixed */
    public $dateAcquired = null;
    /** @var mixed */
    public $dateDeprstart = null;
    /** @var mixed */
    public $quantity = null;
    /** @var mixed */
    public $quantityOut = null;
    /** @var mixed */
    public $acqValue = null;
    /** @var mixed */
    public $vatAmount = null;
    /** @var mixed */
    public $vatPostDur = null;
    /** @var mixed */
    public $deprRate = null;
    /** @var mixed */
    public $deprDur = null;
    /** @var mixed */
    public $deprType = null;
    /** @var mixed */
    public $revaluate = null;
    /** @var mixed */
    public $revDepr = null;
    /** @var mixed */
    public $partialDepr = null;
    /** @var mixed */
    public $cancelled = null;
    /** @var mixed */
    public $rcXrate = null;
    /** @var mixed */
    public $rcAcqValue = null;
    /** @var mixed */
    public $totalExpenses = null;
    /** @var mixed */
    public $accumDepr = null;
    /** @var mixed */
    public $accumReval = null;
    /** @var mixed */
    public $rcTotalExpn = null;
    /** @var mixed */
    public $rcAccumDepr = null;
    /** @var mixed */
    public $rcAccumReval = null;
    /** @var mixed */
    public $deprType2 = null;
    /** @var mixed */
    public $deprRate2 = null;
    /** @var mixed */
    public $deprDur2 = null;
    /** @var mixed */
    public $revaluate2 = null;
    /** @var mixed */
    public $revDepr2 = null;
    /** @var mixed */
    public $openReval = null;
    /** @var mixed */
    public $openDepr = null;
    /** @var mixed */
    public $openRevdepr = null;
    /** @var mixed */
    public $rcOpenrev = null;
    /** @var mixed */
    public $rcOpendepr = null;
    /** @var mixed */
    public $rcOpenrevdepr = null;
    /** @var mixed */
    public $openReval2 = null;
    /** @var mixed */
    public $openDepr2 = null;
    /** @var mixed */
    public $openRevdepr2 = null;
    /** @var mixed */
    public $rcOpenrev2 = null;
    /** @var mixed */
    public $rcOpendepr2 = null;
    /** @var mixed */
    public $rcOpenrevdepr2 = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $yearlyLocal = null;
    /** @var mixed */
    public $yearlyFc = null;
    /** @var mixed */
    public $yearlyLocalInfl = null;
    /** @var mixed */
    public $yearlyFcInfl = null;
    /** @var mixed */
    public $dateDeprstart2org = null;
    /** @var mixed */
    public $dateDeprstart2 = null;
    /** @var mixed */
    public $partDep2 = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $deprType3 = null;
    /** @var mixed */
    public $deprRate3 = null;
    /** @var mixed */
    public $deprDur3 = null;
    /** @var mixed */
    public $partDep3 = null;
    /** @var mixed */
    public $dateDeprstart3 = null;
    /** @var mixed */
    public $openReval3 = null;
    /** @var mixed */
    public $openDepr3 = null;
    /** @var mixed */
    public $openRevdepr3 = null;
    /** @var mixed */
    public $rcOpenrev3 = null;
    /** @var mixed */
    public $rcOpendepr3 = null;
    /** @var mixed */
    public $rcOpenrevdepr3 = null;
    /** @var mixed */
    public $diffPrice = null;
    /** @var mixed */
    public $diffrepPrice = null;
    /** @var mixed */
    public $packet = null;
    /** @var mixed */
    public $sellvat = null;
    /** @var mixed */
    public $returnvat = null;
    /** @var mixed */
    public $crdLogoid = null;
    /** @var mixed */
    public $infldx = null;
    /** @var mixed */
    public $lidConfirmed = null;
    /** @var mixed */
    public $discIncl = null;
    /** @var mixed */
    public $discRate = null;
    /** @var mixed */
    public $annualDistVal = null;
    /** @var mixed */
    public $infBasedValue = null;
    /** @var mixed */
    public $regdefinition = null;
    /** @var mixed */
    public $deprtype4 = null;
    /** @var mixed */
    public $deprrate4 = null;
    /** @var mixed */
    public $deprdur4 = null;
    /** @var mixed */
    public $partdep4 = null;
    /** @var mixed */
    public $dateofdepr4 = null;
    /** @var mixed */
    public $rcOpenrev4 = null;
    /** @var mixed */
    public $rcOpendepr4 = null;
    /** @var mixed */
    public $rcOpenrevdepr4 = null;
    /** @var mixed */
    public $rcOpenrev4x = null;
    /** @var mixed */
    public $rcOpendepr4x = null;
    /** @var mixed */
    public $infidx2 = null;
    /** @var mixed */
    public $annualdistval2 = null;
    /** @var mixed */
    public $inflbasedvalue2 = null;
    /** @var mixed */
    public $dateActive = null;
    /** @var mixed */
    public $taxexprate2 = null;
    /** @var mixed */
    public $taxaccflag = null;
    /** @var mixed */
    public $accficheref = null;
    /** @var mixed */
    public $regtypcod = null;
    /** @var mixed */
    public $regtypdef = null;
    /** @var mixed */
    public $regexpenscod = null;
    /** @var mixed */
    public $regexpensdef = null;
    /** @var mixed */
    public $deprstpreasn = null;
    /** @var mixed */
    public $deprstpdate = null;
    /** @var mixed */
    public $prodcapacity = null;
    /** @var mixed */
    public $capacityUnit = null;
    /** @var mixed */
    public $taxexptyp2 = null;
    /** @var mixed */
    public $currtype = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $approve = null;
    /** @var mixed */
    public $approvedate = null;
    /** @var mixed */
    public $dateofdepr5 = null;
    /** @var mixed */
    public $deprrate5 = null;
    /** @var mixed */
    public $deprdur5 = null;
    /** @var mixed */
    public $deprtype5 = null;
    /** @var mixed */
    public $revalflag5 = null;
    /** @var mixed */
    public $revdeprflag5 = null;
    /** @var mixed */
    public $partdep5 = null;
    /** @var mixed */
    public $openRev5 = null;
    /** @var mixed */
    public $openDepr5 = null;
    /** @var mixed */
    public $openRevdepr5 = null;
    /** @var mixed */
    public $rcOpenrev5 = null;
    /** @var mixed */
    public $rcOpendepr5 = null;
    /** @var mixed */
    public $rcOpenrevdepr5 = null;
    /** @var mixed */
    public $deprdurtype2 = null;
    /** @var mixed */
    public $faUsefulLifeCode1 = null;
    /** @var mixed */
    public $faUsefulLifeCode2 = null;
    /** @var mixed */
    public $faUsefulLifeCode3 = null;
    /** @var mixed */
    public $faUsefulLifeCode4 = null;
    /** @var mixed */
    public $faUsefulLifeCode5 = null;
    /** @var mixed */
    public $projectref = null;
    /** @var mixed */
    public $projectCode = null;
    /** @var mixed */
    public $centerref = null;
    /** @var mixed */
    public $ohpCode = null;
    /** @var mixed */
    public $totalRevAmount = null;
    /** @var mixed */
    public $totalRevAmountx = null;
    /** @var mixed */
    public $figsCostOp = null;
    /** @var mixed */
    public $figsCostOpx = null;
    /** @var mixed */
    public $wsref = null;
    /** @var mixed */
    public $wsCode = null;
    /** @var mixed */
    public $maintLifetracktype = null;
    /** @var mixed */
    public $maintUsagelife = null;
    /** @var mixed */
    public $maintFactor = null;
    /** @var mixed */
    public $maintNumber = null;
    /** @var mixed */
    public $maintLifetype = null;
    /** @var mixed */
    public $maintLife = null;
    /** @var mixed */
    public $maintLifeasratio = null;
    /** @var mixed */
    public $maintType = null;
    /** @var mixed */
    public $maintBegdate = null;
    /** @var mixed */
    public $maintPeriod = null;
    /** @var mixed */
    public $maintPeriodunit = null;
    /** @var mixed */
    public $otvAmount = null;
    /** @var mixed */
    public $defndldslist = null;
    /** @var mixed */
    public $prdnumlst = null;
    /** @var mixed */
    public $prdnumdellst = null;
    /** @var mixed */
    public $maintanencelist = null;
    /** @var mixed */
    public $maintanencedellist = null;
    /** @var mixed */
    public $guaranteelist = null;
    /** @var mixed */
    public $guaranteedellist = null;
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
    public $guid = null;
    /** @var mixed */
    public $valueInfos = null;
    /** @var mixed */
    public $figsTotCost = null;
    /** @var mixed */
    public $figsTotCostx = null;
    /** @var mixed */
    public $specode = null;
    /** @var mixed */
    public $begskipcnt = null;
}

/**
 * FaregistriesAnalytics
 */
class FaregistriesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
