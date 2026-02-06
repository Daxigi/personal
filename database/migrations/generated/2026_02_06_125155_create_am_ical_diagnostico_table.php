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
        Schema::create('am_ical_diagnostico', function (Blueprint $table) {
            $table->comment('Tabla de diagnósticos por discapacidad emitidos por el ICAL');
            $table->integer('p04legajo')->comment('Identificaor del agente - Legajo');
            $table->integer('p04docum')->comment('Documento del discapacitado');
            $table->smallInteger('amdd_id')->comment('Correlativo identificador del diagnóstico para el discapacitado');
            $table->date('amdd_fecha_emision')->comment('Fecha de emisión del diagnóstico');
            $table->date('amdd_fecha_presentacion')->nullable()->default('\'now\'::text')->comment('Fecha de presentación del certificado ante la MCC');
            $table->date('amdd_fecha_vencimiento')->comment('Fecha de vencimiento del certificado');
            $table->string('amdd_diagnostico', 200)->nullable();
            $table->string('amdd_medico', 100)->nullable();
            $table->string('amdd_comentarios', 300)->nullable();
            $table->integer('id_patologia')->nullable();

            $table->primary(['p04legajo', 'p04docum', 'amdd_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('am_ical_diagnostico');
    }
};
