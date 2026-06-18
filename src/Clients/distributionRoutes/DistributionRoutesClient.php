<?php

declare(strict_types=1);

namespace LogoObjects\Clients\distributionRoutes;

use LogoObjects\Http\BaseApiClient;
use LogoObjects\Types\ApiResponse;
use LogoObjects\Utils\QueryBuilder;

/**
 * DistributionRoutesClient - /distributionRoutes endpoint'i icin CRUD ve ozel islemler.
 */
class DistributionRoutesClient extends BaseApiClient
{
    /** @var string */
    protected $endpoint = '/distributionRoutes';

    /**
     * Retrieves a paginated list of DistributionRoutes entities.
     */
    public function getAll(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "{$this->endpoint}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return ApiResponse::of($this->request('GET', $path), \LogoObjects\Clients\distributionRoutes\DistributionRoutes::class);
    }

    /**
     * Retrieves a single DistributionRoutes entity by its internal reference ID.
     */
    public function getById($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "{$this->endpoint}/{$id}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return \LogoObjects\Clients\distributionRoutes\DistributionRoutes::fromArray($this->request('GET', $path));
    }

    /**
     * Creates a new DistributionRoutes entity.
     */
    public function create(array $data)
    {
        $path = "{$this->endpoint}";
        return \LogoObjects\Clients\distributionRoutes\DistributionRoutes::fromArray($this->request('POST', $path, $data));
    }

