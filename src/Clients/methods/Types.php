<?php

declare(strict_types=1);

namespace LogoObjects\Clients\methods;

/**
 * RetrieveTokenParameter
 */
class RetrieveTokenParameter extends \LogoObjects\Support\Entity
{
    public ?string $grant_type = null;
    public ?string $username = null;
    public ?string $password = null;
    public ?string $firmno = null;
    public ?string $sessionId = null;
    public ?string $logodb = null;
    public ?bool $useidm = null;
}

/**
 * RetrieveTokenResult
 */
class RetrieveTokenResult extends \LogoObjects\Support\Entity
{
    public ?string $access_token = null;
    public ?string $token_type = null;
    /** @var int|float|null */
    public $expires_in = null;
    public ?string $refresh_token = null;
    public ?string $userName = null;
    public ?string $firmNo = null;
    public ?bool $useidm = null;
    public ?string $sessionId = null;
    public ?string $dbName = null;
    public ?string $logoDB = null;
    public ?string $isLoginEx = null;
    public ?string $isLogoPlugin = null;
}

/**
 * Void
 */
class VoidType extends \LogoObjects\Support\Entity
{
}

/**
 * VersionResponse
 */
class VersionResponse extends \LogoObjects\Support\Entity
{
    public ?string $ApiVersion = null;
    public ?string $ReleaseVersion = null;
}

/**
 * PingResult
 */
class PingResult extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $CallStatus = null;
    public ?string $CallStatusText = null;
    public ?string $CallStatusDetailText = null;
    public ?string $CallStatusStr = null;
}

/**
 * MtTradegroups
 */
class MtTradegroups extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionmtTradegroup|null */
    public $Item = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\methods\RscollectionmtTradegroup::class,
        ]);
    }
}

/**
 * RscollectionmtTradegroup
 */
class RscollectionmtTradegroup extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\methods\MtTradegroup::class],
        ]);
    }
}

/**
 * MtTradegroup
 */
class MtTradegroup extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $index = null;
    /** @var mixed */
    public $Parent = null;
    /** @var int|float|null */
    public $Reference = null;
    public ?string $code = null;
    public ?string $Definition = null;
    /** @var int|float|null */
    public $Attributes = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * MtErpapplication
 */
class MtErpapplication extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?bool $SilentMode = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * MtFirm
 */
class MtFirm extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $index = null;
    /** @var mixed */
    public $Parent = null;
    /** @var int|float|null */
    public $FirmNr = null;
    public ?string $name = null;
    public ?string $Title = null;
    public ?string $Street = null;
    public ?string $Road = null;
    public ?string $DoorNr = null;
    public ?string $District = null;
    public ?string $AddressLine_1 = null;
    public ?string $AddressLine_2 = null;
    public ?string $City = null;
    public ?string $Country = null;
    public ?string $ZipCode = null;
    public ?string $Phone_1 = null;
    public ?string $Phone_2 = null;
    public ?string $Fax = null;
    public ?string $TaxOffice = null;
    public ?string $TaxNr = null;
    public ?string $SecurityNr = null;
    public ?string $Directory = null;
    public ?string $CPAName = null;
    public ?string $CPAStreet = null;
    public ?string $CPARoad = null;
    public ?string $CPADoorNr = null;
    public ?string $CPADistrict = null;
    public ?string $CPAAddressLine_1 = null;
    public ?string $CPAAddressLine_2 = null;
    public ?string $CPACity = null;
    public ?string $CPAPhone = null;
    public ?string $CPATaxOffice = null;
    public ?string $CPATaxNr = null;
    public ?string $CPAChamberNr = null;
    /** @var int|float|null */
    public $BeginMonth = null;
    /** @var int|float|null */
    public $BeginDay = null;
    /** @var int|float|null */
    public $DefaultPeriod = null;
    /** @var int|float|null */
    public $CountOfLeg = null;
    /** @var int|float|null */
    public $LocalCurrType = null;
    /** @var int|float|null */
    public $FirmRepCurr = null;
    public ?bool $SeperateExchangeTable = null;
    /** @var int|float|null */
    public $VATRoundMethod = null;
    public ?string $FirmEUVATNr = null;
    /** @var int|float|null */
    public $MajorDBVersion = null;
    /** @var int|float|null */
    public $MinorDBVersion = null;
    /** @var int|float|null */
    public $DBReleaseVersion = null;
    /** @var int|float|null */
    public $SiteID = null;
    /** @var int|float|null */
    public $OrgChart = null;
    /** @var int|float|null */
    public $FirmLang = null;
    /** @var MtDepartments|null */
    public $Departments = null;
    /** @var MtDivisions|null */
    public $Divisions = null;
    /** @var MtWarehouses|null */
    public $WareHouses = null;
    /** @var MtFactories|null */
    public $Factories = null;
    /** @var MtPeriods|null */
    public $Periods = null;
    /** @var Rscollectionboolean|null */
    public $WorkDays = null;
    public ?string $EmployerTradeRegisNo = null;
    public ?string $EmployerAccOfficeCode = null;
    public ?string $EmployerMersisNo = null;
    public ?string $EmployerName = null;
    public ?string $EmployerSurName = null;
    public ?string $EmployerTCNo = null;
    public ?string $EmployerEMail = null;
    public ?string $EmployerBagKurNr = null;
    /** @var int|float|null */
    public $FirmType = null;
    public ?string $NaceCode = null;
    public ?string $TaxOffCode = null;
    public ?string $WebAddress = null;
    /** @var int|float|null */
    public $DocNumberLenght = null;
    public ?bool $UseETradesmanInv = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Departments' => \LogoObjects\Clients\methods\MtDepartments::class,
            'Divisions' => \LogoObjects\Clients\methods\MtDivisions::class,
            'WareHouses' => \LogoObjects\Clients\methods\MtWarehouses::class,
            'Factories' => \LogoObjects\Clients\methods\MtFactories::class,
            'Periods' => \LogoObjects\Clients\methods\MtPeriods::class,
            'WorkDays' => \LogoObjects\Clients\methods\Rscollectionboolean::class,
        ]);
    }
}

