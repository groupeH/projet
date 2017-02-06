<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Document', function(Blueprint $table){
        $table->increments('id_Doc');
        $table->string('url',150);
        $table->float('taille',100);
        $table->date('dateParution',25);
        $table->increments('id_Responsable');
        $table->increments('id_Membre');
        $table->increments('id_Utilisateur');
        });

    Schema::table('Document', function(Blueprint $table) {

        $table->primary('id_Doc')
            ->onDelete('restrict')
            ->onUpdate('restrict');

        $table->foreign('id_Responsable')->references('id_Responsable')->on('Responsable')
            ->onDelete('restrict')
            ->onUpdate('restrict');

        $table->foreign('id_Membre')->references('id_Membre')->on('Responsable')
            ->onDelete('restrict')
            ->onUpdate('restrict');

        $table->foreign('id_Membre')->references('id_Membre')->on('Responsable')
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
        Schema::dropIfExists('documents');
    }
}
