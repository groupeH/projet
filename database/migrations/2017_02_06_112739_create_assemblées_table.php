<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssembléesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Assemblee', function (Blueprint $table) 
        {
            $table->increments('id_Asmb');
            $table->string('titreAsmb', 100);
            $table->date('dateAsmb', 25);
            $table->time('heureDeb', 25);
            $table->time('heureFin', 25);
            $table->boolean('AssembleePrivee', 25);
            $table->float('coutParticipation', 50);
            $table->increments('id_Responsable');
            $table->increments('id_Membre');
            $table->increments('id_Utilisateur');
            $table->increments('id_Adresse');
        });

        Schema::table('Assemblee', function (Blueprint $table)
        {

            $table->primary('id_Asmb')
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
        Schema::dropIfExists('assemblées');
    }
}