/**
 * MtDepartments
 */
class MtDepartments extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionmtDepartment|null */
    public $Item = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\methods\RscollectionmtDepartment::class,
        ]);
    }
}

/**
 * RscollectionmtDepartment
 */
class RscollectionmtDepartment extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\methods\MtDepartment::class],
        ]);
    }
}

/**
 * MtDepartment
 */
class MtDepartment extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $index = null;
    /** @var mixed */
    public $Parent = null;
    public ?string $name = null;
    /** @var int|float|null */
    public $number = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * MtDivisions
 */
class MtDivisions extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionmtDivision|null */
    public $Item = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\methods\RscollectionmtDivision::class,
        ]);
    }
}

/**
 * RscollectionmtDivision
 */
class RscollectionmtDivision extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\methods\MtDivision::class],
        ]);
    }
}

/**
 * MtDivision
 */
class MtDivision extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $index = null;
    /** @var mixed */
    public $Parent = null;
    /** @var int|float|null */
    public $number = null;
    public ?string $name = null;
    public ?string $Street = null;
    public ?string $Road = null;
    public ?string $DoorNr = null;
    public ?string $District = null;
    public ?string $AddressLine_1 = null;
    public ?string $AddressLine_2 = null;
    public ?string $City = null;
    public ?string $Country = null;
    public ?string $ZipCode = null;
    public ?string $Phone = null;
    public ?string $Fax = null;
    public ?string $TaxOffice = null;
    public ?string $TaxNumber = null;
    public ?string $SecurityNumber = null;
    /** @var int|float|null */
    public $SiteID = null;
    public ?bool $UseETradesmanInv = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * MtWarehouses
 */
class MtWarehouses extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionmtWarehouse|null */
    public $Item = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\methods\RscollectionmtWarehouse::class,
        ]);
    }
}

/**
 * RscollectionmtWarehouse
 */
class RscollectionmtWarehouse extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\methods\MtWarehouse::class],
        ]);
    }
}

/**
 * MtWarehouse
 */
class MtWarehouse extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $index = null;
    /** @var mixed */
    public $Parent = null;
    /** @var int|float|null */
    public $number = null;
    /** @var int|float|null */
    public $DivisionNumber = null;
    public ?string $name = null;
    /** @var int|float|null */
    public $FactoryNumber = null;
    /** @var int|float|null */
    public $CostGroup = null;
    /** @var int|float|null */
    public $SiteID = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * MtFactories
 */
class MtFactories extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionmtFactory|null */
    public $Item = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\methods\RscollectionmtFactory::class,
        ]);
    }
}

/**
 * RscollectionmtFactory
 */
class RscollectionmtFactory extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\methods\MtFactory::class],
        ]);
    }
}

/**
 * MtFactory
 */
class MtFactory extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $index = null;
    /** @var mixed */
    public $Parent = null;
    /** @var int|float|null */
    public $number = null;
    /** @var int|float|null */
    public $DivisionNumber = null;
    public ?string $name = null;
    /** @var int|float|null */
    public $SiteID = null;
    /** @var MtFactorydivisions|null */
    public $FactoryDivisions = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'FactoryDivisions' => \LogoObjects\Clients\methods\MtFactorydivisions::class,
        ]);
    }
}

