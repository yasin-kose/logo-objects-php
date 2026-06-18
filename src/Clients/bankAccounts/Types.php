<?php

declare(strict_types=1);

namespace LogoObjects\Clients\bankAccounts;

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
            'items' => [\LogoObjects\Clients\bankAccounts\ExtendedFieldDefinitions::class],
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
 * BankAccounts
 */
class BankAccounts extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $ACCOUNT_TYPE = null;
    public ?string $CODE = null;
    public ?string $DESCRIPTION = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    public ?string $BANK_CODE = null;
    /** @var int|float|null */
    public $BANKREF = null;
    /** @var int|float|null */
    public $CHEQUE_MARGIN = null;
    /** @var int|float|null */
    public $PN_MARGIN = null;
    /** @var int|float|null */
    public $CHEQUE_LIMIT = null;
    /** @var int|float|null */
    public $PN_LIMIT = null;
    /** @var int|float|null */
    public $INTRATE_GEN = null;
    /** @var int|float|null */
    public $INTRATE_CHQCRD = null;
    /** @var int|float|null */
    public $INTRATE_PNCRD = null;
    /** @var int|float|null */
    public $DEDTAX_RATE = null;
    /** @var int|float|null */
    public $OFCFUND_RATE = null;
    /** @var int|float|null */
    public $CURRENCY = null;
    /** @var int|float|null */
    public $EXTENREF = null;
    public ?string $ACCOUNT_NR = null;
    public ?string $EDTCODE = null;
    public ?string $ITEXT = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $XCNT = null;
    public ?string $GL_CODE1 = null;
    /** @var int|float|null */
    public $ACCOUNTREF1 = null;
    public ?string $OHP_CODE1 = null;
    /** @var int|float|null */
    public $CENTERREF1 = null;
    public ?string $GL_CODE2 = null;
    /** @var int|float|null */
    public $ACCOUNTREF2 = null;
    public ?string $OHP_CODE2 = null;
    /** @var int|float|null */
    public $CENTERREF2 = null;
    public ?string $GL_CODE3 = null;
    /** @var int|float|null */
    public $ACCOUNTREF3 = null;
    public ?string $OHP_CODE3 = null;
    /** @var int|float|null */
    public $CENTERREF3 = null;
    public ?string $GL_CODE4 = null;
    /** @var int|float|null */
    public $ACCOUNTREF4 = null;
    public ?string $OHP_CODE4 = null;
    /** @var int|float|null */
    public $CENTERREF4 = null;
    public ?string $FLDALS = null;
    /** @var int|float|null */
    public $KKUSAGE = null;
    /** @var int|float|null */
    public $COLLATRL_LIMIT = null;
    /** @var int|float|null */
    public $WITH_CLTRL_INTEREST = null;
    /** @var int|float|null */
    public $WITH_CLTRL_LIMIT = null;
    /** @var int|float|null */
    public $CURR_RATE_TYPE = null;
    public ?string $DIVISION_ID = null;
    public ?string $IBAN = null;
    public ?string $GL_CODE5 = null;
    /** @var int|float|null */
    public $ACCOUNTREF5 = null;
    public ?string $OHP_CODE5 = null;
    /** @var int|float|null */
    public $CENTERREF5 = null;
    public ?string $GL_CODE6 = null;
    /** @var int|float|null */
    public $ACCOUNTREF6 = null;
    public ?string $OHP_CODE6 = null;
    /** @var int|float|null */
    public $CENTERREF6 = null;
    public ?string $GL_CODE7 = null;
    /** @var int|float|null */
    public $ACCOUNTREF7 = null;
    public ?string $OHP_CODE7 = null;
    /** @var int|float|null */
    public $CENTERREF7 = null;
    public ?string $GL_CODE8 = null;
    /** @var int|float|null */
    public $ACCOUNTREF8 = null;
    public ?string $OHP_CODE8 = null;
    /** @var int|float|null */
    public $CENTERREF8 = null;
    public ?string $GL_CODE9 = null;
    /** @var int|float|null */
    public $ACCOUNTREF9 = null;
    public ?string $OHP_CODE9 = null;
    /** @var int|float|null */
    public $CENTERREF9 = null;
    public ?string $GL_CODE10 = null;
    /** @var int|float|null */
    public $ACCOUNTREF10 = null;
    public ?string $OHP_CODE10 = null;
    /** @var int|float|null */
    public $CENTERREF10 = null;
    public ?string $GL_CODE11 = null;
    /** @var int|float|null */
    public $ACCOUNTREF11 = null;
    public ?string $OHP_CODE11 = null;
    /** @var int|float|null */
    public $CENTERREF11 = null;
    public ?string $GL_CODE12 = null;
    /** @var int|float|null */
    public $ACCOUNTREF12 = null;
    public ?string $OHP_CODE12 = null;
    /** @var int|float|null */
    public $CENTERREF12 = null;
    public ?string $GL_CODE13 = null;
    /** @var int|float|null */
    public $ACCOUNTREF13 = null;
    public ?string $OHP_CODE13 = null;
    /** @var int|float|null */
    public $CENTERREF13 = null;
    public ?string $GL_CODE14 = null;
    /** @var int|float|null */
    public $ACCOUNTREF14 = null;
    public ?string $OHP_CODE14 = null;
    /** @var int|float|null */
    public $CENTERREF14 = null;
    public ?string $GL_CODE15 = null;
    /** @var int|float|null */
    public $ACCOUNTREF15 = null;
    public ?string $OHP_CODE15 = null;
    /** @var int|float|null */
    public $CENTERREF15 = null;
    public ?string $GL_CODE16 = null;
    /** @var int|float|null */
    public $ACCOUNTREF16 = null;
    public ?string $OHP_CODE16 = null;
    /** @var int|float|null */
    public $CENTERREF16 = null;
    public ?string $GL_CODE17 = null;
    /** @var int|float|null */
    public $ACCOUNTREF17 = null;
    public ?string $OHP_CODE17 = null;
    /** @var int|float|null */
    public $CENTERREF17 = null;
    public ?string $GL_CODE18 = null;
    /** @var int|float|null */
    public $ACCOUNTREF18 = null;
    public ?string $OHP_CODE18 = null;
    /** @var int|float|null */
    public $CENTERREF18 = null;
    public ?string $GL_CODE19 = null;
    /** @var int|float|null */
    public $ACCOUNTREF19 = null;
    public ?string $OHP_CODE19 = null;
    /** @var int|float|null */
    public $CENTERREF19 = null;
    public ?string $GL_CODE20 = null;
    /** @var int|float|null */
    public $ACCOUNTREF20 = null;
    public ?string $OHP_CODE20 = null;
    /** @var int|float|null */
    public $CENTERREF20 = null;
    public ?string $GL_CODE21 = null;
    /** @var int|float|null */
    public $ACCOUNTREF21 = null;
    public ?string $OHP_CODE21 = null;
    /** @var int|float|null */
    public $CENTERREF21 = null;
    public ?string $GL_CODE22 = null;
    /** @var int|float|null */
    public $ACCOUNTREF22 = null;
    public ?string $OHP_CODE22 = null;
    /** @var int|float|null */
    public $CENTERREF22 = null;
    public ?string $GL_CODE23 = null;
    /** @var int|float|null */
    public $ACCOUNTREF23 = null;
    public ?string $OHP_CODE23 = null;
    /** @var int|float|null */
    public $CENTERREF23 = null;
    public ?string $GL_CODE24 = null;
    /** @var int|float|null */
    public $ACCOUNTREF24 = null;
    public ?string $OHP_CODE24 = null;
    /** @var int|float|null */
    public $CENTERREF24 = null;
    /** @var int|float|null */
    public $CREDIT_CARD_LIMIT = null;
    public ?string $CREDIT_CARD_NO = null;
    public ?string $GLOBAL_BANK_BRANCH = null;
    /** @var int|float|null */
    public $DEF_BANK_ACC_REF = null;
    public ?string $DEF_BANK_ACC_CODE = null;
    /** @var int|float|null */
    public $DEF_CASH_ACC_REF = null;
    public ?string $DEF_CASH_ACC_CODE = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $DEFNFLDSLIST = null;
    public ?string $BATCH_NO = null;
    public ?string $POS_TERMINAL_NO = null;
    /** @var int|float|null */
    public $STOPAJ_PER = null;
    /** @var int|float|null */
    public $ISPRECIOUSMETAL = null;
    public ?string $POSTERMINALNUM2 = null;
    /** @var int|float|null */
    public $POSTERMINALNUMUSE01 = null;
    /** @var int|float|null */
    public $POSTERMINALNUMUSE02 = null;
    /** @var int|float|null */
    public $BRANCH = null;
    /** @var int|float|null */
    public $VATACC = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DEFNFLDSLIST' => \LogoObjects\Clients\bankAccounts\Rscollectionextendedfielddefinitions::class,
        ]);
    }
}

