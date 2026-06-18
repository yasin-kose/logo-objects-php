<?php

declare(strict_types=1);

namespace LogoObjects\Clients\purchaseProposalContracts;

use LogoObjects\Http\BaseApiClient;
use LogoObjects\Types\ApiResponse;
use LogoObjects\Utils\QueryBuilder;

/**
 * PurchaseProposalContractsClient - /purchaseProposalContracts endpoint'i icin CRUD ve ozel islemler.
 */
class PurchaseProposalContractsClient extends BaseApiClient
{
    /** @var string */
    protected $endpoint = '/purchaseProposalContracts';

    /**
     * Retrieves a paginated list of PurchaseProposalContracts entities.
     */
    public function getAll(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "{$this->endpoint}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return ApiResponse::of($this->request('GET', $path), \LogoObjects\Clients\purchaseProposalContracts\PurchaseProposalContracts::class);
    }

    /**
     * Retrieves a single PurchaseProposalContracts entity by its internal reference ID.
     */
    public function getById($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "{$this->endpoint}/{$id}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return \LogoObjects\Clients\purchaseProposalContracts\PurchaseProposalContracts::fromArray($this->request('GET', $path));
    }

    /**
     * Creates a new PurchaseProposalContracts entity.
     */
    public function create(array $data)
    {
        $path = "{$this->endpoint}";
        return \LogoObjects\Clients\purchaseProposalContracts\PurchaseProposalContracts::fromArray($this->request('POST', $path, $data));
    }