/**
 * MtFactorydivisions
 */
class MtFactorydivisions extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionmtFactorydivision|null */
    public $Item = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\methods\RscollectionmtFactorydivision::class,
        ]);
    }
}

/**
 * RscollectionmtFactorydivision
 */
class RscollectionmtFactorydivision extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\methods\MtFactorydivision::class],
        ]);
    }
}

/**
 * MtFactorydivision
 */
class MtFactorydivision extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $index = null;
    /** @var mixed */
    public $Parent = null;
    /** @var int|float|null */
    public $RecorNumber = null;
    public ?string $name = null;
    /** @var int|float|null */
    public $WorkDays = null;
    /** @var int|float|null */
    public $number = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * MtPeriods
 */
class MtPeriods extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionmtPeriod|null */
    public $Item = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\methods\RscollectionmtPeriod::class,
        ]);
    }
}

/**
 * RscollectionmtPeriod
 */
class RscollectionmtPeriod extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\methods\MtPeriod::class],
        ]);
    }
}

/**
 * MtPeriod
 */
class MtPeriod extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $index = null;
    /** @var mixed */
    public $Parent = null;
    /** @var int|float|null */
    public $number = null;
    public ?string $BeginDate = null;
    public ?string $endDate = null;
    public ?bool $Active = null;
    /** @var int|float|null */
    public $LocalCurrType = null;
    /** @var int|float|null */
    public $RepCurrType = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * Rscollectionboolean
 */
class Rscollectionboolean extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var mixed */
    public $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * MtUser
 */
class MtUser extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $index = null;
    /** @var mixed */
    public $Parent = null;
    /** @var int|float|null */
    public $UserNr = null;
    public ?string $name = null;
    public ?string $key = null;
    /** @var Rscollectionint16|null */
    public $Groups = null;
    /** @var int|float|null */
    public $FirmNr = null;
    /** @var int|float|null */
    public $Language = null;
    /** @var int|float|null */
    public $Options = null;
    /** @var int|float|null */
    public $blocked = null;
    /** @var int|float|null */
    public $LogFlag = null;
    public ?string $EMail = null;
    /** @var int|float|null */
    public $DefaultRole = null;
    /** @var Rscollectionint16|null */
    public $Roles = null;
    public ?string $UserName = null;
    public ?string $UserSurName = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Groups' => \LogoObjects\Clients\methods\Rscollectionint16::class,
            'Roles' => \LogoObjects\Clients\methods\Rscollectionint16::class,
        ]);
    }
}

/**
 * Rscollectionint16
 */
class Rscollectionint16 extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var mixed */
    public $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * MtCapi
 */
class MtCapi extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var MtFirms|null */
    public $Firms = null;
    /** @var MtUsers|null */
    public $Users = null;
    /** @var mixed */
    public $Parent = null;
    /** @var MtTerminals|null */
    public $Terminals = null;
    /** @var MtCurrencies|null */
    public $Currencies = null;
    /** @var MtRoles|null */
    public $Roles = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Firms' => \LogoObjects\Clients\methods\MtFirms::class,
            'Users' => \LogoObjects\Clients\methods\MtUsers::class,
            'Terminals' => \LogoObjects\Clients\methods\MtTerminals::class,
            'Currencies' => \LogoObjects\Clients\methods\MtCurrencies::class,
            'Roles' => \LogoObjects\Clients\methods\MtRoles::class,
        ]);
    }
}

/**
 * MtFirms
 */
class MtFirms extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionmtFirm|null */
    public $Item = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\methods\RscollectionmtFirm::class,
        ]);
    }
}

/**
 * RscollectionmtFirm
 */
class RscollectionmtFirm extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\methods\MtFirm::class],
        ]);
    }
}

/**
 * MtUsers
 */
class MtUsers extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionmtUser|null */
    public $Item = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\methods\RscollectionmtUser::class,
        ]);
    }
}

/**
 * RscollectionmtUser
 */
class RscollectionmtUser extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\methods\MtUser::class],
        ]);
    }
}

/**
 * MtTerminals
 */
class MtTerminals extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionmtTerminal|null */
    public $Item = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\methods\RscollectionmtTerminal::class,
        ]);
    }
}

/**
 * RscollectionmtTerminal
 */
class RscollectionmtTerminal extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\methods\MtTerminal::class],
        ]);
    }
}

/**
 * MtTerminal
 */
