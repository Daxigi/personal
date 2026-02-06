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
        Schema::create('per_documentacion', function (Blueprint $table) {
            $table->comment('Tabla de Resoluciones.');
            $table->date('fecha')->nullable();
            $table->smallInteger('numero');
            $table->smallInteger('anio');
            $table->string('tipo_doc', 15);
            $table->smallInteger('tema_doc')->nullable();
            $table->smallInteger('subtema_doc')->nullable();
            $table->string('extracto', 350)->nullable();
            $table->string('observaciones', 250)->nullable();
            $table->boolean('legajos_com')->nullable();
            $table->boolean('visualizada')->nullable();

            $table->primary(['numero', 'anio', 'tipo_doc']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per_documentacion');
    }
};
