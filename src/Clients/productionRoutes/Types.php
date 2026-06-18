<?php

declare(strict_types=1);

namespace LogoObjects\Clients\productionRoutes;

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
 * RscollectionrsRtnlinexml
 */
class RscollectionrsRtnlinexml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\productionRoutes\RsRtnlinexml::class],
        ]);
    }
}

/**
 * RscollectionrsPrevoprxml
 */
class RscollectionrsPrevoprxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\productionRoutes\RsPrevoprxml::class],
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
 * RsRtnlinexml
 */
class RsRtnlinexml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $ROUTINGREF = null;
    /** @var int|float|null */
    public $LINE_NO = null;
    /** @var int|float|null */
    public $OPERATIONREF = null;
    public ?string $AUXIL_CODE = null;
    /** @var int|float|null */
    public $COST_RELATED = null;
    /** @var int|float|null */
    public $PLAN_RELATED = null;
    /** @var int|float|null */
    public $OUTITEMREF = null;
    public ?string $LINE_EXP = null;
    /** @var int|float|null */
    public $WF_STATUS = null;
    public ?string $OPR_CODE = null;
    public ?string $OPR_NAME = null;
    /** @var RscollectionrsPrevoprxml|null */
    public $PREV_OPR_LIST = null;
    public ?string $POPDELLIST = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'PREV_OPR_LIST' => \LogoObjects\Clients\productionRoutes\RscollectionrsPrevoprxml::class,
        ]);
    }
}

/**
 * RsPrevoprxml
 */
class RsPrevoprxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $ROUTINGREF = null;
    /** @var int|float|null */
    public $ROUTLINEREF = null;
    /** @var int|float|null */
    public $LINEOPREF = null;
    /** @var int|float|null */
    public $PREVOPREF = null;
    /** @var int|float|null */
    public $OVERLAPPER = null;
    /** @var int|float|null */
    public $OVERLAP_TYPE = null;
    /** @var int|float|null */
    public $OVERLAP_AMOUNT = null;
    /** @var int|float|null */
    public $OVERLAP_METHOD = null;
    public ?string $OPR_STR = null;
    public ?string $OPR_CODE = null;
}

/**
 * ProductionRoutes
 */
class ProductionRoutes extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $NAME = null;
    /** @var int|float|null */
    public $TYPE = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $APPROVED = null;
    /** @var int|float|null */
    public $WF_STATUS = null;
    /** @var RscollectionrsRtnlinexml|null */
    public $LINES = null;
    public ?string $DELLIST = null;
    /** @var int|float|null */
    public $UPDATED = null;
    /** @var int|float|null */
    public $WARN_ACTIVE = null;
    public ?string $FLDALS = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $PRINT_CNT = null;
    public ?string $PRINT_DATE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'LINES' => \LogoObjects\Clients\productionRoutes\RscollectionrsRtnlinexml::class,
        ]);
    }
}

/**
 * ProductionRoutesQueryOptions
 */
class ProductionRoutesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ProductionRoutesSortSpec|null */
    public $sort = null;
}

/**
 * ProductionRoutesSearchCriteria
 */
class ProductionRoutesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $name = null;
    /** @var mixed */
    public $type = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $approved = null;
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
    public $wfStatus = null;
    /** @var mixed */
    public $lines = null;
    /** @var mixed */
    public $dellist = null;
    /** @var mixed */
    public $updated = null;
    /** @var mixed */
    public $warnActive = null;
    /** @var mixed */
    public $fldals = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $textchg = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $printCnt = null;
    /** @var mixed */
    public $printDate = null;
}

/**
 * ProductionRoutesAnalytics
 */
class ProductionRoutesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