class MtTerminal extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $index = null;
    /** @var mixed */
    public $Parent = null;
    /** @var int|float|null */
    public $number = null;
    public ?string $code = null;
    /** @var int|float|null */
    public $userNumber = null;
    public ?string $name = null;
    /** @var int|float|null */
    public $TaskNumber = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * MtCurrencies
 */
class MtCurrencies extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionmtCurrency|null */
    public $Item = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\methods\RscollectionmtCurrency::class,
        ]);
    }
}

/**
 * RscollectionmtCurrency
 */
class RscollectionmtCurrency extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\methods\MtCurrency::class],
        ]);
    }
}

/**
 * MtCurrency
 */
class MtCurrency extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $index = null;
    /** @var mixed */
    public $Parent = null;
    /** @var int|float|null */
    public $ID = null;
    public ?string $name = null;
    public ?string $symbol = null;
    public ?string $globalID = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * MtRoles
 */
class MtRoles extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionmtRole|null */
    public $Item = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\methods\RscollectionmtRole::class,
        ]);
    }
}

/**
 * RscollectionmtRole
 */
class RscollectionmtRole extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\methods\MtRole::class],
        ]);
    }
}

/**
 * MtRole
 */
class MtRole extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $index = null;
    /** @var mixed */
    public $Parent = null;
    /** @var int|float|null */
    public $nr = null;
    public ?string $name = null;
    /** @var MtObjects|null */
    public $Objects = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Objects' => \LogoObjects\Clients\methods\MtObjects::class,
        ]);
    }
}

/**
 * MtObjects
 */
class MtObjects extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionmtObjitem|null */
    public $Item = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\methods\RscollectionmtObjitem::class,
        ]);
    }
}

/**
 * RscollectionmtObjitem
 */
class RscollectionmtObjitem extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\methods\MtObjitem::class],
        ]);
    }
}

/**
 * MtObjitem
 */
class MtObjitem extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $index = null;
    /** @var mixed */
    public $Parent = null;
    /** @var int|float|null */
    public $typ = null;
    public ?string $name = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * MtFirmparameters
 */
