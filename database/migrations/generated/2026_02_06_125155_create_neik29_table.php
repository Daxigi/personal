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
        Schema::create('neik29', function (Blueprint $table) {
            $table->comment('Neike - Tabla de Agentes con tarjeta');
            $table->integer('n29documento')->primary();
            $table->string('cbu1', 8)->nullable();
            $table->string('cbu2', 14)->nullable();
            $table->string('cuenta', 9)->nullable();
            $table->boolean('activo')->nullable();
            $table->string('cuil', 11)->nullable();
            $table->date('fec_alta')->nullable();
            $table->string('observaciones', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neik29');
    }
};
