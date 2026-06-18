<?php

declare(strict_types=1);

namespace LogoObjects\Clients\importOperationSlips;

use LogoObjects\Http\BaseApiClient;
use LogoObjects\Types\ApiResponse;
use LogoObjects\Utils\QueryBuilder;

/**
 * ImportOperationSlipsClient - /importOperationSlips endpoint'i icin CRUD ve ozel islemler.
 */
class ImportOperationSlipsClient extends BaseApiClient
{
    /** @var string */
    protected $endpoint = '/importOperationSlips';

    /**
     * Retrieves a paginated list of ImportOperationSlips entities.
     */
    public function getAll(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "{$this->endpoint}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return ApiResponse::of($this->request('GET', $path), \LogoObjects\Clients\importOperationSlips\ImportOperationSlips::class);
    }

    /**
     * Retrieves a single ImportOperationSlips entity by its internal reference ID.
     */
    public function getById($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "{$this->endpoint}/{$id}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return \LogoObjects\Clients\importOperationSlips\ImportOperationSlips::fromArray($this->request('GET', $path));
    }

    /**
     * Creates a new ImportOperationSlips entity.
     */
    public function create(array $data)
    {
        $path = "{$this->endpoint}";
        return \LogoObjects\Clients\importOperationSlips\ImportOperationSlips::fromArray($this->request('POST', $path, $data));
    }

