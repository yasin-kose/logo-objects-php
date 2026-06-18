<?php

declare(strict_types=1);

namespace LogoObjects\Clients\importDistributionSlips;

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
 * RscollectionrsEximdistlnxml
 */
class RscollectionrsEximdistlnxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\importDistributionSlips\RsEximdistlnxml::class],
        ]);
    }
}

/**
 * RscollectionrsEximdistpeglnxml
 */
class RscollectionrsEximdistpeglnxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\importDistributionSlips\RsEximdistpeglnxml::class],
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
 * RsEximdistlnxml
 */
class RsEximdistlnxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $SRVREF = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $FTIME = null;
    /** @var int|float|null */
    public $SOURCEINDEX = null;
    /** @var int|float|null */
    public $EXIMINFOREF = null;
    /** @var int|float|null */
    public $EXIMDISTFCREF = null;
    /** @var int|float|null */
    public $PROCESSNR = null;
    /** @var int|float|null */
    public $SRVTRANSREF = null;
    /** @var int|float|null */
    public $LINENR = null;
    /** @var int|float|null */
    public $DISTTOTAL = null;
    /** @var int|float|null */
    public $SRVACCREF = null;
    /** @var int|float|null */
    public $SRVCENTERREF = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
    /** @var int|float|null */
    public $SRVTOTAL = null;
    /** @var int|float|null */
    public $DISTEDTOTAL = null;
    public ?string $SRVCODE = null;
    public ?string $SRCNAME = null;
    /** @var int|float|null */
    public $SRVDISTTYPE = null;
    public ?string $FICHENO = null;
    /** @var RscollectionrsEximdistpeglnxml|null */
    public $PEG_LINES = null;
    public ?string $PEGDELLIST = null;
    /** @var int|float|null */
    public $FICHETYPE = null;
    /** @var int|float|null */
    public $SRVINVLINENR = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'PEG_LINES' => \LogoObjects\Clients\importDistributionSlips\RscollectionrsEximdistpeglnxml::class,
        ]);
    }
}

/**
 * RsEximdistpeglnxml
 */
class RsEximdistpeglnxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $EXIMINFOREF = null;
    /** @var int|float|null */
    public $EXIMDISTFCREF = null;
    /** @var int|float|null */
    public $EXIMDISTLNREF = null;
    /** @var int|float|null */
    public $PROCESSNR = null;
    /** @var int|float|null */
    public $SRVTRANSREF = null;
    /** @var int|float|null */
    public $STTRANSREF = null;
    /** @var int|float|null */
    public $LINENR = null;
    /** @var int|float|null */
    public $ITEMREF = null;
    /** @var int|float|null */
    public $TOTALAMNT = null;
    /** @var int|float|null */
    public $UNITPRICE = null;
    /** @var int|float|null */
    public $ADDEXPENSE = null;
    /** @var int|float|null */
    public $ISDISTRIBUTED = null;
    /** @var int|float|null */
    public $STACCREF = null;
    /** @var int|float|null */
    public $STCENTERREF = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
    public ?string $FICHENO = null;
    public ?string $ITEMCODE = null;
    public ?string $ITEMNAME = null;
    public ?string $ITEMMAINUNITE = null;
    /** @var int|float|null */
    public $IMPPRICE = null;
    /** @var int|float|null */
    public $VARIANTREF = null;
    public ?string $VARIANTCODE = null;
    public ?string $VARIANTNAME = null;
    /** @var int|float|null */
    public $ADDRPEXPENSE = null;
    /** @var int|float|null */
    public $DISTTOTAL = null;
    /** @var int|float|null */
    public $INVOICELNNO = null;
}

/**
 * ImportDistributionSlips
 */
