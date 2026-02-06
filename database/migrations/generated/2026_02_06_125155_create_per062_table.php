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
        Schema::create('per062', function (Blueprint $table) {
            $table->comment('Tabla de Tipos de Sanciones Disciplinarias');
            $table->smallInteger('p62tipo_sanc')->primary()->comment('Código de tipo de sanción disciplinaria');
            $table->string('p62doc_aval', 50)->nullable()->comment('Documentación respaldatoria');
            $table->string('p62descr', 100)->comment('Descripción');
            $table->string('p62aut_aplic', 200)->nullable()->comment('Autoridades que pueden aplicarla');
            $table->string('p62usualta', 20)->comment('Usuario que dio de alta el registro');
            $table->timestamp('p62fealta')->default(DB::raw("now()"))->comment('Fecha de alta del registro');
            $table->string('p62usumod', 20)->comment('Usuario que efectuó la última modificación');
            $table->timestamp('p62femod')->default(DB::raw("now()"))->comment('Fecha de la última modificación');
            $table->smallInteger('p62lleva_fechas')->nullable()->default(0)->comment('Indica si la sanción necesita como información las fechas.
0 - ninguna
1 - fecha desde
2 - fecha desde y fecha hasta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per062');
    }
};
