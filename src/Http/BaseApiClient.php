<?php

declare(strict_types=1);

namespace LogoObjects\Http;

use LogoObjects\Exception\ApiException;
use LogoObjects\Exception\AuthenticationError;
use LogoObjects\Exception\LogoApiError;
use LogoObjects\Exception\NetworkError;
use LogoObjects\Exception\RateLimitError;
use LogoObjects\Exception\ValidationError;
use LogoObjects\Utils\Debug;

/**
 * Tum entity client'larinin tabani. cURL ile dusuk seviye istek,
 * OAuth2 (password grant) token yonetimi ve sorgu olusturma saglar.
 *
 * Yapilandirma anahtarlari (node ile uyumlu, eski adlar da kabul edilir):
 *   baseUrl|baseURL, username|grantTypeUsername, password|grantTypePassword,
 *   firmno|grantTypeFirmno, basicAuth|grantTypeBasicAuth, apiKey, timeout, verifySsl
 */
class BaseApiClient
{
    /** @var array<string,mixed> */
    protected $config;
    /** @var string */
    protected $baseUrl;
    /** @var string|null */
    protected $token = null;

    /**
     * @param array<string,mixed> $config
     */
    public function __construct(array $config)
    {
        $base = $config['baseUrl'] ?? $config['baseURL'] ?? null;
        if (empty($base)) {
            throw new \InvalidArgumentException('Yapilandirmada "baseUrl" zorunludur.');
        }
        $this->baseUrl = rtrim((string) $base, '/');

        $this->config = [
            'username'  => $config['username']  ?? $config['grantTypeUsername']  ?? null,
            'password'  => $config['password']  ?? $config['grantTypePassword']  ?? null,
            'firmno'    => $config['firmno']    ?? $config['grantTypeFirmno']    ?? null,
            'basicAuth' => $config['basicAuth'] ?? $config['grantTypeBasicAuth'] ?? null,
            'apiKey'    => $config['apiKey']    ?? null,
            'timeout'   => $config['timeout']   ?? 30,
            'verifySsl' => $config['verifySsl'] ?? true,
        ];

        if (!empty($this->config['apiKey'])) {
            $this->token = (string) $this->config['apiKey'];
        }
    }

