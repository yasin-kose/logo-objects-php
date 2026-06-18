<?php

declare(strict_types=1);

namespace LogoObjects\Clients\quickProductionSlips;

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
 * RscollectionrsQprodtransxml
 */
class RscollectionrsQprodtransxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\quickProductionSlips\RsQprodtransxml::class],
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
 * RsQprodtransxml
 */
class RsQprodtransxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $LOGICALREF = null;
    /** @var int|float|null */
    public $STCREF = null;
    /** @var int|float|null */
    public $AMNT = null;
    /** @var int|float|null */
    public $PRICE = null;
    /** @var int|float|null */
    public $PERC = null;
    /** @var int|float|null */
    public $MAINCREF = null;
    /** @var int|float|null */
    public $LINENO = null;
    /** @var int|float|null */
    public $LOSTFACTOR = null;
    /** @var int|float|null */
    public $SOURCEINDEX = null;
    /** @var int|float|null */
    public $UOMREF = null;
    /** @var int|float|null */
    public $CARDTYPE = null;
    public ?string $SCODE = null;
    public ?string $SDEF = null;
    public ?string $UEDIT = null;
    public ?string $UUNIT = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    public ?string $ARP_CODE = null;
    /** @var int|float|null */
    public $COMP_TYPE = null;
    /** @var int|float|null */
    public $ALT_ITEM_USE = null;
    /** @var int|float|null */
    public $UNIT_CONV1 = null;
    /** @var int|float|null */
    public $UNIT_CONV2 = null;
    /** @var int|float|null */
    public $UNIT_CONV3 = null;
    /** @var int|float|null */
    public $UNIT_CONV4 = null;
    /** @var int|float|null */
    public $UNIT_CONV5 = null;
    /** @var int|float|null */
    public $UNIT_CONV6 = null;
    /** @var int|float|null */
    public $UNIT_CONV7 = null;
    /** @var int|float|null */
    public $UNIT_CONV8 = null;
    /** @var int|float|null */
    public $GROSS_U_INFO1 = null;
    /** @var int|float|null */
    public $GROSS_U_INFO2 = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    public ?string $BUNIT = null;
}

/**
 * QuickProductionSlips
 */
class QuickProductionSlips extends \LogoObjects\Types\BaseEntity
{
    public ?string $FICHENO = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $FTIME = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $ITEMREF = null;
    public ?string $ITEM_CODE = null;
    /** @var int|float|null */
    public $UOMREF = null;
    public ?string $UEDIT = null;
    /** @var int|float|null */
    public $USREF = null;
    public ?string $UUNIT = null;
    /** @var int|float|null */
    public $UINFO1 = null;
    /** @var int|float|null */
    public $UINFO2 = null;
    /** @var int|float|null */
    public $UINFO3 = null;
    /** @var int|float|null */
    public $UINFO4 = null;
    /** @var int|float|null */
    public $UINFO5 = null;
    /** @var int|float|null */
    public $UINFO6 = null;
    /** @var int|float|null */
    public $UINFO7 = null;
    /** @var int|float|null */
    public $UINFO8 = null;
    /** @var int|float|null */
    public $ORDERREF = null;
    public ?string $ORDERFCNO = null;
    /** @var int|float|null */
    public $AMOUNT = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $SOURCEINDEX = null;
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
    public $WFSTATUS = null;
    /** @var int|float|null */
    public $PRODTYPE = null;
    /** @var int|float|null */
    public $LOSTFACTOR = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    public ?string $PROJECT_CODE = null;
    public ?string $DEF = null;
    /** @var RscollectionrsQprodtransxml|null */
    public $TRANSACTIONS = null;
    public ?string $QPRODDELLINE = null;
    /** @var int|float|null */
    public $CUROP = null;
    /** @var int|float|null */
    public $FCNOCHANGED = null;
    /** @var int|float|null */
    public $DOCNRREF = null;
    public ?string $STFCLIST = null;
    /** @var int|float|null */
    public $DELOLDFC = null;
    /** @var int|float|null */
    public $DELPROCTYP = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $APPROVE = null;
    public ?string $APPROVE_DATE = null;
    /** @var int|float|null */
    public $CREATE_STFICHES = null;
    /** @var int|float|null */
    public $CALC_OPTION = null;
    /** @var int|float|null */
    public $CLIENTREF = null;
    public ?string $ARP_CODE = null;
    /** @var int|float|null */
    public $CREATE_WH_FICHE = null;
    public ?string $NOTES1 = null;
    public ?string $NOTES2 = null;
    public ?string $NOTES3 = null;
    public ?string $NOTES4 = null;
    /** @var int|float|null */
    public $STATUS = null;
    public ?string $GUID = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'TRANSACTIONS' => \LogoObjects\Clients\quickProductionSlips\RscollectionrsQprodtransxml::class,
        ]);
    }
}

/**
 * QuickProductionSlipsQueryOptions
 */
class QuickProductionSlipsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var QuickProductionSlipsSortSpec|null */
    public $sort = null;
}

/**
 * QuickProductionSlipsSearchCriteria
 */
class QuickProductionSlipsSearchCriteria extends \LogoObjects\Support\Entity
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
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $itemref = null;
    /** @var mixed */
    public $itemCode = null;
    /** @var mixed */
    public $uomref = null;
    /** @var mixed */
    public $uedit = null;
    /** @var mixed */
    public $usref = null;
    /** @var mixed */
    public $uunit = null;
    /** @var mixed */
    public $uinfo1 = null;
    /** @var mixed */
    public $uinfo2 = null;
    /** @var mixed */
    public $uinfo3 = null;
    /** @var mixed */
    public $uinfo4 = null;
    /** @var mixed */
    public $uinfo5 = null;
    /** @var mixed */
    public $uinfo6 = null;
    /** @var mixed */
    public $uinfo7 = null;
    /** @var mixed */
    public $uinfo8 = null;
    /** @var mixed */
    public $orderref = null;
    /** @var mixed */
    public $orderfcno = null;
    /** @var mixed */
    public $amount = null;
    /** @var mixed */
    public $department = null;
    /** @var mixed */
    public $sourceindex = null;
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
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $wfstatus = null;
    /** @var mixed */
    public $prodtype = null;
    /** @var mixed */
    public $lostfactor = null;
    /** @var mixed */
    public $projectref = null;
    /** @var mixed */
    public $projectCode = null;
    /** @var mixed */
    public $def = null;
    /** @var mixed */
    public $transactions = null;
    /** @var mixed */
    public $qproddelline = null;
    /** @var mixed */
    public $curop = null;
    /** @var mixed */
    public $fcnochanged = null;
    /** @var mixed */
    public $docnrref = null;
    /** @var mixed */
    public $stfclist = null;
    /** @var mixed */
    public $deloldfc = null;
    /** @var mixed */
    public $delproctyp = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $approve = null;
    /** @var mixed */
    public $approveDate = null;
    /** @var mixed */
    public $createStfiches = null;
    /** @var mixed */
    public $calcOption = null;
    /** @var mixed */
    public $clientref = null;
    /** @var mixed */
    public $arpCode = null;
    /** @var mixed */
    public $createWhFiche = null;
    /** @var mixed */
    public $notes1 = null;
    /** @var mixed */
    public $notes2 = null;
    /** @var mixed */
    public $notes3 = null;
    /** @var mixed */
    public $notes4 = null;
    /** @var mixed */
    public $status = null;
    /** @var mixed */
    public $guid = null;
}

/**
 * QuickProductionSlipsAnalytics
 */
class QuickProductionSlipsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
