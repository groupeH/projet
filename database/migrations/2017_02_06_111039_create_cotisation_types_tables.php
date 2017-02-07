<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCotisationTypesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CotisationType', function(Blueprint $table){

            $table->increments('idCotisation');
            $table->float('montant');
            $table->string('nom');

        });

        Schema::table('CotisationType', function (Blueprint $table){
            $table->primary('idCotisation')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CotisationType');
    }
}
