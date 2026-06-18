<?php

declare(strict_types=1);

namespace LogoObjects\Clients\GLAccountMLDescriptions;

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
 * Glaccountmldescriptions
 */
class Glaccountmldescriptions extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $LOGICALREF = null;
    /** @var int|float|null */
    public $DOC_ID = null;
    /** @var int|float|null */
    public $DOCREF = null;
    /** @var int|float|null */
    public $FIELD_ID = null;
    /** @var int|float|null */
    public $LANG_ID = null;
    public ?string $FIELD_CONT = null;
    public ?string $DOC_CODE = null;
}

/**
 * GlaccountmldescriptionsQueryOptions
 */
class GlaccountmldescriptionsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var GlaccountmldescriptionsSortSpec|null */
    public $sort = null;
}

/**
 * GlaccountmldescriptionsSearchCriteria
 */
class GlaccountmldescriptionsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $logicalref = null;
    /** @var mixed */
    public $docId = null;
    /** @var mixed */
    public $docref = null;
    /** @var mixed */
    public $fieldId = null;
    /** @var mixed */
    public $langId = null;
    /** @var mixed */
    public $fieldCont = null;
    /** @var mixed */
    public $docCode = null;
}

/**
 * GlaccountmldescriptionsAnalytics
 */
class GlaccountmldescriptionsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
