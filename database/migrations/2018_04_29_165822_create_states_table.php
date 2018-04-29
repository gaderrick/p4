<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatesTable extends Migration
{
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->char('state_abbreviation', 2);
            $table->string('state_name', 30);
        });
    }

    public function down()
    {
        Schema::dropIfExists('states');
    }
}
