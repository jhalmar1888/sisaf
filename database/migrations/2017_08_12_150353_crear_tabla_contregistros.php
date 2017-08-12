<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaContregistros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contregistros', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_contcomprobante');
            $table->unsignedInteger('id_contobjeto');
            $table->integer('valor')->default('0');
            $table->enum('tiporeg', ['debe', 'haber'])->default('debe');

            $table->foreign('id_contcomprobante')
                ->references('id')->on('contcomprobantes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_contobjeto')
                ->references('id')->on('contobjetos')
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
        Schema::dropIfExists('contregistros');
    }
}
