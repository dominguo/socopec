<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('adresse_1');
            $table->string('adresse_2');
            $table->string('adresse_3');
            $table->string('code_postal');
            $table->string('ville');
            $table->string('num_tel');
            $table->string('num_fax');
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
        Schema::drop('agences');
    }
}