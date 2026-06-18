<?php

declare(strict_types=1);

namespace LogoObjects\Clients\itemSlips;

use LogoObjects\Http\BaseApiClient;
use LogoObjects\Types\ApiResponse;
use LogoObjects\Utils\QueryBuilder;

/**
 * ItemSlipsClient - /itemSlips endpoint'i icin CRUD ve ozel islemler.
 */
class ItemSlipsClient extends BaseApiClient
{
    /** @var string */
    protected $endpoint = '/itemSlips';

    /**
     * Retrieves a paginated list of ItemSlips entities.
     */
    public function getAll(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "{$this->endpoint}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return ApiResponse::of($this->request('GET', $path), \LogoObjects\Clients\itemSlips\ItemSlips::class);
    }

    /**
     * Retrieves a single ItemSlips entity by its internal reference ID.
     */
    public function getById($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "{$this->endpoint}/{$id}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return \LogoObjects\Clients\itemSlips\ItemSlips::fromArray($this->request('GET', $path));
    }

    /**
     * Creates a new ItemSlips entity.
     */
    public function create(array $data)
    {
        $path = "{$this->endpoint}";
        return \LogoObjects\Clients\itemSlips\ItemSlips::fromArray($this->request('POST', $path, $data));
    }

    /**
     * Updates an existing ItemSlips entity.
     */
    public function update($id, array $data)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\itemSlips\ItemSlips::fromArray($this->request('PUT', $path, $data));
    }

    /**
     * Partially updates a ItemSlips entity.
     */
    public function patch($id, array $data)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\itemSlips\ItemSlips::fromArray($this->request('PATCH', $path, $data));
    }

    /**
     * Deletes a ItemSlips entity by its internal reference ID.
     */
    public function delete($id)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\itemSlips\ItemSlips::fromArray($this->request('DELETE', $path));
    }

    /**
     * Searches for ItemSlips entities based on a set of criteria.
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
     * Corresponds to GET /itemSlips/{id}/ImportImage/{_ImgPath}/{_Indx}
     */
    public function importImageV1($id, string $ImgPath, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/ImportImage/{$ImgPath}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/ImportImage/{_ImgPath}/{_Indx}
     */
    public function importImageV1Post(string $ImgPath, string $Indx, array $data)
    {
        $path = "/itemSlips/ImportImage/{$ImgPath}/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/ExportBase64EncodedImage/{_Indx}
     */
    public function exportBase64EncodedImageV1($id, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/ExportBase64EncodedImage/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/ExportBase64EncodedImage/{_Indx}
     */
    public function exportBase64EncodedImageV1Post(string $Indx, array $data)
    {
        $path = "/itemSlips/ExportBase64EncodedImage/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/ImportBase64EncodedImage/{_base64EncodedImage}/{_imageType}/{_Indx}
     */
    public function importBase64EncodedImageV1($id, string $base64EncodedImage, string $imageType, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/ImportBase64EncodedImage/{$base64EncodedImage}/{$imageType}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/ImportBase64EncodedImage/{_base64EncodedImage}/{_imageType}/{_Indx}
     */
    public function importBase64EncodedImageV1Post(string $base64EncodedImage, string $imageType, string $Indx, array $data)
    {
        $path = "/itemSlips/ImportBase64EncodedImage/{$base64EncodedImage}/{$imageType}/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/FormSeriLotLines/{_lOMtd}
     */
    public function formSeriLotLinesV1($id, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/FormSeriLotLines/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/FormSeriLotLines/{_lOMtd}
     */
    public function formSeriLotLinesV1Post($lOMtd, array $data)
    {
        $path = "/itemSlips/FormSeriLotLines/{$lOMtd}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/ApplyCampaign
     */
    public function applyCampaignV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/ApplyCampaign";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/ApplyCampaign
     */
    public function applyCampaignV1Post(array $data)
    {
        $path = "/itemSlips/ApplyCampaign";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/ApplyRePayPln/{_lineNr}/{_rePayPCode}
     */
    public function applyRePayPlnV1($id, $lineNr, string $rePayPCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/ApplyRePayPln/{$lineNr}/{$rePayPCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/ApplyRePayPln/{_lineNr}/{_rePayPCode}
     */
    public function applyRePayPlnV1Post($lineNr, string $rePayPCode, array $data)
    {
        $path = "/itemSlips/ApplyRePayPln/{$lineNr}/{$rePayPCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/ApplyRePayPlnForInv/{_rePayCode}
     */
    public function applyRePayPlnForInvV1($id, string $rePayCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/ApplyRePayPlnForInv/{$rePayCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/ApplyRePayPlnForInv/{_rePayCode}
     */
    public function applyRePayPlnForInvV1Post(string $rePayCode, array $data)
    {
        $path = "/itemSlips/ApplyRePayPlnForInv/{$rePayCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/ImportFromXmlStr/{_RootKey}/{_XmlStr}
     */
    public function importFromXmlStrV1($id, string $RootKey, string $XmlStr, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/ImportFromXmlStr/{$RootKey}/{$XmlStr}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/ImportFromXmlStr/{_RootKey}/{_XmlStr}
     */
    public function importFromXmlStrV1Post(string $RootKey, string $XmlStr, array $data)
    {
        $path = "/itemSlips/ImportFromXmlStr/{$RootKey}/{$XmlStr}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/ExportToXmlStr/{_RootKey}
     */
    public function exportToXmlStrV1($id, string $RootKey, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/ExportToXmlStr/{$RootKey}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/ExportToXmlStr/{_RootKey}
     */
    public function exportToXmlStrV1Post(string $RootKey, array $data)
    {
        $path = "/itemSlips/ExportToXmlStr/{$RootKey}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/ApplyCondition
     */
    public function applyConditionV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/ApplyCondition";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/ApplyCondition
     */
    public function applyConditionV1Post(array $data)
    {
        $path = "/itemSlips/ApplyCondition";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/ExportImage/{_Indx}/{_ImgPath}
     */
    public function exportImageV1($id, string $Indx, string $ImgPath, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/ExportImage/{$Indx}/{$ImgPath}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/ExportImage/{_Indx}/{_ImgPath}
     */
    public function exportImageV1Post(string $Indx, string $ImgPath, array $data)
    {
        $path = "/itemSlips/ExportImage/{$Indx}/{$ImgPath}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/ReCalculate
     */
    public function reCalculateV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/ReCalculate";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/ReCalculate
     */
    public function reCalculateV1Post(array $data)
    {
        $path = "/itemSlips/ReCalculate";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/FillAccCodes
     */
    public function fillAccCodesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/FillAccCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/FillAccCodes
     */
    public function fillAccCodesV1Post(array $data)
    {
        $path = "/itemSlips/FillAccCodes";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/ApplyADiscount/{_discCode}
     */
    public function applyADiscountV1($id, string $discCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/ApplyADiscount/{$discCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/ApplyADiscount/{_discCode}
     */
    public function applyADiscountV1Post(string $discCode, array $data)
    {
        $path = "/itemSlips/ApplyADiscount/{$discCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/SetDefIntValue/{_fldName}/{_fType}/{_fSz}/{_Value}
     */
    public function setDefIntValueV1($id, string $fldName, $fType, $fSz, $Value, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/SetDefIntValue/{$fldName}/{$fType}/{$fSz}/{$Value}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/SetDefIntValue/{_fldName}/{_fType}/{_fSz}/{_Value}
     */
    public function setDefIntValueV1Post(string $fldName, $fType, $fSz, $Value, array $data)
    {
        $path = "/itemSlips/SetDefIntValue/{$fldName}/{$fType}/{$fSz}/{$Value}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/EqualizePayAmnt
     */
    public function equalizePayAmntV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/EqualizePayAmnt";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/EqualizePayAmnt
     */
    public function equalizePayAmntV1Post(array $data)
    {
        $path = "/itemSlips/EqualizePayAmnt";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/AddSeriLotsForKs/{_slCode}/{_amount}/{_IOMtd}
     */
    public function addSeriLotsForKsV1($id, string $slCode, $amount, $IOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/AddSeriLotsForKs/{$slCode}/{$amount}/{$IOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/AddSeriLotsForKs/{_slCode}/{_amount}/{_IOMtd}
     */
    public function addSeriLotsForKsV1Post(string $slCode, $amount, $IOMtd, array $data)
    {
        $path = "/itemSlips/AddSeriLotsForKs/{$slCode}/{$amount}/{$IOMtd}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/FillSMMACCCodes
     */
    public function fillSMMACCCodesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/FillSMMACCCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/FillSMMACCCodes
     */
    public function fillSMMACCCodesV1Post(array $data)
    {
        $path = "/itemSlips/FillSMMACCCodes";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/AttachADespatchByLRef/{_dispref}
     */
    public function attachADespatchByLRefV1($id, $dispref, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/AttachADespatchByLRef/{$dispref}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/AttachADespatchByLRef/{_dispref}
     */
    public function attachADespatchByLRefV1Post($dispref, array $data)
    {
        $path = "/itemSlips/AttachADespatchByLRef/{$dispref}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/AttachADespatchByFicheNo/{_dispFicheNo}
     */
    public function attachADespatchByFicheNoV1($id, string $dispFicheNo, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/AttachADespatchByFicheNo/{$dispFicheNo}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/AttachADespatchByFicheNo/{_dispFicheNo}
     */
    public function attachADespatchByFicheNoV1Post(string $dispFicheNo, array $data)
    {
        $path = "/itemSlips/AttachADespatchByFicheNo/{$dispFicheNo}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/DeleteCampaign
     */
    public function deleteCampaignV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/DeleteCampaign";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/DeleteCampaign
     */
    public function deleteCampaignV1Post(array $data)
    {
        $path = "/itemSlips/DeleteCampaign";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/SetClientInfo
     */
    public function setClientInfoV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/SetClientInfo";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/SetClientInfo
     */
    public function setClientInfoV1Post(array $data)
    {
        $path = "/itemSlips/SetClientInfo";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/GetRelevantCampaigns
     */
    public function getRelevantCampaignsV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/GetRelevantCampaigns";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/GetRelevantCampaigns
     */
    public function getRelevantCampaignsV1Post(array $data)
    {
        $path = "/itemSlips/GetRelevantCampaigns";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/ApplyCampaignSpecific/{_refList}
     */
    public function applyCampaignSpecificV1($id, string $refList, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/ApplyCampaignSpecific/{$refList}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/ApplyCampaignSpecific/{_refList}
     */
    public function applyCampaignSpecificV1Post(string $refList, array $data)
    {
        $path = "/itemSlips/ApplyCampaignSpecific/{$refList}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /itemSlips/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function defnfldslistApplyaccdisttemplateV1(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function defnfldslistApplyaccdisttemplateV1Get($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function defnfldslistSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function defnfldslistSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/DEMANDPEGGINGS
     */
    public function getDEMANDPEGGINGSV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/DEMANDPEGGINGS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/DEMANDPEGGINGS/{idt}
     */
    public function getDEMANDPEGGINGSByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/DEMANDPEGGINGS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/DEMANDPEGGINGS/AppendLine2
     */
    public function demandpeggingsAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/DEMANDPEGGINGS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/DEMANDPEGGINGS/AppendLine2
     */
    public function demandpeggingsAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/DEMANDPEGGINGS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/DEMANDPEGGINGS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function demandpeggingsAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/DEMANDPEGGINGS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/DEMANDPEGGINGS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function demandpeggingsAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/DEMANDPEGGINGS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/DEMANDPEGGINGS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function demandpeggingsGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/DEMANDPEGGINGS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/DEMANDPEGGINGS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function demandpeggingsGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/DEMANDPEGGINGS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/DEMANDPEGGINGS/AddLine2/{_index}
     */
    public function demandpeggingsAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/DEMANDPEGGINGS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/DEMANDPEGGINGS/AddLine2/{_index}
     */
    public function demandpeggingsAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/DEMANDPEGGINGS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/DEMANDPEGGINGS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function demandpeggingsAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/DEMANDPEGGINGS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/DEMANDPEGGINGS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function demandpeggingsAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/DEMANDPEGGINGS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/DEMANDPEGGINGS/EqualizeBalance/{_index}
     */
    public function demandpeggingsEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/DEMANDPEGGINGS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/DEMANDPEGGINGS/EqualizeBalance/{_index}
     */
    public function demandpeggingsEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/DEMANDPEGGINGS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/DEMANDPEGGINGS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function demandpeggingsApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/DEMANDPEGGINGS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/DEMANDPEGGINGS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function demandpeggingsApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/DEMANDPEGGINGS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/DEMANDPEGGINGS/SetLineTotals/{_Indx}
     */
    public function demandpeggingsSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/DEMANDPEGGINGS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/DEMANDPEGGINGS/SetLineTotals/{_Indx}
     */
    public function demandpeggingsSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/DEMANDPEGGINGS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/LABEL_LIST
     */
    public function getLABEL_LISTV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/LABEL_LIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/LABEL_LIST/{idt}
     */
    public function getLABEL_LISTByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/LABEL_LIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/LABEL_LIST/AppendLine2
     */
    public function labelListAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/LABEL_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/LABEL_LIST/AppendLine2
     */
    public function labelListAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/LABEL_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/LABEL_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function labelListAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/LABEL_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/LABEL_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function labelListAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/LABEL_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/LABEL_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function labelListGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/LABEL_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/LABEL_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function labelListGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/LABEL_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/LABEL_LIST/AddLine2/{_index}
     */
    public function labelListAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/LABEL_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/LABEL_LIST/AddLine2/{_index}
     */
    public function labelListAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/LABEL_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/LABEL_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function labelListAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/LABEL_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/LABEL_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function labelListAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/LABEL_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/LABEL_LIST/EqualizeBalance/{_index}
     */
    public function labelListEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/LABEL_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/LABEL_LIST/EqualizeBalance/{_index}
     */
    public function labelListEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/LABEL_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/LABEL_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function labelListApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/LABEL_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/LABEL_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function labelListApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/LABEL_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/LABEL_LIST/SetLineTotals/{_Indx}
     */
    public function labelListSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/LABEL_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/LABEL_LIST/SetLineTotals/{_Indx}
     */
    public function labelListSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/LABEL_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/ExportToXML/{_RootKey}/{_FileName}
     */
    public function exportToXMLV1($id, string $RootKey, string $FileName, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/ExportToXML/{$RootKey}/{$FileName}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/ExportToXML/{_RootKey}/{_FileName}
     */
    public function exportToXMLV1Post(string $RootKey, string $FileName, array $data)
    {
        $path = "/itemSlips/ExportToXML/{$RootKey}/{$FileName}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/ImportFromXMLFile/{_RootKey}/{_FileName}
     */
    public function importFromXMLFileV1($id, string $RootKey, string $FileName, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/ImportFromXMLFile/{$RootKey}/{$FileName}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/ImportFromXMLFile/{_RootKey}/{_FileName}
     */
    public function importFromXMLFileV1Post(string $RootKey, string $FileName, array $data)
    {
        $path = "/itemSlips/ImportFromXMLFile/{$RootKey}/{$FileName}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/CreateCompositeLines
     */
    public function createCompositeLinesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/CreateCompositeLines";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/CreateCompositeLines
     */
    public function createCompositeLinesV1Post(array $data)
    {
        $path = "/itemSlips/CreateCompositeLines";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsslDetailsqclistvallistGetstocklinepriceV1($id1, $id2, $id3, $id4, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsslDetailsqclistvallistGetstocklinepriceV1Get($id, $id1, $id2, $id3, $id4, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AddLine2/{_index}
     */
    public function transactionsdetailsslDetailsqclistvallistAddline2V1($id, $id1, $id2, $id3, $id4, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AddLine2/{_index}
     */
    public function transactionsdetailsslDetailsqclistvallistAddline2V1Post($id1, $id2, $id3, $id4, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsslDetailsqclistvallistAppendserilotsV1($id, $id1, $id2, $id3, $id4, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsslDetailsqclistvallistAppendserilotsV1Post($id1, $id2, $id3, $id4, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/EqualizeBalance/{_index}
     */
    public function transactionsdetailsslDetailsqclistvallistEqualizebalanceV1($id, $id1, $id2, $id3, $id4, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/EqualizeBalance/{_index}
     */
    public function transactionsdetailsslDetailsqclistvallistEqualizebalanceV1Post($id1, $id2, $id3, $id4, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsslDetailsqclistvallistApplyaccdisttemplateV1($id, $id1, $id2, $id3, $id4, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsslDetailsqclistvallistApplyaccdisttemplateV1Post($id1, $id2, $id3, $id4, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsslDetailsqclistvallistSetlinetotalsV1($id, $id1, $id2, $id3, $id4, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsslDetailsqclistvallistSetlinetotalsV1Post($id1, $id2, $id3, $id4, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DEFNFLDSLIST
     */
    public function getTRANSACTIONSDEFNFLDSLISTV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DEFNFLDSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DEFNFLDSLIST/{idt}
     */
    public function getTRANSACTIONSDEFNFLDSLISTByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DEFNFLDSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DEFNFLDSLIST/AppendLine2
     */
    public function transactionsdefnfldslistAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DEFNFLDSLIST/AppendLine2
     */
    public function transactionsdefnfldslistAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdefnfldslistAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdefnfldslistAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdefnfldslistGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdefnfldslistGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function transactionsdefnfldslistAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function transactionsdefnfldslistAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdefnfldslistAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdefnfldslistAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function transactionsdefnfldslistEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function transactionsdefnfldslistEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdefnfldslistApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DEFNFLDSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdefnfldslistApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DEFNFLDSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function transactionsdefnfldslistSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DEFNFLDSLIST/SetLineTotals/{_Indx}
     */
    public function transactionsdefnfldslistSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DEFNFLDSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/DEFNFLDSLIST
     */
    public function getDEFNFLDSLISTV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/DEFNFLDSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/DEFNFLDSLIST/{idt}
     */
    public function getDEFNFLDSLISTByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/DEFNFLDSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/DEFNFLDSLIST/AppendLine2
     */
    public function defnfldslistAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/DEFNFLDSLIST/AppendLine2
     */
    public function defnfldslistAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/DEFNFLDSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function defnfldslistAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/DEFNFLDSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function defnfldslistAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/DEFNFLDSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function defnfldslistGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/DEFNFLDSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function defnfldslistGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/DEFNFLDSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function defnfldslistAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/DEFNFLDSLIST/AddLine2/{_index}
     */
    public function defnfldslistAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/DEFNFLDSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function defnfldslistAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/DEFNFLDSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function defnfldslistAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/DEFNFLDSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function defnfldslistEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/DEFNFLDSLIST/EqualizeBalance/{_index}
     */
    public function defnfldslistEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/DEFNFLDSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsfaInfoApplyaccdisttemplateV1($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsfaInfoApplyaccdisttemplateV1Get($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsfaInfoSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsfaInfoSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS
     */
    public function getTRANSACTIONSDETAILSSL_DETAILSV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{idt}
     */
    public function getTRANSACTIONSDETAILSSL_DETAILSByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/AppendLine2
     */
    public function transactionsdetailsslDetailsAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/AppendLine2
     */
    public function transactionsdetailsslDetailsAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsslDetailsAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsslDetailsAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsslDetailsGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsslDetailsGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/AddLine2/{_index}
     */
    public function transactionsdetailsslDetailsAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/AddLine2/{_index}
     */
    public function transactionsdetailsslDetailsAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsslDetailsAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsslDetailsAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/EqualizeBalance/{_index}
     */
    public function transactionsdetailsslDetailsEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/EqualizeBalance/{_index}
     */
    public function transactionsdetailsslDetailsEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsslDetailsApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsslDetailsApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsslDetailsSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsslDetailsSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST
     */
    public function getTRANSACTIONSDETAILSSL_DETAILSQCLISTV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{idt}
     */
    public function getTRANSACTIONSDETAILSSL_DETAILSQCLISTByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/AppendLine2
     */
    public function transactionsdetailsslDetailsqclistAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/AppendLine2
     */
    public function transactionsdetailsslDetailsqclistAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsslDetailsqclistAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsslDetailsqclistAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsslDetailsqclistGetstocklinepriceV1($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsslDetailsqclistGetstocklinepriceV1Post($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/AddLine2/{_index}
     */
    public function transactionsdetailsslDetailsqclistAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/AddLine2/{_index}
     */
    public function transactionsdetailsslDetailsqclistAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsslDetailsqclistAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsslDetailsqclistAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/EqualizeBalance/{_index}
     */
    public function transactionsdetailsslDetailsqclistEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/EqualizeBalance/{_index}
     */
    public function transactionsdetailsslDetailsqclistEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsslDetailsqclistApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsslDetailsqclistApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsslDetailsqclistSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsslDetailsqclistSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST
     */
    public function getTRANSACTIONSDETAILSSL_DETAILSQCLISTVALLISTV1($id, $id1, $id2, $id3, $id4, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/{idt}
     */
    public function getTRANSACTIONSDETAILSSL_DETAILSQCLISTVALLISTByIdV1($id, $id1, $id2, $id3, $id4, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AppendLine2
     */
    public function transactionsdetailsslDetailsqclistvallistAppendline2V1($id, $id1, $id2, $id3, $id4, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AppendLine2
     */
    public function transactionsdetailsslDetailsqclistvallistAppendline2V1Post($id1, $id2, $id3, $id4, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsslDetailsqclistvallistAddserilotsV1($id, $id1, $id2, $id3, $id4, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/SL_DETAILS/{id3}/QCLIST/{id4}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsslDetailsqclistvallistAddserilotsV1Post($id1, $id2, $id3, $id4, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/SL_DETAILS/{$id3}/QCLIST/{$id4}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsslDetailsqclistvallistGetstocklinepriceV1($id1, $id2, $id3, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsslDetailsqclistvallistGetstocklinepriceV1Get($id, $id1, $id2, $id3, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AddLine2/{_index}
     */
    public function transactionsslDetailsqclistvallistAddline2V1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AddLine2/{_index}
     */
    public function transactionsslDetailsqclistvallistAddline2V1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsslDetailsqclistvallistAppendserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsslDetailsqclistvallistAppendserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/EqualizeBalance/{_index}
     */
    public function transactionsslDetailsqclistvallistEqualizebalanceV1($id, $id1, $id2, $id3, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/EqualizeBalance/{_index}
     */
    public function transactionsslDetailsqclistvallistEqualizebalanceV1Post($id1, $id2, $id3, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsslDetailsqclistvallistApplyaccdisttemplateV1($id, $id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsslDetailsqclistvallistApplyaccdisttemplateV1Post($id1, $id2, $id3, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/SetLineTotals/{_Indx}
     */
    public function transactionsslDetailsqclistvallistSetlinetotalsV1($id, $id1, $id2, $id3, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/SetLineTotals/{_Indx}
     */
    public function transactionsslDetailsqclistvallistSetlinetotalsV1Post($id1, $id2, $id3, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS
     */
    public function getTRANSACTIONSDETAILSV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{idt}
     */
    public function getTRANSACTIONSDETAILSByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/AppendLine2
     */
    public function transactionsdetailsAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/AppendLine2
     */
    public function transactionsdetailsAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/AddLine2/{_index}
     */
    public function transactionsdetailsAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/AddLine2/{_index}
     */
    public function transactionsdetailsAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/EqualizeBalance/{_index}
     */
    public function transactionsdetailsEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/EqualizeBalance/{_index}
     */
    public function transactionsdetailsEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsdetailsApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/SetLineTotals/{_Indx}
     */
    public function transactionsdetailsSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO
     */
    public function getTRANSACTIONSDETAILSFA_INFOV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/{idt}
     */
    public function getTRANSACTIONSDETAILSFA_INFOByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/AppendLine2
     */
    public function transactionsdetailsfaInfoAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/AppendLine2
     */
    public function transactionsdetailsfaInfoAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsfaInfoAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsdetailsfaInfoAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsfaInfoGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsdetailsfaInfoGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/AddLine2/{_index}
     */
    public function transactionsdetailsfaInfoAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/AddLine2/{_index}
     */
    public function transactionsdetailsfaInfoAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsfaInfoAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsdetailsfaInfoAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/EqualizeBalance/{_index}
     */
    public function transactionsdetailsfaInfoEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/DETAILS/{id2}/FA_INFO/EqualizeBalance/{_index}
     */
    public function transactionsdetailsfaInfoEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/DETAILS/{$id2}/FA_INFO/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/FA_INFO/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsfaInfoApplyaccdisttemplateV1($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/FA_INFO/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/FA_INFO/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsfaInfoApplyaccdisttemplateV1Get($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/FA_INFO/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/FA_INFO/SetLineTotals/{_Indx}
     */
    public function transactionsfaInfoSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/FA_INFO/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/FA_INFO/SetLineTotals/{_Indx}
     */
    public function transactionsfaInfoSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/FA_INFO/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS
     */
    public function getTRANSACTIONSSL_DETAILSV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{idt}
     */
    public function getTRANSACTIONSSL_DETAILSByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/AppendLine2
     */
    public function transactionsslDetailsAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/SL_DETAILS/AppendLine2
     */
    public function transactionsslDetailsAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/SL_DETAILS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsslDetailsAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/SL_DETAILS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsslDetailsAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/SL_DETAILS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsslDetailsGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/SL_DETAILS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsslDetailsGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/SL_DETAILS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/AddLine2/{_index}
     */
    public function transactionsslDetailsAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/SL_DETAILS/AddLine2/{_index}
     */
    public function transactionsslDetailsAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/SL_DETAILS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsslDetailsAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/SL_DETAILS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsslDetailsAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/SL_DETAILS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/EqualizeBalance/{_index}
     */
    public function transactionsslDetailsEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/SL_DETAILS/EqualizeBalance/{_index}
     */
    public function transactionsslDetailsEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/SL_DETAILS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsslDetailsApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/SL_DETAILS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsslDetailsApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/SL_DETAILS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/SetLineTotals/{_Indx}
     */
    public function transactionsslDetailsSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/SL_DETAILS/SetLineTotals/{_Indx}
     */
    public function transactionsslDetailsSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/SL_DETAILS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST
     */
    public function getTRANSACTIONSSL_DETAILSQCLISTV1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{idt}
     */
    public function getTRANSACTIONSSL_DETAILSQCLISTByIdV1($id, $id1, $id2, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/AppendLine2
     */
    public function transactionsslDetailsqclistAppendline2V1($id, $id1, $id2, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/AppendLine2
     */
    public function transactionsslDetailsqclistAppendline2V1Post($id1, $id2, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsslDetailsqclistAddserilotsV1($id, $id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsslDetailsqclistAddserilotsV1Post($id1, $id2, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsslDetailsqclistGetstocklinepriceV1($id, $id1, $id2, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsslDetailsqclistGetstocklinepriceV1Post($id1, $id2, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/AddLine2/{_index}
     */
    public function transactionsslDetailsqclistAddline2V1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/AddLine2/{_index}
     */
    public function transactionsslDetailsqclistAddline2V1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsslDetailsqclistAppendserilotsV1($id, $id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsslDetailsqclistAppendserilotsV1Post($id1, $id2, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/EqualizeBalance/{_index}
     */
    public function transactionsslDetailsqclistEqualizebalanceV1($id, $id1, $id2, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/EqualizeBalance/{_index}
     */
    public function transactionsslDetailsqclistEqualizebalanceV1Post($id1, $id2, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsslDetailsqclistApplyaccdisttemplateV1($id, $id1, $id2, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsslDetailsqclistApplyaccdisttemplateV1Post($id1, $id2, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/SetLineTotals/{_Indx}
     */
    public function transactionsslDetailsqclistSetlinetotalsV1($id, $id1, $id2, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/SetLineTotals/{_Indx}
     */
    public function transactionsslDetailsqclistSetlinetotalsV1Post($id1, $id2, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST
     */
    public function getTRANSACTIONSSL_DETAILSQCLISTVALLISTV1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/{idt}
     */
    public function getTRANSACTIONSSL_DETAILSQCLISTVALLISTByIdV1($id, $id1, $id2, $id3, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AppendLine2
     */
    public function transactionsslDetailsqclistvallistAppendline2V1($id, $id1, $id2, $id3, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AppendLine2
     */
    public function transactionsslDetailsqclistvallistAppendline2V1Post($id1, $id2, $id3, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsslDetailsqclistvallistAddserilotsV1($id, $id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/SL_DETAILS/{id2}/QCLIST/{id3}/VALLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsslDetailsqclistvallistAddserilotsV1Post($id1, $id2, $id3, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/SL_DETAILS/{$id2}/QCLIST/{$id3}/VALLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /itemSlips/readwithbodyparamters
     */
    public function postReadWithBodyParametersV1(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/readwithbodyparamters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /itemSlips/{id}/readwithbodyparamters
     */
    public function postReadByIdWithBodyParametersV1($id, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/readwithbodyparamters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS
     */
    public function getTRANSACTIONSV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{idt}
     */
    public function getTRANSACTIONSByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/AppendLine2
     */
    public function transactionsAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/AppendLine2
     */
    public function transactionsAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/AddLine2/{_index}
     */
    public function transactionsAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/AddLine2/{_index}
     */
    public function transactionsAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/EqualizeBalance/{_index}
     */
    public function transactionsEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/EqualizeBalance/{_index}
     */
    public function transactionsEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function transactionsApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/SetLineTotals/{_Indx}
     */
    public function transactionsSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/SetLineTotals/{_Indx}
     */
    public function transactionsSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/FA_INFO
     */
    public function getTRANSACTIONSFA_INFOV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/FA_INFO";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/FA_INFO/{idt}
     */
    public function getTRANSACTIONSFA_INFOByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/FA_INFO/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/FA_INFO/AppendLine2
     */
    public function transactionsfaInfoAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/FA_INFO/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/FA_INFO/AppendLine2
     */
    public function transactionsfaInfoAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/FA_INFO/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/FA_INFO/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsfaInfoAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/FA_INFO/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/FA_INFO/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function transactionsfaInfoAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/FA_INFO/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/FA_INFO/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsfaInfoGetstocklinepriceV1($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/FA_INFO/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/FA_INFO/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function transactionsfaInfoGetstocklinepriceV1Post($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/FA_INFO/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/FA_INFO/AddLine2/{_index}
     */
    public function transactionsfaInfoAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/FA_INFO/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/FA_INFO/AddLine2/{_index}
     */
    public function transactionsfaInfoAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/FA_INFO/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/FA_INFO/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsfaInfoAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/FA_INFO/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/FA_INFO/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function transactionsfaInfoAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/FA_INFO/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /itemSlips/{id}/TRANSACTIONS/{id1}/FA_INFO/EqualizeBalance/{_index}
     */
    public function transactionsfaInfoEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/{$id}/TRANSACTIONS/{$id1}/FA_INFO/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /itemSlips/TRANSACTIONS/{id1}/FA_INFO/EqualizeBalance/{_index}
     */
    public function transactionsfaInfoEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/itemSlips/TRANSACTIONS/{$id1}/FA_INFO/EqualizeBalance/{$index}";
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
     * Retrieves analytics data for ItemSlips entities.
     */
    public function getAnalytics()
    {
        return ['total' => $this->getCount()];
    }

    /**
     * Retrieves the total count of ItemSlips entities.
     */
    public function getCount()
    {
        $resp = $this->getAll(['count' => true]);
        return (int) ($resp->totalCount ?? 0);
    }

    /**
     * Retrieves database column information for the ItemSlips entity.
     */
    public function getDbColumns()
    {
        $path = "{$this->endpoint}/dbcolumns";
        return $this->request('GET', $path);
    }

    /**
     * Enables change tracking for the ItemSlips entity.
     */
    public function track()
    {
        $path = "{$this->endpoint}/track";
        return $this->request('GET', $path);
    }

    /**
     * Disables change tracking for the ItemSlips entity.
     */
    public function untrack()
    {
        $path = "{$this->endpoint}/untrack";
        return $this->request('GET', $path);
    }

    /**
     * Checks the change tracking status for the ItemSlips entity.
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
