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
        Schema::create('neik06_conceptos_liquidacion', function (Blueprint $table) {
            $table->increments('nk6concepto');
            $table->string('nk6descripcion', 80)->nullable();
            $table->decimal('nk6valor', 7)->nullable();
            $table->string('nk6descr_valor', 150)->nullable();
            $table->smallInteger('nk6codigo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neik06_conceptos_liquidacion');
    }
};
