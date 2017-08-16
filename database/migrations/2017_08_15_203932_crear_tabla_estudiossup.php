<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEstudiossup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiossup', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('facultad');
            $table->string('universidad');
            $table->unsignedInteger('id_persona');

            $table->foreign('id_persona')
                ->references('id')->on('personas')
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
        Schema::dropIfExists('estudiossup');
    }
}
