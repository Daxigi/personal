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
        Schema::create('as_ordenanzas_etiq', function (Blueprint $table) {
            $table->comment('Lista de etiquetas disponibles');
            $table->bigIncrements('id_etiqueta');
            $table->string('etiqueta', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_ordenanzas_etiq');
    }
};
