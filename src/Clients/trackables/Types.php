<?php

declare(strict_types=1);

namespace LogoObjects\Clients\trackables;

/**
 * TrackObject
 */
class TrackObject extends \LogoObjects\Support\Entity
{
    public ?string $Description = null;
    public ?string $TrackUrl = null;
    public ?string $UnTrackUrl = null;
    public ?string $CheckTrackUrl = null;
}

/**
 * Trackables
 */
class Trackables extends \LogoObjects\Types\BaseEntity
{
}

/**
 * TrackablesQueryOptions
 */
class TrackablesQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var TrackablesSortSpec|null */
    public $sort = null;
}

/**
 * TrackablesSearchCriteria
 */
class TrackablesSearchCriteria extends \LogoObjects\Support\Entity
{
}

/**
 * TrackablesAnalytics
 */
class TrackablesAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
