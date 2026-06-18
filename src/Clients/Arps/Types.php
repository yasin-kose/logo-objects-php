<?php

declare(strict_types=1);

namespace LogoObjects\Clients\Arps;

/**
 * RscollectionrsArpnotesxml
 */
class RscollectionrsArpnotesxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\Arps\RsArpnotesxml::class],
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
            'items' => [\LogoObjects\Clients\Arps\ExtendedFieldDefinitions::class],
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
 * RsArpnotesxml
 */
class RsArpnotesxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $CLIENTREF = null;
    /** @var int|float|null */
    public $LINENUM = null;
    public ?string $LINE = null;
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
 * Arps
 */
class Arps extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $ACCOUNT_TYPE = null;
    public ?string $CODE = null;
    public ?string $TITLE = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    public ?string $ADDRESS1 = null;
    public ?string $ADDRESS2 = null;
    public ?string $DISTRICT_CODE = null;
    public ?string $DISTRICT = null;
    public ?string $TOWN_CODE = null;
    public ?string $TOWN = null;
    public ?string $CITY_CODE = null;
    public ?string $CITY = null;
    public ?string $COUNTRY_CODE = null;
    public ?string $COUNTRY = null;
    public ?string $POSTAL_CODE = null;
    public ?string $TELEPHONE1 = null;
    public ?string $TELEPHONE1_CODE = null;
    public ?string $TELEPHONE2 = null;
    public ?string $TELEPHONE2_CODE = null;
    public ?string $FAX = null;
    public ?string $FAX_CODE = null;
    public ?string $TAX_ID = null;
    public ?string $TAX_OFFICE = null;
    public ?string $TAX_OFFICE_CODE = null;
    public ?string $CONTACT = null;
    /** @var int|float|null */
    public $DISCOUNT_RATE = null;
    /** @var int|float|null */
    public $EXTENREF = null;
    public ?string $PAYMENT_CODE = null;
    /** @var int|float|null */
    public $PAYMENTREF = null;
    public ?string $E_MAIL = null;
    public ?string $WEB_URL = null;
    public ?string $FACEBOOK_URL = null;
    public ?string $TWITTER_URL = null;
    public ?string $APPLE_ID = null;
    public ?string $SKYPE_ID = null;
    /** @var int|float|null */
    public $REMINDER_TYPE = null;
    public ?string $REMINDER_EMAIL = null;
    public ?string $REMINDER_FAX = null;
    /** @var int|float|null */
    public $CORRESP_LANG = null;
    public ?string $VAT_ID = null;
    /** @var int|float|null */
    public $BLOCKED = null;
    public ?string $BANK_ID1 = null;
    public ?string $BANK_ID2 = null;
    public ?string $BANK_ID3 = null;
    public ?string $BANK_ID4 = null;
    public ?string $BANK_ID5 = null;
    public ?string $BANK_ID6 = null;
    public ?string $BANK_ID7 = null;
    public ?string $BANK_NAME1 = null;
    public ?string $BANK_NAME2 = null;
    public ?string $BANK_NAME3 = null;
    public ?string $BANK_NAME4 = null;
    public ?string $BANK_NAME5 = null;
    public ?string $BANK_NAME6 = null;
    public ?string $BANK_NAME7 = null;
    public ?string $BANK_ACCOUNT1 = null;
    public ?string $BANK_ACCOUNT2 = null;
    public ?string $BANK_ACCOUNT3 = null;
    public ?string $BANK_ACCOUNT4 = null;
    public ?string $BANK_ACCOUNT5 = null;
    public ?string $BANK_ACCOUNT6 = null;
    public ?string $BANK_ACCOUNT7 = null;
    public ?string $DELIVERY_METHOD = null;
    public ?string $SHIPMENT_AGENT = null;
    /** @var int|float|null */
    public $CURRENCY = null;
    public ?string $E_COMM_ID = null;
    public ?string $TRADING_GRP = null;
    /** @var int|float|null */
    public $DEBT_TRCK_TYPE = null;
    /** @var int|float|null */
    public $XRTDIF_TYPE = null;
    /** @var RscollectionrsArpnotesxml|null */
    public $NOTES = null;
    /** @var int|float|null */
    public $CREDIT_TYPE = null;
    /** @var int|float|null */
    public $CREDIT_LIMIT = null;
    /** @var int|float|null */
    public $CREDIT_BALANCED = null;
    /** @var int|float|null */
    public $RISKFACT_CHQ = null;
    /** @var int|float|null */
    public $RISKFACT_PROMNT = null;
    /** @var int|float|null */
    public $ACTION_CREDHOLD = null;
    public ?string $XBUFS = null;
    public ?string $GL_CODE = null;
    /** @var int|float|null */
    public $ACCOUNTREF = null;
    public ?string $OHP_CODE = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    public ?string $FLDALS = null;
    public ?string $ITEXT = null;
    public ?string $LANGP = null;
    public ?string $PP_GROUP_CODE = null;
    /** @var int|float|null */
    public $USE_REP_RISK = null;
    /** @var int|float|null */
    public $RISK_LIMIT = null;
    /** @var int|float|null */
    public $RISK_BALANCED = null;
    /** @var int|float|null */
    public $ORD_SEND_METHOD = null;
    public ?string $ORD_SEND_EMAIL = null;
    public ?string $ORD_SEND_FAX = null;
    /** @var int|float|null */
    public $DSP_SEND_METHOD = null;
    public ?string $DSP_SEND_EMAIL = null;
    public ?string $DSP_SEND_FAX = null;
    /** @var int|float|null */
    public $INV_SEND_METHOD = null;
    public ?string $INV_SEND_EMAIL = null;
    public ?string $INV_SEND_FAX = null;
    /** @var int|float|null */
    public $SUBSCRIBER_STATUS = null;
    public ?string $SUBSCRIBER_EXT = null;
    public ?string $AUTO_PAID_BANK = null;
    /** @var int|float|null */
    public $PAYMENT_TYPE = null;
    /** @var int|float|null */
    public $LAST_SEND_REM_LEV = null;
    /** @var int|float|null */
    public $EXT_ACC_FLAGS = null;
    /** @var int|float|null */
    public $ORD_SEND_FORMAT = null;
    /** @var int|float|null */
    public $DSP_SEND_FORMAT = null;
    /** @var int|float|null */
    public $INV_SEND_FORMAT = null;
    /** @var int|float|null */
    public $REM_SEND_FORMAT = null;
    public ?string $STORE_CREDIT_CARD_NO = null;
    /** @var int|float|null */
    public $CL_ORD_FREQ = null;
    /** @var int|float|null */
    public $ORD_DAY = null;
    public ?string $LOGOID = null;
    /** @var int|float|null */
    public $LID_Confirmed = null;
    /** @var int|float|null */
    public $E_BSNS_SEND_TYPE = null;
    /** @var int|float|null */
    public $LDX_DEF_ORDER_STAT = null;
    /** @var int|float|null */
    public $LDX_DEF_ORDER_PRC = null;
    /** @var int|float|null */
    public $ITR_SEND_METHOD = null;
    public ?string $ITR_SEND_MAIL_ADR = null;
    public ?string $ITR_SEND_FAX = null;
    /** @var int|float|null */
    public $ITR_SEND_FORMAT = null;
    /** @var int|float|null */
    public $IMG2INC = null;
    public ?string $CELL_PHONE = null;
    /** @var int|float|null */
    public $INVOICE_PRNT_CNT = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $GENIUSFLDSLIST = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $DEFNFLDSLIST = null;
    /** @var int|float|null */
    public $WFLOWCARDREF = null;
    public ?string $PARENTCLCODE = null;
    /** @var int|float|null */
    public $PARENTCLREF = null;
    /** @var int|float|null */
    public $CODE_CHANGED = null;
    /** @var int|float|null */
    public $COLLECTINV = null;
    /** @var int|float|null */
    public $PIECEORDINFLICT = null;
    public ?string $ORGLOGOID = null;
    /** @var int|float|null */
    public $PURCHBRWS = null;
    /** @var int|float|null */
    public $SALESBRWS = null;
    /** @var int|float|null */
    public $IMPBRWS = null;
    /** @var int|float|null */
    public $EXPBRWS = null;
    /** @var int|float|null */
    public $FINBRWS = null;
    /** @var int|float|null */
    public $COLLATRLRISK_TYPE = null;
    /** @var int|float|null */
    public $COLLRISK_OVER = null;
    /** @var int|float|null */
    public $COLLRISK_ORD_RISK_OVER = null;
    /** @var int|float|null */
    public $COLLRISK_DESP_RISK_OVER = null;
    /** @var int|float|null */
    public $COLLRISK_USE_REP_RISK = null;
    /** @var int|float|null */
    public $COLLRISK_PCOLLATRL_TOTAL = null;
    /** @var int|float|null */
    public $COLLRISK_REP_PCOLLATRL_TOT = null;
    /** @var int|float|null */
    public $COLLRISK_SCOLLATRL_TOTAL = null;
    /** @var int|float|null */
    public $COLLRISK_TOTAL = null;
    /** @var int|float|null */
    public $COLLRISK_REP_RISK_TOTAL = null;
    /** @var int|float|null */
    public $COLLRISK_DESP_TOTAL = null;
    /** @var int|float|null */
    public $COLLRISK_REP_DESP_RISK_TOT = null;
    /** @var int|float|null */
    public $COLLRISK_LIMIT = null;
    /** @var int|float|null */
    public $COLLRISK_REP_LIMIT = null;
    /** @var int|float|null */
    public $COLLRISK_BALANCED = null;
    /** @var int|float|null */
    public $COLLRISK_REP_BALANCED = null;
    /** @var int|float|null */
    public $COLLRISK_ORD_RISK_TOTAL = null;
    /** @var int|float|null */
    public $COLLRISK_REP_ORD_RISK_TOT = null;
    /** @var int|float|null */
    public $COLLRISK_ORD_RISK_TOT_SUGG = null;
    /** @var int|float|null */
    public $COLLRISK_REP_ORD_RISK_TOT_SUG = null;
    /** @var int|float|null */
    public $COLLRISK_SEP_CS_RISK_TOT = null;
    /** @var int|float|null */
    public $COLLRISK_CS_RISK_OVER = null;
    /** @var int|float|null */
    public $COLLRISK_CS_RISK_TOTAL = null;
    /** @var int|float|null */
    public $COLLRISK_REP_CS_RISK_TOT = null;
    /** @var int|float|null */
    public $GRPFIRMNR = null;
    /** @var int|float|null */
    public $CONSCODEREF = null;
    public ?string $CONSCODE = null;
    public ?string $AUXIL_CODE2 = null;
    public ?string $AUXIL_CODE3 = null;
    public ?string $AUXIL_CODE4 = null;
    public ?string $AUXIL_CODE5 = null;
    /** @var int|float|null */
    public $EBANKCODE = null;
    /** @var int|float|null */
    public $OFF_SEND_METHOD = null;
    public ?string $OFF_SEND_MAIL_ADDR = null;
    public ?string $OFF_SEND_FAX = null;
    /** @var int|float|null */
    public $OFF_SEND_FORMAT = null;
    /** @var int|float|null */
    public $RISK_TYPE1 = null;
    /** @var int|float|null */
    public $RISK_TYPE2 = null;
    /** @var int|float|null */
    public $RISK_TYPE3 = null;
    /** @var int|float|null */
    public $RISK_TYPE4 = null;
    /** @var int|float|null */
    public $RISK_TYPE5 = null;
    /** @var int|float|null */
    public $RISK_TYPE6 = null;
    /** @var int|float|null */
    public $RISK_TYPE7 = null;
    /** @var int|float|null */
    public $RISK_TYPE8 = null;
    /** @var int|float|null */
    public $RISK_TYPE9 = null;
    /** @var int|float|null */
    public $RISK_TYPE10 = null;
    /** @var int|float|null */
    public $RISK_TYPE11 = null;
    /** @var int|float|null */
    public $RISK_TYPE12 = null;
    /** @var int|float|null */
    public $RISK_TYPE13 = null;
    /** @var int|float|null */
    public $RISK_TYPE14 = null;
    /** @var int|float|null */
    public $RISK_TYPE15 = null;
    /** @var int|float|null */
    public $CST_CEK_RISK_FACTOR = null;
    /** @var int|float|null */
    public $CST_SENET_RISK_FACTOR = null;
    /** @var int|float|null */
    public $RISK_GRP_CONTROL = null;
    /** @var int|float|null */
    public $ACTION_CREDHOLD_ORD = null;
    /** @var int|float|null */
    public $ACTION_CREDHOLD_DESP = null;
    /** @var int|float|null */
    public $ACTION_CREDHOLD_ACC = null;
    /** @var int|float|null */
    public $ACTION_CREDHOLD_CST_CS = null;
    /** @var int|float|null */
    public $ACTION_CREDHOLD_MY_CS = null;
    /** @var int|float|null */
    public $RISK_CTRL_TYPE = null;
    /** @var int|float|null */
    public $ACC_RISK_TOTAL = null;
    /** @var int|float|null */
    public $REP_ACC_RISK_TOTAL = null;
    /** @var int|float|null */
    public $CST_CS_RISK_TOTAL = null;
    /** @var int|float|null */
    public $REP_CST_CS_RISK_TOTAL = null;
    /** @var int|float|null */
    public $MY_CS_RISK_TOTAL = null;
    /** @var int|float|null */
    public $REP_MY_CS_RISK_TOTAL = null;
    /** @var int|float|null */
    public $ORD_RISK_TOTAL = null;
    /** @var int|float|null */
    public $REP_ORD_RISK_TOTAL = null;
    /** @var int|float|null */
    public $ORD_RISK_TOTAL_SUGG = null;
    /** @var int|float|null */
    public $REP_ORD_RISK_TOTAL_SUGG = null;
    /** @var int|float|null */
    public $DESP_RISK_TOTAL = null;
    /** @var int|float|null */
    public $REP_DESP_RISK_TOTAL = null;
    /** @var int|float|null */
    public $ACC_RISK_LIMIT = null;
    /** @var int|float|null */
    public $REP_ACC_RISK_LIMIT = null;
    /** @var int|float|null */
    public $CST_CS_RISK_LIMIT = null;
    /** @var int|float|null */
    public $REP_CST_CS_RISK_LIMIT = null;
    /** @var int|float|null */
    public $MY_CS_RISK_LIMIT = null;
    /** @var int|float|null */
    public $REP_MY_CS_RISK_LIMIT = null;
    /** @var int|float|null */
    public $DESP_RISK_LIMIT = null;
    /** @var int|float|null */
    public $REP_DESP_RISK_LIMIT = null;
    /** @var int|float|null */
    public $ORD_RISK_LIMIT = null;
    /** @var int|float|null */
    public $REP_ORD_RISK_LIMIT = null;
    /** @var int|float|null */
    public $ORD_RISK_LIMIT_SUGG = null;
    /** @var int|float|null */
    public $REP_ORD_SIRK_LIMIT_SUGG = null;
    /** @var int|float|null */
    public $ACC_RISK_BALANCED = null;
    /** @var int|float|null */
    public $REP_ACC_RISK_BALANCED = null;
    /** @var int|float|null */
    public $CST_CS_RISK_BALANCED = null;
    /** @var int|float|null */
    public $REP_CST_CS_RISK_BALANCED = null;
    /** @var int|float|null */
    public $MY_CS_RISK_BALANCED = null;
    /** @var int|float|null */
    public $REP_MY_CS_RISK_BALANCED = null;
    /** @var int|float|null */
    public $DESP_RISK_BALANCED = null;
    /** @var int|float|null */
    public $REP_DESP_RISK_BALANCED = null;
    /** @var int|float|null */
    public $ORD_RISK_BALANCED = null;
    /** @var int|float|null */
    public $REP_ORD_RISK_BALANCED = null;
    /** @var int|float|null */
    public $ORD_RISK_BALANCED_SUGG = null;
    /** @var int|float|null */
    public $REP_ORD_RISK_BALANCED_SUGG = null;
    /** @var int|float|null */
    public $LOAN_GRP_CTRL = null;
    /** @var int|float|null */
    public $EBUS_DATA_SEND_TYPE = null;
    /** @var int|float|null */
    public $INI_STATUS_FLAGS = null;
    /** @var int|float|null */
    public $SLS_ORDER_STATUS = null;
    /** @var int|float|null */
    public $SLS_ORDER_PRICE = null;
    /** @var int|float|null */
    public $SAME_ITEM_CODE_USE = null;
    public ?string $IMAGE = null;
    /** @var int|float|null */
    public $IMAGE_SIZE = null;
    public ?string $MAP_ID = null;
    public ?string $LONGITUDE = null;
    public ?string $LATITUDE = null;
    public ?string $CITY_ID = null;
    public ?string $TOWN_ID = null;
    public ?string $BANK_IBAN1 = null;
    public ?string $BANK_IBAN2 = null;
    public ?string $BANK_IBAN3 = null;
    public ?string $BANK_IBAN4 = null;
    public ?string $BANK_IBAN5 = null;
    public ?string $BANK_IBAN6 = null;
    public ?string $BANK_IBAN7 = null;
    public ?string $BANK_BIC1 = null;
    public ?string $BANK_BIC2 = null;
    public ?string $BANK_BIC3 = null;
    public ?string $BANK_BIC4 = null;
    public ?string $BANK_BIC5 = null;
    public ?string $BANK_BIC6 = null;
    public ?string $BANK_BIC7 = null;
    /** @var int|float|null */
    public $PERSCOMPANY = null;
    public ?string $TCKNO = null;
    /** @var int|float|null */
    public $EXT_SEND_METHOD = null;
    public ?string $EXT_SEND_EMAIL = null;
    public ?string $EXT_SEND_FAX = null;
    /** @var int|float|null */
    public $EXT_SEND_FORMAT = null;
    /** @var int|float|null */
    public $ADDTOREFLIST = null;
    /** @var int|float|null */
    public $ORD_RISK_OVER_SUGG = null;
    public ?string $CASH_CODE = null;
    /** @var int|float|null */
    public $CASHREF = null;
    /** @var int|float|null */
    public $USED_IN_PERIODS = null;
    public ?string $CONTACT2 = null;
    public ?string $CONTACT3 = null;
    public ?string $E_MAIL2 = null;
    public ?string $E_MAIL3 = null;
    public ?string $CONTACT1_TEL_CODE = null;
    public ?string $CONTACT2_TEL_CODE = null;
    public ?string $CONTACT3_TEL_CODE = null;
    public ?string $CONTACT1_TEL = null;
    public ?string $CONTACT2_TEL = null;
    public ?string $CONTACT3_TEL = null;
    public ?string $CONTACT1_TEL_EXT = null;
    public ?string $CONTACT2_TEL_EXT = null;
    public ?string $CONTACT3_TEL_EXT = null;
    /** @var int|float|null */
    public $RSKLIM_CNTRL = null;
    /** @var int|float|null */
    public $DUEDATE_CNTRL = null;
    /** @var int|float|null */
    public $AGING_CNTRL = null;
    /** @var int|float|null */
    public $AGING_DAY = null;
    /** @var int|float|null */
    public $ORD_PRIORITY = null;
    /** @var int|float|null */
    public $ACCEPT_EINV = null;
    public ?string $EIVOICEID = null;
    /** @var int|float|null */
    public $PROFILE_ID = null;
    /** @var int|float|null */
    public $PURC_ORDER_STATUS = null;
    /** @var int|float|null */
    public $PURC_ORDER_PRICE = null;
    public ?string $BANK_CURR1 = null;
    public ?string $BANK_CURR2 = null;
    public ?string $BANK_CURR3 = null;
    public ?string $BANK_CURR4 = null;
    public ?string $BANK_CURR5 = null;
    public ?string $BANK_CURR6 = null;
    public ?string $BANK_CURR7 = null;
    /** @var int|float|null */
    public $CS_DOWNS_RISK = null;
    /** @var int|float|null */
    public $CST_CS_CIRO_RISK_OVER = null;
    /** @var int|float|null */
    public $CST_CIRO_CEK_RISK_FAC = null;
    /** @var int|float|null */
    public $CST_CIRO_SENET_RISK_FAC = null;
    /** @var int|float|null */
    public $CS_CIRO_DOWNS_RISK = null;
    /** @var int|float|null */
    public $CST_CS_CIRO_RISK_LIMIT = null;
    /** @var int|float|null */
    public $REP_CST_CS_CIRO_RISK_LIMIT = null;
    /** @var int|float|null */
    public $CST_CS_CIRO_RISK_BALANCED = null;
    /** @var int|float|null */
    public $REP_CST_CS_CIRO_RISK_BALANCED = null;
    /** @var int|float|null */
    public $CST_CS_OWN_RISK_TOTAL = null;
    /** @var int|float|null */
    public $REP_CST_CS_OWN_RISK_TOTAL = null;
    /** @var int|float|null */
    public $CST_CS_CIRO_RISK_TOTAL = null;
    /** @var int|float|null */
    public $REP_CST_CS_CIRO_RISK_TOTAL = null;
    /** @var int|float|null */
    public $DESP_RISK_OVER_SUGG = null;
    /** @var int|float|null */
    public $DESP_RISK_LIMIT_SUGG = null;
    /** @var int|float|null */
    public $REP_DESP_RISK_LIMIT_SUGG = null;
    /** @var int|float|null */
    public $DESP_RISK_TOTAL_SUGG = null;
    /** @var int|float|null */
    public $REP_DESP_RISK_TOTAL_SUGG = null;
    /** @var int|float|null */
    public $DESP_RISK_BALANCED_SUGG = null;
    /** @var int|float|null */
    public $REP_DESP_RISK_BALANCED_SUGG = null;
    /** @var int|float|null */
    public $DBS_LIMIT1 = null;
    /** @var int|float|null */
    public $DBS_LIMIT2 = null;
    /** @var int|float|null */
    public $DBS_LIMIT3 = null;
    /** @var int|float|null */
    public $DBS_LIMIT4 = null;
    /** @var int|float|null */
    public $DBS_LIMIT5 = null;
    /** @var int|float|null */
    public $DBS_LIMIT6 = null;
    /** @var int|float|null */
    public $DBS_LIMIT7 = null;
    /** @var int|float|null */
    public $DBS_TOTAL1 = null;
    /** @var int|float|null */
    public $DBS_TOTAL2 = null;
    /** @var int|float|null */
    public $DBS_TOTAL3 = null;
    /** @var int|float|null */
    public $DBS_TOTAL4 = null;
    /** @var int|float|null */
    public $DBS_TOTAL5 = null;
    /** @var int|float|null */
    public $DBS_TOTAL6 = null;
    /** @var int|float|null */
    public $DBS_TOTAL7 = null;
    /** @var int|float|null */
    public $DBS_BANKNO1 = null;
    /** @var int|float|null */
    public $DBS_BANKNO2 = null;
    /** @var int|float|null */
    public $DBS_BANKNO3 = null;
    /** @var int|float|null */
    public $DBS_BANKNO4 = null;
    /** @var int|float|null */
    public $DBS_BANKNO5 = null;
    /** @var int|float|null */
    public $DBS_BANKNO6 = null;
    /** @var int|float|null */
    public $DBS_BANKNO7 = null;
    /** @var int|float|null */
    public $DBS_RSKCTRL1 = null;
    /** @var int|float|null */
    public $DBS_RSKCTRL2 = null;
    /** @var int|float|null */
    public $DBS_RSKCTRL3 = null;
    /** @var int|float|null */
    public $DBS_RSKCTRL4 = null;
    /** @var int|float|null */
    public $DBS_RSKCTRL5 = null;
    /** @var int|float|null */
    public $DBS_RSKCTRL6 = null;
    /** @var int|float|null */
    public $DBS_RSKCTRL7 = null;
    /** @var int|float|null */
    public $DBS_CURR1 = null;
    /** @var int|float|null */
    public $DBS_CURR2 = null;
    /** @var int|float|null */
    public $DBS_CURR3 = null;
    /** @var int|float|null */
    public $DBS_CURR4 = null;
    /** @var int|float|null */
    public $DBS_CURR5 = null;
    /** @var int|float|null */
    public $DBS_CURR6 = null;
    /** @var int|float|null */
    public $DBS_CURR7 = null;
    public ?string $BANK_CORRP_ACC1 = null;
    public ?string $BANK_CORRP_ACC2 = null;
    public ?string $BANK_CORRP_ACC3 = null;
    public ?string $BANK_CORRP_ACC4 = null;
    public ?string $BANK_CORRP_ACC5 = null;
    public ?string $BANK_CORRP_ACC6 = null;
    public ?string $BANK_CORRP_ACC7 = null;
    public ?string $BANK_VOEN1 = null;
    public ?string $BANK_VOEN2 = null;
    public ?string $BANK_VOEN3 = null;
    public ?string $BANK_VOEN4 = null;
    public ?string $BANK_VOEN5 = null;
    public ?string $BANK_VOEN6 = null;
    public ?string $BANK_VOEN7 = null;
    /** @var int|float|null */
    public $EINVOICE_TYPE = null;
    /** @var int|float|null */
    public $EARCHIVE_SEND_MODE = null;
    /** @var int|float|null */
    public $EARCHIVE_IS_RETAIL_AR_AP = null;
    public ?string $TITLE2 = null;
    public ?string $TELEPHONE_EXTENSION1 = null;
    public ?string $TELEPHONE_EXTENSION2 = null;
    public ?string $FAX_EXTENSION = null;
    public ?string $GLOBAL_ID = null;
    /** @var int|float|null */
    public $ISFOREIGN = null;
    public ?string $POST_LABEL = null;
    public ?string $SENDER_LABEL = null;
    /** @var int|float|null */
    public $DEG_ACTIVE = null;
    /** @var int|float|null */
    public $DEG_CURR = null;
    public ?string $NAME = null;
    public ?string $SURNAME = null;
    /** @var int|float|null */
    public $LABEL_INFO = null;
    /** @var int|float|null */
    public $DUE_DATE_CONTOL1 = null;
    /** @var int|float|null */
    public $DUE_DATE_CONTOL2 = null;
    /** @var int|float|null */
    public $DUE_DATE_CONTOL3 = null;
    /** @var int|float|null */
    public $DUE_DATE_CONTOL4 = null;
    /** @var int|float|null */
    public $DUE_DATE_CONTOL5 = null;
    /** @var int|float|null */
    public $DUE_DATE_CONTOL6 = null;
    /** @var int|float|null */
    public $DUE_DATE_CONTOL7 = null;
    /** @var int|float|null */
    public $DUE_DATE_CONTOL8 = null;
    /** @var int|float|null */
    public $DUE_DATE_CONTOL9 = null;
    /** @var int|float|null */
    public $DUE_DATE_CONTOL10 = null;
    /** @var int|float|null */
    public $DUE_DATE_CONTOL11 = null;
    /** @var int|float|null */
    public $DUE_DATE_CONTOL12 = null;
    /** @var int|float|null */
    public $DUE_DATE_CONTOL13 = null;
    /** @var int|float|null */
    public $DUE_DATE_CONTOL14 = null;
    /** @var int|float|null */
    public $DUE_DATE_CONTOL15 = null;
    /** @var int|float|null */
    public $DUE_DATE_COUNT = null;
    /** @var int|float|null */
    public $DUE_DATE_LIMIT = null;
    /** @var int|float|null */
    public $DUE_DATE_TRACK = null;
    /** @var int|float|null */
    public $CLOSE_DATE_COUNT = null;
    /** @var int|float|null */
    public $CLOSE_DATE_TRACK = null;
    /** @var int|float|null */
    public $DEFBNACCREF = null;
    public ?string $DEFAULT_BANKACC_CODE = null;
    /** @var int|float|null */
    public $CURR_RATE_TYPE = null;
    /** @var int|float|null */
    public $INSTEAD_OF_DISPATCH = null;
    /** @var int|float|null */
    public $EINV_EARC_TYPE = null;
    public ?string $ADDRESS_NO = null;
    /** @var int|float|null */
    public $FBS_SEND_METHOD = null;
    public ?string $FBS_SEND_EMAILADDR = null;
    /** @var int|float|null */
    public $FBS_SEND_FORMAT = null;
    public ?string $FBS_SEND_FAXNR = null;
    /** @var int|float|null */
    public $FBA_SEND_METHOD = null;
    public ?string $FBA_SEND_EMAILADDR = null;
    /** @var int|float|null */
    public $FBA_SEND_FORMAT = null;
    public ?string $FBA_SEND_FAXNR = null;
    /** @var int|float|null */
    public $SECTOR_MAIN_REF = null;
    public ?string $SECTOR_MAIN_CODE = null;
    /** @var int|float|null */
    public $SECTOR_SUB_REF = null;
    public ?string $SECTOR_SUB_CODE = null;
    /** @var int|float|null */
    public $PERSONEL_COSTS = null;
    public ?string $EARC_EMAIL_ADDRESS1 = null;
    public ?string $EARC_EMAIL_ADDRESS2 = null;
    public ?string $EARC_EMAIL_ADDRESS3 = null;
    /** @var int|float|null */
    public $FACTORY_DIV_NR = null;
    /** @var int|float|null */
    public $FACTORY_NR = null;
    /** @var int|float|null */
    public $IN_INVEN_NR = null;
    /** @var int|float|null */
    public $OUT_INVEN_NR = null;
    /** @var int|float|null */
    public $QTY_DEP_DURATION = null;
    /** @var int|float|null */
    public $QTY_IN_DEP_DURATION = null;
    /** @var int|float|null */
    public $OVER_LAP_TYPE = null;
    /** @var int|float|null */
    public $OVER_LAP_AMOUNT = null;
    /** @var int|float|null */
    public $OVER_LAP_PERC = null;
    /** @var int|float|null */
    public $BROKER_COMP = null;
    /** @var int|float|null */
    public $CREATE_WH_FICHE = null;
    /** @var int|float|null */
    public $EINV_CUSTOMS = null;
    /** @var int|float|null */
    public $SUB_CONT = null;
    /** @var int|float|null */
    public $ACCEPT_DESP = null;
    /** @var int|float|null */
    public $PROFILEID_DESP = null;
    /** @var int|float|null */
    public $LABEL_INFO_DESP = null;
    public ?string $POST_LABEL_CODE_DESP = null;
    public ?string $SENDER_LABEL_CODE_DESP = null;
    /** @var int|float|null */
    public $ACCEPT_EINV_PUBLIC = null;
    /** @var int|float|null */
    public $PUBLICBNACCREF = null;
    public ?string $PUBLIC_BNACC_CODE = null;
    public ?string $PUBLIC_BNACC_IBAN = null;
    /** @var int|float|null */
    public $PUBLIC_BNACC_CURRENCY = null;
    /** @var int|float|null */
    public $KVKK_PERM_STATUS = null;
    public ?string $KVKK_BEGIN_DATE = null;
    public ?string $KVKK_END_DATE = null;
    public ?string $KVKK_CANCEL_DATE = null;
    /** @var int|float|null */
    public $KVKK_ANONYMIZE_STATUS = null;
    public ?string $KVKK_ANONYMIZE_DATE = null;
    /** @var int|float|null */
    public $EXIM_SEND_METHOD = null;
    public ?string $EXIM_SEND_EMAILADR = null;
    /** @var int|float|null */
    public $EXIM_SEND_FORMAT = null;
    public ?string $EXIM_SEND_FAXNR = null;
    /** @var int|float|null */
    public $CAN_DEDUCT = null;
    /** @var int|float|null */
    public $DRIVERREF = null;
    /** @var int|float|null */
    public $EX_COUNTRY_TYPE = null;
    /** @var int|float|null */
    public $EX_COUNTRYREF = null;
    public ?string $EX_COUNTRY_CODE = null;
    public ?string $EX_COUNTRY_NAME = null;
    /** @var int|float|null */
    public $IM_COUNTRY_TYPE = null;
    /** @var int|float|null */
    public $IM_COUNTRYREF = null;
    public ?string $IM_COUNTRY_CODE = null;
    public ?string $IM_COUNTRY_NAME = null;
    /** @var int|float|null */
    public $EXIM_PAYTYPEREF = null;
    public ?string $EXIM_PAYTYPE_CODE = null;
    /** @var int|float|null */
    public $EXIM_BRBANKREF = null;
    public ?string $EXIM_BRBANK_CODE = null;
    /** @var int|float|null */
    public $EXIM_CUSTOMREF = null;
    public ?string $EXIM_CUSTOM_CODE = null;
    /** @var int|float|null */
    public $EXIM_REGTYPEREF = null;
    public ?string $EXIM_REGTYPE_CODE = null;
    /** @var int|float|null */
    public $EXIM_NOTIFYCLREF = null;
    public ?string $EXIM_NOTIFY_ARPCODE = null;
    /** @var int|float|null */
    public $EXIM_CONSULTCLREF = null;
    public ?string $EXIM_CONSULT_ARPCODE = null;
    /** @var int|float|null */
    public $EXIM_FREIGHTCLREF = null;
    public ?string $EXIM_FREIGHT_ARPCODE = null;
    /** @var int|float|null */
    public $DISP_PRINT_CNT = null;
    /** @var int|float|null */
    public $ORD_PRINT_CNT = null;
    public ?string $GUID = null;
    /** @var int|float|null */
    public $CLPTYPEFORPPAYDT = null;
    /** @var int|float|null */
    public $CLSTYPEFORPPAYDT = null;
    public ?string $MERSIS_NO = null;
    public ?string $COMM_RECORD_NO = null;
    /** @var int|float|null */
    public $LOW_LEVEL_CODES1 = null;
    /** @var int|float|null */
    public $LOW_LEVEL_CODES2 = null;
    /** @var int|float|null */
    public $LOW_LEVEL_CODES3 = null;
    /** @var int|float|null */
    public $LOW_LEVEL_CODES4 = null;
    /** @var int|float|null */
    public $LOW_LEVEL_CODES5 = null;
    /** @var int|float|null */
    public $LOW_LEVEL_CODES6 = null;
    /** @var int|float|null */
    public $LOW_LEVEL_CODES7 = null;
    /** @var int|float|null */
    public $LOW_LEVEL_CODES8 = null;
    /** @var int|float|null */
    public $LOW_LEVEL_CODES9 = null;
    /** @var int|float|null */
    public $LOW_LEVEL_CODES10 = null;
    public ?string $INSTAGRAMURL = null;
    public ?string $LINKEDINURL = null;
    public ?string $WHATSAPPID = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'NOTES' => \LogoObjects\Clients\Arps\RscollectionrsArpnotesxml::class,
            'GENIUSFLDSLIST' => \LogoObjects\Clients\Arps\Rscollectionextendedfielddefinitions::class,
            'DEFNFLDSLIST' => \LogoObjects\Clients\Arps\Rscollectionextendedfielddefinitions::class,
        ]);
    }
}

