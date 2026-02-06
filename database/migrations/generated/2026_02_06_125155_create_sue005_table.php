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
        Schema::create('sue005', function (Blueprint $table) {
            $table->comment('Tabla de Adicionales asociados al agente (asociado al legajo del agente)
');
            $table->integer('s05legajo');
            $table->integer('s05adic');
            $table->integer('s05correl');
            $table->decimal('s05importe', 9)->nullable()->default(0);
            $table->date('s05feini');
            $table->date('s05fefin')->nullable();
            $table->string('s05valor', 10)->nullable();
            $table->integer('s05corr_form')->nullable();
            $table->string('observaciones', 200)->nullable();

            $table->primary(['s05legajo', 's05adic', 's05correl']);
            $table->index(['s05legajo', 's05adic', 's05correl'], 'indice_sue005');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue005');
    }
};
