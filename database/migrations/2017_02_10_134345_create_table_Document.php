<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDocument extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Création de la table Document
        Schema::create('Document', function(Blueprint $table){
            $table->increments('id_Doc');
            $table->text('url');
            $table->float('taille');
            $table->date('dateParution');
            $table->integer('id_Resp');
            $table->integer('id_Membre');
            $table->integer('id_Utilisateur');
            $table ->foreign('id_Resp')->references('id_Resp')->on('Responsable');            
            $table ->foreign('id_Membre')->references('id_Membre')->on('Membre');
            $table ->foreign('id_Utilisateur')->references('id_Utilisateur')->on('Utilisateur');
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
        Schema::dropIfExists('Document');

    }
}
