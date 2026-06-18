<?php

declare(strict_types=1);

namespace LogoObjects\Clients\customers;

/**
 * RscollectionrsCstsectorasgnxml
 */
class RscollectionrsCstsectorasgnxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\customers\RsCstsectorasgnxml::class],
        ]);
    }
}

/**
 * RscollectionrsSlscstasgnxml
 */
class RscollectionrsSlscstasgnxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\customers\RsSlscstasgnxml::class],
        ]);
    }
}

/**
 * RscollectionrsCstarpasgnxml
 */
class RscollectionrsCstarpasgnxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\customers\RsCstarpasgnxml::class],
        ]);
    }
}

/**
 * Rscollectioncontacts
 */
class Rscollectioncontacts extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\customers\Contacts::class],
        ]);
    }
}

/**
 * RscollectionrsContspedaysxml
 */
class RscollectionrsContspedaysxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\customers\RsContspedaysxml::class],
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
 * CustomersOfSalesmen
 */
class CustomersOfSalesmen extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $INTERNAL_REFERENCE = null;
    public ?string $CODE = null;
    public ?string $NAME = null;
    /** @var int|float|null */
    public $CARDTYPE = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    public ?string $POSITION = null;
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
    public $RECORD_STATUS = null;
    /** @var int|float|null */
    public $DATA_SITEID = null;
    /** @var int|float|null */
    public $DATA_REFERENCE = null;
    /** @var int|float|null */
    public $USER_ID = null;
    /** @var int|float|null */
    public $DEPT_ID = null;
    /** @var int|float|null */
    public $DIVIS_ID = null;
    /** @var int|float|null */
    public $FIRM_NO = null;
    /** @var RscollectionrsSlsclrelxml|null */
    public $CL_LIST = null;
    public ?string $TARGETS = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $XML_ATTRIBUTE = null;
    /** @var int|float|null */
    public $TYPE = null;
    public ?string $EMAILADDR = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
            'CL_LIST' => \LogoObjects\Clients\customers\RscollectionrsSlsclrelxml::class,
        ]);
    }
}

/**
 * RscollectionrsSlsclrelxml
 */
class RscollectionrsSlsclrelxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\customers\RsSlsclrelxml::class],
        ]);
    }
}

/**
 * RsSlsclrelxml
 */
class RsSlsclrelxml extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $INTERNAL_REFERENCE = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    /** @var int|float|null */
    public $LINE_NO = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    public ?string $CODE = null;
    public ?string $NAME = null;
    public ?string $BEG_DATE = null;
    /** @var int|float|null */
    public $VISIT_DAY = null;
    public ?string $VISIT_PERIOD = null;
    /** @var int|float|null */
    public $SHIPREF = null;
    public ?string $SHIP_CODE = null;
    /** @var int|float|null */
    public $CL_LINE_NO = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * RsCstsectorasgnxml
 */
class RsCstsectorasgnxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $CSTVNDREF = null;
    /** @var int|float|null */
    public $INDREF = null;
    /** @var int|float|null */
    public $PRIMARYFLG = null;
    /** @var int|float|null */
    public $ANNVOLUME = null;
    /** @var int|float|null */
    public $VOLCURR = null;
    /** @var int|float|null */
    public $ANNVOLUMERC = null;
    /** @var int|float|null */
    public $EMPLOYEECNT = null;
    public ?string $ICODE = null;
    public ?string $IDESC = null;
}

/**
 * RsSlscstasgnxml
 */
class RsSlscstasgnxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $CSTVNDREF = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    public ?string $SLSCODE = null;
    public ?string $CLDEF = null;
}

/**
 * RsCstarpasgnxml
 */
class RsCstarpasgnxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $CSTVNDREF = null;
    /** @var int|float|null */
    public $ARPREF = null;
    /** @var int|float|null */
    public $FIRMNO = null;
    /** @var int|float|null */
    public $DEFAULTFLG = null;
    public ?string $CCODE = null;
    public ?string $CDESC = null;
}

/**
 * Contacts
 */
