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
        Schema::create('scm007', function (Blueprint $table) {
            $table->comment('Tabla de Localidades de las Provincias Argentinas');
            $table->increments('c07id');
            $table->smallInteger('c07id_pcia');
            $table->string('c07localidad', 100)->comment('Nombre de Localidades');
            $table->boolean('activo')->nullable()->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scm007');
    }
};
