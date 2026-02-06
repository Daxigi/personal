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
        Schema::create('scm003', function (Blueprint $table) {
            $table->comment('Maestro de Barrios de Corrientes Capital');
            $table->integer('codba')->primary()->comment('Código de Barrio');
            $table->string('nomba', 100)->index('scm003_i1')->comment('Nombre del Barrio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scm003');
    }
};
