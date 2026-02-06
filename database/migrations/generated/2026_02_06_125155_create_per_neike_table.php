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
        Schema::create('per_neike', function (Blueprint $table) {
            $table->integer('legajo')->nullable();
            $table->integer('documento')->nullable()->index('per_neike_i1');
            $table->string('apyn', 150)->nullable();
            $table->integer('sit_rev')->nullable();
            $table->string('leyenda', 150)->nullable();
            $table->string('depen', 20)->nullable();
            $table->string('n_heredera', 20)->nullable();
            $table->string('c01leyen', 150)->nullable();
            $table->string('estado', 20)->nullable();
            $table->date('feingreso')->nullable();
            $table->integer('agrup')->nullable();
            $table->integer('nivel')->nullable();
            $table->date('fepromo')->nullable();
            $table->string('sexo', 30)->nullable();
            $table->string('agrup_l', 2)->nullable()->comment('Letras para el Agrup del NUEVO ESCALAFON');
            $table->string('nivel_l', 2)->nullable()->comment('Letras para el Nivel del NUEVO ESCALAFON');

            $table->unique(['legajo', 'sit_rev'], 'per_neike_u1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per_neike');
    }
};
