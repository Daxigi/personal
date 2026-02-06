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
        Schema::create('as_personal_autorizado_extras', function (Blueprint $table) {
            $table->bigIncrements('id_autorizacion');
            $table->integer('legajo')->comment('Legajo del agente autorizado');
            $table->date('fe_desde')->comment('Fecha de inicio de la autorización para hacer horas');
            $table->date('fe_hasta')->comment('Fecha finalización de la autorización');
            $table->string('autorizante', 150)->comment('Funcionario autorizante');
            $table->smallInteger('horas_autorizadas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_personal_autorizado_extras');
    }
};
