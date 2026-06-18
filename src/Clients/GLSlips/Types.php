<?php

declare(strict_types=1);

namespace LogoObjects\Clients\GLSlips;

/**
 * RscollectionrsGltransxml
 */
class RscollectionrsGltransxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\GLSlips\RsGltransxml::class],
        ]);
    }
}

/**
 * RscollectionrsAccdistdetlnxml
 */
class RscollectionrsAccdistdetlnxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\GLSlips\RsAccdistdetlnxml::class],
        ]);
    }
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
            'items' => [\LogoObjects\Clients\GLSlips\ExtendedFieldDefinitions::class],
        ]);
    }
}

/**
 * RscollectionrsLabelxml
 */
class RscollectionrsLabelxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\GLSlips\RsLabelxml::class],
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
 * RsGltransxml
 */
class RsGltransxml extends \LogoObjects\Types\BaseEntity
{
    public ?string $DATE = null;
    /** @var int|float|null */
    public $SIGN = null;
    public ?string $GL_CODE = null;
    /** @var int|float|null */
    public $ACCOUNTREF = null;
    /** @var int|float|null */
    public $ACCFICHEREF = null;
    public ?string $OHP_CODE = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $TRCODE = null;
    /** @var int|float|null */
    public $BRANCH = null;
    public ?string $PARENT_GLCODE = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUXIL_CODE2 = null;
    /** @var int|float|null */
    public $DEBIT = null;
    /** @var int|float|null */
    public $CREDIT = null;
    /** @var int|float|null */
    public $LINENO = null;
    public ?string $DESCRIPTION = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    /** @var int|float|null */
    public $CURR_TRANS = null;
    /** @var int|float|null */
    public $SOURCE_XRATEDIFF = null;
    /** @var int|float|null */
    public $RC_XRATE = null;
    /** @var int|float|null */
    public $RC_AMOUNT = null;
    /** @var int|float|null */
    public $TC_XRATE = null;
    /** @var int|float|null */
    public $TC_AMOUNT = null;
    /** @var int|float|null */
    public $QUANTITY = null;
    /** @var int|float|null */
    public $EXTENREF = null;
    /** @var int|float|null */
    public $EURO_DEBIT = null;
    /** @var int|float|null */
    public $EURO_CREDIT = null;
    /** @var int|float|null */
    public $CURRSEL_TRANS = null;
    /** @var int|float|null */
    public $SAFEDEP_TRANS = null;
    /** @var int|float|null */
    public $INFLATION_IDX = null;
    /** @var int|float|null */
    public $INFLATION_FLAG = null;
    /** @var int|float|null */
    public $CALC_FLAG = null;
    /** @var RscollectionrsAccdistdetlnxml|null */
    public $DETLIST = null;
    /** @var RscollectionrsAccdistdetlnxml|null */
    public $DETDELLIST = null;
    public ?string $CREDITGL_CODE = null;
    /** @var int|float|null */
    public $FROM_WHERE = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $DEFNFLDLIST = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $GENFLDLIST = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $BDGT_LINE_TYPE = null;
    /** @var int|float|null */
    public $STATUS = null;
    /** @var int|float|null */
    public $BDGT_FIC_TYPE = null;
    /** @var int|float|null */
    public $BDGT_FIC_REF = null;
    /** @var int|float|null */
    public $BDGT_FIC_LN_REF = null;
    /** @var int|float|null */
    public $BDGT_FIC_PRD_REF = null;
    /** @var int|float|null */
    public $FROM_DEM_TYPE = null;
    /** @var int|float|null */
    public $EM_DEM_FIC_REF = null;
    /** @var int|float|null */
    public $EM_DEM_LINE_REF = null;
    /** @var int|float|null */
    public $PARENT_LINE_REF = null;
    /** @var int|float|null */
    public $PAID_TOTAL = null;
    /** @var int|float|null */
    public $CLOSED = null;
    /** @var int|float|null */
    public $ACC_IS_AN_BDGT_LN = null;
    /** @var int|float|null */
    public $ACC_BDGT_ACC_REF = null;
    /** @var int|float|null */
    public $ACC_BDREF_LACC_REF = null;
    /** @var int|float|null */
    public $ACC_BDGT_PAY_REF = null;
    /** @var int|float|null */
    public $ACC_BDGT_PAY_LNREF = null;
    /** @var int|float|null */
    public $ACC_CRD_BDGT_ACC_PAYLINE = null;
    /** @var int|float|null */
    public $LINETAG = null;
    /** @var int|float|null */
    public $CREATE_BDGT_LN = null;
    /** @var int|float|null */
    public $MONTH = null;
    /** @var int|float|null */
    public $YEAR = null;
    /** @var int|float|null */
    public $GRPFIRMTRANS = null;
    public ?string $INVOICE_NO = null;
    public ?string $CL_NAME = null;
    public ?string $TAX_NR = null;
    /** @var int|float|null */
    public $FOR_TAX_DECL = null;
    public ?string $DOC_DATE = null;
    /** @var int|float|null */
    public $GLOBAL_LINE_NO = null;
    /** @var int|float|null */
    public $LINE_TYPE = null;
    /** @var int|float|null */
    public $CODE_REF = null;
    public ?string $CODE = null;
    public ?string $EBOOK_DOCDATE = null;
    /** @var int|float|null */
    public $EBOOK_UNDOCUMENTED = null;
    public ?string $EBOOK_DOCNR = null;
    /** @var int|float|null */
    public $EBOOK_DOCTYPE = null;
    public ?string $EBOOK_EXPLAIN = null;
    public ?string $EBOOK_PAYTYPE = null;
    /** @var int|float|null */
    public $EBOOK_NOPAY = null;
    public ?string $TCKNO = null;
    /** @var int|float|null */
    public $FUTURE_MONTH_LINE = null;
    /** @var int|float|null */
    public $FUTURE_MONTH_SOURCEREF = null;
    /** @var int|float|null */
    public $FUTURE_MONTH_COUNT = null;
    /** @var int|float|null */
    public $ELECT_DOC = null;
    /** @var int|float|null */
    public $EQUALIZE_BALANCE = null;
    public ?string $GUID = null;
    public ?string $PREVPERDATE = null;
    /** @var int|float|null */
    public $INFDIFFACCTYP = null;
    public ?string $TRADINGGRP = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DETLIST' => \LogoObjects\Clients\GLSlips\RscollectionrsAccdistdetlnxml::class,
            'DETDELLIST' => \LogoObjects\Clients\GLSlips\RscollectionrsAccdistdetlnxml::class,
            'DEFNFLDLIST' => \LogoObjects\Clients\GLSlips\Rscollectionextendedfielddefinitions::class,
            'GENFLDLIST' => \LogoObjects\Clients\GLSlips\Rscollectionextendedfielddefinitions::class,
        ]);
    }
}

