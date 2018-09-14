<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUbicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('zona_id');
        //   $table->primary(['id', 'zona_id']);
          //  $table->primary('zona_id');
            $table->foreign('zona_id')->references('id')->on('zonas')->onDelete('cascade');
            $table->unsignedInteger('orden')->nullable($value=false);
             $table->string('latitud')->nullable($value=false);
              $table->string('longitud')->nullable($value=false);
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
        Schema::dropIfExists('ubicaciones');
    }
}
