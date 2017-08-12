<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPrregistros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prregistros', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_prcomprobante');
            $table->unsignedInteger('id_probjeto');
            $table->integer('valor')->default('0');

            $table->foreign('id_prcomprobante')
                ->references('id')->on('prcomprobantes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_probjeto')
                ->references('id')->on('probjetos')
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
        Schema::dropIfExists('prregistros');
    }
}
