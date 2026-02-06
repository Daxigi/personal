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
        Schema::create('sue037', function (Blueprint $table) {
            $table->comment('Tabla de reintegros');
            $table->integer('s37legajo');
            $table->integer('s37docum');
            $table->integer('s37dias')->nullable();
            $table->decimal('s37presen', 5)->nullable();

            $table->primary(['s37legajo', 's37docum']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue037');
    }
};
