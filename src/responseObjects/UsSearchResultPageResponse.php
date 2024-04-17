<?php

namespace Laximo\Search\responseObjects;

class UsSearchResultPageResponse extends Base
{
    /**
     * @var UsSearchDetail[]
     */
    public $data;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var UsParsedRequest
     */
    public $parsedRequest;

    /**
     * @var integer
     */
    public $pageNumber;

    /**
     * @var integer
     */
    public $pageSize;

    /**
     * @var integer
     */
    public $totalPages;

    /**
     * @var integer
     */
    public $totalElements;

    /**
     * @return UsSearchDetail[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function getRequestId(): string
    {
        return $this->requestId;
    }

    /**
     * @return UsParsedRequest
     */
    public function getParsedRequest(): UsParsedRequest
    {
        return $this->parsedRequest;
    }

    /**
     * @return int
     */
    public function getPageNumber(): int
    {
        return $this->pageNumber;
    }

    /**
     * @return int
     */
    public function getPageSize(): int
    {
        return $this->pageSize;
    }

    /**
     * @return int
     */
    public function getTotalPages(): int
    {
        return $this->totalPages;
    }

    /**
     * @return int
     */
    public function getTotalElements(): int
    {
        return $this->totalElements;
    }

    
    protected function getFields()
    {
        return [
            'data' => 'UsSearchDetail[]',
            'requestId' => 'string',
            'parsedRequest' => 'UsParsedRequest',
            'pageNumber' => 'integer',
            'pageSize' => 'integer',
            'totalPages' => 'integer',
            'totalElements' => 'integer',
        ];
    }
}