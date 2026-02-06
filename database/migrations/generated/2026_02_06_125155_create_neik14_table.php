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
        Schema::create('neik14', function (Blueprint $table) {
            $table->comment('Neike - Tabla de datos del agente en determinada liquidación ');
            $table->integer('n14codliq');
            $table->integer('n14legajo');
            $table->string('n14apyn', 150)->nullable();
            $table->date('n14fe_ingreso')->nullable();
            $table->integer('n14sit_rev')->nullable();
            $table->integer('n14agrup')->nullable();
            $table->integer('n14nivel')->nullable();
            $table->date('n14fe_nov')->nullable();
            $table->float('n14depen')->nullable();
            $table->integer('n14codtit')->nullable();
            $table->smallInteger('n14dias')->nullable();
            $table->string('n14estado', 10)->nullable();
            $table->integer('n14recibo')->nullable();
            $table->decimal('n14haberes', 9)->nullable();
            $table->decimal('n14dscto', 9)->nullable();
            $table->decimal('n14liquido', 9)->nullable();
            $table->date('n14feenvio')->nullable();
            $table->date('n14fepago')->nullable();
            $table->date('n14feenvio_bco')->nullable();

            $table->primary(['n14codliq', 'n14legajo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neik14');
    }
};
