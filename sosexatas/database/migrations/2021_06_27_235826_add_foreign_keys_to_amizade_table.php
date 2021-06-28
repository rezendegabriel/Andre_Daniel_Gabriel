<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAmizadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('amizade', function (Blueprint $table) {
            $table->foreign('fk_Usuario_id', 'FK_Amizade_1')->references('idUsuario')->on('usuario')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('fk_Usuario_id_', 'FK_Amizade_2')->references('idUsuario')->on('usuario')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('amizade', function (Blueprint $table) {
            $table->dropForeign('FK_Amizade_1');
            $table->dropForeign('FK_Amizade_2');
        });
    }
}
