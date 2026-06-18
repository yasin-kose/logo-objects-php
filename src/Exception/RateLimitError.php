<?php

declare(strict_types=1);

namespace LogoObjects\Exception;

class RateLimitError extends LogoApiError
{
    /** @var int|null */
    protected $retryAfter;

    public function __construct(string $message = 'Hiz siniri asildi', ?int $retryAfter = null)
    {
        parent::__construct($message, 429);
        $this->retryAfter = $retryAfter;
    }

    public function getRetryAfter(): ?int
    {
        return $this->retryAfter;
    }
}