<?php

declare(strict_types=1);

namespace LogoObjects\Clients\operations;

/**
 * RscollectionrsOprlinexml
 */
class RscollectionrsOprlinexml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\operations\RsOprlinexml::class],
        ]);
    }
}

/**
 * RscollectionrsLaborreqlistxml
 */
class RscollectionrsLaborreqlistxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\operations\RsLaborreqlistxml::class],
        ]);
    }
}

/**
 * RscollectionrsToolreqlistxml
 */
class RscollectionrsToolreqlistxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\operations\RsToolreqlistxml::class],
        ]);
    }
}

/**
 * RscollectionrsWsattribsxml
 */
class RscollectionrsWsattribsxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\operations\RsWsattribsxml::class],
        ]);
    }
}

/**
 * RscollectionrsOpactxml
 */
class RscollectionrsOpactxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\operations\RsOpactxml::class],
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
 * RsOprlinexml
 */
class RsOprlinexml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $OPERATIONREF = null;
    /** @var int|float|null */
    public $LINE_NO = null;
    /** @var int|float|null */
    public $GROUP = null;
    /** @var int|float|null */
    public $WSREF = null;
    public ?string $BEGDATE = null;
    /** @var int|float|null */
    public $FIXED_SETUP_TIME = null;
    /** @var int|float|null */
    public $BATCH_QUANTITY = null;
    /** @var int|float|null */
    public $RUN_TIME = null;
    /** @var int|float|null */
    public $TRANS_BATCH_QTY = null;
    /** @var int|float|null */
    public $TRANS_BATCH_TIME = null;
    /** @var int|float|null */
    public $WAIT_BATCH_QTY = null;
    /** @var int|float|null */
    public $WAIT_BATCH_TIME = null;
    /** @var int|float|null */
    public $INSP_TIME = null;
    /** @var int|float|null */
    public $QUE_TIME = null;
    /** @var int|float|null */
    public $HEAD_TIME = null;
    /** @var int|float|null */
    public $TAIL_TIME = null;
    /** @var int|float|null */
    public $USAGE_PER = null;
    /** @var int|float|null */
    public $EFFICIENCY = null;
    /** @var int|float|null */
    public $PRIORITY = null;
    /** @var int|float|null */
    public $MIN_AMOUNT = null;
    /** @var int|float|null */
    public $MAX_AMOUNT = null;
    public ?string $WS_CODE = null;
    public ?string $WS_NAME = null;
    /** @var int|float|null */
    public $PLANT_NO = null;
    /** @var RscollectionrsLaborreqlistxml|null */
    public $LABOR_REQS = null;
    public ?string $LDELLIST = null;
    /** @var RscollectionrsToolreqlistxml|null */
    public $TOOL_REQS = null;
    public ?string $TDELLIST = null;
    /** @var RscollectionrsWsattribsxml|null */
    public $WS_CHARACTERISTICS = null;
    public ?string $WSDELLIST = null;
    /** @var RscollectionrsOpactxml|null */
    public $OP_ACTIVITIES = null;
    public ?string $OP_ACT_DELLIST = null;
    /** @var int|float|null */
    public $LINE_UP_DELAY = null;
    /** @var int|float|null */
    public $LINE_UP_DELAY_UNIT = null;
    public ?string $CONDITION = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'LABOR_REQS' => \LogoObjects\Clients\operations\RscollectionrsLaborreqlistxml::class,
            'TOOL_REQS' => \LogoObjects\Clients\operations\RscollectionrsToolreqlistxml::class,
            'WS_CHARACTERISTICS' => \LogoObjects\Clients\operations\RscollectionrsWsattribsxml::class,
            'OP_ACTIVITIES' => \LogoObjects\Clients\operations\RscollectionrsOpactxml::class,
        ]);
    }
}

/**
 * RsLaborreqlistxml
 */
class RsLaborreqlistxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $OPREQREF = null;
    /** @var int|float|null */
    public $LINE_NO = null;
    /** @var int|float|null */
    public $GROUP = null;
    /** @var int|float|null */
    public $EMPREF = null;
    /** @var int|float|null */
    public $AMOUNT = null;
    public ?string $EMP_CODE = null;
    public ?string $EMP_NAME = null;
}

/**
 * RsToolreqlistxml
 */
class RsToolreqlistxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $OPREQREF = null;
    /** @var int|float|null */
    public $LINE_NO = null;
    /** @var int|float|null */
    public $TOOLREF = null;
    /** @var int|float|null */
    public $AMOUNT = null;
    /** @var int|float|null */
    public $UOMREF = null;
    public ?string $ITEM_CODE = null;
    public ?string $ITEM_NAME = null;
    public ?string $UNIT_SET_CODE = null;
    public ?string $UNIT_CODE = null;
    /** @var int|float|null */
    public $TOOL_TYPE = null;
    /** @var int|float|null */
    public $REVREF = null;
    public ?string $REVISION_CODE = null;
    /** @var int|float|null */
    public $OPERATIONREF = null;
    public ?string $OPERATION_CODE = null;
}

/**
 * RsWsattribsxml
 */
class RsWsattribsxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $ITEMREF = null;
    /** @var int|float|null */
    public $CHARCODEREF = null;
    /** @var int|float|null */
    public $CHARVALREF = null;
    /** @var int|float|null */
    public $LINE_NO = null;
    /** @var int|float|null */
    public $MATRIX_LOC = null;
    /** @var int|float|null */
    public $PRIORITY = null;
    public ?string $VLIST = null;
    public ?string $DLIST = null;
    public ?string $CCODE = null;
    public ?string $CNAME = null;
    public ?string $VCODE = null;
}

/**
 * RsOpactxml
 */
class RsOpactxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $OPREQREF = null;
    /** @var int|float|null */
    public $OVHDREF = null;
    public ?string $FORMULA = null;
    /** @var int|float|null */
    public $AMOUNT = null;
    /** @var int|float|null */
    public $WHEN_HAPPEN = null;
    public ?string $OVERHEAD_CODE = null;
    public ?string $OVERHEAD_NAME = null;
    public ?string $OVERHEAD_UNIT = null;
    /** @var int|float|null */
    public $FORMULA_ERR = null;
}

/**
 * Operations
 */
class Operations extends \LogoObjects\Types\BaseEntity
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
    public $QCCSETREF = null;
    /** @var int|float|null */
    public $WF_STATUS = null;
    /** @var int|float|null */
    public $UPDATED = null;
    /** @var RscollectionrsOprlinexml|null */
    public $REQUIREMENTS = null;
    public ?string $REQDELLIST = null;
    public ?string $FLDALS = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $PRINT_CNT = null;
    public ?string $PRINT_DATE = null;
    /** @var int|float|null */
    public $DOCOUNTING = null;
    /** @var int|float|null */
    public $DIST_TYPE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'REQUIREMENTS' => \LogoObjects\Clients\operations\RscollectionrsOprlinexml::class,
        ]);
    }
}

/**
 * OperationsQueryOptions
 */
class OperationsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var OperationsSortSpec|null */
    public $sort = null;
}

/**
 * OperationsSearchCriteria
 */
class OperationsSearchCriteria extends \LogoObjects\Support\Entity
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
    public $qccsetref = null;
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
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $wfStatus = null;
    /** @var mixed */
    public $updated = null;
    /** @var mixed */
    public $requirements = null;
    /** @var mixed */
    public $reqdellist = null;
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
    /** @var mixed */
    public $docounting = null;
    /** @var mixed */
    public $distType = null;
}

/**
 * OperationsAnalytics
 */
class OperationsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
