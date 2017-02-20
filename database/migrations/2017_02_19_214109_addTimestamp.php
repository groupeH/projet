<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTimestamp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::table('Adresse', function (Blueprint $table) {
                $table->timestamps();
            });
         Schema::table('Membre', function (Blueprint $table) {
                $table->timestamps();
            });
         Schema::table('CotisationType', function (Blueprint $table) {
                $table->timestamps();
            });
         Schema::table('Historique', function (Blueprint $table) {
                $table->timestamps();
            });
         Schema::table('Responsable', function (Blueprint $table) {
                $table->timestamps();
            });
         Schema::table('Document', function (Blueprint $table) {
                $table->timestamps();
            });
         Schema::table('Assemblee', function (Blueprint $table) {
                $table->timestamps();
            });
         Schema::table('Association', function (Blueprint $table) {
                $table->timestamps();
            });
         Schema::table('Utilisateur', function (Blueprint $table) {
                $table->timestamps();
            });
         Schema::table('Don', function (Blueprint $table) {
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
        Schema::table('Adresse', function (Blueprint $table) {
                $table->dropColumn(['created_at','updated_at']);
            });
         Schema::table('Membre', function (Blueprint $table) {
                $table->dropColumn(['created_at','updated_at']);
            });
         Schema::table('CotisationType', function (Blueprint $table) {
                $table->dropColumn(['created_at','updated_at']);
            });
         Schema::table('Historique', function (Blueprint $table) {
                $table->dropColumn(['created_at','updated_at']);
            });
         Schema::table('Responsable', function (Blueprint $table) {
                $table->dropColumn(['created_at','updated_at']);
            });
         Schema::table('Document', function (Blueprint $table) {
                $table->dropColumn(['created_at','updated_at']);
            });
         Schema::table('Assemblee', function (Blueprint $table) {
                $table->dropColumn(['created_at','updated_at']);
            });
         Schema::table('Association', function (Blueprint $table) {
                $table->dropColumn(['created_at','updated_at']);
            });
         Schema::table('Utilisateur', function (Blueprint $table) {
                $table->dropColumn(['created_at','updated_at']);
            });
         Schema::table('Don', function (Blueprint $table) {
                $table->dropColumn(['created_at','updated_at']);
            });
    }
}
