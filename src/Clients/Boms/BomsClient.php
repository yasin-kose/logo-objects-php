<?php

declare(strict_types=1);

namespace LogoObjects\Clients\Boms;

use LogoObjects\Http\BaseApiClient;
use LogoObjects\Types\ApiResponse;
use LogoObjects\Utils\QueryBuilder;

/**
 * BomsClient - /Boms endpoint'i icin CRUD ve ozel islemler.
 */
class BomsClient extends BaseApiClient
{
    /** @var string */
    protected $endpoint = '/Boms';

    /**
     * Retrieves a paginated list of Boms entities.
     */
    public function getAll(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "{$this->endpoint}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return ApiResponse::of($this->request('GET', $path), \LogoObjects\Clients\Boms\Boms::class);
    }

    /**
     * Retrieves a single Boms entity by its internal reference ID.
     */
    public function getById($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "{$this->endpoint}/{$id}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return \LogoObjects\Clients\Boms\Boms::fromArray($this->request('GET', $path));
    }

    /**
     * Creates a new Boms entity.
     */
    public function create(array $data)
    {
        $path = "{$this->endpoint}";
        return \LogoObjects\Clients\Boms\Boms::fromArray($this->request('POST', $path, $data));
    }

    /**
     * Updates an existing Boms entity.
     */
    public function update($id, array $data)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\Boms\Boms::fromArray($this->request('PUT', $path, $data));
    }

    /**
     * Partially updates a Boms entity.
     */
    public function patch($id, array $data)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\Boms\Boms::fromArray($this->request('PATCH', $path, $data));
    }

    /**
     * Deletes a Boms entity by its internal reference ID.
     */
    public function delete($id)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\Boms\Boms::fromArray($this->request('DELETE', $path));
    }

    /**
     * Searches for Boms entities based on a set of criteria.
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
     * Corresponds to POST /Boms/ReCalculate
     */
    public function reCalculateV1(array $data)
    {
        $path = "/Boms/ReCalculate";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/ReCalculate
     */
    public function reCalculateV1Get($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/ReCalculate";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /Boms/{id}/FillAccCodes
     */
    public function fillAccCodesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/FillAccCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/FillAccCodes
     */
    public function fillAccCodesV1Post(array $data)
    {
        $path = "/Boms/FillAccCodes";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/ApplyADiscount/{_discCode}
     */
    public function applyADiscountV1($id, string $discCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/ApplyADiscount/{$discCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/ApplyADiscount/{_discCode}
     */
    public function applyADiscountV1Post(string $discCode, array $data)
    {
        $path = "/Boms/ApplyADiscount/{$discCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/SetDefIntValue/{_fldName}/{_fType}/{_fSz}/{_Value}
     */
    public function setDefIntValueV1($id, string $fldName, $fType, $fSz, $Value, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/SetDefIntValue/{$fldName}/{$fType}/{$fSz}/{$Value}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/SetDefIntValue/{_fldName}/{_fType}/{_fSz}/{_Value}
     */
    public function setDefIntValueV1Post(string $fldName, $fType, $fSz, $Value, array $data)
    {
        $path = "/Boms/SetDefIntValue/{$fldName}/{$fType}/{$fSz}/{$Value}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/EqualizePayAmnt
     */
    public function equalizePayAmntV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/EqualizePayAmnt";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/EqualizePayAmnt
     */
    public function equalizePayAmntV1Post(array $data)
    {
        $path = "/Boms/EqualizePayAmnt";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/AddSeriLotsForKs/{_slCode}/{_amount}/{_IOMtd}
     */
    public function addSeriLotsForKsV1($id, string $slCode, $amount, $IOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/AddSeriLotsForKs/{$slCode}/{$amount}/{$IOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/AddSeriLotsForKs/{_slCode}/{_amount}/{_IOMtd}
     */
    public function addSeriLotsForKsV1Post(string $slCode, $amount, $IOMtd, array $data)
    {
        $path = "/Boms/AddSeriLotsForKs/{$slCode}/{$amount}/{$IOMtd}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/FillSMMACCCodes
     */
    public function fillSMMACCCodesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/FillSMMACCCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/FillSMMACCCodes
     */
    public function fillSMMACCCodesV1Post(array $data)
    {
        $path = "/Boms/FillSMMACCCodes";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/AttachADespatchByLRef/{_dispref}
     */
    public function attachADespatchByLRefV1($id, $dispref, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/AttachADespatchByLRef/{$dispref}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/AttachADespatchByLRef/{_dispref}
     */
    public function attachADespatchByLRefV1Post($dispref, array $data)
    {
        $path = "/Boms/AttachADespatchByLRef/{$dispref}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/AttachADespatchByFicheNo/{_dispFicheNo}
     */
    public function attachADespatchByFicheNoV1($id, string $dispFicheNo, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/AttachADespatchByFicheNo/{$dispFicheNo}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/AttachADespatchByFicheNo/{_dispFicheNo}
     */
    public function attachADespatchByFicheNoV1Post(string $dispFicheNo, array $data)
    {
        $path = "/Boms/AttachADespatchByFicheNo/{$dispFicheNo}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/DeleteCampaign
     */
    public function deleteCampaignV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/DeleteCampaign";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/DeleteCampaign
     */
    public function deleteCampaignV1Post(array $data)
    {
        $path = "/Boms/DeleteCampaign";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/SetClientInfo
     */
    public function setClientInfoV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/SetClientInfo";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/SetClientInfo
     */
    public function setClientInfoV1Post(array $data)
    {
        $path = "/Boms/SetClientInfo";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/GetRelevantCampaigns
     */
    public function getRelevantCampaignsV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/GetRelevantCampaigns";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/GetRelevantCampaigns
     */
    public function getRelevantCampaignsV1Post(array $data)
    {
        $path = "/Boms/GetRelevantCampaigns";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/ApplyCampaignSpecific/{_refList}
     */
    public function applyCampaignSpecificV1($id, string $refList, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/ApplyCampaignSpecific/{$refList}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/ApplyCampaignSpecific/{_refList}
     */
    public function applyCampaignSpecificV1Post(string $refList, array $data)
    {
        $path = "/Boms/ApplyCampaignSpecific/{$refList}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/ImportImage/{_ImgPath}/{_Indx}
     */
    public function importImageV1($id, string $ImgPath, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/ImportImage/{$ImgPath}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/ImportImage/{_ImgPath}/{_Indx}
     */
    public function importImageV1Post(string $ImgPath, string $Indx, array $data)
    {
        $path = "/Boms/ImportImage/{$ImgPath}/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/ExportBase64EncodedImage/{_Indx}
     */
    public function exportBase64EncodedImageV1($id, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/ExportBase64EncodedImage/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/ExportBase64EncodedImage/{_Indx}
     */
    public function exportBase64EncodedImageV1Post(string $Indx, array $data)
    {
        $path = "/Boms/ExportBase64EncodedImage/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/ImportBase64EncodedImage/{_base64EncodedImage}/{_imageType}/{_Indx}
     */
    public function importBase64EncodedImageV1($id, string $base64EncodedImage, string $imageType, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/ImportBase64EncodedImage/{$base64EncodedImage}/{$imageType}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/ImportBase64EncodedImage/{_base64EncodedImage}/{_imageType}/{_Indx}
     */
    public function importBase64EncodedImageV1Post(string $base64EncodedImage, string $imageType, string $Indx, array $data)
    {
        $path = "/Boms/ImportBase64EncodedImage/{$base64EncodedImage}/{$imageType}/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /Boms/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function defnfldslistApplyaccdisttemplateV1(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function defnfldslistApplyaccdisttemplateV1Get($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /Boms/{id}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function defnfldslistSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function defnfldslistSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/MOLDREQLIST
     */
    public function getMOLDREQLISTV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/MOLDREQLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /Boms/{id}/MOLDREQLIST/{idt}
     */
    public function getMOLDREQLISTByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/MOLDREQLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /Boms/{id}/MOLDREQLIST/AppendLine2
     */
    public function moldreqlistAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/MOLDREQLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/MOLDREQLIST/AppendLine2
     */
    public function moldreqlistAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/MOLDREQLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/MOLDREQLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function moldreqlistAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/MOLDREQLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/MOLDREQLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function moldreqlistAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/MOLDREQLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/MOLDREQLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function moldreqlistGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/MOLDREQLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/MOLDREQLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function moldreqlistGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/MOLDREQLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/MOLDREQLIST/AddLine2/{_index}
     */
    public function moldreqlistAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/MOLDREQLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/MOLDREQLIST/AddLine2/{_index}
     */
    public function moldreqlistAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/MOLDREQLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/MOLDREQLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function moldreqlistAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/MOLDREQLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/MOLDREQLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function moldreqlistAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/MOLDREQLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/MOLDREQLIST/EqualizeBalance/{_index}
     */
    public function moldreqlistEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/MOLDREQLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/MOLDREQLIST/EqualizeBalance/{_index}
     */
    public function moldreqlistEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/MOLDREQLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/MOLDREQLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function moldreqlistApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/MOLDREQLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/MOLDREQLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function moldreqlistApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/MOLDREQLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/MOLDREQLIST/SetLineTotals/{_Indx}
     */
    public function moldreqlistSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/MOLDREQLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/MOLDREQLIST/SetLineTotals/{_Indx}
     */
    public function moldreqlistSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/MOLDREQLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/ExportToXML/{_RootKey}/{_FileName}
     */
    public function exportToXMLV1($id, string $RootKey, string $FileName, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/ExportToXML/{$RootKey}/{$FileName}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/ExportToXML/{_RootKey}/{_FileName}
     */
    public function exportToXMLV1Post(string $RootKey, string $FileName, array $data)
    {
        $path = "/Boms/ExportToXML/{$RootKey}/{$FileName}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/ImportFromXMLFile/{_RootKey}/{_FileName}
     */
    public function importFromXMLFileV1($id, string $RootKey, string $FileName, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/ImportFromXMLFile/{$RootKey}/{$FileName}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/ImportFromXMLFile/{_RootKey}/{_FileName}
     */
    public function importFromXMLFileV1Post(string $RootKey, string $FileName, array $data)
    {
        $path = "/Boms/ImportFromXMLFile/{$RootKey}/{$FileName}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/CreateCompositeLines
     */
    public function createCompositeLinesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/CreateCompositeLines";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/CreateCompositeLines
     */
    public function createCompositeLinesV1Post(array $data)
    {
        $path = "/Boms/CreateCompositeLines";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/FormSeriLotLines/{_lOMtd}
     */
    public function formSeriLotLinesV1($id, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/FormSeriLotLines/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/FormSeriLotLines/{_lOMtd}
     */
    public function formSeriLotLinesV1Post($lOMtd, array $data)
    {
        $path = "/Boms/FormSeriLotLines/{$lOMtd}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/ApplyCampaign
     */
    public function applyCampaignV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/ApplyCampaign";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/ApplyCampaign
     */
    public function applyCampaignV1Post(array $data)
    {
        $path = "/Boms/ApplyCampaign";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/ApplyRePayPln/{_lineNr}/{_rePayPCode}
     */
    public function applyRePayPlnV1($id, $lineNr, string $rePayPCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/ApplyRePayPln/{$lineNr}/{$rePayPCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/ApplyRePayPln/{_lineNr}/{_rePayPCode}
     */
    public function applyRePayPlnV1Post($lineNr, string $rePayPCode, array $data)
    {
        $path = "/Boms/ApplyRePayPln/{$lineNr}/{$rePayPCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/ApplyRePayPlnForInv/{_rePayCode}
     */
    public function applyRePayPlnForInvV1($id, string $rePayCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/ApplyRePayPlnForInv/{$rePayCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/ApplyRePayPlnForInv/{_rePayCode}
     */
    public function applyRePayPlnForInvV1Post(string $rePayCode, array $data)
    {
        $path = "/Boms/ApplyRePayPlnForInv/{$rePayCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/ImportFromXmlStr/{_RootKey}/{_XmlStr}
     */
    public function importFromXmlStrV1($id, string $RootKey, string $XmlStr, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/ImportFromXmlStr/{$RootKey}/{$XmlStr}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/ImportFromXmlStr/{_RootKey}/{_XmlStr}
     */
    public function importFromXmlStrV1Post(string $RootKey, string $XmlStr, array $data)
    {
        $path = "/Boms/ImportFromXmlStr/{$RootKey}/{$XmlStr}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/ExportToXmlStr/{_RootKey}
     */
    public function exportToXmlStrV1($id, string $RootKey, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/ExportToXmlStr/{$RootKey}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/ExportToXmlStr/{_RootKey}
     */
    public function exportToXmlStrV1Post(string $RootKey, array $data)
    {
        $path = "/Boms/ExportToXmlStr/{$RootKey}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/ApplyCondition
     */
    public function applyConditionV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/ApplyCondition";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/ApplyCondition
     */
    public function applyConditionV1Post(array $data)
    {
        $path = "/Boms/ApplyCondition";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/ExportImage/{_Indx}/{_ImgPath}
     */
    public function exportImageV1($id, string $Indx, string $ImgPath, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/ExportImage/{$Indx}/{$ImgPath}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/ExportImage/{_Indx}/{_ImgPath}
     */
    public function exportImageV1Post(string $Indx, string $ImgPath, array $data)
    {
        $path = "/Boms/ExportImage/{$Indx}/{$ImgPath}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function linesdefnfldslistGetstocklinepriceV1($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function linesdefnfldslistGetstocklinepriceV1Get($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function linesdefnfldslistAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function linesdefnfldslistAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function linesdefnfldslistAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function linesdefnfldslistAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function linesdefnfldslistEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function linesdefnfldslistEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function linesdefnfldslistApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function linesdefnfldslistApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function linesdefnfldslistSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function linesdefnfldslistSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/BOM_PARAMETERS
     */
    public function getBOM_PARAMETERSV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/BOM_PARAMETERS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /Boms/{id}/BOM_PARAMETERS/{idt}
     */
    public function getBOM_PARAMETERSByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/BOM_PARAMETERS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /Boms/{id}/BOM_PARAMETERS/AppendLine2
     */
    public function bomParametersAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/BOM_PARAMETERS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/BOM_PARAMETERS/AppendLine2
     */
    public function bomParametersAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/BOM_PARAMETERS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/BOM_PARAMETERS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function bomParametersAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/BOM_PARAMETERS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/BOM_PARAMETERS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function bomParametersAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/BOM_PARAMETERS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/BOM_PARAMETERS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function bomParametersGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/BOM_PARAMETERS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/BOM_PARAMETERS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function bomParametersGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/BOM_PARAMETERS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/BOM_PARAMETERS/AddLine2/{_index}
     */
    public function bomParametersAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/BOM_PARAMETERS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/BOM_PARAMETERS/AddLine2/{_index}
     */
    public function bomParametersAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/BOM_PARAMETERS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/BOM_PARAMETERS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function bomParametersAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/BOM_PARAMETERS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/BOM_PARAMETERS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function bomParametersAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/BOM_PARAMETERS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/BOM_PARAMETERS/EqualizeBalance/{_index}
     */
    public function bomParametersEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/BOM_PARAMETERS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/BOM_PARAMETERS/EqualizeBalance/{_index}
     */
    public function bomParametersEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/BOM_PARAMETERS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/BOM_PARAMETERS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function bomParametersApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/BOM_PARAMETERS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/BOM_PARAMETERS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function bomParametersApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/BOM_PARAMETERS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/BOM_PARAMETERS/SetLineTotals/{_Indx}
     */
    public function bomParametersSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/BOM_PARAMETERS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/BOM_PARAMETERS/SetLineTotals/{_Indx}
     */
    public function bomParametersSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/BOM_PARAMETERS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/DEFNFLDSLIST
     */
    public function getDEFNFLDSLISTV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/DEFNFLDSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /Boms/{id}/DEFNFLDSLIST/{idt}
     */
    public function getDEFNFLDSLISTByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/DEFNFLDSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /Boms/{id}/DEFNFLDSLIST/AppendLine2
     */
    public function defnfldslistAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/DEFNFLDSLIST/AppendLine2
     */
    public function defnfldslistAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function defnfldslistAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function defnfldslistAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function defnfldslistGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function defnfldslistGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function defnfldslistAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function defnfldslistAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function defnfldslistAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function defnfldslistAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function defnfldslistEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function defnfldslistEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/DET_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function linesdetListApplyaccdisttemplateV1($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/DET_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/DET_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function linesdetListApplyaccdisttemplateV1Get($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/DET_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/DET_LIST/SetLineTotals/{_Indx}
     */
    public function linesdetListSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/DET_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/DET_LIST/SetLineTotals/{_Indx}
     */
    public function linesdetListSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/DET_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/VARIANT_FORMULA_LIST
     */
    public function getLINESVARIANT_FORMULA_LISTV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/VARIANT_FORMULA_LIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/VARIANT_FORMULA_LIST/{idt}
     */
    public function getLINESVARIANT_FORMULA_LISTByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/VARIANT_FORMULA_LIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/VARIANT_FORMULA_LIST/AppendLine2
     */
    public function linesvariantFormulaListAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/VARIANT_FORMULA_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/VARIANT_FORMULA_LIST/AppendLine2
     */
    public function linesvariantFormulaListAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/VARIANT_FORMULA_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/VARIANT_FORMULA_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function linesvariantFormulaListAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/VARIANT_FORMULA_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/VARIANT_FORMULA_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function linesvariantFormulaListAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/VARIANT_FORMULA_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/VARIANT_FORMULA_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function linesvariantFormulaListGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/VARIANT_FORMULA_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/VARIANT_FORMULA_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function linesvariantFormulaListGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/VARIANT_FORMULA_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/VARIANT_FORMULA_LIST/AddLine2/{_index}
     */
    public function linesvariantFormulaListAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/VARIANT_FORMULA_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/VARIANT_FORMULA_LIST/AddLine2/{_index}
     */
    public function linesvariantFormulaListAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/VARIANT_FORMULA_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/VARIANT_FORMULA_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function linesvariantFormulaListAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/VARIANT_FORMULA_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/VARIANT_FORMULA_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function linesvariantFormulaListAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/VARIANT_FORMULA_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/VARIANT_FORMULA_LIST/EqualizeBalance/{_index}
     */
    public function linesvariantFormulaListEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/VARIANT_FORMULA_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/VARIANT_FORMULA_LIST/EqualizeBalance/{_index}
     */
    public function linesvariantFormulaListEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/VARIANT_FORMULA_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/VARIANT_FORMULA_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function linesvariantFormulaListApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/VARIANT_FORMULA_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/VARIANT_FORMULA_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function linesvariantFormulaListApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/VARIANT_FORMULA_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/VARIANT_FORMULA_LIST/SetLineTotals/{_Indx}
     */
    public function linesvariantFormulaListSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/VARIANT_FORMULA_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/VARIANT_FORMULA_LIST/SetLineTotals/{_Indx}
     */
    public function linesvariantFormulaListSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/VARIANT_FORMULA_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/VARIANT_CONDITION_LIST
     */
    public function getLINESVARIANT_CONDITION_LISTV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/VARIANT_CONDITION_LIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/VARIANT_CONDITION_LIST/{idt}
     */
    public function getLINESVARIANT_CONDITION_LISTByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/VARIANT_CONDITION_LIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/VARIANT_CONDITION_LIST/AppendLine2
     */
    public function linesvariantConditionListAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/VARIANT_CONDITION_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/VARIANT_CONDITION_LIST/AppendLine2
     */
    public function linesvariantConditionListAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/VARIANT_CONDITION_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/VARIANT_CONDITION_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function linesvariantConditionListAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/VARIANT_CONDITION_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/VARIANT_CONDITION_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function linesvariantConditionListAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/VARIANT_CONDITION_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/VARIANT_CONDITION_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function linesvariantConditionListGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/VARIANT_CONDITION_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/VARIANT_CONDITION_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function linesvariantConditionListGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/VARIANT_CONDITION_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/VARIANT_CONDITION_LIST/AddLine2/{_index}
     */
    public function linesvariantConditionListAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/VARIANT_CONDITION_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/VARIANT_CONDITION_LIST/AddLine2/{_index}
     */
    public function linesvariantConditionListAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/VARIANT_CONDITION_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/VARIANT_CONDITION_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function linesvariantConditionListAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/VARIANT_CONDITION_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/VARIANT_CONDITION_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function linesvariantConditionListAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/VARIANT_CONDITION_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/VARIANT_CONDITION_LIST/EqualizeBalance/{_index}
     */
    public function linesvariantConditionListEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/VARIANT_CONDITION_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/VARIANT_CONDITION_LIST/EqualizeBalance/{_index}
     */
    public function linesvariantConditionListEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/VARIANT_CONDITION_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/VARIANT_CONDITION_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function linesvariantConditionListApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/VARIANT_CONDITION_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/VARIANT_CONDITION_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function linesvariantConditionListApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/VARIANT_CONDITION_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/VARIANT_CONDITION_LIST/SetLineTotals/{_Indx}
     */
    public function linesvariantConditionListSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/VARIANT_CONDITION_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/VARIANT_CONDITION_LIST/SetLineTotals/{_Indx}
     */
    public function linesvariantConditionListSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/VARIANT_CONDITION_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/DEFNFLDSLIST
     */
    public function getLINESDEFNFLDSLISTV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/DEFNFLDSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/DEFNFLDSLIST/{idt}
     */
    public function getLINESDEFNFLDSLISTByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/DEFNFLDSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/DEFNFLDSLIST/AppendLine2
     */
    public function linesdefnfldslistAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/DEFNFLDSLIST/AppendLine2
     */
    public function linesdefnfldslistAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function linesdefnfldslistAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function linesdefnfldslistAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /Boms/readwithbodyparamters
     */
    public function postReadWithBodyParametersV1(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/readwithbodyparamters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /Boms/{id}/readwithbodyparamters
     */
    public function postReadByIdWithBodyParametersV1($id, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/readwithbodyparamters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES
     */
    public function getLINESV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{idt}
     */
    public function getLINESByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/AppendLine2
     */
    public function linesAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/AppendLine2
     */
    public function linesAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function linesAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function linesAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function linesGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function linesGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/AddLine2/{_index}
     */
    public function linesAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/AddLine2/{_index}
     */
    public function linesAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function linesAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function linesAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/EqualizeBalance/{_index}
     */
    public function linesEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/EqualizeBalance/{_index}
     */
    public function linesEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function linesApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function linesApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/SetLineTotals/{_Indx}
     */
    public function linesSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/SetLineTotals/{_Indx}
     */
    public function linesSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/DET_LIST
     */
    public function getLINESDET_LISTV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/DET_LIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/DET_LIST/{idt}
     */
    public function getLINESDET_LISTByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/DET_LIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/DET_LIST/AppendLine2
     */
    public function linesdetListAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/DET_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/DET_LIST/AppendLine2
     */
    public function linesdetListAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/DET_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/DET_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function linesdetListAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/DET_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/DET_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function linesdetListAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/DET_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/DET_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function linesdetListGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/DET_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/DET_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function linesdetListGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/DET_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/DET_LIST/AddLine2/{_index}
     */
    public function linesdetListAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/DET_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/DET_LIST/AddLine2/{_index}
     */
    public function linesdetListAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/DET_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/DET_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function linesdetListAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/DET_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/DET_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function linesdetListAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/DET_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /Boms/{id}/LINES/{id1}/DET_LIST/EqualizeBalance/{_index}
     */
    public function linesdetListEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/{$id}/LINES/{$id1}/DET_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /Boms/LINES/{id1}/DET_LIST/EqualizeBalance/{_index}
     */
    public function linesdetListEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/Boms/LINES/{$id1}/DET_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    public function searchByCode($code)
    {
        return $this->getAll(['q' => "CODE like '{$code}*'"]);
    }

    public function searchByName($name)
    {
        return $this->getAll(['q' => "NAME like '{$name}*'"]);
    }

    public function searchByType($type)
    {
        return $this->getAll(['q' => "TYPE eq {$type}"]);
    }

    /**
     * Retrieves analytics data for Boms entities.
     */
    public function getAnalytics()
    {
        return ['total' => $this->getCount()];
    }

    /**
     * Retrieves the total count of Boms entities.
     */
    public function getCount()
    {
        $resp = $this->getAll(['count' => true]);
        return (int) ($resp->totalCount ?? 0);
    }

    /**
     * Retrieves database column information for the Boms entity.
     */
    public function getDbColumns()
    {
        $path = "{$this->endpoint}/dbcolumns";
        return $this->request('GET', $path);
    }

    /**
     * Enables change tracking for the Boms entity.
     */
    public function track()
    {
        $path = "{$this->endpoint}/track";
        return $this->request('GET', $path);
    }

    /**
     * Disables change tracking for the Boms entity.
     */
    public function untrack()
    {
        $path = "{$this->endpoint}/untrack";
        return $this->request('GET', $path);
    }

    /**
     * Checks the change tracking status for the Boms entity.
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
