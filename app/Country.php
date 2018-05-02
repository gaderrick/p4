<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public static function getForDropdown()
    {
        $countries = self::orderBy('country_name')->get();

        $countriesForDropdown = [];
        foreach ($countries as $country) {
            $countriesForDropdown[$country->country_abbreviation] = $country->country_name;
        }

        return $countriesForDropdown;
    }
}
