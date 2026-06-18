<?php

declare(strict_types=1);

namespace LogoObjects\Clients\Firmdocs;

use LogoObjects\Http\BaseApiClient;
use LogoObjects\Types\ApiResponse;
use LogoObjects\Utils\QueryBuilder;

/**
 * FirmdocsClient - /Firmdocs endpoint'i icin CRUD ve ozel islemler.
 */
class FirmdocsClient extends BaseApiClient
{
    /** @var string */
    protected $endpoint = '/Firmdocs';

    /**
     * Retrieves a single Firmdocs entity by its internal reference ID.
     */
    public function getById($id, array $options = [])
    {
        $queryString = $this->buildQueryString($options);
        $path = "{$this->endpoint}/{$id}";
        if ($queryString !== '') {
            $path .= '?' . $queryString;
        }
        return \LogoObjects\Clients\Firmdocs\Firmdocs::fromArray($this->request('GET', $path));
    }

    /**
     * Deletes a Firmdocs entity by its internal reference ID.
     */
    public function delete($id)
    {
        $path = "{$this->endpoint}/{$id}";
        return \LogoObjects\Clients\Firmdocs\Firmdocs::fromArray($this->request('DELETE', $path));
    }

    /**
     * Corresponds to POST /Firmdocs/saveorupdate
     */
    public function firmDocs_V1_(array $data)
    {
        $path = "/Firmdocs/saveorupdate";
        return $this->request('POST', $path, $data);
    }

    /**
     * Corresponds to POST /Firmdocs/detailsearch
     */
    public function firmDocs_V1_PostForSearch(array $data)
    {
        $path = "/Firmdocs/detailsearch";
        return $this->request('POST', $path, $data);
    }

    /**
     * Retrieves database column information for the Firmdocs entity.
     */
    public function getDbColumns()
    {
        $path = "{$this->endpoint}/dbcolumns";
        return $this->request('GET', $path);
    }

    /**
     * Enables change tracking for the Firmdocs entity.
     */
    public function track()
    {
        $path = "{$this->endpoint}/track";
        return $this->request('GET', $path);
    }

    /**
     * Disables change tracking for the Firmdocs entity.
     */
    public function untrack()
    {
        $path = "{$this->endpoint}/untrack";
        return $this->request('GET', $path);
    }

    /**
     * Checks the change tracking status for the Firmdocs entity.
     */
    public function checkTrackStatus()
    {
        $path = "{$this->endpoint}/checktrack";
        return $this->request('GET', $path);
    }
}
