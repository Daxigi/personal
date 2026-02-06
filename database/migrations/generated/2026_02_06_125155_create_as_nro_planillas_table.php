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
        Schema::create('as_nro_planillas', function (Blueprint $table) {
            $table->comment('ABM de Planillas');
            $table->increments('id_nro')->comment('Código de planilla donde firma');
            $table->string('secretaria', 150)->nullable()->comment('Nombre de la Secretaría');
            $table->string('firmante', 100)->nullable()->comment('Nombre y Apellido del responzable');
            $table->string('observaciones', 200)->nullable()->comment('Todo tipo de comentarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_nro_planillas');
    }
};
