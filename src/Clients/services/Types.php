<?php

declare(strict_types=1);

namespace LogoObjects\Clients\services;

/**
 * ResourceApiRepository
 */
class ResourceApiRepository extends \LogoObjects\Support\Entity
{
    public ?string $apiVersion = null;
    public ?string $basePath = null;
    public ?string $resourcePath = null;
    public ?array $apis = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'apis' => [\LogoObjects\Clients\services\ResourceApi::class],
        ]);
    }
}

/**
 * ResourceApi
 */
class ResourceApi extends \LogoObjects\Support\Entity
{
    public ?string $path = null;
    public ?string $description = null;
    /** @var ResourceApiSchema|null */
    public $schema = null;
    public ?array $operations = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'schema' => \LogoObjects\Clients\services\ResourceApiSchema::class,
            'operations' => [\LogoObjects\Clients\services\ResourceApiOperation::class],
        ]);
    }
}

/**
 * ResourceApiSchema
 */
class ResourceApiSchema extends \LogoObjects\Support\Entity
{
    public ?string $href = null;
    public ?array $schemaDetails = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'schemaDetails' => [\LogoObjects\Clients\services\ResourceApiSchemaDetail::class],
        ]);
    }
}

/**
 * ResourceApiSchemaDetail
 */
class ResourceApiSchemaDetail extends \LogoObjects\Support\Entity
{
    public ?string $name = null;
    public ?string $type = null;
    public ?string $href = null;
}

/**
 * ResourceApiOperation
 */
class ResourceApiOperation extends \LogoObjects\Support\Entity
{
    public ?string $httpMethod = null;
    public ?string $nickname = null;
    public ?string $responseClass = null;
    /** @var ResourceApiSchema|null */
    public $schema = null;
    public ?string $summary = null;
    public ?string $notes = null;
    public ?array $parameters = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'schema' => \LogoObjects\Clients\services\ResourceApiSchema::class,
            'parameters' => [\LogoObjects\Clients\services\ResourceApiOperationParameter::class],
        ]);
    }
}

/**
 * ResourceApiOperationParameter
 */
class ResourceApiOperationParameter extends \LogoObjects\Support\Entity
{
    public ?string $paramType = null;
    public ?string $name = null;
    public ?string $description = null;
    public ?string $dataType = null;
    public ?bool $required = null;
    /** @var ResourceApiSchema|null */
    public $schema = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'schema' => \LogoObjects\Clients\services\ResourceApiSchema::class,
        ]);
    }
}

/**
 * Services
 */
class Services extends \LogoObjects\Types\BaseEntity
{
}

/**
 * ServicesQueryOptions
 */
class ServicesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var ServicesSortSpec|null */
    public $sort = null;
}

/**
 * ServicesSearchCriteria
 */
class ServicesSearchCriteria extends \LogoObjects\Support\Entity
{
}

/**
 * ServicesAnalytics
 */
class ServicesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
