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
        Schema::create('sue033', function (Blueprint $table) {
            $table->comment('Tabla de S.A.C. con asistencia para control
');
            $table->integer('s33anio');
            $table->smallInteger('s33semestre');
            $table->integer('s33legajo');
            $table->integer('s33documento');
            $table->decimal('s33hab_c_aporte')->nullable()->default(0);
            $table->decimal('s33hab_s_aporte')->nullable()->default(0);
            $table->integer('s33dias')->nullable();

            $table->primary(['s33anio', 's33semestre', 's33legajo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue033');
    }
};
