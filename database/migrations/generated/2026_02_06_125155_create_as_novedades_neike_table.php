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
        Schema::create('as_novedades_neike', function (Blueprint $table) {
            $table->comment('Novedades de Asistencia -NEIKE');
            $table->date('nov_fecha')->comment('Fecha de la novedad');
            $table->integer('legajo')->comment('Legajo del NEIKE');
            $table->integer('documento')->comment('Nro. de documento');
            $table->string('nov_comentario', 250)->nullable();
            $table->smallInteger('control')->nullable()->comment('Marca automática que deja el Proceso de Control de Asistencia');
            $table->bigInteger('id_articulo')->nullable();
            $table->string('nov_comentario1', 250)->nullable();

            $table->primary(['nov_fecha', 'legajo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_novedades_neike');
    }
};
