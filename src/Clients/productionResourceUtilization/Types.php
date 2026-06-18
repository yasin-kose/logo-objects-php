<?php

declare(strict_types=1);

namespace LogoObjects\Clients\productionResourceUtilization;

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
 * RscollectionrsOccupationxml
 */
class RscollectionrsOccupationxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\productionResourceUtilization\RsOccupationxml::class],
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
 * RsOccupationxml
 */
class RsOccupationxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $PRODORDREF = null;
    public ?string $DISPATCH_NUMBER = null;
    /** @var int|float|null */
    public $DISPLINEREF = null;
    /** @var int|float|null */
    public $OCCUPATION_STATUS = null;
    /** @var int|float|null */
    public $OCCUPATION_TYPE = null;
    /** @var int|float|null */
    public $LABORREQREF = null;
    /** @var int|float|null */
    public $EMPLOYE_REFERENCE = null;
    /** @var int|float|null */
    public $TOOLREQREF = null;
    /** @var int|float|null */
    public $TOOL_REFERENCE = null;
    public ?string $RESCODE = null;
    public ?string $RESNAME = null;
    /** @var int|float|null */
    public $AMOUNT = null;
    public ?string $BEGDATE = null;
    /** @var int|float|null */
    public $BEGTIME = null;
    public ?string $ENDDATE = null;
    /** @var int|float|null */
    public $ENDTIME = null;
    /** @var int|float|null */
    public $DURATION = null;
    /** @var int|float|null */
    public $WIZENTRY = null;
    /** @var int|float|null */
    public $COSTFACTOR = null;
    /** @var int|float|null */
    public $OPERATION_DURATION = null;
    /** @var int|float|null */
    public $OPERATION_AMOUNT = null;
    /** @var int|float|null */
    public $SETUPTIME = null;
    /** @var int|float|null */
    public $RUNBATCH = null;
    /** @var int|float|null */
    public $RUNTIME = null;
    /** @var int|float|null */
    public $MOVEBATCH = null;
    /** @var int|float|null */
    public $MOVETIME = null;
    /** @var int|float|null */
    public $CALCULATE_TYPE = null;
}

/**
 * ProductionResourceUtilization
 */
