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
        Schema::create('sue031', function (Blueprint $table) {
            $table->comment('Tabla de Agentes bloqueados');
            $table->integer('s31codliq');
            $table->integer('s31documento');

            $table->primary(['s31codliq', 's31documento']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue031');
    }
};
