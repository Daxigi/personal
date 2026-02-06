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
        Schema::create('per065', function (Blueprint $table) {
            $table->comment('Empresas');
            $table->integer('p65id')->primary()->comment('Identificador de la empresa');
            $table->string('p65cuit', 20)->nullable()->comment('Cuit');
            $table->string('p65nombre', 100)->comment('Nombre o razón social');
            $table->string('p65dom_comercial', 200)->nullable()->comment('Domicilio comercial');
            $table->string('p65dom_legal', 200)->nullable()->comment('Domicilio legal');
            $table->string('p65telefonos', 100)->nullable()->comment('Teléfonos');
            $table->string('p65email', 50)->nullable()->comment('Correo electrónico');
            $table->string('p65cbu', 25)->nullable()->comment('CBU de la empresa');
            $table->string('p65persona_contacto', 100)->nullable()->comment('Persona de contacto en la empresa');
            $table->string('p65obs', 300)->nullable()->comment('Observaciones y comentarios');
            $table->string('p65nombre_fantasia', 100)->nullable()->comment('Nombre de fantasía');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per065');
    }
};
