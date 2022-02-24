<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frases', function (Blueprint $table) {
            $table->id();
            $table->text('frase')->nullable(false);
            $table->smallInteger('calificacion');
            $table->foreignId('personaje_id')->nullable(false);
            $table->timestamps();
            $table->foreign('personaje_id')->references('id')->on('personajes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frases');
    }
}
