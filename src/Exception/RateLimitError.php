<?php

declare(strict_types=1);

namespace LogoObjects\Exception;

class RateLimitError extends LogoApiError
{
    /** @var int|null */
    protected $retryAfter;

    /**
     * @param mixed $response ham ya da cozulmus sunucu yaniti
     */
    public function __construct(string $message = 'Hiz siniri asildi', ?int $retryAfter = null, $response = null)
    {
        parent::__construct($message, 429, $response);
        $this->retryAfter = $retryAfter;
    }

    public function getRetryAfter(): ?int
    {
        return $this->retryAfter;
    }
}