class ProductionResourceUtilization extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $DINFO_PRODORDREF = null;
    /** @var int|float|null */
    public $DINFO_BOMLEVEL = null;
    /** @var int|float|null */
    public $DINFO_REVREF = null;
    public ?string $DINFO_LINENO = null;
    /** @var int|float|null */
    public $DINFO_ROUTLINEREF = null;
    /** @var int|float|null */
    public $DINFO_OPERATIONREF = null;
    /** @var int|float|null */
    public $DINFO_QCOPOK = null;
    /** @var int|float|null */
    public $DINFO_OPREQREF = null;
    /** @var int|float|null */
    public $DINFO_WSREF = null;
    /** @var int|float|null */
    public $DINFO_WSDAILYOPTIME = null;
    /** @var int|float|null */
    public $DINFO_WSWORKINGDAYS = null;
    /** @var int|float|null */
    public $DINFO_SCHEDULED = null;
    /** @var int|float|null */
    public $DINFO_RELEASED = null;
    /** @var int|float|null */
    public $DINFO_SETUPTIME = null;
    /** @var int|float|null */
    public $DINFO_QUEUETIME = null;
    /** @var int|float|null */
    public $DINFO_RUNBATCH = null;
    /** @var int|float|null */
    public $DINFO_RUNTIME = null;
    /** @var int|float|null */
    public $DINFO_MOVEBATCH = null;
    /** @var int|float|null */
    public $DINFO_MOVETIME = null;
    /** @var int|float|null */
    public $DINFO_INSPTIME = null;
    /** @var int|float|null */
    public $DINFO_HEADTIME = null;
    /** @var int|float|null */
    public $DINFO_TAILTIME = null;
    public ?string $DINFO_OPBEGDATE = null;
    /** @var int|float|null */
    public $DINFO_OPBEGTIME = null;
    public ?string $DINFO_OPDUEDATE = null;
    /** @var int|float|null */
    public $DINFO_OPDUETIME = null;
    /** @var int|float|null */
    public $DINFO_PLNDURATION = null;
    public ?string $DINFO_ACTBEGDATE = null;
    /** @var int|float|null */
    public $DINFO_ACTBEGTIME = null;
    public ?string $DINFO_ACTDUEDATE = null;
    /** @var int|float|null */
    public $DINFO_ACTDUETIME = null;
    /** @var int|float|null */
    public $DINFO_ACTDURATION = null;
    /** @var int|float|null */
    public $DINFO_LINESTATUS = null;
    /** @var int|float|null */
    public $DINFO_STDMATERIALCOST = null;
    /** @var int|float|null */
    public $DINFO_STDEQUIPTCOST = null;
    /** @var int|float|null */
    public $DINFO_STDWSCOST = null;
    /** @var int|float|null */
    public $DINFO_STDLABORCOST = null;
    /** @var int|float|null */
    public $DINFO_STDOVERHCOST = null;
    /** @var int|float|null */
    public $DINFO_STDTOTALCOST = null;
    /** @var int|float|null */
    public $DINFO_STDMATERIALRPCOST = null;
    /** @var int|float|null */
    public $DINFO_STDEQUIPTRPCOST = null;
    /** @var int|float|null */
    public $DINFO_STDWSRPCOST = null;
    /** @var int|float|null */
    public $DINFO_STDLABORRPCOST = null;
    /** @var int|float|null */
    public $DINFO_STDOVERHRPCOST = null;
    /** @var int|float|null */
    public $DINFO_STDTOTALRPCOST = null;
    /** @var int|float|null */
    public $DINFO_ACTMATERIALCOST = null;
    /** @var int|float|null */
    public $DINFO_ACTEQUIPTCOST = null;
    /** @var int|float|null */
    public $DINFO_ACTWSCOST = null;
    /** @var int|float|null */
    public $DINFO_ACTLABORCOST = null;
    /** @var int|float|null */
    public $DINFO_ACTOVERHCOST = null;
    /** @var int|float|null */
    public $DINFO_ACTTOTALCOST = null;
    /** @var int|float|null */
    public $DINFO_ACTMATERIALRPCOST = null;
    /** @var int|float|null */
    public $DINFO_ACTEQUIPTRPCOST = null;
    /** @var int|float|null */
    public $DINFO_ACTWSRPCOST = null;
    /** @var int|float|null */
    public $DINFO_ACTLABORRPCOST = null;
    /** @var int|float|null */
    public $DINFO_ACTOVERHRPCOST = null;
    /** @var int|float|null */
    public $DINFO_ACTTOTALRPCOST = null;
    public ?string $DINFO_STDOVHDFORMULA = null;
    public ?string $DINFO_STDOVHDRPFORMULA = null;
    public ?string $DINFO_ACTOVHDFORMULA = null;
    public ?string $DINFO_ACTOVHDRPFORMULA = null;
    /** @var int|float|null */
    public $DINFO_ITEMREF = null;
    public ?string $DINFO_OPWSBEGDATE = null;
    /** @var int|float|null */
    public $DINFO_BOMMASTERREF = null;
    /** @var int|float|null */
    public $DINFO_STPDURATION = null;
    /** @var int|float|null */
    public $DINFO_STPCOSTDURATION = null;
    public ?string $DINFO_DOCODE = null;
    public ?string $DINFO_SPECODE = null;
    public ?string $DINFO_CYPHCODE = null;
    /** @var int|float|null */
    public $DINFO_SITEID = null;
    /** @var int|float|null */
    public $DINFO_RECSTATUS = null;
    /** @var int|float|null */
    public $DINFO_ORGLOGICREF = null;
    /** @var int|float|null */
    public $DINFO_WFSTATUS = null;
    /** @var int|float|null */
    public $DINFO_PRINTCNT = null;
    public ?string $DINFO_PRINT_DATE = null;
    /** @var int|float|null */
    public $DINFO_PROJECTREF = null;
    /** @var int|float|null */
    public $DINFO_PRODORDTYPE = null;
    /** @var int|float|null */
    public $DINFO_CLIENTREF = null;
    /** @var int|float|null */
    public $DINFO_MANUAL_EDIT = null;
    /** @var int|float|null */
    public $DINFO_REWORK = null;
    /** @var int|float|null */
    public $DINFO_PARTING = null;
    public ?string $DINFO_ARPCODE = null;
    /** @var int|float|null */
    public $RESOURCE_TYPE = null;
    /** @var int|float|null */
    public $RESOURCE_REFERENCE = null;
    public ?string $RESOURCE_CODE = null;
    public ?string $RESOURCE_NAME = null;
    /** @var int|float|null */
    public $RESOURCE_AMOUNT = null;
    /** @var int|float|null */
    public $TREQREF = null;
    /** @var RscollectionrsOccupationxml|null */
    public $PLNLIST = null;
    /** @var RscollectionrsOccupationxml|null */
    public $WIZACTLIST = null;
    /** @var RscollectionrsOccupationxml|null */
    public $ACTLIST = null;
    /** @var RscollectionrsOccupationxml|null */
    public $WIZPLNLIST = null;
    public ?string $PROD_ORDER = null;
    public ?string $OPERATION_CODE = null;
    public ?string $OPERATION_NAME = null;
    /** @var int|float|null */
    public $ENTRY_TYPE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'PLNLIST' => \LogoObjects\Clients\productionResourceUtilization\RscollectionrsOccupationxml::class,
            'WIZACTLIST' => \LogoObjects\Clients\productionResourceUtilization\RscollectionrsOccupationxml::class,
            'ACTLIST' => \LogoObjects\Clients\productionResourceUtilization\RscollectionrsOccupationxml::class,
            'WIZPLNLIST' => \LogoObjects\Clients\productionResourceUtilization\RscollectionrsOccupationxml::class,
        ]);
    }
}

