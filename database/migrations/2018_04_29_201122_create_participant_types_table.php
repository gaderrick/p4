<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantTypesTable extends Migration
{
    public function up()
    {
        Schema::create('participant_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description',30);
        });
    }

    public function down()
    {
        Schema::dropIfExists('participant_types');
    }
}
