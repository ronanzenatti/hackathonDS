<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos_participantes', function (Blueprint $table) {
            $table->bigIncrements('id_curso_participante');

            $table->bigInteger('curso_id')->unsigned();
            $table->foreign('curso_id')->references('id_curso')->on('cursos');

            $table->bigInteger('participante_id')->unsigned();
            $table->foreign('participante_id')->references('id_participante')->on('participantes');

            $table->smallInteger('grau_serie')->nullable();
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
        Schema::dropIfExists('cursos_participantes');
    }
}
