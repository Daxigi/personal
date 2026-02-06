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
        Schema::create('as_permiso_salida', function (Blueprint $table) {
            $table->comment('Tabla de permisos de salida');
            $table->bigIncrements('id_salida')->comment('Identificador del reegistro');
            $table->integer('legajo')->nullable()->comment('Legajo');
            $table->date('fecha')->nullable()->comment('Fecha en que se inicia la salida');
            $table->time('hh_desde')->nullable()->comment('Hora de inicio de la salida');
            $table->time('hh_hasta')->nullable()->comment('Hora de finalización de la salida (reingreso)');
            $table->string('func_autoriza', 80)->nullable()->comment('Funcionario que autoriza');
            $table->integer('documento')->nullable()->comment('Nro de Documento');
            $table->timestamp('fealta')->nullable()->default(DB::raw("now()"));
            $table->string('usualta', 20)->nullable()->default('sin datos');
            $table->timestamp('femod')->nullable();
            $table->string('usumod', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_permiso_salida');
    }
};
