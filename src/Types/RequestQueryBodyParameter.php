<?php

declare(strict_types=1);

namespace LogoObjects\Types;

use LogoObjects\Support\Entity;

/** Ic ice islemler icin govde-temelli sorgu parametreleri. */
class RequestQueryBodyParameter extends Entity
{
    public ?string $fields = null;
    public ?string $expand = null;
    public ?string $expandLevel = null;
    public ?string $sort = null;
    public ?string $q = null;
}