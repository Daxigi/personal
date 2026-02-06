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
        Schema::create('as_ubra_neike', function (Blueprint $table) {
            $table->integer('id_ubra');
            $table->integer('documento')->nullable();
            $table->date('fe_entrada')->nullable();
            $table->time('hh_entrada')->nullable();
            $table->date('fe_salida')->nullable();
            $table->time('hh_salida')->nullable();
            $table->timestamp('procesado')->nullable();
            $table->time('entrada_manual')->nullable();
            $table->time('salida_manual')->nullable();
            $table->integer('sensorid_e')->nullable();
            $table->integer('sensorid_s')->nullable();
            $table->string('imagen_e', 150)->nullable();
            $table->string('imagen_s', 150)->nullable();
            $table->geometry('the_geom_e', 'point', 4326)->nullable();
            $table->geometry('the_geom_s', 'point', 4326)->nullable();
            $table->string('ip_e', 200)->nullable();
            $table->string('ip_s', 200)->nullable();
            $table->string('comentario', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_ubra_neike');
    }
};
