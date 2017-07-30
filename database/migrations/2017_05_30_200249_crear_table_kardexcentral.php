<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTableKardexcentral extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kardexcentral', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_material');
            $table->integer('cantidad');

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
        Schema::dropIfExists('kardexcentral');
    }
}
