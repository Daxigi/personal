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
        Schema::create('sue022', function (Blueprint $table) {
            $table->comment('Tabla de Asistencia Intermedia');
            $table->integer('s22documento')->primary();
            $table->integer('s22dias');
            $table->integer('s22presen');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue022');
    }
};
