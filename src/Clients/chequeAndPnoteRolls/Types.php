<?php

declare(strict_types=1);

namespace LogoObjects\Clients\chequeAndPnoteRolls;

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
 * RscollectionrsChqpntransxml
 */
class RscollectionrsChqpntransxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\chequeAndPnoteRolls\RsChqpntransxml::class],
        ]);
    }
}

/**
 * RscollectionrsChqpnstatxml
 */
class RscollectionrsChqpnstatxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\chequeAndPnoteRolls\RsChqpnstatxml::class],
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
            'items' => [\LogoObjects\Clients\chequeAndPnoteRolls\ExtendedFieldDefinitions::class],
        ]);
    }
}

/**
 * RscollectionrsArptransxml
 */
class RscollectionrsArptransxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\chequeAndPnoteRolls\RsArptransxml::class],
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
            'items' => [\LogoObjects\Clients\chequeAndPnoteRolls\RsPaylstxml::class],
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
            'items' => [\LogoObjects\Clients\chequeAndPnoteRolls\RsDiscpaytrxml::class],
        ]);
    }
}

/**
 * RscollectionrsPreaccdistlnxml
 */
class RscollectionrsPreaccdistlnxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\chequeAndPnoteRolls\RsPreaccdistlnxml::class],
        ]);
    }
}

/**
 * RscollectionrsBanktransxml
 */
class RscollectionrsBanktransxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\chequeAndPnoteRolls\RsBanktransxml::class],
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
 * RsChqpntransxml
 */
class RsChqpntransxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $TYPE = null;
    /** @var int|float|null */
    public $CURRENT_STATUS = null;
    public ?string $BANK_CODE = null;
    /** @var int|float|null */
    public $OURBANKREF = null;
    public ?string $NUMBER = null;
    public ?string $SERIAL_NUMBER = null;
    public ?string $BANK_TITLE = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    public ?string $CITY = null;
    public ?string $OWING = null;
    public ?string $GUARANTOR = null;
    public ?string $GUARANTOR2 = null;
    public ?string $INFORMANT = null;
    public ?string $DIVISION_NO = null;
    /** @var int|float|null */
    public $DIVISION = null;
    public ?string $ACCOUNT_NO = null;
    public ?string $DUE_DATE = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $STAMP_FEE = null;
    /** @var int|float|null */
    public $AMOUNT = null;
    /** @var int|float|null */
    public $CURR_TRANS = null;
    /** @var int|float|null */
    public $TC_XRATE = null;
    /** @var int|float|null */
    public $TC_AMOUNT = null;
    /** @var int|float|null */
    public $RC_XRATE = null;
    /** @var int|float|null */
    public $RC_AMOUNT = null;
    /** @var int|float|null */
    public $CREDIT_FLAG = null;
    /** @var int|float|null */
    public $TRANSFERRED = null;
    /** @var int|float|null */
    public $INUSE = null;
    /** @var int|float|null */
    public $EXTENREF = null;
    /** @var int|float|null */
    public $RC_XRATE_COLL = null;
    /** @var int|float|null */
    public $TC_XRATE_COLL = null;
    /** @var int|float|null */
    public $USE_RAISED_VAL = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    /** @var int|float|null */
    public $CURRSEL_TRANS = null;
    /** @var int|float|null */
    public $STAMP_FEE_REQ = null;
    /** @var int|float|null */
    public $CSREF = null;
    /** @var int|float|null */
    public $ROLLREF = null;
    /** @var int|float|null */
    public $TRCODE = null;
    /** @var int|float|null */
    public $ACCOUNTED = null;
    /** @var int|float|null */
    public $DEVIR = null;
    /** @var int|float|null */
    public $TRANS_STATUS = null;
    /** @var int|float|null */
    public $CARDMD = null;
    /** @var int|float|null */
    public $CARDREF = null;
    /** @var int|float|null */
    public $STATUS_ORDER = null;
    /** @var int|float|null */
    public $LINENO = null;
    public ?string $GL_CODE1 = null;
    /** @var int|float|null */
    public $ACCREF = null;
    public ?string $OHP_CODE1 = null;
    /** @var int|float|null */
    public $COSTREF = null;
    public ?string $GL_CODE2 = null;
    /** @var int|float|null */
    public $CRSACCREF = null;
    public ?string $OHP_CODE2 = null;
    /** @var int|float|null */
    public $CRSCOSTREF = null;
    /** @var int|float|null */
    public $FROMCASH = null;
    /** @var int|float|null */
    public $LINEEXCTYP = null;
    public ?string $XBUFS = null;
    public ?string $DOCALS = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $OP_STATUS = null;
    public ?string $SERIAL_NR = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $DATA_SITEID1 = null;
    /** @var int|float|null */
    public $DATA_REFERENCE1 = null;
    /** @var int|float|null */
    public $XML_ATTRIBUTE1 = null;
    /** @var int|float|null */
    public $AFFECT_COLLATRL = null;
    public ?string $COLLATRL_ROLLFC = null;
    /** @var int|float|null */
    public $COLLATRL_ROLLREF = null;
    public ?string $COLLATRL_CARDNO = null;
    /** @var int|float|null */
    public $COLLATRL_CARDREF = null;
    /** @var int|float|null */
    public $AFFECT_RISK = null;
    public ?string $ORGLOGOID = null;
    public ?string $ORGLOGOID1 = null;
    /** @var int|float|null */
    public $GIRO_RC_XRATE = null;
    /** @var int|float|null */
    public $GIRO_TC_XRATE = null;
    /** @var int|float|null */
    public $GIRO_AMOUNT = null;
    /** @var int|float|null */
    public $GIRO_RC_AMOUNT = null;
    /** @var int|float|null */
    public $USE_GIRO_RATE = null;
    public ?string $TAX_NR = null;
    /** @var RscollectionrsChqpnstatxml|null */
    public $STATUS_LIST = null;
    public ?string $CS_IBAN = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    public ?string $SALESMAN_CODE = null;
    public ?string $DEPT_ADDRESS1 = null;
    public ?string $DEPT_ADDRESS2 = null;
    public ?string $DEPT_CITY = null;
    public ?string $DEPT_CITY_CODE = null;
    public ?string $DEPT_COUNTRY = null;
    public ?string $DEPT_COUNTRY_CODE = null;
    public ?string $DEPT_POST_CODE = null;
    public ?string $DEPT_TELNR1 = null;
    public ?string $DEPT_TELNR2 = null;
    public ?string $DEPT_FAXNR = null;
    public ?string $DEPT_TOWN = null;
    public ?string $DEPT_TOWN_CODE = null;
    public ?string $DEPT_DISTRICT = null;
    public ?string $DEPT_DISTRICT_CODE = null;
    /** @var int|float|null */
    public $SUBDURATION = null;
    /** @var int|float|null */
    public $CIRO = null;
    public ?string $GL_CODE3 = null;
    /** @var int|float|null */
    public $CLACCREF = null;
    public ?string $OHP_CODE3 = null;
    /** @var int|float|null */
    public $CLCOSTREF = null;
    /** @var int|float|null */
    public $OFFER_REFERENCE = null;
    public ?string $TRADING_GRP = null;
    /** @var int|float|null */
    public $BNCREREF = null;
    public ?string $BANK_CRE_CODE = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $DEFNFLDSLIST = null;
    /** @var int|float|null */
    public $STATUS = null;
    public ?string $GUID = null;
    /** @var int|float|null */
    public $PARTIAL = null;
    /** @var int|float|null */
    public $CLTRCURR = null;
    /** @var int|float|null */
    public $CLTRRATE = null;
    /** @var int|float|null */
    public $CLTRNET = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'STATUS_LIST' => \LogoObjects\Clients\chequeAndPnoteRolls\RscollectionrsChqpnstatxml::class,
            'DEFNFLDSLIST' => \LogoObjects\Clients\chequeAndPnoteRolls\Rscollectionextendedfielddefinitions::class,
        ]);
    }
}

