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
        Schema::create('contratos', function (Blueprint $table) {
            $table->comment('Tabla de Renovacion de contratos)');
            $table->integer('documento');
            $table->integer('correl');
            $table->string('resol', 10)->nullable();
            $table->date('resol_f')->nullable();
            $table->date('feini');
            $table->date('fefin')->nullable();

            $table->primary(['documento', 'correl']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratos');
    }
};
