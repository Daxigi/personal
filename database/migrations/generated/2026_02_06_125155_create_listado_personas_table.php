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
        Schema::create('listado_personas', function (Blueprint $table) {
            $table->integer('documento')->nullable();
            $table->string('apyn', 150)->nullable();
            $table->integer('sit_rev')->nullable();
            $table->date('feingreso')->nullable();
            $table->string('secretaria')->nullable();
            $table->string('dependencia')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listado_personas');
    }
};
