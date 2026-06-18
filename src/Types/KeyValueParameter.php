<?php

declare(strict_types=1);

namespace LogoObjects\Types;

use LogoObjects\Support\Entity;

/** API ozel metotlarinin dondurdugu anahtar/deger parametresi. */
class KeyValueParameter extends Entity
{
    public ?string $Name = null;
    /** @var mixed */
    public $Value = null;
}