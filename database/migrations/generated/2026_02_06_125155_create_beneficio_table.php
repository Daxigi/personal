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
        Schema::create('beneficio', function (Blueprint $table) {
            $table->bigIncrements('id_bene');
            $table->string('descripcion_be', 50)->nullable();
            $table->boolean('activo')->default(true);
            $table->boolean('foto')->default(true);
            $table->integer('id_nivel')->nullable();
            $table->boolean('ver_web')->default(true);
            $table->boolean('compra_tarjeta')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficio');
    }
};
