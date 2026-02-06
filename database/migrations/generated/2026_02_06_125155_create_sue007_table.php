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
        Schema::create('sue007', function (Blueprint $table) {
            $table->comment('Tabla de descripción de agrupamiento');
            $table->smallInteger('s07agrup')->primary();
            $table->string('s07descr', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue007');
    }
};
