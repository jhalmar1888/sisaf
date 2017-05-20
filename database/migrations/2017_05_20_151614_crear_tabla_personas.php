<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPersonas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->string('id', 20);
            $table->string('paterno')->nullable();
            $table->string('materno')->nullable();
            $table->string('nombres');
            $table->string('exp', 10);
            $table->date('fechanacimiento');
            $table->unsignedInteger('id_sangre');
            $table->enum('genero', ['masculino', 'femenino']);
            $table->unsignedInteger('id_estadocivil');
            $table->string('telefono')->nullable();
            $table->string('direccion');
            $table->boolean('personaactiva')->default(true);

            $table->foreign('exp')
                ->references('id')->on('ciudades')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_sangre')
                ->references('id')->on('sangres')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_estadocivil')
                ->references('id')->on('estadosciviles')
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
        Schema::dropIfExists('personas');
    }
}
