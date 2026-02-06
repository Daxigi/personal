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
        Schema::create('neik09_parametros', function (Blueprint $table) {
            $table->comment('Tabla de Parámetros');
            $table->smallInteger('nk9digito')->primary();
            $table->decimal('nk9minimo', 7)->nullable();
            $table->decimal('nk9osocial', 7)->nullable();
            $table->decimal('nk9cargas', 7)->nullable();
            $table->decimal('nk9estatal', 7)->nullable();
            $table->decimal('nk9osocial_est', 7)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neik09_parametros');
    }
};
