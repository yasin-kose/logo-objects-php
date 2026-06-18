<?php

declare(strict_types=1);

namespace LogoObjects\Clients\additionalTaxes;

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
 * RscollectionrsAddtaxlinesxml
 */
class RscollectionrsAddtaxlinesxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\additionalTaxes\RsAddtaxlinesxml::class],
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
 * RsAddtaxlinesxml
 */
class RsAddtaxlinesxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $ADDTAXREF = null;
    public ?string $BEG_DATE = null;
    /** @var int|float|null */
    public $TAX_TYPE = null;
    /** @var int|float|null */
    public $RATE = null;
    /** @var int|float|null */
    public $AMOUNT = null;
    /** @var int|float|null */
    public $UNIT_TYPE = null;
    /** @var int|float|null */
    public $UNITSETREF = null;
    /** @var int|float|null */
    public $UNITREF = null;
    public ?string $TAX_TYPE_STR = null;
    public ?string $U_TYPE_STR = null;
    public ?string $UNIT_SET_CODE = null;
    public ?string $UNIT_CODE = null;
    /** @var int|float|null */
    public $DISCAMNT = null;
    /** @var int|float|null */
    public $EXCEPTRATE = null;
    /** @var int|float|null */
    public $EXCEPTAMOUNT = null;
    /** @var int|float|null */
    public $COLLECTRATE = null;
    /** @var int|float|null */
    public $COLLECTAMOUNT = null;
    public ?string $FICHE_SPE_CODE = null;
    public ?string $TRANS_SPE_CODE1 = null;
    public ?string $TRANS_SPE_CODE2 = null;
}

/**
 * AdditionalTaxes
 */
class AdditionalTaxes extends \LogoObjects\Types\BaseEntity
{
    public ?string $TAX_GROUP_ID = null;
    public ?string $TAX_CODE = null;
    public ?string $TAX_NAME = null;
    /** @var int|float|null */
    public $ADD_TO_COST = null;
    /** @var int|float|null */
    public $MULTI_ADD_TAX = null;
    /** @var int|float|null */
    public $MULTI_ORDER_NR = null;
    /** @var RscollectionrsAddtaxlinesxml|null */
    public $LINES = null;
    public ?string $DELLIST = null;
    /** @var int|float|null */
    public $CLIPFLAG = null;
    /** @var int|float|null */
    public $INFO_LOGICALREF = null;
    /** @var int|float|null */
    public $INFO_ADDTAXREF = null;
    public ?string $INFO_BEGDATE = null;
    /** @var int|float|null */
    public $INFO_TAXTYPE = null;
    /** @var int|float|null */
    public $INFO_RATE = null;
    /** @var int|float|null */
    public $INFO_AMOUNT = null;
    /** @var int|float|null */
    public $INFO_UNITTYPE = null;
    /** @var int|float|null */
    public $INFO_UNITSETREF = null;
    /** @var int|float|null */
    public $INFO_UNITREF = null;
    /** @var int|float|null */
    public $INFO_SITEID = null;
    /** @var int|float|null */
    public $INFO_RECSTATUS = null;
    /** @var int|float|null */
    public $INFO_ORGLOGICREF = null;
    public ?string $TAX_TYPE_STR = null;
    public ?string $U_TYPE_STR = null;
    public ?string $UNIT_SET_CODE = null;
    public ?string $UNIT_CODE = null;
    /** @var int|float|null */
    public $INFO_DISCAMNT = null;
    /** @var int|float|null */
    public $EFFECT_VAT = null;
    public ?string $GLOBAL_CODE = null;
    /** @var int|float|null */
    public $INLINE_NET = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'LINES' => \LogoObjects\Clients\additionalTaxes\RscollectionrsAddtaxlinesxml::class,
        ]);
    }
}

/**
 * AdditionalTaxesQueryOptions
 */
class AdditionalTaxesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var AdditionalTaxesSortSpec|null */
    public $sort = null;
}

/**
 * AdditionalTaxesSearchCriteria
 */
class AdditionalTaxesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $taxGroupId = null;
    /** @var mixed */
    public $taxCode = null;
    /** @var mixed */
    public $taxName = null;
    /** @var mixed */
    public $addToCost = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $multiAddTax = null;
    /** @var mixed */
    public $multiOrderNr = null;
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
    public $lines = null;
    /** @var mixed */
    public $dellist = null;
    /** @var mixed */
    public $clipflag = null;
    /** @var mixed */
    public $infoLogicalref = null;
    /** @var mixed */
    public $infoAddtaxref = null;
    /** @var mixed */
    public $infoBegdate = null;
    /** @var mixed */
    public $infoTaxtype = null;
    /** @var mixed */
    public $infoRate = null;
    /** @var mixed */
    public $infoAmount = null;
    /** @var mixed */
    public $infoUnittype = null;
    /** @var mixed */
    public $infoUnitsetref = null;
    /** @var mixed */
    public $infoUnitref = null;
    /** @var mixed */
    public $infoSiteid = null;
    /** @var mixed */
    public $infoRecstatus = null;
    /** @var mixed */
    public $infoOrglogicref = null;
    /** @var mixed */
    public $taxTypeStr = null;
    /** @var mixed */
    public $uTypeStr = null;
    /** @var mixed */
    public $unitSetCode = null;
    /** @var mixed */
    public $unitCode = null;
    /** @var mixed */
    public $infoDiscamnt = null;
    /** @var mixed */
    public $effectVat = null;
    /** @var mixed */
    public $globalCode = null;
    /** @var mixed */
    public $inlineNet = null;
}

/**
 * AdditionalTaxesAnalytics
 */
class AdditionalTaxesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
