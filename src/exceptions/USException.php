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
        parent::__construct((string) ($error['errCode'] ?? ''), (int) ($error['httpCode'] ?? 0));

        $this->requestId = $error['requestId'] ?? null;
        $this->details = $error['details'] ?? null;
    }
}