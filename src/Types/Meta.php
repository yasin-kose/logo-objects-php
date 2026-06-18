<?php

declare(strict_types=1);

namespace LogoObjects\Types;

use LogoObjects\Support\Entity;

/** API yanitlari ve ic koleksiyonlar icin meta bilgisi. */
class Meta extends Entity
{
    public ?string $href = null;
    public ?string $mediaType = null;
    public ?string $apiVersion = null;
}