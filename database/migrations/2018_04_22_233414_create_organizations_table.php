<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('type_id');
            $table->string('name', 150);
            $table->string('street_address',150)->nullable();
            $table->string('city',100)->nullable();
            $table->unsignedInteger('state_id')->nullable();
            $table->string('zip_code',10)->nullable();
            $table->unsignedInteger('country_id')->nullable();
            $table->string('website',250)->nullable();
            $table->string('contact_name',200)->nullable();
            $table->string('email',255)->nullable();
            $table->string('phone',30)->nullable();
            $table->string('membership_number',20)->nullable();
            $table->string('magic_code',10)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('organizations');
    }
}