<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRealizaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('realiza', function (Blueprint $table) {
            $table->foreign('fk_Usuario_id', 'FK_Realiza_1')->references('idUsuario')->on('usuario')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('fk_Disciplina_id', 'FK_Realiza_2')->references('idDisc')->on('disciplina')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('realiza', function (Blueprint $table) {
            $table->dropForeign('FK_Realiza_1');
            $table->dropForeign('FK_Realiza_2');
        });
    }
}
