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
        Schema::create('sem004', function (Blueprint $table) {
            $table->comment('Tabla de pagos de embargos');
            $table->integer('e04legajo')->comment('Nro de Legajo');
            $table->integer('e04cod_emb')->comment('Código de Embargo');
            $table->integer('e04correl_emb')->comment('Nro Correlativo de Embargo');
            $table->integer('e04cuota')->comment('Nro Cuenta');
            $table->integer('e04anio')->nullable()->comment('Año - Período de Descuento');
            $table->integer('e04mes')->nullable()->comment('Mes - Período de Descuento');
            $table->decimal('e04importe', 9)->nullable()->comment('Importe Descontado');
            $table->date('e04fepago')->nullable()->comment('Fecha pago de Tesorería');

            $table->primary(['e04legajo', 'e04cod_emb', 'e04correl_emb', 'e04cuota']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sem004');
    }
};
