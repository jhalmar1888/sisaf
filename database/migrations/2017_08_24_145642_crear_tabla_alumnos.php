<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAlumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('paterno')->nullable();
            $table->string('materno')->nullable();
            $table->string('nombres');
            $table->unsignedInteger('id_beca');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email');
            $table->boolean('deudor');
            $table->string('observaciones');

            $table->foreign('id_beca')
                ->references('id')->on('becas')
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
        Schema::dropIfExists('alumnos');
    }
}
