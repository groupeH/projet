<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Membre', function (Blueprint $table) {
            $table->increments('idMembre');
            $table->integer('idUtilisateur');
            $table->timestamps();
        });

        Schema::table('Membre', function(Blueprint $table) {
            $table->primary(['idMembre','idUtilisateur'])
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->foreign('idUtilisateur')->references('idUtilisateur')->on('Utilisateur')
                ->onUpdate('restrict');
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Membre');
    }
}
