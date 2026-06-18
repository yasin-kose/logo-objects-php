<?php

declare(strict_types=1);

namespace LogoObjects\Clients\ArpShipmentLocations;

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
 * ArpShipmentLocations
 */
class ArpShipmentLocations extends \LogoObjects\Types\BaseEntity
{
    public ?string $ARP_CODE = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    public ?string $CODE = null;
    public ?string $DESCRIPTION = null;
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
    public ?string $TAX_NR = null;
    public ?string $TAX_OFFICE = null;
    public ?string $TRADING_GRP = null;
    public ?string $VAT_NR = null;
    public ?string $XBUFS = null;
    public ?string $INCHANGE = null;
    public ?string $LONGITUDE = null;
    public ?string $LATITUDE = null;
    public ?string $CITY_ID = null;
    public ?string $TOWN_ID = null;
    /** @var int|float|null */
    public $SHIP_BEG_TIME1 = null;
    /** @var int|float|null */
    public $SHIP_BEG_TIME2 = null;
    /** @var int|float|null */
    public $SHIP_BEG_TIME3 = null;
    /** @var int|float|null */
    public $SHIP_END_TIME1 = null;
    /** @var int|float|null */
    public $SHIP_END_TIME2 = null;
    /** @var int|float|null */
    public $SHIP_END_TIME3 = null;
    public ?string $EMAIL_ADDR = null;
    /** @var int|float|null */
    public $DEFAULT_FLAG = null;
    public ?string $POST_LABEL = null;
    public ?string $SENDER_LABEL = null;
    public ?string $POST_LABEL_DESP = null;
    public ?string $SENDER_LABEL_DESP = null;
    /** @var int|float|null */
    public $PERSCOMPANY = null;
    public ?string $TCKNO = null;
    public ?string $NAME = null;
    public ?string $SURNAME = null;
}

/**
 * ArpShipmentLocationsQueryOptions
 */
class ArpShipmentLocationsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ArpShipmentLocationsSortSpec|null */
    public $sort = null;
}

/**
 * ArpShipmentLocationsSearchCriteria
 */
class ArpShipmentLocationsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $arpCode = null;
    /** @var mixed */
    public $clientref = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $description = null;
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
    public $taxNr = null;
    /** @var mixed */
    public $taxOffice = null;
    /** @var mixed */
    public $tradingGrp = null;
    /** @var mixed */
    public $vatNr = null;
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
    public $xbufs = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $recordStatus = null;
    /** @var mixed */
    public $textinc = null;
    /** @var mixed */
    public $inchange = null;
    /** @var mixed */
    public $longitude = null;
    /** @var mixed */
    public $latitude = null;
    /** @var mixed */
    public $cityId = null;
    /** @var mixed */
    public $townId = null;
    /** @var mixed */
    public $shipBegTime1 = null;
    /** @var mixed */
    public $shipBegTime2 = null;
    /** @var mixed */
    public $shipBegTime3 = null;
    /** @var mixed */
    public $shipEndTime1 = null;
    /** @var mixed */
    public $shipEndTime2 = null;
    /** @var mixed */
    public $shipEndTime3 = null;
    /** @var mixed */
    public $emailAddr = null;
    /** @var mixed */
    public $defaultFlag = null;
    /** @var mixed */
    public $postLabel = null;
    /** @var mixed */
    public $senderLabel = null;
    /** @var mixed */
    public $postLabelDesp = null;
    /** @var mixed */
    public $senderLabelDesp = null;
    /** @var mixed */
    public $perscompany = null;
    /** @var mixed */
    public $tckno = null;
    /** @var mixed */
    public $name = null;
    /** @var mixed */
    public $surname = null;
}

/**
 * ArpShipmentLocationsAnalytics
 */
class ArpShipmentLocationsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
