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
        Schema::create('recibos_sueldos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('legajo')->nullable();
            $table->integer('anio')->nullable();
            $table->integer('mes')->nullable();
            $table->integer('nliqui')->nullable();
            $table->integer('tipo')->nullable();
            $table->string('nombre_pdf', 29)->nullable();
            $table->string('comentarios', 250)->nullable();
            $table->boolean('activo')->nullable();

            $table->index(['legajo', 'nliqui'], 'codliq_legajo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recibos_sueldos');
    }
};
