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
        Schema::create('am_medicos', function (Blueprint $table) {
            $table->comment('Medicos Externos firmantes de los certificados presentados');
            $table->increments('id_medico')->comment('Nro de Medico');
            $table->string('nombre_medico', 150)->nullable()->comment('Nombre del Medico');
            $table->string('especialidad', 150)->nullable()->comment('Especialidad del medico');
            $table->decimal('matricula', 5, 0)->nullable()->comment('Nro de matricula del Medico');
            $table->string('observaciones', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('am_medicos');
    }
};
