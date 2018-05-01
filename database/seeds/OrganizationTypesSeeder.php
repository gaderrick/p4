<?php

use Illuminate\Database\Seeder;
use App\OrganizationType;

class OrganizationTypesSeeder extends Seeder
{
    public function run()
    {
        $organizationTypes = [
            [1,'Gym'],
            [2,'Team'],
            [3,'Club'],
            [4,'Troop'],
            [5,'Class']
        ];

        foreach ($organizationTypes as $organizationTypeData) {
            $organizationType = new OrganizationType();
            $organizationType->timestamps = false;
            $organizationType->id = $organizationTypeData[0];
            $organizationType->type_description = $organizationTypeData[1];

            $organizationType->save();
        }
    }
}
