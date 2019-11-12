<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscricoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscricoes', function (Blueprint $table) {
            $table->bigIncrements('id_inscricao')->unsigned();

            $table->bigInteger('evento_id')->unsigned();
            $table->foreign('evento_id')->references('id_evento')->on('eventos');

            $table->bigInteger('participante_id')->unsigned();
            $table->foreign('participante_id')->references('id_participante')->on('participantes');

            $table->dateTime('data_hora');
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
        Schema::dropIfExists('incricoes');
    }
}
