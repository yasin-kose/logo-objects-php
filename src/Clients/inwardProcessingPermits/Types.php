<?php

declare(strict_types=1);

namespace LogoObjects\Clients\inwardProcessingPermits;

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
 * RscollectionrsDiiblinexml
 */
class RscollectionrsDiiblinexml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\inwardProcessingPermits\RsDiiblinexml::class],
        ]);
    }
}

/**
 * RscollectionrsDiibbomlinexml
 */
class RscollectionrsDiibbomlinexml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\inwardProcessingPermits\RsDiibbomlinexml::class],
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
 * RsDiiblinexml
 */
class RsDiiblinexml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $DIIBFICHE_ORGREF = null;
    /** @var int|float|null */
    public $LINETYPE = null;
    /** @var int|float|null */
    public $LINENO = null;
    public ?string $GTIPCODE = null;
    /** @var int|float|null */
    public $UOMREF = null;
    /** @var int|float|null */
    public $USREF = null;
    /** @var int|float|null */
    public $AMOUNT = null;
    /** @var int|float|null */
    public $TRNET = null;
    /** @var int|float|null */
    public $TRCURR = null;
    /** @var int|float|null */
    public $USAGEAMOUNT = null;
    public ?string $LINEEXP = null;
    public ?string $AUXIL_CODE = null;
    /** @var RscollectionrsDiibbomlinexml|null */
    public $BOM_LINES = null;
    public ?string $BOMDELLIST = null;
    /** @var int|float|null */
    public $GTIPCODEREF = null;
    public ?string $GTIPDESC = null;
    public ?string $USETCODE = null;
    public ?string $UNITCODE = null;
    /** @var int|float|null */
    public $CUROP = null;
    public ?string $XBUFS = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'BOM_LINES' => \LogoObjects\Clients\inwardProcessingPermits\RscollectionrsDiibbomlinexml::class,
        ]);
    }
}

/**
 * RsDiibbomlinexml
 */
class RsDiibbomlinexml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $DIIBFICHEREF = null;
    /** @var int|float|null */
    public $EXPLINE_ORGREF = null;
    /** @var int|float|null */
    public $IMPLINE_ORGREF = null;
    /** @var int|float|null */
    public $LINENO = null;
    /** @var int|float|null */
    public $AMOUNT = null;
    /** @var int|float|null */
    public $SCRAPPER = null;
    public ?string $GTIPCODE = null;
    public ?string $GTIPDESC = null;
    public ?string $USETCODE = null;
    public ?string $UNITCODE = null;
}

/**
 * InwardProcessingPermits
 */
class InwardProcessingPermits extends \LogoObjects\Types\BaseEntity
{
    public ?string $FICHENO = null;
    public ?string $BEGDATE = null;
    public ?string $ENDDATE = null;
    public ?string $DOCODE = null;
    /** @var int|float|null */
    public $STATUS = null;
    public ?string $AUXIL_CODE = null;
    public ?string $CYPHCODE = null;
    /** @var int|float|null */
    public $TRCURR = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    /** @var int|float|null */
    public $PRINTCNT = null;
    public ?string $PRINT_DATE = null;
    /** @var RscollectionrsDiiblinexml|null */
    public $IMPORT_LINES = null;
    public ?string $IMPDELLIST = null;
    /** @var RscollectionrsDiiblinexml|null */
    public $EXPORT_LINES = null;
    public ?string $EXPDELLIST = null;
    /** @var int|float|null */
    public $UPDATED = null;
    /** @var int|float|null */
    public $IMLNCOUNT = null;
    /** @var int|float|null */
    public $EXLNCOUNT = null;
    /** @var int|float|null */
    public $CUROP = null;
    /** @var int|float|null */
    public $DOCNRREF = null;
    public ?string $XBUFS = null;
    public ?string $DOCALS = null;
    /** @var int|float|null */
    public $WARNACTIVE = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $FCNOCHANGED = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'IMPORT_LINES' => \LogoObjects\Clients\inwardProcessingPermits\RscollectionrsDiiblinexml::class,
            'EXPORT_LINES' => \LogoObjects\Clients\inwardProcessingPermits\RscollectionrsDiiblinexml::class,
        ]);
    }
}

/**
 * InwardProcessingPermitsQueryOptions
 */
class InwardProcessingPermitsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var InwardProcessingPermitsSortSpec|null */
    public $sort = null;
}

/**
 * InwardProcessingPermitsSearchCriteria
 */
class InwardProcessingPermitsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $ficheno = null;
    /** @var mixed */
    public $begdate = null;
    /** @var mixed */
    public $enddate = null;
    /** @var mixed */
    public $docode = null;
    /** @var mixed */
    public $status = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $cyphcode = null;
    /** @var mixed */
    public $trcurr = null;
    /** @var mixed */
    public $cancelled = null;
    /** @var mixed */
    public $printcnt = null;
    /** @var mixed */
    public $printDate = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
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
    public $importLines = null;
    /** @var mixed */
    public $impdellist = null;
    /** @var mixed */
    public $exportLines = null;
    /** @var mixed */
    public $expdellist = null;
    /** @var mixed */
    public $updated = null;
    /** @var mixed */
    public $imlncount = null;
    /** @var mixed */
    public $exlncount = null;
    /** @var mixed */
    public $curop = null;
    /** @var mixed */
    public $docnrref = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $docals = null;
    /** @var mixed */
    public $warnactive = null;
    /** @var mixed */
    public $textchg = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $fcnochanged = null;
}

/**
 * InwardProcessingPermitsAnalytics
 */
class InwardProcessingPermitsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
