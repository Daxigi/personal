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
        Schema::create('personas_benefi', function (Blueprint $table) {
            $table->bigIncrements('id_per_be');
            $table->integer('id_per')->nullable();
            $table->integer('id_bene')->nullable();
            $table->string('numero_tarjeta', 32)->nullable()->unique();
            $table->date('fecha_alta')->nullable();
            $table->boolean('activo')->default(true);
            $table->date('fecha_baja')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas_benefi');
    }
};
