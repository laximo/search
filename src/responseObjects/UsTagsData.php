<?php

namespace Laximo\Search\responseObjects;

class UsTagsData extends Base
{
    /**
     * @var UsTagCount[]
     */
    public $counts = [];

    /**
     * @var UsParsedRequest
     */
    public $parsedRequest;

    protected function getFields()
    {
        return [
            'counts' => 'UsTagCount[]',
            'parsedRequest' => 'UsParsedRequest',
        ];
    }
}
