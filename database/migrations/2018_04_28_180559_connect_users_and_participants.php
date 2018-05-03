<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectUsersAndParticipants extends Migration
{
    public function up()
    {
        Schema::table('participants', function(Blueprint $table) {
            # Make the foreign key reference
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::table('participants', function(Blueprint $table) {
            $table->dropForeign('participants_user_id_foreign');
        });
    }
}
