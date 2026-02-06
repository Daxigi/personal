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
        Schema::create('sem007', function (Blueprint $table) {
            $table->comment('Embargos por Liquidación - Historico');
            $table->integer('s15codliq')->index('sem007_i01');
            $table->integer('s14legajo')->nullable();
            $table->integer('e01legajo');
            $table->string('s14apyn', 150)->nullable();
            $table->integer('s14sit_rev')->nullable();
            $table->date('s14feenvio')->nullable();
            $table->date('s14fepago')->nullable();
            $table->date('s14feenvio_bco')->nullable();
            $table->integer('s15adic')->nullable();
            $table->decimal('s15importe', 9)->nullable();
            $table->integer('e01cod_emb');
            $table->integer('e01correl_emb');
            $table->bigInteger('e01nro_cuenta')->nullable();
            $table->char('e01cod_deposito', 1)->nullable();
            $table->string('e01cbu', 25)->nullable();
            $table->string('cbu', 22)->nullable();
            $table->char('e01estado', 1)->nullable();
            $table->string('tipodoc', 2)->nullable();
            $table->bigInteger('nrodoc')->nullable();
            $table->string('denominacion', 22)->nullable();
            $table->char('situacion', 1)->nullable();
            $table->integer('e01codigo_bco')->nullable();
            $table->string('e01fedes_mm', 2)->nullable();
            $table->integer('e01fedes_aa')->nullable();
            $table->string('e01fehas_mm', 2)->nullable();
            $table->integer('e01fehas_aa')->nullable();

            $table->primary(['s15codliq', 'e01legajo', 'e01cod_emb', 'e01correl_emb']);
            $table->index(['s15codliq', 'e01legajo'], 'sem007_i02');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sem007');
    }
};