/**
 * RsAccdistdetlnxml
 */
class RsAccdistdetlnxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $ACCFICHEREF = null;
    /** @var int|float|null */
    public $LINE_NO = null;
    /** @var int|float|null */
    public $ACCOUNTREF = null;
    /** @var int|float|null */
    public $PREVLINEREF = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    /** @var int|float|null */
    public $BRANCH = null;
    /** @var int|float|null */
    public $DISTRATE = null;
    /** @var int|float|null */
    public $CREDEBNET = null;
    /** @var int|float|null */
    public $EMUCREDEBNET = null;
    /** @var int|float|null */
    public $CURR_GL = null;
    /** @var int|float|null */
    public $TC_XRATE = null;
    /** @var int|float|null */
    public $TC_NET = null;
    /** @var int|float|null */
    public $RC_XRATE = null;
    /** @var int|float|null */
    public $RC_NET = null;
    /** @var int|float|null */
    public $CURRSEL_TOTALS = null;
    /** @var int|float|null */
    public $TYPE = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $TSIGN = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    /** @var int|float|null */
    public $DATE_REFERENCE = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
    public ?string $CENTERCODE = null;
    public ?string $PROJECTCODE = null;
    /** @var int|float|null */
    public $EDTCREDEBNET = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $STATUS = null;
    /** @var int|float|null */
    public $MONTH = null;
    /** @var int|float|null */
    public $YEAR = null;
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
 * RsLabelxml
 */
