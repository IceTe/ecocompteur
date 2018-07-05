<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateenergiesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('energie_solaire');
            $table->string('energie_senelec');
            $table->date('date_envoie');
            $table->time('heure');
            $table->string('tension_min_senelec');
            $table->string('tension_max_senelec');
            $table->string('tension_max_solaire');
            $table->string('courant_min_senelec');
            $table->string('courant_min_solaire');
            $table->string('courant_max_senelec');
            $table->string('courant_max_solaire');
            $table->string('puissance_min_senelec');
            $table->string('puissance_min_solaire');
            $table->string('puissqnce_max_senelec');
            $table->string('puissance_max_solaire');
            $table->string('tension_inst_senelec');
            $table->string('tension_inst_solaire');
            $table->string('courant_inst_senelec');
            $table->string('courant_inst_solaire');
            $table->string('puissance_inst_senelec');
            $table->string('puissance_inst_solaire');
            $table->integer('compteur_idCompteur')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('compteur_idCompteur')->references('id')->on('compteurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('energies');
    }
}
