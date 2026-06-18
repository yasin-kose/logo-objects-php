<?php

declare(strict_types=1);

namespace LogoObjects\Clients\demandPeggings;

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
 * DemandPeggings
 */
class DemandPeggings extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $DEMAND_REFERENCE = null;
    /** @var int|float|null */
    public $DEMAND_SITEID = null;
    /** @var int|float|null */
    public $PARENTTYPE = null;
    /** @var int|float|null */
    public $PARENTREF = null;
    /** @var int|float|null */
    public $CHILD_TYPE = null;
    /** @var int|float|null */
    public $CHILD_REFERENCE = null;
    /** @var int|float|null */
    public $FICHE_TYPE = null;
    /** @var int|float|null */
    public $ITEM_ALTER = null;
    /** @var int|float|null */
    public $ITEMREF = null;
    /** @var int|float|null */
    public $UNITREF = null;
    /** @var int|float|null */
    public $MAINITEMREF = null;
    /** @var int|float|null */
    public $MAINUNITREF = null;
    /** @var int|float|null */
    public $MEET_AMNT = null;
    /** @var int|float|null */
    public $MAIN_MEET_AMNT = null;
    /** @var int|float|null */
    public $ORD_PERIOD = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    /** @var int|float|null */
    public $BOMMASTERREF = null;
    /** @var int|float|null */
    public $BOMREVREF = null;
    /** @var int|float|null */
    public $LINE_TYPE = null;
    /** @var int|float|null */
    public $DET_LINE = null;
    /** @var int|float|null */
    public $PREVLINEREF = null;
    /** @var int|float|null */
    public $PREV_LINE_NO = null;
    /** @var int|float|null */
    public $LINE_NO = null;
    public ?string $FICHE_NO = null;
    public ?string $FICHE_DATE = null;
    public ?string $ITEM_CODE = null;
    public ?string $ITEM_NAME = null;
    /** @var int|float|null */
    public $TR_AMNT = null;
    public ?string $U_EDIT = null;
    public ?string $BOM_CODE = null;
    public ?string $BOM_REV_CODE = null;
    public ?string $ARP_CODE = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $PEGREF = null;
    /** @var int|float|null */
    public $DOCNRREF = null;
    public ?string $LINE_PTR = null;
    /** @var int|float|null */
    public $FCNOCGHD = null;
    public ?string $DET_LIST = null;
    public ?string $DET_DEL_LIST = null;
    /** @var int|float|null */
    public $PROPOSAL = null;
    /** @var int|float|null */
    public $WAIT_AMNT = null;
    /** @var int|float|null */
    public $FACTORY_NR = null;
    /** @var int|float|null */
    public $SOURCE_INDEX = null;
    /** @var int|float|null */
    public $AMNTCONVF = null;
    public ?string $DO_CODE = null;
    public ?string $ARP_NAME = null;
    /** @var int|float|null */
    public $FIC_STATUS = null;
    public ?string $MAIN_ITEM_CODE = null;
    public ?string $MAIN_ITEM_NAME = null;
    public ?string $MAIN_U_EDIT = null;
    /** @var int|float|null */
    public $PRICE = null;
    /** @var int|float|null */
    public $PAYPLANREF = null;
    public ?string $PAYPLAN_CODE = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $PrOJECTREF = null;
    /** @var int|float|null */
    public $VARIANTREF = null;
    /** @var int|float|null */
    public $MAINVARIANTREF = null;
    public ?string $VARIANTCODE = null;
    public ?string $VARIANTNAME = null;
    /** @var int|float|null */
    public $BOM_TYPE = null;
}

/**
 * DemandPeggingsQueryOptions
 */
class DemandPeggingsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var DemandPeggingsSortSpec|null */
    public $sort = null;
}

/**
 * DemandPeggingsSearchCriteria
 */
class DemandPeggingsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $demandReference = null;
    /** @var mixed */
    public $demandSiteid = null;
    /** @var mixed */
    public $parenttype = null;
    /** @var mixed */
    public $parentref = null;
    /** @var mixed */
    public $childType = null;
    /** @var mixed */
    public $childReference = null;
    /** @var mixed */
    public $ficheType = null;
    /** @var mixed */
    public $itemAlter = null;
    /** @var mixed */
    public $itemref = null;
    /** @var mixed */
    public $unitref = null;
    /** @var mixed */
    public $mainitemref = null;
    /** @var mixed */
    public $mainunitref = null;
    /** @var mixed */
    public $meetAmnt = null;
    /** @var mixed */
    public $mainMeetAmnt = null;
    /** @var mixed */
    public $ordPeriod = null;
    /** @var mixed */
    public $clientref = null;
    /** @var mixed */
    public $bommasterref = null;
    /** @var mixed */
    public $bomrevref = null;
    /** @var mixed */
    public $lineType = null;
    /** @var mixed */
    public $detLine = null;
    /** @var mixed */
    public $prevlineref = null;
    /** @var mixed */
    public $prevLineNo = null;
    /** @var mixed */
    public $lineNo = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $ficheNo = null;
    /** @var mixed */
    public $ficheDate = null;
    /** @var mixed */
    public $itemCode = null;
    /** @var mixed */
    public $itemName = null;
    /** @var mixed */
    public $trAmnt = null;
    /** @var mixed */
    public $uEdit = null;
    /** @var mixed */
    public $bomCode = null;
    /** @var mixed */
    public $bomRevCode = null;
    /** @var mixed */
    public $arpCode = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $pegref = null;
    /** @var mixed */
    public $docnrref = null;
    /** @var mixed */
    public $linePtr = null;
    /** @var mixed */
    public $fcnocghd = null;
    /** @var mixed */
    public $detList = null;
    /** @var mixed */
    public $detDelList = null;
    /** @var mixed */
    public $proposal = null;
    /** @var mixed */
    public $waitAmnt = null;
    /** @var mixed */
    public $factoryNr = null;
    /** @var mixed */
    public $sourceIndex = null;
    /** @var mixed */
    public $amntconvf = null;
    /** @var mixed */
    public $doCode = null;
    /** @var mixed */
    public $arpName = null;
    /** @var mixed */
    public $ficStatus = null;
    /** @var mixed */
    public $mainItemCode = null;
    /** @var mixed */
    public $mainItemName = null;
    /** @var mixed */
    public $mainUEdit = null;
    /** @var mixed */
    public $price = null;
    /** @var mixed */
    public $payplanref = null;
    /** @var mixed */
    public $payplanCode = null;
    /** @var mixed */
    public $projectCode = null;
    /** @var mixed */
    public $prOJECTREF = null;
    /** @var mixed */
    public $variantref = null;
    /** @var mixed */
    public $mainvariantref = null;
    /** @var mixed */
    public $variantcode = null;
    /** @var mixed */
    public $variantname = null;
    /** @var mixed */
    public $bomType = null;
}

/**
 * DemandPeggingsAnalytics
 */
class DemandPeggingsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