class ImportDistributionSlips extends \LogoObjects\Types\BaseEntity
{
    public ?string $FICHENO = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $FTIME = null;
    public ?string $DOCODE = null;
    public ?string $SPECODE = null;
    public ?string $CYPHCODE = null;
    /** @var int|float|null */
    public $SOURCEINDEX = null;
    /** @var int|float|null */
    public $FACTORYNR = null;
    /** @var int|float|null */
    public $BRANCH = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $EXIMINFOREF = null;
    /** @var int|float|null */
    public $PROCESSNR = null;
    /** @var int|float|null */
    public $ACCOUNTED = null;
    /** @var int|float|null */
    public $ACCFICHEREF = null;
    /** @var int|float|null */
    public $ACCOUNTEDCNT = null;
    /** @var int|float|null */
    public $PRINT_COUNTER = null;
    public ?string $PRINT_DATE = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
    public ?string $EXIMINFO_FILECODE = null;
    public ?string $EXIMINFO_FILENAME = null;
    /** @var int|float|null */
    public $EXIMINFOINVREF = null;
    /** @var RscollectionrsEximdistlnxml|null */
    public $TRANSACTIONS = null;
    public ?string $DELLIST = null;
    public ?string $DOCALS = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $DOCNRREF = null;
    /** @var int|float|null */
    public $LINECNT = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $FCNOCHANGED = null;
    /** @var int|float|null */
    public $CURREDLNSRVREF = null;
    public ?string $CURREDLNPEGLIST = null;
    /** @var int|float|null */
    public $EXIM_FILELINENR = null;
    /** @var int|float|null */
    public $APPROVE = null;
    public ?string $APPROVE_DATE = null;
    /** @var int|float|null */
    public $ACC_FICHE_SITEID = null;
    /** @var int|float|null */
    public $EISRVDSTTYP = null;
    /** @var int|float|null */
    public $CANCEL_AUTO_GL_PROC = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'TRANSACTIONS' => \LogoObjects\Clients\importDistributionSlips\RscollectionrsEximdistlnxml::class,
        ]);
    }
}

/**
 * ImportDistributionSlipsQueryOptions
 */
class ImportDistributionSlipsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ImportDistributionSlipsSortSpec|null */
    public $sort = null;
}

/**
 * ImportDistributionSlipsSearchCriteria
 */
class ImportDistributionSlipsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $ficheno = null;
    /** @var mixed */
    public $date = null;
    /** @var mixed */
    public $ftime = null;
    /** @var mixed */
    public $docode = null;
    /** @var mixed */
    public $specode = null;
    /** @var mixed */
    public $cyphcode = null;
    /** @var mixed */
    public $sourceindex = null;
    /** @var mixed */
    public $factorynr = null;
    /** @var mixed */
    public $branch = null;
    /** @var mixed */
    public $department = null;
    /** @var mixed */
    public $eximinforef = null;
    /** @var mixed */
    public $processnr = null;
    /** @var mixed */
    public $accounted = null;
    /** @var mixed */
    public $accficheref = null;
    /** @var mixed */
    public $accountedcnt = null;
    /** @var mixed */
    public $printCounter = null;
    /** @var mixed */
    public $printDate = null;
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
    public $textinc = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $wfstatus = null;
    /** @var mixed */
    public $eximinfoFilecode = null;
    /** @var mixed */
    public $eximinfoFilename = null;
    /** @var mixed */
    public $eximinfoinvref = null;
    /** @var mixed */
    public $transactions = null;
    /** @var mixed */
    public $dellist = null;
    /** @var mixed */
    public $docals = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $docnrref = null;
    /** @var mixed */
    public $linecnt = null;
    /** @var mixed */
    public $textchg = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $fcnochanged = null;
    /** @var mixed */
    public $curredlnsrvref = null;
    /** @var mixed */
    public $curredlnpeglist = null;
    /** @var mixed */
    public $eximFilelinenr = null;
    /** @var mixed */
    public $approve = null;
    /** @var mixed */
    public $approveDate = null;
    /** @var mixed */
    public $accFicheSiteid = null;
    /** @var mixed */
    public $eisrvdsttyp = null;
    /** @var mixed */
    public $cancelAutoGlProc = null;
}

/**
 * ImportDistributionSlipsAnalytics
 */
class ImportDistributionSlipsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
