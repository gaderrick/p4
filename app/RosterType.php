<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RosterType extends Model
{
    public static function getForDropdown()
    {
        $rosterTypes = self::orderBy('id')->get();

        $rosterTypesForDropdown = [];
        foreach ($rosterTypes as $rosterType) {
            $rosterTypesForDropdown[$rosterType->id] = $rosterType->description;
        }

        return $rosterTypesForDropdown;
    }
}
