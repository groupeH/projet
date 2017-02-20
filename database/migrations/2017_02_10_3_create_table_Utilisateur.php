<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUtilisateur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Création de la table Utilisateur
        Schema::create('Utilisateur', function(Blueprint $table){
            $table->increments('id_Utilisateur');
            $table->string('login',50);
            $table ->string('mdp',100);
            $table ->string('nomUtilisateur',100);
            $table ->string('prenomUtilisateur',100);
            $table ->string('mailUtilisateur',100);
            $table ->integer('portable')->nullable();
            $table ->string('civilité',100);
            $table ->string('photo',100);
            $table ->string('moyenCommunication',100);
            $table ->date('ddn');
            $table ->date('dateInscription');
            $table ->integer('id_Adresse',false,true);
            $table ->integer('id_Assos',false,true);
            $table ->foreign('id_Adresse')->references('id_Adresse')->on('Adresse');
            $table ->foreign('id_Assos')->references('id_assos')->on('Association');


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
       Schema::dropIfExists('Utilisateur');

    }
}
