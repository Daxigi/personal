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
        Schema::create('articulo_feria', function (Blueprint $table) {
            $table->bigIncrements('id_feria');
            $table->string('art_id', 20);
            $table->date('fec_desde');
            $table->date('fec_hasta');
            $table->date('fec_vigencia');
            $table->string('descripcion', 150)->nullable();
            $table->string('comentario', 300);
            $table->integer('estado')->nullable();
            $table->string('depend', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulo_feria');
    }
};
