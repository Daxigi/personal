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
        Schema::create('sue045', function (Blueprint $table) {
            $table->comment('Tabla de valores mínimos para cálculo de dsctos IPS IOSCOR estatal');
            $table->date('s45fpv')->comment('Fecha de inicio de vigencia');
            $table->integer('s45adic')->comment('Concepto asociado');
            $table->string('s45descr', 150)->nullable()->comment('Documentación');
            $table->decimal('s45importe', 9)->nullable()->comment('Importe mínimo');

            $table->primary(['s45fpv', 's45adic']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue045');
    }
};
