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
        Schema::create('sue029_copy', function (Blueprint $table) {
            $table->comment('Tabla de Agentes con tarjeta');
            $table->integer('s29documento')->primary();
            $table->string('cbu1', 8)->nullable();
            $table->string('cbu2', 14)->nullable();
            $table->string('cuenta', 9)->nullable();
            $table->boolean('activo')->nullable();
            $table->string('cuil', 11)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue029_copy');
    }
};
