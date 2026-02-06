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
        Schema::create('per064', function (Blueprint $table) {
            $table->comment('Días de licencia por antigüedad');
            $table->smallInteger('p64anio_vigencia_rangos')->comment('Id. de grupo de rangos - Año de puesta en vigencia');
            $table->smallInteger('p64antiguedad_desde')->comment('Límite superior del rango');
            $table->smallInteger('p64dias_licencia')->comment('Cantidad de días hábiles de licencia ');
            $table->string('p64doc_aval', 50)->nullable()->comment('Documentación respaldatoria');

            $table->primary(['p64anio_vigencia_rangos', 'p64antiguedad_desde']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per064');
    }
};
