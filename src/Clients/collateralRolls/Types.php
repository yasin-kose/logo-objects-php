<?php

declare(strict_types=1);

namespace LogoObjects\Clients\collateralRolls;

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
 * RscollectionrsCollatrlcardxml
 */
class RscollectionrsCollatrlcardxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\collateralRolls\RsCollatrlcardxml::class],
        ]);
    }
}

/**
 * RscollectionrsCollatrltransxml
 */
class RscollectionrsCollatrltransxml extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\collateralRolls\RsCollatrltransxml::class],
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
 * RsCollatrlcardxml
 */
class RsCollatrlcardxml extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $DOC = null;
    /** @var int|float|null */
    public $CURRSTAT = null;
    public ?string $PORTFOYNO = null;
    /** @var int|float|null */
    public $PERIODIC = null;
    public ?string $BEGDATE = null;
    public ?string $ENDDATE = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    public ?string $DOCODE = null;
    /** @var int|float|null */
    public $COLLATRLTYPE = null;
    /** @var int|float|null */
    public $COLLUSETYPE = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    public ?string $BANK_CODE = null;
    /** @var int|float|null */
    public $BANKREF = null;
    /** @var int|float|null */
    public $BANKPROCTYPE = null;
    public ?string $OWN_ARP_CODE = null;
    /** @var int|float|null */
    public $CLCARDREF = null;
    public ?string $CLBANKNAME = null;
    public ?string $CLBANKBRANCH = null;
    public ?string $CLBANKACCNO = null;
    /** @var int|float|null */
    public $LINEEXCTYP = null;
    /** @var int|float|null */
    public $AMOUNT = null;
    /** @var int|float|null */
    public $TRCURR = null;
    /** @var int|float|null */
    public $TRRATE = null;
    /** @var int|float|null */
    public $TRNET = null;
    /** @var int|float|null */
    public $REPORTRATE = null;
    /** @var int|float|null */
    public $REPORTNET = null;
    /** @var int|float|null */
    public $COMMTYPE = null;
    /** @var int|float|null */
    public $COMMRATE = null;
    /** @var int|float|null */
    public $COMMAMOUNT = null;
    /** @var int|float|null */
    public $BSMV = null;
    /** @var int|float|null */
    public $STAMPTAX = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    /** @var int|float|null */
    public $RISKFACTOR = null;
    public ?string $DEFINITION = null;
    public ?string $OWING = null;
    public ?string $SERINO = null;
    public ?string $MUHABIR = null;
    /** @var int|float|null */
    public $BRANCH = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    public ?string $CITY = null;
    public ?string $KEFIL = null;
    /** @var int|float|null */
    public $STAMPAMOUNT = null;
    /** @var int|float|null */
    public $COMPAYOWNER = null;
    public ?string $COMPAYBANK_CODE = null;
    /** @var int|float|null */
    public $COMPAYBANKREF = null;
    public ?string $MORTGTYPE = null;
    public ?string $MORTGRANK = null;
    public ?string $MORTGYEVMINO = null;
    public ?string $MORTGCILTNO = null;
    public ?string $MORTGPAGENO = null;
    public ?string $MORTGLINENO = null;
    public ?string $MORTGDATE = null;
    public ?string $MORTGPAFTANO = null;
    public ?string $MORTGADANO = null;
    public ?string $MORTGPARSELNO = null;
    public ?string $MORTGAREA = null;
    public ?string $MORTGBUILDAMNT = null;
    public ?string $MORTGBLOCKNO = null;
    public ?string $MORTGLAYERNO = null;
    public ?string $MORTGINDPARTNO = null;
    public ?string $MORTGADDR1 = null;
    public ?string $MORTGADDR2 = null;
    /** @var int|float|null */
    public $CREATEDBY = null;
    public ?string $CREADEDDATE = null;
    /** @var int|float|null */
    public $CREATEDHOUR = null;
    /** @var int|float|null */
    public $CREATEDMIN = null;
    /** @var int|float|null */
    public $CREATEDSEC = null;
    /** @var int|float|null */
    public $MODIFIEDBY = null;
    public ?string $MODIFIEDDATE = null;
    /** @var int|float|null */
    public $MODIFIEDHOUR = null;
    /** @var int|float|null */
    public $MODIFIEDMIN = null;
    /** @var int|float|null */
    public $MODIFIEDSEC = null;
    /** @var int|float|null */
    public $PRINT_CNT = null;
    public ?string $PRINT_DATE = null;
    /** @var RscollectionrsCollatrltransxml|null */
    public $TRANSACTIONS = null;
    /** @var int|float|null */
    public $STAMPREQ = null;
    public ?string $BANKCODE = null;
    public ?string $BANKNAME = null;
    public ?string $BRANCHNO = null;
    public ?string $BANKACCNO = null;
    /** @var int|float|null */
    public $UPDATED = null;
    /** @var int|float|null */
    public $COLLSEL = null;
    /** @var int|float|null */
    public $FROMROLL = null;
    public ?string $ROLLPTR = null;
    /** @var int|float|null */
    public $LOGICALREF = null;
    public ?string $TRANS_DATE = null;
    /** @var int|float|null */
    public $COLLCARDREF = null;
    /** @var int|float|null */
    public $COLLROLLREF = null;
    /** @var int|float|null */
    public $TRANS_TRCODE = null;
    /** @var int|float|null */
    public $TRANS_PROCTYPE = null;
    /** @var int|float|null */
    public $TRANS_ACCOUNTED = null;
    /** @var int|float|null */
    public $TRANS_STATUS = null;
    /** @var int|float|null */
    public $TRANS_CLCARDREF = null;
    /** @var int|float|null */
    public $TRANS_BANKREF = null;
    /** @var int|float|null */
    public $TRANS_STATNO = null;
    /** @var int|float|null */
    public $TRANS_LINENO = null;
    public ?string $TRANS_ACC_CODE = null;
    /** @var int|float|null */
    public $TRANS_ACCREF = null;
    public ?string $TRANS_COST_CODE = null;
    /** @var int|float|null */
    public $TRANS_COSTREF = null;
    public ?string $TRANS_CRSACC_CODE = null;
    /** @var int|float|null */
    public $TRANS_CRSACCREF = null;
    public ?string $TRANS_CRSCOST_CODE = null;
    /** @var int|float|null */
    public $TRANS_CRSCOSTREF = null;
    /** @var int|float|null */
    public $TRANS_CANCELLED = null;
    /** @var int|float|null */
    public $TRANS_LINEEXCTYP = null;
    /** @var int|float|null */
    public $COLLECLN = null;
    public ?string $OWCLCODE = null;
    /** @var int|float|null */
    public $NOPROT = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $XCNT = null;
    public ?string $DOCALS = null;
    /** @var int|float|null */
    public $EDTCURR = null;
    /** @var int|float|null */
    public $EDTAMOUNT = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $PNOCHANGED = null;
    /** @var int|float|null */
    public $CREATED = null;
    /** @var int|float|null */
    public $REPAYPLANREF = null;
    public ?string $REPAY_PLAN_CODE = null;
    /** @var int|float|null */
    public $HAS_COMM_PAID = null;
    /** @var int|float|null */
    public $EXC_STAMP_TAX = null;
    /** @var int|float|null */
    public $BSMVTAX = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'TRANSACTIONS' => \LogoObjects\Clients\collateralRolls\RscollectionrsCollatrltransxml::class,
        ]);
    }
}

