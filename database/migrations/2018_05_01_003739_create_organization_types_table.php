<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationTypesTable extends Migration
{
    public function up()
    {
        Schema::create('organization_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type_description',30);
        });
    }

    public function down()
    {
        Schema::dropIfExists('organization_types');
    }
}
