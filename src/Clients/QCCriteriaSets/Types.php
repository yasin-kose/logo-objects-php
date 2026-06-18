<?php

declare(strict_types=1);

namespace LogoObjects\Clients\QCCriteriaSets;

/**
 * RscollectionrsQccsetlinexml
 */
class RscollectionrsQccsetlinexml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\QCCriteriaSets\RsQccsetlinexml::class],
        ]);
    }
}

/**
 * RscollectionrsQccsetvalxml
 */
class RscollectionrsQccsetvalxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\QCCriteriaSets\RsQccsetvalxml::class],
        ]);
    }
}

/**
 * RscollectionrsQccsettrgxml
 */
class RscollectionrsQccsettrgxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\QCCriteriaSets\RsQccsettrgxml::class],
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
 * RsQccsetlinexml
 */
class RsQccsetlinexml extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $NAME = null;
    /** @var int|float|null */
    public $SETREF = null;
    /** @var int|float|null */
    public $QTYPE = null;
    public ?string $QUNIT = null;
    public ?string $TOOLCODE = null;
    /** @var int|float|null */
    public $CONTROLLER = null;
    /** @var int|float|null */
    public $INSPPOINT = null;
    /** @var int|float|null */
    public $INSPFICHES1 = null;
    /** @var int|float|null */
    public $INSPFICHES2 = null;
    /** @var int|float|null */
    public $INSPFICHES3 = null;
    public ?string $IMPORTANCE = null;
    /** @var int|float|null */
    public $FREQUENCY = null;
    /** @var int|float|null */
    public $COUNTER = null;
    /** @var int|float|null */
    public $SAMPLESIZE = null;
    /** @var int|float|null */
    public $NOMVAL = null;
    /** @var int|float|null */
    public $MINVAL = null;
    /** @var int|float|null */
    public $MAXVAL = null;
    /** @var int|float|null */
    public $MINTOL = null;
    /** @var int|float|null */
    public $MAXTOL = null;
    public ?string $EXPLINE = null;
    /** @var int|float|null */
    public $CONFORMRATE = null;
    /** @var int|float|null */
    public $LINENO = null;
    /** @var int|float|null */
    public $IMPORTANCEVAL = null;
    /** @var RscollectionrsQccsetvalxml|null */
    public $VAL_LIST = null;
    /** @var int|float|null */
    public $TOOLREF = null;
    public ?string $DELLIST = null;
    /** @var RscollectionrsQccsettrgxml|null */
    public $TARGETLIST = null;
    public ?string $TARGETDELLIST = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    public ?string $ITEXT = null;
    public ?string $FLDALS = null;
    public ?string $TCODE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'VAL_LIST' => \LogoObjects\Clients\QCCriteriaSets\RscollectionrsQccsetvalxml::class,
            'TARGETLIST' => \LogoObjects\Clients\QCCriteriaSets\RscollectionrsQccsettrgxml::class,
        ]);
    }
}

/**
 * RsQccsetvalxml
 */
class RsQccsetvalxml extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $NAME = null;
    /** @var int|float|null */
    public $SETREF = null;
    /** @var int|float|null */
    public $LINEREF = null;
    /** @var int|float|null */
    public $TARGETFLAG = null;
    /** @var int|float|null */
    public $LINENO = null;
}

/**
 * RsQccsettrgxml
 */
class RsQccsettrgxml extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $NAME = null;
    /** @var int|float|null */
    public $SETREF = null;
    /** @var int|float|null */
    public $LINEREF = null;
    /** @var int|float|null */
    public $TARGETFLAG = null;
    /** @var int|float|null */
    public $LINENO = null;
}

/**
 * Qccriteriasets
 */
class Qccriteriasets extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $NAME = null;
    /** @var int|float|null */
    public $ITYPE = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
    /** @var RscollectionrsQccsetlinexml|null */
    public $LINELIST = null;
    public ?string $DELLINELIST = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    public ?string $ITEXT = null;
    public ?string $FLDALS = null;
    public ?string $XBUFS = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'LINELIST' => \LogoObjects\Clients\QCCriteriaSets\RscollectionrsQccsetlinexml::class,
        ]);
    }
}

/**
 * QccriteriasetsQueryOptions
 */
class QccriteriasetsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var QccriteriasetsSortSpec|null */
    public $sort = null;
}

/**
 * QccriteriasetsSearchCriteria
 */
class QccriteriasetsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $name = null;
    /** @var mixed */
    public $itype = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
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
    public $textinc = null;
    /** @var mixed */
    public $wfstatus = null;
    /** @var mixed */
    public $linelist = null;
    /** @var mixed */
    public $dellinelist = null;
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
 * QccriteriasetsAnalytics
 */
class QccriteriasetsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
