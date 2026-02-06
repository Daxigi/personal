<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ifcam_asisalumno', function (Blueprint $table) {
            $table->increments('id_asalum');
            $table->integer('id_asiste');
            $table->integer('id_alumno')->nullable()->comment('Clave en la tabla de Alumnos');
            $table->integer('documento')->nullable();
            $table->time('h_desde_alum')->nullable()->comment('Hora desde en particular del alumno');
            $table->time('h_hasta_alum')->nullable()->comment('Hora Hasta en particular del alumno');
            $table->string('observaciones', 250)->nullable();
            $table->char('estado', 10)->nullable()->comment('ACTIVO - BAJA');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ifcam_asisalumno');
    }
};
