<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerguntaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pergunta', function (Blueprint $table) {
            $table->integer('idPerg', true);
            $table->text('enunciado');
            $table->text('opc1');
            $table->text('opc2');
            $table->text('opc3')->nullable();
            $table->text('opc4')->nullable();
            $table->text('opc5')->nullable();
            $table->integer('resposta');
            $table->integer('fk_Quiz_id')->index('FK_Pergunta_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pergunta');
    }
}
