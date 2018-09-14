<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->primary('id');  
            $table->foreign('id')->references('id')->on('personas')->onDelete('cascade');       
            $table->string('cod_cliente')->unique();
            $table->string('latitud')->nullable($value = false);
            $table->string('longitud')->nullable($value = false);
            $table->date('antiguedad')->nullable($value = false);
            $table->datetime('ultima_solicitud');
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
        Schema::dropIfExists('clientes');
    }
}
