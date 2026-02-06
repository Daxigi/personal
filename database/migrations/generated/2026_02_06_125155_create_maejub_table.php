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
        Schema::create('maejub', function (Blueprint $table) {
            $table->decimal('dni', 8, 0)->primary();
            $table->string('apellido', 25)->comment('Apellido y nombre del titular');
            $table->string('nombre', 30)->comment('Apellido y nombre del apoderado');
            $table->integer('codtitulo')->default(0);
            $table->integer('agrupa');
            $table->integer('nivel')->nullable();
            $table->string('expte', 30)->nullable();
            $table->date('fechaemi')->nullable()->comment('Fecha Emision Certidicado');
            $table->string('obs', 100)->nullable();
            $table->decimal('funjer', 1, 0)->default(0)->comment('Funcion jerarquica 0=NO 1=SI');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maejub');
    }
};
