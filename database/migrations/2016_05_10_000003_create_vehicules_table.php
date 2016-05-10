<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('model');
            $table->date('date_fabrication');
            $table->string('hauteur');
            $table->string('largeur');
            $table->string('poids');
            $table->integer('agence_id')->unsigned();
            $table->integer('statut_id')->unsigned();
            $table->foreign('agence_id')->references('id')->on('agences');
            $table->foreign('statut_id')->references('id')->on('statuts');
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
        Schema::drop('vehicules');
    }
}