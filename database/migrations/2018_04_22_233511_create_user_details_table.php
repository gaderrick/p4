<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('user_type');
            $table->string('first_name', 80);
            $table->string('middle_name', 40);
            $table->string('last_name', 80);
            $table->char('sex',1);
            $table->string('email',255);
            $table->string('phone',30);
            $table->string('cell_phone',30);
            $table->string('street_address',150);
            $table->string('city',100);
            $table->string('state',2);
            $table->string('zip_code',10);
            $table->string('country',3);
            $table->date('date_of_birth');
            $table->string('user_note',50);
            $table->string('membership_number',10);
            $table->string('user_magic_code',10);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_infos');
    }
}