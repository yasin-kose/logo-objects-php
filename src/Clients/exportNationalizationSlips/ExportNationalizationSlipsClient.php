<?php

declare(strict_types=1);

namespace LogoObjects\Clients\exportNationalizationSlips;

use LogoObjects\Http\BaseApiClient;
use LogoObjects\Types\ApiResponse;
use LogoObjects\Utils\QueryBuilder;

/**
 * ExportNationalizationSlipsClient - /exportNationalizationSlips endpoint'i icin CRUD ve ozel islemler.
 */
class ExportNationalizationSlipsClient extends BaseApiClient
{
    /** @var string */
    protected $endpoint = '/exportNationalizationSlips';

    /**
     * Retrieves a paginated list of ExportNationalizationSlips entities.
     */
    public function getAll(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "{$this->endpoint}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return ApiResponse::of($this->request('GET', $path), \LogoObjects\Clients\exportNationalizationSlips\ExportNationalizationSlips::class);
    }

    /**
     * Retrieves a single ExportNationalizationSlips entity by its internal reference ID.
     */
    public function getById($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "{$this->endpoint}/{$id}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return \LogoObjects\Clients\exportNationalizationSlips\ExportNationalizationSlips::fromArray($this->request('GET', $path));
    }

    /**
     * Creates a new ExportNationalizationSlips entity.
     */
    public function create(array $data)
    {
        $path = "{$this->endpoint}";
        return \LogoObjects\Clients\exportNationalizationSlips\ExportNationalizationSlips::fromArray($this->request('POST', $path, $data));
    }

