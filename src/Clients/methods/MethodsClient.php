<?php

declare(strict_types=1);

namespace LogoObjects\Clients\methods;

use LogoObjects\Http\BaseApiClient;
use LogoObjects\Types\ApiResponse;
use LogoObjects\Utils\QueryBuilder;

/**
 * MethodsClient - /methods endpoint'i icin CRUD ve ozel islemler.
 */
class MethodsClient extends BaseApiClient
{
    /** @var string */
    protected $endpoint = '/methods';

    /**
     * Corresponds to POST /methods/retrievetoken
     */
    public function authorization_V1_methods_retrievetoken(array $data)
    {
        $path = "/methods/retrievetoken";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /methods/revoke
     */
    public function authorization_V1_methods_revoke()
    {
        $path = "/methods/revoke";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/istokenvalid
     */
    public function authorization_V1_methods_istokenvalid()
    {
        $path = "/methods/istokenvalid";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/versions
     */
    public function authorization_V1_methods_versions()
    {
        $path = "/methods/versions";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/ping
     */
    public function authorization_V1_methods_ping()
    {
        $path = "/methods/ping";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/Firm/{FirmNr}/Period/CreateTables/{number}
     */
    public function period_CreateTablesV1($FirmNr, $number)
    {
        $path = "/methods/Firm/{$FirmNr}/Period/CreateTables/{$number}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/Firm/{FirmNr}/Period/CreateTriggers/{number}
     */
    public function period_CreateTriggersV1($FirmNr, $number)
    {
        $path = "/methods/Firm/{$FirmNr}/Period/CreateTriggers/{$number}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/Firm/{FirmNr}/Period/CreateCustomTables/{number}
     */
    public function period_CreateCustomTablesV1($FirmNr, $number)
    {
        $path = "/methods/Firm/{$FirmNr}/Period/CreateCustomTables/{$number}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/Firm/{FirmNr}/Period/UpdateCustomTables/{number}
     */
    public function period_UpdateCustomTablesV1($FirmNr, $number)
    {
        $path = "/methods/Firm/{$FirmNr}/Period/UpdateCustomTables/{$number}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/TradeGroups/Delete/{_index}
     */
    public function tradeGroupsDeleteV1($index)
    {
        $path = "/methods/TradeGroups/Delete/{$index}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/TradeGroups/Delete_/{_index}
     */
    public function tradeGroupsDelete_V1($index)
    {
        $path = "/methods/TradeGroups/Delete_/{$index}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/TradeGroups/Clear_
     */
    public function tradeGroupsClear_V1()
    {
        $path = "/methods/TradeGroups/Clear_";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/TradeGroups
     */
    public function tradeGroupsV1()
    {
        $path = "/methods/TradeGroups";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/TradeGroups/Count
     */
    public function tradeGroups_CountV1()
    {
        $path = "/methods/TradeGroups/Count";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/TradeGroups/Parent
     */
    public function tradeGroups_ParentV1()
    {
        $path = "/methods/TradeGroups/Parent";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/SerialNo
     */
    public function serialNoV1()
    {
        $path = "/methods/SerialNo";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/UserCount
     */
    public function userCountV1()
    {
        $path = "/methods/UserCount";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/LogPath
     */
    public function logPathV1()
    {
        $path = "/methods/LogPath";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CreateCAPI
     */
    public function createCAPIV1()
    {
        $path = "/methods/CreateCAPI";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/ForcedCfgServerName
     */
    public function forcedCfgServerNameV1()
    {
        $path = "/methods/ForcedCfgServerName";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/ForcedCfgDBName
     */
    public function forcedCfgDBNameV1()
    {
        $path = "/methods/ForcedCfgDBName";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/ForcedCfgUserName
     */
    public function forcedCfgUserNameV1()
    {
        $path = "/methods/ForcedCfgUserName";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/ForcedCfgPassword
     */
    public function forcedCfgPasswordV1()
    {
        $path = "/methods/ForcedCfgPassword";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/ForcedCfgDBOwner
     */
    public function forcedCfgDBOwnerV1()
    {
        $path = "/methods/ForcedCfgDBOwner";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/ForcedCfgDBType
     */
    public function forcedCfgDBTypeV1()
    {
        $path = "/methods/ForcedCfgDBType";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CheckTableExists
     */
    public function checkTableExistsV1()
    {
        $path = "/methods/CheckTableExists";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CreateServicesCards
     */
    public function createServicesCardsV1()
    {
        $path = "/methods/CreateServicesCards";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CancelChangeLog
     */
    public function cancelChangeLogV1()
    {
        $path = "/methods/CancelChangeLog";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CancelHistory
     */
    public function cancelHistoryV1()
    {
        $path = "/methods/CancelHistory";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CreateDynReports
     */
    public function createDynReportsV1()
    {
        $path = "/methods/CreateDynReports";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/RestInPeace
     */
    public function restInPeaceV1()
    {
        $path = "/methods/RestInPeace";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/ERPApplication/RunReport/{_tskId}/{_devType}/{_jsonGridType}/{_custDsgRef}/{_filterRef}
     */
    public function erpapplicationrunreportV1($tskId, $devType, $jsonGridType, $custDsgRef, $filterRef)
    {
        $path = "/methods/ERPApplication/RunReport/{$tskId}/{$devType}/{$jsonGridType}/{$custDsgRef}/{$filterRef}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/ERPApplication/AddToReportQueue/{_tskId}/{_devType}/{_jsonGridType}/{_custDsgRef}/{_filterRef}
     */
    public function erpapplicationaddtoreportqueueV1($tskId, $devType, $jsonGridType, $custDsgRef, $filterRef)
    {
        $path = "/methods/ERPApplication/AddToReportQueue/{$tskId}/{$devType}/{$jsonGridType}/{$custDsgRef}/{$filterRef}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/ERPApplication/GetFirstReportFromQueue
     */
    public function erpapplicationgetfirstreportfromqueueV1()
    {
        $path = "/methods/ERPApplication/GetFirstReportFromQueue";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/ERPApplication/RunReportFromQueue/{_queueId}/{_forceReCreate}
     */
    public function erpapplicationrunreportfromqueueV1(string $queueId, $forceReCreate)
    {
        $path = "/methods/ERPApplication/RunReportFromQueue/{$queueId}/{$forceReCreate}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/ERPApplication/GetQueueList/{_queueIdFilter}/{_statusFilter}/{_resultFilter}
     */
    public function erpapplicationgetqueuelistV1(string $queueIdFilter, string $statusFilter, string $resultFilter)
    {
        $path = "/methods/ERPApplication/GetQueueList/{$queueIdFilter}/{$statusFilter}/{$resultFilter}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/ERPApplication
     */
    public function erpapplicationV1()
    {
        $path = "/methods/ERPApplication";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/ERPApplication/SilentMode
     */
    public function erpapplicationSilentmodeV1()
    {
        $path = "/methods/ERPApplication/SilentMode";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CurrentPeriod
     */
    public function currentPeriodV1()
    {
        $path = "/methods/CurrentPeriod";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to PUT /methods/Firm/{FirmNr}/put
     */
    public function firm_PostV1($FirmNr, array $data)
    {
        $path = "/methods/Firm/{$FirmNr}/put";
        return $this->request('PUT', $path, $data);
    }

    /**
     * Corresponds to POST /methods/Firm/Post
     */
    public function firm_PostV1Post(array $data)
    {
        $path = "/methods/Firm/Post";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to DELETE /methods/Firm/Delete/{FirmNr}
     */
    public function firm_DeleteV1($FirmNr)
    {
        $path = "/methods/Firm/Delete/{$FirmNr}";
        return $this->request('DELETE', $path);
    }

    /**
     * Corresponds to GET /methods/Firm/CreateTables/{FirmNr}
     */
    public function firm_CreateTablesV1($FirmNr)
    {
        $path = "/methods/Firm/CreateTables/{$FirmNr}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/Firm/CreateCustomTables/{FirmNr}
     */
    public function firm_CreateCustomTablesV1($FirmNr)
    {
        $path = "/methods/Firm/CreateCustomTables/{$FirmNr}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/Firm/UpdateCustomTables/{FirmNr}
     */
    public function firm_UpdateCustomTablesV1($FirmNr)
    {
        $path = "/methods/Firm/UpdateCustomTables/{$FirmNr}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to PUT /methods/User/{UserName}/put
     */
    public function user_PostV1(string $UserName, array $data)
    {
        $path = "/methods/User/{$UserName}/put";
        return $this->request('PUT', $path, $data);
    }

    /**
     * Corresponds to POST /methods/User/Post
     */
    public function user_PostV1Post(array $data)
    {
        $path = "/methods/User/Post";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to DELETE /methods/User/Delete/{UserNr}
     */
    public function user_DeleteV1($UserNr)
    {
        $path = "/methods/User/Delete/{$UserNr}";
        return $this->request('DELETE', $path);
    }

    /**
     * Corresponds to GET /methods/User/SetWindowsUserMode/{UserNr}
     */
    public function user_SetWindowsUserModeV1($UserNr)
    {
        $path = "/methods/User/SetWindowsUserMode/{$UserNr}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to PUT /methods/Period/{PeriodNr}/put/{FirmNr}
     */
    public function period_PostV1($PeriodNr, $FirmNr, array $data)
    {
        $path = "/methods/Period/{$PeriodNr}/put/{$FirmNr}";
        return $this->request('PUT', $path, $data);
    }

    /**
     * Corresponds to POST /methods/Period/Post/{FirmNr}
     */
    public function period_PostV1Post($FirmNr, array $data)
    {
        $path = "/methods/Period/Post/{$FirmNr}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to DELETE /methods/Firm/{FirmNr}/Period/Delete/{number}
     */
    public function period_DeleteV1($FirmNr, $number)
    {
        $path = "/methods/Firm/{$FirmNr}/Period/Delete/{$number}";
        return $this->request('DELETE', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/buffer2
     */
    public function firmParameters_buffer2V1()
    {
        $path = "/methods/FirmParameters/buffer2";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/buffer3
     */
    public function firmParameters_buffer3V1()
    {
        $path = "/methods/FirmParameters/buffer3";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pGlobLotNum
     */
    public function firmParameters_pGlobLotNumV1()
    {
        $path = "/methods/FirmParameters/pGlobLotNum";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/reserved8
     */
    public function firmParameters_reserved8V1()
    {
        $path = "/methods/FirmParameters/reserved8";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/diffWHouseUse
     */
    public function firmParameters_diffWHouseUseV1()
    {
        $path = "/methods/FirmParameters/diffWHouseUse";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pcBuffer
     */
    public function firmParameters_pcBufferV1()
    {
        $path = "/methods/FirmParameters/pcBuffer";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/allocTargetType
     */
    public function firmParameters_allocTargetTypeV1()
    {
        $path = "/methods/FirmParameters/allocTargetType";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/distOverHeads
     */
    public function firmParameters_distOverHeadsV1()
    {
        $path = "/methods/FirmParameters/distOverHeads";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/stdRepCurrCont
     */
    public function firmParameters_stdRepCurrContV1()
    {
        $path = "/methods/FirmParameters/stdRepCurrCont";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/caBuffer
     */
    public function firmParameters_caBufferV1()
    {
        $path = "/methods/FirmParameters/caBuffer";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/gpInComeTaxRatT
     */
    public function firmParameters_gpInComeTaxRatTV1()
    {
        $path = "/methods/FirmParameters/gpInComeTaxRatT";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/gpInComeTaxRatS
     */
    public function firmParameters_gpInComeTaxRatSV1()
    {
        $path = "/methods/FirmParameters/gpInComeTaxRatS";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/gpFundShareRat
     */
    public function firmParameters_gpFundShareRatV1()
    {
        $path = "/methods/FirmParameters/gpFundShareRat";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/gpBuffer
     */
    public function firmParameters_gpBufferV1()
    {
        $path = "/methods/FirmParameters/gpBuffer";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/accToBeOutOfTrack
     */
    public function firmParameters_accToBeOutOfTrackV1()
    {
        $path = "/methods/FirmParameters/accToBeOutOfTrack";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/transferFiche
     */
    public function firmParameters_transferFicheV1()
    {
        $path = "/methods/FirmParameters/transferFiche";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/expenWasFiche
     */
    public function firmParameters_expenWasFicheV1()
    {
        $path = "/methods/FirmParameters/expenWasFiche";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/productionFiche
     */
    public function firmParameters_productionFicheV1()
    {
        $path = "/methods/FirmParameters/productionFiche";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/warehouseFiche
     */
    public function firmParameters_warehouseFicheV1()
    {
        $path = "/methods/FirmParameters/warehouseFiche";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/defItemInFiche
     */
    public function firmParameters_defItemInFicheV1()
    {
        $path = "/methods/FirmParameters/defItemInFiche";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/defItemOutFiche
     */
    public function firmParameters_defItemOutFicheV1()
    {
        $path = "/methods/FirmParameters/defItemOutFiche";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/dispPurcFiche
     */
    public function firmParameters_dispPurcFicheV1()
    {
        $path = "/methods/FirmParameters/dispPurcFiche";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/dispSaleFiche
     */
    public function firmParameters_dispSaleFicheV1()
    {
        $path = "/methods/FirmParameters/dispSaleFiche";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/invPurcFiche
     */
    public function firmParameters_invPurcFicheV1()
    {
        $path = "/methods/FirmParameters/invPurcFiche";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/invSaleFiche
     */
    public function firmParameters_invSaleFicheV1()
    {
        $path = "/methods/FirmParameters/invSaleFiche";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/roundDefault
     */
    public function firmParameters_roundDefaultV1()
    {
        $path = "/methods/FirmParameters/roundDefault";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/countForMPSRun
     */
    public function firmParameters_countForMPSRunV1()
    {
        $path = "/methods/FirmParameters/countForMPSRun";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/mpsNoOfDays
     */
    public function firmParameters_mpsNoOfDaysV1()
    {
        $path = "/methods/FirmParameters/mpsNoOfDays";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/mpsNoOfWeeks
     */
    public function firmParameters_mpsNoOfWeeksV1()
    {
        $path = "/methods/FirmParameters/mpsNoOfWeeks";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/mpsNoOfMonths
     */
    public function firmParameters_mpsNoOfMonthsV1()
    {
        $path = "/methods/FirmParameters/mpsNoOfMonths";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/mpsNoOfFrozDays
     */
    public function firmParameters_mpsNoOfFrozDaysV1()
    {
        $path = "/methods/FirmParameters/mpsNoOfFrozDays";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/mpsFrozDaysFlag
     */
    public function firmParameters_mpsFrozDaysFlagV1()
    {
        $path = "/methods/FirmParameters/mpsFrozDaysFlag";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/mpsDistrWkDays
     */
    public function firmParameters_mpsDistrWkDaysV1()
    {
        $path = "/methods/FirmParameters/mpsDistrWkDays";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/mpsDistrMntDays
     */
    public function firmParameters_mpsDistrMntDaysV1()
    {
        $path = "/methods/FirmParameters/mpsDistrMntDays";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/Reserved7
     */
    public function firmParameters_Reserved7V1()
    {
        $path = "/methods/FirmParameters/Reserved7";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/contToolPlnOccWithWS
     */
    public function firmParameters_contToolPlnOccWithWSV1()
    {
        $path = "/methods/FirmParameters/contToolPlnOccWithWS";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/contEmpPlnOccWithWS
     */
    public function firmParameters_contEmpPlnOccWithWSV1()
    {
        $path = "/methods/FirmParameters/contEmpPlnOccWithWS";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/contToolActOccWithWS
     */
    public function firmParameters_contToolActOccWithWSV1()
    {
        $path = "/methods/FirmParameters/contToolActOccWithWS";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/contEmpActOccWithWS
     */
    public function firmParameters_contEmpActOccWithWSV1()
    {
        $path = "/methods/FirmParameters/contEmpActOccWithWS";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/InvPrintCnt
     */
    public function firmParameters_InvPrintCntV1()
    {
        $path = "/methods/FirmParameters/InvPrintCnt";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/useGenLotNum
     */
    public function firmParameters_useGenLotNumV1()
    {
        $path = "/methods/FirmParameters/useGenLotNum";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/outCtrl
     */
    public function firmParameters_outCtrlV1()
    {
        $path = "/methods/FirmParameters/outCtrl";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/mergeFicheLines2
     */
    public function firmParameters_mergeFicheLines2V1()
    {
        $path = "/methods/FirmParameters/mergeFicheLines2";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/mergeFicheLines3
     */
    public function firmParameters_mergeFicheLines3V1()
    {
        $path = "/methods/FirmParameters/mergeFicheLines3";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/mergeFicheLines4
     */
    public function firmParameters_mergeFicheLines4V1()
    {
        $path = "/methods/FirmParameters/mergeFicheLines4";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/defStFNames0
     */
    public function firmParameters_defStFNames0V1()
    {
        $path = "/methods/FirmParameters/defStFNames0";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/defStFNames1
     */
    public function firmParameters_defStFNames1V1()
    {
        $path = "/methods/FirmParameters/defStFNames1";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/defStFNames2
     */
    public function firmParameters_defStFNames2V1()
    {
        $path = "/methods/FirmParameters/defStFNames2";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/defStFNames3
     */
    public function firmParameters_defStFNames3V1()
    {
        $path = "/methods/FirmParameters/defStFNames3";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/defStFNames4
     */
    public function firmParameters_defStFNames4V1()
    {
        $path = "/methods/FirmParameters/defStFNames4";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/defStFNames5
     */
    public function firmParameters_defStFNames5V1()
    {
        $path = "/methods/FirmParameters/defStFNames5";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/defStFNames6
     */
    public function firmParameters_defStFNames6V1()
    {
        $path = "/methods/FirmParameters/defStFNames6";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/defStFNames7
     */
    public function firmParameters_defStFNames7V1()
    {
        $path = "/methods/FirmParameters/defStFNames7";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/defStFNames8
     */
    public function firmParameters_defStFNames8V1()
    {
        $path = "/methods/FirmParameters/defStFNames8";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/defStFNames9
     */
    public function firmParameters_defStFNames9V1()
    {
        $path = "/methods/FirmParameters/defStFNames9";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/defPurchFNames0
     */
    public function firmParameters_defPurchFNames0V1()
    {
        $path = "/methods/FirmParameters/defPurchFNames0";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/defPurchFNames1
     */
    public function firmParameters_defPurchFNames1V1()
    {
        $path = "/methods/FirmParameters/defPurchFNames1";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/defPurchFNames2
     */
    public function firmParameters_defPurchFNames2V1()
    {
        $path = "/methods/FirmParameters/defPurchFNames2";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/defPurchFNames3
     */
    public function firmParameters_defPurchFNames3V1()
    {
        $path = "/methods/FirmParameters/defPurchFNames3";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/defPurchFNames4
     */
    public function firmParameters_defPurchFNames4V1()
    {
        $path = "/methods/FirmParameters/defPurchFNames4";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/defSaleFNames0
     */
    public function firmParameters_defSaleFNames0V1()
    {
        $path = "/methods/FirmParameters/defSaleFNames0";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/defSaleFNames1
     */
    public function firmParameters_defSaleFNames1V1()
    {
        $path = "/methods/FirmParameters/defSaleFNames1";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/defSaleFNames2
     */
    public function firmParameters_defSaleFNames2V1()
    {
        $path = "/methods/FirmParameters/defSaleFNames2";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/defSaleFNames3
     */
    public function firmParameters_defSaleFNames3V1()
    {
        $path = "/methods/FirmParameters/defSaleFNames3";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/defSaleFNames4
     */
    public function firmParameters_defSaleFNames4V1()
    {
        $path = "/methods/FirmParameters/defSaleFNames4";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/stopajPer0
     */
    public function firmParameters_stopajPer0V1()
    {
        $path = "/methods/FirmParameters/stopajPer0";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/stopajPer1
     */
    public function firmParameters_stopajPer1V1()
    {
        $path = "/methods/FirmParameters/stopajPer1";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/stopajPer2
     */
    public function firmParameters_stopajPer2V1()
    {
        $path = "/methods/FirmParameters/stopajPer2";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/ek1Per
     */
    public function firmParameters_ek1PerV1()
    {
        $path = "/methods/FirmParameters/ek1Per";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/ek2Per
     */
    public function firmParameters_ek2PerV1()
    {
        $path = "/methods/FirmParameters/ek2Per";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/SSDFPer
     */
    public function firmParameters_SSDFPerV1()
    {
        $path = "/methods/FirmParameters/SSDFPer";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/borsaPer
     */
    public function firmParameters_borsaPerV1()
    {
        $path = "/methods/FirmParameters/borsaPer";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/komisyonPer
     */
    public function firmParameters_komisyonPerV1()
    {
        $path = "/methods/FirmParameters/komisyonPer";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/komKDVPer
     */
    public function firmParameters_komKDVPerV1()
    {
        $path = "/methods/FirmParameters/komKDVPer";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/bagKurPer
     */
    public function firmParameters_bagKurPerV1()
    {
        $path = "/methods/FirmParameters/bagKurPer";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/perDataPath
     */
    public function firmParameters_perDataPathV1()
    {
        $path = "/methods/FirmParameters/perDataPath";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/begMon
     */
    public function firmParameters_begMonV1()
    {
        $path = "/methods/FirmParameters/begMon";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/begDay
     */
    public function firmParameters_begDayV1()
    {
        $path = "/methods/FirmParameters/begDay";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/reserved0
     */
    public function firmParameters_reserved0V1()
    {
        $path = "/methods/FirmParameters/reserved0";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/reserved1
     */
    public function firmParameters_reserved1V1()
    {
        $path = "/methods/FirmParameters/reserved1";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/reserved2
     */
    public function firmParameters_reserved2V1()
    {
        $path = "/methods/FirmParameters/reserved2";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/reserved3
     */
    public function firmParameters_reserved3V1()
    {
        $path = "/methods/FirmParameters/reserved3";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/reserved4
     */
    public function firmParameters_reserved4V1()
    {
        $path = "/methods/FirmParameters/reserved4";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/buffer0
     */
    public function firmParameters_buffer0V1()
    {
        $path = "/methods/FirmParameters/buffer0";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/buffer1
     */
    public function firmParameters_buffer1V1()
    {
        $path = "/methods/FirmParameters/buffer1";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/printAccFiche
     */
    public function firmParameters_printAccFicheV1()
    {
        $path = "/methods/FirmParameters/printAccFiche";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/printUpperAcc
     */
    public function firmParameters_printUpperAccV1()
    {
        $path = "/methods/FirmParameters/printUpperAcc";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sortType
     */
    public function firmParameters_sortTypeV1()
    {
        $path = "/methods/FirmParameters/sortType";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/currUpdate
     */
    public function firmParameters_currUpdateV1()
    {
        $path = "/methods/FirmParameters/currUpdate";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/repCurrCont
     */
    public function firmParameters_repCurrContV1()
    {
        $path = "/methods/FirmParameters/repCurrCont";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/centerControl
     */
    public function firmParameters_centerControlV1()
    {
        $path = "/methods/FirmParameters/centerControl";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/amntControl
     */
    public function firmParameters_amntControlV1()
    {
        $path = "/methods/FirmParameters/amntControl";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/fichesToCenCtrl0
     */
    public function firmParameters_fichesToCenCtrl0V1()
    {
        $path = "/methods/FirmParameters/fichesToCenCtrl0";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/fichesToCenCtrl1
     */
    public function firmParameters_fichesToCenCtrl1V1()
    {
        $path = "/methods/FirmParameters/fichesToCenCtrl1";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/fichesToCenCtrl2
     */
    public function firmParameters_fichesToCenCtrl2V1()
    {
        $path = "/methods/FirmParameters/fichesToCenCtrl2";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/fichesToCenCtrl3
     */
    public function firmParameters_fichesToCenCtrl3V1()
    {
        $path = "/methods/FirmParameters/fichesToCenCtrl3";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/fichesToCenCtrl4
     */
    public function firmParameters_fichesToCenCtrl4V1()
    {
        $path = "/methods/FirmParameters/fichesToCenCtrl4";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/fichesToCenCtrl5
     */
    public function firmParameters_fichesToCenCtrl5V1()
    {
        $path = "/methods/FirmParameters/fichesToCenCtrl5";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/fichesToCenCtrl6
     */
    public function firmParameters_fichesToCenCtrl6V1()
    {
        $path = "/methods/FirmParameters/fichesToCenCtrl6";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/fichesToCenCtrl7
     */
    public function firmParameters_fichesToCenCtrl7V1()
    {
        $path = "/methods/FirmParameters/fichesToCenCtrl7";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/fichesToCenCtrl8
     */
    public function firmParameters_fichesToCenCtrl8V1()
    {
        $path = "/methods/FirmParameters/fichesToCenCtrl8";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/fichesToCenCtrl9
     */
    public function firmParameters_fichesToCenCtrl9V1()
    {
        $path = "/methods/FirmParameters/fichesToCenCtrl9";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/fichesToCenCtrl10
     */
    public function firmParameters_fichesToCenCtrl10V1()
    {
        $path = "/methods/FirmParameters/fichesToCenCtrl10";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/accControl
     */
    public function firmParameters_accControlV1()
    {
        $path = "/methods/FirmParameters/accControl";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/fichesToAccCtrl0
     */
    public function firmParameters_fichesToAccCtrl0V1()
    {
        $path = "/methods/FirmParameters/fichesToAccCtrl0";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/fichesToAccCtrl1
     */
    public function firmParameters_fichesToAccCtrl1V1()
    {
        $path = "/methods/FirmParameters/fichesToAccCtrl1";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/fichesToAccCtrl2
     */
    public function firmParameters_fichesToAccCtrl2V1()
    {
        $path = "/methods/FirmParameters/fichesToAccCtrl2";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/fichesToAccCtrl3
     */
    public function firmParameters_fichesToAccCtrl3V1()
    {
        $path = "/methods/FirmParameters/fichesToAccCtrl3";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/fichesToAccCtrl4
     */
    public function firmParameters_fichesToAccCtrl4V1()
    {
        $path = "/methods/FirmParameters/fichesToAccCtrl4";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/fichesToAccCtrl5
     */
    public function firmParameters_fichesToAccCtrl5V1()
    {
        $path = "/methods/FirmParameters/fichesToAccCtrl5";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/fichesToAccCtrl6
     */
    public function firmParameters_fichesToAccCtrl6V1()
    {
        $path = "/methods/FirmParameters/fichesToAccCtrl6";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/fichesToAccCtrl7
     */
    public function firmParameters_fichesToAccCtrl7V1()
    {
        $path = "/methods/FirmParameters/fichesToAccCtrl7";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/fichesToAccCtrl8
     */
    public function firmParameters_fichesToAccCtrl8V1()
    {
        $path = "/methods/FirmParameters/fichesToAccCtrl8";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/fichesToAccCtrl9
     */
    public function firmParameters_fichesToAccCtrl9V1()
    {
        $path = "/methods/FirmParameters/fichesToAccCtrl9";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/fichesToAccCtrl10
     */
    public function firmParameters_fichesToAccCtrl10V1()
    {
        $path = "/methods/FirmParameters/fichesToAccCtrl10";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/accRepCurrCtrl
     */
    public function firmParameters_accRepCurrCtrlV1()
    {
        $path = "/methods/FirmParameters/accRepCurrCtrl";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/upperAccPrinting
     */
    public function firmParameters_upperAccPrintingV1()
    {
        $path = "/methods/FirmParameters/upperAccPrinting";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/doubleWayControl
     */
    public function firmParameters_doubleWayControlV1()
    {
        $path = "/methods/FirmParameters/doubleWayControl";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/debitCreditCtrl
     */
    public function firmParameters_debitCreditCtrlV1()
    {
        $path = "/methods/FirmParameters/debitCreditCtrl";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/crossCodeCtrl
     */
    public function firmParameters_crossCodeCtrlV1()
    {
        $path = "/methods/FirmParameters/crossCodeCtrl";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/crossAmntMatch
     */
    public function firmParameters_crossAmntMatchV1()
    {
        $path = "/methods/FirmParameters/crossAmntMatch";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/gLBuffer
     */
    public function firmParameters_gLBufferV1()
    {
        $path = "/methods/FirmParameters/gLBuffer";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/hideCredTrans
     */
    public function firmParameters_hideCredTransV1()
    {
        $path = "/methods/FirmParameters/hideCredTrans";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/persEnteg
     */
    public function firmParameters_persEntegV1()
    {
        $path = "/methods/FirmParameters/persEnteg";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/deCodeNotFnd
     */
    public function firmParameters_deCodeNotFndV1()
    {
        $path = "/methods/FirmParameters/deCodeNotFnd";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/mergeFicheLines0
     */
    public function firmParameters_mergeFicheLines0V1()
    {
        $path = "/methods/FirmParameters/mergeFicheLines0";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/mergeFicheLines1
     */
    public function firmParameters_mergeFicheLines1V1()
    {
        $path = "/methods/FirmParameters/mergeFicheLines1";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/printRoll
     */
    public function firmParameters_printRollV1()
    {
        $path = "/methods/FirmParameters/printRoll";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/printBnFiche
     */
    public function firmParameters_printBnFicheV1()
    {
        $path = "/methods/FirmParameters/printBnFiche";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/printCashLn
     */
    public function firmParameters_printCashLnV1()
    {
        $path = "/methods/FirmParameters/printCashLn";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/piasOnDisc
     */
    public function firmParameters_piasOnDiscV1()
    {
        $path = "/methods/FirmParameters/piasOnDisc";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/distExpenses
     */
    public function firmParameters_distExpensesV1()
    {
        $path = "/methods/FirmParameters/distExpenses";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/riskControl0
     */
    public function firmParameters_riskControl0V1()
    {
        $path = "/methods/FirmParameters/riskControl0";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/riskControl1
     */
    public function firmParameters_riskControl1V1()
    {
        $path = "/methods/FirmParameters/riskControl1";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/riskControl2
     */
    public function firmParameters_riskControl2V1()
    {
        $path = "/methods/FirmParameters/riskControl2";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/riskControl3
     */
    public function firmParameters_riskControl3V1()
    {
        $path = "/methods/FirmParameters/riskControl3";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/riskControl4
     */
    public function firmParameters_riskControl4V1()
    {
        $path = "/methods/FirmParameters/riskControl4";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/riskControl5
     */
    public function firmParameters_riskControl5V1()
    {
        $path = "/methods/FirmParameters/riskControl5";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/riskControl6
     */
    public function firmParameters_riskControl6V1()
    {
        $path = "/methods/FirmParameters/riskControl6";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/riskControl7
     */
    public function firmParameters_riskControl7V1()
    {
        $path = "/methods/FirmParameters/riskControl7";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/riskControl8
     */
    public function firmParameters_riskControl8V1()
    {
        $path = "/methods/FirmParameters/riskControl8";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/riskControl9
     */
    public function firmParameters_riskControl9V1()
    {
        $path = "/methods/FirmParameters/riskControl9";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/riskControl10
     */
    public function firmParameters_riskControl10V1()
    {
        $path = "/methods/FirmParameters/riskControl10";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/riskType
     */
    public function firmParameters_riskTypeV1()
    {
        $path = "/methods/FirmParameters/riskType";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/riskOver
     */
    public function firmParameters_riskOverV1()
    {
        $path = "/methods/FirmParameters/riskOver";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/protestedNotes
     */
    public function firmParameters_protestedNotesV1()
    {
        $path = "/methods/FirmParameters/protestedNotes";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/noteStampPer
     */
    public function firmParameters_noteStampPerV1()
    {
        $path = "/methods/FirmParameters/noteStampPer";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/reeskontInt
     */
    public function firmParameters_reeskontIntV1()
    {
        $path = "/methods/FirmParameters/reeskontInt";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/endorsTrac
     */
    public function firmParameters_endorsTracV1()
    {
        $path = "/methods/FirmParameters/endorsTrac";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/mergeCashLns
     */
    public function firmParameters_mergeCashLnsV1()
    {
        $path = "/methods/FirmParameters/mergeCashLns";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/cashWrkDaysCtrl
     */
    public function firmParameters_cashWrkDaysCtrlV1()
    {
        $path = "/methods/FirmParameters/cashWrkDaysCtrl";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/VATRealKurus
     */
    public function firmParameters_VATRealKurusV1()
    {
        $path = "/methods/FirmParameters/VATRealKurus";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/VATDefault
     */
    public function firmParameters_VATDefaultV1()
    {
        $path = "/methods/FirmParameters/VATDefault";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/VATExpense
     */
    public function firmParameters_VATExpenseV1()
    {
        $path = "/methods/FirmParameters/VATExpense";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/rollOnePayLine
     */
    public function firmParameters_rollOnePayLineV1()
    {
        $path = "/methods/FirmParameters/rollOnePayLine";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/finUpdRepCurr
     */
    public function firmParameters_finUpdRepCurrV1()
    {
        $path = "/methods/FirmParameters/finUpdRepCurr";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/debtClose0
     */
    public function firmParameters_debtClose0V1()
    {
        $path = "/methods/FirmParameters/debtClose0";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/debtClose1
     */
    public function firmParameters_debtClose1V1()
    {
        $path = "/methods/FirmParameters/debtClose1";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/debtClose2
     */
    public function firmParameters_debtClose2V1()
    {
        $path = "/methods/FirmParameters/debtClose2";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/debtClose3
     */
    public function firmParameters_debtClose3V1()
    {
        $path = "/methods/FirmParameters/debtClose3";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/debtClose4
     */
    public function firmParameters_debtClose4V1()
    {
        $path = "/methods/FirmParameters/debtClose4";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/ordRiskOver
     */
    public function firmParameters_ordRiskOverV1()
    {
        $path = "/methods/FirmParameters/ordRiskOver";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/despRiskOver
     */
    public function firmParameters_despRiskOverV1()
    {
        $path = "/methods/FirmParameters/despRiskOver";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/clLanguage
     */
    public function firmParameters_clLanguageV1()
    {
        $path = "/methods/FirmParameters/clLanguage";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/chPPConfirm
     */
    public function firmParameters_chPPConfirmV1()
    {
        $path = "/methods/FirmParameters/chPPConfirm";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/finBuffer0
     */
    public function firmParameters_finBuffer0V1()
    {
        $path = "/methods/FirmParameters/finBuffer0";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/finBuffer1
     */
    public function firmParameters_finBuffer1V1()
    {
        $path = "/methods/FirmParameters/finBuffer1";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/finBuffer2
     */
    public function firmParameters_finBuffer2V1()
    {
        $path = "/methods/FirmParameters/finBuffer2";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/clBaseForm
     */
    public function firmParameters_clBaseFormV1()
    {
        $path = "/methods/FirmParameters/clBaseForm";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/cashCode
     */
    public function firmParameters_cashCodeV1()
    {
        $path = "/methods/FirmParameters/cashCode";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sSortOrder
     */
    public function firmParameters_sSortOrderV1()
    {
        $path = "/methods/FirmParameters/sSortOrder";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sSortDesp
     */
    public function firmParameters_sSortDespV1()
    {
        $path = "/methods/FirmParameters/sSortDesp";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sSortInv
     */
    public function firmParameters_sSortInvV1()
    {
        $path = "/methods/FirmParameters/sSortInv";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sInvPrintTyp
     */
    public function firmParameters_sInvPrintTypV1()
    {
        $path = "/methods/FirmParameters/sInvPrintTyp";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sAttachType
     */
    public function firmParameters_sAttachTypeV1()
    {
        $path = "/methods/FirmParameters/sAttachType";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sCheckOrdInv
     */
    public function firmParameters_sCheckOrdInvV1()
    {
        $path = "/methods/FirmParameters/sCheckOrdInv";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sUpdateCurr
     */
    public function firmParameters_sUpdateCurrV1()
    {
        $path = "/methods/FirmParameters/sUpdateCurr";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sDiscounts
     */
    public function firmParameters_sDiscountsV1()
    {
        $path = "/methods/FirmParameters/sDiscounts";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sExpenses
     */
    public function firmParameters_sExpensesV1()
    {
        $path = "/methods/FirmParameters/sExpenses";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sPromDiscs
     */
    public function firmParameters_sPromDiscsV1()
    {
        $path = "/methods/FirmParameters/sPromDiscs";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sUpdRepCurr
     */
    public function firmParameters_sUpdRepCurrV1()
    {
        $path = "/methods/FirmParameters/sUpdRepCurr";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sOnePayLine
     */
    public function firmParameters_sOnePayLineV1()
    {
        $path = "/methods/FirmParameters/sOnePayLine";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sRetCostType
     */
    public function firmParameters_sRetCostTypeV1()
    {
        $path = "/methods/FirmParameters/sRetCostType";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sPrintCmpLine
     */
    public function firmParameters_sPrintCmpLineV1()
    {
        $path = "/methods/FirmParameters/sPrintCmpLine";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sPrintClsLine
     */
    public function firmParameters_sPrintClsLineV1()
    {
        $path = "/methods/FirmParameters/sPrintClsLine";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sDefStatus
     */
    public function firmParameters_sDefStatusV1()
    {
        $path = "/methods/FirmParameters/sDefStatus";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/salManControl0
     */
    public function firmParameters_salManControl0V1()
    {
        $path = "/methods/FirmParameters/salManControl0";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/salManControl1
     */
    public function firmParameters_salManControl1V1()
    {
        $path = "/methods/FirmParameters/salManControl1";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/salManControl2
     */
    public function firmParameters_salManControl2V1()
    {
        $path = "/methods/FirmParameters/salManControl2";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sPrcType
     */
    public function firmParameters_sPrcTypeV1()
    {
        $path = "/methods/FirmParameters/sPrcType";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sPrcVAT
     */
    public function firmParameters_sPrcVATV1()
    {
        $path = "/methods/FirmParameters/sPrcVAT";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sSrvPrcVAT
     */
    public function firmParameters_sSrvPrcVATV1()
    {
        $path = "/methods/FirmParameters/sSrvPrcVAT";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sClConfirm
     */
    public function firmParameters_sClConfirmV1()
    {
        $path = "/methods/FirmParameters/sClConfirm";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sOrdDateCon
     */
    public function firmParameters_sOrdDateConV1()
    {
        $path = "/methods/FirmParameters/sOrdDateCon";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sLeadTimeChk
     */
    public function firmParameters_sLeadTimeChkV1()
    {
        $path = "/methods/FirmParameters/sLeadTimeChk";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/piasters0
     */
    public function firmParameters_piasters0V1()
    {
        $path = "/methods/FirmParameters/piasters0";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/piasters1
     */
    public function firmParameters_piasters1V1()
    {
        $path = "/methods/FirmParameters/piasters1";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/piasters2
     */
    public function firmParameters_piasters2V1()
    {
        $path = "/methods/FirmParameters/piasters2";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/piasters3
     */
    public function firmParameters_piasters3V1()
    {
        $path = "/methods/FirmParameters/piasters3";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/piasters4
     */
    public function firmParameters_piasters4V1()
    {
        $path = "/methods/FirmParameters/piasters4";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/piasters5
     */
    public function firmParameters_piasters5V1()
    {
        $path = "/methods/FirmParameters/piasters5";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/piasters6
     */
    public function firmParameters_piasters6V1()
    {
        $path = "/methods/FirmParameters/piasters6";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/piasters7
     */
    public function firmParameters_piasters7V1()
    {
        $path = "/methods/FirmParameters/piasters7";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/piasters8
     */
    public function firmParameters_piasters8V1()
    {
        $path = "/methods/FirmParameters/piasters8";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/piasters9
     */
    public function firmParameters_piasters9V1()
    {
        $path = "/methods/FirmParameters/piasters9";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/piasters10
     */
    public function firmParameters_piasters10V1()
    {
        $path = "/methods/FirmParameters/piasters10";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/piasters11
     */
    public function firmParameters_piasters11V1()
    {
        $path = "/methods/FirmParameters/piasters11";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/piasters12
     */
    public function firmParameters_piasters12V1()
    {
        $path = "/methods/FirmParameters/piasters12";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/piasters13
     */
    public function firmParameters_piasters13V1()
    {
        $path = "/methods/FirmParameters/piasters13";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/piasters14
     */
    public function firmParameters_piasters14V1()
    {
        $path = "/methods/FirmParameters/piasters14";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/printClSlip
     */
    public function firmParameters_printClSlipV1()
    {
        $path = "/methods/FirmParameters/printClSlip";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/printClNotes
     */
    public function firmParameters_printClNotesV1()
    {
        $path = "/methods/FirmParameters/printClNotes";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/qcBuffer2
     */
    public function firmParameters_qcBuffer2V1()
    {
        $path = "/methods/FirmParameters/qcBuffer2";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/qcBuffer3
     */
    public function firmParameters_qcBuffer3V1()
    {
        $path = "/methods/FirmParameters/qcBuffer3";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/qcBuffer4
     */
    public function firmParameters_qcBuffer4V1()
    {
        $path = "/methods/FirmParameters/qcBuffer4";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/autoLotOutMtd
     */
    public function firmParameters_autoLotOutMtdV1()
    {
        $path = "/methods/FirmParameters/autoLotOutMtd";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/lotParty
     */
    public function firmParameters_lotPartyV1()
    {
        $path = "/methods/FirmParameters/lotParty";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pPrintDesp
     */
    public function firmParameters_pPrintDespV1()
    {
        $path = "/methods/FirmParameters/pPrintDesp";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pPrintOrd
     */
    public function firmParameters_pPrintOrdV1()
    {
        $path = "/methods/FirmParameters/pPrintOrd";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pPrintInv
     */
    public function firmParameters_pPrintInvV1()
    {
        $path = "/methods/FirmParameters/pPrintInv";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pMergeOrder
     */
    public function firmParameters_pMergeOrderV1()
    {
        $path = "/methods/FirmParameters/pMergeOrder";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pMergeDesp
     */
    public function firmParameters_pMergeDespV1()
    {
        $path = "/methods/FirmParameters/pMergeDesp";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pMergeInv
     */
    public function firmParameters_pMergeInvV1()
    {
        $path = "/methods/FirmParameters/pMergeInv";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pSortOrder
     */
    public function firmParameters_pSortOrderV1()
    {
        $path = "/methods/FirmParameters/pSortOrder";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pSortDesp
     */
    public function firmParameters_pSortDespV1()
    {
        $path = "/methods/FirmParameters/pSortDesp";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pSortInv
     */
    public function firmParameters_pSortInvV1()
    {
        $path = "/methods/FirmParameters/pSortInv";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pInvPrintTyp
     */
    public function firmParameters_pInvPrintTypV1()
    {
        $path = "/methods/FirmParameters/pInvPrintTyp";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pAttachType
     */
    public function firmParameters_pAttachTypeV1()
    {
        $path = "/methods/FirmParameters/pAttachType";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pCheckOrdInv
     */
    public function firmParameters_pCheckOrdInvV1()
    {
        $path = "/methods/FirmParameters/pCheckOrdInv";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pUpdateCurr
     */
    public function firmParameters_pUpdateCurrV1()
    {
        $path = "/methods/FirmParameters/pUpdateCurr";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pDiscounts
     */
    public function firmParameters_pDiscountsV1()
    {
        $path = "/methods/FirmParameters/pDiscounts";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pExpenses
     */
    public function firmParameters_pExpensesV1()
    {
        $path = "/methods/FirmParameters/pExpenses";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pPromDiscs
     */
    public function firmParameters_pPromDiscsV1()
    {
        $path = "/methods/FirmParameters/pPromDiscs";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pUpdRepCurr
     */
    public function firmParameters_pUpdRepCurrV1()
    {
        $path = "/methods/FirmParameters/pUpdRepCurr";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pOnePayLine
     */
    public function firmParameters_pOnePayLineV1()
    {
        $path = "/methods/FirmParameters/pOnePayLine";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pRetCostType
     */
    public function firmParameters_pRetCostTypeV1()
    {
        $path = "/methods/FirmParameters/pRetCostType";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pPrintCmpLine
     */
    public function firmParameters_pPrintCmpLineV1()
    {
        $path = "/methods/FirmParameters/pPrintCmpLine";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pPrintClsLine
     */
    public function firmParameters_pPrintClsLineV1()
    {
        $path = "/methods/FirmParameters/pPrintClsLine";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pDefStatus
     */
    public function firmParameters_pDefStatusV1()
    {
        $path = "/methods/FirmParameters/pDefStatus";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pPrcType
     */
    public function firmParameters_pPrcTypeV1()
    {
        $path = "/methods/FirmParameters/pPrcType";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pPrcVAT
     */
    public function firmParameters_pPrcVATV1()
    {
        $path = "/methods/FirmParameters/pPrcVAT";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pSrvPrcVAT
     */
    public function firmParameters_pSrvPrcVATV1()
    {
        $path = "/methods/FirmParameters/pSrvPrcVAT";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pClConfirm
     */
    public function firmParameters_pClConfirmV1()
    {
        $path = "/methods/FirmParameters/pClConfirm";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pOrdDateCon
     */
    public function firmParameters_pOrdDateConV1()
    {
        $path = "/methods/FirmParameters/pOrdDateCon";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/pLeadTimeChk
     */
    public function firmParameters_pLeadTimeChkV1()
    {
        $path = "/methods/FirmParameters/pLeadTimeChk";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sOrdPromDlv
     */
    public function firmParameters_sOrdPromDlvV1()
    {
        $path = "/methods/FirmParameters/sOrdPromDlv";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sCheckOrdLink
     */
    public function firmParameters_sCheckOrdLinkV1()
    {
        $path = "/methods/FirmParameters/sCheckOrdLink";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sDefReserve
     */
    public function firmParameters_sDefReserveV1()
    {
        $path = "/methods/FirmParameters/sDefReserve";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/checkSalMan
     */
    public function firmParameters_checkSalManV1()
    {
        $path = "/methods/FirmParameters/checkSalMan";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sPrintDesp
     */
    public function firmParameters_sPrintDespV1()
    {
        $path = "/methods/FirmParameters/sPrintDesp";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sPrintOrd
     */
    public function firmParameters_sPrintOrdV1()
    {
        $path = "/methods/FirmParameters/sPrintOrd";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sPrintInv
     */
    public function firmParameters_sPrintInvV1()
    {
        $path = "/methods/FirmParameters/sPrintInv";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sMergeOrder
     */
    public function firmParameters_sMergeOrderV1()
    {
        $path = "/methods/FirmParameters/sMergeOrder";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sMergeDesp
     */
    public function firmParameters_sMergeDespV1()
    {
        $path = "/methods/FirmParameters/sMergeDesp";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sMergeInv
     */
    public function firmParameters_sMergeInvV1()
    {
        $path = "/methods/FirmParameters/sMergeInv";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/maxLevelCtrl
     */
    public function firmParameters_maxLevelCtrlV1()
    {
        $path = "/methods/FirmParameters/maxLevelCtrl";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/stUpdRepCurr
     */
    public function firmParameters_stUpdRepCurrV1()
    {
        $path = "/methods/FirmParameters/stUpdRepCurr";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/brInvCheck
     */
    public function firmParameters_brInvCheckV1()
    {
        $path = "/methods/FirmParameters/brInvCheck";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/safeLevelCtrl
     */
    public function firmParameters_safeLevelCtrlV1()
    {
        $path = "/methods/FirmParameters/safeLevelCtrl";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/ABCCode
     */
    public function firmParameters_ABCCodeV1()
    {
        $path = "/methods/FirmParameters/ABCCode";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/purchItem
     */
    public function firmParameters_purchItemV1()
    {
        $path = "/methods/FirmParameters/purchItem";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/salesItem
     */
    public function firmParameters_salesItemV1()
    {
        $path = "/methods/FirmParameters/salesItem";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/mtrlItem
     */
    public function firmParameters_mtrlItemV1()
    {
        $path = "/methods/FirmParameters/mtrlItem";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/tool
     */
    public function firmParameters_toolV1()
    {
        $path = "/methods/FirmParameters/tool";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/autoIncSL
     */
    public function firmParameters_autoIncSLV1()
    {
        $path = "/methods/FirmParameters/autoIncSL";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/divLotSize
     */
    public function firmParameters_divLotSizeV1()
    {
        $path = "/methods/FirmParameters/divLotSize";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/shelfLife
     */
    public function firmParameters_shelfLifeV1()
    {
        $path = "/methods/FirmParameters/shelfLife";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/lotEntry
     */
    public function firmParameters_lotEntryV1()
    {
        $path = "/methods/FirmParameters/lotEntry";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/locTracking
     */
    public function firmParameters_locTrackingV1()
    {
        $path = "/methods/FirmParameters/locTracking";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/clientQc
     */
    public function firmParameters_clientQcV1()
    {
        $path = "/methods/FirmParameters/clientQc";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/autoMtrIssue
     */
    public function firmParameters_autoMtrIssueV1()
    {
        $path = "/methods/FirmParameters/autoMtrIssue";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/chkSLLocExpDate
     */
    public function firmParameters_chkSLLocExpDateV1()
    {
        $path = "/methods/FirmParameters/chkSLLocExpDate";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/purchUnit
     */
    public function firmParameters_purchUnitV1()
    {
        $path = "/methods/FirmParameters/purchUnit";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/salesUnit
     */
    public function firmParameters_salesUnitV1()
    {
        $path = "/methods/FirmParameters/salesUnit";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/mtrlUnit
     */
    public function firmParameters_mtrlUnitV1()
    {
        $path = "/methods/FirmParameters/mtrlUnit";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/divUnit
     */
    public function firmParameters_divUnitV1()
    {
        $path = "/methods/FirmParameters/divUnit";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/useType
     */
    public function firmParameters_useTypeV1()
    {
        $path = "/methods/FirmParameters/useType";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/deprType
     */
    public function firmParameters_deprTypeV1()
    {
        $path = "/methods/FirmParameters/deprType";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/revalFlag
     */
    public function firmParameters_revalFlagV1()
    {
        $path = "/methods/FirmParameters/revalFlag";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/revDeprFlag
     */
    public function firmParameters_revDeprFlagV1()
    {
        $path = "/methods/FirmParameters/revDeprFlag";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/partDep
     */
    public function firmParameters_partDepV1()
    {
        $path = "/methods/FirmParameters/partDep";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/condReadAct
     */
    public function firmParameters_condReadActV1()
    {
        $path = "/methods/FirmParameters/condReadAct";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/iPrintClsLine
     */
    public function firmParameters_iPrintClsLineV1()
    {
        $path = "/methods/FirmParameters/iPrintClsLine";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/ordCampApply
     */
    public function firmParameters_ordCampApplyV1()
    {
        $path = "/methods/FirmParameters/ordCampApply";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/despCampApply
     */
    public function firmParameters_despCampApplyV1()
    {
        $path = "/methods/FirmParameters/despCampApply";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/invCampApply
     */
    public function firmParameters_invCampApplyV1()
    {
        $path = "/methods/FirmParameters/invCampApply";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/IOCtrl
     */
    public function firmParameters_IOCtrlV1()
    {
        $path = "/methods/FirmParameters/IOCtrl";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/qcPriority
     */
    public function firmParameters_qcPriorityV1()
    {
        $path = "/methods/FirmParameters/qcPriority";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/frequency
     */
    public function firmParameters_frequencyV1()
    {
        $path = "/methods/FirmParameters/frequency";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sampleSize
     */
    public function firmParameters_sampleSizeV1()
    {
        $path = "/methods/FirmParameters/sampleSize";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/purchQChar
     */
    public function firmParameters_purchQCharV1()
    {
        $path = "/methods/FirmParameters/purchQChar";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/salesQChar
     */
    public function firmParameters_salesQCharV1()
    {
        $path = "/methods/FirmParameters/salesQChar";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/mtrlQChar
     */
    public function firmParameters_mtrlQCharV1()
    {
        $path = "/methods/FirmParameters/mtrlQChar";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/nonConform
     */
    public function firmParameters_nonConformV1()
    {
        $path = "/methods/FirmParameters/nonConform";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/itemConform
     */
    public function firmParameters_itemConformV1()
    {
        $path = "/methods/FirmParameters/itemConform";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/qcBuffer0
     */
    public function firmParameters_qcBuffer0V1()
    {
        $path = "/methods/FirmParameters/qcBuffer0";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/qcBuffer1
     */
    public function firmParameters_qcBuffer1V1()
    {
        $path = "/methods/FirmParameters/qcBuffer1";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/ActivePeriod
     */
    public function activePeriodV1()
    {
        $path = "/methods/ActivePeriod";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/Connected
     */
    public function connectedV1()
    {
        $path = "/methods/Connected";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CAPI
     */
    public function capiV1()
    {
        $path = "/methods/CAPI";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CAPI/Firms
     */
    public function capiFirmsV1()
    {
        $path = "/methods/CAPI/Firms";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CAPI/Firms/Count
     */
    public function capiFirmsCountV1()
    {
        $path = "/methods/CAPI/Firms/Count";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CAPI/Firms/Parent
     */
    public function capiFirmsParentV1()
    {
        $path = "/methods/CAPI/Firms/Parent";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CAPI/Users
     */
    public function capiUsersV1()
    {
        $path = "/methods/CAPI/Users";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CAPI/Users/Count
     */
    public function capiUsersCountV1()
    {
        $path = "/methods/CAPI/Users/Count";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CAPI/Users/Parent
     */
    public function capiUsersParentV1()
    {
        $path = "/methods/CAPI/Users/Parent";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CAPI/Parent
     */
    public function capiParentV1()
    {
        $path = "/methods/CAPI/Parent";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CAPI/Terminals
     */
    public function capiTerminalsV1()
    {
        $path = "/methods/CAPI/Terminals";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CAPI/Terminals/Count
     */
    public function capiTerminalsCountV1()
    {
        $path = "/methods/CAPI/Terminals/Count";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CAPI/Terminals/Parent
     */
    public function capiTerminalsParentV1()
    {
        $path = "/methods/CAPI/Terminals/Parent";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CAPI/Currencies
     */
    public function capiCurrenciesV1()
    {
        $path = "/methods/CAPI/Currencies";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CAPI/Currencies/Count
     */
    public function capiCurrenciesCountV1()
    {
        $path = "/methods/CAPI/Currencies/Count";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CAPI/Currencies/Parent
     */
    public function capiCurrenciesParentV1()
    {
        $path = "/methods/CAPI/Currencies/Parent";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CAPI/Roles
     */
    public function capiRolesV1()
    {
        $path = "/methods/CAPI/Roles";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CAPI/Roles/Count
     */
    public function capiRolesCountV1()
    {
        $path = "/methods/CAPI/Roles/Count";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CAPI/Roles/Parent
     */
    public function capiRolesParentV1()
    {
        $path = "/methods/CAPI/Roles/Parent";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters
     */
    public function firmParametersV1()
    {
        $path = "/methods/FirmParameters";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/localCurr
     */
    public function firmParameters_localCurrV1()
    {
        $path = "/methods/FirmParameters/localCurr";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/localFrac
     */
    public function firmParameters_localFracV1()
    {
        $path = "/methods/FirmParameters/localFrac";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/reportCurr
     */
    public function firmParameters_reportCurrV1()
    {
        $path = "/methods/FirmParameters/reportCurr";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/reportFrac
     */
    public function firmParameters_reportFracV1()
    {
        $path = "/methods/FirmParameters/reportFrac";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/costType
     */
    public function firmParameters_costTypeV1()
    {
        $path = "/methods/FirmParameters/costType";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/minLevelCtrl
     */
    public function firmParameters_minLevelCtrlV1()
    {
        $path = "/methods/FirmParameters/minLevelCtrl";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/printStFiche
     */
    public function firmParameters_printStFicheV1()
    {
        $path = "/methods/FirmParameters/printStFiche";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/mergeStFiche
     */
    public function firmParameters_mergeStFicheV1()
    {
        $path = "/methods/FirmParameters/mergeStFiche";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/sortStFiche
     */
    public function firmParameters_sortStFicheV1()
    {
        $path = "/methods/FirmParameters/sortStFiche";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/negLevelCtrl
     */
    public function firmParameters_negLevelCtrlV1()
    {
        $path = "/methods/FirmParameters/negLevelCtrl";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/FirmParameters/trackType
     */
    public function firmParameters_trackTypeV1()
    {
        $path = "/methods/FirmParameters/trackType";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /methods/ItemVirement
     */
    public function itemVirementV1(array $data)
    {
        $path = "/methods/ItemVirement";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /methods/ExportBase64EncodedImage/{_doctype}/{_lref}/{_imageIndex}
     */
    public function exportBase64EncodedImageV1($doctype, $lref, string $imageIndex)
    {
        $path = "/methods/ExportBase64EncodedImage/{$doctype}/{$lref}/{$imageIndex}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /methods/ImportBase64EncodedImage/{_doctype}/{_lref}/{_imageType}/{_imageIndex}
     */
    public function importBase64EncodedImageV1($doctype, $lref, $imageType, string $imageIndex, array $data)
    {
        $path = "/methods/ImportBase64EncodedImage/{$doctype}/{$lref}/{$imageType}/{$imageIndex}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /methods/CompanyLogin/{_FirmNr}/{_PeriodNr}
     */
    public function companyLoginV1($FirmNr, $PeriodNr)
    {
        $path = "/methods/CompanyLogin/{$FirmNr}/{$PeriodNr}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CompanyLogout
     */
    public function companyLogoutV1()
    {
        $path = "/methods/CompanyLogout";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/Version
     */
    public function versionV1()
    {
        $path = "/methods/Version";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/GetLastError
     */
    public function getLastErrorV1()
    {
        $path = "/methods/GetLastError";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/NewDataObjectList
     */
    public function newDataObjectListV1()
    {
        $path = "/methods/NewDataObjectList";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/GetLastErrorString
     */
    public function getLastErrorStringV1()
    {
        $path = "/methods/GetLastErrorString";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/GetApprovalDate/{_ModuleNr}/{_brNr}
     */
    public function getApprovalDateV1($ModuleNr, $brNr)
    {
        $path = "/methods/GetApprovalDate/{$ModuleNr}/{$brNr}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/SetApprovalDate/{_ModuleNr}/{_NewDate}/{_brNr}
     */
    public function setApprovalDateV1($ModuleNr, string $NewDate, $brNr)
    {
        $path = "/methods/SetApprovalDate/{$ModuleNr}/{$NewDate}/{$brNr}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/GetDBConnInfo
     */
    public function getDBConnInfoV1()
    {
        $path = "/methods/GetDBConnInfo";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/GetCurrID/{_CurrName}
     */
    public function getCurrIDV1(string $CurrName)
    {
        $path = "/methods/GetCurrID/{$CurrName}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/ApplyAvaragePayment/{_modNr}/{_lref}
     */
    public function applyAvaragePaymentV1($modNr, $lref)
    {
        $path = "/methods/ApplyAvaragePayment/{$modNr}/{$lref}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/GetCurrName/{_CurrID}
     */
    public function getCurrNameV1($CurrID)
    {
        $path = "/methods/GetCurrName/{$CurrID}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/GetAuthCode/{_UserNr}/{_FirmNr}/{_AuthType}/{_AuthCode}
     */
    public function getAuthCodeV1($UserNr, $FirmNr, $AuthType, string $AuthCode)
    {
        $path = "/methods/GetAuthCode/{$UserNr}/{$FirmNr}/{$AuthType}/{$AuthCode}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/SetDistOrderStatus/{_lref}/{_stat}/{_procDate}
     */
    public function setDistOrderStatusV1($lref, $stat, string $procDate)
    {
        $path = "/methods/SetDistOrderStatus/{$lref}/{$stat}/{$procDate}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/DispatchBilling/{_dRef}/{_iFicheNo}/{_iDate}/{_iDoCode}/{_iSpeCode}/{_iCyphCode}/{_genExp1}/{_genExp2}/{_genExp3}/{_genExp4}/{_chkRight}/{_invRef}/{_opTrans}/{_refs}/{_eInv}/{_vatExceptReason}/{_vatExceptCode}
     */
    public function dispatchBillingV1($dRef, string $iFicheNo, $iDate, string $iDoCode, string $iSpeCode, string $iCyphCode, string $genExp1, string $genExp2, string $genExp3, string $genExp4, $chkRight, $invRef, $opTrans, string $refs, $eInv, string $vatExceptReason, string $vatExceptCode)
    {
        $path = "/methods/DispatchBilling/{$dRef}/{$iFicheNo}/{$iDate}/{$iDoCode}/{$iSpeCode}/{$iCyphCode}/{$genExp1}/{$genExp2}/{$genExp3}/{$genExp4}/{$chkRight}/{$invRef}/{$opTrans}/{$refs}/{$eInv}/{$vatExceptReason}/{$vatExceptCode}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/DebtClose/{_pTrFRecRef}/{_pTrSRecRef}/{_DebtAmount}/{_DebtRate}/{_PayRate}
     */
    public function debtCloseV1($pTrFRecRef, $pTrSRecRef, $DebtAmount, $DebtRate, $PayRate)
    {
        $path = "/methods/DebtClose/{$pTrFRecRef}/{$pTrSRecRef}/{$DebtAmount}/{$DebtRate}/{$PayRate}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/LGSetup/{_dataPath}/{_TaskNumber}/{_Language}/{_goldPath}
     */
    public function lgsetupV1(string $dataPath, $TaskNumber, $Language, string $goldPath)
    {
        $path = "/methods/LGSetup/{$dataPath}/{$TaskNumber}/{$Language}/{$goldPath}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/GetStockPrice/{_iItemRef}/{_iVrntRef}/{_iDate}/{_iTime}/{_iCostGrpNr}/{_iPrType}/{_dAmount}/{_uomRef}/{_branch}/{_clCode}/{_fTrdGrp}
     */
    public function getStockPriceV1($iItemRef, $iVrntRef, $iDate, $iTime, $iCostGrpNr, $iPrType, $dAmount, $uomRef, $branch, string $clCode, string $fTrdGrp)
    {
        $path = "/methods/GetStockPrice/{$iItemRef}/{$iVrntRef}/{$iDate}/{$iTime}/{$iCostGrpNr}/{$iPrType}/{$dAmount}/{$uomRef}/{$branch}/{$clCode}/{$fTrdGrp}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/DoIntegration/{_modNr}/{_invRef}/{_MergeLine}/{_EmptyAccLine}
     */
    public function doIntegrationV1($modNr, $invRef, $MergeLine, $EmptyAccLine)
    {
        $path = "/methods/DoIntegration/{$modNr}/{$invRef}/{$MergeLine}/{$EmptyAccLine}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/DebtCloseFIFO/{_payTrRef}/{_begDate}/{_endDate}
     */
    public function debtCloseFIFOV1($payTrRef, string $begDate, string $endDate)
    {
        $path = "/methods/DebtCloseFIFO/{$payTrRef}/{$begDate}/{$endDate}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/LogoDB/{_fName}
     */
    public function logoDBV1(string $fName)
    {
        $path = "/methods/LogoDB/{$fName}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/RollBackDebtClose/{_transRef}
     */
    public function rollBackDebtCloseV1($transRef)
    {
        $path = "/methods/RollBackDebtClose/{$transRef}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/GetFirmDBConnInfo/{_FirmNr}
     */
    public function getFirmDBConnInfoV1($FirmNr)
    {
        $path = "/methods/GetFirmDBConnInfo/{$FirmNr}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/GetAppPath
     */
    public function getAppPathV1()
    {
        $path = "/methods/GetAppPath";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/AutoBOMRevisionUpdate/{_engChgRef}
     */
    public function autoBOMRevisionUpdateV1($engChgRef)
    {
        $path = "/methods/AutoBOMRevisionUpdate/{$engChgRef}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/ForceReLogin/{_grpUser}/{_nr}/{_blocked}/{_msg}
     */
    public function forceReLoginV1($grpUser, $nr, $blocked, string $msg)
    {
        $path = "/methods/ForceReLogin/{$grpUser}/{$nr}/{$blocked}/{$msg}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/GetTableName/{_tNr}/{_fNr}/{_pNr}
     */
    public function getTableNameV1($tNr, $fNr, $pNr)
    {
        $path = "/methods/GetTableName/{$tNr}/{$fNr}/{$pNr}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/GetCustTableName/{_tNr}/{_fNr}/{_pNr}
     */
    public function getCustTableNameV1($tNr, $fNr, $pNr)
    {
        $path = "/methods/GetCustTableName/{$tNr}/{$fNr}/{$pNr}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/GetValue/{_nr}
     */
    public function getValueV1($nr)
    {
        $path = "/methods/GetValue/{$nr}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/SendMail/{_recps}/{_cc}/{_subject}/{_msg}/{_attch}/{_showDlg}
     */
    public function sendMailV1(string $recps, string $cc, string $subject, string $msg, string $attch, $showDlg)
    {
        $path = "/methods/SendMail/{$recps}/{$cc}/{$subject}/{$msg}/{$attch}/{$showDlg}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/SendSMS/{_msg}/{_telNo}
     */
    public function sendSMSV1(string $msg, string $telNo)
    {
        $path = "/methods/SendSMS/{$msg}/{$telNo}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/OrderBilling/{_ordRef}/{_ficheNo}/{_dateVal}/{_doCode}/{_speCode}/{_cyphCode}/{_genExp1}/{_genExp2}/{_genExp3}/{_genExp4}/{_chkRight}/{_fcType}/{_opTrans}/{_invRef}/{_eInv}/{_vatExceptReason}
     */
    public function orderBillingV1($ordRef, string $ficheNo, $dateVal, string $doCode, string $speCode, string $cyphCode, string $genExp1, string $genExp2, string $genExp3, string $genExp4, $chkRight, $fcType, $opTrans, $invRef, $eInv, string $vatExceptReason)
    {
        $path = "/methods/OrderBilling/{$ordRef}/{$ficheNo}/{$dateVal}/{$doCode}/{$speCode}/{$cyphCode}/{$genExp1}/{$genExp2}/{$genExp3}/{$genExp4}/{$chkRight}/{$fcType}/{$opTrans}/{$invRef}/{$eInv}/{$vatExceptReason}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/LoggedIn
     */
    public function loggedInV1()
    {
        $path = "/methods/LoggedIn";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CompanyLoggedIn
     */
    public function companyLoggedInV1()
    {
        $path = "/methods/CompanyLoggedIn";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CurrentFirm
     */
    public function currentFirmV1()
    {
        $path = "/methods/CurrentFirm";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/ChangeFicheApproveInfo/{_DataObject}/{_ficheRef}/{_ficheApprove}
     */
    public function changeFicheApproveInfoV1($DataObject, $ficheRef, $ficheApprove)
    {
        $path = "/methods/ChangeFicheApproveInfo/{$DataObject}/{$ficheRef}/{$ficheApprove}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/SetAppLanguage/{_Value}
     */
    public function setAppLanguageV1($Value)
    {
        $path = "/methods/SetAppLanguage/{$Value}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CheckLogoDB/{_fName}
     */
    public function checkLogoDBV1(string $fName)
    {
        $path = "/methods/CheckLogoDB/{$fName}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/ApproveEDocument/{_refs}/{_acceptMessage}/{_notes}
     */
    public function approveEDocumentV1(string $refs, string $acceptMessage, string $notes)
    {
        $path = "/methods/ApproveEDocument/{$refs}/{$acceptMessage}/{$notes}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/RejectEDocument/{_refs}/{_rejectMessage}/{_notes}
     */
    public function rejectEDocumentV1(string $refs, string $rejectMessage, string $notes)
    {
        $path = "/methods/RejectEDocument/{$refs}/{$rejectMessage}/{$notes}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/AddDocument/{_folderRef}/{_document}/{_lref}/{_doctype}
     */
    public function addDocumentV1($folderRef, string $document, $lref, $doctype)
    {
        $path = "/methods/AddDocument/{$folderRef}/{$document}/{$lref}/{$doctype}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/AddInstalmentTransaction/{_fType}/{_sourceRef}/{_instRef}/{_lackType}/{_newInstDate}/{_payType}/{_payDate}/{_total}/{_trCurr}/{_trRate}/{_opStat}/{_bankPayDate}/{_calcType}/{_posComm}/{_pointComm}/{_dueDiffComm}/{_lnAccCode}/{_rePayPlanCode}
     */
    public function addInstalmentTransactionV1($fType, $sourceRef, $instRef, $lackType, $newInstDate, $payType, $payDate, $total, $trCurr, $trRate, $opStat, $bankPayDate, $calcType, $posComm, $pointComm, $dueDiffComm, string $lnAccCode, string $rePayPlanCode)
    {
        $path = "/methods/AddInstalmentTransaction/{$fType}/{$sourceRef}/{$instRef}/{$lackType}/{$newInstDate}/{$payType}/{$payDate}/{$total}/{$trCurr}/{$trRate}/{$opStat}/{$bankPayDate}/{$calcType}/{$posComm}/{$pointComm}/{$dueDiffComm}/{$lnAccCode}/{$rePayPlanCode}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/GetViewName/{_ID}/{_fNr}/{_pNr}
     */
    public function getViewNameV1($ID, $fNr, $pNr)
    {
        $path = "/methods/GetViewName/{$ID}/{$fNr}/{$pNr}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/GetDBConnInfoEx/{_key}
     */
    public function getDBConnInfoExV1(string $key)
    {
        $path = "/methods/GetDBConnInfoEx/{$key}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/PrintDoc/{_doctype}/{_docRef}/{_termCode}/{_designTitle}/{_printerCode}/{_printCnt}
     */
    public function printDocV1($doctype, $docRef, string $termCode, string $designTitle, string $printerCode, $printCnt)
    {
        $path = "/methods/PrintDoc/{$doctype}/{$docRef}/{$termCode}/{$designTitle}/{$printerCode}/{$printCnt}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/GetOrderFicheApproveControlInfo/{_ordFicheRef}/{_readFromClCard}/{_cRisk}/{_cDueDate}/{_cAging}/{_ageDay}/{_payProc}/{_rTotal}/{_rLimit}/{_mxLateDay}/{_avLateDay}/{_mxLateTotal}/{_avLateTotal}/{_avAgingDay}/{_AgingTotal}/{_currType}/{_includeFiche}
     */
    public function getOrderFicheApproveControlInfoV1($ordFicheRef, $readFromClCard, string $cRisk, string $cDueDate, string $cAging, $ageDay, $payProc, $rTotal, $rLimit, $mxLateDay, $avLateDay, $mxLateTotal, $avLateTotal, $avAgingDay, $AgingTotal, $currType, $includeFiche)
    {
        $path = "/methods/GetOrderFicheApproveControlInfo/{$ordFicheRef}/{$readFromClCard}/{$cRisk}/{$cDueDate}/{$cAging}/{$ageDay}/{$payProc}/{$rTotal}/{$rLimit}/{$mxLateDay}/{$avLateDay}/{$mxLateTotal}/{$avLateTotal}/{$avAgingDay}/{$AgingTotal}/{$currType}/{$includeFiche}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/OrderShipping/{_ordRef}/{_ficheNo}/{_dateVal}/{_doCode}/{_speCode}/{_cyphCode}/{_genExp1}/{_genExp2}/{_genExp3}/{_genExp4}/{_chkRight}/{_fcType}/{_opTrans}/{_dispref}
     */
    public function orderShippingV1($ordRef, string $ficheNo, $dateVal, string $doCode, string $speCode, string $cyphCode, string $genExp1, string $genExp2, string $genExp3, string $genExp4, $chkRight, $fcType, $opTrans, $dispref)
    {
        $path = "/methods/OrderShipping/{$ordRef}/{$ficheNo}/{$dateVal}/{$doCode}/{$speCode}/{$cyphCode}/{$genExp1}/{$genExp2}/{$genExp3}/{$genExp4}/{$chkRight}/{$fcType}/{$opTrans}/{$dispref}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/MaterialTransactionTransfer/{_oldCode}/{_newCode}/{_PeriodNr}
     */
    public function materialTransactionTransferV1(string $oldCode, string $newCode, $PeriodNr)
    {
        $path = "/methods/MaterialTransactionTransfer/{$oldCode}/{$newCode}/{$PeriodNr}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CancelInvoice/{_invRef}
     */
    public function cancelInvoiceV1($invRef)
    {
        $path = "/methods/CancelInvoice/{$invRef}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/ReadStringsCrd/{_typ}/{_ref}/{_Str}
     */
    public function readStringsCrdV1($typ, $ref, string $Str)
    {
        $path = "/methods/ReadStringsCrd/{$typ}/{$ref}/{$Str}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/WriteStringsCrd/{_typ}/{_ref}/{_Str}
     */
    public function writeStringsCrdV1($typ, $ref, string $Str)
    {
        $path = "/methods/WriteStringsCrd/{$typ}/{$ref}/{$Str}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/DeleteStringsCrd/{_typ}/{_ref}
     */
    public function deleteStringsCrdV1($typ, $ref)
    {
        $path = "/methods/DeleteStringsCrd/{$typ}/{$ref}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/DownloadDailyExchanges/{_begDate}/{_endDate}
     */
    public function downloadDailyExchangesV1(string $begDate, string $endDate)
    {
        $path = "/methods/DownloadDailyExchanges/{$begDate}/{$endDate}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/UndoInvoice/{_invRef}
     */
    public function undoInvoiceV1($invRef)
    {
        $path = "/methods/UndoInvoice/{$invRef}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/LoadDefaultAddresses/{_LanguageCode}
     */
    public function loadDefaultAddressesV1(string $LanguageCode)
    {
        $path = "/methods/LoadDefaultAddresses/{$LanguageCode}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/LoadDefaultBanks/{_LanguageCode}
     */
    public function loadDefaultBanksV1(string $LanguageCode)
    {
        $path = "/methods/LoadDefaultBanks/{$LanguageCode}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/LoadDefaultTaxOffices/{_LanguageCode}
     */
    public function loadDefaultTaxOfficesV1(string $LanguageCode)
    {
        $path = "/methods/LoadDefaultTaxOffices/{$LanguageCode}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/LoadDefaultCustoms/{_LanguageCode}
     */
    public function loadDefaultCustomsV1(string $LanguageCode)
    {
        $path = "/methods/LoadDefaultCustoms/{$LanguageCode}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/LoadDefaultFreeZones/{_LanguageCode}
     */
    public function loadDefaultFreeZonesV1(string $LanguageCode)
    {
        $path = "/methods/LoadDefaultFreeZones/{$LanguageCode}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/RunCostingMaintenance/{_maskId}
     */
    public function runCostingMaintenanceV1($maskId)
    {
        $path = "/methods/RunCostingMaintenance/{$maskId}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/RunPriceAssignmentsByCosts/{_maskId}
     */
    public function runPriceAssignmentsByCostsV1($maskId)
    {
        $path = "/methods/RunPriceAssignmentsByCosts/{$maskId}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/GetStockPriceList/{_paramJSON}
     */
    public function getStockPriceListV1(string $paramJSON)
    {
        $path = "/methods/GetStockPriceList/{$paramJSON}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/GetCfgText/{_nr}
     */
    public function getCfgTextV1($nr)
    {
        $path = "/methods/GetCfgText/{$nr}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CancelARPVoucher/{_ficheRef}
     */
    public function cancelARPVoucherV1($ficheRef)
    {
        $path = "/methods/CancelARPVoucher/{$ficheRef}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/UndoARPVoucher/{_ficheRef}
     */
    public function undoARPVoucherV1($ficheRef)
    {
        $path = "/methods/UndoARPVoucher/{$ficheRef}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/ARPEInvoiceCheck/{_arpRef}
     */
    public function arpeinvoicecheckV1($arpRef)
    {
        $path = "/methods/ARPEInvoiceCheck/{$arpRef}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/CancelSafeDepositeTrans/{_ficheRef}
     */
    public function cancelSafeDepositeTransV1($ficheRef)
    {
        $path = "/methods/CancelSafeDepositeTrans/{$ficheRef}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/UndoSafeDepositeTrans/{_ficheRef}
     */
    public function undoSafeDepositeTransV1($ficheRef)
    {
        $path = "/methods/UndoSafeDepositeTrans/{$ficheRef}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/GetLastWarning
     */
    public function getLastWarningV1()
    {
        $path = "/methods/GetLastWarning";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/GetLastWarningString
     */
    public function getLastWarningStringV1()
    {
        $path = "/methods/GetLastWarningString";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/SendRecvEInvoiceDocuments/{_send}/{_recv}/{_refs}/{_refsReceipt}/{_branchNr}
     */
    public function sendRecvEInvoiceDocumentsV1($send, $recv, string $refs, string $refsReceipt, $branchNr)
    {
        $path = "/methods/SendRecvEInvoiceDocuments/{$send}/{$recv}/{$refs}/{$refsReceipt}/{$branchNr}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/SendEArchiveDocuments/{_refs}/{_branchNr}
     */
    public function sendEArchiveDocumentsV1(string $refs, $branchNr)
    {
        $path = "/methods/SendEArchiveDocuments/{$refs}/{$branchNr}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/SendRecvEDispatchDocuments/{_send}/{_recv}/{_refsDispatch}/{_refsReceipt}/{_branchNr}
     */
    public function sendRecvEDispatchDocumentsV1($send, $recv, string $refsDispatch, string $refsReceipt, $branchNr)
    {
        $path = "/methods/SendRecvEDispatchDocuments/{$send}/{$recv}/{$refsDispatch}/{$refsReceipt}/{$branchNr}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/SendESEVoucherDocuments/{_refsClf}/{_refsCash}/{_branchNr}
     */
    public function sendESEVoucherDocumentsV1(string $refsClf, string $refsCash, $branchNr)
    {
        $path = "/methods/SendESEVoucherDocuments/{$refsClf}/{$refsCash}/{$branchNr}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/SendESEPreceiptDocuments/{_refs}/{_branchNr}
     */
    public function sendESEPreceiptDocumentsV1(string $refs, $branchNr)
    {
        $path = "/methods/SendESEPreceiptDocuments/{$refs}/{$branchNr}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/GetEDocumentContent/{_doctype}/{_outFormat}/{_GUID}
     */
    public function getEDocumentContentV1(string $doctype, string $outFormat, string $GUID)
    {
        $path = "/methods/GetEDocumentContent/{$doctype}/{$outFormat}/{$GUID}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/UpdateEDocumentStatus/{_doctype}/{_refs}
     */
    public function updateEDocumentStatusV1(string $doctype, string $refs)
    {
        $path = "/methods/UpdateEDocumentStatus/{$doctype}/{$refs}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /methods/SaveEDocument/{_refs}
     */
    public function saveEDocumentV1(string $refs)
    {
        $path = "/methods/SaveEDocument/{$refs}";
        return $this->request('GET', $path);
    }

    /**
     * Retrieves database column information for the Methods entity.
     */
    public function getDbColumns()
    {
        $path = "{$this->endpoint}/dbcolumns";
        return $this->request('GET', $path);
    }

    /**
     * Enables change tracking for the Methods entity.
     */
    public function track()
    {
        $path = "{$this->endpoint}/track";
        return $this->request('GET', $path);
    }

    /**
     * Disables change tracking for the Methods entity.
     */
    public function untrack()
    {
        $path = "{$this->endpoint}/untrack";
        return $this->request('GET', $path);
    }

    /**
     * Checks the change tracking status for the Methods entity.
     */
    public function checkTrackStatus()
    {
        $path = "{$this->endpoint}/checktrack";
        return $this->request('GET', $path);
    }
}
