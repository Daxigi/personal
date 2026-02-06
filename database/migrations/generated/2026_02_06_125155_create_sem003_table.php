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
        Schema::create('sem003', function (Blueprint $table) {
            $table->comment('Tabla de Parametros de Liquidación de Embargos');
            $table->integer('e03legajo')->index('sem003_i1')->comment('Legajo');
            $table->integer('e03cod_emb')->comment('Codigo de Embargo');
            $table->integer('e03cor_emb')->comment('Correlativo de Embargos');
            $table->integer('e03doc_hijo')->comment('Documento del Hijo');
            $table->string('usualta', 15)->nullable()->comment('Auditoría - Usuario Alta');
            $table->timestamp('fecalta', 6)->nullable()->default(DB::raw("now()"))->comment('Fecha Alta');
            $table->string('usumod', 15)->nullable()->comment('Usuario Modificacón');
            $table->timestamp('femod', 6)->nullable()->default(DB::raw("now()"))->comment('Fecha de Modificación');

            $table->primary(['e03legajo', 'e03cod_emb', 'e03cor_emb', 'e03doc_hijo']);
            $table->index(['e03legajo', 'e03doc_hijo'], 'sem003_i2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sem003');
    }
};
