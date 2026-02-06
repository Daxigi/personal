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
        Schema::create('sue019', function (Blueprint $table) {
            $table->comment('Tabla de salario mínimo garantizado');
            $table->date('s19fpv')->primary();
            $table->string('s19descr', 100)->nullable();
            $table->decimal('s19importe', 9)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue019');
    }
};
