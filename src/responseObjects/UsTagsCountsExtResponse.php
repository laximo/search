<?php

namespace Laximo\Search\responseObjects;

class UsTagsCountsExtResponse extends Base
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var UsTagsData
     */
    public $data = [];

    protected function getFields()
    {
        return [
            'requestId' => 'string',
            'data' => 'UsTagsData',
        ];
    }
}