/**
 * ProductionResourceUtilizationQueryOptions
 */
class ProductionResourceUtilizationQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ProductionResourceUtilizationSortSpec|null */
    public $sort = null;
}

/**
 * ProductionResourceUtilizationSearchCriteria
 */
class ProductionResourceUtilizationSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $dinfoProdordref = null;
    /** @var mixed */
    public $dinfoBomlevel = null;
    /** @var mixed */
    public $dinfoRevref = null;
    /** @var mixed */
    public $dinfoLineno = null;
    /** @var mixed */
    public $dinfoRoutlineref = null;
    /** @var mixed */
    public $dinfoOperationref = null;
    /** @var mixed */
    public $dinfoQcopok = null;
    /** @var mixed */
    public $dinfoOpreqref = null;
    /** @var mixed */
    public $dinfoWsref = null;
    /** @var mixed */
    public $dinfoWsdailyoptime = null;
    /** @var mixed */
    public $dinfoWsworkingdays = null;
    /** @var mixed */
    public $dinfoScheduled = null;
    /** @var mixed */
    public $dinfoReleased = null;
    /** @var mixed */
    public $dinfoSetuptime = null;
    /** @var mixed */
    public $dinfoQueuetime = null;
    /** @var mixed */
    public $dinfoRunbatch = null;
    /** @var mixed */
    public $dinfoRuntime = null;
    /** @var mixed */
    public $dinfoMovebatch = null;
    /** @var mixed */
    public $dinfoMovetime = null;
    /** @var mixed */
    public $dinfoInsptime = null;
    /** @var mixed */
    public $dinfoHeadtime = null;
    /** @var mixed */
    public $dinfoTailtime = null;
    /** @var mixed */
    public $dinfoOpbegdate = null;
    /** @var mixed */
    public $dinfoOpbegtime = null;
    /** @var mixed */
    public $dinfoOpduedate = null;
    /** @var mixed */
    public $dinfoOpduetime = null;
    /** @var mixed */
    public $dinfoPlnduration = null;
    /** @var mixed */
    public $dinfoActbegdate = null;
    /** @var mixed */
    public $dinfoActbegtime = null;
    /** @var mixed */
    public $dinfoActduedate = null;
    /** @var mixed */
    public $dinfoActduetime = null;
    /** @var mixed */
    public $dinfoActduration = null;
    /** @var mixed */
    public $dinfoLinestatus = null;
    /** @var mixed */
    public $dinfoStdmaterialcost = null;
    /** @var mixed */
    public $dinfoStdequiptcost = null;
    /** @var mixed */
    public $dinfoStdwscost = null;
    /** @var mixed */
    public $dinfoStdlaborcost = null;
    /** @var mixed */
    public $dinfoStdoverhcost = null;
    /** @var mixed */
    public $dinfoStdtotalcost = null;
    /** @var mixed */
    public $dinfoStdmaterialrpcost = null;
    /** @var mixed */
    public $dinfoStdequiptrpcost = null;
    /** @var mixed */
    public $dinfoStdwsrpcost = null;
    /** @var mixed */
    public $dinfoStdlaborrpcost = null;
    /** @var mixed */
    public $dinfoStdoverhrpcost = null;
    /** @var mixed */
    public $dinfoStdtotalrpcost = null;
    /** @var mixed */
    public $dinfoActmaterialcost = null;
    /** @var mixed */
    public $dinfoActequiptcost = null;
    /** @var mixed */
    public $dinfoActwscost = null;
    /** @var mixed */
    public $dinfoActlaborcost = null;
    /** @var mixed */
    public $dinfoActoverhcost = null;
    /** @var mixed */
    public $dinfoActtotalcost = null;
    /** @var mixed */
    public $dinfoActmaterialrpcost = null;
    /** @var mixed */
    public $dinfoActequiptrpcost = null;
    /** @var mixed */
    public $dinfoActwsrpcost = null;
    /** @var mixed */
    public $dinfoActlaborrpcost = null;
    /** @var mixed */
    public $dinfoActoverhrpcost = null;
    /** @var mixed */
    public $dinfoActtotalrpcost = null;
    /** @var mixed */
    public $dinfoStdovhdformula = null;
    /** @var mixed */
    public $dinfoStdovhdrpformula = null;
    /** @var mixed */
    public $dinfoActovhdformula = null;
    /** @var mixed */
    public $dinfoActovhdrpformula = null;
    /** @var mixed */
    public $dinfoItemref = null;
    /** @var mixed */
    public $dinfoOpwsbegdate = null;
    /** @var mixed */
    public $dinfoBommasterref = null;
    /** @var mixed */
    public $dinfoStpduration = null;
    /** @var mixed */
    public $dinfoStpcostduration = null;
    /** @var mixed */
    public $dinfoDocode = null;
    /** @var mixed */
    public $dinfoSpecode = null;
    /** @var mixed */
    public $dinfoCyphcode = null;
    /** @var mixed */
    public $dinfoSiteid = null;
    /** @var mixed */
    public $dinfoRecstatus = null;
    /** @var mixed */
    public $dinfoOrglogicref = null;
    /** @var mixed */
    public $dinfoWfstatus = null;
    /** @var mixed */
    public $dinfoPrintcnt = null;
    /** @var mixed */
    public $dinfoPrintDate = null;
    /** @var mixed */
    public $dinfoProjectref = null;
    /** @var mixed */
    public $dinfoProdordtype = null;
    /** @var mixed */
    public $dinfoClientref = null;
    /** @var mixed */
    public $dinfoManualEdit = null;
    /** @var mixed */
    public $dinfoRework = null;
    /** @var mixed */
    public $dinfoParting = null;
    /** @var mixed */
    public $dinfoArpcode = null;
    /** @var mixed */
    public $resourceType = null;
    /** @var mixed */
    public $resourceReference = null;
    /** @var mixed */
    public $resourceCode = null;
    /** @var mixed */
    public $resourceName = null;
    /** @var mixed */
    public $resourceAmount = null;
    /** @var mixed */
    public $treqref = null;
    /** @var mixed */
    public $plnlist = null;
    /** @var mixed */
    public $wizactlist = null;
    /** @var mixed */
    public $actlist = null;
    /** @var mixed */
    public $wizplnlist = null;
    /** @var mixed */
    public $prodOrder = null;
    /** @var mixed */
    public $operationCode = null;
    /** @var mixed */
    public $operationName = null;
    /** @var mixed */
    public $entryType = null;
}

/**
 * ProductionResourceUtilizationAnalytics
 */
class ProductionResourceUtilizationAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
