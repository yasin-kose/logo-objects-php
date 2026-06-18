<?php

declare(strict_types=1);

namespace LogoObjects\Clients\productions;

/**
 * PtPrditmclslines
 */
class PtPrditmclslines extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionptPrditmclsline|null */
    public $Item = null;
    /** @var int|float|null */
    public $Count = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\productions\RscollectionptPrditmclsline::class,
        ]);
    }
}

/**
 * RscollectionptPrditmclsline
 */
class RscollectionptPrditmclsline extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\productions\PtPrditmclsline::class],
        ]);
    }
}

/**
 * PtPrditmclsline
 */
class PtPrditmclsline extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $ItemRef = null;
    /** @var int|float|null */
    public $amount = null;
    /** @var int|float|null */
    public $variantRef = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
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
 * PtFastrealizeslipreflists
 */
class PtFastrealizeslipreflists extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var PtFastrsliplists|null */
    public $UsageSlips = null;
    /** @var PtFastrsliplists|null */
    public $WHTransSlips = null;
    /** @var PtFastrsliplists|null */
    public $InputfromProdSlips = null;
    /** @var PtFastrsliplists|null */
    public $ScarpSlips = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'UsageSlips' => \LogoObjects\Clients\productions\PtFastrsliplists::class,
            'WHTransSlips' => \LogoObjects\Clients\productions\PtFastrsliplists::class,
            'InputfromProdSlips' => \LogoObjects\Clients\productions\PtFastrsliplists::class,
            'ScarpSlips' => \LogoObjects\Clients\productions\PtFastrsliplists::class,
        ]);
    }
}

/**
 * PtFastrsliplists
 */
class PtFastrsliplists extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionptFastrsliplist|null */
    public $Item = null;
    /** @var int|float|null */
    public $Count = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\productions\RscollectionptFastrsliplist::class,
        ]);
    }
}

/**
 * RscollectionptFastrsliplist
 */
class RscollectionptFastrsliplist extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\productions\PtFastrsliplist::class],
        ]);
    }
}

/**
 * PtFastrsliplist
 */
class PtFastrsliplist extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $lref = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * PtPrddisplines
 */
class PtPrddisplines extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionptPrddispline|null */
    public $Item = null;
    /** @var int|float|null */
    public $Count = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\productions\RscollectionptPrddispline::class,
        ]);
    }
}

/**
 * RscollectionptPrddispline
 */
class RscollectionptPrddispline extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\productions\PtPrddispline::class],
        ]);
    }
}

/**
 * PtPrddispline
 */
class PtPrddispline extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $OpRef = null;
    /** @var int|float|null */
    public $WorkStRef = null;
    /** @var int|float|null */
    public $BOMRef = null;
    /** @var int|float|null */
    public $RevRef = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * PtWorkordlists
 */
class PtWorkordlists extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionptLreflist|null */
    public $Item = null;
    /** @var int|float|null */
    public $Count = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\productions\RscollectionptLreflist::class,
        ]);
    }
}

/**
 * RscollectionptLreflist
 */
class RscollectionptLreflist extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\productions\PtLreflist::class],
        ]);
    }
}

/**
 * PtLreflist
 */
class PtLreflist extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $lref = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * PtProdplnrltnlists
 */
class PtProdplnrltnlists extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionptProdplnrltnlist|null */
    public $Item = null;
    /** @var int|float|null */
    public $Count = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\productions\RscollectionptProdplnrltnlist::class,
        ]);
    }
}

/**
 * RscollectionptProdplnrltnlist
 */
class RscollectionptProdplnrltnlist extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\productions\PtProdplnrltnlist::class],
        ]);
    }
}

/**
 * PtProdplnrltnlist
 */
