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
        Schema::create('scm001_ubi_anexo_tipo', function (Blueprint $table) {
            $table->increments('id_tipo_anexo');
            $table->string('descripcion', 100);
            $table->smallInteger('estado')->nullable()->default(1)->comment('1-Activo / 2-Baja');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scm001_ubi_anexo_tipo');
    }
};
