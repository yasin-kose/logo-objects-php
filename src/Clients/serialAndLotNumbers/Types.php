<?php

declare(strict_types=1);

namespace LogoObjects\Clients\serialAndLotNumbers;

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
 * SerialAndLotNumbers
 */
class SerialAndLotNumbers extends \LogoObjects\Types\BaseEntity
{
    public ?string $ITEM_CODE = null;
    /** @var int|float|null */
    public $ITEMREF = null;
    /** @var int|float|null */
    public $TYPE = null;
    public ?string $CODE = null;
    public ?string $DESCRIPTION = null;
    /** @var int|float|null */
    public $STATE = null;
    /** @var int|float|null */
    public $WF_STATUS = null;
    public ?string $ORGLOGOID = null;
    public ?string $VARIANT_CODE = null;
    /** @var int|float|null */
    public $VARIANTREF = null;
    public ?string $GROUPLOTNO = null;
}

/**
 * SerialAndLotNumbersQueryOptions
 */
class SerialAndLotNumbersQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var SerialAndLotNumbersSortSpec|null */
    public $sort = null;
}

/**
 * SerialAndLotNumbersSearchCriteria
 */
class SerialAndLotNumbersSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $itemCode = null;
    /** @var mixed */
    public $itemref = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $type = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $description = null;
    /** @var mixed */
    public $state = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $wfStatus = null;
    /** @var mixed */
    public $orglogoid = null;
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
    public $variantCode = null;
    /** @var mixed */
    public $variantref = null;
    /** @var mixed */
    public $grouplotno = null;
}

/**
 * SerialAndLotNumbersAnalytics
 */
class SerialAndLotNumbersAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
