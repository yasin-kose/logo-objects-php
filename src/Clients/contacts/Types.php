<?php

declare(strict_types=1);

namespace LogoObjects\Clients\contacts;

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
            'items' => [\LogoObjects\Clients\contacts\RsContspedaysxml::class],
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
            'SPEDAYSLIST' => \LogoObjects\Clients\contacts\RscollectionrsContspedaysxml::class,
        ]);
    }
}

/**
 * ContactsQueryOptions
 */
class ContactsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ContactsSortSpec|null */
    public $sort = null;
}

/**
 * ContactsSearchCriteria
 */
class ContactsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $name = null;
    /** @var mixed */
    public $midinit = null;
    /** @var mixed */
    public $famname = null;
    /** @var mixed */
    public $title = null;
    /** @var mixed */
    public $cstvndref = null;
    /** @var mixed */
    public $customerCode = null;
    /** @var mixed */
    public $jobtitle = null;
    /** @var mixed */
    public $auxilcode = null;
    /** @var mixed */
    public $authcode = null;
    /** @var mixed */
    public $workphone = null;
    /** @var mixed */
    public $homephone = null;
    /** @var mixed */
    public $mobphone = null;
    /** @var mixed */
    public $asstphone = null;
    /** @var mixed */
    public $officefax = null;
    /** @var mixed */
    public $emailaddr = null;
    /** @var mixed */
    public $address1 = null;
    /** @var mixed */
    public $address2 = null;
    /** @var mixed */
    public $city = null;
    /** @var mixed */
    public $country = null;
    /** @var mixed */
    public $postcode = null;
    /** @var mixed */
    public $contcat = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $dataReference = null;
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
    public $textinc = null;
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
    public $xmlAttribute = null;
    /** @var mixed */
    public $workphcod = null;
    /** @var mixed */
    public $homephcod = null;
    /** @var mixed */
    public $mobphcod = null;
    /** @var mixed */
    public $asstphcod = null;
    /** @var mixed */
    public $offfaxcod = null;
    /** @var mixed */
    public $updated = null;
    /** @var mixed */
    public $fldals = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $textchg = null;
    /** @var mixed */
    public $spedayslist = null;
}

/**
 * ContactsAnalytics
 */
class ContactsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
