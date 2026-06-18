<?php

declare(strict_types=1);

namespace LogoObjects\Clients\purchaseInvoices;

/**
 * Rscollectionpurchasedispatches
 */
class Rscollectionpurchasedispatches extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchaseInvoices\PurchaseDispatches::class],
        ]);
    }
}

/**
 * RscollectionrsDesptransxml
 */
class RscollectionrsDesptransxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsDesptransxml::class],
        ]);
    }
}

/**
 * RscollectionrsFaregtrnxml
 */
class RscollectionrsFaregtrnxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsFaregtrnxml::class],
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsSlloctrnxml::class],
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsQccvalentryxml::class],
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsQccvallistxml::class],
        ]);
    }
}

/**
 * RscollectionrsDetmattrxml
 */
class RscollectionrsDetmattrxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsDetmattrxml::class],
        ]);
    }
}

/**
 * RscollectionrsCampcodeslistxml
 */
class RscollectionrsCampcodeslistxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsCampcodeslistxml::class],
        ]);
    }
}

/**
 * RscollectionrsAddtaxmultilinex
 */
class RscollectionrsAddtaxmultilinex extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsAddtaxmultilinex::class],
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\ExtendedFieldDefinitions::class],
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsPreaccdistlnxml::class],
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsLabelxml::class],
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsPaylstxml::class],
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsDiscpaytrxml::class],
        ]);
    }
}

/**
 * RscollectionrsIntellistxml
 */
class RscollectionrsIntellistxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsIntellistxml::class],
        ]);
    }
}

/**
 * RscollectionrsOkcinfoxml
 */
class RscollectionrsOkcinfoxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsOkcinfoxml::class],
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
 * Arps
 */
class Arps extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $INTERNAL_REFERENCE = null;
    /** @var int|float|null */
    public $RECORD_STATUS = null;
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
    /** @var int|float|null */
    public $TEXTINC = null;
    /** @var int|float|null */
    public $DATA_SITEID = null;
    /** @var int|float|null */
    public $DATA_REFERENCE = null;
    public ?string $E_COMM_ID = null;
    public ?string $TRADING_GRP = null;
    /** @var int|float|null */
    public $CREATED_BY = null;
    public ?string $DATE_CREATED = null;
    /** @var int|float|null */
    public $HOUR_CREATED = null;
    /** @var int|float|null */
    public $MIN_CREATED = null;
    /** @var int|float|null */
    public $SEC_CREATED = null;
    /** @var int|float|null */
    public $MODIFIED_BY = null;
    public ?string $DATE_MODIFIED = null;
    /** @var int|float|null */
    public $HOUR_MODIFIED = null;
    /** @var int|float|null */
    public $MIN_MODIFIED = null;
    /** @var int|float|null */
    public $SEC_MODIFIED = null;
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
    public $XML_ATTRIBUTE = null;
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
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
            'NOTES' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsArpnotesxml::class,
            'GENIUSFLDSLIST' => \LogoObjects\Clients\purchaseInvoices\Rscollectionextendedfielddefinitions::class,
            'DEFNFLDSLIST' => \LogoObjects\Clients\purchaseInvoices\Rscollectionextendedfielddefinitions::class,
        ]);
    }
}

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
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsArpnotesxml::class],
        ]);
    }
}

/**
 * RsArpnotesxml
 */
class RsArpnotesxml extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $INTERNAL_REFERENCE = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    /** @var int|float|null */
    public $LINENUM = null;
    public ?string $LINE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
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
 * PurchasedServices
 */
class PurchasedServices extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $INTERNAL_REFERENCE = null;
    /** @var int|float|null */
    public $RECORD_STATUS = null;
    /** @var int|float|null */
    public $CARD_TYPE = null;
    public ?string $CODE = null;
    /** @var int|float|null */
    public $PARENTSRVREF = null;
    public ?string $PARENT_CODE = null;
    public ?string $DESCRIPTION = null;
    public ?string $DESCRIPTION2 = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUXIL_CODE2 = null;
    public ?string $AUXIL_CODE3 = null;
    public ?string $AUXIL_CODE4 = null;
    public ?string $AUXIL_CODE5 = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $VAT_PERC = null;
    /** @var int|float|null */
    public $EXTENREF = null;
    public ?string $PAYMENT_CODE = null;
    /** @var int|float|null */
    public $PAYMENTREF = null;
    public ?string $UNITSET_CODE = null;
    /** @var int|float|null */
    public $UNITSETREF = null;
    /** @var int|float|null */
    public $CREATED_BY = null;
    public ?string $DATE_CREATED = null;
    /** @var int|float|null */
    public $HOUR_CREATED = null;
    /** @var int|float|null */
    public $MIN_CREATED = null;
    /** @var int|float|null */
    public $SEC_CREATED = null;
    /** @var int|float|null */
    public $MODIFIED_BY = null;
    public ?string $DATE_MODIFIED = null;
    /** @var int|float|null */
    public $HOUR_MODIFIED = null;
    /** @var int|float|null */
    public $MIN_MODIFIED = null;
    /** @var int|float|null */
    public $SEC_MODIFIED = null;
    /** @var int|float|null */
    public $DATA_SITEID = null;
    /** @var int|float|null */
    public $DATA_REFERENCE = null;
    public ?string $XDEFS = null;
    /** @var RscollectionrsSrvinvenxml|null */
    public $WH_PARAMS = null;
    /** @var RscollectionrsServunitasgn|null */
    public $UNITS = null;
    /** @var RscollectionrsGlpostxml|null */
    public $GL_LINKS = null;
    public ?string $MAINUNITCODE = null;
    /** @var int|float|null */
    public $XML_ATTRIBUTE = null;
    /** @var int|float|null */
    public $RETURNVAT = null;
    /** @var int|float|null */
    public $IMPORT_EXPENSES = null;
    /** @var int|float|null */
    public $AFFECT_COST = null;
    /** @var int|float|null */
    public $ADD_TAXREF = null;
    public ?string $ADD_TAXCODE = null;
    /** @var int|float|null */
    public $MULTI_ADD_TAX = null;
    /** @var RscollectionrsAddtaxmultixml|null */
    public $ADDTAXLIST = null;
    public ?string $ADDTAXDELLIST = null;
    /** @var int|float|null */
    public $DIST_TYPE = null;
    /** @var int|float|null */
    public $CANDEDUCT = null;
    public ?string $DEDUCT_CODE = null;
    public ?string $DEDUCT_DEF = null;
    /** @var int|float|null */
    public $DEDUCTION_PART1 = null;
    /** @var int|float|null */
    public $DEDUCTION_PART2 = null;
    /** @var int|float|null */
    public $EXT_ACCESS_FLAGS = null;
    /** @var int|float|null */
    public $EXEMPT_FROM_TAXDECL = null;
    /** @var int|float|null */
    public $CURRDIFF = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    public ?string $PROJECT_CODE = null;
    public ?string $GTIP_CODE = null;
    public ?string $CPA_CODE = null;
    /** @var int|float|null */
    public $PUBLICCOUNTRYREF = null;
    public ?string $PUBLIC_COUNTRY_CODE = null;
    public ?string $PUBLIC_COUNTRY_NAME = null;
    /** @var int|float|null */
    public $OPPOSESRVREF = null;
    public ?string $COUNTER_SRV_CODE = null;
    /** @var int|float|null */
    public $VEHICLE_EXP = null;
    /** @var int|float|null */
    public $VEHICLE_RENT = null;
    /** @var int|float|null */
    public $TEXTINC = null;
    /** @var int|float|null */
    public $TEXTINCENG = null;
    /** @var int|float|null */
    public $OPEX = null;
    public ?string $UNITSERIALCODE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
            'WH_PARAMS' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsSrvinvenxml::class,
            'UNITS' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsServunitasgn::class,
            'GL_LINKS' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsGlpostxml::class,
            'ADDTAXLIST' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsAddtaxmultixml::class,
        ]);
    }
}

/**
 * RscollectionrsSrvinvenxml
 */
class RscollectionrsSrvinvenxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsSrvinvenxml::class],
        ]);
    }
}

/**
 * RsSrvinvenxml
 */
class RsSrvinvenxml extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $INTERNAL_REFERENCE = null;
    /** @var int|float|null */
    public $SRVCARDREF = null;
    /** @var int|float|null */
    public $WH_NUMBER = null;
    /** @var int|float|null */
    public $LEAD_TIME = null;
    /** @var int|float|null */
    public $ORDERED = null;
    /** @var int|float|null */
    public $SHIPPED = null;
    public ?string $LAST_TRAN_DATE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * RscollectionrsServunitasgn
 */
class RscollectionrsServunitasgn extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsServunitasgn::class],
        ]);
    }
}

/**
 * RsServunitasgn
 */
class RsServunitasgn extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $INTERNAL_REFERENCE = null;
    /** @var int|float|null */
    public $SRVREF = null;
    /** @var int|float|null */
    public $LINENR = null;
    public ?string $UNIT_CODE = null;
    /** @var int|float|null */
    public $UNITLINEREF = null;
    /** @var int|float|null */
    public $PRIORITY = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsGlpostxml::class],
        ]);
    }
}

/**
 * RsGlpostxml
 */
class RsGlpostxml extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $INTERNAL_REFERENCE = null;
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
    /** @var int|float|null */
    public $DATA_SITEID = null;
    /** @var int|float|null */
    public $XML_ATTRIBUTE = null;
    /** @var int|float|null */
    public $DATA_REFERENCE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsAddtaxmultixml::class],
        ]);
    }
}

/**
 * RsAddtaxmultixml
 */
class RsAddtaxmultixml extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $INTERNAL_REFERENCE = null;
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

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * PurchaseDiscounts
 */
class PurchaseDiscounts extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $INTERNAL_REFERENCE = null;
    /** @var int|float|null */
    public $CARDTYPE = null;
    /** @var int|float|null */
    public $RECORD_STATUS = null;
    public ?string $CODE = null;
    public ?string $DESCRIPTION = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    public ?string $FORMULA = null;
    /** @var int|float|null */
    public $ROUND_BASE = null;
    /** @var int|float|null */
    public $VAT_PERC = null;
    /** @var int|float|null */
    public $COUNTER = null;
    /** @var int|float|null */
    public $CREATED_BY = null;
    public ?string $DATE_CREATED = null;
    /** @var int|float|null */
    public $HOUR_CREATED = null;
    /** @var int|float|null */
    public $MIN_CREATED = null;
    /** @var int|float|null */
    public $SEC_CREATED = null;
    /** @var int|float|null */
    public $MODIFIED_BY = null;
    public ?string $DATE_MODIFIED = null;
    /** @var int|float|null */
    public $HOUR_MODIFIED = null;
    /** @var int|float|null */
    public $MIN_MODIFIED = null;
    /** @var int|float|null */
    public $SEC_MODIFIED = null;
    public ?string $UNIT = null;
    /** @var int|float|null */
    public $PROD_STATUS = null;
    /** @var int|float|null */
    public $DATA_SITEID = null;
    /** @var int|float|null */
    public $DATA_REFERENCE = null;
    /** @var int|float|null */
    public $UPDATED = null;
    /** @var int|float|null */
    public $TRCODE = null;
    /** @var int|float|null */
    public $CARDREF = null;
    /** @var int|float|null */
    public $TYP = null;
    public ?string $GL_CODE = null;
    /** @var int|float|null */
    public $ACCOUNTREF = null;
    public ?string $OHP_CODE = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $XML_ATTRIBUTE = null;
    /** @var int|float|null */
    public $EXT_ACCESS_FLAGS = null;
    /** @var int|float|null */
    public $STOPPAGE_DISC = null;
    public ?string $UNICODE = null;
    public ?string $UNICODE_DEF = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * Items
 */
class Items extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $INTERNAL_REFERENCE = null;
    /** @var int|float|null */
    public $RECORD_STATUS = null;
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
    public $IMAGEINC = null;
    /** @var int|float|null */
    public $TEXTINC = null;
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
    /** @var int|float|null */
    public $CREATED_BY = null;
    public ?string $DATE_CREATED = null;
    /** @var int|float|null */
    public $HOUR_CREATED = null;
    /** @var int|float|null */
    public $MIN_CREATED = null;
    /** @var int|float|null */
    public $SEC_CREATED = null;
    /** @var int|float|null */
    public $MODIFIED_BY = null;
    public ?string $DATE_MODIFIED = null;
    /** @var int|float|null */
    public $HOUR_MODIFIED = null;
    /** @var int|float|null */
    public $MIN_MODIFIED = null;
    /** @var int|float|null */
    public $SEC_MODIFIED = null;
    /** @var int|float|null */
    public $DATA_SITEID = null;
    /** @var int|float|null */
    public $DATA_REFERENCE = null;
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
    public $XML_ATTRIBUTE = null;
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
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
            'FACTORY_PARAMS' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsItemfactoryxml::class,
            'WH_PARAMS' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsIteminvenxml::class,
            'CHARACTERISTICS' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsItemchcodesxml::class,
            'DOMINANT_CLASSES' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsXmldomcls::class,
            'UNITS' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsItemunitasgn::class,
            'COMPOSITES' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsItemcmpxml::class,
            'GL_LINKS' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsGlpostxml::class,
            'SUPPLIERS' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsItemsuppxml::class,
            'ADDTAXLIST' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsAddtaxmultixml::class,
            'QPRODS' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsItemqprodxml::class,
            'QPRODSUBCONTS' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsItemqprodxml::class,
            'GENIUSFLDSLIST' => \LogoObjects\Clients\purchaseInvoices\Rscollectionextendedfielddefinitions::class,
            'DEFNFLDSLIST' => \LogoObjects\Clients\purchaseInvoices\Rscollectionextendedfielddefinitions::class,
            'VRNTEXCEPTIONS' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsExclistnodexml::class,
            'VRNTCODETEMPS' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsVrntcdtemplatexm::class,
            'VRNTEXCPTEMPS' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsVrntcdtemplatexm::class,
            'ALTERNATIVES' => \LogoObjects\Clients\purchaseInvoices\Rscollectionitemalternatives::class,
            'LABEL_LIST' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsLabelxml::class,
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsItemfactoryxml::class],
        ]);
    }
}

/**
 * RsItemfactoryxml
 */
class RsItemfactoryxml extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $INTERNAL_REFERENCE = null;
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

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsIteminvenxml::class],
        ]);
    }
}

/**
 * RsIteminvenxml
 */
class RsIteminvenxml extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $INTERNAL_REFERENCE = null;
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

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsItemchcodesxml::class],
        ]);
    }
}

/**
 * RsItemchcodesxml
 */
class RsItemchcodesxml extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $INTERNAL_REFERENCE = null;
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
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
            'VALUES' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsItemchvaluesxml::class,
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsItemchvaluesxml::class],
        ]);
    }
}

/**
 * RsItemchvaluesxml
 */
class RsItemchvaluesxml extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $INTERNAL_REFERENCE = null;
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

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsXmldomcls::class],
        ]);
    }
}

/**
 * RsXmldomcls
 */
class RsXmldomcls extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $DOM_TYPE = null;
    public ?string $CLASS_CODE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsItemunitasgn::class],
        ]);
    }
}

/**
 * RsItemunitasgn
 */
class RsItemunitasgn extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
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
    /** @var int|float|null */
    public $XML_ATTRIBUTE = null;
    /** @var int|float|null */
    public $DATA_REFERENCE = null;
    /** @var int|float|null */
    public $DATA_SITEID = null;
    /** @var int|float|null */
    public $INTERNAL_REFERENCE = null;
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
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
            'BARCODE_LIST' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsBarcodexml::class,
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsBarcodexml::class],
        ]);
    }
}

/**
 * RsBarcodexml
 */
class RsBarcodexml extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $INTERNAL_REFERENCE = null;
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
    public $DATA_SITEID = null;
    /** @var int|float|null */
    public $XML_ATTRIBUTE = null;
    /** @var int|float|null */
    public $DATA_REFERENCE = null;
    /** @var int|float|null */
    public $TYPE = null;
    /** @var int|float|null */
    public $WBARCODESHIFT = null;
    public ?string $GLOBAL_ID = null;
    /** @var int|float|null */
    public $CREATED_BY = null;
    public ?string $DATE_CREATED = null;
    /** @var int|float|null */
    public $HOUR_CREATED = null;
    /** @var int|float|null */
    public $MIN_CREATED = null;
    /** @var int|float|null */
    public $SEC_CREATED = null;
    /** @var int|float|null */
    public $MODIFIED_BY = null;
    public ?string $DATE_MODIFIED = null;
    /** @var int|float|null */
    public $HOUR_MODIFIED = null;
    /** @var int|float|null */
    public $MIN_MODIFIED = null;
    /** @var int|float|null */
    public $SEC_MODIFIED = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsItemcmpxml::class],
        ]);
    }
}

/**
 * RsItemcmpxml
 */
class RsItemcmpxml extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $INTERNAL_REFERENCE = null;
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

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsItemsuppxml::class],
        ]);
    }
}

/**
 * RsItemsuppxml
 */
class RsItemsuppxml extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $INTERNAL_REFERENCE = null;
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

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsItemqprodxml::class],
        ]);
    }
}

/**
 * RsItemqprodxml
 */
class RsItemqprodxml extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $INTERNAL_REFERENCE = null;
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

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsExclistnodexml::class],
        ]);
    }
}

/**
 * RsExclistnodexml
 */
class RsExclistnodexml extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
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
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
            'VALREFSLIST' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsExclistnodevalxm::class,
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsExclistnodevalxm::class],
        ]);
    }
}

/**
 * RsExclistnodevalxm
 */
class RsExclistnodevalxm extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $VALREF = null;
    public ?string $VALCODE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsVrntcdtemplatexm::class],
        ]);
    }
}

/**
 * RsVrntcdtemplatexm
 */
class RsVrntcdtemplatexm extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $INTERNAL_REFERENCE = null;
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
    /** @var int|float|null */
    public $DATA_SITEID = null;
    /** @var int|float|null */
    public $XML_ATTRIBUTE = null;
    /** @var int|float|null */
    public $DATA_REFERENCE = null;
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
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
            'TEMPVALS' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsVrntcdtempvaluex::class,
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\RsVrntcdtempvaluex::class],
        ]);
    }
}

/**
 * RsVrntcdtempvaluex
 */
class RsVrntcdtempvaluex extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $CHARVALREF = null;
    /** @var int|float|null */
    public $CHARCODEREF = null;
    public ?string $CHARVALCODE = null;
    public ?string $CHARABBREV = null;
    /** @var int|float|null */
    public $VALCHECKED = null;
    /** @var int|float|null */
    public $INTERNAL_REFERENCE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
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
            'items' => [\LogoObjects\Clients\purchaseInvoices\ItemAlternatives::class],
        ]);
    }
}

/**
 * ItemAlternatives
 */
class ItemAlternatives extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $INTERNAL_REFERENCE = null;
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
    public $DATA_SITEID = null;
    /** @var int|float|null */
    public $XML_ATTRIBUTE = null;
    /** @var int|float|null */
    public $DATA_REFERENCE = null;
    /** @var int|float|null */
    public $MAINVRNTREF = null;
    /** @var int|float|null */
    public $SUBVRNTREF = null;
    public ?string $MAIN_VRNTCODE = null;
    public ?string $SUBS_VRNTCODE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
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
 * PurchaseDispatches
 */
