<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubtopicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtopico', function (Blueprint $table) {
            $table->integer('idSubTop', true);
            $table->string('nomeSubTop', 150);
            $table->integer('fk_Topico_id')->index('FK_Subtopico_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subtopico');
    }
}
