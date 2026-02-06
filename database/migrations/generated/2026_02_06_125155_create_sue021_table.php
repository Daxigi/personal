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
        Schema::create('sue021', function (Blueprint $table) {
            $table->comment('Tabla de Asistencia');
            $table->integer('s21legajo');
            $table->integer('s21anio');
            $table->integer('s21mes');
            $table->integer('s21dias');
            $table->integer('s21presen');

            $table->primary(['s21legajo', 's21anio', 's21mes']);
            $table->index(['s21legajo', 's21anio', 's21mes'], 'ind');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue021');
    }
};
