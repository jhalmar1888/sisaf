<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEmpleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_persona');
            $table->string('codigo');
            $table->enum('afp', ['pre', 'fut']);
            $table->string('cuentabancaria');
            $table->date('fingreso');
            $table->enum('mcontrato', ['item', 'eventual', 'consultor']);
            $table->unsignedInteger('id_cargo');
            $table->decimal('hbasico', 8, 2);

            $table->foreign('id_persona')
                ->references('id')->on('personas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_cargo')
                ->references('id')->on('cargos')
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
        Schema::dropIfExists('empleados');
    }
}
