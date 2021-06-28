<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->integer('idUsuario', true);
            $table->string('nome', 150);
            $table->string('nick', 50);
            $table->string('cpf', 11);
            $table->string('email', 150);
            $table->string('senha', 50);
            $table->string('tel', 11);
            $table->string('rua', 150)->nullable();
            $table->integer('numero')->nullable();
            $table->string('complemento', 20)->nullable();
            $table->string('bairro', 50)->nullable();
            $table->string('cidade', 150)->nullable();
            $table->string('estado', 50)->nullable();
            $table->integer('tipo');
            $table->integer('fk_Avatar_id')->nullable()->index('FK_Usuario_2');
            $table->unique(['cpf', 'email'], 'cpf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