class RsLabelxml extends \LogoObjects\Types\BaseEntity
{
    public ?string $NAME = null;
    public ?string $DEFINITION = null;
    /** @var int|float|null */
    public $USER_TYPE = null;
}

/**
 * Glslips
 */
class Glslips extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $TYPE = null;
    public ?string $NUMBER = null;
    public ?string $DATE = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    public ?string $DOC_NUMBER = null;
    /** @var int|float|null */
    public $DIVISION = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $MODULENO = null;
    /** @var int|float|null */
    public $SOURCEFREF = null;
    /** @var int|float|null */
    public $EXTENREF = null;
    public ?string $NOTES1 = null;
    public ?string $NOTES2 = null;
    public ?string $NOTES3 = null;
    public ?string $NOTES4 = null;
    /** @var int|float|null */
    public $JOURNAL_NR = null;
    /** @var int|float|null */
    public $TOTAL_DEBIT = null;
    /** @var int|float|null */
    public $TOTAL_CREDIT = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    /** @var int|float|null */
    public $PRINT_COUNTER = null;
    public ?string $PRINT_DATE = null;
    /** @var int|float|null */
    public $SOURCE_MODULE = null;
    /** @var int|float|null */
    public $CANCFREF = null;
    /** @var int|float|null */
    public $EURO_TOTAL_DEBIT = null;
    /** @var int|float|null */
    public $EURO_TOTAL_CREDIT = null;
    /** @var int|float|null */
    public $CURRSEL_TOTALS = null;
    /** @var int|float|null */
    public $CURRSEL_DETAILS = null;
    /** @var int|float|null */
    public $RC_TOTAL_DEBIT = null;
    /** @var int|float|null */
    public $RC_TOTAL_CREDIT = null;
    /** @var RscollectionrsGltransxml|null */
    public $TRANSACTIONS = null;
    public ?string $XBUFS = null;
    public ?string $DOCALS = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $DOC_TYPE = null;
    public ?string $ORGLOGOID = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $DEFNFLDSLIST = null;
    /** @var Rscollectionextendedfielddefinitions|null */
    public $GENFLDLIST = null;
    /** @var int|float|null */
    public $STATUS = null;
    /** @var int|float|null */
    public $BDGT_FICHE_TYPE = null;
    /** @var int|float|null */
    public $BDGT_FICHE_REF = null;
    /** @var int|float|null */
    public $FROM_DEM_TYPE = null;
    /** @var int|float|null */
    public $EM_DEM_FICHE_REF = null;
    /** @var int|float|null */
    public $WFLOWCRDREF = null;
    /** @var int|float|null */
    public $VIA_AUTO_GL = null;
    /** @var int|float|null */
    public $APPROVE = null;
    public ?string $APPROVE_DATE = null;
    public ?string $DOC_DATE = null;
    /** @var int|float|null */
    public $IMPORT_DIST_SLIP = null;
    public ?string $EBOOK_DOCDATE = null;
    /** @var int|float|null */
    public $EBOOK_NODOCUMENT = null;
    public ?string $EBOOK_DOCNR = null;
    /** @var int|float|null */
    public $EBOOK_DOCTYPE = null;
    public ?string $EBOOK_EXPLAIN = null;
    public ?string $EBOOK_PAYTYPE = null;
    /** @var int|float|null */
    public $EBOOK_NOPAY = null;
    /** @var int|float|null */
    public $LINEBASEDDOCDET = null;
    /** @var int|float|null */
    public $CROSS_FLAG = null;
    /** @var int|float|null */
    public $CROSS_FICHEREF = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    public ?string $PROJECT_CODE = null;
    public ?string $PERS_BEG_DATE = null;
    public ?string $PERS_END_DATE = null;
    /** @var int|float|null */
    public $CONTROL_INFO = null;
    /** @var RscollectionrsLabelxml|null */
    public $LABEL_LIST = null;
    public ?string $GUID = null;
    /** @var int|float|null */
    public $INFLATIONDIFF = null;
    /** @var int|float|null */
    public $INFDIFFFCREF = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'TRANSACTIONS' => \LogoObjects\Clients\GLSlips\RscollectionrsGltransxml::class,
            'DEFNFLDSLIST' => \LogoObjects\Clients\GLSlips\Rscollectionextendedfielddefinitions::class,
            'GENFLDLIST' => \LogoObjects\Clients\GLSlips\Rscollectionextendedfielddefinitions::class,
            'LABEL_LIST' => \LogoObjects\Clients\GLSlips\RscollectionrsLabelxml::class,
        ]);
    }
}

