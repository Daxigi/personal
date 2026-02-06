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
        Schema::create('sem006', function (Blueprint $table) {
            $table->increments('codigo');
            $table->string('juz', 100)->nullable();
            $table->string('localidad', 100)->nullable();
            $table->string('prov', 100)->nullable();
            $table->string('activo', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sem006');
    }
};
