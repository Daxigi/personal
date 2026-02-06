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
        Schema::create('scm004_aux', function (Blueprint $table) {
            $table->comment('Archivo que combina Calles con Barrios - Auxiliar para calles no codificadas');
            $table->bigIncrements('codca')->comment('Código de calle');
            $table->string('nomca', 150)->nullable()->comment('Nombre de la calle');
            $table->decimal('hdesde', 7)->comment('Altura desde');
            $table->decimal('hhasta', 7)->comment('Altura hasta');
            $table->string('lado', 10)->nullable()->comment('Lado de la calle que pertenece al barrio asociado');
            $table->integer('codba')->comment('Barrio asociado a la calle y altura determinadas');

            $table->primary(['codca', 'hdesde', 'hhasta']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scm004_aux');
    }
};
