<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMaterialdidaticoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('materialdidatico', function (Blueprint $table) {
            $table->foreign('fk_Topico_id', 'FK_MaterialDidatico_1')->references('idTop')->on('topico')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materialdidatico', function (Blueprint $table) {
            $table->dropForeign('FK_MaterialDidatico_1');
        });
    }
}
