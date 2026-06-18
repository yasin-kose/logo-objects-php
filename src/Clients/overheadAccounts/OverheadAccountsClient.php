<?php

declare(strict_types=1);

namespace LogoObjects\Clients\overheadAccounts;

use LogoObjects\Http\BaseApiClient;
use LogoObjects\Types\ApiResponse;
use LogoObjects\Utils\QueryBuilder;

/**
 * OverheadAccountsClient - /overheadAccounts endpoint'i icin CRUD ve ozel islemler.
 */
class OverheadAccountsClient extends BaseApiClient
{
    /** @var string */
    protected $endpoint = '/overheadAccounts';

    /**
     * Retrieves a paginated list of OverheadAccounts entities.
     */
    public function getAll(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "{$this->endpoint}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return ApiResponse::of($this->request('GET', $path), \LogoObjects\Clients\overheadAccounts\OverheadAccounts::class);
    }

    /**
     * Retrieves a single OverheadAccounts entity by its internal reference ID.
     */
    public function getById($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "{$this->endpoint}/{$id}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return \LogoObjects\Clients\overheadAccounts\OverheadAccounts::fromArray($this->request('GET', $path));
    }

    /**
     * Creates a new OverheadAccounts entity.
     */
    public function create(array $data)
    {
        $path = "{$this->endpoint}";
        return \LogoObjects\Clients\overheadAccounts\OverheadAccounts::fromArray($this->request('POST', $path, $data));
    }

