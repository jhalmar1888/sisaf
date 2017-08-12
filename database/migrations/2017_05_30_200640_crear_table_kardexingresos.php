<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTableKardexingresos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kardexingresos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_compingresos');
            $table->unsignedInteger('id_material');
            $table->string('cantidades');
            $table->decimal('ptotal');

            $table->foreign('id_compingresos')
                ->references('id')->on('compingresos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_material')
                ->references('id')->on('materiales')
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
        Schema::dropIfExists('kardexingresos');
    }
}
