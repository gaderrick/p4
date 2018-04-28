<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRosterUserDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roster_user_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            # Make foreign keys
            $table->unsignedInteger('roster_id')->references('id')->on('rosters');
            $table->unsignedInteger('user_detail_id')->references('id')->on('user_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roster_user_detail');
    }
}
