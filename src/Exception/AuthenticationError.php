<?php

declare(strict_types=1);

namespace LogoObjects\Exception;

class AuthenticationError extends LogoApiError
{
    public function __construct(string $message = 'Gecersiz ya da eksik kimlik bilgisi')
    {
        parent::__construct($message, 401);
    }
}