class PurchaseDispatches extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $GRPCODE = null;
    /** @var int|float|null */
    public $TYPE = null;
    /** @var int|float|null */
    public $IOCODE = null;
    public ?string $NUMBER = null;
    public ?string $DOC_TRACK_NR = null;
    public ?string $PRINTED_DESP_NUMBER = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $TIME = null;
    public ?string $DOC_NUMBER = null;
    public ?string $INVOICE_NUMBER = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $INVOICEREF = null;
    public ?string $ARP_CODE = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    public ?string $ARP_CODE_SHPM = null;
    /** @var int|float|null */
    public $RECVREF = null;
    public ?string $SHIPLOC_CODE = null;
    public ?string $SHIPLOC_DEF = null;
    public ?string $GL_CODE = null;
    /** @var int|float|null */
    public $ACCOUNTREF = null;
    public ?string $OHP_CODE = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    /** @var int|float|null */
    public $PRODORDERREF = null;
    public ?string $PORDER_NUMBER = null;
    /** @var int|float|null */
    public $PORDER_SLP_INRESERVE = null;
    /** @var int|float|null */
    public $PORDER_TYPE = null;
    /** @var int|float|null */
    public $QPROD_TYPE = null;
    /** @var int|float|null */
    public $SOURCE_TYPE = null;
    /** @var int|float|null */
    public $SOURCE_WH = null;
    public ?string $SOURCEWSCODE = null;
    /** @var int|float|null */
    public $SOURCEWSREF = null;
    /** @var int|float|null */
    public $SOURCEPOLNREF = null;
    /** @var int|float|null */
    public $SOURCE_COST_GRP = null;
    /** @var int|float|null */
    public $DEST_TYPE = null;
    /** @var int|float|null */
    public $DEST_WH = null;
    public ?string $DESTWSCODE = null;
    /** @var int|float|null */
    public $DESTWSREF = null;
    /** @var int|float|null */
    public $DESTPOLNREF = null;
    /** @var int|float|null */
    public $DEST_COST_GRP = null;
    /** @var int|float|null */
    public $FACTORY = null;
    /** @var int|float|null */
    public $DIVISION = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $DEST_DIVISION = null;
    /** @var int|float|null */
    public $DEST_DEPARTMENT = null;
    /** @var int|float|null */
    public $DEST_FACTORY = null;
    /** @var int|float|null */
    public $PROD_STATUS = null;
    /** @var int|float|null */
    public $DEVIR = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    /** @var int|float|null */
    public $INVOICED = null;
    /** @var int|float|null */
    public $GL_POSTED = null;
    /** @var int|float|null */
    public $INUSE = null;
    /** @var int|float|null */
    public $INVOICE_TYPE = null;
    /** @var int|float|null */
    public $ADD_DISCOUNTS = null;
    /** @var int|float|null */
    public $TOTAL_DISCOUNTS = null;
    /** @var int|float|null */
    public $TOTAL_DISCOUNTED = null;
    /** @var int|float|null */
    public $ADD_EXPENSES = null;
    /** @var int|float|null */
    public $TOTAL_EXPENSES = null;
    /** @var int|float|null */
    public $TOTAL_DEPOSITED = null;
    /** @var int|float|null */
    public $TOTAL_PROMOTIONS = null;
    /** @var int|float|null */
    public $TOTAL_VAT = null;
    /** @var int|float|null */
    public $TOTAL_GROSS = null;
    /** @var int|float|null */
    public $TOTAL_NET = null;
    public ?string $NOTES1 = null;
    public ?string $NOTES2 = null;
    public ?string $NOTES3 = null;
    public ?string $NOTES4 = null;
    public ?string $NOTES5 = null;
    public ?string $NOTES6 = null;
    /** @var int|float|null */
    public $RC_RATE = null;
    /** @var int|float|null */
    public $RC_NET = null;
    /** @var int|float|null */
    public $EXTENREF = null;
    public ?string $PAYMENT_CODE = null;
    /** @var int|float|null */
    public $PAYDEFREF = null;
    /** @var int|float|null */
    public $PRINT_COUNTER = null;
    public ?string $PRINT_DATE = null;
    /** @var int|float|null */
    public $FICHECNT = null;
    /** @var int|float|null */
    public $ACCFICHEREF = null;
    public ?string $SALESMANCODE = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    /** @var int|float|null */
    public $GL_POST_CANCL = null;
    public ?string $SHIPMENT_TYPE = null;
    public ?string $SHIPPING_AGENT = null;
    public ?string $TRACK_NR = null;
    /** @var int|float|null */
    public $CURRSEL_TOTALS = null;
    /** @var int|float|null */
    public $CURRSEL_DETAILS = null;
    public ?string $TRADING_GRP = null;
    public ?string $ORIG_NUMBER = null;
    /** @var RscollectionrsDesptransxml|null */
    public $TRANSACTIONS = null;
    public ?string $ACCLIST = null;
    public ?string $XBUFS = null;
    public ?string $PFICHENO = null;
    /** @var int|float|null */
    public $PFICHEDATE = null;
    public ?string $SPOLINENO = null;
    public ?string $DPOLINENO = null;
    public ?string $DOCALS = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $DISTORDERREF = null;
    /** @var int|float|null */
    public $DLV_CLIENT = null;
    public ?string $DOC_TRACKING_NR = null;
    /** @var int|float|null */
    public $ADD_TAX_CALC = null;
    /** @var int|float|null */
    public $TOTAL_ADD_TAX = null;
    public ?string $U_DOC_TRACKING_NR = null;
    /** @var int|float|null */
    public $VA_ACCREF = null;
    public ?string $VA_ACCCODE = null;
    /** @var int|float|null */
    public $VA_CENTERREF = null;
    public ?string $VA_CENTERCODE = null;
    public ?string $ORGLOGOID = null;
    /** @var int|float|null */
    public $FROM_EXIM = null;
    public ?string $FRG_TYP_CODE = null;
    /** @var int|float|null */
    public $SHP_INF_REF = null;
    /** @var int|float|null */
    public $EXIM_WH_FICHEREF = null;
    public ?string $EXIM_WH_FICHENO = null;
    /** @var int|float|null */
    public $EXIM_FICHE_TYPE = null;
    /** @var int|float|null */
    public $CURR_TRANSACTION = null;
    /** @var int|float|null */
    public $TC_RATE = null;
    /** @var int|float|null */
    public $TC_NET = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    /** @var int|float|null */
    public $WFLOWCRDREF = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $DEFNFLDSLIST = null;
    /** @var int|float|null */
    public $UPDCURR = null;
    /** @var int|float|null */
    public $UPDTRCURR = null;
    /** @var int|float|null */
    public $TOTALEXADDTAX = null;
    /** @var int|float|null */
    public $AFFECT_COLLATRL = null;
    /** @var int|float|null */
    public $STATUS = null;
    /** @var int|float|null */
    public $GRPFIRMTRANS = null;
    /** @var int|float|null */
    public $DEDUCTIONPART1 = null;
    /** @var int|float|null */
    public $DEDUCTIONPART2 = null;
    /** @var int|float|null */
    public $CANT_CRE_DEDUCT = null;
    /** @var int|float|null */
    public $AFFECT_RISK = null;
    /** @var int|float|null */
    public $EXCHINFO_INTERNAL_REFERENCE = null;
    /** @var int|float|null */
    public $EXCHINFO_FICHE_REF = null;
    /** @var int|float|null */
    public $EXCHINFO_ADD_DISCOUNTS = null;
    /** @var int|float|null */
    public $EXCHINFO_TOTAL_DISCOUNTS = null;
    /** @var int|float|null */
    public $EXCHINFO_TOTAL_DISCOUNTED = null;
    /** @var int|float|null */
    public $EXCHINFO_ADD_EXPENSES = null;
    /** @var int|float|null */
    public $EXCHINFO_TOTAL_EXPENSES = null;
    /** @var int|float|null */
    public $EXCHINFO_DIST_EXPENSES = null;
    /** @var int|float|null */
    public $EXCHINFO_TOTAL_DEPOZITO = null;
    /** @var int|float|null */
    public $EXCHINFO_TOTAL_PROMOTIONS = null;
    /** @var int|float|null */
    public $EXCHINFO_VAT_INC_GROSS = null;
    /** @var int|float|null */
    public $EXCHINFO_TOTAL_VAT = null;
    /** @var int|float|null */
    public $EXCHINFO_GROSS_TOTAL = null;
    /** @var int|float|null */
    public $EXCHINFO_TOTAL_ADD_TAX = null;
    /** @var int|float|null */
    public $EXCHINFO_TOTAL_EX_ADD_tAX = null;
    /** @var int|float|null */
    public $EXCHINFO_BAGKUR = null;
    /** @var int|float|null */
    public $EXCHINFO_STOPAJ = null;
    /** @var int|float|null */
    public $EXCHINFO_SSDF = null;
    /** @var int|float|null */
    public $EXCHINFO_BORSA = null;
    /** @var int|float|null */
    public $EXCHINFO_KOMISYON = null;
    /** @var int|float|null */
    public $EXCHINFO_KOM_KDV = null;
    /** @var int|float|null */
    public $EXCHINFO_EK1 = null;
    /** @var int|float|null */
    public $EXCHINFO_EK2 = null;
    /** @var int|float|null */
    public $EXCHINFO_EK3 = null;
    /** @var int|float|null */
    public $EXCHINFO_EK4 = null;
    /** @var int|float|null */
    public $EXCHINFO_EK5 = null;
    /** @var int|float|null */
    public $CONTROL_INFO = null;
    /** @var int|float|null */
    public $APPROVE = null;
    public ?string $APPROVE_DATE = null;
    /** @var int|float|null */
    public $DISP_STATUS = null;
    /** @var int|float|null */
    public $AUTOFILL_SLDETAILS = null;
    /** @var int|float|null */
    public $MAIN_MF_REFERENCE = null;
    /** @var int|float|null */
    public $MAIN_MF_SITEID = null;
    public ?string $GUID = null;
    public ?string $GLOBAL_ID = null;
    /** @var int|float|null */
    public $LOC_CONTROL_OFF = null;
    /** @var int|float|null */
    public $CANCEL_AUTO_CAMP_PROC = null;
    public ?string $CAMPAIGN_CODE = null;
    /** @var int|float|null */
    public $OFFER_REFERENCE = null;
    /** @var int|float|null */
    public $NO_CALCULATE = null;
    /** @var int|float|null */
    public $APPLY_ARP_DISCOUNT = null;
    public ?string $SHIP_DATE = null;
    /** @var int|float|null */
    public $SHIP_TIME = null;
    public ?string $DOC_DATE = null;
    /** @var int|float|null */
    public $DOC_TIME = null;
    /** @var int|float|null */
    public $FROMORDWITHPAY = null;
    public ?string $DELIVERY_CODE = null;
    /** @var int|float|null */
    public $DEST_STATUS = null;
    public ?string $CANCEL_EXP = null;
    public ?string $UNDO_EXP = null;
    public ?string $CANCEL_DATE = null;
    /** @var int|float|null */
    public $CREATE_WHERE = null;
    /** @var int|float|null */
    public $PUBLICBNACCREF = null;
    public ?string $PUBLIC_BNACC_CODE = null;
    public ?string $PUBLIC_BNACC_IBAN = null;
    /** @var int|float|null */
    public $PUBLIC_BNACC_CURRENCY = null;
    /** @var int|float|null */
    public $ACCEPT_EINV_PUBLIC = null;
    public ?string $VATEXCEPT_CODE = null;
    public ?string $VATEXCEPT_REASON = null;
    public ?string $ADDTAXEXCEPT_CODE = null;
    public ?string $ADDTAXEXCEPT_REASON = null;
    /** @var int|float|null */
    public $TAX_FREE_CHECK = null;
    public ?string $TOTAL_NET_STR = null;
    public ?string $TR_NET_STR = null;
    /** @var int|float|null */
    public $IS_OKC_FICHE = null;
    /** @var RscollectionrsLabelxml|null */
    public $LABEL_LIST = null;
    /** @var int|float|null */
    public $EDESPATCH = null;
    /** @var int|float|null */
    public $EDESPATCH_PROFILEID = null;
    /** @var int|float|null */
    public $EDESPATCH_STATUS = null;
    /** @var int|float|null */
    public $EINVOICE = null;
    /** @var int|float|null */
    public $EINVOICE_TYPE = null;
    /** @var int|float|null */
    public $EINVOICE_PROFILEID = null;
    /** @var int|float|null */
    public $EINVOICE_STATUS = null;
    public ?string $EINVOICE_STARTDATE = null;
    public ?string $EINVOICE_ENDDATE = null;
    public ?string $EINVOICE_DESCRIPTION = null;
    /** @var int|float|null */
    public $EINVOICE_DURATION = null;
    /** @var int|float|null */
    public $EINVOICE_DURATIONTYPE = null;
    /** @var int|float|null */
    public $EINVOICE_TAXTYPE = null;
    public ?string $EINVOICE_TUNAME = null;
    public ?string $EINVOICE_TUSURNAME = null;
    public ?string $EINVOICE_TUPASSPORTNO = null;
    public ?string $EINVOICE_TUPASSPORTDATE = null;
    public ?string $EINVOICE_TUNATIONALITY = null;
    public ?string $EINVOICE_TUNATIONALITYNAME = null;
    public ?string $EINVOICE_TUBANKNAME = null;
    public ?string $EINVOICE_TUBNACCOUNTNO = null;
    public ?string $EINVOICE_TUBNBRANCH = null;
    public ?string $EINVOICE_TUPAYMENTNOTE = null;
    public ?string $EINVOICE_TUBNCURR = null;
    public ?string $EINVOICE_ADDR1 = null;
    public ?string $EINVOICE_ADDR2 = null;
    public ?string $EINVOICE_CITYCODE = null;
    public ?string $EINVOICE_CITY = null;
    public ?string $EINVOICE_COUNTRYCODE = null;
    public ?string $EINVOICE_COUNTRY = null;
    public ?string $EINVOICE_DISTRICTCODE = null;
    public ?string $EINVOICE_DISTRICT = null;
    public ?string $EINVOICE_TOWNCODE = null;
    public ?string $EINVOICE_TOWN = null;
    public ?string $EINVOICE_EXITTOWN = null;
    public ?string $EINVOICE_EXITGATECODE = null;
    public ?string $EINVOICE_EXITGATE = null;
    public ?string $EINVOICE_AGENCYCODE = null;
    public ?string $EINVOICE_AGENCY = null;
    public ?string $EINVOICE_EXITCOUNTRYCODE = null;
    public ?string $EINVOICE_EXITCOUNTRY = null;
    /** @var int|float|null */
    public $EINVOICE_TRANSPORTTYP = null;
    public ?string $EINVOICE_TRANSPORTTYPCODE = null;
    public ?string $EINVOICE_TRANSPORTTYPNAME = null;
    public ?string $EINVOICE_EXITDATE = null;
    /** @var int|float|null */
    public $EINVOICE_EXITTIME = null;
    public ?string $EINVOICE_FLIGHTNUMBER = null;
    public ?string $EINVOICE_GUIDE = null;
    /** @var int|float|null */
    public $EINVOICE_TURETPRICE = null;
    public ?string $EINVOICE_TURETPRICESTR = null;
    /** @var int|float|null */
    public $EINVOICE_SENDEINVCUSTOM = null;
    /** @var int|float|null */
    public $EINVOICE_EINVOICETYPSGK = null;
    public ?string $EINVOICE_TAXPAYERCODE = null;
    public ?string $EINVOICE_TAXPAYERNAME = null;
    public ?string $EINVOICE_DOCUMENTNOSGK = null;
    public ?string $EINVOICE_DRIVERNAME1 = null;
    public ?string $EINVOICE_DRIVERSURNAME1 = null;
    public ?string $EINVOICE_DRIVERTCKNO1 = null;
    public ?string $EINVOICE_PLATENUM1 = null;
    public ?string $EINVOICE_CHASSISNUM1 = null;
    public ?string $EINVOICE_DRIVERNAME2 = null;
    public ?string $EINVOICE_DRIVERSURNAME2 = null;
    public ?string $EINVOICE_DRIVERTCKNO2 = null;
    public ?string $EINVOICE_PLATENUM2 = null;
    public ?string $EINVOICE_CHASSISNUM2 = null;
    public ?string $EINVOICE_DRIVERNAME3 = null;
    public ?string $EINVOICE_DRIVERSURNAME3 = null;
    public ?string $EINVOICE_DRIVERTCKNO3 = null;
    public ?string $EINVOICE_PLATENUM3 = null;
    public ?string $EINVOICE_CHASSISNUM3 = null;
    /** @var int|float|null */
    public $EINVOICE_CHAINDELIVERY = null;
    /** @var int|float|null */
    public $EINVOICE_SELLERCLIENTREF = null;
    public ?string $EINVOICE_SELLERCLIENTCODE = null;
    /** @var int|float|null */
    public $EINVOICE_BUYERCLIENTREF = null;
    public ?string $EINVOICE_BUYERCLIENTCODE = null;
    public ?string $EINVOICE_TAXNRTOPAY = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_LOGICALREF = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_STREF = null;
    public ?string $EARCHIVEDETR_INSTALLMENTNUMBER = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_EARCHIVESTATUS = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_EARCHIVESTATUSOLD = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_SENDMOD = null;
    public ?string $EARCHIVEDETR_INTSALESADDR = null;
    public ?string $EARCHIVEDETR_INTPAYMENTDESC = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_INTPAYMENTTYPE = null;
    public ?string $EARCHIVEDETR_INTPAYMENTAGENT = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_INTPAYMENTDATEORG = null;
    public ?string $EARCHIVEDETR_INTPAYMENTDATE = null;
    public ?string $EARCHIVEDETR_OCKSERIALNUMBER = null;
    public ?string $EARCHIVEDETR_OCKZNUMBER = null;
    public ?string $EARCHIVEDETR_OCKFICHENUMBER = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_OCKFICHEDATEORG = null;
    public ?string $EARCHIVEDETR_OCKFICHEDATE = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_ISCOMP = null;
    public ?string $EARCHIVEDETR_TAXNR = null;
    public ?string $EARCHIVEDETR_TCKNO = null;
    public ?string $EARCHIVEDETR_NAME = null;
    public ?string $EARCHIVEDETR_SURNAME = null;
    public ?string $EARCHIVEDETR_DEFINITION = null;
    public ?string $EARCHIVEDETR_ADDR1 = null;
    public ?string $EARCHIVEDETR_ADDR2 = null;
    public ?string $EARCHIVEDETR_CITYCODE = null;
    public ?string $EARCHIVEDETR_CITY = null;
    public ?string $EARCHIVEDETR_COUNTRYCODE = null;
    public ?string $EARCHIVEDETR_COUNTRY = null;
    public ?string $EARCHIVEDETR_POSTCODE = null;
    public ?string $EARCHIVEDETR_DISTRICTCODE = null;
    public ?string $EARCHIVEDETR_DISTRICT = null;
    public ?string $EARCHIVEDETR_TOWNCODE = null;
    public ?string $EARCHIVEDETR_TOWN = null;
    public ?string $EARCHIVEDETR_EMAILADDR = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_ISPERCURR = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_INSTEADOFDESP = null;
    public ?string $EARCHIVEDETR_TAXOFFICE = null;
    public ?string $EARCHIVEDETR_TELCODES1 = null;
    public ?string $EARCHIVEDETR_TELCODES2 = null;
    public ?string $EARCHIVEDETR_TELNRS1 = null;
    public ?string $EARCHIVEDETR_TELNRS2 = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_OLDEARCHIVESTATUS = null;
    public ?string $EARCHIVEDETR_DRIVERNAME1 = null;
    public ?string $EARCHIVEDETR_DRIVERSURNAME1 = null;
    public ?string $EARCHIVEDETR_DRIVERTCKNO1 = null;
    public ?string $EARCHIVEDETR_PLATENUM1 = null;
    public ?string $EARCHIVEDETR_CHASSISNUM1 = null;
    public ?string $EARCHIVEDETR_DRIVERNAME2 = null;
    public ?string $EARCHIVEDETR_DRIVERSURNAME2 = null;
    public ?string $EARCHIVEDETR_DRIVERTCKNO2 = null;
    public ?string $EARCHIVEDETR_PLATENUM2 = null;
    public ?string $EARCHIVEDETR_CHASSISNUM2 = null;
    public ?string $EARCHIVEDETR_DRIVERNAME3 = null;
    public ?string $EARCHIVEDETR_DRIVERSURNAME3 = null;
    public ?string $EARCHIVEDETR_DRIVERTCKNO3 = null;
    public ?string $EARCHIVEDETR_PLATENUM3 = null;
    public ?string $EARCHIVEDETR_CHASSISNUM3 = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_CHAINDELIVERY = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_SELLERCLIENTREF = null;
    public ?string $EARCHIVEDETR_SELLERCLIENTCODE = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_BUYERCLIENTREF = null;
    public ?string $EARCHIVEDETR_BUYERCLIENTCODE = null;
    /** @var int|float|null */
    public $EPRODUCER_STATUS = null;
    /** @var int|float|null */
    public $EPRODUCER_SENDMOD = null;
    public ?string $EPRODUCER_TAXNR = null;
    public ?string $EPRODUCER_TCKNO = null;
    public ?string $EPRODUCER_NAME = null;
    public ?string $EPRODUCER_SURNAME = null;
    public ?string $EPRODUCER_DEFINITION = null;
    public ?string $EPRODUCER_ADDR1 = null;
    public ?string $EPRODUCER_ADDR2 = null;
    public ?string $EPRODUCER_CITYCODE = null;
    public ?string $EPRODUCER_CITY = null;
    public ?string $EPRODUCER_COUNTRYCODE = null;
    public ?string $EPRODUCER_COUNTRY = null;
    public ?string $EPRODUCER_POSTCODE = null;
    public ?string $EPRODUCER_DISTRICTCODE = null;
    public ?string $EPRODUCER_DISTRICT = null;
    public ?string $EPRODUCER_TOWNCODE = null;
    public ?string $EPRODUCER_TOWN = null;
    public ?string $EPRODUCER_EMAILADDR = null;
    /** @var int|float|null */
    public $EPRODUCER_ISCOMP = null;
    /** @var int|float|null */
    public $EPRODUCER_DELIVERYDATEORG = null;
    public ?string $EPRODUCER_DELIVERYDATE = null;
    /** @var int|float|null */
    public $EPRODUCER_ISPERCURR = null;
    /** @var int|float|null */
    public $FROMINTEGTYPE = null;
    /** @var int|float|null */
    public $FROMINTEGREF = null;
    /** @var int|float|null */
    public $EPRINTCNT = null;
    /** @var int|float|null */
    public $CLNOTREFLAACCREF = null;
    /** @var int|float|null */
    public $CLNOTREFLACNTRREF = null;
    public ?string $PAYERCRPROVIDER = null;
    public ?string $PAYERCRKEY = null;
    /** @var int|float|null */
    public $FORENTRUST = null;
    public ?string $EINVOICE_TELCODE = null;
    public ?string $EINVOICE_TELNR = null;
    /** @var int|float|null */
    public $ORDFICHECMREF = null;
    public ?string $EARCHIVEDETR_ENRGPLATENUM = null;
    public ?string $EARCHIVEDETR_ENRGCARID = null;
    public ?string $EARCHIVEDETR_CHRGBEGDATE = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_CHRGBEGTIME = null;
    public ?string $EARCHIVEDETR_CHRGENDDATE = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_CHRGENDTIME = null;
    public ?string $EARCHIVEDETR_ESURAPORID = null;
    public ?string $EARCHIVEDETR_ESURAPORIDDATE = null;
    public ?string $EINVOICE_ENRGPLATENUM = null;
    public ?string $EINVOICE_ENRGCARID = null;
    public ?string $EINVOICE_CHRGBEGDATE = null;
    /** @var int|float|null */
    public $EINVOICE_CHRGBEGTIME = null;
    public ?string $EINVOICE_CHRGENDDATE = null;
    /** @var int|float|null */
    public $EINVOICE_CHRGENDTIME = null;
    public ?string $EINVOICE_ESURAPORID = null;
    public ?string $EINVOICE_ESURAPORIDDATE = null;
    /** @var int|float|null */
    public $ESENDTIME = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'TRANSACTIONS' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsDesptransxml::class,
            'DEFNFLDSLIST' => \LogoObjects\Clients\purchaseInvoices\Rscollectionextendedfielddefinitions::class,
            'LABEL_LIST' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsLabelxml::class,
        ]);
    }
}

