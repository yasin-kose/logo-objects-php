<?php

declare(strict_types=1);

namespace LogoObjects\Clients\GLAccounts;

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
 * Rscollectionextendedfielddefinitions
 */
class Rscollectionextendedfielddefinitions extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\GLAccounts\ExtendedFieldDefinitions::class],
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
 * ExtendedFieldDefinitions
 */
class ExtendedFieldDefinitions extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $MODULENR = null;
    /** @var int|float|null */
    public $LEVEL_ = null;
    /** @var int|float|null */
    public $PARENTREF = null;
    /** @var int|float|null */
    public $OWNERREF = null;
    public ?string $TEXTFLDS1 = null;
    public ?string $TEXTFLDS2 = null;
    public ?string $TEXTFLDS3 = null;
    public ?string $TEXTFLDS4 = null;
    public ?string $TEXTFLDS5 = null;
    public ?string $TEXTFLDS6 = null;
    public ?string $TEXTFLDS7 = null;
    public ?string $TEXTFLDS8 = null;
    public ?string $TEXTFLDS9 = null;
    public ?string $TEXTFLDS10 = null;
    public ?string $TEXTFLDS11 = null;
    public ?string $TEXTFLDS12 = null;
    public ?string $TEXTFLDS13 = null;
    public ?string $TEXTFLDS14 = null;
    public ?string $TEXTFLDS15 = null;
    public ?string $TEXTFLDS16 = null;
    public ?string $TEXTFLDS17 = null;
    public ?string $TEXTFLDS18 = null;
    public ?string $TEXTFLDS19 = null;
    public ?string $TEXTFLDS20 = null;
    public ?string $TEXTFLDS21 = null;
    public ?string $TEXTFLDS22 = null;
    public ?string $TEXTFLDS23 = null;
    public ?string $TEXTFLDS24 = null;
    public ?string $TEXTFLDS25 = null;
    public ?string $TEXTFLDS26 = null;
    public ?string $TEXTFLDS27 = null;
    public ?string $TEXTFLDS28 = null;
    public ?string $TEXTFLDS29 = null;
    public ?string $TEXTFLDS30 = null;
    public ?string $TEXTFLDS31 = null;
    public ?string $TEXTFLDS32 = null;
    public ?string $TEXTFLDS33 = null;
    public ?string $TEXTFLDS34 = null;
    public ?string $TEXTFLDS35 = null;
    public ?string $TEXTFLDS36 = null;
    public ?string $TEXTFLDS37 = null;
    public ?string $TEXTFLDS38 = null;
    public ?string $TEXTFLDS39 = null;
    public ?string $TEXTFLDS40 = null;
    public ?string $TEXTFLDS41 = null;
    public ?string $TEXTFLDS42 = null;
    public ?string $TEXTFLDS43 = null;
    public ?string $TEXTFLDS44 = null;
    public ?string $TEXTFLDS45 = null;
    public ?string $TEXTFLDS46 = null;
    public ?string $TEXTFLDS47 = null;
    public ?string $TEXTFLDS48 = null;
    public ?string $TEXTFLDS49 = null;
    public ?string $TEXTFLDS50 = null;
    /** @var int|float|null */
    public $NUMFLDS1 = null;
    /** @var int|float|null */
    public $NUMFLDS2 = null;
    /** @var int|float|null */
    public $NUMFLDS3 = null;
    /** @var int|float|null */
    public $NUMFLDS4 = null;
    /** @var int|float|null */
    public $NUMFLDS5 = null;
    /** @var int|float|null */
    public $NUMFLDS6 = null;
    /** @var int|float|null */
    public $NUMFLDS7 = null;
    /** @var int|float|null */
    public $NUMFLDS8 = null;
    /** @var int|float|null */
    public $NUMFLDS9 = null;
    /** @var int|float|null */
    public $NUMFLDS10 = null;
    /** @var int|float|null */
    public $NUMFLDS11 = null;
    /** @var int|float|null */
    public $NUMFLDS12 = null;
    /** @var int|float|null */
    public $NUMFLDS13 = null;
    /** @var int|float|null */
    public $NUMFLDS14 = null;
    /** @var int|float|null */
    public $NUMFLDS15 = null;
    /** @var int|float|null */
    public $NUMFLDS16 = null;
    /** @var int|float|null */
    public $NUMFLDS17 = null;
    /** @var int|float|null */
    public $NUMFLDS18 = null;
    /** @var int|float|null */
    public $NUMFLDS19 = null;
    /** @var int|float|null */
    public $NUMFLDS20 = null;
    /** @var int|float|null */
    public $NUMFLDS21 = null;
    /** @var int|float|null */
    public $NUMFLDS22 = null;
    /** @var int|float|null */
    public $NUMFLDS23 = null;
    /** @var int|float|null */
    public $NUMFLDS24 = null;
    /** @var int|float|null */
    public $NUMFLDS25 = null;
    /** @var int|float|null */
    public $NUMFLDS26 = null;
    /** @var int|float|null */
    public $NUMFLDS27 = null;
    /** @var int|float|null */
    public $NUMFLDS28 = null;
    /** @var int|float|null */
    public $NUMFLDS29 = null;
    /** @var int|float|null */
    public $NUMFLDS30 = null;
    /** @var int|float|null */
    public $NUMFLDS31 = null;
    /** @var int|float|null */
    public $NUMFLDS32 = null;
    /** @var int|float|null */
    public $NUMFLDS33 = null;
    /** @var int|float|null */
    public $NUMFLDS34 = null;
    /** @var int|float|null */
    public $NUMFLDS35 = null;
    /** @var int|float|null */
    public $NUMFLDS36 = null;
    /** @var int|float|null */
    public $NUMFLDS37 = null;
    /** @var int|float|null */
    public $NUMFLDS38 = null;
    /** @var int|float|null */
    public $NUMFLDS39 = null;
    /** @var int|float|null */
    public $NUMFLDS40 = null;
    /** @var int|float|null */
    public $NUMFLDS41 = null;
    /** @var int|float|null */
    public $NUMFLDS42 = null;
    /** @var int|float|null */
    public $NUMFLDS43 = null;
    /** @var int|float|null */
    public $NUMFLDS44 = null;
    /** @var int|float|null */
    public $NUMFLDS45 = null;
    /** @var int|float|null */
    public $NUMFLDS46 = null;
    /** @var int|float|null */
    public $NUMFLDS47 = null;
    /** @var int|float|null */
    public $NUMFLDS48 = null;
    /** @var int|float|null */
    public $NUMFLDS49 = null;
    /** @var int|float|null */
    public $NUMFLDS50 = null;
}

