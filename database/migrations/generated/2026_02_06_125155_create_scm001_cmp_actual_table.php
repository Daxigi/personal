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
        Schema::create('scm001_cmp_actual', function (Blueprint $table) {
            $table->string('depresu_cmp', 15)->nullable();
            $table->string('exp_mov_permitido', 200)->nullable()->comment('Unica dependencia que la CAJA puede usar como destino cundo debe enviar un expediente al Poder Ejecutivo.');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scm001_cmp_actual');
    }
};
