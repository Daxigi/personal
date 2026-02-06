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
        Schema::create('suefuncion', function (Blueprint $table) {
            $table->comment('Tabla de funciones higiene (temporaria)');
            $table->integer('docum')->primary();
            $table->string('descr', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suefuncion');
    }
};
