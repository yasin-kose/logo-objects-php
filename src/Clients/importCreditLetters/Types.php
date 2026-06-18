<?php

declare(strict_types=1);

namespace LogoObjects\Clients\importCreditLetters;

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
 * RscollectionrsRelateddocxml
 */
class RscollectionrsRelateddocxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\importCreditLetters\RsRelateddocxml::class],
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
 * RsRelateddocxml
 */
class RsRelateddocxml extends \LogoObjects\Types\BaseEntity
{
    public ?string $DOC_CODE = null;
    public ?string $DOC_DEFINITION = null;
    /** @var int|float|null */
    public $CRELETTERREF = null;
    /** @var int|float|null */
    public $ORIGINAL_COUNT = null;
    /** @var int|float|null */
    public $COPY_COUNT = null;
}

/**
 * ImportCreditLetters
 */
class ImportCreditLetters extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $TYP = null;
    public ?string $LETTER_NR = null;
    public ?string $ISSUE_DATE = null;
    public ?string $DUE_DATE = null;
    public ?string $DOC_DELIVERY_DATE = null;
    public ?string $POLICY_DUE = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    public ?string $EXPLAIN = null;
    /** @var int|float|null */
    public $EXIM_FICHE_REFERENCE = null;
    /** @var int|float|null */
    public $EXIM_INVOICE_REFERENCE = null;
    /** @var int|float|null */
    public $CURRENCY_TYPE = null;
    /** @var int|float|null */
    public $CURRENCY_RATE = null;
    /** @var int|float|null */
    public $CURR_TOTAL = null;
    /** @var int|float|null */
    public $REPORT_RATE = null;
    /** @var int|float|null */
    public $REPORT_NET = null;
    /** @var int|float|null */
    public $TOTAL = null;
    /** @var int|float|null */
    public $SENDLTD_FLAG = null;
    /** @var int|float|null */
    public $TRANSFER_FLAG = null;
    /** @var int|float|null */
    public $RETURN_FLAG = null;
    /** @var int|float|null */
    public $CONFIRM_FLAG = null;
    /** @var int|float|null */
    public $INSURANCE_RANGE = null;
    /** @var int|float|null */
    public $USAGE_TYPE = null;
    /** @var int|float|null */
    public $BANKREF = null;
    /** @var int|float|null */
    public $BNACCREF = null;
    public ?string $REFERENCE_NR = null;
    public ?string $INFO_BANK_NAME = null;
    public ?string $INFO_BANK_ADDR1 = null;
    public ?string $INFO_BANK_ADDR2 = null;
    public ?string $CONF_BANK_NAME = null;
    public ?string $CONF_BANK_ADDR1 = null;
    public ?string $CONF_BANK_ADDR2 = null;
    /** @var int|float|null */
    public $PAYMENT_TYPE = null;
    public ?string $RAMS_BANK_NAME = null;
    public ?string $RAMS_BANK_ADDR1 = null;
    public ?string $RAMS_BANK_ADDR2 = null;
    /** @var int|float|null */
    public $EXP_IN_FLAG = null;
    /** @var int|float|null */
    public $EXP_OUT_FLAG = null;
    /** @var int|float|null */
    public $INFO_BANK_COMM_FLAG = null;
    /** @var int|float|null */
    public $COMMAST_BANK = null;
    /** @var int|float|null */
    public $COM_INFO_BANK = null;
    public ?string $DELIVERY_PLACE = null;
    public ?string $DELIVERY_DATE = null;
    public ?string $DELIVERY_ADDR = null;
    public ?string $DATE_CREADED = null;
    /** @var int|float|null */
    public $CREDITREF = null;
    /** @var int|float|null */
    public $CREDIT_TOTAL = null;
    /** @var int|float|null */
    public $CREDIT_CRATE = null;
    public ?string $FRG_TYP_COD = null;
    /** @var int|float|null */
    public $STATUS = null;
    /** @var int|float|null */
    public $REVOLVING = null;
    /** @var int|float|null */
    public $BACKTOBACK = null;
    /** @var int|float|null */
    public $STANDBY = null;
    /** @var int|float|null */
    public $RED_CLAUSE = null;
    /** @var int|float|null */
    public $GREEN_CLAUSE = null;
    public ?string $BANK_ACC_CODE = null;
    public ?string $BANK_ACC_DEF = null;
    public ?string $BANK_CODE = null;
    /** @var int|float|null */
    public $DOCNRREF = null;
    public ?string $CREDIT_CODE = null;
    public ?string $CREDIT_NAME = null;
    /** @var RscollectionrsRelateddocxml|null */
    public $RELATED_DOCUMENTS = null;
    public ?string $DELDOCLIST = null;
    public ?string $EXIMLIST = null;
    public ?string $FLDALS = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    public ?string $ITEXT = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'RELATED_DOCUMENTS' => \LogoObjects\Clients\importCreditLetters\RscollectionrsRelateddocxml::class,
        ]);
    }
}

