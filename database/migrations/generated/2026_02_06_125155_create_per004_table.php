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
        Schema::create('per004', function (Blueprint $table) {
            $table->comment('Tabla de personas a cargo');
            $table->integer('p04legajo')->index('per004_i1')->comment('Identificador del agente');
            $table->integer('p04docum')->comment('Número de documento');
            $table->smallInteger('p04relacion')->comment('Código de relación');
            $table->string('p04apyn_rel', 150)->comment('Apellido y nombres');
            $table->date('p04fenac')->comment('Fecha de nacimiento');
            $table->date('p04fpv')->comment('Fecha de puesta en vigencia de la relación');
            $table->char('p04estado', 1)->nullable()->default('A')->comment('Estado del registro. \'A-Activo / *-Baja\'. Indica principalmente si deben efectuarse descuentos o pagar adicionales por esta persona');
            $table->boolean('p04discapacitado')->nullable()->comment('Indicador del estado de discapacitado de la persona');
            $table->boolean('p04osocial')->nullable()->comment('Indicador de que hay que descontar para obra social');
            $table->boolean('p04salario')->nullable()->comment('Indicador de que debe tenerse en cuenta para el salario familiar');
            $table->string('p04usualta', 20)->nullable();
            $table->timestamp('p04fealta')->nullable()->default(DB::raw("now()"));
            $table->string('p04usumod', 20)->nullable();
            $table->timestamp('p04femod')->nullable()->default(DB::raw("now()"));
            $table->string('p04domicilio', 150)->nullable();
            $table->boolean('p04decla')->nullable()->comment('Indicador que se tiene en cuenta para impuesto a las ganancias');

            $table->primary(['p04legajo', 'p04docum']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per004');
    }
};
