<?php

declare(strict_types=1);

namespace LogoObjects\Clients\distributionRoutes;

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
 * RscollectionrsDistrtlinexml
 */
class RscollectionrsDistrtlinexml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\distributionRoutes\RsDistrtlinexml::class],
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
 * RsDistrtlinexml
 */
class RsDistrtlinexml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $DISTROUTREF = null;
    /** @var int|float|null */
    public $LINENR = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    public ?string $BCOUNTRYCODE = null;
    public ?string $BCITYCODE = null;
    public ?string $BTOWNCODE = null;
    public ?string $BDISTRICTCODE = null;
    public ?string $ECOUNTRYCODE = null;
    public ?string $ECITYCODE = null;
    public ?string $ETOWNCODE = null;
    public ?string $EDISTRICTCODE = null;
    public ?string $SALESMANCODE = null;
    public ?string $SALESMANNAME = null;
    /** @var int|float|null */
    public $BDISTRICTREF = null;
    public ?string $BDISTRICT = null;
    /** @var int|float|null */
    public $BTOWNREF = null;
    public ?string $BTOWN = null;
    /** @var int|float|null */
    public $BCITYREF = null;
    public ?string $BCITY = null;
    /** @var int|float|null */
    public $BCOUNTRYNR = null;
    /** @var int|float|null */
    public $BCOUNTRYREF = null;
    public ?string $BCOUNTRY = null;
    /** @var int|float|null */
    public $EDISTRICTREF = null;
    public ?string $EDISTRICT = null;
    /** @var int|float|null */
    public $ETOWNREF = null;
    public ?string $ETOWN = null;
    /** @var int|float|null */
    public $ECITYREF = null;
    public ?string $ECITY = null;
    /** @var int|float|null */
    public $ECOUNTRYNR = null;
    /** @var int|float|null */
    public $ECOUNTRYREF = null;
    public ?string $ECOUNTRY = null;
}

/**
 * DistributionRoutes
 */
class DistributionRoutes extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $NAME = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
    /** @var int|float|null */
    public $INFO_LOGICALREF = null;
    /** @var int|float|null */
    public $INFO_DISTROUTREF = null;
    /** @var int|float|null */
    public $INFO_LINENR = null;
    /** @var int|float|null */
    public $INFO_SALESMANREF = null;
    public ?string $INFO_BCOUNTRYCODE = null;
    public ?string $INFO_BCITYCODE = null;
    public ?string $INFO_BTOWNCODE = null;
    public ?string $INFO_BDISTRICTCODE = null;
    public ?string $INFO_ECOUNTRYCODE = null;
    public ?string $INFO_ECITYCODE = null;
    public ?string $INFO_ETOWNCODE = null;
    public ?string $INFO_EDISTRICTCODE = null;
    public ?string $SALESMANCODE = null;
    public ?string $SALESMANNAME = null;
    /** @var int|float|null */
    public $BDISTRICTREF = null;
    public ?string $BDISTRICT = null;
    /** @var int|float|null */
    public $BTOWNREF = null;
    public ?string $BTOWN = null;
    /** @var int|float|null */
    public $BCITYREF = null;
    public ?string $BCITY = null;
    /** @var int|float|null */
    public $BCOUNTRYNR = null;
    /** @var int|float|null */
    public $BCOUNTRYREF = null;
    public ?string $BCOUNTRY = null;
    /** @var int|float|null */
    public $EDISTRICTREF = null;
    public ?string $EDISTRICT = null;
    /** @var int|float|null */
    public $ETOWNREF = null;
    public ?string $ETOWN = null;
    /** @var int|float|null */
    public $ECITYREF = null;
    public ?string $ECITY = null;
    /** @var int|float|null */
    public $ECOUNTRYNR = null;
    /** @var int|float|null */
    public $ECOUNTRYREF = null;
    public ?string $ECOUNTRY = null;
    /** @var RscollectionrsDistrtlinexml|null */
    public $DIST_RT_LINES = null;
    public ?string $DELLIST = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    public ?string $ITEXT = null;
    public ?string $FLDALS = null;
    public ?string $XBUFS = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DIST_RT_LINES' => \LogoObjects\Clients\distributionRoutes\RscollectionrsDistrtlinexml::class,
        ]);
    }
}

/**
 * DistributionRoutesQueryOptions
 */
class DistributionRoutesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var DistributionRoutesSortSpec|null */
    public $sort = null;
}

/**
 * DistributionRoutesSearchCriteria
 */
class DistributionRoutesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $name = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $recordStatus = null;
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
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $textinc = null;
    /** @var mixed */
    public $wfstatus = null;
    /** @var mixed */
    public $infoLogicalref = null;
    /** @var mixed */
    public $infoDistroutref = null;
    /** @var mixed */
    public $infoLinenr = null;
    /** @var mixed */
    public $infoSalesmanref = null;
    /** @var mixed */
    public $infoBcountrycode = null;
    /** @var mixed */
    public $infoBcitycode = null;
    /** @var mixed */
    public $infoBtowncode = null;
    /** @var mixed */
    public $infoBdistrictcode = null;
    /** @var mixed */
    public $infoEcountrycode = null;
    /** @var mixed */
    public $infoEcitycode = null;
    /** @var mixed */
    public $infoEtowncode = null;
    /** @var mixed */
    public $infoEdistrictcode = null;
    /** @var mixed */
    public $salesmancode = null;
    /** @var mixed */
    public $salesmanname = null;
    /** @var mixed */
    public $bdistrictref = null;
    /** @var mixed */
    public $bdistrict = null;
    /** @var mixed */
    public $btownref = null;
    /** @var mixed */
    public $btown = null;
    /** @var mixed */
    public $bcityref = null;
    /** @var mixed */
    public $bcity = null;
    /** @var mixed */
    public $bcountrynr = null;
    /** @var mixed */
    public $bcountryref = null;
    /** @var mixed */
    public $bcountry = null;
    /** @var mixed */
    public $edistrictref = null;
    /** @var mixed */
    public $edistrict = null;
    /** @var mixed */
    public $etownref = null;
    /** @var mixed */
    public $etown = null;
    /** @var mixed */
    public $ecityref = null;
    /** @var mixed */
    public $ecity = null;
    /** @var mixed */
    public $ecountrynr = null;
    /** @var mixed */
    public $ecountryref = null;
    /** @var mixed */
    public $ecountry = null;
    /** @var mixed */
    public $distRtLines = null;
    /** @var mixed */
    public $dellist = null;
    /** @var mixed */
    public $textchg = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $fldals = null;
    /** @var mixed */
    public $xbufs = null;
}

/**
 * DistributionRoutesAnalytics
 */
class DistributionRoutesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
