<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Participantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('proceso_id');
            $table->integer('participante_id');
            $table->enum('participante_type', ['usr', 'rol']);
            $table->boolean('esIniciador');
            $table->boolean('esFinalizador');
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
        Schema::dropIfExists('participantes');
    }
}
