<?php

declare(strict_types=1);

namespace LogoObjects\Clients\paymentDifferenceInvoices;

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
 * PaymentDifferenceInvoices
 */
class PaymentDifferenceInvoices extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $CLIENTREF = null;
    /** @var int|float|null */
    public $CLACCREF = null;
    /** @var int|float|null */
    public $CLCENTERREF = null;
    /** @var int|float|null */
    public $CASHCENTERREF = null;
    /** @var int|float|null */
    public $CASHACCOUNTREF = null;
    /** @var int|float|null */
    public $VIRMANREF = null;
    /** @var int|float|null */
    public $SOURCEFREF = null;
    public ?string $DATE = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $DIVISION = null;
    /** @var int|float|null */
    public $MODULENR = null;
    /** @var int|float|null */
    public $TYPE = null;
    /** @var int|float|null */
    public $LINENR = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    public ?string $TRANNO = null;
    public ?string $DOC_NUMBER = null;
    public ?string $DESCRIPTION = null;
    /** @var int|float|null */
    public $GL_POSTED = null;
    /** @var int|float|null */
    public $SIGN = null;
    /** @var int|float|null */
    public $AMOUNT = null;
    /** @var int|float|null */
    public $CURR_TRANS = null;
    /** @var int|float|null */
    public $TC_XRATE = null;
    /** @var int|float|null */
    public $TC_AMOUNT = null;
    /** @var int|float|null */
    public $RC_XRATE = null;
    /** @var int|float|null */
    public $RC_AMOUNT = null;
    /** @var int|float|null */
    public $BNLN_TC_CURR = null;
    /** @var int|float|null */
    public $BNLN_TC_XRATE = null;
    /** @var int|float|null */
    public $BNLN_TC_AMOUNT = null;
    /** @var int|float|null */
    public $EXTENREF = null;
    /** @var int|float|null */
    public $PAYDEFREF = null;
    /** @var int|float|null */
    public $ACCFICHEREF = null;
    /** @var int|float|null */
    public $PRINT_CNT = null;
    public ?string $PRINT_DATE = null;
    /** @var int|float|null */
    public $CANCELLED = null;
    /** @var int|float|null */
    public $TRGFLAG = null;
    public ?string $TRADING_GRP = null;
    /** @var int|float|null */
    public $CURRSEL_TRANS = null;
    /** @var int|float|null */
    public $SINGLE_PAYMENT = null;
    /** @var int|float|null */
    public $DISCOUNTED = null;
    /** @var int|float|null */
    public $DISCOUNT_RATE = null;
    /** @var int|float|null */
    public $VAT_RATE = null;
    /** @var int|float|null */
    public $DISCOUNTED_AMOUNT = null;
    /** @var int|float|null */
    public $DISCACCREF = null;
    /** @var int|float|null */
    public $DISCCENREF = null;
    /** @var int|float|null */
    public $VATRACCREF = null;
    /** @var int|float|null */
    public $VATRCENREF = null;
    /** @var int|float|null */
    public $PAYMENTREF = null;
    /** @var int|float|null */
    public $VATAMOUNT = null;
    /** @var int|float|null */
    public $INFLATION_IDX = null;
    /** @var int|float|null */
    public $AFFECT_COST = null;
    public ?string $ARP_CODE = null;
    public ?string $GL_CODE4 = null;
    public ?string $PAYMENT_CODE = null;
    /** @var int|float|null */
    public $UPDATED = null;
    /** @var int|float|null */
    public $PAYFND = null;
    /** @var int|float|null */
    public $PAYCHGD = null;
    /** @var int|float|null */
    public $DEBIT = null;
    /** @var int|float|null */
    public $CREDIT = null;
    /** @var int|float|null */
    public $VLNOLDCLREF = null;
    public ?string $VLIST = null;
    /** @var int|float|null */
    public $INVOICE_INTERNAL_REFERENCE = null;
    /** @var int|float|null */
    public $INVOICE_GRPCODE = null;
    /** @var int|float|null */
    public $INVOICE_TRCODE = null;
    public ?string $INVOICE_FICHENO = null;
    public ?string $INVOICE_DATE = null;
    /** @var int|float|null */
    public $INVOICE_TIME = null;
    public ?string $INVOICE_DOC_NUMBER = null;
    public ?string $INVOICE_AUXIL_CODE = null;
    public ?string $INVOICE_AUTH_CODE = null;
    /** @var int|float|null */
    public $INVOICE_CLIENTREF = null;
    /** @var int|float|null */
    public $INVOICE_RECVREF = null;
    /** @var int|float|null */
    public $INVOICE_CENTERREF = null;
    /** @var int|float|null */
    public $INVOICE_ACCOUNTREF = null;
    /** @var int|float|null */
    public $INVOICE_SOURCEINDEX = null;
    /** @var int|float|null */
    public $INVOICE_SOURCECOSTGRP = null;
    /** @var int|float|null */
    public $INVOICE_CANCELLED = null;
    /** @var int|float|null */
    public $INVOICE_ACCOUNTED = null;
    /** @var int|float|null */
    public $INVOICE_PAIDINCASH = null;
    /** @var int|float|null */
    public $INVOICE_FROMKASA = null;
    /** @var int|float|null */
    public $INVOICE_ENTEGSET = null;
    /** @var int|float|null */
    public $INVOICE_VAT = null;
    /** @var int|float|null */
    public $INVOICE_ADDDISCOUNTS = null;
    /** @var int|float|null */
    public $INVOICE_TOTALDISCOUNTS = null;
    /** @var int|float|null */
    public $INVOICE_TOTALDISCOUNTED = null;
    /** @var int|float|null */
    public $INVOICE_ADDEXPENSES = null;
    /** @var int|float|null */
    public $INVOICE_TOTALEXPENSES = null;
    /** @var int|float|null */
    public $INVOICE_DISTEXPENSE = null;
    /** @var int|float|null */
    public $INVOICE_TOTALDEPOZITO = null;
    /** @var int|float|null */
    public $INVOICE_TOTALPROMOTIONS = null;
    /** @var int|float|null */
    public $INVOICE_VATINCGROSS = null;
    /** @var int|float|null */
    public $INVOICE_TOTALVAT = null;
    /** @var int|float|null */
    public $INVOICE_GROSSTOTAL = null;
    /** @var int|float|null */
    public $INVOICE_NETTOTAL = null;
    public ?string $INVOICE_NOTES1 = null;
    public ?string $INVOICE_NOTES2 = null;
    public ?string $INVOICE_NOTES3 = null;
    public ?string $INVOICE_NOTES4 = null;
    /** @var int|float|null */
    public $INVOICE_INTERESTAPP = null;
    /** @var int|float|null */
    public $INVOICE_CURR_TRANS = null;
    /** @var int|float|null */
    public $INVOICE_TC_XRATE = null;
    /** @var int|float|null */
    public $INVOICE_TC_AMOUNT = null;
    /** @var int|float|null */
    public $INVOICE_RC_XRATE = null;
    /** @var int|float|null */
    public $INVOICE_RC_AMOUNT = null;
    /** @var int|float|null */
    public $INVOICE_SINGLE_PAYMENT = null;
    /** @var int|float|null */
    public $INVOICE_KASTRANSREF = null;
    /** @var int|float|null */
    public $INVOICE_PAYDEFREF = null;
    /** @var int|float|null */
    public $INVOICE_PRINT_CNT = null;
    public ?string $INVOICE_PRINT_DATE = null;
    /** @var int|float|null */
    public $INVOICE_GVATINC = null;
    /** @var int|float|null */
    public $INVOICE_BRANCH = null;
    /** @var int|float|null */
    public $INVOICE_DEPARTMENT = null;
    /** @var int|float|null */
    public $INVOICE_ACCFICHEREF = null;
    /** @var int|float|null */
    public $INVOICE_ADDEXPACCREF = null;
    /** @var int|float|null */
    public $INVOICE_ADDEXPCENTREF = null;
    /** @var int|float|null */
    public $INVOICE_DECPRDIFF = null;
    /** @var int|float|null */
    public $INVOICE_CREATED_BY = null;
    public ?string $INVOICE_DATE_CREATED = null;
    /** @var int|float|null */
    public $INVOICE_HOUR_CREATED = null;
    /** @var int|float|null */
    public $INVOICE_MIN_CREATED = null;
    /** @var int|float|null */
    public $INVOICE_SEC_CREATED = null;
    /** @var int|float|null */
    public $INVOICE_MODIFIED_BY = null;
    public ?string $INVOICE_DATE_MODIFIED = null;
    /** @var int|float|null */
    public $INVOICE_HOUR_MODIFIED = null;
    /** @var int|float|null */
    public $INVOICE_MIN_MODIFIED = null;
    /** @var int|float|null */
    public $INVOICE_SEC_MODIFIED = null;
    /** @var int|float|null */
    public $INVOICE_SALESMANREF = null;
    /** @var int|float|null */
    public $INVOICE_CANCELLEDACC = null;
    public ?string $INVOICE_SHPTYPCOD = null;
    public ?string $INVOICE_SHPAGNCOD = null;
    public ?string $INVOICE_TRACKNR = null;
    /** @var int|float|null */
    public $INVOICE_GENEXCTYP = null;
    /** @var int|float|null */
    public $INVOICE_CURRSEL_TRANS = null;
    public ?string $INVOICE_TRADING_GRP = null;
    /** @var int|float|null */
    public $INVOICE_TEXTINC = null;
    /** @var int|float|null */
    public $INVOICE_DATA_SITEID = null;
    /** @var int|float|null */
    public $INVOICE_XML_ATTRIBUTE = null;
    /** @var int|float|null */
    public $INVOICE_DATA_REFERENCE = null;
    /** @var int|float|null */
    public $INVOICE_FACTORYNR = null;
    /** @var int|float|null */
    public $INVOICE_WFSTATUS = null;
    /** @var int|float|null */
    public $INVOICE_SHIPINFOREF = null;
    /** @var int|float|null */
    public $INVOICE_DISTORDERREF = null;
    /** @var int|float|null */
    public $INVOICE_SENDCNT = null;
    /** @var int|float|null */
    public $INVOICE_DLVCLIENT = null;
    /** @var int|float|null */
    public $INVOICE_COSTOFSALEFCREF = null;
    /** @var int|float|null */
    public $INVOICE_OPSTAT = null;
    public ?string $INVOICE_DOCTRACKINGNR = null;
    /** @var int|float|null */
    public $INVOICE_TOTALADDTAX = null;
    /** @var int|float|null */
    public $INVOICE_PAYMENTTYPE = null;
    /** @var int|float|null */
    public $INVOICE_INFLATION_IDX = null;
    public ?string $BRANCHNAME = null;
    public ?string $DEPTNAME = null;
    public ?string $OHP_CODE4 = null;
    /** @var int|float|null */
    public $TOTBEFVAT = null;
    /** @var int|float|null */
    public $ROLLEDAMOUNT = null;
    /** @var int|float|null */
    public $ROLLEDLNNR = null;
    public ?string $CSDUEDATE = null;
    public ?string $GL_CODE1 = null;
    public ?string $GL_CODE2 = null;
    public ?string $GL_CODE3 = null;
    public ?string $OHP_CODE1 = null;
    public ?string $OHP_CODE2 = null;
    public ?string $OHP_CODE3 = null;
    /** @var int|float|null */
    public $XCNT = null;
    /** @var int|float|null */
    public $CUROP = null;
    public ?string $ROLLLNPTR = null;
    public ?string $CURRSTR = null;
    /** @var int|float|null */
    public $CLCARDACTIVE = null;
    /** @var int|float|null */
    public $PAYPLACTIVE = null;
    /** @var int|float|null */
    public $EDTDEBIT = null;
    /** @var int|float|null */
    public $EDTCREDIT = null;
    /** @var int|float|null */
    public $EDTCURR = null;
    /** @var int|float|null */
    public $EDTBEFVAT = null;
    /** @var int|float|null */
    public $EDTTOTAL = null;
    /** @var int|float|null */
    public $EDTTOTVAT = null;
    /** @var int|float|null */
    public $EDTINTAPP = null;
    /** @var int|float|null */
    public $DSCPAYTOT = null;
    /** @var int|float|null */
    public $DSCCSHMAX = null;
    /** @var int|float|null */
    public $FICHEP = null;
    public ?string $CASH_TRAN_GRP_NO = null;
    /** @var int|float|null */
    public $CASH_TRAN_GRPLINE_NO = null;
    /** @var int|float|null */
    public $CASH_INFLDX = null;
    public ?string $INVOICE_ORGLOGOID = null;
    public ?string $CASH_ORGLOGOID = null;
    /** @var int|float|null */
    public $PROJECTREF = null;
    public ?string $PROJECTCODE = null;
    /** @var int|float|null */
    public $GRPFIRMTRANS = null;
    /** @var int|float|null */
    public $AFFECT_RISK = null;
    /** @var int|float|null */
    public $INVOICE_AFFECT_COLLATRL = null;
    public ?string $ORGLOGOID = null;
    public ?string $GL_CODE5 = null;
    public ?string $OHP_CODE5 = null;
    /** @var int|float|null */
    public $APPROVE = null;
    public ?string $APPROVE_DATE = null;
    /** @var int|float|null */
    public $ACC_FICHE_SITEID = null;
    /** @var int|float|null */
    public $CANCEL_AUTO_GL_PROC = null;
    public ?string $DOC_DATE = null;
    /** @var int|float|null */
    public $STAFF_OTHER_EXPENSES = null;
    public ?string $DELIVERY_CODE = null;
    /** @var int|float|null */
    public $ACCEPT_EINV_PUBLIC = null;
    /** @var int|float|null */
    public $PUBLICBNACCREF = null;
    public ?string $PUBLIC_BNACC_CODE = null;
    public ?string $PUBLIC_BNACC_IBAN = null;
    /** @var int|float|null */
    public $PUBLIC_BNACC_CURRENCY = null;
    public ?string $TYPE_CODE = null;
    /** @var int|float|null */
    public $FUTURE_MONTH_YREXPINC = null;
    /** @var int|float|null */
    public $DOC_DETAIL = null;
    /** @var int|float|null */
    public $CALC_ADD_TAX_VAT_SEP = null;
    public ?string $ESEND_DATE = null;
    /** @var int|float|null */
    public $ELECT_DOC = null;
    /** @var int|float|null */
    public $OFFER_REFERENCE = null;
    public ?string $SERVICE_REASON = null;
    /** @var int|float|null */
    public $EINVOICE = null;
    /** @var int|float|null */
    public $PROFILE_ID = null;
    /** @var int|float|null */
    public $ESTATUS = null;
    public ?string $ESTARTDATE = null;
    public ?string $EENDDATE = null;
    public ?string $EDESCRIPTION = null;
    /** @var int|float|null */
    public $EDURATION = null;
    /** @var int|float|null */
    public $EDURATION_TYPE = null;
    /** @var int|float|null */
    public $EINSTEAD_OF_DISPATCH = null;
    /** @var int|float|null */
    public $EINVOICE_TYPE = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_LOGICALREF = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_INVOICEREF = null;
    public ?string $EARCHIVEDETR_INSTALLMENTNUMBER = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_EARCHIVESTATUS = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_EARCHIVESTATUSOLD = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_SENDMOD = null;
    public ?string $EARCHIVEDETR_INTSALESADDR = null;
    public ?string $EARCHIVEDETR_INTPAYMENTDESC = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_INTPAYMENTTYPE = null;
    public ?string $EARCHIVEDETR_INTPAYMENTAGENT = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_INTPAYMENTDATEORG = null;
    public ?string $EARCHIVEDETR_INTPAYMENTDATE = null;
    public ?string $EARCHIVEDETR_OCKSERIALNUMBER = null;
    public ?string $EARCHIVEDETR_OCKZNUMBER = null;
    public ?string $EARCHIVEDETR_OCKFICHENUMBER = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_OCKFICHEDATEORG = null;
    public ?string $EARCHIVEDETR_OCKFICHEDATE = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_ISCOMP = null;
    public ?string $EARCHIVEDETR_TAXNR = null;
    public ?string $EARCHIVEDETR_TCKNO = null;
    public ?string $EARCHIVEDETR_NAME = null;
    public ?string $EARCHIVEDETR_SURNAME = null;
    public ?string $EARCHIVEDETR_DEFINITION = null;
    public ?string $EARCHIVEDETR_ADDR1 = null;
    public ?string $EARCHIVEDETR_ADDR2 = null;
    public ?string $EARCHIVEDETR_CITYCODE = null;
    public ?string $EARCHIVEDETR_CITY = null;
    public ?string $EARCHIVEDETR_COUNTRYCODE = null;
    public ?string $EARCHIVEDETR_COUNTRY = null;
    public ?string $EARCHIVEDETR_POSTCODE = null;
    public ?string $EARCHIVEDETR_DISTRICTCODE = null;
    public ?string $EARCHIVEDETR_DISTRICT = null;
    public ?string $EARCHIVEDETR_TOWNCODE = null;
    public ?string $EARCHIVEDETR_TOWN = null;
    public ?string $EARCHIVEDETR_EMAILADDR = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_ISPERCURR = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_INSTEADOFDESP = null;
    public ?string $EARCHIVEDETR_TAXOFFICE = null;
    public ?string $EARCHIVEDETR_TELCODES1 = null;
    public ?string $EARCHIVEDETR_TELCODES2 = null;
    public ?string $EARCHIVEDETR_TELNRS1 = null;
    public ?string $EARCHIVEDETR_TELNRS2 = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_OLDEARCHIVESTATUS = null;
    public ?string $EARCHIVEDETR_DRIVERNAME1 = null;
    public ?string $EARCHIVEDETR_DRIVERSURNAME1 = null;
    public ?string $EARCHIVEDETR_DRIVERTCKNO1 = null;
    public ?string $EARCHIVEDETR_PLATENUM1 = null;
    public ?string $EARCHIVEDETR_CHASSISNUM1 = null;
    public ?string $EARCHIVEDETR_DRIVERNAME2 = null;
    public ?string $EARCHIVEDETR_DRIVERSURNAME2 = null;
    public ?string $EARCHIVEDETR_DRIVERTCKNO2 = null;
    public ?string $EARCHIVEDETR_PLATENUM2 = null;
    public ?string $EARCHIVEDETR_CHASSISNUM2 = null;
    public ?string $EARCHIVEDETR_DRIVERNAME3 = null;
    public ?string $EARCHIVEDETR_DRIVERSURNAME3 = null;
    public ?string $EARCHIVEDETR_DRIVERTCKNO3 = null;
    public ?string $EARCHIVEDETR_PLATENUM3 = null;
    public ?string $EARCHIVEDETR_CHASSISNUM3 = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_CHAINDELIVERY = null;
    /** @var int|float|null */
    public $EARCHIVEDETR_SELLERCLIENTREF = null;
    public ?string $EARCHIVEDETR_SELLERCLIENTCODE = null;
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
    public $FROMINTEGTYPE = null;
    /** @var int|float|null */
    public $EPRINTCNT = null;
    public ?string $RIGHTOFRETURNTYP = null;
    /** @var int|float|null */
    public $ORDFICHECMREF = null;
    /** @var int|float|null */
    public $COSFCREFINFL = null;
    /** @var int|float|null */
    public $ESENDTIME = null;
    /** @var int|float|null */
    public $RECEIPT = null;
    /** @var int|float|null */
    public $INEFFECTIVECOST = null;
}

