<?php

declare(strict_types=1);

namespace LogoObjects\Clients\employeeGroups;

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
 * RscollectionrsEmpllistxml
 */
class RscollectionrsEmpllistxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\employeeGroups\RsEmpllistxml::class],
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
 * RsEmpllistxml
 */
class RsEmpllistxml extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $DEFINITION = null;
    /** @var int|float|null */
    public $REF = null;
    /** @var int|float|null */
    public $ASSREF = null;
    /** @var int|float|null */
    public $PRIORITY = null;
    /** @var int|float|null */
    public $DOM_SHFT_GRP = null;
}

/**
 * EmployeeGroups
 */
class EmployeeGroups extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $NAME = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $FACTORYNR = null;
    /** @var int|float|null */
    public $APPROVED = null;
    /** @var int|float|null */
    public $OPERATION_TIME = null;
    /** @var int|float|null */
    public $HOURLY_STD_COST = null;
    /** @var int|float|null */
    public $HOURLY_STDRP_COST = null;
    /** @var int|float|null */
    public $ACCOUNTREF = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    /** @var int|float|null */
    public $HOURS_CREATED = null;
    /** @var int|float|null */
    public $HOURS_MODIFIED = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
    /** @var int|float|null */
    public $UPDATED = null;
    public ?string $GL_CODE = null;
    public ?string $OHP_CODE = null;
    /** @var RscollectionrsEmpllistxml|null */
    public $EMPLOYEES = null;
    public ?string $EMPDELLIST = null;
    public ?string $FLDALS = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    public ?string $XBUFS = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'EMPLOYEES' => \LogoObjects\Clients\employeeGroups\RscollectionrsEmpllistxml::class,
        ]);
    }
}

/**
 * EmployeeGroupsQueryOptions
 */
class EmployeeGroupsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var EmployeeGroupsSortSpec|null */
    public $sort = null;
}

/**
 * EmployeeGroupsSearchCriteria
 */
class EmployeeGroupsSearchCriteria extends \LogoObjects\Support\Entity
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
    public $factorynr = null;
    /** @var mixed */
    public $approved = null;
    /** @var mixed */
    public $operationTime = null;
    /** @var mixed */
    public $hourlyStdCost = null;
    /** @var mixed */
    public $hourlyStdrpCost = null;
    /** @var mixed */
    public $accountref = null;
    /** @var mixed */
    public $centerref = null;
    /** @var mixed */
    public $recordStatus = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $createdBy = null;
    /** @var mixed */
    public $dateCreated = null;
    /** @var mixed */
    public $hoursCreated = null;
    /** @var mixed */
    public $minCreated = null;
    /** @var mixed */
    public $secCreated = null;
    /** @var mixed */
    public $modifiedBy = null;
    /** @var mixed */
    public $dateModified = null;
    /** @var mixed */
    public $hoursModified = null;
    /** @var mixed */
    public $minModified = null;
    /** @var mixed */
    public $secModified = null;
    /** @var mixed */
    public $textinc = null;
    /** @var mixed */
    public $imageinc = null;
    /** @var mixed */
    public $wfstatus = null;
    /** @var mixed */
    public $updated = null;
    /** @var mixed */
    public $glCode = null;
    /** @var mixed */
    public $ohpCode = null;
    /** @var mixed */
    public $employees = null;
    /** @var mixed */
    public $empdellist = null;
    /** @var mixed */
    public $fldals = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $textchg = null;
    /** @var mixed */
    public $xbufs = null;
}

/**
 * EmployeeGroupsAnalytics
 */
class EmployeeGroupsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
