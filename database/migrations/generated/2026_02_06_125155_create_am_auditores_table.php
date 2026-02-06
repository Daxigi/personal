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
        Schema::create('am_auditores', function (Blueprint $table) {
            $table->comment('MEDICOS AUDITORES en Auditoria Medica');
            $table->increments('id_audi')->comment('Nro de Auditor');
            $table->decimal('dni_audi', 8, 0)->nullable()->comment('Nro DNI de Auditor');
            $table->string('nombre_audi', 150)->nullable()->comment('Nombre del Medico');
            $table->string('especialidad_audi', 150)->nullable()->comment('Especialidad del medico');
            $table->decimal('matricula_audi', 5, 0)->nullable()->comment('Nro de matricula del Medico');
            $table->string('observaciones', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('am_auditores');
    }
};