class Contacts extends \LogoObjects\Types\BaseEntity
{
    public ?string $NAME = null;
    public ?string $MIDINIT = null;
    public ?string $FAMNAME = null;
    public ?string $TITLE = null;
    /** @var int|float|null */
    public $CSTVNDREF = null;
    public ?string $CUSTOMER_CODE = null;
    public ?string $JOBTITLE = null;
    public ?string $AUXILCODE = null;
    public ?string $AUTHCODE = null;
    public ?string $WORKPHONE = null;
    public ?string $HOMEPHONE = null;
    public ?string $MOBPHONE = null;
    public ?string $ASSTPHONE = null;
    public ?string $OFFICEFAX = null;
    public ?string $EMAILADDR = null;
    public ?string $ADDRESS1 = null;
    public ?string $ADDRESS2 = null;
    public ?string $CITY = null;
    public ?string $COUNTRY = null;
    public ?string $POSTCODE = null;
    /** @var int|float|null */
    public $CONTCAT = null;
    /** @var int|float|null */
    public $CAPIBLOCK_CREATEDBY = null;
    public ?string $CAPIBLOCK_CREADEDDATE = null;
    /** @var int|float|null */
    public $CAPIBLOCK_CREATEDHOUR = null;
    /** @var int|float|null */
    public $CAPIBLOCK_CREATEDMIN = null;
    /** @var int|float|null */
    public $CAPIBLOCK_CREATEDSEC = null;
    /** @var int|float|null */
    public $CAPIBLOCK_MODIFIEDBY = null;
    public ?string $CAPIBLOCK_MODIFIEDDATE = null;
    /** @var int|float|null */
    public $CAPIBLOCK_MODIFIEDHOUR = null;
    /** @var int|float|null */
    public $CAPIBLOCK_MODIFIEDMIN = null;
    /** @var int|float|null */
    public $CAPIBLOCK_MODIFIEDSEC = null;
    public ?string $COUNTRYCODE = null;
    public ?string $CITYCODE = null;
    public ?string $TOWNCODE = null;
    public ?string $TOWN = null;
    public ?string $DISTRICTCODE = null;
    public ?string $DISTRICT = null;
    public ?string $WORKPHCOD = null;
    public ?string $HOMEPHCOD = null;
    public ?string $MOBPHCOD = null;
    public ?string $ASSTPHCOD = null;
    public ?string $OFFFAXCOD = null;
    /** @var int|float|null */
    public $UPDATED = null;
    public ?string $FLDALS = null;
    public ?string $XBUFS = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    /** @var RscollectionrsContspedaysxml|null */
    public $SPEDAYSLIST = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'SPEDAYSLIST' => \LogoObjects\Clients\customers\RscollectionrsContspedaysxml::class,
        ]);
    }
}

/**
 * RsContspedaysxml
 */
class RsContspedaysxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $CONTREF = null;
    public ?string $SPEDAY = null;
    /** @var int|float|null */
    public $SPEDAYCAT = null;
    public ?string $PERSNOTE = null;
}

/**
 * Customers
 */
class Customers extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $ACTIVE = null;
    /** @var int|float|null */
    public $CARDTYPE = null;
    public ?string $CODE = null;
    public ?string $TITLE = null;
    public ?string $AUXILCODE = null;
    public ?string $AUTHCODE = null;
    public ?string $ADDRESS1 = null;
    public ?string $ADDRESS2 = null;
    public ?string $CITY = null;
    public ?string $COUNTRY = null;
    public ?string $ORIGIN = null;
    public ?string $POSTCODE = null;
    public ?string $TELNR1 = null;
    public ?string $TELNR2 = null;
    public ?string $FAXNR = null;
    /** @var int|float|null */
    public $CLANGUAGE = null;
    /** @var int|float|null */
    public $CCURRENCY = null;
    public ?string $WEBURL = null;
    /** @var int|float|null */
    public $CUSTCAT = null;
    /** @var int|float|null */
    public $GROUPORG = null;
    /** @var int|float|null */
    public $PARENTORG = null;
    /** @var int|float|null */
    public $SITEID = null;
    /** @var int|float|null */
    public $ORGLOGICREF = null;
    /** @var int|float|null */
    public $CAPIBLOCK_CREATEDBY = null;
    public ?string $CAPIBLOCK_CREADEDDATE = null;
    /** @var int|float|null */
    public $CAPIBLOCK_CREATEDHOUR = null;
    /** @var int|float|null */
    public $CAPIBLOCK_CREATEDMIN = null;
    /** @var int|float|null */
    public $CAPIBLOCK_CREATEDSEC = null;
    /** @var int|float|null */
    public $CAPIBLOCK_MODIFIEDBY = null;
    public ?string $CAPIBLOCK_MODIFIEDDATE = null;
    /** @var int|float|null */
    public $CAPIBLOCK_MODIFIEDHOUR = null;
    /** @var int|float|null */
    public $CAPIBLOCK_MODIFIEDMIN = null;
    /** @var int|float|null */
    public $CAPIBLOCK_MODIFIEDSEC = null;
    /** @var int|float|null */
    public $PRIMARYCONTREF = null;
    public ?string $COUNTRYCODE = null;
    public ?string $CITYCODE = null;
    public ?string $TOWNCODE = null;
    public ?string $TOWN = null;
    public ?string $DISTRICTCODE = null;
    public ?string $DISTRICT = null;
    /** @var int|float|null */
    public $RECSTATUS = null;
    public ?string $RIVALFIRM = null;
    public ?string $TELCODES1 = null;
    public ?string $TELCODES2 = null;
    public ?string $FAXCODE = null;
    public ?string $PARNCODE = null;
    public ?string $PARNDESC = null;
    /** @var RscollectionrsCstsectorasgnxml|null */
    public $INDLST = null;
    /** @var RscollectionrsSlscstasgnxml|null */
    public $SLSMLST = null;
    /** @var RscollectionrsCstarpasgnxml|null */
    public $ARPLST = null;
    public ?string $FLDALS = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    public ?string $XBUFS = null;
    public ?string $CONTNAME = null;
    /** @var Rscollectioncontacts|null */
    public $CONTACTINFO = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'INDLST' => \LogoObjects\Clients\customers\RscollectionrsCstsectorasgnxml::class,
            'SLSMLST' => \LogoObjects\Clients\customers\RscollectionrsSlscstasgnxml::class,
            'ARPLST' => \LogoObjects\Clients\customers\RscollectionrsCstarpasgnxml::class,
            'CONTACTINFO' => \LogoObjects\Clients\customers\Rscollectioncontacts::class,
        ]);
    }
}

