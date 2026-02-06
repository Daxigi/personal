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
        Schema::create('as_grupo_carga_horaria', function (Blueprint $table) {
            $table->comment('GCH - Grupos de Carga Horaria');
            $table->smallInteger('gch_id')->primary()->comment('Id. del Grupo de Carga Horaria');
            $table->smallInteger('tch_id')->comment('Id. del Tipo de Carga Horaria (Clave ajena)');
            $table->string('gch_modulo', 50)->nullable()->comment('Módulo de programa asociado a los efectos de realizar el control de asistencia');
            $table->string('gch_descr_corta', 100)->comment('Descripción corta');
            $table->string('gch_descr_larga', 500)->nullable()->comment('Descripción larga');
            $table->string('gch_dias', 60)->nullable()->comment('Días de la semana del  1er grupo (separados por comas)');
            $table->smallInteger('gch_horas')->nullable()->comment('Cantidad de horas');
            $table->time('gch_hora_desde_1')->nullable()->comment('Hora de inicio del turno 1');
            $table->time('gch_hora_hasta_1')->nullable()->comment('Hora de finalización del turno 1');
            $table->time('gch_hora_desde_2')->nullable()->comment('Hora de inicio del turno 2');
            $table->time('gch_hora_hasta_2')->nullable()->comment('Hora de finalización del turno 2');
            $table->time('gch_tolerancia_normal')->nullable()->comment('Tolerancia normal a la tardanza u otra cosa');
            $table->time('gch_tolerancia_especial')->nullable()->comment('Tolerancia especial a la tardanza');
            $table->string('gch_param_1d', 50)->nullable()->comment('Parámetro adicional - descripción');
            $table->string('gch_param_1', 50)->nullable()->comment('Parámetro adicional');
            $table->string('gch_param_2d', 50)->nullable();
            $table->string('gch_param_2', 50)->nullable();
            $table->string('gch_param_3d', 50)->nullable();
            $table->string('gch_param_3', 50)->nullable();
            $table->string('gch_param_4d', 50)->nullable();
            $table->string('gch_param_4', 50)->nullable();
            $table->string('gch_estado', 20)->nullable()->comment('Determina si el grupo esta  Activo o de Baja ');
            $table->string('gch_dias2', 60)->nullable()->comment('Días de la semana del 2do grupo (separados por comas)');
            $table->smallInteger('gch_horas2')->nullable()->comment('cantidad de horas 2do grupo');
            $table->time('gch_hora_desde_22')->nullable()->comment('Hora de inicio del 2do grupo');
            $table->time('gch_hora_hasta_22')->nullable()->comment('Hora de finalizacion del 2do grupo');
            $table->time('gch_tolerancia_normal_2')->nullable()->comment('Tolerancia normal a la tardanza del 2do grupo');
            $table->time('gch_tolerancia_especial_2')->nullable()->comment('Tolerancia especial a la tardanza del 2do grupo');
            $table->string('gch_dias3', 60)->nullable()->comment('Dias de la semana del 3er grupo');
            $table->smallInteger('gch_horas3')->nullable()->comment('Cantidad de horas 3er grupo');
            $table->time('gch_hora_desde_3')->nullable()->comment('Hora de inicio 3er grupo');
            $table->time('gch_hora_hasta_3')->nullable()->comment('Hora de finalizacion del 3er grupo');
            $table->time('gch_tolerancia_normal_3')->nullable()->comment('tolerancia normal a la tardanza del 3er grupo');
            $table->time('gch_tolerancia_especial_3')->nullable()->comment('Tolerancia especial a la tardanza del 3er grupo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_grupo_carga_horaria');
    }
};
