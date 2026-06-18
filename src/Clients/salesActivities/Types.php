<?php

declare(strict_types=1);

namespace LogoObjects\Clients\salesActivities;

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
 * RscollectionrsSlsactfilexml
 */
class RscollectionrsSlsactfilexml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\salesActivities\RsSlsactfilexml::class],
        ]);
    }
}

/**
 * RscollectionrsSlsactpeplxml
 */
class RscollectionrsSlsactpeplxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\salesActivities\RsSlsactpeplxml::class],
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
 * RsSlsactfilexml
 */
class RsSlsactfilexml extends \LogoObjects\Types\BaseEntity
{
    public ?string $PATH = null;
    public ?string $FILENAME = null;
    /** @var int|float|null */
    public $FILETYPE = null;
    /** @var int|float|null */
    public $INDISK = null;
    /** @var int|float|null */
    public $ACTREF = null;
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
    public $UPDATED = null;
    public ?string $DELLIST = null;
    public ?string $LINELIST = null;
    public ?string $FLDALS = null;
    public ?string $XBUFS = null;
}

/**
 * RsSlsactpeplxml
 */
class RsSlsactpeplxml extends \LogoObjects\Types\BaseEntity
{
    public ?string $NAME = null;
    public ?string $MIDINIT = null;
    public ?string $FAMNAME = null;
    /** @var int|float|null */
    public $ACTREF = null;
    public ?string $EMAILADDR = null;
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
    public $UPDATED = null;
    public ?string $FLDALS = null;
    public ?string $XBUFS = null;
}

/**
 * SalesActivities
 */
class SalesActivities extends \LogoObjects\Types\BaseEntity
{
    public ?string $DATE = null;
    /** @var int|float|null */
    public $TIME = null;
    /** @var int|float|null */
    public $ACTTYPE = null;
    /** @var int|float|null */
    public $OPPORREF = null;
    public ?string $OPPORNO = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    public ?string $SALESMANCODE = null;
    /** @var int|float|null */
    public $CSTVNDREF = null;
    public ?string $CUSTOMERCODE = null;
    /** @var int|float|null */
    public $ACTORDER = null;
    public ?string $DESCRIPTION = null;
    public ?string $DESCRIPTION2 = null;
    /** @var int|float|null */
    public $PRIORITY = null;
    /** @var int|float|null */
    public $APPROVAL = null;
    public ?string $DUEDATE = null;
    /** @var int|float|null */
    public $DUETIME = null;
    /** @var int|float|null */
    public $SENDVIA = null;
    /** @var int|float|null */
    public $SENDREF = null;
    public ?string $AUXILCODE = null;
    public ?string $AUTHCODE = null;
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
    public $LASTREVISION = null;
    public ?string $ACTDESC = null;
    /** @var int|float|null */
    public $UPDATED = null;
    public ?string $DOCDELLIST = null;
    /** @var RscollectionrsSlsactfilexml|null */
    public $DOCLIST = null;
    public ?string $DOCALS = null;
    public ?string $XBUFS = null;
    public ?string $SENDCNTNM = null;
    public ?string $FIRST_NAME = null;
    public ?string $MIDDLE_INITIAL = null;
    public ?string $FAMILY_NAME = null;
    public ?string $ACTTYPEDESC = null;
    public ?string $PERDELLIST = null;
    /** @var RscollectionrsSlsactpeplxml|null */
    public $PERLIST = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    /** @var int|float|null */
    public $CUSTOMBRW = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DOCLIST' => \LogoObjects\Clients\salesActivities\RscollectionrsSlsactfilexml::class,
            'PERLIST' => \LogoObjects\Clients\salesActivities\RscollectionrsSlsactpeplxml::class,
        ]);
    }
}

/**
 * SalesActivitiesQueryOptions
 */
class SalesActivitiesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var SalesActivitiesSortSpec|null */
    public $sort = null;
}

/**
 * SalesActivitiesSearchCriteria
 */
class SalesActivitiesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $date = null;
    /** @var mixed */
    public $time = null;
    /** @var mixed */
    public $acttype = null;
    /** @var mixed */
    public $opporref = null;
    /** @var mixed */
    public $opporno = null;
    /** @var mixed */
    public $salesmanref = null;
    /** @var mixed */
    public $salesmancode = null;
    /** @var mixed */
    public $cstvndref = null;
    /** @var mixed */
    public $customercode = null;
    /** @var mixed */
    public $actorder = null;
    /** @var mixed */
    public $description = null;
    /** @var mixed */
    public $description2 = null;
    /** @var mixed */
    public $priority = null;
    /** @var mixed */
    public $approval = null;
    /** @var mixed */
    public $duedate = null;
    /** @var mixed */
    public $duetime = null;
    /** @var mixed */
    public $sendvia = null;
    /** @var mixed */
    public $sendref = null;
    /** @var mixed */
    public $auxilcode = null;
    /** @var mixed */
    public $authcode = null;
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
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $lastrevision = null;
    /** @var mixed */
    public $textinc = null;
    /** @var mixed */
    public $actdesc = null;
    /** @var mixed */
    public $updated = null;
    /** @var mixed */
    public $docdellist = null;
    /** @var mixed */
    public $doclist = null;
    /** @var mixed */
    public $docals = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $sendcntnm = null;
    /** @var mixed */
    public $firstName = null;
    /** @var mixed */
    public $middleInitial = null;
    /** @var mixed */
    public $familyName = null;
    /** @var mixed */
    public $acttypedesc = null;
    /** @var mixed */
    public $perdellist = null;
    /** @var mixed */
    public $perlist = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $textchg = null;
    /** @var mixed */
    public $custombrw = null;
}

/**
 * SalesActivitiesAnalytics
 */
class SalesActivitiesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
