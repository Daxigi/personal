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
        Schema::create('tabla1', function (Blueprint $table) {
            $table->integer('s17adic')->nullable();
            $table->integer('s17correl')->nullable();
            $table->integer('s17grupo')->nullable();
            $table->integer('s17niveld')->nullable();
            $table->integer('s17nivelh')->nullable();
            $table->string('s17formula')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabla1');
    }
};
