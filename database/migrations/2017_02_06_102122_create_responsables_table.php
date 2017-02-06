<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsablesTable extends Migration
{
    /**
     * Run the migrations.
     *lol
     * @return void
     */
    public function up()
    {
        Schema::create('Responsable', function (Blueprint $table) {
            $table->increments('idResp');
            $table->string('titreResp', 100);
            $table->increments('idMembre');
            $table->increments('idUtilisateur');
        });

        Schema::table('Responsable', function (Blueprint $table) {

            $table->primary('idResp')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->primary('idMembre')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->primary('idUtilisateur')
                ->onDelete('restrict')
                ->onUpdate('restrict');


        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    }
    public function down()
    {
        Schema::dropIfExists('responsables');
    }
}