/**
 * BankAccountsQueryOptions
 */
class BankAccountsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var BankAccountsSortSpec|null */
    public $sort = null;
}

/**
 * BankAccountsSearchCriteria
 */
class BankAccountsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $accountType = null;
    /** @var mixed */
    public $recordStatus = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $description = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $bankCode = null;
    /** @var mixed */
    public $bankref = null;
    /** @var mixed */
    public $chequeMargin = null;
    /** @var mixed */
    public $pnMargin = null;
    /** @var mixed */
    public $chequeLimit = null;
    /** @var mixed */
    public $pnLimit = null;
    /** @var mixed */
    public $intrateGen = null;
    /** @var mixed */
    public $intrateChqcrd = null;
    /** @var mixed */
    public $intratePncrd = null;
    /** @var mixed */
    public $dedtaxRate = null;
    /** @var mixed */
    public $ofcfundRate = null;
    /** @var mixed */
    public $currency = null;
    /** @var mixed */
    public $extenref = null;
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
    public $accountNr = null;
    /** @var mixed */
    public $textinc = null;
    /** @var mixed */
    public $edtcode = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $xcnt = null;
    /** @var mixed */
    public $glCode1 = null;
    /** @var mixed */
    public $accountref1 = null;
    /** @var mixed */
    public $ohpCode1 = null;
    /** @var mixed */
    public $centerref1 = null;
    /** @var mixed */
    public $glCode2 = null;
    /** @var mixed */
    public $accountref2 = null;
    /** @var mixed */
    public $ohpCode2 = null;
    /** @var mixed */
    public $centerref2 = null;
    /** @var mixed */
    public $glCode3 = null;
    /** @var mixed */
    public $accountref3 = null;
    /** @var mixed */
    public $ohpCode3 = null;
    /** @var mixed */
    public $centerref3 = null;
    /** @var mixed */
    public $glCode4 = null;
    /** @var mixed */
    public $accountref4 = null;
    /** @var mixed */
    public $ohpCode4 = null;
    /** @var mixed */
    public $centerref4 = null;
    /** @var mixed */
    public $fldals = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $kkusage = null;
    /** @var mixed */
    public $collatrlLimit = null;
    /** @var mixed */
    public $withCltrlInterest = null;
    /** @var mixed */
    public $withCltrlLimit = null;
    /** @var mixed */
    public $currRateType = null;
    /** @var mixed */
    public $divisionId = null;
    /** @var mixed */
    public $iban = null;
    /** @var mixed */
    public $glCode5 = null;
    /** @var mixed */
    public $accountref5 = null;
    /** @var mixed */
    public $ohpCode5 = null;
    /** @var mixed */
    public $centerref5 = null;
    /** @var mixed */
    public $glCode6 = null;
    /** @var mixed */
    public $accountref6 = null;
    /** @var mixed */
    public $ohpCode6 = null;
    /** @var mixed */
    public $centerref6 = null;
    /** @var mixed */
    public $glCode7 = null;
    /** @var mixed */
    public $accountref7 = null;
    /** @var mixed */
    public $ohpCode7 = null;
    /** @var mixed */
    public $centerref7 = null;
    /** @var mixed */
    public $glCode8 = null;
    /** @var mixed */
    public $accountref8 = null;
    /** @var mixed */
    public $ohpCode8 = null;
    /** @var mixed */
    public $centerref8 = null;
    /** @var mixed */
    public $glCode9 = null;
    /** @var mixed */
    public $accountref9 = null;
    /** @var mixed */
    public $ohpCode9 = null;
    /** @var mixed */
    public $centerref9 = null;
    /** @var mixed */
    public $glCode10 = null;
    /** @var mixed */
    public $accountref10 = null;
    /** @var mixed */
    public $ohpCode10 = null;
    /** @var mixed */
    public $centerref10 = null;
    /** @var mixed */
    public $glCode11 = null;
    /** @var mixed */
    public $accountref11 = null;
    /** @var mixed */
    public $ohpCode11 = null;
    /** @var mixed */
    public $centerref11 = null;
    /** @var mixed */
    public $glCode12 = null;
    /** @var mixed */
    public $accountref12 = null;
    /** @var mixed */
    public $ohpCode12 = null;
    /** @var mixed */
    public $centerref12 = null;
    /** @var mixed */
    public $glCode13 = null;
    /** @var mixed */
    public $accountref13 = null;
    /** @var mixed */
    public $ohpCode13 = null;
    /** @var mixed */
    public $centerref13 = null;
    /** @var mixed */
    public $glCode14 = null;
    /** @var mixed */
    public $accountref14 = null;
    /** @var mixed */
    public $ohpCode14 = null;
    /** @var mixed */
    public $centerref14 = null;
    /** @var mixed */
    public $glCode15 = null;
    /** @var mixed */
    public $accountref15 = null;
    /** @var mixed */
    public $ohpCode15 = null;
    /** @var mixed */
    public $centerref15 = null;
    /** @var mixed */
    public $glCode16 = null;
    /** @var mixed */
    public $accountref16 = null;
    /** @var mixed */
    public $ohpCode16 = null;
    /** @var mixed */
    public $centerref16 = null;
    /** @var mixed */
    public $glCode17 = null;
    /** @var mixed */
    public $accountref17 = null;
    /** @var mixed */
    public $ohpCode17 = null;
    /** @var mixed */
    public $centerref17 = null;
    /** @var mixed */
    public $glCode18 = null;
    /** @var mixed */
    public $accountref18 = null;
    /** @var mixed */
    public $ohpCode18 = null;
    /** @var mixed */
    public $centerref18 = null;
    /** @var mixed */
    public $glCode19 = null;
    /** @var mixed */
    public $accountref19 = null;
    /** @var mixed */
    public $ohpCode19 = null;
    /** @var mixed */
    public $centerref19 = null;
    /** @var mixed */
    public $glCode20 = null;
    /** @var mixed */
    public $accountref20 = null;
    /** @var mixed */
    public $ohpCode20 = null;
    /** @var mixed */
    public $centerref20 = null;
    /** @var mixed */
    public $glCode21 = null;
    /** @var mixed */
    public $accountref21 = null;
    /** @var mixed */
    public $ohpCode21 = null;
    /** @var mixed */
    public $centerref21 = null;
    /** @var mixed */
    public $glCode22 = null;
    /** @var mixed */
    public $accountref22 = null;
    /** @var mixed */
    public $ohpCode22 = null;
    /** @var mixed */
    public $centerref22 = null;
    /** @var mixed */
    public $glCode23 = null;
    /** @var mixed */
    public $accountref23 = null;
    /** @var mixed */
    public $ohpCode23 = null;
    /** @var mixed */
    public $centerref23 = null;
    /** @var mixed */
    public $glCode24 = null;
    /** @var mixed */
    public $accountref24 = null;
    /** @var mixed */
    public $ohpCode24 = null;
    /** @var mixed */
    public $centerref24 = null;
    /** @var mixed */
    public $creditCardLimit = null;
    /** @var mixed */
    public $creditCardNo = null;
    /** @var mixed */
    public $globalBankBranch = null;
    /** @var mixed */
    public $defBankAccRef = null;
    /** @var mixed */
    public $defBankAccCode = null;
    /** @var mixed */
    public $defCashAccRef = null;
    /** @var mixed */
    public $defCashAccCode = null;
    /** @var mixed */
    public $defnfldslist = null;
    /** @var mixed */
    public $batchNo = null;
    /** @var mixed */
    public $posTerminalNo = null;
    /** @var mixed */
    public $stopajPer = null;
    /** @var mixed */
    public $ispreciousmetal = null;
    /** @var mixed */
    public $posterminalnum2 = null;
    /** @var mixed */
    public $posterminalnumuse01 = null;
    /** @var mixed */
    public $posterminalnumuse02 = null;
    /** @var mixed */
    public $branch = null;
    /** @var mixed */
    public $vatacc = null;
}

/**
 * BankAccountsAnalytics
 */
class BankAccountsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
