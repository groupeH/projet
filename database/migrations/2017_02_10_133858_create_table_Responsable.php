<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableResponsable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Création de la table Responsable
        Schema::create('Responsable', function(Blueprint $table)
        {
            $table->increments('id_Resp');
            $table->string('titreResp');
            $table->integer('id_Membre');
            $table->integer('id_Utilisateur');
            $table->foreign('id_Membre')->references('id_Membre')->on('Membre');
            $table->foreign('id_Utilisateur')->references('id_Utilisateur')->on('Utilisateur');
        });

        DB::unprepared('ALTER TABLE `Responsable` DROP PRIMARY KEY, ADD PRIMARY KEY (  `id_Resp` ,`id_Membre` ,  `id_Utilisateur` )');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Suppresion de la table
       Schema::dropIfExists('Responsable');

    }
}
