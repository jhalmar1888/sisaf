<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaBecas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('becas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('beca');
            $table->integer('porcentaje');
            $table->decimal('mensualidades', 8, 2)->default(0);
            $table->decimal('extension', 8, 2)->default(0);
            $table->decimal('seguro', 8, 2)->default(0);
            $table->decimal('matricula', 8, 2)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('becas');
    }
}
