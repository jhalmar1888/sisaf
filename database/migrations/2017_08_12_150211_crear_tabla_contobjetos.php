<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaContobjetos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contobjetos', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipo', ['1', '2', '3']); // para ver en que columna imprimir
            $table->string('nombre');
            $table->string('detalle');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contobjetos');
    }
}
