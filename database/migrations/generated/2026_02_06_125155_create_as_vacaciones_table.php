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
        Schema::create('as_vacaciones', function (Blueprint $table) {
            $table->integer('legajo')->comment('Legajo del agente');
            $table->smallInteger('correl')->comment('Identificador de registro para ese agente en particular');
            $table->smallInteger('anio')->index('vacaciones_i2')->comment('Año al que pertenecen las vacaciones solicitadas');
            $table->smallInteger('dias_solicitados')->comment('Cantidad de días solicitados');
            $table->smallInteger('dias_otorgados')->comment('Cantidad de días otorgados');
            $table->date('fe_desde')->comment('Fecha_desde autorizada');
            $table->date('fe_hasta')->comment('Fecha_hasta autorizada');
            $table->date('fe_suspension')->nullable()->comment('Fecha de suspensión. Se debe especificar el día que debe presentarse');
            $table->string('disposicion', 20)->nullable()->comment('Número de disposición');
            $table->string('firmante', 100)->nullable()->comment('Funcionario que firma la disposición');
            $table->integer('dias_dispo')->nullable();

            $table->primary(['legajo', 'correl']);
            $table->index(['legajo', 'correl'], 'vacaciones_i1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_vacaciones');
    }
};
