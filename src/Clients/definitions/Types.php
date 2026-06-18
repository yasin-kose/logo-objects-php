<?php

declare(strict_types=1);

namespace LogoObjects\Clients\definitions;

/**
 * Definitions
 */
class Definitions extends \LogoObjects\Types\BaseEntity
{
}

/**
 * DefinitionsQueryOptions
 */
class DefinitionsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var DefinitionsSortSpec|null */
    public $sort = null;
}

/**
 * DefinitionsSearchCriteria
 */
class DefinitionsSearchCriteria extends \LogoObjects\Support\Entity
{
}

/**
 * DefinitionsAnalytics
 */
class DefinitionsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
