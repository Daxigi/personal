<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('neik03', function (Blueprint $table) {
            $table->comment('Registro de antecedentes en la municipalidad');
            $table->integer('nk3legajo')->comment('Identificador del agente');
            $table->smallInteger('nk3id')->comment('Correlativo de registros para un legajo en particular');
            $table->date('nk3feing')->nullable()->comment('Fecha de ingreso');
            $table->date('nk3feegr')->nullable()->comment('Fecha de egreso');
            $table->char('nk3depresu', 15)->nullable()->comment('Dependencia donde prestó servicio');
            $table->string('nk3funcion', 200)->nullable()->comment('Tarea o función desempeñada');
            $table->string('nk3dom_lab', 100)->nullable()->comment('Domicilio laboral');
            $table->string('nk3dias_ch', 100)->nullable()->comment('Días de prestación del servicio');
            $table->string('nk3horario', 50)->nullable()->comment('Horario de prestación del servicio');
            $table->string('nk3jefe_inm', 100)->nullable()->comment('Jefe inmediato');
            $table->string('nk3usualta', 20)->nullable()->comment('Usuario que da de alta el registro');
            $table->timestamp('nk3fealta')->nullable()->default(DB::raw("now()"))->comment('Fecha de alta del registro');
            $table->string('nk3usumod', 20)->comment('Usuario que efectuó la última modificación al registro');
            $table->timestamp('nk3femod')->nullable()->default(DB::raw("now()"))->comment('Fecha de la última modificación del registro');
            $table->integer('nk3_convalida')->nullable()->comment('0 - Ninguno, 1- SI, 2- No');
            $table->string('nk3_convalida_nota', 250)->nullable()->comment('Breve descripcion (No obligatoria)
  ');
            $table->timestamp('nk3_convalida_fecha_hora')->nullable()->comment('Fecha Hora de la convalidacion se carga solo nk_convalida = true se carga fecha hora (NO Editable)
 ');
            $table->string('nk3_convalida_usuario', 100)->nullable()->comment('Usuario que realizo la convalidacion (No Editable)');
            $table->string('baja', 100)->nullable();

            $table->primary(['nk3legajo', 'nk3id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neik03');
    }
};
