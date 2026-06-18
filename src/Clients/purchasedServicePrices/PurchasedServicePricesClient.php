<?php

declare(strict_types=1);

namespace LogoObjects\Clients\purchasedServicePrices;

use LogoObjects\Http\BaseApiClient;
use LogoObjects\Types\ApiResponse;
use LogoObjects\Utils\QueryBuilder;

/**
 * PurchasedServicePricesClient - /purchasedServicePrices endpoint'i icin CRUD ve ozel islemler.
 */
class PurchasedServicePricesClient extends BaseApiClient
{
    /** @var string */
    protected $endpoint = '/purchasedServicePrices';

    /**
     * Retrieves a paginated list of PurchasedServicePrices entities.
     */
    public function getAll(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "{$this->endpoint}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return ApiResponse::of($this->request('GET', $path), \LogoObjects\Clients\purchasedServicePrices\PurchasedServicePrices::class);
    }

    /**
     * Retrieves a single PurchasedServicePrices entity by its internal reference ID.
     */
    public function getById($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "{$this->endpoint}/{$id}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return \LogoObjects\Clients\purchasedServicePrices\PurchasedServicePrices::fromArray($this->request('GET', $path));
    }

    /**
     * Creates a new PurchasedServicePrices entity.
     */
    public function create(array $data)
    {
        $path = "{$this->endpoint}";
        return \LogoObjects\Clients\purchasedServicePrices\PurchasedServicePrices::fromArray($this->request('POST', $path, $data));
    }

