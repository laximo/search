<?php

namespace Laximo\Search\responseObjects;

class UsAutoInfoListResponse extends Base
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var UsAutoInfo[]
     */
    public $data = [];

    protected function getFields()
    {
        return [
            'requestId' => 'string',
            'data' => 'UsAutoInfo[]',
        ];
    }
}