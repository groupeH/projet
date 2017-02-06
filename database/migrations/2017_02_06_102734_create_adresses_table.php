<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Adresse', function (Blueprint $table) {
            $table->increments('id_Adresse');
            $table->string('num', 300);
            $table->string('libelle', 100);
            $table->integer('code_postal', 100);
            $table->string('ville', 100);
            $table->string('pays', 100);
            $table->string('info_suplementaire', 500);


        });
        Schema::table('Adresse', function(Blueprint $table) {
            $table->primary('id_Adresse')
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
        Schema::dropIfExists('adresses');
    }
}
