<?php

declare(strict_types=1);

namespace LogoObjects\Clients\BomStandardCosts;

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
 * BomStandardCosts
 */
class BomStandardCosts extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $FACTORYNR = null;
    /** @var int|float|null */
    public $PERIODREF = null;
    /** @var int|float|null */
    public $STOCKREF = null;
    /** @var int|float|null */
    public $BOMREF = null;
    /** @var int|float|null */
    public $BOMREVREF = null;
    /** @var int|float|null */
    public $REPORTRATE = null;
    /** @var int|float|null */
    public $CRTYPE = null;
    /** @var int|float|null */
    public $TRCURRDATE = null;
    /** @var int|float|null */
    public $AMOUNT = null;
    /** @var int|float|null */
    public $UOMREF = null;
    public ?string $UNIT_CODE = null;
    /** @var int|float|null */
    public $STDMTRCOSTLOCAL = null;
    /** @var int|float|null */
    public $STDMTRCOSTTRCURR = null;
    /** @var int|float|null */
    public $STDMTRCOSTREPCURR = null;
    /** @var int|float|null */
    public $STDLBRCOSTLOCAL = null;
    /** @var int|float|null */
    public $STDLBRCOSTTRCURR = null;
    /** @var int|float|null */
    public $STDLBRCOSTREPCURR = null;
    /** @var int|float|null */
    public $STDWSCOSTLOCAL = null;
    /** @var int|float|null */
    public $STDWSCOSTTRCURR = null;
    /** @var int|float|null */
    public $STDWSCOSTREPCURR = null;
    /** @var int|float|null */
    public $STDOVHDCOSTLOCAL = null;
    /** @var int|float|null */
    public $STDOVHDCOSTTRCURR = null;
    /** @var int|float|null */
    public $STDOVHDCOSTREPCURR = null;
    public ?string $OVHDCOSTFORMULA = null;
    public ?string $OVHDCOSTREPFORMULA = null;
    /** @var int|float|null */
    public $STDUNITCOSTLOCAL = null;
    /** @var int|float|null */
    public $STDUNITCOSTTRCURR = null;
    /** @var int|float|null */
    public $STDUNITCOSTREPCURR = null;
    public ?string $PERIODCODE = null;
    public ?string $PERIODNAME = null;
    public ?string $ITEMCODE = null;
    public ?string $ITEMNAME = null;
    public ?string $BOMCODE = null;
    public ?string $BOMNAME = null;
    /** @var int|float|null */
    public $BOMTYPE = null;
    public ?string $REVCODE = null;
    public ?string $REVNAME = null;
    /** @var int|float|null */
    public $DELLINE = null;
    /** @var int|float|null */
    public $STDOVHDCOSTLOCAL2 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTLOCAL3 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTLOCAL4 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTLOCAL5 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTLOCAL6 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTLOCAL7 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTLOCAL8 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTLOCAL9 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTLOCAL10 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTTRCURR2 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTTRCURR3 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTTRCURR4 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTTRCURR5 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTTRCURR6 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTTRCURR7 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTTRCURR8 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTTRCURR9 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTTRCURR10 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTREPCURR2 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTREPCURR3 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTREPCURR4 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTREPCURR5 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTREPCURR6 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTREPCURR7 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTREPCURR8 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTREPCURR9 = null;
    /** @var int|float|null */
    public $STDOVHDCOSTREPCURR10 = null;
    public ?string $OVHDCOSTFORMULA2 = null;
    public ?string $OVHDCOSTFORMULA3 = null;
    public ?string $OVHDCOSTFORMULA4 = null;
    public ?string $OVHDCOSTFORMULA5 = null;
    public ?string $OVHDCOSTFORMULA6 = null;
    public ?string $OVHDCOSTFORMULA7 = null;
    public ?string $OVHDCOSTFORMULA8 = null;
    public ?string $OVHDCOSTFORMULA9 = null;
    public ?string $OVHDCOSTFORMULA10 = null;
    public ?string $OVHDCOSTREPFORMULA2 = null;
    public ?string $OVHDCOSTREPFORMULA3 = null;
    public ?string $OVHDCOSTREPFORMULA4 = null;
    public ?string $OVHDCOSTREPFORMULA5 = null;
    public ?string $OVHDCOSTREPFORMULA6 = null;
    public ?string $OVHDCOSTREPFORMULA7 = null;
    public ?string $OVHDCOSTREPFORMULA8 = null;
    public ?string $OVHDCOSTREPFORMULA9 = null;
    public ?string $OVHDCOSTREPFORMULA10 = null;
}

/**
 * BomStandardCostsQueryOptions
 */
class BomStandardCostsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var BomStandardCostsSortSpec|null */
    public $sort = null;
}

/**
 * BomStandardCostsSearchCriteria
 */
class BomStandardCostsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $factorynr = null;
    /** @var mixed */
    public $periodref = null;
    /** @var mixed */
    public $stockref = null;
    /** @var mixed */
    public $bomref = null;
    /** @var mixed */
    public $bomrevref = null;
    /** @var mixed */
    public $reportrate = null;
    /** @var mixed */
    public $crtype = null;
    /** @var mixed */
    public $trcurrdate = null;
    /** @var mixed */
    public $amount = null;
    /** @var mixed */
    public $uomref = null;
    /** @var mixed */
    public $unitCode = null;
    /** @var mixed */
    public $stdmtrcostlocal = null;
    /** @var mixed */
    public $stdmtrcosttrcurr = null;
    /** @var mixed */
    public $stdmtrcostrepcurr = null;
    /** @var mixed */
    public $stdlbrcostlocal = null;
    /** @var mixed */
    public $stdlbrcosttrcurr = null;
    /** @var mixed */
    public $stdlbrcostrepcurr = null;
    /** @var mixed */
    public $stdwscostlocal = null;
    /** @var mixed */
    public $stdwscosttrcurr = null;
    /** @var mixed */
    public $stdwscostrepcurr = null;
    /** @var mixed */
    public $stdovhdcostlocal = null;
    /** @var mixed */
    public $stdovhdcosttrcurr = null;
    /** @var mixed */
    public $stdovhdcostrepcurr = null;
    /** @var mixed */
    public $ovhdcostformula = null;
    /** @var mixed */
    public $ovhdcostrepformula = null;
    /** @var mixed */
    public $stdunitcostlocal = null;
    /** @var mixed */
    public $stdunitcosttrcurr = null;
    /** @var mixed */
    public $stdunitcostrepcurr = null;
    /** @var mixed */
    public $periodcode = null;
    /** @var mixed */
    public $periodname = null;
    /** @var mixed */
    public $itemcode = null;
    /** @var mixed */
    public $itemname = null;
    /** @var mixed */
    public $bomcode = null;
    /** @var mixed */
    public $bomname = null;
    /** @var mixed */
    public $bomtype = null;
    /** @var mixed */
    public $revcode = null;
    /** @var mixed */
    public $revname = null;
    /** @var mixed */
    public $delline = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $stdovhdcostlocal2 = null;
    /** @var mixed */
    public $stdovhdcostlocal3 = null;
    /** @var mixed */
    public $stdovhdcostlocal4 = null;
    /** @var mixed */
    public $stdovhdcostlocal5 = null;
    /** @var mixed */
    public $stdovhdcostlocal6 = null;
    /** @var mixed */
    public $stdovhdcostlocal7 = null;
    /** @var mixed */
    public $stdovhdcostlocal8 = null;
    /** @var mixed */
    public $stdovhdcostlocal9 = null;
    /** @var mixed */
    public $stdovhdcostlocal10 = null;
    /** @var mixed */
    public $stdovhdcosttrcurr2 = null;
    /** @var mixed */
    public $stdovhdcosttrcurr3 = null;
    /** @var mixed */
    public $stdovhdcosttrcurr4 = null;
    /** @var mixed */
    public $stdovhdcosttrcurr5 = null;
    /** @var mixed */
    public $stdovhdcosttrcurr6 = null;
    /** @var mixed */
    public $stdovhdcosttrcurr7 = null;
    /** @var mixed */
    public $stdovhdcosttrcurr8 = null;
    /** @var mixed */
    public $stdovhdcosttrcurr9 = null;
    /** @var mixed */
    public $stdovhdcosttrcurr10 = null;
    /** @var mixed */
    public $stdovhdcostrepcurr2 = null;
    /** @var mixed */
    public $stdovhdcostrepcurr3 = null;
    /** @var mixed */
    public $stdovhdcostrepcurr4 = null;
    /** @var mixed */
    public $stdovhdcostrepcurr5 = null;
    /** @var mixed */
    public $stdovhdcostrepcurr6 = null;
    /** @var mixed */
    public $stdovhdcostrepcurr7 = null;
    /** @var mixed */
    public $stdovhdcostrepcurr8 = null;
    /** @var mixed */
    public $stdovhdcostrepcurr9 = null;
    /** @var mixed */
    public $stdovhdcostrepcurr10 = null;
    /** @var mixed */
    public $ovhdcostformula2 = null;
    /** @var mixed */
    public $ovhdcostformula3 = null;
    /** @var mixed */
    public $ovhdcostformula4 = null;
    /** @var mixed */
    public $ovhdcostformula5 = null;
    /** @var mixed */
    public $ovhdcostformula6 = null;
    /** @var mixed */
    public $ovhdcostformula7 = null;
    /** @var mixed */
    public $ovhdcostformula8 = null;
    /** @var mixed */
    public $ovhdcostformula9 = null;
    /** @var mixed */
    public $ovhdcostformula10 = null;
    /** @var mixed */
    public $ovhdcostrepformula2 = null;
    /** @var mixed */
    public $ovhdcostrepformula3 = null;
    /** @var mixed */
    public $ovhdcostrepformula4 = null;
    /** @var mixed */
    public $ovhdcostrepformula5 = null;
    /** @var mixed */
    public $ovhdcostrepformula6 = null;
    /** @var mixed */
    public $ovhdcostrepformula7 = null;
    /** @var mixed */
    public $ovhdcostrepformula8 = null;
    /** @var mixed */
    public $ovhdcostrepformula9 = null;
    /** @var mixed */
    public $ovhdcostrepformula10 = null;
}

/**
 * BomStandardCostsAnalytics
 */
class BomStandardCostsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
