<?php

namespace Laximo\Search\exceptions;

use Exception;

class USException extends Exception
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $details;

    public function __construct(array $error)
    {
        parent::__construct($error['errCode'], $error['httpCode']);

        $this->requestId = $error['requestId'];
        $this->details = $error['details'];
    }
}