    /**
     * Updates an existing OverheadAccounts entity.
     */
    public function update($id, array $data)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\overheadAccounts\OverheadAccounts::fromArray($this->request('PUT', $path, $data));
    }

    /**
     * Partially updates a OverheadAccounts entity.
     */
    public function patch($id, array $data)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\overheadAccounts\OverheadAccounts::fromArray($this->request('PATCH', $path, $data));
    }

    /**
     * Deletes a OverheadAccounts entity by its internal reference ID.
     */
    public function delete($id)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\overheadAccounts\OverheadAccounts::fromArray($this->request('DELETE', $path));
    }

    /**
     * Searches for OverheadAccounts entities based on a set of criteria.
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
     * Corresponds to POST /overheadAccounts/EqualizePayAmnt
     */
    public function equalizePayAmntV1(array $data)
    {
        $path = "/overheadAccounts/EqualizePayAmnt";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/EqualizePayAmnt
     */
    public function equalizePayAmntV1Get($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/EqualizePayAmnt";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/AddSeriLotsForKs/{_slCode}/{_amount}/{_IOMtd}
     */
    public function addSeriLotsForKsV1($id, string $slCode, $amount, $IOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/AddSeriLotsForKs/{$slCode}/{$amount}/{$IOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/AddSeriLotsForKs/{_slCode}/{_amount}/{_IOMtd}
     */
    public function addSeriLotsForKsV1Post(string $slCode, $amount, $IOMtd, array $data)
    {
        $path = "/overheadAccounts/AddSeriLotsForKs/{$slCode}/{$amount}/{$IOMtd}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/FillSMMACCCodes
     */
    public function fillSMMACCCodesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/FillSMMACCCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/FillSMMACCCodes
     */
    public function fillSMMACCCodesV1Post(array $data)
    {
        $path = "/overheadAccounts/FillSMMACCCodes";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/AttachADespatchByLRef/{_dispref}
     */
    public function attachADespatchByLRefV1($id, $dispref, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/AttachADespatchByLRef/{$dispref}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/AttachADespatchByLRef/{_dispref}
     */
    public function attachADespatchByLRefV1Post($dispref, array $data)
    {
        $path = "/overheadAccounts/AttachADespatchByLRef/{$dispref}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/AttachADespatchByFicheNo/{_dispFicheNo}
     */
    public function attachADespatchByFicheNoV1($id, string $dispFicheNo, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/AttachADespatchByFicheNo/{$dispFicheNo}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/AttachADespatchByFicheNo/{_dispFicheNo}
     */
    public function attachADespatchByFicheNoV1Post(string $dispFicheNo, array $data)
    {
        $path = "/overheadAccounts/AttachADespatchByFicheNo/{$dispFicheNo}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/DeleteCampaign
     */
    public function deleteCampaignV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/DeleteCampaign";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/DeleteCampaign
     */
    public function deleteCampaignV1Post(array $data)
    {
        $path = "/overheadAccounts/DeleteCampaign";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/SetClientInfo
     */
    public function setClientInfoV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/SetClientInfo";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/SetClientInfo
     */
    public function setClientInfoV1Post(array $data)
    {
        $path = "/overheadAccounts/SetClientInfo";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/GetRelevantCampaigns
     */
    public function getRelevantCampaignsV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/GetRelevantCampaigns";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/GetRelevantCampaigns
     */
    public function getRelevantCampaignsV1Post(array $data)
    {
        $path = "/overheadAccounts/GetRelevantCampaigns";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/ApplyCampaignSpecific/{_refList}
     */
    public function applyCampaignSpecificV1($id, string $refList, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/ApplyCampaignSpecific/{$refList}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/ApplyCampaignSpecific/{_refList}
     */
    public function applyCampaignSpecificV1Post(string $refList, array $data)
    {
        $path = "/overheadAccounts/ApplyCampaignSpecific/{$refList}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/ImportImage/{_ImgPath}/{_Indx}
     */
    public function importImageV1($id, string $ImgPath, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/ImportImage/{$ImgPath}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/ImportImage/{_ImgPath}/{_Indx}
     */
    public function importImageV1Post(string $ImgPath, string $Indx, array $data)
    {
        $path = "/overheadAccounts/ImportImage/{$ImgPath}/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/ExportBase64EncodedImage/{_Indx}
     */
    public function exportBase64EncodedImageV1($id, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/ExportBase64EncodedImage/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/ExportBase64EncodedImage/{_Indx}
     */
    public function exportBase64EncodedImageV1Post(string $Indx, array $data)
    {
        $path = "/overheadAccounts/ExportBase64EncodedImage/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/ImportBase64EncodedImage/{_base64EncodedImage}/{_imageType}/{_Indx}
     */
    public function importBase64EncodedImageV1($id, string $base64EncodedImage, string $imageType, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/ImportBase64EncodedImage/{$base64EncodedImage}/{$imageType}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/ImportBase64EncodedImage/{_base64EncodedImage}/{_imageType}/{_Indx}
     */
    public function importBase64EncodedImageV1Post(string $base64EncodedImage, string $imageType, string $Indx, array $data)
    {
        $path = "/overheadAccounts/ImportBase64EncodedImage/{$base64EncodedImage}/{$imageType}/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /overheadAccounts/readwithbodyparamters
     */
    public function postReadWithBodyParametersV1(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/readwithbodyparamters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /overheadAccounts/{id}/readwithbodyparamters
     */
    public function postReadByIdWithBodyParametersV1($id, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/readwithbodyparamters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/ExportToXML/{_RootKey}/{_FileName}
     */
    public function exportToXMLV1($id, string $RootKey, string $FileName, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/ExportToXML/{$RootKey}/{$FileName}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/ExportToXML/{_RootKey}/{_FileName}
     */
    public function exportToXMLV1Post(string $RootKey, string $FileName, array $data)
    {
        $path = "/overheadAccounts/ExportToXML/{$RootKey}/{$FileName}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/ImportFromXMLFile/{_RootKey}/{_FileName}
     */
    public function importFromXMLFileV1($id, string $RootKey, string $FileName, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/ImportFromXMLFile/{$RootKey}/{$FileName}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/ImportFromXMLFile/{_RootKey}/{_FileName}
     */
    public function importFromXMLFileV1Post(string $RootKey, string $FileName, array $data)
    {
        $path = "/overheadAccounts/ImportFromXMLFile/{$RootKey}/{$FileName}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/CreateCompositeLines
     */
    public function createCompositeLinesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/CreateCompositeLines";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/CreateCompositeLines
     */
    public function createCompositeLinesV1Post(array $data)
    {
        $path = "/overheadAccounts/CreateCompositeLines";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/FormSeriLotLines/{_lOMtd}
     */
    public function formSeriLotLinesV1($id, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/FormSeriLotLines/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/FormSeriLotLines/{_lOMtd}
     */
    public function formSeriLotLinesV1Post($lOMtd, array $data)
    {
        $path = "/overheadAccounts/FormSeriLotLines/{$lOMtd}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/ApplyCampaign
     */
    public function applyCampaignV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/ApplyCampaign";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/ApplyCampaign
     */
    public function applyCampaignV1Post(array $data)
    {
        $path = "/overheadAccounts/ApplyCampaign";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/ApplyRePayPln/{_lineNr}/{_rePayPCode}
     */
    public function applyRePayPlnV1($id, $lineNr, string $rePayPCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/ApplyRePayPln/{$lineNr}/{$rePayPCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/ApplyRePayPln/{_lineNr}/{_rePayPCode}
     */
    public function applyRePayPlnV1Post($lineNr, string $rePayPCode, array $data)
    {
        $path = "/overheadAccounts/ApplyRePayPln/{$lineNr}/{$rePayPCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/ApplyRePayPlnForInv/{_rePayCode}
     */
    public function applyRePayPlnForInvV1($id, string $rePayCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/ApplyRePayPlnForInv/{$rePayCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/ApplyRePayPlnForInv/{_rePayCode}
     */
    public function applyRePayPlnForInvV1Post(string $rePayCode, array $data)
    {
        $path = "/overheadAccounts/ApplyRePayPlnForInv/{$rePayCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/ImportFromXmlStr/{_RootKey}/{_XmlStr}
     */
    public function importFromXmlStrV1($id, string $RootKey, string $XmlStr, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/ImportFromXmlStr/{$RootKey}/{$XmlStr}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/ImportFromXmlStr/{_RootKey}/{_XmlStr}
     */
    public function importFromXmlStrV1Post(string $RootKey, string $XmlStr, array $data)
    {
        $path = "/overheadAccounts/ImportFromXmlStr/{$RootKey}/{$XmlStr}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/ExportToXmlStr/{_RootKey}
     */
    public function exportToXmlStrV1($id, string $RootKey, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/ExportToXmlStr/{$RootKey}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/ExportToXmlStr/{_RootKey}
     */
    public function exportToXmlStrV1Post(string $RootKey, array $data)
    {
        $path = "/overheadAccounts/ExportToXmlStr/{$RootKey}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/ApplyCondition
     */
    public function applyConditionV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/ApplyCondition";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/ApplyCondition
     */
    public function applyConditionV1Post(array $data)
    {
        $path = "/overheadAccounts/ApplyCondition";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/ExportImage/{_Indx}/{_ImgPath}
     */
    public function exportImageV1($id, string $Indx, string $ImgPath, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/ExportImage/{$Indx}/{$ImgPath}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/ExportImage/{_Indx}/{_ImgPath}
     */
    public function exportImageV1Post(string $Indx, string $ImgPath, array $data)
    {
        $path = "/overheadAccounts/ExportImage/{$Indx}/{$ImgPath}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/ReCalculate
     */
    public function reCalculateV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/ReCalculate";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/ReCalculate
     */
    public function reCalculateV1Post(array $data)
    {
        $path = "/overheadAccounts/ReCalculate";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/FillAccCodes
     */
    public function fillAccCodesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/FillAccCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/FillAccCodes
     */
    public function fillAccCodesV1Post(array $data)
    {
        $path = "/overheadAccounts/FillAccCodes";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/ApplyADiscount/{_discCode}
     */
    public function applyADiscountV1($id, string $discCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/ApplyADiscount/{$discCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/ApplyADiscount/{_discCode}
     */
    public function applyADiscountV1Post(string $discCode, array $data)
    {
        $path = "/overheadAccounts/ApplyADiscount/{$discCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /overheadAccounts/{id}/SetDefIntValue/{_fldName}/{_fType}/{_fSz}/{_Value}
     */
    public function setDefIntValueV1($id, string $fldName, $fType, $fSz, $Value, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/overheadAccounts/{$id}/SetDefIntValue/{$fldName}/{$fType}/{$fSz}/{$Value}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /overheadAccounts/SetDefIntValue/{_fldName}/{_fType}/{_fSz}/{_Value}
     */
    public function setDefIntValueV1Post(string $fldName, $fType, $fSz, $Value, array $data)
    {
        $path = "/overheadAccounts/SetDefIntValue/{$fldName}/{$fType}/{$fSz}/{$Value}";
        return $this->request('POST', $path, $data);
    }

    public function searchByCode($code)
    {
        return $this->getAll(['q' => "CODE like '{$code}*'"]);
    }

    public function searchByDescription($description)
    {
        return $this->getAll(['q' => "DESCRIPTION like '{$description}*'"]);
    }

    /**
     * Retrieves analytics data for OverheadAccounts entities.
     */
    public function getAnalytics()
    {
        return ['total' => $this->getCount()];
    }

    /**
     * Retrieves the total count of OverheadAccounts entities.
     */
    public function getCount()
    {
        $resp = $this->getAll(['count' => true]);
        return (int) ($resp->totalCount ?? 0);
    }

    /**
     * Retrieves database column information for the OverheadAccounts entity.
     */
    public function getDbColumns()
    {
        $path = "{$this->endpoint}/dbcolumns";
        return $this->request('GET', $path);
    }

    /**
     * Enables change tracking for the OverheadAccounts entity.
     */
    public function track()
    {
        $path = "{$this->endpoint}/track";
        return $this->request('GET', $path);
    }

    /**
     * Disables change tracking for the OverheadAccounts entity.
     */
    public function untrack()
    {
        $path = "{$this->endpoint}/untrack";
        return $this->request('GET', $path);
    }

    /**
     * Checks the change tracking status for the OverheadAccounts entity.
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
