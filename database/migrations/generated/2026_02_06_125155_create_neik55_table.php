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
        Schema::create('neik55', function (Blueprint $table) {
            $table->comment('Neike - Tabla de Adicionales asociados al agente (asociado al legajo del agente)
');
            $table->integer('n05legajo');
            $table->integer('n05adic');
            $table->integer('n05correl');
            $table->decimal('n05importe', 9)->nullable()->default(0);
            $table->date('n05feini');
            $table->date('n05fefin')->nullable();
            $table->string('n05valor', 10)->nullable();
            $table->integer('n05corr_form')->nullable();
            $table->string('observaciones', 200)->nullable();

            $table->primary(['n05legajo', 'n05adic', 'n05correl']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neik55');
    }
};
