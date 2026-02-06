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
        Schema::create('as_normas_areas_uso', function (Blueprint $table) {
            $table->comment('Abreviaturas de áreas municipales para la visualización de normas');
            $table->string('cod_area', 5)->primary();
            $table->string('descr_area', 200);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_normas_areas_uso');
    }
};
