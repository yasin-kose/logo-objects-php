<?php

declare(strict_types=1);

namespace LogoObjects\Exception;

class ValidationError extends LogoApiError
{
    /** @var string[] */
    protected $validationErrors;
    /** @var array<string,string[]> */
    protected $modelState;

    /**
     * @param string[]               $validationErrors duzlestirilmis hata metinleri
     * @param mixed                  $response         ham ya da cozulmus sunucu yaniti
     * @param array<string,string[]> $modelState       ASP.NET ModelState haritasi (alan => mesajlar)
     */
    public function __construct(string $message, array $validationErrors = [], $response = null, array $modelState = [])
    {
        parent::__construct($message, 400, $response);
        $this->validationErrors = $validationErrors;
        $this->modelState = $modelState;
    }

    /** @return string[] */
    public function getValidationErrors(): array
    {
        return $this->validationErrors;
    }

    /**
     * Sunucunun ModelState haritasi: alan adi => mesajlar. Logo genelde
     * "ValError0", "ValError1" gibi anahtarlar kullanir.
     *
     * @return array<string,string[]>
     */
    public function getModelState(): array
    {
        return $this->modelState;
    }
}