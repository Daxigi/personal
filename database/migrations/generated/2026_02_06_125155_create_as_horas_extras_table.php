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
        Schema::create('as_horas_extras', function (Blueprint $table) {
            $table->comment('Registro de horas extras');
            $table->bigIncrements('id_horas')->comment('Identificador del registro');
            $table->integer('legajo')->comment('Legajo');
            $table->date('fecha')->comment('Fecha a la que se le adjudican las horas extras');
            $table->time('horas', 6)->comment('Cantidad de tiempo extra realizado');
            $table->time('h_desde', 6)->nullable();
            $table->time('h_hasta', 6)->nullable();
            $table->string('estado_c', 15)->nullable()->comment('Activas, Vencidas o Tomadas ');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_horas_extras');
    }
};
