<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipantType extends Model
{
    public static function getForDropdown()
    {
        $userTypes = self::orderBy('description')->get();

        $userTypesForDropdown = [];
        foreach ($userTypes as $userType) {
            $userTypesForDropdown[$userType->id] = $userType->description;
        }

        return $userTypesForDropdown;
    }
}
