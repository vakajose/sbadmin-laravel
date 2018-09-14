<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeDeTrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_de_trabajos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_orden')->nullable();
            $table->foreign('id_orden')->references('id')->on('orden_trabajos')->onDelete('no action')->onUpdate('cascade');
            $table->text('detalle')->nullable();
            $table->boolean('seSoluciono')->nullable($value = false);
            $table->boolean('seRegresara')->nullable($value = false);
            $table->datetime('fecha')->nullable($value = false);
            $table->text('observaciones')->nullable();
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
        Schema::dropIfExists('informe_de_trabajos');
    }
}