    public function authenticate(): string
    {
        foreach (['username', 'password', 'firmno', 'basicAuth'] as $key) {
            if (empty($this->config[$key])) {
                throw new \InvalidArgumentException(sprintf('Token almak icin "%s" gereklidir.', $key));
            }
        }

        $body = http_build_query([
            'grant_type' => 'password',
            'username'   => $this->config['username'],
            'Firmno'     => $this->config['firmno'],
            'password'   => $this->config['password'],
        ]);

        list($status, $raw) = $this->execCurl('POST', $this->baseUrl . '/token', $body, [
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: Basic ' . $this->config['basicAuth'],
        ]);

        if ($status !== 200) {
            throw new AuthenticationError('Token alinamadi (HTTP ' . $status . ').');
        }
        $decoded = json_decode($raw, true);
        if (!is_array($decoded) || empty($decoded['access_token'])) {
            throw new AuthenticationError('Yanitta access_token yok.');
        }
        $this->token = (string) $decoded['access_token'];
        return $this->token;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Dusuk seviye istek. Path zaten ?query icerebilir.
     *
     * @param string                   $method
     * @param string                   $path
     * @param array<string,mixed>|null $data
     * @return mixed cozulmus JSON (genelde array)
     */
    public function request(string $method, string $path, $data = null)
    {
        if ($this->token === null) {
            $this->authenticate();
        }
        $url = $this->baseUrl . '/' . ltrim($path, '/');
        $payload = $data === null ? null : json_encode($data, JSON_UNESCAPED_UNICODE);

        $headers = [
            'Content-Type: application/json',
            'Accept: application/json',
            'Authorization: Bearer ' . $this->token,
        ];

        Debug::log(strtoupper($method) . ' ' . $url);
        list($status, $raw) = $this->execCurl($method, $url, $payload, $headers);

        if ($status === 401 && !empty($this->config['username'])) {
            $this->authenticate();
            $headers[2] = 'Authorization: Bearer ' . $this->token;
            list($status, $raw) = $this->execCurl($method, $url, $payload, $headers);
        }

        if ($status < 200 || $status >= 300) {
            $this->throwForStatus($status, $raw);
        }

        if ($raw === '' || $raw === null) {
            return [];
        }
        $decoded = json_decode($raw, true);
        return is_array($decoded) ? $decoded : ['raw' => $raw];
    }

    /**
     * @param string $raw
     */
    protected function throwForStatus(int $status, $raw): void
    {
        $decoded = json_decode((string) $raw, true);
        $message = 'Istek basarisiz (HTTP ' . $status . ')';
        if (is_array($decoded) && isset($decoded['message'])) {
            $message = (string) $decoded['message'];
        }
        switch ($status) {
            case 400:
                if (is_array($decoded) && isset($decoded['validationErrors']) && is_array($decoded['validationErrors'])) {
                    throw new ValidationError($message, $decoded['validationErrors']);
                }
                throw new LogoApiError($message, 400, $decoded);
            case 401:
                throw new AuthenticationError($message);
            case 429:
                $retry = is_array($decoded) && isset($decoded['retryAfter']) ? (int) $decoded['retryAfter'] : null;
                throw new RateLimitError($message, $retry);
            default:
                throw new ApiException($message . ': ' . (string) $raw, $status, $decoded !== null ? $decoded : $raw);
        }
    }

    /**
     * QueryOptions dizisini sorgu metnine cevirir (node buildQueryString).
     *
     * @param array<string,mixed> $options
     */
    public function buildQueryString(array $options): string
    {
        $pairs = [];
        foreach ($options as $key => $value) {
            if ($value === null) {
                continue;
            }
            if ($key === 'fields' && is_array($value)) {
                $pairs[$key] = implode(',', $value);
            } elseif ($key === 'sort' && is_array($value)) {
                $first = $value[0] ?? null;
                if (is_array($first)) {
                    $dir = $value[1] ?? null;
                    $pairs[$key] = $dir
                        ? implode(',', array_map(function ($f) use ($dir) {
                            return $f . ' ' . $dir;
                        }, $first))
                        : implode(',', $first);
                } else {
                    $dir = $value[1] ?? null;
                    $pairs[$key] = $dir ? ($first . ' ' . $dir) : (string) $first;
                }
            } elseif (is_array($value)) {
                $pairs[$key] = implode(',', $value);
            } elseif (is_bool($value)) {
                $pairs[$key] = $value ? 'true' : 'false';
            } else {
                $pairs[$key] = (string) $value;
            }
        }

        $parts = [];
        foreach ($pairs as $k => $v) {
            $parts[] = rawurlencode((string) $k) . '=' . rawurlencode((string) $v);
        }
        return implode('&', $parts);
    }

    public function ping(): bool
    {
        try {
            $this->request('GET', '/ping');
            return true;
        } catch (\Throwable $e) {
            return false;
        }
    }

    public function isTokenValid(): bool
    {
        try {
            $this->request('GET', '/istokenvalid');
            return true;
        } catch (\Throwable $e) {
            return false;
        }
    }

    /**
     * @param string|null $body
     * @param string[]    $headers
     * @return array{0:int,1:string}
     */
    private function execCurl(string $method, string $url, $body, array $headers): array
    {
        $ch = curl_init($url);
        if ($ch === false) {
            throw new NetworkError('cURL baslatilamadi.');
        }
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_TIMEOUT, (int) $this->config['timeout']);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, (bool) $this->config['verifySsl']);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $this->config['verifySsl'] ? 2 : 0);
        if ($body !== null) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        }
        $raw = curl_exec($ch);
        if ($raw === false) {
            $err = curl_error($ch);
            curl_close($ch);
            throw new NetworkError('Ag hatasi: ' . $err);
        }
        $status = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return [$status, (string) $raw];
    }
}