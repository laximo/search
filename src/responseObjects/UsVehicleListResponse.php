<?php

namespace Laximo\Search\responseObjects;

class UsVehicleListResponse extends Base
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var UsVehicle[]
     */
    public $data = [];

    protected function getFields()
    {
        return [
            'requestId' => 'string',
            'data' => 'UsVehicle[]',
        ];
    }
}