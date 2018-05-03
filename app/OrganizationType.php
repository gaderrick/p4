<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrganizationType extends Model
{
    public static function getForDropdown()
    {
        $organizationTypes = self::orderBy('description')->get();

        $organizationTypesForDropdown = [];
        foreach ($organizationTypes as $organizationType) {
            $organizationTypesForDropdown[$organizationType->id] = $organizationType->description;
        }

        return $organizationTypesForDropdown;
    }
}
