<?php

use Illuminate\Database\Seeder;
use App\Organization;

class OrganizationsTableSeeder extends Seeder
{
    public function run()
    {
        $organizations = [
            [1,1,1,'Trampoline and Tumbling Express','101 Steen Dr.','Lafayette',18,70508,1,'http://www.tntexpress.com','Tara Guidry','tntexpress@cox.net','337-988-5317','A0001',''],
            [1,1,1,'Acadiana Gymnastics','PO Box 60085','Lafayette',18,70596,2,'https://www.acadianagymnastics.com','Chase Hardy','gymney@gmail.com','337-988-3547','A0002',''],
            [1,1,1,'Elmwood Gymnastics Academy','700 C ElmwoodPark Blvd.','Harahan',18,70123,3,'http://www.ochsnerfitness.com/club/scripts/section/section.asp?NS=GYMNASTIC','Toni Mortillaro','Hillaryhebert@hotmail.com','504-733-4496','A0003','']

        ];
        $count = count($organizations);

        foreach ($organizations as $organizationData) {
            $organization = new Organization();

            $organization->user_id = $organizationData[0];
            $organization->type = $organizationData[1];
            $organization->category = $organizationData[2];
            $organization->name = $organizationData[3];
            $organization->street_address = $organizationData[4];
            $organization->city = $organizationData[5];
            $organization->state_id = $organizationData[6];
            $organization->zip_code = $organizationData[7];
            $organization->country_id = $organizationData[8];
            $organization->website = $organizationData[9];
            $organization->contact_name = $organizationData[10];
            $organization->email = $organizationData[11];
            $organization->phone = $organizationData[12];
            $organization->membership_number = $organizationData[13];
            $organization->magic_code = $organizationData[14];

            $organization->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $organization->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();

            $organization->save();

            $count--;
        }
    }
}
