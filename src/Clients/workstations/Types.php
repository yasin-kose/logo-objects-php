<?php

declare(strict_types=1);

namespace LogoObjects\Clients\workstations;

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
 * RscollectionrsWstcharcxml
 */
class RscollectionrsWstcharcxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\workstations\RsWstcharcxml::class],
        ]);
    }
}

/**
 * RscollectionrsWstcharvxml14022
 */
class RscollectionrsWstcharvxml14022 extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\workstations\RsWstcharvxml14022::class],
        ]);
    }
}

/**
 * RscollectionrsWsstopcxml
 */
class RscollectionrsWsstopcxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\workstations\RsWsstopcxml::class],
        ]);
    }
}

/**
 * RscollectionrsWsmoldreqxml
 */
class RscollectionrsWsmoldreqxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\workstations\RsWsmoldreqxml::class],
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
 * RsWstcharcxml
 */
class RsWstcharcxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $ITEMREF = null;
    /** @var int|float|null */
    public $CHARCODEREF = null;
    /** @var int|float|null */
    public $CHARVALREF = null;
    /** @var int|float|null */
    public $LINENR = null;
    /** @var int|float|null */
    public $MATRIXLOC = null;
    /** @var int|float|null */
    public $PRIORITY = null;
    public ?string $CODE = null;
    /** @var RscollectionrsWstcharvxml14022|null */
    public $VALUES = null;
    public ?string $DLIST = null;
    public ?string $CNAME = null;
    public ?string $VCODE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'VALUES' => \LogoObjects\Clients\workstations\RscollectionrsWstcharvxml14022::class,
        ]);
    }
}

/**
 * RsWstcharvxml14022
 */
class RsWstcharvxml14022 extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $ITEMREF = null;
    /** @var int|float|null */
    public $CHARCODEREF = null;
    /** @var int|float|null */
    public $CHARVALREF = null;
    /** @var int|float|null */
    public $LINENR = null;
    /** @var int|float|null */
    public $MATRIXLOC = null;
    /** @var int|float|null */
    public $PRIORITY = null;
    public ?string $VLIST = null;
    public ?string $DLIST = null;
    public ?string $CCODE = null;
    public ?string $CNAME = null;
    public ?string $CODE = null;
}

/**
 * RsWsstopcxml
 */
class RsWsstopcxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $WSREF = null;
    /** @var int|float|null */
    public $CAUSEREF = null;
    /** @var int|float|null */
    public $AFFECTSCOST = null;
    /** @var int|float|null */
    public $AFFECTSPLAN = null;
    /** @var int|float|null */
    public $LOGICALREF = null;
    public ?string $CODE = null;
    public ?string $NAME = null;
    /** @var int|float|null */
    public $AFFECT_COST = null;
}

/**
 * RsWsmoldreqxml
 */
class RsWsmoldreqxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $WSREF = null;
    /** @var int|float|null */
    public $MOLDREF = null;
    public ?string $ITEMCODE = null;
    public ?string $ITEMNAME = null;
    public ?string $ITEMNAME2 = null;
}

/**
 * Workstations
 */
class Workstations extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $NAME = null;
    /** @var int|float|null */
    public $TYPE = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $FACTORYDIVNR = null;
    /** @var int|float|null */
    public $FACTORYNR = null;
    /** @var int|float|null */
    public $CALENDARREF = null;
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
    public $WFSTATUS = null;
    /** @var int|float|null */
    public $IN_INVENNR = null;
    /** @var int|float|null */
    public $OUT_INVENNR = null;
    public ?string $SHIFT_GRP = null;
    /** @var int|float|null */
    public $UPDATED = null;
    public ?string $GL_CODE = null;
    public ?string $OHP_CODE = null;
    /** @var RscollectionrsWstcharcxml|null */
    public $CHARACTERISTICS = null;
    public ?string $ASVALLIST = null;
    /** @var RscollectionrsWsstopcxml|null */
    public $STOP_CAUSES = null;
    public ?string $FLDALS = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    /** @var int|float|null */
    public $XBUFS = null;
    /** @var int|float|null */
    public $HOURDIFFACCREF = null;
    public ?string $HOUR_DIFF_GL_CODE = null;
    /** @var int|float|null */
    public $HOURDIFFCENTER = null;
    public ?string $HOUR_DIFF_OHP_CODE = null;
    /** @var int|float|null */
    public $PAYDIFFREF = null;
    public ?string $PAY_DIFF_GL_CODE = null;
    /** @var int|float|null */
    public $PAYCENTER = null;
    public ?string $PAY_OHP_CODE = null;
    /** @var RscollectionrsWsmoldreqxml|null */
    public $MOLDREQLIST = null;
    public ?string $DELMOLDREQLIST = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'CHARACTERISTICS' => \LogoObjects\Clients\workstations\RscollectionrsWstcharcxml::class,
            'STOP_CAUSES' => \LogoObjects\Clients\workstations\RscollectionrsWsstopcxml::class,
            'MOLDREQLIST' => \LogoObjects\Clients\workstations\RscollectionrsWsmoldreqxml::class,
        ]);
    }
}

/**
 * WorkstationsQueryOptions
 */
class WorkstationsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var WorkstationsSortSpec|null */
    public $sort = null;
}

/**
 * WorkstationsSearchCriteria
 */
class WorkstationsSearchCriteria extends \LogoObjects\Support\Entity
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
    public $factorydivnr = null;
    /** @var mixed */
    public $factorynr = null;
    /** @var mixed */
    public $calendarref = null;
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
    public $imageinc = null;
    /** @var mixed */
    public $wfstatus = null;
    /** @var mixed */
    public $inInvennr = null;
    /** @var mixed */
    public $outInvennr = null;
    /** @var mixed */
    public $shiftGrp = null;
    /** @var mixed */
    public $updated = null;
    /** @var mixed */
    public $glCode = null;
    /** @var mixed */
    public $ohpCode = null;
    /** @var mixed */
    public $characteristics = null;
    /** @var mixed */
    public $asvallist = null;
    /** @var mixed */
    public $stopCauses = null;
    /** @var mixed */
    public $fldals = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $textchg = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $hourdiffaccref = null;
    /** @var mixed */
    public $hourDiffGlCode = null;
    /** @var mixed */
    public $hourdiffcenter = null;
    /** @var mixed */
    public $hourDiffOhpCode = null;
    /** @var mixed */
    public $paydiffref = null;
    /** @var mixed */
    public $payDiffGlCode = null;
    /** @var mixed */
    public $paycenter = null;
    /** @var mixed */
    public $payOhpCode = null;
    /** @var mixed */
    public $moldreqlist = null;
    /** @var mixed */
    public $delmoldreqlist = null;
}

/**
 * WorkstationsAnalytics
 */
class WorkstationsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
