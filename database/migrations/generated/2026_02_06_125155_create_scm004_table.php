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
        Schema::create('scm004', function (Blueprint $table) {
            $table->comment('Archivo que combina Calles con Barrios');
            $table->bigInteger('codca')->comment('Código de calle');
            $table->string('nomca', 150)->nullable()->index('scm004_i1')->comment('Nombre de la calle');
            $table->decimal('hdesde', 7)->comment('Altura desde');
            $table->decimal('hhasta', 7)->comment('Altura hasta');
            $table->string('lado', 10)->nullable()->comment('Lado de la calle que pertenece al barrio asociado');
            $table->integer('codba')->comment('Barrio asociado a la calle y altura determinadas');

            $table->primary(['codca', 'hdesde', 'hhasta', 'codba']);
            $table->index(['codba', 'codca'], 'scm004_i2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scm004');
    }
};
