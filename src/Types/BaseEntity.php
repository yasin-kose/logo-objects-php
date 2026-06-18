<?php

declare(strict_types=1);

namespace LogoObjects\Types;

use LogoObjects\Support\Entity;

/** Tum Logo nesnelerinin ortak denetim alanlari. */
class BaseEntity extends Entity
{
    /** @var int|float|null */
    public $INTERNAL_REFERENCE = null;
    /** @var int|float|null */
    public $RECORD_STATUS = null;
    /** @var int|float|null */
    public $DATA_SITEID = null;
    /** @var int|float|null */
    public $DATA_REFERENCE = null;
    /** @var int|float|null */
    public $XML_ATTRIBUTE = null;
    /** @var int|float|null */
    public $CREATED_BY = null;
    public ?string $DATE_CREATED = null;
    /** @var int|float|null */
    public $HOUR_CREATED = null;
    /** @var int|float|null */
    public $MIN_CREATED = null;
    /** @var int|float|null */
    public $SEC_CREATED = null;
    /** @var int|float|null */
    public $MODIFIED_BY = null;
    public ?string $DATE_MODIFIED = null;
    /** @var int|float|null */
    public $HOUR_MODIFIED = null;
    /** @var int|float|null */
    public $MIN_MODIFIED = null;
    /** @var int|float|null */
    public $SEC_MODIFIED = null;
    /** @var int|float|null */
    public $TEXTINC = null;
    /** @var int|float|null */
    public $IMAGEINC = null;
    /** @var Meta|null */
    public $Meta = null;
    /** @var DataObjectParameter|null */
    public $DataObjectParameter = null;

    protected static function casts(): array
    {
        return [
            'Meta' => \LogoObjects\Types\Meta::class,
            'DataObjectParameter' => \LogoObjects\Types\DataObjectParameter::class,
        ];
    }
}