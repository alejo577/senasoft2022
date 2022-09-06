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
        Schema::create('datos', function (Blueprint $table) {
            $table->id();
            $table->string('Fecha_Nacimiento');
            $table->string('Etnia');
            $table->string('Condicion_Discapacidad');
            $table->string('Estrato');
            $table->string('Ult_Nivel_Educativo');
            $table->string('Acceso_Dispositivos');
            $table->string('Cuales_Dispositivos');
            $table->string('Conectividad_Internet')->nullable();
            $table->string('Tipo_Regimen_Afiliacion')->nullable();




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
        Schema::dropIfExists('datos');
    }
};
