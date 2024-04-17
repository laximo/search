<?php

namespace Laximo\Search\responseObjects;

class UsVehicle extends Base
{
    public const STATE_CREATED = 'created';
    public const STATE_QUEUED = 'queued';
    public const STATE_PROCESSING = 'processing';
    public const STATE_FAILED = 'failed';
    public const STATE_SUCCESS = 'success';
    public const STATE_ABORTED = 'aborted';
    
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $brand;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $state;

    /**
     * @var UsAttribute[]
     */
    public $attributes = [];

    protected function getFields()
    {
        return [
            'id' => 'int',
            'brand' => 'string',
            'name' => 'string',
            'state' => 'string',
            'attributes' => 'UsAttribute[]',
        ];
    }
}