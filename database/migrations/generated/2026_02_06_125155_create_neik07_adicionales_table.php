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
        Schema::create('neik07_adicionales', function (Blueprint $table) {
            $table->comment('Adicionales del agente');
            $table->integer('nk7legajo');
            $table->smallInteger('nk7correl');
            $table->integer('nk7concepto')->nullable();
            $table->decimal('nk7importe', 7)->nullable();
            $table->smallInteger('nk7aa_desde')->nullable();
            $table->smallInteger('nk7mm_desde')->nullable();
            $table->smallInteger('nk7aa_hasta')->nullable();
            $table->smallInteger('nk7mm_hasta')->nullable();

            $table->primary(['nk7legajo', 'nk7correl']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neik07_adicionales');
    }
};