    /**
     * Updates an existing DistributionRoutes entity.
     */
    public function update($id, array $data)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\distributionRoutes\DistributionRoutes::fromArray($this->request('PUT', $path, $data));
    }

    /**
     * Partially updates a DistributionRoutes entity.
     */
    public function patch($id, array $data)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\distributionRoutes\DistributionRoutes::fromArray($this->request('PATCH', $path, $data));
    }

    /**
     * Deletes a DistributionRoutes entity by its internal reference ID.
     */
    public function delete($id)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\distributionRoutes\DistributionRoutes::fromArray($this->request('DELETE', $path));
    }

    /**
     * Searches for DistributionRoutes entities based on a set of criteria.
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
     * Corresponds to GET /distributionRoutes/{id}/ExportImage/{_Indx}/{_ImgPath}
     */
    public function exportImageV1($id, string $Indx, string $ImgPath, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/ExportImage/{$Indx}/{$ImgPath}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/ExportImage/{_Indx}/{_ImgPath}
     */
    public function exportImageV1Post(string $Indx, string $ImgPath, array $data)
    {
        $path = "/distributionRoutes/ExportImage/{$Indx}/{$ImgPath}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/ReCalculate
     */
    public function reCalculateV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/ReCalculate";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/ReCalculate
     */
    public function reCalculateV1Post(array $data)
    {
        $path = "/distributionRoutes/ReCalculate";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/FillAccCodes
     */
    public function fillAccCodesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/FillAccCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/FillAccCodes
     */
    public function fillAccCodesV1Post(array $data)
    {
        $path = "/distributionRoutes/FillAccCodes";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/ApplyADiscount/{_discCode}
     */
    public function applyADiscountV1($id, string $discCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/ApplyADiscount/{$discCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/ApplyADiscount/{_discCode}
     */
    public function applyADiscountV1Post(string $discCode, array $data)
    {
        $path = "/distributionRoutes/ApplyADiscount/{$discCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/SetDefIntValue/{_fldName}/{_fType}/{_fSz}/{_Value}
     */
    public function setDefIntValueV1($id, string $fldName, $fType, $fSz, $Value, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/SetDefIntValue/{$fldName}/{$fType}/{$fSz}/{$Value}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/SetDefIntValue/{_fldName}/{_fType}/{_fSz}/{_Value}
     */
    public function setDefIntValueV1Post(string $fldName, $fType, $fSz, $Value, array $data)
    {
        $path = "/distributionRoutes/SetDefIntValue/{$fldName}/{$fType}/{$fSz}/{$Value}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/EqualizePayAmnt
     */
    public function equalizePayAmntV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/EqualizePayAmnt";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/EqualizePayAmnt
     */
    public function equalizePayAmntV1Post(array $data)
    {
        $path = "/distributionRoutes/EqualizePayAmnt";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/AddSeriLotsForKs/{_slCode}/{_amount}/{_IOMtd}
     */
    public function addSeriLotsForKsV1($id, string $slCode, $amount, $IOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/AddSeriLotsForKs/{$slCode}/{$amount}/{$IOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/AddSeriLotsForKs/{_slCode}/{_amount}/{_IOMtd}
     */
    public function addSeriLotsForKsV1Post(string $slCode, $amount, $IOMtd, array $data)
    {
        $path = "/distributionRoutes/AddSeriLotsForKs/{$slCode}/{$amount}/{$IOMtd}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/FillSMMACCCodes
     */
    public function fillSMMACCCodesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/FillSMMACCCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/FillSMMACCCodes
     */
    public function fillSMMACCCodesV1Post(array $data)
    {
        $path = "/distributionRoutes/FillSMMACCCodes";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/AttachADespatchByLRef/{_dispref}
     */
    public function attachADespatchByLRefV1($id, $dispref, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/AttachADespatchByLRef/{$dispref}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/AttachADespatchByLRef/{_dispref}
     */
    public function attachADespatchByLRefV1Post($dispref, array $data)
    {
        $path = "/distributionRoutes/AttachADespatchByLRef/{$dispref}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/AttachADespatchByFicheNo/{_dispFicheNo}
     */
    public function attachADespatchByFicheNoV1($id, string $dispFicheNo, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/AttachADespatchByFicheNo/{$dispFicheNo}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/AttachADespatchByFicheNo/{_dispFicheNo}
     */
    public function attachADespatchByFicheNoV1Post(string $dispFicheNo, array $data)
    {
        $path = "/distributionRoutes/AttachADespatchByFicheNo/{$dispFicheNo}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/DeleteCampaign
     */
    public function deleteCampaignV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/DeleteCampaign";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/DeleteCampaign
     */
    public function deleteCampaignV1Post(array $data)
    {
        $path = "/distributionRoutes/DeleteCampaign";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/SetClientInfo
     */
    public function setClientInfoV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/SetClientInfo";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/SetClientInfo
     */
    public function setClientInfoV1Post(array $data)
    {
        $path = "/distributionRoutes/SetClientInfo";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/GetRelevantCampaigns
     */
    public function getRelevantCampaignsV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/GetRelevantCampaigns";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/GetRelevantCampaigns
     */
    public function getRelevantCampaignsV1Post(array $data)
    {
        $path = "/distributionRoutes/GetRelevantCampaigns";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/ApplyCampaignSpecific/{_refList}
     */
    public function applyCampaignSpecificV1($id, string $refList, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/ApplyCampaignSpecific/{$refList}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/ApplyCampaignSpecific/{_refList}
     */
    public function applyCampaignSpecificV1Post(string $refList, array $data)
    {
        $path = "/distributionRoutes/ApplyCampaignSpecific/{$refList}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/ImportImage/{_ImgPath}/{_Indx}
     */
    public function importImageV1($id, string $ImgPath, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/ImportImage/{$ImgPath}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/ImportImage/{_ImgPath}/{_Indx}
     */
    public function importImageV1Post(string $ImgPath, string $Indx, array $data)
    {
        $path = "/distributionRoutes/ImportImage/{$ImgPath}/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/ExportBase64EncodedImage/{_Indx}
     */
    public function exportBase64EncodedImageV1($id, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/ExportBase64EncodedImage/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/ExportBase64EncodedImage/{_Indx}
     */
    public function exportBase64EncodedImageV1Post(string $Indx, array $data)
    {
        $path = "/distributionRoutes/ExportBase64EncodedImage/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/ImportBase64EncodedImage/{_base64EncodedImage}/{_imageType}/{_Indx}
     */
    public function importBase64EncodedImageV1($id, string $base64EncodedImage, string $imageType, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/ImportBase64EncodedImage/{$base64EncodedImage}/{$imageType}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/ImportBase64EncodedImage/{_base64EncodedImage}/{_imageType}/{_Indx}
     */
    public function importBase64EncodedImageV1Post(string $base64EncodedImage, string $imageType, string $Indx, array $data)
    {
        $path = "/distributionRoutes/ImportBase64EncodedImage/{$base64EncodedImage}/{$imageType}/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/ImportFromXmlStr/{_RootKey}/{_XmlStr}
     */
    public function importFromXmlStrV1($id, string $RootKey, string $XmlStr, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/ImportFromXmlStr/{$RootKey}/{$XmlStr}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/ImportFromXmlStr/{_RootKey}/{_XmlStr}
     */
    public function importFromXmlStrV1Post(string $RootKey, string $XmlStr, array $data)
    {
        $path = "/distributionRoutes/ImportFromXmlStr/{$RootKey}/{$XmlStr}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/ExportToXmlStr/{_RootKey}
     */
    public function exportToXmlStrV1($id, string $RootKey, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/ExportToXmlStr/{$RootKey}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/ExportToXmlStr/{_RootKey}
     */
    public function exportToXmlStrV1Post(string $RootKey, array $data)
    {
        $path = "/distributionRoutes/ExportToXmlStr/{$RootKey}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/ApplyCondition
     */
    public function applyConditionV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/ApplyCondition";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/ApplyCondition
     */
    public function applyConditionV1Post(array $data)
    {
        $path = "/distributionRoutes/ApplyCondition";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /distributionRoutes/readwithbodyparamters
     */
    public function postReadWithBodyParametersV1(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/readwithbodyparamters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /distributionRoutes/{id}/readwithbodyparamters
     */
    public function postReadByIdWithBodyParametersV1($id, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/readwithbodyparamters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/DIST_RT_LINES
     */
    public function getDIST_RT_LINESV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/DIST_RT_LINES";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/DIST_RT_LINES/{idt}
     */
    public function getDIST_RT_LINESByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/DIST_RT_LINES/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/DIST_RT_LINES/AppendLine2
     */
    public function distRtLinesAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/DIST_RT_LINES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/DIST_RT_LINES/AppendLine2
     */
    public function distRtLinesAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/DIST_RT_LINES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/DIST_RT_LINES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function distRtLinesAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/DIST_RT_LINES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/DIST_RT_LINES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function distRtLinesAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/DIST_RT_LINES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/DIST_RT_LINES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function distRtLinesGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/DIST_RT_LINES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/DIST_RT_LINES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function distRtLinesGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/DIST_RT_LINES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/DIST_RT_LINES/AddLine2/{_index}
     */
    public function distRtLinesAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/DIST_RT_LINES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/DIST_RT_LINES/AddLine2/{_index}
     */
    public function distRtLinesAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/DIST_RT_LINES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/DIST_RT_LINES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function distRtLinesAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/DIST_RT_LINES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/DIST_RT_LINES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function distRtLinesAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/DIST_RT_LINES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/DIST_RT_LINES/EqualizeBalance/{_index}
     */
    public function distRtLinesEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/DIST_RT_LINES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/DIST_RT_LINES/EqualizeBalance/{_index}
     */
    public function distRtLinesEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/DIST_RT_LINES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/DIST_RT_LINES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function distRtLinesApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/DIST_RT_LINES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/DIST_RT_LINES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function distRtLinesApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/DIST_RT_LINES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/DIST_RT_LINES/SetLineTotals/{_Indx}
     */
    public function distRtLinesSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/DIST_RT_LINES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/DIST_RT_LINES/SetLineTotals/{_Indx}
     */
    public function distRtLinesSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/DIST_RT_LINES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/ExportToXML/{_RootKey}/{_FileName}
     */
    public function exportToXMLV1($id, string $RootKey, string $FileName, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/ExportToXML/{$RootKey}/{$FileName}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/ExportToXML/{_RootKey}/{_FileName}
     */
    public function exportToXMLV1Post(string $RootKey, string $FileName, array $data)
    {
        $path = "/distributionRoutes/ExportToXML/{$RootKey}/{$FileName}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/ImportFromXMLFile/{_RootKey}/{_FileName}
     */
    public function importFromXMLFileV1($id, string $RootKey, string $FileName, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/ImportFromXMLFile/{$RootKey}/{$FileName}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/ImportFromXMLFile/{_RootKey}/{_FileName}
     */
    public function importFromXMLFileV1Post(string $RootKey, string $FileName, array $data)
    {
        $path = "/distributionRoutes/ImportFromXMLFile/{$RootKey}/{$FileName}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/CreateCompositeLines
     */
    public function createCompositeLinesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/CreateCompositeLines";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/CreateCompositeLines
     */
    public function createCompositeLinesV1Post(array $data)
    {
        $path = "/distributionRoutes/CreateCompositeLines";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/FormSeriLotLines/{_lOMtd}
     */
    public function formSeriLotLinesV1($id, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/FormSeriLotLines/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/FormSeriLotLines/{_lOMtd}
     */
    public function formSeriLotLinesV1Post($lOMtd, array $data)
    {
        $path = "/distributionRoutes/FormSeriLotLines/{$lOMtd}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/ApplyCampaign
     */
    public function applyCampaignV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/ApplyCampaign";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/ApplyCampaign
     */
    public function applyCampaignV1Post(array $data)
    {
        $path = "/distributionRoutes/ApplyCampaign";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/ApplyRePayPln/{_lineNr}/{_rePayPCode}
     */
    public function applyRePayPlnV1($id, $lineNr, string $rePayPCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/ApplyRePayPln/{$lineNr}/{$rePayPCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/ApplyRePayPln/{_lineNr}/{_rePayPCode}
     */
    public function applyRePayPlnV1Post($lineNr, string $rePayPCode, array $data)
    {
        $path = "/distributionRoutes/ApplyRePayPln/{$lineNr}/{$rePayPCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /distributionRoutes/{id}/ApplyRePayPlnForInv/{_rePayCode}
     */
    public function applyRePayPlnForInvV1($id, string $rePayCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/distributionRoutes/{$id}/ApplyRePayPlnForInv/{$rePayCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /distributionRoutes/ApplyRePayPlnForInv/{_rePayCode}
     */
    public function applyRePayPlnForInvV1Post(string $rePayCode, array $data)
    {
        $path = "/distributionRoutes/ApplyRePayPlnForInv/{$rePayCode}";
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

    /**
     * Retrieves analytics data for DistributionRoutes entities.
     */
    public function getAnalytics()
    {
        return ['total' => $this->getCount()];
    }

    /**
     * Retrieves the total count of DistributionRoutes entities.
     */
    public function getCount()
    {
        $resp = $this->getAll(['count' => true]);
        return (int) ($resp->totalCount ?? 0);
    }

    /**
     * Retrieves database column information for the DistributionRoutes entity.
     */
    public function getDbColumns()
    {
        $path = "{$this->endpoint}/dbcolumns";
        return $this->request('GET', $path);
    }

    /**
     * Enables change tracking for the DistributionRoutes entity.
     */
    public function track()
    {
        $path = "{$this->endpoint}/track";
        return $this->request('GET', $path);
    }

    /**
     * Disables change tracking for the DistributionRoutes entity.
     */
    public function untrack()
    {
        $path = "{$this->endpoint}/untrack";
        return $this->request('GET', $path);
    }

    /**
     * Checks the change tracking status for the DistributionRoutes entity.
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
