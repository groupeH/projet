<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableParticipant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Participant', function(Blueprint $table){
            $table->increments('id_Participant');
            $table->integer('id_Membre')->unsigned();
            $table->integer('id_Asmb')->unsigned();
            $table->foreign('id_Membre')->references('id_Membre')->on('Membre');
            $table->foreign('id_Asmb')->references('id_Asmb')->on('Assemblee');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
