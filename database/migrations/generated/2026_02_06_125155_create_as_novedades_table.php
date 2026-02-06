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
        Schema::create('as_novedades', function (Blueprint $table) {
            $table->comment('Novedades de Asistencia');
            $table->date('nov_fecha')->comment('Fecha de la novedad');
            $table->integer('p01legajo')->comment('Legajo del agente');
            $table->smallInteger('p01tipodoc')->comment('Tipo de documento');
            $table->integer('p01docum')->comment('Nro. de documento');
            $table->string('art_id', 40)->nullable()->comment('Id. del artículo que se aplica a la jornada');
            $table->string('nov_comentario', 250)->nullable();
            $table->smallInteger('control')->nullable()->comment('Marca automática que deja el Proceso de Control de Asistncia');

            $table->primary(['nov_fecha', 'p01legajo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_novedades');
    }
};
