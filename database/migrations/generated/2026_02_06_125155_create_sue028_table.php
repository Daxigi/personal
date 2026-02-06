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
        Schema::create('sue028', function (Blueprint $table) {
            $table->comment('Tabla de agentes con Licencia Prolongada');
            $table->date('s28fpv');
            $table->integer('s28legajo');
            $table->smallInteger('s28porcen');
            $table->string('s28documento', 50)->nullable();
            $table->date('s28fefin')->nullable();

            $table->primary(['s28fpv', 's28legajo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue028');
    }
};
