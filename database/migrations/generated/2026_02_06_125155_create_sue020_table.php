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
        Schema::create('sue020', function (Blueprint $table) {
            $table->comment('Tabla de Valores de Salario');
            $table->date('s20fpv');
            $table->integer('s20correl');
            $table->decimal('s20imported', 9)->nullable()->default(0);
            $table->decimal('s20importeh', 9)->nullable()->default(0);
            $table->decimal('s20valorh', 9)->nullable()->default(0);
            $table->decimal('s20valorh_disc', 9)->nullable()->default(0);
            $table->decimal('s20valorp', 9)->nullable()->default(0);
            $table->decimal('s20matrimonio', 9)->nullable();
            $table->decimal('s20escolaridad', 9)->nullable();

            $table->primary(['s20fpv', 's20correl']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue020');
    }
};
