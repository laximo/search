<?php

namespace Laximo\Search\responseObjects;

class UsBrand extends Base
{
    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    protected function getFields()
    {
        return [
            'id' => 'integer',
            'name' => 'string',
        ];
    }
}