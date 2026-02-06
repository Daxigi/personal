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
        Schema::create('per054', function (Blueprint $table) {
            $table->comment('Parámetro - Tabla de tipos relaciones familiares');
            $table->smallInteger('p54relacion')->primary()->comment('Código de tipo de relación');
            $table->string('p54descr', 150)->comment('Descripción');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per054');
    }
};
