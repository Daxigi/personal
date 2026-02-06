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
        Schema::create('as_temp_facial_b', function (Blueprint $table) {
            $table->string('No')->nullable();
            $table->string('TMNo')->nullable();
            $table->string('EnNo')->nullable();
            $table->string('Name')->nullable();
            $table->string('GMNo')->nullable();
            $table->string('Mode')->nullable();
            $table->string('InOut')->nullable();
            $table->string('Antipass')->nullable();
            $table->string('ProxyWork')->nullable();
            $table->string('DateTime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_temp_facial_b');
    }
};
