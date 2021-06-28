<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespondeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responde', function (Blueprint $table) {
            $table->integer('fk_Pergunta_id')->index('FK_Responde_1');
            $table->integer('resposta');
            $table->tinyInteger('correto');
            $table->integer('fk_tentativa', true)->index('FK_Responde_4');
            $table->integer('fk_Usuario_id')->index('FK_Responde_5');
            $table->integer('fk_Quiz_id')->index('FK_Responde_6');
            //$table->unique(['fk_Pergunta_id', 'fk_tentativa','fk_Usuario_id','fk_Quiz_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responde');
    }
}
