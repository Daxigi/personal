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
        Schema::create('articulos', function (Blueprint $table) {
            $table->bigIncrements('id_articulo');
            $table->bigInteger('legajo');
            $table->date('fe_desde');
            $table->date('fe_hasta');
            $table->string('autorizante', 150)->nullable();
            $table->string('art_id', 20)->nullable()->comment('Código de Artículo');
            $table->bigInteger('id_nota')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulos');
    }
};
