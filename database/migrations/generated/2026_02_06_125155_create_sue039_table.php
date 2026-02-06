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
        Schema::create('sue039', function (Blueprint $table) {
            $table->comment('Tabla cronograma');
            $table->integer('s39codliq');
            $table->smallInteger('s39dia');
            $table->date('s39fecha')->nullable();
            $table->string('s39lista', 50)->nullable();
            $table->decimal('s39desde', 9)->nullable();
            $table->decimal('s39hasta', 9)->nullable();
            $table->string('s39letrad', 1)->nullable();
            $table->string('s39letrah', 1)->nullable();

            $table->primary(['s39codliq', 's39dia']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue039');
    }
};