/**
 * RsCollatrltransxml
 */
class RsCollatrltransxml extends \LogoObjects\Types\BaseEntity
{
    public ?string $DATE = null;
    /** @var int|float|null */
    public $COLLCARDREF = null;
    /** @var int|float|null */
    public $COLLROLLREF = null;
    /** @var int|float|null */
    public $TRCODE = null;
    /** @var int|float|null */
    public $PROCTYPE = null;
    /** @var int|float|null */
    public $ACCOUNTED = null;
    /** @var int|float|null */
    public $STATUS = null;
    /** @var int|float|null */
    public $CLCARDREF = null;
    /** @var int|float|null */
    public $BANKREF = null;
    /** @var int|float|null */
    public $STATNO = null;
    /** @var int|float|null */
    public $LINENO = null;
    /** @var int|float|null */
    public $ACCREF = null;
    /** @var int|float|null */
    public $COSTREF = null;
    /** @var int|float|null */
    public $CRSACCREF = null;
    /** @var int|float|null */
    public $CRSCOSTREF = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    /** @var int|float|null */
    public $LINEEXCTYP = null;
    public ?string $STATSTR = null;
    public ?string $ACCSTR = null;
    public ?string $FCNR = null;
    public ?string $FCTYPE = null;
}

/**
 * CollateralRolls
 */
