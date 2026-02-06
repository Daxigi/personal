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
        Schema::create('as_biometrico', function (Blueprint $table) {
            $table->decimal('cod_biometrico', 5, 0)->primary()->comment('Código de Sacanner biométrico');
            $table->string('desc_corta', 5)->nullable()->comment('Descripción corta del Sacanner');
            $table->string('descripcion', 200)->nullable()->comment('Descripción Completa');
            $table->string('ubicación', 200)->nullable()->comment('Detalle de la ubicación física del equipo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_biometrico');
    }
};
