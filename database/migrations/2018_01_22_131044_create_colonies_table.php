<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColoniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colonies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
            $table->date('date_derniere_visite');
            $table->string('espece');
            $table->string('marquage');
            $table->string('agressivite');
            $table->string('clipage');
            $table->string('activite');
            $table->string('affectation1');
            $table->string('affectation2');
            $table->boolean('reine_presente');
            $table->text('commentaire');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('colonies');
    }
}
