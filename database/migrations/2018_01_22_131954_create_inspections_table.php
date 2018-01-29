<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspections', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_visite');
            $table->string('activite');
            $table->integer('nb_cadres_cuvain');
            $table->integer('nb_cadres_pollen');
            $table->integer('nb_cadres_miel');
            $table->boolean('estMalade');
            $table->string('maladie');
            $table->string('traitement');
            $table->date('date_prochaine_visite');
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
        Schema::dropIfExists('inspections');
    }
}
