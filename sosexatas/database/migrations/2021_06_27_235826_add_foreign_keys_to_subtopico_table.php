<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSubtopicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subtopico', function (Blueprint $table) {
            $table->foreign('fk_Topico_id', 'FK_Subtopico_2')->references('idTop')->on('topico')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subtopico', function (Blueprint $table) {
            $table->dropForeign('FK_Subtopico_2');
        });
    }
}
