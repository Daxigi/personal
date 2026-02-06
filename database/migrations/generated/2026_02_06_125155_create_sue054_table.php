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
        Schema::create('sue054', function (Blueprint $table) {
            $table->comment('Tabla de datos del agente en determinada liquidación desde legajo');
            $table->integer('s14codliq');
            $table->integer('s14legajo');
            $table->string('s14apyn', 150)->nullable();
            $table->date('s14fe_ingreso')->nullable();
            $table->integer('s14sit_rev')->nullable();
            $table->integer('s14agrup')->nullable();
            $table->integer('s14nivel')->nullable();
            $table->date('s14fe_nov')->nullable();
            $table->float('s14depen')->nullable();
            $table->integer('s14codtit')->nullable();
            $table->smallInteger('s14dias')->nullable();
            $table->string('s14estado', 10)->nullable();
            $table->integer('s14recibo')->nullable();
            $table->decimal('s14haberes', 9)->nullable();
            $table->decimal('s14dscto', 9)->nullable();
            $table->decimal('s14liquido', 9)->nullable();
            $table->date('s14feenvio')->nullable();
            $table->date('s14fepago')->nullable();
            $table->date('s14feenvio_bco')->nullable();

            $table->primary(['s14codliq', 's14legajo']);
            $table->index(['s14legajo', 's14codliq'], 'sue054_i2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue054');
    }
};
