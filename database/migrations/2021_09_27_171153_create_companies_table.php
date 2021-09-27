<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('user-id');
            $table->string('name');
            $table->string('avatar');
            $table->string('phone-number');
            $table->string('language');
            $table->string('location');
            $table->string('city');
            $table->integer('zip-code');
            $table->string('country');
            $table->string('about');
            $table->integer('students');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
