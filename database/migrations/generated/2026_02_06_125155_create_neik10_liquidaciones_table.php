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
        Schema::create('neik10_liquidaciones', function (Blueprint $table) {
            $table->comment('Tabla de Liquidaciones');
            $table->smallInteger('nk10anio');
            $table->smallInteger('nk10mes');
            $table->integer('nk10legajo');
            $table->integer('nk10docum')->nullable();
            $table->string('nk10apyn', 150)->nullable();
            $table->string('nk10dep', 15)->nullable();
            $table->smallInteger('nk10dias_trab')->nullable();
            $table->decimal('nk10basico', 7)->nullable();
            $table->decimal('nk10osocial', 7)->nullable();
            $table->decimal('nk10valorbasico', 7)->nullable();
            $table->decimal('nk10adicionales', 7)->nullable();
            $table->decimal('nk10embargo', 7)->nullable();
            $table->decimal('nk10liquido', 7)->nullable();
            $table->smallInteger('nk10tipo')->nullable();
            $table->decimal('nk10aporte_estatal_os', 7)->nullable();
            $table->decimal('nk10aporte_osocial', 7)->nullable();
            $table->string('nk10observaciones', 50)->nullable();

            $table->primary(['nk10anio', 'nk10mes', 'nk10legajo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neik10_liquidaciones');
    }
};
