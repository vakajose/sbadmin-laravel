<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->primary('id');  
            $table->foreign('id')->references('id')->on('personas')->onDelete('cascade');
            $table->enum('calificacion',['01','02','03']);
            $table->string('telefono_laboral');
            $table->date('antiguedad');
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
        Schema::dropIfExists('empleados');
    }
}
