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
        Schema::create('neik04_monto', function (Blueprint $table) {
            $table->comment('Tabla de montos fijos a pagar a cada agente
');
            $table->integer('nk4legajo');
            $table->smallInteger('nk4id');
            $table->date('nk4fe_desde')->nullable();
            $table->decimal('nk4importe', 7)->nullable();

            $table->primary(['nk4legajo', 'nk4id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neik04_monto');
    }
};