/**
 * RsDesptransxml
 */
class RsDesptransxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $TYPE = null;
    public ?string $MASTER_CODE = null;
    /** @var int|float|null */
    public $STOCKREF = null;
    /** @var int|float|null */
    public $PREVLINEREF = null;
    /** @var int|float|null */
    public $PREVLINENO = null;
    /** @var int|float|null */
    public $DETLINE = null;
    /** @var int|float|null */
    public $TRCODE = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $FTIME = null;
    /** @var int|float|null */
    public $DETAIL_LEVEL = null;
    /** @var int|float|null */
    public $DISCEXP_CALC = null;
    /** @var int|float|null */
    public $PRODORDERREF = null;
    /** @var int|float|null */
    public $PORDER_TYPE = null;
    /** @var int|float|null */
    public $QPROD_TYPE = null;
    /** @var int|float|null */
    public $QPROD_ITEM_TYPE = null;
    /** @var int|float|null */
    public $SUBCONTORDERREF = null;
    public ?string $SCORDER_NUMBER = null;
    /** @var int|float|null */
    public $SOURCETYPE = null;
    /** @var int|float|null */
    public $SOURCEINDEX = null;
    /** @var int|float|null */
    public $SOURCECOSTGRP = null;
    /** @var int|float|null */
    public $SOURCEWSREF = null;
    /** @var int|float|null */
    public $SOURCEPOLNREF = null;
    /** @var int|float|null */
    public $DESTTYPE = null;
    /** @var int|float|null */
    public $DESTINDEX = null;
    /** @var int|float|null */
    public $DESTCOSTGRP = null;
    /** @var int|float|null */
    public $DESTWSREF = null;
    /** @var int|float|null */
    public $DESTPOLNREF = null;
    /** @var int|float|null */
    public $FACTORYNR = null;
    /** @var int|float|null */
    public $IOCODE = null;
    /** @var int|float|null */
    public $STFICHEREF = null;
    /** @var int|float|null */
    public $STFICHELNNO = null;
    /** @var int|float|null */
    public $INVOICEREF = null;
    /** @var int|float|null */
    public $INVOICELNNO = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    /** @var int|float|null */
    public $ORDER_REFERENCE = null;
    public ?string $ORDER_NUMBER = null;
    /** @var int|float|null */
    public $ORDER_SITE = null;
    /** @var int|float|null */
    public $OFFERTRANS_REF = null;
    /** @var int|float|null */
    public $OFFERTRANS_SITE = null;
    public ?string $OHP_CODE1 = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    public ?string $GL_CODE1 = null;
    /** @var int|float|null */
    public $ACCOUNTREF = null;
    public ?string $GL_CODE2 = null;
    /** @var int|float|null */
    public $VATACCREF = null;
    public ?string $OHP_CODE2 = null;
    /** @var int|float|null */
    public $VATCENTERREF = null;
    public ?string $GL_CODE3 = null;
    /** @var int|float|null */
    public $PRACCREF = null;
    public ?string $OHP_CODE3 = null;
    /** @var int|float|null */
    public $PRCENTERREF = null;
    public ?string $GL_CODE4 = null;
    /** @var int|float|null */
    public $PRVATACCREF = null;
    public ?string $OHP_CODE4 = null;
    /** @var int|float|null */
    public $PRVATCENREF = null;
    public ?string $PROMOTION_CODE = null;
    /** @var int|float|null */
    public $PROMREF = null;
    public ?string $ADDITIONAL_ITEMS_CODE = null;
    public ?string $PAYMENT_CODE = null;
    /** @var int|float|null */
    public $PAYDEFREF = null;
    public ?string $AUXIL_CODE = null;
    public ?string $DELVRY_CODE = null;
    /** @var int|float|null */
    public $MERGED_COUNT = null;
    /** @var int|float|null */
    public $QUANTITY = null;
    /** @var int|float|null */
    public $PRICE = null;
    /** @var int|float|null */
    public $TOTAL = null;
    /** @var int|float|null */
    public $CURR_PRICE = null;
    /** @var int|float|null */
    public $PC_PRICE = null;
    /** @var int|float|null */
    public $CURR_TRANSACTION = null;
    /** @var int|float|null */
    public $TC_XRATE = null;
    /** @var int|float|null */
    public $RC_XRATE = null;
    /** @var int|float|null */
    public $COST_DISTR = null;
    /** @var int|float|null */
    public $DISCOUNT_DISTR = null;
    /** @var int|float|null */
    public $EXPENSE_DISTR = null;
    /** @var int|float|null */
    public $PROMOTION_DISTR = null;
    /** @var int|float|null */
    public $DISCOUNT_RATE = null;
    /** @var int|float|null */
    public $BASE_AMOUNT = null;
    public ?string $DESCRIPTION = null;
    public ?string $UNIT_CODE = null;
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
    public $UNIT_CONV9 = null;
    /** @var int|float|null */
    public $VAT_INCLUDED = null;
    /** @var int|float|null */
    public $VAT_RATE = null;
    /** @var int|float|null */
    public $VAT_AMOUNT = null;
    /** @var int|float|null */
    public $VAT_BASE = null;
    /** @var int|float|null */
    public $VAT_ADJUSTMENT = null;
    /** @var int|float|null */
    public $BILLED_ITEM = null;
    /** @var int|float|null */
    public $BILLED = null;
    /** @var int|float|null */
    public $COMPOSITE = null;
    /** @var int|float|null */
    public $RET_COST_TYPE = null;
    /** @var int|float|null */
    public $SOURCE_SITE = null;
    /** @var int|float|null */
    public $SOURCE_REFERENCE = null;
    /** @var int|float|null */
    public $RET_COST = null;
    /** @var int|float|null */
    public $TC_RETCOST = null;
    /** @var int|float|null */
    public $OUT_COST = null;
    /** @var int|float|null */
    public $TC_OUTCOST = null;
    /** @var int|float|null */
    public $RET_QUANTITY = null;
    public ?string $FIXAST_CODE = null;
    /** @var int|float|null */
    public $FAREGREF = null;
    /** @var int|float|null */
    public $FIXAST_STATUS = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    /** @var int|float|null */
    public $TOTAL_NET = null;
    /** @var int|float|null */
    public $DISTADDEXP = null;
    /** @var int|float|null */
    public $FADACCREF = null;
    /** @var int|float|null */
    public $FADCENTERREF = null;
    /** @var int|float|null */
    public $FARACCREF = null;
    /** @var int|float|null */
    public $FARCENTERREF = null;
    /** @var int|float|null */
    public $PRICE_UPDATE = null;
    /** @var int|float|null */
    public $PRICE_UPDCOST = null;
    /** @var int|float|null */
    public $PRICE_UPDNEG = null;
    /** @var int|float|null */
    public $LPRODSTAT = null;
    /** @var int|float|null */
    public $PROD_EXPN_DISTR = null;
    /** @var int|float|null */
    public $RC_PRICE_UPD = null;
    /** @var int|float|null */
    public $RC_PRICE_UPDCOST = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    /** @var int|float|null */
    public $FAPLACCREF = null;
    /** @var int|float|null */
    public $FAPLCENTERREF = null;
    public ?string $OUTPUT_CODE = null;
    /** @var int|float|null */
    public $DREF = null;
    /** @var int|float|null */
    public $COST_RATE = null;
    /** @var int|float|null */
    public $XPRICEUPD = null;
    /** @var int|float|null */
    public $XPRICE = null;
    /** @var int|float|null */
    public $XREPRATE = null;
    /** @var int|float|null */
    public $DISTCOEF = null;
    /** @var int|float|null */
    public $QC_OK = null;
    /** @var int|float|null */
    public $NET_DSC_FLAG = null;
    /** @var int|float|null */
    public $NET_DSC_RATE = null;
    /** @var int|float|null */
    public $NET_DSC_AMOUNT = null;
    public ?string $DISPATCH_NUMBER = null;
    /** @var RscollectionrsFaregtrnxml|null */
    public $FA_INFO = null;
    /** @var RscollectionrsSlloctrnxml|null */
    public $SL_DETAILS = null;
    public ?string $SLDELLIST = null;
    /** @var RscollectionrsDetmattrxml|null */
    public $DETAILS = null;
    public ?string $DETDELLIST = null;
    /** @var RscollectionrsQccvalentryxml|null */
    public $QCLIST = null;
    /** @var int|float|null */
    public $DIST_ORD_SITEIID = null;
    /** @var int|float|null */
    public $DIST_ORD_REFERENCE = null;
    /** @var RscollectionrsCampcodeslistxml|null */
    public $CAMPAIGN_INFOS = null;
    /** @var int|float|null */
    public $CAMPAIGN_POINT = null;
    public ?string $PROM_CLAS_ITEM_CODE = null;
    /** @var int|float|null */
    public $VEND_COMM = null;
    /** @var int|float|null */
    public $PREV_OUT_COST = null;
    /** @var int|float|null */
    public $COSTOFSALEACCREF = null;
    public ?string $COST_OF_SALE_GL_CODE = null;
    /** @var int|float|null */
    public $PURCHACCREF = null;
    public ?string $PURCH_GL_CODE = null;
    /** @var int|float|null */
    public $COSTOFSALECNTREF = null;
    public ?string $COST_OF_SALE_OHP_CODE = null;
    /** @var int|float|null */
    public $PURCHCENTREF = null;
    public ?string $PURCH_OHP_CODE = null;
    /** @var int|float|null */
    public $PREV_OUT_COST_CURR = null;
    /** @var int|float|null */
    public $EU_VAT_AMOUNT = null;
    /** @var int|float|null */
    public $EU_VAT_STATUS = null;
    /** @var int|float|null */
    public $PR_RATE = null;
    /** @var int|float|null */
    public $ADD_TAX_RATE = null;
    /** @var int|float|null */
    public $ADD_TAX_CONV_FACT = null;
    /** @var int|float|null */
    public $ADD_TAX_AMOUNT = null;
    /** @var int|float|null */
    public $ADD_TAX_PRCOST = null;
    /** @var int|float|null */
    public $ADD_TAX_RETCOST = null;
    /** @var int|float|null */
    public $ADD_TAX_RETCOSTCURR = null;
    /** @var int|float|null */
    public $MULTI_ADD_TAX = null;
    /** @var RscollectionrsAddtaxmultilinex|null */
    public $ADDTAXLINELIST = null;
    /** @var int|float|null */
    public $GROSS_U_INFO1 = null;
    /** @var int|float|null */
    public $GROSS_U_INFO2 = null;
    /** @var int|float|null */
    public $ADD_TAX_PRCOSTCURR = null;
    /** @var int|float|null */
    public $ADD_TAX_ACCREF = null;
    public ?string $GL_CODE5 = null;
    /** @var int|float|null */
    public $ADD_TAX_CENTERREF = null;
    public ?string $OHP_CODE5 = null;
    /** @var int|float|null */
    public $ADD_TAX_AMNT_IS_UPD = null;
    /** @var int|float|null */
    public $PLN_STTRANS_PER_NR = null;
    /** @var int|float|null */
    public $PORD_CLS_PLN_AMNT = null;
    /** @var int|float|null */
    public $PLN_STTRANS_REFERENCE = null;
    /** @var int|float|null */
    public $PLN_AMOUNT = null;
    /** @var int|float|null */
    public $INFLATION_IDX = null;
    /** @var int|float|null */
    public $EDT_CURR = null;
    /** @var int|float|null */
    public $EDT_PRICE = null;
    /** @var int|float|null */
    public $PRDORD_TOT_COEF = null;
    /** @var int|float|null */
    public $DEMPEGGED_AMNT = null;
    /** @var int|float|null */
    public $STDUNIT_COST = null;
    /** @var int|float|null */
    public $STDRPUNIT_COST = null;
    /** @var int|float|null */
    public $INFLDX = null;
    /** @var int|float|null */
    public $COSTDIFF_ACCREF = null;
    public ?string $COSTDIFF_ACCCODE = null;
    /** @var int|float|null */
    public $COSTDIFF_CENREF = null;
    public ?string $COSTDIFF_CENCODE = null;
    /** @var int|float|null */
    public $ADDTAXDISC_AMNT = null;
    public ?string $ORGLOGOID = null;
    public ?string $EXIM_FICHENO = null;
    public ?string $SALEMANCODE = null;
    /** @var int|float|null */
    public $FACTORY = null;
    /** @var int|float|null */
    public $EXIM_FICHE_TYPE = null;
    /** @var int|float|null */
    public $TRANS_EXP_LINE = null;
    /** @var int|float|null */
    public $INS_EXP_LINE = null;
    /** @var int|float|null */
    public $EXIM_PROC_NO = null;
    public ?string $EXIM_FILE_CODE = null;
    /** @var int|float|null */
    public $EXIM_FILE_REF = null;
    /** @var int|float|null */
    public $EXIM_FILELINENR = null;
    public ?string $EXIM_WHFICHE_NO = null;
    /** @var int|float|null */
    public $EXIM_WHFICHE_REF = null;
    /** @var int|float|null */
    public $EXIM_WHFICHE_LNNO = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $GENIUSFLDSLIST = null;
    public ?string $ITEXT = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $DEFNFLDSLIST = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    /** @var int|float|null */
    public $DIIB_REF = null;
    public ?string $DIIB_CODE = null;
    /** @var int|float|null */
    public $MONTH = null;
    /** @var int|float|null */
    public $YEAR = null;
    /** @var int|float|null */
    public $PORDSYMOUTLN = null;
    /** @var int|float|null */
    public $PRCLISTREF = null;
    /** @var int|float|null */
    public $EXADDTAXRATE = null;
    /** @var int|float|null */
    public $EXADDTAXCONVF = null;
    public ?string $EXADDTAXACODE = null;
    /** @var int|float|null */
    public $EXADDTAXAREF = null;
    public ?string $EXADDTAXCCODE = null;
    /** @var int|float|null */
    public $EXADDTAXCREF = null;
    public ?string $OTHRADDTAXACODE = null;
    /** @var int|float|null */
    public $OTHRADDTAXAREF = null;
    public ?string $OTHRADDTAXCCODE = null;
    /** @var int|float|null */
    public $OTHRADDTAXCREF = null;
    /** @var int|float|null */
    public $EXADDTAXAMNT = null;
    /** @var int|float|null */
    public $AFFECT_COLLATRL = null;
    /** @var int|float|null */
    public $FROMORDWITHPAY = null;
    /** @var int|float|null */
    public $VARIANTREF = null;
    public ?string $VARIANTCODE = null;
    public ?string $VARIANTNAME = null;
    /** @var int|float|null */
    public $CANCONFIG = null;
    public ?string $VCHARLIST = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $FAREGDEFNFLDLIST = null;
    /** @var int|float|null */
    public $ADD_TAX_EFFECT_KDV = null;
    /** @var int|float|null */
    public $AFFECT_RISK = null;
    /** @var int|float|null */
    public $EXCHLINE_INTERNAL_REFERNCE = null;
    /** @var int|float|null */
    public $EXCHLINE_TRANS_REF = null;
    /** @var int|float|null */
    public $EXCHLINE_PRICE = null;
    /** @var int|float|null */
    public $EXCHLINE_TOTAL = null;
    /** @var int|float|null */
    public $EXCHLINE_DIST_COST = null;
    /** @var int|float|null */
    public $EXCHLINE_DIST_DISC = null;
    /** @var int|float|null */
    public $EXCHLINE_DIST_EXP = null;
    /** @var int|float|null */
    public $EXCHLINE_DIST_PROM = null;
    /** @var int|float|null */
    public $EXCHLINE_VAT_AMOUNT = null;
    /** @var int|float|null */
    public $EXCHLINE_VAT_MATRAH = null;
    /** @var int|float|null */
    public $EXCHLINE_LINE_NET = null;
    /** @var int|float|null */
    public $EXCHLINE_DIST_ADD_EXP = null;
    /** @var int|float|null */
    public $EXCHLINE_NET_DISC_AMOUNT = null;
    /** @var int|float|null */
    public $EXCHLINE_VAT_CALC_DIFF = null;
    /** @var int|float|null */
    public $EXCHLINE_EU_VAT_AMOUNT = null;
    /** @var int|float|null */
    public $EXCHLINE_ADD_TAX_AMOUNT = null;
    /** @var int|float|null */
    public $EXCHLINE_ADD_TAX_CONV_FACT = null;
    /** @var int|float|null */
    public $EXCHLINE_ADD_TAX_DISC_AMOUNT = null;
    /** @var int|float|null */
    public $EXCHLINE_EX_ADD_TAX_AMOUNT = null;
    /** @var int|float|null */
    public $EXCHLINE_EX_ADD_TAX_CONVF = null;
    /** @var int|float|null */
    public $ADD_TAX_VAT_MATRAH = null;
    /** @var int|float|null */
    public $EXCHLINE_ADD_TAX_VAT_MATRAH = null;
    /** @var RscollectionrsPreaccdistlnxml|null */
    public $PREACCLINES = null;
    /** @var int|float|null */
    public $ADD_TAX_REF = null;
    public ?string $ADD_TAX_CODE = null;
    public ?string $ADD_TAX_DEF = null;
    public ?string $ADDTAX_GLOBAL_CODE = null;
    public ?string $UNIT_GLOBAL_CODE = null;
    public ?string $PAYPL_GLOBAL_CODE = null;
    public ?string $PRCURR_GLOBAL_CODE = null;
    public ?string $TRCURR_GLOBAL_CODE = null;
    public ?string $EDTCURR_GLOBAL_CODE = null;
    /** @var int|float|null */
    public $CANDEDUCT = null;
    /** @var int|float|null */
    public $MAIN_MT_REFERENCE = null;
    /** @var int|float|null */
    public $MAIN_MT_SITEID = null;
    /** @var int|float|null */
    public $MADE_OF_SHRED = null;
    public ?string $PRCLISTCODE = null;
    /** @var int|float|null */
    public $PRCLISTTYPE = null;
    public ?string $FAPL_GL_CODE = null;
    public ?string $FAPL_OHP_CODE = null;
    /** @var int|float|null */
    public $FAPROFITACCREF = null;
    public ?string $FAPROFIT_GL_CODE = null;
    /** @var int|float|null */
    public $FAPROFITCENTREF = null;
    public ?string $FAPROFIT_OHP_CODE = null;
    /** @var int|float|null */
    public $FALOSSACCREF = null;
    public ?string $FALOSS_GL_CODE = null;
    /** @var int|float|null */
    public $FALOSSCENTREF = null;
    public ?string $FALOSS_OHP_CODE = null;
    public ?string $GLOBAL_ID = null;
    /** @var int|float|null */
    public $DEDUCTION_PART1 = null;
    /** @var int|float|null */
    public $DEDUCTION_PART2 = null;
    public ?string $GUID = null;
    public ?string $FAD_GL_CODE = null;
    public ?string $AUXIL_CODE2 = null;
    public ?string $VATEXCEPT_REASON = null;
    public ?string $VATEXCEPT_CODE = null;
    public ?string $ADDTAXEXCEPT_REASON = null;
    public ?string $ADDTAXEXCEPT_CODE = null;
    /** @var int|float|null */
    public $DEDUCTION_TOT = null;
    /** @var int|float|null */
    public $DEDUCTION_TOT_TC = null;
    public ?string $MASTER_DEF = null;
    public ?string $MASTER_DEF2 = null;
    public ?string $MASTER_DEF3 = null;
    public ?string $BARCODE = null;
    /** @var int|float|null */
    public $PARENTLNREF = null;
    public ?string $DEDUCT_CODE = null;
    public ?string $DEDUCT_DEF = null;
    /** @var int|float|null */
    public $FOREIGN_TRADE_TYPE = null;
    /** @var int|float|null */
    public $DISTRIBUTION_TYPE_WHS = null;
    /** @var int|float|null */
    public $DISTRIBUTION_TYPE_FNO = null;
    public ?string $ITM_PROD_COUNTRY_CODE = null;
    public ?string $ITM_PROD_COUNTRY_DEF = null;
    public ?string $INF_DATE = null;
    /** @var int|float|null */
    public $DEST_STATUS = null;
    /** @var int|float|null */
    public $REGTYPREF = null;
    public ?string $REG_TYPE_CODE = null;
    public ?string $CPA_CODE = null;
    public ?string $GTIP_CODE = null;
    /** @var int|float|null */
    public $PUBLICCOUNTRYREF = null;
    public ?string $PUBLIC_COUNTRY_CODE = null;
    public ?string $PUBLIC_COUNTRY_NAME = null;
    /** @var int|float|null */
    public $APPLY_ADD_TAX = null;
    /** @var int|float|null */
    public $FUTURE_MONTH_COUNT = null;
    public ?string $FUTURE_MONTH_BEGDATE = null;
    public ?string $FUTURE_MONTH_ENDDATE = null;
    /** @var int|float|null */
    public $QC_TRANSFER_REF = null;
    /** @var int|float|null */
    public $QC_TRANSFER_AMOUNT = null;
    /** @var int|float|null */
    public $FA_KKEG_AMOUNT = null;
    /** @var int|float|null */
    public $KKEGACCREF = null;
    public ?string $KKEG_GL_CODE = null;
    /** @var int|float|null */
    public $KKEGCENREF = null;
    public ?string $KKEG_OHP_CODE = null;
    /** @var int|float|null */
    public $KKEGVATACCREF = null;
    public ?string $KKEG_VAT_GL_CODE = null;
    /** @var int|float|null */
    public $KKEGVATCENREF = null;
    public ?string $KKEG_VAT_OHP_CODE = null;
    /** @var int|float|null */
    public $EXPRACCREF = null;
    public ?string $EXPR_GL_CODE = null;
    /** @var int|float|null */
    public $EXPRCNTRREF = null;
    public ?string $EXPR_OHP_CODE = null;
    /** @var int|float|null */
    public $MIDDLEMAN_EXP_TYPE = null;
    public ?string $MARKING_TAGNO = null;
    public ?string $OWNER = null;
    public ?string $TCK_TAXNR = null;
    /** @var int|float|null */
    public $EXP_DAYS = null;
    /** @var int|float|null */
    public $FROMINTEGTYPE = null;
    /** @var int|float|null */
    public $FROMINTEGREF = null;
    /** @var int|float|null */
    public $TAXFREEACCREF = null;
    /** @var int|float|null */
    public $TAXFREECNTRREF = null;
    /** @var int|float|null */
    public $EISRVDSTADDTAXINC = null;
    /** @var int|float|null */
    public $QCTRANSFERREF2 = null;
    /** @var int|float|null */
    public $QCTRANSFERAMNT2 = null;
    /** @var int|float|null */
    public $ITMDISC = null;
    /** @var int|float|null */
    public $ADD_TAX_INLNNET = null;
    /** @var int|float|null */
    public $ORDFICHECMREF = null;
    /** @var int|float|null */
    public $PURCHACCREFINFL = null;
    /** @var int|float|null */
    public $PURCHCENTREFINFL = null;
    /** @var int|float|null */
    public $COSACCREFINFL = null;
    /** @var int|float|null */
    public $COSCNTREFINFL = null;
    /** @var int|float|null */
    public $PROUTCOSTINFLDIFF = null;
    /** @var int|float|null */
    public $PROUTCOSTCRINFLDIFF = null;
    /** @var int|float|null */
    public $ADD_TAX_TYPE = null;
    /** @var int|float|null */
    public $ORGPRICE = null;
    /** @var int|float|null */
    public $RETSOURCELINK = null;
    public ?string $DIIBLINECODE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'FA_INFO' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsFaregtrnxml::class,
            'SL_DETAILS' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsSlloctrnxml::class,
            'DETAILS' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsDetmattrxml::class,
            'QCLIST' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsQccvalentryxml::class,
            'CAMPAIGN_INFOS' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsCampcodeslistxml::class,
            'ADDTAXLINELIST' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsAddtaxmultilinex::class,
            'GENIUSFLDSLIST' => \LogoObjects\Clients\purchaseInvoices\Rscollectionextendedfielddefinitions::class,
            'DEFNFLDSLIST' => \LogoObjects\Clients\purchaseInvoices\Rscollectionextendedfielddefinitions::class,
            'FAREGDEFNFLDLIST' => \LogoObjects\Clients\purchaseInvoices\Rscollectionextendedfielddefinitions::class,
            'PREACCLINES' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsPreaccdistlnxml::class,
        ]);
    }
}

