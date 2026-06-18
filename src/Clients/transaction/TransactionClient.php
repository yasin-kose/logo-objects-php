<?php

declare(strict_types=1);

namespace LogoObjects\Clients\transaction;

use LogoObjects\Http\BaseApiClient;
use LogoObjects\Types\ApiResponse;
use LogoObjects\Utils\QueryBuilder;

/**
 * TransactionClient - /transaction endpoint'i icin CRUD ve ozel islemler.
 */
class TransactionClient extends BaseApiClient
{
    /** @var string */
    protected $endpoint = '/transaction';

    /**
     * Corresponds to GET /transaction/begin
     */
    public function transaction_V1_Begin()
    {
        $path = "/transaction/begin";
        return $this->request('GET', $path);
    }

    /**
     * Corresponds to POST /transaction/{id}/commit
     */
    public function transaction_V1_Commit(string $id)
    {
        $path = "/transaction/{$id}/commit";
        return $this->request('POST', $path);
    }

    /**
     * Corresponds to POST /transaction/{id}/rollback
     */
    public function transaction_V1_RollBack(string $id)
    {
        $path = "/transaction/{$id}/rollback";
        return $this->request('POST', $path);
    }

    /**
     * Retrieves database column information for the Transaction entity.
     */
    public function getDbColumns()
    {
        $path = "{$this->endpoint}/dbcolumns";
        return $this->request('GET', $path);
    }

    /**
     * Enables change tracking for the Transaction entity.
     */
    public function track()
    {
        $path = "{$this->endpoint}/track";
        return $this->request('GET', $path);
    }

    /**
     * Disables change tracking for the Transaction entity.
     */
    public function untrack()
    {
        $path = "{$this->endpoint}/untrack";
        return $this->request('GET', $path);
    }

    /**
     * Checks the change tracking status for the Transaction entity.
     */
    public function checkTrackStatus()
    {
        $path = "{$this->endpoint}/checktrack";
        return $this->request('GET', $path);
    }
}
