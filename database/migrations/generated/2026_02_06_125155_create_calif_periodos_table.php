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
        Schema::create('calif_periodos', function (Blueprint $table) {
            $table->increments('id_periodos');
            $table->string('nombre', 30)->nullable();
            $table->string('descripcion', 200)->nullable();
            $table->date('inicio_periodo')->nullable();
            $table->string('estado', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calif_periodos');
    }
};
