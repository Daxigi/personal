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
        Schema::create('sem002', function (Blueprint $table) {
            $table->comment('Tabla de Parametros de Liquidación de Embargos');
            $table->integer('e02legajo')->index('sem002_i1')->comment('Legajo');
            $table->integer('e02codemb')->comment('Codigo de Embargo');
            $table->integer('e02cor_emb')->comment('Correlativo de Embargos');
            $table->decimal('e02cta_fija', 9)->nullable()->comment('Importe Fijo');
            $table->decimal('e02hab_conapor', 5)->nullable();
            $table->decimal('e02hab_sinapor', 5)->nullable()->comment('Porcentaje de haberes SIN sporte');
            $table->decimal('e02sac_conapor', 5)->nullable()->comment('Porcentaje de SAC');
            $table->decimal('e02sac_sinapor', 5)->nullable()->comment('Porcentaje de SAC');
            $table->boolean('e02salario')->nullable()->comment('Si no Salario');
            $table->boolean('e02escolaridad')->nullable()->comment('Escolaridad');
            $table->string('usualta', 15)->nullable()->comment('Auditoría - Usuario Alta');
            $table->timestamp('fecalta', 6)->nullable()->default(DB::raw("now()"))->comment('Fecha Alta');
            $table->string('usumod', 15)->nullable()->comment('Usuario Modificacón');
            $table->timestamp('femod', 6)->nullable()->default(DB::raw("now()"))->comment('Fecha de Modificación');
            $table->decimal('plus_conapor', 5)->nullable();
            $table->decimal('plus_sinapor', 5)->nullable();

            $table->primary(['e02legajo', 'e02codemb', 'e02cor_emb']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sem002');
    }
};