/**
 * RsChqpnstatxml
 */
class RsChqpnstatxml extends \LogoObjects\Types\BaseEntity
{
    public ?string $DATE = null;
    /** @var int|float|null */
    public $CSREF = null;
    /** @var int|float|null */
    public $ROLLREF = null;
    /** @var int|float|null */
    public $TRCODE = null;
    /** @var int|float|null */
    public $ACCOUNTED = null;
    /** @var int|float|null */
    public $DEVIR = null;
    /** @var int|float|null */
    public $STATUS = null;
    /** @var int|float|null */
    public $CARDMD = null;
    /** @var int|float|null */
    public $CARDREF = null;
    /** @var int|float|null */
    public $STATNO = null;
    /** @var int|float|null */
    public $LINENO = null;
    /** @var int|float|null */
    public $ACCREF = null;
    /** @var int|float|null */
    public $COSTREF = null;
    /** @var int|float|null */
    public $CRSACCREF = null;
    /** @var int|float|null */
    public $CRSCOSTREF = null;
    /** @var int|float|null */
    public $FROMCASH = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    /** @var int|float|null */
    public $LINEEXCTYP = null;
    /** @var int|float|null */
    public $OPSTAT = null;
    /** @var int|float|null */
    public $PROVLNACCREF = null;
    /** @var int|float|null */
    public $PROVLNCOSTREF = null;
    /** @var int|float|null */
    public $AFFECTCOLLATRL = null;
    /** @var int|float|null */
    public $AFFECTRISK = null;
    public ?string $ORGLOGOID = null;
    /** @var int|float|null */
    public $USEGIRORATE = null;
    /** @var int|float|null */
    public $FROMBANK = null;
    public ?string $STATSTR = null;
    public ?string $ACCSTR = null;
    public ?string $FCNR = null;
    public ?string $FCTYPE = null;
    public ?string $CASHFLAG = null;
    public ?string $BANK_CODE = null;
    public ?string $BANK_TITLE = null;
    public ?string $BANK_BRANCH = null;
    public ?string $BANK_BRANCH_NUMBER = null;
    public ?string $BANK_ACC_CODE = null;
    public ?string $BANK_ACC_TITLE = null;
    public ?string $BANK_ACC_NUMBER = null;
    /** @var int|float|null */
    public $BNCREREF = null;
    public ?string $BANK_CRE_CODE = null;
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
 * RsArptransxml
 */
class RsArptransxml extends \LogoObjects\Types\BaseEntity
{
    public ?string $ARP_CODE = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    public ?string $GL_CODE1 = null;
    /** @var int|float|null */
    public $CLACCREF = null;
    public ?string $OHP_CODE1 = null;
    /** @var int|float|null */
    public $CLCENTERREF = null;
    public ?string $OHP_CODE2 = null;
    /** @var int|float|null */
    public $CASHCENTERREF = null;
    public ?string $GL_CODE2 = null;
    /** @var int|float|null */
    public $CASHACCOUNTREF = null;
    /** @var int|float|null */
    public $VIRMANREF = null;
    /** @var int|float|null */
    public $SOURCEFREF = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $DIVISION = null;
    /** @var int|float|null */
    public $MODULENR = null;
    /** @var int|float|null */
    public $TRCODE = null;
    /** @var int|float|null */
    public $LINENR = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    public ?string $CYPHCODE = null;
    public ?string $AUXIL_CODE2 = null;
    public ?string $TRANNO = null;
    public ?string $DOC_NUMBER = null;
    public ?string $DESCRIPTION = null;
    /** @var int|float|null */
    public $GL_POSTED = null;
    /** @var int|float|null */
    public $DEBIT = null;
    /** @var int|float|null */
    public $CREDIT = null;
    /** @var int|float|null */
    public $SIGN = null;
    /** @var int|float|null */
    public $TOTAL_VAT = null;
    /** @var int|float|null */
    public $TOTAL_VAT_TC = null;
    /** @var int|float|null */
    public $TOTAL_VAT_RC = null;
    /** @var int|float|null */
    public $GROSS_AMOUNT = null;
    /** @var int|float|null */
    public $GROSS_AMOUNT_TC = null;
    /** @var int|float|null */
    public $GROSS_AMOUNT_RC = null;
    /** @var int|float|null */
    public $NET_AMOUNT = null;
    /** @var int|float|null */
    public $NET_AMOUNT_TC = null;
    /** @var int|float|null */
    public $NET_AMOUNT_RC = null;
    /** @var int|float|null */
    public $AMOUNT = null;
    /** @var int|float|null */
    public $CURR_TRANS = null;
    /** @var int|float|null */
    public $TC_XRATE = null;
    /** @var int|float|null */
    public $TC_AMOUNT = null;
    /** @var int|float|null */
    public $RC_XRATE = null;
    /** @var int|float|null */
    public $RC_AMOUNT = null;
    /** @var int|float|null */
    public $BNLN_TC_CURR = null;
    /** @var int|float|null */
    public $BNLN_TC_XRATE = null;
    /** @var int|float|null */
    public $BNLN_TC_AMOUNT = null;
    /** @var int|float|null */
    public $EXTENREF = null;
    public ?string $PAYMENT_CODE = null;
    /** @var int|float|null */
    public $PAYDEFREF = null;
    /** @var int|float|null */
    public $ACCFICHEREF = null;
    /** @var int|float|null */
    public $PRINTCNT = null;
    public ?string $PRINT_DATE = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    /** @var int|float|null */
    public $TRGFLAG = null;
    public ?string $TRADING_GRP = null;
    /** @var int|float|null */
    public $CURRSEL_TRANS = null;
    /** @var int|float|null */
    public $SINGLE_PAYMENT = null;
    /** @var int|float|null */
    public $DISCOUNTED = null;
    /** @var int|float|null */
    public $DISCOUNT_RATE = null;
    /** @var int|float|null */
    public $STOPPAGE_AMOUNT = null;
    /** @var int|float|null */
    public $STOPPAGE_AMOUNT_TC = null;
    /** @var int|float|null */
    public $STOPPAGE_AMOUNT_RC = null;
    /** @var int|float|null */
    public $VAT_RATE = null;
    /** @var int|float|null */
    public $VAT_AMOUNTX = null;
    /** @var int|float|null */
    public $VAT_AMOUNTX_TC = null;
    /** @var int|float|null */
    public $VAT_AMOUNTX_RC = null;
    /** @var int|float|null */
    public $DISCOUNTED_AMOUNT = null;
    public ?string $GL_CODE3 = null;
    /** @var int|float|null */
    public $DISCACCREF = null;
    public ?string $OHP_CODE3 = null;
    /** @var int|float|null */
    public $DISCCENREF = null;
    public ?string $GL_CODE4 = null;
    /** @var int|float|null */
    public $VATRACCREF = null;
    public ?string $OHP_CODE4 = null;
    /** @var RscollectionrsPaylstxml|null */
    public $PAYMENT_LIST = null;
    /** @var int|float|null */
    public $VATRCENREF = null;
    /** @var int|float|null */
    public $PAYMENTREF = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $INFLATION_IDX = null;
    public ?string $CASH_TRAN_GRP_NO = null;
    /** @var int|float|null */
    public $CASH_TRAN_GRPLINE_NO = null;
    /** @var int|float|null */
    public $CASH_INFLDX = null;
    /** @var int|float|null */
    public $CASH_ORGLOGOID = null;
    /** @var int|float|null */
    public $INVOICE_ORGLOGOID = null;
    public ?string $CREDIT_CARD_NO = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    public ?string $PROJECT_CODE = null;
    public ?string $EXIM_FILECODE_CLF = null;
    public ?string $EXIM_FILECODE = null;
    /** @var int|float|null */
    public $EXIM_FILEREF = null;
    /** @var int|float|null */
    public $EXIM_FILELINENR = null;
    /** @var int|float|null */
    public $EXIM_PROCNR = null;
    /** @var int|float|null */
    public $FUNDSHARERAT = null;
    /** @var int|float|null */
    public $FUNDSHARE_AMOUNT = null;
    /** @var int|float|null */
    public $FUNDSHARE_AMOUNT_TC = null;
    /** @var int|float|null */
    public $FUNDSHARE_AMOUNT_RC = null;
    /** @var int|float|null */
    public $MONTH = null;
    /** @var int|float|null */
    public $YEAR = null;
    /** @var int|float|null */
    public $AFFECT_COLLATRL = null;
    /** @var int|float|null */
    public $GRPFIRMTRANS = null;
    /** @var int|float|null */
    public $AFFECT_RISK = null;
    public ?string $BATCH_NR = null;
    public ?string $APPROVE_NR = null;
    public ?string $ORGLOGOID = null;
    /** @var int|float|null */
    public $BANKACCREF = null;
    public ?string $BANKACC_CODE = null;
    /** @var int|float|null */
    public $BNACCREF = null;
    public ?string $BANK_GL_CODE = null;
    /** @var int|float|null */
    public $BNCENTERREF = null;
    public ?string $BANK_OHP_CODE = null;
    public ?string $DEVIR_PROC_DATE = null;
    public ?string $DOC_DATE = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    public ?string $SALESMAN_CODE = null;
    /** @var int|float|null */
    public $POSCOMMACCREF = null;
    public ?string $POSCOMM_GL_CODE = null;
    /** @var int|float|null */
    public $POSCOMMCENREF = null;
    public ?string $POSCOMM_OHP_CODE = null;
    /** @var int|float|null */
    public $POINTCOMMACCREF = null;
    public ?string $POINTCOMM_GL_CODE = null;
    /** @var int|float|null */
    public $POINTCOMMCENREF = null;
    public ?string $POINTCOMM_OHP_CODE = null;
    /** @var int|float|null */
    public $VAT_AMOUNT = null;
    /** @var int|float|null */
    public $RETCCFCREF = null;
    public ?string $RET_CC_FC_NO = null;
    /** @var int|float|null */
    public $CAN_DEDUCT = null;
    /** @var int|float|null */
    public $DEDUCTION_PART1 = null;
    /** @var int|float|null */
    public $DEDUCTION_PART2 = null;
    /** @var int|float|null */
    public $DEDUCTION_AMOUNT = null;
    /** @var int|float|null */
    public $DEDUCTION_AMOUNT_TC = null;
    /** @var int|float|null */
    public $DEDUCTION_AMOUNT_RC = null;
    /** @var int|float|null */
    public $CANT_CRE_DEDUCT = null;
    /** @var int|float|null */
    public $INC_DEDUCT_AMOUNT = null;
    public ?string $GL_CODE5 = null;
    /** @var int|float|null */
    public $VAT_DEDUCT_ACCREF = null;
    public ?string $OHP_CODE5 = null;
    /** @var int|float|null */
    public $VAT_DEDUCT_CENREF = null;
    public ?string $GL_CODE6 = null;
    /** @var int|float|null */
    public $VAT_DEDUCT_OTHACCREF = null;
    public ?string $OHP_CODE6 = null;
    /** @var int|float|null */
    public $VAT_DEDUCT_OTHCENREF = null;
    /** @var int|float|null */
    public $DISTRIBUTION_TYPE_FNO = null;
    /** @var int|float|null */
    public $OFFER_REFERENCE = null;
    /** @var int|float|null */
    public $AFFECT_COST = null;
    public ?string $SERVICE_REASON = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $DEFNFLDSLIST = null;
    /** @var RscollectionrsPreaccdistlnxml|null */
    public $PREACCLINES = null;
    public ?string $GUID = null;
    /** @var int|float|null */
    public $EQUALIZE_BALANCE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'PAYMENT_LIST' => \LogoObjects\Clients\chequeAndPnoteRolls\RscollectionrsPaylstxml::class,
            'DEFNFLDSLIST' => \LogoObjects\Clients\chequeAndPnoteRolls\Rscollectionextendedfielddefinitions::class,
            'PREACCLINES' => \LogoObjects\Clients\chequeAndPnoteRolls\RscollectionrsPreaccdistlnxml::class,
        ]);
    }
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
            'DISCTRLIST' => \LogoObjects\Clients\chequeAndPnoteRolls\RscollectionrsDiscpaytrxml::class,
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
 * RsPreaccdistlnxml
 */
class RsPreaccdistlnxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $FICHEREF = null;
    /** @var int|float|null */
    public $LINENR = null;
    /** @var int|float|null */
    public $PREVLINEREF = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    /** @var int|float|null */
    public $DISTRATE = null;
    /** @var int|float|null */
    public $LINEEXCTYP = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $TSIGN = null;
    /** @var int|float|null */
    public $CANCELED = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
    /** @var int|float|null */
    public $STATUS = null;
    /** @var int|float|null */
    public $MONTH = null;
    /** @var int|float|null */
    public $YEAR = null;
    /** @var int|float|null */
    public $PREVLINETYPE = null;
    /** @var int|float|null */
    public $MODULNR = null;
    public ?string $CENTERCODE = null;
    public ?string $CENTERNAME = null;
    public ?string $PROJECTCODE = null;
    public ?string $PROJECTNAME = null;
    /** @var int|float|null */
    public $CREDEBNET = null;
    /** @var int|float|null */
    public $EDTCREDEBNET = null;
    /** @var int|float|null */
    public $EMUCREDEBNET = null;
}

/**
 * RsBanktransxml
 */
class RsBanktransxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $TYPE = null;
    public ?string $TRANNO = null;
    /** @var int|float|null */
    public $BANKREF = null;
    public ?string $BANKACC_CODE = null;
    /** @var int|float|null */
    public $BNACCREF = null;
    public ?string $ARP_CODE = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    public ?string $GL_CODE1 = null;
    /** @var int|float|null */
    public $ACCOUNTREF = null;
    public ?string $OHP_CODE1 = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    public ?string $GL_CODE2 = null;
    /** @var int|float|null */
    public $BNACCOUNTREF = null;
    public ?string $OHP_CODE2 = null;
    /** @var int|float|null */
    public $BNCENTERREF = null;
    /** @var int|float|null */
    public $VIRMANREF = null;
    /** @var int|float|null */
    public $SOURCEFREF = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $TIME = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $BRANCH = null;
    /** @var int|float|null */
    public $SIGN = null;
    /** @var int|float|null */
    public $TRCODE = null;
    /** @var int|float|null */
    public $MODULENR = null;
    /** @var int|float|null */
    public $LINENR = null;
    public ?string $AUXIL_CODE = null;
    public ?string $CYPHCODE = null;
    public ?string $DOC_NUMBER = null;
    public ?string $DESCRIPTION = null;
    /** @var int|float|null */
    public $ACCOUNTED = null;
    /** @var int|float|null */
    public $CURR_TRANS = null;
    /** @var int|float|null */
    public $DEBIT = null;
    /** @var int|float|null */
    public $CREDIT = null;
    /** @var int|float|null */
    public $AMOUNT = null;
    /** @var int|float|null */
    public $TC_XRATE = null;
    /** @var int|float|null */
    public $TC_AMOUNT = null;
    /** @var int|float|null */
    public $RC_XRATE = null;
    /** @var int|float|null */
    public $RC_AMOUNT = null;
    /** @var int|float|null */
    public $EXTENREF = null;
    /** @var int|float|null */
    public $ACCFICHEREF = null;
    /** @var int|float|null */
    public $PRINTCNT = null;
    public ?string $PRINT_DATE = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    public ?string $ARP_BNKDIV_NR = null;
    public ?string $ARP_BNKACCOUNT_NR = null;
    public ?string $BNK_TRACKING_NR = null;
    /** @var int|float|null */
    public $TRN_STATE = null;
    public ?string $TRADING_GRP = null;
    /** @var int|float|null */
    public $CURRSEL_TRANS = null;
    /** @var int|float|null */
    public $DISCOUNTED = null;
    /** @var int|float|null */
    public $DISCOUNT_RATE = null;
    /** @var int|float|null */
    public $VAT_RATE = null;
    /** @var int|float|null */
    public $ARP_CLOSE_AMOUNT = null;
    public ?string $GL_CODE3 = null;
    /** @var int|float|null */
    public $DISCACCREF = null;
    public ?string $OHP_CODE3 = null;
    /** @var int|float|null */
    public $DISCCENREF = null;
    /** @var int|float|null */
    public $VATRACCREF = null;
    /** @var int|float|null */
    public $VATRCENREF = null;
    /** @var int|float|null */
    public $PAYMENTREF = null;
    /** @var int|float|null */
    public $BANK_PROC_TYPE = null;
    /** @var int|float|null */
    public $BANK_PROC_CODE = null;
    /** @var int|float|null */
    public $XBUFS = null;
    public ?string $DUE_DATE = null;
    /** @var int|float|null */
    public $OP_STATUS = null;
    /** @var int|float|null */
    public $INFLATION_IDX = null;
    public ?string $CASH_TRAN_GRP_NO = null;
    /** @var int|float|null */
    public $CASH_TRAN_GRPLINE_NO = null;
    /** @var int|float|null */
    public $CASH_INFLDX = null;
    public ?string $EXIM_FICHENO = null;
    public ?string $CASH_ORGLOGOID = null;
    /** @var int|float|null */
    public $BNTRAN_VAT_INC = null;
    /** @var int|float|null */
    public $BNTRAN_VAT_RAT = null;
    /** @var int|float|null */
    public $BNTRAN_VAT_ACCREF = null;
    /** @var int|float|null */
    public $BNTRAN_VAT_CENREF = null;
    /** @var int|float|null */
    public $BNTRAN_VAT_TOT = null;
    /** @var int|float|null */
    public $EXIM_PARITY = null;
    public ?string $EXIM_CREDIT_CODE = null;
    /** @var int|float|null */
    public $EXIM_CREDIT_REF = null;
    public ?string $EXIM_FILE_CODE = null;
    /** @var int|float|null */
    public $EXIM_FILE_REF = null;
    /** @var int|float|null */
    public $EXIM_FILELINENR = null;
    /** @var int|float|null */
    public $COMS_TYPE = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    public ?string $TRANGRPDATE = null;
    public ?string $TRANGRPNO = null;
    public ?string $BANKREFNR = null;
    public ?string $CUSTOM_DOC_NUMBER = null;
    /** @var int|float|null */
    public $DABLNREF = null;
    /** @var int|float|null */
    public $TRANSREF = null;
    /** @var int|float|null */
    public $AFFECT_COLLATRL = null;
    public ?string $COLLATRL_ROLLFC = null;
    /** @var int|float|null */
    public $COLLATRL_ROLLREF = null;
    /** @var int|float|null */
    public $COLLATRL_ROLLTRNSREF = null;
    /** @var int|float|null */
    public $COLLATRL_CARDREF = null;
    /** @var int|float|null */
    public $GRPFIRMTRANS = null;
    /** @var int|float|null */
    public $AFFECT_RISK = null;
    /** @var int|float|null */
    public $BNK_CRE_SOURCE = null;
    /** @var int|float|null */
    public $BNK_CRE_LINE_TYPE = null;
    public ?string $ORGLOGOID = null;
    /** @var RscollectionrsPaylstxml|null */
    public $PAYMENT_LIST = null;
    /** @var int|float|null */
    public $CS_TRANS_REFERENCE = null;
    public ?string $IBAN = null;
    public ?string $BANK_BRANCHS = null;
    public ?string $BANK_NAMES = null;
    /** @var int|float|null */
    public $COST_OWNER = null;
    public ?string $COST_ACCOUNT = null;
    /** @var int|float|null */
    public $CRCARD_WIZARD = null;
    public ?string $BANK_BRANCH_NR = null;
    public ?string $BANK_ACCOUNT_NR = null;
    public ?string $CL_TCK_NR = null;
    public ?string $CL_TAX_NR = null;
    /** @var int|float|null */
    public $CL_TR_CURR = null;
    /** @var int|float|null */
    public $CL_TR_RATE = null;
    /** @var int|float|null */
    public $CL_TR_NET = null;
    /** @var int|float|null */
    public $COST_TOTAL = null;
    /** @var int|float|null */
    public $BSMV_TOTAL = null;
    /** @var int|float|null */
    public $REP_COST_TOTAL = null;
    /** @var int|float|null */
    public $REP_BSMV_TOTAL = null;
    /** @var int|float|null */
    public $TR_COST_TOTAL = null;
    /** @var int|float|null */
    public $TR_BSMV_TOTAL = null;
    /** @var int|float|null */
    public $BNTRCOSTACCREF = null;
    /** @var int|float|null */
    public $BNTRCOSTACCREF2 = null;
    /** @var int|float|null */
    public $BNTRCOSTCENREF = null;
    /** @var int|float|null */
    public $BNBSMVACCREF = null;
    /** @var int|float|null */
    public $BNBSMVCENREF = null;
    public ?string $BN_COST_GL_CODE = null;
    public ?string $BN_COST_GL_CODE2 = null;
    public ?string $BN_COST_OHP_CODE = null;
    public ?string $BN_BSMV_GL_CODE = null;
    public ?string $BN_BSMV_OHP_CODE = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    public ?string $SALESMAN_CODE = null;
    /** @var int|float|null */
    public $BNINTACCREF = null;
    public ?string $BN_INT_GL_CODE = null;
    /** @var int|float|null */
    public $BNINTCENREF = null;
    public ?string $BN_INT_OHP_CODE = null;
    /** @var int|float|null */
    public $BNKKDFACCREF = null;
    public ?string $BN_KKDF_GL_CODE = null;
    /** @var int|float|null */
    public $BNKKDFCENREF = null;
    public ?string $BN_KKDF_OHP_CODE = null;
    /** @var int|float|null */
    public $DBS = null;
    public ?string $CREDIT_LETTER_NUMBER = null;
    /** @var int|float|null */
    public $BNTRANCOSTTOTINC = null;
    /** @var int|float|null */
    public $BN_CRDTYPE = null;
    /** @var int|float|null */
    public $DIVISION = null;
    /** @var int|float|null */
    public $CRCARD_FICHEREF = null;
    /** @var int|float|null */
    public $CRCARD_PAYTRREF = null;
    /** @var int|float|null */
    public $BNFINCOSTACCREF = null;
    public ?string $BN_FIN_COST_GL_CODE = null;
    /** @var int|float|null */
    public $BNFINCOSTCENREF = null;
    public ?string $BN_FIN_COST_OHP_CODE = null;
    /** @var int|float|null */
    public $OFFER_REFERENCE = null;
    public ?string $DOC_DATE = null;
    /** @var int|float|null */
    public $COSTACCREF = null;
    public ?string $COST_BNACC_CODE = null;
    /** @var int|float|null */
    public $BANK_CREDIT_REF = null;
    public ?string $BANK_CREDIT_CODE = null;
    /** @var int|float|null */
    public $BANK_CREDIT_TRRATE = null;
    public ?string $GUID = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $DEFNFLDSLIST = null;
    public ?string $CUST_TITLE = null;
    public ?string $BANK_GP_ADDR = null;
    public ?string $BANK_GP_PLATE = null;
    /** @var int|float|null */
    public $PROCESSACCREF = null;
    public ?string $PROCESS_GL_CODE = null;
    /** @var int|float|null */
    public $PROCESSCENREF = null;
    public ?string $PROCESS_OHP_CODE = null;
    /** @var int|float|null */
    public $BNGPTAXACCREF = null;
    public ?string $BANK_GP_TAX_GL_CODE = null;
    /** @var int|float|null */
    public $BNGPTAXCENREF = null;
    public ?string $BANK_GP_TAX_OHP_CODE = null;
    /** @var int|float|null */
    public $BNGPFUNDACCREF = null;
    public ?string $BANK_GP_FUND_GL_CODE = null;
    /** @var int|float|null */
    public $BNGPFUNDCENREF = null;
    public ?string $BANK_GP_FUND_OHP_CODE = null;
    /** @var int|float|null */
    public $BANK_GP_OP_TYPE = null;
    /** @var int|float|null */
    public $BANK_GP_INCOME_TAXRATE = null;
    /** @var int|float|null */
    public $BANK_GP_FUND_SHARERATE = null;
    public ?string $TYPE_CODE = null;
    /** @var int|float|null */
    public $FUND_QUANTITY = null;
    /** @var int|float|null */
    public $STATUS = null;
    /** @var RscollectionrsPreaccdistlnxml|null */
    public $PREACCLINES = null;
    /** @var int|float|null */
    public $EQUALIZE_BALANCE = null;
    /** @var int|float|null */
    public $PAYTYPE = null;
    /** @var int|float|null */
    public $PAYINFO = null;
    public ?string $SPECODE2 = null;
    /** @var int|float|null */
    public $BNCRLONGDACCREF = null;
    /** @var int|float|null */
    public $BNCRLONGDCENREF = null;
    /** @var int|float|null */
    public $BNINTFYACCREF = null;
    /** @var int|float|null */
    public $BNINTFYCENREF = null;
    /** @var int|float|null */
    public $BNBSMVFYACCREF = null;
    /** @var int|float|null */
    public $BNBSMVFYCENREF = null;
    /** @var int|float|null */
    public $BNKKDFFYACCREF = null;
    /** @var int|float|null */
    public $BNKKDFFYCENREF = null;
    /** @var int|float|null */
    public $BNEXPACCRFMACCREF = null;
    /** @var int|float|null */
    public $BNEXPACCRFMCENREF = null;
    /** @var int|float|null */
    public $BNEXPACCRFYACCREF = null;
    /** @var int|float|null */
    public $BNEXPACCRFYCENREF = null;
    /** @var int|float|null */
    public $VATFLAG = null;
    /** @var int|float|null */
    public $EXPBANKREF = null;
    /** @var int|float|null */
    public $EXPPARENTREF = null;
    /** @var int|float|null */
    public $EXPBNACCREF = null;
    /** @var int|float|null */
    public $EXPBNCENREF = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'PAYMENT_LIST' => \LogoObjects\Clients\chequeAndPnoteRolls\RscollectionrsPaylstxml::class,
            'DEFNFLDSLIST' => \LogoObjects\Clients\chequeAndPnoteRolls\Rscollectionextendedfielddefinitions::class,
            'PREACCLINES' => \LogoObjects\Clients\chequeAndPnoteRolls\RscollectionrsPreaccdistlnxml::class,
        ]);
    }
}

