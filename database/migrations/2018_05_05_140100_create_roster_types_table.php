<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRosterTypesTable extends Migration
{
    public function up()
    {
        Schema::create('roster_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description',30);
        });
    }

    public function down()
    {
        Schema::dropIfExists('roster_types');
    }
}
