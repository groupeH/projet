<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAssemblee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Création de la table Assemblée
        Schema::create('Assemblee', function(Blueprint $table){
            $table->increments('id_Asmb');
            $table->string('titreAsmb');
            $table->date('dateAsmb');
            $table->time('heureDeb');
            $table->time('heureFin');
            $table->boolean('assembleePrivee');
            $table->float('coutParticipation');
            $table->integer('id_Resp');
            $table->integer('id_Membre');
            $table->integer('id_Utilisateur');
            $table->integer('id_Adresse');
            $table ->foreign('id_Resp')->references('id_Resp')->on('Responsable');            
            $table ->foreign('id_Membre')->references('id_Membre')->on('Membre');
            $table ->foreign('id_Utilisateur')->references('id_Utilisateur')->on('Utilisateur');
            $table ->foreign('id_Adresse')->references('id_Adresse')->on('Adresse');

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
        Schema::dropIfExists('Assemblee');
    }
}