class CollateralRolls extends \LogoObjects\Types\BaseEntity
{
    public ?string $ARP_CODE = null;
    /** @var int|float|null */
    public $CLCARDREF = null;
    public ?string $OHP_CODE = null;
    /** @var int|float|null */
    public $CENTERREF = null;
    public ?string $ROLLNO = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $TRCODE = null;
    /** @var int|float|null */
    public $BRANCH = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $PROCTYPE = null;
    /** @var int|float|null */
    public $ACCOUNTED = null;
    /** @var int|float|null */
    public $DOCCNT = null;
    /** @var int|float|null */
    public $PRINTCNT = null;
    public ?string $PRINT_DATE = null;
    /** @var int|float|null */
    public $TOTAL = null;
    /** @var int|float|null */
    public $TRCURR = null;
    /** @var int|float|null */
    public $TRRATE = null;
    /** @var int|float|null */
    public $TRNET = null;
    /** @var int|float|null */
    public $REPORTRATE = null;
    /** @var int|float|null */
    public $REPORTNET = null;
    public ?string $GENEXP1 = null;
    public ?string $GENEXP2 = null;
    public ?string $GENEXP3 = null;
    public ?string $GENEXP4 = null;
    /** @var int|float|null */
    public $ACCFICHEREF = null;
    public ?string $ACC_CODE = null;
    /** @var int|float|null */
    public $ACCREF = null;
    /** @var int|float|null */
    public $CREATEDBY = null;
    public ?string $CREADEDDATE = null;
    /** @var int|float|null */
    public $CREATEDHOUR = null;
    /** @var int|float|null */
    public $CREATEDMIN = null;
    /** @var int|float|null */
    public $CREATEDSEC = null;
    /** @var int|float|null */
    public $MODIFIEDBY = null;
    public ?string $MODIFIEDDATE = null;
    /** @var int|float|null */
    public $MODIFIEDHOUR = null;
    /** @var int|float|null */
    public $MODIFIEDMIN = null;
    /** @var int|float|null */
    public $MODIFIEDSEC = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    /** @var int|float|null */
    public $CANCELLEDACC = null;
    public ?string $TRADINGGRP = null;
    /** @var int|float|null */
    public $GENEXCTYP = null;
    /** @var int|float|null */
    public $LINEEXCTYP = null;
    /** @var int|float|null */
    public $WFSTATUS = null;
    public ?string $PROJECT_CODE = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    /** @var RscollectionrsCollatrlcardxml|null */
    public $CARDS = null;
    /** @var int|float|null */
    public $UPDATED = null;
    public ?string $AVRGDATE = null;
    public ?string $CLTITLE = null;
    /** @var int|float|null */
    public $NEWDOCTYPE = null;
    /** @var int|float|null */
    public $COLLDOCTYPE = null;
    /** @var int|float|null */
    public $NEWCOLLSTAT = null;
    public ?string $FCDUEDATE = null;
    /** @var int|float|null */
    public $VALSSET = null;
    /** @var int|float|null */
    public $CUROP = null;
    public ?string $XBUFS = null;
    /** @var int|float|null */
    public $XCNT = null;
    public ?string $DOCALS = null;
    /** @var int|float|null */
    public $EDTTOTAL = null;
    /** @var int|float|null */
    public $FCNOCHANGED = null;
    /** @var int|float|null */
    public $DOCNRREF = null;
    /** @var int|float|null */
    public $TEXTCHG = null;
    public ?string $ITEXT = null;
    /** @var int|float|null */
    public $ACC_FICHE_SITEID = null;
    /** @var int|float|null */
    public $CANCEL_AUTO_GL_PROC = null;
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
    public $APPROVE = null;
    public ?string $APPROVEDATE = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'CARDS' => \LogoObjects\Clients\collateralRolls\RscollectionrsCollatrlcardxml::class,
        ]);
    }
}

