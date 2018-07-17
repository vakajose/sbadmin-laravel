<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProcesosCrearTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Procesos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod')->unique();
            $table->string('nombre')->unique();
            $table->text('descripcion')->nullable();
            $table->jsonb('form')->nullable();;
            $table->string('ruta_bpmn')->nullable();;
            $table->integer('user_id')->nullable();;
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Procesos');
    }
}
