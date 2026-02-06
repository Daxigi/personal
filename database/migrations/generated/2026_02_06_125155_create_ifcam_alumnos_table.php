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
        Schema::create('ifcam_alumnos', function (Blueprint $table) {
            $table->increments('id_alumno');
            $table->integer('id_curso')->nullable()->index('fki_almunos_fk');
            $table->integer('documento')->nullable();
            $table->string('apyn', 75)->nullable();
            $table->string('observaciones', 250)->nullable();
            $table->char('muni', 20)->nullable()->comment('--Municipal  --Externos -- Otros');
            $table->char('estado', 10)->nullable()->comment('ACTIVO - BAJA ');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ifcam_alumnos');
    }
};
