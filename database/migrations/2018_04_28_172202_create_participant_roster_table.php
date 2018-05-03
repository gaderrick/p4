<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantRosterTable extends Migration
{
    public function up()
    {
        # This is a pivot table
        Schema::create('participant_roster', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->unsignedInteger('roster_id');
            $table->unsignedInteger('participant_id');

            # Make foreign keys
            $table->foreign('roster_id')->references('id')->on('rosters');
            $table->foreign('participant_id')->references('id')->on('participants');
        });
    }

    public function down()
    {
        Schema::dropIfExists('participant_roster');
    }
}
