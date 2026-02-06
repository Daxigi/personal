<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('per056', function (Blueprint $table) {
            $table->comment('Parámetro - Escala - Tabla de descripción de adicionales. Pueden estar o no asociados a una categoría de la escala salarial.');
            $table->smallInteger('p56adicional')->primary();
            $table->string('p56descr', 300)->nullable()->comment('Descripción');
            $table->string('p56usualta', 20)->nullable();
            $table->timestamp('p56fealta')->nullable()->default(DB::raw("now()"));
            $table->string('p56usumod', 20)->nullable();
            $table->timestamp('p56femod')->nullable()->default(DB::raw("now()"));
            $table->boolean('p56remunerativo')->nullable()->default(true)->comment('Indica si se trata de un monto remunerativo');
            $table->boolean('p56asoc_escala')->nullable()->default(true)->comment('Indica si el adicional está asociado a la escala. En caso "NO", significa que es un adicional que se asocia al Agente');
            $table->string('p56tipoad', 10)->default('haber')->comment('Tipo de adicional (haber / descuento)');
            $table->boolean('p56salario')->nullable()->default(false)->comment('Indicador de haber relacionado al salario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per056');
    }
};
