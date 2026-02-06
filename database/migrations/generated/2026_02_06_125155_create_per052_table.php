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
        Schema::create('per052', function (Blueprint $table) {
            $table->comment('Parámetro - Tabla de Jurisdicciones');
            $table->smallInteger('p52jur')->primary()->comment('Código de jurisdicción');
            $table->string('p52descr', 150)->comment('Descripción');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per052');
    }
};
