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
        Schema::create('per060', function (Blueprint $table) {
            $table->comment('Tipos de novedad para el legajo del agente');
            $table->string('p60tipo_nov', 5)->primary()->comment('Código de tipo de novedad');
            $table->string('p60descr', 100)->comment('Descripción');
            $table->string('p60usualta', 20)->comment('Usuario que dio de alta el registro');
            $table->timestamp('p60fealta')->nullable()->default(DB::raw("now()"))->comment('Fecha de alta del registro');
            $table->string('p60usumod', 20)->comment('Usuario que efectuó la última modificación');
            $table->timestamp('p60femod')->nullable()->default(DB::raw("now()"))->comment('Fecha y hora de la última modificación');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per060');
    }
};
