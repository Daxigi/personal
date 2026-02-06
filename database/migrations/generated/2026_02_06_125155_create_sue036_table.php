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
        Schema::create('sue036', function (Blueprint $table) {
            $table->comment('Tabla de Nro de Recibos');
            $table->integer('s36recibo')->primary();
            $table->integer('s36codliq')->nullable()->index('sue036_i1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue036');
    }
};