/**
 * Glaccounts
 */
class Glaccounts extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $ACTIVE = null;
    public ?string $CODE = null;
    public ?string $DESCRIPTION = null;
    public ?string $DESCRIPTION2 = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUXIL_CODE2 = null;
    public ?string $AUXIL_CODE3 = null;
    public ?string $AUXIL_CODE4 = null;
    public ?string $AUXIL_CODE5 = null;
    public ?string $AUTH_CODE = null;
    public ?string $UNIT = null;
    /** @var int|float|null */
    public $ADDINFOPTR = null;
    public ?string $OHP_CODE = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    public ?string $DIFFACC_CODE = null;
    /** @var int|float|null */
    public $CURRDIFREF = null;
    /** @var int|float|null */
    public $SUBACCOUNTS = null;
    /** @var int|float|null */
    public $LEVEL = null;
    /** @var int|float|null */
    public $GROUP_CODE = null;
    /** @var int|float|null */
    public $ACCOUNT_TYPE = null;
    /** @var int|float|null */
    public $MNDTRY_QUAN = null;
    /** @var int|float|null */
    public $MNDTRY_OHP = null;
    /** @var int|float|null */
    public $EXTENREF = null;
    public ?string $EDITCODE = null;
    public ?string $XBUFS = null;
    public ?string $LANGP = null;
    /** @var int|float|null */
    public $ACCOUNT_CHAR = null;
    /** @var int|float|null */
    public $INFLATION_FLAG = null;
    /** @var int|float|null */
    public $CURR_DIFF_DEBTREF = null;
    public ?string $DIFFDEBTACC_CODE = null;
    /** @var int|float|null */
    public $GRPTRANSACCREF = null;
    public ?string $GRPTRANSACC_CODE = null;
    /** @var int|float|null */
    public $CATEGORY = null;
    /** @var int|float|null */
    public $PROJECT_CONTROL = null;
    public ?string $INF_DIFF_ACCCODE = null;
    /** @var int|float|null */
    public $INF_DIFF_ACCREF = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $DEFNFLDSLIST = null;
    public ?string $FTFLAGS = null;
    /** @var int|float|null */
    public $CCURRENCY = null;
    /** @var int|float|null */
    public $CURRATETYPE = null;
    /** @var int|float|null */
    public $FIXEDCURRTYPE = null;
    public ?string $CL_NAME = null;
    public ?string $TAX_NR = null;
    /** @var int|float|null */
    public $FOR_TAX_DECL = null;
    /** @var int|float|null */
    public $VAT_ACC = null;
    /** @var int|float|null */
    public $IS_BDGT_LINE = null;
    /** @var int|float|null */
    public $BDGTACCREF = null;
    public ?string $BDGT_ACC_CODE = null;
    /** @var int|float|null */
    public $BDREFLACCREF = null;
    public ?string $BDGT_REFL_ACC_CODE = null;
    /** @var int|float|null */
    public $BDGTPAYAREF = null;
    public ?string $BDGT_PAY_ACC_CODE = null;
    /** @var int|float|null */
    public $BDPAYREFLAREF = null;
    public ?string $BDGT_PAY_REFL_ACC_CODE = null;
    /** @var int|float|null */
    public $CRBDGTACCLN = null;
    /** @var int|float|null */
    public $CRBDGTPAYALN = null;
    public ?string $CORP_CODE1 = null;
    public ?string $CORP_CODE2 = null;
    public ?string $CORP_CODE3 = null;
    public ?string $CORP_CODE4 = null;
    public ?string $FUNC_CODE1 = null;
    public ?string $FUNC_CODE2 = null;
    public ?string $FUNC_CODE3 = null;
    public ?string $FUNC_CODE4 = null;
    public ?string $FIN_CODE = null;
    public ?string $ECO_CODE1 = null;
    public ?string $ECO_CODE2 = null;
    public ?string $ECO_CODE3 = null;
    public ?string $ECO_CODE4 = null;
    /** @var int|float|null */
    public $VATREFLAREF = null;
    public ?string $VAT_REFL_ACC_CODE = null;
    /** @var int|float|null */
    public $VATREFLOTHAREF = null;
    public ?string $VAT_REFL_OTH_ACC_CODE = null;
    public ?string $TCKNO = null;
    /** @var int|float|null */
    public $PERSCOMPANY = null;
    /** @var int|float|null */
    public $IS_CASH = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $TEXTINCENG = null;
    public ?string $ITEXTENG = null;
    public ?string $GUID = null;
    public ?string $ACCRELCONTROL = null;
    /** @var int|float|null */
    public $REFLECTINCACCREF = null;
    /** @var int|float|null */
    public $REFLECTOUTCACCREF = null;
    /** @var int|float|null */
    public $INFCORRACCREF = null;
    /** @var int|float|null */
    public $POSDIFFACCREF = null;
    /** @var int|float|null */
    public $NEGDIFFACCREF = null;
    /** @var int|float|null */
    public $PINDEXCALCTYP = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DEFNFLDSLIST' => \LogoObjects\Clients\GLAccounts\Rscollectionextendedfielddefinitions::class,
        ]);
    }
}

