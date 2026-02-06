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
        Schema::create('neik11_fecha_cierre', function (Blueprint $table) {
            $table->comment('Tabla de Fechas tope para los cambios en la liquidación');
            $table->smallInteger('nk11anio');
            $table->smallInteger('nk11mes');
            $table->date('nk11fecha_limite')->nullable();

            $table->primary(['nk11anio', 'nk11mes']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neik11_fecha_cierre');
    }
};
