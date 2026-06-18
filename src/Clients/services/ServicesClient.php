<?php

declare(strict_types=1);

namespace LogoObjects\Clients\services;

use LogoObjects\Http\BaseApiClient;
use LogoObjects\Types\ApiResponse;
use LogoObjects\Utils\QueryBuilder;

/**
 * ServicesClient - /services endpoint'i icin CRUD ve ozel islemler.
 */
class ServicesClient extends BaseApiClient
{
    /** @var string */
    protected $endpoint = '/services';

    /**
     * Retrieves a paginated list of Services entities.
     */
    public function getAll(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "{$this->endpoint}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return ApiResponse::of($this->request('GET', $path), \LogoObjects\Clients\services\Services::class);
    }

    /**
     * Searches for Services entities based on a set of criteria.
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
     * Corresponds to GET /services/additionalTaxes
     */
    public function getServiceSwaggerV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/additionalTaxes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/ArpGroupAssignments
     */
    public function getServiceSwaggerV1Get(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/ArpGroupAssignments";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/ArpMLDescriptons
     */
    public function getServiceSwaggerV1Get2(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/ArpMLDescriptons";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/Arps
     */
    public function getServiceSwaggerV1Get3(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/Arps";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/ArpShipmentLocations
     */
    public function getServiceSwaggerV1Get4(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/ArpShipmentLocations";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/ArpSlips
     */
    public function getServiceSwaggerV1Get5(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/ArpSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/authorizationCodes
     */
    public function getServiceSwaggerV1Get6(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/authorizationCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/bankAccounts
     */
    public function getServiceSwaggerV1Get7(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/bankAccounts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/bankCredits
     */
    public function getServiceSwaggerV1Get8(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/bankCredits";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/bankMLDescriptions
     */
    public function getServiceSwaggerV1Get9(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/bankMLDescriptions";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/banks
     */
    public function getServiceSwaggerV1Get10(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/banks";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/bankSlips
     */
    public function getServiceSwaggerV1Get11(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/bankSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/Boms
     */
    public function getServiceSwaggerV1Get12(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/Boms";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/BomStandardCosts
     */
    public function getServiceSwaggerV1Get13(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/BomStandardCosts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/characteristics
     */
    public function getServiceSwaggerV1Get14(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/characteristics";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/characteristicSets
     */
    public function getServiceSwaggerV1Get15(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/characteristicSets";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/chequeAndPnoteRolls
     */
    public function getServiceSwaggerV1Get16(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/chequeAndPnoteRolls";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/chequeAndPnotes
     */
    public function getServiceSwaggerV1Get17(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/chequeAndPnotes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/cities
     */
    public function getServiceSwaggerV1Get18(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/cities";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/collateralRolls
     */
    public function getServiceSwaggerV1Get19(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/collateralRolls";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/contacts
     */
    public function getServiceSwaggerV1Get20(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/contacts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/costDistributionSlips
     */
    public function getServiceSwaggerV1Get21(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/costDistributionSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/countries
     */
    public function getServiceSwaggerV1Get22(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/countries";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/customerMLDescriptions
     */
    public function getServiceSwaggerV1Get23(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/customerMLDescriptions";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/customers
     */
    public function getServiceSwaggerV1Get24(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/customers";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/customersOfSalesmen
     */
    public function getServiceSwaggerV1Get25(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/customersOfSalesmen";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/customsOffices
     */
    public function getServiceSwaggerV1Get26(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/customsOffices";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/deliveryCodes
     */
    public function getServiceSwaggerV1Get27(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/deliveryCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/demandPeggings
     */
    public function getServiceSwaggerV1Get28(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/demandPeggings";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/demandSlips
     */
    public function getServiceSwaggerV1Get29(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/demandSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/distributionOrders
     */
    public function getServiceSwaggerV1Get30(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/distributionOrders";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/distributionRoutes
     */
    public function getServiceSwaggerV1Get31(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/distributionRoutes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/distributionTemplates
     */
    public function getServiceSwaggerV1Get32(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/distributionTemplates";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/districts
     */
    public function getServiceSwaggerV1Get33(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/districts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/employeeCosts
     */
    public function getServiceSwaggerV1Get34(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/employeeCosts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/employeeGroups
     */
    public function getServiceSwaggerV1Get35(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/employeeGroups";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/employees
     */
    public function getServiceSwaggerV1Get36(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/employees";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/employeeStandardCosts
     */
    public function getServiceSwaggerV1Get37(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/employeeStandardCosts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/engineeringChanges
     */
    public function getServiceSwaggerV1Get38(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/engineeringChanges";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/exportCreditLetters
     */
    public function getServiceSwaggerV1Get39(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/exportCreditLetters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/exportCredits
     */
    public function getServiceSwaggerV1Get40(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/exportCredits";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/exportMovementSlips
     */
    public function getServiceSwaggerV1Get41(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/exportMovementSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/exportNationalizationSlips
     */
    public function getServiceSwaggerV1Get42(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/exportNationalizationSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/exportOperationSlips
     */
    public function getServiceSwaggerV1Get43(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/exportOperationSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/exportTypedPurchaseInvoices
     */
    public function getServiceSwaggerV1Get44(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/exportTypedPurchaseInvoices";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/exportTypedSalesInvoices
     */
    public function getServiceSwaggerV1Get45(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/exportTypedSalesInvoices";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/extendedFieldCategories
     */
    public function getServiceSwaggerV1Get46(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/extendedFieldCategories";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/extendedFieldDefinitions
     */
    public function getServiceSwaggerV1Get47(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/extendedFieldDefinitions";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/extendedFields
     */
    public function getServiceSwaggerV1Get48(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/extendedFields";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/FAAssignmentSlips
     */
    public function getServiceSwaggerV1Get49(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/FAAssignmentSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/FARegistries
     */
    public function getServiceSwaggerV1Get50(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/FARegistries";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/Firmdocs
     */
    public function firmDocs_V1_GetServiceSwagger(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/Firmdocs";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/freeZones
     */
    public function getServiceSwaggerV1Get51(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/freeZones";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/GLAccountMLDescriptions
     */
    public function getServiceSwaggerV1Get52(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/GLAccountMLDescriptions";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/GLAccounts
     */
    public function getServiceSwaggerV1Get53(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/GLAccounts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/GLSlips
     */
    public function getServiceSwaggerV1Get54(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/GLSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/groupCodes
     */
    public function getServiceSwaggerV1Get55(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/groupCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/importCreditLetters
     */
    public function getServiceSwaggerV1Get56(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/importCreditLetters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/importDistributionSlips
     */
    public function getServiceSwaggerV1Get57(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/importDistributionSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/importOperationSlips
     */
    public function getServiceSwaggerV1Get58(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/importOperationSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/inwardProcessingPermits
     */
    public function getServiceSwaggerV1Get59(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/inwardProcessingPermits";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/itemAlternatives
     */
    public function getServiceSwaggerV1Get60(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/itemAlternatives";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/itemBoms
     */
    public function getServiceSwaggerV1Get61(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/itemBoms";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/itemBrands
     */
    public function getServiceSwaggerV1Get62(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/itemBrands";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/itemCharacteristics
     */
    public function getServiceSwaggerV1Get63(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/itemCharacteristics";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/itemClassAssignments
     */
    public function getServiceSwaggerV1Get64(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/itemClassAssignments";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/itemMLDescriptions
     */
    public function getServiceSwaggerV1Get65(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/itemMLDescriptions";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/items
     */
    public function getServiceSwaggerV1Get66(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/items";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/itemSlips
     */
    public function getServiceSwaggerV1Get67(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/itemSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/itemStandardCosts
     */
    public function getServiceSwaggerV1Get68(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/itemStandardCosts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/locationCodes
     */
    public function getServiceSwaggerV1Get69(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/locationCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/methods
     */
    public function getServiceSwaggerV1Get70(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/methods";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/operations
     */
    public function getServiceSwaggerV1Get71(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/operations";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/opportunities
     */
    public function getServiceSwaggerV1Get72(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/opportunities";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/overheadAccounts
     */
    public function getServiceSwaggerV1Get73(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/overheadAccounts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/paymentDifferenceInvoices
     */
    public function getServiceSwaggerV1Get74(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/paymentDifferenceInvoices";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/paymentPlanGroupCodes
     */
    public function getServiceSwaggerV1Get75(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/paymentPlanGroupCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/paymentPlans
     */
    public function getServiceSwaggerV1Get76(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/paymentPlans";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/postCodes
     */
    public function getServiceSwaggerV1Get77(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/postCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/productionExceptions
     */
    public function getServiceSwaggerV1Get78(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/productionExceptions";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/productionLines
     */
    public function getServiceSwaggerV1Get79(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/productionLines";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/productionParameters
     */
    public function getServiceSwaggerV1Get80(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/productionParameters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/productionResourceUtilization
     */
    public function getServiceSwaggerV1Get81(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/productionResourceUtilization";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/productionRoutes
     */
    public function getServiceSwaggerV1Get82(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/productionRoutes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/productions
     */
    public function getServiceSwaggerV1Get83(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/productions";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/projects
     */
    public function getServiceSwaggerV1Get84(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/projects";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/purchaseCampaigns
     */
    public function getServiceSwaggerV1Get85(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/purchaseCampaigns";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/purchaseConditionsForSlipLines
     */
    public function getServiceSwaggerV1Get86(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/purchaseConditionsForSlipLines";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/purchaseConditionsForSlips
     */
    public function getServiceSwaggerV1Get87(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/purchaseConditionsForSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/purchasedItemPrices
     */
    public function getServiceSwaggerV1Get88(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/purchasedItemPrices";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/purchaseDiscounts
     */
    public function getServiceSwaggerV1Get89(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/purchaseDiscounts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/purchaseDispatches
     */
    public function getServiceSwaggerV1Get90(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/purchaseDispatches";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/purchasedServicePrices
     */
    public function getServiceSwaggerV1Get91(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/purchasedServicePrices";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/purchasedServices
     */
    public function getServiceSwaggerV1Get92(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/purchasedServices";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/purchaseExpenses
     */
    public function getServiceSwaggerV1Get93(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/purchaseExpenses";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/purchaseInvoices
     */
    public function getServiceSwaggerV1Get94(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/purchaseInvoices";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/purchaseOrders
     */
    public function getServiceSwaggerV1Get95(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/purchaseOrders";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/purchasePromotions
     */
    public function getServiceSwaggerV1Get96(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/purchasePromotions";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/purchaseProposalContracts
     */
    public function getServiceSwaggerV1Get97(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/purchaseProposalContracts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/purchaseProposalOffers
     */
    public function getServiceSwaggerV1Get98(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/purchaseProposalOffers";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/purchaseProposalOrders
     */
    public function getServiceSwaggerV1Get99(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/purchaseProposalOrders";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/QCCriteriaAssignments
     */
    public function getServiceSwaggerV1Get100(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/QCCriteriaAssignments";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/QCCriteriaSets
     */
    public function getServiceSwaggerV1Get101(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/QCCriteriaSets";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/queries
     */
    public function getServiceSwaggerV1Get102(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/queries";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/quickProductionSlips
     */
    public function getServiceSwaggerV1Get103(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/quickProductionSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/repaymentPlans
     */
    public function getServiceSwaggerV1Get104(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/repaymentPlans";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/safeDeposits
     */
    public function getServiceSwaggerV1Get105(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/safeDeposits";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/safeDepositSlips
     */
    public function getServiceSwaggerV1Get106(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/safeDepositSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/salesActivities
     */
    public function getServiceSwaggerV1Get107(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/salesActivities";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/salesCampaigns
     */
    public function getServiceSwaggerV1Get108(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/salesCampaigns";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/salesCategories
     */
    public function getServiceSwaggerV1Get109(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/salesCategories";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/salesConditionsForSlipLines
     */
    public function getServiceSwaggerV1Get110(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/salesConditionsForSlipLines";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/salesConditionsForSlips
     */
    public function getServiceSwaggerV1Get111(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/salesConditionsForSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/salesContracts
     */
    public function getServiceSwaggerV1Get112(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/salesContracts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/salesDiscounts
     */
    public function getServiceSwaggerV1Get113(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/salesDiscounts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/salesDispatches
     */
    public function getServiceSwaggerV1Get114(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/salesDispatches";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/salesExpenses
     */
    public function getServiceSwaggerV1Get115(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/salesExpenses";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/salesInvoices
     */
    public function getServiceSwaggerV1Get116(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/salesInvoices";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/salesItemPrices
     */
    public function getServiceSwaggerV1Get117(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/salesItemPrices";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/salesmanDestinations
     */
    public function getServiceSwaggerV1Get118(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/salesmanDestinations";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/salesmanPositionCodes
     */
    public function getServiceSwaggerV1Get119(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/salesmanPositionCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/salesmanRoutes
     */
    public function getServiceSwaggerV1Get120(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/salesmanRoutes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/salesmen
     */
    public function getServiceSwaggerV1Get121(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/salesmen";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/salesOffers
     */
    public function getServiceSwaggerV1Get122(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/salesOffers";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/salesOrders
     */
    public function getServiceSwaggerV1Get123(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/salesOrders";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/salesPromotions
     */
    public function getServiceSwaggerV1Get124(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/salesPromotions";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/salesProvisionDistributionSlips
     */
    public function getServiceSwaggerV1Get125(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/salesProvisionDistributionSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/salesServicePrices
     */
    public function getServiceSwaggerV1Get126(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/salesServicePrices";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/serialAndLotNumbers
     */
    public function getServiceSwaggerV1Get127(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/serialAndLotNumbers";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/describe
     */
    public function getV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/describe";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/help
     */
    public function getServiceSwaggerV1Get128(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/help";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/shiftAssignments
     */
    public function getServiceSwaggerV1Get129(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/shiftAssignments";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/shifts
     */
    public function getServiceSwaggerV1Get130(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/shifts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/soldServices
     */
    public function getServiceSwaggerV1Get131(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/soldServices";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/specialCodes
     */
    public function getServiceSwaggerV1Get132(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/specialCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/standardCostPeriods
     */
    public function getServiceSwaggerV1Get133(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/standardCostPeriods";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/stopCauses
     */
    public function getServiceSwaggerV1Get134(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/stopCauses";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/sys
     */
    public function sys_GetServiceSwagger(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/sys";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/towns
     */
    public function getServiceSwaggerV1Get135(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/towns";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/transaction
     */
    public function transaction_V1_GetServiceSwagger(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/transaction";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/unitSets
     */
    public function getServiceSwaggerV1Get136(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/unitSets";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/variants
     */
    public function getServiceSwaggerV1Get137(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/variants";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/vehicles
     */
    public function getServiceSwaggerV1Get138(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/vehicles";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/workflowDefinitions
     */
    public function getServiceSwaggerV1Get139(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/workflowDefinitions";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/workflowRoles
     */
    public function getServiceSwaggerV1Get140(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/workflowRoles";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/workstationCosts
     */
    public function getServiceSwaggerV1Get141(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/workstationCosts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/workstationGroups
     */
    public function getServiceSwaggerV1Get142(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/workstationGroups";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/workstations
     */
    public function getServiceSwaggerV1Get143(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/workstations";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /services/workstationStandardCosts
     */
    public function getServiceSwaggerV1Get144(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/services/workstationStandardCosts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Retrieves analytics data for Services entities.
     */
    public function getAnalytics()
    {
        return ['total' => $this->getCount()];
    }

    /**
     * Retrieves the total count of Services entities.
     */
    public function getCount()
    {
        $resp = $this->getAll(['count' => true]);
        return (int) ($resp->totalCount ?? 0);
    }

    /**
     * Retrieves database column information for the Services entity.
     */
    public function getDbColumns()
    {
        $path = "{$this->endpoint}/dbcolumns";
        return $this->request('GET', $path);
    }

    /**
     * Enables change tracking for the Services entity.
     */
    public function track()
    {
        $path = "{$this->endpoint}/track";
        return $this->request('GET', $path);
    }

    /**
     * Disables change tracking for the Services entity.
     */
    public function untrack()
    {
        $path = "{$this->endpoint}/untrack";
        return $this->request('GET', $path);
    }

    /**
     * Checks the change tracking status for the Services entity.
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