    /**
     * Updates an existing ImportOperationSlips entity.
     */
    public function update($id, array $data)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\importOperationSlips\ImportOperationSlips::fromArray($this->request('PUT', $path, $data));
    }

    /**
     * Partially updates a ImportOperationSlips entity.
     */
    public function patch($id, array $data)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\importOperationSlips\ImportOperationSlips::fromArray($this->request('PATCH', $path, $data));
    }

    /**
     * Deletes a ImportOperationSlips entity by its internal reference ID.
     */
    public function delete($id)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\importOperationSlips\ImportOperationSlips::fromArray($this->request('DELETE', $path));
    }

    /**
     * Searches for ImportOperationSlips entities based on a set of criteria.
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
     * Corresponds to GET /importOperationSlips/{id}/ImportImage/{_ImgPath}/{_Indx}
     */
    public function importImageV1($id, string $ImgPath, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/ImportImage/{$ImgPath}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/ImportImage/{_ImgPath}/{_Indx}
     */
    public function importImageV1Post(string $ImgPath, string $Indx, array $data)
    {
        $path = "/importOperationSlips/ImportImage/{$ImgPath}/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/ExportBase64EncodedImage/{_Indx}
     */
    public function exportBase64EncodedImageV1($id, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/ExportBase64EncodedImage/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/ExportBase64EncodedImage/{_Indx}
     */
    public function exportBase64EncodedImageV1Post(string $Indx, array $data)
    {
        $path = "/importOperationSlips/ExportBase64EncodedImage/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/ImportBase64EncodedImage/{_base64EncodedImage}/{_imageType}/{_Indx}
     */
    public function importBase64EncodedImageV1($id, string $base64EncodedImage, string $imageType, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/ImportBase64EncodedImage/{$base64EncodedImage}/{$imageType}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/ImportBase64EncodedImage/{_base64EncodedImage}/{_imageType}/{_Indx}
     */
    public function importBase64EncodedImageV1Post(string $base64EncodedImage, string $imageType, string $Indx, array $data)
    {
        $path = "/importOperationSlips/ImportBase64EncodedImage/{$base64EncodedImage}/{$imageType}/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/FormSeriLotLines/{_lOMtd}
     */
    public function formSeriLotLinesV1($id, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/FormSeriLotLines/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/FormSeriLotLines/{_lOMtd}
     */
    public function formSeriLotLinesV1Post($lOMtd, array $data)
    {
        $path = "/importOperationSlips/FormSeriLotLines/{$lOMtd}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/ApplyCampaign
     */
    public function applyCampaignV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/ApplyCampaign";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/ApplyCampaign
     */
    public function applyCampaignV1Post(array $data)
    {
        $path = "/importOperationSlips/ApplyCampaign";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/ApplyRePayPln/{_lineNr}/{_rePayPCode}
     */
    public function applyRePayPlnV1($id, $lineNr, string $rePayPCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/ApplyRePayPln/{$lineNr}/{$rePayPCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/ApplyRePayPln/{_lineNr}/{_rePayPCode}
     */
    public function applyRePayPlnV1Post($lineNr, string $rePayPCode, array $data)
    {
        $path = "/importOperationSlips/ApplyRePayPln/{$lineNr}/{$rePayPCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/ApplyRePayPlnForInv/{_rePayCode}
     */
    public function applyRePayPlnForInvV1($id, string $rePayCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/ApplyRePayPlnForInv/{$rePayCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/ApplyRePayPlnForInv/{_rePayCode}
     */
    public function applyRePayPlnForInvV1Post(string $rePayCode, array $data)
    {
        $path = "/importOperationSlips/ApplyRePayPlnForInv/{$rePayCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/ImportFromXmlStr/{_RootKey}/{_XmlStr}
     */
    public function importFromXmlStrV1($id, string $RootKey, string $XmlStr, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/ImportFromXmlStr/{$RootKey}/{$XmlStr}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/ImportFromXmlStr/{_RootKey}/{_XmlStr}
     */
    public function importFromXmlStrV1Post(string $RootKey, string $XmlStr, array $data)
    {
        $path = "/importOperationSlips/ImportFromXmlStr/{$RootKey}/{$XmlStr}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/ExportToXmlStr/{_RootKey}
     */
    public function exportToXmlStrV1($id, string $RootKey, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/ExportToXmlStr/{$RootKey}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/ExportToXmlStr/{_RootKey}
     */
    public function exportToXmlStrV1Post(string $RootKey, array $data)
    {
        $path = "/importOperationSlips/ExportToXmlStr/{$RootKey}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/ApplyCondition
     */
    public function applyConditionV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/ApplyCondition";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/ApplyCondition
     */
    public function applyConditionV1Post(array $data)
    {
        $path = "/importOperationSlips/ApplyCondition";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/ExportImage/{_Indx}/{_ImgPath}
     */
    public function exportImageV1($id, string $Indx, string $ImgPath, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/ExportImage/{$Indx}/{$ImgPath}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/ExportImage/{_Indx}/{_ImgPath}
     */
    public function exportImageV1Post(string $Indx, string $ImgPath, array $data)
    {
        $path = "/importOperationSlips/ExportImage/{$Indx}/{$ImgPath}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/ReCalculate
     */
    public function reCalculateV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/ReCalculate";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/ReCalculate
     */
    public function reCalculateV1Post(array $data)
    {
        $path = "/importOperationSlips/ReCalculate";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/FillAccCodes
     */
    public function fillAccCodesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/FillAccCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/FillAccCodes
     */
    public function fillAccCodesV1Post(array $data)
    {
        $path = "/importOperationSlips/FillAccCodes";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/ApplyADiscount/{_discCode}
     */
    public function applyADiscountV1($id, string $discCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/ApplyADiscount/{$discCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/ApplyADiscount/{_discCode}
     */
    public function applyADiscountV1Post(string $discCode, array $data)
    {
        $path = "/importOperationSlips/ApplyADiscount/{$discCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/SetDefIntValue/{_fldName}/{_fType}/{_fSz}/{_Value}
     */
    public function setDefIntValueV1($id, string $fldName, $fType, $fSz, $Value, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/SetDefIntValue/{$fldName}/{$fType}/{$fSz}/{$Value}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/SetDefIntValue/{_fldName}/{_fType}/{_fSz}/{_Value}
     */
    public function setDefIntValueV1Post(string $fldName, $fType, $fSz, $Value, array $data)
    {
        $path = "/importOperationSlips/SetDefIntValue/{$fldName}/{$fType}/{$fSz}/{$Value}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EqualizePayAmnt
     */
    public function equalizePayAmntV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EqualizePayAmnt";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EqualizePayAmnt
     */
    public function equalizePayAmntV1Post(array $data)
    {
        $path = "/importOperationSlips/EqualizePayAmnt";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/AddSeriLotsForKs/{_slCode}/{_amount}/{_IOMtd}
     */
    public function addSeriLotsForKsV1($id, string $slCode, $amount, $IOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/AddSeriLotsForKs/{$slCode}/{$amount}/{$IOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/AddSeriLotsForKs/{_slCode}/{_amount}/{_IOMtd}
     */
    public function addSeriLotsForKsV1Post(string $slCode, $amount, $IOMtd, array $data)
    {
        $path = "/importOperationSlips/AddSeriLotsForKs/{$slCode}/{$amount}/{$IOMtd}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/FillSMMACCCodes
     */
    public function fillSMMACCCodesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/FillSMMACCCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/FillSMMACCCodes
     */
    public function fillSMMACCCodesV1Post(array $data)
    {
        $path = "/importOperationSlips/FillSMMACCCodes";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/AttachADespatchByLRef/{_dispref}
     */
    public function attachADespatchByLRefV1($id, $dispref, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/AttachADespatchByLRef/{$dispref}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/AttachADespatchByLRef/{_dispref}
     */
    public function attachADespatchByLRefV1Post($dispref, array $data)
    {
        $path = "/importOperationSlips/AttachADespatchByLRef/{$dispref}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/AttachADespatchByFicheNo/{_dispFicheNo}
     */
    public function attachADespatchByFicheNoV1($id, string $dispFicheNo, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/AttachADespatchByFicheNo/{$dispFicheNo}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/AttachADespatchByFicheNo/{_dispFicheNo}
     */
    public function attachADespatchByFicheNoV1Post(string $dispFicheNo, array $data)
    {
        $path = "/importOperationSlips/AttachADespatchByFicheNo/{$dispFicheNo}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DeleteCampaign
     */
    public function deleteCampaignV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DeleteCampaign";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DeleteCampaign
     */
    public function deleteCampaignV1Post(array $data)
    {
        $path = "/importOperationSlips/DeleteCampaign";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/SetClientInfo
     */
    public function setClientInfoV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/SetClientInfo";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/SetClientInfo
     */
    public function setClientInfoV1Post(array $data)
    {
        $path = "/importOperationSlips/SetClientInfo";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/GetRelevantCampaigns
     */
    public function getRelevantCampaignsV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/GetRelevantCampaigns";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/GetRelevantCampaigns
     */
    public function getRelevantCampaignsV1Post(array $data)
    {
        $path = "/importOperationSlips/GetRelevantCampaigns";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/ApplyCampaignSpecific/{_refList}
     */
    public function applyCampaignSpecificV1($id, string $refList, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/ApplyCampaignSpecific/{$refList}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/ApplyCampaignSpecific/{_refList}
     */
    public function applyCampaignSpecificV1Post(string $refList, array $data)
    {
        $path = "/importOperationSlips/ApplyCampaignSpecific/{$refList}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/SRVDISTS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function srvdistsApplyaccdisttemplateV1(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/SRVDISTS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/SRVDISTS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function srvdistsApplyaccdisttemplateV1Get($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/SRVDISTS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/SRVDISTS/SetLineTotals/{_Indx}
     */
    public function srvdistsSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/SRVDISTS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/SRVDISTS/SetLineTotals/{_Indx}
     */
    public function srvdistsSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/SRVDISTS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DEFNFLDSLIST
     */
    public function getDEFNFLDSLISTV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DEFNFLDSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DEFNFLDSLIST/{idt}
     */
    public function getDEFNFLDSLISTByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DEFNFLDSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DEFNFLDSLIST/AppendLine2
     */
    public function defnfldslistAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DEFNFLDSLIST/AppendLine2
     */
    public function defnfldslistAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function defnfldslistAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function defnfldslistAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function defnfldslistGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function defnfldslistGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function defnfldslistAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function defnfldslistAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function defnfldslistAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function defnfldslistAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function defnfldslistEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function defnfldslistEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function defnfldslistApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function defnfldslistApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function defnfldslistSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function defnfldslistSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PREACCDISTLIST
     */
    public function getPREACCDISTLISTV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PREACCDISTLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PREACCDISTLIST/{idt}
     */
    public function getPREACCDISTLISTByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PREACCDISTLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PREACCDISTLIST/AppendLine2
     */
    public function preaccdistlistAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PREACCDISTLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/PREACCDISTLIST/AppendLine2
     */
    public function preaccdistlistAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/PREACCDISTLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PREACCDISTLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function preaccdistlistAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PREACCDISTLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/PREACCDISTLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function preaccdistlistAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/PREACCDISTLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PREACCDISTLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function preaccdistlistGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PREACCDISTLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/PREACCDISTLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function preaccdistlistGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/PREACCDISTLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PREACCDISTLIST/AddLine2/{_index}
     */
    public function preaccdistlistAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PREACCDISTLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/PREACCDISTLIST/AddLine2/{_index}
     */
    public function preaccdistlistAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/PREACCDISTLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PREACCDISTLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function preaccdistlistAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PREACCDISTLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/PREACCDISTLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function preaccdistlistAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/PREACCDISTLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PREACCDISTLIST/EqualizeBalance/{_index}
     */
    public function preaccdistlistEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PREACCDISTLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/PREACCDISTLIST/EqualizeBalance/{_index}
     */
    public function preaccdistlistEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/PREACCDISTLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PREACCDISTLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function preaccdistlistApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PREACCDISTLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/PREACCDISTLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function preaccdistlistApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/PREACCDISTLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PREACCDISTLIST/SetLineTotals/{_Indx}
     */
    public function preaccdistlistSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PREACCDISTLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/PREACCDISTLIST/SetLineTotals/{_Indx}
     */
    public function preaccdistlistSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/PREACCDISTLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/ExportToXML/{_RootKey}/{_FileName}
     */
    public function exportToXMLV1($id, string $RootKey, string $FileName, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/ExportToXML/{$RootKey}/{$FileName}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/ExportToXML/{_RootKey}/{_FileName}
     */
    public function exportToXMLV1Post(string $RootKey, string $FileName, array $data)
    {
        $path = "/importOperationSlips/ExportToXML/{$RootKey}/{$FileName}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/ImportFromXMLFile/{_RootKey}/{_FileName}
     */
    public function importFromXMLFileV1($id, string $RootKey, string $FileName, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/ImportFromXMLFile/{$RootKey}/{$FileName}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/ImportFromXMLFile/{_RootKey}/{_FileName}
     */
    public function importFromXMLFileV1Post(string $RootKey, string $FileName, array $data)
    {
        $path = "/importOperationSlips/ImportFromXMLFile/{$RootKey}/{$FileName}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/CreateCompositeLines
     */
    public function createCompositeLinesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/CreateCompositeLines";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/CreateCompositeLines
     */
    public function createCompositeLinesV1Post(array $data)
    {
        $path = "/importOperationSlips/CreateCompositeLines";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/PAYMENT_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function paymentListGetstocklinepriceV1($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/PAYMENT_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PAYMENT_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function paymentListGetstocklinepriceV1Get($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PAYMENT_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PAYMENT_LIST/AddLine2/{_index}
     */
    public function paymentListAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PAYMENT_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/PAYMENT_LIST/AddLine2/{_index}
     */
    public function paymentListAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/PAYMENT_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PAYMENT_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function paymentListAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PAYMENT_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/PAYMENT_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function paymentListAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/PAYMENT_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PAYMENT_LIST/EqualizeBalance/{_index}
     */
    public function paymentListEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PAYMENT_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/PAYMENT_LIST/EqualizeBalance/{_index}
     */
    public function paymentListEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/PAYMENT_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PAYMENT_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function paymentListApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PAYMENT_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/PAYMENT_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function paymentListApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/PAYMENT_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PAYMENT_LIST/SetLineTotals/{_Indx}
     */
    public function paymentListSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PAYMENT_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/PAYMENT_LIST/SetLineTotals/{_Indx}
     */
    public function paymentListSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/PAYMENT_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PAYMENT_LIST/{id1}/DISCTRLIST
     */
    public function getPAYMENT_LISTDISCTRLISTV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PAYMENT_LIST/{$id1}/DISCTRLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PAYMENT_LIST/{id1}/DISCTRLIST/{idt}
     */
    public function getPAYMENT_LISTDISCTRLISTByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PAYMENT_LIST/{$id1}/DISCTRLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PAYMENT_LIST/{id1}/DISCTRLIST/AppendLine2
     */
    public function paymentListdisctrlistAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PAYMENT_LIST/{$id1}/DISCTRLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/PAYMENT_LIST/{id1}/DISCTRLIST/AppendLine2
     */
    public function paymentListdisctrlistAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/PAYMENT_LIST/{$id1}/DISCTRLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PAYMENT_LIST/{id1}/DISCTRLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function paymentListdisctrlistAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PAYMENT_LIST/{$id1}/DISCTRLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/PAYMENT_LIST/{id1}/DISCTRLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function paymentListdisctrlistAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/PAYMENT_LIST/{$id1}/DISCTRLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PAYMENT_LIST/{id1}/DISCTRLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function paymentListdisctrlistGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PAYMENT_LIST/{$id1}/DISCTRLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/PAYMENT_LIST/{id1}/DISCTRLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function paymentListdisctrlistGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/PAYMENT_LIST/{$id1}/DISCTRLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PAYMENT_LIST/{id1}/DISCTRLIST/AddLine2/{_index}
     */
    public function paymentListdisctrlistAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PAYMENT_LIST/{$id1}/DISCTRLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/PAYMENT_LIST/{id1}/DISCTRLIST/AddLine2/{_index}
     */
    public function paymentListdisctrlistAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/PAYMENT_LIST/{$id1}/DISCTRLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PAYMENT_LIST/{id1}/DISCTRLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function paymentListdisctrlistAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PAYMENT_LIST/{$id1}/DISCTRLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/PAYMENT_LIST/{id1}/DISCTRLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function paymentListdisctrlistAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/PAYMENT_LIST/{$id1}/DISCTRLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PAYMENT_LIST/{id1}/DISCTRLIST/EqualizeBalance/{_index}
     */
    public function paymentListdisctrlistEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PAYMENT_LIST/{$id1}/DISCTRLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/PAYMENT_LIST/{id1}/DISCTRLIST/EqualizeBalance/{_index}
     */
    public function paymentListdisctrlistEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/PAYMENT_LIST/{$id1}/DISCTRLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PAYMENT_LIST/{id1}/DISCTRLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function paymentListdisctrlistApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PAYMENT_LIST/{$id1}/DISCTRLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/PAYMENT_LIST/{id1}/DISCTRLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function paymentListdisctrlistApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/PAYMENT_LIST/{$id1}/DISCTRLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PAYMENT_LIST/{id1}/DISCTRLIST/SetLineTotals/{_Indx}
     */
    public function paymentListdisctrlistSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PAYMENT_LIST/{$id1}/DISCTRLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/PAYMENT_LIST/{id1}/DISCTRLIST/SetLineTotals/{_Indx}
     */
    public function paymentListdisctrlistSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/PAYMENT_LIST/{$id1}/DISCTRLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/SRVDISTS
     */
    public function getSRVDISTSV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/SRVDISTS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/SRVDISTS/{idt}
     */
    public function getSRVDISTSByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/SRVDISTS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/SRVDISTS/AppendLine2
     */
    public function srvdistsAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/SRVDISTS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/SRVDISTS/AppendLine2
     */
    public function srvdistsAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/SRVDISTS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/SRVDISTS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function srvdistsAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/SRVDISTS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/SRVDISTS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function srvdistsAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/SRVDISTS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/SRVDISTS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function srvdistsGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/SRVDISTS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/SRVDISTS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function srvdistsGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/SRVDISTS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/SRVDISTS/AddLine2/{_index}
     */
    public function srvdistsAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/SRVDISTS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/SRVDISTS/AddLine2/{_index}
     */
    public function srvdistsAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/SRVDISTS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/SRVDISTS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function srvdistsAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/SRVDISTS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/SRVDISTS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function srvdistsAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/SRVDISTS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/SRVDISTS/EqualizeBalance/{_index}
     */
    public function srvdistsEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/SRVDISTS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/SRVDISTS/EqualizeBalance/{_index}
     */
    public function srvdistsEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/SRVDISTS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/ADDTAXLINELIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinesaddtaxlinelistApplyaccdisttemplateV1($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/ADDTAXLINELIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/ADDTAXLINELIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinesaddtaxlinelistApplyaccdisttemplateV1Get($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/ADDTAXLINELIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/ADDTAXLINELIST/SetLineTotals/{_Indx}
     */
    public function eximlinesaddtaxlinelistSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/ADDTAXLINELIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/ADDTAXLINELIST/SetLineTotals/{_Indx}
     */
    public function eximlinesaddtaxlinelistSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/ADDTAXLINELIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DEFNFLDSLIST
     */
    public function getEXIMLINESDEFNFLDSLISTV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DEFNFLDSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DEFNFLDSLIST/{idt}
     */
    public function getEXIMLINESDEFNFLDSLISTByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DEFNFLDSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DEFNFLDSLIST/AppendLine2
     */
    public function eximlinesdefnfldslistAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DEFNFLDSLIST/AppendLine2
     */
    public function eximlinesdefnfldslistAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinesdefnfldslistAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinesdefnfldslistAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinesdefnfldslistGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinesdefnfldslistGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function eximlinesdefnfldslistAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function eximlinesdefnfldslistAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinesdefnfldslistAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinesdefnfldslistAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function eximlinesdefnfldslistEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function eximlinesdefnfldslistEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinesdefnfldslistApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinesdefnfldslistApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function eximlinesdefnfldslistSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function eximlinesdefnfldslistSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/PREACCDISTLIST
     */
    public function getEXIMLINESPREACCDISTLISTV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/PREACCDISTLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/PREACCDISTLIST/{idt}
     */
    public function getEXIMLINESPREACCDISTLISTByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/PREACCDISTLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/PREACCDISTLIST/AppendLine2
     */
    public function eximlinespreaccdistlistAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/PREACCDISTLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/PREACCDISTLIST/AppendLine2
     */
    public function eximlinespreaccdistlistAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/PREACCDISTLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/PREACCDISTLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinespreaccdistlistAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/PREACCDISTLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/PREACCDISTLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinespreaccdistlistAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/PREACCDISTLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/PREACCDISTLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinespreaccdistlistGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/PREACCDISTLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/PREACCDISTLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinespreaccdistlistGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/PREACCDISTLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/PREACCDISTLIST/AddLine2/{_index}
     */
    public function eximlinespreaccdistlistAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/PREACCDISTLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/PREACCDISTLIST/AddLine2/{_index}
     */
    public function eximlinespreaccdistlistAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/PREACCDISTLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/PREACCDISTLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinespreaccdistlistAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/PREACCDISTLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/PREACCDISTLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinespreaccdistlistAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/PREACCDISTLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/PREACCDISTLIST/EqualizeBalance/{_index}
     */
    public function eximlinespreaccdistlistEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/PREACCDISTLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/PREACCDISTLIST/EqualizeBalance/{_index}
     */
    public function eximlinespreaccdistlistEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/PREACCDISTLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/PREACCDISTLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinespreaccdistlistApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/PREACCDISTLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/PREACCDISTLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinespreaccdistlistApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/PREACCDISTLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/PREACCDISTLIST/SetLineTotals/{_Indx}
     */
    public function eximlinespreaccdistlistSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/PREACCDISTLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/PREACCDISTLIST/SetLineTotals/{_Indx}
     */
    public function eximlinespreaccdistlistSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/PREACCDISTLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PAYMENT_LIST
     */
    public function getPAYMENT_LISTV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PAYMENT_LIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PAYMENT_LIST/{idt}
     */
    public function getPAYMENT_LISTByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PAYMENT_LIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PAYMENT_LIST/AppendLine2
     */
    public function paymentListAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PAYMENT_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/PAYMENT_LIST/AppendLine2
     */
    public function paymentListAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/PAYMENT_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/PAYMENT_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function paymentListAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/PAYMENT_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/PAYMENT_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function paymentListAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/PAYMENT_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinesdetailsslDetailsqclistvallistGetstocklinepriceV1($id1, $id2, $id3, $id4, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinesdetailsslDetailsqclistvallistGetstocklinepriceV1Get($id, $id1, $id2, $id3, $id4, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AddLine2/{_index}
     */
    public function eximlinesdetailsslDetailsqclistvallistAddline2V1($id, $id1, $id2, $id3, $id4, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AddLine2/{_index}
     */
    public function eximlinesdetailsslDetailsqclistvallistAddline2V1Post($id1, $id2, $id3, $id4, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinesdetailsslDetailsqclistvallistAppendserilotsV1($id, $id1, $id2, $id3, $id4, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinesdetailsslDetailsqclistvallistAppendserilotsV1Post($id1, $id2, $id3, $id4, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/EqualizeBalance/{_index}
     */
    public function eximlinesdetailsslDetailsqclistvallistEqualizebalanceV1($id, $id1, $id2, $id3, $id4, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/EqualizeBalance/{_index}
     */
    public function eximlinesdetailsslDetailsqclistvallistEqualizebalanceV1Post($id1, $id2, $id3, $id4, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinesdetailsslDetailsqclistvallistApplyaccdisttemplateV1($id, $id1, $id2, $id3, $id4, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinesdetailsslDetailsqclistvallistApplyaccdisttemplateV1Post($id1, $id2, $id3, $id4, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/SetLineTotals/{_Indx}
     */
    public function eximlinesdetailsslDetailsqclistvallistSetlinetotalsV1($id, $id1, $id2, $id3, $id4, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/SetLineTotals/{_Indx}
     */
    public function eximlinesdetailsslDetailsqclistvallistSetlinetotalsV1Post($id1, $id2, $id3, $id4, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/CAMPAIGN_INFOS
     */
    public function getEXIMLINESCAMPAIGN_INFOSV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/CAMPAIGN_INFOS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/CAMPAIGN_INFOS/{idt}
     */
    public function getEXIMLINESCAMPAIGN_INFOSByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/CAMPAIGN_INFOS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/CAMPAIGN_INFOS/AppendLine2
     */
    public function eximlinescampaignInfosAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/CAMPAIGN_INFOS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/CAMPAIGN_INFOS/AppendLine2
     */
    public function eximlinescampaignInfosAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/CAMPAIGN_INFOS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/CAMPAIGN_INFOS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinescampaignInfosAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/CAMPAIGN_INFOS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/CAMPAIGN_INFOS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinescampaignInfosAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/CAMPAIGN_INFOS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/CAMPAIGN_INFOS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinescampaignInfosGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/CAMPAIGN_INFOS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/CAMPAIGN_INFOS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinescampaignInfosGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/CAMPAIGN_INFOS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/CAMPAIGN_INFOS/AddLine2/{_index}
     */
    public function eximlinescampaignInfosAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/CAMPAIGN_INFOS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/CAMPAIGN_INFOS/AddLine2/{_index}
     */
    public function eximlinescampaignInfosAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/CAMPAIGN_INFOS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/CAMPAIGN_INFOS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinescampaignInfosAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/CAMPAIGN_INFOS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/CAMPAIGN_INFOS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinescampaignInfosAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/CAMPAIGN_INFOS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/CAMPAIGN_INFOS/EqualizeBalance/{_index}
     */
    public function eximlinescampaignInfosEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/CAMPAIGN_INFOS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/CAMPAIGN_INFOS/EqualizeBalance/{_index}
     */
    public function eximlinescampaignInfosEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/CAMPAIGN_INFOS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/CAMPAIGN_INFOS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinescampaignInfosApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/CAMPAIGN_INFOS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/CAMPAIGN_INFOS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinescampaignInfosApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/CAMPAIGN_INFOS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/CAMPAIGN_INFOS/SetLineTotals/{_Indx}
     */
    public function eximlinescampaignInfosSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/CAMPAIGN_INFOS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/CAMPAIGN_INFOS/SetLineTotals/{_Indx}
     */
    public function eximlinescampaignInfosSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/CAMPAIGN_INFOS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/ADDTAXLINELIST
     */
    public function getEXIMLINESADDTAXLINELISTV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/ADDTAXLINELIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/ADDTAXLINELIST/{idt}
     */
    public function getEXIMLINESADDTAXLINELISTByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/ADDTAXLINELIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/ADDTAXLINELIST/AppendLine2
     */
    public function eximlinesaddtaxlinelistAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/ADDTAXLINELIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/ADDTAXLINELIST/AppendLine2
     */
    public function eximlinesaddtaxlinelistAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/ADDTAXLINELIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/ADDTAXLINELIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinesaddtaxlinelistAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/ADDTAXLINELIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/ADDTAXLINELIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinesaddtaxlinelistAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/ADDTAXLINELIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/ADDTAXLINELIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinesaddtaxlinelistGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/ADDTAXLINELIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/ADDTAXLINELIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinesaddtaxlinelistGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/ADDTAXLINELIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/ADDTAXLINELIST/AddLine2/{_index}
     */
    public function eximlinesaddtaxlinelistAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/ADDTAXLINELIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/ADDTAXLINELIST/AddLine2/{_index}
     */
    public function eximlinesaddtaxlinelistAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/ADDTAXLINELIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/ADDTAXLINELIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinesaddtaxlinelistAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/ADDTAXLINELIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/ADDTAXLINELIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinesaddtaxlinelistAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/ADDTAXLINELIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/ADDTAXLINELIST/EqualizeBalance/{_index}
     */
    public function eximlinesaddtaxlinelistEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/ADDTAXLINELIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/ADDTAXLINELIST/EqualizeBalance/{_index}
     */
    public function eximlinesaddtaxlinelistEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/ADDTAXLINELIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/FA_INFO/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinesdetailsfaInfoApplyaccdisttemplateV1($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/FA_INFO/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/FA_INFO/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinesdetailsfaInfoApplyaccdisttemplateV1Get($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/FA_INFO/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/FA_INFO/SetLineTotals/{_Indx}
     */
    public function eximlinesdetailsfaInfoSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/FA_INFO/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/FA_INFO/SetLineTotals/{_Indx}
     */
    public function eximlinesdetailsfaInfoSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/FA_INFO/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS
     */
    public function getEXIMLINESDETAILSSL_DETAILSV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{idt}
     */
    public function getEXIMLINESDETAILSSL_DETAILSByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/AppendLine2
     */
    public function eximlinesdetailsslDetailsAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/AppendLine2
     */
    public function eximlinesdetailsslDetailsAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinesdetailsslDetailsAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinesdetailsslDetailsAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinesdetailsslDetailsGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinesdetailsslDetailsGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/AddLine2/{_index}
     */
    public function eximlinesdetailsslDetailsAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/AddLine2/{_index}
     */
    public function eximlinesdetailsslDetailsAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinesdetailsslDetailsAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinesdetailsslDetailsAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/EqualizeBalance/{_index}
     */
    public function eximlinesdetailsslDetailsEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/EqualizeBalance/{_index}
     */
    public function eximlinesdetailsslDetailsEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinesdetailsslDetailsApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinesdetailsslDetailsApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/SetLineTotals/{_Indx}
     */
    public function eximlinesdetailsslDetailsSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/SetLineTotals/{_Indx}
     */
    public function eximlinesdetailsslDetailsSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST
     */
    public function getEXIMLINESDETAILSSL_DETAILSQCLISTV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{idt}
     */
    public function getEXIMLINESDETAILSSL_DETAILSQCLISTByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/AppendLine2
     */
    public function eximlinesdetailsslDetailsqclistAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/AppendLine2
     */
    public function eximlinesdetailsslDetailsqclistAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinesdetailsslDetailsqclistAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinesdetailsslDetailsqclistAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinesdetailsslDetailsqclistGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinesdetailsslDetailsqclistGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/AddLine2/{_index}
     */
    public function eximlinesdetailsslDetailsqclistAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/AddLine2/{_index}
     */
    public function eximlinesdetailsslDetailsqclistAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinesdetailsslDetailsqclistAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinesdetailsslDetailsqclistAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/EqualizeBalance/{_index}
     */
    public function eximlinesdetailsslDetailsqclistEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/EqualizeBalance/{_index}
     */
    public function eximlinesdetailsslDetailsqclistEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinesdetailsslDetailsqclistApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinesdetailsslDetailsqclistApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/SetLineTotals/{_Indx}
     */
    public function eximlinesdetailsslDetailsqclistSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/SetLineTotals/{_Indx}
     */
    public function eximlinesdetailsslDetailsqclistSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST
     */
    public function getEXIMLINESDETAILSSL_DETAILSQCLISTVALLISTV1($id, $id1, $id2, $id3, $id4, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/{idt}
     */
    public function getEXIMLINESDETAILSSL_DETAILSQCLISTVALLISTByIdV1($id, $id1, $id2, $id3, $id4, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AppendLine2
     */
    public function eximlinesdetailsslDetailsqclistvallistAppendline2V1($id, $id1, $id2, $id3, $id4, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AppendLine2
     */
    public function eximlinesdetailsslDetailsqclistvallistAppendline2V1Post($id1, $id2, $id3, $id4, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinesdetailsslDetailsqclistvallistAddserilotsV1($id, $id1, $id2, $id3, $id4, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinesdetailsslDetailsqclistvallistAddserilotsV1Post($id1, $id2, $id3, $id4, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinesslDetailsqclistvallistGetstocklinepriceV1($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinesslDetailsqclistvallistGetstocklinepriceV1Get($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AddLine2/{_index}
     */
    public function eximlinesslDetailsqclistvallistAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AddLine2/{_index}
     */
    public function eximlinesslDetailsqclistvallistAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinesslDetailsqclistvallistAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinesslDetailsqclistvallistAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/EqualizeBalance/{_index}
     */
    public function eximlinesslDetailsqclistvallistEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/EqualizeBalance/{_index}
     */
    public function eximlinesslDetailsqclistvallistEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinesslDetailsqclistvallistApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinesslDetailsqclistvallistApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/SetLineTotals/{_Indx}
     */
    public function eximlinesslDetailsqclistvallistSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/SetLineTotals/{_Indx}
     */
    public function eximlinesslDetailsqclistvallistSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS
     */
    public function getEXIMLINESDETAILSV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{idt}
     */
    public function getEXIMLINESDETAILSByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/AppendLine2
     */
    public function eximlinesdetailsAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/AppendLine2
     */
    public function eximlinesdetailsAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinesdetailsAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinesdetailsAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinesdetailsGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinesdetailsGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/AddLine2/{_index}
     */
    public function eximlinesdetailsAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/AddLine2/{_index}
     */
    public function eximlinesdetailsAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinesdetailsAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinesdetailsAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/EqualizeBalance/{_index}
     */
    public function eximlinesdetailsEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/EqualizeBalance/{_index}
     */
    public function eximlinesdetailsEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinesdetailsApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinesdetailsApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/SetLineTotals/{_Indx}
     */
    public function eximlinesdetailsSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/SetLineTotals/{_Indx}
     */
    public function eximlinesdetailsSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/FA_INFO
     */
    public function getEXIMLINESDETAILSFA_INFOV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/FA_INFO";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/FA_INFO/{idt}
     */
    public function getEXIMLINESDETAILSFA_INFOByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/FA_INFO/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/FA_INFO/AppendLine2
     */
    public function eximlinesdetailsfaInfoAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/FA_INFO/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/FA_INFO/AppendLine2
     */
    public function eximlinesdetailsfaInfoAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/FA_INFO/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/FA_INFO/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinesdetailsfaInfoAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/FA_INFO/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/FA_INFO/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinesdetailsfaInfoAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/FA_INFO/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/FA_INFO/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinesdetailsfaInfoGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/FA_INFO/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/FA_INFO/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinesdetailsfaInfoGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/FA_INFO/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/FA_INFO/AddLine2/{_index}
     */
    public function eximlinesdetailsfaInfoAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/FA_INFO/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/FA_INFO/AddLine2/{_index}
     */
    public function eximlinesdetailsfaInfoAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/FA_INFO/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/FA_INFO/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinesdetailsfaInfoAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/FA_INFO/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/FA_INFO/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinesdetailsfaInfoAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/FA_INFO/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/DETAILS/{id2}/FA_INFO/EqualizeBalance/{_index}
     */
    public function eximlinesdetailsfaInfoEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/DETAILS/{$id2}/FA_INFO/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/DETAILS/{id2}/FA_INFO/EqualizeBalance/{_index}
     */
    public function eximlinesdetailsfaInfoEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/DETAILS/{$id2}/FA_INFO/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/FA_INFO/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinesfaInfoApplyaccdisttemplateV1($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/FA_INFO/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/FA_INFO/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinesfaInfoApplyaccdisttemplateV1Get($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/FA_INFO/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/FA_INFO/SetLineTotals/{_Indx}
     */
    public function eximlinesfaInfoSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/FA_INFO/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/FA_INFO/SetLineTotals/{_Indx}
     */
    public function eximlinesfaInfoSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/FA_INFO/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS
     */
    public function getEXIMLINESSL_DETAILSV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/{idt}
     */
    public function getEXIMLINESSL_DETAILSByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/AppendLine2
     */
    public function eximlinesslDetailsAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/SL_DETAILS/AppendLine2
     */
    public function eximlinesslDetailsAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/SL_DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinesslDetailsAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/SL_DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinesslDetailsAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/SL_DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinesslDetailsGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/SL_DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinesslDetailsGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/SL_DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/AddLine2/{_index}
     */
    public function eximlinesslDetailsAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/SL_DETAILS/AddLine2/{_index}
     */
    public function eximlinesslDetailsAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/SL_DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinesslDetailsAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/SL_DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinesslDetailsAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/SL_DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/EqualizeBalance/{_index}
     */
    public function eximlinesslDetailsEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/SL_DETAILS/EqualizeBalance/{_index}
     */
    public function eximlinesslDetailsEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/SL_DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinesslDetailsApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/SL_DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinesslDetailsApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/SL_DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/SetLineTotals/{_Indx}
     */
    public function eximlinesslDetailsSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/SL_DETAILS/SetLineTotals/{_Indx}
     */
    public function eximlinesslDetailsSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/SL_DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST
     */
    public function getEXIMLINESSL_DETAILSQCLISTV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/{idt}
     */
    public function getEXIMLINESSL_DETAILSQCLISTByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/AppendLine2
     */
    public function eximlinesslDetailsqclistAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/AppendLine2
     */
    public function eximlinesslDetailsqclistAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinesslDetailsqclistAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinesslDetailsqclistAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinesslDetailsqclistGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinesslDetailsqclistGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/AddLine2/{_index}
     */
    public function eximlinesslDetailsqclistAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/AddLine2/{_index}
     */
    public function eximlinesslDetailsqclistAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinesslDetailsqclistAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinesslDetailsqclistAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/EqualizeBalance/{_index}
     */
    public function eximlinesslDetailsqclistEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/EqualizeBalance/{_index}
     */
    public function eximlinesslDetailsqclistEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinesslDetailsqclistApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinesslDetailsqclistApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/SetLineTotals/{_Indx}
     */
    public function eximlinesslDetailsqclistSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/SetLineTotals/{_Indx}
     */
    public function eximlinesslDetailsqclistSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST
     */
    public function getEXIMLINESSL_DETAILSQCLISTVALLISTV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/{idt}
     */
    public function getEXIMLINESSL_DETAILSQCLISTVALLISTByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AppendLine2
     */
    public function eximlinesslDetailsqclistvallistAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AppendLine2
     */
    public function eximlinesslDetailsqclistvallistAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinesslDetailsqclistvallistAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinesslDetailsqclistvallistAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/{id2}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchesxrelatedArpdefnfldslistGetstocklinepriceV1($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchesxrelatedArpdefnfldslistGetstocklinepriceV1Get($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function dispatchesxrelatedArpdefnfldslistAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/{id2}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function dispatchesxrelatedArpdefnfldslistAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchesxrelatedArpdefnfldslistAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/{id2}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchesxrelatedArpdefnfldslistAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function dispatchesxrelatedArpdefnfldslistEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/{id2}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function dispatchesxrelatedArpdefnfldslistEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchesxrelatedArpdefnfldslistApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/{id2}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchesxrelatedArpdefnfldslistApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function dispatchesxrelatedArpdefnfldslistSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/{id2}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function dispatchesxrelatedArpdefnfldslistSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES
     */
    public function getEXIMLINESV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{idt}
     */
    public function getEXIMLINESByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/AppendLine2
     */
    public function eximlinesAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/AppendLine2
     */
    public function eximlinesAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinesAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinesAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinesGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinesGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/AddLine2/{_index}
     */
    public function eximlinesAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/AddLine2/{_index}
     */
    public function eximlinesAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinesAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinesAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/EqualizeBalance/{_index}
     */
    public function eximlinesEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/EqualizeBalance/{_index}
     */
    public function eximlinesEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinesApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function eximlinesApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/SetLineTotals/{_Indx}
     */
    public function eximlinesSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/SetLineTotals/{_Indx}
     */
    public function eximlinesSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/FA_INFO
     */
    public function getEXIMLINESFA_INFOV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/FA_INFO";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/FA_INFO/{idt}
     */
    public function getEXIMLINESFA_INFOByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/FA_INFO/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/FA_INFO/AppendLine2
     */
    public function eximlinesfaInfoAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/FA_INFO/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/FA_INFO/AppendLine2
     */
    public function eximlinesfaInfoAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/FA_INFO/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/FA_INFO/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinesfaInfoAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/FA_INFO/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/FA_INFO/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function eximlinesfaInfoAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/FA_INFO/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/FA_INFO/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinesfaInfoGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/FA_INFO/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/FA_INFO/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function eximlinesfaInfoGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/FA_INFO/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/FA_INFO/AddLine2/{_index}
     */
    public function eximlinesfaInfoAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/FA_INFO/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/FA_INFO/AddLine2/{_index}
     */
    public function eximlinesfaInfoAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/FA_INFO/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/FA_INFO/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinesfaInfoAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/FA_INFO/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/FA_INFO/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function eximlinesfaInfoAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/FA_INFO/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/EXIMLINES/{id1}/FA_INFO/EqualizeBalance/{_index}
     */
    public function eximlinesfaInfoEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/EXIMLINES/{$id1}/FA_INFO/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/EXIMLINES/{id1}/FA_INFO/EqualizeBalance/{_index}
     */
    public function eximlinesfaInfoEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/EXIMLINES/{$id1}/FA_INFO/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchesxrelatedArpApplyaccdisttemplateV1($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchesxrelatedArpApplyaccdisttemplateV1Get($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/SetLineTotals/{_Indx}
     */
    public function dispatchesxrelatedArpSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/SetLineTotals/{_Indx}
     */
    public function dispatchesxrelatedArpSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/NOTES
     */
    public function getDISPATCHESXRELATED_ARPNOTESV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/NOTES";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/NOTES/{idt}
     */
    public function getDISPATCHESXRELATED_ARPNOTESByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/NOTES/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/NOTES/AppendLine2
     */
    public function dispatchesxrelatedArpnotesAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/NOTES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/{id2}/NOTES/AppendLine2
     */
    public function dispatchesxrelatedArpnotesAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/NOTES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/NOTES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchesxrelatedArpnotesAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/NOTES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/{id2}/NOTES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchesxrelatedArpnotesAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/NOTES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/NOTES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchesxrelatedArpnotesGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/NOTES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/{id2}/NOTES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchesxrelatedArpnotesGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/NOTES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/NOTES/AddLine2/{_index}
     */
    public function dispatchesxrelatedArpnotesAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/NOTES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/{id2}/NOTES/AddLine2/{_index}
     */
    public function dispatchesxrelatedArpnotesAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/NOTES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/NOTES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchesxrelatedArpnotesAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/NOTES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/{id2}/NOTES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchesxrelatedArpnotesAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/NOTES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/NOTES/EqualizeBalance/{_index}
     */
    public function dispatchesxrelatedArpnotesEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/NOTES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/{id2}/NOTES/EqualizeBalance/{_index}
     */
    public function dispatchesxrelatedArpnotesEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/NOTES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/NOTES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchesxrelatedArpnotesApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/NOTES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/{id2}/NOTES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchesxrelatedArpnotesApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/NOTES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/NOTES/SetLineTotals/{_Indx}
     */
    public function dispatchesxrelatedArpnotesSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/NOTES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/{id2}/NOTES/SetLineTotals/{_Indx}
     */
    public function dispatchesxrelatedArpnotesSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/NOTES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/GENIUSFLDSLIST
     */
    public function getDISPATCHESXRELATED_ARPGENIUSFLDSLISTV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/GENIUSFLDSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/GENIUSFLDSLIST/{idt}
     */
    public function getDISPATCHESXRELATED_ARPGENIUSFLDSLISTByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/GENIUSFLDSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/GENIUSFLDSLIST/AppendLine2
     */
    public function dispatchesxrelatedArpgeniusfldslistAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/GENIUSFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/{id2}/GENIUSFLDSLIST/AppendLine2
     */
    public function dispatchesxrelatedArpgeniusfldslistAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/GENIUSFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/GENIUSFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchesxrelatedArpgeniusfldslistAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/GENIUSFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/{id2}/GENIUSFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchesxrelatedArpgeniusfldslistAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/GENIUSFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/GENIUSFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchesxrelatedArpgeniusfldslistGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/GENIUSFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/{id2}/GENIUSFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchesxrelatedArpgeniusfldslistGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/GENIUSFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/GENIUSFLDSLIST/AddLine2/{_index}
     */
    public function dispatchesxrelatedArpgeniusfldslistAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/GENIUSFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/{id2}/GENIUSFLDSLIST/AddLine2/{_index}
     */
    public function dispatchesxrelatedArpgeniusfldslistAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/GENIUSFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/GENIUSFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchesxrelatedArpgeniusfldslistAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/GENIUSFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/{id2}/GENIUSFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchesxrelatedArpgeniusfldslistAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/GENIUSFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/GENIUSFLDSLIST/EqualizeBalance/{_index}
     */
    public function dispatchesxrelatedArpgeniusfldslistEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/GENIUSFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/{id2}/GENIUSFLDSLIST/EqualizeBalance/{_index}
     */
    public function dispatchesxrelatedArpgeniusfldslistEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/GENIUSFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/GENIUSFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchesxrelatedArpgeniusfldslistApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/GENIUSFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/{id2}/GENIUSFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchesxrelatedArpgeniusfldslistApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/GENIUSFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/GENIUSFLDSLIST/SetLineTotals/{_Indx}
     */
    public function dispatchesxrelatedArpgeniusfldslistSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/GENIUSFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/{id2}/GENIUSFLDSLIST/SetLineTotals/{_Indx}
     */
    public function dispatchesxrelatedArpgeniusfldslistSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/GENIUSFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/DEFNFLDSLIST
     */
    public function getDISPATCHESXRELATED_ARPDEFNFLDSLISTV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/DEFNFLDSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/DEFNFLDSLIST/{idt}
     */
    public function getDISPATCHESXRELATED_ARPDEFNFLDSLISTByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/DEFNFLDSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/DEFNFLDSLIST/AppendLine2
     */
    public function dispatchesxrelatedArpdefnfldslistAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/{id2}/DEFNFLDSLIST/AppendLine2
     */
    public function dispatchesxrelatedArpdefnfldslistAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{id2}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchesxrelatedArpdefnfldslistAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/{id2}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchesxrelatedArpdefnfldslistAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/{$id2}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchesdefnfldslistGetstocklinepriceV1($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchesdefnfldslistGetstocklinepriceV1Get($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function dispatchesdefnfldslistAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function dispatchesdefnfldslistAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchesdefnfldslistAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchesdefnfldslistAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function dispatchesdefnfldslistEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function dispatchesdefnfldslistEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchesdefnfldslistApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchesdefnfldslistApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function dispatchesdefnfldslistSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function dispatchesdefnfldslistSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/LABEL_LIST
     */
    public function getDISPATCHESLABEL_LISTV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/LABEL_LIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/LABEL_LIST/{idt}
     */
    public function getDISPATCHESLABEL_LISTByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/LABEL_LIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/LABEL_LIST/AppendLine2
     */
    public function dispatcheslabelListAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/LABEL_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/LABEL_LIST/AppendLine2
     */
    public function dispatcheslabelListAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/LABEL_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/LABEL_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatcheslabelListAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/LABEL_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/LABEL_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatcheslabelListAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/LABEL_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/LABEL_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatcheslabelListGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/LABEL_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/LABEL_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatcheslabelListGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/LABEL_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/LABEL_LIST/AddLine2/{_index}
     */
    public function dispatcheslabelListAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/LABEL_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/LABEL_LIST/AddLine2/{_index}
     */
    public function dispatcheslabelListAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/LABEL_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/LABEL_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatcheslabelListAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/LABEL_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/LABEL_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatcheslabelListAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/LABEL_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/LABEL_LIST/EqualizeBalance/{_index}
     */
    public function dispatcheslabelListEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/LABEL_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/LABEL_LIST/EqualizeBalance/{_index}
     */
    public function dispatcheslabelListEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/LABEL_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/LABEL_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatcheslabelListApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/LABEL_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/LABEL_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatcheslabelListApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/LABEL_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/LABEL_LIST/SetLineTotals/{_Indx}
     */
    public function dispatcheslabelListSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/LABEL_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/LABEL_LIST/SetLineTotals/{_Indx}
     */
    public function dispatcheslabelListSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/LABEL_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP
     */
    public function getDISPATCHESXRELATED_ARPV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/{idt}
     */
    public function getDISPATCHESXRELATED_ARPByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/AppendLine2
     */
    public function dispatchesxrelatedArpAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/AppendLine2
     */
    public function dispatchesxrelatedArpAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchesxrelatedArpAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchesxrelatedArpAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchesxrelatedArpGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchesxrelatedArpGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/AddLine2/{_index}
     */
    public function dispatchesxrelatedArpAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/AddLine2/{_index}
     */
    public function dispatchesxrelatedArpAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchesxrelatedArpAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchesxrelatedArpAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/XRELATED_ARP/EqualizeBalance/{_index}
     */
    public function dispatchesxrelatedArpEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/XRELATED_ARP/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/XRELATED_ARP/EqualizeBalance/{_index}
     */
    public function dispatchesxrelatedArpEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/XRELATED_ARP/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/GL_LINKS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedServiceglLinksApplyaccdisttemplateV1($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/GL_LINKS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/GL_LINKS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedServiceglLinksApplyaccdisttemplateV1Get($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/GL_LINKS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/GL_LINKS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedServiceglLinksSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/GL_LINKS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/GL_LINKS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedServiceglLinksSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/GL_LINKS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/ADDTAXLIST
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_SERVICEADDTAXLISTV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/ADDTAXLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/ADDTAXLIST/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_SERVICEADDTAXLISTByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/ADDTAXLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/ADDTAXLIST/AppendLine2
     */
    public function dispatchestransactionsxrelatedServiceaddtaxlistAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/ADDTAXLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/ADDTAXLIST/AppendLine2
     */
    public function dispatchestransactionsxrelatedServiceaddtaxlistAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/ADDTAXLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/ADDTAXLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedServiceaddtaxlistAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/ADDTAXLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/ADDTAXLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedServiceaddtaxlistAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/ADDTAXLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/ADDTAXLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedServiceaddtaxlistGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/ADDTAXLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/ADDTAXLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedServiceaddtaxlistGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/ADDTAXLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/ADDTAXLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedServiceaddtaxlistAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/ADDTAXLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/ADDTAXLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedServiceaddtaxlistAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/ADDTAXLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/ADDTAXLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedServiceaddtaxlistAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/ADDTAXLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/ADDTAXLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedServiceaddtaxlistAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/ADDTAXLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/ADDTAXLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedServiceaddtaxlistEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/ADDTAXLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/ADDTAXLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedServiceaddtaxlistEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/ADDTAXLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/ADDTAXLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedServiceaddtaxlistApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/ADDTAXLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/ADDTAXLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedServiceaddtaxlistApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/ADDTAXLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/ADDTAXLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedServiceaddtaxlistSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/ADDTAXLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/ADDTAXLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedServiceaddtaxlistSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/ADDTAXLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_DISCEXP
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_DISCEXPV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_DISCEXP";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_DISCEXP/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_DISCEXPByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_DISCEXP/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_DISCEXP/AppendLine2
     */
    public function dispatchestransactionsxrelatedDiscexpAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_DISCEXP/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_DISCEXP/AppendLine2
     */
    public function dispatchestransactionsxrelatedDiscexpAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_DISCEXP/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_DISCEXP/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedDiscexpAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_DISCEXP/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_DISCEXP/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedDiscexpAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_DISCEXP/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_DISCEXP/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedDiscexpGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_DISCEXP/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_DISCEXP/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedDiscexpGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_DISCEXP/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_DISCEXP/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedDiscexpAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_DISCEXP/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_DISCEXP/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedDiscexpAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_DISCEXP/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_DISCEXP/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedDiscexpAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_DISCEXP/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_DISCEXP/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedDiscexpAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_DISCEXP/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_DISCEXP/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedDiscexpEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_DISCEXP/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_DISCEXP/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedDiscexpEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_DISCEXP/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_DISCEXP/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedDiscexpApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_DISCEXP/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_DISCEXP/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedDiscexpApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_DISCEXP/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_DISCEXP/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedDiscexpSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_DISCEXP/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_DISCEXP/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedDiscexpSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_DISCEXP/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/DEFNFLDSLIST
     */
    public function getDISPATCHESDEFNFLDSLISTV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/DEFNFLDSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/DEFNFLDSLIST/{idt}
     */
    public function getDISPATCHESDEFNFLDSLISTByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/DEFNFLDSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/DEFNFLDSLIST/AppendLine2
     */
    public function dispatchesdefnfldslistAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/DEFNFLDSLIST/AppendLine2
     */
    public function dispatchesdefnfldslistAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchesdefnfldslistAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchesdefnfldslistAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/WH_PARAMS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedServicewhParamsGetstocklinepriceV1($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/WH_PARAMS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/WH_PARAMS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedServicewhParamsGetstocklinepriceV1Get($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/WH_PARAMS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/WH_PARAMS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedServicewhParamsAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/WH_PARAMS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/WH_PARAMS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedServicewhParamsAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/WH_PARAMS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/WH_PARAMS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedServicewhParamsAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/WH_PARAMS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/WH_PARAMS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedServicewhParamsAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/WH_PARAMS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/WH_PARAMS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedServicewhParamsEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/WH_PARAMS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/WH_PARAMS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedServicewhParamsEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/WH_PARAMS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/WH_PARAMS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedServicewhParamsApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/WH_PARAMS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/WH_PARAMS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedServicewhParamsApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/WH_PARAMS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/WH_PARAMS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedServicewhParamsSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/WH_PARAMS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/WH_PARAMS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedServicewhParamsSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/WH_PARAMS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/UNITS
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_SERVICEUNITSV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/UNITS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/UNITS/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_SERVICEUNITSByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/UNITS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/UNITS/AppendLine2
     */
    public function dispatchestransactionsxrelatedServiceunitsAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/UNITS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/UNITS/AppendLine2
     */
    public function dispatchestransactionsxrelatedServiceunitsAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/UNITS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/UNITS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedServiceunitsAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/UNITS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/UNITS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedServiceunitsAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/UNITS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/UNITS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedServiceunitsGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/UNITS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/UNITS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedServiceunitsGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/UNITS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/UNITS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedServiceunitsAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/UNITS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/UNITS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedServiceunitsAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/UNITS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/UNITS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedServiceunitsAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/UNITS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/UNITS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedServiceunitsAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/UNITS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/UNITS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedServiceunitsEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/UNITS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/UNITS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedServiceunitsEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/UNITS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/UNITS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedServiceunitsApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/UNITS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/UNITS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedServiceunitsApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/UNITS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/UNITS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedServiceunitsSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/UNITS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/UNITS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedServiceunitsSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/UNITS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/GL_LINKS
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_SERVICEGL_LINKSV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/GL_LINKS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/GL_LINKS/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_SERVICEGL_LINKSByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/GL_LINKS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/GL_LINKS/AppendLine2
     */
    public function dispatchestransactionsxrelatedServiceglLinksAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/GL_LINKS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/GL_LINKS/AppendLine2
     */
    public function dispatchestransactionsxrelatedServiceglLinksAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/GL_LINKS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/GL_LINKS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedServiceglLinksAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/GL_LINKS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/GL_LINKS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedServiceglLinksAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/GL_LINKS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/GL_LINKS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedServiceglLinksGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/GL_LINKS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/GL_LINKS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedServiceglLinksGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/GL_LINKS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/GL_LINKS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedServiceglLinksAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/GL_LINKS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/GL_LINKS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedServiceglLinksAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/GL_LINKS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/GL_LINKS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedServiceglLinksAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/GL_LINKS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/GL_LINKS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedServiceglLinksAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/GL_LINKS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/GL_LINKS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedServiceglLinksEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/GL_LINKS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/GL_LINKS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedServiceglLinksEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/GL_LINKS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ALTERNATIVES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemalternativesApplyaccdisttemplateV1($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ALTERNATIVES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ALTERNATIVES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemalternativesApplyaccdisttemplateV1Get($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ALTERNATIVES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ALTERNATIVES/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemalternativesSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ALTERNATIVES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ALTERNATIVES/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemalternativesSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ALTERNATIVES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/LABEL_LIST
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMLABEL_LISTV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/LABEL_LIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/LABEL_LIST/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMLABEL_LISTByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/LABEL_LIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/LABEL_LIST/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemlabelListAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/LABEL_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/LABEL_LIST/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemlabelListAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/LABEL_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/LABEL_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemlabelListAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/LABEL_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/LABEL_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemlabelListAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/LABEL_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/LABEL_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemlabelListGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/LABEL_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/LABEL_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemlabelListGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/LABEL_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/LABEL_LIST/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemlabelListAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/LABEL_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/LABEL_LIST/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemlabelListAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/LABEL_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/LABEL_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemlabelListAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/LABEL_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/LABEL_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemlabelListAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/LABEL_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/LABEL_LIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemlabelListEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/LABEL_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/LABEL_LIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemlabelListEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/LABEL_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/LABEL_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemlabelListApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/LABEL_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/LABEL_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemlabelListApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/LABEL_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/LABEL_LIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemlabelListSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/LABEL_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/LABEL_LIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemlabelListSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/LABEL_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_SERVICEV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_SERVICEByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/AppendLine2
     */
    public function dispatchestransactionsxrelatedServiceAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/AppendLine2
     */
    public function dispatchestransactionsxrelatedServiceAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedServiceAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedServiceAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedServiceGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedServiceGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedServiceAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedServiceAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedServiceAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedServiceAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedServiceEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedServiceEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedServiceApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedServiceApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedServiceSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedServiceSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/WH_PARAMS
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_SERVICEWH_PARAMSV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/WH_PARAMS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/WH_PARAMS/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_SERVICEWH_PARAMSByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/WH_PARAMS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/WH_PARAMS/AppendLine2
     */
    public function dispatchestransactionsxrelatedServicewhParamsAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/WH_PARAMS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/WH_PARAMS/AppendLine2
     */
    public function dispatchestransactionsxrelatedServicewhParamsAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/WH_PARAMS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/WH_PARAMS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedServicewhParamsAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/WH_PARAMS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_SERVICE/{id3}/WH_PARAMS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedServicewhParamsAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_SERVICE/{$id3}/WH_PARAMS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempsGetstocklinepriceV1($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempsGetstocklinepriceV1Get($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempsAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempsAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempsAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempsAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempsEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempsEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempsApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempsApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempsSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempsSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/{id4}/TEMPVALS
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMVRNTEXCPTEMPSTEMPVALSV1($id, $id1, $id2, $id3, $id4, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/{$id4}/TEMPVALS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/{id4}/TEMPVALS/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMVRNTEXCPTEMPSTEMPVALSByIdV1($id, $id1, $id2, $id3, $id4, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/{$id4}/TEMPVALS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/{id4}/TEMPVALS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempstempvalsAppendline2V1($id, $id1, $id2, $id3, $id4, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/{$id4}/TEMPVALS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/{id4}/TEMPVALS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempstempvalsAppendline2V1Post($id1, $id2, $id3, $id4, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/{$id4}/TEMPVALS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/{id4}/TEMPVALS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempstempvalsAddserilotsV1($id, $id1, $id2, $id3, $id4, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/{$id4}/TEMPVALS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/{id4}/TEMPVALS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempstempvalsAddserilotsV1Post($id1, $id2, $id3, $id4, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/{$id4}/TEMPVALS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/{id4}/TEMPVALS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempstempvalsGetstocklinepriceV1($id, $id1, $id2, $id3, $id4, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/{$id4}/TEMPVALS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/{id4}/TEMPVALS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempstempvalsGetstocklinepriceV1Post($id1, $id2, $id3, $id4, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/{$id4}/TEMPVALS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/{id4}/TEMPVALS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempstempvalsAddline2V1($id, $id1, $id2, $id3, $id4, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/{$id4}/TEMPVALS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/{id4}/TEMPVALS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempstempvalsAddline2V1Post($id1, $id2, $id3, $id4, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/{$id4}/TEMPVALS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/{id4}/TEMPVALS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempstempvalsAppendserilotsV1($id, $id1, $id2, $id3, $id4, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/{$id4}/TEMPVALS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/{id4}/TEMPVALS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempstempvalsAppendserilotsV1Post($id1, $id2, $id3, $id4, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/{$id4}/TEMPVALS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/{id4}/TEMPVALS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempstempvalsEqualizebalanceV1($id, $id1, $id2, $id3, $id4, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/{$id4}/TEMPVALS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/{id4}/TEMPVALS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempstempvalsEqualizebalanceV1Post($id1, $id2, $id3, $id4, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/{$id4}/TEMPVALS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/{id4}/TEMPVALS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempstempvalsApplyaccdisttemplateV1($id, $id1, $id2, $id3, $id4, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/{$id4}/TEMPVALS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/{id4}/TEMPVALS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempstempvalsApplyaccdisttemplateV1Post($id1, $id2, $id3, $id4, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/{$id4}/TEMPVALS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/{id4}/TEMPVALS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempstempvalsSetlinetotalsV1($id, $id1, $id2, $id3, $id4, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/{$id4}/TEMPVALS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/{id4}/TEMPVALS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempstempvalsSetlinetotalsV1Post($id1, $id2, $id3, $id4, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/{$id4}/TEMPVALS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ALTERNATIVES
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMALTERNATIVESV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ALTERNATIVES";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ALTERNATIVES/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMALTERNATIVESByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ALTERNATIVES/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ALTERNATIVES/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemalternativesAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ALTERNATIVES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ALTERNATIVES/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemalternativesAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ALTERNATIVES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ALTERNATIVES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemalternativesAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ALTERNATIVES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ALTERNATIVES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemalternativesAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ALTERNATIVES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ALTERNATIVES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemalternativesGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ALTERNATIVES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ALTERNATIVES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemalternativesGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ALTERNATIVES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ALTERNATIVES/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemalternativesAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ALTERNATIVES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ALTERNATIVES/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemalternativesAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ALTERNATIVES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ALTERNATIVES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemalternativesAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ALTERNATIVES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ALTERNATIVES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemalternativesAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ALTERNATIVES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ALTERNATIVES/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemalternativesEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ALTERNATIVES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ALTERNATIVES/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemalternativesEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ALTERNATIVES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/{id4}/VALREFSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsvalrefslistApplyaccdisttemplateV1($id1, $id2, $id3, $id4, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/{$id4}/VALREFSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/{id4}/VALREFSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsvalrefslistApplyaccdisttemplateV1Get($id, $id1, $id2, $id3, $id4, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/{$id4}/VALREFSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/{id4}/VALREFSLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsvalrefslistSetlinetotalsV1($id, $id1, $id2, $id3, $id4, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/{$id4}/VALREFSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/{id4}/VALREFSLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsvalrefslistSetlinetotalsV1Post($id1, $id2, $id3, $id4, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/{$id4}/VALREFSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMVRNTCODETEMPSV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMVRNTCODETEMPSByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempsAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempsAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempsAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempsAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempsGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempsGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempsAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempsAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempsAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempsAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempsEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempsEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempsApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempsApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempsSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempsSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/{id4}/TEMPVALS
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMVRNTCODETEMPSTEMPVALSV1($id, $id1, $id2, $id3, $id4, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/{$id4}/TEMPVALS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/{id4}/TEMPVALS/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMVRNTCODETEMPSTEMPVALSByIdV1($id, $id1, $id2, $id3, $id4, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/{$id4}/TEMPVALS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/{id4}/TEMPVALS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempstempvalsAppendline2V1($id, $id1, $id2, $id3, $id4, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/{$id4}/TEMPVALS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/{id4}/TEMPVALS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempstempvalsAppendline2V1Post($id1, $id2, $id3, $id4, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/{$id4}/TEMPVALS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/{id4}/TEMPVALS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempstempvalsAddserilotsV1($id, $id1, $id2, $id3, $id4, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/{$id4}/TEMPVALS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/{id4}/TEMPVALS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempstempvalsAddserilotsV1Post($id1, $id2, $id3, $id4, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/{$id4}/TEMPVALS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/{id4}/TEMPVALS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempstempvalsGetstocklinepriceV1($id, $id1, $id2, $id3, $id4, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/{$id4}/TEMPVALS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/{id4}/TEMPVALS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempstempvalsGetstocklinepriceV1Post($id1, $id2, $id3, $id4, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/{$id4}/TEMPVALS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/{id4}/TEMPVALS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempstempvalsAddline2V1($id, $id1, $id2, $id3, $id4, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/{$id4}/TEMPVALS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/{id4}/TEMPVALS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempstempvalsAddline2V1Post($id1, $id2, $id3, $id4, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/{$id4}/TEMPVALS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/{id4}/TEMPVALS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempstempvalsAppendserilotsV1($id, $id1, $id2, $id3, $id4, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/{$id4}/TEMPVALS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/{id4}/TEMPVALS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempstempvalsAppendserilotsV1Post($id1, $id2, $id3, $id4, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/{$id4}/TEMPVALS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/{id4}/TEMPVALS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempstempvalsEqualizebalanceV1($id, $id1, $id2, $id3, $id4, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/{$id4}/TEMPVALS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/{id4}/TEMPVALS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempstempvalsEqualizebalanceV1Post($id1, $id2, $id3, $id4, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/{$id4}/TEMPVALS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/{id4}/TEMPVALS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempstempvalsApplyaccdisttemplateV1($id, $id1, $id2, $id3, $id4, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/{$id4}/TEMPVALS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/{id4}/TEMPVALS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempstempvalsApplyaccdisttemplateV1Post($id1, $id2, $id3, $id4, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/{$id4}/TEMPVALS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/{id4}/TEMPVALS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempstempvalsSetlinetotalsV1($id, $id1, $id2, $id3, $id4, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/{$id4}/TEMPVALS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTCODETEMPS/{id4}/TEMPVALS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemvrntcodetempstempvalsSetlinetotalsV1Post($id1, $id2, $id3, $id4, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTCODETEMPS/{$id4}/TEMPVALS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMVRNTEXCPTEMPSV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMVRNTEXCPTEMPSByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempsAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempsAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempsAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCPTEMPS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemvrntexcptempsAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCPTEMPS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemdefnfldslistGetstocklinepriceV1($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemdefnfldslistGetstocklinepriceV1Get($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemdefnfldslistAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemdefnfldslistAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemdefnfldslistAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemdefnfldslistAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemdefnfldslistEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemdefnfldslistEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemdefnfldslistApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemdefnfldslistApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemdefnfldslistSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemdefnfldslistSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMVRNTEXCEPTIONSV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMVRNTEXCEPTIONSByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/{id4}/VALREFSLIST
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMVRNTEXCEPTIONSVALREFSLISTV1($id, $id1, $id2, $id3, $id4, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/{$id4}/VALREFSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/{id4}/VALREFSLIST/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMVRNTEXCEPTIONSVALREFSLISTByIdV1($id, $id1, $id2, $id3, $id4, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/{$id4}/VALREFSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/{id4}/VALREFSLIST/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsvalrefslistAppendline2V1($id, $id1, $id2, $id3, $id4, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/{$id4}/VALREFSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/{id4}/VALREFSLIST/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsvalrefslistAppendline2V1Post($id1, $id2, $id3, $id4, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/{$id4}/VALREFSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/{id4}/VALREFSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsvalrefslistAddserilotsV1($id, $id1, $id2, $id3, $id4, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/{$id4}/VALREFSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/{id4}/VALREFSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsvalrefslistAddserilotsV1Post($id1, $id2, $id3, $id4, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/{$id4}/VALREFSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/{id4}/VALREFSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsvalrefslistGetstocklinepriceV1($id, $id1, $id2, $id3, $id4, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/{$id4}/VALREFSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/{id4}/VALREFSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsvalrefslistGetstocklinepriceV1Post($id1, $id2, $id3, $id4, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/{$id4}/VALREFSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/{id4}/VALREFSLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsvalrefslistAddline2V1($id, $id1, $id2, $id3, $id4, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/{$id4}/VALREFSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/{id4}/VALREFSLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsvalrefslistAddline2V1Post($id1, $id2, $id3, $id4, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/{$id4}/VALREFSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/{id4}/VALREFSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsvalrefslistAppendserilotsV1($id, $id1, $id2, $id3, $id4, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/{$id4}/VALREFSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/{id4}/VALREFSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsvalrefslistAppendserilotsV1Post($id1, $id2, $id3, $id4, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/{$id4}/VALREFSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/{id4}/VALREFSLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsvalrefslistEqualizebalanceV1($id, $id1, $id2, $id3, $id4, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/{$id4}/VALREFSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/VRNTEXCEPTIONS/{id4}/VALREFSLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemvrntexceptionsvalrefslistEqualizebalanceV1Post($id1, $id2, $id3, $id4, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/VRNTEXCEPTIONS/{$id4}/VALREFSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemqprodsApplyaccdisttemplateV1($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemqprodsApplyaccdisttemplateV1Get($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemqprodsSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemqprodsSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODSUBCONTS
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMQPRODSUBCONTSV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODSUBCONTS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODSUBCONTS/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMQPRODSUBCONTSByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODSUBCONTS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODSUBCONTS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemqprodsubcontsAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODSUBCONTS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODSUBCONTS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemqprodsubcontsAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODSUBCONTS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODSUBCONTS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemqprodsubcontsAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODSUBCONTS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODSUBCONTS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemqprodsubcontsAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODSUBCONTS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODSUBCONTS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemqprodsubcontsGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODSUBCONTS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODSUBCONTS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemqprodsubcontsGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODSUBCONTS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODSUBCONTS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemqprodsubcontsAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODSUBCONTS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODSUBCONTS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemqprodsubcontsAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODSUBCONTS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODSUBCONTS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemqprodsubcontsAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODSUBCONTS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODSUBCONTS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemqprodsubcontsAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODSUBCONTS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODSUBCONTS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemqprodsubcontsEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODSUBCONTS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODSUBCONTS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemqprodsubcontsEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODSUBCONTS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODSUBCONTS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemqprodsubcontsApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODSUBCONTS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODSUBCONTS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemqprodsubcontsApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODSUBCONTS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODSUBCONTS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemqprodsubcontsSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODSUBCONTS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODSUBCONTS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemqprodsubcontsSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODSUBCONTS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GENIUSFLDSLIST
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMGENIUSFLDSLISTV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GENIUSFLDSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GENIUSFLDSLIST/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMGENIUSFLDSLISTByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GENIUSFLDSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GENIUSFLDSLIST/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemgeniusfldslistAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GENIUSFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GENIUSFLDSLIST/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemgeniusfldslistAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GENIUSFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GENIUSFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemgeniusfldslistAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GENIUSFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GENIUSFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemgeniusfldslistAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GENIUSFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GENIUSFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemgeniusfldslistGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GENIUSFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GENIUSFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemgeniusfldslistGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GENIUSFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GENIUSFLDSLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemgeniusfldslistAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GENIUSFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GENIUSFLDSLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemgeniusfldslistAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GENIUSFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GENIUSFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemgeniusfldslistAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GENIUSFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GENIUSFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemgeniusfldslistAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GENIUSFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GENIUSFLDSLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemgeniusfldslistEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GENIUSFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GENIUSFLDSLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemgeniusfldslistEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GENIUSFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GENIUSFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemgeniusfldslistApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GENIUSFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GENIUSFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemgeniusfldslistApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GENIUSFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GENIUSFLDSLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemgeniusfldslistSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GENIUSFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GENIUSFLDSLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemgeniusfldslistSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GENIUSFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DEFNFLDSLIST
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMDEFNFLDSLISTV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DEFNFLDSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DEFNFLDSLIST/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMDEFNFLDSLISTByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DEFNFLDSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DEFNFLDSLIST/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemdefnfldslistAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DEFNFLDSLIST/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemdefnfldslistAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemdefnfldslistAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemdefnfldslistAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/SUPPLIERS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemsuppliersGetstocklinepriceV1($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/SUPPLIERS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/SUPPLIERS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemsuppliersGetstocklinepriceV1Get($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/SUPPLIERS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/SUPPLIERS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemsuppliersAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/SUPPLIERS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/SUPPLIERS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemsuppliersAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/SUPPLIERS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/SUPPLIERS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemsuppliersAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/SUPPLIERS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/SUPPLIERS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemsuppliersAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/SUPPLIERS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/SUPPLIERS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemsuppliersEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/SUPPLIERS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/SUPPLIERS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemsuppliersEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/SUPPLIERS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/SUPPLIERS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemsuppliersApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/SUPPLIERS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/SUPPLIERS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemsuppliersApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/SUPPLIERS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/SUPPLIERS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemsuppliersSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/SUPPLIERS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/SUPPLIERS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemsuppliersSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/SUPPLIERS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ADDTAXLIST
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMADDTAXLISTV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ADDTAXLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ADDTAXLIST/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMADDTAXLISTByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ADDTAXLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ADDTAXLIST/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemaddtaxlistAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ADDTAXLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ADDTAXLIST/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemaddtaxlistAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ADDTAXLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ADDTAXLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemaddtaxlistAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ADDTAXLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ADDTAXLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemaddtaxlistAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ADDTAXLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ADDTAXLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemaddtaxlistGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ADDTAXLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ADDTAXLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemaddtaxlistGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ADDTAXLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ADDTAXLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemaddtaxlistAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ADDTAXLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ADDTAXLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemaddtaxlistAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ADDTAXLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ADDTAXLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemaddtaxlistAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ADDTAXLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ADDTAXLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemaddtaxlistAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ADDTAXLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ADDTAXLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemaddtaxlistEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ADDTAXLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ADDTAXLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemaddtaxlistEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ADDTAXLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ADDTAXLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemaddtaxlistApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ADDTAXLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ADDTAXLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemaddtaxlistApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ADDTAXLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ADDTAXLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemaddtaxlistSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ADDTAXLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/ADDTAXLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemaddtaxlistSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/ADDTAXLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODS
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMQPRODSV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODS/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMQPRODSByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemqprodsAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemqprodsAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemqprodsAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemqprodsAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemqprodsGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemqprodsGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemqprodsAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemqprodsAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemqprodsAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemqprodsAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemqprodsEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/QPRODS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemqprodsEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/QPRODS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/{id4}/BARCODE_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemunitsbarcodeListApplyaccdisttemplateV1($id1, $id2, $id3, $id4, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/{$id4}/BARCODE_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/{id4}/BARCODE_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemunitsbarcodeListApplyaccdisttemplateV1Get($id, $id1, $id2, $id3, $id4, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/{$id4}/BARCODE_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/{id4}/BARCODE_LIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemunitsbarcodeListSetlinetotalsV1($id, $id1, $id2, $id3, $id4, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/{$id4}/BARCODE_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/{id4}/BARCODE_LIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemunitsbarcodeListSetlinetotalsV1Post($id1, $id2, $id3, $id4, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/{$id4}/BARCODE_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/COMPOSITES
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMCOMPOSITESV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/COMPOSITES";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/COMPOSITES/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMCOMPOSITESByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/COMPOSITES/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/COMPOSITES/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemcompositesAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/COMPOSITES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/COMPOSITES/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemcompositesAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/COMPOSITES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/COMPOSITES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemcompositesAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/COMPOSITES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/COMPOSITES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemcompositesAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/COMPOSITES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/COMPOSITES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemcompositesGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/COMPOSITES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/COMPOSITES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemcompositesGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/COMPOSITES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/COMPOSITES/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemcompositesAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/COMPOSITES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/COMPOSITES/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemcompositesAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/COMPOSITES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/COMPOSITES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemcompositesAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/COMPOSITES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/COMPOSITES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemcompositesAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/COMPOSITES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/COMPOSITES/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemcompositesEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/COMPOSITES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/COMPOSITES/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemcompositesEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/COMPOSITES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/COMPOSITES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemcompositesApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/COMPOSITES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/COMPOSITES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemcompositesApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/COMPOSITES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/COMPOSITES/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemcompositesSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/COMPOSITES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/COMPOSITES/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemcompositesSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/COMPOSITES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GL_LINKS
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMGL_LINKSV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GL_LINKS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GL_LINKS/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMGL_LINKSByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GL_LINKS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GL_LINKS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemglLinksAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GL_LINKS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GL_LINKS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemglLinksAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GL_LINKS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GL_LINKS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemglLinksAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GL_LINKS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GL_LINKS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemglLinksAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GL_LINKS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GL_LINKS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemglLinksGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GL_LINKS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GL_LINKS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemglLinksGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GL_LINKS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GL_LINKS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemglLinksAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GL_LINKS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GL_LINKS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemglLinksAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GL_LINKS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GL_LINKS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemglLinksAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GL_LINKS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GL_LINKS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemglLinksAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GL_LINKS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GL_LINKS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemglLinksEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GL_LINKS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GL_LINKS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemglLinksEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GL_LINKS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GL_LINKS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemglLinksApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GL_LINKS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GL_LINKS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemglLinksApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GL_LINKS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GL_LINKS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemglLinksSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GL_LINKS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/GL_LINKS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemglLinksSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/GL_LINKS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/SUPPLIERS
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMSUPPLIERSV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/SUPPLIERS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/SUPPLIERS/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMSUPPLIERSByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/SUPPLIERS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/SUPPLIERS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemsuppliersAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/SUPPLIERS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/SUPPLIERS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemsuppliersAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/SUPPLIERS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/SUPPLIERS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemsuppliersAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/SUPPLIERS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/SUPPLIERS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemsuppliersAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/SUPPLIERS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DOMINANT_CLASSES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemdominantClassesGetstocklinepriceV1($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DOMINANT_CLASSES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DOMINANT_CLASSES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemdominantClassesGetstocklinepriceV1Get($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DOMINANT_CLASSES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DOMINANT_CLASSES/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemdominantClassesAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DOMINANT_CLASSES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DOMINANT_CLASSES/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemdominantClassesAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DOMINANT_CLASSES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DOMINANT_CLASSES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemdominantClassesAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DOMINANT_CLASSES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DOMINANT_CLASSES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemdominantClassesAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DOMINANT_CLASSES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DOMINANT_CLASSES/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemdominantClassesEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DOMINANT_CLASSES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DOMINANT_CLASSES/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemdominantClassesEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DOMINANT_CLASSES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DOMINANT_CLASSES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemdominantClassesApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DOMINANT_CLASSES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DOMINANT_CLASSES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemdominantClassesApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DOMINANT_CLASSES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DOMINANT_CLASSES/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemdominantClassesSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DOMINANT_CLASSES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DOMINANT_CLASSES/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemdominantClassesSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DOMINANT_CLASSES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMUNITSV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMUNITSByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemunitsAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemunitsAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemunitsAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemunitsAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemunitsGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemunitsGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemunitsAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemunitsAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemunitsAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemunitsAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemunitsEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemunitsEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemunitsApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemunitsApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemunitsSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemunitsSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/{id4}/BARCODE_LIST
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMUNITSBARCODE_LISTV1($id, $id1, $id2, $id3, $id4, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/{$id4}/BARCODE_LIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/{id4}/BARCODE_LIST/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMUNITSBARCODE_LISTByIdV1($id, $id1, $id2, $id3, $id4, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/{$id4}/BARCODE_LIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/{id4}/BARCODE_LIST/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemunitsbarcodeListAppendline2V1($id, $id1, $id2, $id3, $id4, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/{$id4}/BARCODE_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/{id4}/BARCODE_LIST/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemunitsbarcodeListAppendline2V1Post($id1, $id2, $id3, $id4, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/{$id4}/BARCODE_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/{id4}/BARCODE_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemunitsbarcodeListAddserilotsV1($id, $id1, $id2, $id3, $id4, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/{$id4}/BARCODE_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/{id4}/BARCODE_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemunitsbarcodeListAddserilotsV1Post($id1, $id2, $id3, $id4, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/{$id4}/BARCODE_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/{id4}/BARCODE_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemunitsbarcodeListGetstocklinepriceV1($id, $id1, $id2, $id3, $id4, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/{$id4}/BARCODE_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/{id4}/BARCODE_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemunitsbarcodeListGetstocklinepriceV1Post($id1, $id2, $id3, $id4, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/{$id4}/BARCODE_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/{id4}/BARCODE_LIST/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemunitsbarcodeListAddline2V1($id, $id1, $id2, $id3, $id4, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/{$id4}/BARCODE_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/{id4}/BARCODE_LIST/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemunitsbarcodeListAddline2V1Post($id1, $id2, $id3, $id4, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/{$id4}/BARCODE_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/{id4}/BARCODE_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemunitsbarcodeListAppendserilotsV1($id, $id1, $id2, $id3, $id4, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/{$id4}/BARCODE_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/{id4}/BARCODE_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemunitsbarcodeListAppendserilotsV1Post($id1, $id2, $id3, $id4, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/{$id4}/BARCODE_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/{id4}/BARCODE_LIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemunitsbarcodeListEqualizebalanceV1($id, $id1, $id2, $id3, $id4, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/{$id4}/BARCODE_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/UNITS/{id4}/BARCODE_LIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemunitsbarcodeListEqualizebalanceV1Post($id1, $id2, $id3, $id4, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/UNITS/{$id4}/BARCODE_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/WH_PARAMS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemwhParamsApplyaccdisttemplateV1($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/WH_PARAMS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/WH_PARAMS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemwhParamsApplyaccdisttemplateV1Get($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/WH_PARAMS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/WH_PARAMS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemwhParamsSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/WH_PARAMS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/WH_PARAMS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemwhParamsSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/WH_PARAMS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMCHARACTERISTICSV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMCHARACTERISTICSByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/{id4}/VALUES
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMCHARACTERISTICSVALUESV1($id, $id1, $id2, $id3, $id4, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/{$id4}/VALUES";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/{id4}/VALUES/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMCHARACTERISTICSVALUESByIdV1($id, $id1, $id2, $id3, $id4, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/{$id4}/VALUES/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/{id4}/VALUES/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsvaluesAppendline2V1($id, $id1, $id2, $id3, $id4, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/{$id4}/VALUES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/{id4}/VALUES/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsvaluesAppendline2V1Post($id1, $id2, $id3, $id4, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/{$id4}/VALUES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/{id4}/VALUES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsvaluesAddserilotsV1($id, $id1, $id2, $id3, $id4, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/{$id4}/VALUES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/{id4}/VALUES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsvaluesAddserilotsV1Post($id1, $id2, $id3, $id4, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/{$id4}/VALUES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/{id4}/VALUES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsvaluesGetstocklinepriceV1($id, $id1, $id2, $id3, $id4, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/{$id4}/VALUES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/{id4}/VALUES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsvaluesGetstocklinepriceV1Post($id1, $id2, $id3, $id4, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/{$id4}/VALUES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/{id4}/VALUES/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsvaluesAddline2V1($id, $id1, $id2, $id3, $id4, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/{$id4}/VALUES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/{id4}/VALUES/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsvaluesAddline2V1Post($id1, $id2, $id3, $id4, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/{$id4}/VALUES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/{id4}/VALUES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsvaluesAppendserilotsV1($id, $id1, $id2, $id3, $id4, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/{$id4}/VALUES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/{id4}/VALUES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsvaluesAppendserilotsV1Post($id1, $id2, $id3, $id4, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/{$id4}/VALUES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/{id4}/VALUES/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsvaluesEqualizebalanceV1($id, $id1, $id2, $id3, $id4, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/{$id4}/VALUES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/{id4}/VALUES/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsvaluesEqualizebalanceV1Post($id1, $id2, $id3, $id4, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/{$id4}/VALUES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/{id4}/VALUES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsvaluesApplyaccdisttemplateV1($id, $id1, $id2, $id3, $id4, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/{$id4}/VALUES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/{id4}/VALUES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsvaluesApplyaccdisttemplateV1Post($id1, $id2, $id3, $id4, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/{$id4}/VALUES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/{id4}/VALUES/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsvaluesSetlinetotalsV1($id, $id1, $id2, $id3, $id4, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/{$id4}/VALUES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/CHARACTERISTICS/{id4}/VALUES/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemcharacteristicsvaluesSetlinetotalsV1Post($id1, $id2, $id3, $id4, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/CHARACTERISTICS/{$id4}/VALUES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DOMINANT_CLASSES
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMDOMINANT_CLASSESV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DOMINANT_CLASSES";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DOMINANT_CLASSES/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMDOMINANT_CLASSESByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DOMINANT_CLASSES/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DOMINANT_CLASSES/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemdominantClassesAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DOMINANT_CLASSES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DOMINANT_CLASSES/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemdominantClassesAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DOMINANT_CLASSES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DOMINANT_CLASSES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemdominantClassesAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DOMINANT_CLASSES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/DOMINANT_CLASSES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemdominantClassesAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/DOMINANT_CLASSES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemGetstocklinepriceV1($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemGetstocklinepriceV1Get($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/FACTORY_PARAMS
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMFACTORY_PARAMSV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/FACTORY_PARAMS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/FACTORY_PARAMS/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMFACTORY_PARAMSByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/FACTORY_PARAMS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/FACTORY_PARAMS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemfactoryParamsAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/FACTORY_PARAMS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/FACTORY_PARAMS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemfactoryParamsAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/FACTORY_PARAMS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/FACTORY_PARAMS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemfactoryParamsAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/FACTORY_PARAMS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/FACTORY_PARAMS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemfactoryParamsAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/FACTORY_PARAMS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/FACTORY_PARAMS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemfactoryParamsGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/FACTORY_PARAMS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/FACTORY_PARAMS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemfactoryParamsGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/FACTORY_PARAMS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/FACTORY_PARAMS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemfactoryParamsAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/FACTORY_PARAMS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/FACTORY_PARAMS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemfactoryParamsAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/FACTORY_PARAMS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/FACTORY_PARAMS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemfactoryParamsAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/FACTORY_PARAMS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/FACTORY_PARAMS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemfactoryParamsAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/FACTORY_PARAMS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/FACTORY_PARAMS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemfactoryParamsEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/FACTORY_PARAMS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/FACTORY_PARAMS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemfactoryParamsEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/FACTORY_PARAMS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/FACTORY_PARAMS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemfactoryParamsApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/FACTORY_PARAMS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/FACTORY_PARAMS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsxrelatedItemfactoryParamsApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/FACTORY_PARAMS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/FACTORY_PARAMS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemfactoryParamsSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/FACTORY_PARAMS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/FACTORY_PARAMS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemfactoryParamsSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/FACTORY_PARAMS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/WH_PARAMS
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMWH_PARAMSV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/WH_PARAMS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/WH_PARAMS/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMWH_PARAMSByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/WH_PARAMS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/WH_PARAMS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemwhParamsAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/WH_PARAMS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/WH_PARAMS/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemwhParamsAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/WH_PARAMS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/WH_PARAMS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemwhParamsAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/WH_PARAMS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/WH_PARAMS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemwhParamsAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/WH_PARAMS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/WH_PARAMS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemwhParamsGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/WH_PARAMS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/WH_PARAMS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsxrelatedItemwhParamsGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/WH_PARAMS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/WH_PARAMS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemwhParamsAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/WH_PARAMS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/WH_PARAMS/AddLine2/{_index}
     */
    public function dispatchestransactionsxrelatedItemwhParamsAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/WH_PARAMS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/WH_PARAMS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemwhParamsAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/WH_PARAMS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/WH_PARAMS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsxrelatedItemwhParamsAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/WH_PARAMS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/WH_PARAMS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemwhParamsEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/WH_PARAMS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{id3}/WH_PARAMS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsxrelatedItemwhParamsEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$id3}/WH_PARAMS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsdefnfldslistApplyaccdisttemplateV1($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsdefnfldslistApplyaccdisttemplateV1Get($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsdefnfldslistSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsdefnfldslistSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FAREGDEFNFLDLIST
     */
    public function getDISPATCHESTRANSACTIONSFAREGDEFNFLDLISTV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FAREGDEFNFLDLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FAREGDEFNFLDLIST/{idt}
     */
    public function getDISPATCHESTRANSACTIONSFAREGDEFNFLDLISTByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FAREGDEFNFLDLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FAREGDEFNFLDLIST/AppendLine2
     */
    public function dispatchestransactionsfaregdefnfldlistAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FAREGDEFNFLDLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FAREGDEFNFLDLIST/AppendLine2
     */
    public function dispatchestransactionsfaregdefnfldlistAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FAREGDEFNFLDLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FAREGDEFNFLDLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsfaregdefnfldlistAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FAREGDEFNFLDLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FAREGDEFNFLDLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsfaregdefnfldlistAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FAREGDEFNFLDLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FAREGDEFNFLDLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsfaregdefnfldlistGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FAREGDEFNFLDLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FAREGDEFNFLDLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsfaregdefnfldlistGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FAREGDEFNFLDLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FAREGDEFNFLDLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsfaregdefnfldlistAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FAREGDEFNFLDLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FAREGDEFNFLDLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsfaregdefnfldlistAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FAREGDEFNFLDLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FAREGDEFNFLDLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsfaregdefnfldlistAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FAREGDEFNFLDLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FAREGDEFNFLDLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsfaregdefnfldlistAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FAREGDEFNFLDLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FAREGDEFNFLDLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsfaregdefnfldlistEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FAREGDEFNFLDLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FAREGDEFNFLDLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsfaregdefnfldlistEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FAREGDEFNFLDLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FAREGDEFNFLDLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsfaregdefnfldlistApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FAREGDEFNFLDLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FAREGDEFNFLDLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsfaregdefnfldlistApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FAREGDEFNFLDLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FAREGDEFNFLDLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsfaregdefnfldlistSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FAREGDEFNFLDLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FAREGDEFNFLDLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsfaregdefnfldlistSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FAREGDEFNFLDLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/PREACCLINES
     */
    public function getDISPATCHESTRANSACTIONSPREACCLINESV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/PREACCLINES";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/PREACCLINES/{idt}
     */
    public function getDISPATCHESTRANSACTIONSPREACCLINESByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/PREACCLINES/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/PREACCLINES/AppendLine2
     */
    public function dispatchestransactionspreacclinesAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/PREACCLINES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/PREACCLINES/AppendLine2
     */
    public function dispatchestransactionspreacclinesAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/PREACCLINES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/PREACCLINES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionspreacclinesAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/PREACCLINES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/PREACCLINES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionspreacclinesAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/PREACCLINES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/PREACCLINES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionspreacclinesGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/PREACCLINES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/PREACCLINES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionspreacclinesGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/PREACCLINES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/PREACCLINES/AddLine2/{_index}
     */
    public function dispatchestransactionspreacclinesAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/PREACCLINES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/PREACCLINES/AddLine2/{_index}
     */
    public function dispatchestransactionspreacclinesAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/PREACCLINES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/PREACCLINES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionspreacclinesAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/PREACCLINES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/PREACCLINES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionspreacclinesAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/PREACCLINES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/PREACCLINES/EqualizeBalance/{_index}
     */
    public function dispatchestransactionspreacclinesEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/PREACCLINES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/PREACCLINES/EqualizeBalance/{_index}
     */
    public function dispatchestransactionspreacclinesEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/PREACCLINES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/PREACCLINES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionspreacclinesApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/PREACCLINES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/PREACCLINES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionspreacclinesApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/PREACCLINES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/PREACCLINES/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionspreacclinesSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/PREACCLINES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/PREACCLINES/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionspreacclinesSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/PREACCLINES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/{idt}
     */
    public function getDISPATCHESTRANSACTIONSXRELATED_ITEMByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/AppendLine2
     */
    public function dispatchestransactionsxrelatedItemAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/XRELATED_ITEM/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsxrelatedItemAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/XRELATED_ITEM/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/ADDTAXLINELIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsaddtaxlinelistGetstocklinepriceV1($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/ADDTAXLINELIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/ADDTAXLINELIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsaddtaxlinelistGetstocklinepriceV1Get($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/ADDTAXLINELIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/ADDTAXLINELIST/AddLine2/{_index}
     */
    public function dispatchestransactionsaddtaxlinelistAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/ADDTAXLINELIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/ADDTAXLINELIST/AddLine2/{_index}
     */
    public function dispatchestransactionsaddtaxlinelistAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/ADDTAXLINELIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/ADDTAXLINELIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsaddtaxlinelistAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/ADDTAXLINELIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/ADDTAXLINELIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsaddtaxlinelistAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/ADDTAXLINELIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/ADDTAXLINELIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsaddtaxlinelistEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/ADDTAXLINELIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/ADDTAXLINELIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsaddtaxlinelistEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/ADDTAXLINELIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/ADDTAXLINELIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsaddtaxlinelistApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/ADDTAXLINELIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/ADDTAXLINELIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsaddtaxlinelistApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/ADDTAXLINELIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/ADDTAXLINELIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsaddtaxlinelistSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/ADDTAXLINELIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/ADDTAXLINELIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsaddtaxlinelistSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/ADDTAXLINELIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/GENIUSFLDSLIST
     */
    public function getDISPATCHESTRANSACTIONSGENIUSFLDSLISTV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/GENIUSFLDSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/GENIUSFLDSLIST/{idt}
     */
    public function getDISPATCHESTRANSACTIONSGENIUSFLDSLISTByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/GENIUSFLDSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/GENIUSFLDSLIST/AppendLine2
     */
    public function dispatchestransactionsgeniusfldslistAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/GENIUSFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/GENIUSFLDSLIST/AppendLine2
     */
    public function dispatchestransactionsgeniusfldslistAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/GENIUSFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/GENIUSFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsgeniusfldslistAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/GENIUSFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/GENIUSFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsgeniusfldslistAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/GENIUSFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/GENIUSFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsgeniusfldslistGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/GENIUSFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/GENIUSFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsgeniusfldslistGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/GENIUSFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/GENIUSFLDSLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsgeniusfldslistAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/GENIUSFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/GENIUSFLDSLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsgeniusfldslistAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/GENIUSFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/GENIUSFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsgeniusfldslistAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/GENIUSFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/GENIUSFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsgeniusfldslistAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/GENIUSFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/GENIUSFLDSLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsgeniusfldslistEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/GENIUSFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/GENIUSFLDSLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsgeniusfldslistEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/GENIUSFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/GENIUSFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsgeniusfldslistApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/GENIUSFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/GENIUSFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsgeniusfldslistApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/GENIUSFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/GENIUSFLDSLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsgeniusfldslistSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/GENIUSFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/GENIUSFLDSLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsgeniusfldslistSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/GENIUSFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DEFNFLDSLIST
     */
    public function getDISPATCHESTRANSACTIONSDEFNFLDSLISTV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DEFNFLDSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DEFNFLDSLIST/{idt}
     */
    public function getDISPATCHESTRANSACTIONSDEFNFLDSLISTByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DEFNFLDSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DEFNFLDSLIST/AppendLine2
     */
    public function dispatchestransactionsdefnfldslistAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DEFNFLDSLIST/AppendLine2
     */
    public function dispatchestransactionsdefnfldslistAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsdefnfldslistAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsdefnfldslistAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsdefnfldslistGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsdefnfldslistGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsdefnfldslistAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsdefnfldslistAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsdefnfldslistAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsdefnfldslistAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsdefnfldslistEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsdefnfldslistEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsqclistApplyaccdisttemplateV1($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsqclistApplyaccdisttemplateV1Get($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsqclistSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsqclistSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/{id3}/VALLIST
     */
    public function getDISPATCHESTRANSACTIONSQCLISTVALLISTV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/{$id3}/VALLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/{id3}/VALLIST/{idt}
     */
    public function getDISPATCHESTRANSACTIONSQCLISTVALLISTByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/{$id3}/VALLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/{id3}/VALLIST/AppendLine2
     */
    public function dispatchestransactionsqclistvallistAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/{$id3}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/{id3}/VALLIST/AppendLine2
     */
    public function dispatchestransactionsqclistvallistAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/{$id3}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/{id3}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsqclistvallistAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/{$id3}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/{id3}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsqclistvallistAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/{$id3}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/{id3}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsqclistvallistGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/{$id3}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/{id3}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsqclistvallistGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/{$id3}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/{id3}/VALLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsqclistvallistAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/{$id3}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/{id3}/VALLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsqclistvallistAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/{$id3}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/{id3}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsqclistvallistAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/{$id3}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/{id3}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsqclistvallistAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/{$id3}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/{id3}/VALLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsqclistvallistEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/{$id3}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/{id3}/VALLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsqclistvallistEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/{$id3}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/{id3}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsqclistvallistApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/{$id3}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/{id3}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsqclistvallistApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/{$id3}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/{id3}/VALLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsqclistvallistSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/{$id3}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/{id3}/VALLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsqclistvallistSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/{$id3}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/CAMPAIGN_INFOS
     */
    public function getDISPATCHESTRANSACTIONSCAMPAIGN_INFOSV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/CAMPAIGN_INFOS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/CAMPAIGN_INFOS/{idt}
     */
    public function getDISPATCHESTRANSACTIONSCAMPAIGN_INFOSByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/CAMPAIGN_INFOS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/CAMPAIGN_INFOS/AppendLine2
     */
    public function dispatchestransactionscampaignInfosAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/CAMPAIGN_INFOS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/CAMPAIGN_INFOS/AppendLine2
     */
    public function dispatchestransactionscampaignInfosAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/CAMPAIGN_INFOS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/CAMPAIGN_INFOS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionscampaignInfosAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/CAMPAIGN_INFOS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/CAMPAIGN_INFOS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionscampaignInfosAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/CAMPAIGN_INFOS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/CAMPAIGN_INFOS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionscampaignInfosGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/CAMPAIGN_INFOS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/CAMPAIGN_INFOS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionscampaignInfosGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/CAMPAIGN_INFOS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/CAMPAIGN_INFOS/AddLine2/{_index}
     */
    public function dispatchestransactionscampaignInfosAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/CAMPAIGN_INFOS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/CAMPAIGN_INFOS/AddLine2/{_index}
     */
    public function dispatchestransactionscampaignInfosAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/CAMPAIGN_INFOS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/CAMPAIGN_INFOS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionscampaignInfosAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/CAMPAIGN_INFOS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/CAMPAIGN_INFOS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionscampaignInfosAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/CAMPAIGN_INFOS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/CAMPAIGN_INFOS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionscampaignInfosEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/CAMPAIGN_INFOS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/CAMPAIGN_INFOS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionscampaignInfosEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/CAMPAIGN_INFOS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/CAMPAIGN_INFOS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionscampaignInfosApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/CAMPAIGN_INFOS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/CAMPAIGN_INFOS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionscampaignInfosApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/CAMPAIGN_INFOS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/CAMPAIGN_INFOS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionscampaignInfosSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/CAMPAIGN_INFOS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/CAMPAIGN_INFOS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionscampaignInfosSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/CAMPAIGN_INFOS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/ADDTAXLINELIST
     */
    public function getDISPATCHESTRANSACTIONSADDTAXLINELISTV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/ADDTAXLINELIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/ADDTAXLINELIST/{idt}
     */
    public function getDISPATCHESTRANSACTIONSADDTAXLINELISTByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/ADDTAXLINELIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/ADDTAXLINELIST/AppendLine2
     */
    public function dispatchestransactionsaddtaxlinelistAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/ADDTAXLINELIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/ADDTAXLINELIST/AppendLine2
     */
    public function dispatchestransactionsaddtaxlinelistAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/ADDTAXLINELIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/ADDTAXLINELIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsaddtaxlinelistAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/ADDTAXLINELIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/ADDTAXLINELIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsaddtaxlinelistAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/ADDTAXLINELIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsdetailsslDetailsqclistGetstocklinepriceV1($id1, $id2, $id3, $id4, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsdetailsslDetailsqclistGetstocklinepriceV1Get($id, $id1, $id2, $id3, $id4, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsdetailsslDetailsqclistAddline2V1($id, $id1, $id2, $id3, $id4, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsdetailsslDetailsqclistAddline2V1Post($id1, $id2, $id3, $id4, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsdetailsslDetailsqclistAppendserilotsV1($id, $id1, $id2, $id3, $id4, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsdetailsslDetailsqclistAppendserilotsV1Post($id1, $id2, $id3, $id4, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsdetailsslDetailsqclistEqualizebalanceV1($id, $id1, $id2, $id3, $id4, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsdetailsslDetailsqclistEqualizebalanceV1Post($id1, $id2, $id3, $id4, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsdetailsslDetailsqclistApplyaccdisttemplateV1($id, $id1, $id2, $id3, $id4, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsdetailsslDetailsqclistApplyaccdisttemplateV1Post($id1, $id2, $id3, $id4, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsdetailsslDetailsqclistSetlinetotalsV1($id, $id1, $id2, $id3, $id4, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsdetailsslDetailsqclistSetlinetotalsV1Post($id1, $id2, $id3, $id4, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/{id5}/VALLIST
     */
    public function getDISPATCHESTRANSACTIONSDETAILSSL_DETAILSQCLISTVALLISTV1($id, $id1, $id2, $id3, $id4, $id5, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/{$id5}/VALLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/{id5}/VALLIST/{idt}
     */
    public function getDISPATCHESTRANSACTIONSDETAILSSL_DETAILSQCLISTVALLISTByIdV1($id, $id1, $id2, $id3, $id4, $id5, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/{$id5}/VALLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/{id5}/VALLIST/AppendLine2
     */
    public function dispatchestransactionsdetailsslDetailsqclistvallistAppendline2V1($id, $id1, $id2, $id3, $id4, $id5, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/{$id5}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/{id5}/VALLIST/AppendLine2
     */
    public function dispatchestransactionsdetailsslDetailsqclistvallistAppendline2V1Post($id1, $id2, $id3, $id4, $id5, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/{$id5}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/{id5}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsdetailsslDetailsqclistvallistAddserilotsV1($id, $id1, $id2, $id3, $id4, $id5, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/{$id5}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/{id5}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsdetailsslDetailsqclistvallistAddserilotsV1Post($id1, $id2, $id3, $id4, $id5, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/{$id5}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/{id5}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsdetailsslDetailsqclistvallistGetstocklinepriceV1($id, $id1, $id2, $id3, $id4, $id5, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/{$id5}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/{id5}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsdetailsslDetailsqclistvallistGetstocklinepriceV1Post($id1, $id2, $id3, $id4, $id5, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/{$id5}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/{id5}/VALLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsdetailsslDetailsqclistvallistAddline2V1($id, $id1, $id2, $id3, $id4, $id5, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/{$id5}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/{id5}/VALLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsdetailsslDetailsqclistvallistAddline2V1Post($id1, $id2, $id3, $id4, $id5, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/{$id5}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/{id5}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsdetailsslDetailsqclistvallistAppendserilotsV1($id, $id1, $id2, $id3, $id4, $id5, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/{$id5}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/{id5}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsdetailsslDetailsqclistvallistAppendserilotsV1Post($id1, $id2, $id3, $id4, $id5, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/{$id5}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/{id5}/VALLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsdetailsslDetailsqclistvallistEqualizebalanceV1($id, $id1, $id2, $id3, $id4, $id5, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/{$id5}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/{id5}/VALLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsdetailsslDetailsqclistvallistEqualizebalanceV1Post($id1, $id2, $id3, $id4, $id5, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/{$id5}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/{id5}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsdetailsslDetailsqclistvallistApplyaccdisttemplateV1($id, $id1, $id2, $id3, $id4, $id5, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/{$id5}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/{id5}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsdetailsslDetailsqclistvallistApplyaccdisttemplateV1Post($id1, $id2, $id3, $id4, $id5, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/{$id5}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/{id5}/VALLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsdetailsslDetailsqclistvallistSetlinetotalsV1($id, $id1, $id2, $id3, $id4, $id5, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/{$id5}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/{id5}/VALLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsdetailsslDetailsqclistvallistSetlinetotalsV1Post($id1, $id2, $id3, $id4, $id5, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/{$id5}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST
     */
    public function getDISPATCHESTRANSACTIONSQCLISTV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/{idt}
     */
    public function getDISPATCHESTRANSACTIONSQCLISTByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/AppendLine2
     */
    public function dispatchestransactionsqclistAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/AppendLine2
     */
    public function dispatchestransactionsqclistAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsqclistAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsqclistAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsqclistGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsqclistGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsqclistAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsqclistAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsqclistAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsqclistAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsqclistEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/QCLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsqclistEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsdetailsApplyaccdisttemplateV1($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsdetailsApplyaccdisttemplateV1Get($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsdetailsSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsdetailsSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/FA_INFO
     */
    public function getDISPATCHESTRANSACTIONSDETAILSFA_INFOV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/FA_INFO";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/FA_INFO/{idt}
     */
    public function getDISPATCHESTRANSACTIONSDETAILSFA_INFOByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/FA_INFO/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/FA_INFO/AppendLine2
     */
    public function dispatchestransactionsdetailsfaInfoAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/FA_INFO/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/FA_INFO/AppendLine2
     */
    public function dispatchestransactionsdetailsfaInfoAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/FA_INFO/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/FA_INFO/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsdetailsfaInfoAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/FA_INFO/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/FA_INFO/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsdetailsfaInfoAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/FA_INFO/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/FA_INFO/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsdetailsfaInfoGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/FA_INFO/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/FA_INFO/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsdetailsfaInfoGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/FA_INFO/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/FA_INFO/AddLine2/{_index}
     */
    public function dispatchestransactionsdetailsfaInfoAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/FA_INFO/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/FA_INFO/AddLine2/{_index}
     */
    public function dispatchestransactionsdetailsfaInfoAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/FA_INFO/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/FA_INFO/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsdetailsfaInfoAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/FA_INFO/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/FA_INFO/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsdetailsfaInfoAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/FA_INFO/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/FA_INFO/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsdetailsfaInfoEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/FA_INFO/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/FA_INFO/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsdetailsfaInfoEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/FA_INFO/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/FA_INFO/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsdetailsfaInfoApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/FA_INFO/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/FA_INFO/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsdetailsfaInfoApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/FA_INFO/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/FA_INFO/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsdetailsfaInfoSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/FA_INFO/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/FA_INFO/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsdetailsfaInfoSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/FA_INFO/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS
     */
    public function getDISPATCHESTRANSACTIONSDETAILSSL_DETAILSV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{idt}
     */
    public function getDISPATCHESTRANSACTIONSDETAILSSL_DETAILSByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/AppendLine2
     */
    public function dispatchestransactionsdetailsslDetailsAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/AppendLine2
     */
    public function dispatchestransactionsdetailsslDetailsAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsdetailsslDetailsAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsdetailsslDetailsAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsdetailsslDetailsGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsdetailsslDetailsGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/AddLine2/{_index}
     */
    public function dispatchestransactionsdetailsslDetailsAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/AddLine2/{_index}
     */
    public function dispatchestransactionsdetailsslDetailsAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsdetailsslDetailsAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsdetailsslDetailsAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsdetailsslDetailsEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsdetailsslDetailsEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsdetailsslDetailsApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsdetailsslDetailsApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsdetailsslDetailsSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsdetailsslDetailsSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST
     */
    public function getDISPATCHESTRANSACTIONSDETAILSSL_DETAILSQCLISTV1($id, $id1, $id2, $id3, $id4, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/{idt}
     */
    public function getDISPATCHESTRANSACTIONSDETAILSSL_DETAILSQCLISTByIdV1($id, $id1, $id2, $id3, $id4, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/AppendLine2
     */
    public function dispatchestransactionsdetailsslDetailsqclistAppendline2V1($id, $id1, $id2, $id3, $id4, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/AppendLine2
     */
    public function dispatchestransactionsdetailsslDetailsqclistAppendline2V1Post($id1, $id2, $id3, $id4, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsdetailsslDetailsqclistAddserilotsV1($id, $id1, $id2, $id3, $id4, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{id3}/SL_DETAILS/{id4}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsdetailsslDetailsqclistAddserilotsV1Post($id1, $id2, $id3, $id4, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$id3}/SL_DETAILS/{$id4}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsslDetailsqclistGetstocklinepriceV1($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsslDetailsqclistGetstocklinepriceV1Get($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsslDetailsqclistAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsslDetailsqclistAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsslDetailsqclistAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsslDetailsqclistAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsslDetailsqclistEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsslDetailsqclistEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsslDetailsqclistApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsslDetailsqclistApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsslDetailsqclistSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsslDetailsqclistSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST
     */
    public function getDISPATCHESTRANSACTIONSSL_DETAILSQCLISTVALLISTV1($id, $id1, $id2, $id3, $id4, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/{idt}
     */
    public function getDISPATCHESTRANSACTIONSSL_DETAILSQCLISTVALLISTByIdV1($id, $id1, $id2, $id3, $id4, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AppendLine2
     */
    public function dispatchestransactionsslDetailsqclistvallistAppendline2V1($id, $id1, $id2, $id3, $id4, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AppendLine2
     */
    public function dispatchestransactionsslDetailsqclistvallistAppendline2V1Post($id1, $id2, $id3, $id4, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsslDetailsqclistvallistAddserilotsV1($id, $id1, $id2, $id3, $id4, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsslDetailsqclistvallistAddserilotsV1Post($id1, $id2, $id3, $id4, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsslDetailsqclistvallistGetstocklinepriceV1($id, $id1, $id2, $id3, $id4, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsslDetailsqclistvallistGetstocklinepriceV1Post($id1, $id2, $id3, $id4, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsslDetailsqclistvallistAddline2V1($id, $id1, $id2, $id3, $id4, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AddLine2/{_index}
     */
    public function dispatchestransactionsslDetailsqclistvallistAddline2V1Post($id1, $id2, $id3, $id4, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsslDetailsqclistvallistAppendserilotsV1($id, $id1, $id2, $id3, $id4, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsslDetailsqclistvallistAppendserilotsV1Post($id1, $id2, $id3, $id4, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsslDetailsqclistvallistEqualizebalanceV1($id, $id1, $id2, $id3, $id4, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsslDetailsqclistvallistEqualizebalanceV1Post($id1, $id2, $id3, $id4, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsslDetailsqclistvallistApplyaccdisttemplateV1($id, $id1, $id2, $id3, $id4, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsslDetailsqclistvallistApplyaccdisttemplateV1Post($id1, $id2, $id3, $id4, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsslDetailsqclistvallistSetlinetotalsV1($id, $id1, $id2, $id3, $id4, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsslDetailsqclistvallistSetlinetotalsV1Post($id1, $id2, $id3, $id4, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS
     */
    public function getDISPATCHESTRANSACTIONSDETAILSV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/{idt}
     */
    public function getDISPATCHESTRANSACTIONSDETAILSByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/AppendLine2
     */
    public function dispatchestransactionsdetailsAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/AppendLine2
     */
    public function dispatchestransactionsdetailsAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsdetailsAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsdetailsAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsdetailsGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsdetailsGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/AddLine2/{_index}
     */
    public function dispatchestransactionsdetailsAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/AddLine2/{_index}
     */
    public function dispatchestransactionsdetailsAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsdetailsAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsdetailsAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsdetailsEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/DETAILS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsdetailsEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsApplyaccdisttemplateV1($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsApplyaccdisttemplateV1Get($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FA_INFO
     */
    public function getDISPATCHESTRANSACTIONSFA_INFOV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FA_INFO";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FA_INFO/{idt}
     */
    public function getDISPATCHESTRANSACTIONSFA_INFOByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FA_INFO/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FA_INFO/AppendLine2
     */
    public function dispatchestransactionsfaInfoAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FA_INFO/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FA_INFO/AppendLine2
     */
    public function dispatchestransactionsfaInfoAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FA_INFO/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FA_INFO/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsfaInfoAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FA_INFO/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FA_INFO/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsfaInfoAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FA_INFO/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FA_INFO/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsfaInfoGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FA_INFO/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FA_INFO/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsfaInfoGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FA_INFO/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FA_INFO/AddLine2/{_index}
     */
    public function dispatchestransactionsfaInfoAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FA_INFO/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FA_INFO/AddLine2/{_index}
     */
    public function dispatchestransactionsfaInfoAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FA_INFO/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FA_INFO/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsfaInfoAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FA_INFO/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FA_INFO/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsfaInfoAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FA_INFO/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FA_INFO/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsfaInfoEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FA_INFO/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FA_INFO/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsfaInfoEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FA_INFO/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FA_INFO/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsfaInfoApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FA_INFO/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FA_INFO/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsfaInfoApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FA_INFO/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FA_INFO/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsfaInfoSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FA_INFO/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/FA_INFO/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsfaInfoSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/FA_INFO/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS
     */
    public function getDISPATCHESTRANSACTIONSSL_DETAILSV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{idt}
     */
    public function getDISPATCHESTRANSACTIONSSL_DETAILSByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/AppendLine2
     */
    public function dispatchestransactionsslDetailsAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/AppendLine2
     */
    public function dispatchestransactionsslDetailsAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsslDetailsAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsslDetailsAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsslDetailsGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsslDetailsGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/AddLine2/{_index}
     */
    public function dispatchestransactionsslDetailsAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/AddLine2/{_index}
     */
    public function dispatchestransactionsslDetailsAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsslDetailsAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsslDetailsAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsslDetailsEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsslDetailsEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsslDetailsApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchestransactionsslDetailsApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsslDetailsSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/SetLineTotals/{_Indx}
     */
    public function dispatchestransactionsslDetailsSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST
     */
    public function getDISPATCHESTRANSACTIONSSL_DETAILSQCLISTV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/{idt}
     */
    public function getDISPATCHESTRANSACTIONSSL_DETAILSQCLISTByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/AppendLine2
     */
    public function dispatchestransactionsslDetailsqclistAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/AppendLine2
     */
    public function dispatchestransactionsslDetailsqclistAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsslDetailsqclistAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/{id2}/SL_DETAILS/{id3}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsslDetailsqclistAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/readwithbodyparamters
     */
    public function postReadWithBodyParametersV1(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/readwithbodyparamters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /importOperationSlips/{id}/readwithbodyparamters
     */
    public function postReadByIdWithBodyParametersV1($id, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/readwithbodyparamters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES
     */
    public function getDISPATCHESV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{idt}
     */
    public function getDISPATCHESByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/AppendLine2
     */
    public function dispatchesAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/AppendLine2
     */
    public function dispatchesAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchesAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchesAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchesGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchesGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/AddLine2/{_index}
     */
    public function dispatchesAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/AddLine2/{_index}
     */
    public function dispatchesAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchesAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchesAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/EqualizeBalance/{_index}
     */
    public function dispatchesEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/EqualizeBalance/{_index}
     */
    public function dispatchesEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchesApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function dispatchesApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/SetLineTotals/{_Indx}
     */
    public function dispatchesSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/SetLineTotals/{_Indx}
     */
    public function dispatchesSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS
     */
    public function getDISPATCHESTRANSACTIONSV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/{idt}
     */
    public function getDISPATCHESTRANSACTIONSByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/AppendLine2
     */
    public function dispatchestransactionsAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/AppendLine2
     */
    public function dispatchestransactionsAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function dispatchestransactionsAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function dispatchestransactionsGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/AddLine2/{_index}
     */
    public function dispatchestransactionsAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/AddLine2/{_index}
     */
    public function dispatchestransactionsAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function dispatchestransactionsAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /importOperationSlips/{id}/DISPATCHES/{id1}/TRANSACTIONS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/{$id}/DISPATCHES/{$id1}/TRANSACTIONS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /importOperationSlips/DISPATCHES/{id1}/TRANSACTIONS/EqualizeBalance/{_index}
     */
    public function dispatchestransactionsEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/importOperationSlips/DISPATCHES/{$id1}/TRANSACTIONS/EqualizeBalance/{$index}";
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

    public function searchBynumber($number)
    {
        return $this->getAll(['q' => "NUMBER eq {$number}"]);
    }

    public function searchByType($type)
    {
        return $this->getAll(['q' => "TYPE eq {$type}"]);
    }

    /**
     * Retrieves analytics data for ImportOperationSlips entities.
     */
    public function getAnalytics()
    {
        return ['total' => $this->getCount()];
    }

    /**
     * Retrieves the total count of ImportOperationSlips entities.
     */
    public function getCount()
    {
        $resp = $this->getAll(['count' => true]);
        return (int) ($resp->totalCount ?? 0);
    }

    /**
     * Retrieves database column information for the ImportOperationSlips entity.
     */
    public function getDbColumns()
    {
        $path = "{$this->endpoint}/dbcolumns";
        return $this->request('GET', $path);
    }

    /**
     * Enables change tracking for the ImportOperationSlips entity.
     */
    public function track()
    {
        $path = "{$this->endpoint}/track";
        return $this->request('GET', $path);
    }

    /**
     * Disables change tracking for the ImportOperationSlips entity.
     */
    public function untrack()
    {
        $path = "{$this->endpoint}/untrack";
        return $this->request('GET', $path);
    }

    /**
     * Checks the change tracking status for the ImportOperationSlips entity.
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
