<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUsuQuizRealizaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usu_quiz_realiza', function (Blueprint $table) {
            $table->foreign('fk_Usuario_id', 'FK_Usu_Quiz_Realiza_2')->references('idUsuario')->on('usuario')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('fk_Quiz_id', 'FK_Usu_Quiz_Realiza_3')->references('idQuiz')->on('quiz')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usu_quiz_realiza', function (Blueprint $table) {
            $table->dropForeign('FK_Usu_Quiz_Realiza_2');
            $table->dropForeign('FK_Usu_Quiz_Realiza_3');
        });
    }
}
