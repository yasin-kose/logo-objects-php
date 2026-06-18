<?php

declare(strict_types=1);

namespace LogoObjects\Clients\ArpGroupAssignments;

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
            'items' => [\LogoObjects\Clients\ArpGroupAssignments\RsArpnotesxml::class],
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
            'items' => [\LogoObjects\Clients\ArpGroupAssignments\ExtendedFieldDefinitions::class],
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
 * ArpGroupAssignments
 */
class ArpGroupAssignments extends \LogoObjects\Types\BaseEntity
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
    public ?string $TELEPHONE2 = null;
    public ?string $FAX = null;
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
    public ?string $AUXIL_CODE2 = null;
    public ?string $AUXIL_CODE3 = null;
    public ?string $AUXIL_CODE4 = null;
    public ?string $AUXIL_CODE5 = null;
    /** @var int|float|null */
    public $EBANKNO = null;
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
    public $REP_ORD_RISK_LIMIT_SUGG = null;
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
    public ?string $TTILE2 = null;
    public ?string $TELEPHONE_EXTENSION1 = null;
    public ?string $TELEPHONE_EXTENSION2 = null;
    public ?string $FAX_EXTENSION = null;
    /** @var int|float|null */
    public $EINV_CUSTOMS = null;
    /** @var int|float|null */
    public $SUB_CONT = null;
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
    public ?string $GLOBAL_ID = null;
    public ?string $GUID = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'NOTES' => \LogoObjects\Clients\ArpGroupAssignments\RscollectionrsArpnotesxml::class,
            'GENIUSFLDSLIST' => \LogoObjects\Clients\ArpGroupAssignments\Rscollectionextendedfielddefinitions::class,
            'DEFNFLDSLIST' => \LogoObjects\Clients\ArpGroupAssignments\Rscollectionextendedfielddefinitions::class,
        ]);
    }
}

/**
 * ArpGroupAssignmentsQueryOptions
 */
class ArpGroupAssignmentsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ArpGroupAssignmentsSortSpec|null */
    public $sort = null;
}

/**
 * ArpGroupAssignmentsSearchCriteria
 */
class ArpGroupAssignmentsSearchCriteria extends \LogoObjects\Support\Entity
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
    public $telephone2 = null;
    /** @var mixed */
    public $fax = null;
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
    public $auxilCode2 = null;
    /** @var mixed */
    public $auxilCode3 = null;
    /** @var mixed */
    public $auxilCode4 = null;
    /** @var mixed */
    public $auxilCode5 = null;
    /** @var mixed */
    public $ebankno = null;
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
    public $repOrdRiskLimitSugg = null;
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
    public $ttile2 = null;
    /** @var mixed */
    public $telephoneExtension1 = null;
    /** @var mixed */
    public $telephoneExtension2 = null;
    /** @var mixed */
    public $faxExtension = null;
    /** @var mixed */
    public $einvCustoms = null;
    /** @var mixed */
    public $subCont = null;
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
    public $globalId = null;
    /** @var mixed */
    public $guid = null;
}

/**
 * ArpGroupAssignmentsAnalytics
 */
class ArpGroupAssignmentsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
