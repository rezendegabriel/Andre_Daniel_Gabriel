<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealizaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realiza', function (Blueprint $table) {
            $table->integer('fk_Usuario_id')->index('FK_Realiza_1');
            $table->integer('fk_Disciplina_id')->index('FK_Realiza_2');
            $table->float('desempenho', 10, 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realiza');
    }
}
