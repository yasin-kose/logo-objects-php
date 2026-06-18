<?php

declare(strict_types=1);

namespace LogoObjects\Clients\salesDispatches;

use LogoObjects\Http\BaseApiClient;
use LogoObjects\Types\ApiResponse;
use LogoObjects\Utils\QueryBuilder;

/**
 * SalesDispatchesClient - /salesDispatches endpoint'i icin CRUD ve ozel islemler.
 */
class SalesDispatchesClient extends BaseApiClient
{
    /** @var string */
    protected $endpoint = '/salesDispatches';

    /**
     * Retrieves a paginated list of SalesDispatches entities.
     */
    public function getAll(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "{$this->endpoint}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return ApiResponse::of($this->request('GET', $path), \LogoObjects\Clients\salesDispatches\SalesDispatches::class);
    }

    /**
     * Retrieves a single SalesDispatches entity by its internal reference ID.
     */
    public function getById($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "{$this->endpoint}/{$id}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return \LogoObjects\Clients\salesDispatches\SalesDispatches::fromArray($this->request('GET', $path));
    }

    /**
     * Creates a new SalesDispatches entity.
     */
    public function create(array $data)
    {
        $path = "{$this->endpoint}";
        return \LogoObjects\Clients\salesDispatches\SalesDispatches::fromArray($this->request('POST', $path, $data));
    }

