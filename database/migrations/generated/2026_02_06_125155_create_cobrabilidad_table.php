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
        Schema::create('cobrabilidad', function (Blueprint $table) {
            $table->increments('orden');
            $table->bigInteger('cuil');
            $table->string('razon_social', 150)->nullable();
            $table->decimal('nominal_inmo', 11)->nullable();
            $table->decimal('interes_inmo', 11)->nullable();
            $table->decimal('nominal_auto', 11)->nullable();
            $table->decimal('interes_auto', 11)->nullable();
            $table->decimal('nominal_moto', 11)->nullable();
            $table->decimal('interes_moto', 11)->nullable();
            $table->decimal('nominal_comercio', 11)->nullable();
            $table->decimal('interes_comercio', 11)->nullable();
            $table->decimal('nominal_cementerio', 11)->nullable();
            $table->decimal('interes_cementerio', 11)->nullable();
            $table->decimal('nominal_plan', 11)->nullable();
            $table->decimal('interes_plan', 11)->nullable();
            $table->decimal('total', 11)->nullable();
            $table->decimal('interes_ahorrado', 11)->nullable();
            $table->decimal('sin_interes', 11)->nullable();
            $table->decimal('cuota', 11)->nullable();
            $table->integer('anio')->nullable();
            $table->integer('mes')->nullable();
            $table->boolean('activo')->nullable();

            $table->primary(['orden', 'cuil']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cobrabilidad');
    }
};
