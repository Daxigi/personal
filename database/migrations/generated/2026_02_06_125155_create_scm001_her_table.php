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
        Schema::create('scm001_her', function (Blueprint $table) {
            $table->comment('Correspondencia de cada dependencia del archivo con su heredera actual');
            $table->string('c01depresu', 15)->primary();
            $table->string('n_heredera', 15)->nullable();
            $table->string('c01leyen', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scm001_her');
    }
};
