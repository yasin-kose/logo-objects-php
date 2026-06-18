<?php

declare(strict_types=1);

namespace LogoObjects\Clients\purchasedServices;

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
 * RscollectionrsSrvinvenxml
 */
class RscollectionrsSrvinvenxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchasedServices\RsSrvinvenxml::class],
        ]);
    }
}

/**
 * RscollectionrsServunitasgn
 */
class RscollectionrsServunitasgn extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchasedServices\RsServunitasgn::class],
        ]);
    }
}

/**
 * RscollectionrsGlpostxml
 */
class RscollectionrsGlpostxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchasedServices\RsGlpostxml::class],
        ]);
    }
}

/**
 * RscollectionrsAddtaxmultixml
 */
class RscollectionrsAddtaxmultixml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\purchasedServices\RsAddtaxmultixml::class],
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
 * RsSrvinvenxml
 */
class RsSrvinvenxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $SRVCARDREF = null;
    /** @var int|float|null */
    public $WH_NUMBER = null;
    /** @var int|float|null */
    public $LEAD_TIME = null;
    /** @var int|float|null */
    public $ORDERED = null;
    /** @var int|float|null */
    public $SHIPPED = null;
    public ?string $LAST_TRAN_DATE = null;
}

/**
 * RsServunitasgn
 */
class RsServunitasgn extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $SRVREF = null;
    /** @var int|float|null */
    public $LINENR = null;
    public ?string $UNIT_CODE = null;
    /** @var int|float|null */
    public $UNITLINEREF = null;
    /** @var int|float|null */
    public $PRIORITY = null;
}

/**
 * RsGlpostxml
 */
class RsGlpostxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $CARDTYPE = null;
    /** @var int|float|null */
    public $CARDREF = null;
    /** @var int|float|null */
    public $INFO_TYPE = null;
    public ?string $GLACC_CODE = null;
    /** @var int|float|null */
    public $ACCOUNTREF = null;
    public ?string $OHP_CODE = null;
    /** @var int|float|null */
    public $CENTERREF = null;
}

/**
 * RsAddtaxmultixml
 */
class RsAddtaxmultixml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $CARD_TYPE = null;
    /** @var int|float|null */
    public $CARDREF = null;
    /** @var int|float|null */
    public $ADDTAXREF = null;
    /** @var int|float|null */
    public $ORDER_NUMBER = null;
    public ?string $ADD_TAX_CODE = null;
    public ?string $ADD_TAX_DEF = null;
    /** @var int|float|null */
    public $EFFECT_KDV = null;
    /** @var int|float|null */
    public $INLINENET = null;
}

/**
 * PurchasedServices
 */
class PurchasedServices extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $CARD_TYPE = null;
    public ?string $CODE = null;
    /** @var int|float|null */
    public $PARENTSRVREF = null;
    public ?string $PARENT_CODE = null;
    public ?string $DESCRIPTION = null;
    public ?string $DESCRIPTION2 = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUXIL_CODE2 = null;
    public ?string $AUXIL_CODE3 = null;
    public ?string $AUXIL_CODE4 = null;
    public ?string $AUXIL_CODE5 = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $VAT_PERC = null;
    /** @var int|float|null */
    public $EXTENREF = null;
    public ?string $PAYMENT_CODE = null;
    /** @var int|float|null */
    public $PAYMENTREF = null;
    public ?string $UNITSET_CODE = null;
    /** @var int|float|null */
    public $UNITSETREF = null;
    public ?string $XDEFS = null;
    /** @var RscollectionrsSrvinvenxml|null */
    public $WH_PARAMS = null;
    /** @var RscollectionrsServunitasgn|null */
    public $UNITS = null;
    /** @var RscollectionrsGlpostxml|null */
    public $GL_LINKS = null;
    public ?string $MAINUNITCODE = null;
    /** @var int|float|null */
    public $RETURNVAT = null;
    /** @var int|float|null */
    public $IMPORT_EXPENSES = null;
    /** @var int|float|null */
    public $AFFECT_COST = null;
    /** @var int|float|null */
    public $ADD_TAXREF = null;
    public ?string $ADD_TAXCODE = null;
    /** @var int|float|null */
    public $MULTI_ADD_TAX = null;
    /** @var RscollectionrsAddtaxmultixml|null */
    public $ADDTAXLIST = null;
    public ?string $ADDTAXDELLIST = null;
    /** @var int|float|null */
    public $DIST_TYPE = null;
    /** @var int|float|null */
    public $CANDEDUCT = null;
    public ?string $DEDUCT_CODE = null;
    public ?string $DEDUCT_DEF = null;
    /** @var int|float|null */
    public $DEDUCTION_PART1 = null;
    /** @var int|float|null */
    public $DEDUCTION_PART2 = null;
    /** @var int|float|null */
    public $EXT_ACCESS_FLAGS = null;
    /** @var int|float|null */
    public $EXEMPT_FROM_TAXDECL = null;
    /** @var int|float|null */
    public $CURRDIFF = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    public ?string $PROJECT_CODE = null;
    public ?string $GTIP_CODE = null;
    public ?string $CPA_CODE = null;
    /** @var int|float|null */
    public $PUBLICCOUNTRYREF = null;
    public ?string $PUBLIC_COUNTRY_CODE = null;
    public ?string $PUBLIC_COUNTRY_NAME = null;
    /** @var int|float|null */
    public $OPPOSESRVREF = null;
    public ?string $COUNTER_SRV_CODE = null;
    /** @var int|float|null */
    public $VEHICLE_EXP = null;
    /** @var int|float|null */
    public $VEHICLE_RENT = null;
    /** @var int|float|null */
    public $TEXTINCENG = null;
    /** @var int|float|null */
    public $OPEX = null;
    public ?string $UNITSERIALCODE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'WH_PARAMS' => \LogoObjects\Clients\purchasedServices\RscollectionrsSrvinvenxml::class,
            'UNITS' => \LogoObjects\Clients\purchasedServices\RscollectionrsServunitasgn::class,
            'GL_LINKS' => \LogoObjects\Clients\purchasedServices\RscollectionrsGlpostxml::class,
            'ADDTAXLIST' => \LogoObjects\Clients\purchasedServices\RscollectionrsAddtaxmultixml::class,
        ]);
    }
}

