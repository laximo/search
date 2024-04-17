<?php

namespace Laximo\Search\responseObjects;

class UsSearchByOemsResponse extends Base
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var UsSearchByOems[]
     */
    public $data = [];

    protected function getFields()
    {
        return [
            'requestId' => 'string',
            'data' => 'UsSearchByOems[]',
        ];
    }
}