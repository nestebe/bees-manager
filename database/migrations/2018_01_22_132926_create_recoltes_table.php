<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecoltesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recoltes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantite');
            $table->string('unite');
            $table->string('type_recolte');
            $table->text('commentaire');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->integer('id_ruche')->unsigned();
            $table->foreign('id_ruche')->references('id')->on('ruches');
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
        Schema::dropIfExists('recoltes');
    }
}
