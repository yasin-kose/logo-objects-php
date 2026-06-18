<?php

declare(strict_types=1);

namespace LogoObjects\Clients\sys;

use LogoObjects\Http\BaseApiClient;
use LogoObjects\Types\ApiResponse;
use LogoObjects\Utils\QueryBuilder;

/**
 * SysClient - /sys endpoint'i icin CRUD ve ozel islemler.
 */
class SysClient extends BaseApiClient
{
    /** @var string */
    protected $endpoint = '/sys';

    /**
     * Corresponds to GET /sys/IdmEnabled/{cfgName}
     */
    public function sys_IdmEnabled(string $cfgName)
    {
        $path = "/sys/IdmEnabled/{$cfgName}";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /sys/UpdateTenant/{version}/{dbVersion}
     */
    public function sys_UpdateTenant(string $version, string $dbVersion, array $data)
    {
        $path = "/sys/UpdateTenant/{$version}/{$dbVersion}";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /sys/CreateTenant
     */
    public function sys_CreateTenant(array $data)
    {
        $path = "/sys/CreateTenant";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /sys/CreateUser
     */
    public function sys_CreateUser(array $data)
    {
        $path = "/sys/CreateUser";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to GET /sys/activestate
     */
    public function sys_GetActiveState()
    {
        $path = "/sys/activestate";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /sys/healthcheck
     */
    public function sys_healthcheck()
    {
        $path = "/sys/healthcheck";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /sys/servicehealthcheck
     */
    public function sys_healthcheckGet()
    {
        $path = "/sys/servicehealthcheck";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /sys/healthcheckerror
     */
    public function sys_healthcheckerror()
    {
        $path = "/sys/healthcheckerror";
        return $this->request('GET', $path);
    }

    /**
     * Retrieves database column information for the Sys entity.
     */
    public function getDbColumns()
    {
        $path = "{$this->endpoint}/dbcolumns";
        return $this->request('GET', $path);
    }

    /**
     * Enables change tracking for the Sys entity.
     */
    public function track()
    {
        $path = "{$this->endpoint}/track";
        return $this->request('GET', $path);
    }

    /**
     * Disables change tracking for the Sys entity.
     */
    public function untrack()
    {
        $path = "{$this->endpoint}/untrack";
        return $this->request('GET', $path);
    }

    /**
     * Checks the change tracking status for the Sys entity.
     */
    public function checkTrackStatus()
    {
        $path = "{$this->endpoint}/checktrack";
        return $this->request('GET', $path);
    }
}