/**
 * GlslipsQueryOptions
 */
class GlslipsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var GlslipsSortSpec|null */
    public $sort = null;
}

/**
 * GlslipsSearchCriteria
 */
class GlslipsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $type = null;
    /** @var mixed */
    public $number = null;
    /** @var mixed */
    public $date = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $docNumber = null;
    /** @var mixed */
    public $division = null;
    /** @var mixed */
    public $department = null;
    /** @var mixed */
    public $moduleno = null;
    /** @var mixed */
    public $sourcefref = null;
    /** @var mixed */
    public $extenref = null;
    /** @var mixed */
    public $notes1 = null;
    /** @var mixed */
    public $notes2 = null;
    /** @var mixed */
    public $notes3 = null;
    /** @var mixed */
    public $notes4 = null;
    /** @var mixed */
    public $journalNr = null;
    /** @var mixed */
    public $totalDebit = null;
    /** @var mixed */
    public $totalCredit = null;
    /** @var mixed */
    public $cancelled = null;
    /** @var mixed */
    public $printCounter = null;
    /** @var mixed */
    public $printDate = null;
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
    public $sourceModule = null;
    /** @var mixed */
    public $cancfref = null;
    /** @var mixed */
    public $euroTotalDebit = null;
    /** @var mixed */
    public $euroTotalCredit = null;
    /** @var mixed */
    public $currselTotals = null;
    /** @var mixed */
    public $currselDetails = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $rcTotalDebit = null;
    /** @var mixed */
    public $rcTotalCredit = null;
    /** @var mixed */
    public $textinc = null;
    /** @var mixed */
    public $transactions = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $docals = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $docType = null;
    /** @var mixed */
    public $orglogoid = null;
    /** @var mixed */
    public $defnfldslist = null;
    /** @var mixed */
    public $genfldlist = null;
    /** @var mixed */
    public $status = null;
    /** @var mixed */
    public $bdgtFicheType = null;
    /** @var mixed */
    public $bdgtFicheRef = null;
    /** @var mixed */
    public $fromDemType = null;
    /** @var mixed */
    public $emDemFicheRef = null;
    /** @var mixed */
    public $wflowcrdref = null;
    /** @var mixed */
    public $viaAutoGl = null;
    /** @var mixed */
    public $approve = null;
    /** @var mixed */
    public $approveDate = null;
    /** @var mixed */
    public $docDate = null;
    /** @var mixed */
    public $importDistSlip = null;
    /** @var mixed */
    public $ebookDocdate = null;
    /** @var mixed */
    public $ebookNodocument = null;
    /** @var mixed */
    public $ebookDocnr = null;
    /** @var mixed */
    public $ebookDoctype = null;
    /** @var mixed */
    public $ebookExplain = null;
    /** @var mixed */
    public $ebookPaytype = null;
    /** @var mixed */
    public $ebookNopay = null;
    /** @var mixed */
    public $linebaseddocdet = null;
    /** @var mixed */
    public $crossFlag = null;
    /** @var mixed */
    public $crossFicheref = null;
    /** @var mixed */
    public $projectref = null;
    /** @var mixed */
    public $projectCode = null;
    /** @var mixed */
    public $persBegDate = null;
    /** @var mixed */
    public $persEndDate = null;
    /** @var mixed */
    public $controlInfo = null;
    /** @var mixed */
    public $labelList = null;
    /** @var mixed */
    public $guid = null;
    /** @var mixed */
    public $inflationdiff = null;
    /** @var mixed */
    public $infdifffcref = null;
}

/**
 * GlslipsAnalytics
 */
class GlslipsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
