<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKardexTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kardex', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_empleado');
            $table->foreign('id_empleado')->references('id')->on('empleados')->onDelete('no action')->onUpdate('cascade');
            $table->unsignedInteger('id_administrador');
            $table->foreign('id_administrador')->references('id')->on('administradores')->onDelete('no action')->onUpdate('cascade');
            $table->datetime('fecha');
            $table->boolean('vigente');
            $table->integer('horas_diarias');
            $table->decimal('hora_entrada',8,2);
            $table->integer('visitas_darias_minimas');
            $table->integer('dias_semanales');
            $table->integer('horas_mensuales');
            $table->decimal('sueldo',8,2);
            $table->decimal('comision_hora',8,2);
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
        Schema::dropIfExists('kardex');
    }
}