/**
 * ChequeAndPnoteRolls
 */
class ChequeAndPnoteRolls extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $TYPE = null;
    public ?string $NUMBER = null;
    public ?string $DOC_NUMBER = null;
    /** @var int|float|null */
    public $MASTER_MODULE = null;
    public ?string $MASTER_CODE = null;
    /** @var int|float|null */
    public $CARDREF = null;
    public ?string $OHP_CODE = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $DIVISION = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $DEST_DIVISION = null;
    /** @var int|float|null */
    public $DEST_DEPARTMENT = null;
    /** @var int|float|null */
    public $PROC_TYPE = null;
    /** @var int|float|null */
    public $SINGLE_PAYMENT = null;
    /** @var int|float|null */
    public $FROMCASH = null;
    /** @var int|float|null */
    public $GL_POSTED = null;
    /** @var int|float|null */
    public $AVERAGE_AGE = null;
    /** @var int|float|null */
    public $DOCUMENT_COUNT = null;
    /** @var int|float|null */
    public $PRINT_COUNTER = null;
    public ?string $PRINT_DATE = null;
    /** @var int|float|null */
    public $TOTAL = null;
    /** @var int|float|null */
    public $CURR_TRANS = null;
    /** @var int|float|null */
    public $TC_XRATE = null;
    /** @var int|float|null */
    public $TC_TOTAL = null;
    /** @var int|float|null */
    public $RC_XRATE = null;
    /** @var int|float|null */
    public $RC_TOTAL = null;
    public ?string $NOTES1 = null;
    public ?string $NOTES2 = null;
    public ?string $NOTES3 = null;
    public ?string $NOTES4 = null;
    /** @var int|float|null */
    public $ACCFICHEREF = null;
    /** @var int|float|null */
    public $CASHTRANSREF = null;
    public ?string $GL_CODE = null;
    /** @var int|float|null */
    public $ACCREF = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    /** @var int|float|null */
    public $CANCELLEDACC = null;
    public ?string $TRADING_GRP = null;
    /** @var int|float|null */
    public $CURRSEL_TOTALS = null;
    /** @var int|float|null */
    public $CURRSEL_DETAILS = null;
    /** @var RscollectionrsChqpntransxml|null */
    public $TRANSACTIONS = null;
    /** @var RscollectionrsArptransxml|null */
    public $ARP_TRANSACTIONS = null;
    /** @var RscollectionrsBanktransxml|null */
    public $BANK_TRANSACTIONS = null;
    public ?string $XBUFS = null;
    public ?string $DOCALS = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $OP_STATUS = null;
    /** @var int|float|null */
    public $INFLATION_IDX = null;
    public ?string $CASH_TRAN_GRP_NO = null;
    /** @var int|float|null */
    public $CASH_TRAN_GRPLINE_NO = null;
    /** @var int|float|null */
    public $CASH_INFLDX = null;
    public ?string $CASH_ORGLOGOID = null;
    /** @var int|float|null */
    public $FROM_CASH = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    /** @var RscollectionrsPaylstxml|null */
    public $PAYMENT_LIST = null;
    public ?string $COLLATRL_ROLLFC = null;
    /** @var int|float|null */
    public $COLLATRL_ROLLREF = null;
    /** @var int|float|null */
    public $AFFECT_COLLATRL = null;
    /** @var int|float|null */
    public $GRPFIRMTRANS = null;
    /** @var int|float|null */
    public $AFFECT_RISK = null;
    /** @var int|float|null */
    public $BNCREREF = null;
    public ?string $BANK_CREDIT_CODE = null;
    /** @var int|float|null */
    public $BNK_CRE_CTRL_TOT = null;
    public ?string $ORGLOGOID = null;
    /** @var int|float|null */
    public $FROM_BANK = null;
    /** @var int|float|null */
    public $DEG_ACTIVE = null;
    /** @var int|float|null */
    public $DEG_CURR = null;
    /** @var int|float|null */
    public $DEG_CURR_RATE = null;
    /** @var int|float|null */
    public $APPROVE = null;
    public ?string $APPROVE_DATE = null;
    /** @var int|float|null */
    public $ACC_FICHE_SITEID = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    public ?string $SALESMAN_CODE = null;
    /** @var int|float|null */
    public $CANCEL_AUTO_GL_PROC = null;
    public ?string $EBOOK_DOCDATE = null;
    /** @var int|float|null */
    public $EBOOK_NODOCUMENT = null;
    public ?string $EBOOK_DOCNR = null;
    /** @var int|float|null */
    public $EBOOK_DOCTYPE = null;
    public ?string $EBOOK_EXPLAIN = null;
    public ?string $EBOOK_PAYTYPE = null;
    /** @var int|float|null */
    public $EBOOK_NOPAY = null;
    public ?string $DOC_DATE = null;
    /** @var int|float|null */
    public $STATUS = null;
    public ?string $GUID = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $DEFNFLDSLIST = null;
    /** @var int|float|null */
    public $FROMPARTIALCSPAY = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'TRANSACTIONS' => \LogoObjects\Clients\chequeAndPnoteRolls\RscollectionrsChqpntransxml::class,
            'ARP_TRANSACTIONS' => \LogoObjects\Clients\chequeAndPnoteRolls\RscollectionrsArptransxml::class,
            'BANK_TRANSACTIONS' => \LogoObjects\Clients\chequeAndPnoteRolls\RscollectionrsBanktransxml::class,
            'PAYMENT_LIST' => \LogoObjects\Clients\chequeAndPnoteRolls\RscollectionrsPaylstxml::class,
            'DEFNFLDSLIST' => \LogoObjects\Clients\chequeAndPnoteRolls\Rscollectionextendedfielddefinitions::class,
        ]);
    }
}

