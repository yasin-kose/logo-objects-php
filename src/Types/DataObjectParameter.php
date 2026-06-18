<?php

declare(strict_types=1);

namespace LogoObjects\Types;

use LogoObjects\Support\Entity;

/** Kayit olusturma/guncelleme sirasindaki dogrulama ve isleme bayraklari. */
class DataObjectParameter extends Entity
{
    public ?bool $ReplicMode = null;
    public ?bool $CheckParams = null;
    public ?bool $CheckRight = null;
    public ?bool $Validation = null;
    public ?bool $CheckApproveDate = null;
    public ?bool $ApplyCampaignOnPreSave = null;
    public ?bool $ApplyConditionOnPreSave = null;
    public ?bool $FormSeriLotLinesOnPreSave = null;
    public ?bool $FillAccCodesOnPreSave = null;
    public ?bool $CreateCompositeLinesOnPreSave = null;
    /** @var mixed */
    public $ExtraQueryParameters = null;
}