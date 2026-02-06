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
        Schema::create('per_tipo_liq', function (Blueprint $table) {
            $table->comment('Tipos de liquidación');
            $table->integer('tipo_liquidacion')->primary()->comment('Código de tipo de liquidación');
            $table->string('descripcion', 300)->comment('Descripción');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per_tipo_liq');
    }
};
