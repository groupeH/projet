<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    //
<?php

    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

class CreateResponsable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Responsable', function (Blueprint $table) {
            $table->increments('id_Responsable');
            $table->string('titreResponsable', 100);
            $table->increments('id_Membre');
            $table->increments('id_Utilisateur');
        });

        Schema::table('Responsable', function (Blueprint $table) {

            $table->primary('id_Responsable')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->primary('id_Membre')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->primary('id_Utilisateur')
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
        Schema::drop('Responsable');
    }
}
}

