<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('am_acta', function (Blueprint $table) {
            $table->increments('acm_acta');
            $table->date('acm_fecha')->nullable()->default('\'now\'::text');
            $table->integer('acm_legajo')->nullable();
            $table->integer('acm_documento')->nullable();
            $table->string('acm_apyn', 150)->nullable();
            $table->string('acm_leyenda', 150)->nullable();
            $table->string('acm_n_heredera', 20)->nullable();
            $table->string('acm_c01leyen', 150)->nullable();
            $table->string('acm_subse', 150)->nullable();
            $table->string('acm_secre', 150)->nullable();
            $table->string('acm_funcion_actual', 150)->nullable();
            $table->string('acm_formacion', 150)->nullable();
            $table->string('acm_patalogia', 200)->nullable();
            $table->string('acm_patalogia_otras', 200)->nullable();
            $table->boolean('acm_lic_larga_duracion')->nullable();
            $table->boolean('acm_lic_medica_comun')->nullable();
            $table->date('fecha_desde');
            $table->date('fecha_hasta');
            $table->string('acm_obs', 300)->nullable();
            $table->string('acm_medico_tratante', 150)->nullable();
            $table->string('acm_conclusiones', 300)->nullable();
            $table->date('fecha_alta_medica');
            $table->date('fecha_retorno_lab');
            $table->string('acm_cambio_funcion', 200)->nullable();
            $table->string('acm_tareas_no', 300)->nullable();
            $table->boolean('acm_ate_publico')->nullable();
            $table->boolean('acm_admi_conpc')->nullable();
            $table->boolean('acm_admi_sinpc')->nullable();
            $table->boolean('acm_oper_calif')->nullable();
            $table->boolean('acm_oper_nocalif')->nullable();
            $table->string('acm_descr_tarea', 300)->nullable();
            $table->integer('estado')->nullable();
            $table->timestamp('fealta')->nullable()->default(DB::raw("now()"));
            $table->string('usualta', 20)->nullable();
            $table->timestamp('femod')->nullable();
            $table->string('usumod', 20)->nullable();
            $table->string('prof1', 150)->nullable();
            $table->string('prof2', 150)->nullable();
            $table->string('prof3', 150)->nullable();
            $table->date('acm_fecha_graba')->nullable()->default('\'now\'::text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('am_acta');
    }
};
