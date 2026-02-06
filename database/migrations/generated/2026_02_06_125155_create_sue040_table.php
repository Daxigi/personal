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
        Schema::create('sue040', function (Blueprint $table) {
            $table->comment('Impuesto a las ganancias: Tabla de Deducciones ');
            $table->date('s40fpv')->comment('Fecha de vigencia');
            $table->smallInteger('s40mes')->comment('Mes de liquidación');
            $table->decimal('s40gnoimp', 9)->nullable()->comment('Ganancia no imponible');
            $table->decimal('s40conyuge', 9)->nullable()->comment('Deducción por cónyuge');
            $table->decimal('s40hijo', 9)->nullable()->comment('Deducción por hijo
');
            $table->decimal('s40otros', 9)->nullable()->comment('Deducción por otras cargas fliares.

');
            $table->decimal('s40deduccion', 9)->nullable()->comment('Deducción especial');

            $table->primary(['s40fpv', 's40mes']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue040');
    }
};
