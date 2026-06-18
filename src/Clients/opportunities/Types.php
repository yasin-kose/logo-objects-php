<?php

declare(strict_types=1);

namespace LogoObjects\Clients\opportunities;

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
 * RscollectionrsOpphistoryxml
 */
class RscollectionrsOpphistoryxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\opportunities\RsOpphistoryxml::class],
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
 * RsOpphistoryxml
 */
class RsOpphistoryxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $SLSOPPREF = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    public ?string $RECDATE = null;
    /** @var int|float|null */
    public $RECTIME = null;
    /** @var int|float|null */
    public $STATUS = null;
    public ?string $EXPLANATION = null;
    /** @var int|float|null */
    public $CREATEDBY = null;
    public ?string $CREADEDDATE = null;
    /** @var int|float|null */
    public $CREATEDHOUR = null;
    /** @var int|float|null */
    public $CREATEDMIN = null;
    /** @var int|float|null */
    public $CREATEDSEC = null;
    /** @var int|float|null */
    public $MODIFIEDBY = null;
    public ?string $MODIFIEDDATE = null;
    /** @var int|float|null */
    public $MODIFIEDHOUR = null;
    /** @var int|float|null */
    public $MODIFIEDMIN = null;
    /** @var int|float|null */
    public $MODIFIEDSEC = null;
}

/**
 * Opportunities
 */
