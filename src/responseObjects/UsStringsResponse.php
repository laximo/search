<?php

namespace Laximo\Search\responseObjects;

class UsStringsResponse extends Base
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $data;

    protected function getFields()
    {
        return [
            'requestId' => 'string',
            'data' => 'string[]',
        ];
    }
}