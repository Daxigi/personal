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
        Schema::create('as_dni_rechaz', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('documento')->nullable()->comment('Documento del Agente Rechazado');
            $table->string('usuario', 20)->nullable();
            $table->timestamp('fecha')->nullable();
            $table->boolean('suspendido')->nullable()->comment('Indica si posse una Suspensión ');
            $table->boolean('s_gch')->nullable()->comment('Indica que No posee Grupo Carga Horaria');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_dni_rechaz');
    }
};
