<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('abbreviation', 2);
            $table->string('name', 30);
        });
    }

    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
