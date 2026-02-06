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
        Schema::create('sem001_b', function (Blueprint $table) {
            $table->comment('Maestro de Embargos-bk');
            $table->integer('e01legajo');
            $table->integer('e01cod_emb');
            $table->integer('e01correl_emb');
            $table->integer('e01orden')->nullable();
            $table->string('e01letra', 1)->nullable();
            $table->integer('e01anio')->nullable();
            $table->string('e01juzgado', 100)->nullable();
            $table->string('e01secretaria', 100)->nullable();
            $table->string('e01expte_juzgado_n', 10)->nullable();
            $table->integer('e01expte_juzgado_a')->nullable();
            $table->integer('e01nro_oficio')->nullable();
            $table->string('e01caratula', 300)->nullable();
            $table->string('e01fedes_mm', 2)->nullable();
            $table->integer('e01fedes_aa')->nullable();
            $table->string('e01fehas_mm', 2)->nullable();
            $table->integer('e01fehas_aa')->nullable();
            $table->char('e01estado', 1)->nullable();
            $table->string('e01comentario', 200)->nullable();
            $table->string('e01cbu', 25)->nullable();
            $table->decimal('e01importe_ini', 9)->nullable();
            $table->integer('e01nro_cuenta')->nullable();
            $table->char('e01dgto_cuenta', 2)->nullable();
            $table->char('e01cod_deposito', 1)->nullable();
            $table->integer('e01codigo_bco')->nullable();
            $table->string('usualta', 15)->nullable();
            $table->timestamp('fecalta', 6)->nullable()->default(DB::raw("now()"));
            $table->string('usumod', 15)->nullable();
            $table->timestamp('femod', 6)->nullable()->default(DB::raw("now()"));

            $table->primary(['e01legajo', 'e01cod_emb', 'e01correl_emb']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sem001_b');
    }
};
