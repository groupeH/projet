<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAssociation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Création de la table Association
         Schema::create('Association', function (Blueprint $table) {
            $table->increments('id_assos');
            $table->string('nomAssos', 300);
            $table->string('mailAssos', 100);
            $table->integer('telephoneAssos',false,true);
            $table->string('description', 100);
            $table->string('pays', 100);
            $table->string('info_suplementaire', 500);
            $table->integer('id_Adresse',false,true);

            $table->foreign('id_Adresse')->references('id_Adresse')->on('Adresse')
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
        //Suppresion de la table
        Schema::dropIfExists('Association');
    }
}