/**
 * PaymentDifferenceInvoicesQueryOptions
 */
class PaymentDifferenceInvoicesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var PaymentDifferenceInvoicesSortSpec|null */
    public $sort = null;
}

/**
 * PaymentDifferenceInvoicesSearchCriteria
 */
class PaymentDifferenceInvoicesSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $clientref = null;
    /** @var mixed */
    public $claccref = null;
    /** @var mixed */
    public $clcenterref = null;
    /** @var mixed */
    public $cashcenterref = null;
    /** @var mixed */
    public $cashaccountref = null;
    /** @var mixed */
    public $virmanref = null;
    /** @var mixed */
    public $sourcefref = null;
    /** @var mixed */
    public $date = null;
    /** @var mixed */
    public $department = null;
    /** @var mixed */
    public $division = null;
    /** @var mixed */
    public $modulenr = null;
    /** @var mixed */
    public $type = null;
    /** @var mixed */
    public $linenr = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $tranno = null;
    /** @var mixed */
    public $docNumber = null;
    /** @var mixed */
    public $description = null;
    /** @var mixed */
    public $glPosted = null;
    /** @var mixed */
    public $sign = null;
    /** @var mixed */
    public $amount = null;
    /** @var mixed */
    public $currTrans = null;
    /** @var mixed */
    public $tcXrate = null;
    /** @var mixed */
    public $tcAmount = null;
    /** @var mixed */
    public $rcXrate = null;
    /** @var mixed */
    public $rcAmount = null;
    /** @var mixed */
    public $bnlnTcCurr = null;
    /** @var mixed */
    public $bnlnTcXrate = null;
    /** @var mixed */
    public $bnlnTcAmount = null;
    /** @var mixed */
    public $extenref = null;
    /** @var mixed */
    public $paydefref = null;
    /** @var mixed */
    public $accficheref = null;
    /** @var mixed */
    public $printCnt = null;
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
    public $cancelled = null;
    /** @var mixed */
    public $trgflag = null;
    /** @var mixed */
    public $tradingGrp = null;
    /** @var mixed */
    public $currselTrans = null;
    /** @var mixed */
    public $singlePayment = null;
    /** @var mixed */
    public $discounted = null;
    /** @var mixed */
    public $discountRate = null;
    /** @var mixed */
    public $vatRate = null;
    /** @var mixed */
    public $discountedAmount = null;
    /** @var mixed */
    public $discaccref = null;
    /** @var mixed */
    public $disccenref = null;
    /** @var mixed */
    public $vatraccref = null;
    /** @var mixed */
    public $vatrcenref = null;
    /** @var mixed */
    public $paymentref = null;
    /** @var mixed */
    public $vatamount = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $inflationIdx = null;
    /** @var mixed */
    public $affectCost = null;
    /** @var mixed */
    public $arpCode = null;
    /** @var mixed */
    public $glCode4 = null;
    /** @var mixed */
    public $paymentCode = null;
    /** @var mixed */
    public $updated = null;
    /** @var mixed */
    public $payfnd = null;
    /** @var mixed */
    public $paychgd = null;
    /** @var mixed */
    public $debit = null;
    /** @var mixed */
    public $credit = null;
    /** @var mixed */
    public $vlnoldclref = null;
    /** @var mixed */
    public $vlist = null;
    /** @var mixed */
    public $invoiceInternalReference = null;
    /** @var mixed */
    public $invoiceGrpcode = null;
    /** @var mixed */
    public $invoiceTrcode = null;
    /** @var mixed */
    public $invoiceFicheno = null;
    /** @var mixed */
    public $invoiceDate = null;
    /** @var mixed */
    public $invoiceTime = null;
    /** @var mixed */
    public $invoiceDocNumber = null;
    /** @var mixed */
    public $invoiceAuxilCode = null;
    /** @var mixed */
    public $invoiceAuthCode = null;
    /** @var mixed */
    public $invoiceClientref = null;
    /** @var mixed */
    public $invoiceRecvref = null;
    /** @var mixed */
    public $invoiceCenterref = null;
    /** @var mixed */
    public $invoiceAccountref = null;
    /** @var mixed */
    public $invoiceSourceindex = null;
    /** @var mixed */
    public $invoiceSourcecostgrp = null;
    /** @var mixed */
    public $invoiceCancelled = null;
    /** @var mixed */
    public $invoiceAccounted = null;
    /** @var mixed */
    public $invoicePaidincash = null;
    /** @var mixed */
    public $invoiceFromkasa = null;
    /** @var mixed */
    public $invoiceEntegset = null;
    /** @var mixed */
    public $invoiceVat = null;
    /** @var mixed */
    public $invoiceAdddiscounts = null;
    /** @var mixed */
    public $invoiceTotaldiscounts = null;
    /** @var mixed */
    public $invoiceTotaldiscounted = null;
    /** @var mixed */
    public $invoiceAddexpenses = null;
    /** @var mixed */
    public $invoiceTotalexpenses = null;
    /** @var mixed */
    public $invoiceDistexpense = null;
    /** @var mixed */
    public $invoiceTotaldepozito = null;
    /** @var mixed */
    public $invoiceTotalpromotions = null;
    /** @var mixed */
    public $invoiceVatincgross = null;
    /** @var mixed */
    public $invoiceTotalvat = null;
    /** @var mixed */
    public $invoiceGrosstotal = null;
    /** @var mixed */
    public $invoiceNettotal = null;
    /** @var mixed */
    public $invoiceNotes1 = null;
    /** @var mixed */
    public $invoiceNotes2 = null;
    /** @var mixed */
    public $invoiceNotes3 = null;
    /** @var mixed */
    public $invoiceNotes4 = null;
    /** @var mixed */
    public $invoiceInterestapp = null;
    /** @var mixed */
    public $invoiceCurrTrans = null;
    /** @var mixed */
    public $invoiceTcXrate = null;
    /** @var mixed */
    public $invoiceTcAmount = null;
    /** @var mixed */
    public $invoiceRcXrate = null;
    /** @var mixed */
    public $invoiceRcAmount = null;
    /** @var mixed */
    public $invoiceSinglePayment = null;
    /** @var mixed */
    public $invoiceKastransref = null;
    /** @var mixed */
    public $invoicePaydefref = null;
    /** @var mixed */
    public $invoicePrintCnt = null;
    /** @var mixed */
    public $invoicePrintDate = null;
    /** @var mixed */
    public $invoiceGvatinc = null;
    /** @var mixed */
    public $invoiceBranch = null;
    /** @var mixed */
    public $invoiceDepartment = null;
    /** @var mixed */
    public $invoiceAccficheref = null;
    /** @var mixed */
    public $invoiceAddexpaccref = null;
    /** @var mixed */
    public $invoiceAddexpcentref = null;
    /** @var mixed */
    public $invoiceDecprdiff = null;
    /** @var mixed */
    public $invoiceCreatedBy = null;
    /** @var mixed */
    public $invoiceDateCreated = null;
    /** @var mixed */
    public $invoiceHourCreated = null;
    /** @var mixed */
    public $invoiceMinCreated = null;
    /** @var mixed */
    public $invoiceSecCreated = null;
    /** @var mixed */
    public $invoiceModifiedBy = null;
    /** @var mixed */
    public $invoiceDateModified = null;
    /** @var mixed */
    public $invoiceHourModified = null;
    /** @var mixed */
    public $invoiceMinModified = null;
    /** @var mixed */
    public $invoiceSecModified = null;
    /** @var mixed */
    public $invoiceSalesmanref = null;
    /** @var mixed */
    public $invoiceCancelledacc = null;
    /** @var mixed */
    public $invoiceShptypcod = null;
    /** @var mixed */
    public $invoiceShpagncod = null;
    /** @var mixed */
    public $invoiceTracknr = null;
    /** @var mixed */
    public $invoiceGenexctyp = null;
    /** @var mixed */
    public $invoiceCurrselTrans = null;
    /** @var mixed */
    public $invoiceTradingGrp = null;
    /** @var mixed */
    public $invoiceTextinc = null;
    /** @var mixed */
    public $invoiceDataSiteid = null;
    /** @var mixed */
    public $invoiceXmlAttribute = null;
    /** @var mixed */
    public $invoiceDataReference = null;
    /** @var mixed */
    public $invoiceFactorynr = null;
    /** @var mixed */
    public $invoiceWfstatus = null;
    /** @var mixed */
    public $invoiceShipinforef = null;
    /** @var mixed */
    public $invoiceDistorderref = null;
    /** @var mixed */
    public $invoiceSendcnt = null;
    /** @var mixed */
    public $invoiceDlvclient = null;
    /** @var mixed */
    public $invoiceCostofsalefcref = null;
    /** @var mixed */
    public $invoiceOpstat = null;
    /** @var mixed */
    public $invoiceDoctrackingnr = null;
    /** @var mixed */
    public $invoiceTotaladdtax = null;
    /** @var mixed */
    public $invoicePaymenttype = null;
    /** @var mixed */
    public $invoiceInflationIdx = null;
    /** @var mixed */
    public $branchname = null;
    /** @var mixed */
    public $deptname = null;
    /** @var mixed */
    public $ohpCode4 = null;
    /** @var mixed */
    public $totbefvat = null;
    /** @var mixed */
    public $rolledamount = null;
    /** @var mixed */
    public $rolledlnnr = null;
    /** @var mixed */
    public $csduedate = null;
    /** @var mixed */
    public $glCode1 = null;
    /** @var mixed */
    public $glCode2 = null;
    /** @var mixed */
    public $glCode3 = null;
    /** @var mixed */
    public $ohpCode1 = null;
    /** @var mixed */
    public $ohpCode2 = null;
    /** @var mixed */
    public $ohpCode3 = null;
    /** @var mixed */
    public $xcnt = null;
    /** @var mixed */
    public $curop = null;
    /** @var mixed */
    public $rolllnptr = null;
    /** @var mixed */
    public $currstr = null;
    /** @var mixed */
    public $clcardactive = null;
    /** @var mixed */
    public $payplactive = null;
    /** @var mixed */
    public $edtdebit = null;
    /** @var mixed */
    public $edtcredit = null;
    /** @var mixed */
    public $edtcurr = null;
    /** @var mixed */
    public $edtbefvat = null;
    /** @var mixed */
    public $edttotal = null;
    /** @var mixed */
    public $edttotvat = null;
    /** @var mixed */
    public $edtintapp = null;
    /** @var mixed */
    public $dscpaytot = null;
    /** @var mixed */
    public $dsccshmax = null;
    /** @var mixed */
    public $fichep = null;
    /** @var mixed */
    public $cashTranGrpNo = null;
    /** @var mixed */
    public $cashTranGrplineNo = null;
    /** @var mixed */
    public $cashInfldx = null;
    /** @var mixed */
    public $invoiceOrglogoid = null;
    /** @var mixed */
    public $cashOrglogoid = null;
    /** @var mixed */
    public $projectref = null;
    /** @var mixed */
    public $projectcode = null;
    /** @var mixed */
    public $grpfirmtrans = null;
    /** @var mixed */
    public $affectRisk = null;
    /** @var mixed */
    public $invoiceAffectCollatrl = null;
    /** @var mixed */
    public $orglogoid = null;
    /** @var mixed */
    public $glCode5 = null;
    /** @var mixed */
    public $ohpCode5 = null;
    /** @var mixed */
    public $approve = null;
    /** @var mixed */
    public $approveDate = null;
    /** @var mixed */
    public $accFicheSiteid = null;
    /** @var mixed */
    public $cancelAutoGlProc = null;
    /** @var mixed */
    public $docDate = null;
    /** @var mixed */
    public $staffOtherExpenses = null;
    /** @var mixed */
    public $deliveryCode = null;
    /** @var mixed */
    public $acceptEinvPublic = null;
    /** @var mixed */
    public $publicbnaccref = null;
    /** @var mixed */
    public $publicBnaccCode = null;
    /** @var mixed */
    public $publicBnaccIban = null;
    /** @var mixed */
    public $publicBnaccCurrency = null;
    /** @var mixed */
    public $typeCode = null;
    /** @var mixed */
    public $futureMonthYrexpinc = null;
    /** @var mixed */
    public $docDetail = null;
    /** @var mixed */
    public $calcAddTaxVatSep = null;
    /** @var mixed */
    public $esendDate = null;
    /** @var mixed */
    public $electDoc = null;
    /** @var mixed */
    public $offerReference = null;
    /** @var mixed */
    public $serviceReason = null;
    /** @var mixed */
    public $einvoice = null;
    /** @var mixed */
    public $profileId = null;
    /** @var mixed */
    public $estatus = null;
    /** @var mixed */
    public $estartdate = null;
    /** @var mixed */
    public $eenddate = null;
    /** @var mixed */
    public $edescription = null;
    /** @var mixed */
    public $eduration = null;
    /** @var mixed */
    public $edurationType = null;
    /** @var mixed */
    public $einsteadOfDispatch = null;
    /** @var mixed */
    public $einvoiceType = null;
    /** @var mixed */
    public $earchivedetrLogicalref = null;
    /** @var mixed */
    public $earchivedetrInvoiceref = null;
    /** @var mixed */
    public $earchivedetrInstallmentnumber = null;
    /** @var mixed */
    public $earchivedetrEarchivestatus = null;
    /** @var mixed */
    public $earchivedetrEarchivestatusold = null;
    /** @var mixed */
    public $earchivedetrSendmod = null;
    /** @var mixed */
    public $earchivedetrIntsalesaddr = null;
    /** @var mixed */
    public $earchivedetrIntpaymentdesc = null;
    /** @var mixed */
    public $earchivedetrIntpaymenttype = null;
    /** @var mixed */
    public $earchivedetrIntpaymentagent = null;
    /** @var mixed */
    public $earchivedetrIntpaymentdateorg = null;
    /** @var mixed */
    public $earchivedetrIntpaymentdate = null;
    /** @var mixed */
    public $earchivedetrOckserialnumber = null;
    /** @var mixed */
    public $earchivedetrOckznumber = null;
    /** @var mixed */
    public $earchivedetrOckfichenumber = null;
    /** @var mixed */
    public $earchivedetrOckfichedateorg = null;
    /** @var mixed */
    public $earchivedetrOckfichedate = null;
    /** @var mixed */
    public $earchivedetrIscomp = null;
    /** @var mixed */
    public $earchivedetrTaxnr = null;
    /** @var mixed */
    public $earchivedetrTckno = null;
    /** @var mixed */
    public $earchivedetrName = null;
    /** @var mixed */
    public $earchivedetrSurname = null;
    /** @var mixed */
    public $earchivedetrDefinition = null;
    /** @var mixed */
    public $earchivedetrAddr1 = null;
    /** @var mixed */
    public $earchivedetrAddr2 = null;
    /** @var mixed */
    public $earchivedetrCitycode = null;
    /** @var mixed */
    public $earchivedetrCity = null;
    /** @var mixed */
    public $earchivedetrCountrycode = null;
    /** @var mixed */
    public $earchivedetrCountry = null;
    /** @var mixed */
    public $earchivedetrPostcode = null;
    /** @var mixed */
    public $earchivedetrDistrictcode = null;
    /** @var mixed */
    public $earchivedetrDistrict = null;
    /** @var mixed */
    public $earchivedetrTowncode = null;
    /** @var mixed */
    public $earchivedetrTown = null;
    /** @var mixed */
    public $earchivedetrEmailaddr = null;
    /** @var mixed */
    public $earchivedetrIspercurr = null;
    /** @var mixed */
    public $earchivedetrInsteadofdesp = null;
    /** @var mixed */
    public $earchivedetrTaxoffice = null;
    /** @var mixed */
    public $earchivedetrTelcodes1 = null;
    /** @var mixed */
    public $earchivedetrTelcodes2 = null;
    /** @var mixed */
    public $earchivedetrTelnrs1 = null;
    /** @var mixed */
    public $earchivedetrTelnrs2 = null;
    /** @var mixed */
    public $earchivedetrOldearchivestatus = null;
    /** @var mixed */
    public $earchivedetrDrivername1 = null;
    /** @var mixed */
    public $earchivedetrDriversurname1 = null;
    /** @var mixed */
    public $earchivedetrDrivertckno1 = null;
    /** @var mixed */
    public $earchivedetrPlatenum1 = null;
    /** @var mixed */
    public $earchivedetrChassisnum1 = null;
    /** @var mixed */
    public $earchivedetrDrivername2 = null;
    /** @var mixed */
    public $earchivedetrDriversurname2 = null;
    /** @var mixed */
    public $earchivedetrDrivertckno2 = null;
    /** @var mixed */
    public $earchivedetrPlatenum2 = null;
    /** @var mixed */
    public $earchivedetrChassisnum2 = null;
    /** @var mixed */
    public $earchivedetrDrivername3 = null;
    /** @var mixed */
    public $earchivedetrDriversurname3 = null;
    /** @var mixed */
    public $earchivedetrDrivertckno3 = null;
    /** @var mixed */
    public $earchivedetrPlatenum3 = null;
    /** @var mixed */
    public $earchivedetrChassisnum3 = null;
    /** @var mixed */
    public $earchivedetrChaindelivery = null;
    /** @var mixed */
    public $earchivedetrSellerclientref = null;
    /** @var mixed */
    public $earchivedetrSellerclientcode = null;
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
    public $fromintegtype = null;
    /** @var mixed */
    public $eprintcnt = null;
    /** @var mixed */
    public $rightofreturntyp = null;
    /** @var mixed */
    public $ordfichecmref = null;
    /** @var mixed */
    public $cosfcrefinfl = null;
    /** @var mixed */
    public $esendtime = null;
    /** @var mixed */
    public $receipt = null;
    /** @var mixed */
    public $ineffectivecost = null;
}

/**
 * PaymentDifferenceInvoicesAnalytics
 */
class PaymentDifferenceInvoicesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
