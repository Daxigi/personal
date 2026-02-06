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
        Schema::create('sue042', function (Blueprint $table) {
            $table->comment('Impuesto a las ganancias: Tabla de rubros de deducciones grales.');
            $table->increments('s42rubro');
            $table->string('s42concepto', 150)->nullable();
            $table->decimal('s42valor', 9)->nullable();
            $table->string('s42tipo_valor', 10)->nullable()->comment('Tipo de valor importe/porcentaje');
            $table->integer('s42anio')->comment('Año de vigencia del valor tope del rubro');

            $table->primary(['s42anio', 's42rubro']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue042');
    }
};
