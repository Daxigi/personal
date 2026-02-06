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
        Schema::create('per001', function (Blueprint $table) {
            $table->comment('Tabla principal de Legajos - Contiene datos personales del agente');
            $table->increments('p01legajo')->comment('Nro. de Legajo - Identificador del agente');
            $table->smallInteger('p01tipodoc')->nullable()->default(5)->comment('Tipo documento (ver en el esquema public, tabla SCM005)');
            $table->integer('p01docum')->index('per001_i1')->comment('Número de documento');
            $table->string('p01apyn', 150)->comment('Apellido y nombres');
            $table->string('p01sexo', 15)->comment('Masculino / Femenino
El valor se seleccionará de una lista definida en el programa.');
            $table->date('p01fenac')->nullable()->comment('Fecha de nacimiento');
            $table->string('p01locnac', 50)->nullable()->comment('Localidad de nacimiento');
            $table->integer('p01idpcianac')->nullable()->comment('Código de la Provincia de nacimiento');
            $table->string('p01paisnac', 50)->nullable()->comment('País de nacimiento');
            $table->date('p01feadonac')->nullable()->comment('Fecha de adopción de la nacionalidad argentina.');
            $table->string('p01locdom', 50)->nullable()->comment('Domicilio - Localidad');
            $table->integer('p01idpciadom')->nullable()->comment('Domicilio - Código de provincia.
ver en el esquema public, tabla SCM006');
            $table->string('p01estcivil', 30)->nullable()->comment('Estado civil');
            $table->string('p01usualta', 20)->nullable()->default('sin datos')->comment('Usuario que da de alta el registro');
            $table->timestamp('p01fealta')->nullable()->default(DB::raw("now()"))->comment('Fecha y hora del alta del registro');
            $table->string('p01usumod', 20)->nullable()->comment('Usuario que efectuó la última modificación al registro');
            $table->timestamp('p01femod')->nullable()->default(DB::raw("now()"))->comment('Fecha y hora de la última modificación');
            $table->string('p01email', 100)->nullable();
            $table->string('p01comentarios', 300)->nullable();
            $table->string('p01domicilio', 200)->nullable();
            $table->smallInteger('p01nrocuil')->nullable()->comment('Nro.identificación del cuil');
            $table->smallInteger('p01restocuil')->nullable()->comment('Dígito verificador del cuil');
            $table->bigInteger('id_anexo_ubi')->nullable()->comment('Identificador del domicilio anexo a la dependencia actual del agente');
            $table->string('telefono', 50)->nullable()->comment('telefono del agente');

            $table->index(['p01docum', 'p01legajo'], 'documento_legajo1');
            $table->index(['p01legajo'], 'documento_legajo3');
            $table->unique(['p01docum'], 'per001_u1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per001');
    }
};
