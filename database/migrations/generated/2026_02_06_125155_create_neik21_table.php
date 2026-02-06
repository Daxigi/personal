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
        Schema::create('neik21', function (Blueprint $table) {
            $table->comment('Neike - Tabla de Asistencia');
            $table->integer('n21legajo');
            $table->integer('n21anio');
            $table->integer('n21mes');
            $table->integer('n21dias');
            $table->integer('n21presen');

            $table->primary(['n21legajo', 'n21anio', 'n21mes']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neik21');
    }
};
