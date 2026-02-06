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
        Schema::create('per069', function (Blueprint $table) {
            $table->comment('Funciones que cumplen los agentes');
            $table->increments('p69id');
            $table->string('p69funcion', 80);
            $table->string('p69letras', 2)->nullable();
            $table->string('inhabilita', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per069');
    }
};
