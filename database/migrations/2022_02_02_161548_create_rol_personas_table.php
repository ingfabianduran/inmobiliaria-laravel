<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_personas', function (Blueprint $table) {
            $table->id();
            $table->enum('rol', ['Arrendador', 'Arrendatario']);
            $table->foreignId('persona_id');
            $table->foreign('persona_id')->references('id')->on('personas');
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
        Schema::dropIfExists('rol_personas');
    }
}
