<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrganizationType extends Model
{
    public static function getForDropdown()
    {
        $organizationTypes = self::orderBy('type_description')->get();

        $organizationTypesForDropdown = [];
        foreach ($organizationTypes as $organizationType) {
            $organizationTypesForDropdown[$organizationType->id] = $organizationType->type_description;
        }

        return $organizationTypesForDropdown;
    }
}
