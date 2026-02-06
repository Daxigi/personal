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
        Schema::create('as_legajo_gch', function (Blueprint $table) {
            $table->comment('Relaciones entre Legajos y GCH');
            $table->integer('p01legajo')->comment('Legajo del agente');
            $table->smallInteger('leg_gch_id')->comment('Identificador del GCH relacionado');
            $table->date('leg_gch_fedesde')->comment('Inicio de la vigencia del gch');
            $table->date('leg_gch_fehasta')->nullable()->comment('Fín de la vigencia. Nulo significa que no tiene fín');
            $table->string('leg_gch_comentarios', 200)->nullable();
            $table->timestamp('leg_gch_fealta')->nullable()->default(DB::raw("now()"));
            $table->timestamp('leg_gch_femod')->nullable()->default(DB::raw("now()"));
            $table->smallInteger('leg_gch_correl')->comment('Correlativo para cada legajo');
            $table->integer('cod_unidad')->nullable()->comment('Código de Unidad de Control');
            $table->boolean('no_procesa')->nullable();
            $table->smallInteger('tipo_reg')->nullable()->comment('Tipo de Registro: Por planilla, por scanner, otros');
            $table->string('imag_gch', 100)->nullable()->comment('Camino donde se encuentra guardada la imagen digitalizada');
            $table->integer('cod_unidad2')->nullable()->comment('2do Código de Unidad de Control ');
            $table->integer('cod_unidad3')->nullable()->comment('3er Código de Unidad de Control ');
            $table->boolean('intinerante')->nullable()->comment('SIN Código de Unidad');
            $table->boolean('contraturno')->nullable()->comment('para el 2do GCH abierto en Contraturno');
            $table->string('n_heredera_contr', 20)->nullable()->comment('Depen en contarturno distinta a la del legajo personal');
            $table->string('funcion_contraturno', 100)->nullable()->comment('Funcion que cumple en contarturno distinta a la del legajo personal');
            $table->string('depen', 20)->nullable();
            $table->string('funcion', 100)->nullable();

            $table->primary(['p01legajo', 'leg_gch_correl']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_legajo_gch');
    }
};
