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
        Schema::create('sue038', function (Blueprint $table) {
            $table->comment('TABLA DE COEFICIENTES PARA GENERAR ESCALA
');
            $table->date('s38fpv');
            $table->integer('s38nivel');
            $table->decimal('s38coef', 7, 6)->nullable();

            $table->primary(['s38fpv', 's38nivel']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue038');
    }
};
