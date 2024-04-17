<?php

namespace Laximo\Search\responseObjects;

class UsSearchDetail extends Base
{
    public const REPLACEMENT_TYPE_UNSPECIFIED = 'UNSPECIFIED';
    public const REPLACEMENT_TYPE_TUNING = 'TUNING';
    public const REPLACEMENT_TYPE_PARTOFTHEWHOLE = 'PARTOFTHEWHOLE';
    public const REPLACEMENT_TYPE_REPLACEMENT = 'REPLACEMENT';
    public const REPLACEMENT_TYPE_DUPLICATE = 'DUPLICATE';
    public const REPLACEMENT_TYPE_SYNONYM = 'SYNONYM';
    public const REPLACEMENT_TYPE_CODE = 'CODE';
    public const REPLACEMENT_TYPE_WAREHOUSECODE = 'WAREHOUSECODE';
    public const REPLACEMENT_TYPE_BIDIRECTIONAL = 'BIDIRECTIONAL';
    public const REPLACEMENT_TYPE_RELATED = 'RELATED';

    /**
     * @var string
     */
    public $detailId;

    /**
     * @var string
     */
    public $oem;

    /**
     * @var string
     */
    public $brand;

    /**
     * @var boolean
     */
    public $original;

    /**
     * @var string[]
     */
    public $detailNames = [];

    /**
     * @var string[]
     */
    public $offerNames = [];

    /**
     * @var string[]
     */
    public $crossNames = [];

    /**
     * @var string[]
     */
    public $tags = [];

    /**
     * @var string
     */
    public $vendorCode;

    /**
     * @var UsReplacement[]
     */
    public $replacements = [];
    
    /**
     * @var float
     */
    public $score;

    protected function getFields()
    {
        return [
            'detailId' => 'string',
            'oem' => 'string',
            'brand' => 'string',
            'original' => 'boolean',
            'detailNames' => 'string[]',
            'offerNames' => 'string[]',
            'tags' => 'string[]',
            'crossNames' => 'string[]',
            'vendorCode' => 'string',
            'replacements' => 'UsReplacement[]',
            'replacesOem' => 'string',
            'replacementType' => 'string',
            'score' => 'float',
        ];
    }
}