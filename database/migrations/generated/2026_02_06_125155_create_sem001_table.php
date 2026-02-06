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
        Schema::create('sem001', function (Blueprint $table) {
            $table->comment('Maestro de Embargos');
            $table->integer('e01legajo')->index('sem001_i1')->comment('Nro de Legajo Agente');
            $table->integer('e01cod_emb')->comment('Código de Embargo');
            $table->integer('e01correl_emb')->comment('Correlativo del Embargo');
            $table->integer('e01orden')->nullable()->comment('Nro de Orden Expediente Municipal');
            $table->string('e01letra', 1)->nullable()->comment('Letra Expediente Municipal');
            $table->integer('e01anio')->nullable()->comment('Año del Expediente Municipal');
            $table->string('e01juzgado', 100)->nullable()->comment('Juzgado');
            $table->string('e01secretaria', 100)->nullable()->comment('Secretaría del Juzgado');
            $table->string('e01expte_juzgado_n', 10)->nullable()->comment('Nro de Expediente Juzgado');
            $table->integer('e01expte_juzgado_a')->nullable()->comment('Año del Expediente Juzgado');
            $table->integer('e01nro_oficio')->nullable()->comment('Nro de Oficio');
            $table->string('e01caratula', 300)->nullable()->comment('Caratula Expediente Juzgado');
            $table->string('e01fedes_mm', 2)->nullable()->comment('mes Fecha de Inicio Embargo ');
            $table->integer('e01fedes_aa')->nullable()->comment('año Fecha de Inicio Embargo ');
            $table->string('e01fehas_mm', 2)->nullable()->comment('mes Fecha de finalizacion del Embargo');
            $table->integer('e01fehas_aa')->nullable()->comment('año Fecha de finalizacion del Embargo');
            $table->char('e01estado', 1)->nullable()->comment('Código de estado E- Ejecucion   P- Pendiente C- Cancelado L- Levantamiento');
            $table->string('e01comentario', 200)->nullable()->comment('Causa del Levantamiento');
            $table->string('e01cbu', 25)->nullable()->comment('Clave bancacaria de la Cuenta');
            $table->decimal('e01importe_ini', 9)->nullable()->comment('Importe Inicial');
            $table->bigInteger('e01nro_cuenta')->nullable()->comment('Nro de Cuenta');
            $table->char('e01dgto_cuenta', 2)->nullable()->comment('Digito de la Cuenta');
            $table->char('e01cod_deposito', 1)->nullable()->comment('Código de Deposito D - Deposito   T - Tranferencia');
            $table->integer('e01codigo_bco')->nullable()->comment('Código de Banco');
            $table->string('usualta', 15)->nullable()->comment('Auditoría - Usuario Alta');
            $table->timestamp('fecalta', 6)->nullable()->default(DB::raw("now()"))->comment('Fecha Alta');
            $table->string('usumod', 15)->nullable()->comment('Usuario Modificacón');
            $table->timestamp('femod', 6)->nullable()->default(DB::raw("now()"))->comment('Fecha de Modificación');
            $table->date('e01fecha_oficio')->nullable()->comment('Fecha del oficio(por los EMB. PENDIENTES)');
            $table->string('cbu', 22)->nullable();
            $table->string('tipodoc', 2)->nullable();
            $table->bigInteger('nrodoc')->nullable();
            $table->string('denominacion', 22)->nullable();
            $table->integer('nrocuenta')->nullable();
            $table->string('gedo', 300)->nullable()->comment('---EXPEDIENTE DIGITAL');

            $table->primary(['e01legajo', 'e01cod_emb', 'e01correl_emb']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sem001');
    }
};
