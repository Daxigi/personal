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
        Schema::create('as_ord_estados', function (Blueprint $table) {
            $table->comment('Valores de estados para registros de ordenanzaas y artículos');
            $table->increments('id_estado');
            $table->string('descripcion', 50);
            $table->string('mod_prog', 500);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_ord_estados');
    }
};
