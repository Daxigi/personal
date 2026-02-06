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
        Schema::create('nk_baja', function (Blueprint $table) {
            $table->integer('nk3_convalida')->primary();
            $table->string('baja', 100)->nullable();
            $table->string('activo', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nk_baja');
    }
};
