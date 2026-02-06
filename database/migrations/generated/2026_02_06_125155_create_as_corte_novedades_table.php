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
        Schema::create('as_corte_novedades', function (Blueprint $table) {
            $table->comment('Fechas de corte para la actualización de novedades de asistencia.');
            $table->smallInteger('anio');
            $table->smallInteger('mes');
            $table->date('fecha_corte');

            $table->primary(['anio', 'mes']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_corte_novedades');
    }
};
