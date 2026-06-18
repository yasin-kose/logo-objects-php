<?php

declare(strict_types=1);

namespace LogoObjects\Clients\purchasePromotions;

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
 * RscollectionrsPrombundlexml
 */
class RscollectionrsPrombundlexml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchasePromotions\RsPrombundlexml::class],
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
 * RsPrombundlexml
 */
class RsPrombundlexml extends \LogoObjects\Types\BaseEntity
{
    public ?string $ITEM_CODE = null;
    /** @var int|float|null */
    public $STOCKREF = null;
    public ?string $FORMULA = null;
    /** @var int|float|null */
    public $PRICE = null;
    /** @var int|float|null */
    public $ROUND_BASE = null;
    public ?string $UNIT_CODE = null;
    /** @var int|float|null */
    public $UOMREF = null;
    /** @var int|float|null */
    public $VARIANTREF = null;
    public ?string $VARIANTCODE = null;
    public ?string $VARIANTNAME = null;
    /** @var int|float|null */
    public $CANCONFIG = null;
}

/**
 * PurchasePromotions
 */
class PurchasePromotions extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $DESCRIPTION = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $CARDTYPE = null;
    public ?string $ITEM_CODE = null;
    /** @var int|float|null */
    public $STOCKREF = null;
    /** @var int|float|null */
    public $MATITEM_TYPE = null;
    public ?string $DATE_STARTED = null;
    public ?string $DATE_ENDED = null;
    /** @var int|float|null */
    public $COUNTER = null;
    /** @var int|float|null */
    public $PRICE = null;
    /** @var int|float|null */
    public $MODUL_ID = null;
    /** @var int|float|null */
    public $MATRL_TRANS = null;
    /** @var int|float|null */
    public $PURCH_TRANS = null;
    /** @var int|float|null */
    public $SALES_TRANS = null;
    /** @var RscollectionrsPrombundlexml|null */
    public $BUNDLES = null;
    public ?string $GL_CODE = null;
    /** @var int|float|null */
    public $ACCOUNTREF = null;
    public ?string $OHP_CODE = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $ORD_FC_MODUL = null;
    /** @var int|float|null */
    public $VARIANTREF = null;
    public ?string $VARIANTCODE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'BUNDLES' => \LogoObjects\Clients\purchasePromotions\RscollectionrsPrombundlexml::class,
        ]);
    }
}

/**
 * PurchasePromotionsQueryOptions
 */
class PurchasePromotionsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var PurchasePromotionsSortSpec|null */
    public $sort = null;
}

/**
 * PurchasePromotionsSearchCriteria
 */
class PurchasePromotionsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $recordStatus = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $description = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $cardtype = null;
    /** @var mixed */
    public $itemCode = null;
    /** @var mixed */
    public $stockref = null;
    /** @var mixed */
    public $matitemType = null;
    /** @var mixed */
    public $dateStarted = null;
    /** @var mixed */
    public $dateEnded = null;
    /** @var mixed */
    public $counter = null;
    /** @var mixed */
    public $price = null;
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
    public $modulId = null;
    /** @var mixed */
    public $matrlTrans = null;
    /** @var mixed */
    public $purchTrans = null;
    /** @var mixed */
    public $salesTrans = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $bundles = null;
    /** @var mixed */
    public $glCode = null;
    /** @var mixed */
    public $accountref = null;
    /** @var mixed */
    public $ohpCode = null;
    /** @var mixed */
    public $centerref = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $ordFcModul = null;
    /** @var mixed */
    public $variantref = null;
    /** @var mixed */
    public $variantcode = null;
}

/**
 * PurchasePromotionsAnalytics
 */
class PurchasePromotionsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
