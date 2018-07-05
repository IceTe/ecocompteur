<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatecompteursTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compteurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_compteur');
            $table->string('adresse');
            $table->integer('alloue');
            $table->date('date_creation');
            $table->string('ip_adresse');
            $table->string('adresse_geolocalisation');
            $table->string('numero_telephone');
             $table->integer('personne_idPersonne')->unsigned();
            $table->foreign('personne_idPersonne')->references('id')->on('personnes')
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('compteurs');
    }
}
