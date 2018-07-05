<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatetransactionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_service');
            $table->string('somme_payee');
            $table->date('date_transaction');
            $table->string('solde');
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
        Schema::drop('transactions');
    }
}
