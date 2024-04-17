<?php

namespace Laximo\Search\responseObjects;

class UsAttribute extends Base
{
    public const STATE_CREATED = "created";
    public const STATE_QUEUED = "queued";
    public const STATE_PROCESSING = "processing";
    public const STATE_FAILED = "failed";
    public const STATE_SUCCESS = "success";
    public const STATE_ABORTED = "aborted";

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string[]
     */
    public $values;

    protected function getFields()
    {
        return [
            'code' => 'string',
            'label' => 'string',
            'values' => 'string[]',
        ];
    }
}