<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipantType extends Model
{
    public static function getForDropdown()
    {
        $participantTypes = self::orderBy('description')->get();

        $participantTypesForDropdown = [];
        foreach ($participantTypes as $participantType) {
            $participantTypesForDropdown[$participantType->id] = $participantType->description;
        }

        return $participantTypesForDropdown;
    }

    public static function getForDashboard(){
        $participantTypes = self::all();

        $participantTypesForDashboard = [];
        foreach ($participantTypes as $participantType) {
            $participantTypesForDashboard[$participantType->id] = $participantType->description;
        }

        return $participantTypesForDashboard;
    }
}