    /**
     * Updates an existing PurchaseProposalContracts entity.
     */
    public function update($id, array $data)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\purchaseProposalContracts\PurchaseProposalContracts::fromArray($this->request('PUT', $path, $data));
    }

    /**
     * Partially updates a PurchaseProposalContracts entity.
     */
    public function patch($id, array $data)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\purchaseProposalContracts\PurchaseProposalContracts::fromArray($this->request('PATCH', $path, $data));
    }

    /**
     * Deletes a PurchaseProposalContracts entity by its internal reference ID.
     */
    public function delete($id)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\purchaseProposalContracts\PurchaseProposalContracts::fromArray($this->request('DELETE', $path));
    }

    /**
     * Searches for PurchaseProposalContracts entities based on a set of criteria.
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
     * Corresponds to GET /purchaseProposalContracts/{id}/DeleteCampaign
     */
    public function deleteCampaignV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/DeleteCampaign";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/DeleteCampaign
     */
    public function deleteCampaignV1Post(array $data)
    {
        $path = "/purchaseProposalContracts/DeleteCampaign";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/SetClientInfo
     */
    public function setClientInfoV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/SetClientInfo";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/SetClientInfo
     */
    public function setClientInfoV1Post(array $data)
    {
        $path = "/purchaseProposalContracts/SetClientInfo";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/GetRelevantCampaigns
     */
    public function getRelevantCampaignsV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/GetRelevantCampaigns";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/GetRelevantCampaigns
     */
    public function getRelevantCampaignsV1Post(array $data)
    {
        $path = "/purchaseProposalContracts/GetRelevantCampaigns";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/ApplyCampaignSpecific/{_refList}
     */
    public function applyCampaignSpecificV1($id, string $refList, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/ApplyCampaignSpecific/{$refList}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/ApplyCampaignSpecific/{_refList}
     */
    public function applyCampaignSpecificV1Post(string $refList, array $data)
    {
        $path = "/purchaseProposalContracts/ApplyCampaignSpecific/{$refList}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/ImportImage/{_ImgPath}/{_Indx}
     */
    public function importImageV1($id, string $ImgPath, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/ImportImage/{$ImgPath}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/ImportImage/{_ImgPath}/{_Indx}
     */
    public function importImageV1Post(string $ImgPath, string $Indx, array $data)
    {
        $path = "/purchaseProposalContracts/ImportImage/{$ImgPath}/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/ExportBase64EncodedImage/{_Indx}
     */
    public function exportBase64EncodedImageV1($id, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/ExportBase64EncodedImage/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/ExportBase64EncodedImage/{_Indx}
     */
    public function exportBase64EncodedImageV1Post(string $Indx, array $data)
    {
        $path = "/purchaseProposalContracts/ExportBase64EncodedImage/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/ImportBase64EncodedImage/{_base64EncodedImage}/{_imageType}/{_Indx}
     */
    public function importBase64EncodedImageV1($id, string $base64EncodedImage, string $imageType, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/ImportBase64EncodedImage/{$base64EncodedImage}/{$imageType}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/ImportBase64EncodedImage/{_base64EncodedImage}/{_imageType}/{_Indx}
     */
    public function importBase64EncodedImageV1Post(string $base64EncodedImage, string $imageType, string $Indx, array $data)
    {
        $path = "/purchaseProposalContracts/ImportBase64EncodedImage/{$base64EncodedImage}/{$imageType}/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function defnfldslistApplyaccdisttemplateV1(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function defnfldslistApplyaccdisttemplateV1Get($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function defnfldslistSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function defnfldslistSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/ExportToXML/{_RootKey}/{_FileName}
     */
    public function exportToXMLV1($id, string $RootKey, string $FileName, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/ExportToXML/{$RootKey}/{$FileName}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/ExportToXML/{_RootKey}/{_FileName}
     */
    public function exportToXMLV1Post(string $RootKey, string $FileName, array $data)
    {
        $path = "/purchaseProposalContracts/ExportToXML/{$RootKey}/{$FileName}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/ImportFromXMLFile/{_RootKey}/{_FileName}
     */
    public function importFromXMLFileV1($id, string $RootKey, string $FileName, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/ImportFromXMLFile/{$RootKey}/{$FileName}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/ImportFromXMLFile/{_RootKey}/{_FileName}
     */
    public function importFromXMLFileV1Post(string $RootKey, string $FileName, array $data)
    {
        $path = "/purchaseProposalContracts/ImportFromXMLFile/{$RootKey}/{$FileName}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/CreateCompositeLines
     */
    public function createCompositeLinesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/CreateCompositeLines";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/CreateCompositeLines
     */
    public function createCompositeLinesV1Post(array $data)
    {
        $path = "/purchaseProposalContracts/CreateCompositeLines";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/FormSeriLotLines/{_lOMtd}
     */
    public function formSeriLotLinesV1($id, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/FormSeriLotLines/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/FormSeriLotLines/{_lOMtd}
     */
    public function formSeriLotLinesV1Post($lOMtd, array $data)
    {
        $path = "/purchaseProposalContracts/FormSeriLotLines/{$lOMtd}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/ApplyCampaign
     */
    public function applyCampaignV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/ApplyCampaign";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/ApplyCampaign
     */
    public function applyCampaignV1Post(array $data)
    {
        $path = "/purchaseProposalContracts/ApplyCampaign";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/ApplyRePayPln/{_lineNr}/{_rePayPCode}
     */
    public function applyRePayPlnV1($id, $lineNr, string $rePayPCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/ApplyRePayPln/{$lineNr}/{$rePayPCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/ApplyRePayPln/{_lineNr}/{_rePayPCode}
     */
    public function applyRePayPlnV1Post($lineNr, string $rePayPCode, array $data)
    {
        $path = "/purchaseProposalContracts/ApplyRePayPln/{$lineNr}/{$rePayPCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/ApplyRePayPlnForInv/{_rePayCode}
     */
    public function applyRePayPlnForInvV1($id, string $rePayCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/ApplyRePayPlnForInv/{$rePayCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/ApplyRePayPlnForInv/{_rePayCode}
     */
    public function applyRePayPlnForInvV1Post(string $rePayCode, array $data)
    {
        $path = "/purchaseProposalContracts/ApplyRePayPlnForInv/{$rePayCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/ImportFromXmlStr/{_RootKey}/{_XmlStr}
     */
    public function importFromXmlStrV1($id, string $RootKey, string $XmlStr, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/ImportFromXmlStr/{$RootKey}/{$XmlStr}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/ImportFromXmlStr/{_RootKey}/{_XmlStr}
     */
    public function importFromXmlStrV1Post(string $RootKey, string $XmlStr, array $data)
    {
        $path = "/purchaseProposalContracts/ImportFromXmlStr/{$RootKey}/{$XmlStr}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/ExportToXmlStr/{_RootKey}
     */
    public function exportToXmlStrV1($id, string $RootKey, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/ExportToXmlStr/{$RootKey}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/ExportToXmlStr/{_RootKey}
     */
    public function exportToXmlStrV1Post(string $RootKey, array $data)
    {
        $path = "/purchaseProposalContracts/ExportToXmlStr/{$RootKey}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/ApplyCondition
     */
    public function applyConditionV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/ApplyCondition";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/ApplyCondition
     */
    public function applyConditionV1Post(array $data)
    {
        $path = "/purchaseProposalContracts/ApplyCondition";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/ExportImage/{_Indx}/{_ImgPath}
     */
    public function exportImageV1($id, string $Indx, string $ImgPath, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/ExportImage/{$Indx}/{$ImgPath}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/ExportImage/{_Indx}/{_ImgPath}
     */
    public function exportImageV1Post(string $Indx, string $ImgPath, array $data)
    {
        $path = "/purchaseProposalContracts/ExportImage/{$Indx}/{$ImgPath}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/ReCalculate
     */
    public function reCalculateV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/ReCalculate";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/ReCalculate
     */
    public function reCalculateV1Post(array $data)
    {
        $path = "/purchaseProposalContracts/ReCalculate";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/FillAccCodes
     */
    public function fillAccCodesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/FillAccCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/FillAccCodes
     */
    public function fillAccCodesV1Post(array $data)
    {
        $path = "/purchaseProposalContracts/FillAccCodes";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/ApplyADiscount/{_discCode}
     */
    public function applyADiscountV1($id, string $discCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/ApplyADiscount/{$discCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/ApplyADiscount/{_discCode}
     */
    public function applyADiscountV1Post(string $discCode, array $data)
    {
        $path = "/purchaseProposalContracts/ApplyADiscount/{$discCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/SetDefIntValue/{_fldName}/{_fType}/{_fSz}/{_Value}
     */
    public function setDefIntValueV1($id, string $fldName, $fType, $fSz, $Value, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/SetDefIntValue/{$fldName}/{$fType}/{$fSz}/{$Value}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/SetDefIntValue/{_fldName}/{_fType}/{_fSz}/{_Value}
     */
    public function setDefIntValueV1Post(string $fldName, $fType, $fSz, $Value, array $data)
    {
        $path = "/purchaseProposalContracts/SetDefIntValue/{$fldName}/{$fType}/{$fSz}/{$Value}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/EqualizePayAmnt
     */
    public function equalizePayAmntV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/EqualizePayAmnt";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/EqualizePayAmnt
     */
    public function equalizePayAmntV1Post(array $data)
    {
        $path = "/purchaseProposalContracts/EqualizePayAmnt";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/AddSeriLotsForKs/{_slCode}/{_amount}/{_IOMtd}
     */
    public function addSeriLotsForKsV1($id, string $slCode, $amount, $IOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/AddSeriLotsForKs/{$slCode}/{$amount}/{$IOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/AddSeriLotsForKs/{_slCode}/{_amount}/{_IOMtd}
     */
    public function addSeriLotsForKsV1Post(string $slCode, $amount, $IOMtd, array $data)
    {
        $path = "/purchaseProposalContracts/AddSeriLotsForKs/{$slCode}/{$amount}/{$IOMtd}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/FillSMMACCCodes
     */
    public function fillSMMACCCodesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/FillSMMACCCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/FillSMMACCCodes
     */
    public function fillSMMACCCodesV1Post(array $data)
    {
        $path = "/purchaseProposalContracts/FillSMMACCCodes";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/AttachADespatchByLRef/{_dispref}
     */
    public function attachADespatchByLRefV1($id, $dispref, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/AttachADespatchByLRef/{$dispref}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/AttachADespatchByLRef/{_dispref}
     */
    public function attachADespatchByLRefV1Post($dispref, array $data)
    {
        $path = "/purchaseProposalContracts/AttachADespatchByLRef/{$dispref}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/AttachADespatchByFicheNo/{_dispFicheNo}
     */
    public function attachADespatchByFicheNoV1($id, string $dispFicheNo, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/AttachADespatchByFicheNo/{$dispFicheNo}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/AttachADespatchByFicheNo/{_dispFicheNo}
     */
    public function attachADespatchByFicheNoV1Post(string $dispFicheNo, array $data)
    {
        $path = "/purchaseProposalContracts/AttachADespatchByFicheNo/{$dispFicheNo}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/{id1}/DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsGetstocklinepriceV1($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/{$id1}/DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsGetstocklinepriceV1Get($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/DETAILS/AddLine2/{_index}
     */
    public function transactionsdetailsAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/{id1}/DETAILS/AddLine2/{_index}
     */
    public function transactionsdetailsAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/{$id1}/DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/{id1}/DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/{$id1}/DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/DETAILS/EqualizeBalance/{_index}
     */
    public function transactionsdetailsEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/{id1}/DETAILS/EqualizeBalance/{_index}
     */
    public function transactionsdetailsEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/{$id1}/DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/{id1}/DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/{$id1}/DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/DETAILS/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/{id1}/DETAILS/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/{$id1}/DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/DEFNFLDS
     */
    public function getTRANSACTIONSDEFNFLDSV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/DEFNFLDS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/DEFNFLDS/{idt}
     */
    public function getTRANSACTIONSDEFNFLDSByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/DEFNFLDS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/DEFNFLDS/AppendLine2
     */
    public function transactionsdefnfldsAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/DEFNFLDS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/{id1}/DEFNFLDS/AppendLine2
     */
    public function transactionsdefnfldsAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/{$id1}/DEFNFLDS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/DEFNFLDS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdefnfldsAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/DEFNFLDS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/{id1}/DEFNFLDS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdefnfldsAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/{$id1}/DEFNFLDS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/DEFNFLDS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdefnfldsGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/DEFNFLDS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/{id1}/DEFNFLDS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdefnfldsGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/{$id1}/DEFNFLDS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/DEFNFLDS/AddLine2/{_index}
     */
    public function transactionsdefnfldsAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/DEFNFLDS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/{id1}/DEFNFLDS/AddLine2/{_index}
     */
    public function transactionsdefnfldsAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/{$id1}/DEFNFLDS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/DEFNFLDS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdefnfldsAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/DEFNFLDS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/{id1}/DEFNFLDS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdefnfldsAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/{$id1}/DEFNFLDS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/DEFNFLDS/EqualizeBalance/{_index}
     */
    public function transactionsdefnfldsEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/DEFNFLDS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/{id1}/DEFNFLDS/EqualizeBalance/{_index}
     */
    public function transactionsdefnfldsEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/{$id1}/DEFNFLDS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/DEFNFLDS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdefnfldsApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/DEFNFLDS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/{id1}/DEFNFLDS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdefnfldsApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/{$id1}/DEFNFLDS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/DEFNFLDS/SetLineTotals/{_Indx}
     */
    public function transactionsdefnfldsSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/DEFNFLDS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/{id1}/DEFNFLDS/SetLineTotals/{_Indx}
     */
    public function transactionsdefnfldsSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/{$id1}/DEFNFLDS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/DEFNFLDSLIST
     */
    public function getDEFNFLDSLISTV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/DEFNFLDSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/DEFNFLDSLIST/{idt}
     */
    public function getDEFNFLDSLISTByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/DEFNFLDSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/DEFNFLDSLIST/AppendLine2
     */
    public function defnfldslistAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/DEFNFLDSLIST/AppendLine2
     */
    public function defnfldslistAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function defnfldslistAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function defnfldslistAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function defnfldslistGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function defnfldslistGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function defnfldslistAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function defnfldslistAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function defnfldslistAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function defnfldslistAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function defnfldslistEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function defnfldslistEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/PAYMENT_LIST/{id1}/DISCTRLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function paymentListdisctrlistApplyaccdisttemplateV1($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/PAYMENT_LIST/{$id1}/DISCTRLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/PAYMENT_LIST/{id1}/DISCTRLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function paymentListdisctrlistApplyaccdisttemplateV1Get($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/PAYMENT_LIST/{$id1}/DISCTRLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/PAYMENT_LIST/{id1}/DISCTRLIST/SetLineTotals/{_Indx}
     */
    public function paymentListdisctrlistSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/PAYMENT_LIST/{$id1}/DISCTRLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/PAYMENT_LIST/{id1}/DISCTRLIST/SetLineTotals/{_Indx}
     */
    public function paymentListdisctrlistSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/PAYMENT_LIST/{$id1}/DISCTRLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS
     */
    public function getTRANSACTIONSV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{idt}
     */
    public function getTRANSACTIONSByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/AppendLine2
     */
    public function transactionsAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/AppendLine2
     */
    public function transactionsAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/AddLine2/{_index}
     */
    public function transactionsAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/AddLine2/{_index}
     */
    public function transactionsAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/EqualizeBalance/{_index}
     */
    public function transactionsEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/EqualizeBalance/{_index}
     */
    public function transactionsEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/SetLineTotals/{_Indx}
     */
    public function transactionsSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/SetLineTotals/{_Indx}
     */
    public function transactionsSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/CAMPAIGN_INFOS
     */
    public function getTRANSACTIONSCAMPAIGN_INFOSV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/{idt}
     */
    public function getTRANSACTIONSCAMPAIGN_INFOSByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/AppendLine2
     */
    public function transactionscampaignInfosAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/AppendLine2
     */
    public function transactionscampaignInfosAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionscampaignInfosAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionscampaignInfosAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionscampaignInfosGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionscampaignInfosGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/AddLine2/{_index}
     */
    public function transactionscampaignInfosAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/AddLine2/{_index}
     */
    public function transactionscampaignInfosAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionscampaignInfosAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionscampaignInfosAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/EqualizeBalance/{_index}
     */
    public function transactionscampaignInfosEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/EqualizeBalance/{_index}
     */
    public function transactionscampaignInfosEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionscampaignInfosApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionscampaignInfosApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/SetLineTotals/{_Indx}
     */
    public function transactionscampaignInfosSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/{id1}/CAMPAIGN_INFOS/SetLineTotals/{_Indx}
     */
    public function transactionscampaignInfosSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/{$id1}/CAMPAIGN_INFOS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/DETAILS
     */
    public function getTRANSACTIONSDETAILSV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/DETAILS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/DETAILS/{idt}
     */
    public function getTRANSACTIONSDETAILSByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/DETAILS/AppendLine2
     */
    public function transactionsdetailsAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/{id1}/DETAILS/AppendLine2
     */
    public function transactionsdetailsAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/{$id1}/DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/TRANSACTIONS/{id1}/DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/TRANSACTIONS/{$id1}/DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/TRANSACTIONS/{id1}/DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/TRANSACTIONS/{$id1}/DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/readwithbodyparamters
     */
    public function postReadWithBodyParametersV1(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/readwithbodyparamters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/{id}/readwithbodyparamters
     */
    public function postReadByIdWithBodyParametersV1($id, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/readwithbodyparamters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/PAYMENT_LIST
     */
    public function getPAYMENT_LISTV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/PAYMENT_LIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/PAYMENT_LIST/{idt}
     */
    public function getPAYMENT_LISTByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/PAYMENT_LIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/PAYMENT_LIST/AppendLine2
     */
    public function paymentListAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/PAYMENT_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/PAYMENT_LIST/AppendLine2
     */
    public function paymentListAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/PAYMENT_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/PAYMENT_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function paymentListAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/PAYMENT_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/PAYMENT_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function paymentListAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/PAYMENT_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/PAYMENT_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function paymentListGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/PAYMENT_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/PAYMENT_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function paymentListGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/PAYMENT_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/PAYMENT_LIST/AddLine2/{_index}
     */
    public function paymentListAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/PAYMENT_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/PAYMENT_LIST/AddLine2/{_index}
     */
    public function paymentListAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/PAYMENT_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/PAYMENT_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function paymentListAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/PAYMENT_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/PAYMENT_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function paymentListAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/PAYMENT_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/PAYMENT_LIST/EqualizeBalance/{_index}
     */
    public function paymentListEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/PAYMENT_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/PAYMENT_LIST/EqualizeBalance/{_index}
     */
    public function paymentListEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/PAYMENT_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/PAYMENT_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function paymentListApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/PAYMENT_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/PAYMENT_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function paymentListApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/PAYMENT_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/PAYMENT_LIST/SetLineTotals/{_Indx}
     */
    public function paymentListSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/PAYMENT_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/PAYMENT_LIST/SetLineTotals/{_Indx}
     */
    public function paymentListSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/PAYMENT_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/PAYMENT_LIST/{id1}/DISCTRLIST
     */
    public function getPAYMENT_LISTDISCTRLISTV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/PAYMENT_LIST/{$id1}/DISCTRLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/PAYMENT_LIST/{id1}/DISCTRLIST/{idt}
     */
    public function getPAYMENT_LISTDISCTRLISTByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/PAYMENT_LIST/{$id1}/DISCTRLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/PAYMENT_LIST/{id1}/DISCTRLIST/AppendLine2
     */
    public function paymentListdisctrlistAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/PAYMENT_LIST/{$id1}/DISCTRLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/PAYMENT_LIST/{id1}/DISCTRLIST/AppendLine2
     */
    public function paymentListdisctrlistAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/PAYMENT_LIST/{$id1}/DISCTRLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/PAYMENT_LIST/{id1}/DISCTRLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function paymentListdisctrlistAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/PAYMENT_LIST/{$id1}/DISCTRLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/PAYMENT_LIST/{id1}/DISCTRLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function paymentListdisctrlistAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/PAYMENT_LIST/{$id1}/DISCTRLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/PAYMENT_LIST/{id1}/DISCTRLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function paymentListdisctrlistGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/PAYMENT_LIST/{$id1}/DISCTRLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/PAYMENT_LIST/{id1}/DISCTRLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function paymentListdisctrlistGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/PAYMENT_LIST/{$id1}/DISCTRLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/PAYMENT_LIST/{id1}/DISCTRLIST/AddLine2/{_index}
     */
    public function paymentListdisctrlistAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/PAYMENT_LIST/{$id1}/DISCTRLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/PAYMENT_LIST/{id1}/DISCTRLIST/AddLine2/{_index}
     */
    public function paymentListdisctrlistAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/PAYMENT_LIST/{$id1}/DISCTRLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/PAYMENT_LIST/{id1}/DISCTRLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function paymentListdisctrlistAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/PAYMENT_LIST/{$id1}/DISCTRLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/PAYMENT_LIST/{id1}/DISCTRLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function paymentListdisctrlistAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/PAYMENT_LIST/{$id1}/DISCTRLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchaseProposalContracts/{id}/PAYMENT_LIST/{id1}/DISCTRLIST/EqualizeBalance/{_index}
     */
    public function paymentListdisctrlistEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/{$id}/PAYMENT_LIST/{$id1}/DISCTRLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchaseProposalContracts/PAYMENT_LIST/{id1}/DISCTRLIST/EqualizeBalance/{_index}
     */
    public function paymentListdisctrlistEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchaseProposalContracts/PAYMENT_LIST/{$id1}/DISCTRLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    public function searchByArpCode($arpCode)
    {
        return $this->getAll(['q' => "ARP_CODE like '{$arpCode}*'"]);
    }

    public function searchByTitle($title)
    {
        return $this->getAll(['q' => "TITLE like '{$title}*'"]);
    }

    /**
     * Retrieves analytics data for PurchaseProposalContracts entities.
     */
    public function getAnalytics()
    {
        return ['total' => $this->getCount()];
    }

    /**
     * Retrieves the total count of PurchaseProposalContracts entities.
     */
    public function getCount()
    {
        $resp = $this->getAll(['count' => true]);
        return (int) ($resp->totalCount ?? 0);
    }

    /**
     * Retrieves database column information for the PurchaseProposalContracts entity.
     */
    public function getDbColumns()
    {
        $path = "{$this->endpoint}/dbcolumns";
        return $this->request('GET', $path);
    }

    /**
     * Enables change tracking for the PurchaseProposalContracts entity.
     */
    public function track()
    {
        $path = "{$this->endpoint}/track";
        return $this->request('GET', $path);
    }

    /**
     * Disables change tracking for the PurchaseProposalContracts entity.
     */
    public function untrack()
    {
        $path = "{$this->endpoint}/untrack";
        return $this->request('GET', $path);
    }

    /**
     * Checks the change tracking status for the PurchaseProposalContracts entity.
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
