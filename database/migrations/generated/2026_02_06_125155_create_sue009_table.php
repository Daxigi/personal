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
        Schema::create('sue009', function (Blueprint $table) {
            $table->comment('Tabla de Grupos de Liquidación');
            $table->increments('s09grupo')->comment('Código');
            $table->string('s09descr', 150)->nullable();
            $table->string('s09sit_rev', 150)->nullable();
            $table->string('s09agrup_niv', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue009');
    }
};
