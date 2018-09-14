<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenTrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_trabajos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_solicitud')->nullable();
            $table->foreign('id_solicitud')->references('id')->on('solicitud_servicios')->onDelete('set null')->onUpdate('cascade');
            $table->datetime('fecha_asignacion')->nullable($value = false);
            $table->datetime('fecha_atencion')->nullable();
            $table->enum('urgencia',['01','02','03'])->default('01');
            $table->string('latitud')->nullable($value = false);
            $table->string('longitud')->nullable($value = false);
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
        Schema::dropIfExists('orden_trabajos');
    }
}
