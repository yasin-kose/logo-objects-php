<?php

declare(strict_types=1);

namespace LogoObjects\Exception;

class ValidationError extends LogoApiError
{
    /** @var string[] */
    protected $validationErrors;

    /**
     * @param string[] $validationErrors
     */
    public function __construct(string $message, array $validationErrors = [])
    {
        parent::__construct($message, 400);
        $this->validationErrors = $validationErrors;
    }

    /** @return string[] */
    public function getValidationErrors(): array
    {
        return $this->validationErrors;
    }
}