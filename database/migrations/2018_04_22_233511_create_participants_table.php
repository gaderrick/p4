<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('type_id');
            $table->string('first_name', 80);
            $table->string('middle_name', 40)->nullable();
            $table->string('last_name', 80);
            $table->char('sex',1)->nullable();
            $table->string('email',255)->nullable();
            $table->string('phone',30)->nullable();
            $table->string('cell_phone',30)->nullable();
            $table->string('street_address',150)->nullable();
            $table->string('city',100)->nullable();
            $table->unsignedInteger('state_id')->nullable();
            $table->string('zip_code',10)->nullable();
            $table->unsignedInteger('country_id')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('note',50)->nullable();
            $table->string('membership_number',20)->nullable();
            $table->string('magic_code',10)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('participants');
    }
}