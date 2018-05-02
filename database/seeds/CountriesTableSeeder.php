<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountriesTableSeeder extends Seeder
{
    public function run()
    {
        $countries = [
            ['US', 'United States'],
            ['CA', 'Canada'],
            ['MX', 'Mexico']
        ];

        foreach ($countries as $countryData) {
            $country = new Country();
            $country->timestamps = false;
            $country->country_abbreviation = $countryData[0];
            $country->country_name = $countryData[1];

            $country->save();
        }
    }
}