<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAdresse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //Création de la table Adresse
            Schema::create('Adresse', function (Blueprint $table) {
                $table->increments('id_Adresse');
                $table->string('num', 300);
                $table->string('libelle', 100);
                $table->string('ville', 100);
                $table->string('pays', 100);
                $table->string('info_suplementaire', 500);



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
        Schema::dropIfExists('Adresse');
    }
}
