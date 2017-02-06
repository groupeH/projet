<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Historique', function (Blueprint $table) {
            $table->increments('id_Historique');
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->integer('id_Membre');
            $table->integer('id_Utilisateur');
            $table->integer('id_Cotisation');
        });

        Schema::table('Historique', function(Blueprint $table){
            $table->foreign('id_Membre')->references('idMembre')->on('Membre');
            $table->foreign('id_Utilisateur')->references('id_Utilisateur')->on('Utilisateur');
            $table->foreign('id_Cotisation')->references('id_Cotisation')->on('Cotisation');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Historique');
    }
}
