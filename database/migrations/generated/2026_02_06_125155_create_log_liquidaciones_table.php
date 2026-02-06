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
        Schema::create('log_liquidaciones', function (Blueprint $table) {
            $table->comment('Registro de tiempos de ejecución de cada liquidación');
            $table->increments('id');
            $table->integer('codliq')->nullable();
            $table->integer('tipoliq')->nullable();
            $table->timestamp('feini')->nullable();
            $table->timestamp('fefin')->nullable();
            $table->time('duracion')->nullable();
            $table->integer('registros')->nullable();
            $table->string('situacion', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_liquidaciones');
    }
};
