<?php

declare(strict_types=1);

namespace LogoObjects\Clients\employees;

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
 * Employees
 */
class Employees extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $NAME = null;
    /** @var int|float|null */
    public $FACTORYDIVNR = null;
    /** @var int|float|null */
    public $FACTORYNR = null;
    /** @var int|float|null */
    public $CALENDARREF = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $PERSCARDREF = null;
    /** @var int|float|null */
    public $APPROVED = null;
    /** @var int|float|null */
    public $OPERATION_TIME = null;
    /** @var int|float|null */
    public $HOURLY_STD_COST = null;
    /** @var int|float|null */
    public $HOURLY_STDRP_COST = null;
    /** @var int|float|null */
    public $ACCOUNTREF = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
    public ?string $SHIFT_CODE = null;
    /** @var int|float|null */
    public $UPDATED = null;
    public ?string $CALCODE = null;
    public ?string $EMP_NAME = null;
    public ?string $EMP_SURNAME = null;
    public ?string $TC_KNO = null;
    public ?string $BIRTH_DATE = null;
    public ?string $BLOOD_GROUP = null;
    public ?string $REGISTER_CODE = null;
    public ?string $SOCIAL_SEC_NO = null;
    public ?string $ADDRESS1 = null;
    public ?string $ADDRESS2 = null;
    public ?string $DISTRICT = null;
    public ?string $DISTRICT_CODE = null;
    public ?string $TOWN = null;
    public ?string $TOWN_CODE = null;
    public ?string $CITY = null;
    public ?string $CITY_CODE = null;
    public ?string $COUNTRY = null;
    public ?string $COUNTRY_CODE = null;
    public ?string $TELEPHONE1 = null;
    public ?string $TELEPHONE2 = null;
    public ?string $E_MAIL = null;
    /** @var int|float|null */
    public $INFO_LOGICALREF = null;
    /** @var int|float|null */
    public $TRCODE1 = null;
    /** @var int|float|null */
    public $INFO_CARDREF = null;
    /** @var int|float|null */
    public $TYPE1 = null;
    /** @var int|float|null */
    public $INFO_ACCOUNTREF1 = null;
    /** @var int|float|null */
    public $INFO_CENTERREF1 = null;
    public ?string $GL_CODE1 = null;
    public ?string $OHP_CODE1 = null;
    /** @var int|float|null */
    public $INFO_TRCODE2 = null;
    /** @var int|float|null */
    public $TYPE2 = null;
    /** @var int|float|null */
    public $INFO_ACCOUNTREF2 = null;
    /** @var int|float|null */
    public $INFO_CENTERREF2 = null;
    public ?string $GL_CODE2 = null;
    public ?string $OHP_CODE2 = null;
    /** @var int|float|null */
    public $TRCODE3 = null;
    /** @var int|float|null */
    public $TYPE3 = null;
    /** @var int|float|null */
    public $INFO_ACCOUNTREF3 = null;
    /** @var int|float|null */
    public $INFO_CENTERREF3 = null;
    public ?string $GL_CODE3 = null;
    public ?string $OHP_CODE3 = null;
    /** @var int|float|null */
    public $TRCODE4 = null;
    /** @var int|float|null */
    public $TYPE4 = null;
    /** @var int|float|null */
    public $INFO_ACCOUNTREF4 = null;
    /** @var int|float|null */
    public $INFO_CENTERREF4 = null;
    public ?string $GL_CODE4 = null;
    public ?string $OHP_CODE4 = null;
    /** @var int|float|null */
    public $TRCODE5 = null;
    /** @var int|float|null */
    public $TYPE5 = null;
    /** @var int|float|null */
    public $INFO_ACCOUNTREF5 = null;
    /** @var int|float|null */
    public $INFO_CENTERREF5 = null;
    public ?string $GL_CODE5 = null;
    public ?string $OHP_CODE5 = null;
    /** @var int|float|null */
    public $TRCODE6 = null;
    /** @var int|float|null */
    public $TYPE6 = null;
    /** @var int|float|null */
    public $INFO_ACCOUNTREF6 = null;
    /** @var int|float|null */
    public $INFO_CENTERREF6 = null;
    public ?string $GL_CODE6 = null;
    public ?string $OHP_CODE6 = null;
    public ?string $FLDALS = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    public ?string $XBUFS = null;
}

/**
 * EmployeesQueryOptions
 */
class EmployeesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var EmployeesSortSpec|null */
    public $sort = null;
}

/**
 * EmployeesSearchCriteria
 */
class EmployeesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $name = null;
    /** @var mixed */
    public $factorydivnr = null;
    /** @var mixed */
    public $factorynr = null;
    /** @var mixed */
    public $calendarref = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $perscardref = null;
    /** @var mixed */
    public $approved = null;
    /** @var mixed */
    public $operationTime = null;
    /** @var mixed */
    public $hourlyStdCost = null;
    /** @var mixed */
    public $hourlyStdrpCost = null;
    /** @var mixed */
    public $accountref = null;
    /** @var mixed */
    public $centerref = null;
    /** @var mixed */
    public $recordStatus = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
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
    public $imageinc = null;
    /** @var mixed */
    public $wfstatus = null;
    /** @var mixed */
    public $shiftCode = null;
    /** @var mixed */
    public $updated = null;
    /** @var mixed */
    public $calcode = null;
    /** @var mixed */
    public $empName = null;
    /** @var mixed */
    public $empSurname = null;
    /** @var mixed */
    public $tcKno = null;
    /** @var mixed */
    public $birthDate = null;
    /** @var mixed */
    public $bloodGroup = null;
    /** @var mixed */
    public $registerCode = null;
    /** @var mixed */
    public $socialSecNo = null;
    /** @var mixed */
    public $address1 = null;
    /** @var mixed */
    public $address2 = null;
    /** @var mixed */
    public $district = null;
    /** @var mixed */
    public $districtCode = null;
    /** @var mixed */
    public $town = null;
    /** @var mixed */
    public $townCode = null;
    /** @var mixed */
    public $city = null;
    /** @var mixed */
    public $cityCode = null;
    /** @var mixed */
    public $country = null;
    /** @var mixed */
    public $countryCode = null;
    /** @var mixed */
    public $telephone1 = null;
    /** @var mixed */
    public $telephone2 = null;
    /** @var mixed */
    public $eMail = null;
    /** @var mixed */
    public $infoLogicalref = null;
    /** @var mixed */
    public $trcode1 = null;
    /** @var mixed */
    public $infoCardref = null;
    /** @var mixed */
    public $type1 = null;
    /** @var mixed */
    public $infoAccountref1 = null;
    /** @var mixed */
    public $infoCenterref1 = null;
    /** @var mixed */
    public $glCode1 = null;
    /** @var mixed */
    public $ohpCode1 = null;
    /** @var mixed */
    public $infoTrcode2 = null;
    /** @var mixed */
    public $type2 = null;
    /** @var mixed */
    public $infoAccountref2 = null;
    /** @var mixed */
    public $infoCenterref2 = null;
    /** @var mixed */
    public $glCode2 = null;
    /** @var mixed */
    public $ohpCode2 = null;
    /** @var mixed */
    public $trcode3 = null;
    /** @var mixed */
    public $type3 = null;
    /** @var mixed */
    public $infoAccountref3 = null;
    /** @var mixed */
    public $infoCenterref3 = null;
    /** @var mixed */
    public $glCode3 = null;
    /** @var mixed */
    public $ohpCode3 = null;
    /** @var mixed */
    public $trcode4 = null;
    /** @var mixed */
    public $type4 = null;
    /** @var mixed */
    public $infoAccountref4 = null;
    /** @var mixed */
    public $infoCenterref4 = null;
    /** @var mixed */
    public $glCode4 = null;
    /** @var mixed */
    public $ohpCode4 = null;
    /** @var mixed */
    public $trcode5 = null;
    /** @var mixed */
    public $type5 = null;
    /** @var mixed */
    public $infoAccountref5 = null;
    /** @var mixed */
    public $infoCenterref5 = null;
    /** @var mixed */
    public $glCode5 = null;
    /** @var mixed */
    public $ohpCode5 = null;
    /** @var mixed */
    public $trcode6 = null;
    /** @var mixed */
    public $type6 = null;
    /** @var mixed */
    public $infoAccountref6 = null;
    /** @var mixed */
    public $infoCenterref6 = null;
    /** @var mixed */
    public $glCode6 = null;
    /** @var mixed */
    public $ohpCode6 = null;
    /** @var mixed */
    public $fldals = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $textchg = null;
    /** @var mixed */
    public $xbufs = null;
}

/**
 * EmployeesAnalytics
 */
class EmployeesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
