<?php

declare(strict_types=1);

namespace LogoObjects\Exception;

class AuthenticationError extends LogoApiError
{
    /**
     * @param mixed $response ham ya da cozulmus sunucu yaniti
     */
    public function __construct(string $message = 'Gecersiz ya da eksik kimlik bilgisi', $response = null)
    {
        parent::__construct($message, 401, $response);
    }
}