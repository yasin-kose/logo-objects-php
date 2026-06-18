<?php

declare(strict_types=1);

namespace LogoObjects\Clients\authorizationCodes;

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
 * AuthorizationCodes
 */
class AuthorizationCodes extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $CODE_TYPE = null;
    /** @var int|float|null */
    public $SPE_CODE_TYPE = null;
    public ?string $CODE = null;
    public ?string $DEFINITION = null;
    public ?string $DEFINITION2 = null;
    public ?string $DEFINITION3 = null;
    /** @var int|float|null */
    public $COLOR = null;
    /** @var int|float|null */
    public $WINCOLOR = null;
    /** @var int|float|null */
    public $SPE_CODE_TYPE1 = null;
    /** @var int|float|null */
    public $SPE_CODE_TYPE2 = null;
    /** @var int|float|null */
    public $SPE_CODE_TYPE3 = null;
    /** @var int|float|null */
    public $SPE_CODE_TYPE4 = null;
    /** @var int|float|null */
    public $SPE_CODE_TYPE5 = null;
    public ?string $GLOBAL_ID = null;
}

/**
 * AuthorizationCodesQueryOptions
 */
class AuthorizationCodesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var AuthorizationCodesSortSpec|null */
    public $sort = null;
}

/**
 * AuthorizationCodesSearchCriteria
 */
class AuthorizationCodesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $codeType = null;
    /** @var mixed */
    public $speCodeType = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $definition = null;
    /** @var mixed */
    public $definition2 = null;
    /** @var mixed */
    public $definition3 = null;
    /** @var mixed */
    public $color = null;
    /** @var mixed */
    public $wincolor = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $speCodeType1 = null;
    /** @var mixed */
    public $speCodeType2 = null;
    /** @var mixed */
    public $speCodeType3 = null;
    /** @var mixed */
    public $speCodeType4 = null;
    /** @var mixed */
    public $speCodeType5 = null;
    /** @var mixed */
    public $globalId = null;
}

/**
 * AuthorizationCodesAnalytics
 */
class AuthorizationCodesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
