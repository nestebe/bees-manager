<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRuchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruchers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
            $table->text('description');
            $table->string('adresse1');
            $table->string('adresse2');
            $table->string('adresse3');
            $table->string('cp');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('ville');
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
        Schema::dropIfExists('ruchers');
    }
}
