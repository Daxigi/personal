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
        Schema::create('sue055', function (Blueprint $table) {
            $table->comment('Tabla de codigos liquidados, liq.desde legajo');
            $table->integer('s15codliq');
            $table->integer('s15legajo')->index('sue055_i1');
            $table->integer('s15adic');
            $table->decimal('s15importe', 9)->nullable();

            $table->primary(['s15codliq', 's15legajo', 's15adic']);
            $table->index(['s15codliq', 's15adic'], 'sue055_i2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue055');
    }
};
