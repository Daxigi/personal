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
        Schema::create('sue015_b', function (Blueprint $table) {
            $table->comment('Tabla de codigos liquidados para pruebas, cálculos y controles');
            $table->integer('s15codliq');
            $table->integer('s15legajo');
            $table->integer('s15adic');
            $table->decimal('s15importe', 9)->nullable();

            $table->primary(['s15codliq', 's15legajo', 's15adic']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue015_b');
    }
};
