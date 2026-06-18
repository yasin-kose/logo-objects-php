<?php

declare(strict_types=1);

namespace LogoObjects\Clients\customers;

use LogoObjects\Http\BaseApiClient;
use LogoObjects\Types\ApiResponse;
use LogoObjects\Utils\QueryBuilder;

/**
 * CustomersClient - /customers endpoint'i icin CRUD ve ozel islemler.
 */
class CustomersClient extends BaseApiClient
{
    /** @var string */
    protected $endpoint = '/customers';

    /**
     * Retrieves a paginated list of Customers entities.
     */
    public function getAll(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "{$this->endpoint}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return ApiResponse::of($this->request('GET', $path), \LogoObjects\Clients\customers\Customers::class);
    }

    /**
     * Retrieves a single Customers entity by its internal reference ID.
     */
    public function getById($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "{$this->endpoint}/{$id}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return \LogoObjects\Clients\customers\Customers::fromArray($this->request('GET', $path));
    }

    /**
     * Creates a new Customers entity.
     */
    public function create(array $data)
    {
        $path = "{$this->endpoint}";
        return \LogoObjects\Clients\customers\Customers::fromArray($this->request('POST', $path, $data));
    }

    /**
     * Updates an existing Customers entity.
     */
    public function update($id, array $data)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\customers\Customers::fromArray($this->request('PUT', $path, $data));
    }

    /**
     * Partially updates a Customers entity.
     */
    public function patch($id, array $data)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\customers\Customers::fromArray($this->request('PATCH', $path, $data));
    }

    /**
     * Deletes a Customers entity by its internal reference ID.
     */
    public function delete($id)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\customers\Customers::fromArray($this->request('DELETE', $path));
    }

    /**
     * Searches for Customers entities based on a set of criteria.
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
     * Corresponds to POST /customers/EqualizePayAmnt
     */
    public function equalizePayAmntV1(array $data)
    {
        $path = "/customers/EqualizePayAmnt";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/EqualizePayAmnt
     */
    public function equalizePayAmntV1Get($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/EqualizePayAmnt";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /customers/{id}/AddSeriLotsForKs/{_slCode}/{_amount}/{_IOMtd}
     */
    public function addSeriLotsForKsV1($id, string $slCode, $amount, $IOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/AddSeriLotsForKs/{$slCode}/{$amount}/{$IOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/AddSeriLotsForKs/{_slCode}/{_amount}/{_IOMtd}
     */
    public function addSeriLotsForKsV1Post(string $slCode, $amount, $IOMtd, array $data)
    {
        $path = "/customers/AddSeriLotsForKs/{$slCode}/{$amount}/{$IOMtd}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/FillSMMACCCodes
     */
    public function fillSMMACCCodesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/FillSMMACCCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/FillSMMACCCodes
     */
    public function fillSMMACCCodesV1Post(array $data)
    {
        $path = "/customers/FillSMMACCCodes";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/AttachADespatchByLRef/{_dispref}
     */
    public function attachADespatchByLRefV1($id, $dispref, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/AttachADespatchByLRef/{$dispref}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/AttachADespatchByLRef/{_dispref}
     */
    public function attachADespatchByLRefV1Post($dispref, array $data)
    {
        $path = "/customers/AttachADespatchByLRef/{$dispref}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/AttachADespatchByFicheNo/{_dispFicheNo}
     */
    public function attachADespatchByFicheNoV1($id, string $dispFicheNo, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/AttachADespatchByFicheNo/{$dispFicheNo}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/AttachADespatchByFicheNo/{_dispFicheNo}
     */
    public function attachADespatchByFicheNoV1Post(string $dispFicheNo, array $data)
    {
        $path = "/customers/AttachADespatchByFicheNo/{$dispFicheNo}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/DeleteCampaign
     */
    public function deleteCampaignV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/DeleteCampaign";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/DeleteCampaign
     */
    public function deleteCampaignV1Post(array $data)
    {
        $path = "/customers/DeleteCampaign";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/SetClientInfo
     */
    public function setClientInfoV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/SetClientInfo";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/SetClientInfo
     */
    public function setClientInfoV1Post(array $data)
    {
        $path = "/customers/SetClientInfo";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/GetRelevantCampaigns
     */
    public function getRelevantCampaignsV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/GetRelevantCampaigns";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/GetRelevantCampaigns
     */
    public function getRelevantCampaignsV1Post(array $data)
    {
        $path = "/customers/GetRelevantCampaigns";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/ApplyCampaignSpecific/{_refList}
     */
    public function applyCampaignSpecificV1($id, string $refList, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ApplyCampaignSpecific/{$refList}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/ApplyCampaignSpecific/{_refList}
     */
    public function applyCampaignSpecificV1Post(string $refList, array $data)
    {
        $path = "/customers/ApplyCampaignSpecific/{$refList}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/ImportImage/{_ImgPath}/{_Indx}
     */
    public function importImageV1($id, string $ImgPath, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ImportImage/{$ImgPath}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/ImportImage/{_ImgPath}/{_Indx}
     */
    public function importImageV1Post(string $ImgPath, string $Indx, array $data)
    {
        $path = "/customers/ImportImage/{$ImgPath}/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/ExportBase64EncodedImage/{_Indx}
     */
    public function exportBase64EncodedImageV1($id, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ExportBase64EncodedImage/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/ExportBase64EncodedImage/{_Indx}
     */
    public function exportBase64EncodedImageV1Post(string $Indx, array $data)
    {
        $path = "/customers/ExportBase64EncodedImage/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/ImportBase64EncodedImage/{_base64EncodedImage}/{_imageType}/{_Indx}
     */
    public function importBase64EncodedImageV1($id, string $base64EncodedImage, string $imageType, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ImportBase64EncodedImage/{$base64EncodedImage}/{$imageType}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/ImportBase64EncodedImage/{_base64EncodedImage}/{_imageType}/{_Indx}
     */
    public function importBase64EncodedImageV1Post(string $base64EncodedImage, string $imageType, string $Indx, array $data)
    {
        $path = "/customers/ImportBase64EncodedImage/{$base64EncodedImage}/{$imageType}/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /customers/CONTACTINFO/{id1}/SPEDAYSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function contactinfospedayslistGetstocklinepriceV1($id1, $prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/CONTACTINFO/{$id1}/SPEDAYSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/CONTACTINFO/{id1}/SPEDAYSLIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function contactinfospedayslistGetstocklinepriceV1Get($id, $id1, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/CONTACTINFO/{$id1}/SPEDAYSLIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /customers/{id}/CONTACTINFO/{id1}/SPEDAYSLIST/AddLine2/{_index}
     */
    public function contactinfospedayslistAddline2V1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/CONTACTINFO/{$id1}/SPEDAYSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/CONTACTINFO/{id1}/SPEDAYSLIST/AddLine2/{_index}
     */
    public function contactinfospedayslistAddline2V1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/CONTACTINFO/{$id1}/SPEDAYSLIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/CONTACTINFO/{id1}/SPEDAYSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function contactinfospedayslistAppendserilotsV1($id, $id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/CONTACTINFO/{$id1}/SPEDAYSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/CONTACTINFO/{id1}/SPEDAYSLIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function contactinfospedayslistAppendserilotsV1Post($id1, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/CONTACTINFO/{$id1}/SPEDAYSLIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/CONTACTINFO/{id1}/SPEDAYSLIST/EqualizeBalance/{_index}
     */
    public function contactinfospedayslistEqualizebalanceV1($id, $id1, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/CONTACTINFO/{$id1}/SPEDAYSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/CONTACTINFO/{id1}/SPEDAYSLIST/EqualizeBalance/{_index}
     */
    public function contactinfospedayslistEqualizebalanceV1Post($id1, $index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/CONTACTINFO/{$id1}/SPEDAYSLIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/CONTACTINFO/{id1}/SPEDAYSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function contactinfospedayslistApplyaccdisttemplateV1($id, $id1, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/CONTACTINFO/{$id1}/SPEDAYSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/CONTACTINFO/{id1}/SPEDAYSLIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function contactinfospedayslistApplyaccdisttemplateV1Post($id1, string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/CONTACTINFO/{$id1}/SPEDAYSLIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/CONTACTINFO/{id1}/SPEDAYSLIST/SetLineTotals/{_Indx}
     */
    public function contactinfospedayslistSetlinetotalsV1($id, $id1, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/CONTACTINFO/{$id1}/SPEDAYSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/CONTACTINFO/{id1}/SPEDAYSLIST/SetLineTotals/{_Indx}
     */
    public function contactinfospedayslistSetlinetotalsV1Post($id1, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/CONTACTINFO/{$id1}/SPEDAYSLIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/ExportToXML/{_RootKey}/{_FileName}
     */
    public function exportToXMLV1($id, string $RootKey, string $FileName, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ExportToXML/{$RootKey}/{$FileName}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/ExportToXML/{_RootKey}/{_FileName}
     */
    public function exportToXMLV1Post(string $RootKey, string $FileName, array $data)
    {
        $path = "/customers/ExportToXML/{$RootKey}/{$FileName}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/ImportFromXMLFile/{_RootKey}/{_FileName}
     */
    public function importFromXMLFileV1($id, string $RootKey, string $FileName, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ImportFromXMLFile/{$RootKey}/{$FileName}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/ImportFromXMLFile/{_RootKey}/{_FileName}
     */
    public function importFromXMLFileV1Post(string $RootKey, string $FileName, array $data)
    {
        $path = "/customers/ImportFromXMLFile/{$RootKey}/{$FileName}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/CreateCompositeLines
     */
    public function createCompositeLinesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/CreateCompositeLines";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/CreateCompositeLines
     */
    public function createCompositeLinesV1Post(array $data)
    {
        $path = "/customers/CreateCompositeLines";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/FormSeriLotLines/{_lOMtd}
     */
    public function formSeriLotLinesV1($id, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/FormSeriLotLines/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/FormSeriLotLines/{_lOMtd}
     */
    public function formSeriLotLinesV1Post($lOMtd, array $data)
    {
        $path = "/customers/FormSeriLotLines/{$lOMtd}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/ApplyCampaign
     */
    public function applyCampaignV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ApplyCampaign";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/ApplyCampaign
     */
    public function applyCampaignV1Post(array $data)
    {
        $path = "/customers/ApplyCampaign";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/ApplyRePayPln/{_lineNr}/{_rePayPCode}
     */
    public function applyRePayPlnV1($id, $lineNr, string $rePayPCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ApplyRePayPln/{$lineNr}/{$rePayPCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/ApplyRePayPln/{_lineNr}/{_rePayPCode}
     */
    public function applyRePayPlnV1Post($lineNr, string $rePayPCode, array $data)
    {
        $path = "/customers/ApplyRePayPln/{$lineNr}/{$rePayPCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/ApplyRePayPlnForInv/{_rePayCode}
     */
    public function applyRePayPlnForInvV1($id, string $rePayCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ApplyRePayPlnForInv/{$rePayCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/ApplyRePayPlnForInv/{_rePayCode}
     */
    public function applyRePayPlnForInvV1Post(string $rePayCode, array $data)
    {
        $path = "/customers/ApplyRePayPlnForInv/{$rePayCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/ImportFromXmlStr/{_RootKey}/{_XmlStr}
     */
    public function importFromXmlStrV1($id, string $RootKey, string $XmlStr, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ImportFromXmlStr/{$RootKey}/{$XmlStr}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/ImportFromXmlStr/{_RootKey}/{_XmlStr}
     */
    public function importFromXmlStrV1Post(string $RootKey, string $XmlStr, array $data)
    {
        $path = "/customers/ImportFromXmlStr/{$RootKey}/{$XmlStr}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/ExportToXmlStr/{_RootKey}
     */
    public function exportToXmlStrV1($id, string $RootKey, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ExportToXmlStr/{$RootKey}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/ExportToXmlStr/{_RootKey}
     */
    public function exportToXmlStrV1Post(string $RootKey, array $data)
    {
        $path = "/customers/ExportToXmlStr/{$RootKey}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/ApplyCondition
     */
    public function applyConditionV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ApplyCondition";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/ApplyCondition
     */
    public function applyConditionV1Post(array $data)
    {
        $path = "/customers/ApplyCondition";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/ExportImage/{_Indx}/{_ImgPath}
     */
    public function exportImageV1($id, string $Indx, string $ImgPath, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ExportImage/{$Indx}/{$ImgPath}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/ExportImage/{_Indx}/{_ImgPath}
     */
    public function exportImageV1Post(string $Indx, string $ImgPath, array $data)
    {
        $path = "/customers/ExportImage/{$Indx}/{$ImgPath}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/ReCalculate
     */
    public function reCalculateV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ReCalculate";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/ReCalculate
     */
    public function reCalculateV1Post(array $data)
    {
        $path = "/customers/ReCalculate";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/FillAccCodes
     */
    public function fillAccCodesV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/FillAccCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/FillAccCodes
     */
    public function fillAccCodesV1Post(array $data)
    {
        $path = "/customers/FillAccCodes";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/ApplyADiscount/{_discCode}
     */
    public function applyADiscountV1($id, string $discCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ApplyADiscount/{$discCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/ApplyADiscount/{_discCode}
     */
    public function applyADiscountV1Post(string $discCode, array $data)
    {
        $path = "/customers/ApplyADiscount/{$discCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/SetDefIntValue/{_fldName}/{_fType}/{_fSz}/{_Value}
     */
    public function setDefIntValueV1($id, string $fldName, $fType, $fSz, $Value, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/SetDefIntValue/{$fldName}/{$fType}/{$fSz}/{$Value}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/SetDefIntValue/{_fldName}/{_fType}/{_fSz}/{_Value}
     */
    public function setDefIntValueV1Post(string $fldName, $fType, $fSz, $Value, array $data)
    {
        $path = "/customers/SetDefIntValue/{$fldName}/{$fType}/{$fSz}/{$Value}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /customers/SLSMLST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function slsmlstApplyaccdisttemplateV1(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/SLSMLST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/SLSMLST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function slsmlstApplyaccdisttemplateV1Get($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/SLSMLST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /customers/{id}/SLSMLST/SetLineTotals/{_Indx}
     */
    public function slsmlstSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/SLSMLST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/SLSMLST/SetLineTotals/{_Indx}
     */
    public function slsmlstSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/SLSMLST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/ARPLST
     */
    public function getARPLSTV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ARPLST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /customers/{id}/ARPLST/{idt}
     */
    public function getARPLSTByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ARPLST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /customers/{id}/ARPLST/AppendLine2
     */
    public function arplstAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ARPLST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/ARPLST/AppendLine2
     */
    public function arplstAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/ARPLST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/ARPLST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function arplstAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ARPLST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/ARPLST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function arplstAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/ARPLST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/ARPLST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function arplstGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ARPLST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/ARPLST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function arplstGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/ARPLST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/ARPLST/AddLine2/{_index}
     */
    public function arplstAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ARPLST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/ARPLST/AddLine2/{_index}
     */
    public function arplstAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/ARPLST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/ARPLST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function arplstAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ARPLST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/ARPLST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function arplstAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/ARPLST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/ARPLST/EqualizeBalance/{_index}
     */
    public function arplstEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ARPLST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/ARPLST/EqualizeBalance/{_index}
     */
    public function arplstEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/ARPLST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/ARPLST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function arplstApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ARPLST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/ARPLST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function arplstApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/ARPLST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/ARPLST/SetLineTotals/{_Indx}
     */
    public function arplstSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/ARPLST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/ARPLST/SetLineTotals/{_Indx}
     */
    public function arplstSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/ARPLST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/CONTACTINFO
     */
    public function getCONTACTINFOV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/CONTACTINFO";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /customers/{id}/CONTACTINFO/{idt}
     */
    public function getCONTACTINFOByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/CONTACTINFO/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /customers/{id}/CONTACTINFO/AppendLine2
     */
    public function contactinfoAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/CONTACTINFO/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/CONTACTINFO/AppendLine2
     */
    public function contactinfoAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/CONTACTINFO/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/CONTACTINFO/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function contactinfoAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/CONTACTINFO/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/CONTACTINFO/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function contactinfoAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/CONTACTINFO/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/CONTACTINFO/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function contactinfoGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/CONTACTINFO/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/CONTACTINFO/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function contactinfoGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/CONTACTINFO/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/CONTACTINFO/AddLine2/{_index}
     */
    public function contactinfoAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/CONTACTINFO/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/CONTACTINFO/AddLine2/{_index}
     */
    public function contactinfoAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/CONTACTINFO/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/CONTACTINFO/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function contactinfoAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/CONTACTINFO/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/CONTACTINFO/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function contactinfoAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/CONTACTINFO/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/CONTACTINFO/EqualizeBalance/{_index}
     */
    public function contactinfoEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/CONTACTINFO/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/CONTACTINFO/EqualizeBalance/{_index}
     */
    public function contactinfoEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/CONTACTINFO/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/CONTACTINFO/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function contactinfoApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/CONTACTINFO/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/CONTACTINFO/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function contactinfoApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/CONTACTINFO/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/CONTACTINFO/SetLineTotals/{_Indx}
     */
    public function contactinfoSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/CONTACTINFO/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/CONTACTINFO/SetLineTotals/{_Indx}
     */
    public function contactinfoSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/CONTACTINFO/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/CONTACTINFO/{id1}/SPEDAYSLIST
     */
    public function getCONTACTINFOSPEDAYSLISTV1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/CONTACTINFO/{$id1}/SPEDAYSLIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /customers/{id}/CONTACTINFO/{id1}/SPEDAYSLIST/{idt}
     */
    public function getCONTACTINFOSPEDAYSLISTByIdV1($id, $id1, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/CONTACTINFO/{$id1}/SPEDAYSLIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /customers/{id}/CONTACTINFO/{id1}/SPEDAYSLIST/AppendLine2
     */
    public function contactinfospedayslistAppendline2V1($id, $id1, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/CONTACTINFO/{$id1}/SPEDAYSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/CONTACTINFO/{id1}/SPEDAYSLIST/AppendLine2
     */
    public function contactinfospedayslistAppendline2V1Post($id1, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/CONTACTINFO/{$id1}/SPEDAYSLIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/CONTACTINFO/{id1}/SPEDAYSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function contactinfospedayslistAddserilotsV1($id, $id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/CONTACTINFO/{$id1}/SPEDAYSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/CONTACTINFO/{id1}/SPEDAYSLIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function contactinfospedayslistAddserilotsV1Post($id1, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/CONTACTINFO/{$id1}/SPEDAYSLIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /customers/readwithbodyparamters
     */
    public function postReadWithBodyParametersV1(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/readwithbodyparamters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /customers/{id}/readwithbodyparamters
     */
    public function postReadByIdWithBodyParametersV1($id, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/readwithbodyparamters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/INDLST
     */
    public function getINDLSTV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/INDLST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /customers/{id}/INDLST/{idt}
     */
    public function getINDLSTByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/INDLST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /customers/{id}/INDLST/AppendLine2
     */
    public function indlstAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/INDLST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/INDLST/AppendLine2
     */
    public function indlstAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/INDLST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/INDLST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function indlstAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/INDLST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/INDLST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function indlstAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/INDLST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/INDLST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function indlstGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/INDLST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/INDLST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function indlstGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/INDLST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/INDLST/AddLine2/{_index}
     */
    public function indlstAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/INDLST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/INDLST/AddLine2/{_index}
     */
    public function indlstAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/INDLST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/INDLST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function indlstAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/INDLST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/INDLST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function indlstAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/INDLST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/INDLST/EqualizeBalance/{_index}
     */
    public function indlstEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/INDLST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/INDLST/EqualizeBalance/{_index}
     */
    public function indlstEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/INDLST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/INDLST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function indlstApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/INDLST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/INDLST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function indlstApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/INDLST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/INDLST/SetLineTotals/{_Indx}
     */
    public function indlstSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/INDLST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/INDLST/SetLineTotals/{_Indx}
     */
    public function indlstSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/INDLST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/SLSMLST
     */
    public function getSLSMLSTV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/SLSMLST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /customers/{id}/SLSMLST/{idt}
     */
    public function getSLSMLSTByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/SLSMLST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /customers/{id}/SLSMLST/AppendLine2
     */
    public function slsmlstAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/SLSMLST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/SLSMLST/AppendLine2
     */
    public function slsmlstAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/SLSMLST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/SLSMLST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function slsmlstAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/SLSMLST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/SLSMLST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function slsmlstAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/SLSMLST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/SLSMLST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function slsmlstGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/SLSMLST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/SLSMLST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function slsmlstGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/SLSMLST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/SLSMLST/AddLine2/{_index}
     */
    public function slsmlstAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/SLSMLST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/SLSMLST/AddLine2/{_index}
     */
    public function slsmlstAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/SLSMLST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/SLSMLST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function slsmlstAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/SLSMLST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/SLSMLST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function slsmlstAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/SLSMLST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customers/{id}/SLSMLST/EqualizeBalance/{_index}
     */
    public function slsmlstEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/{$id}/SLSMLST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customers/SLSMLST/EqualizeBalance/{_index}
     */
    public function slsmlstEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customers/SLSMLST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/ImportFromXmlStr/{_RootKey}/{_XmlStr}
     */
    public function importFromXmlStrV1Get($id, string $RootKey, string $XmlStr, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/ImportFromXmlStr/{$RootKey}/{$XmlStr}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/ImportFromXmlStr/{_RootKey}/{_XmlStr}
     */
    public function importFromXmlStrV1Post2(string $RootKey, string $XmlStr, array $data)
    {
        $path = "/customersOfSalesmen/ImportFromXmlStr/{$RootKey}/{$XmlStr}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/ExportToXmlStr/{_RootKey}
     */
    public function exportToXmlStrV1Get($id, string $RootKey, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/ExportToXmlStr/{$RootKey}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/ExportToXmlStr/{_RootKey}
     */
    public function exportToXmlStrV1Post2(string $RootKey, array $data)
    {
        $path = "/customersOfSalesmen/ExportToXmlStr/{$RootKey}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/ApplyCondition
     */
    public function applyConditionV1Get($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/ApplyCondition";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/ApplyCondition
     */
    public function applyConditionV1Post2(array $data)
    {
        $path = "/customersOfSalesmen/ApplyCondition";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/ExportImage/{_Indx}/{_ImgPath}
     */
    public function exportImageV1Get($id, string $Indx, string $ImgPath, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/ExportImage/{$Indx}/{$ImgPath}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/ExportImage/{_Indx}/{_ImgPath}
     */
    public function exportImageV1Post2(string $Indx, string $ImgPath, array $data)
    {
        $path = "/customersOfSalesmen/ExportImage/{$Indx}/{$ImgPath}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/ReCalculate
     */
    public function reCalculateV1Get($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/ReCalculate";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/ReCalculate
     */
    public function reCalculateV1Post2(array $data)
    {
        $path = "/customersOfSalesmen/ReCalculate";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/FillAccCodes
     */
    public function fillAccCodesV1Get($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/FillAccCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/FillAccCodes
     */
    public function fillAccCodesV1Post2(array $data)
    {
        $path = "/customersOfSalesmen/FillAccCodes";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/ApplyADiscount/{_discCode}
     */
    public function applyADiscountV1Get($id, string $discCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/ApplyADiscount/{$discCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/ApplyADiscount/{_discCode}
     */
    public function applyADiscountV1Post2(string $discCode, array $data)
    {
        $path = "/customersOfSalesmen/ApplyADiscount/{$discCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/SetDefIntValue/{_fldName}/{_fType}/{_fSz}/{_Value}
     */
    public function setDefIntValueV1Get($id, string $fldName, $fType, $fSz, $Value, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/SetDefIntValue/{$fldName}/{$fType}/{$fSz}/{$Value}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/SetDefIntValue/{_fldName}/{_fType}/{_fSz}/{_Value}
     */
    public function setDefIntValueV1Post2(string $fldName, $fType, $fSz, $Value, array $data)
    {
        $path = "/customersOfSalesmen/SetDefIntValue/{$fldName}/{$fType}/{$fSz}/{$Value}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/EqualizePayAmnt
     */
    public function equalizePayAmntV1Get2($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/EqualizePayAmnt";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/EqualizePayAmnt
     */
    public function equalizePayAmntV1Post(array $data)
    {
        $path = "/customersOfSalesmen/EqualizePayAmnt";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/AddSeriLotsForKs/{_slCode}/{_amount}/{_IOMtd}
     */
    public function addSeriLotsForKsV1Get($id, string $slCode, $amount, $IOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/AddSeriLotsForKs/{$slCode}/{$amount}/{$IOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/AddSeriLotsForKs/{_slCode}/{_amount}/{_IOMtd}
     */
    public function addSeriLotsForKsV1Post2(string $slCode, $amount, $IOMtd, array $data)
    {
        $path = "/customersOfSalesmen/AddSeriLotsForKs/{$slCode}/{$amount}/{$IOMtd}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/FillSMMACCCodes
     */
    public function fillSMMACCCodesV1Get($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/FillSMMACCCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/FillSMMACCCodes
     */
    public function fillSMMACCCodesV1Post2(array $data)
    {
        $path = "/customersOfSalesmen/FillSMMACCCodes";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/AttachADespatchByLRef/{_dispref}
     */
    public function attachADespatchByLRefV1Get($id, $dispref, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/AttachADespatchByLRef/{$dispref}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/AttachADespatchByLRef/{_dispref}
     */
    public function attachADespatchByLRefV1Post2($dispref, array $data)
    {
        $path = "/customersOfSalesmen/AttachADespatchByLRef/{$dispref}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/AttachADespatchByFicheNo/{_dispFicheNo}
     */
    public function attachADespatchByFicheNoV1Get($id, string $dispFicheNo, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/AttachADespatchByFicheNo/{$dispFicheNo}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/AttachADespatchByFicheNo/{_dispFicheNo}
     */
    public function attachADespatchByFicheNoV1Post2(string $dispFicheNo, array $data)
    {
        $path = "/customersOfSalesmen/AttachADespatchByFicheNo/{$dispFicheNo}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/DeleteCampaign
     */
    public function deleteCampaignV1Get($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/DeleteCampaign";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/DeleteCampaign
     */
    public function deleteCampaignV1Post2(array $data)
    {
        $path = "/customersOfSalesmen/DeleteCampaign";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/SetClientInfo
     */
    public function setClientInfoV1Get($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/SetClientInfo";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/SetClientInfo
     */
    public function setClientInfoV1Post2(array $data)
    {
        $path = "/customersOfSalesmen/SetClientInfo";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/GetRelevantCampaigns
     */
    public function getRelevantCampaignsV1Get($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/GetRelevantCampaigns";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/GetRelevantCampaigns
     */
    public function getRelevantCampaignsV1Post2(array $data)
    {
        $path = "/customersOfSalesmen/GetRelevantCampaigns";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/ApplyCampaignSpecific/{_refList}
     */
    public function applyCampaignSpecificV1Get($id, string $refList, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/ApplyCampaignSpecific/{$refList}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/ApplyCampaignSpecific/{_refList}
     */
    public function applyCampaignSpecificV1Post2(string $refList, array $data)
    {
        $path = "/customersOfSalesmen/ApplyCampaignSpecific/{$refList}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/ImportImage/{_ImgPath}/{_Indx}
     */
    public function importImageV1Get($id, string $ImgPath, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/ImportImage/{$ImgPath}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/ImportImage/{_ImgPath}/{_Indx}
     */
    public function importImageV1Post2(string $ImgPath, string $Indx, array $data)
    {
        $path = "/customersOfSalesmen/ImportImage/{$ImgPath}/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/ExportBase64EncodedImage/{_Indx}
     */
    public function exportBase64EncodedImageV1Get($id, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/ExportBase64EncodedImage/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/ExportBase64EncodedImage/{_Indx}
     */
    public function exportBase64EncodedImageV1Post2(string $Indx, array $data)
    {
        $path = "/customersOfSalesmen/ExportBase64EncodedImage/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/ImportBase64EncodedImage/{_base64EncodedImage}/{_imageType}/{_Indx}
     */
    public function importBase64EncodedImageV1Get($id, string $base64EncodedImage, string $imageType, string $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/ImportBase64EncodedImage/{$base64EncodedImage}/{$imageType}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/ImportBase64EncodedImage/{_base64EncodedImage}/{_imageType}/{_Indx}
     */
    public function importBase64EncodedImageV1Post2(string $base64EncodedImage, string $imageType, string $Indx, array $data)
    {
        $path = "/customersOfSalesmen/ImportBase64EncodedImage/{$base64EncodedImage}/{$imageType}/{$Indx}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen
     */
    public function getV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen
     */
    public function postV1(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/readwithbodyparamters
     */
    public function postReadWithBodyParametersV1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/readwithbodyparamters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}
     */
    public function getByIdV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to PUT /customersOfSalesmen/{id}
     */
    public function putV1($id, array $data)
    {
        $path = "/customersOfSalesmen/{$id}";
        return $this->request('PUT', $path, $data);
    }

    /**
     * Corresponds to DELETE /customersOfSalesmen/{id}
     */
    public function deleteV1($id)
    {
        $path = "/customersOfSalesmen/{$id}";
        return $this->request('DELETE', $path);
    }

    /**
     * Corresponds to PATCH /customersOfSalesmen/{id}
     */
    public function patchV1($id, array $data)
    {
        $path = "/customersOfSalesmen/{$id}";
        return $this->request('PATCH', $path, $data);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/{id}/readwithbodyparamters
     */
    public function postReadByIdWithBodyParametersV1Post($id, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/readwithbodyparamters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/dbcolumns
     */
    public function getDbColumnPropertiesV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/dbcolumns";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/track
     */
    public function trackV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/track";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/untrack
     */
    public function unTrackV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/untrack";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/checktrack
     */
    public function checkTrackV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/checktrack";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/CL_LIST
     */
    public function getCL_LISTV1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/CL_LIST";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/CL_LIST/{idt}
     */
    public function getCL_LISTByIdV1($id, $idt, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/CL_LIST/{$idt}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/CL_LIST/AppendLine2
     */
    public function clListAppendline2V1($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/CL_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/CL_LIST/AppendLine2
     */
    public function clListAppendline2V1Post(array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/CL_LIST/AppendLine2";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/CL_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function clListAddserilotsV1($id, string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/CL_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/CL_LIST/AddSeriLots/{_slCode}/{_amount}/{_locCode}/{_lOMtd}/{_ExpDate}
     */
    public function clListAddserilotsV1Post(string $slCode, $amount, string $locCode, $lOMtd, $ExpDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/CL_LIST/AddSeriLots/{$slCode}/{$amount}/{$locCode}/{$lOMtd}/{$ExpDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/CL_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function clListGetstocklinepriceV1($id, $prcTyp, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/CL_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/CL_LIST/GetStockLinePrice/{_prcTyp}/{_Indx}
     */
    public function clListGetstocklinepriceV1Post($prcTyp, $Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/CL_LIST/GetStockLinePrice/{$prcTyp}/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/CL_LIST/AddLine2/{_index}
     */
    public function clListAddline2V1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/CL_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/CL_LIST/AddLine2/{_index}
     */
    public function clListAddline2V1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/CL_LIST/AddLine2/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/CL_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function clListAppendserilotsV1($id, string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/CL_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/CL_LIST/AppendSeriLots/{_slCode}/{_amount}/{_Indx}/{_locCode}/{_lOMtd}
     */
    public function clListAppendserilotsV1Post(string $slCode, $amount, $Indx, string $locCode, $lOMtd, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/CL_LIST/AppendSeriLots/{$slCode}/{$amount}/{$Indx}/{$locCode}/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/CL_LIST/EqualizeBalance/{_index}
     */
    public function clListEqualizebalanceV1($id, $index, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/CL_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/CL_LIST/EqualizeBalance/{_index}
     */
    public function clListEqualizebalanceV1Post($index, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/CL_LIST/EqualizeBalance/{$index}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/CL_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function clListApplyaccdisttemplateV1($id, string $accDistCode, $lineType, $iDate, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/CL_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/CL_LIST/ApplyAccDistTemplate/{_accDistCode}/{_lineType}/{_iDate}
     */
    public function clListApplyaccdisttemplateV1Post(string $accDistCode, $lineType, $iDate, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/CL_LIST/ApplyAccDistTemplate/{$accDistCode}/{$lineType}/{$iDate}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/CL_LIST/SetLineTotals/{_Indx}
     */
    public function clListSetlinetotalsV1($id, $Indx, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/CL_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/CL_LIST/SetLineTotals/{_Indx}
     */
    public function clListSetlinetotalsV1Post($Indx, array $data, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/CL_LIST/SetLineTotals/{$Indx}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/ExportToXML/{_RootKey}/{_FileName}
     */
    public function exportToXMLV1Get($id, string $RootKey, string $FileName, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/ExportToXML/{$RootKey}/{$FileName}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/ExportToXML/{_RootKey}/{_FileName}
     */
    public function exportToXMLV1Post2(string $RootKey, string $FileName, array $data)
    {
        $path = "/customersOfSalesmen/ExportToXML/{$RootKey}/{$FileName}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/ImportFromXMLFile/{_RootKey}/{_FileName}
     */
    public function importFromXMLFileV1Get($id, string $RootKey, string $FileName, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/ImportFromXMLFile/{$RootKey}/{$FileName}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/ImportFromXMLFile/{_RootKey}/{_FileName}
     */
    public function importFromXMLFileV1Post2(string $RootKey, string $FileName, array $data)
    {
        $path = "/customersOfSalesmen/ImportFromXMLFile/{$RootKey}/{$FileName}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/CreateCompositeLines
     */
    public function createCompositeLinesV1Get($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/CreateCompositeLines";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/CreateCompositeLines
     */
    public function createCompositeLinesV1Post2(array $data)
    {
        $path = "/customersOfSalesmen/CreateCompositeLines";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/FormSeriLotLines/{_lOMtd}
     */
    public function formSeriLotLinesV1Get($id, $lOMtd, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/FormSeriLotLines/{$lOMtd}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/FormSeriLotLines/{_lOMtd}
     */
    public function formSeriLotLinesV1Post2($lOMtd, array $data)
    {
        $path = "/customersOfSalesmen/FormSeriLotLines/{$lOMtd}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/ApplyCampaign
     */
    public function applyCampaignV1Get($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/ApplyCampaign";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/ApplyCampaign
     */
    public function applyCampaignV1Post2(array $data)
    {
        $path = "/customersOfSalesmen/ApplyCampaign";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/ApplyRePayPln/{_lineNr}/{_rePayPCode}
     */
    public function applyRePayPlnV1Get($id, $lineNr, string $rePayPCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/ApplyRePayPln/{$lineNr}/{$rePayPCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/ApplyRePayPln/{_lineNr}/{_rePayPCode}
     */
    public function applyRePayPlnV1Post2($lineNr, string $rePayPCode, array $data)
    {
        $path = "/customersOfSalesmen/ApplyRePayPln/{$lineNr}/{$rePayPCode}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /customersOfSalesmen/{id}/ApplyRePayPlnForInv/{_rePayCode}
     */
    public function applyRePayPlnForInvV1Get($id, string $rePayCode, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/customersOfSalesmen/{$id}/ApplyRePayPlnForInv/{$rePayCode}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /customersOfSalesmen/ApplyRePayPlnForInv/{_rePayCode}
     */
    public function applyRePayPlnForInvV1Post2(string $rePayCode, array $data)
    {
        $path = "/customersOfSalesmen/ApplyRePayPlnForInv/{$rePayCode}";
        return $this->request('POST', $path, $data);
    }

    public function searchByCode($code)
    {
        return $this->getAll(['q' => "CODE like '{$code}*'"]);
    }

    public function searchByTitle($title)
    {
        return $this->getAll(['q' => "TITLE like '{$title}*'"]);
    }

    /**
     * Retrieves analytics data for Customers entities.
     */
    public function getAnalytics()
    {
        return ['total' => $this->getCount()];
    }

    /**
     * Retrieves the total count of Customers entities.
     */
    public function getCount()
    {
        $resp = $this->getAll(['count' => true]);
        return (int) ($resp->totalCount ?? 0);
    }

    /**
     * Retrieves database column information for the Customers entity.
     */
    public function getDbColumns()
    {
        $path = "{$this->endpoint}/dbcolumns";
        return $this->request('GET', $path);
    }

    /**
     * Enables change tracking for the Customers entity.
     */
    public function track()
    {
        $path = "{$this->endpoint}/track";
        return $this->request('GET', $path);
    }

    /**
     * Disables change tracking for the Customers entity.
     */
    public function untrack()
    {
        $path = "{$this->endpoint}/untrack";
        return $this->request('GET', $path);
    }

    /**
     * Checks the change tracking status for the Customers entity.
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
