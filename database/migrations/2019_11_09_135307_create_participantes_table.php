<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->bigIncrements('id_participante')->unsigned();
            $table->string('nome');
            $table->string('nome_social')->nullable();
            $table->string('cpf', 14)->unique();
            $table->string('rg', 20);
            $table->date('data_nascimento');
            $table->char('sexo', 1);
            $table->string('celular', 20);
            $table->string('email')->unique();
            $table->string('senha');
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
        Schema::dropIfExists('participantes');
    }
}
