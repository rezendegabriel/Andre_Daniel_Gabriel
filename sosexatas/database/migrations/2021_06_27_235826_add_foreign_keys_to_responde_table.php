<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRespondeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('responde', function (Blueprint $table) {
            $table->foreign('fk_Pergunta_id', 'FK_Responde_1')->references('idPerg')->on('pergunta')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('fk_tentativa', 'FK_Responde_4')->references('tentativa')->on('usu_quiz_realiza')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('fk_Usuario_id', 'FK_Responde_5')->references('idUsuario')->on('usuario')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('fk_Quiz_id', 'FK_Responde_6')->references('idQuiz')->on('quiz')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('responde', function (Blueprint $table) {
            $table->dropForeign('FK_Responde_1');
            $table->dropForeign('FK_Responde_4');
            $table->dropForeign('FK_Responde_5');
            $table->dropForeign('FK_Responde_6');
        });
    }
}