/**
 * ImportCreditLettersQueryOptions
 */
class ImportCreditLettersQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ImportCreditLettersSortSpec|null */
    public $sort = null;
}

/**
 * ImportCreditLettersSearchCriteria
 */
class ImportCreditLettersSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $typ = null;
    /** @var mixed */
    public $letterNr = null;
    /** @var mixed */
    public $issueDate = null;
    /** @var mixed */
    public $dueDate = null;
    /** @var mixed */
    public $docDeliveryDate = null;
    /** @var mixed */
    public $policyDue = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $explain = null;
    /** @var mixed */
    public $eximFicheReference = null;
    /** @var mixed */
    public $eximInvoiceReference = null;
    /** @var mixed */
    public $currencyType = null;
    /** @var mixed */
    public $currencyRate = null;
    /** @var mixed */
    public $currTotal = null;
    /** @var mixed */
    public $reportRate = null;
    /** @var mixed */
    public $reportNet = null;
    /** @var mixed */
    public $total = null;
    /** @var mixed */
    public $sendltdFlag = null;
    /** @var mixed */
    public $transferFlag = null;
    /** @var mixed */
    public $returnFlag = null;
    /** @var mixed */
    public $confirmFlag = null;
    /** @var mixed */
    public $insuranceRange = null;
    /** @var mixed */
    public $usageType = null;
    /** @var mixed */
    public $bankref = null;
    /** @var mixed */
    public $bnaccref = null;
    /** @var mixed */
    public $referenceNr = null;
    /** @var mixed */
    public $infoBankName = null;
    /** @var mixed */
    public $infoBankAddr1 = null;
    /** @var mixed */
    public $infoBankAddr2 = null;
    /** @var mixed */
    public $confBankName = null;
    /** @var mixed */
    public $confBankAddr1 = null;
    /** @var mixed */
    public $confBankAddr2 = null;
    /** @var mixed */
    public $paymentType = null;
    /** @var mixed */
    public $ramsBankName = null;
    /** @var mixed */
    public $ramsBankAddr1 = null;
    /** @var mixed */
    public $ramsBankAddr2 = null;
    /** @var mixed */
    public $expInFlag = null;
    /** @var mixed */
    public $expOutFlag = null;
    /** @var mixed */
    public $infoBankCommFlag = null;
    /** @var mixed */
    public $commastBank = null;
    /** @var mixed */
    public $comInfoBank = null;
    /** @var mixed */
    public $deliveryPlace = null;
    /** @var mixed */
    public $deliveryDate = null;
    /** @var mixed */
    public $deliveryAddr = null;
    /** @var mixed */
    public $createdBy = null;
    /** @var mixed */
    public $dateCreaded = null;
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
    public $creditref = null;
    /** @var mixed */
    public $creditTotal = null;
    /** @var mixed */
    public $creditCrate = null;
    /** @var mixed */
    public $frgTypCod = null;
    /** @var mixed */
    public $status = null;
    /** @var mixed */
    public $revolving = null;
    /** @var mixed */
    public $backtoback = null;
    /** @var mixed */
    public $standby = null;
    /** @var mixed */
    public $redClause = null;
    /** @var mixed */
    public $greenClause = null;
    /** @var mixed */
    public $textinc = null;
    /** @var mixed */
    public $bankAccCode = null;
    /** @var mixed */
    public $bankAccDef = null;
    /** @var mixed */
    public $bankCode = null;
    /** @var mixed */
    public $docnrref = null;
    /** @var mixed */
    public $creditCode = null;
    /** @var mixed */
    public $creditName = null;
    /** @var mixed */
    public $relatedDocuments = null;
    /** @var mixed */
    public $deldoclist = null;
    /** @var mixed */
    public $eximlist = null;
    /** @var mixed */
    public $fldals = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $textchg = null;
    /** @var mixed */
    public $itext = null;
}

/**
 * ImportCreditLettersAnalytics
 */
class ImportCreditLettersAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
