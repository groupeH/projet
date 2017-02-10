<?php

<<<<<<< HEAD:database/migrations/2017_02_10_133038_create_table_Historique.php
use Illuminate\Support\Facades\Schema;
=======
//use Schema;
>>>>>>> b0568757da3eefbc9e1ad8e79e36250c5a7bd9a9:database/migrations/2017_02_06_093316_create_historiques_table.php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHistorique extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Création de la table Historique
        Schema::create('Historique', function(Blueprint $table){
            $table->increments('id_Historique');
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->integer('id_Membre');
            $table->integer('id_Utilisateur');
            $table->integer('id_Cotisation');
            
            $table ->foreign('id_Membre')->references('id_Membre')->on('Membre');
            $table ->foreign('id_Utilisateur')->references('id_Utilisateur')->on('Utilisateur');
            $table ->foreign('id_Cotisation')->references('id_Cotisation')->on('CotisationType');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Suppresion de la table
        Schema::dropIfExists('Historique');

    }
}