/**
 * CustomersQueryOptions
 */
class CustomersQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var CustomersSortSpec|null */
    public $sort = null;
}

/**
 * CustomersSearchCriteria
 */
class CustomersSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $active = null;
    /** @var mixed */
    public $cardtype = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $title = null;
    /** @var mixed */
    public $auxilcode = null;
    /** @var mixed */
    public $authcode = null;
    /** @var mixed */
    public $address1 = null;
    /** @var mixed */
    public $address2 = null;
    /** @var mixed */
    public $city = null;
    /** @var mixed */
    public $country = null;
    /** @var mixed */
    public $origin = null;
    /** @var mixed */
    public $postcode = null;
    /** @var mixed */
    public $telnr1 = null;
    /** @var mixed */
    public $telnr2 = null;
    /** @var mixed */
    public $faxnr = null;
    /** @var mixed */
    public $clanguage = null;
    /** @var mixed */
    public $ccurrency = null;
    /** @var mixed */
    public $weburl = null;
    /** @var mixed */
    public $custcat = null;
    /** @var mixed */
    public $grouporg = null;
    /** @var mixed */
    public $parentorg = null;
    /** @var mixed */
    public $textinc = null;
    /** @var mixed */
    public $siteid = null;
    /** @var mixed */
    public $orglogicref = null;
    /** @var mixed */
    public $capiblockCreatedby = null;
    /** @var mixed */
    public $capiblockCreadeddate = null;
    /** @var mixed */
    public $capiblockCreatedhour = null;
    /** @var mixed */
    public $capiblockCreatedmin = null;
    /** @var mixed */
    public $capiblockCreatedsec = null;
    /** @var mixed */
    public $capiblockModifiedby = null;
    /** @var mixed */
    public $capiblockModifieddate = null;
    /** @var mixed */
    public $capiblockModifiedhour = null;
    /** @var mixed */
    public $capiblockModifiedmin = null;
    /** @var mixed */
    public $capiblockModifiedsec = null;
    /** @var mixed */
    public $primarycontref = null;
    /** @var mixed */
    public $countrycode = null;
    /** @var mixed */
    public $citycode = null;
    /** @var mixed */
    public $towncode = null;
    /** @var mixed */
    public $town = null;
    /** @var mixed */
    public $districtcode = null;
    /** @var mixed */
    public $district = null;
    /** @var mixed */
    public $recstatus = null;
    /** @var mixed */
    public $rivalfirm = null;
    /** @var mixed */
    public $telcodes1 = null;
    /** @var mixed */
    public $telcodes2 = null;
    /** @var mixed */
    public $faxcode = null;
    /** @var mixed */
    public $parncode = null;
    /** @var mixed */
    public $parndesc = null;
    /** @var mixed */
    public $indlst = null;
    /** @var mixed */
    public $slsmlst = null;
    /** @var mixed */
    public $arplst = null;
    /** @var mixed */
    public $fldals = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $textchg = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $contname = null;
    /** @var mixed */
    public $contactinfo = null;
}

/**
 * CustomersAnalytics
 */
class CustomersAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
