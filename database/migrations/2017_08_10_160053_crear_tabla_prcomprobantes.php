<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPrcomprobantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prcomprobantes', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipoc', ['1', '2', '3', '4']); //para saber que tipo de comprobante es
            $table->string('fcto')->nullable()->default(null);
            $table->string('fuente')->nullable()->default(null);
            $table->date('fechac');
            $table->unsignedInteger('id_unidad')->default('1');
            $table->string('glosa');
            $table->string('reparticion')->nullable()->default(null);
            $table->string('interesado')->nullable()->default(null);
            $table->string('docref')->nullable()->default(null);
            $table->string('cheque')->nullable()->default(null);
            $table->string('tcambio')->nullable()->default(null);
            $table->string('momento')->nullable()->default(null);
            $table->string('anexos')->nullable()->default(null);

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
        Schema::dropIfExists('prcomprobantes');
    }
}
