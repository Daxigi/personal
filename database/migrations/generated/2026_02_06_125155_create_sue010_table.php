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
        Schema::create('sue010', function (Blueprint $table) {
            $table->comment('Tabla de tipos de liquidación');
            $table->increments('s10tipo_liq');
            $table->string('s10descr', 150)->nullable();
            $table->string('s10grupos', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue010');
    }
};
