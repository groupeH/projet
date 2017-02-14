<?php


use Illuminate\Support\Facades\Schema;
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
