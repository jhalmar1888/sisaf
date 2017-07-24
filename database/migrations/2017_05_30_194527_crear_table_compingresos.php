<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTableCompingresos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compingresos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_proveedor');
            $table->integer('nfactura');
            $table->date('fecha');
            $table->integer('contactoproveedor');

            $table->foreign('id_proveedor')
                ->references('id')->on('proveedores')
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
        Schema::dropIfExists('compingresos');
    }
}
