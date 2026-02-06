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
        Schema::create('as_temp_cont', function (Blueprint $table) {
            $table->integer('p09legajo')->nullable();
            $table->date('p09fenov')->nullable();
            $table->text('sit_rev9')->nullable();
            $table->integer('sit_rev')->nullable();
            $table->string('p09tipo_nov', 5)->nullable();
            $table->text('tipo')->nullable();
            $table->string('p09obs', 300)->nullable();
            $table->integer('p09corr')->nullable();
            $table->date('fecha_desde')->nullable();
            $table->date('fecha_hasta')->nullable();
            $table->integer('dias')->nullable();
            $table->integer('mes')->nullable();
            $table->integer('anio')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_temp_cont');
    }
};