class PtProdplnrltnlist extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $prodOrdRef = null;
    public ?string $ficheNo = null;
    public ?string $date = null;
    public ?string $plnBegDate = null;
    public ?string $plnBegTime = null;
    public ?string $plnEndDate = null;
    public ?string $plnEndTime = null;
    /** @var int|float|null */
    public $ItemRef = null;
    public ?string $itemCode = null;
    public ?string $itemName = null;
    /** @var int|float|null */
    public $uomRef = null;
    /** @var int|float|null */
    public $RevRef = null;
    /** @var int|float|null */
    public $uSetRef = null;
    /** @var int|float|null */
    public $plnAmnt = null;
    /** @var int|float|null */
    public $actAmnt = null;
    /** @var int|float|null */
    public $levelIdx = null;
    /** @var int|float|null */
    public $ficheType = null;
    public ?string $headCode = null;
    public ?string $headName = null;
    /** @var int|float|null */
    public $sourceIndex = null;
    /** @var int|float|null */
    public $Department = null;
    /** @var int|float|null */
    public $FactoryNr = null;
    public ?string $cliCode = null;
    public ?string $cliName = null;
    /** @var int|float|null */
    public $payDefRef = null;
    /** @var int|float|null */
    public $lineAmnt = null;
    /** @var int|float|null */
    public $lineRef = null;
    /** @var int|float|null */
    public $ficheRef = null;
    public ?string $orflnDueD = null;
    public ?string $lineUnit = null;
    /** @var int|float|null */
    public $BOMRef = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * PtQuickprodslipreflists
 */
class PtQuickprodslipreflists extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var PtReflists|null */
    public $QProdSlips = null;
    /** @var PtReflists|null */
    public $UsageSlips = null;
    /** @var PtReflists|null */
    public $WHTransSlips = null;
    /** @var PtReflists|null */
    public $InputfromProdSlips = null;
    /** @var PtReflists|null */
    public $ScarpSlips = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'QProdSlips' => \LogoObjects\Clients\productions\PtReflists::class,
            'UsageSlips' => \LogoObjects\Clients\productions\PtReflists::class,
            'WHTransSlips' => \LogoObjects\Clients\productions\PtReflists::class,
            'InputfromProdSlips' => \LogoObjects\Clients\productions\PtReflists::class,
            'ScarpSlips' => \LogoObjects\Clients\productions\PtReflists::class,
        ]);
    }
}

/**
 * PtReflists
 */
class PtReflists extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionptLreflist|null */
    public $Item = null;
    /** @var int|float|null */
    public $Count = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\productions\RscollectionptLreflist::class,
        ]);
    }
}

/**
 * PtRealizedslips
 */
class PtRealizedslips extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionptRealizedslip|null */
    public $Item = null;
    /** @var int|float|null */
    public $Count = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\productions\RscollectionptRealizedslip::class,
        ]);
    }
}

/**
 * RscollectionptRealizedslip
 */
class RscollectionptRealizedslip extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\productions\PtRealizedslip::class],
        ]);
    }
}

/**
 * PtRealizedslip
 */
class PtRealizedslip extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $fcType = null;
    public ?string $fcDate = null;
    /** @var int|float|null */
    public $lineNr = null;
    /** @var int|float|null */
    public $lineType = null;
    public ?string $itemCode = null;
    public ?string $vrntCode = null;
    /** @var int|float|null */
    public $amount = null;
    public ?string $uomCode = null;
    public ?string $usCode = null;
    /** @var int|float|null */
    public $inWh = null;
    /** @var int|float|null */
    public $outWh = null;
    /** @var int|float|null */
    public $inDiv = null;
    /** @var int|float|null */
    public $outDiv = null;
    /** @var int|float|null */
    public $poLineRef = null;
    /** @var int|float|null */
    public $srcPoLnRef = null;
    /** @var int|float|null */
    public $destPoLnRef = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * PtProdparams
 */
class PtProdparams extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionptProdparam|null */
    public $Item = null;
    /** @var int|float|null */
    public $Count = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\productions\RscollectionptProdparam::class,
        ]);
    }
}

/**
 * RscollectionptProdparam
 */
class RscollectionptProdparam extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\productions\PtProdparam::class],
        ]);
    }
}

/**
 * PtProdparam
 */
class PtProdparam extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?string $paramCode = null;
    /** @var int|float|null */
    public $paramRef = null;
    /** @var int|float|null */
    public $Value = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * PtMeettypelist
 */
class PtMeettypelist extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?bool $purchase = null;
    public ?bool $production = null;
    public ?bool $invTrans = null;
    public ?bool $stockMeet = null;
    public ?bool $demandMeetProposal = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * Productions
 */
class Productions extends \LogoObjects\Types\BaseEntity
{
}

/**
 * ProductionsQueryOptions
 */
class ProductionsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ProductionsSortSpec|null */
    public $sort = null;
}

/**
 * ProductionsSearchCriteria
 */
class ProductionsSearchCriteria extends \LogoObjects\Support\Entity
{
}

/**
 * ProductionsAnalytics
 */
class ProductionsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
