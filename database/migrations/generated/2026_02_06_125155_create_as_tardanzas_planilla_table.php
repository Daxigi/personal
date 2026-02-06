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
        Schema::create('as_tardanzas_planilla', function (Blueprint $table) {
            $table->bigIncrements('id_tardaplani');
            $table->date('fecha')->comment('Fecha de la tardanza');
            $table->integer('legajo')->comment('Legajo del agente');
            $table->integer('documento')->nullable()->comment('Nro de Documento');
            $table->smallInteger('minutos')->comment('Tardanza expresada en minutos');
            $table->string('comentario', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_tardanzas_planilla');
    }
};
