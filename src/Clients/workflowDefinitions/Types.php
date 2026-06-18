<?php

declare(strict_types=1);

namespace LogoObjects\Clients\workflowDefinitions;

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
 * RscollectionrsWflowcardlnxml
 */
class RscollectionrsWflowcardlnxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\workflowDefinitions\RsWflowcardlnxml::class],
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
 * RsWflowcardlnxml
 */
class RsWflowcardlnxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $WFCARDREF = null;
    /** @var int|float|null */
    public $LINENR = null;
    /** @var int|float|null */
    public $LEVEL = null;
    /** @var int|float|null */
    public $USERNR = null;
    /** @var int|float|null */
    public $ROLEREF = null;
    /** @var int|float|null */
    public $INFORM = null;
    /** @var int|float|null */
    public $TASKTIMEAMNT = null;
    /** @var int|float|null */
    public $TASKTIMEUNIT = null;
    /** @var int|float|null */
    public $DELAYSTATUS = null;
    /** @var int|float|null */
    public $SENDWARN = null;
    /** @var int|float|null */
    public $WARNTYPE = null;
    /** @var int|float|null */
    public $WARNUSERNR = null;
    /** @var int|float|null */
    public $WARNROLEREF = null;
    public ?string $CONDITION = null;
    /** @var int|float|null */
    public $TASKTYPE = null;
    public ?string $TASKDEF = null;
    /** @var int|float|null */
    public $PROCESSTYPE = null;
    public ?string $ROLECODE = null;
    public ?string $ROLENAME = null;
    public ?string $WARNROLECODE = null;
    public ?string $WARNROLENAME = null;
    public ?string $ROLEUSERL = null;
    public ?string $WROLEUSERL = null;
    public ?string $PROCESSSTR = null;
    /** @var int|float|null */
    public $REMINDER = null;
    /** @var int|float|null */
    public $IMPORTANCE = null;
    /** @var int|float|null */
    public $NOTIFICATION = null;
    /** @var int|float|null */
    public $EMAIL = null;
    /** @var int|float|null */
    public $SMS = null;
    /** @var int|float|null */
    public $MSG_TEMP_REF = null;
}

/**
 * WorkflowDefinitions
 */
class WorkflowDefinitions extends \LogoObjects\Types\BaseEntity
{
    public ?string $CODE = null;
    public ?string $NAME = null;
    public ?string $SPECODE = null;
    public ?string $CYPHCODE = null;
    /** @var int|float|null */
    public $WORKPLACE = null;
    /** @var int|float|null */
    public $ACTIONTYPE = null;
    /** @var int|float|null */
    public $ACTIVE = null;
    /** @var int|float|null */
    public $PRIORITY = null;
    /** @var int|float|null */
    public $WFUSERNR = null;
    /** @var int|float|null */
    public $WFROLEREF = null;
    public ?string $CONDITION = null;
    public ?string $BEGDATE = null;
    public ?string $ENDDATE = null;
    /** @var int|float|null */
    public $CAPIBLOCK_CREATEDBY = null;
    public ?string $CAPIBLOK_CREADEDDATE = null;
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
    /** @var RscollectionrsWflowcardlnxml|null */
    public $TRANSACTIONS = null;
    public ?string $DELLIST = null;
    public ?string $FLIST = null;
    public ?string $FDELLIST = null;
    public ?string $ROLECODE = null;
    public ?string $ROLENAME = null;
    public ?string $ROLEUSERL = null;
    /** @var int|float|null */
    public $NEXTWFREF = null;
    public ?string $NEXTWFCODE = null;
    /** @var int|float|null */
    public $STATUSGRPA = null;
    /** @var int|float|null */
    public $STATUSGRPB = null;
    /** @var int|float|null */
    public $STATUSGRPC = null;
    /** @var int|float|null */
    public $STATUSGRPD = null;
    /** @var int|float|null */
    public $STATUSGRPE = null;
    /** @var int|float|null */
    public $STATUSGRPF = null;
    /** @var int|float|null */
    public $CARD_TYPE = null;
    /** @var int|float|null */
    public $MODULE = null;
    /** @var int|float|null */
    public $PROC_TYPE = null;
    /** @var int|float|null */
    public $MSG_TEMP_REF = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'TRANSACTIONS' => \LogoObjects\Clients\workflowDefinitions\RscollectionrsWflowcardlnxml::class,
        ]);
    }
}

/**
 * WorkflowDefinitionsQueryOptions
 */
class WorkflowDefinitionsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var WorkflowDefinitionsSortSpec|null */
    public $sort = null;
}

/**
 * WorkflowDefinitionsSearchCriteria
 */
class WorkflowDefinitionsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $code = null;
    /** @var mixed */
    public $name = null;
    /** @var mixed */
    public $specode = null;
    /** @var mixed */
    public $cyphcode = null;
    /** @var mixed */
    public $workplace = null;
    /** @var mixed */
    public $actiontype = null;
    /** @var mixed */
    public $active = null;
    /** @var mixed */
    public $priority = null;
    /** @var mixed */
    public $wfusernr = null;
    /** @var mixed */
    public $wfroleref = null;
    /** @var mixed */
    public $condition = null;
    /** @var mixed */
    public $begdate = null;
    /** @var mixed */
    public $enddate = null;
    /** @var mixed */
    public $capiblockCreatedby = null;
    /** @var mixed */
    public $capiblokCreadeddate = null;
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
    public $textinc = null;
    /** @var mixed */
    public $wfstatus = null;
    /** @var mixed */
    public $transactions = null;
    /** @var mixed */
    public $dellist = null;
    /** @var mixed */
    public $flist = null;
    /** @var mixed */
    public $fdellist = null;
    /** @var mixed */
    public $rolecode = null;
    /** @var mixed */
    public $rolename = null;
    /** @var mixed */
    public $roleuserl = null;
    /** @var mixed */
    public $nextwfref = null;
    /** @var mixed */
    public $nextwfcode = null;
    /** @var mixed */
    public $statusgrpa = null;
    /** @var mixed */
    public $statusgrpb = null;
    /** @var mixed */
    public $statusgrpc = null;
    /** @var mixed */
    public $statusgrpd = null;
    /** @var mixed */
    public $statusgrpe = null;
    /** @var mixed */
    public $statusgrpf = null;
    /** @var mixed */
    public $cardType = null;
    /** @var mixed */
    public $module = null;
    /** @var mixed */
    public $procType = null;
    /** @var mixed */
    public $msgTempRef = null;
}

/**
 * WorkflowDefinitionsAnalytics
 */
class WorkflowDefinitionsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
