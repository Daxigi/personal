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
        Schema::create('sue035', function (Blueprint $table) {
            $table->comment('Tabla de certificados de escolaridad');
            $table->integer('s35legajo');
            $table->integer('s35docum');
            $table->date('s35fepres')->nullable();
            $table->integer('s35mesliq')->nullable();

            $table->primary(['s35legajo', 's35docum']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue035');
    }
};
