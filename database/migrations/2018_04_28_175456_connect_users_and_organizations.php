<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectUsersAndOrganizations extends Migration
{
    public function up()
    {
        Schema::table('organizations', function(Blueprint $table) {
            # Make the foreign key reference
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::table('organizations', function(Blueprint $table) {
            $table->dropForeign('organizations_user_id_foreign');
        });
    }
}
