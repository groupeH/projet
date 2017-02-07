
<?php

//use Schema;
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
        //
        Schema::create('Association', function (Blueprint $table) {
            $table->increments('id_Association');
            $table->string('nomAssos', 300);
            $table->string('mailAssos', 100);
            $table->integer('telephoneAssos', 100);
            $table->string('description', 100);
            $table->string('pays', 100);
            $table->string('info_suplementaire', 500);
            $table->increments('id_Adresse');


        });
        Schema::table('Association', function(Blueprint $table) {
            $table->primary('id_Association')
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
        Schema::dropIfExists('Association');
    }
}