class Opportunities extends \LogoObjects\Types\BaseEntity
{
    public ?string $OPPNO = null;
    public ?string $DESCRIPTION = null;
    public ?string $DATE = null;
    public ?string $EXPECDATE = null;
    public ?string $CLOSEDATE = null;
    public ?string $AUXILCODE = null;
    public ?string $AUTHCODE = null;
    /** @var int|float|null */
    public $SALESMANREF = null;
    public ?string $SALESMANCODE = null;
    /** @var int|float|null */
    public $CSTVNDREF = null;
    /** @var int|float|null */
    public $CONTACTREF = null;
    /** @var int|float|null */
    public $EXPECREV = null;
    /** @var int|float|null */
    public $REVCURR = null;
    /** @var int|float|null */
    public $REVRATE = null;
    /** @var int|float|null */
    public $REVCAMOUNT = null;
    /** @var int|float|null */
    public $SUCCPROB = null;
    /** @var int|float|null */
    public $STAGE = null;
    public ?string $COMMENTS = null;
    /** @var int|float|null */
    public $CAPIBLOCK_CREATEDBY = null;
    public ?string $CAPIBLOCK_CREADEDDATE = null;
    /** @var int|float|null */
    public $CAPIBLOCK_CREATEDHOUR = null;
    /** @var int|float|null */
    public $CAPIBLOCK_CREATEDMIN = null;
    /** @var int|float|null */
    public $CAPIBLOCK_CREATEDSEC = null;
    /** @var int|float|null */
    public $CAPIBLOCK_MODIFIEDBY = null;
    public ?string $CAPIBLOCK_MODIFIEDDATE = null;
    /** @var int|float|null */
    public $CAPIBLOCK_MODIFIEDHOUR = null;
    /** @var int|float|null */
    public $CAPIBLOCK_MODIFIEDMIN = null;
    /** @var int|float|null */
    public $CAPIBLOCK_MODIFIEDSEC = null;
    /** @var int|float|null */
    public $RECSTATUS = null;
    /** @var int|float|null */
    public $REPORTRATE = null;
    /** @var int|float|null */
    public $REPORTREV = null;
    public ?string $CNTNAME = null;
    public ?string $CNTMNAME = null;
    public ?string $CNTFNAME = null;
    public ?string $CSTCODE = null;
    public ?string $CSTTITLE = null;
    public ?string $STAGEDSC = null;
    /** @var int|float|null */
    public $UPDATED = null;
    public ?string $FLDALS = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $HLOGICALREF = null;
    /** @var int|float|null */
    public $HSLSOPPREF = null;
    /** @var int|float|null */
    public $HSALESMANREF = null;
    public ?string $HRECDATE = null;
    /** @var int|float|null */
    public $HRECTIME = null;
    /** @var int|float|null */
    public $HSTATUS = null;
    public ?string $HEXPLANATION = null;
    /** @var int|float|null */
    public $HCAPIBLOCK_CREATEDBY = null;
    public ?string $HCAPIBLOCK_CREADEDDATE = null;
    /** @var int|float|null */
    public $HCAPIBLOCK_CREATEDHOUR = null;
    /** @var int|float|null */
    public $HCAPIBLOCK_CREATEDMIN = null;
    /** @var int|float|null */
    public $HCAPIBLOCK_CREATEDSEC = null;
    /** @var int|float|null */
    public $HCAPIBLOCK_MODIFIEDBY = null;
    public ?string $HCAPIBLOCK_MODIFIEDDATE = null;
    /** @var int|float|null */
    public $HCAPIBLOCK_MODIFIEDHOUR = null;
    /** @var int|float|null */
    public $HCAPIBLOCK_MODIFIEDMIN = null;
    /** @var int|float|null */
    public $HCAPIBLOCK_MODIFIEDSEC = null;
    /** @var int|float|null */
    public $OH_LOGICALREF = null;
    /** @var int|float|null */
    public $OH_SLSOPPREF = null;
    /** @var int|float|null */
    public $OH_SALESMANREF = null;
    public ?string $OH_RECDATE = null;
    /** @var int|float|null */
    public $OH_RECTIME = null;
    /** @var int|float|null */
    public $OH_STATUS = null;
    public ?string $OH_EXPLANATION = null;
    /** @var int|float|null */
    public $OH_CAPIBLOCK_CREATEDBY = null;
    public ?string $OH_CAPIBLOCK_CREADEDDA = null;
    /** @var int|float|null */
    public $OH_CAPIBLOCK_CREATEDHO = null;
    /** @var int|float|null */
    public $OH_CAPIBLOCK_CREATEDMI = null;
    /** @var int|float|null */
    public $OH_CAPIBLOCK_CREATEDSE = null;
    /** @var int|float|null */
    public $OH_CAPIBLOCK_MODIFIEDB = null;
    public ?string $OH_CAPIBLOCK_MODIFIEDD = null;
    /** @var int|float|null */
    public $OH_CAPIBLOCK_MODIFIEDH = null;
    /** @var int|float|null */
    public $OH_CAPIBLOCK_MODIFIEDM = null;
    /** @var int|float|null */
    public $OH_CAPIBLOCK_MODIFIEDS = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    /** @var int|float|null */
    public $OPPNOCHANGED = null;
    /** @var int|float|null */
    public $DOCNRREF = null;
    /** @var int|float|null */
    public $CUSTOMBRW = null;
    /** @var RscollectionrsOpphistoryxml|null */
    public $HISTORYLIST = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'HISTORYLIST' => \LogoObjects\Clients\opportunities\RscollectionrsOpphistoryxml::class,
        ]);
    }
}

/**
 * OpportunitiesQueryOptions
 */
class OpportunitiesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var OpportunitiesSortSpec|null */
    public $sort = null;
}

/**
 * OpportunitiesSearchCriteria
 */
class OpportunitiesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $oppno = null;
    /** @var mixed */
    public $description = null;
    /** @var mixed */
    public $date = null;
    /** @var mixed */
    public $expecdate = null;
    /** @var mixed */
    public $closedate = null;
    /** @var mixed */
    public $auxilcode = null;
    /** @var mixed */
    public $authcode = null;
    /** @var mixed */
    public $salesmanref = null;
    /** @var mixed */
    public $salesmancode = null;
    /** @var mixed */
    public $cstvndref = null;
    /** @var mixed */
    public $contactref = null;
    /** @var mixed */
    public $expecrev = null;
    /** @var mixed */
    public $revcurr = null;
    /** @var mixed */
    public $revrate = null;
    /** @var mixed */
    public $revcamount = null;
    /** @var mixed */
    public $succprob = null;
    /** @var mixed */
    public $stage = null;
    /** @var mixed */
    public $comments = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $capiblockCreatedby = null;
    /** @var mixed */
    public $capiblockCreadeddate = null;
    /** @var mixed */
    public $capiblockCreatedhour = null;
    /** @var mixed */
    public $capiblockCreatedmin = null;
    /** @var mixed */
    public $capiblockCreatedsec = null;
    /** @var mixed */
    public $capiblockModifiedby = null;
    /** @var mixed */
    public $capiblockModifieddate = null;
    /** @var mixed */
    public $capiblockModifiedhour = null;
    /** @var mixed */
    public $capiblockModifiedmin = null;
    /** @var mixed */
    public $capiblockModifiedsec = null;
    /** @var mixed */
    public $recstatus = null;
    /** @var mixed */
    public $textinc = null;
    /** @var mixed */
    public $reportrate = null;
    /** @var mixed */
    public $reportrev = null;
    /** @var mixed */
    public $cntname = null;
    /** @var mixed */
    public $cntmname = null;
    /** @var mixed */
    public $cntfname = null;
    /** @var mixed */
    public $cstcode = null;
    /** @var mixed */
    public $csttitle = null;
    /** @var mixed */
    public $stagedsc = null;
    /** @var mixed */
    public $updated = null;
    /** @var mixed */
    public $fldals = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $hlogicalref = null;
    /** @var mixed */
    public $hslsoppref = null;
    /** @var mixed */
    public $hsalesmanref = null;
    /** @var mixed */
    public $hrecdate = null;
    /** @var mixed */
    public $hrectime = null;
    /** @var mixed */
    public $hstatus = null;
    /** @var mixed */
    public $hexplanation = null;
    /** @var mixed */
    public $hcapiblockCreatedby = null;
    /** @var mixed */
    public $hcapiblockCreadeddate = null;
    /** @var mixed */
    public $hcapiblockCreatedhour = null;
    /** @var mixed */
    public $hcapiblockCreatedmin = null;
    /** @var mixed */
    public $hcapiblockCreatedsec = null;
    /** @var mixed */
    public $hcapiblockModifiedby = null;
    /** @var mixed */
    public $hcapiblockModifieddate = null;
    /** @var mixed */
    public $hcapiblockModifiedhour = null;
    /** @var mixed */
    public $hcapiblockModifiedmin = null;
    /** @var mixed */
    public $hcapiblockModifiedsec = null;
    /** @var mixed */
    public $ohLogicalref = null;
    /** @var mixed */
    public $ohSlsoppref = null;
    /** @var mixed */
    public $ohSalesmanref = null;
    /** @var mixed */
    public $ohRecdate = null;
    /** @var mixed */
    public $ohRectime = null;
    /** @var mixed */
    public $ohStatus = null;
    /** @var mixed */
    public $ohExplanation = null;
    /** @var mixed */
    public $ohCapiblockCreatedby = null;
    /** @var mixed */
    public $ohCapiblockCreadedda = null;
    /** @var mixed */
    public $ohCapiblockCreatedho = null;
    /** @var mixed */
    public $ohCapiblockCreatedmi = null;
    /** @var mixed */
    public $ohCapiblockCreatedse = null;
    /** @var mixed */
    public $ohCapiblockModifiedb = null;
    /** @var mixed */
    public $ohCapiblockModifiedd = null;
    /** @var mixed */
    public $ohCapiblockModifiedh = null;
    /** @var mixed */
    public $ohCapiblockModifiedm = null;
    /** @var mixed */
    public $ohCapiblockModifieds = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $textchg = null;
    /** @var mixed */
    public $oppnochanged = null;
    /** @var mixed */
    public $docnrref = null;
    /** @var mixed */
    public $custombrw = null;
    /** @var mixed */
    public $historylist = null;
}

/**
 * OpportunitiesAnalytics
 */
class OpportunitiesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
