<?php

declare(strict_types=1);

namespace LogoObjects\Clients\salesmanRoutes;

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
 * RscollectionrsSlsroutelinesxml
 */
class RscollectionrsSlsroutelinesxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\salesmanRoutes\RsSlsroutelinesxml::class],
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
 * RsSlsroutelinesxml
 */
class RsSlsroutelinesxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $ROUTEREF = null;
    /** @var int|float|null */
    public $LINE_NO = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    public ?string $CL_CODE = null;
    public ?string $CL_DEFINITION = null;
}

/**
 * SalesmanRoutes
 */
class SalesmanRoutes extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $DEFINITION = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    public ?string $SPECODE = null;
    public ?string $CYPHCODE = null;
    /** @var int|float|null */
    public $STATUS = null;
    public ?string $PERIOD = null;
    /** @var RscollectionrsSlsroutelinesxml|null */
    public $ROUTE_LINES = null;
    public ?string $SALESMAN_CODE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'ROUTE_LINES' => \LogoObjects\Clients\salesmanRoutes\RscollectionrsSlsroutelinesxml::class,
        ]);
    }
}

/**
 * SalesmanRoutesQueryOptions
 */
class SalesmanRoutesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var SalesmanRoutesSortSpec|null */
    public $sort = null;
}

/**
 * SalesmanRoutesSearchCriteria
 */
class SalesmanRoutesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $definition = null;
    /** @var mixed */
    public $salesmanref = null;
    /** @var mixed */
    public $specode = null;
    /** @var mixed */
    public $cyphcode = null;
    /** @var mixed */
    public $status = null;
    /** @var mixed */
    public $period = null;
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
    public $routeLines = null;
    /** @var mixed */
    public $salesmanCode = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
}

/**
 * SalesmanRoutesAnalytics
 */
class SalesmanRoutesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
