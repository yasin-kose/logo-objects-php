<?php

declare(strict_types=1);

namespace LogoObjects\Clients\purchasedItemPrices;

/**
 * RscollectionrsExclistnodexml
 */
class RscollectionrsExclistnodexml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchasedItemPrices\RsExclistnodexml::class],
        ]);
    }
}

/**
 * RscollectionrsExclistnodevalxm
 */
class RscollectionrsExclistnodevalxm extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchasedItemPrices\RsExclistnodevalxm::class],
        ]);
    }
}

/**
 * RscollectionrsPrcdivlstxml
 */
class RscollectionrsPrcdivlstxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchasedItemPrices\RsPrcdivlstxml::class],
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
 * RsExclistnodexml
 */
class RsExclistnodexml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $EINFOSZ = null;
    /** @var int|float|null */
    public $EPOLICY = null;
    /** @var int|float|null */
    public $NUMOFVAL = null;
    public ?string $CHAR_CODE = null;
    /** @var RscollectionrsExclistnodevalxm|null */
    public $VALREFSLIST = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'VALREFSLIST' => \LogoObjects\Clients\purchasedItemPrices\RscollectionrsExclistnodevalxm::class,
        ]);
    }
}

/**
 * RsExclistnodevalxm
 */
class RsExclistnodevalxm extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $VALREF = null;
    public ?string $VALCODE = null;
}

/**
 * RsPrcdivlstxml
 */
class RsPrcdivlstxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $PARENTPRCREF = null;
    public ?string $DIVCODES = null;
}

/**
 * PurchasedItemPrices
 */
class PurchasedItemPrices extends \LogoObjects\Types\BaseEntity
{
    public ?string $CARD_CODE = null;
    /** @var int|float|null */
    public $OWNER_TYPE = null;
    public ?string $OWNER_CODE = null;
    /** @var int|float|null */
    public $CARDREF = null;
    public ?string $ARP_CODE = null;
    public ?string $ARP_AUXCODE = null;
    public ?string $PAYMENT_CODE = null;
    /** @var int|float|null */
    public $PAYPLANREF = null;
    /** @var int|float|null */
    public $PRICE = null;
    public ?string $UNIT_CODE = null;
    /** @var int|float|null */
    public $UOMREF = null;
    /** @var int|float|null */
    public $VAT_INCL = null;
    /** @var int|float|null */
    public $CURRENCY = null;
    /** @var int|float|null */
    public $PRIORITY = null;
    /** @var int|float|null */
    public $MTRL_TYPE = null;
    /** @var int|float|null */
    public $LEAD_TIME = null;
    public ?string $DATE_STARTED = null;
    public ?string $DATE_ENDED = null;
    public ?string $CONDITION = null;
    public ?string $SHIPMENT_TYPE = null;
    /** @var int|float|null */
    public $SPECIALIZED = null;
    public ?string $SRVCODE = null;
    public ?string $UNITSETCODE = null;
    /** @var int|float|null */
    public $EXT_ACC_FLAGS = null;
    /** @var int|float|null */
    public $UNIT_CONVERT = null;
    public ?string $CYPH_CODE = null;
    public ?string $ORGLOGOID = null;
    public ?string $TRADING_GRP = null;
    /** @var int|float|null */
    public $BEG_TIME = null;
    /** @var int|float|null */
    public $END_TIME = null;
    public ?string $DEFINITION = null;
    public ?string $GRPCODE = null;
    public ?string $GENIUSPAYTYPE = null;
    /** @var int|float|null */
    public $UPDATE_CHILD_PRC = null;
    public ?string $GEN_PAY_TYPE = null;
    /** @var int|float|null */
    public $GEN_SHP_NR = null;
    /** @var int|float|null */
    public $ORDER_NR = null;
    /** @var int|float|null */
    public $PRCALTER_TYP1 = null;
    /** @var int|float|null */
    public $PRCALTER_LMT1 = null;
    /** @var int|float|null */
    public $PRCALTER_TYP2 = null;
    /** @var int|float|null */
    public $PRCALTER_LMT2 = null;
    /** @var int|float|null */
    public $PRCALTER_TYP3 = null;
    /** @var int|float|null */
    public $PRCALTER_LMT3 = null;
    /** @var int|float|null */
    public $ACTIVE = null;
    /** @var int|float|null */
    public $VGEN_DATA_REFERENCE = null;
    public ?string $VGENLIST = null;
    /** @var RscollectionrsExclistnodexml|null */
    public $VGENXMLLIST = null;
    /** @var int|float|null */
    public $BRANCH = null;
    /** @var int|float|null */
    public $COST_VALUE = null;
    /** @var int|float|null */
    public $ALL_DIVISIONS = null;
    /** @var RscollectionrsPrcdivlstxml|null */
    public $DIVISION_LIST = null;
    public ?string $DIVISION_STR = null;
    public ?string $ARP_AUXCODE2 = null;
    public ?string $ARP_AUXCODE3 = null;
    public ?string $ARP_AUXCODE4 = null;
    public ?string $ARP_AUXCODE5 = null;
    public ?string $ARP_TRDGRP = null;
    public ?string $ARP_CYPHCODE = null;
    public ?string $GLOBAL_ID = null;
    public ?string $VARIANT_CODE = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $MARKREF = null;
    public ?string $MARK_CODE = null;
    public ?string $TRANS_SPE_CODE = null;
    public ?string $GUID = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'VGENXMLLIST' => \LogoObjects\Clients\purchasedItemPrices\RscollectionrsExclistnodexml::class,
            'DIVISION_LIST' => \LogoObjects\Clients\purchasedItemPrices\RscollectionrsPrcdivlstxml::class,
        ]);
    }
}

