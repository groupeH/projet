<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Don', function(Blueprint $table){
            $table->increments('id_Don');
            $table->date('dateDon');
            $table ->float('montantDon',100);
            $table ->string('id_Utilisateur',100);
            $table ->string('mail_utilisateur',100);
            $table ->integer('portable',25);
            $table ->string('civilité',100);
            $table ->string('photo',100);
            $table ->string('moyen_communication',100);
            $table ->date('date_naissance');
            $table ->date('date_inscription');
            $table ->increments('id_Adresse',100);
            $table ->increments('id_Assos');



        });
        Schema::table('Don', function(Blueprint $table) {
            $table->primary('id_Don')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('id_Utilisateur')->references('id_Utilisateur')->on('Utilisateur')
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
        Schema::dropIfExists('dons');
    }
}
