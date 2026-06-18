<?php

declare(strict_types=1);

namespace LogoObjects\Clients\licenses;

use LogoObjects\Http\BaseApiClient;
use LogoObjects\Types\ApiResponse;
use LogoObjects\Utils\QueryBuilder;

/**
 * LicensesClient - /licenses endpoint'i icin CRUD ve ozel islemler.
 */
class LicensesClient extends BaseApiClient
{
    /** @var string */
    protected $endpoint = '/licenses';

    /**
     * Corresponds to GET /licenses/{id}/type/{type}
     */
    public function authorization_V1_licenses($id, string $type)
    {
        $path = "/licenses/{$id}/type/{$type}";
        return $this->request('GET', $path);
    }

    /**
     * Retrieves database column information for the Licenses entity.
     */
    public function getDbColumns()
    {
        $path = "{$this->endpoint}/dbcolumns";
        return $this->request('GET', $path);
    }

    /**
     * Enables change tracking for the Licenses entity.
     */
    public function track()
    {
        $path = "{$this->endpoint}/track";
        return $this->request('GET', $path);
    }

    /**
     * Disables change tracking for the Licenses entity.
     */
    public function untrack()
    {
        $path = "{$this->endpoint}/untrack";
        return $this->request('GET', $path);
    }

    /**
     * Checks the change tracking status for the Licenses entity.
     */
    public function checkTrackStatus()
    {
        $path = "{$this->endpoint}/checktrack";
        return $this->request('GET', $path);
    }
}
