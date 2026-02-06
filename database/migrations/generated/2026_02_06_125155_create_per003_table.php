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
        Schema::create('per003', function (Blueprint $table) {
            $table->comment('Tabla de trabajos u ocupaciones anteriores');
            $table->smallInteger('p03id')->comment('Identificador del registro - autonumérico');
            $table->integer('p03legajo')->comment('Identificador del agente');
            $table->smallInteger('p03ambito')->comment('Ambito de trabajo (público/privado/mixto)');
            $table->string('p03descr', 150)->comment('Descripción');
            $table->string('p03empleador', 150)->comment('Empleador');
            $table->date('p03feing')->comment('Fecha de ingreso');
            $table->date('p03feegr')->nullable()->comment('Fecha de egreso (puede no existir si el agente mantiene el trabajo)');
            $table->string('p03coment', 200)->nullable()->comment('Comentario');
            $table->decimal('p03porcrec', 4)->default(0)->comment('Porcentaje de antigüedad reconocido para la liquidación y licencias');
            $table->string('p03usualta', 20)->nullable();
            $table->timestamp('p03fealta')->nullable()->default(DB::raw("now()"));
            $table->string('p03usumod', 20)->nullable();
            $table->timestamp('p03femod')->nullable()->default(DB::raw("now()"));

            $table->primary(['p03legajo', 'p03id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per003');
    }
};
