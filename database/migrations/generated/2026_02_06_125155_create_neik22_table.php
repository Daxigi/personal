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
        Schema::create('neik22', function (Blueprint $table) {
            $table->comment('Neike - Tabla de Asistencia Intermedia');
            $table->integer('n22documento')->primary();
            $table->integer('n22dias');
            $table->integer('n22presen');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neik22');
    }
};
