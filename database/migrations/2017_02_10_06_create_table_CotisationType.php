<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCotisationType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Création de la table CotisationType
        Schema::create('CotisationType', function (Blueprint $table) {
            $table->increments('id_Cotisation');
            $table->float('montantCotisation');
            $table->string('nomCotisaion');
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
        Schema::dropIfExists('CotisationType');
    }
}
