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
        Schema::create('neik02', function (Blueprint $table) {
            $table->comment('Tabla de personas a cargo');
            $table->integer('nk2legajo')->comment('Nro. de legajo');
            $table->integer('nk2docum')->unique('neik02_1')->comment('Nro. de documento');
            $table->smallInteger('nk2relacion')->nullable()->comment('Relación per054 (hijo / cónyuge / etc.)');
            $table->string('nk2apyn_rel', 150)->nullable()->comment('Apellido y nombre de la relación');
            $table->date('nk2fenac')->nullable()->comment('Fecha de nacimiento');
            $table->date('nk2fpv')->nullable()->comment('Fecha de puesta en vigencia');
            $table->boolean('nk2discapacitado')->nullable()->comment('Indicador de discapacidad');
            $table->string('nk2tipodisc', 100)->nullable()->comment('Descripción de la discapacidad');
            $table->char('nk2estado', 1)->nullable()->comment('Estado de la relación (A-Activo / *-Baja)');
            $table->string('nk2usualta', 20)->nullable()->comment('Usuario que da de alta el registro');
            $table->timestamp('nk2fealta')->nullable()->default(DB::raw("now()"))->comment('Fecha y hora de alta del registro');
            $table->string('nk2usumod', 20)->nullable()->comment('Usuario que efectuó la última modificación del registro');
            $table->timestamp('nk2femod')->nullable()->default(DB::raw("now()"))->comment('Fecha de la última modificación del registro');
            $table->string('nk2domicilio', 150)->nullable();
            $table->boolean('nk2obra_social')->nullable();

            $table->primary(['nk2legajo', 'nk2docum']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neik02');
    }
};
