<?php

declare(strict_types=1);

namespace LogoObjects\Clients\productions;

use LogoObjects\Http\BaseApiClient;
use LogoObjects\Types\ApiResponse;
use LogoObjects\Utils\QueryBuilder;

/**
 * ProductionsClient - /productions endpoint'i icin CRUD ve ozel islemler.
 */
class ProductionsClient extends BaseApiClient
{
    /** @var string */
    protected $endpoint = '/productions';

    /**
     * Corresponds to GET /productions/ProdOrderAutomaticRealize/{_ProdOrderRef}/{_RealizedPerc}
     */
    public function prodOrderAutomaticRealizeV1($ProdOrderRef, $RealizedPerc)
    {
        $path = "/productions/ProdOrderAutomaticRealize/{$ProdOrderRef}/{$RealizedPerc}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /productions/ProdOrderAutomaticGenerate/{_ItemRef}/{_BOMRef}/{_RevRef}/{_targetDate}/{_FactoryNr}/{_PlnAmount}/{_ficheDate}/{_ficheNo}/{_uomR}/{_doPlnReserve}/{_doSLPlnReserve}
     */
    public function prodOrderAutomaticGenerateV1($ItemRef, $BOMRef, $RevRef, string $targetDate, $FactoryNr, $PlnAmount, string $ficheDate, string $ficheNo, $uomR, $doPlnReserve, $doSLPlnReserve, array $data)
    {
        $path = "/productions/ProdOrderAutomaticGenerate/{$ItemRef}/{$BOMRef}/{$RevRef}/{$targetDate}/{$FactoryNr}/{$PlnAmount}/{$ficheDate}/{$ficheNo}/{$uomR}/{$doPlnReserve}/{$doSLPlnReserve}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /productions/NewPrdItmClsLines
     */
    public function newPrdItmClsLinesV1()
    {
        $path = "/productions/NewPrdItmClsLines";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /productions/GetLastError
     */
    public function getLastErrorV1()
    {
        $path = "/productions/GetLastError";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /productions/GetLastErrorString
     */
    public function getLastErrorStringV1()
    {
        $path = "/productions/GetLastErrorString";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /productions/FastRealizeFicheGenerate/{_prodOrdRef}/{_ItemRef}/{_prodAmnt}/{_uomRef}/{_method}/{_removeSidePrdct}/{_fcDate}/{_vrntRef}
     */
    public function fastRealizeFicheGenerateV1($prodOrdRef, $ItemRef, $prodAmnt, $uomRef, $method, $removeSidePrdct, string $fcDate, $vrntRef, array $data)
    {
        $path = "/productions/FastRealizeFicheGenerate/{$prodOrdRef}/{$ItemRef}/{$prodAmnt}/{$uomRef}/{$method}/{$removeSidePrdct}/{$fcDate}/{$vrntRef}";
        return $this->request('GET', $path, $data);
    }

    /**
     * Corresponds to GET /productions/QuickProdFicheGenerate/{_ItemRef}/{_prodAmnt}
     */
    public function quickProdFicheGenerateV1($ItemRef, $prodAmnt)
    {
        $path = "/productions/QuickProdFicheGenerate/{$ItemRef}/{$prodAmnt}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /productions/ChangePOAndWOStatus/{_ficheNo}/{_status}/{_typ}/{_opTrans}/{_delStFc}
     */
    public function changePOAndWOStatusV1(string $ficheNo, $status, $typ, $opTrans, $delStFc)
    {
        $path = "/productions/ChangePOAndWOStatus/{$ficheNo}/{$status}/{$typ}/{$opTrans}/{$delStFc}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /productions/ChangeProdOrdBegAndEndPer/{_ficheNo}/{_ficheType}/{_begDate}/{_begTime}/{_endDate}/{_endTime}/{_dueDate}/{_dueTime}
     */
    public function changeProdOrdBegAndEndPerV1(string $ficheNo, $ficheType, $begDate, $begTime, $endDate, $endTime, $dueDate, $dueTime)
    {
        $path = "/productions/ChangeProdOrdBegAndEndPer/{$ficheNo}/{$ficheType}/{$begDate}/{$begTime}/{$endDate}/{$endTime}/{$dueDate}/{$dueTime}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /productions/ChangeProdOrdPlnAmount/{_ficheNo}/{_ficheType}/{_PlnAmount}
     */
    public function changeProdOrdPlnAmountV1(string $ficheNo, $ficheType, $PlnAmount)
    {
        $path = "/productions/ChangeProdOrdPlnAmount/{$ficheNo}/{$ficheType}/{$PlnAmount}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /productions/ChangeWSInWorkOrder/{_ficheNo}/{_wStation}
     */
    public function changeWSInWorkOrderV1(string $ficheNo, string $wStation)
    {
        $path = "/productions/ChangeWSInWorkOrder/{$ficheNo}/{$wStation}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /productions/NewPrdDispLines
     */
    public function newPrdDispLinesV1()
    {
        $path = "/productions/NewPrdDispLines";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /productions/AddDispLines/{_ficheNo}/{_ficheType}
     */
    public function addDispLinesV1(string $ficheNo, $ficheType, array $data)
    {
        $path = "/productions/AddDispLines/{$ficheNo}/{$ficheType}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /productions/FastRealizeFicheGenerateForWOrder/{_wOrdRef}/{_ItemRef}/{_prodAmnt}/{_uomRef}/{_method}/{_removeSidePrdct}/{_vrntRef}
     */
    public function fastRealizeFicheGenerateForWOrderV1($wOrdRef, $ItemRef, $prodAmnt, $uomRef, $method, $removeSidePrdct, $vrntRef, array $data)
    {
        $path = "/productions/FastRealizeFicheGenerateForWOrder/{$wOrdRef}/{$ItemRef}/{$prodAmnt}/{$uomRef}/{$method}/{$removeSidePrdct}/{$vrntRef}";
        return $this->request('GET', $path, $data);
    }

    /**
     * Corresponds to GET /productions/NewSlipRefLists
     */
    public function newSlipRefListsV1()
    {
        $path = "/productions/NewSlipRefLists";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /productions/ProdOrderAutomaticGenerateWithFicheNo/{_ItemRef}/{_BOMRef}/{_RevRef}/{_targetDate}/{_FactoryNr}/{_PlnAmount}/{_ficheDate}/{_ficheNo}
     */
    public function prodOrderAutomaticGenerateWithFicheNoV1($ItemRef, $BOMRef, $RevRef, string $targetDate, $FactoryNr, $PlnAmount, string $ficheDate, string $ficheNo, array $data)
    {
        $path = "/productions/ProdOrderAutomaticGenerateWithFicheNo/{$ItemRef}/{$BOMRef}/{$RevRef}/{$targetDate}/{$FactoryNr}/{$PlnAmount}/{$ficheDate}/{$ficheNo}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /productions/NewWOLRefList
     */
    public function newWOLRefListV1()
    {
        $path = "/productions/NewWOLRefList";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /productions/AddStopTrans/{_StpCRef}/{_StpDate}/{_ActBegDate}/{_ActEndDate}
     */
    public function addStopTransV1($StpCRef, string $StpDate, string $ActBegDate, string $ActEndDate, array $data)
    {
        $path = "/productions/AddStopTrans/{$StpCRef}/{$StpDate}/{$ActBegDate}/{$ActEndDate}";
        return $this->request('GET', $path, $data);
    }

    /**
     * Corresponds to GET /productions/FastRealizeFicheGeneratewithDate/{_prodOrdRef}/{_ItemRef}/{_prodAmnt}/{_uomRef}/{_method}/{_removeSidePrdct}/{_fcDate}/{_vrntRef}
     */
    public function fastRealizeFicheGeneratewithDateV1($prodOrdRef, $ItemRef, $prodAmnt, $uomRef, $method, $removeSidePrdct, string $fcDate, $vrntRef, array $data)
    {
        $path = "/productions/FastRealizeFicheGeneratewithDate/{$prodOrdRef}/{$ItemRef}/{$prodAmnt}/{$uomRef}/{$method}/{$removeSidePrdct}/{$fcDate}/{$vrntRef}";
        return $this->request('GET', $path, $data);
    }

    /**
     * Corresponds to GET /productions/NewPlnRltnList
     */
    public function newPlnRltnListV1()
    {
        $path = "/productions/NewPlnRltnList";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /productions/ProdOrdPlannedRelations/{_PORef}/{_PegRef}
     */
    public function prodOrdPlannedRelationsV1($PORef, $PegRef, array $data)
    {
        $path = "/productions/ProdOrdPlannedRelations/{$PORef}/{$PegRef}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /productions/NewReleaseProcess/{_prodOrdRef}
     */
    public function newReleaseProcessV1($prodOrdRef)
    {
        $path = "/productions/NewReleaseProcess/{$prodOrdRef}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /productions/NewQPSlipRefLists
     */
    public function newQPSlipRefListsV1()
    {
        $path = "/productions/NewQPSlipRefLists";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /productions/QuickProdFicheProc/{_ItemRef}/{_prodAmnt}/{_ficheDate}/{_ficheTime}/{_deptNr}/{_whNr}/{_calcOpt}
     */
    public function quickProdFicheProcV1($ItemRef, $prodAmnt, $ficheDate, $ficheTime, $deptNr, $whNr, $calcOpt, array $data)
    {
        $path = "/productions/QuickProdFicheProc/{$ItemRef}/{$prodAmnt}/{$ficheDate}/{$ficheTime}/{$deptNr}/{$whNr}/{$calcOpt}";
        return $this->request('GET', $path, $data);
    }

    /**
     * Corresponds to GET /productions/FastOperationCompleteForWOrder/{_wOrdRef}/{_ItemRef}/{_variantRef}/{_consumpAmount}/{_wasteAmount}/{_fcDate}
     */
    public function fastOperationCompleteForWOrderV1($wOrdRef, $ItemRef, $variantRef, $consumpAmount, $wasteAmount, string $fcDate, array $data)
    {
        $path = "/productions/FastOperationCompleteForWOrder/{$wOrdRef}/{$ItemRef}/{$variantRef}/{$consumpAmount}/{$wasteAmount}/{$fcDate}";
        return $this->request('GET', $path, $data);
    }

    /**
     * Corresponds to GET /productions/FastOperationCompleteWithDate/{_wOrdRef}/{_ItemRef}/{_variantRef}/{_consumpAmount}/{_wasteAmount}/{_fcDate}
     */
    public function fastOperationCompleteWithDateV1($wOrdRef, $ItemRef, $variantRef, $consumpAmount, $wasteAmount, string $fcDate, array $data)
    {
        $path = "/productions/FastOperationCompleteWithDate/{$wOrdRef}/{$ItemRef}/{$variantRef}/{$consumpAmount}/{$wasteAmount}/{$fcDate}";
        return $this->request('GET', $path, $data);
    }

    /**
     * Corresponds to GET /productions/AddStopTransForAWOrd/{_wOrdRef}/{_StpCRef}/{_StpDate}/{_StpTime}/{_StartDate}/{_StartTime}/{_TransExp}
     */
    public function addStopTransForAWOrdV1($wOrdRef, $StpCRef, $StpDate, $StpTime, $StartDate, $StartTime, string $TransExp)
    {
        $path = "/productions/AddStopTransForAWOrd/{$wOrdRef}/{$StpCRef}/{$StpDate}/{$StpTime}/{$StartDate}/{$StartTime}/{$TransExp}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /productions/RealizeFicheAnalyse/{_prodOrdRef}/{_amount}/{_isPerc}/{_vrntRef}/{_forPOrder}
     */
    public function realizeFicheAnalyseV1($prodOrdRef, $amount, $isPerc, $vrntRef, $forPOrder, array $data)
    {
        $path = "/productions/RealizeFicheAnalyse/{$prodOrdRef}/{$amount}/{$isPerc}/{$vrntRef}/{$forPOrder}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /productions/NewRSlipList
     */
    public function newRSlipListV1()
    {
        $path = "/productions/NewRSlipList";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /productions/ProdOrderCancel/{_prodOrdRef}/{_Delete}
     */
    public function prodOrderCancelV1($prodOrdRef, $Delete)
    {
        $path = "/productions/ProdOrderCancel/{$prodOrdRef}/{$Delete}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /productions/ProdOrderGenerateWithOrdLine/{_ItemRef}/{_BOMRef}/{_RevRef}/{_targetDate}/{_FactoryNr}/{_PlnAmount}/{_ficheDate}/{_ficheNo}/{_uomR}/{_ordLineRef}/{_ctrlWHs}/{_chkPOAmnt}/{_whNr}
     */
    public function prodOrderGenerateWithOrdLineV1($ItemRef, $BOMRef, $RevRef, string $targetDate, $FactoryNr, $PlnAmount, string $ficheDate, string $ficheNo, $uomR, $ordLineRef, $ctrlWHs, $chkPOAmnt, $whNr, array $data)
    {
        $path = "/productions/ProdOrderGenerateWithOrdLine/{$ItemRef}/{$BOMRef}/{$RevRef}/{$targetDate}/{$FactoryNr}/{$PlnAmount}/{$ficheDate}/{$ficheNo}/{$uomR}/{$ordLineRef}/{$ctrlWHs}/{$chkPOAmnt}/{$whNr}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /productions/UpdateProdOrdRevision/{_PORef}/{_BOMRef}/{_RevRef}
     */
    public function updateProdOrdRevisionV1($PORef, $BOMRef, $RevRef)
    {
        $path = "/productions/UpdateProdOrdRevision/{$PORef}/{$BOMRef}/{$RevRef}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /productions/GetProdParams/{_BOMRef}
     */
    public function getProdParamsV1($BOMRef, array $data)
    {
        $path = "/productions/GetProdParams/{$BOMRef}";
        return $this->request('GET', $path, $data);
    }

    /**
     * Corresponds to GET /productions/NewProdParams
     */
    public function newProdParamsV1()
    {
        $path = "/productions/NewProdParams";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /productions/ProdOrderAutomaticGenerateWithParams/{_ItemRef}/{_BOMRef}/{_RevRef}/{_targetDate}/{_FactoryNr}/{_PlnAmount}/{_ficheDate}/{_ficheNo}/{_uomR}
     */
    public function prodOrderAutomaticGenerateWithParamsV1($ItemRef, $BOMRef, $RevRef, string $targetDate, $FactoryNr, $PlnAmount, string $ficheDate, string $ficheNo, $uomR, array $data)
    {
        $path = "/productions/ProdOrderAutomaticGenerateWithParams/{$ItemRef}/{$BOMRef}/{$RevRef}/{$targetDate}/{$FactoryNr}/{$PlnAmount}/{$ficheDate}/{$ficheNo}/{$uomR}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /productions/ConsecutiveProcurementOfProdOrd/{_prodOrdRef}/{_negLevelCtrl}/{_consLevel}
     */
    public function consecutiveProcurementOfProdOrdV1($prodOrdRef, $negLevelCtrl, $consLevel, array $data)
    {
        $path = "/productions/ConsecutiveProcurementOfProdOrd/{$prodOrdRef}/{$negLevelCtrl}/{$consLevel}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /productions/NewMeetTypes
     */
    public function newMeetTypesV1()
    {
        $path = "/productions/NewMeetTypes";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /productions/GetLastProdError
     */
    public function getLastProdErrorV1()
    {
        $path = "/productions/GetLastProdError";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /productions/opTrans
     */
    public function opTransV1()
    {
        $path = "/productions/opTrans";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /productions/opTrans/{_value}
     */
    public function opTransSetV1($value)
    {
        $path = "/productions/opTrans/{$value}";
        return $this->request('POST', $path);
    }

    /**
     * Retrieves database column information for the Productions entity.
     */
    public function getDbColumns()
    {
        $path = "{$this->endpoint}/dbcolumns";
        return $this->request('GET', $path);
    }

    /**
     * Enables change tracking for the Productions entity.
     */
    public function track()
    {
        $path = "{$this->endpoint}/track";
        return $this->request('GET', $path);
    }

    /**
     * Disables change tracking for the Productions entity.
     */
    public function untrack()
    {
        $path = "{$this->endpoint}/untrack";
        return $this->request('GET', $path);
    }

    /**
     * Checks the change tracking status for the Productions entity.
     */
    public function checkTrackStatus()
    {
        $path = "{$this->endpoint}/checktrack";
        return $this->request('GET', $path);
    }
}
