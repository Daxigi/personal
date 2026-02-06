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
        Schema::create('per055', function (Blueprint $table) {
            $table->comment('Agrupamiento - Escala - Tabla de descripción de agrupamiento. Sirven para agrupar tipos de actividad');
            $table->smallInteger('p55agrup')->primary();
            $table->string('p55descr', 100)->nullable()->comment('Descripción');
            $table->string('p55usualta', 20)->nullable();
            $table->timestamp('p55fealta')->nullable()->default(DB::raw("now()"));
            $table->string('p55usumod', 20)->nullable();
            $table->timestamp('p55femod')->nullable()->default(DB::raw("now()"));
            $table->string('agrup_l', 2)->nullable()->comment('agrup letra del Nuevo Agrupamiento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per055');
    }
};
