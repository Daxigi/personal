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
        Schema::create('borrar', function (Blueprint $table) {
            $table->string('proyecto', 200)->nullable();
            $table->string('perfil', 200)->nullable();
            $table->string('usuario', 200)->nullable();
            $table->string('ayn', 200)->nullable();
            $table->decimal('dni')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrar');
    }
};
