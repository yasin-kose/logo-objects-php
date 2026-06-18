<?php

declare(strict_types=1);

namespace LogoObjects\Clients\overheadAccounts;

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
 * OverheadAccounts
 */
class OverheadAccounts extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $DESCRIPTION = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUXIL_CODE2 = null;
    public ?string $AUXIL_CODE3 = null;
    public ?string $AUXIL_CODE4 = null;
    public ?string $AUXIL_CODE5 = null;
    public ?string $AUTH_CODE = null;
    public ?string $UNIT = null;
    /** @var int|float|null */
    public $ADDINFOREF = null;
    /** @var int|float|null */
    public $EXTENREF = null;
    public ?string $XBUFS = null;
}

/**
 * OverheadAccountsQueryOptions
 */
class OverheadAccountsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var OverheadAccountsSortSpec|null */
    public $sort = null;
}

/**
 * OverheadAccountsSearchCriteria
 */
class OverheadAccountsSearchCriteria extends \LogoObjects\Support\Entity
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
    public $auxilCode2 = null;
    /** @var mixed */
    public $auxilCode3 = null;
    /** @var mixed */
    public $auxilCode4 = null;
    /** @var mixed */
    public $auxilCode5 = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $unit = null;
    /** @var mixed */
    public $addinforef = null;
    /** @var mixed */
    public $extenref = null;
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
    public $xmlAttribute = null;
}

/**
 * OverheadAccountsAnalytics
 */
class OverheadAccountsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