    /**
     * Updates an existing SalesDispatches entity.
     */
    public function update($id, array $data)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\salesDispatches\SalesDispatches::fromArray($this->request('PUT', $path, $data));
    }

    /**
     * Partially updates a SalesDispatches entity.
     */
    public function patch($id, array $data)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\salesDispatches\SalesDispatches::fromArray($this->request('PATCH', $path, $data));
    }

    /**
     * Deletes a SalesDispatches entity by its internal reference ID.
     */
    public function delete($id)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\salesDispatches\SalesDispatches::fromArray($this->request('DELETE', $path));
    }

    /**
     * Searches for SalesDispatches entities based on a set of criteria.
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
     * Corresponds to GET /salesDispatches/{id}/ImportImage/{_ImgPath}/{_Indx}
     */
    public function importImageV1($id, string $ImgPath, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/ImportImage/{$ImgPath}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/ImportImage/{_ImgPath}/{_Indx}
     */
    public function importImageV1Post(string $ImgPath, string $Indx, array $data)
    {
        $path = "/salesDispatches/ImportImage/{$ImgPath}/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/ExportBase64EncodedImage/{_Indx}
     */
    public function exportBase64EncodedImageV1($id, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/ExportBase64EncodedImage/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/ExportBase64EncodedImage/{_Indx}
     */
    public function exportBase64EncodedImageV1Post(string $Indx, array $data)
    {
        $path = "/salesDispatches/ExportBase64EncodedImage/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/ImportBase64EncodedImage/{_base64EncodedImage}/{_imageType}/{_Indx}
     */
    public function importBase64EncodedImageV1($id, string $base64EncodedImage, string $imageType, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/ImportBase64EncodedImage/{$base64EncodedImage}/{$imageType}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/ImportBase64EncodedImage/{_base64EncodedImage}/{_imageType}/{_Indx}
     */
    public function importBase64EncodedImageV1Post(string $base64EncodedImage, string $imageType, string $Indx, array $data)
    {
        $path = "/salesDispatches/ImportBase64EncodedImage/{$base64EncodedImage}/{$imageType}/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/FormSeriLotLines/{_lOMtd}
     */
    public function formSeriLotLinesV1($id, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/FormSeriLotLines/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/FormSeriLotLines/{_lOMtd}
     */
    public function formSeriLotLinesV1Post($lOMtd, array $data)
    {
        $path = "/salesDispatches/FormSeriLotLines/{$lOMtd}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/ApplyCampaign
     */
    public function applyCampaignV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/ApplyCampaign";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/ApplyCampaign
     */
    public function applyCampaignV1Post(array $data)
    {
        $path = "/salesDispatches/ApplyCampaign";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/ApplyRePayPln/{_lineNr}/{_rePayPCode}
     */
    public function applyRePayPlnV1($id, $lineNr, string $rePayPCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/ApplyRePayPln/{$lineNr}/{$rePayPCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/ApplyRePayPln/{_lineNr}/{_rePayPCode}
     */
    public function applyRePayPlnV1Post($lineNr, string $rePayPCode, array $data)
    {
        $path = "/salesDispatches/ApplyRePayPln/{$lineNr}/{$rePayPCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/ApplyRePayPlnForInv/{_rePayCode}
     */
    public function applyRePayPlnForInvV1($id, string $rePayCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/ApplyRePayPlnForInv/{$rePayCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/ApplyRePayPlnForInv/{_rePayCode}
     */
    public function applyRePayPlnForInvV1Post(string $rePayCode, array $data)
    {
        $path = "/salesDispatches/ApplyRePayPlnForInv/{$rePayCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/ImportFromXmlStr/{_RootKey}/{_XmlStr}
     */
    public function importFromXmlStrV1($id, string $RootKey, string $XmlStr, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/ImportFromXmlStr/{$RootKey}/{$XmlStr}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/ImportFromXmlStr/{_RootKey}/{_XmlStr}
     */
    public function importFromXmlStrV1Post(string $RootKey, string $XmlStr, array $data)
    {
        $path = "/salesDispatches/ImportFromXmlStr/{$RootKey}/{$XmlStr}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/ExportToXmlStr/{_RootKey}
     */
    public function exportToXmlStrV1($id, string $RootKey, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/ExportToXmlStr/{$RootKey}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/ExportToXmlStr/{_RootKey}
     */
    public function exportToXmlStrV1Post(string $RootKey, array $data)
    {
        $path = "/salesDispatches/ExportToXmlStr/{$RootKey}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/ApplyCondition
     */
    public function applyConditionV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/ApplyCondition";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/ApplyCondition
     */
    public function applyConditionV1Post(array $data)
    {
        $path = "/salesDispatches/ApplyCondition";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/ExportImage/{_Indx}/{_ImgPath}
     */
    public function exportImageV1($id, string $Indx, string $ImgPath, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/ExportImage/{$Indx}/{$ImgPath}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/ExportImage/{_Indx}/{_ImgPath}
     */
    public function exportImageV1Post(string $Indx, string $ImgPath, array $data)
    {
        $path = "/salesDispatches/ExportImage/{$Indx}/{$ImgPath}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/ReCalculate
     */
    public function reCalculateV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/ReCalculate";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/ReCalculate
     */
    public function reCalculateV1Post(array $data)
    {
        $path = "/salesDispatches/ReCalculate";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/FillAccCodes
     */
    public function fillAccCodesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/FillAccCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/FillAccCodes
     */
    public function fillAccCodesV1Post(array $data)
    {
        $path = "/salesDispatches/FillAccCodes";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/ApplyADiscount/{_discCode}
     */
    public function applyADiscountV1($id, string $discCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/ApplyADiscount/{$discCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/ApplyADiscount/{_discCode}
     */
    public function applyADiscountV1Post(string $discCode, array $data)
    {
        $path = "/salesDispatches/ApplyADiscount/{$discCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/SetDefIntValue/{_fldName}/{_fType}/{_fSz}/{_Value}
     */
    public function setDefIntValueV1($id, string $fldName, $fType, $fSz, $Value, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/SetDefIntValue/{$fldName}/{$fType}/{$fSz}/{$Value}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/SetDefIntValue/{_fldName}/{_fType}/{_fSz}/{_Value}
     */
    public function setDefIntValueV1Post(string $fldName, $fType, $fSz, $Value, array $data)
    {
        $path = "/salesDispatches/SetDefIntValue/{$fldName}/{$fType}/{$fSz}/{$Value}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/EqualizePayAmnt
     */
    public function equalizePayAmntV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/EqualizePayAmnt";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/EqualizePayAmnt
     */
    public function equalizePayAmntV1Post(array $data)
    {
        $path = "/salesDispatches/EqualizePayAmnt";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/AddSeriLotsForKs/{_slCode}/{_amount}/{_IOMtd}
     */
    public function addSeriLotsForKsV1($id, string $slCode, $amount, $IOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/AddSeriLotsForKs/{$slCode}/{$amount}/{$IOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/AddSeriLotsForKs/{_slCode}/{_amount}/{_IOMtd}
     */
    public function addSeriLotsForKsV1Post(string $slCode, $amount, $IOMtd, array $data)
    {
        $path = "/salesDispatches/AddSeriLotsForKs/{$slCode}/{$amount}/{$IOMtd}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/FillSMMACCCodes
     */
    public function fillSMMACCCodesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/FillSMMACCCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/FillSMMACCCodes
     */
    public function fillSMMACCCodesV1Post(array $data)
    {
        $path = "/salesDispatches/FillSMMACCCodes";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/AttachADespatchByLRef/{_dispref}
     */
    public function attachADespatchByLRefV1($id, $dispref, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/AttachADespatchByLRef/{$dispref}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/AttachADespatchByLRef/{_dispref}
     */
    public function attachADespatchByLRefV1Post($dispref, array $data)
    {
        $path = "/salesDispatches/AttachADespatchByLRef/{$dispref}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/AttachADespatchByFicheNo/{_dispFicheNo}
     */
    public function attachADespatchByFicheNoV1($id, string $dispFicheNo, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/AttachADespatchByFicheNo/{$dispFicheNo}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/AttachADespatchByFicheNo/{_dispFicheNo}
     */
    public function attachADespatchByFicheNoV1Post(string $dispFicheNo, array $data)
    {
        $path = "/salesDispatches/AttachADespatchByFicheNo/{$dispFicheNo}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/DeleteCampaign
     */
    public function deleteCampaignV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/DeleteCampaign";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/DeleteCampaign
     */
    public function deleteCampaignV1Post(array $data)
    {
        $path = "/salesDispatches/DeleteCampaign";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/SetClientInfo
     */
    public function setClientInfoV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/SetClientInfo";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/SetClientInfo
     */
    public function setClientInfoV1Post(array $data)
    {
        $path = "/salesDispatches/SetClientInfo";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/GetRelevantCampaigns
     */
    public function getRelevantCampaignsV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/GetRelevantCampaigns";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/GetRelevantCampaigns
     */
    public function getRelevantCampaignsV1Post(array $data)
    {
        $path = "/salesDispatches/GetRelevantCampaigns";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/ApplyCampaignSpecific/{_refList}
     */
    public function applyCampaignSpecificV1($id, string $refList, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/ApplyCampaignSpecific/{$refList}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/ApplyCampaignSpecific/{_refList}
     */
    public function applyCampaignSpecificV1Post(string $refList, array $data)
    {
        $path = "/salesDispatches/ApplyCampaignSpecific/{$refList}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/{id1}/NOTES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function xrelatedArpnotesApplyaccdisttemplateV1($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/{$id1}/NOTES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/NOTES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function xrelatedArpnotesApplyaccdisttemplateV1Get($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/NOTES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/NOTES/SetLineTotals/{_Indx}
     */
    public function xrelatedArpnotesSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/NOTES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/{id1}/NOTES/SetLineTotals/{_Indx}
     */
    public function xrelatedArpnotesSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/{$id1}/NOTES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/GENIUSFLDSLIST
     */
    public function getXRELATED_ARPGENIUSFLDSLISTV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/GENIUSFLDSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/GENIUSFLDSLIST/{idt}
     */
    public function getXRELATED_ARPGENIUSFLDSLISTByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/GENIUSFLDSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/GENIUSFLDSLIST/AppendLine2
     */
    public function xrelatedArpgeniusfldslistAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/GENIUSFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/{id1}/GENIUSFLDSLIST/AppendLine2
     */
    public function xrelatedArpgeniusfldslistAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/{$id1}/GENIUSFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/GENIUSFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function xrelatedArpgeniusfldslistAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/GENIUSFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/{id1}/GENIUSFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function xrelatedArpgeniusfldslistAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/{$id1}/GENIUSFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/GENIUSFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function xrelatedArpgeniusfldslistGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/GENIUSFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/{id1}/GENIUSFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function xrelatedArpgeniusfldslistGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/{$id1}/GENIUSFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/GENIUSFLDSLIST/AddLine2/{_index}
     */
    public function xrelatedArpgeniusfldslistAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/GENIUSFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/{id1}/GENIUSFLDSLIST/AddLine2/{_index}
     */
    public function xrelatedArpgeniusfldslistAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/{$id1}/GENIUSFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/GENIUSFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function xrelatedArpgeniusfldslistAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/GENIUSFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/{id1}/GENIUSFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function xrelatedArpgeniusfldslistAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/{$id1}/GENIUSFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/GENIUSFLDSLIST/EqualizeBalance/{_index}
     */
    public function xrelatedArpgeniusfldslistEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/GENIUSFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/{id1}/GENIUSFLDSLIST/EqualizeBalance/{_index}
     */
    public function xrelatedArpgeniusfldslistEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/{$id1}/GENIUSFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/GENIUSFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function xrelatedArpgeniusfldslistApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/GENIUSFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/{id1}/GENIUSFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function xrelatedArpgeniusfldslistApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/{$id1}/GENIUSFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/GENIUSFLDSLIST/SetLineTotals/{_Indx}
     */
    public function xrelatedArpgeniusfldslistSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/GENIUSFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/{id1}/GENIUSFLDSLIST/SetLineTotals/{_Indx}
     */
    public function xrelatedArpgeniusfldslistSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/{$id1}/GENIUSFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/DEFNFLDSLIST
     */
    public function getXRELATED_ARPDEFNFLDSLISTV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/DEFNFLDSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/DEFNFLDSLIST/{idt}
     */
    public function getXRELATED_ARPDEFNFLDSLISTByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/DEFNFLDSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/DEFNFLDSLIST/AppendLine2
     */
    public function xrelatedArpdefnfldslistAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/{id1}/DEFNFLDSLIST/AppendLine2
     */
    public function xrelatedArpdefnfldslistAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/{$id1}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function xrelatedArpdefnfldslistAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/{id1}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function xrelatedArpdefnfldslistAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/{$id1}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function xrelatedArpdefnfldslistGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/{id1}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function xrelatedArpdefnfldslistGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/{$id1}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function xrelatedArpdefnfldslistAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/{id1}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function xrelatedArpdefnfldslistAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/{$id1}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function xrelatedArpdefnfldslistAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/{id1}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function xrelatedArpdefnfldslistAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/{$id1}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function xrelatedArpdefnfldslistEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/{id1}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function xrelatedArpdefnfldslistEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/{$id1}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function xrelatedArpdefnfldslistApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/{id1}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function xrelatedArpdefnfldslistApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/{$id1}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function xrelatedArpdefnfldslistSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/{id1}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function xrelatedArpdefnfldslistSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/{$id1}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/ExportToXML/{_RootKey}/{_FileName}
     */
    public function exportToXMLV1($id, string $RootKey, string $FileName, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/ExportToXML/{$RootKey}/{$FileName}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/ExportToXML/{_RootKey}/{_FileName}
     */
    public function exportToXMLV1Post(string $RootKey, string $FileName, array $data)
    {
        $path = "/salesDispatches/ExportToXML/{$RootKey}/{$FileName}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/ImportFromXMLFile/{_RootKey}/{_FileName}
     */
    public function importFromXMLFileV1($id, string $RootKey, string $FileName, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/ImportFromXMLFile/{$RootKey}/{$FileName}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/ImportFromXMLFile/{_RootKey}/{_FileName}
     */
    public function importFromXMLFileV1Post(string $RootKey, string $FileName, array $data)
    {
        $path = "/salesDispatches/ImportFromXMLFile/{$RootKey}/{$FileName}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/CreateCompositeLines
     */
    public function createCompositeLinesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/CreateCompositeLines";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/CreateCompositeLines
     */
    public function createCompositeLinesV1Post(array $data)
    {
        $path = "/salesDispatches/CreateCompositeLines";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /salesDispatches/LABEL_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function labelListGetstocklinepriceV1($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/LABEL_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/LABEL_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function labelListGetstocklinepriceV1Get($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/LABEL_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/LABEL_LIST/AddLine2/{_index}
     */
    public function labelListAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/LABEL_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/LABEL_LIST/AddLine2/{_index}
     */
    public function labelListAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/LABEL_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/LABEL_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function labelListAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/LABEL_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/LABEL_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function labelListAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/LABEL_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/LABEL_LIST/EqualizeBalance/{_index}
     */
    public function labelListEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/LABEL_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/LABEL_LIST/EqualizeBalance/{_index}
     */
    public function labelListEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/LABEL_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/LABEL_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function labelListApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/LABEL_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/LABEL_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function labelListApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/LABEL_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/LABEL_LIST/SetLineTotals/{_Indx}
     */
    public function labelListSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/LABEL_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/LABEL_LIST/SetLineTotals/{_Indx}
     */
    public function labelListSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/LABEL_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP
     */
    public function getXRELATED_ARPV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{idt}
     */
    public function getXRELATED_ARPByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/AppendLine2
     */
    public function xrelatedArpAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/AppendLine2
     */
    public function xrelatedArpAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function xrelatedArpAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function xrelatedArpAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function xrelatedArpGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function xrelatedArpGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/AddLine2/{_index}
     */
    public function xrelatedArpAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/AddLine2/{_index}
     */
    public function xrelatedArpAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function xrelatedArpAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function xrelatedArpAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/EqualizeBalance/{_index}
     */
    public function xrelatedArpEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/EqualizeBalance/{_index}
     */
    public function xrelatedArpEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function xrelatedArpApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function xrelatedArpApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/SetLineTotals/{_Indx}
     */
    public function xrelatedArpSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/SetLineTotals/{_Indx}
     */
    public function xrelatedArpSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/NOTES
     */
    public function getXRELATED_ARPNOTESV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/NOTES";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/NOTES/{idt}
     */
    public function getXRELATED_ARPNOTESByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/NOTES/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/NOTES/AppendLine2
     */
    public function xrelatedArpnotesAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/NOTES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/{id1}/NOTES/AppendLine2
     */
    public function xrelatedArpnotesAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/{$id1}/NOTES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/NOTES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function xrelatedArpnotesAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/NOTES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/{id1}/NOTES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function xrelatedArpnotesAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/{$id1}/NOTES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/NOTES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function xrelatedArpnotesGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/NOTES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/{id1}/NOTES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function xrelatedArpnotesGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/{$id1}/NOTES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/NOTES/AddLine2/{_index}
     */
    public function xrelatedArpnotesAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/NOTES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/{id1}/NOTES/AddLine2/{_index}
     */
    public function xrelatedArpnotesAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/{$id1}/NOTES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/NOTES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function xrelatedArpnotesAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/NOTES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/{id1}/NOTES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function xrelatedArpnotesAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/{$id1}/NOTES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/XRELATED_ARP/{id1}/NOTES/EqualizeBalance/{_index}
     */
    public function xrelatedArpnotesEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/XRELATED_ARP/{$id1}/NOTES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/XRELATED_ARP/{id1}/NOTES/EqualizeBalance/{_index}
     */
    public function xrelatedArpnotesEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/XRELATED_ARP/{$id1}/NOTES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/ADDTAXLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedServiceaddtaxlistApplyaccdisttemplateV1($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/ADDTAXLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/ADDTAXLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedServiceaddtaxlistApplyaccdisttemplateV1Get($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/ADDTAXLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/ADDTAXLIST/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedServiceaddtaxlistSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/ADDTAXLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/ADDTAXLIST/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedServiceaddtaxlistSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/ADDTAXLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_DISCEXP
     */
    public function getTRANSACTIONSXRELATED_DISCEXPV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_DISCEXP";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_DISCEXP/{idt}
     */
    public function getTRANSACTIONSXRELATED_DISCEXPByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_DISCEXP/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_DISCEXP/AppendLine2
     */
    public function transactionsxrelatedDiscexpAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_DISCEXP/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_DISCEXP/AppendLine2
     */
    public function transactionsxrelatedDiscexpAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_DISCEXP/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_DISCEXP/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedDiscexpAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_DISCEXP/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_DISCEXP/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedDiscexpAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_DISCEXP/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_DISCEXP/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedDiscexpGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_DISCEXP/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_DISCEXP/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedDiscexpGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_DISCEXP/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_DISCEXP/AddLine2/{_index}
     */
    public function transactionsxrelatedDiscexpAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_DISCEXP/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_DISCEXP/AddLine2/{_index}
     */
    public function transactionsxrelatedDiscexpAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_DISCEXP/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_DISCEXP/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedDiscexpAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_DISCEXP/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_DISCEXP/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedDiscexpAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_DISCEXP/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_DISCEXP/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedDiscexpEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_DISCEXP/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_DISCEXP/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedDiscexpEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_DISCEXP/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_DISCEXP/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedDiscexpApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_DISCEXP/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_DISCEXP/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedDiscexpApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_DISCEXP/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_DISCEXP/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedDiscexpSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_DISCEXP/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_DISCEXP/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedDiscexpSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_DISCEXP/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/DEFNFLDSLIST
     */
    public function getDEFNFLDSLISTV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/DEFNFLDSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/DEFNFLDSLIST/{idt}
     */
    public function getDEFNFLDSLISTByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/DEFNFLDSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/DEFNFLDSLIST/AppendLine2
     */
    public function defnfldslistAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/DEFNFLDSLIST/AppendLine2
     */
    public function defnfldslistAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function defnfldslistAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function defnfldslistAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function defnfldslistGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function defnfldslistGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function defnfldslistAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function defnfldslistAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function defnfldslistAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function defnfldslistAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function defnfldslistEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function defnfldslistEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function defnfldslistApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function defnfldslistApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function defnfldslistSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function defnfldslistSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/LABEL_LIST
     */
    public function getLABEL_LISTV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/LABEL_LIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/LABEL_LIST/{idt}
     */
    public function getLABEL_LISTByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/LABEL_LIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/LABEL_LIST/AppendLine2
     */
    public function labelListAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/LABEL_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/LABEL_LIST/AppendLine2
     */
    public function labelListAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/LABEL_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/LABEL_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function labelListAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/LABEL_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/LABEL_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function labelListAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/LABEL_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/UNITS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedServiceunitsGetstocklinepriceV1($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/UNITS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/UNITS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedServiceunitsGetstocklinepriceV1Get($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/UNITS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/UNITS/AddLine2/{_index}
     */
    public function transactionsxrelatedServiceunitsAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/UNITS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/UNITS/AddLine2/{_index}
     */
    public function transactionsxrelatedServiceunitsAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/UNITS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/UNITS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedServiceunitsAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/UNITS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/UNITS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedServiceunitsAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/UNITS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/UNITS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedServiceunitsEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/UNITS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/UNITS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedServiceunitsEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/UNITS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/UNITS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedServiceunitsApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/UNITS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/UNITS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedServiceunitsApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/UNITS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/UNITS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedServiceunitsSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/UNITS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/UNITS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedServiceunitsSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/UNITS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/GL_LINKS
     */
    public function getTRANSACTIONSXRELATED_SERVICEGL_LINKSV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/GL_LINKS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/GL_LINKS/{idt}
     */
    public function getTRANSACTIONSXRELATED_SERVICEGL_LINKSByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/GL_LINKS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/GL_LINKS/AppendLine2
     */
    public function transactionsxrelatedServiceglLinksAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/GL_LINKS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/GL_LINKS/AppendLine2
     */
    public function transactionsxrelatedServiceglLinksAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/GL_LINKS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/GL_LINKS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedServiceglLinksAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/GL_LINKS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/GL_LINKS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedServiceglLinksAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/GL_LINKS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/GL_LINKS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedServiceglLinksGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/GL_LINKS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/GL_LINKS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedServiceglLinksGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/GL_LINKS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/GL_LINKS/AddLine2/{_index}
     */
    public function transactionsxrelatedServiceglLinksAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/GL_LINKS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/GL_LINKS/AddLine2/{_index}
     */
    public function transactionsxrelatedServiceglLinksAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/GL_LINKS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/GL_LINKS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedServiceglLinksAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/GL_LINKS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/GL_LINKS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedServiceglLinksAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/GL_LINKS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/GL_LINKS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedServiceglLinksEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/GL_LINKS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/GL_LINKS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedServiceglLinksEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/GL_LINKS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/GL_LINKS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedServiceglLinksApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/GL_LINKS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/GL_LINKS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedServiceglLinksApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/GL_LINKS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/GL_LINKS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedServiceglLinksSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/GL_LINKS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/GL_LINKS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedServiceglLinksSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/GL_LINKS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/ADDTAXLIST
     */
    public function getTRANSACTIONSXRELATED_SERVICEADDTAXLISTV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/ADDTAXLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/ADDTAXLIST/{idt}
     */
    public function getTRANSACTIONSXRELATED_SERVICEADDTAXLISTByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/ADDTAXLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/ADDTAXLIST/AppendLine2
     */
    public function transactionsxrelatedServiceaddtaxlistAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/ADDTAXLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/ADDTAXLIST/AppendLine2
     */
    public function transactionsxrelatedServiceaddtaxlistAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/ADDTAXLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/ADDTAXLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedServiceaddtaxlistAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/ADDTAXLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/ADDTAXLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedServiceaddtaxlistAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/ADDTAXLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/ADDTAXLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedServiceaddtaxlistGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/ADDTAXLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/ADDTAXLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedServiceaddtaxlistGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/ADDTAXLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/ADDTAXLIST/AddLine2/{_index}
     */
    public function transactionsxrelatedServiceaddtaxlistAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/ADDTAXLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/ADDTAXLIST/AddLine2/{_index}
     */
    public function transactionsxrelatedServiceaddtaxlistAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/ADDTAXLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/ADDTAXLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedServiceaddtaxlistAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/ADDTAXLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/ADDTAXLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedServiceaddtaxlistAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/ADDTAXLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/ADDTAXLIST/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedServiceaddtaxlistEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/ADDTAXLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/ADDTAXLIST/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedServiceaddtaxlistEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/ADDTAXLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/LABEL_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemlabelListApplyaccdisttemplateV1($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/LABEL_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/LABEL_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemlabelListApplyaccdisttemplateV1Get($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/LABEL_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/LABEL_LIST/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemlabelListSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/LABEL_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/LABEL_LIST/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemlabelListSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/LABEL_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE
     */
    public function getTRANSACTIONSXRELATED_SERVICEV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{idt}
     */
    public function getTRANSACTIONSXRELATED_SERVICEByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/AppendLine2
     */
    public function transactionsxrelatedServiceAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/AppendLine2
     */
    public function transactionsxrelatedServiceAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedServiceAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedServiceAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedServiceGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedServiceGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/AddLine2/{_index}
     */
    public function transactionsxrelatedServiceAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/AddLine2/{_index}
     */
    public function transactionsxrelatedServiceAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedServiceAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedServiceAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedServiceEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedServiceEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedServiceApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedServiceApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedServiceSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedServiceSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/WH_PARAMS
     */
    public function getTRANSACTIONSXRELATED_SERVICEWH_PARAMSV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/WH_PARAMS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/WH_PARAMS/{idt}
     */
    public function getTRANSACTIONSXRELATED_SERVICEWH_PARAMSByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/WH_PARAMS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/WH_PARAMS/AppendLine2
     */
    public function transactionsxrelatedServicewhParamsAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/WH_PARAMS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/WH_PARAMS/AppendLine2
     */
    public function transactionsxrelatedServicewhParamsAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/WH_PARAMS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/WH_PARAMS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedServicewhParamsAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/WH_PARAMS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/WH_PARAMS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedServicewhParamsAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/WH_PARAMS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/WH_PARAMS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedServicewhParamsGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/WH_PARAMS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/WH_PARAMS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedServicewhParamsGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/WH_PARAMS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/WH_PARAMS/AddLine2/{_index}
     */
    public function transactionsxrelatedServicewhParamsAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/WH_PARAMS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/WH_PARAMS/AddLine2/{_index}
     */
    public function transactionsxrelatedServicewhParamsAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/WH_PARAMS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/WH_PARAMS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedServicewhParamsAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/WH_PARAMS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/WH_PARAMS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedServicewhParamsAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/WH_PARAMS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/WH_PARAMS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedServicewhParamsEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/WH_PARAMS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/WH_PARAMS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedServicewhParamsEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/WH_PARAMS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/WH_PARAMS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedServicewhParamsApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/WH_PARAMS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/WH_PARAMS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedServicewhParamsApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/WH_PARAMS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/WH_PARAMS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedServicewhParamsSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/WH_PARAMS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/WH_PARAMS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedServicewhParamsSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/WH_PARAMS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/UNITS
     */
    public function getTRANSACTIONSXRELATED_SERVICEUNITSV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/UNITS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/UNITS/{idt}
     */
    public function getTRANSACTIONSXRELATED_SERVICEUNITSByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/UNITS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/UNITS/AppendLine2
     */
    public function transactionsxrelatedServiceunitsAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/UNITS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/UNITS/AppendLine2
     */
    public function transactionsxrelatedServiceunitsAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/UNITS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/UNITS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedServiceunitsAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/UNITS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_SERVICE/{id2}/UNITS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedServiceunitsAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_SERVICE/{$id2}/UNITS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/{id3}/TEMPVALS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemvrntexcptempstempvalsGetstocklinepriceV1($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/{$id3}/TEMPVALS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/{id3}/TEMPVALS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemvrntexcptempstempvalsGetstocklinepriceV1Get($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/{$id3}/TEMPVALS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/{id3}/TEMPVALS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemvrntexcptempstempvalsAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/{$id3}/TEMPVALS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/{id3}/TEMPVALS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemvrntexcptempstempvalsAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/{$id3}/TEMPVALS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/{id3}/TEMPVALS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemvrntexcptempstempvalsAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/{$id3}/TEMPVALS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/{id3}/TEMPVALS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemvrntexcptempstempvalsAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/{$id3}/TEMPVALS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/{id3}/TEMPVALS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemvrntexcptempstempvalsEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/{$id3}/TEMPVALS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/{id3}/TEMPVALS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemvrntexcptempstempvalsEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/{$id3}/TEMPVALS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/{id3}/TEMPVALS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemvrntexcptempstempvalsApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/{$id3}/TEMPVALS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/{id3}/TEMPVALS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemvrntexcptempstempvalsApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/{$id3}/TEMPVALS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/{id3}/TEMPVALS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemvrntexcptempstempvalsSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/{$id3}/TEMPVALS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/{id3}/TEMPVALS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemvrntexcptempstempvalsSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/{$id3}/TEMPVALS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ALTERNATIVES
     */
    public function getTRANSACTIONSXRELATED_ITEMALTERNATIVESV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ALTERNATIVES";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ALTERNATIVES/{idt}
     */
    public function getTRANSACTIONSXRELATED_ITEMALTERNATIVESByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ALTERNATIVES/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ALTERNATIVES/AppendLine2
     */
    public function transactionsxrelatedItemalternativesAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ALTERNATIVES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ALTERNATIVES/AppendLine2
     */
    public function transactionsxrelatedItemalternativesAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ALTERNATIVES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ALTERNATIVES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemalternativesAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ALTERNATIVES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ALTERNATIVES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemalternativesAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ALTERNATIVES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ALTERNATIVES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemalternativesGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ALTERNATIVES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ALTERNATIVES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemalternativesGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ALTERNATIVES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ALTERNATIVES/AddLine2/{_index}
     */
    public function transactionsxrelatedItemalternativesAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ALTERNATIVES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ALTERNATIVES/AddLine2/{_index}
     */
    public function transactionsxrelatedItemalternativesAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ALTERNATIVES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ALTERNATIVES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemalternativesAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ALTERNATIVES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ALTERNATIVES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemalternativesAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ALTERNATIVES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ALTERNATIVES/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemalternativesEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ALTERNATIVES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ALTERNATIVES/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemalternativesEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ALTERNATIVES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ALTERNATIVES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemalternativesApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ALTERNATIVES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ALTERNATIVES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemalternativesApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ALTERNATIVES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ALTERNATIVES/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemalternativesSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ALTERNATIVES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ALTERNATIVES/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemalternativesSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ALTERNATIVES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/LABEL_LIST
     */
    public function getTRANSACTIONSXRELATED_ITEMLABEL_LISTV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/LABEL_LIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/LABEL_LIST/{idt}
     */
    public function getTRANSACTIONSXRELATED_ITEMLABEL_LISTByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/LABEL_LIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/LABEL_LIST/AppendLine2
     */
    public function transactionsxrelatedItemlabelListAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/LABEL_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/LABEL_LIST/AppendLine2
     */
    public function transactionsxrelatedItemlabelListAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/LABEL_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/LABEL_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemlabelListAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/LABEL_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/LABEL_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemlabelListAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/LABEL_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/LABEL_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemlabelListGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/LABEL_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/LABEL_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemlabelListGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/LABEL_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/LABEL_LIST/AddLine2/{_index}
     */
    public function transactionsxrelatedItemlabelListAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/LABEL_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/LABEL_LIST/AddLine2/{_index}
     */
    public function transactionsxrelatedItemlabelListAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/LABEL_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/LABEL_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemlabelListAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/LABEL_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/LABEL_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemlabelListAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/LABEL_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/LABEL_LIST/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemlabelListEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/LABEL_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/LABEL_LIST/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemlabelListEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/LABEL_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemvrntcodetempsApplyaccdisttemplateV1($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemvrntcodetempsApplyaccdisttemplateV1Get($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemvrntcodetempsSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemvrntcodetempsSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/{id3}/TEMPVALS
     */
    public function getTRANSACTIONSXRELATED_ITEMVRNTCODETEMPSTEMPVALSV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/{$id3}/TEMPVALS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/{id3}/TEMPVALS/{idt}
     */
    public function getTRANSACTIONSXRELATED_ITEMVRNTCODETEMPSTEMPVALSByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/{$id3}/TEMPVALS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/{id3}/TEMPVALS/AppendLine2
     */
    public function transactionsxrelatedItemvrntcodetempstempvalsAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/{$id3}/TEMPVALS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/{id3}/TEMPVALS/AppendLine2
     */
    public function transactionsxrelatedItemvrntcodetempstempvalsAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/{$id3}/TEMPVALS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/{id3}/TEMPVALS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemvrntcodetempstempvalsAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/{$id3}/TEMPVALS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/{id3}/TEMPVALS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemvrntcodetempstempvalsAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/{$id3}/TEMPVALS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/{id3}/TEMPVALS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemvrntcodetempstempvalsGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/{$id3}/TEMPVALS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/{id3}/TEMPVALS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemvrntcodetempstempvalsGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/{$id3}/TEMPVALS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/{id3}/TEMPVALS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemvrntcodetempstempvalsAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/{$id3}/TEMPVALS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/{id3}/TEMPVALS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemvrntcodetempstempvalsAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/{$id3}/TEMPVALS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/{id3}/TEMPVALS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemvrntcodetempstempvalsAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/{$id3}/TEMPVALS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/{id3}/TEMPVALS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemvrntcodetempstempvalsAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/{$id3}/TEMPVALS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/{id3}/TEMPVALS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemvrntcodetempstempvalsEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/{$id3}/TEMPVALS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/{id3}/TEMPVALS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemvrntcodetempstempvalsEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/{$id3}/TEMPVALS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/{id3}/TEMPVALS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemvrntcodetempstempvalsApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/{$id3}/TEMPVALS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/{id3}/TEMPVALS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemvrntcodetempstempvalsApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/{$id3}/TEMPVALS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/{id3}/TEMPVALS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemvrntcodetempstempvalsSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/{$id3}/TEMPVALS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/{id3}/TEMPVALS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemvrntcodetempstempvalsSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/{$id3}/TEMPVALS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS
     */
    public function getTRANSACTIONSXRELATED_ITEMVRNTEXCPTEMPSV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/{idt}
     */
    public function getTRANSACTIONSXRELATED_ITEMVRNTEXCPTEMPSByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/AppendLine2
     */
    public function transactionsxrelatedItemvrntexcptempsAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/AppendLine2
     */
    public function transactionsxrelatedItemvrntexcptempsAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemvrntexcptempsAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemvrntexcptempsAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemvrntexcptempsGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemvrntexcptempsGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemvrntexcptempsAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemvrntexcptempsAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemvrntexcptempsAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemvrntexcptempsAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemvrntexcptempsEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemvrntexcptempsEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemvrntexcptempsApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemvrntexcptempsApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemvrntexcptempsSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemvrntexcptempsSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/{id3}/TEMPVALS
     */
    public function getTRANSACTIONSXRELATED_ITEMVRNTEXCPTEMPSTEMPVALSV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/{$id3}/TEMPVALS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/{id3}/TEMPVALS/{idt}
     */
    public function getTRANSACTIONSXRELATED_ITEMVRNTEXCPTEMPSTEMPVALSByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/{$id3}/TEMPVALS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/{id3}/TEMPVALS/AppendLine2
     */
    public function transactionsxrelatedItemvrntexcptempstempvalsAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/{$id3}/TEMPVALS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/{id3}/TEMPVALS/AppendLine2
     */
    public function transactionsxrelatedItemvrntexcptempstempvalsAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/{$id3}/TEMPVALS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/{id3}/TEMPVALS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemvrntexcptempstempvalsAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/{$id3}/TEMPVALS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCPTEMPS/{id3}/TEMPVALS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemvrntexcptempstempvalsAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCPTEMPS/{$id3}/TEMPVALS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemvrntexceptionsGetstocklinepriceV1($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemvrntexceptionsGetstocklinepriceV1Get($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemvrntexceptionsAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemvrntexceptionsAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemvrntexceptionsAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemvrntexceptionsAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemvrntexceptionsEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemvrntexceptionsEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemvrntexceptionsApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemvrntexceptionsApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemvrntexceptionsSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemvrntexceptionsSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/{id3}/VALREFSLIST
     */
    public function getTRANSACTIONSXRELATED_ITEMVRNTEXCEPTIONSVALREFSLISTV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/{$id3}/VALREFSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/{id3}/VALREFSLIST/{idt}
     */
    public function getTRANSACTIONSXRELATED_ITEMVRNTEXCEPTIONSVALREFSLISTByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/{$id3}/VALREFSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/{id3}/VALREFSLIST/AppendLine2
     */
    public function transactionsxrelatedItemvrntexceptionsvalrefslistAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/{$id3}/VALREFSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/{id3}/VALREFSLIST/AppendLine2
     */
    public function transactionsxrelatedItemvrntexceptionsvalrefslistAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/{$id3}/VALREFSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/{id3}/VALREFSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemvrntexceptionsvalrefslistAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/{$id3}/VALREFSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/{id3}/VALREFSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemvrntexceptionsvalrefslistAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/{$id3}/VALREFSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/{id3}/VALREFSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemvrntexceptionsvalrefslistGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/{$id3}/VALREFSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/{id3}/VALREFSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemvrntexceptionsvalrefslistGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/{$id3}/VALREFSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/{id3}/VALREFSLIST/AddLine2/{_index}
     */
    public function transactionsxrelatedItemvrntexceptionsvalrefslistAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/{$id3}/VALREFSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/{id3}/VALREFSLIST/AddLine2/{_index}
     */
    public function transactionsxrelatedItemvrntexceptionsvalrefslistAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/{$id3}/VALREFSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/{id3}/VALREFSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemvrntexceptionsvalrefslistAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/{$id3}/VALREFSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/{id3}/VALREFSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemvrntexceptionsvalrefslistAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/{$id3}/VALREFSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/{id3}/VALREFSLIST/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemvrntexceptionsvalrefslistEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/{$id3}/VALREFSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/{id3}/VALREFSLIST/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemvrntexceptionsvalrefslistEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/{$id3}/VALREFSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/{id3}/VALREFSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemvrntexceptionsvalrefslistApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/{$id3}/VALREFSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/{id3}/VALREFSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemvrntexceptionsvalrefslistApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/{$id3}/VALREFSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/{id3}/VALREFSLIST/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemvrntexceptionsvalrefslistSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/{$id3}/VALREFSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/{id3}/VALREFSLIST/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemvrntexceptionsvalrefslistSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/{$id3}/VALREFSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS
     */
    public function getTRANSACTIONSXRELATED_ITEMVRNTCODETEMPSV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/{idt}
     */
    public function getTRANSACTIONSXRELATED_ITEMVRNTCODETEMPSByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/AppendLine2
     */
    public function transactionsxrelatedItemvrntcodetempsAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/AppendLine2
     */
    public function transactionsxrelatedItemvrntcodetempsAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemvrntcodetempsAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemvrntcodetempsAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemvrntcodetempsGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemvrntcodetempsGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemvrntcodetempsAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemvrntcodetempsAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemvrntcodetempsAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemvrntcodetempsAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemvrntcodetempsEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTCODETEMPS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemvrntcodetempsEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTCODETEMPS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODSUBCONTS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemqprodsubcontsApplyaccdisttemplateV1($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODSUBCONTS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODSUBCONTS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemqprodsubcontsApplyaccdisttemplateV1Get($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODSUBCONTS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODSUBCONTS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemqprodsubcontsSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODSUBCONTS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODSUBCONTS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemqprodsubcontsSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODSUBCONTS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GENIUSFLDSLIST
     */
    public function getTRANSACTIONSXRELATED_ITEMGENIUSFLDSLISTV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GENIUSFLDSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GENIUSFLDSLIST/{idt}
     */
    public function getTRANSACTIONSXRELATED_ITEMGENIUSFLDSLISTByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GENIUSFLDSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GENIUSFLDSLIST/AppendLine2
     */
    public function transactionsxrelatedItemgeniusfldslistAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GENIUSFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GENIUSFLDSLIST/AppendLine2
     */
    public function transactionsxrelatedItemgeniusfldslistAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GENIUSFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GENIUSFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemgeniusfldslistAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GENIUSFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GENIUSFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemgeniusfldslistAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GENIUSFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GENIUSFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemgeniusfldslistGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GENIUSFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GENIUSFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemgeniusfldslistGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GENIUSFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GENIUSFLDSLIST/AddLine2/{_index}
     */
    public function transactionsxrelatedItemgeniusfldslistAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GENIUSFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GENIUSFLDSLIST/AddLine2/{_index}
     */
    public function transactionsxrelatedItemgeniusfldslistAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GENIUSFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GENIUSFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemgeniusfldslistAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GENIUSFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GENIUSFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemgeniusfldslistAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GENIUSFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GENIUSFLDSLIST/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemgeniusfldslistEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GENIUSFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GENIUSFLDSLIST/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemgeniusfldslistEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GENIUSFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GENIUSFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemgeniusfldslistApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GENIUSFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GENIUSFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemgeniusfldslistApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GENIUSFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GENIUSFLDSLIST/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemgeniusfldslistSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GENIUSFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GENIUSFLDSLIST/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemgeniusfldslistSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GENIUSFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DEFNFLDSLIST
     */
    public function getTRANSACTIONSXRELATED_ITEMDEFNFLDSLISTV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DEFNFLDSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DEFNFLDSLIST/{idt}
     */
    public function getTRANSACTIONSXRELATED_ITEMDEFNFLDSLISTByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DEFNFLDSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DEFNFLDSLIST/AppendLine2
     */
    public function transactionsxrelatedItemdefnfldslistAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DEFNFLDSLIST/AppendLine2
     */
    public function transactionsxrelatedItemdefnfldslistAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemdefnfldslistAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemdefnfldslistAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemdefnfldslistGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemdefnfldslistGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function transactionsxrelatedItemdefnfldslistAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function transactionsxrelatedItemdefnfldslistAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemdefnfldslistAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemdefnfldslistAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemdefnfldslistEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemdefnfldslistEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemdefnfldslistApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemdefnfldslistApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemdefnfldslistSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemdefnfldslistSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS
     */
    public function getTRANSACTIONSXRELATED_ITEMVRNTEXCEPTIONSV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/{idt}
     */
    public function getTRANSACTIONSXRELATED_ITEMVRNTEXCEPTIONSByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/AppendLine2
     */
    public function transactionsxrelatedItemvrntexceptionsAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/AppendLine2
     */
    public function transactionsxrelatedItemvrntexceptionsAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemvrntexceptionsAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/VRNTEXCEPTIONS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemvrntexceptionsAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/VRNTEXCEPTIONS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ADDTAXLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemaddtaxlistGetstocklinepriceV1($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ADDTAXLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ADDTAXLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemaddtaxlistGetstocklinepriceV1Get($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ADDTAXLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ADDTAXLIST/AddLine2/{_index}
     */
    public function transactionsxrelatedItemaddtaxlistAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ADDTAXLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ADDTAXLIST/AddLine2/{_index}
     */
    public function transactionsxrelatedItemaddtaxlistAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ADDTAXLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ADDTAXLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemaddtaxlistAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ADDTAXLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ADDTAXLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemaddtaxlistAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ADDTAXLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ADDTAXLIST/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemaddtaxlistEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ADDTAXLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ADDTAXLIST/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemaddtaxlistEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ADDTAXLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ADDTAXLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemaddtaxlistApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ADDTAXLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ADDTAXLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemaddtaxlistApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ADDTAXLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ADDTAXLIST/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemaddtaxlistSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ADDTAXLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ADDTAXLIST/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemaddtaxlistSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ADDTAXLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODS
     */
    public function getTRANSACTIONSXRELATED_ITEMQPRODSV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODS/{idt}
     */
    public function getTRANSACTIONSXRELATED_ITEMQPRODSByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODS/AppendLine2
     */
    public function transactionsxrelatedItemqprodsAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODS/AppendLine2
     */
    public function transactionsxrelatedItemqprodsAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemqprodsAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemqprodsAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemqprodsGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemqprodsGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemqprodsAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemqprodsAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemqprodsAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemqprodsAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemqprodsEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemqprodsEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemqprodsApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemqprodsApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemqprodsSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemqprodsSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODSUBCONTS
     */
    public function getTRANSACTIONSXRELATED_ITEMQPRODSUBCONTSV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODSUBCONTS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODSUBCONTS/{idt}
     */
    public function getTRANSACTIONSXRELATED_ITEMQPRODSUBCONTSByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODSUBCONTS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODSUBCONTS/AppendLine2
     */
    public function transactionsxrelatedItemqprodsubcontsAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODSUBCONTS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODSUBCONTS/AppendLine2
     */
    public function transactionsxrelatedItemqprodsubcontsAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODSUBCONTS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODSUBCONTS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemqprodsubcontsAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODSUBCONTS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODSUBCONTS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemqprodsubcontsAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODSUBCONTS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODSUBCONTS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemqprodsubcontsGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODSUBCONTS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODSUBCONTS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemqprodsubcontsGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODSUBCONTS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODSUBCONTS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemqprodsubcontsAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODSUBCONTS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODSUBCONTS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemqprodsubcontsAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODSUBCONTS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODSUBCONTS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemqprodsubcontsAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODSUBCONTS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODSUBCONTS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemqprodsubcontsAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODSUBCONTS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODSUBCONTS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemqprodsubcontsEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODSUBCONTS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/QPRODSUBCONTS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemqprodsubcontsEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/QPRODSUBCONTS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/COMPOSITES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemcompositesApplyaccdisttemplateV1($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/COMPOSITES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/COMPOSITES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemcompositesApplyaccdisttemplateV1Get($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/COMPOSITES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/COMPOSITES/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemcompositesSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/COMPOSITES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/COMPOSITES/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemcompositesSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/COMPOSITES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GL_LINKS
     */
    public function getTRANSACTIONSXRELATED_ITEMGL_LINKSV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GL_LINKS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GL_LINKS/{idt}
     */
    public function getTRANSACTIONSXRELATED_ITEMGL_LINKSByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GL_LINKS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GL_LINKS/AppendLine2
     */
    public function transactionsxrelatedItemglLinksAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GL_LINKS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GL_LINKS/AppendLine2
     */
    public function transactionsxrelatedItemglLinksAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GL_LINKS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GL_LINKS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemglLinksAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GL_LINKS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GL_LINKS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemglLinksAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GL_LINKS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GL_LINKS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemglLinksGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GL_LINKS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GL_LINKS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemglLinksGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GL_LINKS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GL_LINKS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemglLinksAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GL_LINKS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GL_LINKS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemglLinksAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GL_LINKS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GL_LINKS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemglLinksAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GL_LINKS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GL_LINKS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemglLinksAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GL_LINKS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GL_LINKS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemglLinksEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GL_LINKS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GL_LINKS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemglLinksEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GL_LINKS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GL_LINKS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemglLinksApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GL_LINKS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GL_LINKS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemglLinksApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GL_LINKS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GL_LINKS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemglLinksSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GL_LINKS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/GL_LINKS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemglLinksSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/GL_LINKS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/SUPPLIERS
     */
    public function getTRANSACTIONSXRELATED_ITEMSUPPLIERSV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/SUPPLIERS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/SUPPLIERS/{idt}
     */
    public function getTRANSACTIONSXRELATED_ITEMSUPPLIERSByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/SUPPLIERS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/SUPPLIERS/AppendLine2
     */
    public function transactionsxrelatedItemsuppliersAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/SUPPLIERS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/SUPPLIERS/AppendLine2
     */
    public function transactionsxrelatedItemsuppliersAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/SUPPLIERS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/SUPPLIERS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemsuppliersAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/SUPPLIERS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/SUPPLIERS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemsuppliersAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/SUPPLIERS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/SUPPLIERS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemsuppliersGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/SUPPLIERS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/SUPPLIERS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemsuppliersGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/SUPPLIERS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/SUPPLIERS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemsuppliersAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/SUPPLIERS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/SUPPLIERS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemsuppliersAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/SUPPLIERS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/SUPPLIERS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemsuppliersAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/SUPPLIERS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/SUPPLIERS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemsuppliersAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/SUPPLIERS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/SUPPLIERS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemsuppliersEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/SUPPLIERS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/SUPPLIERS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemsuppliersEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/SUPPLIERS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/SUPPLIERS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemsuppliersApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/SUPPLIERS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/SUPPLIERS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemsuppliersApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/SUPPLIERS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/SUPPLIERS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemsuppliersSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/SUPPLIERS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/SUPPLIERS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemsuppliersSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/SUPPLIERS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ADDTAXLIST
     */
    public function getTRANSACTIONSXRELATED_ITEMADDTAXLISTV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ADDTAXLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ADDTAXLIST/{idt}
     */
    public function getTRANSACTIONSXRELATED_ITEMADDTAXLISTByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ADDTAXLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ADDTAXLIST/AppendLine2
     */
    public function transactionsxrelatedItemaddtaxlistAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ADDTAXLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ADDTAXLIST/AppendLine2
     */
    public function transactionsxrelatedItemaddtaxlistAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ADDTAXLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ADDTAXLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemaddtaxlistAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ADDTAXLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/ADDTAXLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemaddtaxlistAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/ADDTAXLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemunitsGetstocklinepriceV1($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemunitsGetstocklinepriceV1Get($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemunitsAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemunitsAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemunitsAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemunitsAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemunitsEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemunitsEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemunitsApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemunitsApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemunitsSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemunitsSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/{id3}/BARCODE_LIST
     */
    public function getTRANSACTIONSXRELATED_ITEMUNITSBARCODE_LISTV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/{$id3}/BARCODE_LIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/{id3}/BARCODE_LIST/{idt}
     */
    public function getTRANSACTIONSXRELATED_ITEMUNITSBARCODE_LISTByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/{$id3}/BARCODE_LIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/{id3}/BARCODE_LIST/AppendLine2
     */
    public function transactionsxrelatedItemunitsbarcodeListAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/{$id3}/BARCODE_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/{id3}/BARCODE_LIST/AppendLine2
     */
    public function transactionsxrelatedItemunitsbarcodeListAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/{$id3}/BARCODE_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/{id3}/BARCODE_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemunitsbarcodeListAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/{$id3}/BARCODE_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/{id3}/BARCODE_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemunitsbarcodeListAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/{$id3}/BARCODE_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/{id3}/BARCODE_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemunitsbarcodeListGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/{$id3}/BARCODE_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/{id3}/BARCODE_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemunitsbarcodeListGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/{$id3}/BARCODE_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/{id3}/BARCODE_LIST/AddLine2/{_index}
     */
    public function transactionsxrelatedItemunitsbarcodeListAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/{$id3}/BARCODE_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/{id3}/BARCODE_LIST/AddLine2/{_index}
     */
    public function transactionsxrelatedItemunitsbarcodeListAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/{$id3}/BARCODE_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/{id3}/BARCODE_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemunitsbarcodeListAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/{$id3}/BARCODE_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/{id3}/BARCODE_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemunitsbarcodeListAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/{$id3}/BARCODE_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/{id3}/BARCODE_LIST/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemunitsbarcodeListEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/{$id3}/BARCODE_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/{id3}/BARCODE_LIST/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemunitsbarcodeListEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/{$id3}/BARCODE_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/{id3}/BARCODE_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemunitsbarcodeListApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/{$id3}/BARCODE_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/{id3}/BARCODE_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemunitsbarcodeListApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/{$id3}/BARCODE_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/{id3}/BARCODE_LIST/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemunitsbarcodeListSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/{$id3}/BARCODE_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/{id3}/BARCODE_LIST/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemunitsbarcodeListSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/{$id3}/BARCODE_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/COMPOSITES
     */
    public function getTRANSACTIONSXRELATED_ITEMCOMPOSITESV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/COMPOSITES";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/COMPOSITES/{idt}
     */
    public function getTRANSACTIONSXRELATED_ITEMCOMPOSITESByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/COMPOSITES/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/COMPOSITES/AppendLine2
     */
    public function transactionsxrelatedItemcompositesAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/COMPOSITES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/COMPOSITES/AppendLine2
     */
    public function transactionsxrelatedItemcompositesAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/COMPOSITES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/COMPOSITES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemcompositesAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/COMPOSITES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/COMPOSITES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemcompositesAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/COMPOSITES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/COMPOSITES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemcompositesGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/COMPOSITES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/COMPOSITES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemcompositesGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/COMPOSITES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/COMPOSITES/AddLine2/{_index}
     */
    public function transactionsxrelatedItemcompositesAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/COMPOSITES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/COMPOSITES/AddLine2/{_index}
     */
    public function transactionsxrelatedItemcompositesAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/COMPOSITES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/COMPOSITES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemcompositesAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/COMPOSITES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/COMPOSITES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemcompositesAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/COMPOSITES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/COMPOSITES/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemcompositesEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/COMPOSITES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/COMPOSITES/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemcompositesEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/COMPOSITES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemcharacteristicsApplyaccdisttemplateV1($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemcharacteristicsApplyaccdisttemplateV1Get($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemcharacteristicsSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemcharacteristicsSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/{id3}/VALUES
     */
    public function getTRANSACTIONSXRELATED_ITEMCHARACTERISTICSVALUESV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/{$id3}/VALUES";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/{id3}/VALUES/{idt}
     */
    public function getTRANSACTIONSXRELATED_ITEMCHARACTERISTICSVALUESByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/{$id3}/VALUES/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/{id3}/VALUES/AppendLine2
     */
    public function transactionsxrelatedItemcharacteristicsvaluesAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/{$id3}/VALUES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/{id3}/VALUES/AppendLine2
     */
    public function transactionsxrelatedItemcharacteristicsvaluesAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/{$id3}/VALUES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/{id3}/VALUES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemcharacteristicsvaluesAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/{$id3}/VALUES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/{id3}/VALUES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemcharacteristicsvaluesAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/{$id3}/VALUES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/{id3}/VALUES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemcharacteristicsvaluesGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/{$id3}/VALUES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/{id3}/VALUES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemcharacteristicsvaluesGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/{$id3}/VALUES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/{id3}/VALUES/AddLine2/{_index}
     */
    public function transactionsxrelatedItemcharacteristicsvaluesAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/{$id3}/VALUES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/{id3}/VALUES/AddLine2/{_index}
     */
    public function transactionsxrelatedItemcharacteristicsvaluesAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/{$id3}/VALUES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/{id3}/VALUES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemcharacteristicsvaluesAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/{$id3}/VALUES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/{id3}/VALUES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemcharacteristicsvaluesAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/{$id3}/VALUES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/{id3}/VALUES/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemcharacteristicsvaluesEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/{$id3}/VALUES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/{id3}/VALUES/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemcharacteristicsvaluesEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/{$id3}/VALUES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/{id3}/VALUES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemcharacteristicsvaluesApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/{$id3}/VALUES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/{id3}/VALUES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemcharacteristicsvaluesApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/{$id3}/VALUES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/{id3}/VALUES/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemcharacteristicsvaluesSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/{$id3}/VALUES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/{id3}/VALUES/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemcharacteristicsvaluesSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/{$id3}/VALUES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DOMINANT_CLASSES
     */
    public function getTRANSACTIONSXRELATED_ITEMDOMINANT_CLASSESV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DOMINANT_CLASSES";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DOMINANT_CLASSES/{idt}
     */
    public function getTRANSACTIONSXRELATED_ITEMDOMINANT_CLASSESByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DOMINANT_CLASSES/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DOMINANT_CLASSES/AppendLine2
     */
    public function transactionsxrelatedItemdominantClassesAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DOMINANT_CLASSES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DOMINANT_CLASSES/AppendLine2
     */
    public function transactionsxrelatedItemdominantClassesAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DOMINANT_CLASSES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DOMINANT_CLASSES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemdominantClassesAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DOMINANT_CLASSES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DOMINANT_CLASSES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemdominantClassesAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DOMINANT_CLASSES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DOMINANT_CLASSES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemdominantClassesGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DOMINANT_CLASSES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DOMINANT_CLASSES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemdominantClassesGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DOMINANT_CLASSES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DOMINANT_CLASSES/AddLine2/{_index}
     */
    public function transactionsxrelatedItemdominantClassesAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DOMINANT_CLASSES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DOMINANT_CLASSES/AddLine2/{_index}
     */
    public function transactionsxrelatedItemdominantClassesAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DOMINANT_CLASSES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DOMINANT_CLASSES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemdominantClassesAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DOMINANT_CLASSES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DOMINANT_CLASSES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemdominantClassesAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DOMINANT_CLASSES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DOMINANT_CLASSES/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemdominantClassesEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DOMINANT_CLASSES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DOMINANT_CLASSES/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemdominantClassesEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DOMINANT_CLASSES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DOMINANT_CLASSES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemdominantClassesApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DOMINANT_CLASSES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DOMINANT_CLASSES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemdominantClassesApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DOMINANT_CLASSES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DOMINANT_CLASSES/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemdominantClassesSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DOMINANT_CLASSES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/DOMINANT_CLASSES/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemdominantClassesSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/DOMINANT_CLASSES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS
     */
    public function getTRANSACTIONSXRELATED_ITEMUNITSV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/{idt}
     */
    public function getTRANSACTIONSXRELATED_ITEMUNITSByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/AppendLine2
     */
    public function transactionsxrelatedItemunitsAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/AppendLine2
     */
    public function transactionsxrelatedItemunitsAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemunitsAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/UNITS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemunitsAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/UNITS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/FACTORY_PARAMS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemfactoryParamsGetstocklinepriceV1($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/FACTORY_PARAMS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/FACTORY_PARAMS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemfactoryParamsGetstocklinepriceV1Get($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/FACTORY_PARAMS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/FACTORY_PARAMS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemfactoryParamsAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/FACTORY_PARAMS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/FACTORY_PARAMS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemfactoryParamsAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/FACTORY_PARAMS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/FACTORY_PARAMS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemfactoryParamsAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/FACTORY_PARAMS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/FACTORY_PARAMS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemfactoryParamsAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/FACTORY_PARAMS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/FACTORY_PARAMS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemfactoryParamsEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/FACTORY_PARAMS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/FACTORY_PARAMS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemfactoryParamsEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/FACTORY_PARAMS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/FACTORY_PARAMS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemfactoryParamsApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/FACTORY_PARAMS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/FACTORY_PARAMS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemfactoryParamsApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/FACTORY_PARAMS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/FACTORY_PARAMS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemfactoryParamsSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/FACTORY_PARAMS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/FACTORY_PARAMS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemfactoryParamsSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/FACTORY_PARAMS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/WH_PARAMS
     */
    public function getTRANSACTIONSXRELATED_ITEMWH_PARAMSV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/WH_PARAMS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/WH_PARAMS/{idt}
     */
    public function getTRANSACTIONSXRELATED_ITEMWH_PARAMSByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/WH_PARAMS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/WH_PARAMS/AppendLine2
     */
    public function transactionsxrelatedItemwhParamsAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/WH_PARAMS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/WH_PARAMS/AppendLine2
     */
    public function transactionsxrelatedItemwhParamsAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/WH_PARAMS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/WH_PARAMS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemwhParamsAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/WH_PARAMS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/WH_PARAMS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemwhParamsAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/WH_PARAMS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/WH_PARAMS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemwhParamsGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/WH_PARAMS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/WH_PARAMS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemwhParamsGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/WH_PARAMS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/WH_PARAMS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemwhParamsAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/WH_PARAMS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/WH_PARAMS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemwhParamsAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/WH_PARAMS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/WH_PARAMS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemwhParamsAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/WH_PARAMS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/WH_PARAMS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemwhParamsAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/WH_PARAMS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/WH_PARAMS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemwhParamsEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/WH_PARAMS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/WH_PARAMS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemwhParamsEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/WH_PARAMS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/WH_PARAMS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemwhParamsApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/WH_PARAMS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/WH_PARAMS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemwhParamsApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/WH_PARAMS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/WH_PARAMS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemwhParamsSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/WH_PARAMS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/WH_PARAMS/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemwhParamsSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/WH_PARAMS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS
     */
    public function getTRANSACTIONSXRELATED_ITEMCHARACTERISTICSV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/{idt}
     */
    public function getTRANSACTIONSXRELATED_ITEMCHARACTERISTICSByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/AppendLine2
     */
    public function transactionsxrelatedItemcharacteristicsAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/AppendLine2
     */
    public function transactionsxrelatedItemcharacteristicsAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemcharacteristicsAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemcharacteristicsAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemcharacteristicsGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemcharacteristicsGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemcharacteristicsAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/AddLine2/{_index}
     */
    public function transactionsxrelatedItemcharacteristicsAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemcharacteristicsAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemcharacteristicsAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemcharacteristicsEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/CHARACTERISTICS/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemcharacteristicsEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/CHARACTERISTICS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/FAREGDEFNFLDLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsfaregdefnfldlistApplyaccdisttemplateV1($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/FAREGDEFNFLDLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/FAREGDEFNFLDLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsfaregdefnfldlistApplyaccdisttemplateV1Get($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/FAREGDEFNFLDLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/FAREGDEFNFLDLIST/SetLineTotals/{_Indx}
     */
    public function transactionsfaregdefnfldlistSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/FAREGDEFNFLDLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/FAREGDEFNFLDLIST/SetLineTotals/{_Indx}
     */
    public function transactionsfaregdefnfldlistSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/FAREGDEFNFLDLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/PREACCLINES
     */
    public function getTRANSACTIONSPREACCLINESV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/PREACCLINES";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/PREACCLINES/{idt}
     */
    public function getTRANSACTIONSPREACCLINESByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/PREACCLINES/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/PREACCLINES/AppendLine2
     */
    public function transactionspreacclinesAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/PREACCLINES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/PREACCLINES/AppendLine2
     */
    public function transactionspreacclinesAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/PREACCLINES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/PREACCLINES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionspreacclinesAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/PREACCLINES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/PREACCLINES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionspreacclinesAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/PREACCLINES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/PREACCLINES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionspreacclinesGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/PREACCLINES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/PREACCLINES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionspreacclinesGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/PREACCLINES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/PREACCLINES/AddLine2/{_index}
     */
    public function transactionspreacclinesAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/PREACCLINES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/PREACCLINES/AddLine2/{_index}
     */
    public function transactionspreacclinesAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/PREACCLINES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/PREACCLINES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionspreacclinesAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/PREACCLINES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/PREACCLINES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionspreacclinesAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/PREACCLINES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/PREACCLINES/EqualizeBalance/{_index}
     */
    public function transactionspreacclinesEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/PREACCLINES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/PREACCLINES/EqualizeBalance/{_index}
     */
    public function transactionspreacclinesEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/PREACCLINES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/PREACCLINES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionspreacclinesApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/PREACCLINES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/PREACCLINES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionspreacclinesApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/PREACCLINES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/PREACCLINES/SetLineTotals/{_Indx}
     */
    public function transactionspreacclinesSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/PREACCLINES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/PREACCLINES/SetLineTotals/{_Indx}
     */
    public function transactionspreacclinesSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/PREACCLINES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM
     */
    public function getTRANSACTIONSXRELATED_ITEMV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{idt}
     */
    public function getTRANSACTIONSXRELATED_ITEMByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/AppendLine2
     */
    public function transactionsxrelatedItemAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/AppendLine2
     */
    public function transactionsxrelatedItemAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsxrelatedItemGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/AddLine2/{_index}
     */
    public function transactionsxrelatedItemAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/AddLine2/{_index}
     */
    public function transactionsxrelatedItemAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsxrelatedItemAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/EqualizeBalance/{_index}
     */
    public function transactionsxrelatedItemEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsxrelatedItemApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/SetLineTotals/{_Indx}
     */
    public function transactionsxrelatedItemSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/FACTORY_PARAMS
     */
    public function getTRANSACTIONSXRELATED_ITEMFACTORY_PARAMSV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/FACTORY_PARAMS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/FACTORY_PARAMS/{idt}
     */
    public function getTRANSACTIONSXRELATED_ITEMFACTORY_PARAMSByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/FACTORY_PARAMS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/FACTORY_PARAMS/AppendLine2
     */
    public function transactionsxrelatedItemfactoryParamsAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/FACTORY_PARAMS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/FACTORY_PARAMS/AppendLine2
     */
    public function transactionsxrelatedItemfactoryParamsAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/FACTORY_PARAMS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/FACTORY_PARAMS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemfactoryParamsAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/FACTORY_PARAMS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/XRELATED_ITEM/{id2}/FACTORY_PARAMS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsxrelatedItemfactoryParamsAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/XRELATED_ITEM/{$id2}/FACTORY_PARAMS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/GENIUSFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsgeniusfldslistGetstocklinepriceV1($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/GENIUSFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/GENIUSFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsgeniusfldslistGetstocklinepriceV1Get($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/GENIUSFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/GENIUSFLDSLIST/AddLine2/{_index}
     */
    public function transactionsgeniusfldslistAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/GENIUSFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/GENIUSFLDSLIST/AddLine2/{_index}
     */
    public function transactionsgeniusfldslistAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/GENIUSFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/GENIUSFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsgeniusfldslistAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/GENIUSFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/GENIUSFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsgeniusfldslistAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/GENIUSFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/GENIUSFLDSLIST/EqualizeBalance/{_index}
     */
    public function transactionsgeniusfldslistEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/GENIUSFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/GENIUSFLDSLIST/EqualizeBalance/{_index}
     */
    public function transactionsgeniusfldslistEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/GENIUSFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/GENIUSFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsgeniusfldslistApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/GENIUSFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/GENIUSFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsgeniusfldslistApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/GENIUSFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/GENIUSFLDSLIST/SetLineTotals/{_Indx}
     */
    public function transactionsgeniusfldslistSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/GENIUSFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/GENIUSFLDSLIST/SetLineTotals/{_Indx}
     */
    public function transactionsgeniusfldslistSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/GENIUSFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DEFNFLDSLIST
     */
    public function getTRANSACTIONSDEFNFLDSLISTV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DEFNFLDSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DEFNFLDSLIST/{idt}
     */
    public function getTRANSACTIONSDEFNFLDSLISTByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DEFNFLDSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DEFNFLDSLIST/AppendLine2
     */
    public function transactionsdefnfldslistAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DEFNFLDSLIST/AppendLine2
     */
    public function transactionsdefnfldslistAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdefnfldslistAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdefnfldslistAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdefnfldslistGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdefnfldslistGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function transactionsdefnfldslistAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function transactionsdefnfldslistAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdefnfldslistAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdefnfldslistAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function transactionsdefnfldslistEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function transactionsdefnfldslistEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdefnfldslistApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdefnfldslistApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function transactionsdefnfldslistSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function transactionsdefnfldslistSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/FAREGDEFNFLDLIST
     */
    public function getTRANSACTIONSFAREGDEFNFLDLISTV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/FAREGDEFNFLDLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/FAREGDEFNFLDLIST/{idt}
     */
    public function getTRANSACTIONSFAREGDEFNFLDLISTByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/FAREGDEFNFLDLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/FAREGDEFNFLDLIST/AppendLine2
     */
    public function transactionsfaregdefnfldlistAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/FAREGDEFNFLDLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/FAREGDEFNFLDLIST/AppendLine2
     */
    public function transactionsfaregdefnfldlistAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/FAREGDEFNFLDLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/FAREGDEFNFLDLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsfaregdefnfldlistAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/FAREGDEFNFLDLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/FAREGDEFNFLDLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsfaregdefnfldlistAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/FAREGDEFNFLDLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/FAREGDEFNFLDLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsfaregdefnfldlistGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/FAREGDEFNFLDLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/FAREGDEFNFLDLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsfaregdefnfldlistGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/FAREGDEFNFLDLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/FAREGDEFNFLDLIST/AddLine2/{_index}
     */
    public function transactionsfaregdefnfldlistAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/FAREGDEFNFLDLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/FAREGDEFNFLDLIST/AddLine2/{_index}
     */
    public function transactionsfaregdefnfldlistAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/FAREGDEFNFLDLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/FAREGDEFNFLDLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsfaregdefnfldlistAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/FAREGDEFNFLDLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/FAREGDEFNFLDLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsfaregdefnfldlistAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/FAREGDEFNFLDLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/FAREGDEFNFLDLIST/EqualizeBalance/{_index}
     */
    public function transactionsfaregdefnfldlistEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/FAREGDEFNFLDLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/FAREGDEFNFLDLIST/EqualizeBalance/{_index}
     */
    public function transactionsfaregdefnfldlistEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/FAREGDEFNFLDLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/QCLIST/{id2}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsqclistvallistApplyaccdisttemplateV1($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/QCLIST/{$id2}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/QCLIST/{id2}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsqclistvallistApplyaccdisttemplateV1Get($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/QCLIST/{$id2}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/QCLIST/{id2}/VALLIST/SetLineTotals/{_Indx}
     */
    public function transactionsqclistvallistSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/QCLIST/{$id2}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/QCLIST/{id2}/VALLIST/SetLineTotals/{_Indx}
     */
    public function transactionsqclistvallistSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/QCLIST/{$id2}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/CAMPAIGN_INFOS
     */
    public function getTRANSACTIONSCAMPAIGN_INFOSV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/{idt}
     */
    public function getTRANSACTIONSCAMPAIGN_INFOSByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/AppendLine2
     */
    public function transactionscampaignInfosAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/AppendLine2
     */
    public function transactionscampaignInfosAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionscampaignInfosAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionscampaignInfosAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionscampaignInfosGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionscampaignInfosGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/AddLine2/{_index}
     */
    public function transactionscampaignInfosAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/AddLine2/{_index}
     */
    public function transactionscampaignInfosAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionscampaignInfosAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionscampaignInfosAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/EqualizeBalance/{_index}
     */
    public function transactionscampaignInfosEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/EqualizeBalance/{_index}
     */
    public function transactionscampaignInfosEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionscampaignInfosApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionscampaignInfosApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/SetLineTotals/{_Indx}
     */
    public function transactionscampaignInfosSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/SetLineTotals/{_Indx}
     */
    public function transactionscampaignInfosSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/ADDTAXLINELIST
     */
    public function getTRANSACTIONSADDTAXLINELISTV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/ADDTAXLINELIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/ADDTAXLINELIST/{idt}
     */
    public function getTRANSACTIONSADDTAXLINELISTByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/ADDTAXLINELIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/ADDTAXLINELIST/AppendLine2
     */
    public function transactionsaddtaxlinelistAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/ADDTAXLINELIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/ADDTAXLINELIST/AppendLine2
     */
    public function transactionsaddtaxlinelistAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/ADDTAXLINELIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/ADDTAXLINELIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsaddtaxlinelistAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/ADDTAXLINELIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/ADDTAXLINELIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsaddtaxlinelistAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/ADDTAXLINELIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/ADDTAXLINELIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsaddtaxlinelistGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/ADDTAXLINELIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/ADDTAXLINELIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsaddtaxlinelistGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/ADDTAXLINELIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/ADDTAXLINELIST/AddLine2/{_index}
     */
    public function transactionsaddtaxlinelistAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/ADDTAXLINELIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/ADDTAXLINELIST/AddLine2/{_index}
     */
    public function transactionsaddtaxlinelistAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/ADDTAXLINELIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/ADDTAXLINELIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsaddtaxlinelistAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/ADDTAXLINELIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/ADDTAXLINELIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsaddtaxlinelistAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/ADDTAXLINELIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/ADDTAXLINELIST/EqualizeBalance/{_index}
     */
    public function transactionsaddtaxlinelistEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/ADDTAXLINELIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/ADDTAXLINELIST/EqualizeBalance/{_index}
     */
    public function transactionsaddtaxlinelistEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/ADDTAXLINELIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/ADDTAXLINELIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsaddtaxlinelistApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/ADDTAXLINELIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/ADDTAXLINELIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsaddtaxlinelistApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/ADDTAXLINELIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/ADDTAXLINELIST/SetLineTotals/{_Indx}
     */
    public function transactionsaddtaxlinelistSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/ADDTAXLINELIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/ADDTAXLINELIST/SetLineTotals/{_Indx}
     */
    public function transactionsaddtaxlinelistSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/ADDTAXLINELIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/GENIUSFLDSLIST
     */
    public function getTRANSACTIONSGENIUSFLDSLISTV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/GENIUSFLDSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/GENIUSFLDSLIST/{idt}
     */
    public function getTRANSACTIONSGENIUSFLDSLISTByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/GENIUSFLDSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/GENIUSFLDSLIST/AppendLine2
     */
    public function transactionsgeniusfldslistAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/GENIUSFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/GENIUSFLDSLIST/AppendLine2
     */
    public function transactionsgeniusfldslistAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/GENIUSFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/GENIUSFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsgeniusfldslistAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/GENIUSFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/GENIUSFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsgeniusfldslistAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/GENIUSFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsslDetailsqclistvallistGetstocklinepriceV1($id1, $id2, $id3, $id4, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsslDetailsqclistvallistGetstocklinepriceV1Get($id, $id1, $id2, $id3, $id4, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AddLine2/{_index}
     */
    public function transactionsdetailsslDetailsqclistvallistAddline2V1($id, $id1, $id2, $id3, $id4, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AddLine2/{_index}
     */
    public function transactionsdetailsslDetailsqclistvallistAddline2V1Post($id1, $id2, $id3, $id4, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsslDetailsqclistvallistAppendserilotsV1($id, $id1, $id2, $id3, $id4, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsslDetailsqclistvallistAppendserilotsV1Post($id1, $id2, $id3, $id4, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/EqualizeBalance/{_index}
     */
    public function transactionsdetailsslDetailsqclistvallistEqualizebalanceV1($id, $id1, $id2, $id3, $id4, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/EqualizeBalance/{_index}
     */
    public function transactionsdetailsslDetailsqclistvallistEqualizebalanceV1Post($id1, $id2, $id3, $id4, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsslDetailsqclistvallistApplyaccdisttemplateV1($id, $id1, $id2, $id3, $id4, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsslDetailsqclistvallistApplyaccdisttemplateV1Post($id1, $id2, $id3, $id4, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsslDetailsqclistvallistSetlinetotalsV1($id, $id1, $id2, $id3, $id4, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsslDetailsqclistvallistSetlinetotalsV1Post($id1, $id2, $id3, $id4, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/QCLIST
     */
    public function getTRANSACTIONSQCLISTV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/QCLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/QCLIST/{idt}
     */
    public function getTRANSACTIONSQCLISTByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/QCLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/QCLIST/AppendLine2
     */
    public function transactionsqclistAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/QCLIST/AppendLine2
     */
    public function transactionsqclistAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsqclistAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsqclistAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsqclistGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsqclistGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/QCLIST/AddLine2/{_index}
     */
    public function transactionsqclistAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/QCLIST/AddLine2/{_index}
     */
    public function transactionsqclistAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsqclistAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsqclistAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/QCLIST/EqualizeBalance/{_index}
     */
    public function transactionsqclistEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/QCLIST/EqualizeBalance/{_index}
     */
    public function transactionsqclistEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsqclistApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsqclistApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/QCLIST/SetLineTotals/{_Indx}
     */
    public function transactionsqclistSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/QCLIST/SetLineTotals/{_Indx}
     */
    public function transactionsqclistSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/QCLIST/{id2}/VALLIST
     */
    public function getTRANSACTIONSQCLISTVALLISTV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/QCLIST/{$id2}/VALLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/QCLIST/{id2}/VALLIST/{idt}
     */
    public function getTRANSACTIONSQCLISTVALLISTByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/QCLIST/{$id2}/VALLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/QCLIST/{id2}/VALLIST/AppendLine2
     */
    public function transactionsqclistvallistAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/QCLIST/{$id2}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/QCLIST/{id2}/VALLIST/AppendLine2
     */
    public function transactionsqclistvallistAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/QCLIST/{$id2}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/QCLIST/{id2}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsqclistvallistAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/QCLIST/{$id2}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/QCLIST/{id2}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsqclistvallistAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/QCLIST/{$id2}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/QCLIST/{id2}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsqclistvallistGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/QCLIST/{$id2}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/QCLIST/{id2}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsqclistvallistGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/QCLIST/{$id2}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/QCLIST/{id2}/VALLIST/AddLine2/{_index}
     */
    public function transactionsqclistvallistAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/QCLIST/{$id2}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/QCLIST/{id2}/VALLIST/AddLine2/{_index}
     */
    public function transactionsqclistvallistAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/QCLIST/{$id2}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/QCLIST/{id2}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsqclistvallistAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/QCLIST/{$id2}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/QCLIST/{id2}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsqclistvallistAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/QCLIST/{$id2}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/QCLIST/{id2}/VALLIST/EqualizeBalance/{_index}
     */
    public function transactionsqclistvallistEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/QCLIST/{$id2}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/QCLIST/{id2}/VALLIST/EqualizeBalance/{_index}
     */
    public function transactionsqclistvallistEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/QCLIST/{$id2}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsfaInfoApplyaccdisttemplateV1($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsfaInfoApplyaccdisttemplateV1Get($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsfaInfoSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsfaInfoSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS
     */
    public function getTRANSACTIONSDETAILSSL_DETAILSV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{idt}
     */
    public function getTRANSACTIONSDETAILSSL_DETAILSByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/AppendLine2
     */
    public function transactionsdetailsslDetailsAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/AppendLine2
     */
    public function transactionsdetailsslDetailsAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsslDetailsAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsslDetailsAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsslDetailsGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsslDetailsGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/AddLine2/{_index}
     */
    public function transactionsdetailsslDetailsAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/AddLine2/{_index}
     */
    public function transactionsdetailsslDetailsAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsslDetailsAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsslDetailsAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/EqualizeBalance/{_index}
     */
    public function transactionsdetailsslDetailsEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/EqualizeBalance/{_index}
     */
    public function transactionsdetailsslDetailsEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsslDetailsApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsslDetailsApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsslDetailsSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsslDetailsSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST
     */
    public function getTRANSACTIONSDETAILSSL_DETAILSQCLISTV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{idt}
     */
    public function getTRANSACTIONSDETAILSSL_DETAILSQCLISTByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/AppendLine2
     */
    public function transactionsdetailsslDetailsqclistAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/AppendLine2
     */
    public function transactionsdetailsslDetailsqclistAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsslDetailsqclistAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsslDetailsqclistAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsslDetailsqclistGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsslDetailsqclistGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/AddLine2/{_index}
     */
    public function transactionsdetailsslDetailsqclistAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/AddLine2/{_index}
     */
    public function transactionsdetailsslDetailsqclistAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsslDetailsqclistAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsslDetailsqclistAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/EqualizeBalance/{_index}
     */
    public function transactionsdetailsslDetailsqclistEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/EqualizeBalance/{_index}
     */
    public function transactionsdetailsslDetailsqclistEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsslDetailsqclistApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsslDetailsqclistApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsslDetailsqclistSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsslDetailsqclistSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST
     */
    public function getTRANSACTIONSDETAILSSL_DETAILSQCLISTVALLISTV1($id, $id1, $id2, $id3, $id4, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/{idt}
     */
    public function getTRANSACTIONSDETAILSSL_DETAILSQCLISTVALLISTByIdV1($id, $id1, $id2, $id3, $id4, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AppendLine2
     */
    public function transactionsdetailsslDetailsqclistvallistAppendline2V1($id, $id1, $id2, $id3, $id4, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AppendLine2
     */
    public function transactionsdetailsslDetailsqclistvallistAppendline2V1Post($id1, $id2, $id3, $id4, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsslDetailsqclistvallistAddserilotsV1($id, $id1, $id2, $id3, $id4, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsslDetailsqclistvallistAddserilotsV1Post($id1, $id2, $id3, $id4, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsslDetailsqclistvallistGetstocklinepriceV1($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsslDetailsqclistvallistGetstocklinepriceV1Get($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AddLine2/{_index}
     */
    public function transactionsslDetailsqclistvallistAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AddLine2/{_index}
     */
    public function transactionsslDetailsqclistvallistAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsslDetailsqclistvallistAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsslDetailsqclistvallistAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/EqualizeBalance/{_index}
     */
    public function transactionsslDetailsqclistvallistEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/EqualizeBalance/{_index}
     */
    public function transactionsslDetailsqclistvallistEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsslDetailsqclistvallistApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsslDetailsqclistvallistApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/SetLineTotals/{_Indx}
     */
    public function transactionsslDetailsqclistvallistSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/SetLineTotals/{_Indx}
     */
    public function transactionsslDetailsqclistvallistSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS
     */
    public function getTRANSACTIONSDETAILSV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{idt}
     */
    public function getTRANSACTIONSDETAILSByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/AppendLine2
     */
    public function transactionsdetailsAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/AppendLine2
     */
    public function transactionsdetailsAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/AddLine2/{_index}
     */
    public function transactionsdetailsAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/AddLine2/{_index}
     */
    public function transactionsdetailsAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/EqualizeBalance/{_index}
     */
    public function transactionsdetailsEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/EqualizeBalance/{_index}
     */
    public function transactionsdetailsEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO
     */
    public function getTRANSACTIONSDETAILSFA_INFOV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/{idt}
     */
    public function getTRANSACTIONSDETAILSFA_INFOByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/AppendLine2
     */
    public function transactionsdetailsfaInfoAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/AppendLine2
     */
    public function transactionsdetailsfaInfoAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsfaInfoAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsfaInfoAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsfaInfoGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsfaInfoGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/AddLine2/{_index}
     */
    public function transactionsdetailsfaInfoAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/AddLine2/{_index}
     */
    public function transactionsdetailsfaInfoAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsfaInfoAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsfaInfoAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/EqualizeBalance/{_index}
     */
    public function transactionsdetailsfaInfoEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/EqualizeBalance/{_index}
     */
    public function transactionsdetailsfaInfoEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/FA_INFO/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsfaInfoApplyaccdisttemplateV1($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/FA_INFO/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/FA_INFO/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsfaInfoApplyaccdisttemplateV1Get($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/FA_INFO/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/FA_INFO/SetLineTotals/{_Indx}
     */
    public function transactionsfaInfoSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/FA_INFO/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/FA_INFO/SetLineTotals/{_Indx}
     */
    public function transactionsfaInfoSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/FA_INFO/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS
     */
    public function getTRANSACTIONSSL_DETAILSV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{idt}
     */
    public function getTRANSACTIONSSL_DETAILSByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/AppendLine2
     */
    public function transactionsslDetailsAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/SL_DETAILS/AppendLine2
     */
    public function transactionsslDetailsAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/SL_DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsslDetailsAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/SL_DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsslDetailsAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/SL_DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsslDetailsGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/SL_DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsslDetailsGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/SL_DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/AddLine2/{_index}
     */
    public function transactionsslDetailsAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/SL_DETAILS/AddLine2/{_index}
     */
    public function transactionsslDetailsAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/SL_DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsslDetailsAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/SL_DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsslDetailsAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/SL_DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/EqualizeBalance/{_index}
     */
    public function transactionsslDetailsEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/SL_DETAILS/EqualizeBalance/{_index}
     */
    public function transactionsslDetailsEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/SL_DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsslDetailsApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/SL_DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsslDetailsApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/SL_DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/SetLineTotals/{_Indx}
     */
    public function transactionsslDetailsSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/SL_DETAILS/SetLineTotals/{_Indx}
     */
    public function transactionsslDetailsSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/SL_DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST
     */
    public function getTRANSACTIONSSL_DETAILSQCLISTV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{idt}
     */
    public function getTRANSACTIONSSL_DETAILSQCLISTByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/AppendLine2
     */
    public function transactionsslDetailsqclistAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/AppendLine2
     */
    public function transactionsslDetailsqclistAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsslDetailsqclistAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsslDetailsqclistAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsslDetailsqclistGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsslDetailsqclistGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/AddLine2/{_index}
     */
    public function transactionsslDetailsqclistAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/AddLine2/{_index}
     */
    public function transactionsslDetailsqclistAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsslDetailsqclistAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsslDetailsqclistAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/EqualizeBalance/{_index}
     */
    public function transactionsslDetailsqclistEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/EqualizeBalance/{_index}
     */
    public function transactionsslDetailsqclistEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsslDetailsqclistApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsslDetailsqclistApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/SetLineTotals/{_Indx}
     */
    public function transactionsslDetailsqclistSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/SetLineTotals/{_Indx}
     */
    public function transactionsslDetailsqclistSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST
     */
    public function getTRANSACTIONSSL_DETAILSQCLISTVALLISTV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/{idt}
     */
    public function getTRANSACTIONSSL_DETAILSQCLISTVALLISTByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AppendLine2
     */
    public function transactionsslDetailsqclistvallistAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AppendLine2
     */
    public function transactionsslDetailsqclistvallistAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsslDetailsqclistvallistAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsslDetailsqclistvallistAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /salesDispatches/readwithbodyparamters
     */
    public function postReadWithBodyParametersV1(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/readwithbodyparamters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /salesDispatches/{id}/readwithbodyparamters
     */
    public function postReadByIdWithBodyParametersV1($id, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/readwithbodyparamters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS
     */
    public function getTRANSACTIONSV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{idt}
     */
    public function getTRANSACTIONSByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/AppendLine2
     */
    public function transactionsAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/AppendLine2
     */
    public function transactionsAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/AddLine2/{_index}
     */
    public function transactionsAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/AddLine2/{_index}
     */
    public function transactionsAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/EqualizeBalance/{_index}
     */
    public function transactionsEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/EqualizeBalance/{_index}
     */
    public function transactionsEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/SetLineTotals/{_Indx}
     */
    public function transactionsSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/SetLineTotals/{_Indx}
     */
    public function transactionsSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/FA_INFO
     */
    public function getTRANSACTIONSFA_INFOV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/FA_INFO";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/FA_INFO/{idt}
     */
    public function getTRANSACTIONSFA_INFOByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/FA_INFO/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/FA_INFO/AppendLine2
     */
    public function transactionsfaInfoAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/FA_INFO/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/FA_INFO/AppendLine2
     */
    public function transactionsfaInfoAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/FA_INFO/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/FA_INFO/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsfaInfoAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/FA_INFO/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/FA_INFO/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsfaInfoAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/FA_INFO/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/FA_INFO/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsfaInfoGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/FA_INFO/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/FA_INFO/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsfaInfoGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/FA_INFO/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/FA_INFO/AddLine2/{_index}
     */
    public function transactionsfaInfoAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/FA_INFO/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/FA_INFO/AddLine2/{_index}
     */
    public function transactionsfaInfoAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/FA_INFO/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/FA_INFO/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsfaInfoAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/FA_INFO/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/FA_INFO/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsfaInfoAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/FA_INFO/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /salesDispatches/{id}/TRANSACTIONS/{id1}/FA_INFO/EqualizeBalance/{_index}
     */
    public function transactionsfaInfoEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/{$id}/TRANSACTIONS/{$id1}/FA_INFO/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /salesDispatches/TRANSACTIONS/{id1}/FA_INFO/EqualizeBalance/{_index}
     */
    public function transactionsfaInfoEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/salesDispatches/TRANSACTIONS/{$id1}/FA_INFO/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    public function searchByAuxilCode($auxilCode)
    {
        return $this->getAll(['q' => "AUXIL_CODE like '{$auxilCode}*'"]);
    }

    public function searchByEarchivedetrName($earchivedetrName)
    {
        return $this->getAll(['q' => "EARCHIVEDETR_NAME like '{$earchivedetrName}*'"]);
    }

    public function searchByEinvoiceDescription($einvoiceDescription)
    {
        return $this->getAll(['q' => "EINVOICE_DESCRIPTION like '{$einvoiceDescription}*'"]);
    }

    public function searchBynumber($number)
    {
        return $this->getAll(['q' => "NUMBER eq {$number}"]);
    }

    public function searchByType($type)
    {
        return $this->getAll(['q' => "TYPE eq {$type}"]);
    }

    /**
     * Retrieves analytics data for SalesDispatches entities.
     */
    public function getAnalytics()
    {
        return ['total' => $this->getCount()];
    }

    /**
     * Retrieves the total count of SalesDispatches entities.
     */
    public function getCount()
    {
        $resp = $this->getAll(['count' => true]);
        return (int) ($resp->totalCount ?? 0);
    }

    /**
     * Retrieves database column information for the SalesDispatches entity.
     */
    public function getDbColumns()
    {
        $path = "{$this->endpoint}/dbcolumns";
        return $this->request('GET', $path);
    }

    /**
     * Enables change tracking for the SalesDispatches entity.
     */
    public function track()
    {
        $path = "{$this->endpoint}/track";
        return $this->request('GET', $path);
    }

    /**
     * Disables change tracking for the SalesDispatches entity.
     */
    public function untrack()
    {
        $path = "{$this->endpoint}/untrack";
        return $this->request('GET', $path);
    }

    /**
     * Checks the change tracking status for the SalesDispatches entity.
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
