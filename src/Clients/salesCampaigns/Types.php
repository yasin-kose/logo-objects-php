<?php

declare(strict_types=1);

namespace LogoObjects\Clients\salesCampaigns;

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
 * RscollectionrsCamplinesxml
 */
class RscollectionrsCamplinesxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\salesCampaigns\RsCamplinesxml::class],
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
 * RsCamplinesxml
 */
class RsCamplinesxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $CAMPCARDREF = null;
    /** @var int|float|null */
    public $LINE_NR = null;
    /** @var int|float|null */
    public $LINE_TYPE = null;
    /** @var int|float|null */
    public $APPLY_TYPE = null;
    public ?string $COND_ITEM_CODE = null;
    public ?string $CONDITION = null;
    public ?string $FORMULA = null;
    /** @var int|float|null */
    public $ITEMREF = null;
    /** @var int|float|null */
    public $USREF = null;
    /** @var int|float|null */
    public $UOMREF = null;
    /** @var int|float|null */
    public $PROMIS_CLASS = null;
    public ?string $ITEM_CODE = null;
    public ?string $UOM_CODE = null;
    public ?string $LINE_EXP = null;
    /** @var int|float|null */
    public $ACCOUNTREF = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    public ?string $ACC_CODE = null;
    public ?string $CST_CODE = null;
    /** @var int|float|null */
    public $VARIANTREF = null;
    public ?string $VARIANTCODE = null;
    public ?string $CANCONFIG = null;
}

/**
 * SalesCampaigns
 */
class SalesCampaigns extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $CARD_TYPE = null;
    public ?string $CODE = null;
    public ?string $NAME = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    public ?string $BEG_DATE = null;
    public ?string $END_DATE = null;
    public ?string $PRIORITY_GRP = null;
    /** @var int|float|null */
    public $PRIORITY = null;
    /** @var int|float|null */
    public $DONT_FIX_LINES = null;
    public ?string $CLIENT_CODE = null;
    public ?string $CL_AUXIL_CODE = null;
    public ?string $TRADING_GRP = null;
    public ?string $PAY_PLAN_CODE = null;
    public ?string $PP_GROUP_CODE = null;
    public ?string $TOWN_CODE = null;
    public ?string $DISTRICT_CODE = null;
    public ?string $CITY_CODE = null;
    public ?string $COUNTRY_CODE = null;
    public ?string $VARIABLE_DEFS1 = null;
    public ?string $VARIABLE_DEFS2 = null;
    public ?string $VARIABLE_DEFS3 = null;
    public ?string $VARIABLE_DEFS4 = null;
    public ?string $VARIABLE_DEFS5 = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
    /** @var RscollectionrsCamplinesxml|null */
    public $CAMPAIGN_LINES = null;
    public ?string $DELLIST = null;
    public ?string $ORGLOGOID = null;
    public ?string $FICHE_DOC_NUMBER = null;
    public ?string $FICHE_AUXIL_CODE = null;
    public ?string $FICHE_AUTH_CODE = null;
    public ?string $CL_AUXIL_CODE2 = null;
    public ?string $CL_AUXIL_CODE3 = null;
    public ?string $CL_AUXIL_CODE4 = null;
    public ?string $CL_AUXIL_CODE5 = null;
    public ?string $CL_AUTH_CODE = null;
    public ?string $VARIABLE_DEFS6 = null;
    public ?string $VARIABLE_DEFS7 = null;
    public ?string $VARIABLE_DEFS8 = null;
    public ?string $VARIABLE_DEFS9 = null;
    public ?string $VARIABLE_DEFS10 = null;
    public ?string $GUID = null;
    public ?string $VARIABLE_DEFS11 = null;
    public ?string $VARIABLE_DEFS12 = null;
    public ?string $VARIABLE_DEFS13 = null;
    public ?string $VARIABLE_DEFS14 = null;
    public ?string $VARIABLE_DEFS15 = null;
    public ?string $VARIABLE_DEFS16 = null;
    public ?string $VARIABLE_DEFS17 = null;
    public ?string $VARIABLE_DEFS18 = null;
    public ?string $VARIABLE_DEFS19 = null;
    public ?string $VARIABLE_DEFS20 = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'CAMPAIGN_LINES' => \LogoObjects\Clients\salesCampaigns\RscollectionrsCamplinesxml::class,
        ]);
    }
}

/**
 * SalesCampaignsQueryOptions
 */
class SalesCampaignsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var SalesCampaignsSortSpec|null */
    public $sort = null;
}

/**
 * SalesCampaignsSearchCriteria
 */
class SalesCampaignsSearchCriteria extends \LogoObjects\Support\Entity
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
    public $name = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $begDate = null;
    /** @var mixed */
    public $endDate = null;
    /** @var mixed */
    public $priorityGrp = null;
    /** @var mixed */
    public $priority = null;
    /** @var mixed */
    public $dontFixLines = null;
    /** @var mixed */
    public $clientCode = null;
    /** @var mixed */
    public $clAuxilCode = null;
    /** @var mixed */
    public $tradingGrp = null;
    /** @var mixed */
    public $payPlanCode = null;
    /** @var mixed */
    public $ppGroupCode = null;
    /** @var mixed */
    public $townCode = null;
    /** @var mixed */
    public $districtCode = null;
    /** @var mixed */
    public $cityCode = null;
    /** @var mixed */
    public $countryCode = null;
    /** @var mixed */
    public $variableDefs1 = null;
    /** @var mixed */
    public $variableDefs2 = null;
    /** @var mixed */
    public $variableDefs3 = null;
    /** @var mixed */
    public $variableDefs4 = null;
    /** @var mixed */
    public $variableDefs5 = null;
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
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $wfstatus = null;
    /** @var mixed */
    public $campaignLines = null;
    /** @var mixed */
    public $dellist = null;
    /** @var mixed */
    public $orglogoid = null;
    /** @var mixed */
    public $ficheDocNumber = null;
    /** @var mixed */
    public $ficheAuxilCode = null;
    /** @var mixed */
    public $ficheAuthCode = null;
    /** @var mixed */
    public $clAuxilCode2 = null;
    /** @var mixed */
    public $clAuxilCode3 = null;
    /** @var mixed */
    public $clAuxilCode4 = null;
    /** @var mixed */
    public $clAuxilCode5 = null;
    /** @var mixed */
    public $clAuthCode = null;
    /** @var mixed */
    public $variableDefs6 = null;
    /** @var mixed */
    public $variableDefs7 = null;
    /** @var mixed */
    public $variableDefs8 = null;
    /** @var mixed */
    public $variableDefs9 = null;
    /** @var mixed */
    public $variableDefs10 = null;
    /** @var mixed */
    public $guid = null;
    /** @var mixed */
    public $variableDefs11 = null;
    /** @var mixed */
    public $variableDefs12 = null;
    /** @var mixed */
    public $variableDefs13 = null;
    /** @var mixed */
    public $variableDefs14 = null;
    /** @var mixed */
    public $variableDefs15 = null;
    /** @var mixed */
    public $variableDefs16 = null;
    /** @var mixed */
    public $variableDefs17 = null;
    /** @var mixed */
    public $variableDefs18 = null;
    /** @var mixed */
    public $variableDefs19 = null;
    /** @var mixed */
    public $variableDefs20 = null;
}

/**
 * SalesCampaignsAnalytics
 */
class SalesCampaignsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
