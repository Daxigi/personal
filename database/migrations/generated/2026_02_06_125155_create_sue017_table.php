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
        Schema::create('sue017', function (Blueprint $table) {
            $table->comment('Tabla de fórmulas para los conceptos
');
            $table->integer('s17adic');
            $table->integer('s17correl');
            $table->smallInteger('s17grupo')->nullable();
            $table->smallInteger('s17niveld')->nullable();
            $table->smallInteger('s17nivelh')->nullable();
            $table->string('s17formula', 200)->nullable();

            $table->primary(['s17adic', 's17correl']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue017');
    }
};
