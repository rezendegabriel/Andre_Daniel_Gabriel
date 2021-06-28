<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmizadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amizade', function (Blueprint $table) {
            $table->integer('fk_Usuario_id')->index('FK_Amizade_1');
            $table->integer('fk_Usuario_id_')->index('FK_Amizade_2');
            $table->date('data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amizade');
    }
}
