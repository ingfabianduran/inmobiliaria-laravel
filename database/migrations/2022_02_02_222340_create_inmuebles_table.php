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
            $table->double('costo');
            $table->smallInteger('numeroPisos');
            $table->integer('metrosCuadrados');
            $table->longText('direccion');
            $table->smallInteger('numeroHabitaciones');
            $table->smallInteger('numeroBanios');
            $table->boolean('tieneSalaComedor');
            $table->boolean('tieneGaraje');
            $table->boolean('estaActivo');
            $table->foreignId('barrio_id');
            $table->foreignId('arrendador_id');
            $table->timestamps();
            $table->foreign('barrio_id')->references('id')->on('barrios');
            $table->foreign('arrendador_id')->references('id')->on('personas');
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
