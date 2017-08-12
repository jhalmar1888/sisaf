<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaContcomprobantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contcomprobantes', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipo', ['1', '2', '3']); //para saber que tipo de comprobante es
            // 1 para ingre 2 para egre y 3 para cargos
            $table->string('fuente')->nullable()->default(null);
            $table->date('fecha');
            $table->unsignedInteger('id_unidad')->default('1');
            $table->string('glosa');
            $table->string('interesado')->nullable()->default(null);
            $table->string('docref')->nullable()->default(null);
            $table->string('cheque')->nullable()->default(null);
            $table->string('tcambio')->nullable()->default(null);

            $table->foreign('id_unidad')
                ->references('id')->on('unidades')
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
        Schema::dropIfExists('contcomprobantes');
    }
}
