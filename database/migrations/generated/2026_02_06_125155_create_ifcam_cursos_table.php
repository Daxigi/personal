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
        Schema::create('ifcam_cursos', function (Blueprint $table) {
            $table->increments('id_curso');
            $table->string('nombre', 60)->nullable();
            $table->date('fe_desde');
            $table->date('fe_hasta')->nullable();
            $table->string('observaciones', 250)->nullable();
            $table->char('estado', 10)->nullable()->comment('ACTIVO - CERRADO (cerrado se utiliza cuando ya vencio el curso)');
            $table->time('h_desde')->nullable()->comment('Hora desde');
            $table->time('h_hasta')->nullable()->comment('Hora Hasta');
            $table->string('dia_1', 15)->nullable();
            $table->string('dia_2', 15)->nullable()->comment('Días de la semana');
            $table->string('dia_3', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ifcam_cursos');
    }
};