/**
 * ArpsQueryOptions
 */
class ArpsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ArpsSortSpec|null */
    public $sort = null;
}

/**
 * ArpsSearchCriteria
 */
class ArpsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $recordStatus = null;
    /** @var mixed */
    public $accountType = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $title = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $address1 = null;
    /** @var mixed */
    public $address2 = null;
    /** @var mixed */
    public $districtCode = null;
    /** @var mixed */
    public $district = null;
    /** @var mixed */
    public $townCode = null;
    /** @var mixed */
    public $town = null;
    /** @var mixed */
    public $cityCode = null;
    /** @var mixed */
    public $city = null;
    /** @var mixed */
    public $countryCode = null;
    /** @var mixed */
    public $country = null;
    /** @var mixed */
    public $postalCode = null;
    /** @var mixed */
    public $telephone1 = null;
    /** @var mixed */
    public $telephone1Code = null;
    /** @var mixed */
    public $telephone2 = null;
    /** @var mixed */
    public $telephone2Code = null;
    /** @var mixed */
    public $fax = null;
    /** @var mixed */
    public $faxCode = null;
    /** @var mixed */
    public $taxId = null;
    /** @var mixed */
    public $taxOffice = null;
    /** @var mixed */
    public $taxOfficeCode = null;
    /** @var mixed */
    public $contact = null;
    /** @var mixed */
    public $discountRate = null;
    /** @var mixed */
    public $extenref = null;
    /** @var mixed */
    public $paymentCode = null;
    /** @var mixed */
    public $paymentref = null;
    /** @var mixed */
    public $eMail = null;
    /** @var mixed */
    public $webUrl = null;
    /** @var mixed */
    public $facebookUrl = null;
    /** @var mixed */
    public $twitterUrl = null;
    /** @var mixed */
    public $appleId = null;
    /** @var mixed */
    public $skypeId = null;
    /** @var mixed */
    public $reminderType = null;
    /** @var mixed */
    public $reminderEmail = null;
    /** @var mixed */
    public $reminderFax = null;
    /** @var mixed */
    public $correspLang = null;
    /** @var mixed */
    public $vatId = null;
    /** @var mixed */
    public $blocked = null;
    /** @var mixed */
    public $bankId1 = null;
    /** @var mixed */
    public $bankId2 = null;
    /** @var mixed */
    public $bankId3 = null;
    /** @var mixed */
    public $bankId4 = null;
    /** @var mixed */
    public $bankId5 = null;
    /** @var mixed */
    public $bankId6 = null;
    /** @var mixed */
    public $bankId7 = null;
    /** @var mixed */
    public $bankName1 = null;
    /** @var mixed */
    public $bankName2 = null;
    /** @var mixed */
    public $bankName3 = null;
    /** @var mixed */
    public $bankName4 = null;
    /** @var mixed */
    public $bankName5 = null;
    /** @var mixed */
    public $bankName6 = null;
    /** @var mixed */
    public $bankName7 = null;
    /** @var mixed */
    public $bankAccount1 = null;
    /** @var mixed */
    public $bankAccount2 = null;
    /** @var mixed */
    public $bankAccount3 = null;
    /** @var mixed */
    public $bankAccount4 = null;
    /** @var mixed */
    public $bankAccount5 = null;
    /** @var mixed */
    public $bankAccount6 = null;
    /** @var mixed */
    public $bankAccount7 = null;
    /** @var mixed */
    public $deliveryMethod = null;
    /** @var mixed */
    public $shipmentAgent = null;
    /** @var mixed */
    public $currency = null;
    /** @var mixed */
    public $textinc = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $eCommId = null;
    /** @var mixed */
    public $tradingGrp = null;
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
    public $debtTrckType = null;
    /** @var mixed */
    public $xrtdifType = null;
    /** @var mixed */
    public $notes = null;
    /** @var mixed */
    public $creditType = null;
    /** @var mixed */
    public $creditLimit = null;
    /** @var mixed */
    public $creditBalanced = null;
    /** @var mixed */
    public $riskfactChq = null;
    /** @var mixed */
    public $riskfactPromnt = null;
    /** @var mixed */
    public $actionCredhold = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $glCode = null;
    /** @var mixed */
    public $accountref = null;
    /** @var mixed */
    public $ohpCode = null;
    /** @var mixed */
    public $centerref = null;
    /** @var mixed */
    public $projectCode = null;
    /** @var mixed */
    public $projectref = null;
    /** @var mixed */
    public $fldals = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $langp = null;
    /** @var mixed */
    public $ppGroupCode = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $useRepRisk = null;
    /** @var mixed */
    public $riskLimit = null;
    /** @var mixed */
    public $riskBalanced = null;
    /** @var mixed */
    public $ordSendMethod = null;
    /** @var mixed */
    public $ordSendEmail = null;
    /** @var mixed */
    public $ordSendFax = null;
    /** @var mixed */
    public $dspSendMethod = null;
    /** @var mixed */
    public $dspSendEmail = null;
    /** @var mixed */
    public $dspSendFax = null;
    /** @var mixed */
    public $invSendMethod = null;
    /** @var mixed */
    public $invSendEmail = null;
    /** @var mixed */
    public $invSendFax = null;
    /** @var mixed */
    public $subscriberStatus = null;
    /** @var mixed */
    public $subscriberExt = null;
    /** @var mixed */
    public $autoPaidBank = null;
    /** @var mixed */
    public $paymentType = null;
    /** @var mixed */
    public $lastSendRemLev = null;
    /** @var mixed */
    public $extAccFlags = null;
    /** @var mixed */
    public $ordSendFormat = null;
    /** @var mixed */
    public $dspSendFormat = null;
    /** @var mixed */
    public $invSendFormat = null;
    /** @var mixed */
    public $remSendFormat = null;
    /** @var mixed */
    public $storeCreditCardNo = null;
    /** @var mixed */
    public $clOrdFreq = null;
    /** @var mixed */
    public $ordDay = null;
    /** @var mixed */
    public $logoid = null;
    /** @var mixed */
    public $lidConfirmed = null;
    /** @var mixed */
    public $eBsnsSendType = null;
    /** @var mixed */
    public $ldxDefOrderStat = null;
    /** @var mixed */
    public $ldxDefOrderPrc = null;
    /** @var mixed */
    public $itrSendMethod = null;
    /** @var mixed */
    public $itrSendMailAdr = null;
    /** @var mixed */
    public $itrSendFax = null;
    /** @var mixed */
    public $itrSendFormat = null;
    /** @var mixed */
    public $img2inc = null;
    /** @var mixed */
    public $cellPhone = null;
    /** @var mixed */
    public $invoicePrntCnt = null;
    /** @var mixed */
    public $geniusfldslist = null;
    /** @var mixed */
    public $defnfldslist = null;
    /** @var mixed */
    public $wflowcardref = null;
    /** @var mixed */
    public $parentclcode = null;
    /** @var mixed */
    public $parentclref = null;
    /** @var mixed */
    public $codeChanged = null;
    /** @var mixed */
    public $collectinv = null;
    /** @var mixed */
    public $pieceordinflict = null;
    /** @var mixed */
    public $orglogoid = null;
    /** @var mixed */
    public $purchbrws = null;
    /** @var mixed */
    public $salesbrws = null;
    /** @var mixed */
    public $impbrws = null;
    /** @var mixed */
    public $expbrws = null;
    /** @var mixed */
    public $finbrws = null;
    /** @var mixed */
    public $collatrlriskType = null;
    /** @var mixed */
    public $collriskOver = null;
    /** @var mixed */
    public $collriskOrdRiskOver = null;
    /** @var mixed */
    public $collriskDespRiskOver = null;
    /** @var mixed */
    public $collriskUseRepRisk = null;
    /** @var mixed */
    public $collriskPcollatrlTotal = null;
    /** @var mixed */
    public $collriskRepPcollatrlTot = null;
    /** @var mixed */
    public $collriskScollatrlTotal = null;
    /** @var mixed */
    public $collriskTotal = null;
    /** @var mixed */
    public $collriskRepRiskTotal = null;
    /** @var mixed */
    public $collriskDespTotal = null;
    /** @var mixed */
    public $collriskRepDespRiskTot = null;
    /** @var mixed */
    public $collriskLimit = null;
    /** @var mixed */
    public $collriskRepLimit = null;
    /** @var mixed */
    public $collriskBalanced = null;
    /** @var mixed */
    public $collriskRepBalanced = null;
    /** @var mixed */
    public $collriskOrdRiskTotal = null;
    /** @var mixed */
    public $collriskRepOrdRiskTot = null;
    /** @var mixed */
    public $collriskOrdRiskTotSugg = null;
    /** @var mixed */
    public $collriskRepOrdRiskTotSug = null;
    /** @var mixed */
    public $collriskSepCsRiskTot = null;
    /** @var mixed */
    public $collriskCsRiskOver = null;
    /** @var mixed */
    public $collriskCsRiskTotal = null;
    /** @var mixed */
    public $collriskRepCsRiskTot = null;
    /** @var mixed */
    public $grpfirmnr = null;
    /** @var mixed */
    public $conscoderef = null;
    /** @var mixed */
    public $conscode = null;
    /** @var mixed */
    public $auxilCode2 = null;
    /** @var mixed */
    public $auxilCode3 = null;
    /** @var mixed */
    public $auxilCode4 = null;
    /** @var mixed */
    public $auxilCode5 = null;
    /** @var mixed */
    public $ebankcode = null;
    /** @var mixed */
    public $offSendMethod = null;
    /** @var mixed */
    public $offSendMailAddr = null;
    /** @var mixed */
    public $offSendFax = null;
    /** @var mixed */
    public $offSendFormat = null;
    /** @var mixed */
    public $riskType1 = null;
    /** @var mixed */
    public $riskType2 = null;
    /** @var mixed */
    public $riskType3 = null;
    /** @var mixed */
    public $riskType4 = null;
    /** @var mixed */
    public $riskType5 = null;
    /** @var mixed */
    public $riskType6 = null;
    /** @var mixed */
    public $riskType7 = null;
    /** @var mixed */
    public $riskType8 = null;
    /** @var mixed */
    public $riskType9 = null;
    /** @var mixed */
    public $riskType10 = null;
    /** @var mixed */
    public $riskType11 = null;
    /** @var mixed */
    public $riskType12 = null;
    /** @var mixed */
    public $riskType13 = null;
    /** @var mixed */
    public $riskType14 = null;
    /** @var mixed */
    public $riskType15 = null;
    /** @var mixed */
    public $cstCekRiskFactor = null;
    /** @var mixed */
    public $cstSenetRiskFactor = null;
    /** @var mixed */
    public $riskGrpControl = null;
    /** @var mixed */
    public $actionCredholdOrd = null;
    /** @var mixed */
    public $actionCredholdDesp = null;
    /** @var mixed */
    public $actionCredholdAcc = null;
    /** @var mixed */
    public $actionCredholdCstCs = null;
    /** @var mixed */
    public $actionCredholdMyCs = null;
    /** @var mixed */
    public $riskCtrlType = null;
    /** @var mixed */
    public $accRiskTotal = null;
    /** @var mixed */
    public $repAccRiskTotal = null;
    /** @var mixed */
    public $cstCsRiskTotal = null;
    /** @var mixed */
    public $repCstCsRiskTotal = null;
    /** @var mixed */
    public $myCsRiskTotal = null;
    /** @var mixed */
    public $repMyCsRiskTotal = null;
    /** @var mixed */
    public $ordRiskTotal = null;
    /** @var mixed */
    public $repOrdRiskTotal = null;
    /** @var mixed */
    public $ordRiskTotalSugg = null;
    /** @var mixed */
    public $repOrdRiskTotalSugg = null;
    /** @var mixed */
    public $despRiskTotal = null;
    /** @var mixed */
    public $repDespRiskTotal = null;
    /** @var mixed */
    public $accRiskLimit = null;
    /** @var mixed */
    public $repAccRiskLimit = null;
    /** @var mixed */
    public $cstCsRiskLimit = null;
    /** @var mixed */
    public $repCstCsRiskLimit = null;
    /** @var mixed */
    public $myCsRiskLimit = null;
    /** @var mixed */
    public $repMyCsRiskLimit = null;
    /** @var mixed */
    public $despRiskLimit = null;
    /** @var mixed */
    public $repDespRiskLimit = null;
    /** @var mixed */
    public $ordRiskLimit = null;
    /** @var mixed */
    public $repOrdRiskLimit = null;
    /** @var mixed */
    public $ordRiskLimitSugg = null;
    /** @var mixed */
    public $repOrdSirkLimitSugg = null;
    /** @var mixed */
    public $accRiskBalanced = null;
    /** @var mixed */
    public $repAccRiskBalanced = null;
    /** @var mixed */
    public $cstCsRiskBalanced = null;
    /** @var mixed */
    public $repCstCsRiskBalanced = null;
    /** @var mixed */
    public $myCsRiskBalanced = null;
    /** @var mixed */
    public $repMyCsRiskBalanced = null;
    /** @var mixed */
    public $despRiskBalanced = null;
    /** @var mixed */
    public $repDespRiskBalanced = null;
    /** @var mixed */
    public $ordRiskBalanced = null;
    /** @var mixed */
    public $repOrdRiskBalanced = null;
    /** @var mixed */
    public $ordRiskBalancedSugg = null;
    /** @var mixed */
    public $repOrdRiskBalancedSugg = null;
    /** @var mixed */
    public $loanGrpCtrl = null;
    /** @var mixed */
    public $ebusDataSendType = null;
    /** @var mixed */
    public $iniStatusFlags = null;
    /** @var mixed */
    public $slsOrderStatus = null;
    /** @var mixed */
    public $slsOrderPrice = null;
    /** @var mixed */
    public $sameItemCodeUse = null;
    /** @var mixed */
    public $image = null;
    /** @var mixed */
    public $imageSize = null;
    /** @var mixed */
    public $mapId = null;
    /** @var mixed */
    public $longitude = null;
    /** @var mixed */
    public $latitude = null;
    /** @var mixed */
    public $cityId = null;
    /** @var mixed */
    public $townId = null;
    /** @var mixed */
    public $bankIban1 = null;
    /** @var mixed */
    public $bankIban2 = null;
    /** @var mixed */
    public $bankIban3 = null;
    /** @var mixed */
    public $bankIban4 = null;
    /** @var mixed */
    public $bankIban5 = null;
    /** @var mixed */
    public $bankIban6 = null;
    /** @var mixed */
    public $bankIban7 = null;
    /** @var mixed */
    public $bankBic1 = null;
    /** @var mixed */
    public $bankBic2 = null;
    /** @var mixed */
    public $bankBic3 = null;
    /** @var mixed */
    public $bankBic4 = null;
    /** @var mixed */
    public $bankBic5 = null;
    /** @var mixed */
    public $bankBic6 = null;
    /** @var mixed */
    public $bankBic7 = null;
    /** @var mixed */
    public $perscompany = null;
    /** @var mixed */
    public $tckno = null;
    /** @var mixed */
    public $extSendMethod = null;
    /** @var mixed */
    public $extSendEmail = null;
    /** @var mixed */
    public $extSendFax = null;
    /** @var mixed */
    public $extSendFormat = null;
    /** @var mixed */
    public $addtoreflist = null;
    /** @var mixed */
    public $ordRiskOverSugg = null;
    /** @var mixed */
    public $cashCode = null;
    /** @var mixed */
    public $cashref = null;
    /** @var mixed */
    public $usedInPeriods = null;
    /** @var mixed */
    public $contact2 = null;
    /** @var mixed */
    public $contact3 = null;
    /** @var mixed */
    public $eMail2 = null;
    /** @var mixed */
    public $eMail3 = null;
    /** @var mixed */
    public $contact1TelCode = null;
    /** @var mixed */
    public $contact2TelCode = null;
    /** @var mixed */
    public $contact3TelCode = null;
    /** @var mixed */
    public $contact1Tel = null;
    /** @var mixed */
    public $contact2Tel = null;
    /** @var mixed */
    public $contact3Tel = null;
    /** @var mixed */
    public $contact1TelExt = null;
    /** @var mixed */
    public $contact2TelExt = null;
    /** @var mixed */
    public $contact3TelExt = null;
    /** @var mixed */
    public $rsklimCntrl = null;
    /** @var mixed */
    public $duedateCntrl = null;
    /** @var mixed */
    public $agingCntrl = null;
    /** @var mixed */
    public $agingDay = null;
    /** @var mixed */
    public $ordPriority = null;
    /** @var mixed */
    public $acceptEinv = null;
    /** @var mixed */
    public $eivoiceid = null;
    /** @var mixed */
    public $profileId = null;
    /** @var mixed */
    public $purcOrderStatus = null;
    /** @var mixed */
    public $purcOrderPrice = null;
    /** @var mixed */
    public $bankCurr1 = null;
    /** @var mixed */
    public $bankCurr2 = null;
    /** @var mixed */
    public $bankCurr3 = null;
    /** @var mixed */
    public $bankCurr4 = null;
    /** @var mixed */
    public $bankCurr5 = null;
    /** @var mixed */
    public $bankCurr6 = null;
    /** @var mixed */
    public $bankCurr7 = null;
    /** @var mixed */
    public $csDownsRisk = null;
    /** @var mixed */
    public $cstCsCiroRiskOver = null;
    /** @var mixed */
    public $cstCiroCekRiskFac = null;
    /** @var mixed */
    public $cstCiroSenetRiskFac = null;
    /** @var mixed */
    public $csCiroDownsRisk = null;
    /** @var mixed */
    public $cstCsCiroRiskLimit = null;
    /** @var mixed */
    public $repCstCsCiroRiskLimit = null;
    /** @var mixed */
    public $cstCsCiroRiskBalanced = null;
    /** @var mixed */
    public $repCstCsCiroRiskBalanced = null;
    /** @var mixed */
    public $cstCsOwnRiskTotal = null;
    /** @var mixed */
    public $repCstCsOwnRiskTotal = null;
    /** @var mixed */
    public $cstCsCiroRiskTotal = null;
    /** @var mixed */
    public $repCstCsCiroRiskTotal = null;
    /** @var mixed */
    public $despRiskOverSugg = null;
    /** @var mixed */
    public $despRiskLimitSugg = null;
    /** @var mixed */
    public $repDespRiskLimitSugg = null;
    /** @var mixed */
    public $despRiskTotalSugg = null;
    /** @var mixed */
    public $repDespRiskTotalSugg = null;
    /** @var mixed */
    public $despRiskBalancedSugg = null;
    /** @var mixed */
    public $repDespRiskBalancedSugg = null;
    /** @var mixed */
    public $dbsLimit1 = null;
    /** @var mixed */
    public $dbsLimit2 = null;
    /** @var mixed */
    public $dbsLimit3 = null;
    /** @var mixed */
    public $dbsLimit4 = null;
    /** @var mixed */
    public $dbsLimit5 = null;
    /** @var mixed */
    public $dbsLimit6 = null;
    /** @var mixed */
    public $dbsLimit7 = null;
    /** @var mixed */
    public $dbsTotal1 = null;
    /** @var mixed */
    public $dbsTotal2 = null;
    /** @var mixed */
    public $dbsTotal3 = null;
    /** @var mixed */
    public $dbsTotal4 = null;
    /** @var mixed */
    public $dbsTotal5 = null;
    /** @var mixed */
    public $dbsTotal6 = null;
    /** @var mixed */
    public $dbsTotal7 = null;
    /** @var mixed */
    public $dbsBankno1 = null;
    /** @var mixed */
    public $dbsBankno2 = null;
    /** @var mixed */
    public $dbsBankno3 = null;
    /** @var mixed */
    public $dbsBankno4 = null;
    /** @var mixed */
    public $dbsBankno5 = null;
    /** @var mixed */
    public $dbsBankno6 = null;
    /** @var mixed */
    public $dbsBankno7 = null;
    /** @var mixed */
    public $dbsRskctrl1 = null;
    /** @var mixed */
    public $dbsRskctrl2 = null;
    /** @var mixed */
    public $dbsRskctrl3 = null;
    /** @var mixed */
    public $dbsRskctrl4 = null;
    /** @var mixed */
    public $dbsRskctrl5 = null;
    /** @var mixed */
    public $dbsRskctrl6 = null;
    /** @var mixed */
    public $dbsRskctrl7 = null;
    /** @var mixed */
    public $dbsCurr1 = null;
    /** @var mixed */
    public $dbsCurr2 = null;
    /** @var mixed */
    public $dbsCurr3 = null;
    /** @var mixed */
    public $dbsCurr4 = null;
    /** @var mixed */
    public $dbsCurr5 = null;
    /** @var mixed */
    public $dbsCurr6 = null;
    /** @var mixed */
    public $dbsCurr7 = null;
    /** @var mixed */
    public $bankCorrpAcc1 = null;
    /** @var mixed */
    public $bankCorrpAcc2 = null;
    /** @var mixed */
    public $bankCorrpAcc3 = null;
    /** @var mixed */
    public $bankCorrpAcc4 = null;
    /** @var mixed */
    public $bankCorrpAcc5 = null;
    /** @var mixed */
    public $bankCorrpAcc6 = null;
    /** @var mixed */
    public $bankCorrpAcc7 = null;
    /** @var mixed */
    public $bankVoen1 = null;
    /** @var mixed */
    public $bankVoen2 = null;
    /** @var mixed */
    public $bankVoen3 = null;
    /** @var mixed */
    public $bankVoen4 = null;
    /** @var mixed */
    public $bankVoen5 = null;
    /** @var mixed */
    public $bankVoen6 = null;
    /** @var mixed */
    public $bankVoen7 = null;
    /** @var mixed */
    public $einvoiceType = null;
    /** @var mixed */
    public $earchiveSendMode = null;
    /** @var mixed */
    public $earchiveIsRetailArAp = null;
    /** @var mixed */
    public $title2 = null;
    /** @var mixed */
    public $telephoneExtension1 = null;
    /** @var mixed */
    public $telephoneExtension2 = null;
    /** @var mixed */
    public $faxExtension = null;
    /** @var mixed */
    public $globalId = null;
    /** @var mixed */
    public $isforeign = null;
    /** @var mixed */
    public $postLabel = null;
    /** @var mixed */
    public $senderLabel = null;
    /** @var mixed */
    public $degActive = null;
    /** @var mixed */
    public $degCurr = null;
    /** @var mixed */
    public $name = null;
    /** @var mixed */
    public $surname = null;
    /** @var mixed */
    public $labelInfo = null;
    /** @var mixed */
    public $dueDateContol1 = null;
    /** @var mixed */
    public $dueDateContol2 = null;
    /** @var mixed */
    public $dueDateContol3 = null;
    /** @var mixed */
    public $dueDateContol4 = null;
    /** @var mixed */
    public $dueDateContol5 = null;
    /** @var mixed */
    public $dueDateContol6 = null;
    /** @var mixed */
    public $dueDateContol7 = null;
    /** @var mixed */
    public $dueDateContol8 = null;
    /** @var mixed */
    public $dueDateContol9 = null;
    /** @var mixed */
    public $dueDateContol10 = null;
    /** @var mixed */
    public $dueDateContol11 = null;
    /** @var mixed */
    public $dueDateContol12 = null;
    /** @var mixed */
    public $dueDateContol13 = null;
    /** @var mixed */
    public $dueDateContol14 = null;
    /** @var mixed */
    public $dueDateContol15 = null;
    /** @var mixed */
    public $dueDateCount = null;
    /** @var mixed */
    public $dueDateLimit = null;
    /** @var mixed */
    public $dueDateTrack = null;
    /** @var mixed */
    public $closeDateCount = null;
    /** @var mixed */
    public $closeDateTrack = null;
    /** @var mixed */
    public $defbnaccref = null;
    /** @var mixed */
    public $defaultBankaccCode = null;
    /** @var mixed */
    public $currRateType = null;
    /** @var mixed */
    public $insteadOfDispatch = null;
    /** @var mixed */
    public $einvEarcType = null;
    /** @var mixed */
    public $addressNo = null;
    /** @var mixed */
    public $fbsSendMethod = null;
    /** @var mixed */
    public $fbsSendEmailaddr = null;
    /** @var mixed */
    public $fbsSendFormat = null;
    /** @var mixed */
    public $fbsSendFaxnr = null;
    /** @var mixed */
    public $fbaSendMethod = null;
    /** @var mixed */
    public $fbaSendEmailaddr = null;
    /** @var mixed */
    public $fbaSendFormat = null;
    /** @var mixed */
    public $fbaSendFaxnr = null;
    /** @var mixed */
    public $sectorMainRef = null;
    /** @var mixed */
    public $sectorMainCode = null;
    /** @var mixed */
    public $sectorSubRef = null;
    /** @var mixed */
    public $sectorSubCode = null;
    /** @var mixed */
    public $personelCosts = null;
    /** @var mixed */
    public $earcEmailAddress1 = null;
    /** @var mixed */
    public $earcEmailAddress2 = null;
    /** @var mixed */
    public $earcEmailAddress3 = null;
    /** @var mixed */
    public $factoryDivNr = null;
    /** @var mixed */
    public $factoryNr = null;
    /** @var mixed */
    public $inInvenNr = null;
    /** @var mixed */
    public $outInvenNr = null;
    /** @var mixed */
    public $qtyDepDuration = null;
    /** @var mixed */
    public $qtyInDepDuration = null;
    /** @var mixed */
    public $overLapType = null;
    /** @var mixed */
    public $overLapAmount = null;
    /** @var mixed */
    public $overLapPerc = null;
    /** @var mixed */
    public $brokerComp = null;
    /** @var mixed */
    public $createWhFiche = null;
    /** @var mixed */
    public $einvCustoms = null;
    /** @var mixed */
    public $subCont = null;
    /** @var mixed */
    public $acceptDesp = null;
    /** @var mixed */
    public $profileidDesp = null;
    /** @var mixed */
    public $labelInfoDesp = null;
    /** @var mixed */
    public $postLabelCodeDesp = null;
    /** @var mixed */
    public $senderLabelCodeDesp = null;
    /** @var mixed */
    public $acceptEinvPublic = null;
    /** @var mixed */
    public $publicbnaccref = null;
    /** @var mixed */
    public $publicBnaccCode = null;
    /** @var mixed */
    public $publicBnaccIban = null;
    /** @var mixed */
    public $publicBnaccCurrency = null;
    /** @var mixed */
    public $kvkkPermStatus = null;
    /** @var mixed */
    public $kvkkBeginDate = null;
    /** @var mixed */
    public $kvkkEndDate = null;
    /** @var mixed */
    public $kvkkCancelDate = null;
    /** @var mixed */
    public $kvkkAnonymizeStatus = null;
    /** @var mixed */
    public $kvkkAnonymizeDate = null;
    /** @var mixed */
    public $eximSendMethod = null;
    /** @var mixed */
    public $eximSendEmailadr = null;
    /** @var mixed */
    public $eximSendFormat = null;
    /** @var mixed */
    public $eximSendFaxnr = null;
    /** @var mixed */
    public $canDeduct = null;
    /** @var mixed */
    public $driverref = null;
    /** @var mixed */
    public $exCountryType = null;
    /** @var mixed */
    public $exCountryref = null;
    /** @var mixed */
    public $exCountryCode = null;
    /** @var mixed */
    public $exCountryName = null;
    /** @var mixed */
    public $imCountryType = null;
    /** @var mixed */
    public $imCountryref = null;
    /** @var mixed */
    public $imCountryCode = null;
    /** @var mixed */
    public $imCountryName = null;
    /** @var mixed */
    public $eximPaytyperef = null;
    /** @var mixed */
    public $eximPaytypeCode = null;
    /** @var mixed */
    public $eximBrbankref = null;
    /** @var mixed */
    public $eximBrbankCode = null;
    /** @var mixed */
    public $eximCustomref = null;
    /** @var mixed */
    public $eximCustomCode = null;
    /** @var mixed */
    public $eximRegtyperef = null;
    /** @var mixed */
    public $eximRegtypeCode = null;
    /** @var mixed */
    public $eximNotifyclref = null;
    /** @var mixed */
    public $eximNotifyArpcode = null;
    /** @var mixed */
    public $eximConsultclref = null;
    /** @var mixed */
    public $eximConsultArpcode = null;
    /** @var mixed */
    public $eximFreightclref = null;
    /** @var mixed */
    public $eximFreightArpcode = null;
    /** @var mixed */
    public $dispPrintCnt = null;
    /** @var mixed */
    public $ordPrintCnt = null;
    /** @var mixed */
    public $guid = null;
    /** @var mixed */
    public $clptypeforppaydt = null;
    /** @var mixed */
    public $clstypeforppaydt = null;
    /** @var mixed */
    public $mersisNo = null;
    /** @var mixed */
    public $commRecordNo = null;
    /** @var mixed */
    public $lowLevelCodes1 = null;
    /** @var mixed */
    public $lowLevelCodes2 = null;
    /** @var mixed */
    public $lowLevelCodes3 = null;
    /** @var mixed */
    public $lowLevelCodes4 = null;
    /** @var mixed */
    public $lowLevelCodes5 = null;
    /** @var mixed */
    public $lowLevelCodes6 = null;
    /** @var mixed */
    public $lowLevelCodes7 = null;
    /** @var mixed */
    public $lowLevelCodes8 = null;
    /** @var mixed */
    public $lowLevelCodes9 = null;
    /** @var mixed */
    public $lowLevelCodes10 = null;
    /** @var mixed */
    public $instagramurl = null;
    /** @var mixed */
    public $linkedinurl = null;
    /** @var mixed */
    public $whatsappid = null;
}

/**
 * ArpsAnalytics
 */
class ArpsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