    /**
     * Updates an existing PurchasedServicePrices entity.
     */
    public function update($id, array $data)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\purchasedServicePrices\PurchasedServicePrices::fromArray($this->request('PUT', $path, $data));
    }

    /**
     * Partially updates a PurchasedServicePrices entity.
     */
    public function patch($id, array $data)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\purchasedServicePrices\PurchasedServicePrices::fromArray($this->request('PATCH', $path, $data));
    }

    /**
     * Deletes a PurchasedServicePrices entity by its internal reference ID.
     */
    public function delete($id)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\purchasedServicePrices\PurchasedServicePrices::fromArray($this->request('DELETE', $path));
    }

    /**
     * Searches for PurchasedServicePrices entities based on a set of criteria.
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
     * Corresponds to POST /purchasedServicePrices/ReCalculate
     */
    public function reCalculateV1(array $data)
    {
        $path = "/purchasedServicePrices/ReCalculate";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/ReCalculate
     */
    public function reCalculateV1Get($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/ReCalculate";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/FillAccCodes
     */
    public function fillAccCodesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/FillAccCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/FillAccCodes
     */
    public function fillAccCodesV1Post(array $data)
    {
        $path = "/purchasedServicePrices/FillAccCodes";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/ApplyADiscount/{_discCode}
     */
    public function applyADiscountV1($id, string $discCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/ApplyADiscount/{$discCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/ApplyADiscount/{_discCode}
     */
    public function applyADiscountV1Post(string $discCode, array $data)
    {
        $path = "/purchasedServicePrices/ApplyADiscount/{$discCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/SetDefIntValue/{_fldName}/{_fType}/{_fSz}/{_Value}
     */
    public function setDefIntValueV1($id, string $fldName, $fType, $fSz, $Value, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/SetDefIntValue/{$fldName}/{$fType}/{$fSz}/{$Value}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/SetDefIntValue/{_fldName}/{_fType}/{_fSz}/{_Value}
     */
    public function setDefIntValueV1Post(string $fldName, $fType, $fSz, $Value, array $data)
    {
        $path = "/purchasedServicePrices/SetDefIntValue/{$fldName}/{$fType}/{$fSz}/{$Value}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/EqualizePayAmnt
     */
    public function equalizePayAmntV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/EqualizePayAmnt";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/EqualizePayAmnt
     */
    public function equalizePayAmntV1Post(array $data)
    {
        $path = "/purchasedServicePrices/EqualizePayAmnt";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/AddSeriLotsForKs/{_slCode}/{_amount}/{_IOMtd}
     */
    public function addSeriLotsForKsV1($id, string $slCode, $amount, $IOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/AddSeriLotsForKs/{$slCode}/{$amount}/{$IOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/AddSeriLotsForKs/{_slCode}/{_amount}/{_IOMtd}
     */
    public function addSeriLotsForKsV1Post(string $slCode, $amount, $IOMtd, array $data)
    {
        $path = "/purchasedServicePrices/AddSeriLotsForKs/{$slCode}/{$amount}/{$IOMtd}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/FillSMMACCCodes
     */
    public function fillSMMACCCodesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/FillSMMACCCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/FillSMMACCCodes
     */
    public function fillSMMACCCodesV1Post(array $data)
    {
        $path = "/purchasedServicePrices/FillSMMACCCodes";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/AttachADespatchByLRef/{_dispref}
     */
    public function attachADespatchByLRefV1($id, $dispref, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/AttachADespatchByLRef/{$dispref}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/AttachADespatchByLRef/{_dispref}
     */
    public function attachADespatchByLRefV1Post($dispref, array $data)
    {
        $path = "/purchasedServicePrices/AttachADespatchByLRef/{$dispref}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/AttachADespatchByFicheNo/{_dispFicheNo}
     */
    public function attachADespatchByFicheNoV1($id, string $dispFicheNo, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/AttachADespatchByFicheNo/{$dispFicheNo}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/AttachADespatchByFicheNo/{_dispFicheNo}
     */
    public function attachADespatchByFicheNoV1Post(string $dispFicheNo, array $data)
    {
        $path = "/purchasedServicePrices/AttachADespatchByFicheNo/{$dispFicheNo}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/DeleteCampaign
     */
    public function deleteCampaignV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/DeleteCampaign";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/DeleteCampaign
     */
    public function deleteCampaignV1Post(array $data)
    {
        $path = "/purchasedServicePrices/DeleteCampaign";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/SetClientInfo
     */
    public function setClientInfoV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/SetClientInfo";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/SetClientInfo
     */
    public function setClientInfoV1Post(array $data)
    {
        $path = "/purchasedServicePrices/SetClientInfo";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/GetRelevantCampaigns
     */
    public function getRelevantCampaignsV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/GetRelevantCampaigns";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/GetRelevantCampaigns
     */
    public function getRelevantCampaignsV1Post(array $data)
    {
        $path = "/purchasedServicePrices/GetRelevantCampaigns";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/ApplyCampaignSpecific/{_refList}
     */
    public function applyCampaignSpecificV1($id, string $refList, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/ApplyCampaignSpecific/{$refList}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/ApplyCampaignSpecific/{_refList}
     */
    public function applyCampaignSpecificV1Post(string $refList, array $data)
    {
        $path = "/purchasedServicePrices/ApplyCampaignSpecific/{$refList}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/ImportImage/{_ImgPath}/{_Indx}
     */
    public function importImageV1($id, string $ImgPath, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/ImportImage/{$ImgPath}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/ImportImage/{_ImgPath}/{_Indx}
     */
    public function importImageV1Post(string $ImgPath, string $Indx, array $data)
    {
        $path = "/purchasedServicePrices/ImportImage/{$ImgPath}/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/ExportBase64EncodedImage/{_Indx}
     */
    public function exportBase64EncodedImageV1($id, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/ExportBase64EncodedImage/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/ExportBase64EncodedImage/{_Indx}
     */
    public function exportBase64EncodedImageV1Post(string $Indx, array $data)
    {
        $path = "/purchasedServicePrices/ExportBase64EncodedImage/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/ImportBase64EncodedImage/{_base64EncodedImage}/{_imageType}/{_Indx}
     */
    public function importBase64EncodedImageV1($id, string $base64EncodedImage, string $imageType, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/ImportBase64EncodedImage/{$base64EncodedImage}/{$imageType}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/ImportBase64EncodedImage/{_base64EncodedImage}/{_imageType}/{_Indx}
     */
    public function importBase64EncodedImageV1Post(string $base64EncodedImage, string $imageType, string $Indx, array $data)
    {
        $path = "/purchasedServicePrices/ImportBase64EncodedImage/{$base64EncodedImage}/{$imageType}/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/VGENXMLLIST/{id1}/VALREFSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function vgenxmllistvalrefslistApplyaccdisttemplateV1($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/VGENXMLLIST/{$id1}/VALREFSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/VGENXMLLIST/{id1}/VALREFSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function vgenxmllistvalrefslistApplyaccdisttemplateV1Get($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/VGENXMLLIST/{$id1}/VALREFSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/VGENXMLLIST/{id1}/VALREFSLIST/SetLineTotals/{_Indx}
     */
    public function vgenxmllistvalrefslistSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/VGENXMLLIST/{$id1}/VALREFSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/VGENXMLLIST/{id1}/VALREFSLIST/SetLineTotals/{_Indx}
     */
    public function vgenxmllistvalrefslistSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/VGENXMLLIST/{$id1}/VALREFSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/DIVISION_LIST
     */
    public function getDIVISION_LISTV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/DIVISION_LIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/DIVISION_LIST/{idt}
     */
    public function getDIVISION_LISTByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/DIVISION_LIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/DIVISION_LIST/AppendLine2
     */
    public function divisionListAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/DIVISION_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/DIVISION_LIST/AppendLine2
     */
    public function divisionListAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/DIVISION_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/DIVISION_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function divisionListAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/DIVISION_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/DIVISION_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function divisionListAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/DIVISION_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/DIVISION_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function divisionListGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/DIVISION_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/DIVISION_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function divisionListGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/DIVISION_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/DIVISION_LIST/AddLine2/{_index}
     */
    public function divisionListAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/DIVISION_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/DIVISION_LIST/AddLine2/{_index}
     */
    public function divisionListAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/DIVISION_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/DIVISION_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function divisionListAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/DIVISION_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/DIVISION_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function divisionListAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/DIVISION_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/DIVISION_LIST/EqualizeBalance/{_index}
     */
    public function divisionListEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/DIVISION_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/DIVISION_LIST/EqualizeBalance/{_index}
     */
    public function divisionListEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/DIVISION_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/DIVISION_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function divisionListApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/DIVISION_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/DIVISION_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function divisionListApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/DIVISION_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/DIVISION_LIST/SetLineTotals/{_Indx}
     */
    public function divisionListSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/DIVISION_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/DIVISION_LIST/SetLineTotals/{_Indx}
     */
    public function divisionListSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/DIVISION_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/ExportToXML/{_RootKey}/{_FileName}
     */
    public function exportToXMLV1($id, string $RootKey, string $FileName, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/ExportToXML/{$RootKey}/{$FileName}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/ExportToXML/{_RootKey}/{_FileName}
     */
    public function exportToXMLV1Post(string $RootKey, string $FileName, array $data)
    {
        $path = "/purchasedServicePrices/ExportToXML/{$RootKey}/{$FileName}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/ImportFromXMLFile/{_RootKey}/{_FileName}
     */
    public function importFromXMLFileV1($id, string $RootKey, string $FileName, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/ImportFromXMLFile/{$RootKey}/{$FileName}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/ImportFromXMLFile/{_RootKey}/{_FileName}
     */
    public function importFromXMLFileV1Post(string $RootKey, string $FileName, array $data)
    {
        $path = "/purchasedServicePrices/ImportFromXMLFile/{$RootKey}/{$FileName}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/CreateCompositeLines
     */
    public function createCompositeLinesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/CreateCompositeLines";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/CreateCompositeLines
     */
    public function createCompositeLinesV1Post(array $data)
    {
        $path = "/purchasedServicePrices/CreateCompositeLines";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/FormSeriLotLines/{_lOMtd}
     */
    public function formSeriLotLinesV1($id, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/FormSeriLotLines/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/FormSeriLotLines/{_lOMtd}
     */
    public function formSeriLotLinesV1Post($lOMtd, array $data)
    {
        $path = "/purchasedServicePrices/FormSeriLotLines/{$lOMtd}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/ApplyCampaign
     */
    public function applyCampaignV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/ApplyCampaign";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/ApplyCampaign
     */
    public function applyCampaignV1Post(array $data)
    {
        $path = "/purchasedServicePrices/ApplyCampaign";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/ApplyRePayPln/{_lineNr}/{_rePayPCode}
     */
    public function applyRePayPlnV1($id, $lineNr, string $rePayPCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/ApplyRePayPln/{$lineNr}/{$rePayPCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/ApplyRePayPln/{_lineNr}/{_rePayPCode}
     */
    public function applyRePayPlnV1Post($lineNr, string $rePayPCode, array $data)
    {
        $path = "/purchasedServicePrices/ApplyRePayPln/{$lineNr}/{$rePayPCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/ApplyRePayPlnForInv/{_rePayCode}
     */
    public function applyRePayPlnForInvV1($id, string $rePayCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/ApplyRePayPlnForInv/{$rePayCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/ApplyRePayPlnForInv/{_rePayCode}
     */
    public function applyRePayPlnForInvV1Post(string $rePayCode, array $data)
    {
        $path = "/purchasedServicePrices/ApplyRePayPlnForInv/{$rePayCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/ImportFromXmlStr/{_RootKey}/{_XmlStr}
     */
    public function importFromXmlStrV1($id, string $RootKey, string $XmlStr, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/ImportFromXmlStr/{$RootKey}/{$XmlStr}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/ImportFromXmlStr/{_RootKey}/{_XmlStr}
     */
    public function importFromXmlStrV1Post(string $RootKey, string $XmlStr, array $data)
    {
        $path = "/purchasedServicePrices/ImportFromXmlStr/{$RootKey}/{$XmlStr}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/ExportToXmlStr/{_RootKey}
     */
    public function exportToXmlStrV1($id, string $RootKey, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/ExportToXmlStr/{$RootKey}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/ExportToXmlStr/{_RootKey}
     */
    public function exportToXmlStrV1Post(string $RootKey, array $data)
    {
        $path = "/purchasedServicePrices/ExportToXmlStr/{$RootKey}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/ApplyCondition
     */
    public function applyConditionV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/ApplyCondition";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/ApplyCondition
     */
    public function applyConditionV1Post(array $data)
    {
        $path = "/purchasedServicePrices/ApplyCondition";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/ExportImage/{_Indx}/{_ImgPath}
     */
    public function exportImageV1($id, string $Indx, string $ImgPath, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/ExportImage/{$Indx}/{$ImgPath}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/ExportImage/{_Indx}/{_ImgPath}
     */
    public function exportImageV1Post(string $Indx, string $ImgPath, array $data)
    {
        $path = "/purchasedServicePrices/ExportImage/{$Indx}/{$ImgPath}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/readwithbodyparamters
     */
    public function postReadWithBodyParametersV1(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/readwithbodyparamters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/{id}/readwithbodyparamters
     */
    public function postReadByIdWithBodyParametersV1($id, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/readwithbodyparamters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/VGENXMLLIST
     */
    public function getVGENXMLLISTV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/VGENXMLLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/VGENXMLLIST/{idt}
     */
    public function getVGENXMLLISTByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/VGENXMLLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/VGENXMLLIST/AppendLine2
     */
    public function vgenxmllistAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/VGENXMLLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/VGENXMLLIST/AppendLine2
     */
    public function vgenxmllistAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/VGENXMLLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/VGENXMLLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function vgenxmllistAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/VGENXMLLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/VGENXMLLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function vgenxmllistAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/VGENXMLLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/VGENXMLLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function vgenxmllistGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/VGENXMLLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/VGENXMLLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function vgenxmllistGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/VGENXMLLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/VGENXMLLIST/AddLine2/{_index}
     */
    public function vgenxmllistAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/VGENXMLLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/VGENXMLLIST/AddLine2/{_index}
     */
    public function vgenxmllistAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/VGENXMLLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/VGENXMLLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function vgenxmllistAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/VGENXMLLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/VGENXMLLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function vgenxmllistAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/VGENXMLLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/VGENXMLLIST/EqualizeBalance/{_index}
     */
    public function vgenxmllistEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/VGENXMLLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/VGENXMLLIST/EqualizeBalance/{_index}
     */
    public function vgenxmllistEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/VGENXMLLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/VGENXMLLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function vgenxmllistApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/VGENXMLLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/VGENXMLLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function vgenxmllistApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/VGENXMLLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/VGENXMLLIST/SetLineTotals/{_Indx}
     */
    public function vgenxmllistSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/VGENXMLLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/VGENXMLLIST/SetLineTotals/{_Indx}
     */
    public function vgenxmllistSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/VGENXMLLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/VGENXMLLIST/{id1}/VALREFSLIST
     */
    public function getVGENXMLLISTVALREFSLISTV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/VGENXMLLIST/{$id1}/VALREFSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/VGENXMLLIST/{id1}/VALREFSLIST/{idt}
     */
    public function getVGENXMLLISTVALREFSLISTByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/VGENXMLLIST/{$id1}/VALREFSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/VGENXMLLIST/{id1}/VALREFSLIST/AppendLine2
     */
    public function vgenxmllistvalrefslistAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/VGENXMLLIST/{$id1}/VALREFSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/VGENXMLLIST/{id1}/VALREFSLIST/AppendLine2
     */
    public function vgenxmllistvalrefslistAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/VGENXMLLIST/{$id1}/VALREFSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/VGENXMLLIST/{id1}/VALREFSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function vgenxmllistvalrefslistAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/VGENXMLLIST/{$id1}/VALREFSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/VGENXMLLIST/{id1}/VALREFSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function vgenxmllistvalrefslistAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/VGENXMLLIST/{$id1}/VALREFSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/VGENXMLLIST/{id1}/VALREFSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function vgenxmllistvalrefslistGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/VGENXMLLIST/{$id1}/VALREFSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/VGENXMLLIST/{id1}/VALREFSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function vgenxmllistvalrefslistGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/VGENXMLLIST/{$id1}/VALREFSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/VGENXMLLIST/{id1}/VALREFSLIST/AddLine2/{_index}
     */
    public function vgenxmllistvalrefslistAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/VGENXMLLIST/{$id1}/VALREFSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/VGENXMLLIST/{id1}/VALREFSLIST/AddLine2/{_index}
     */
    public function vgenxmllistvalrefslistAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/VGENXMLLIST/{$id1}/VALREFSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/VGENXMLLIST/{id1}/VALREFSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function vgenxmllistvalrefslistAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/VGENXMLLIST/{$id1}/VALREFSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/VGENXMLLIST/{id1}/VALREFSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function vgenxmllistvalrefslistAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/VGENXMLLIST/{$id1}/VALREFSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /purchasedServicePrices/{id}/VGENXMLLIST/{id1}/VALREFSLIST/EqualizeBalance/{_index}
     */
    public function vgenxmllistvalrefslistEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/{$id}/VGENXMLLIST/{$id1}/VALREFSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /purchasedServicePrices/VGENXMLLIST/{id1}/VALREFSLIST/EqualizeBalance/{_index}
     */
    public function vgenxmllistvalrefslistEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/purchasedServicePrices/VGENXMLLIST/{$id1}/VALREFSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    public function searchByCardCode($cardCode)
    {
        return $this->getAll(['q' => "CARD_CODE like '{$cardCode}*'"]);
    }

    public function searchByOwnerType($ownerType)
    {
        return $this->getAll(['q' => "OWNER_TYPE eq {$ownerType}"]);
    }

    /**
     * Retrieves analytics data for PurchasedServicePrices entities.
     */
    public function getAnalytics()
    {
        return ['total' => $this->getCount()];
    }

    /**
     * Retrieves the total count of PurchasedServicePrices entities.
     */
    public function getCount()
    {
        $resp = $this->getAll(['count' => true]);
        return (int) ($resp->totalCount ?? 0);
    }

    /**
     * Retrieves database column information for the PurchasedServicePrices entity.
     */
    public function getDbColumns()
    {
        $path = "{$this->endpoint}/dbcolumns";
        return $this->request('GET', $path);
    }

    /**
     * Enables change tracking for the PurchasedServicePrices entity.
     */
    public function track()
    {
        $path = "{$this->endpoint}/track";
        return $this->request('GET', $path);
    }

    /**
     * Disables change tracking for the PurchasedServicePrices entity.
     */
    public function untrack()
    {
        $path = "{$this->endpoint}/untrack";
        return $this->request('GET', $path);
    }

    /**
     * Checks the change tracking status for the PurchasedServicePrices entity.
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
