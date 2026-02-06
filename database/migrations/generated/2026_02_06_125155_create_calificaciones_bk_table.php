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
        Schema::create('calificaciones_bk', function (Blueprint $table) {
            $table->comment('Maestro de calificaciones de personal');
            $table->integer('documento');
            $table->smallInteger('anio')->comment('Año de la calificación');
            $table->smallInteger('mes')->comment('Mes de la calificación');
            $table->string('tipo_calificacion', 10)->comment('Indica la periodicidad del tipo de calificación');
            $table->smallInteger('asistencia')->nullable()->default(0)->comment('Asistencia');
            $table->smallInteger('puntualidad')->nullable()->default(0)->comment('Puntualidad');
            $table->smallInteger('dedicacion_horaria')->nullable()->default(0);
            $table->smallInteger('predisposicion')->nullable()->default(0)->comment('Predisposición para con el trabajo encomendado');
            $table->smallInteger('iniciativa')->nullable()->default(0);
            $table->smallInteger('equipo')->nullable()->default(0)->comment('Conciencia de equipo');
            $table->smallInteger('servidor')->nullable()->default(0)->comment('Conciencia de servidor público');
            $table->smallInteger('pulcritud')->nullable()->default(0)->comment('Aspecto personal y pulcritud');
            $table->smallInteger('aptitud')->nullable()->default(0)->comment('Aptitud para el trabajo');
            $table->smallInteger('eficiencia')->nullable()->default(0)->comment('Eficiencia y rendimiento');
            $table->string('evaluador', 100)->comment('Apellido y nombres del evaluador');
            $table->string('cargo_evaluador', 100)->comment('Cargo del evaluador');
            $table->string('conformidad', 15)->nullable()->comment('Conformidad del evaluado');
            $table->boolean('descargo')->nullable()->comment('Presenta formulario de descargo');
            $table->integer('documento_evaluador')->nullable();
            $table->smallInteger('sanciones')->nullable();
            $table->string('observaciones', 300)->nullable();
            $table->bigIncrements('id_calif');

            $table->primary(['documento', 'anio', 'mes', 'tipo_calificacion']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calificaciones_bk');
    }
};
