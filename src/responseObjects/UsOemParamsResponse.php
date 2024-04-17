<?php

namespace Laximo\Search\responseObjects;

class UsOemParamsResponse extends Base
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var UsOemParams
     */
    public $data;

    protected function getFields()
    {
        return [
            'requestId' => 'string',
            'data' => 'UsOemParams',
        ];
    }
}