/**
 * RsFaregtrnxml
 */
class RsFaregtrnxml extends \LogoObjects\Types\BaseEntity
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
    /** @var int|float|null */
    public $DATE_DEPRSTART2 = null;
    /** @var int|float|null */
    public $PART_DEP2 = null;
    /** @var int|float|null */
    public $DIFF_PRICE = null;
    /** @var int|float|null */
    public $DIFFREP_PRICE = null;
    /** @var int|float|null */
    public $DISC_INCL = null;
    /** @var int|float|null */
    public $DISC_RATE = null;
    /** @var int|float|null */
    public $ANNUAL_DIST_VAL = null;
    /** @var int|float|null */
    public $INF_BASED_VALUE = null;
    public ?string $REGTYPCODE = null;
    public ?string $REGTYPDEF = null;
    public ?string $REGEXPENSCODE = null;
    public ?string $REGEXPENSDEF = null;
    /** @var int|float|null */
    public $APPROVE = null;
    public ?string $APPROVE_DATE = null;
    /** @var int|float|null */
    public $OTV_AMOUNT = null;
    public ?string $GUID = null;
    /** @var int|float|null */
    public $FIGS_TOT_COST = null;
    /** @var int|float|null */
    public $FIGS_TOT_COSTX = null;
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
            'QCLIST' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsQccvalentryxml::class,
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
            'VALLIST' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsQccvallistxml::class,
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
 * RsDetmattrxml
 */
