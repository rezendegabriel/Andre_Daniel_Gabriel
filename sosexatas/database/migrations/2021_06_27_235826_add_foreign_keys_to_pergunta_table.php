<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPerguntaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pergunta', function (Blueprint $table) {
            $table->foreign('fk_Quiz_id', 'FK_Pergunta_2')->references('idQuiz')->on('quiz')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pergunta', function (Blueprint $table) {
            $table->dropForeign('FK_Pergunta_2');
        });
    }
}
