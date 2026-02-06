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
        Schema::create('concep_neike_temp', function (Blueprint $table) {
            $table->integer('documento')->primary();
            $table->decimal('importe', 7)->nullable();
            $table->integer('cor_form')->nullable()->default(0)->comment('Correlativo de Fórmulas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concep_neike_temp');
    }
};
