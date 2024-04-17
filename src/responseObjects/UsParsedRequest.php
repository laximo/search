<?php

namespace Laximo\Search\responseObjects;

class UsParsedRequest extends Base
{

    /**
     * @var integer|null
     */
    public $autoInfoId;

    /**
     * @var string|null
     */
    public $detectedVehicleIdent;

    /**
     * @var UsBrand[]
     */
    public $detectedBrands = [];

    /**
     * @var string[]
     */
    public $detectedOems = [];

    /**
     * @var string
     */
    public $searchBy;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $filteredQuery;

    protected function getFields()
    {
        return [
            'autoInfoId' => '?integer',
            'detectedVehicleIdent' => '?string',
            'detectedBrands' => 'UsBrand[]',
            'detectedOems' => 'string[]',
            'searchBy' => 'string',
            'query' => 'string',
            'filteredQuery' => 'string',
        ];
    }

    /**
     * @return ?int
     */
    public function getAutoInfoId(): ?int
    {
        return $this->autoInfoId;
    }

    /**
     * @param ?int $autoInfoId
     */
    public function setAutoInfoId(?int $autoInfoId): void
    {
        $this->autoInfoId = $autoInfoId;
    }

    /**
     * @return ?string
     */
    public function getDetectedVehicleIdent(): ?string
    {
        return $this->detectedVehicleIdent;
    }

    /**
     * @param ?string $detectedVehicleIdent
     */
    public function setDetectedVehicleIdent(?string $detectedVehicleIdent): void
    {
        $this->detectedVehicleIdent = $detectedVehicleIdent;
    }

    /**
     * @return UsBrand[]
     */
    public function getDetectedBrands(): array
    {
        return $this->detectedBrands;
    }

    /**
     * @param UsBrand[] $detectedBrands
     */
    public function setDetectedBrands(array $detectedBrands): void
    {
        $this->detectedBrands = $detectedBrands;
    }

    /**
     * @return string[]
     */
    public function getDetectedOems(): array
    {
        return $this->detectedOems;
    }

    /**
     * @param string[] $detectedOems
     */
    public function setDetectedOems(array $detectedOems): void
    {
        $this->detectedOems = $detectedOems;
    }

    /**
     * @return string
     */
    public function getSearchBy(): string
    {
        return $this->searchBy;
    }

    /**
     * @param string $searchBy
     */
    public function setSearchBy(string $searchBy): void
    {
        $this->searchBy = $searchBy;
    }

    /**
     * @return string
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * @param string $query
     */
    public function setQuery(string $query): void
    {
        $this->query = $query;
    }

    /**
     * @return string
     */
    public function getFilteredQuery(): string
    {
        return $this->filteredQuery;
    }

    /**
     * @param string $filteredQuery
     */
    public function setFilteredQuery(string $filteredQuery): void
    {
        $this->filteredQuery = $filteredQuery;
    }

}