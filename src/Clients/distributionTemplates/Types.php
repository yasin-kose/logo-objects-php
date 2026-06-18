<?php

declare(strict_types=1);

namespace LogoObjects\Clients\distributionTemplates;

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
 * RscollectionrsAccdisttemplnxml
 */
class RscollectionrsAccdisttemplnxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\distributionTemplates\RsAccdisttemplnxml::class],
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
 * RsAccdisttemplnxml
 */
class RsAccdisttemplnxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $DISTTEMPREF = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    /** @var int|float|null */
    public $DISTFACT = null;
    /** @var int|float|null */
    public $LINENR = null;
    public ?string $CENTERCODE = null;
    public ?string $PROJECTCODE = null;
}

/**
 * DistributionTemplates
 */
class DistributionTemplates extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $ACCOUNTREF = null;
    public ?string $CODE = null;
    public ?string $NAME = null;
    public ?string $ACC_CODE = null;
    public ?string $SPECODE = null;
    public ?string $CYPHCODE = null;
    /** @var int|float|null */
    public $PRIORITY = null;
    public ?string $BEGDATE = null;
    public ?string $ENDDATE = null;
    /** @var int|float|null */
    public $BRANCH = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    public ?string $DATE_CREADED = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
    /** @var RscollectionrsAccdisttemplnxml|null */
    public $LINELIST = null;
    public ?string $DELLIST = null;
    /** @var int|float|null */
    public $CURROP = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'LINELIST' => \LogoObjects\Clients\distributionTemplates\RscollectionrsAccdisttemplnxml::class,
        ]);
    }
}

/**
 * DistributionTemplatesQueryOptions
 */
class DistributionTemplatesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var DistributionTemplatesSortSpec|null */
    public $sort = null;
}

/**
 * DistributionTemplatesSearchCriteria
 */
class DistributionTemplatesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $accountref = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $name = null;
    /** @var mixed */
    public $accCode = null;
    /** @var mixed */
    public $specode = null;
    /** @var mixed */
    public $cyphcode = null;
    /** @var mixed */
    public $priority = null;
    /** @var mixed */
    public $begdate = null;
    /** @var mixed */
    public $enddate = null;
    /** @var mixed */
    public $branch = null;
    /** @var mixed */
    public $department = null;
    /** @var mixed */
    public $createdBy = null;
    /** @var mixed */
    public $dateCreaded = null;
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
    public $textinc = null;
    /** @var mixed */
    public $wfstatus = null;
    /** @var mixed */
    public $linelist = null;
    /** @var mixed */
    public $dellist = null;
    /** @var mixed */
    public $currop = null;
}

/**
 * DistributionTemplatesAnalytics
 */
class DistributionTemplatesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