/**
 * PurchasedItemPricesQueryOptions
 */
class PurchasedItemPricesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var PurchasedItemPricesSortSpec|null */
    public $sort = null;
}

/**
 * PurchasedItemPricesSearchCriteria
 */
class PurchasedItemPricesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $cardCode = null;
    /** @var mixed */
    public $ownerType = null;
    /** @var mixed */
    public $ownerCode = null;
    /** @var mixed */
    public $cardref = null;
    /** @var mixed */
    public $arpCode = null;
    /** @var mixed */
    public $arpAuxcode = null;
    /** @var mixed */
    public $paymentCode = null;
    /** @var mixed */
    public $payplanref = null;
    /** @var mixed */
    public $price = null;
    /** @var mixed */
    public $unitCode = null;
    /** @var mixed */
    public $uomref = null;
    /** @var mixed */
    public $vatIncl = null;
    /** @var mixed */
    public $currency = null;
    /** @var mixed */
    public $priority = null;
    /** @var mixed */
    public $mtrlType = null;
    /** @var mixed */
    public $leadTime = null;
    /** @var mixed */
    public $dateStarted = null;
    /** @var mixed */
    public $dateEnded = null;
    /** @var mixed */
    public $condition = null;
    /** @var mixed */
    public $shipmentType = null;
    /** @var mixed */
    public $specialized = null;
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
    public $dataReference = null;
    /** @var mixed */
    public $srvcode = null;
    /** @var mixed */
    public $unitsetcode = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $extAccFlags = null;
    /** @var mixed */
    public $unitConvert = null;
    /** @var mixed */
    public $cyphCode = null;
    /** @var mixed */
    public $orglogoid = null;
    /** @var mixed */
    public $tradingGrp = null;
    /** @var mixed */
    public $begTime = null;
    /** @var mixed */
    public $endTime = null;
    /** @var mixed */
    public $definition = null;
    /** @var mixed */
    public $grpcode = null;
    /** @var mixed */
    public $geniuspaytype = null;
    /** @var mixed */
    public $updateChildPrc = null;
    /** @var mixed */
    public $genPayType = null;
    /** @var mixed */
    public $genShpNr = null;
    /** @var mixed */
    public $orderNr = null;
    /** @var mixed */
    public $prcalterTyp1 = null;
    /** @var mixed */
    public $prcalterLmt1 = null;
    /** @var mixed */
    public $prcalterTyp2 = null;
    /** @var mixed */
    public $prcalterLmt2 = null;
    /** @var mixed */
    public $prcalterTyp3 = null;
    /** @var mixed */
    public $prcalterLmt3 = null;
    /** @var mixed */
    public $active = null;
    /** @var mixed */
    public $vgenDataReference = null;
    /** @var mixed */
    public $vgenlist = null;
    /** @var mixed */
    public $vgenxmllist = null;
    /** @var mixed */
    public $branch = null;
    /** @var mixed */
    public $costValue = null;
    /** @var mixed */
    public $allDivisions = null;
    /** @var mixed */
    public $divisionList = null;
    /** @var mixed */
    public $divisionStr = null;
    /** @var mixed */
    public $arpAuxcode2 = null;
    /** @var mixed */
    public $arpAuxcode3 = null;
    /** @var mixed */
    public $arpAuxcode4 = null;
    /** @var mixed */
    public $arpAuxcode5 = null;
    /** @var mixed */
    public $arpTrdgrp = null;
    /** @var mixed */
    public $arpCyphcode = null;
    /** @var mixed */
    public $globalId = null;
    /** @var mixed */
    public $variantCode = null;
    /** @var mixed */
    public $projectref = null;
    /** @var mixed */
    public $projectCode = null;
    /** @var mixed */
    public $markref = null;
    /** @var mixed */
    public $markCode = null;
    /** @var mixed */
    public $transSpeCode = null;
    /** @var mixed */
    public $guid = null;
}

/**
 * PurchasedItemPricesAnalytics
 */
class PurchasedItemPricesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
