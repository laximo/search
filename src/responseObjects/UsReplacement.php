<?php

namespace Laximo\Search\responseObjects;

class UsReplacement extends Base
{
    /**
     * @var int
     */
    public $replacesDetailId;

    /**
     * @var string
     */
    public $replacementFor;

    /**
     * @var string
     */
    public $replacementType;


    protected function getFields()
    {
        return [
            'replacesDetailId' => 'int',
            'replacementFor' => 'string',
            'replacementType' => 'string',
        ];
    }
}