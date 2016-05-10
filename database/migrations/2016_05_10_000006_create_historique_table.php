<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historique', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('debut');
            $table->dateTime('fin');
            $table->integer('vehicule_id')->unsigned();
            $table->integer('statut_id')->unsigned();
            $table->foreign('vehicule_id')->references('id')->on('vehicules');
            $table->foreign('statut_id')->references('id')->on('statuts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('historique');
    }
}