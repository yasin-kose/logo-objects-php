<?php

declare(strict_types=1);

namespace LogoObjects\Clients\safeDeposits;

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
 * SafeDeposits
 */
class SafeDeposits extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $DESCRIPTION = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    public ?string $USAGE_NOTE = null;
    public ?string $ADDRESS1 = null;
    public ?string $ADDRESS2 = null;
    public ?string $XBUFS = null;
    public ?string $GL_CODE1 = null;
    /** @var int|float|null */
    public $ACCOUNTREF1 = null;
    public ?string $OHP_CODE1 = null;
    /** @var int|float|null */
    public $CENTERREF1 = null;
    public ?string $GL_CODE2 = null;
    /** @var int|float|null */
    public $ACCOUNTREF2 = null;
    public ?string $OHP_CODE2 = null;
    /** @var int|float|null */
    public $CENTERREF2 = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    /** @var int|float|null */
    public $CCURRENCY = null;
    /** @var int|float|null */
    public $CURR_RATE_TYPE = null;
    /** @var int|float|null */
    public $FIXED_CURR_TYPE = null;
    public ?string $GL_CODE3 = null;
    /** @var int|float|null */
    public $ACCOUNTREF3 = null;
    public ?string $OHP_CODE3 = null;
    /** @var int|float|null */
    public $CENTERREF3 = null;
    public ?string $GL_CODE4 = null;
    /** @var int|float|null */
    public $ACCOUNTREF4 = null;
    public ?string $OHP_CODE4 = null;
    /** @var int|float|null */
    public $CENTERREF4 = null;
    public ?string $GL_CODE5 = null;
    /** @var int|float|null */
    public $ACCOUNTREF5 = null;
    public ?string $OHP_CODE5 = null;
    /** @var int|float|null */
    public $CENTERREF5 = null;
    /** @var int|float|null */
    public $DIVISION = null;
    public ?string $GUID = null;
}

/**
 * SafeDepositsQueryOptions
 */
class SafeDepositsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var SafeDepositsSortSpec|null */
    public $sort = null;
}

/**
 * SafeDepositsSearchCriteria
 */
class SafeDepositsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $recordStatus = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $description = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $usageNote = null;
    /** @var mixed */
    public $address1 = null;
    /** @var mixed */
    public $address2 = null;
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
    public $dataReference = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $glCode1 = null;
    /** @var mixed */
    public $accountref1 = null;
    /** @var mixed */
    public $ohpCode1 = null;
    /** @var mixed */
    public $centerref1 = null;
    /** @var mixed */
    public $glCode2 = null;
    /** @var mixed */
    public $accountref2 = null;
    /** @var mixed */
    public $ohpCode2 = null;
    /** @var mixed */
    public $centerref2 = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $projectCode = null;
    /** @var mixed */
    public $projectref = null;
    /** @var mixed */
    public $ccurrency = null;
    /** @var mixed */
    public $currRateType = null;
    /** @var mixed */
    public $fixedCurrType = null;
    /** @var mixed */
    public $glCode3 = null;
    /** @var mixed */
    public $accountref3 = null;
    /** @var mixed */
    public $ohpCode3 = null;
    /** @var mixed */
    public $centerref3 = null;
    /** @var mixed */
    public $glCode4 = null;
    /** @var mixed */
    public $accountref4 = null;
    /** @var mixed */
    public $ohpCode4 = null;
    /** @var mixed */
    public $centerref4 = null;
    /** @var mixed */
    public $glCode5 = null;
    /** @var mixed */
    public $accountref5 = null;
    /** @var mixed */
    public $ohpCode5 = null;
    /** @var mixed */
    public $centerref5 = null;
    /** @var mixed */
    public $division = null;
    /** @var mixed */
    public $guid = null;
}

/**
 * SafeDepositsAnalytics
 */
class SafeDepositsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
