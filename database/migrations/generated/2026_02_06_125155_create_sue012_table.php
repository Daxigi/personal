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
        Schema::create('sue012', function (Blueprint $table) {
            $table->increments('s12codliq');
            $table->string('s12descr', 200)->nullable();
            $table->integer('s12anio_liq')->nullable();
            $table->integer('s12mes_liq')->nullable();
            $table->integer('s12tipo_liq')->nullable();
            $table->boolean('s12sac')->nullable();
            $table->date('s12fe_cierre')->nullable();
            $table->date('s12fe_contab')->nullable();
            $table->boolean('caja_banco')->nullable();

            $table->index(['s12anio_liq', 's12mes_liq'], 'sue012_i1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue012');
    }
};
