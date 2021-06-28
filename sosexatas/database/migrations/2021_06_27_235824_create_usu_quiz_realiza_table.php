<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuQuizRealizaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usu_quiz_realiza', function (Blueprint $table) {
            $table->integer('tentativa', true);
            $table->integer('fk_Usuario_id')->index('FK_Usu_Quiz_Realiza_2');
            $table->integer('fk_Quiz_id')->index('FK_Usu_Quiz_Realiza_3');
            $table->float('nota', 10, 0);
            $table->date('data');
            $table->dateTime('tempoGasto');
            //$table->unique(['tentativa', 'fk_Usuario_id', 'fk_Quiz_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usu_quiz_realiza');
    }
}