/**
 * PurchasedServicesQueryOptions
 */
class PurchasedServicesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var PurchasedServicesSortSpec|null */
    public $sort = null;
}

/**
 * PurchasedServicesSearchCriteria
 */
class PurchasedServicesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $recordStatus = null;
    /** @var mixed */
    public $cardType = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $parentsrvref = null;
    /** @var mixed */
    public $parentCode = null;
    /** @var mixed */
    public $description = null;
    /** @var mixed */
    public $description2 = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $auxilCode2 = null;
    /** @var mixed */
    public $auxilCode3 = null;
    /** @var mixed */
    public $auxilCode4 = null;
    /** @var mixed */
    public $auxilCode5 = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $vatPerc = null;
    /** @var mixed */
    public $extenref = null;
    /** @var mixed */
    public $paymentCode = null;
    /** @var mixed */
    public $paymentref = null;
    /** @var mixed */
    public $unitsetCode = null;
    /** @var mixed */
    public $unitsetref = null;
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
    public $xdefs = null;
    /** @var mixed */
    public $whParams = null;
    /** @var mixed */
    public $units = null;
    /** @var mixed */
    public $glLinks = null;
    /** @var mixed */
    public $mainunitcode = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $returnvat = null;
    /** @var mixed */
    public $importExpenses = null;
    /** @var mixed */
    public $affectCost = null;
    /** @var mixed */
    public $addTaxref = null;
    /** @var mixed */
    public $addTaxcode = null;
    /** @var mixed */
    public $multiAddTax = null;
    /** @var mixed */
    public $addtaxlist = null;
    /** @var mixed */
    public $addtaxdellist = null;
    /** @var mixed */
    public $distType = null;
    /** @var mixed */
    public $candeduct = null;
    /** @var mixed */
    public $deductCode = null;
    /** @var mixed */
    public $deductDef = null;
    /** @var mixed */
    public $deductionPart1 = null;
    /** @var mixed */
    public $deductionPart2 = null;
    /** @var mixed */
    public $extAccessFlags = null;
    /** @var mixed */
    public $exemptFromTaxdecl = null;
    /** @var mixed */
    public $currdiff = null;
    /** @var mixed */
    public $projectref = null;
    /** @var mixed */
    public $projectCode = null;
    /** @var mixed */
    public $gtipCode = null;
    /** @var mixed */
    public $cpaCode = null;
    /** @var mixed */
    public $publiccountryref = null;
    /** @var mixed */
    public $publicCountryCode = null;
    /** @var mixed */
    public $publicCountryName = null;
    /** @var mixed */
    public $opposesrvref = null;
    /** @var mixed */
    public $counterSrvCode = null;
    /** @var mixed */
    public $vehicleExp = null;
    /** @var mixed */
    public $vehicleRent = null;
    /** @var mixed */
    public $textinc = null;
    /** @var mixed */
    public $textinceng = null;
    /** @var mixed */
    public $opex = null;
    /** @var mixed */
    public $unitserialcode = null;
}

/**
 * PurchasedServicesAnalytics
 */
class PurchasedServicesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
