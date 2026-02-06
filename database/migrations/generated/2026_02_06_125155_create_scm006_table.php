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
        Schema::create('scm006', function (Blueprint $table) {
            $table->comment('Tabla de Provincias Argentinas');
            $table->increments('c06id');
            $table->string('c06pcia', 100)->comment('Nombre de la Provincia');
            $table->boolean('activo')->nullable()->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scm006');
    }
};
