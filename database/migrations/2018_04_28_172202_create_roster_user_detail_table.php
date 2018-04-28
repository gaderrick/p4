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
        # This is a pivot table
        Schema::create('roster_user_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->unsignedInteger('roster_id');
            $table->unsignedInteger('user_detail_id');

            # Make foreign keys
            $table->foreign('roster_id')->references('id')->on('rosters');
            $table->foreign('user_detail_id')->references('id')->on('user_details');
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