class MtFirmparameters extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?string $localCurr = null;
    public ?string $localFrac = null;
    public ?string $reportCurr = null;
    public ?string $reportFrac = null;
    public ?string $costType = null;
    public ?string $minLevelCtrl = null;
    public ?string $printStFiche = null;
    public ?bool $mergeStFiche = null;
    public ?string $sortStFiche = null;
    public ?string $negLevelCtrl = null;
    public ?string $trackType = null;
    public ?string $maxLevelCtrl = null;
    public ?bool $stUpdRepCurr = null;
    public ?bool $brInvCheck = null;
    public ?string $safeLevelCtrl = null;
    /** @var int|float|null */
    public $ABCCode = null;
    public ?bool $purchItem = null;
    public ?bool $salesItem = null;
    public ?bool $mtrlItem = null;
    public ?bool $tool = null;
    public ?bool $autoIncSL = null;
    public ?bool $divLotSize = null;
    /** @var int|float|null */
    public $shelfLife = null;
    public ?string $lotEntry = null;
    public ?bool $locTracking = null;
    public ?string $clientQc = null;
    public ?string $autoMtrIssue = null;
    public ?bool $chkSLLocExpDate = null;
    public ?bool $purchUnit = null;
    public ?bool $salesUnit = null;
    public ?bool $mtrlUnit = null;
    public ?bool $divUnit = null;
    /** @var int|float|null */
    public $useType = null;
    /** @var int|float|null */
    public $deprType = null;
    public ?bool $revalFlag = null;
    public ?bool $revDeprFlag = null;
    public ?bool $partDep = null;
    public ?string $condReadAct = null;
    public ?bool $iPrintClsLine = null;
    public ?bool $ordCampApply = null;
    public ?bool $despCampApply = null;
    public ?bool $invCampApply = null;
    public ?string $IOCtrl = null;
    public ?string $qcPriority = null;
    /** @var int|float|null */
    public $frequency = null;
    /** @var int|float|null */
    public $sampleSize = null;
    public ?bool $purchQChar = null;
    public ?bool $salesQChar = null;
    public ?bool $mtrlQChar = null;
    public ?string $nonConform = null;
    public ?string $itemConform = null;
    public ?string $qcBuffer0 = null;
    public ?string $qcBuffer1 = null;
    public ?string $qcBuffer2 = null;
    public ?string $qcBuffer3 = null;
    public ?string $qcBuffer4 = null;
    /** @var int|float|null */
    public $autoLotOutMtd = null;
    /** @var int|float|null */
    public $lotParty = null;
    public ?bool $pPrintDesp = null;
    public ?bool $pPrintOrd = null;
    public ?bool $pPrintInv = null;
    public ?bool $pMergeOrder = null;
    public ?bool $pMergeDesp = null;
    public ?bool $pMergeInv = null;
    public ?string $pSortOrder = null;
    public ?string $pSortDesp = null;
    public ?string $pSortInv = null;
    public ?string $pInvPrintTyp = null;
    public ?string $pAttachType = null;
    public ?bool $pCheckOrdInv = null;
    public ?bool $pUpdateCurr = null;
    public ?bool $pDiscounts = null;
    public ?bool $pExpenses = null;
    public ?bool $pPromDiscs = null;
    public ?bool $pUpdRepCurr = null;
    public ?bool $pOnePayLine = null;
    public ?string $pRetCostType = null;
    public ?bool $pPrintCmpLine = null;
    public ?bool $pPrintClsLine = null;
    public ?string $pDefStatus = null;
    /** @var int|float|null */
    public $pPrcType = null;
    public ?bool $pPrcVAT = null;
    public ?bool $pSrvPrcVAT = null;
    public ?string $pClConfirm = null;
    public ?string $pOrdDateCon = null;
    public ?bool $pLeadTimeChk = null;
    public ?string $sOrdPromDlv = null;
    public ?bool $sCheckOrdLink = null;
    public ?bool $sDefReserve = null;
    public ?bool $checkSalMan = null;
    public ?bool $sPrintDesp = null;
    public ?bool $sPrintOrd = null;
    public ?bool $sPrintInv = null;
    public ?bool $sMergeOrder = null;
    public ?bool $sMergeDesp = null;
    public ?bool $sMergeInv = null;
    public ?string $sSortOrder = null;
    public ?string $sSortDesp = null;
    public ?string $sSortInv = null;
    public ?string $sInvPrintTyp = null;
    public ?string $sAttachType = null;
    public ?bool $sCheckOrdInv = null;
    public ?bool $sUpdateCurr = null;
    public ?bool $sDiscounts = null;
    public ?bool $sExpenses = null;
    public ?bool $sPromDiscs = null;
    public ?bool $sUpdRepCurr = null;
    public ?bool $sOnePayLine = null;
    public ?string $sRetCostType = null;
    public ?bool $sPrintCmpLine = null;
    public ?bool $sPrintClsLine = null;
    public ?string $sDefStatus = null;
    public ?bool $salManControl0 = null;
    public ?bool $salManControl1 = null;
    public ?bool $salManControl2 = null;
    /** @var int|float|null */
    public $sPrcType = null;
    public ?bool $sPrcVAT = null;
    public ?bool $sSrvPrcVAT = null;
    public ?string $sClConfirm = null;
    public ?string $sOrdDateCon = null;
    public ?bool $sLeadTimeChk = null;
    /** @var int|float|null */
    public $piasters0 = null;
    /** @var int|float|null */
    public $piasters1 = null;
    /** @var int|float|null */
    public $piasters2 = null;
    /** @var int|float|null */
    public $piasters3 = null;
    /** @var int|float|null */
    public $piasters4 = null;
    /** @var int|float|null */
    public $piasters5 = null;
    /** @var int|float|null */
    public $piasters6 = null;
    /** @var int|float|null */
    public $piasters7 = null;
    /** @var int|float|null */
    public $piasters8 = null;
    /** @var int|float|null */
    public $piasters9 = null;
    /** @var int|float|null */
    public $piasters10 = null;
    /** @var int|float|null */
    public $piasters11 = null;
    /** @var int|float|null */
    public $piasters12 = null;
    /** @var int|float|null */
    public $piasters13 = null;
    /** @var int|float|null */
    public $piasters14 = null;
    public ?bool $printClSlip = null;
    public ?bool $printClNotes = null;
    public ?bool $printRoll = null;
    public ?bool $printBnFiche = null;
    public ?bool $printCashLn = null;
    public ?bool $piasOnDisc = null;
    public ?bool $distExpenses = null;
    public ?bool $riskControl0 = null;
    public ?bool $riskControl1 = null;
    public ?bool $riskControl2 = null;
    public ?bool $riskControl3 = null;
    public ?bool $riskControl4 = null;
    public ?bool $riskControl5 = null;
    public ?bool $riskControl6 = null;
    public ?bool $riskControl7 = null;
    public ?bool $riskControl8 = null;
    public ?bool $riskControl9 = null;
    public ?bool $riskControl10 = null;
    public ?string $riskType = null;
    public ?string $riskOver = null;
    public ?string $protestedNotes = null;
    /** @var int|float|null */
    public $noteStampPer = null;
    /** @var int|float|null */
    public $reeskontInt = null;
    /** @var int|float|null */
    public $endorsTrac = null;
    public ?string $mergeCashLns = null;
    public ?string $cashWrkDaysCtrl = null;
    public ?bool $VATRealKurus = null;
    /** @var int|float|null */
    public $VATDefault = null;
    /** @var int|float|null */
    public $VATExpense = null;
    public ?bool $rollOnePayLine = null;
    public ?bool $finUpdRepCurr = null;
    public ?bool $debtClose0 = null;
    public ?bool $debtClose1 = null;
    public ?bool $debtClose2 = null;
    public ?bool $debtClose3 = null;
    public ?bool $debtClose4 = null;
    public ?string $ordRiskOver = null;
    public ?string $despRiskOver = null;
    public ?bool $clLanguage = null;
    public ?string $chPPConfirm = null;
    public ?string $finBuffer0 = null;
    public ?string $finBuffer1 = null;
    public ?string $finBuffer2 = null;
    public ?bool $clBaseForm = null;
    public ?string $cashCode = null;
    public ?bool $printAccFiche = null;
    public ?bool $printUpperAcc = null;
    public ?string $sortType = null;
    public ?bool $currUpdate = null;
    public ?bool $repCurrCont = null;
    public ?string $centerControl = null;
    public ?string $amntControl = null;
    public ?bool $fichesToCenCtrl0 = null;
    public ?bool $fichesToCenCtrl1 = null;
    public ?bool $fichesToCenCtrl2 = null;
    public ?bool $fichesToCenCtrl3 = null;
    public ?bool $fichesToCenCtrl4 = null;
    public ?bool $fichesToCenCtrl5 = null;
    public ?bool $fichesToCenCtrl6 = null;
    public ?bool $fichesToCenCtrl7 = null;
    public ?bool $fichesToCenCtrl8 = null;
    public ?bool $fichesToCenCtrl9 = null;
    public ?bool $fichesToCenCtrl10 = null;
    public ?string $accControl = null;
    public ?bool $fichesToAccCtrl0 = null;
    public ?bool $fichesToAccCtrl1 = null;
    public ?bool $fichesToAccCtrl2 = null;
    public ?bool $fichesToAccCtrl3 = null;
    public ?bool $fichesToAccCtrl4 = null;
    public ?bool $fichesToAccCtrl5 = null;
    public ?bool $fichesToAccCtrl6 = null;
    public ?bool $fichesToAccCtrl7 = null;
    public ?bool $fichesToAccCtrl8 = null;
    public ?bool $fichesToAccCtrl9 = null;
    public ?bool $fichesToAccCtrl10 = null;
    public ?string $accRepCurrCtrl = null;
    public ?string $upperAccPrinting = null;
    public ?bool $doubleWayControl = null;
    public ?bool $debitCreditCtrl = null;
    public ?bool $crossCodeCtrl = null;
    public ?bool $crossAmntMatch = null;
    public ?string $gLBuffer = null;
    public ?bool $hideCredTrans = null;
    public ?string $persEnteg = null;
    public ?string $deCodeNotFnd = null;
    public ?bool $mergeFicheLines0 = null;
    public ?bool $mergeFicheLines1 = null;
    public ?bool $mergeFicheLines2 = null;
    public ?bool $mergeFicheLines3 = null;
    public ?bool $mergeFicheLines4 = null;
    public ?string $defStFNames0 = null;
    public ?string $defStFNames1 = null;
    public ?string $defStFNames2 = null;
    public ?string $defStFNames3 = null;
    public ?string $defStFNames4 = null;
    public ?string $defStFNames5 = null;
    public ?string $defStFNames6 = null;
    public ?string $defStFNames7 = null;
    public ?string $defStFNames8 = null;
    public ?string $defStFNames9 = null;
    public ?string $defPurchFNames0 = null;
    public ?string $defPurchFNames1 = null;
    public ?string $defPurchFNames2 = null;
    public ?string $defPurchFNames3 = null;
    public ?string $defPurchFNames4 = null;
    public ?string $defSaleFNames0 = null;
    public ?string $defSaleFNames1 = null;
    public ?string $defSaleFNames2 = null;
    public ?string $defSaleFNames3 = null;
    public ?string $defSaleFNames4 = null;
    /** @var int|float|null */
    public $stopajPer0 = null;
    /** @var int|float|null */
    public $stopajPer1 = null;
    /** @var int|float|null */
    public $stopajPer2 = null;
    /** @var int|float|null */
    public $ek1Per = null;
    /** @var int|float|null */
    public $ek2Per = null;
    /** @var int|float|null */
    public $SSDFPer = null;
    /** @var int|float|null */
    public $borsaPer = null;
    /** @var int|float|null */
    public $komisyonPer = null;
    /** @var int|float|null */
    public $komKDVPer = null;
    /** @var int|float|null */
    public $bagKurPer = null;
    public ?string $perDataPath = null;
    /** @var int|float|null */
    public $begMon = null;
    /** @var int|float|null */
    public $begDay = null;
    public ?bool $reserved0 = null;
    public ?bool $reserved1 = null;
    public ?bool $reserved2 = null;
    public ?bool $reserved3 = null;
    public ?bool $reserved4 = null;
    public ?string $buffer0 = null;
    public ?string $buffer1 = null;
    public ?string $buffer2 = null;
    public ?string $buffer3 = null;
    public ?bool $pGlobLotNum = null;
    /** @var int|float|null */
    public $reserved8 = null;
    public ?bool $diffWHouseUse = null;
    public ?string $pcBuffer = null;
    /** @var int|float|null */
    public $allocTargetType = null;
    public ?string $distOverHeads = null;
    public ?string $stdRepCurrCont = null;
    public ?string $caBuffer = null;
    /** @var int|float|null */
    public $gpInComeTaxRatT = null;
    /** @var int|float|null */
    public $gpInComeTaxRatS = null;
    /** @var int|float|null */
    public $gpFundShareRat = null;
    public ?string $gpBuffer = null;
    public ?string $accToBeOutOfTrack = null;
    public ?bool $transferFiche = null;
    public ?bool $expenWasFiche = null;
    public ?bool $productionFiche = null;
    public ?bool $warehouseFiche = null;
    public ?bool $defItemInFiche = null;
    public ?bool $defItemOutFiche = null;
    public ?bool $dispPurcFiche = null;
    public ?bool $dispSaleFiche = null;
    public ?bool $invPurcFiche = null;
    public ?bool $invSaleFiche = null;
    /** @var int|float|null */
    public $roundDefault = null;
    /** @var int|float|null */
    public $countForMPSRun = null;
    /** @var int|float|null */
    public $mpsNoOfDays = null;
    /** @var int|float|null */
    public $mpsNoOfWeeks = null;
    /** @var int|float|null */
    public $mpsNoOfMonths = null;
    /** @var int|float|null */
    public $mpsNoOfFrozDays = null;
    /** @var int|float|null */
    public $mpsFrozDaysFlag = null;
    /** @var int|float|null */
    public $mpsDistrWkDays = null;
    /** @var int|float|null */
    public $mpsDistrMntDays = null;
    /** @var int|float|null */
    public $Reserved7 = null;
    public ?bool $contToolPlnOccWithWS = null;
    public ?bool $contEmpPlnOccWithWS = null;
    public ?bool $contToolActOccWithWS = null;
    public ?bool $contEmpActOccWithWS = null;
    public ?string $InvPrintCnt = null;
    public ?bool $useGenLotNum = null;
    public ?string $outCtrl = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * MtDatas
 */
