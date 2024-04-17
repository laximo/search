<?php

namespace Laximo\Search\responseObjects;

use DateTime;

class UsOffer extends Base
{
    public const STATE_CREATED = "created";
    public const STATE_QUEUED = "queued";
    public const STATE_PROCESSING = "processing";
    public const STATE_FAILED = "failed";
    public const STATE_SUCCESS = "success";
    public const STATE_ABORTED = "aborted";

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $state;

    /**
     * @var DateTime
     */
    public $createdTime;

    /**
     * @var DateTime
     */
    public $lastModifiedTime;

    /**
     * @var int
     */
    public $linesProcessed;

    /**
     * @var string
     */
    public $error;

    /**
     * @var string
     */
    public $sourceFile;

    /**
     * @var bool
     */
    public $errorFileExists;

    protected function getFields()
    {
        return [
            'id' => 'int',
            'state' => 'string',
            'createdTime' => 'DateTime',
            'lastModifiedTime' => 'DateTime',
            'linesProcessed' => 'int',
            'error' => 'string',
            'sourceFile' => 'string',
            'errorFileExists' => 'bool',
        ];
    }
}