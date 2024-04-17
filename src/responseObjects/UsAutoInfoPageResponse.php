<?php

namespace Laximo\Search\responseObjects;

class UsAutoInfoPageResponse extends Base
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var UsAutoInfo[]
     */
    public $data = [];

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalPages;

    /**
     * @var int
     */
    public $totalElements;

    protected function getFields()
    {
        return [
            'requestId' => 'string',
            'data' => 'UsAutoInfo[]',
            'pageNumber' => 'int',
            'pageSize' => 'int',
            'totalPages' => 'int',
            'totalElements' => 'int',
        ];
    }
}