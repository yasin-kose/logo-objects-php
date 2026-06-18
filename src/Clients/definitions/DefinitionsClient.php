<?php

declare(strict_types=1);

namespace LogoObjects\Clients\definitions;

use LogoObjects\Http\BaseApiClient;
use LogoObjects\Types\ApiResponse;
use LogoObjects\Utils\QueryBuilder;

/**
 * DefinitionsClient - /definitions endpoint'i icin CRUD ve ozel islemler.
 */
class DefinitionsClient extends BaseApiClient
{
    /** @var string */
    protected $endpoint = '/definitions';

    /**
     * Corresponds to GET /definitions/additionalTaxes
     */
    public function describeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/additionalTaxes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/ArpGroupAssignments
     */
    public function describeV1Get(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/ArpGroupAssignments";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/ArpMLDescriptons
     */
    public function describeV1Get2(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/ArpMLDescriptons";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/Arps
     */
    public function describeV1Get3(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/Arps";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/ArpShipmentLocations
     */
    public function describeV1Get4(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/ArpShipmentLocations";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/ArpSlips
     */
    public function describeV1Get5(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/ArpSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/authorizationCodes
     */
    public function describeV1Get6(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/authorizationCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/bankAccounts
     */
    public function describeV1Get7(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/bankAccounts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/bankCredits
     */
    public function describeV1Get8(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/bankCredits";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/bankMLDescriptions
     */
    public function describeV1Get9(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/bankMLDescriptions";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/banks
     */
    public function describeV1Get10(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/banks";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/bankSlips
     */
    public function describeV1Get11(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/bankSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/Boms
     */
    public function describeV1Get12(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/Boms";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/BomStandardCosts
     */
    public function describeV1Get13(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/BomStandardCosts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/characteristics
     */
    public function describeV1Get14(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/characteristics";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/characteristicSets
     */
    public function describeV1Get15(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/characteristicSets";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/chequeAndPnoteRolls
     */
    public function describeV1Get16(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/chequeAndPnoteRolls";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/chequeAndPnotes
     */
    public function describeV1Get17(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/chequeAndPnotes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/cities
     */
    public function describeV1Get18(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/cities";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/collateralRolls
     */
    public function describeV1Get19(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/collateralRolls";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/contacts
     */
    public function describeV1Get20(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/contacts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/costDistributionSlips
     */
    public function describeV1Get21(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/costDistributionSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/countries
     */
    public function describeV1Get22(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/countries";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/customerMLDescriptions
     */
    public function describeV1Get23(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/customerMLDescriptions";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/customers
     */
    public function describeV1Get24(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/customers";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/customersOfSalesmen
     */
    public function describeV1Get25(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/customersOfSalesmen";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/customsOffices
     */
    public function describeV1Get26(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/customsOffices";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/deliveryCodes
     */
    public function describeV1Get27(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/deliveryCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/demandPeggings
     */
    public function describeV1Get28(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/demandPeggings";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/demandSlips
     */
    public function describeV1Get29(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/demandSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/distributionOrders
     */
    public function describeV1Get30(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/distributionOrders";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/distributionRoutes
     */
    public function describeV1Get31(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/distributionRoutes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/distributionTemplates
     */
    public function describeV1Get32(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/distributionTemplates";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/districts
     */
    public function describeV1Get33(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/districts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/employeeCosts
     */
    public function describeV1Get34(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/employeeCosts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/employeeGroups
     */
    public function describeV1Get35(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/employeeGroups";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/employees
     */
    public function describeV1Get36(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/employees";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/employeeStandardCosts
     */
    public function describeV1Get37(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/employeeStandardCosts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/engineeringChanges
     */
    public function describeV1Get38(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/engineeringChanges";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/exportCreditLetters
     */
    public function describeV1Get39(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/exportCreditLetters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/exportCredits
     */
    public function describeV1Get40(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/exportCredits";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/exportMovementSlips
     */
    public function describeV1Get41(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/exportMovementSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/exportNationalizationSlips
     */
    public function describeV1Get42(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/exportNationalizationSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/exportOperationSlips
     */
    public function describeV1Get43(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/exportOperationSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/exportTypedPurchaseInvoices
     */
    public function describeV1Get44(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/exportTypedPurchaseInvoices";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/exportTypedSalesInvoices
     */
    public function describeV1Get45(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/exportTypedSalesInvoices";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/extendedFieldCategories
     */
    public function describeV1Get46(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/extendedFieldCategories";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/extendedFieldDefinitions
     */
    public function describeV1Get47(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/extendedFieldDefinitions";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/extendedFields
     */
    public function describeV1Get48(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/extendedFields";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/FAAssignmentSlips
     */
    public function describeV1Get49(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/FAAssignmentSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/FARegistries
     */
    public function describeV1Get50(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/FARegistries";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/freeZones
     */
    public function describeV1Get51(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/freeZones";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/GLAccountMLDescriptions
     */
    public function describeV1Get52(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/GLAccountMLDescriptions";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/GLAccounts
     */
    public function describeV1Get53(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/GLAccounts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/GLSlips
     */
    public function describeV1Get54(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/GLSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/groupCodes
     */
    public function describeV1Get55(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/groupCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/importCreditLetters
     */
    public function describeV1Get56(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/importCreditLetters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/importDistributionSlips
     */
    public function describeV1Get57(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/importDistributionSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/importOperationSlips
     */
    public function describeV1Get58(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/importOperationSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/inwardProcessingPermits
     */
    public function describeV1Get59(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/inwardProcessingPermits";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/itemAlternatives
     */
    public function describeV1Get60(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/itemAlternatives";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/itemBoms
     */
    public function describeV1Get61(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/itemBoms";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/itemBrands
     */
    public function describeV1Get62(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/itemBrands";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/itemCharacteristics
     */
    public function describeV1Get63(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/itemCharacteristics";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/itemClassAssignments
     */
    public function describeV1Get64(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/itemClassAssignments";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/itemMLDescriptions
     */
    public function describeV1Get65(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/itemMLDescriptions";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/items
     */
    public function describeV1Get66(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/items";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/itemSlips
     */
    public function describeV1Get67(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/itemSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/itemStandardCosts
     */
    public function describeV1Get68(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/itemStandardCosts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/locationCodes
     */
    public function describeV1Get69(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/locationCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_Datas
     */
    public function mtDatasDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_Datas";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_CAPI
     */
    public function mtCapiDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_CAPI";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_Firms
     */
    public function mtFirmsDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_Firms";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_Users
     */
    public function mtUsersDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_Users";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_Terminals
     */
    public function mtTerminalsDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_Terminals";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_Currencies
     */
    public function mtCurrenciesDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_Currencies";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_Roles
     */
    public function mtRolesDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_Roles";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_FirmParameters
     */
    public function mtFirmparametersDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_FirmParameters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_TradeGroups
     */
    public function mtTradegroupsDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_TradeGroups";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_ERPApplication
     */
    public function mtErpapplicationDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_ERPApplication";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_Data
     */
    public function mtDataDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_Data";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_Firm
     */
    public function mtFirmDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_Firm";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_User
     */
    public function mtUserDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_User";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_Terminal
     */
    public function mtTerminalDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_Terminal";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_Currency
     */
    public function mtCurrencyDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_Currency";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_Role
     */
    public function mtRoleDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_Role";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_TradeGroup
     */
    public function mtTradegroupDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_TradeGroup";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_DataFields
     */
    public function mtDatafieldsDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_DataFields";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_DataObjectType
     */
    public function mtDataobjecttypeDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_DataObjectType";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_ValidateErrors
     */
    public function mtValidateerrorsDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_ValidateErrors";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_DataExtensions
     */
    public function mtDataextensionsDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_DataExtensions";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_Departments
     */
    public function mtDepartmentsDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_Departments";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_Divisions
     */
    public function mtDivisionsDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_Divisions";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_WareHouses
     */
    public function mtWarehousesDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_WareHouses";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_Factories
     */
    public function mtFactoriesDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_Factories";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_Periods
     */
    public function mtPeriodsDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_Periods";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_Objects
     */
    public function mtObjectsDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_Objects";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_DataField
     */
    public function mtDatafieldDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_DataField";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_ValidateError
     */
    public function mtValidateerrorDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_ValidateError";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_DataExtension
     */
    public function mtDataextensionDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_DataExtension";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_Department
     */
    public function mtDepartmentDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_Department";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_Division
     */
    public function mtDivisionDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_Division";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_WareHouse
     */
    public function mtWarehouseDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_WareHouse";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_Factory
     */
    public function mtFactoryDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_Factory";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_Period
     */
    public function mtPeriodDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_Period";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_ObjItem
     */
    public function mtObjitemDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_ObjItem";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_FieldType
     */
    public function mtFieldtypeDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_FieldType";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_Lines
     */
    public function mtLinesDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_Lines";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_ExtensionFields
     */
    public function mtExtensionfieldsDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_ExtensionFields";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_FactoryDivisions
     */
    public function mtFactorydivisionsDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_FactoryDivisions";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_ExtensionField
     */
    public function mtExtensionfieldDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_ExtensionField";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/MT_FactoryDivision
     */
    public function mtFactorydivisionDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/MT_FactoryDivision";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/ResultData
     */
    public function resultData_DescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/ResultData";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/ResourceApiRepository
     */
    public function resourceApiRepository_DescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/ResourceApiRepository";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/operations
     */
    public function describeV1Get70(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/operations";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/opportunities
     */
    public function describeV1Get71(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/opportunities";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/overheadAccounts
     */
    public function describeV1Get72(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/overheadAccounts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/paymentDifferenceInvoices
     */
    public function describeV1Get73(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/paymentDifferenceInvoices";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/paymentPlanGroupCodes
     */
    public function describeV1Get74(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/paymentPlanGroupCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/paymentPlans
     */
    public function describeV1Get75(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/paymentPlans";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/postCodes
     */
    public function describeV1Get76(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/postCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/productionExceptions
     */
    public function describeV1Get77(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/productionExceptions";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/productionLines
     */
    public function describeV1Get78(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/productionLines";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/productionParameters
     */
    public function describeV1Get79(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/productionParameters";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/productionResourceUtilization
     */
    public function describeV1Get80(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/productionResourceUtilization";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/productionRoutes
     */
    public function describeV1Get81(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/productionRoutes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/PT_QuickProdSlipRefLists
     */
    public function ptQuickprodslipreflistsDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/PT_QuickProdSlipRefLists";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/PT_RealizedSlips
     */
    public function ptRealizedslipsDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/PT_RealizedSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/PT_ProdParams
     */
    public function ptProdparamsDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/PT_ProdParams";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/PT_MeetTypeList
     */
    public function ptMeettypelistDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/PT_MeetTypeList";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/PT_PrdItmClsLines
     */
    public function ptPrditmclslinesDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/PT_PrdItmClsLines";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/PT_PrdDispLines
     */
    public function ptPrddisplinesDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/PT_PrdDispLines";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/PT_FastRealizeSlipRefLists
     */
    public function ptFastrealizeslipreflistsDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/PT_FastRealizeSlipRefLists";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/PT_WorkOrdLists
     */
    public function ptWorkordlistsDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/PT_WorkOrdLists";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/PT_ProdPlnRltnLists
     */
    public function ptProdplnrltnlistsDescribeV1(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/PT_ProdPlnRltnLists";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/projects
     */
    public function describeV1Get82(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/projects";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/purchaseCampaigns
     */
    public function describeV1Get83(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/purchaseCampaigns";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/purchaseConditionsForSlipLines
     */
    public function describeV1Get84(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/purchaseConditionsForSlipLines";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/purchaseConditionsForSlips
     */
    public function describeV1Get85(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/purchaseConditionsForSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/purchasedItemPrices
     */
    public function describeV1Get86(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/purchasedItemPrices";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/purchaseDiscounts
     */
    public function describeV1Get87(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/purchaseDiscounts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/purchaseDispatches
     */
    public function describeV1Get88(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/purchaseDispatches";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/purchasedServicePrices
     */
    public function describeV1Get89(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/purchasedServicePrices";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/purchasedServices
     */
    public function describeV1Get90(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/purchasedServices";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/purchaseExpenses
     */
    public function describeV1Get91(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/purchaseExpenses";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/purchaseInvoices
     */
    public function describeV1Get92(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/purchaseInvoices";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/purchaseOrders
     */
    public function describeV1Get93(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/purchaseOrders";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/purchasePromotions
     */
    public function describeV1Get94(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/purchasePromotions";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/purchaseProposalContracts
     */
    public function describeV1Get95(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/purchaseProposalContracts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/purchaseProposalOffers
     */
    public function describeV1Get96(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/purchaseProposalOffers";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/purchaseProposalOrders
     */
    public function describeV1Get97(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/purchaseProposalOrders";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/QCCriteriaAssignments
     */
    public function describeV1Get98(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/QCCriteriaAssignments";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/QCCriteriaSets
     */
    public function describeV1Get99(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/QCCriteriaSets";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/quickProductionSlips
     */
    public function describeV1Get100(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/quickProductionSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/repaymentPlans
     */
    public function describeV1Get101(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/repaymentPlans";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/safeDeposits
     */
    public function describeV1Get102(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/safeDeposits";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/safeDepositSlips
     */
    public function describeV1Get103(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/safeDepositSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/salesActivities
     */
    public function describeV1Get104(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/salesActivities";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/salesCampaigns
     */
    public function describeV1Get105(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/salesCampaigns";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/salesCategories
     */
    public function describeV1Get106(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/salesCategories";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/salesConditionsForSlipLines
     */
    public function describeV1Get107(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/salesConditionsForSlipLines";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/salesConditionsForSlips
     */
    public function describeV1Get108(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/salesConditionsForSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/salesContracts
     */
    public function describeV1Get109(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/salesContracts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/salesDiscounts
     */
    public function describeV1Get110(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/salesDiscounts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/salesDispatches
     */
    public function describeV1Get111(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/salesDispatches";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/salesExpenses
     */
    public function describeV1Get112(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/salesExpenses";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/salesInvoices
     */
    public function describeV1Get113(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/salesInvoices";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/salesItemPrices
     */
    public function describeV1Get114(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/salesItemPrices";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/salesmanDestinations
     */
    public function describeV1Get115(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/salesmanDestinations";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/salesmanPositionCodes
     */
    public function describeV1Get116(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/salesmanPositionCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/salesmanRoutes
     */
    public function describeV1Get117(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/salesmanRoutes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/salesmen
     */
    public function describeV1Get118(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/salesmen";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/salesOffers
     */
    public function describeV1Get119(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/salesOffers";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/salesOrders
     */
    public function describeV1Get120(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/salesOrders";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/salesPromotions
     */
    public function describeV1Get121(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/salesPromotions";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/salesProvisionDistributionSlips
     */
    public function describeV1Get122(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/salesProvisionDistributionSlips";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/salesServicePrices
     */
    public function describeV1Get123(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/salesServicePrices";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/serialAndLotNumbers
     */
    public function describeV1Get124(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/serialAndLotNumbers";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/shiftAssignments
     */
    public function describeV1Get125(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/shiftAssignments";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/shifts
     */
    public function describeV1Get126(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/shifts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/soldServices
     */
    public function describeV1Get127(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/soldServices";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/specialCodes
     */
    public function describeV1Get128(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/specialCodes";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/standardCostPeriods
     */
    public function describeV1Get129(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/standardCostPeriods";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/stopCauses
     */
    public function describeV1Get130(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/stopCauses";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/towns
     */
    public function describeV1Get131(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/towns";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/unitSets
     */
    public function describeV1Get132(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/unitSets";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/variants
     */
    public function describeV1Get133(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/variants";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/vehicles
     */
    public function describeV1Get134(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/vehicles";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/workflowDefinitions
     */
    public function describeV1Get135(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/workflowDefinitions";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/workflowRoles
     */
    public function describeV1Get136(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/workflowRoles";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/workstationCosts
     */
    public function describeV1Get137(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/workstationCosts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/workstationGroups
     */
    public function describeV1Get138(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/workstationGroups";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/workstations
     */
    public function describeV1Get139(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/workstations";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /definitions/workstationStandardCosts
     */
    public function describeV1Get140(array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "/definitions/workstationStandardCosts";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return $this->request('GET', $path);
    }

    /**
     * Retrieves database column information for the Definitions entity.
     */
    public function getDbColumns()
    {
        $path = "{$this->endpoint}/dbcolumns";
        return $this->request('GET', $path);
    }

    /**
     * Enables change tracking for the Definitions entity.
     */
    public function track()
    {
        $path = "{$this->endpoint}/track";
        return $this->request('GET', $path);
    }

    /**
     * Disables change tracking for the Definitions entity.
     */
    public function untrack()
    {
        $path = "{$this->endpoint}/untrack";
        return $this->request('GET', $path);
    }

    /**
     * Checks the change tracking status for the Definitions entity.
     */
    public function checkTrackStatus()
    {
        $path = "{$this->endpoint}/checktrack";
        return $this->request('GET', $path);
    }
}
