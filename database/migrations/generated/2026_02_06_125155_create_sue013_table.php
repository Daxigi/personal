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
        Schema::create('sue013', function (Blueprint $table) {
            $table->comment('Tabla de porcentajes para títulos');
            $table->smallInteger('s13codtit')->primary();
            $table->decimal('s13porc', 7)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue013');
    }
};