class RsDetmattrxml extends \LogoObjects\Types\BaseEntity
{
    public ?string $ITEM_CODE = null;
    /** @var int|float|null */
    public $ITEM_REFERENCE = null;
    /** @var int|float|null */
    public $LINE_TYPE = null;
    /** @var int|float|null */
    public $PREVLINEREF = null;
    /** @var int|float|null */
    public $PREVLINENO = null;
    /** @var int|float|null */
    public $DETLINE = null;
    /** @var int|float|null */
    public $TYPE = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $TIME = null;
    /** @var int|float|null */
    public $DETAIL_LEVEL = null;
    /** @var int|float|null */
    public $DISCEXP_CALC = null;
    public ?string $PORDER_CODE = null;
    /** @var int|float|null */
    public $PRODORDERREF = null;
    /** @var int|float|null */
    public $QPROD_ITEM_TYPE = null;
    /** @var int|float|null */
    public $SOURCETYPE = null;
    /** @var int|float|null */
    public $SOURCEINDEX = null;
    /** @var int|float|null */
    public $SOURCECOSTGRP = null;
    /** @var int|float|null */
    public $SOURCEWSREF = null;
    /** @var int|float|null */
    public $SOURCEPOLNREF = null;
    /** @var int|float|null */
    public $DESTTYPE = null;
    /** @var int|float|null */
    public $DESTINDEX = null;
    /** @var int|float|null */
    public $DESTCOSTGRP = null;
    /** @var int|float|null */
    public $DESTWSREF = null;
    /** @var int|float|null */
    public $DESTPOLNREF = null;
    /** @var int|float|null */
    public $FACTORYNR = null;
    /** @var int|float|null */
    public $IOCODE = null;
    /** @var int|float|null */
    public $STFICHEREF = null;
    /** @var int|float|null */
    public $LINE_NUMBER = null;
    /** @var int|float|null */
    public $INVOICEREF = null;
    /** @var int|float|null */
    public $INVOICELNNO = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    public ?string $ORDER_VOUCH_NR = null;
    /** @var int|float|null */
    public $ORDER_REFERENCE = null;
    /** @var int|float|null */
    public $ORDER_SITE = null;
    public ?string $GL_CODE1 = null;
    public ?string $OHP_CODE1 = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    /** @var int|float|null */
    public $ACCOUNTREF = null;
    public ?string $GL_CODE2 = null;
    /** @var int|float|null */
    public $VATACCREF = null;
    public ?string $OHP_CODE2 = null;
    /** @var int|float|null */
    public $VATCENTERREF = null;
    public ?string $GL_CODE3 = null;
    /** @var int|float|null */
    public $PRACCREF = null;
    public ?string $OHP_CODE3 = null;
    /** @var int|float|null */
    public $PRCENTERREF = null;
    public ?string $GL_CODE4 = null;
    /** @var int|float|null */
    public $PRVATACCREF = null;
    public ?string $OHP_CODE4 = null;
    /** @var int|float|null */
    public $PRVATCENREF = null;
    /** @var int|float|null */
    public $PROMREF = null;
    public ?string $PAYMENT_CODE = null;
    /** @var int|float|null */
    public $PAYDEFREF = null;
    public ?string $AUXIL_CODE = null;
    public ?string $DELVRY_CODE = null;
    /** @var int|float|null */
    public $QUANTITY = null;
    /** @var int|float|null */
    public $PRICE = null;
    /** @var int|float|null */
    public $TOTAL = null;
    /** @var int|float|null */
    public $NET_TOTAL = null;
    /** @var int|float|null */
    public $CURR_PRICE = null;
    /** @var int|float|null */
    public $PC_PRICE = null;
    /** @var int|float|null */
    public $CURR_TRANS = null;
    /** @var int|float|null */
    public $TC_XRATE = null;
    /** @var int|float|null */
    public $RC_XRATE = null;
    /** @var int|float|null */
    public $TCOST_DISTR = null;
    /** @var int|float|null */
    public $DISCOUNT_DISTR = null;
    /** @var int|float|null */
    public $EXPENSE_DISTR = null;
    /** @var int|float|null */
    public $PROMOTION_DISTR = null;
    /** @var int|float|null */
    public $DISCOUNT_PERC = null;
    public ?string $DESCRIPTION = null;
    public ?string $UNIT_CODE = null;
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
    public $PLNAMOUNT = null;
    /** @var int|float|null */
    public $VAT_INCLUDED = null;
    /** @var int|float|null */
    public $VAT_PERC = null;
    /** @var int|float|null */
    public $VAT_AMNT = null;
    /** @var int|float|null */
    public $VAT_BASE = null;
    /** @var int|float|null */
    public $BILLEDITEM = null;
    /** @var int|float|null */
    public $BILLED = null;
    /** @var int|float|null */
    public $COMPOSITE = null;
    /** @var int|float|null */
    public $RET_COST_TYPE = null;
    /** @var int|float|null */
    public $SOURCE_SITE = null;
    /** @var int|float|null */
    public $SOURCE_REFERENCE = null;
    /** @var int|float|null */
    public $RET_COST = null;
    /** @var int|float|null */
    public $CURR_RET_COST = null;
    /** @var int|float|null */
    public $OUT_COST = null;
    /** @var int|float|null */
    public $CURR_OUT_COST = null;
    /** @var int|float|null */
    public $RET_QUANTITY = null;
    public ?string $FAREG_CODE = null;
    /** @var int|float|null */
    public $FAREGREF = null;
    /** @var int|float|null */
    public $FA_STATUS = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    /** @var int|float|null */
    public $DISTADDEXP = null;
    /** @var int|float|null */
    public $FADACCREF = null;
    /** @var int|float|null */
    public $FADCENTERREF = null;
    /** @var int|float|null */
    public $FARACCREF = null;
    /** @var int|float|null */
    public $FARCENTERREF = null;
    /** @var int|float|null */
    public $FAPROFITACCREF = null;
    public ?string $FAPROFIT_GL_CODE = null;
    /** @var int|float|null */
    public $FAPROFITCENTREF = null;
    public ?string $FAPROFIT_OHP_CODE = null;
    /** @var int|float|null */
    public $FALOSSACCREF = null;
    public ?string $FALOSS_GL_CODE = null;
    /** @var int|float|null */
    public $FALOSSCENTREF = null;
    public ?string $FALOSS_OHP_CODE = null;
    /** @var int|float|null */
    public $PRICE_ADJUSTMENT = null;
    /** @var int|float|null */
    public $COST_ADJUSTMENT_PR = null;
    /** @var int|float|null */
    public $NEGPRC_ADJUSTMENT = null;
    /** @var int|float|null */
    public $LPRODSTAT = null;
    /** @var int|float|null */
    public $PRDEXPTOTAL = null;
    /** @var int|float|null */
    public $RC_PRJADJUST = null;
    /** @var int|float|null */
    public $RC_COSTADJUST = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    /** @var int|float|null */
    public $FAPLACCREF = null;
    /** @var int|float|null */
    public $FAPLCENTERREF = null;
    public ?string $OUTPUT_IDCODE = null;
    /** @var int|float|null */
    public $DREF = null;
    /** @var int|float|null */
    public $COST_RATE = null;
    /** @var int|float|null */
    public $XPRICEUPD = null;
    /** @var int|float|null */
    public $XPRICE = null;
    /** @var int|float|null */
    public $XREPRATE = null;
    /** @var int|float|null */
    public $DISTCOEF = null;
    /** @var int|float|null */
    public $QC_STATUS = null;
    /** @var RscollectionrsFaregtrnxml|null */
    public $FA_INFO = null;
    /** @var RscollectionrsSlloctrnxml|null */
    public $SL_DETAILS = null;
    public ?string $SLDELLIST = null;
    public ?string $DETLIST = null;
    public ?string $DETDELLIST = null;
    public ?string $QCLIST = null;
    /** @var int|float|null */
    public $CMPG_LINE_REF = null;
    /** @var int|float|null */
    public $VEND_COMM = null;
    /** @var int|float|null */
    public $PREV_OUT_COST = null;
    /** @var int|float|null */
    public $COSTOFSALEACCREF = null;
    public ?string $COST_OF_SALE_GL_CODE = null;
    /** @var int|float|null */
    public $PURCHACCREF = null;
    public ?string $PURCH_GL_CODE = null;
    /** @var int|float|null */
    public $COSTOFSALECNTREF = null;
    public ?string $COST_OF_SALE_OHP_CODE = null;
    /** @var int|float|null */
    public $PURCHCENTREF = null;
    public ?string $PURCH_OHP_CODE = null;
    /** @var int|float|null */
    public $PREV_OUT_COST_CURR = null;
    /** @var int|float|null */
    public $EU_VAT_AMOUNT = null;
    /** @var int|float|null */
    public $EU_VAT_STATUS = null;
    /** @var int|float|null */
    public $PR_RATE = null;
    /** @var int|float|null */
    public $ADD_TAX_RATE = null;
    /** @var int|float|null */
    public $ADD_TAX_CONV_FACT = null;
    /** @var int|float|null */
    public $ADD_TAX_AMOUNT = null;
    /** @var int|float|null */
    public $ADD_TAX_PRCOST = null;
    /** @var int|float|null */
    public $ADD_TAX_RETCOST = null;
    /** @var int|float|null */
    public $ADD_TAX_RETCOSTCURR = null;
    /** @var int|float|null */
    public $GROSS_U_INFO1 = null;
    /** @var int|float|null */
    public $GROSS_U_INFO2 = null;
    /** @var int|float|null */
    public $ADD_TAX_PRCOSTCURR = null;
    /** @var int|float|null */
    public $ADD_TAX_ACCREF = null;
    public ?string $GL_CODE5 = null;
    /** @var int|float|null */
    public $ADD_TAX_CENTERREF = null;
    public ?string $OHP_CODE5 = null;
    /** @var int|float|null */
    public $ADD_TAX_AMNT_IS_UPD = null;
    /** @var int|float|null */
    public $PLN_STTRANS_PER_NR = null;
    /** @var int|float|null */
    public $PORD_CLS_PLN_AMNT = null;
    /** @var int|float|null */
    public $PLN_STTRANS_REFERENCE = null;
    /** @var int|float|null */
    public $PLN_AMOUNT = null;
    /** @var int|float|null */
    public $INFLATION_IDX = null;
    /** @var int|float|null */
    public $PRDORD_TOT_COEFF = null;
    /** @var int|float|null */
    public $DEMPEGGED_AMNT = null;
    /** @var int|float|null */
    public $STDUNIT_COST = null;
    /** @var int|float|null */
    public $STDRPUNIT_COST = null;
    /** @var int|float|null */
    public $INFLDX = null;
    /** @var int|float|null */
    public $COSTDIFF_ACCREF = null;
    public ?string $COSTDIFF_ACCCODE = null;
    /** @var int|float|null */
    public $COSTDIFF_CENREF = null;
    public ?string $COSTDIFF_CENCODE = null;
    /** @var int|float|null */
    public $ADDTAXDISC_AMNT = null;
    public ?string $ORGLOGOID = null;
    public ?string $EXIM_FICHENO = null;
    /** @var int|float|null */
    public $EXIM_FILELINENR = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $MONTH = null;
    /** @var int|float|null */
    public $YEAR = null;
    /** @var int|float|null */
    public $PORDSYMOUTLN = null;
    /** @var int|float|null */
    public $PRCLISTREF = null;
    /** @var int|float|null */
    public $EXADDTAXRATE = null;
    /** @var int|float|null */
    public $EXADDTAXCONVF = null;
    public ?string $EXADDTAXACODE = null;
    /** @var int|float|null */
    public $EXADDTAXAREF = null;
    public ?string $EXADDTAXCCODE = null;
    /** @var int|float|null */
    public $EXADDTAXCREF = null;
    public ?string $OTHRADDTAXACODE = null;
    /** @var int|float|null */
    public $OTHRADDTAXAREF = null;
    public ?string $OTHRADDTAXCCODE = null;
    /** @var int|float|null */
    public $OTHRADDTAXCREF = null;
    /** @var int|float|null */
    public $EXADDTAXAMNT = null;
    /** @var int|float|null */
    public $AFFECT_COLLATRL = null;
    /** @var int|float|null */
    public $EDT_PRICE = null;
    /** @var int|float|null */
    public $EDT_CURR = null;
    /** @var int|float|null */
    public $ADD_TAX_EFFECT_KDV = null;
    /** @var int|float|null */
    public $AFFECT_RISK = null;
    /** @var int|float|null */
    public $EXCLINE_INTERNAL_REFERENCE = null;
    /** @var int|float|null */
    public $EXCLINE_TRANS_REF = null;
    /** @var int|float|null */
    public $EXCLINE_PRICE = null;
    /** @var int|float|null */
    public $EXCLINE_TOTAL = null;
    /** @var int|float|null */
    public $EXCLINE_DIST_COST = null;
    /** @var int|float|null */
    public $EXCLINE_DIST_DISC = null;
    /** @var int|float|null */
    public $EXCLINE_DIST_EXP = null;
    /** @var int|float|null */
    public $EXCLINE_DIST_PROM = null;
    /** @var int|float|null */
    public $EXCLINE_VAT_AMOUNT = null;
    /** @var int|float|null */
    public $EXCLINE_VAT_MATRAH = null;
    /** @var int|float|null */
    public $EXCLINE_LINE_NET = null;
    /** @var int|float|null */
    public $EXCLINE_DIST_ADD_EXP = null;
    /** @var int|float|null */
    public $EXCLINE_NET_DISC_AMOUNT = null;
    /** @var int|float|null */
    public $EXCLINE_VAT_CALC_DIFF = null;
    /** @var int|float|null */
    public $EXCLINE_EU_VAT_AMOUNT = null;
    /** @var int|float|null */
    public $EXCLINE_ADD_TAX_AMOUNT = null;
    /** @var int|float|null */
    public $EXCLINE_ADD_TAX_CONV_FACT = null;
    /** @var int|float|null */
    public $EXCLINE_ADD_TAX_DISC_AMOUNT = null;
    /** @var int|float|null */
    public $EXCLINE_EX_ADD_TAX_AMOUNT = null;
    /** @var int|float|null */
    public $EXCLINE_EX_ADD_TAX_CONVF = null;
    /** @var int|float|null */
    public $ADD_TAX_VAT_MATRAH = null;
    /** @var int|float|null */
    public $EXCLINE_ADD_TAX_VAT_MATRAH = null;
    public ?string $ADDTAX_GLOBAL_CODE = null;
    public ?string $UNIT_GLOBAL_CODE = null;
    public ?string $PAYPL_GLOBAL_CODE = null;
    public ?string $PRCURR_GLOBAL_CODE = null;
    public ?string $TRCURR_GLOBAL_CODE = null;
    public ?string $EDTCURR_GLOBAL_CODE = null;
    public ?string $PRCLISTCODE = null;
    /** @var int|float|null */
    public $PRCLISTTYPE = null;
    public ?string $ADDTAXEXCEPT_REASON = null;
    public ?string $ADDTAXEXCEPT_CODE = null;
    public ?string $GLOBAL_ID = null;
    /** @var int|float|null */
    public $DEDUCTION_PART1 = null;
    /** @var int|float|null */
    public $DEDUCTION_PART2 = null;
    public ?string $GUID = null;
    public ?string $INF_DATE = null;
    /** @var int|float|null */
    public $DEST_STATUS = null;
    /** @var int|float|null */
    public $REGTYPREF = null;
    public ?string $REG_TYPE_CODE = null;
    public ?string $CPA_CODE = null;
    public ?string $GTIP_CODE = null;
    /** @var int|float|null */
    public $PUBLICCOUNTRYREF = null;
    public ?string $PUBLIC_COUNTRY_CODE = null;
    public ?string $PUBLIC_COUNTRY_NAME = null;
    /** @var int|float|null */
    public $FUTURE_MONTH_COUNT = null;
    public ?string $FUTURE_MONTH_BEGDATE = null;
    public ?string $FUTURE_MONTH_ENDDATE = null;
    /** @var int|float|null */
    public $QC_TRANSFER_REF = null;
    /** @var int|float|null */
    public $QC_TRANSFER_AMOUNT = null;
    /** @var int|float|null */
    public $FA_KKEG_AMOUNT = null;
    /** @var int|float|null */
    public $KKEGACCREF = null;
    public ?string $KKEG_GL_CODE = null;
    /** @var int|float|null */
    public $KKEGCENREF = null;
    public ?string $KKEG_OHP_CODE = null;
    /** @var int|float|null */
    public $KKEGVATACCREF = null;
    public ?string $KKEG_VAT_GL_CODE = null;
    /** @var int|float|null */
    public $KKEGVATCENREF = null;
    public ?string $KKEG_VAT_OHP_CODE = null;
    /** @var int|float|null */
    public $EXPRACCREF = null;
    public ?string $EXPR_GL_CODE = null;
    /** @var int|float|null */
    public $EXPRCNTRREF = null;
    public ?string $EXPR_OHP_CODE = null;
    /** @var int|float|null */
    public $ADDTAXVATACCREF = null;
    public ?string $ADD_TAX_VAT_ACC_CODE = null;
    /** @var int|float|null */
    public $ADDTAXVATCENREF = null;
    public ?string $ADD_TAX_VAT_OHP_CODE = null;
    /** @var int|float|null */
    public $MIDDLEMAN_EXP_TYPE = null;
    public ?string $MARKING_TAGNO = null;
    public ?string $OWNER = null;
    public ?string $TCK_TAXNR = null;
    /** @var int|float|null */
    public $EXP_DAYS = null;
    /** @var int|float|null */
    public $FROMINTEGTYPE = null;
    /** @var int|float|null */
    public $FROMINTEGREF = null;
    /** @var int|float|null */
    public $TAXFREEACCREF = null;
    /** @var int|float|null */
    public $TAXFREECNTRREF = null;
    /** @var int|float|null */
    public $EISRVDSTADDTAXINC = null;
    /** @var int|float|null */
    public $QCTRANSFERREF2 = null;
    /** @var int|float|null */
    public $QCTRANSFERAMNT2 = null;
    /** @var int|float|null */
    public $ITMDISC = null;
    /** @var int|float|null */
    public $ADD_TAX_REF = null;
    /** @var int|float|null */
    public $ADD_TAX_INLNNET = null;
    /** @var int|float|null */
    public $ORDFICHECMREF = null;
    /** @var int|float|null */
    public $PURCHACCREFINFL = null;
    /** @var int|float|null */
    public $PURCHCENTREFINFL = null;
    /** @var int|float|null */
    public $COSACCREFINFL = null;
    /** @var int|float|null */
    public $COSCNTREFINFL = null;
    /** @var int|float|null */
    public $PROUTCOSTINFLDIFF = null;
    /** @var int|float|null */
    public $PROUTCOSTCRINFLDIFF = null;
    /** @var int|float|null */
    public $ORGPRICE = null;
    /** @var int|float|null */
    public $RETSOURCELINK = null;
    public ?string $DIIBLINECODE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'FA_INFO' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsFaregtrnxml::class,
            'SL_DETAILS' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsSlloctrnxml::class,
        ]);
    }
}

/**
 * RsCampcodeslistxml
 */
class RsCampcodeslistxml extends \LogoObjects\Types\BaseEntity
{
    public ?string $CAMPCODE1 = null;
    public ?string $CAMPCODE2 = null;
    public ?string $CAMPCODE3 = null;
    public ?string $CAMPCODE4 = null;
    public ?string $CAMPCODE5 = null;
    public ?string $PCAMPCODE = null;
    /** @var int|float|null */
    public $CAMP_LN_NO = null;
}

/**
 * RsAddtaxmultilinex
 */
class RsAddtaxmultilinex extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $FICHETYPE = null;
    /** @var int|float|null */
    public $FICHEREF = null;
    /** @var int|float|null */
    public $LINEREF = null;
    /** @var int|float|null */
    public $ADDTAXREF = null;
    public ?string $ADD_TAX_CODE = null;
    public ?string $ADD_TAX_GLOBAL_CODE = null;
    /** @var int|float|null */
    public $ADD_TAX_AMOUNT = null;
    /** @var int|float|null */
    public $ADD_TAX_VATMATRAH = null;
    /** @var int|float|null */
    public $ADD_TAX_AMNTISUPD = null;
    /** @var int|float|null */
    public $ADD_TAX_RATE = null;
    /** @var int|float|null */
    public $ADD_TAX_CONVFACT = null;
    /** @var int|float|null */
    public $ADD_TAX_DISCAMOUNT = null;
    /** @var int|float|null */
    public $ADD_TAX_ACCREF = null;
    public ?string $ADD_TAX_GL_CODE = null;
    /** @var int|float|null */
    public $ADD_TAX_CENTERREF = null;
    public ?string $ADD_TAX_OHP_CODE = null;
    /** @var int|float|null */
    public $ADD_TAX_AMOUNTX = null;
    /** @var int|float|null */
    public $ADD_TAX_VATMATRAHX = null;
    /** @var int|float|null */
    public $ADD_TAX_CONVFACTX = null;
    /** @var int|float|null */
    public $ADD_TAX_DISCAMOUNTX = null;
    /** @var int|float|null */
    public $EX_ADD_TAX_AMNTX = null;
    /** @var int|float|null */
    public $EX_ADD_TAX_CONVFX = null;
    /** @var int|float|null */
    public $EX_ADD_TAX_AMNT = null;
    /** @var int|float|null */
    public $EX_ADD_TAX_RATE = null;
    /** @var int|float|null */
    public $EX_ADD_TAX_CONVF = null;
    /** @var int|float|null */
    public $EX_ADD_TAX_AREF = null;
    public ?string $EX_ADD_TAX_GL_CODE = null;
    /** @var int|float|null */
    public $EX_ADD_TAX_CREF = null;
    public ?string $EX_ADD_TAX_OHP_CODE = null;
    /** @var int|float|null */
    public $OTHR_ADD_TAX_AREF = null;
    public ?string $OTHR_ADD_TAX_GL_CODE = null;
    /** @var int|float|null */
    public $OTHR_ADD_TAX_CREF = null;
    public ?string $OTHR_ADD_TAX_OHP_CODE = null;
    /** @var int|float|null */
    public $VATMATRAH = null;
    /** @var int|float|null */
    public $ADD_TAX_TYPE = null;
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
            'DISCTRLIST' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsDiscpaytrxml::class,
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
 * RsIntellistxml
 */
class RsIntellistxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $LOGICALREF = null;
    /** @var int|float|null */
    public $INVOICEREF = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    public ?string $INVOICEINFO1 = null;
    public ?string $INVOICEINFO2 = null;
    public ?string $INVOICEINFO3 = null;
    public ?string $INVOICEINFO4 = null;
    public ?string $INVOICEINFO5 = null;
    public ?string $INVOICEINFO6 = null;
    public ?string $INVOICEINFO7 = null;
    public ?string $INVOICEINFO8 = null;
    public ?string $INVOICEINFO9 = null;
    public ?string $INVOICEINFO10 = null;
    public ?string $INTELDESC = null;
    /** @var int|float|null */
    public $LINENUM = null;
}

/**
 * RsOkcinfoxml
 */
class RsOkcinfoxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $INVOICE_REFERENCE = null;
    /** @var int|float|null */
    public $STFICHE_REFERENCE = null;
    /** @var int|float|null */
    public $FICHE_TYPE = null;
    public ?string $FICHE_NUMBER = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $TIME = null;
    public ?string $SERIAL_NUMBER = null;
    public ?string $Z_NUMBER = null;
    public ?string $FIXED_VALUE = null;
    /** @var int|float|null */
    public $LINE_NUMBER = null;
}

/**
 * PurchaseInvoices
 */
