<?php

declare(strict_types=1);

namespace LogoObjects\Clients\sys;

/**
 * Items
 */
class Items extends \LogoObjects\Support\Entity
{
}

/**
 * CapiModel
 */
class CapiModel extends \LogoObjects\Support\Entity
{
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var MtFirm|null */
    public $Firm = null;
    /** @var MtPeriod|null */
    public $Period = null;
    /** @var MtUser|null */
    public $User = null;
    /** @var Dbcreatemessage|null */
    public $DBInfo = null;
    public ?string $ProcessInstanceId = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
            'Meta' => \LogoObjects\Types\Meta::class,
            'Firm' => \LogoObjects\Clients\sys\MtFirm::class,
            'Period' => \LogoObjects\Clients\sys\MtPeriod::class,
            'User' => \LogoObjects\Clients\sys\MtUser::class,
            'DBInfo' => \LogoObjects\Clients\sys\Dbcreatemessage::class,
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
            'Departments' => \LogoObjects\Clients\sys\MtDepartments::class,
            'Divisions' => \LogoObjects\Clients\sys\MtDivisions::class,
            'WareHouses' => \LogoObjects\Clients\sys\MtWarehouses::class,
            'Factories' => \LogoObjects\Clients\sys\MtFactories::class,
            'Periods' => \LogoObjects\Clients\sys\MtPeriods::class,
            'WorkDays' => \LogoObjects\Clients\sys\Rscollectionboolean::class,
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
            'Item' => \LogoObjects\Clients\sys\RscollectionmtDepartment::class,
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
            'items' => [\LogoObjects\Clients\sys\MtDepartment::class],
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
            'Item' => \LogoObjects\Clients\sys\RscollectionmtDivision::class,
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
            'items' => [\LogoObjects\Clients\sys\MtDivision::class],
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
            'Item' => \LogoObjects\Clients\sys\RscollectionmtWarehouse::class,
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
            'items' => [\LogoObjects\Clients\sys\MtWarehouse::class],
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
            'Item' => \LogoObjects\Clients\sys\RscollectionmtFactory::class,
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
            'items' => [\LogoObjects\Clients\sys\MtFactory::class],
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
            'FactoryDivisions' => \LogoObjects\Clients\sys\MtFactorydivisions::class,
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
            'Item' => \LogoObjects\Clients\sys\RscollectionmtFactorydivision::class,
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
            'items' => [\LogoObjects\Clients\sys\MtFactorydivision::class],
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
            'Item' => \LogoObjects\Clients\sys\RscollectionmtPeriod::class,
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
            'items' => [\LogoObjects\Clients\sys\MtPeriod::class],
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
            'Groups' => \LogoObjects\Clients\sys\Rscollectionint16::class,
            'Roles' => \LogoObjects\Clients\sys\Rscollectionint16::class,
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
 * Dbcreatemessage
 */
class Dbcreatemessage extends \LogoObjects\Support\Entity
{
    public ?string $host_name = null;
    /** @var int|float|null */
    public $port = null;
    public ?string $db_name = null;
    /** @var int|float|null */
    public $db_type = null;
    public ?string $dbversion = null;
    public ?string $schema_version = null;
    public ?string $schema_name = null;
    public ?string $admin_username = null;
    public ?string $admin_password = null;
    public ?string $tenant_id = null;
    public ?string $tenantapp_id = null;
    public ?string $appsegment_id = null;
    public ?string $serveraddress = null;
    public ?string $server_username = null;
    public ?string $server_password = null;
}

/**
 * ActiveSession
 */
class ActiveSession extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $ApplicationItemCount = null;
    public ?array $ApplicationItems = null;
    /** @var int|float|null */
    public $LObjectCount = null;
    public ?array $LObjects = null;
    /** @var int|float|null */
    public $ThreadCount = null;
    /** @var int|float|null */
    public $WorkItemGroupCount = null;
    /** @var int|float|null */
    public $WorkItemResultCount = null;
    public ?array $Threads = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'ApplicationItems' => [\LogoObjects\Clients\sys\ActiveApplication::class],
            'LObjects' => [\LogoObjects\Clients\sys\ActiveLObject::class],
            'Threads' => [\LogoObjects\Clients\sys\ClientThread::class],
        ]);
    }
}

/**
 * ActiveApplication
 */
class ActiveApplication extends \LogoObjects\Support\Entity
{
    public ?string $ID = null;
    /** @var int|float|null */
    public $PID = null;
    public ?string $LastExecutionDate = null;
    public ?bool $IsInitial = null;
    public ?string $usedBy = null;
    public ?bool $IsLoginEx = null;
    public ?string $DBKey = null;
    public ?string $CurrentUser = null;
    /** @var int|float|null */
    public $FirmNr = null;
    public ?string $SessionId = null;
    public ?string $LogoDB = null;
    public ?string $TransactionId = null;
}

