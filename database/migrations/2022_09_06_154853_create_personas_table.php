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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('TipoDocumento');
            $table->string('NumeroDocumento')->unique();
            $table->string('Nombres');
            $table->string('Apellidos');
            $table->string('Sexo');
            $table->string('TelefonoCel')->nullable();
            $table->string('TelefonoFijo')->nullable();
            $table->string('Correo')->notnull();
            $table->string('Municipio');
            $table->string('Direccion')->nullable();
            $table->string('Barrio');


            $table->foreign('Correo')->references('Correo')->on('usuarios');

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
        Schema::dropIfExists('personas');
    }
};
