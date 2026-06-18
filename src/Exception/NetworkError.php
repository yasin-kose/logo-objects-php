<?php

declare(strict_types=1);

namespace LogoObjects\Exception;

use Throwable;

class NetworkError extends LogoApiError
{
    public function __construct(string $message, Throwable $previous = null)
    {
        parent::__construct($message, 0, null, $previous);
    }
}