class MtDatas extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionmtData|null */
    public $Item = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\methods\RscollectionmtData::class,
        ]);
    }
}

/**
 * RscollectionmtData
 */
class RscollectionmtData extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\methods\MtData::class],
        ]);
    }
}

/**
 * MtData
 */
class MtData extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $index = null;
    /** @var mixed */
    public $Parent = null;
    /** @var MtDatafields|null */
    public $DataFields = null;
    public ?string $TableName = null;
    /** @var int|float|null */
    public $tableNr = null;
    /** @var MtDataobjecttype|null */
    public $DataObject = null;
    public ?bool $DataReady = null;
    /** @var int|float|null */
    public $ErrorCode = null;
    /** @var MtValidateerrors|null */
    public $ValidateErrors = null;
    /** @var MtDataextensions|null */
    public $DataExtensions = null;
    public ?bool $HasDataExtensions = null;
    public ?bool $ReplicMode = null;
    public ?bool $OpenTrans = null;
    public ?bool $CheckRight = null;
    public ?string $ErrorDesc = null;
    public ?bool $BlockMerge = null;
    public ?bool $AddSysLog = null;
    public ?string $DBErrorDesc = null;
    public ?bool $CheckParams = null;
    public ?bool $ExportAllData = null;
    public ?bool $Validation = null;
    public ?bool $CheckApproveDate = null;
    public ?string $ExcludedResolveRefIDList = null;
    public ?string $ErrorDescDetail = null;
    public ?bool $AutoReCalculate = null;
    /** @var MtValidateerrors|null */
    public $ValidateWarns = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'DataFields' => \LogoObjects\Clients\methods\MtDatafields::class,
            'DataObject' => \LogoObjects\Clients\methods\MtDataobjecttype::class,
            'ValidateErrors' => \LogoObjects\Clients\methods\MtValidateerrors::class,
            'DataExtensions' => \LogoObjects\Clients\methods\MtDataextensions::class,
            'ValidateWarns' => \LogoObjects\Clients\methods\MtValidateerrors::class,
        ]);
    }
}

