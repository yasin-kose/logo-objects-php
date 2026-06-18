<?php

declare(strict_types=1);

namespace LogoObjects\Exception;

use RuntimeException;
use Throwable;

/** Logo Objects REST servisi hatalari icin taban istisna. */
class LogoApiError extends RuntimeException
{
    /** @var int */
    protected $statusCode;
    /** @var mixed */
    protected $response;

    /**
     * @param mixed          $response
     */
    public function __construct(string $message, int $statusCode = 0, $response = null, Throwable $previous = null)
    {
        parent::__construct($message, $statusCode, $previous);
        $this->statusCode = $statusCode;
        $this->response = $response;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /** @return mixed */
    public function getResponse()
    {
        return $this->response;
    }
}