<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifBd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::unprepared('ALTER TABLE `Responsable` DROP PRIMARY KEY, ADD PRIMARY KEY (  `id_Resp`)');
        DB::unprepared('ALTER TABLE `Membre` DROP PRIMARY KEY, ADD PRIMARY KEY (`id_Membre`)');

        Schema::table('Assemblee', function($table)
        {
            $table->dropColumn('id_Membre');
            $table->dropColumn('id_Utilisateur');

        });

        Schema::table('Responsable', function($table)
        {
            $table->integer('id_Membre')->unique()->change();
            $table->integer('id_Utilisateur')->unique()->change();

        });

        Schema::table('Membre', function($table)
        {
            $table->integer('id_Membre')->unique()->change();
            $table->integer('id_Utilisateur')->unique()->change();

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
