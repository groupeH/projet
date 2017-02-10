<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMembre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Création de la table Membre
        Schema::create('Membre', function(Blueprint $table)
        {
            $table->increments('id_Membre');
            $table->integer('id_Utilisateur');
            $table->foreign('id_Utilisateur')->references('id_Utilisateur')->on('Utilisateur');
        });

        DB::unprepared('ALTER TABLE `Membre` DROP PRIMARY KEY, ADD PRIMARY KEY (  `id_Membre` ,  `id_Utilisateur` )');
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Suppresion de la table
       Schema::dropIfExists('Membre');

    }
}

