<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo', ['Arriendo', 'Venta']);
            $table->smallInteger('numeroPisos');
            $table->integer('metrosCuadrados');
            $table->foreignId('barrio_id');
            $table->longText('direccion');
            $table->smallInteger('numeroHabitaciones');
            $table->smallInteger('numeroBanios');
            $table->boolean('tieneSalaComedor');
            $table->boolean('tieneGaraje');
            $table->timestamps();
            $table->foreign('barrio_id')->references('id')->on('barrios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inmuebles');
    }
}