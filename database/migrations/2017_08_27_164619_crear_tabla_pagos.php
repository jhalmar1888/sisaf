<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('descripcion');
            $table->string('unidad_academica');
            $table->decimal('monto', 8, 2)->default(0);
            $table->boolean('moneda');
            $table->boolean('nivel');
            $table->boolean('control_pago');
            $table->boolean('aplica_beca');
            $table->boolean('aplica_cantidad');
            $table->boolean('aplica_multa');
            $table->decimal('rubro', 8, 2)->default(0);
            $table->decimal('categoria_programatica', 8, 2)->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
}
