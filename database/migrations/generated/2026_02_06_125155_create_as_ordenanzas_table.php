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
        Schema::create('as_ordenanzas', function (Blueprint $table) {
            $table->comment('Ordenanzas y Resoluciones de Normas regulatorias del personal');
            $table->string('ord_id', 15)->primary()->comment('Identificador de Ordenanza - Formado por la concatenación de ord_nro.\'/\'.ord_anio');
            $table->smallInteger('ord_nro');
            $table->smallInteger('ord_anio');
            $table->string('ord_asunto', 200);
            $table->char('ord_tipo', 1)->nullable();
            $table->string('nombre_imagen', 150)->nullable()->comment('Parte del path y nombre del archivo que contiene la imagen de la ordenanza');
            $table->text('etiquetas')->nullable()->comment('Etiquetas de búsqueda. Pababras separadas por comas');
            $table->string('cod_area', 5)->nullable()->comment('Principal intresada');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_ordenanzas');
    }
};