class PurchaseInvoices extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $GRPCODE = null;
    /** @var int|float|null */
    public $TYPE = null;
    public ?string $NUMBER = null;
    public ?string $DOC_TRACK_NR = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $TIME = null;
    public ?string $DOC_NUMBER = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    public ?string $ARP_CODE = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    public ?string $ARP_CODE_SHPM = null;
    /** @var int|float|null */
    public $RECVREF = null;
    public ?string $SHIPLOC_CODE = null;
    public ?string $OHP_CODE = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    public ?string $GL_CODE = null;
    /** @var int|float|null */
    public $ACCOUNTREF = null;
    /** @var int|float|null */
    public $SOURCE_WH = null;
    /** @var int|float|null */
    public $SOURCE_COST_GRP = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    public ?string $CANCEL_DATE = null;
    /** @var int|float|null */
    public $GL_POSTED = null;
    /** @var int|float|null */
    public $PAIDINCASH = null;
    /** @var int|float|null */
    public $FROMSAFE = null;
    /** @var int|float|null */
    public $POST_FLAGS = null;
    /** @var int|float|null */
    public $VAT_RATE = null;
    /** @var int|float|null */
    public $ADD_DISCOUNTS = null;
    /** @var int|float|null */
    public $TOTAL_DISCOUNTS = null;
    /** @var int|float|null */
    public $TOTAL_DISCOUNTED = null;
    /** @var int|float|null */
    public $ADD_EXPENSES = null;
    /** @var int|float|null */
    public $TOTAL_EXPENSES = null;
    /** @var int|float|null */
    public $EXPENSE_DISTRB = null;
    /** @var int|float|null */
    public $TOTAL_DEPOSITED = null;
    /** @var int|float|null */
    public $TOTAL_PROMOTIONS = null;
    /** @var int|float|null */
    public $TOTAL_GROSSVINC = null;
    /** @var int|float|null */
    public $TOTAL_VAT = null;
    /** @var int|float|null */
    public $TOTAL_GROSS = null;
    /** @var int|float|null */
    public $TOTAL_NET = null;
    public ?string $NOTES1 = null;
    public ?string $NOTES2 = null;
    public ?string $NOTES3 = null;
    public ?string $NOTES4 = null;
    public ?string $NOTES5 = null;
    public ?string $NOTES6 = null;
    /** @var int|float|null */
    public $INTEREST_ACCRD = null;
    /** @var int|float|null */
    public $CURR_INVOICE = null;
    /** @var int|float|null */
    public $TC_XRATE = null;
    /** @var int|float|null */
    public $TC_NET = null;
    /** @var int|float|null */
    public $RC_XRATE = null;
    /** @var int|float|null */
    public $RC_NET = null;
    /** @var int|float|null */
    public $SINGLE_PAYMENT = null;
    /** @var int|float|null */
    public $KASTRANSREF = null;
    public ?string $PAYMENT_CODE = null;
    /** @var int|float|null */
    public $PAYDEFREF = null;
    /** @var int|float|null */
    public $PRINT_COUNTER = null;
    public ?string $PRINT_DATE = null;
    /** @var int|float|null */
    public $VAT_INCLUDED_GRS = null;
    /** @var int|float|null */
    public $DIVISION = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $ACCFICHEREF = null;
    /** @var int|float|null */
    public $ADDEXPACCREF = null;
    /** @var int|float|null */
    public $ADDEXPCENTREF = null;
    /** @var int|float|null */
    public $PRICE_UPD_NEG = null;
    public ?string $SALESMAN_CODE = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    /** @var int|float|null */
    public $CANCELLEDACC = null;
    public ?string $SHIPMENT_TYPE = null;
    public ?string $SHIPPING_AGENT = null;
    public ?string $TRACK_NR = null;
    /** @var int|float|null */
    public $CURRSEL_TOTALS = null;
    /** @var int|float|null */
    public $CURRSEL_DETAILS = null;
    public ?string $TRADING_GRP = null;
    /** @var int|float|null */
    public $FACTORY = null;
    /** @var int|float|null */
    public $DISPATCH_DATE = null;
    public ?string $DISP_NUMBER = null;
    /** @var Rscollectionpurchasedispatches|null */
    public $DISPATCHES = null;
    /** @var RscollectionrsDesptransxml|null */
    public $TRANSACTIONS = null;
    /** @var RscollectionrsPaylstxml|null */
    public $PAYMENT_LIST = null;
    public ?string $DETLINES = null;
    /** @var int|float|null */
    public $STOPAJ_RATE = null;
    /** @var int|float|null */
    public $SSDF_RATE = null;
    /** @var int|float|null */
    public $BORSA_RATE = null;
    /** @var int|float|null */
    public $KOMISYON_RATE = null;
    /** @var int|float|null */
    public $KOMKDV_RATE = null;
    /** @var int|float|null */
    public $BAGKUR_RATE = null;
    /** @var int|float|null */
    public $STOPAJ = null;
    /** @var int|float|null */
    public $SSDF = null;
    /** @var int|float|null */
    public $BORSA = null;
    /** @var int|float|null */
    public $KOMISYON = null;
    /** @var int|float|null */
    public $KOMKDV = null;
    /** @var int|float|null */
    public $BAGKUR = null;
    /** @var int|float|null */
    public $EK1_PER = null;
    /** @var int|float|null */
    public $EK1 = null;
    /** @var int|float|null */
    public $EK2_PER = null;
    /** @var int|float|null */
    public $EK2 = null;
    public ?string $STOPAJACC = null;
    /** @var int|float|null */
    public $STOPAJACCREF = null;
    public ?string $SSDFACC = null;
    /** @var int|float|null */
    public $SSDFACCREF = null;
    public ?string $BORSAACC = null;
    /** @var int|float|null */
    public $BORSAACCREF = null;
    public ?string $KOMISYONACC = null;
    /** @var int|float|null */
    public $KOMISYONACCREF = null;
    public ?string $KOMKDVACC = null;
    /** @var int|float|null */
    public $KOMKDVACCREF = null;
    public ?string $BAGKURACC = null;
    /** @var int|float|null */
    public $BAGKURACCREF = null;
    public ?string $STOPAJCOST = null;
    /** @var int|float|null */
    public $STOPAJCREF = null;
    public ?string $SSDFCOST = null;
    /** @var int|float|null */
    public $SSDFCREF = null;
    public ?string $BORSACOST = null;
    /** @var int|float|null */
    public $BORSACREF = null;
    public ?string $KOMISYONCOST = null;
    /** @var int|float|null */
    public $KOMISYONCREF = null;
    public ?string $KOMKDVCOST = null;
    /** @var int|float|null */
    public $KOMKDVCREF = null;
    public ?string $BAGKURCOST = null;
    /** @var int|float|null */
    public $BAGKURCREF = null;
    /** @var int|float|null */
    public $KOM_TYPE = null;
    public ?string $EK1ACC = null;
    /** @var int|float|null */
    public $EK1ACCREF = null;
    public ?string $EK2ACC = null;
    /** @var int|float|null */
    public $EK2ACCREF = null;
    public ?string $EK1COST = null;
    /** @var int|float|null */
    public $EK1CREF = null;
    public ?string $EK2COST = null;
    /** @var int|float|null */
    public $EK2CREF = null;
    public ?string $EK3ACC = null;
    /** @var int|float|null */
    public $EK3ACCREF = null;
    public ?string $EK4ACC = null;
    /** @var int|float|null */
    public $EK4ACCREF = null;
    public ?string $EK5ACC = null;
    /** @var int|float|null */
    public $EK5ACCREF = null;
    public ?string $EK3COST = null;
    /** @var int|float|null */
    public $EK3CREF = null;
    public ?string $EK4COST = null;
    /** @var int|float|null */
    public $EK4CREF = null;
    public ?string $EK5COST = null;
    /** @var int|float|null */
    public $EK5CREF = null;
    /** @var int|float|null */
    public $STOPAJ_CALC_TYPE = null;
    /** @var int|float|null */
    public $BAGKUR_CALC_TYPE = null;
    public ?string $XBUFS = null;
    public ?string $DOCALS = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $DISTORDERREF = null;
    /** @var int|float|null */
    public $COSTOFSALEFCREF = null;
    /** @var int|float|null */
    public $DLV_CLIENT = null;
    /** @var int|float|null */
    public $OP_STATUS = null;
    /** @var int|float|null */
    public $TOTAL_ADD_TAX = null;
    /** @var int|float|null */
    public $PAYMENT_TYPE = null;
    /** @var int|float|null */
    public $ACCOUNTED_CNT = null;
    /** @var int|float|null */
    public $INFLATION_IDX = null;
    public ?string $CASH_TRAN_GRP_NO = null;
    /** @var int|float|null */
    public $CASH_TRAN_GRPLINE_NO = null;
    /** @var int|float|null */
    public $CASH_INFLDX = null;
    public ?string $ORGLOGOID = null;
    /** @var int|float|null */
    public $FROM_EXIM = null;
    public ?string $CASH_ORGLOGOID = null;
    public ?string $FRG_TYP_CODE = null;
    public ?string $FRG_TYP_DESC = null;
    /** @var int|float|null */
    public $EXIM_FICHE_TYPE = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $GENIUSFLDSLIST = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $DEFNFLDSLIST = null;
    /** @var int|float|null */
    public $WFLOWCARDREF = null;
    /** @var int|float|null */
    public $STATUS = null;
    /** @var int|float|null */
    public $DEDUCTIONPART1 = null;
    /** @var int|float|null */
    public $DEDUCTIONPART2 = null;
    /** @var int|float|null */
    public $DATA_LINK_REFERENCE = null;
    /** @var int|float|null */
    public $TOTALEXADDTAX = null;
    /** @var int|float|null */
    public $EXACCOUNTED = null;
    /** @var int|float|null */
    public $FROMBANK = null;
    /** @var int|float|null */
    public $BNTRANSREF = null;
    /** @var int|float|null */
    public $GUARANTOR1_FICHETYPE = null;
    /** @var int|float|null */
    public $GUARANTOR1_NR = null;
    public ?string $GUARANTOR1_NAMESURNAME = null;
    public ?string $GUARANTOR1_ADDR1 = null;
    public ?string $GUARANTOR1_ADDR2 = null;
    public ?string $GUARANTOR1_DISTRICT = null;
    public ?string $GUARANTOR1_TOWN = null;
    public ?string $GUARANTOR1_CITY = null;
    public ?string $GUARANTOR1_COUNTRY = null;
    public ?string $GUARANTOR1_POSTCODE = null;
    public ?string $GUARANTOR1_TELNR1 = null;
    public ?string $GUARANTOR1_TELNR2 = null;
    public ?string $GUARANTOR1_FAXNR = null;
    /** @var int|float|null */
    public $GUARANTOR1_SITEID = null;
    /** @var int|float|null */
    public $GUARANTOR1_ORGLOGICREF = null;
    /** @var int|float|null */
    public $GUARANTOR1_CLIENTREF = null;
    public ?string $GUARANTOR1_TAXNR = null;
    public ?string $GUARANTOR1_TAXOFFICE = null;
    public ?string $GUARANTOR1_TAXXOFFCODE = null;
    public ?string $GUARANTOR1_BANKBRANCHCODE = null;
    public ?string $GUARANTOR1_BANKBRANCHS = null;
    public ?string $GUARANTOR1_BANKACCOUNTS = null;
    /** @var int|float|null */
    public $GUARANTOR2_FICHETYPE = null;
    /** @var int|float|null */
    public $GUARANTOR2_NR = null;
    public ?string $GUARANTOR2_NAMESURNAME = null;
    public ?string $GUARANTOR2_ADDR1 = null;
    public ?string $GUARANTOR2_ADDR2 = null;
    public ?string $GUARANTOR2_DISTRICT = null;
    public ?string $GUARANTOR2_TOWN = null;
    public ?string $GUARANTOR2_CITY = null;
    public ?string $GUARANTOR2_COUNTRY = null;
    public ?string $GUARANTOR2_POSTCODE = null;
    public ?string $GUARANTOR2_TELNR1 = null;
    public ?string $GUARANTOR2_TELNR2 = null;
    public ?string $GUARANTOR2_FAXNR = null;
    /** @var int|float|null */
    public $GUARANTOR2_SITEID = null;
    /** @var int|float|null */
    public $GUARANTOR2_ORGLOGICREF = null;
    /** @var int|float|null */
    public $GUARANTOR2_CLIENTREF = null;
    public ?string $GUARANTOR2_TAXNR = null;
    public ?string $GUARANTOR2_TAXOFFICE = null;
    public ?string $GUARANTOR2_TAXOFFCODE = null;
    public ?string $GUARANTOR2_BANKBRANCHCODE = null;
    public ?string $GUARANTOR2_BANKBRANCHS = null;
    public ?string $GUARANTOR2_BANKACCOUNTS = null;
    /** @var int|float|null */
    public $AFFECT_COLLATRL = null;
    /** @var int|float|null */
    public $FROMORDWITHPAY = null;
    /** @var RscollectionrsIntellistxml|null */
    public $INTEL_LIST = null;
    /** @var int|float|null */
    public $GRPFIRMTRANS = null;
    /** @var int|float|null */
    public $AFFECT_RISK = null;
    /** @var int|float|null */
    public $EXCHINFO_INTERNAL_REFERENCE = null;
    /** @var int|float|null */
    public $EXCHINFO_FICHE_REF = null;
    /** @var int|float|null */
    public $EXCHINFO_ADD_DISCOUNTS = null;
    /** @var int|float|null */
    public $EXCHINFO_TOTAL_DISCOUNTS = null;
    /** @var int|float|null */
    public $EXCHINFO_TOTAL_DISCOUNTED = null;
    /** @var int|float|null */
    public $EXCHINFO_ADD_EXPENSES = null;
    /** @var int|float|null */
    public $EXCHINFO_TOTAL_EXPENSES = null;
    /** @var int|float|null */
    public $EXCHINFO_DIST_EXPENSE = null;
    /** @var int|float|null */
    public $EXCHINFO_TOTAL_DEPOZITO = null;
    /** @var int|float|null */
    public $EXCHINFO_TOTAL_PROMOTIONS = null;
    /** @var int|float|null */
    public $EXCHINFO_VAT_INC_GROSS = null;
    /** @var int|float|null */
    public $EXCHINFO_TOTAL_VAT = null;
    /** @var int|float|null */
    public $EXCHINFO_GROSS_TOTAL = null;
    /** @var int|float|null */
    public $EXCHINFO_TOTAL_ADD_TAX = null;
    /** @var int|float|null */
    public $EXCHINFO_TOTAL_EX_ADD_TAX = null;
    /** @var int|float|null */
    public $EXCHINFO_BAGKUR = null;
    /** @var int|float|null */
    public $EXCHINFO_STOPAJ = null;
    /** @var int|float|null */
    public $EXCHINFO_SSDF = null;
    /** @var int|float|null */
    public $EXCHINFO_BORSA = null;
    /** @var int|float|null */
    public $EXCHINFO_KOMISYON = null;
    /** @var int|float|null */
    public $EXCHINFO_KOM_KDV = null;
    /** @var int|float|null */
    public $EXCHINFO_EK1 = null;
    /** @var int|float|null */
    public $EXCHINFO_EK2 = null;
    /** @var int|float|null */
    public $EXCHINFO_EK3 = null;
    /** @var int|float|null */
    public $EXCHINFO_EK4 = null;
    /** @var int|float|null */
    public $EXCHINFO_EK5 = null;
    /** @var int|float|null */
    public $CONTROL_INFO = null;
    /** @var int|float|null */
    public $POS_TRANSFER_INFO = null;
    /** @var int|float|null */
    public $TAX_FREE_CHECK = null;
    public ?string $PASSPORT_NO = null;
    public ?string $CREDIT_CARD_NO = null;
    public ?string $CREDIT_CARD_NUMBER = null;
    /** @var int|float|null */
    public $APPROVE = null;
    public ?string $APPROVE_DATE = null;
    /** @var int|float|null */
    public $ACC_FICHE_SITEID = null;
    /** @var RscollectionrsPreaccdistlnxml|null */
    public $PREACCLINES = null;
    /** @var int|float|null */
    public $ENTRUST = null;
    /** @var int|float|null */
    public $EK3_PER = null;
    /** @var int|float|null */
    public $EK3 = null;
    /** @var int|float|null */
    public $EK4_PER = null;
    /** @var int|float|null */
    public $EK4 = null;
    /** @var int|float|null */
    public $EK5_PER = null;
    /** @var int|float|null */
    public $EK5 = null;
    public ?string $DOC_DATE = null;
    /** @var int|float|null */
    public $AUTOFILL_SLDETAILS = null;
    /** @var int|float|null */
    public $EINVOICE = null;
    /** @var int|float|null */
    public $PROFILE_ID = null;
    public ?string $GUID = null;
    public ?string $ESEND_DATE = null;
    /** @var int|float|null */
    public $ESTATUS = null;
    public ?string $ESTARTDATE = null;
    public ?string $EENDDATE = null;
    public ?string $EDESCRIPTION = null;
    /** @var int|float|null */
    public $EDURATION = null;
    /** @var int|float|null */
    public $EDURATION_TYPE = null;
    /** @var int|float|null */
    public $EINSTEAD_OF_DISPATCH = null;
    /** @var int|float|null */
    public $EINVOICE_SENDCUSTOM = null;
    /** @var int|float|null */
    public $EINVOICE_TAXTYPE = null;
    public ?string $EINVOICE_TUNAME = null;
    public ?string $EINVOICE_TUSURNAME = null;
    public ?string $EINVOICE_TUPASSPORTNO = null;
    public ?string $EINVOICE_TUPASSPORTDATE = null;
    public ?string $EINVOICE_TUNATIONALITY = null;
    public ?string $EINVOICE_TUNATIONALITYNAME = null;
    public ?string $EINVOICE_TUBANKNAME = null;
    public ?string $EINVOICE_TUBNACCOUNTNO = null;
    public ?string $EINVOICE_TUBNBRANCH = null;
    public ?string $EINVOICE_TUPAYMENTNOTE = null;
    public ?string $EINVOICE_TUBNCURR = null;
    public ?string $EINVOICE_ADDR1 = null;
    public ?string $EINVOICE_ADDR2 = null;
    public ?string $EINVOICE_CITYCODE = null;
    public ?string $EINVOICE_CITY = null;
    public ?string $EINVOICE_COUNTRYCODE = null;
    public ?string $EINVOICE_COUNTRY = null;
    public ?string $EINVOICE_DISTRICTCODE = null;
    public ?string $EINVOICE_DISTRICT = null;
    public ?string $EINVOICE_TOWNCODE = null;
    public ?string $EINVOICE_TOWN = null;
    public ?string $EINVOICE_EXITTOWN = null;
    public ?string $EINVOICE_EXITGATECODE = null;
    public ?string $EINVOICE_EXITGATE = null;
    public ?string $EINVOICE_AGENCYCODE = null;
    public ?string $EINVOICE_AGENCY = null;
    public ?string $EINVOICE_EXITCOUNTRYCODE = null;
    public ?string $EINVOICE_EXITCOUNTRY = null;
    /** @var int|float|null */
    public $EINVOICE_TRANSPORTTYP = null;
    public ?string $EINVOICE_TRANSPORTTYPCODE = null;
    public ?string $EINVOICE_TRANSPORTTYPNAME = null;
    public ?string $EINVOICE_EXITDATE = null;
    /** @var int|float|null */
    public $EINVOICE_EXITTIME = null;
    public ?string $EINVOICE_FLIGHTNUMBER = null;
    public ?string $EINVOICE_GUIDE = null;
    /** @var int|float|null */
    public $EINVOICE_TURETPRICE = null;
    public ?string $EINVOICE_TURETPRICESTR = null;
    /** @var int|float|null */
    public $EINVOICE_SENDEINVCUSTOM = null;
    /** @var int|float|null */
    public $EINVOICE_EINVOICETYPSGK = null;
    public ?string $EINVOICE_TAXPAYERCODE = null;
    public ?string $EINVOICE_TAXPAYERNAME = null;
    public ?string $EINVOICE_DOCUMENTNOSGK = null;
    public ?string $EINVOICE_DRIVERNAME1 = null;
    public ?string $EINVOICE_DRIVERSURNAME1 = null;
    public ?string $EINVOICE_DRIVERTCKNO1 = null;
    public ?string $EINVOICE_PLATENUM1 = null;
    public ?string $EINVOICE_CHASSISNUM1 = null;
    public ?string $EINVOICE_DRIVERNAME2 = null;
    public ?string $EINVOICE_DRIVERSURNAME2 = null;
    public ?string $EINVOICE_DRIVERTCKNO2 = null;
    public ?string $EINVOICE_PLATENUM2 = null;
    public ?string $EINVOICE_CHASSISNUM2 = null;
    public ?string $EINVOICE_DRIVERNAME3 = null;
    public ?string $EINVOICE_DRIVERSURNAME3 = null;
    public ?string $EINVOICE_DRIVERTCKNO3 = null;
    public ?string $EINVOICE_PLATENUM3 = null;
    public ?string $EINVOICE_CHASSISNUM3 = null;
    /** @var int|float|null */
    public $EINVOICE_CHAINDELIVERY = null;
    /** @var int|float|null */
    public $EINVOICE_SELLERCLIENTREF = null;
    public ?string $EINVOICE_SELLERCLIENTCODE = null;
    public ?string $EINVOICE_TAXNRTOPAY = null;
    public ?string $PAYPLAN_GLOBAL_CODE = null;
    public ?string $TRCURR_GLOBAL_CODE = null;
    public ?string $EDTCURR_GLOBAL_CODE = null;
    /** @var int|float|null */
    public $CANCEL_AUTO_GL_PROC = null;
    /** @var int|float|null */
    public $FILL_GL_CODES_CONN = null;
    /** @var int|float|null */
    public $FILL_GL_CODES_CARD = null;
    public ?string $GLOBAL_ID = null;
    /** @var int|float|null */
    public $DEVIR = null;
    /** @var int|float|null */
    public $LOC_CONTROL_OFF = null;
    /** @var int|float|null */
    public $CANT_CRE_DEDUCT = null;
    public ?string $VATEXCEPT_REASON = null;
    public ?string $VATEXCEPT_CODE = null;
    public ?string $ADDTAXEXCEPT_REASON = null;
    public ?string $ADDTAXEXCEPT_CODE = null;
    /** @var int|float|null */
    public $EINVOICE_TYPE = null;
    public ?string $TOTAL_NET_STR = null;
    public ?string $TR_NET_STR = null;
    /** @var int|float|null */
    public $CANCEL_AUTO_CAMP_PROC = null;
    public ?string $CAMPAIGN_CODE = null;
    public ?string $SHIPLOC_DEF = null;
    /** @var int|float|null */
    public $TOTAL_SERVICES = null;
    /** @var int|float|null */
    public $FROMEXCHDIFF = null;
    /** @var int|float|null */
    public $EXIMVAT = null;
    public ?string $SERIAL_CODE = null;
    /** @var int|float|null */
    public $CHECK_CLDAILYDEDUCTLIMIT = null;
    /** @var int|float|null */
    public $STAFF_OTHER_EXPENSES = null;
    /** @var int|float|null */
    public $OFFER_REFERENCE = null;
    /** @var int|float|null */
    public $NO_CALCULATE = null;
    /** @var int|float|null */
    public $APPLY_ARP_DISCOUNT = null;
    /** @var int|float|null */
    public $MARKREF = null;
    public ?string $MARK_CODE = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_LOGICALREF = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_INVOICEREF = null;
    public ?string $EARCHIVEDETR_INSTALLMENTNUMBER = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_EARCHIVESTATUS = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_EARCHIVESTATUSOLD = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_SENDMOD = null;
    public ?string $EARCHIVEDETR_INTSALESADDR = null;
    public ?string $EARCHIVEDETR_INTPAYMENTDESC = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_INTPAYMENTTYPE = null;
    public ?string $EARCHIVEDETR_INTPAYMENTAGENT = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_INTPAYMENTDATEORG = null;
    public ?string $EARCHIVEDETR_INTPAYMENTDATE = null;
    public ?string $EARCHIVEDETR_OCKSERIALNUMBER = null;
    public ?string $EARCHIVEDETR_OCKZNUMBER = null;
    public ?string $EARCHIVEDETR_OCKFICHENUMBER = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_OCKFICHEDATEORG = null;
    public ?string $EARCHIVEDETR_OCKFICHEDATE = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_ISCOMP = null;
    public ?string $EARCHIVEDETR_TAXNR = null;
    public ?string $EARCHIVEDETR_TCKNO = null;
    public ?string $EARCHIVEDETR_NAME = null;
    public ?string $EARCHIVEDETR_SURNAME = null;
    public ?string $EARCHIVEDETR_DEFINITION = null;
    public ?string $EARCHIVEDETR_ADDR1 = null;
    public ?string $EARCHIVEDETR_ADDR2 = null;
    public ?string $EARCHIVEDETR_CITYCODE = null;
    public ?string $EARCHIVEDETR_CITY = null;
    public ?string $EARCHIVEDETR_COUNTRYCODE = null;
    public ?string $EARCHIVEDETR_COUNTRY = null;
    public ?string $EARCHIVEDETR_POSTCODE = null;
    public ?string $EARCHIVEDETR_DISTRICTCODE = null;
    public ?string $EARCHIVEDETR_DISTRICT = null;
    public ?string $EARCHIVEDETR_TOWNCODE = null;
    public ?string $EARCHIVEDETR_TOWN = null;
    public ?string $EARCHIVEDETR_EMAILADDR = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_ISPERCURR = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_INSTEADOFDESP = null;
    public ?string $EARCHIVEDETR_TAXOFFICE = null;
    public ?string $EARCHIVEDETR_TELCODES1 = null;
    public ?string $EARCHIVEDETR_TELCODES2 = null;
    public ?string $EARCHIVEDETR_TELNRS1 = null;
    public ?string $EARCHIVEDETR_TELNRS2 = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_OLDEARCHIVESTATUS = null;
    public ?string $EARCHIVEDETR_DRIVERNAME1 = null;
    public ?string $EARCHIVEDETR_DRIVERSURNAME1 = null;
    public ?string $EARCHIVEDETR_DRIVERTCKNO1 = null;
    public ?string $EARCHIVEDETR_PLATENUM1 = null;
    public ?string $EARCHIVEDETR_CHASSISNUM1 = null;
    public ?string $EARCHIVEDETR_DRIVERNAME2 = null;
    public ?string $EARCHIVEDETR_DRIVERSURNAME2 = null;
    public ?string $EARCHIVEDETR_DRIVERTCKNO2 = null;
    public ?string $EARCHIVEDETR_PLATENUM2 = null;
    public ?string $EARCHIVEDETR_CHASSISNUM2 = null;
    public ?string $EARCHIVEDETR_DRIVERNAME3 = null;
    public ?string $EARCHIVEDETR_DRIVERSURNAME3 = null;
    public ?string $EARCHIVEDETR_DRIVERTCKNO3 = null;
    public ?string $EARCHIVEDETR_PLATENUM3 = null;
    public ?string $EARCHIVEDETR_CHASSISNUM3 = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_CHAINDELIVERY = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_SELLERCLIENTREF = null;
    public ?string $EARCHIVEDETR_SELLERCLIENTCODE = null;
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
    /** @var int|float|null */
    public $EPRODUCER_STATUS = null;
    /** @var int|float|null */
    public $EPRODUCER_SENDMOD = null;
    public ?string $EPRODUCER_TAXNR = null;
    public ?string $EPRODUCER_TCKNO = null;
    public ?string $EPRODUCER_NAME = null;
    public ?string $EPRODUCER_SURNAME = null;
    public ?string $EPRODUCER_DEFINITION = null;
    public ?string $EPRODUCER_ADDR1 = null;
    public ?string $EPRODUCER_ADDR2 = null;
    public ?string $EPRODUCER_CITYCODE = null;
    public ?string $EPRODUCER_CITY = null;
    public ?string $EPRODUCER_COUNTRYCODE = null;
    public ?string $EPRODUCER_COUNTRY = null;
    public ?string $EPRODUCER_POSTCODE = null;
    public ?string $EPRODUCER_DISTRICTCODE = null;
    public ?string $EPRODUCER_DISTRICT = null;
    public ?string $EPRODUCER_TOWNCODE = null;
    public ?string $EPRODUCER_TOWN = null;
    public ?string $EPRODUCER_EMAILADDR = null;
    /** @var int|float|null */
    public $EPRODUCER_ISCOMP = null;
    /** @var int|float|null */
    public $EPRODUCER_DELIVERYDATEORG = null;
    public ?string $EPRODUCER_DELIVERYDATE = null;
    /** @var int|float|null */
    public $EPRODUCER_ISPERCURR = null;
    /** @var int|float|null */
    public $IS_OKC_FICHE = null;
    /** @var RscollectionrsOkcinfoxml|null */
    public $OKCINFO_LIST = null;
    /** @var int|float|null */
    public $EXIM_PAYTYPEREF = null;
    public ?string $EXIM_PAYTYPE_CODE = null;
    public ?string $EXIM_PAYTYPE_NAME = null;
    /** @var int|float|null */
    public $EXIM_BRBANKREF = null;
    public ?string $EXIM_BRBANK_CODE = null;
    public ?string $EXIM_BRBANK_NAME = null;
    public ?string $DELIVERY_CODE = null;
    /** @var int|float|null */
    public $ACCEPT_EINV_PUBLIC = null;
    /** @var int|float|null */
    public $PUBLICBNACCREF = null;
    public ?string $PUBLIC_BNACC_CODE = null;
    public ?string $PUBLIC_BNACC_IBAN = null;
    /** @var int|float|null */
    public $PUBLIC_BNACC_CURRENCY = null;
    public ?string $TYPE_CODE = null;
    /** @var int|float|null */
    public $FUTURE_MONTH_YREXPINC = null;
    /** @var int|float|null */
    public $DOC_DETAIL = null;
    /** @var int|float|null */
    public $CALC_ADD_TAX_VAT_SEP = null;
    /** @var int|float|null */
    public $ELECT_DOC = null;
    /** @var RscollectionrsLabelxml|null */
    public $LABEL_LIST = null;
    /** @var int|float|null */
    public $FROMINTEGTYPE = null;
    /** @var int|float|null */
    public $FILL_TRDGRP = null;
    /** @var int|float|null */
    public $EPRINTCNT = null;
    public ?string $RIGHTOFRETURNTYP = null;
    public ?string $EINVOICE_TELCODE = null;
    public ?string $EINVOICE_TELNR = null;
    /** @var int|float|null */
    public $ORDFICHECMREF = null;
    public ?string $EARCHIVEDETR_ENRGPLATENUM = null;
    public ?string $EARCHIVEDETR_ENRGCARID = null;
    public ?string $EARCHIVEDETR_CHRGBEGDATE = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_CHRGBEGTIME = null;
    public ?string $EARCHIVEDETR_CHRGENDDATE = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_CHRGENDTIME = null;
    public ?string $EARCHIVEDETR_ESURAPORID = null;
    public ?string $EARCHIVEDETR_ESURAPORIDDATE = null;
    public ?string $EINVOICE_ENRGPLATENUM = null;
    public ?string $EINVOICE_ENRGCARID = null;
    public ?string $EINVOICE_CHRGBEGDATE = null;
    /** @var int|float|null */
    public $EINVOICE_CHRGBEGTIME = null;
    public ?string $EINVOICE_CHRGENDDATE = null;
    /** @var int|float|null */
    public $EINVOICE_CHRGENDTIME = null;
    public ?string $EINVOICE_ESURAPORID = null;
    public ?string $EINVOICE_ESURAPORIDDATE = null;
    /** @var int|float|null */
    public $COSFCREFINFL = null;
    /** @var int|float|null */
    public $ESENDTIME = null;
    /** @var int|float|null */
    public $RECEIPT = null;
    /** @var int|float|null */
    public $INEFFECTIVECOST = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DISPATCHES' => \LogoObjects\Clients\purchaseInvoices\Rscollectionpurchasedispatches::class,
            'TRANSACTIONS' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsDesptransxml::class,
            'PAYMENT_LIST' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsPaylstxml::class,
            'GENIUSFLDSLIST' => \LogoObjects\Clients\purchaseInvoices\Rscollectionextendedfielddefinitions::class,
            'DEFNFLDSLIST' => \LogoObjects\Clients\purchaseInvoices\Rscollectionextendedfielddefinitions::class,
            'INTEL_LIST' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsIntellistxml::class,
            'PREACCLINES' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsPreaccdistlnxml::class,
            'OKCINFO_LIST' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsOkcinfoxml::class,
            'LABEL_LIST' => \LogoObjects\Clients\purchaseInvoices\RscollectionrsLabelxml::class,
        ]);
    }
}

