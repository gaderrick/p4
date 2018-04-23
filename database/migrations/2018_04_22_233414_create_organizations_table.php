<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_user_id');
            $table->integer('organization_type');
            $table->integer('organization_category');
            $table->string('organization_name', 150);
            $table->string('street_address',150);
            $table->string('city',100);
            $table->char('state',2);
            $table->string('zip_code',10);
            $table->string('country',3);
            $table->string('website',250);
            $table->string('contact_name',200);
            $table->string('email',255);
            $table->string('phone',30);
            $table->string('external_tracking_number',10);
            $table->string('organization_signup_identifier',10);
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
        Schema::dropIfExists('organizations');
    }
}