/**
 * CollateralRollsQueryOptions
 */
class CollateralRollsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var CollateralRollsSortSpec|null */
    public $sort = null;
}

/**
 * CollateralRollsSearchCriteria
 */
class CollateralRollsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $arpCode = null;
    /** @var mixed */
    public $clcardref = null;
    /** @var mixed */
    public $ohpCode = null;
    /** @var mixed */
    public $centerref = null;
    /** @var mixed */
    public $rollno = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $date = null;
    /** @var mixed */
    public $trcode = null;
    /** @var mixed */
    public $branch = null;
    /** @var mixed */
    public $department = null;
    /** @var mixed */
    public $proctype = null;
    /** @var mixed */
    public $accounted = null;
    /** @var mixed */
    public $doccnt = null;
    /** @var mixed */
    public $printcnt = null;
    /** @var mixed */
    public $printDate = null;
    /** @var mixed */
    public $total = null;
    /** @var mixed */
    public $trcurr = null;
    /** @var mixed */
    public $trrate = null;
    /** @var mixed */
    public $trnet = null;
    /** @var mixed */
    public $reportrate = null;
    /** @var mixed */
    public $reportnet = null;
    /** @var mixed */
    public $genexp1 = null;
    /** @var mixed */
    public $genexp2 = null;
    /** @var mixed */
    public $genexp3 = null;
    /** @var mixed */
    public $genexp4 = null;
    /** @var mixed */
    public $accficheref = null;
    /** @var mixed */
    public $accCode = null;
    /** @var mixed */
    public $accref = null;
    /** @var mixed */
    public $createdby = null;
    /** @var mixed */
    public $creadeddate = null;
    /** @var mixed */
    public $createdhour = null;
    /** @var mixed */
    public $createdmin = null;
    /** @var mixed */
    public $createdsec = null;
    /** @var mixed */
    public $modifiedby = null;
    /** @var mixed */
    public $modifieddate = null;
    /** @var mixed */
    public $modifiedhour = null;
    /** @var mixed */
    public $modifiedmin = null;
    /** @var mixed */
    public $modifiedsec = null;
    /** @var mixed */
    public $cancelled = null;
    /** @var mixed */
    public $cancelledacc = null;
    /** @var mixed */
    public $tradinggrp = null;
    /** @var mixed */
    public $genexctyp = null;
    /** @var mixed */
    public $lineexctyp = null;
    /** @var mixed */
    public $textinc = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $wfstatus = null;
    /** @var mixed */
    public $projectCode = null;
    /** @var mixed */
    public $projectref = null;
    /** @var mixed */
    public $cards = null;
    /** @var mixed */
    public $updated = null;
    /** @var mixed */
    public $avrgdate = null;
    /** @var mixed */
    public $cltitle = null;
    /** @var mixed */
    public $newdoctype = null;
    /** @var mixed */
    public $colldoctype = null;
    /** @var mixed */
    public $newcollstat = null;
    /** @var mixed */
    public $fcduedate = null;
    /** @var mixed */
    public $valsset = null;
    /** @var mixed */
    public $curop = null;
    /** @var mixed */
    public $xbufs = null;
    /** @var mixed */
    public $xcnt = null;
    /** @var mixed */
    public $docals = null;
    /** @var mixed */
    public $edttotal = null;
    /** @var mixed */
    public $fcnochanged = null;
    /** @var mixed */
    public $docnrref = null;
    /** @var mixed */
    public $textchg = null;
    /** @var mixed */
    public $itext = null;
    /** @var mixed */
    public $accFicheSiteid = null;
    /** @var mixed */
    public $cancelAutoGlProc = null;
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
    public $approve = null;
    /** @var mixed */
    public $approvedate = null;
}

/**
 * CollateralRollsAnalytics
 */
class CollateralRollsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
