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
        Schema::create('as_legajo_gch_neike', function (Blueprint $table) {
            $table->comment('Relaciones entre Legajos y GCH de NEIKES');
            $table->integer('legajo_neike')->comment('Legajo del NEIKE');
            $table->smallInteger('leg_gch_id_neike')->comment('Identificador del GCH relacionado');
            $table->date('leg_gch_fedesde_neike')->comment('Inicio de la vigencia del gch');
            $table->date('leg_gch_fehasta_neike')->nullable()->comment('Fín de la vigencia. Nulo significa que no tiene fín');
            $table->string('leg_gch_comentarios_neike', 200)->nullable();
            $table->timestamp('leg_gch_fealta_neike')->nullable()->default(DB::raw("now()"));
            $table->timestamp('leg_gch_femod_neike')->nullable()->default(DB::raw("now()"));
            $table->smallInteger('leg_gch_correl_neike')->comment('Correlativo para cada legajo');
            $table->integer('cod_unidad_neike')->nullable()->comment('Código de Unidad de Control');
            $table->boolean('no_procesa_neike')->nullable();
            $table->smallInteger('tipo_reg_neike')->nullable()->comment('Tipo de Registro: Por planilla, por scanner, otros');
            $table->string('imag_gch', 100)->nullable()->comment('Camino donde se encuentra guardada la imagen digitalizada');
            $table->integer('cod_unidad2')->nullable()->comment('2do Código de Unidad de Control');
            $table->integer('cod_unidad3')->nullable()->comment('3er Código de Unidad de Control');
            $table->boolean('intinerante')->nullable()->comment('SIN Código de Unidad');
            $table->boolean('contraturno')->nullable()->comment('para el 2do GCH abierto en Contraturno');
            $table->string('n_heredera_contr', 20)->nullable()->comment('Depen en contarturno distinta a la del legajo personal');
            $table->string('funcion_contraturno', 100)->nullable()->comment('Funcion que cumple en contarturno distinta a la del legajo personal');

            $table->primary(['legajo_neike', 'leg_gch_correl_neike']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_legajo_gch_neike');
    }
};
