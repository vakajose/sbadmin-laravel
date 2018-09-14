<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historicos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_empleado');
            $table->foreign('id_empleado')->references('id')->on('empleados')->onDelete('no action')->onUpdate('cascade');
            $table->enum('tipoPeriodo',['01','02','03']);
            $table->string('periodo');
            $table->datetime('desde');
            $table->datetime('hasta');
            $table->integer('horas_totales');
            $table->integer('horas_extras');
            $table->integer('horas_faltantes');
            $table->decimal('monto_total',8,2);
            $table->decimal('monto_extra',8,2);
            $table->decimal('descuento',8,2);
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
        Schema::dropIfExists('historicos');
    }
}
