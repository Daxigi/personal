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
        Schema::create('ifcam_asiscurso', function (Blueprint $table) {
            $table->increments('id_asiste');
            $table->integer('id_curso')->nullable();
            $table->date('fecha');
            $table->time('h_desde')->nullable()->comment('Hora desde');
            $table->time('h_hasta')->nullable()->comment('Hora Hasta');
            $table->string('observaciones', 250)->nullable();
            $table->char('estado', 10)->nullable()->comment('ACTIVO - BAJA');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ifcam_asiscurso');
    }
};
