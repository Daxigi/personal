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
        Schema::create('sue005_b', function (Blueprint $table) {
            $table->comment('Tabla de Adicionales asociados al agente (asoc.al documento del agente - en uso)');
            $table->integer('s05documento')->index('sue005_b_i1');
            $table->integer('s05adic')->index('sue005_b_i2');
            $table->integer('s05correl');
            $table->decimal('s05importe', 9)->nullable()->default(0);
            $table->date('s05feini');
            $table->date('s05fefin')->nullable();
            $table->string('s05valor', 10)->nullable();
            $table->integer('s05corr_form')->nullable();

            $table->primary(['s05documento', 's05adic', 's05correl']);
            $table->index(['s05documento', 's05adic', 's05correl'], 'indice_sue005_b');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue005_b');
    }
};
