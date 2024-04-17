<?php

namespace Laximo\Search\responseObjects;

class UsDetailResolveResponse extends Base
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var UsBrandOem[]
     */
    public $data = [];

    protected function getFields()
    {
        return [
            'requestId' => 'string',
            'data' => 'UsBrandOem[]',
        ];
    }
}