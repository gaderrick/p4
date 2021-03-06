<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectOrganizationsAndRosters extends Migration
{
    public function up()
    {
        Schema::table('rosters', function(Blueprint $table) {
            # Make the foreign key reference
            $table->foreign('organization_id')->references('id')->on('organizations');
        });
    }

    public function down()
    {
        Schema::table('rosters', function(Blueprint $table) {
           $table->dropForeign('rosters_organization_id_foreign');
        });
    }
}