/**
 * PurchaseInvoicesQueryOptions
 */
class PurchaseInvoicesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var PurchaseInvoicesSortSpec|null */
    public $sort = null;
}

/**
 * PurchaseInvoicesSearchCriteria
 */
class PurchaseInvoicesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $grpcode = null;
    /** @var mixed */
    public $type = null;
    /** @var mixed */
    public $number = null;
    /** @var mixed */
    public $docTrackNr = null;
    /** @var mixed */
    public $date = null;
    /** @var mixed */
    public $time = null;
    /** @var mixed */
    public $docNumber = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $arpCode = null;
    /** @var mixed */
    public $clientref = null;
    /** @var mixed */
    public $arpCodeShpm = null;
    /** @var mixed */
    public $recvref = null;
    /** @var mixed */
    public $shiplocCode = null;
    /** @var mixed */
    public $ohpCode = null;
    /** @var mixed */
    public $centerref = null;
    /** @var mixed */
    public $glCode = null;
    /** @var mixed */
    public $accountref = null;
    /** @var mixed */
    public $sourceWh = null;
    /** @var mixed */
    public $sourceCostGrp = null;
    /** @var mixed */
    public $cancelled = null;
    /** @var mixed */
    public $cancelDate = null;
    /** @var mixed */
    public $glPosted = null;
    /** @var mixed */
    public $paidincash = null;
    /** @var mixed */
    public $fromsafe = null;
    /** @var mixed */
    public $postFlags = null;
    /** @var mixed */
    public $vatRate = null;
    /** @var mixed */
    public $addDiscounts = null;
    /** @var mixed */
    public $totalDiscounts = null;
    /** @var mixed */
    public $totalDiscounted = null;
    /** @var mixed */
    public $addExpenses = null;
    /** @var mixed */
    public $totalExpenses = null;
    /** @var mixed */
    public $expenseDistrb = null;
    /** @var mixed */
    public $totalDeposited = null;
    /** @var mixed */
    public $totalPromotions = null;
    /** @var mixed */
    public $totalGrossvinc = null;
    /** @var mixed */
    public $totalVat = null;
    /** @var mixed */
    public $totalGross = null;
    /** @var mixed */
    public $totalNet = null;
    /** @var mixed */
    public $notes1 = null;
    /** @var mixed */
    public $notes2 = null;
    /** @var mixed */
    public $notes3 = null;
    /** @var mixed */
    public $notes4 = null;
    /** @var mixed */
    public $notes5 = null;
    /** @var mixed */
    public $notes6 = null;
    /** @var mixed */
    public $interestAccrd = null;
    /** @var mixed */
    public $currInvoice = null;
    /** @var mixed */
    public $tcXrate = null;
    /** @var mixed */
    public $tcNet = null;
    /** @var mixed */
    public $rcXrate = null;
    /** @var mixed */
    public $rcNet = null;
    /** @var mixed */
    public $singlePayment = null;
    /** @var mixed */
    public $kastransref = null;
    /** @var mixed */
    public $paymentCode = null;
    /** @var mixed */
    public $paydefref = null;
    /** @var mixed */
    public $printCounter = null;
    /** @var mixed */
    public $printDate = null;
    /** @var mixed */
    public $vatIncludedGrs = null;
    /** @var mixed */
    public $division = null;
    /** @var mixed */
    public $department = null;
    /** @var mixed */
    public $accficheref = null;
    /** @var mixed */
    public $addexpaccref = null;
    /** @var mixed */
    public $addexpcentref = null;
    /** @var mixed */
    public $priceUpdNeg = null;
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
    public $salesmanCode = null;
    /** @var mixed */
    public $salesmanref = null;
    /** @var mixed */
    public $cancelledacc = null;
    /** @var mixed */
    public $shipmentType = null;
    /** @var mixed */
    public $shippingAgent = null;
    /** @var mixed */
    public $trackNr = null;
    /** @var mixed */
    public $currselTotals = null;
    /** @var mixed */
    public $currselDetails = null;
    /** @var mixed */
    public $tradingGrp = null;
    /** @var mixed */
    public $textinc = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $factory = null;
    /** @var mixed */
    public $dispatchDate = null;
    /** @var mixed */
    public $dispNumber = null;
    /** @var mixed */
    public $dispatches = null;
    /** @var mixed */
    public $transactions = null;
    /** @var mixed */
    public $paymentList = null;
    /** @var mixed */
    public $detlines = null;
    /** @var mixed */
    public $stopajRate = null;
    /** @var mixed */
    public $ssdfRate = null;
    /** @var mixed */
    public $borsaRate = null;
    /** @var mixed */
    public $komisyonRate = null;
    /** @var mixed */
    public $komkdvRate = null;
    /** @var mixed */
    public $bagkurRate = null;
    /** @var mixed */
    public $stopaj = null;
    /** @var mixed */
    public $ssdf = null;
    /** @var mixed */
    public $borsa = null;
    /** @var mixed */
    public $komisyon = null;
    /** @var mixed */
    public $komkdv = null;
    /** @var mixed */
    public $bagkur = null;
    /** @var mixed */
    public $ek1Per = null;
    /** @var mixed */
    public $ek1 = null;
    /** @var mixed */
    public $ek2Per = null;
    /** @var mixed */
    public $ek2 = null;
    /** @var mixed */
    public $stopajacc = null;
    /** @var mixed */
    public $stopajaccref = null;
    /** @var mixed */
    public $ssdfacc = null;
    /** @var mixed */
    public $ssdfaccref = null;
    /** @var mixed */
    public $borsaacc = null;
    /** @var mixed */
    public $borsaaccref = null;
    /** @var mixed */
    public $komisyonacc = null;
    /** @var mixed */
    public $komisyonaccref = null;
    /** @var mixed */
    public $komkdvacc = null;
    /** @var mixed */
    public $komkdvaccref = null;
    /** @var mixed */
    public $bagkuracc = null;
    /** @var mixed */
    public $bagkuraccref = null;
    /** @var mixed */
    public $stopajcost = null;
    /** @var mixed */
    public $stopajcref = null;
    /** @var mixed */
    public $ssdfcost = null;
    /** @var mixed */
    public $ssdfcref = null;
    /** @var mixed */
    public $borsacost = null;
    /** @var mixed */
    public $borsacref = null;
    /** @var mixed */
    public $komisyoncost = null;
    /** @var mixed */
    public $komisyoncref = null;
    /** @var mixed */
    public $komkdvcost = null;
    /** @var mixed */
    public $komkdvcref = null;
    /** @var mixed */
    public $bagkurcost = null;
    /** @var mixed */
    public $bagkurcref = null;
    /** @var mixed */
    public $komType = null;
    /** @var mixed */
    public $ek1acc = null;
    /** @var mixed */
    public $ek1accref = null;
    /** @var mixed */
    public $ek2acc = null;
    /** @var mixed */
    public $ek2accref = null;
    /** @var mixed */
    public $ek1cost = null;
    /** @var mixed */
    public $ek1cref = null;
    /** @var mixed */
    public $ek2cost = null;
    /** @var mixed */
    public $ek2cref = null;
    /** @var mixed */
    public $ek3acc = null;
    /** @var mixed */
    public $ek3accref = null;
    /** @var mixed */
    public $ek4acc = null;
    /** @var mixed */
    public $ek4accref = null;
    /** @var mixed */
    public $ek5acc = null;
    /** @var mixed */
    public $ek5accref = null;
    /** @var mixed */
    public $ek3cost = null;
    /** @var mixed */
    public $ek3cref = null;
    /** @var mixed */
    public $ek4cost = null;
    /** @var mixed */
    public $ek4cref = null;
    /** @var mixed */
    public $ek5cost = null;
    /** @var mixed */
    public $ek5cref = null;
    /** @var mixed */
    public $stopajCalcType = null;
    /** @var mixed */
    public $bagkurCalcType = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $docals = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $distorderref = null;
    /** @var mixed */
    public $costofsalefcref = null;
    /** @var mixed */
    public $dlvClient = null;
    /** @var mixed */
    public $opStatus = null;
    /** @var mixed */
    public $totalAddTax = null;
    /** @var mixed */
    public $paymentType = null;
    /** @var mixed */
    public $accountedCnt = null;
    /** @var mixed */
    public $inflationIdx = null;
    /** @var mixed */
    public $cashTranGrpNo = null;
    /** @var mixed */
    public $cashTranGrplineNo = null;
    /** @var mixed */
    public $cashInfldx = null;
    /** @var mixed */
    public $orglogoid = null;
    /** @var mixed */
    public $fromExim = null;
    /** @var mixed */
    public $cashOrglogoid = null;
    /** @var mixed */
    public $frgTypCode = null;
    /** @var mixed */
    public $frgTypDesc = null;
    /** @var mixed */
    public $eximFicheType = null;
    /** @var mixed */
    public $geniusfldslist = null;
    /** @var mixed */
    public $projectCode = null;
    /** @var mixed */
    public $projectref = null;
    /** @var mixed */
    public $defnfldslist = null;
    /** @var mixed */
    public $wflowcardref = null;
    /** @var mixed */
    public $status = null;
    /** @var mixed */
    public $deductionpart1 = null;
    /** @var mixed */
    public $deductionpart2 = null;
    /** @var mixed */
    public $dataLinkReference = null;
    /** @var mixed */
    public $totalexaddtax = null;
    /** @var mixed */
    public $exaccounted = null;
    /** @var mixed */
    public $frombank = null;
    /** @var mixed */
    public $bntransref = null;
    /** @var mixed */
    public $guarantor1Fichetype = null;
    /** @var mixed */
    public $guarantor1Nr = null;
    /** @var mixed */
    public $guarantor1Namesurname = null;
    /** @var mixed */
    public $guarantor1Addr1 = null;
    /** @var mixed */
    public $guarantor1Addr2 = null;
    /** @var mixed */
    public $guarantor1District = null;
    /** @var mixed */
    public $guarantor1Town = null;
    /** @var mixed */
    public $guarantor1City = null;
    /** @var mixed */
    public $guarantor1Country = null;
    /** @var mixed */
    public $guarantor1Postcode = null;
    /** @var mixed */
    public $guarantor1Telnr1 = null;
    /** @var mixed */
    public $guarantor1Telnr2 = null;
    /** @var mixed */
    public $guarantor1Faxnr = null;
    /** @var mixed */
    public $guarantor1Siteid = null;
    /** @var mixed */
    public $guarantor1Orglogicref = null;
    /** @var mixed */
    public $guarantor1Clientref = null;
    /** @var mixed */
    public $guarantor1Taxnr = null;
    /** @var mixed */
    public $guarantor1Taxoffice = null;
    /** @var mixed */
    public $guarantor1Taxxoffcode = null;
    /** @var mixed */
    public $guarantor1Bankbranchcode = null;
    /** @var mixed */
    public $guarantor1Bankbranchs = null;
    /** @var mixed */
    public $guarantor1Bankaccounts = null;
    /** @var mixed */
    public $guarantor2Fichetype = null;
    /** @var mixed */
    public $guarantor2Nr = null;
    /** @var mixed */
    public $guarantor2Namesurname = null;
    /** @var mixed */
    public $guarantor2Addr1 = null;
    /** @var mixed */
    public $guarantor2Addr2 = null;
    /** @var mixed */
    public $guarantor2District = null;
    /** @var mixed */
    public $guarantor2Town = null;
    /** @var mixed */
    public $guarantor2City = null;
    /** @var mixed */
    public $guarantor2Country = null;
    /** @var mixed */
    public $guarantor2Postcode = null;
    /** @var mixed */
    public $guarantor2Telnr1 = null;
    /** @var mixed */
    public $guarantor2Telnr2 = null;
    /** @var mixed */
    public $guarantor2Faxnr = null;
    /** @var mixed */
    public $guarantor2Siteid = null;
    /** @var mixed */
    public $guarantor2Orglogicref = null;
    /** @var mixed */
    public $guarantor2Clientref = null;
    /** @var mixed */
    public $guarantor2Taxnr = null;
    /** @var mixed */
    public $guarantor2Taxoffice = null;
    /** @var mixed */
    public $guarantor2Taxoffcode = null;
    /** @var mixed */
    public $guarantor2Bankbranchcode = null;
    /** @var mixed */
    public $guarantor2Bankbranchs = null;
    /** @var mixed */
    public $guarantor2Bankaccounts = null;
    /** @var mixed */
    public $affectCollatrl = null;
    /** @var mixed */
    public $fromordwithpay = null;
    /** @var mixed */
    public $intelList = null;
    /** @var mixed */
    public $grpfirmtrans = null;
    /** @var mixed */
    public $affectRisk = null;
    /** @var mixed */
    public $exchinfoInternalReference = null;
    /** @var mixed */
    public $exchinfoFicheRef = null;
    /** @var mixed */
    public $exchinfoAddDiscounts = null;
    /** @var mixed */
    public $exchinfoTotalDiscounts = null;
    /** @var mixed */
    public $exchinfoTotalDiscounted = null;
    /** @var mixed */
    public $exchinfoAddExpenses = null;
    /** @var mixed */
    public $exchinfoTotalExpenses = null;
    /** @var mixed */
    public $exchinfoDistExpense = null;
    /** @var mixed */
    public $exchinfoTotalDepozito = null;
    /** @var mixed */
    public $exchinfoTotalPromotions = null;
    /** @var mixed */
    public $exchinfoVatIncGross = null;
    /** @var mixed */
    public $exchinfoTotalVat = null;
    /** @var mixed */
    public $exchinfoGrossTotal = null;
    /** @var mixed */
    public $exchinfoTotalAddTax = null;
    /** @var mixed */
    public $exchinfoTotalExAddTax = null;
    /** @var mixed */
    public $exchinfoBagkur = null;
    /** @var mixed */
    public $exchinfoStopaj = null;
    /** @var mixed */
    public $exchinfoSsdf = null;
    /** @var mixed */
    public $exchinfoBorsa = null;
    /** @var mixed */
    public $exchinfoKomisyon = null;
    /** @var mixed */
    public $exchinfoKomKdv = null;
    /** @var mixed */
    public $exchinfoEk1 = null;
    /** @var mixed */
    public $exchinfoEk2 = null;
    /** @var mixed */
    public $exchinfoEk3 = null;
    /** @var mixed */
    public $exchinfoEk4 = null;
    /** @var mixed */
    public $exchinfoEk5 = null;
    /** @var mixed */
    public $controlInfo = null;
    /** @var mixed */
    public $posTransferInfo = null;
    /** @var mixed */
    public $taxFreeCheck = null;
    /** @var mixed */
    public $passportNo = null;
    /** @var mixed */
    public $creditCardNo = null;
    /** @var mixed */
    public $creditCardNumber = null;
    /** @var mixed */
    public $approve = null;
    /** @var mixed */
    public $approveDate = null;
    /** @var mixed */
    public $accFicheSiteid = null;
    /** @var mixed */
    public $preacclines = null;
    /** @var mixed */
    public $entrust = null;
    /** @var mixed */
    public $ek3Per = null;
    /** @var mixed */
    public $ek3 = null;
    /** @var mixed */
    public $ek4Per = null;
    /** @var mixed */
    public $ek4 = null;
    /** @var mixed */
    public $ek5Per = null;
    /** @var mixed */
    public $ek5 = null;
    /** @var mixed */
    public $docDate = null;
    /** @var mixed */
    public $autofillSldetails = null;
    /** @var mixed */
    public $einvoice = null;
    /** @var mixed */
    public $profileId = null;
    /** @var mixed */
    public $guid = null;
    /** @var mixed */
    public $esendDate = null;
    /** @var mixed */
    public $estatus = null;
    /** @var mixed */
    public $estartdate = null;
    /** @var mixed */
    public $eenddate = null;
    /** @var mixed */
    public $edescription = null;
    /** @var mixed */
    public $eduration = null;
    /** @var mixed */
    public $edurationType = null;
    /** @var mixed */
    public $einsteadOfDispatch = null;
    /** @var mixed */
    public $einvoiceSendcustom = null;
    /** @var mixed */
    public $einvoiceTaxtype = null;
    /** @var mixed */
    public $einvoiceTuname = null;
    /** @var mixed */
    public $einvoiceTusurname = null;
    /** @var mixed */
    public $einvoiceTupassportno = null;
    /** @var mixed */
    public $einvoiceTupassportdate = null;
    /** @var mixed */
    public $einvoiceTunationality = null;
    /** @var mixed */
    public $einvoiceTunationalityname = null;
    /** @var mixed */
    public $einvoiceTubankname = null;
    /** @var mixed */
    public $einvoiceTubnaccountno = null;
    /** @var mixed */
    public $einvoiceTubnbranch = null;
    /** @var mixed */
    public $einvoiceTupaymentnote = null;
    /** @var mixed */
    public $einvoiceTubncurr = null;
    /** @var mixed */
    public $einvoiceAddr1 = null;
    /** @var mixed */
    public $einvoiceAddr2 = null;
    /** @var mixed */
    public $einvoiceCitycode = null;
    /** @var mixed */
    public $einvoiceCity = null;
    /** @var mixed */
    public $einvoiceCountrycode = null;
    /** @var mixed */
    public $einvoiceCountry = null;
    /** @var mixed */
    public $einvoiceDistrictcode = null;
    /** @var mixed */
    public $einvoiceDistrict = null;
    /** @var mixed */
    public $einvoiceTowncode = null;
    /** @var mixed */
    public $einvoiceTown = null;
    /** @var mixed */
    public $einvoiceExittown = null;
    /** @var mixed */
    public $einvoiceExitgatecode = null;
    /** @var mixed */
    public $einvoiceExitgate = null;
    /** @var mixed */
    public $einvoiceAgencycode = null;
    /** @var mixed */
    public $einvoiceAgency = null;
    /** @var mixed */
    public $einvoiceExitcountrycode = null;
    /** @var mixed */
    public $einvoiceExitcountry = null;
    /** @var mixed */
    public $einvoiceTransporttyp = null;
    /** @var mixed */
    public $einvoiceTransporttypcode = null;
    /** @var mixed */
    public $einvoiceTransporttypname = null;
    /** @var mixed */
    public $einvoiceExitdate = null;
    /** @var mixed */
    public $einvoiceExittime = null;
    /** @var mixed */
    public $einvoiceFlightnumber = null;
    /** @var mixed */
    public $einvoiceGuide = null;
    /** @var mixed */
    public $einvoiceTuretprice = null;
    /** @var mixed */
    public $einvoiceTuretpricestr = null;
    /** @var mixed */
    public $einvoiceSendeinvcustom = null;
    /** @var mixed */
    public $einvoiceEinvoicetypsgk = null;
    /** @var mixed */
    public $einvoiceTaxpayercode = null;
    /** @var mixed */
    public $einvoiceTaxpayername = null;
    /** @var mixed */
    public $einvoiceDocumentnosgk = null;
    /** @var mixed */
    public $einvoiceDrivername1 = null;
    /** @var mixed */
    public $einvoiceDriversurname1 = null;
    /** @var mixed */
    public $einvoiceDrivertckno1 = null;
    /** @var mixed */
    public $einvoicePlatenum1 = null;
    /** @var mixed */
    public $einvoiceChassisnum1 = null;
    /** @var mixed */
    public $einvoiceDrivername2 = null;
    /** @var mixed */
    public $einvoiceDriversurname2 = null;
    /** @var mixed */
    public $einvoiceDrivertckno2 = null;
    /** @var mixed */
    public $einvoicePlatenum2 = null;
    /** @var mixed */
    public $einvoiceChassisnum2 = null;
    /** @var mixed */
    public $einvoiceDrivername3 = null;
    /** @var mixed */
    public $einvoiceDriversurname3 = null;
    /** @var mixed */
    public $einvoiceDrivertckno3 = null;
    /** @var mixed */
    public $einvoicePlatenum3 = null;
    /** @var mixed */
    public $einvoiceChassisnum3 = null;
    /** @var mixed */
    public $einvoiceChaindelivery = null;
    /** @var mixed */
    public $einvoiceSellerclientref = null;
    /** @var mixed */
    public $einvoiceSellerclientcode = null;
    /** @var mixed */
    public $einvoiceTaxnrtopay = null;
    /** @var mixed */
    public $payplanGlobalCode = null;
    /** @var mixed */
    public $trcurrGlobalCode = null;
    /** @var mixed */
    public $edtcurrGlobalCode = null;
    /** @var mixed */
    public $cancelAutoGlProc = null;
    /** @var mixed */
    public $fillGlCodesConn = null;
    /** @var mixed */
    public $fillGlCodesCard = null;
    /** @var mixed */
    public $globalId = null;
    /** @var mixed */
    public $devir = null;
    /** @var mixed */
    public $locControlOff = null;
    /** @var mixed */
    public $cantCreDeduct = null;
    /** @var mixed */
    public $vatexceptReason = null;
    /** @var mixed */
    public $vatexceptCode = null;
    /** @var mixed */
    public $addtaxexceptReason = null;
    /** @var mixed */
    public $addtaxexceptCode = null;
    /** @var mixed */
    public $einvoiceType = null;
    /** @var mixed */
    public $totalNetStr = null;
    /** @var mixed */
    public $trNetStr = null;
    /** @var mixed */
    public $cancelAutoCampProc = null;
    /** @var mixed */
    public $campaignCode = null;
    /** @var mixed */
    public $shiplocDef = null;
    /** @var mixed */
    public $totalServices = null;
    /** @var mixed */
    public $fromexchdiff = null;
    /** @var mixed */
    public $eximvat = null;
    /** @var mixed */
    public $serialCode = null;
    /** @var mixed */
    public $checkCldailydeductlimit = null;
    /** @var mixed */
    public $staffOtherExpenses = null;
    /** @var mixed */
    public $offerReference = null;
    /** @var mixed */
    public $noCalculate = null;
    /** @var mixed */
    public $applyArpDiscount = null;
    /** @var mixed */
    public $markref = null;
    /** @var mixed */
    public $markCode = null;
    /** @var mixed */
    public $earchivedetrLogicalref = null;
    /** @var mixed */
    public $earchivedetrInvoiceref = null;
    /** @var mixed */
    public $earchivedetrInstallmentnumber = null;
    /** @var mixed */
    public $earchivedetrEarchivestatus = null;
    /** @var mixed */
    public $earchivedetrEarchivestatusold = null;
    /** @var mixed */
    public $earchivedetrSendmod = null;
    /** @var mixed */
    public $earchivedetrIntsalesaddr = null;
    /** @var mixed */
    public $earchivedetrIntpaymentdesc = null;
    /** @var mixed */
    public $earchivedetrIntpaymenttype = null;
    /** @var mixed */
    public $earchivedetrIntpaymentagent = null;
    /** @var mixed */
    public $earchivedetrIntpaymentdateorg = null;
    /** @var mixed */
    public $earchivedetrIntpaymentdate = null;
    /** @var mixed */
    public $earchivedetrOckserialnumber = null;
    /** @var mixed */
    public $earchivedetrOckznumber = null;
    /** @var mixed */
    public $earchivedetrOckfichenumber = null;
    /** @var mixed */
    public $earchivedetrOckfichedateorg = null;
    /** @var mixed */
    public $earchivedetrOckfichedate = null;
    /** @var mixed */
    public $earchivedetrIscomp = null;
    /** @var mixed */
    public $earchivedetrTaxnr = null;
    /** @var mixed */
    public $earchivedetrTckno = null;
    /** @var mixed */
    public $earchivedetrName = null;
    /** @var mixed */
    public $earchivedetrSurname = null;
    /** @var mixed */
    public $earchivedetrDefinition = null;
    /** @var mixed */
    public $earchivedetrAddr1 = null;
    /** @var mixed */
    public $earchivedetrAddr2 = null;
    /** @var mixed */
    public $earchivedetrCitycode = null;
    /** @var mixed */
    public $earchivedetrCity = null;
    /** @var mixed */
    public $earchivedetrCountrycode = null;
    /** @var mixed */
    public $earchivedetrCountry = null;
    /** @var mixed */
    public $earchivedetrPostcode = null;
    /** @var mixed */
    public $earchivedetrDistrictcode = null;
    /** @var mixed */
    public $earchivedetrDistrict = null;
    /** @var mixed */
    public $earchivedetrTowncode = null;
    /** @var mixed */
    public $earchivedetrTown = null;
    /** @var mixed */
    public $earchivedetrEmailaddr = null;
    /** @var mixed */
    public $earchivedetrIspercurr = null;
    /** @var mixed */
    public $earchivedetrInsteadofdesp = null;
    /** @var mixed */
    public $earchivedetrTaxoffice = null;
    /** @var mixed */
    public $earchivedetrTelcodes1 = null;
    /** @var mixed */
    public $earchivedetrTelcodes2 = null;
    /** @var mixed */
    public $earchivedetrTelnrs1 = null;
    /** @var mixed */
    public $earchivedetrTelnrs2 = null;
    /** @var mixed */
    public $earchivedetrOldearchivestatus = null;
    /** @var mixed */
    public $earchivedetrDrivername1 = null;
    /** @var mixed */
    public $earchivedetrDriversurname1 = null;
    /** @var mixed */
    public $earchivedetrDrivertckno1 = null;
    /** @var mixed */
    public $earchivedetrPlatenum1 = null;
    /** @var mixed */
    public $earchivedetrChassisnum1 = null;
    /** @var mixed */
    public $earchivedetrDrivername2 = null;
    /** @var mixed */
    public $earchivedetrDriversurname2 = null;
    /** @var mixed */
    public $earchivedetrDrivertckno2 = null;
    /** @var mixed */
    public $earchivedetrPlatenum2 = null;
    /** @var mixed */
    public $earchivedetrChassisnum2 = null;
    /** @var mixed */
    public $earchivedetrDrivername3 = null;
    /** @var mixed */
    public $earchivedetrDriversurname3 = null;
    /** @var mixed */
    public $earchivedetrDrivertckno3 = null;
    /** @var mixed */
    public $earchivedetrPlatenum3 = null;
    /** @var mixed */
    public $earchivedetrChassisnum3 = null;
    /** @var mixed */
    public $earchivedetrChaindelivery = null;
    /** @var mixed */
    public $earchivedetrSellerclientref = null;
    /** @var mixed */
    public $earchivedetrSellerclientcode = null;
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
    public $eproducerStatus = null;
    /** @var mixed */
    public $eproducerSendmod = null;
    /** @var mixed */
    public $eproducerTaxnr = null;
    /** @var mixed */
    public $eproducerTckno = null;
    /** @var mixed */
    public $eproducerName = null;
    /** @var mixed */
    public $eproducerSurname = null;
    /** @var mixed */
    public $eproducerDefinition = null;
    /** @var mixed */
    public $eproducerAddr1 = null;
    /** @var mixed */
    public $eproducerAddr2 = null;
    /** @var mixed */
    public $eproducerCitycode = null;
    /** @var mixed */
    public $eproducerCity = null;
    /** @var mixed */
    public $eproducerCountrycode = null;
    /** @var mixed */
    public $eproducerCountry = null;
    /** @var mixed */
    public $eproducerPostcode = null;
    /** @var mixed */
    public $eproducerDistrictcode = null;
    /** @var mixed */
    public $eproducerDistrict = null;
    /** @var mixed */
    public $eproducerTowncode = null;
    /** @var mixed */
    public $eproducerTown = null;
    /** @var mixed */
    public $eproducerEmailaddr = null;
    /** @var mixed */
    public $eproducerIscomp = null;
    /** @var mixed */
    public $eproducerDeliverydateorg = null;
    /** @var mixed */
    public $eproducerDeliverydate = null;
    /** @var mixed */
    public $eproducerIspercurr = null;
    /** @var mixed */
    public $isOkcFiche = null;
    /** @var mixed */
    public $okcinfoList = null;
    /** @var mixed */
    public $eximPaytyperef = null;
    /** @var mixed */
    public $eximPaytypeCode = null;
    /** @var mixed */
    public $eximPaytypeName = null;
    /** @var mixed */
    public $eximBrbankref = null;
    /** @var mixed */
    public $eximBrbankCode = null;
    /** @var mixed */
    public $eximBrbankName = null;
    /** @var mixed */
    public $deliveryCode = null;
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
    public $typeCode = null;
    /** @var mixed */
    public $futureMonthYrexpinc = null;
    /** @var mixed */
    public $docDetail = null;
    /** @var mixed */
    public $calcAddTaxVatSep = null;
    /** @var mixed */
    public $electDoc = null;
    /** @var mixed */
    public $labelList = null;
    /** @var mixed */
    public $fromintegtype = null;
    /** @var mixed */
    public $fillTrdgrp = null;
    /** @var mixed */
    public $eprintcnt = null;
    /** @var mixed */
    public $rightofreturntyp = null;
    /** @var mixed */
    public $einvoiceTelcode = null;
    /** @var mixed */
    public $einvoiceTelnr = null;
    /** @var mixed */
    public $ordfichecmref = null;
    /** @var mixed */
    public $earchivedetrEnrgplatenum = null;
    /** @var mixed */
    public $earchivedetrEnrgcarid = null;
    /** @var mixed */
    public $earchivedetrChrgbegdate = null;
    /** @var mixed */
    public $earchivedetrChrgbegtime = null;
    /** @var mixed */
    public $earchivedetrChrgenddate = null;
    /** @var mixed */
    public $earchivedetrChrgendtime = null;
    /** @var mixed */
    public $earchivedetrEsuraporid = null;
    /** @var mixed */
    public $earchivedetrEsuraporiddate = null;
    /** @var mixed */
    public $einvoiceEnrgplatenum = null;
    /** @var mixed */
    public $einvoiceEnrgcarid = null;
    /** @var mixed */
    public $einvoiceChrgbegdate = null;
    /** @var mixed */
    public $einvoiceChrgbegtime = null;
    /** @var mixed */
    public $einvoiceChrgenddate = null;
    /** @var mixed */
    public $einvoiceChrgendtime = null;
    /** @var mixed */
    public $einvoiceEsuraporid = null;
    /** @var mixed */
    public $einvoiceEsuraporiddate = null;
    /** @var mixed */
    public $cosfcrefinfl = null;
    /** @var mixed */
    public $esendtime = null;
    /** @var mixed */
    public $receipt = null;
    /** @var mixed */
    public $ineffectivecost = null;
}

/**
 * PurchaseInvoicesAnalytics
 */
class PurchaseInvoicesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
