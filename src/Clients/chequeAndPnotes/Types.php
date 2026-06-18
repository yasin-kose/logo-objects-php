<?php

declare(strict_types=1);

namespace LogoObjects\Clients\chequeAndPnotes;

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
 * ChequeAndPnotes
 */
class ChequeAndPnotes extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $TYPE = null;
    /** @var int|float|null */
    public $CURRENT_STATUS = null;
    public ?string $BANK_CODE = null;
    /** @var int|float|null */
    public $OURBANKREF = null;
    /** @var int|float|null */
    public $BNCREREF = null;
    public ?string $BANK_CREDIT_CODE = null;
    public ?string $NUMBER = null;
    public ?string $SERIAL_NUMBER = null;
    public ?string $BANK_TITLE = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    public ?string $CITY = null;
    public ?string $OWING = null;
    public ?string $GUARANTOR = null;
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
    public $CURRENCY = null;
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
    public $CANCELLED = null;
    /** @var int|float|null */
    public $CURR_TRANS = null;
    /** @var int|float|null */
    public $STAMP_FEE_REQD = null;
    public ?string $OWNACC_CODE = null;
    /** @var int|float|null */
    public $CHREF1 = null;
    public ?string $ARP_CODE = null;
    /** @var int|float|null */
    public $CHREF2 = null;
    /** @var int|float|null */
    public $BANKPROC = null;
    /** @var int|float|null */
    public $OLDSELSTAT = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $XCNT = null;
    public ?string $DOCALS = null;
    public ?string $BN_BRANCH_NR = null;
    public ?string $BN_ACCOUNT_NR = null;
    public ?string $DEPT_ADDR1 = null;
    public ?string $DEPT_ADDR2 = null;
    public ?string $DEPT_CITY = null;
    public ?string $DEPT_CITY_CODE = null;
    public ?string $DEPT_COUNTRY = null;
    public ?string $DEPT_COUNTRY_CODE = null;
    public ?string $DEPT_POST_CODE = null;
    public ?string $DEPT_TEL_NRS1 = null;
    public ?string $DEPT_TEL_CODE1 = null;
    public ?string $DEPT_TEL_NRS2 = null;
    public ?string $DEPT_TEL_CODE2 = null;
    public ?string $DEPT_FAX_NR = null;
    public ?string $DEPT_FAX_CODE = null;
    public ?string $DEPT_TOWN = null;
    public ?string $DEPT_TOWN_CODE = null;
    public ?string $DEPT_DISTRICT = null;
    public ?string $DEPT_DISTRICT_CODE = null;
    /** @var int|float|null */
    public $OP_STATUS = null;
    /** @var int|float|null */
    public $PRINT_CNT = null;
    public ?string $NEW_SERIAL_NO = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    public ?string $PROJECTCODE = null;
    /** @var int|float|null */
    public $AFFECT_COLLATRL = null;
    /** @var int|float|null */
    public $AFFECT_RISK = null;
    public ?string $ORGLOGOID = null;
    public ?string $TAX_NR = null;
    public ?string $IBAN = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    public ?string $SALESMAN_CODE = null;
    public ?string $DEPT_ADDRESS1 = null;
    public ?string $DEPT_ADDRESS2 = null;
    public ?string $DEPT_TELNR1 = null;
    public ?string $DEPT_TELNR2 = null;
    public ?string $DEPT_FAXNR = null;
    /** @var int|float|null */
    public $SUBDURATION = null;
    /** @var int|float|null */
    public $CIRO = null;
    /** @var int|float|null */
    public $STATUS = null;
    public ?string $TRADING_GRP = null;
}

/**
 * ChequeAndPnotesQueryOptions
 */
class ChequeAndPnotesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ChequeAndPnotesSortSpec|null */
    public $sort = null;
}

/**
 * ChequeAndPnotesSearchCriteria
 */
class ChequeAndPnotesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $type = null;
    /** @var mixed */
    public $currentStatus = null;
    /** @var mixed */
    public $bankCode = null;
    /** @var mixed */
    public $ourbankref = null;
    /** @var mixed */
    public $bncreref = null;
    /** @var mixed */
    public $bankCreditCode = null;
    /** @var mixed */
    public $number = null;
    /** @var mixed */
    public $serialNumber = null;
    /** @var mixed */
    public $bankTitle = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $city = null;
    /** @var mixed */
    public $owing = null;
    /** @var mixed */
    public $guarantor = null;
    /** @var mixed */
    public $informant = null;
    /** @var mixed */
    public $divisionNo = null;
    /** @var mixed */
    public $division = null;
    /** @var mixed */
    public $accountNo = null;
    /** @var mixed */
    public $dueDate = null;
    /** @var mixed */
    public $date = null;
    /** @var mixed */
    public $stampFee = null;
    /** @var mixed */
    public $amount = null;
    /** @var mixed */
    public $currency = null;
    /** @var mixed */
    public $tcXrate = null;
    /** @var mixed */
    public $tcAmount = null;
    /** @var mixed */
    public $rcXrate = null;
    /** @var mixed */
    public $rcAmount = null;
    /** @var mixed */
    public $creditFlag = null;
    /** @var mixed */
    public $transferred = null;
    /** @var mixed */
    public $inuse = null;
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
    public $rcXrateColl = null;
    /** @var mixed */
    public $tcXrateColl = null;
    /** @var mixed */
    public $cancelled = null;
    /** @var mixed */
    public $currTrans = null;
    /** @var mixed */
    public $textinc = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $stampFeeReqd = null;
    /** @var mixed */
    public $ownaccCode = null;
    /** @var mixed */
    public $chref1 = null;
    /** @var mixed */
    public $arpCode = null;
    /** @var mixed */
    public $chref2 = null;
    /** @var mixed */
    public $bankproc = null;
    /** @var mixed */
    public $oldselstat = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $xcnt = null;
    /** @var mixed */
    public $docals = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $bnBranchNr = null;
    /** @var mixed */
    public $bnAccountNr = null;
    /** @var mixed */
    public $deptAddr1 = null;
    /** @var mixed */
    public $deptAddr2 = null;
    /** @var mixed */
    public $deptCity = null;
    /** @var mixed */
    public $deptCityCode = null;
    /** @var mixed */
    public $deptCountry = null;
    /** @var mixed */
    public $deptCountryCode = null;
    /** @var mixed */
    public $deptPostCode = null;
    /** @var mixed */
    public $deptTelNrs1 = null;
    /** @var mixed */
    public $deptTelCode1 = null;
    /** @var mixed */
    public $deptTelNrs2 = null;
    /** @var mixed */
    public $deptTelCode2 = null;
    /** @var mixed */
    public $deptFaxNr = null;
    /** @var mixed */
    public $deptFaxCode = null;
    /** @var mixed */
    public $deptTown = null;
    /** @var mixed */
    public $deptTownCode = null;
    /** @var mixed */
    public $deptDistrict = null;
    /** @var mixed */
    public $deptDistrictCode = null;
    /** @var mixed */
    public $opStatus = null;
    /** @var mixed */
    public $printCnt = null;
    /** @var mixed */
    public $newSerialNo = null;
    /** @var mixed */
    public $projectref = null;
    /** @var mixed */
    public $projectcode = null;
    /** @var mixed */
    public $affectCollatrl = null;
    /** @var mixed */
    public $affectRisk = null;
    /** @var mixed */
    public $orglogoid = null;
    /** @var mixed */
    public $taxNr = null;
    /** @var mixed */
    public $iban = null;
    /** @var mixed */
    public $salesmanref = null;
    /** @var mixed */
    public $salesmanCode = null;
    /** @var mixed */
    public $deptAddress1 = null;
    /** @var mixed */
    public $deptAddress2 = null;
    /** @var mixed */
    public $deptTelnr1 = null;
    /** @var mixed */
    public $deptTelnr2 = null;
    /** @var mixed */
    public $deptFaxnr = null;
    /** @var mixed */
    public $subduration = null;
    /** @var mixed */
    public $ciro = null;
    /** @var mixed */
    public $status = null;
    /** @var mixed */
    public $tradingGrp = null;
}

/**
 * ChequeAndPnotesAnalytics
 */
class ChequeAndPnotesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
