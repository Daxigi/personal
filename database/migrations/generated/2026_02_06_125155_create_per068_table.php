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
        Schema::create('per068', function (Blueprint $table) {
            $table->comment('Tipos de certificados que puede presentar el agente por las personas a  su cargo ');
            $table->smallInteger('p68tipocert')->primary();
            $table->string('p68descr', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per068');
    }
};
