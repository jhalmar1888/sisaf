<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTableUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {

            $table->increments('id');
            $table->string('usuario');
            $table->string('nombre');
            $table->string('password');
            $table->rememberToken();
            $table->unsignedInteger('id_modulo');
            $table->unsignedInteger('id_rol');

            $table->foreign('id_modulo')
                ->references('id')->on('modulos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_rol')
                ->references('id')->on('roles')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
