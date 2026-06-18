<?php

declare(strict_types=1);

namespace LogoObjects\Clients\distributionOrders;

use LogoObjects\Http\BaseApiClient;
use LogoObjects\Types\ApiResponse;
use LogoObjects\Utils\QueryBuilder;

/**
 * DistributionOrdersClient - /distributionOrders endpoint'i icin CRUD ve ozel islemler.
 */
class DistributionOrdersClient extends BaseApiClient
{
    /** @var string */
    protected $endpoint = '/distributionOrders';

    /**
     * Retrieves a paginated list of DistributionOrders entities.
     */
    public function getAll(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "{$this->endpoint}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return ApiResponse::of($this->request('GET', $path), \LogoObjects\Clients\distributionOrders\DistributionOrders::class);
    }

    /**
     * Retrieves a single DistributionOrders entity by its internal reference ID.
     */
    public function getById($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "{$this->endpoint}/{$id}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return \LogoObjects\Clients\distributionOrders\DistributionOrders::fromArray($this->request('GET', $path));
    }

    /**
     * Creates a new DistributionOrders entity.
     */
    public function create(array $data)
    {
        $path = "{$this->endpoint}";
        return \LogoObjects\Clients\distributionOrders\DistributionOrders::fromArray($this->request('POST', $path, $data));
    }

