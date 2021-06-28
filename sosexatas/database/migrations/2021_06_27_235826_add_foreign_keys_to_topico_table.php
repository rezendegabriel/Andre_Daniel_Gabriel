<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTopicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('topico', function (Blueprint $table) {
            $table->foreign('fk_Disciplina_id', 'FK_Topico_2')->references('idDisc')->on('disciplina')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('topico', function (Blueprint $table) {
            $table->dropForeign('FK_Topico_2');
        });
    }
}
