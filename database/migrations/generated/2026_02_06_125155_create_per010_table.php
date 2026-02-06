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
        Schema::create('per010', function (Blueprint $table) {
            $table->comment('Seguros contratados por el agente');
            $table->integer('p10legajo')->comment('Id. del agente');
            $table->integer('p10corr')->comment('Correlativo id. de la póliza contratada.  Numeración independiente para cada agente.');
            $table->smallInteger('p10tipo_seguro')->comment('Tipo de seguro contratado');
            $table->integer('p10empresa')->comment('Id. de la empresa contratada');
            $table->string('p10poliza', 50)->unique('per010_u1')->comment('Número de póliza');
            $table->date('p10vige_desde')->comment('Fecha de inicio de vigencia');
            $table->date('p10vige_hasta')->comment('Fecha de finalización de la vigencia');
            $table->string('p10cobertura', 100)->nullable()->comment('Descripción somera de la cobertura');
            $table->decimal('p10prima', 10)->nullable()->default(0)->comment('Prima');
            $table->decimal('p10cap_asegurado', 10)->nullable()->default(0)->comment('Capital asegurado - IMPORTANTE se utiliza en la liquidación del descuento');

            $table->primary(['p10legajo', 'p10corr']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per010');
    }
};
