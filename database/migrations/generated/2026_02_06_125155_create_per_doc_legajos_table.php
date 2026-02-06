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
        Schema::create('per_doc_legajos', function (Blueprint $table) {
            $table->comment('Tabla que relaciona las resoluciones con legajos');
            $table->smallInteger('numero');
            $table->smallInteger('anio');
            $table->integer('legajo');
            $table->string('tipo_doc', 15);

            $table->primary(['numero', 'anio', 'legajo', 'tipo_doc']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per_doc_legajos');
    }
};
