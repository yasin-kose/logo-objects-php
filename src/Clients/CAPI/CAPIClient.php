<?php

declare(strict_types=1);

namespace LogoObjects\Clients\CAPI;

use LogoObjects\Http\BaseApiClient;
use LogoObjects\Types\ApiResponse;
use LogoObjects\Utils\QueryBuilder;

/**
 * CAPIClient - /CAPI endpoint'i icin CRUD ve ozel islemler.
 */
class CAPIClient extends BaseApiClient
{
    /** @var string */
    protected $endpoint = '/CAPI';

    /**
     * Corresponds to GET /CAPI/Firms/track
     */
    public function capiFirmstrackV1()
    {
        $path = "/CAPI/Firms/track";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /CAPI/Firms/untrack
     */
    public function capiFirmsuntrackV1()
    {
        $path = "/CAPI/Firms/untrack";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /CAPI/Firms/checktrack
     */
    public function capiFirmschecktrackV1()
    {
        $path = "/CAPI/Firms/checktrack";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /CAPI/Users/track
     */
    public function capiUserstrackV1()
    {
        $path = "/CAPI/Users/track";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /CAPI/Users/untrack
     */
    public function capiUsersuntrackV1()
    {
        $path = "/CAPI/Users/untrack";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /CAPI/Users/checktrack
     */
    public function capiUserschecktrackV1()
    {
        $path = "/CAPI/Users/checktrack";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /CAPI/Terminals/track
     */
    public function capiTerminalstrackV1()
    {
        $path = "/CAPI/Terminals/track";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /CAPI/Terminals/untrack
     */
    public function capiTerminalsuntrackV1()
    {
        $path = "/CAPI/Terminals/untrack";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /CAPI/Terminals/checktrack
     */
    public function capiTerminalschecktrackV1()
    {
        $path = "/CAPI/Terminals/checktrack";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /CAPI/Roles/track
     */
    public function capiRolestrackV1()
    {
        $path = "/CAPI/Roles/track";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /CAPI/Roles/untrack
     */
    public function capiRolesuntrackV1()
    {
        $path = "/CAPI/Roles/untrack";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to GET /CAPI/Roles/checktrack
     */
    public function capiRoleschecktrackV1()
    {
        $path = "/CAPI/Roles/checktrack";
        return $this->request('GET', $path);
    }

    /**
     * Retrieves database column information for the Capi entity.
     */
    public function getDbColumns()
    {
        $path = "{$this->endpoint}/dbcolumns";
        return $this->request('GET', $path);
    }

    /**
     * Enables change tracking for the Capi entity.
     */
    public function track()
    {
        $path = "{$this->endpoint}/track";
        return $this->request('GET', $path);
    }

    /**
     * Disables change tracking for the Capi entity.
     */
    public function untrack()
    {
        $path = "{$this->endpoint}/untrack";
        return $this->request('GET', $path);
    }

    /**
     * Checks the change tracking status for the Capi entity.
     */
    public function checkTrackStatus()
    {
        $path = "{$this->endpoint}/checktrack";
        return $this->request('GET', $path);
    }
}