    /**
     * Updates an existing ExportNationalizationSlips entity.
     */
    public function update($id, array $data)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\exportNationalizationSlips\ExportNationalizationSlips::fromArray($this->request('PUT', $path, $data));
    }

    /**
     * Partially updates a ExportNationalizationSlips entity.
     */
    public function patch($id, array $data)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\exportNationalizationSlips\ExportNationalizationSlips::fromArray($this->request('PATCH', $path, $data));
    }

    /**
     * Deletes a ExportNationalizationSlips entity by its internal reference ID.
     */
    public function delete($id)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\exportNationalizationSlips\ExportNationalizationSlips::fromArray($this->request('DELETE', $path));
    }

    /**
     * Searches for ExportNationalizationSlips entities based on a set of criteria.
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
     * Corresponds to POST /exportNationalizationSlips/ReCalculate
     */
    public function reCalculateV1(array $data)
    {
        $path = "/exportNationalizationSlips/ReCalculate";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/ReCalculate
     */
    public function reCalculateV1Get($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/ReCalculate";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/FillAccCodes
     */
    public function fillAccCodesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/FillAccCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/FillAccCodes
     */
    public function fillAccCodesV1Post(array $data)
    {
        $path = "/exportNationalizationSlips/FillAccCodes";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/ApplyADiscount/{_discCode}
     */
    public function applyADiscountV1($id, string $discCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/ApplyADiscount/{$discCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/ApplyADiscount/{_discCode}
     */
    public function applyADiscountV1Post(string $discCode, array $data)
    {
        $path = "/exportNationalizationSlips/ApplyADiscount/{$discCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/SetDefIntValue/{_fldName}/{_fType}/{_fSz}/{_Value}
     */
    public function setDefIntValueV1($id, string $fldName, $fType, $fSz, $Value, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/SetDefIntValue/{$fldName}/{$fType}/{$fSz}/{$Value}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/SetDefIntValue/{_fldName}/{_fType}/{_fSz}/{_Value}
     */
    public function setDefIntValueV1Post(string $fldName, $fType, $fSz, $Value, array $data)
    {
        $path = "/exportNationalizationSlips/SetDefIntValue/{$fldName}/{$fType}/{$fSz}/{$Value}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/EqualizePayAmnt
     */
    public function equalizePayAmntV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/EqualizePayAmnt";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/EqualizePayAmnt
     */
    public function equalizePayAmntV1Post(array $data)
    {
        $path = "/exportNationalizationSlips/EqualizePayAmnt";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/AddSeriLotsForKs/{_slCode}/{_amount}/{_IOMtd}
     */
    public function addSeriLotsForKsV1($id, string $slCode, $amount, $IOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/AddSeriLotsForKs/{$slCode}/{$amount}/{$IOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/AddSeriLotsForKs/{_slCode}/{_amount}/{_IOMtd}
     */
    public function addSeriLotsForKsV1Post(string $slCode, $amount, $IOMtd, array $data)
    {
        $path = "/exportNationalizationSlips/AddSeriLotsForKs/{$slCode}/{$amount}/{$IOMtd}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/FillSMMACCCodes
     */
    public function fillSMMACCCodesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/FillSMMACCCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/FillSMMACCCodes
     */
    public function fillSMMACCCodesV1Post(array $data)
    {
        $path = "/exportNationalizationSlips/FillSMMACCCodes";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/AttachADespatchByLRef/{_dispref}
     */
    public function attachADespatchByLRefV1($id, $dispref, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/AttachADespatchByLRef/{$dispref}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/AttachADespatchByLRef/{_dispref}
     */
    public function attachADespatchByLRefV1Post($dispref, array $data)
    {
        $path = "/exportNationalizationSlips/AttachADespatchByLRef/{$dispref}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/AttachADespatchByFicheNo/{_dispFicheNo}
     */
    public function attachADespatchByFicheNoV1($id, string $dispFicheNo, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/AttachADespatchByFicheNo/{$dispFicheNo}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/AttachADespatchByFicheNo/{_dispFicheNo}
     */
    public function attachADespatchByFicheNoV1Post(string $dispFicheNo, array $data)
    {
        $path = "/exportNationalizationSlips/AttachADespatchByFicheNo/{$dispFicheNo}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/DeleteCampaign
     */
    public function deleteCampaignV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/DeleteCampaign";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/DeleteCampaign
     */
    public function deleteCampaignV1Post(array $data)
    {
        $path = "/exportNationalizationSlips/DeleteCampaign";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/SetClientInfo
     */
    public function setClientInfoV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/SetClientInfo";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/SetClientInfo
     */
    public function setClientInfoV1Post(array $data)
    {
        $path = "/exportNationalizationSlips/SetClientInfo";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/GetRelevantCampaigns
     */
    public function getRelevantCampaignsV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/GetRelevantCampaigns";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/GetRelevantCampaigns
     */
    public function getRelevantCampaignsV1Post(array $data)
    {
        $path = "/exportNationalizationSlips/GetRelevantCampaigns";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/ApplyCampaignSpecific/{_refList}
     */
    public function applyCampaignSpecificV1($id, string $refList, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/ApplyCampaignSpecific/{$refList}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/ApplyCampaignSpecific/{_refList}
     */
    public function applyCampaignSpecificV1Post(string $refList, array $data)
    {
        $path = "/exportNationalizationSlips/ApplyCampaignSpecific/{$refList}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/ImportImage/{_ImgPath}/{_Indx}
     */
    public function importImageV1($id, string $ImgPath, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/ImportImage/{$ImgPath}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/ImportImage/{_ImgPath}/{_Indx}
     */
    public function importImageV1Post(string $ImgPath, string $Indx, array $data)
    {
        $path = "/exportNationalizationSlips/ImportImage/{$ImgPath}/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/ExportBase64EncodedImage/{_Indx}
     */
    public function exportBase64EncodedImageV1($id, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/ExportBase64EncodedImage/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/ExportBase64EncodedImage/{_Indx}
     */
    public function exportBase64EncodedImageV1Post(string $Indx, array $data)
    {
        $path = "/exportNationalizationSlips/ExportBase64EncodedImage/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/ImportBase64EncodedImage/{_base64EncodedImage}/{_imageType}/{_Indx}
     */
    public function importBase64EncodedImageV1($id, string $base64EncodedImage, string $imageType, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/ImportBase64EncodedImage/{$base64EncodedImage}/{$imageType}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/ImportBase64EncodedImage/{_base64EncodedImage}/{_imageType}/{_Indx}
     */
    public function importBase64EncodedImageV1Post(string $base64EncodedImage, string $imageType, string $Indx, array $data)
    {
        $path = "/exportNationalizationSlips/ImportBase64EncodedImage/{$base64EncodedImage}/{$imageType}/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsslLinesqclistApplyaccdisttemplateV1($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsslLinesqclistApplyaccdisttemplateV1Get($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsslLinesqclistSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsslLinesqclistSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/{id4}/VALLIST
     */
    public function getTRANSACTIONSDETAILSSL_LINESQCLISTVALLISTV1($id, $id1, $id2, $id3, $id4, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/{$id4}/VALLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/{id4}/VALLIST/{idt}
     */
    public function getTRANSACTIONSDETAILSSL_LINESQCLISTVALLISTByIdV1($id, $id1, $id2, $id3, $id4, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/{$id4}/VALLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/{id4}/VALLIST/AppendLine2
     */
    public function transactionsdetailsslLinesqclistvallistAppendline2V1($id, $id1, $id2, $id3, $id4, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/{$id4}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/{id4}/VALLIST/AppendLine2
     */
    public function transactionsdetailsslLinesqclistvallistAppendline2V1Post($id1, $id2, $id3, $id4, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/{$id4}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/{id4}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsslLinesqclistvallistAddserilotsV1($id, $id1, $id2, $id3, $id4, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/{$id4}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/{id4}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsslLinesqclistvallistAddserilotsV1Post($id1, $id2, $id3, $id4, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/{$id4}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/{id4}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsslLinesqclistvallistGetstocklinepriceV1($id, $id1, $id2, $id3, $id4, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/{$id4}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/{id4}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsslLinesqclistvallistGetstocklinepriceV1Post($id1, $id2, $id3, $id4, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/{$id4}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/{id4}/VALLIST/AddLine2/{_index}
     */
    public function transactionsdetailsslLinesqclistvallistAddline2V1($id, $id1, $id2, $id3, $id4, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/{$id4}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/{id4}/VALLIST/AddLine2/{_index}
     */
    public function transactionsdetailsslLinesqclistvallistAddline2V1Post($id1, $id2, $id3, $id4, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/{$id4}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/{id4}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsslLinesqclistvallistAppendserilotsV1($id, $id1, $id2, $id3, $id4, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/{$id4}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/{id4}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsslLinesqclistvallistAppendserilotsV1Post($id1, $id2, $id3, $id4, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/{$id4}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/{id4}/VALLIST/EqualizeBalance/{_index}
     */
    public function transactionsdetailsslLinesqclistvallistEqualizebalanceV1($id, $id1, $id2, $id3, $id4, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/{$id4}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/{id4}/VALLIST/EqualizeBalance/{_index}
     */
    public function transactionsdetailsslLinesqclistvallistEqualizebalanceV1Post($id1, $id2, $id3, $id4, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/{$id4}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/{id4}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsslLinesqclistvallistApplyaccdisttemplateV1($id, $id1, $id2, $id3, $id4, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/{$id4}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/{id4}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsslLinesqclistvallistApplyaccdisttemplateV1Post($id1, $id2, $id3, $id4, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/{$id4}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/{id4}/VALLIST/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsslLinesqclistvallistSetlinetotalsV1($id, $id1, $id2, $id3, $id4, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/{$id4}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/{id4}/VALLIST/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsslLinesqclistvallistSetlinetotalsV1Post($id1, $id2, $id3, $id4, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/{$id4}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/ExportToXML/{_RootKey}/{_FileName}
     */
    public function exportToXMLV1($id, string $RootKey, string $FileName, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/ExportToXML/{$RootKey}/{$FileName}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/ExportToXML/{_RootKey}/{_FileName}
     */
    public function exportToXMLV1Post(string $RootKey, string $FileName, array $data)
    {
        $path = "/exportNationalizationSlips/ExportToXML/{$RootKey}/{$FileName}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/ImportFromXMLFile/{_RootKey}/{_FileName}
     */
    public function importFromXMLFileV1($id, string $RootKey, string $FileName, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/ImportFromXMLFile/{$RootKey}/{$FileName}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/ImportFromXMLFile/{_RootKey}/{_FileName}
     */
    public function importFromXMLFileV1Post(string $RootKey, string $FileName, array $data)
    {
        $path = "/exportNationalizationSlips/ImportFromXMLFile/{$RootKey}/{$FileName}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/CreateCompositeLines
     */
    public function createCompositeLinesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/CreateCompositeLines";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/CreateCompositeLines
     */
    public function createCompositeLinesV1Post(array $data)
    {
        $path = "/exportNationalizationSlips/CreateCompositeLines";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/FormSeriLotLines/{_lOMtd}
     */
    public function formSeriLotLinesV1($id, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/FormSeriLotLines/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/FormSeriLotLines/{_lOMtd}
     */
    public function formSeriLotLinesV1Post($lOMtd, array $data)
    {
        $path = "/exportNationalizationSlips/FormSeriLotLines/{$lOMtd}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/ApplyCampaign
     */
    public function applyCampaignV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/ApplyCampaign";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/ApplyCampaign
     */
    public function applyCampaignV1Post(array $data)
    {
        $path = "/exportNationalizationSlips/ApplyCampaign";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/ApplyRePayPln/{_lineNr}/{_rePayPCode}
     */
    public function applyRePayPlnV1($id, $lineNr, string $rePayPCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/ApplyRePayPln/{$lineNr}/{$rePayPCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/ApplyRePayPln/{_lineNr}/{_rePayPCode}
     */
    public function applyRePayPlnV1Post($lineNr, string $rePayPCode, array $data)
    {
        $path = "/exportNationalizationSlips/ApplyRePayPln/{$lineNr}/{$rePayPCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/ApplyRePayPlnForInv/{_rePayCode}
     */
    public function applyRePayPlnForInvV1($id, string $rePayCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/ApplyRePayPlnForInv/{$rePayCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/ApplyRePayPlnForInv/{_rePayCode}
     */
    public function applyRePayPlnForInvV1Post(string $rePayCode, array $data)
    {
        $path = "/exportNationalizationSlips/ApplyRePayPlnForInv/{$rePayCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/ImportFromXmlStr/{_RootKey}/{_XmlStr}
     */
    public function importFromXmlStrV1($id, string $RootKey, string $XmlStr, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/ImportFromXmlStr/{$RootKey}/{$XmlStr}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/ImportFromXmlStr/{_RootKey}/{_XmlStr}
     */
    public function importFromXmlStrV1Post(string $RootKey, string $XmlStr, array $data)
    {
        $path = "/exportNationalizationSlips/ImportFromXmlStr/{$RootKey}/{$XmlStr}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/ExportToXmlStr/{_RootKey}
     */
    public function exportToXmlStrV1($id, string $RootKey, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/ExportToXmlStr/{$RootKey}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/ExportToXmlStr/{_RootKey}
     */
    public function exportToXmlStrV1Post(string $RootKey, array $data)
    {
        $path = "/exportNationalizationSlips/ExportToXmlStr/{$RootKey}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/ApplyCondition
     */
    public function applyConditionV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/ApplyCondition";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/ApplyCondition
     */
    public function applyConditionV1Post(array $data)
    {
        $path = "/exportNationalizationSlips/ApplyCondition";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/ExportImage/{_Indx}/{_ImgPath}
     */
    public function exportImageV1($id, string $Indx, string $ImgPath, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/ExportImage/{$Indx}/{$ImgPath}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/ExportImage/{_Indx}/{_ImgPath}
     */
    public function exportImageV1Post(string $Indx, string $ImgPath, array $data)
    {
        $path = "/exportNationalizationSlips/ExportImage/{$Indx}/{$ImgPath}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsGetstocklinepriceV1($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsGetstocklinepriceV1Get($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/AddLine2/{_index}
     */
    public function transactionsdetailsAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/AddLine2/{_index}
     */
    public function transactionsdetailsAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/EqualizeBalance/{_index}
     */
    public function transactionsdetailsEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/EqualizeBalance/{_index}
     */
    public function transactionsdetailsEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES
     */
    public function getTRANSACTIONSDETAILSSL_LINESV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{idt}
     */
    public function getTRANSACTIONSDETAILSSL_LINESByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/AppendLine2
     */
    public function transactionsdetailsslLinesAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/AppendLine2
     */
    public function transactionsdetailsslLinesAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsslLinesAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsslLinesAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsslLinesGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsslLinesGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/AddLine2/{_index}
     */
    public function transactionsdetailsslLinesAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/AddLine2/{_index}
     */
    public function transactionsdetailsslLinesAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsslLinesAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsslLinesAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/EqualizeBalance/{_index}
     */
    public function transactionsdetailsslLinesEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/EqualizeBalance/{_index}
     */
    public function transactionsdetailsslLinesEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsslLinesApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsslLinesApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsslLinesSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsslLinesSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST
     */
    public function getTRANSACTIONSDETAILSSL_LINESQCLISTV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/{idt}
     */
    public function getTRANSACTIONSDETAILSSL_LINESQCLISTByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/AppendLine2
     */
    public function transactionsdetailsslLinesqclistAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/AppendLine2
     */
    public function transactionsdetailsslLinesqclistAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsslLinesqclistAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsslLinesqclistAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsslLinesqclistGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsslLinesqclistGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/AddLine2/{_index}
     */
    public function transactionsdetailsslLinesqclistAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/AddLine2/{_index}
     */
    public function transactionsdetailsslLinesqclistAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsslLinesqclistAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsslLinesqclistAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/EqualizeBalance/{_index}
     */
    public function transactionsdetailsslLinesqclistEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_LINES/{id3}/QCLIST/EqualizeBalance/{_index}
     */
    public function transactionsdetailsslLinesqclistEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_LINES/{$id3}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/SL_LINES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsslLinesApplyaccdisttemplateV1($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/SL_LINES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsslLinesApplyaccdisttemplateV1Get($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/SetLineTotals/{_Indx}
     */
    public function transactionsslLinesSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/SL_LINES/SetLineTotals/{_Indx}
     */
    public function transactionsslLinesSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/SL_LINES/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST
     */
    public function getTRANSACTIONSSL_LINESQCLISTV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/{idt}
     */
    public function getTRANSACTIONSSL_LINESQCLISTByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/AppendLine2
     */
    public function transactionsslLinesqclistAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/AppendLine2
     */
    public function transactionsslLinesqclistAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsslLinesqclistAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsslLinesqclistAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsslLinesqclistGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsslLinesqclistGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/AddLine2/{_index}
     */
    public function transactionsslLinesqclistAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/AddLine2/{_index}
     */
    public function transactionsslLinesqclistAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsslLinesqclistAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsslLinesqclistAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/EqualizeBalance/{_index}
     */
    public function transactionsslLinesqclistEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/EqualizeBalance/{_index}
     */
    public function transactionsslLinesqclistEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsslLinesqclistApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsslLinesqclistApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/SetLineTotals/{_Indx}
     */
    public function transactionsslLinesqclistSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/SetLineTotals/{_Indx}
     */
    public function transactionsslLinesqclistSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/{id3}/VALLIST
     */
    public function getTRANSACTIONSSL_LINESQCLISTVALLISTV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/{$id3}/VALLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/{id3}/VALLIST/{idt}
     */
    public function getTRANSACTIONSSL_LINESQCLISTVALLISTByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/{$id3}/VALLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/{id3}/VALLIST/AppendLine2
     */
    public function transactionsslLinesqclistvallistAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/{$id3}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/{id3}/VALLIST/AppendLine2
     */
    public function transactionsslLinesqclistvallistAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/{$id3}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/{id3}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsslLinesqclistvallistAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/{$id3}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/{id3}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsslLinesqclistvallistAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/{$id3}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/{id3}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsslLinesqclistvallistGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/{$id3}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/{id3}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsslLinesqclistvallistGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/{$id3}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/{id3}/VALLIST/AddLine2/{_index}
     */
    public function transactionsslLinesqclistvallistAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/{$id3}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/{id3}/VALLIST/AddLine2/{_index}
     */
    public function transactionsslLinesqclistvallistAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/{$id3}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/{id3}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsslLinesqclistvallistAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/{$id3}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/{id3}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsslLinesqclistvallistAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/{$id3}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/{id3}/VALLIST/EqualizeBalance/{_index}
     */
    public function transactionsslLinesqclistvallistEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/{$id3}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/{id3}/VALLIST/EqualizeBalance/{_index}
     */
    public function transactionsslLinesqclistvallistEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/{$id3}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/{id3}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsslLinesqclistvallistApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/{$id3}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/{id3}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsslLinesqclistvallistApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/{$id3}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/{id3}/VALLIST/SetLineTotals/{_Indx}
     */
    public function transactionsslLinesqclistvallistSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/{$id3}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/SL_LINES/{id2}/QCLIST/{id3}/VALLIST/SetLineTotals/{_Indx}
     */
    public function transactionsslLinesqclistvallistSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/SL_LINES/{$id2}/QCLIST/{$id3}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS
     */
    public function getTRANSACTIONSDETAILSV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{idt}
     */
    public function getTRANSACTIONSDETAILSByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/AppendLine2
     */
    public function transactionsdetailsAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/AppendLine2
     */
    public function transactionsdetailsAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/readwithbodyparamters
     */
    public function postReadWithBodyParametersV1(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/readwithbodyparamters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/{id}/readwithbodyparamters
     */
    public function postReadByIdWithBodyParametersV1($id, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/readwithbodyparamters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS
     */
    public function getTRANSACTIONSV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{idt}
     */
    public function getTRANSACTIONSByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/AppendLine2
     */
    public function transactionsAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/AppendLine2
     */
    public function transactionsAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/AddLine2/{_index}
     */
    public function transactionsAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/AddLine2/{_index}
     */
    public function transactionsAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/EqualizeBalance/{_index}
     */
    public function transactionsEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/EqualizeBalance/{_index}
     */
    public function transactionsEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/SetLineTotals/{_Indx}
     */
    public function transactionsSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/SetLineTotals/{_Indx}
     */
    public function transactionsSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES
     */
    public function getTRANSACTIONSSL_LINESV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/{idt}
     */
    public function getTRANSACTIONSSL_LINESByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/AppendLine2
     */
    public function transactionsslLinesAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/SL_LINES/AppendLine2
     */
    public function transactionsslLinesAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/SL_LINES/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsslLinesAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/SL_LINES/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsslLinesAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/SL_LINES/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsslLinesGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/SL_LINES/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsslLinesGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/SL_LINES/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/AddLine2/{_index}
     */
    public function transactionsslLinesAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/SL_LINES/AddLine2/{_index}
     */
    public function transactionsslLinesAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/SL_LINES/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsslLinesAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/SL_LINES/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsslLinesAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/SL_LINES/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /exportNationalizationSlips/{id}/TRANSACTIONS/{id1}/SL_LINES/EqualizeBalance/{_index}
     */
    public function transactionsslLinesEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/{$id}/TRANSACTIONS/{$id1}/SL_LINES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /exportNationalizationSlips/TRANSACTIONS/{id1}/SL_LINES/EqualizeBalance/{_index}
     */
    public function transactionsslLinesEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/exportNationalizationSlips/TRANSACTIONS/{$id1}/SL_LINES/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    public function searchByAuxilCode($auxilCode)
    {
        return $this->getAll(['q' => "AUXIL_CODE like '{$auxilCode}*'"]);
    }

    public function searchByDistributionType($distributionType)
    {
        return $this->getAll(['q' => "DISTRIBUTION_TYPE eq {$distributionType}"]);
    }

    /**
     * Retrieves analytics data for ExportNationalizationSlips entities.
     */
    public function getAnalytics()
    {
        return ['total' => $this->getCount()];
    }

    /**
     * Retrieves the total count of ExportNationalizationSlips entities.
     */
    public function getCount()
    {
        $resp = $this->getAll(['count' => true]);
        return (int) ($resp->totalCount ?? 0);
    }

    /**
     * Retrieves database column information for the ExportNationalizationSlips entity.
     */
    public function getDbColumns()
    {
        $path = "{$this->endpoint}/dbcolumns";
        return $this->request('GET', $path);
    }

    /**
     * Enables change tracking for the ExportNationalizationSlips entity.
     */
    public function track()
    {
        $path = "{$this->endpoint}/track";
        return $this->request('GET', $path);
    }

    /**
     * Disables change tracking for the ExportNationalizationSlips entity.
     */
    public function untrack()
    {
        $path = "{$this->endpoint}/untrack";
        return $this->request('GET', $path);
    }

    /**
     * Checks the change tracking status for the ExportNationalizationSlips entity.
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
