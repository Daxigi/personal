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
        Schema::create('sue041_old', function (Blueprint $table) {
            $table->comment('Impuesto a las ganancias: Tabla de escalas');
            $table->date('s41fpv')->comment('Fecha de vigencia');
            $table->smallInteger('s41mes')->comment('Mes de liquidación
');
            $table->smallInteger('s41corr')->comment('Correlativo de los distintos tramos por mes');
            $table->decimal('s41gndesde', 9)->nullable()->comment('Ganancia neta imponible desde');
            $table->decimal('s41gnhasta', 10)->nullable()->comment('Ganancia neta imponible  hasta');
            $table->decimal('s41fijo', 9)->nullable()->comment('Importe fijo');
            $table->decimal('s41porc', 5)->nullable()->comment('Porcentaje a aplicar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue041_old');
    }
};
