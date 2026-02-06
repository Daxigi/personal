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
        Schema::create('sue018', function (Blueprint $table) {
            $table->comment('Tabla de funciones para las formulas
');
            $table->string('s18funcion', 10)->primary();
            $table->string('s18descr', 130)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue018');
    }
};
