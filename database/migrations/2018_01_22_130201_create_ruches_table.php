<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRuchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
            $table->string('type');
            $table->string('etat');
            $table->integer('nb_corps');
            $table->integer('nb_hausses');
            $table->integer('nb_cadres');
            $table->string('matiere');
            $table->string('exposition');
            $table->string('orientation');
            $table->boolean('estVide');
            $table->text('commentaire');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->integer('id_colonie')->unsigned();
            $table->foreign('id_colonie')->references('id')->on('colonies');
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
        Schema::dropIfExists('ruches');
    }
}