/**
 * MtDatafields
 */
class MtDatafields extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionmtDatafield|null */
    public $Item = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\methods\RscollectionmtDatafield::class,
        ]);
    }
}

/**
 * RscollectionmtDatafield
 */
class RscollectionmtDatafield extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\methods\MtDatafield::class],
        ]);
    }
}

/**
 * MtDatafield
 */
class MtDatafield extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $index = null;
    /** @var mixed */
    public $Parent = null;
    /** @var mixed */
    public $Value = null;
    public ?string $fieldName = null;
    /** @var MtFieldtype|null */
    public $FieldType = null;
    /** @var int|float|null */
    public $FieldSize = null;
    /** @var int|float|null */
    public $FieldOffset = null;
    /** @var MtLines|null */
    public $Lines = null;
    public ?string $DBFieldName = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'FieldType' => \LogoObjects\Clients\methods\MtFieldtype::class,
            'Lines' => \LogoObjects\Clients\methods\MtLines::class,
        ]);
    }
}

/**
 * MtFieldtype
 */
class MtFieldtype extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * MtLines
 */
class MtLines extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionmtDatafields|null */
    public $Item = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\methods\RscollectionmtDatafields::class,
        ]);
    }
}

/**
 * RscollectionmtDatafields
 */
