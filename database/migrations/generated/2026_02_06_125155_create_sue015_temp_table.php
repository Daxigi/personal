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
        Schema::create('sue015_temp', function (Blueprint $table) {
            $table->comment('Tabla temporal de codigos 60 y 61 liquidados');
            $table->integer('s15codliq_t');
            $table->integer('s15legajo_t');
            $table->integer('s15adic_t');
            $table->decimal('s15importe_t', 9)->nullable();

            $table->primary(['s15codliq_t', 's15legajo_t', 's15adic_t']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue015_temp');
    }
};
