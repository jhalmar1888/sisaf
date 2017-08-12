<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTableKardexsalidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kardexsalidas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_compsalidas');
            $table->unsignedInteger('id_material');
            $table->string('cantidades');
            $table->decimal('ptotal');

            $table->foreign('id_compsalidas')
                ->references('id')->on('compsalidas')
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
        Schema::dropIfExists('kardexsalidas');
    }
}