/**
 * GlaccountsQueryOptions
 */
class GlaccountsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var GlaccountsSortSpec|null */
    public $sort = null;
}

/**
 * GlaccountsSearchCriteria
 */
class GlaccountsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $recordStatus = null;
    /** @var mixed */
    public $active = null;
    /** @var mixed */
    public $code = null;
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
    public $unit = null;
    /** @var mixed */
    public $addinfoptr = null;
    /** @var mixed */
    public $ohpCode = null;
    /** @var mixed */
    public $centerref = null;
    /** @var mixed */
    public $diffaccCode = null;
    /** @var mixed */
    public $currdifref = null;
    /** @var mixed */
    public $subaccounts = null;
    /** @var mixed */
    public $level = null;
    /** @var mixed */
    public $groupCode = null;
    /** @var mixed */
    public $accountType = null;
    /** @var mixed */
    public $mndtryQuan = null;
    /** @var mixed */
    public $mndtryOhp = null;
    /** @var mixed */
    public $extenref = null;
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
    public $editcode = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $langp = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $accountChar = null;
    /** @var mixed */
    public $inflationFlag = null;
    /** @var mixed */
    public $currDiffDebtref = null;
    /** @var mixed */
    public $diffdebtaccCode = null;
    /** @var mixed */
    public $grptransaccref = null;
    /** @var mixed */
    public $grptransaccCode = null;
    /** @var mixed */
    public $category = null;
    /** @var mixed */
    public $projectControl = null;
    /** @var mixed */
    public $infDiffAcccode = null;
    /** @var mixed */
    public $infDiffAccref = null;
    /** @var mixed */
    public $defnfldslist = null;
    /** @var mixed */
    public $ftflags = null;
    /** @var mixed */
    public $ccurrency = null;
    /** @var mixed */
    public $curratetype = null;
    /** @var mixed */
    public $fixedcurrtype = null;
    /** @var mixed */
    public $clName = null;
    /** @var mixed */
    public $taxNr = null;
    /** @var mixed */
    public $forTaxDecl = null;
    /** @var mixed */
    public $vatAcc = null;
    /** @var mixed */
    public $isBdgtLine = null;
    /** @var mixed */
    public $bdgtaccref = null;
    /** @var mixed */
    public $bdgtAccCode = null;
    /** @var mixed */
    public $bdreflaccref = null;
    /** @var mixed */
    public $bdgtReflAccCode = null;
    /** @var mixed */
    public $bdgtpayaref = null;
    /** @var mixed */
    public $bdgtPayAccCode = null;
    /** @var mixed */
    public $bdpayreflaref = null;
    /** @var mixed */
    public $bdgtPayReflAccCode = null;
    /** @var mixed */
    public $crbdgtaccln = null;
    /** @var mixed */
    public $crbdgtpayaln = null;
    /** @var mixed */
    public $corpCode1 = null;
    /** @var mixed */
    public $corpCode2 = null;
    /** @var mixed */
    public $corpCode3 = null;
    /** @var mixed */
    public $corpCode4 = null;
    /** @var mixed */
    public $funcCode1 = null;
    /** @var mixed */
    public $funcCode2 = null;
    /** @var mixed */
    public $funcCode3 = null;
    /** @var mixed */
    public $funcCode4 = null;
    /** @var mixed */
    public $finCode = null;
    /** @var mixed */
    public $ecoCode1 = null;
    /** @var mixed */
    public $ecoCode2 = null;
    /** @var mixed */
    public $ecoCode3 = null;
    /** @var mixed */
    public $ecoCode4 = null;
    /** @var mixed */
    public $vatreflaref = null;
    /** @var mixed */
    public $vatReflAccCode = null;
    /** @var mixed */
    public $vatreflotharef = null;
    /** @var mixed */
    public $vatReflOthAccCode = null;
    /** @var mixed */
    public $tckno = null;
    /** @var mixed */
    public $perscompany = null;
    /** @var mixed */
    public $isCash = null;
    /** @var mixed */
    public $textinc = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $textinceng = null;
    /** @var mixed */
    public $itexteng = null;
    /** @var mixed */
    public $guid = null;
    /** @var mixed */
    public $accrelcontrol = null;
    /** @var mixed */
    public $reflectincaccref = null;
    /** @var mixed */
    public $reflectoutcaccref = null;
    /** @var mixed */
    public $infcorraccref = null;
    /** @var mixed */
    public $posdiffaccref = null;
    /** @var mixed */
    public $negdiffaccref = null;
    /** @var mixed */
    public $pindexcalctyp = null;
}

/**
 * GlaccountsAnalytics
 */
class GlaccountsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
