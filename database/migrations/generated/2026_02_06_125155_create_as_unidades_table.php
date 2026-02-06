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
        Schema::create('as_unidades', function (Blueprint $table) {
            $table->comment('Tabla de Códigos de Unidades de Registración Ej: Palacio, Piso, Salitas');
            $table->increments('id_unidad')->comment('Código de Unidad');
            $table->string('descripcion', 200)->nullable()->comment('Lugares donde se registran asistencia');
            $table->string('usu_generico', 20)->nullable();
            $table->string('domicilio', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_unidades');
    }
};
