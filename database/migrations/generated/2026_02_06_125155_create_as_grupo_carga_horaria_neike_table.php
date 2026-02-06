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
        Schema::create('as_grupo_carga_horaria_neike', function (Blueprint $table) {
            $table->comment('GCH - Grupos de Carga Horaria_neike');
            $table->smallInteger('gch_id_neike')->primary()->comment('Id. del Grupo de Carga Horaria');
            $table->smallInteger('tch_id_neike')->comment('Id. del Tipo de Carga Horaria (Clave ajena)');
            $table->string('gch_modulo_neike', 50)->nullable()->comment('Módulo de programa asociado a los efectos de realizar el control de asistencia');
            $table->string('gch_descr_corta_neike', 100)->comment('Descripción corta');
            $table->string('gch_descr_larga_neike', 500)->nullable()->comment('Descripción larga');
            $table->string('gch_dias_neike', 60)->nullable()->comment('Días de la semana del grupo (separados por comas)');
            $table->smallInteger('gch_horas_neike')->nullable()->comment('Cantidad de horas');
            $table->time('gch_hora_desde_1_neike')->nullable()->comment('Hora de inicio del turno 1');
            $table->time('gch_hora_hasta_1_neike')->nullable()->comment('Hora de finalización del turno 1');
            $table->time('gch_hora_desde_2_neike')->nullable()->comment('Hora de inicio del turno 2');
            $table->time('gch_hora_hasta_2_neike')->nullable()->comment('Hora de finalización del turno 2');
            $table->time('gch_tolerancia_normal_neike')->nullable()->comment('Tolerancia normal a la tardanza u otra cosa');
            $table->time('gch_tolerancia_especial_neike')->nullable()->comment('Tolerancia especial a la tardanza');
            $table->string('gch_param_1d_neike', 50)->nullable()->comment('Parámetro adicional - descripción');
            $table->string('gch_param_1_neike', 50)->nullable()->comment('Parámetro adicional');
            $table->string('gch_param_2d_neike', 50)->nullable();
            $table->string('gch_param_2_neike', 50)->nullable();
            $table->string('gch_param_3d_neike', 50)->nullable();
            $table->string('gch_param_3_neike', 50)->nullable();
            $table->string('gch_param_4d_neike', 50)->nullable();
            $table->string('gch_param_4_neike', 50)->nullable();
            $table->string('gch_estado_neike', 20)->nullable()->comment('Determina si el grupo esta  Activo o de Baja ');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_grupo_carga_horaria_neike');
    }
};
