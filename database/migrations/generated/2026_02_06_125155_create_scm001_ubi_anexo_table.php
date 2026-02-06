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
        Schema::create('scm001_ubi_anexo', function (Blueprint $table) {
            $table->comment('Ubicaciones geográficas anexas a la dependencia');
            $table->bigInteger('id_anexo_ubi')->primary();
            $table->string('c01depresu', 20)->nullable();
            $table->string('descripcion', 100)->nullable();
            $table->integer('pr03id')->nullable();
            $table->smallInteger('id_tipo_anexo');
            $table->string('responsable', 100)->nullable();
            $table->string('comentarios', 300)->nullable();
            $table->string('telefonos', 80)->nullable();
            $table->string('internos', 80)->nullable();
            $table->string('email', 80)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scm001_ubi_anexo');
    }
};