class RscollectionmtDatafields extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\methods\MtDatafields::class],
        ]);
    }
}

/**
 * MtDataobjecttype
 */
class MtDataobjecttype extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * MtValidateerrors
 */
class MtValidateerrors extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionmtValidateerror|null */
    public $Item = null;
    /** @var int|float|null */
    public $Count = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\methods\RscollectionmtValidateerror::class,
        ]);
    }
}

/**
 * RscollectionmtValidateerror
 */
class RscollectionmtValidateerror extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\methods\MtValidateerror::class],
        ]);
    }
}

/**
 * MtValidateerror
 */
class MtValidateerror extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?string $Error = null;
    /** @var int|float|null */
    public $ID = null;
    public ?string $ErrorDetail = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * MtDataextensions
 */
class MtDataextensions extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionmtDataextension|null */
    public $Item = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\methods\RscollectionmtDataextension::class,
        ]);
    }
}

/**
 * RscollectionmtDataextension
 */
class RscollectionmtDataextension extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\methods\MtDataextension::class],
        ]);
    }
}

/**
 * MtDataextension
 */
class MtDataextension extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $index = null;
    /** @var mixed */
    public $Parent = null;
    public ?string $TableName = null;
    /** @var int|float|null */
    public $number = null;
    /** @var MtExtensionfields|null */
    public $Fields = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Fields' => \LogoObjects\Clients\methods\MtExtensionfields::class,
        ]);
    }
}

/**
 * MtExtensionfields
 */
class MtExtensionfields extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var RscollectionmtExtensionfield|null */
    public $Item = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'Item' => \LogoObjects\Clients\methods\RscollectionmtExtensionfield::class,
        ]);
    }
}

/**
 * RscollectionmtExtensionfield
 */
class RscollectionmtExtensionfield extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?array $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'items' => [\LogoObjects\Clients\methods\MtExtensionfield::class],
        ]);
    }
}

/**
 * MtExtensionfield
 */
class MtExtensionfield extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $index = null;
    /** @var mixed */
    public $Parent = null;
    public ?string $fieldName = null;
    /** @var MtFieldtype|null */
    public $FieldType = null;
    /** @var mixed */
    public $Value = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'FieldType' => \LogoObjects\Clients\methods\MtFieldtype::class,
        ]);
    }
}

/**
 * KeyValueParameter
 */
class KeyValueParameter extends \LogoObjects\Support\Entity
{
    public ?string $Name = null;
    /** @var mixed */
    public $Value = null;
}

/**
 * Methods
 */
class Methods extends \LogoObjects\Types\BaseEntity
{
}

/**
 * MethodsQueryOptions
 */
class MethodsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var MethodsSortSpec|null */
    public $sort = null;
}

/**
 * MethodsSearchCriteria
 */
class MethodsSearchCriteria extends \LogoObjects\Support\Entity
{
}

/**
 * MethodsAnalytics
 */
class MethodsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
