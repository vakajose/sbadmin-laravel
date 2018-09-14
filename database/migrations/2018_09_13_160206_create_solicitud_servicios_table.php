<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_persona')->nullable($value=false);
            $table->foreign('id_persona')->references('id')->on('personas')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('categoria',['01','02','03','04']);
            $table->string('titulo')->nullable($value=false);
            $table->text('descripcion')->nullable($value=false);
            $table->datetime('fecha')->nullable($value=false);
            $table->datetime('fecha_atencion');
            $table->enum('estado',['01','02','03'])->default('01')->nullable($value=false);
            $table->string('encargado');
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
        Schema::dropIfExists('solicitud_servicios');
    }
}
