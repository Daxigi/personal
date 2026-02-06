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
        Schema::create('sem005', function (Blueprint $table) {
            $table->string('cbu', 22)->nullable();
            $table->string('tipodoc', 2)->nullable();
            $table->bigInteger('nrodoc')->nullable();
            $table->string('denominacion', 22)->nullable();
            $table->integer('nrocuenta')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sem005');
    }
};
