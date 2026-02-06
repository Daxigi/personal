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
        Schema::create('neik15', function (Blueprint $table) {
            $table->comment('Neike - Tabla de codigos liquidados');
            $table->integer('n15codliq');
            $table->integer('n15legajo');
            $table->integer('n15adic');
            $table->decimal('n15importe', 9)->nullable();

            $table->primary(['n15codliq', 'n15legajo', 'n15adic']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neik15');
    }
};
