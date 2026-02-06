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
        Schema::create('per063', function (Blueprint $table) {
            $table->comment('Tabla de Causa de Egreso');
            $table->smallInteger('p63tipo_egr')->primary()->comment('Código de tipo de Egreso');
            $table->string('p63doc_aval', 50)->nullable()->comment('Documentación respaldatoria');
            $table->string('p63descr', 100)->comment('Descripción');
            $table->string('p63usualta', 20)->comment('Usuario que da de alta el registro');
            $table->timestamp('p63fealta')->nullable()->default(DB::raw("now()"))->comment('Fecha y hora del alta');
            $table->string('p63usumod', 20)->comment('Usuario que efectuó la última modificación ');
            $table->timestamp('p63femod')->nullable()->default(DB::raw("now()"))->comment('Fecha y hora de la última modificación');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per063');
    }
};
