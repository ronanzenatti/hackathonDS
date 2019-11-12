<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposIncricoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos_incricoes', function (Blueprint $table) {
            $table->bigIncrements('id_grupo_inscricao')->unsigned();

            $table->bigInteger('grupo_id')->unsigned();
            $table->foreign('grupo_id')->references('id_grupo')->on('grupos');

            $table->bigInteger('inscricao_id')->unsigned();
            $table->foreign('inscricao_id')->references('id_inscricao')->on('inscricoes');

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
        Schema::dropIfExists('grupos_incricoes');
    }
}
