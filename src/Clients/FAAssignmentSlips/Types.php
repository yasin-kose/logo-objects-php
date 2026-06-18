<?php

declare(strict_types=1);

namespace LogoObjects\Clients\FAAssignmentSlips;

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
 * ResultData
 */
class ResultData extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    /** @var int|float|null */
    public $offset = null;
    /** @var int|float|null */
    public $count = null;
    /** @var int|float|null */
    public $totalCount = null;
    /** @var int|float|null */
    public $limit = null;
    /** @var Meta|null */
    public $first = null;
    /** @var Meta|null */
    public $next = null;
    /** @var Meta|null */
    public $previous = null;
    /** @var mixed */
    public $items = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
            'first' => \LogoObjects\Types\Meta::class,
            'next' => \LogoObjects\Types\Meta::class,
            'previous' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * Dbcolumnproperties
 */
class Dbcolumnproperties extends \LogoObjects\Support\Entity
{
    /** @var Meta|null */
    public $Meta = null;
    public ?string $ColumnName = null;
    public ?string $DataType = null;
    public ?string $MaximumCharacterLength = null;
    public ?string $NumericPrecision = null;
    public ?string $NumericPrecisionRadix = null;
    public ?string $NumericScale = null;
    public ?string $DatetimePrecision = null;
    public ?string $IsNullable = null;

    protected static function casts(): array
    {
        return array_merge(parent::casts(), [
            'Meta' => \LogoObjects\Types\Meta::class,
        ]);
    }
}

/**
 * Faassignmentslips
 */
class Faassignmentslips extends \LogoObjects\Types\BaseEntity
{
    /** @var int|float|null */
    public $PERREF = null;
    /** @var int|float|null */
    public $EMPGRPREF = null;
    /** @var int|float|null */
    public $FAREF = null;
    /** @var int|float|null */
    public $TRCODE = null;
    public ?string $FICHENO = null;
    public ?string $DOCODE = null;
    public ?string $AUXIL_CODE = null;
    public ?string $AUTH_CODE = null;
    /** @var int|float|null */
    public $DIVISION = null;
    /** @var int|float|null */
    public $FACTORY = null;
    /** @var int|float|null */
    public $DEPARTMENT = null;
    /** @var int|float|null */
    public $WAREHOUSE = null;
    public ?string $FADEPARTMENT = null;
    /** @var int|float|null */
    public $QUANTITY = null;
    public ?string $DATE = null;
    public ?string $LASTTRANDATE = null;
    public ?string $HAVEDATE = null;
    public ?string $PLNDUEDATE = null;
    public ?string $DUEDATE = null;
    /** @var int|float|null */
    public $FASTATUS = null;
    public ?string $EXP = null;
    /** @var int|float|null */
    public $ISEMPGRP = null;
    /** @var int|float|null */
    public $FATRANSREF = null;
    /** @var int|float|null */
    public $OLDAMNT = null;
    /** @var int|float|null */
    public $CUROP = null;
    public ?string $FAREGCODE = null;
    public ?string $FACODE = null;
    public ?string $FANAME = null;
    /** @var int|float|null */
    public $FCNOCHANGED = null;
    /** @var int|float|null */
    public $DOCNRREF = null;
    public ?string $PERREGCODE = null;
    public ?string $EMPGRPCODE = null;
    public ?string $ZFICHENO = null;
    public ?string $XBUFS = null;
}

/**
 * FaassignmentslipsQueryOptions
 */
class FaassignmentslipsQueryOptions extends \LogoObjects\Support\Entity
{
    public ?array $fields = null;
    /** @var FaassignmentslipsSortSpec|null */
    public $sort = null;
}

/**
 * FaassignmentslipsSearchCriteria
 */
class FaassignmentslipsSearchCriteria extends \LogoObjects\Support\Entity
{
    /** @var mixed */
    public $internalReference = null;
    /** @var mixed */
    public $perref = null;
    /** @var mixed */
    public $empgrpref = null;
    /** @var mixed */
    public $faref = null;
    /** @var mixed */
    public $trcode = null;
    /** @var mixed */
    public $ficheno = null;
    /** @var mixed */
    public $docode = null;
    /** @var mixed */
    public $auxilCode = null;
    /** @var mixed */
    public $authCode = null;
    /** @var mixed */
    public $division = null;
    /** @var mixed */
    public $factory = null;
    /** @var mixed */
    public $department = null;
    /** @var mixed */
    public $warehouse = null;
    /** @var mixed */
    public $fadepartment = null;
    /** @var mixed */
    public $quantity = null;
    /** @var mixed */
    public $date = null;
    /** @var mixed */
    public $lasttrandate = null;
    /** @var mixed */
    public $havedate = null;
    /** @var mixed */
    public $plnduedate = null;
    /** @var mixed */
    public $duedate = null;
    /** @var mixed */
    public $fastatus = null;
    /** @var mixed */
    public $exp = null;
    /** @var mixed */
    public $isempgrp = null;
    /** @var mixed */
    public $dataSiteid = null;
    /** @var mixed */
    public $xmlAttribute = null;
    /** @var mixed */
    public $dataReference = null;
    /** @var mixed */
    public $createdBy = null;
    /** @var mixed */
    public $dateCreated = null;
    /** @var mixed */
    public $hourCreated = null;
    /** @var mixed */
    public $minCreated = null;
    /** @var mixed */
    public $secCreated = null;
    /** @var mixed */
    public $modifiedBy = null;
    /** @var mixed */
    public $dateModified = null;
    /** @var mixed */
    public $hourModified = null;
    /** @var mixed */
    public $minModified = null;
    /** @var mixed */
    public $secModified = null;
    /** @var mixed */
    public $fatransref = null;
    /** @var mixed */
    public $oldamnt = null;
    /** @var mixed */
    public $curop = null;
    /** @var mixed */
    public $faregcode = null;
    /** @var mixed */
    public $facode = null;
    /** @var mixed */
    public $faname = null;
    /** @var mixed */
    public $fcnochanged = null;
    /** @var mixed */
    public $docnrref = null;
    /** @var mixed */
    public $perregcode = null;
    /** @var mixed */
    public $empgrpcode = null;
    /** @var mixed */
    public $zficheno = null;
    /** @var mixed */
    public $xbufs = null;
}

/**
 * FaassignmentslipsAnalytics
 */
class FaassignmentslipsAnalytics extends \LogoObjects\Support\Entity
{
    /** @var int|float|null */
    public $total = null;
}
