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
        Schema::create('as_tardanzas', function (Blueprint $table) {
            $table->bigIncrements('id_tardanza');
            $table->date('fecha')->comment('Fecha de la tardanza');
            $table->integer('legajo')->comment('Legajo del agente');
            $table->smallInteger('minutos')->comment('Tardanza expresada en minutos');
            $table->string('comentario', 100)->nullable();

            $table->index(['fecha', 'legajo'], 'as_tardanzas_i1');
            $table->index(['legajo', 'fecha'], 'as_tardanzas_i2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_tardanzas');
    }
};
