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
        Schema::create('sue016', function (Blueprint $table) {
            $table->comment('Tabla de porcentajes para permanencia en clase');
            $table->increments('s16cod');
            $table->integer('s16aniod')->nullable();
            $table->integer('s16anioh')->nullable();
            $table->decimal('s16porc', 7)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue016');
    }
};
