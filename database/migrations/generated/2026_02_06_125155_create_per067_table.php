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
        Schema::create('per067', function (Blueprint $table) {
            $table->comment('Tipos de Seguro');
            $table->smallInteger('p67tipo_seg')->primary()->comment('Código de tipo de seguro');
            $table->string('p67descr', 50)->comment('Descripción');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per067');
    }
};
