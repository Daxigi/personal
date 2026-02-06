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
        Schema::create('liq09', function (Blueprint $table) {
            $table->comment('Datos del agente liquidación mes 09
');
            $table->integer('documento')->primary();
            $table->string('apyn', 150)->nullable()->default('Sin datos');
            $table->smallInteger('tipliq')->index('liq09_i1');
            $table->smallInteger('agrup');
            $table->smallInteger('nivel');
            $table->string('depresu', 15)->nullable();
            $table->date('feingreso')->nullable();
            $table->date('fepromo')->nullable();
            $table->smallInteger('titulo')->nullable();
            $table->smallInteger('antig')->nullable();
            $table->date('febaja')->nullable();
            $table->smallInteger('baja')->nullable()->index('liq09_i3');
            $table->date('fe_fin_cont')->nullable()->comment('Fecha de Finalización del Contrato');
            $table->string('documentacion', 300)->nullable();

            $table->index(['agrup', 'nivel'], 'liq09_i2');
            $table->index(['documento'], 'liq09_i4');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liq09');
    }
};
