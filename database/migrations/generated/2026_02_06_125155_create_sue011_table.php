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
        Schema::create('sue011', function (Blueprint $table) {
            $table->comment('Tabla de conceptos de cada tipo de liquidación');
            $table->integer('s11tipo_liq');
            $table->integer('s11adic')->index('sue011_i1');

            $table->primary(['s11tipo_liq', 's11adic']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue011');
    }
};
