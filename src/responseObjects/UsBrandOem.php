<?php

namespace Laximo\Search\responseObjects;

class UsBrandOem extends Base
{
    /**
     * @var string
     */
    public $requestedDetailId;

    /**
     * @var string
     */
    public $detailId;

    /**
     * @var string
     */
    public $brand;

    /**
     * @var string
     */
    public $oem;

    protected function getFields()
    {
        return [
            'requestedDetailId' => 'string',
            'detailId' => 'string',
            'brand' => 'string',
            'oem' => 'string',
        ];
    }
}