<?php

declare(strict_types=1);

namespace LogoObjects\Clients\salesmen;

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
            'items' => [\LogoObjects\Clients\salesmen\RsSlsclrelxml::class],
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
 * RsSlsclrelxml
 */
class RsSlsclrelxml extends \LogoObjects\Types\BaseEntity
{
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
}

/**
 * Salesmen
 */
class Salesmen extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $NAME = null;
    /** @var int|float|null */
    public $CARDTYPE = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    public ?string $POSITION = null;
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
    public $TYPE = null;
    public ?string $EMAILADDR = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'CL_LIST' => \LogoObjects\Clients\salesmen\RscollectionrsSlsclrelxml::class,
        ]);
    }
}

/**
 * SalesmenQueryOptions
 */
class SalesmenQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var SalesmenSortSpec|null */
    public $sort = null;
}

/**
 * SalesmenSearchCriteria
 */
class SalesmenSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $name = null;
    /** @var mixed */
    public $cardtype = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $position = null;
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
    public $recordStatus = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $userId = null;
    /** @var mixed */
    public $deptId = null;
    /** @var mixed */
    public $divisId = null;
    /** @var mixed */
    public $firmNo = null;
    /** @var mixed */
    public $clList = null;
    /** @var mixed */
    public $targets = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $type = null;
    /** @var mixed */
    public $emailaddr = null;
}

/**
 * SalesmenAnalytics
 */
class SalesmenAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
