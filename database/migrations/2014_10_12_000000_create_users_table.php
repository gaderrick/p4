<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 200);
            $table->string('email', 255)->unique();
            $table->string('password', 200);

            $table->string('avatar',400)->nullable();
            $table->string('provider', 20)->nullable();
            $table->string('provider_id', 400)->nullable();
            $table->string('access_token', 400)->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
