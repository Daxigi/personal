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
        Schema::create('subrogancia', function (Blueprint $table) {
            $table->comment('Tabla de código que no deben ser incluídos en el cáculo de subrogancia');
            $table->smallInteger('codliq')->primary()->comment('Cód. de Liquidación (1-Liq según agrup y nivel del agente, 2-Liq según agrup y nivel que subroga)');
            $table->string('descr', 80)->nullable();
            $table->string('lista', 100)->nullable()->comment('Lista de cód que no van a ser incluídos en la liquidación');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subrogancia');
    }
};
