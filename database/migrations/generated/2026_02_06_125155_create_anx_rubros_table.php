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
        Schema::create('anx_rubros', function (Blueprint $table) {
            $table->comment('Taba de rubros. Copiada del Pilagá_2010');
            $table->increments('rubro');
            $table->string('descripcion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anx_rubros');
    }
};
