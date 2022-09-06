<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestasondeos', function (Blueprint $table) {
            $table->id();
            $table->string('Pregunta')->notnull();
            $table->string('Respuesta');
            $table->string('NumeroDocumento')->notnull();

            $table->foreign('Pregunta')->references('Pregunta')->on('sondeos');
            $table->foreign('NumeroDocumento')->references('NumeroDocumento')->on('personas');

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
        Schema::dropIfExists('respuestasondeos');
    }
};
