<?php

use Illuminate\Database\Seeder;
use App\OrganizationType;

class OrganizationTypesTableSeeder extends Seeder
{
    public function run()
    {
        $organizationTypes = [
            ['Gym'],
            ['Team'],
            ['Club'],
            ['Troop'],
            ['Class']
        ];

        foreach ($organizationTypes as $organizationTypeData) {
            $organizationType = new OrganizationType();
            $organizationType->timestamps = false;
            $organizationType->description = $organizationTypeData[0];

            $organizationType->save();
        }
    }
}
