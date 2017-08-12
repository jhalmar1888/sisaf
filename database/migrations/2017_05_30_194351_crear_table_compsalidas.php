<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTableCompsalidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compsalidas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('proyecto');
            $table->string('id_ciudad', 10);
            $table->string('motivo');
            $table->date('fecha');

            $table->foreign('id_ciudad')
                ->references('id')->on('ciudades')
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
        Schema::dropIfExists('compsalidas');
    }
}
