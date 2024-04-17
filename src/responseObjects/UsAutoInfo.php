<?php

namespace Laximo\Search\responseObjects;

use DateTime;

class UsAutoInfo extends UsVehicle
{

    public const PROCESSING_STAGE_IDENTIFIED = 'identified';
    public const PROCESSING_STAGE_OEMS_RESOLVED = 'oemsResolved';
    public const PROCESSING_STAGE_DETAILS_RESOLVED = 'detailsResolved';
    public const PROCESSING_STAGE_CROSSES_RESOLVED = 'crossesResolved';
    public const PROCESSING_STAGE_INDEXED = 'indexed';

    /**
     * @var string
     */
    public $identString;

    /**
     * @var string
     */
    public $processingStage;

    /**
     * @var DateTime
     */
    public $createdTime;

    /**
     * @var DateTime
     */
    public $updatedTime;

    /**
     * @var string
     */
    public $error;

    protected function getFields()
    {
        return array_merge(parent::getFields(), [
            'identString' => 'string',
            'processingStage' => 'string',
            'createdTime' => 'DateTime',
            'updatedTime' => 'DateTime',
            'error' => 'string',
        ]);
    }
}