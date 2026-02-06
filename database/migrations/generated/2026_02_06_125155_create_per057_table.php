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
        Schema::create('per057', function (Blueprint $table) {
            $table->comment('Escala - Tabla de Fechas de cambio de escala.');
            $table->date('p57fpv')->primary()->comment('Fecha de puesta en vigencia de la nueva escala');
            $table->string('p57descr', 300)->nullable()->comment('Descripción de la documentación respaldatoria');
            $table->string('p57usualta', 20)->nullable();
            $table->timestamp('p57fealta')->nullable()->default(DB::raw("now()"));
            $table->string('p57usumod', 20)->nullable();
            $table->timestamp('p57femod')->nullable()->default(DB::raw("now()"));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per057');
    }
};
