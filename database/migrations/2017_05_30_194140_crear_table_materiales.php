<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTableMateriales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->unsignedInteger('id_partida');
            $table->string('descripcion');
            $table->unsignedInteger('id_tipounidad');
            $table->decimal('pusf');
            $table->decimal('pucf');

            $table->foreign('id_partida')
                ->references('id')->on('partidas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_tipounidad')
                ->references('id')->on('tipounidades')
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
        Schema::dropIfExists('materiales');
    }
}
