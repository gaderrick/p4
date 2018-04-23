<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_user_id');
            $table->integer('user_type');
            $table->integer('organization_id');
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
            $table->string('external_tracking_number',10);
            $table->string('user_signup_identifier',10);
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