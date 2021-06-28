<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialdidaticoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materialdidatico', function (Blueprint $table) {
            $table->integer('idMat', true);
            $table->string('nome', 150);
            $table->string('endArq', 150);
            $table->integer('fk_Topico_id')->index('FK_MaterialDidatico_1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materialdidatico');
    }
}
