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
        Schema::create('per050', function (Blueprint $table) {
            $table->comment('Parámetro - Tabla de Tipos de CARRERAS');
            $table->smallInteger('p50codtit')->primary()->comment('Código de tipo de título');
            $table->string('p50nivtit', 50)->comment('Nivel del título (primario, secundario, etc).');
            $table->smallInteger('p50jurtit')->comment('Jurisdicción del título (ver tabla per052)');
            $table->smallInteger('p50durtit')->comment('Duración real de la carrera');
            $table->smallInteger('p50durliqtit')->comment('Duración de la carrera a los efectos de la liquidación');
            $table->smallInteger('p50jerarquia')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per050');
    }
};
