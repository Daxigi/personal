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
        Schema::create('per066', function (Blueprint $table) {
            $table->comment('Relación entre Empresas y Rubros');
            $table->integer('p66id')->comment('Identificador de la Empresa');
            $table->integer('p66rubro')->comment('Rubro asociado - Tabla anx_rubros');

            $table->primary(['p66id', 'p66rubro']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per066');
    }
};
