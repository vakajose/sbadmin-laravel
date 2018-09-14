<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_asistencias', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_empleado');
            $table->foreign('id_empleado')->references('id')->on('empleados')->onDelete('no action')->onUpdate('cascade');
            $table->datetime('marcado_entrada');
            $table->datetime('marcado_salida');
            $table->unsignedInteger('id_zona');
            $table->decimal('tiempo_transcurrido',8,2);
            $table->integer('visitas_realizadas');
            $table->integer('horas_extras');
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
        Schema::dropIfExists('registro_asistencias');
    }
}