/**
 * ChequeAndPnoteRollsQueryOptions
 */
class ChequeAndPnoteRollsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ChequeAndPnoteRollsSortSpec|null */
    public $sort = null;
}

/**
 * ChequeAndPnoteRollsSearchCriteria
 */
class ChequeAndPnoteRollsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $type = null;
    /** @var mixed */
    public $number = null;
    /** @var mixed */
    public $docNumber = null;
    /** @var mixed */
    public $masterModule = null;
    /** @var mixed */
    public $masterCode = null;
    /** @var mixed */
    public $cardref = null;
    /** @var mixed */
    public $ohpCode = null;
    /** @var mixed */
    public $centerref = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $date = null;
    /** @var mixed */
    public $division = null;
    /** @var mixed */
    public $department = null;
    /** @var mixed */
    public $destDivision = null;
    /** @var mixed */
    public $destDepartment = null;
    /** @var mixed */
    public $procType = null;
    /** @var mixed */
    public $singlePayment = null;
    /** @var mixed */
    public $fromcash = null;
    /** @var mixed */
    public $glPosted = null;
    /** @var mixed */
    public $averageAge = null;
    /** @var mixed */
    public $documentCount = null;
    /** @var mixed */
    public $printCounter = null;
    /** @var mixed */
    public $printDate = null;
    /** @var mixed */
    public $total = null;
    /** @var mixed */
    public $currTrans = null;
    /** @var mixed */
    public $tcXrate = null;
    /** @var mixed */
    public $tcTotal = null;
    /** @var mixed */
    public $rcXrate = null;
    /** @var mixed */
    public $rcTotal = null;
    /** @var mixed */
    public $notes1 = null;
    /** @var mixed */
    public $notes2 = null;
    /** @var mixed */
    public $notes3 = null;
    /** @var mixed */
    public $notes4 = null;
    /** @var mixed */
    public $accficheref = null;
    /** @var mixed */
    public $cashtransref = null;
    /** @var mixed */
    public $glCode = null;
    /** @var mixed */
    public $accref = null;
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
    public $cancelled = null;
    /** @var mixed */
    public $cancelledacc = null;
    /** @var mixed */
    public $tradingGrp = null;
    /** @var mixed */
    public $currselTotals = null;
    /** @var mixed */
    public $currselDetails = null;
    /** @var mixed */
    public $textinc = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $transactions = null;
    /** @var mixed */
    public $arpTransactions = null;
    /** @var mixed */
    public $bankTransactions = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $docals = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $opStatus = null;
    /** @var mixed */
    public $inflationIdx = null;
    /** @var mixed */
    public $cashTranGrpNo = null;
    /** @var mixed */
    public $cashTranGrplineNo = null;
    /** @var mixed */
    public $cashInfldx = null;
    /** @var mixed */
    public $cashOrglogoid = null;
    /** @var mixed */
    public $fromCash = null;
    /** @var mixed */
    public $projectCode = null;
    /** @var mixed */
    public $projectref = null;
    /** @var mixed */
    public $paymentList = null;
    /** @var mixed */
    public $collatrlRollfc = null;
    /** @var mixed */
    public $collatrlRollref = null;
    /** @var mixed */
    public $affectCollatrl = null;
    /** @var mixed */
    public $grpfirmtrans = null;
    /** @var mixed */
    public $affectRisk = null;
    /** @var mixed */
    public $bncreref = null;
    /** @var mixed */
    public $bankCreditCode = null;
    /** @var mixed */
    public $bnkCreCtrlTot = null;
    /** @var mixed */
    public $orglogoid = null;
    /** @var mixed */
    public $fromBank = null;
    /** @var mixed */
    public $degActive = null;
    /** @var mixed */
    public $degCurr = null;
    /** @var mixed */
    public $degCurrRate = null;
    /** @var mixed */
    public $approve = null;
    /** @var mixed */
    public $approveDate = null;
    /** @var mixed */
    public $accFicheSiteid = null;
    /** @var mixed */
    public $salesmanref = null;
    /** @var mixed */
    public $salesmanCode = null;
    /** @var mixed */
    public $cancelAutoGlProc = null;
    /** @var mixed */
    public $ebookDocdate = null;
    /** @var mixed */
    public $ebookNodocument = null;
    /** @var mixed */
    public $ebookDocnr = null;
    /** @var mixed */
    public $ebookDoctype = null;
    /** @var mixed */
    public $ebookExplain = null;
    /** @var mixed */
    public $ebookPaytype = null;
    /** @var mixed */
    public $ebookNopay = null;
    /** @var mixed */
    public $docDate = null;
    /** @var mixed */
    public $status = null;
    /** @var mixed */
    public $guid = null;
    /** @var mixed */
    public $defnfldslist = null;
    /** @var mixed */
    public $frompartialcspay = null;
}

/**
 * ChequeAndPnoteRollsAnalytics
 */
class ChequeAndPnoteRollsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