/**
 * ActiveLObject
 */
class ActiveLObject extends \LogoObjects\Support\Entity
{
    public ?string $ID = null;
    /** @var int|float|null */
    public $PID = null;
    public ?string $LastAccessTime = null;
    /** @var int|float|null */
    public $ReleaseTryCount = null;
}

/**
 * ClientThread
 */
class ClientThread extends \LogoObjects\Support\Entity
{
    public ?string $ID = null;
    public ?string $UserName = null;
    public ?string $TokenUserName = null;
    public ?string $Password = null;
    /** @var int|float|null */
    public $FirmNr = null;
    public ?bool $UseIdm = null;
    /** @var LogoDBInfo|null */
    public $DbInfo = null;
    /** @var int|float|null */
    public $PeriodNr = null;
    /** @var int|float|null */
    public $currentThreadId = null;
    /** @var int|float|null */
    public $threadState = null;
    /** @var Iworkitemresult|null */
    public $threadInPool = null;
    public ?string $TransactionId = null;
    public ?string $LastUsageDate = null;
    public ?string $ClientId = null;
    public ?string $SessionId = null;
    public ?string $LoginExKey = null;
    public ?string $RemoteIpAddres = null;
    public ?bool $IsLogoPlugin = null;
    public ?bool $IsLoginEx = null;
    public ?bool $isLogin = null;
    /** @var TokenInfo|null */
    public $TokenInfo = null;
    public ?string $FirmLanguage = null;
    public ?string $LogoDB = null;
    public ?string $threadCreateDate = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'DbInfo' => \LogoObjects\Clients\sys\LogoDBInfo::class,
            'threadInPool' => \LogoObjects\Clients\sys\Iworkitemresult::class,
            'TokenInfo' => \LogoObjects\Clients\sys\TokenInfo::class,
        ]);
    }
}

/**
 * LogoDBInfo
 */
class LogoDBInfo extends \LogoObjects\Support\Entity
{
    public ?string $ConnServerName = null;
    public ?string $ConnDBName = null;
    public ?string $ConnUserName = null;
    public ?string $ConnPassword = null;
    public ?string $ConnDBOwner = null;
    /** @var int|float|null */
    public $ConnDBType = null;
    public ?string $FullConnection = null;
}

/**
 * Iworkitemresult
 */
class Iworkitemresult extends \LogoObjects\Support\Entity
{
    public ?bool $IsCompleted = null;
    public ?bool $IsCanceled = null;
    /** @var mixed */
    public $State = null;
    /** @var int|float|null */
    public $WorkItemPriority = null;
    /** @var mixed */
    public $Result = null;
    /** @var mixed */
    public $Exception = null;
}

/**
 * TokenInfo
 */
class TokenInfo extends \LogoObjects\Support\Entity
{
    public ?string $AccessToken = null;
    public ?string $AccessTokenIssuedDate = null;
    public ?string $AccessTokenExpiredDate = null;
    public ?string $AccessTokenLastRequestDate = null;
    /** @var RefreshToken|null */
    public $RefreshToken = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'RefreshToken' => \LogoObjects\Clients\sys\RefreshToken::class,
        ]);
    }
}

/**
 * RefreshToken
 */
class RefreshToken extends \LogoObjects\Support\Entity
{
    public ?string $Id = null;
    public ?string $Subject = null;
    public ?string $ClientId = null;
    public ?string $IssuedUtc = null;
    public ?string $ExpiresUtc = null;
    public ?string $ProtectedTicket = null;
}

/**
 * HealthCheck
 */
class HealthCheck extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $LobjectsWithLicenseSettingCount = null;
    /** @var int|float|null */
    public $LobjectsWithoutLicenseSettingCount = null;
    /** @var int|float|null */
    public $LobjectsWithoutLicensePoolCount = null;
    /** @var int|float|null */
    public $LobjectsWithLicensePoolCount = null;
    /** @var int|float|null */
    public $NotRespondingLobjectsWithoutLicenseCount = null;
    /** @var int|float|null */
    public $NotRespondingLobjectsWithLicenseCount = null;
}

/**
 * Sys
 */
class Sys extends \LogoObjects\Types\BaseEntity
{
}

/**
 * SysQueryOptions
 */
class SysQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var SysSortSpec|null */
    public $sort = null;
}

/**
 * SysSearchCriteria
 */
class SysSearchCriteria extends \LogoObjects\Support\Entity
{
}

/**
 * SysAnalytics
 */
class SysAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
