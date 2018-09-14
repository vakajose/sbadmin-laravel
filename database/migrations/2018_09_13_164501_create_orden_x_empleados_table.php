<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenXEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_x_empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_orden')->nullable($value=false);
            $table->unsignedInteger('id_empleado')->nullable($value=false);
            $table->foreign('id_orden')->references('id')->on('orden_trabajos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_empleado')->references('id')->on('empleados')->onDelete('cascade')->onUpdate('cascade');
            $table->date('fecha_asignacion');
            $table->boolean('vigente');
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
        Schema::dropIfExists('orden_x_empleados');
    }
}
