<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Création  de la table Don
        Schema::create('Don', function (Blueprint $table) {
            $table->increments('id_Don');
            $table->date('dateDon');
            $table->float('montantDon');
            $table->integer('id_Utilisateur');
            $table->foreign('id_Utilisateur')->references('id_Utilisateur')->on('Utilisateur');
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
       Schema::dropIfExists('Don');

    }
}
