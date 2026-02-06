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
        Schema::create('sue023', function (Blueprint $table) {
            $table->comment('Tabla de Capital asegurado
');
            $table->date('s23fpv');
            $table->integer('s23legajo');
            $table->integer('s23documento');
            $table->decimal('s23capital')->nullable()->default(0);

            $table->primary(['s23fpv', 's23legajo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue023');
    }
};
