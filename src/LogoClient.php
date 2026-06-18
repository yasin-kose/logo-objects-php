<?php

declare(strict_types=1);

namespace LogoObjects;

use LogoObjects\Http\BaseApiClient;

/**
 * Logo Objects REST Service ana istemcisi.
 * Tum endpoint client'larina property olarak erisim saglar:
 *
 *   $logo = new LogoClient([...]);
 *   $logo->salesOrders->getAll(['limit' => 10]);
 *   $logo->ArpSlips->create([...]);
 */
class LogoClient extends BaseApiClient
{
    /** @var \LogoObjects\Clients\additionalTaxes\AdditionalTaxesClient */
    public $additionalTaxes;
    /** @var \LogoObjects\Clients\ArpGroupAssignments\ArpGroupAssignmentsClient */
    public $ArpGroupAssignments;
    /** @var \LogoObjects\Clients\ArpMLDescriptons\ArpMLDescriptonsClient */
    public $ArpMLDescriptons;
    /** @var \LogoObjects\Clients\Arps\ArpsClient */
    public $Arps;
    /** @var \LogoObjects\Clients\ArpShipmentLocations\ArpShipmentLocationsClient */
    public $ArpShipmentLocations;
    /** @var \LogoObjects\Clients\ArpSlips\ArpSlipsClient */
    public $ArpSlips;
    /** @var \LogoObjects\Clients\authorizationCodes\AuthorizationCodesClient */
    public $authorizationCodes;
    /** @var \LogoObjects\Clients\bankAccounts\BankAccountsClient */
    public $bankAccounts;
    /** @var \LogoObjects\Clients\bankCredits\BankCreditsClient */
    public $bankCredits;
    /** @var \LogoObjects\Clients\bankMLDescriptions\BankMLDescriptionsClient */
    public $bankMLDescriptions;
    /** @var \LogoObjects\Clients\banks\BanksClient */
    public $banks;
    /** @var \LogoObjects\Clients\bankSlips\BankSlipsClient */
    public $bankSlips;
    /** @var \LogoObjects\Clients\Boms\BomsClient */
    public $Boms;
    /** @var \LogoObjects\Clients\BomStandardCosts\BomStandardCostsClient */
    public $BomStandardCosts;
    /** @var \LogoObjects\Clients\CAPI\CAPIClient */
    public $CAPI;
    /** @var \LogoObjects\Clients\characteristics\CharacteristicsClient */
    public $characteristics;
    /** @var \LogoObjects\Clients\characteristicSets\CharacteristicSetsClient */
    public $characteristicSets;
    /** @var \LogoObjects\Clients\chequeAndPnoteRolls\ChequeAndPnoteRollsClient */
    public $chequeAndPnoteRolls;
    /** @var \LogoObjects\Clients\chequeAndPnotes\ChequeAndPnotesClient */
    public $chequeAndPnotes;
    /** @var \LogoObjects\Clients\cities\CitiesClient */
    public $cities;
    /** @var \LogoObjects\Clients\collateralRolls\CollateralRollsClient */
    public $collateralRolls;
    /** @var \LogoObjects\Clients\contacts\ContactsClient */
    public $contacts;
    /** @var \LogoObjects\Clients\costDistributionSlips\CostDistributionSlipsClient */
    public $costDistributionSlips;
    /** @var \LogoObjects\Clients\countries\CountriesClient */
    public $countries;
    /** @var \LogoObjects\Clients\customerMLDescriptions\CustomerMLDescriptionsClient */
    public $customerMLDescriptions;
    /** @var \LogoObjects\Clients\customers\CustomersClient */
    public $customers;
    /** @var \LogoObjects\Clients\customersOfSalesmen\CustomersOfSalesmenClient */
    public $customersOfSalesmen;
    /** @var \LogoObjects\Clients\customsOffices\CustomsOfficesClient */
    public $customsOffices;
    /** @var \LogoObjects\Clients\dbinfo\DbinfoClient */
    public $dbinfo;
    /** @var \LogoObjects\Clients\definitions\DefinitionsClient */
    public $definitions;
    /** @var \LogoObjects\Clients\deliveryCodes\DeliveryCodesClient */
    public $deliveryCodes;
    /** @var \LogoObjects\Clients\demandPeggings\DemandPeggingsClient */
    public $demandPeggings;
    /** @var \LogoObjects\Clients\demandSlips\DemandSlipsClient */
    public $demandSlips;
    /** @var \LogoObjects\Clients\distributionOrders\DistributionOrdersClient */
    public $distributionOrders;
    /** @var \LogoObjects\Clients\distributionRoutes\DistributionRoutesClient */
    public $distributionRoutes;
    /** @var \LogoObjects\Clients\distributionTemplates\DistributionTemplatesClient */
    public $distributionTemplates;
    /** @var \LogoObjects\Clients\districts\DistrictsClient */
    public $districts;
    /** @var \LogoObjects\Clients\employeeCosts\EmployeeCostsClient */
    public $employeeCosts;
    /** @var \LogoObjects\Clients\employeeGroups\EmployeeGroupsClient */
    public $employeeGroups;
    /** @var \LogoObjects\Clients\employees\EmployeesClient */
    public $employees;
    /** @var \LogoObjects\Clients\employeeStandardCosts\EmployeeStandardCostsClient */
    public $employeeStandardCosts;
    /** @var \LogoObjects\Clients\engineeringChanges\EngineeringChangesClient */
    public $engineeringChanges;
    /** @var \LogoObjects\Clients\exportCreditLetters\ExportCreditLettersClient */
    public $exportCreditLetters;
    /** @var \LogoObjects\Clients\exportCredits\ExportCreditsClient */
    public $exportCredits;
    /** @var \LogoObjects\Clients\exportMovementSlips\ExportMovementSlipsClient */
    public $exportMovementSlips;
    /** @var \LogoObjects\Clients\exportNationalizationSlips\ExportNationalizationSlipsClient */
    public $exportNationalizationSlips;
    /** @var \LogoObjects\Clients\exportOperationSlips\ExportOperationSlipsClient */
    public $exportOperationSlips;
    /** @var \LogoObjects\Clients\exportTypedPurchaseInvoices\ExportTypedPurchaseInvoicesClient */
    public $exportTypedPurchaseInvoices;
    /** @var \LogoObjects\Clients\exportTypedSalesInvoices\ExportTypedSalesInvoicesClient */
    public $exportTypedSalesInvoices;
    /** @var \LogoObjects\Clients\extendedFieldCategories\ExtendedFieldCategoriesClient */
    public $extendedFieldCategories;
    /** @var \LogoObjects\Clients\extendedFieldDefinitions\ExtendedFieldDefinitionsClient */
    public $extendedFieldDefinitions;
    /** @var \LogoObjects\Clients\extendedFields\ExtendedFieldsClient */
    public $extendedFields;
    /** @var \LogoObjects\Clients\FAAssignmentSlips\FAAssignmentSlipsClient */
    public $FAAssignmentSlips;
    /** @var \LogoObjects\Clients\FARegistries\FARegistriesClient */
    public $FARegistries;
    /** @var \LogoObjects\Clients\Firmdocs\FirmdocsClient */
    public $Firmdocs;
    /** @var \LogoObjects\Clients\freeZones\FreeZonesClient */
    public $freeZones;
    /** @var \LogoObjects\Clients\GLAccountMLDescriptions\GLAccountMLDescriptionsClient */
    public $GLAccountMLDescriptions;
    /** @var \LogoObjects\Clients\GLAccounts\GLAccountsClient */
    public $GLAccounts;
    /** @var \LogoObjects\Clients\GLSlips\GLSlipsClient */
    public $GLSlips;
    /** @var \LogoObjects\Clients\groupCodes\GroupCodesClient */
    public $groupCodes;
    /** @var \LogoObjects\Clients\importCreditLetters\ImportCreditLettersClient */
    public $importCreditLetters;
    /** @var \LogoObjects\Clients\importDistributionSlips\ImportDistributionSlipsClient */
    public $importDistributionSlips;
    /** @var \LogoObjects\Clients\importOperationSlips\ImportOperationSlipsClient */
    public $importOperationSlips;
    /** @var \LogoObjects\Clients\inwardProcessingPermits\InwardProcessingPermitsClient */
    public $inwardProcessingPermits;
    /** @var \LogoObjects\Clients\istokenvalid\IstokenvalidClient */
    public $istokenvalid;
    /** @var \LogoObjects\Clients\itemAlternatives\ItemAlternativesClient */
    public $itemAlternatives;
    /** @var \LogoObjects\Clients\itemBoms\ItemBomsClient */
    public $itemBoms;
    /** @var \LogoObjects\Clients\itemBrands\ItemBrandsClient */
    public $itemBrands;
    /** @var \LogoObjects\Clients\itemCharacteristics\ItemCharacteristicsClient */
    public $itemCharacteristics;
    /** @var \LogoObjects\Clients\itemClassAssignments\ItemClassAssignmentsClient */
    public $itemClassAssignments;
    /** @var \LogoObjects\Clients\itemMLDescriptions\ItemMLDescriptionsClient */
    public $itemMLDescriptions;
    /** @var \LogoObjects\Clients\items\ItemsClient */
    public $items;
    /** @var \LogoObjects\Clients\itemSlips\ItemSlipsClient */
    public $itemSlips;
    /** @var \LogoObjects\Clients\itemStandardCosts\ItemStandardCostsClient */
    public $itemStandardCosts;
    /** @var \LogoObjects\Clients\licenses\LicensesClient */
    public $licenses;
    /** @var \LogoObjects\Clients\locationCodes\LocationCodesClient */
    public $locationCodes;
    /** @var \LogoObjects\Clients\methods\MethodsClient */
    public $methods;
    /** @var \LogoObjects\Clients\operations\OperationsClient */
    public $operations;
    /** @var \LogoObjects\Clients\opportunities\OpportunitiesClient */
    public $opportunities;
    /** @var \LogoObjects\Clients\overheadAccounts\OverheadAccountsClient */
    public $overheadAccounts;
    /** @var \LogoObjects\Clients\paymentDifferenceInvoices\PaymentDifferenceInvoicesClient */
    public $paymentDifferenceInvoices;
    /** @var \LogoObjects\Clients\paymentPlanGroupCodes\PaymentPlanGroupCodesClient */
    public $paymentPlanGroupCodes;
    /** @var \LogoObjects\Clients\paymentPlans\PaymentPlansClient */
    public $paymentPlans;
    /** @var \LogoObjects\Clients\ping\PingClient */
    public $ping;
    /** @var \LogoObjects\Clients\postCodes\PostCodesClient */
    public $postCodes;
    /** @var \LogoObjects\Clients\productionExceptions\ProductionExceptionsClient */
    public $productionExceptions;
    /** @var \LogoObjects\Clients\productionLines\ProductionLinesClient */
    public $productionLines;
    /** @var \LogoObjects\Clients\productionParameters\ProductionParametersClient */
    public $productionParameters;
    /** @var \LogoObjects\Clients\productionResourceUtilization\ProductionResourceUtilizationClient */
    public $productionResourceUtilization;
    /** @var \LogoObjects\Clients\productionRoutes\ProductionRoutesClient */
    public $productionRoutes;
    /** @var \LogoObjects\Clients\productions\ProductionsClient */
    public $productions;
    /** @var \LogoObjects\Clients\projects\ProjectsClient */
    public $projects;
    /** @var \LogoObjects\Clients\purchaseCampaigns\PurchaseCampaignsClient */
    public $purchaseCampaigns;
    /** @var \LogoObjects\Clients\purchaseConditionsForSlipLines\PurchaseConditionsForSlipLinesClient */
    public $purchaseConditionsForSlipLines;
    /** @var \LogoObjects\Clients\purchaseConditionsForSlips\PurchaseConditionsForSlipsClient */
    public $purchaseConditionsForSlips;
    /** @var \LogoObjects\Clients\purchaseDiscounts\PurchaseDiscountsClient */
    public $purchaseDiscounts;
    /** @var \LogoObjects\Clients\purchaseDispatches\PurchaseDispatchesClient */
    public $purchaseDispatches;
    /** @var \LogoObjects\Clients\purchasedItemPrices\PurchasedItemPricesClient */
    public $purchasedItemPrices;
    /** @var \LogoObjects\Clients\purchasedServicePrices\PurchasedServicePricesClient */
    public $purchasedServicePrices;
    /** @var \LogoObjects\Clients\purchasedServices\PurchasedServicesClient */
    public $purchasedServices;
    /** @var \LogoObjects\Clients\purchaseExpenses\PurchaseExpensesClient */
    public $purchaseExpenses;
    /** @var \LogoObjects\Clients\purchaseInvoices\PurchaseInvoicesClient */
    public $purchaseInvoices;
    /** @var \LogoObjects\Clients\purchaseOrders\PurchaseOrdersClient */
    public $purchaseOrders;
    /** @var \LogoObjects\Clients\purchasePromotions\PurchasePromotionsClient */
    public $purchasePromotions;
    /** @var \LogoObjects\Clients\purchaseProposalContracts\PurchaseProposalContractsClient */
    public $purchaseProposalContracts;
    /** @var \LogoObjects\Clients\purchaseProposalOffers\PurchaseProposalOffersClient */
    public $purchaseProposalOffers;
    /** @var \LogoObjects\Clients\purchaseProposalOrders\PurchaseProposalOrdersClient */
    public $purchaseProposalOrders;
    /** @var \LogoObjects\Clients\QCCriteriaAssignments\QCCriteriaAssignmentsClient */
    public $QCCriteriaAssignments;
    /** @var \LogoObjects\Clients\QCCriteriaSets\QCCriteriaSetsClient */
    public $QCCriteriaSets;
    /** @var \LogoObjects\Clients\Queries\QueriesClient */
    public $Queries;
    /** @var \LogoObjects\Clients\quickProductionSlips\QuickProductionSlipsClient */
    public $quickProductionSlips;
    /** @var \LogoObjects\Clients\repaymentPlans\RepaymentPlansClient */
    public $repaymentPlans;
    /** @var \LogoObjects\Clients\revoke\RevokeClient */
    public $revoke;
    /** @var \LogoObjects\Clients\safeDeposits\SafeDepositsClient */
    public $safeDeposits;
    /** @var \LogoObjects\Clients\safeDepositSlips\SafeDepositSlipsClient */
    public $safeDepositSlips;
    /** @var \LogoObjects\Clients\salesActivities\SalesActivitiesClient */
    public $salesActivities;
    /** @var \LogoObjects\Clients\salesCampaigns\SalesCampaignsClient */
    public $salesCampaigns;
    /** @var \LogoObjects\Clients\salesCategories\SalesCategoriesClient */
    public $salesCategories;
    /** @var \LogoObjects\Clients\salesConditionsForSlipLines\SalesConditionsForSlipLinesClient */
    public $salesConditionsForSlipLines;
    /** @var \LogoObjects\Clients\salesConditionsForSlips\SalesConditionsForSlipsClient */
    public $salesConditionsForSlips;
    /** @var \LogoObjects\Clients\salesContracts\SalesContractsClient */
    public $salesContracts;
    /** @var \LogoObjects\Clients\salesDiscounts\SalesDiscountsClient */
    public $salesDiscounts;
    /** @var \LogoObjects\Clients\salesDispatches\SalesDispatchesClient */
    public $salesDispatches;
    /** @var \LogoObjects\Clients\salesExpenses\SalesExpensesClient */
    public $salesExpenses;
    /** @var \LogoObjects\Clients\salesInvoices\SalesInvoicesClient */
    public $salesInvoices;
    /** @var \LogoObjects\Clients\salesItemPrices\SalesItemPricesClient */
    public $salesItemPrices;
    /** @var \LogoObjects\Clients\salesmanDestinations\SalesmanDestinationsClient */
    public $salesmanDestinations;
    /** @var \LogoObjects\Clients\salesmanPositionCodes\SalesmanPositionCodesClient */
    public $salesmanPositionCodes;
    /** @var \LogoObjects\Clients\salesmanRoutes\SalesmanRoutesClient */
    public $salesmanRoutes;
    /** @var \LogoObjects\Clients\salesmen\SalesmenClient */
    public $salesmen;
    /** @var \LogoObjects\Clients\salesOffers\SalesOffersClient */
    public $salesOffers;
    /** @var \LogoObjects\Clients\salesOrders\SalesOrdersClient */
    public $salesOrders;
    /** @var \LogoObjects\Clients\salesPromotions\SalesPromotionsClient */
    public $salesPromotions;
    /** @var \LogoObjects\Clients\salesProvisionDistributionSlips\SalesProvisionDistributionSlipsClient */
    public $salesProvisionDistributionSlips;
    /** @var \LogoObjects\Clients\salesServicePrices\SalesServicePricesClient */
    public $salesServicePrices;
    /** @var \LogoObjects\Clients\serialAndLotNumbers\SerialAndLotNumbersClient */
    public $serialAndLotNumbers;
    /** @var \LogoObjects\Clients\services\ServicesClient */
    public $services;
    /** @var \LogoObjects\Clients\shiftAssignments\ShiftAssignmentsClient */
    public $shiftAssignments;
    /** @var \LogoObjects\Clients\shifts\ShiftsClient */
    public $shifts;
    /** @var \LogoObjects\Clients\soldServices\SoldServicesClient */
    public $soldServices;
    /** @var \LogoObjects\Clients\specialCodes\SpecialCodesClient */
    public $specialCodes;
    /** @var \LogoObjects\Clients\standardCostPeriods\StandardCostPeriodsClient */
    public $standardCostPeriods;
    /** @var \LogoObjects\Clients\stopCauses\StopCausesClient */
    public $stopCauses;
    /** @var \LogoObjects\Clients\sys\SysClient */
    public $sys;
    /** @var \LogoObjects\Clients\towns\TownsClient */
    public $towns;
    /** @var \LogoObjects\Clients\trackables\TrackablesClient */
    public $trackables;
    /** @var \LogoObjects\Clients\transaction\TransactionClient */
    public $transaction;
    /** @var \LogoObjects\Clients\unitSets\UnitSetsClient */
    public $unitSets;
    /** @var \LogoObjects\Clients\variants\VariantsClient */
    public $variants;
    /** @var \LogoObjects\Clients\vehicles\VehiclesClient */
    public $vehicles;
    /** @var \LogoObjects\Clients\workflowDefinitions\WorkflowDefinitionsClient */
    public $workflowDefinitions;
    /** @var \LogoObjects\Clients\workflowRoles\WorkflowRolesClient */
    public $workflowRoles;
    /** @var \LogoObjects\Clients\workstationCosts\WorkstationCostsClient */
    public $workstationCosts;
    /** @var \LogoObjects\Clients\workstationGroups\WorkstationGroupsClient */
    public $workstationGroups;
    /** @var \LogoObjects\Clients\workstations\WorkstationsClient */
    public $workstations;
    /** @var \LogoObjects\Clients\workstationStandardCosts\WorkstationStandardCostsClient */
    public $workstationStandardCosts;

