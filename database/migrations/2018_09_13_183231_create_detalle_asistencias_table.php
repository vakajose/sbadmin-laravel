<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_asistencias', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_registro');
            $table->foreign('id_registro')->references('id')->on('registro_asistencias')->onDelete('no action')->onUpdate('cascade');
            $table->datetime('inicio');
            $table->datetime('fin');
            $table->decimal('total',8,2);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_asistencias');
    }
}
