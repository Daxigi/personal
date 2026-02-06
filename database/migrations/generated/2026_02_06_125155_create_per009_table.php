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
        Schema::create('per009', function (Blueprint $table) {
            $table->comment('Filas de novedades en el legajo');
            $table->integer('p09legajo')->comment('Identificador del agente - Número de legajo');
            $table->integer('p09corr')->comment('Correlativo de novedad - numeración independiente por agente');
            $table->string('p09tipo_nov', 5)->comment('Tipo de novedad');
            $table->date('p09fenov')->nullable()->default('\'now\'::text')->comment('Fecha de la novedad');
            $table->string('p09tipo_doc', 20)->nullable()->comment('Tipo de documentación relacionada a la novedad');
            $table->string('p09id_doc', 15)->nullable()->comment('Número o identificación de la documentación');
            $table->string('p09obs', 300)->nullable()->comment('Observaciones');
            $table->char('p09estado', 1)->nullable()->default('A')->comment('Estado del registro.
\'A\'-Activo / \'*\'-Baja');
            $table->string('p09resto_reg', 250)->nullable()->comment('Detalles particulares del tipo de novedad');
            $table->string('p09usualta', 20)->comment('Usuario que dio el alta');
            $table->timestamp('p09fealta')->nullable()->default(DB::raw("now()"))->comment('Fecha de alta del registro');
            $table->string('p09usumod', 20)->comment('Usuario que efectuó la última modificación');
            $table->timestamp('p09femod')->nullable()->default(DB::raw("now()"))->comment('Fecha de la última modificación');

            $table->primary(['p09legajo', 'p09corr']);
            $table->index(['p09legajo', 'p09corr'], 'per009_ind01');
            $table->unique(['p09legajo', 'p09corr', 'p09tipo_nov'], 'per009_u1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per009');
    }
};