    /**
     * @param array<string,mixed> $config
     */
    public function __construct(array $config)
    {
        parent::__construct($config);
        $this->additionalTaxes = new \LogoObjects\Clients\additionalTaxes\AdditionalTaxesClient($config);
        $this->ArpGroupAssignments = new \LogoObjects\Clients\ArpGroupAssignments\ArpGroupAssignmentsClient($config);
        $this->ArpMLDescriptons = new \LogoObjects\Clients\ArpMLDescriptons\ArpMLDescriptonsClient($config);
        $this->Arps = new \LogoObjects\Clients\Arps\ArpsClient($config);
        $this->ArpShipmentLocations = new \LogoObjects\Clients\ArpShipmentLocations\ArpShipmentLocationsClient($config);
        $this->ArpSlips = new \LogoObjects\Clients\ArpSlips\ArpSlipsClient($config);
        $this->authorizationCodes = new \LogoObjects\Clients\authorizationCodes\AuthorizationCodesClient($config);
        $this->bankAccounts = new \LogoObjects\Clients\bankAccounts\BankAccountsClient($config);
        $this->bankCredits = new \LogoObjects\Clients\bankCredits\BankCreditsClient($config);
        $this->bankMLDescriptions = new \LogoObjects\Clients\bankMLDescriptions\BankMLDescriptionsClient($config);
        $this->banks = new \LogoObjects\Clients\banks\BanksClient($config);
        $this->bankSlips = new \LogoObjects\Clients\bankSlips\BankSlipsClient($config);
        $this->Boms = new \LogoObjects\Clients\Boms\BomsClient($config);
        $this->BomStandardCosts = new \LogoObjects\Clients\BomStandardCosts\BomStandardCostsClient($config);
        $this->CAPI = new \LogoObjects\Clients\CAPI\CAPIClient($config);
        $this->characteristics = new \LogoObjects\Clients\characteristics\CharacteristicsClient($config);
        $this->characteristicSets = new \LogoObjects\Clients\characteristicSets\CharacteristicSetsClient($config);
        $this->chequeAndPnoteRolls = new \LogoObjects\Clients\chequeAndPnoteRolls\ChequeAndPnoteRollsClient($config);
        $this->chequeAndPnotes = new \LogoObjects\Clients\chequeAndPnotes\ChequeAndPnotesClient($config);
        $this->cities = new \LogoObjects\Clients\cities\CitiesClient($config);
        $this->collateralRolls = new \LogoObjects\Clients\collateralRolls\CollateralRollsClient($config);
        $this->contacts = new \LogoObjects\Clients\contacts\ContactsClient($config);
        $this->costDistributionSlips = new \LogoObjects\Clients\costDistributionSlips\CostDistributionSlipsClient($config);
        $this->countries = new \LogoObjects\Clients\countries\CountriesClient($config);
        $this->customerMLDescriptions = new \LogoObjects\Clients\customerMLDescriptions\CustomerMLDescriptionsClient($config);
        $this->customers = new \LogoObjects\Clients\customers\CustomersClient($config);
        $this->customersOfSalesmen = new \LogoObjects\Clients\customersOfSalesmen\CustomersOfSalesmenClient($config);
        $this->customsOffices = new \LogoObjects\Clients\customsOffices\CustomsOfficesClient($config);
        $this->dbinfo = new \LogoObjects\Clients\dbinfo\DbinfoClient($config);
        $this->definitions = new \LogoObjects\Clients\definitions\DefinitionsClient($config);
        $this->deliveryCodes = new \LogoObjects\Clients\deliveryCodes\DeliveryCodesClient($config);
        $this->demandPeggings = new \LogoObjects\Clients\demandPeggings\DemandPeggingsClient($config);
        $this->demandSlips = new \LogoObjects\Clients\demandSlips\DemandSlipsClient($config);
        $this->distributionOrders = new \LogoObjects\Clients\distributionOrders\DistributionOrdersClient($config);
        $this->distributionRoutes = new \LogoObjects\Clients\distributionRoutes\DistributionRoutesClient($config);
        $this->distributionTemplates = new \LogoObjects\Clients\distributionTemplates\DistributionTemplatesClient($config);
        $this->districts = new \LogoObjects\Clients\districts\DistrictsClient($config);
        $this->employeeCosts = new \LogoObjects\Clients\employeeCosts\EmployeeCostsClient($config);
        $this->employeeGroups = new \LogoObjects\Clients\employeeGroups\EmployeeGroupsClient($config);
        $this->employees = new \LogoObjects\Clients\employees\EmployeesClient($config);
        $this->employeeStandardCosts = new \LogoObjects\Clients\employeeStandardCosts\EmployeeStandardCostsClient($config);
        $this->engineeringChanges = new \LogoObjects\Clients\engineeringChanges\EngineeringChangesClient($config);
        $this->exportCreditLetters = new \LogoObjects\Clients\exportCreditLetters\ExportCreditLettersClient($config);
        $this->exportCredits = new \LogoObjects\Clients\exportCredits\ExportCreditsClient($config);
        $this->exportMovementSlips = new \LogoObjects\Clients\exportMovementSlips\ExportMovementSlipsClient($config);
        $this->exportNationalizationSlips = new \LogoObjects\Clients\exportNationalizationSlips\ExportNationalizationSlipsClient($config);
        $this->exportOperationSlips = new \LogoObjects\Clients\exportOperationSlips\ExportOperationSlipsClient($config);
        $this->exportTypedPurchaseInvoices = new \LogoObjects\Clients\exportTypedPurchaseInvoices\ExportTypedPurchaseInvoicesClient($config);
        $this->exportTypedSalesInvoices = new \LogoObjects\Clients\exportTypedSalesInvoices\ExportTypedSalesInvoicesClient($config);
        $this->extendedFieldCategories = new \LogoObjects\Clients\extendedFieldCategories\ExtendedFieldCategoriesClient($config);
        $this->extendedFieldDefinitions = new \LogoObjects\Clients\extendedFieldDefinitions\ExtendedFieldDefinitionsClient($config);
        $this->extendedFields = new \LogoObjects\Clients\extendedFields\ExtendedFieldsClient($config);
        $this->FAAssignmentSlips = new \LogoObjects\Clients\FAAssignmentSlips\FAAssignmentSlipsClient($config);
        $this->FARegistries = new \LogoObjects\Clients\FARegistries\FARegistriesClient($config);
        $this->Firmdocs = new \LogoObjects\Clients\Firmdocs\FirmdocsClient($config);
        $this->freeZones = new \LogoObjects\Clients\freeZones\FreeZonesClient($config);
        $this->GLAccountMLDescriptions = new \LogoObjects\Clients\GLAccountMLDescriptions\GLAccountMLDescriptionsClient($config);
        $this->GLAccounts = new \LogoObjects\Clients\GLAccounts\GLAccountsClient($config);
        $this->GLSlips = new \LogoObjects\Clients\GLSlips\GLSlipsClient($config);
        $this->groupCodes = new \LogoObjects\Clients\groupCodes\GroupCodesClient($config);
        $this->importCreditLetters = new \LogoObjects\Clients\importCreditLetters\ImportCreditLettersClient($config);
        $this->importDistributionSlips = new \LogoObjects\Clients\importDistributionSlips\ImportDistributionSlipsClient($config);
        $this->importOperationSlips = new \LogoObjects\Clients\importOperationSlips\ImportOperationSlipsClient($config);
        $this->inwardProcessingPermits = new \LogoObjects\Clients\inwardProcessingPermits\InwardProcessingPermitsClient($config);
        $this->istokenvalid = new \LogoObjects\Clients\istokenvalid\IstokenvalidClient($config);
        $this->itemAlternatives = new \LogoObjects\Clients\itemAlternatives\ItemAlternativesClient($config);
        $this->itemBoms = new \LogoObjects\Clients\itemBoms\ItemBomsClient($config);
        $this->itemBrands = new \LogoObjects\Clients\itemBrands\ItemBrandsClient($config);
        $this->itemCharacteristics = new \LogoObjects\Clients\itemCharacteristics\ItemCharacteristicsClient($config);
        $this->itemClassAssignments = new \LogoObjects\Clients\itemClassAssignments\ItemClassAssignmentsClient($config);
        $this->itemMLDescriptions = new \LogoObjects\Clients\itemMLDescriptions\ItemMLDescriptionsClient($config);
        $this->items = new \LogoObjects\Clients\items\ItemsClient($config);
        $this->itemSlips = new \LogoObjects\Clients\itemSlips\ItemSlipsClient($config);
        $this->itemStandardCosts = new \LogoObjects\Clients\itemStandardCosts\ItemStandardCostsClient($config);
        $this->licenses = new \LogoObjects\Clients\licenses\LicensesClient($config);
        $this->locationCodes = new \LogoObjects\Clients\locationCodes\LocationCodesClient($config);
        $this->methods = new \LogoObjects\Clients\methods\MethodsClient($config);
        $this->operations = new \LogoObjects\Clients\operations\OperationsClient($config);
        $this->opportunities = new \LogoObjects\Clients\opportunities\OpportunitiesClient($config);
        $this->overheadAccounts = new \LogoObjects\Clients\overheadAccounts\OverheadAccountsClient($config);
        $this->paymentDifferenceInvoices = new \LogoObjects\Clients\paymentDifferenceInvoices\PaymentDifferenceInvoicesClient($config);
        $this->paymentPlanGroupCodes = new \LogoObjects\Clients\paymentPlanGroupCodes\PaymentPlanGroupCodesClient($config);
        $this->paymentPlans = new \LogoObjects\Clients\paymentPlans\PaymentPlansClient($config);
        $this->ping = new \LogoObjects\Clients\ping\PingClient($config);
        $this->postCodes = new \LogoObjects\Clients\postCodes\PostCodesClient($config);
        $this->productionExceptions = new \LogoObjects\Clients\productionExceptions\ProductionExceptionsClient($config);
        $this->productionLines = new \LogoObjects\Clients\productionLines\ProductionLinesClient($config);
        $this->productionParameters = new \LogoObjects\Clients\productionParameters\ProductionParametersClient($config);
        $this->productionResourceUtilization = new \LogoObjects\Clients\productionResourceUtilization\ProductionResourceUtilizationClient($config);
        $this->productionRoutes = new \LogoObjects\Clients\productionRoutes\ProductionRoutesClient($config);
        $this->productions = new \LogoObjects\Clients\productions\ProductionsClient($config);
        $this->projects = new \LogoObjects\Clients\projects\ProjectsClient($config);
        $this->purchaseCampaigns = new \LogoObjects\Clients\purchaseCampaigns\PurchaseCampaignsClient($config);
        $this->purchaseConditionsForSlipLines = new \LogoObjects\Clients\purchaseConditionsForSlipLines\PurchaseConditionsForSlipLinesClient($config);
        $this->purchaseConditionsForSlips = new \LogoObjects\Clients\purchaseConditionsForSlips\PurchaseConditionsForSlipsClient($config);
        $this->purchaseDiscounts = new \LogoObjects\Clients\purchaseDiscounts\PurchaseDiscountsClient($config);
        $this->purchaseDispatches = new \LogoObjects\Clients\purchaseDispatches\PurchaseDispatchesClient($config);
        $this->purchasedItemPrices = new \LogoObjects\Clients\purchasedItemPrices\PurchasedItemPricesClient($config);
        $this->purchasedServicePrices = new \LogoObjects\Clients\purchasedServicePrices\PurchasedServicePricesClient($config);
        $this->purchasedServices = new \LogoObjects\Clients\purchasedServices\PurchasedServicesClient($config);
        $this->purchaseExpenses = new \LogoObjects\Clients\purchaseExpenses\PurchaseExpensesClient($config);
        $this->purchaseInvoices = new \LogoObjects\Clients\purchaseInvoices\PurchaseInvoicesClient($config);
        $this->purchaseOrders = new \LogoObjects\Clients\purchaseOrders\PurchaseOrdersClient($config);
        $this->purchasePromotions = new \LogoObjects\Clients\purchasePromotions\PurchasePromotionsClient($config);
        $this->purchaseProposalContracts = new \LogoObjects\Clients\purchaseProposalContracts\PurchaseProposalContractsClient($config);
        $this->purchaseProposalOffers = new \LogoObjects\Clients\purchaseProposalOffers\PurchaseProposalOffersClient($config);
        $this->purchaseProposalOrders = new \LogoObjects\Clients\purchaseProposalOrders\PurchaseProposalOrdersClient($config);
        $this->QCCriteriaAssignments = new \LogoObjects\Clients\QCCriteriaAssignments\QCCriteriaAssignmentsClient($config);
        $this->QCCriteriaSets = new \LogoObjects\Clients\QCCriteriaSets\QCCriteriaSetsClient($config);
        $this->Queries = new \LogoObjects\Clients\Queries\QueriesClient($config);
        $this->quickProductionSlips = new \LogoObjects\Clients\quickProductionSlips\QuickProductionSlipsClient($config);
        $this->repaymentPlans = new \LogoObjects\Clients\repaymentPlans\RepaymentPlansClient($config);
        $this->revoke = new \LogoObjects\Clients\revoke\RevokeClient($config);
        $this->safeDeposits = new \LogoObjects\Clients\safeDeposits\SafeDepositsClient($config);
        $this->safeDepositSlips = new \LogoObjects\Clients\safeDepositSlips\SafeDepositSlipsClient($config);
        $this->salesActivities = new \LogoObjects\Clients\salesActivities\SalesActivitiesClient($config);
        $this->salesCampaigns = new \LogoObjects\Clients\salesCampaigns\SalesCampaignsClient($config);
        $this->salesCategories = new \LogoObjects\Clients\salesCategories\SalesCategoriesClient($config);
        $this->salesConditionsForSlipLines = new \LogoObjects\Clients\salesConditionsForSlipLines\SalesConditionsForSlipLinesClient($config);
        $this->salesConditionsForSlips = new \LogoObjects\Clients\salesConditionsForSlips\SalesConditionsForSlipsClient($config);
        $this->salesContracts = new \LogoObjects\Clients\salesContracts\SalesContractsClient($config);
        $this->salesDiscounts = new \LogoObjects\Clients\salesDiscounts\SalesDiscountsClient($config);
        $this->salesDispatches = new \LogoObjects\Clients\salesDispatches\SalesDispatchesClient($config);
        $this->salesExpenses = new \LogoObjects\Clients\salesExpenses\SalesExpensesClient($config);
        $this->salesInvoices = new \LogoObjects\Clients\salesInvoices\SalesInvoicesClient($config);
        $this->salesItemPrices = new \LogoObjects\Clients\salesItemPrices\SalesItemPricesClient($config);
        $this->salesmanDestinations = new \LogoObjects\Clients\salesmanDestinations\SalesmanDestinationsClient($config);
        $this->salesmanPositionCodes = new \LogoObjects\Clients\salesmanPositionCodes\SalesmanPositionCodesClient($config);
        $this->salesmanRoutes = new \LogoObjects\Clients\salesmanRoutes\SalesmanRoutesClient($config);
        $this->salesmen = new \LogoObjects\Clients\salesmen\SalesmenClient($config);
        $this->salesOffers = new \LogoObjects\Clients\salesOffers\SalesOffersClient($config);
        $this->salesOrders = new \LogoObjects\Clients\salesOrders\SalesOrdersClient($config);
        $this->salesPromotions = new \LogoObjects\Clients\salesPromotions\SalesPromotionsClient($config);
        $this->salesProvisionDistributionSlips = new \LogoObjects\Clients\salesProvisionDistributionSlips\SalesProvisionDistributionSlipsClient($config);
        $this->salesServicePrices = new \LogoObjects\Clients\salesServicePrices\SalesServicePricesClient($config);
        $this->serialAndLotNumbers = new \LogoObjects\Clients\serialAndLotNumbers\SerialAndLotNumbersClient($config);
        $this->services = new \LogoObjects\Clients\services\ServicesClient($config);
        $this->shiftAssignments = new \LogoObjects\Clients\shiftAssignments\ShiftAssignmentsClient($config);
        $this->shifts = new \LogoObjects\Clients\shifts\ShiftsClient($config);
        $this->soldServices = new \LogoObjects\Clients\soldServices\SoldServicesClient($config);
        $this->specialCodes = new \LogoObjects\Clients\specialCodes\SpecialCodesClient($config);
        $this->standardCostPeriods = new \LogoObjects\Clients\standardCostPeriods\StandardCostPeriodsClient($config);
        $this->stopCauses = new \LogoObjects\Clients\stopCauses\StopCausesClient($config);
        $this->sys = new \LogoObjects\Clients\sys\SysClient($config);
        $this->towns = new \LogoObjects\Clients\towns\TownsClient($config);
        $this->trackables = new \LogoObjects\Clients\trackables\TrackablesClient($config);
        $this->transaction = new \LogoObjects\Clients\transaction\TransactionClient($config);
        $this->unitSets = new \LogoObjects\Clients\unitSets\UnitSetsClient($config);
        $this->variants = new \LogoObjects\Clients\variants\VariantsClient($config);
        $this->vehicles = new \LogoObjects\Clients\vehicles\VehiclesClient($config);
        $this->workflowDefinitions = new \LogoObjects\Clients\workflowDefinitions\WorkflowDefinitionsClient($config);
        $this->workflowRoles = new \LogoObjects\Clients\workflowRoles\WorkflowRolesClient($config);
        $this->workstationCosts = new \LogoObjects\Clients\workstationCosts\WorkstationCostsClient($config);
        $this->workstationGroups = new \LogoObjects\Clients\workstationGroups\WorkstationGroupsClient($config);
        $this->workstations = new \LogoObjects\Clients\workstations\WorkstationsClient($config);
        $this->workstationStandardCosts = new \LogoObjects\Clients\workstationStandardCosts\WorkstationStandardCostsClient($config);
    }

    /**
     * Ortam degiskenlerinden (LOGO_*) istemci olusturur.
     */
    public static function fromEnv(): self
    {
        return new self([
            'baseUrl'   => getenv('LOGO_BASE_URL') ?: '',
            'username'  => getenv('LOGO_USERNAME') ?: null,
            'password'  => getenv('LOGO_PASSWORD') ?: null,
            'firmno'    => getenv('LOGO_FIRMNO') ?: null,
            'basicAuth' => getenv('LOGO_BASIC_AUTH') ?: null,
        ]);
    }
}
