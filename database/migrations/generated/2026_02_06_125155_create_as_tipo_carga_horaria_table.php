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
        Schema::create('as_tipo_carga_horaria', function (Blueprint $table) {
            $table->comment('Tipos de Carga Horaria');
            $table->smallInteger('tch_id')->primary()->comment('Identificador');
            $table->string('tch_tipo', 20)->comment('Tipo de carga horaria - nombre del tipo');
            $table->string('tch_descr', 500)->nullable()->comment('Descripción');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_tipo_carga_horaria');
    }
};
