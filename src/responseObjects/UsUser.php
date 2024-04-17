<?php

namespace Laximo\Search\responseObjects;

class UsUser extends Base
{
    public const PERMISSION_PASSENGER_VEHICLES = 'PASSENGER_VEHICLES';
    public const PERMISSION_USE_OFFER_CROSSES = 'USE_OFFER_CROSSES';
    public const PERMISSION_SEARCH_BY_VIN = 'SEARCH_BY_VIN';
    public const PERMISSION_SEARCH_OFFER_DETAILS = 'SEARCH_OFFER_DETAILS';
    public const PERMISSION_MANAGE_OFFERS = 'MANAGE_OFFERS';
    public const PERMISSION_SEARCH_BY_TAGS = 'SEARCH_BY_TAGS';
    public const PERMISSION_SEARCH_ORIGINAL_DETAILS_ONLY = 'SEARCH_ORIGINAL_DETAILS_ONLY';
    public const PERMISSION_COMMERCIAL_VEHICLES = 'COMMERCIAL_VEHICLES';

    /**
     * @var string
     */
    public $login;

    /**
     * @var string[]
     */
    public $permissions = [];

    protected function getFields()
    {
        return [
            'login' => 'string',
            'permissions' => 'string[]',
        ];
    }
    
    public function isPermitted($permission) : bool {
        foreach ($this->permissions as $permissionName) {
            if ($permissionName == $permissionName) {
                return true;
            }
        }
        return false;
    }
}