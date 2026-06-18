<?php

declare(strict_types=1);

namespace LogoObjects\Clients\characteristics;

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
 * RscollectionrsWstcharvxml
 */
class RscollectionrsWstcharvxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\characteristics\RsWstcharvxml::class],
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
 * RsWstcharvxml
 */
class RsWstcharvxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $CHARCODEREF = null;
    /** @var int|float|null */
    public $VALNO = null;
    public ?string $CODE = null;
    public ?string $NAME = null;
}

/**
 * Characteristics
 */
class Characteristics extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $NAME = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $APPROVED = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
    /** @var RscollectionrsWstcharvxml|null */
    public $VALUES = null;
    public ?string $DELLIST = null;
    /** @var int|float|null */
    public $UPDATED = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    public ?string $ITEXT = null;
    public ?string $FLDALS = null;
    public ?string $XBUFS = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'VALUES' => \LogoObjects\Clients\characteristics\RscollectionrsWstcharvxml::class,
        ]);
    }
}

/**
 * CharacteristicsQueryOptions
 */
class CharacteristicsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var CharacteristicsSortSpec|null */
    public $sort = null;
}

/**
 * CharacteristicsSearchCriteria
 */
class CharacteristicsSearchCriteria extends \LogoObjects\Support\Entity
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
    public $approved = null;
    /** @var mixed */
    public $recordStatus = null;
    /** @var mixed */
    public $textinc = null;
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
    public $wfstatus = null;
    /** @var mixed */
    public $values = null;
    /** @var mixed */
    public $dellist = null;
    /** @var mixed */
    public $updated = null;
    /** @var mixed */
    public $textchg = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $fldals = null;
    /** @var mixed */
    public $xbufs = null;
}

/**
 * CharacteristicsAnalytics
 */
class CharacteristicsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
