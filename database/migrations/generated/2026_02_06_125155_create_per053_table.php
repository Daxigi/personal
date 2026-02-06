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
        Schema::create('per053', function (Blueprint $table) {
            $table->comment('Parámetro - Tabla de ámbitos');
            $table->smallInteger('p53ambito')->primary()->comment('Código de ámbito');
            $table->string('p53descr', 150)->comment('Descripción');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per053');
    }
};
