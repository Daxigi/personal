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
        Schema::create('articulos_neike', function (Blueprint $table) {
            $table->bigIncrements('id_articulo');
            $table->integer('legajo');
            $table->date('fe_desde');
            $table->date('fe_hasta');
            $table->string('autorizante', 150)->nullable();
            $table->string('obs', 100)->nullable();
            $table->bigInteger('id_nota')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulos_neike');
    }
};
