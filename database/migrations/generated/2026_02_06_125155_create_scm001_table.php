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
        Schema::create('scm001', function (Blueprint $table) {
            $table->comment('Maestro de Dependencias con identificador de organigrama');
            $table->string('c01estado', 2)->nullable();
            $table->string('c01feinvi', 8)->nullable();
            $table->string('c01depsecr', 2)->nullable();
            $table->string('c01depsubs', 1)->nullable();
            $table->string('c01depersu', 1)->nullable();
            $table->string('c01depdire', 1)->nullable();
            $table->string('c01depdpto', 1)->nullable();
            $table->string('c01depdivi', 1)->nullable();
            $table->string('c01leyen', 200)->nullable()->index('scm001_2');
            $table->string('c01depresu', 15)->primary();
            $table->integer('c01ubi_geo_id')->nullable();
            $table->integer('c01jefe')->nullable();
            $table->string('c01contacto', 100)->nullable();
            $table->string('c01telefonos', 80)->nullable();
            $table->string('c01internos', 80)->nullable();
            $table->string('c01email', 80)->nullable();

            $table->unique(['c01depresu'], 'scm001_1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scm001');
    }
};
