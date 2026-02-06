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
        Schema::create('as_nov_planillas', function (Blueprint $table) {
            $table->comment('Carga novedades mensuales de Planillas');
            $table->increments('id_nov');
            $table->decimal('documento', 8, 0)->nullable()->comment('Nro de Documento ');
            $table->string('mes_anio', 20)->nullable()->comment('Mes y año de la Novedad');
            $table->string('sit_revista', 150)->nullable()->comment('Situación de Revista del Agente ');
            $table->string('gch_descr_corta', 100)->nullable()->comment('Descripción de la Carga Horaria');
            $table->string('c01leyen', 150)->nullable()->comment('Lugar de Trabajo');
            $table->integer('nro_planilla')->nullable()->comment('Código de planilla donde firma');
            $table->string('secretaria', 100)->nullable()->comment('Nombre de la Secretaría');
            $table->string('depen', 100)->nullable()->comment('Nombre de la Dependencia');
            $table->date('fe_recibido')->nullable()->comment('Fecha en la que recibió la planilla');
            $table->date('fe_grab')->nullable()->default(DB::raw("now()"))->comment('Fecha de grabacion');
            $table->string('observaciones', 200)->nullable()->comment('Todo tipo de comentarios');
            $table->string('firmante', 100)->nullable()->comment('Nombre y Apellido del responzable');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_nov_planillas');
    }
};
