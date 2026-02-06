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
        Schema::create('per070', function (Blueprint $table) {
            $table->increments('id_carrera');
            $table->string('cnombre', 100)->nullable();
            $table->char('activo', 6)->nullable()->default('Activo');
            $table->char('carrera', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per070');
    }
};
