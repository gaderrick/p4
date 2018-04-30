<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    public static function getForDropdown()
    {
        $userTypes = self::orderBy('type_description')->get();

        $userTypesForDropdown = [];
        foreach ($userTypes as $userType) {
            $userTypesForDropdown[$userType->id] = $userType->type_description;
        }

        return $userTypesForDropdown;
    }
}
