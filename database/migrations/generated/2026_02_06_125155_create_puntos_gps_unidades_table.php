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
        Schema::create('puntos_gps_unidades', function (Blueprint $table) {
            $table->bigInteger('id_dispositivo');
            $table->string('patente', 50)->nullable();
            $table->string('modelo', 30)->nullable();
            $table->integer('estado')->nullable();
            $table->decimal('latitud', 30, 27)->nullable();
            $table->decimal('longitud', 30, 27)->nullable();
            $table->string('descripcion', 200)->nullable();
            $table->string('marca', 50)->nullable();
            $table->timestamp('fecha')->nullable();
            $table->integer('velocidad')->nullable();
            $table->string('grupo', 32)->nullable();
            $table->string('usuario', 32)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('puntos_gps_unidades');
    }
};