    /**
     * Updates an existing DistributionOrders entity.
     */
    public function update($id, array $data)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\distributionOrders\DistributionOrders::fromArray($this->request('PUT', $path, $data));
    }

    /**
     * Partially updates a DistributionOrders entity.
     */
    public function patch($id, array $data)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\distributionOrders\DistributionOrders::fromArray($this->request('PATCH', $path, $data));
    }

    /**
     * Deletes a DistributionOrders entity by its internal reference ID.
     */
    public function delete($id)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\distributionOrders\DistributionOrders::fromArray($this->request('DELETE', $path));
    }

    /**
     * Searches for DistributionOrders entities based on a set of criteria.
     */
    public function search(array $criteria)
    {
        return $this->getAll(['q' => $this->buildSearchQuery($criteria)]);
    }

    /**
     * Builds a custom query string for advanced filtering.
     */
    public function buildQuery($conditions)
    {
        return $this->getAll(['q' => implode(' and ', $conditions)]);
    }

    /**
     * Corresponds to POST /distributionOrders/EqualizePayAmnt
     */
    public function equalizePayAmntV1(array $data)
    {
        $path = "/distributionOrders/EqualizePayAmnt";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/EqualizePayAmnt
     */
    public function equalizePayAmntV1Get($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/EqualizePayAmnt";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/AddSeriLotsForKs/{_slCode}/{_amount}/{_IOMtd}
     */
    public function addSeriLotsForKsV1($id, string $slCode, $amount, $IOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/AddSeriLotsForKs/{$slCode}/{$amount}/{$IOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/AddSeriLotsForKs/{_slCode}/{_amount}/{_IOMtd}
     */
    public function addSeriLotsForKsV1Post(string $slCode, $amount, $IOMtd, array $data)
    {
        $path = "/distributionOrders/AddSeriLotsForKs/{$slCode}/{$amount}/{$IOMtd}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/FillSMMACCCodes
     */
    public function fillSMMACCCodesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/FillSMMACCCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/FillSMMACCCodes
     */
    public function fillSMMACCCodesV1Post(array $data)
    {
        $path = "/distributionOrders/FillSMMACCCodes";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/AttachADespatchByLRef/{_dispref}
     */
    public function attachADespatchByLRefV1($id, $dispref, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/AttachADespatchByLRef/{$dispref}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/AttachADespatchByLRef/{_dispref}
     */
    public function attachADespatchByLRefV1Post($dispref, array $data)
    {
        $path = "/distributionOrders/AttachADespatchByLRef/{$dispref}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/AttachADespatchByFicheNo/{_dispFicheNo}
     */
    public function attachADespatchByFicheNoV1($id, string $dispFicheNo, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/AttachADespatchByFicheNo/{$dispFicheNo}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/AttachADespatchByFicheNo/{_dispFicheNo}
     */
    public function attachADespatchByFicheNoV1Post(string $dispFicheNo, array $data)
    {
        $path = "/distributionOrders/AttachADespatchByFicheNo/{$dispFicheNo}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DeleteCampaign
     */
    public function deleteCampaignV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DeleteCampaign";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DeleteCampaign
     */
    public function deleteCampaignV1Post(array $data)
    {
        $path = "/distributionOrders/DeleteCampaign";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/SetClientInfo
     */
    public function setClientInfoV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/SetClientInfo";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/SetClientInfo
     */
    public function setClientInfoV1Post(array $data)
    {
        $path = "/distributionOrders/SetClientInfo";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/GetRelevantCampaigns
     */
    public function getRelevantCampaignsV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/GetRelevantCampaigns";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/GetRelevantCampaigns
     */
    public function getRelevantCampaignsV1Post(array $data)
    {
        $path = "/distributionOrders/GetRelevantCampaigns";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/ApplyCampaignSpecific/{_refList}
     */
    public function applyCampaignSpecificV1($id, string $refList, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/ApplyCampaignSpecific/{$refList}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/ApplyCampaignSpecific/{_refList}
     */
    public function applyCampaignSpecificV1Post(string $refList, array $data)
    {
        $path = "/distributionOrders/ApplyCampaignSpecific/{$refList}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/ImportImage/{_ImgPath}/{_Indx}
     */
    public function importImageV1($id, string $ImgPath, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/ImportImage/{$ImgPath}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/ImportImage/{_ImgPath}/{_Indx}
     */
    public function importImageV1Post(string $ImgPath, string $Indx, array $data)
    {
        $path = "/distributionOrders/ImportImage/{$ImgPath}/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/ExportBase64EncodedImage/{_Indx}
     */
    public function exportBase64EncodedImageV1($id, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/ExportBase64EncodedImage/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/ExportBase64EncodedImage/{_Indx}
     */
    public function exportBase64EncodedImageV1Post(string $Indx, array $data)
    {
        $path = "/distributionOrders/ExportBase64EncodedImage/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/ImportBase64EncodedImage/{_base64EncodedImage}/{_imageType}/{_Indx}
     */
    public function importBase64EncodedImageV1($id, string $base64EncodedImage, string $imageType, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/ImportBase64EncodedImage/{$base64EncodedImage}/{$imageType}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/ImportBase64EncodedImage/{_base64EncodedImage}/{_imageType}/{_Indx}
     */
    public function importBase64EncodedImageV1Post(string $base64EncodedImage, string $imageType, string $Indx, array $data)
    {
        $path = "/distributionOrders/ImportBase64EncodedImage/{$base64EncodedImage}/{$imageType}/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/CAMPAIGN_INFOS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function distOrderLinescampaignInfosGetstocklinepriceV1($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/CAMPAIGN_INFOS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/CAMPAIGN_INFOS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function distOrderLinescampaignInfosGetstocklinepriceV1Get($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/CAMPAIGN_INFOS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/CAMPAIGN_INFOS/AddLine2/{_index}
     */
    public function distOrderLinescampaignInfosAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/CAMPAIGN_INFOS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/CAMPAIGN_INFOS/AddLine2/{_index}
     */
    public function distOrderLinescampaignInfosAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/CAMPAIGN_INFOS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/CAMPAIGN_INFOS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function distOrderLinescampaignInfosAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/CAMPAIGN_INFOS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/CAMPAIGN_INFOS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function distOrderLinescampaignInfosAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/CAMPAIGN_INFOS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/CAMPAIGN_INFOS/EqualizeBalance/{_index}
     */
    public function distOrderLinescampaignInfosEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/CAMPAIGN_INFOS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/CAMPAIGN_INFOS/EqualizeBalance/{_index}
     */
    public function distOrderLinescampaignInfosEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/CAMPAIGN_INFOS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/CAMPAIGN_INFOS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function distOrderLinescampaignInfosApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/CAMPAIGN_INFOS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/CAMPAIGN_INFOS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function distOrderLinescampaignInfosApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/CAMPAIGN_INFOS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/CAMPAIGN_INFOS/SetLineTotals/{_Indx}
     */
    public function distOrderLinescampaignInfosSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/CAMPAIGN_INFOS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/CAMPAIGN_INFOS/SetLineTotals/{_Indx}
     */
    public function distOrderLinescampaignInfosSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/CAMPAIGN_INFOS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/ExportToXML/{_RootKey}/{_FileName}
     */
    public function exportToXMLV1($id, string $RootKey, string $FileName, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/ExportToXML/{$RootKey}/{$FileName}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/ExportToXML/{_RootKey}/{_FileName}
     */
    public function exportToXMLV1Post(string $RootKey, string $FileName, array $data)
    {
        $path = "/distributionOrders/ExportToXML/{$RootKey}/{$FileName}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/ImportFromXMLFile/{_RootKey}/{_FileName}
     */
    public function importFromXMLFileV1($id, string $RootKey, string $FileName, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/ImportFromXMLFile/{$RootKey}/{$FileName}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/ImportFromXMLFile/{_RootKey}/{_FileName}
     */
    public function importFromXMLFileV1Post(string $RootKey, string $FileName, array $data)
    {
        $path = "/distributionOrders/ImportFromXMLFile/{$RootKey}/{$FileName}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/CreateCompositeLines
     */
    public function createCompositeLinesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/CreateCompositeLines";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/CreateCompositeLines
     */
    public function createCompositeLinesV1Post(array $data)
    {
        $path = "/distributionOrders/CreateCompositeLines";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/FormSeriLotLines/{_lOMtd}
     */
    public function formSeriLotLinesV1($id, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/FormSeriLotLines/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/FormSeriLotLines/{_lOMtd}
     */
    public function formSeriLotLinesV1Post($lOMtd, array $data)
    {
        $path = "/distributionOrders/FormSeriLotLines/{$lOMtd}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/ApplyCampaign
     */
    public function applyCampaignV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/ApplyCampaign";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/ApplyCampaign
     */
    public function applyCampaignV1Post(array $data)
    {
        $path = "/distributionOrders/ApplyCampaign";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/ApplyRePayPln/{_lineNr}/{_rePayPCode}
     */
    public function applyRePayPlnV1($id, $lineNr, string $rePayPCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/ApplyRePayPln/{$lineNr}/{$rePayPCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/ApplyRePayPln/{_lineNr}/{_rePayPCode}
     */
    public function applyRePayPlnV1Post($lineNr, string $rePayPCode, array $data)
    {
        $path = "/distributionOrders/ApplyRePayPln/{$lineNr}/{$rePayPCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/ApplyRePayPlnForInv/{_rePayCode}
     */
    public function applyRePayPlnForInvV1($id, string $rePayCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/ApplyRePayPlnForInv/{$rePayCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/ApplyRePayPlnForInv/{_rePayCode}
     */
    public function applyRePayPlnForInvV1Post(string $rePayCode, array $data)
    {
        $path = "/distributionOrders/ApplyRePayPlnForInv/{$rePayCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/ImportFromXmlStr/{_RootKey}/{_XmlStr}
     */
    public function importFromXmlStrV1($id, string $RootKey, string $XmlStr, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/ImportFromXmlStr/{$RootKey}/{$XmlStr}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/ImportFromXmlStr/{_RootKey}/{_XmlStr}
     */
    public function importFromXmlStrV1Post(string $RootKey, string $XmlStr, array $data)
    {
        $path = "/distributionOrders/ImportFromXmlStr/{$RootKey}/{$XmlStr}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/ExportToXmlStr/{_RootKey}
     */
    public function exportToXmlStrV1($id, string $RootKey, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/ExportToXmlStr/{$RootKey}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/ExportToXmlStr/{_RootKey}
     */
    public function exportToXmlStrV1Post(string $RootKey, array $data)
    {
        $path = "/distributionOrders/ExportToXmlStr/{$RootKey}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/ApplyCondition
     */
    public function applyConditionV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/ApplyCondition";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/ApplyCondition
     */
    public function applyConditionV1Post(array $data)
    {
        $path = "/distributionOrders/ApplyCondition";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/ExportImage/{_Indx}/{_ImgPath}
     */
    public function exportImageV1($id, string $Indx, string $ImgPath, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/ExportImage/{$Indx}/{$ImgPath}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/ExportImage/{_Indx}/{_ImgPath}
     */
    public function exportImageV1Post(string $Indx, string $ImgPath, array $data)
    {
        $path = "/distributionOrders/ExportImage/{$Indx}/{$ImgPath}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/ReCalculate
     */
    public function reCalculateV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/ReCalculate";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/ReCalculate
     */
    public function reCalculateV1Post(array $data)
    {
        $path = "/distributionOrders/ReCalculate";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/FillAccCodes
     */
    public function fillAccCodesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/FillAccCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/FillAccCodes
     */
    public function fillAccCodesV1Post(array $data)
    {
        $path = "/distributionOrders/FillAccCodes";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/ApplyADiscount/{_discCode}
     */
    public function applyADiscountV1($id, string $discCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/ApplyADiscount/{$discCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/ApplyADiscount/{_discCode}
     */
    public function applyADiscountV1Post(string $discCode, array $data)
    {
        $path = "/distributionOrders/ApplyADiscount/{$discCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/SetDefIntValue/{_fldName}/{_fType}/{_fSz}/{_Value}
     */
    public function setDefIntValueV1($id, string $fldName, $fType, $fSz, $Value, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/SetDefIntValue/{$fldName}/{$fType}/{$fSz}/{$Value}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/SetDefIntValue/{_fldName}/{_fType}/{_fSz}/{_Value}
     */
    public function setDefIntValueV1Post(string $fldName, $fType, $fSz, $Value, array $data)
    {
        $path = "/distributionOrders/SetDefIntValue/{$fldName}/{$fType}/{$fSz}/{$Value}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/SL_DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function distOrderLinesslDetailsApplyaccdisttemplateV1($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/SL_DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function distOrderLinesslDetailsApplyaccdisttemplateV1Get($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/SetLineTotals/{_Indx}
     */
    public function distOrderLinesslDetailsSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/SL_DETAILS/SetLineTotals/{_Indx}
     */
    public function distOrderLinesslDetailsSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/SL_DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST
     */
    public function getDIST_ORDER_LINESSL_DETAILSQCLISTV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/{idt}
     */
    public function getDIST_ORDER_LINESSL_DETAILSQCLISTByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/AppendLine2
     */
    public function distOrderLinesslDetailsqclistAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/AppendLine2
     */
    public function distOrderLinesslDetailsqclistAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function distOrderLinesslDetailsqclistAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function distOrderLinesslDetailsqclistAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function distOrderLinesslDetailsqclistGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function distOrderLinesslDetailsqclistGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/AddLine2/{_index}
     */
    public function distOrderLinesslDetailsqclistAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/AddLine2/{_index}
     */
    public function distOrderLinesslDetailsqclistAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function distOrderLinesslDetailsqclistAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function distOrderLinesslDetailsqclistAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/EqualizeBalance/{_index}
     */
    public function distOrderLinesslDetailsqclistEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/EqualizeBalance/{_index}
     */
    public function distOrderLinesslDetailsqclistEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function distOrderLinesslDetailsqclistApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function distOrderLinesslDetailsqclistApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/SetLineTotals/{_Indx}
     */
    public function distOrderLinesslDetailsqclistSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/SetLineTotals/{_Indx}
     */
    public function distOrderLinesslDetailsqclistSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST
     */
    public function getDIST_ORDER_LINESSL_DETAILSQCLISTVALLISTV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/{idt}
     */
    public function getDIST_ORDER_LINESSL_DETAILSQCLISTVALLISTByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AppendLine2
     */
    public function distOrderLinesslDetailsqclistvallistAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AppendLine2
     */
    public function distOrderLinesslDetailsqclistvallistAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function distOrderLinesslDetailsqclistvallistAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function distOrderLinesslDetailsqclistvallistAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function distOrderLinesslDetailsqclistvallistGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function distOrderLinesslDetailsqclistvallistGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AddLine2/{_index}
     */
    public function distOrderLinesslDetailsqclistvallistAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AddLine2/{_index}
     */
    public function distOrderLinesslDetailsqclistvallistAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function distOrderLinesslDetailsqclistvallistAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function distOrderLinesslDetailsqclistvallistAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/EqualizeBalance/{_index}
     */
    public function distOrderLinesslDetailsqclistvallistEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/EqualizeBalance/{_index}
     */
    public function distOrderLinesslDetailsqclistvallistEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function distOrderLinesslDetailsqclistvallistApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function distOrderLinesslDetailsqclistvallistApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/SetLineTotals/{_Indx}
     */
    public function distOrderLinesslDetailsqclistvallistSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/SetLineTotals/{_Indx}
     */
    public function distOrderLinesslDetailsqclistvallistSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/CAMPAIGN_INFOS
     */
    public function getDIST_ORDER_LINESCAMPAIGN_INFOSV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/CAMPAIGN_INFOS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/CAMPAIGN_INFOS/{idt}
     */
    public function getDIST_ORDER_LINESCAMPAIGN_INFOSByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/CAMPAIGN_INFOS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/CAMPAIGN_INFOS/AppendLine2
     */
    public function distOrderLinescampaignInfosAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/CAMPAIGN_INFOS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/CAMPAIGN_INFOS/AppendLine2
     */
    public function distOrderLinescampaignInfosAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/CAMPAIGN_INFOS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/CAMPAIGN_INFOS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function distOrderLinescampaignInfosAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/CAMPAIGN_INFOS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/CAMPAIGN_INFOS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function distOrderLinescampaignInfosAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/CAMPAIGN_INFOS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /distributionOrders/readwithbodyparamters
     */
    public function postReadWithBodyParametersV1(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/readwithbodyparamters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /distributionOrders/{id}/readwithbodyparamters
     */
    public function postReadByIdWithBodyParametersV1($id, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/readwithbodyparamters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES
     */
    public function getDIST_ORDER_LINESV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{idt}
     */
    public function getDIST_ORDER_LINESByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/AppendLine2
     */
    public function distOrderLinesAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/AppendLine2
     */
    public function distOrderLinesAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function distOrderLinesAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function distOrderLinesAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function distOrderLinesGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function distOrderLinesGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/AddLine2/{_index}
     */
    public function distOrderLinesAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/AddLine2/{_index}
     */
    public function distOrderLinesAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function distOrderLinesAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function distOrderLinesAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/EqualizeBalance/{_index}
     */
    public function distOrderLinesEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/EqualizeBalance/{_index}
     */
    public function distOrderLinesEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function distOrderLinesApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function distOrderLinesApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/SetLineTotals/{_Indx}
     */
    public function distOrderLinesSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/SetLineTotals/{_Indx}
     */
    public function distOrderLinesSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS
     */
    public function getDIST_ORDER_LINESSL_DETAILSV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/{idt}
     */
    public function getDIST_ORDER_LINESSL_DETAILSByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/AppendLine2
     */
    public function distOrderLinesslDetailsAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/SL_DETAILS/AppendLine2
     */
    public function distOrderLinesslDetailsAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/SL_DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function distOrderLinesslDetailsAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/SL_DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function distOrderLinesslDetailsAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/SL_DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function distOrderLinesslDetailsGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/SL_DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function distOrderLinesslDetailsGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/SL_DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/AddLine2/{_index}
     */
    public function distOrderLinesslDetailsAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/SL_DETAILS/AddLine2/{_index}
     */
    public function distOrderLinesslDetailsAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/SL_DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function distOrderLinesslDetailsAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/SL_DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function distOrderLinesslDetailsAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/SL_DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionOrders/{id}/DIST_ORDER_LINES/{id1}/SL_DETAILS/EqualizeBalance/{_index}
     */
    public function distOrderLinesslDetailsEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/{$id}/DIST_ORDER_LINES/{$id1}/SL_DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionOrders/DIST_ORDER_LINES/{id1}/SL_DETAILS/EqualizeBalance/{_index}
     */
    public function distOrderLinesslDetailsEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionOrders/DIST_ORDER_LINES/{$id1}/SL_DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    public function searchByAuxilCode($auxilCode)
    {
        return $this->getAll(['q' => "AUXIL_CODE like '{$auxilCode}*'"]);
    }

    /**
     * Retrieves analytics data for DistributionOrders entities.
     */
    public function getAnalytics()
    {
        return ['total' => $this->getCount()];
    }

    /**
     * Retrieves the total count of DistributionOrders entities.
     */
    public function getCount()
    {
        $resp = $this->getAll(['count' => true]);
        return (int) ($resp->totalCount ?? 0);
    }

    /**
     * Retrieves database column information for the DistributionOrders entity.
     */
    public function getDbColumns()
    {
        $path = "{$this->endpoint}/dbcolumns";
        return $this->request('GET', $path);
    }

    /**
     * Enables change tracking for the DistributionOrders entity.
     */
    public function track()
    {
        $path = "{$this->endpoint}/track";
        return $this->request('GET', $path);
    }

    /**
     * Disables change tracking for the DistributionOrders entity.
     */
    public function untrack()
    {
        $path = "{$this->endpoint}/untrack";
        return $this->request('GET', $path);
    }

    /**
     * Checks the change tracking status for the DistributionOrders entity.
     */
    public function checkTrackStatus()
    {
        $path = "{$this->endpoint}/checktrack";
        return $this->request('GET', $path);
    }

    /**
     * Builds a search query string from a criteria object.
     */
    private function buildSearchQuery(array $criteria)
    {
        return QueryBuilder::buildSearchQuery($criteria);
    }
}
