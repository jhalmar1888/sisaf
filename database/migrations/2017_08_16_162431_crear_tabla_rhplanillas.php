<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaRhplanillas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rhplanillas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_rhmes');
            $table->unsignedInteger('id_persona');
            $table->integer('dias');
            $table->integer('fdia');
            $table->integer('fmes');
            $table->integer('fano');
            $table->decimal('salariobasico', 8,2)->default(0);
            $table->decimal('reintegro', 8,2)->default(0);
            $table->decimal('prestamo', 8, 2)->default(0);
            $table->decimal('atrasos', 8, 2)->default(0);
            $table->decimal('otros', 8, 2)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rhplanillas');
    }
}
