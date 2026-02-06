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
        Schema::create('as_calendario_feriados', function (Blueprint $table) {
            $table->comment('Tabla de feriados a ser tenidos en cuenta por el control de asistencias');
            $table->date('cal_fecha')->primary()->comment('Fecha no laborable');
            $table->string('cal_descr', 100)->nullable()->comment('Motivo del feriado');
            $table->time('tolerancia')->nullable()->comment('Tolerancia Especial para dias de desastres');
            $table->smallInteger('cod_exc')->nullable()->comment('Código de Excepciones. Para casos especiales que no tienen que marcar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_calendario_feriados');
    }
};
