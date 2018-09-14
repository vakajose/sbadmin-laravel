<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadoXZonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado_x_zonas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_zona')->nullable($value=false);
            $table->unsignedInteger('id_empleado')->nullable($value=false);
            $table->foreign('id_zona')->references('id')->on('zonas')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('empleado_x_zonas');
    }
}
