<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('per059', function (Blueprint $table) {
            $table->comment('Tipos de Situación de Revista');
            $table->integer('p59sit_rev')->primary()->comment('Código de situación de revista');
            $table->string('p59descr', 300)->comment('Descripción');
            $table->string('p59usualta', 20)->nullable()->comment('Usuario que dió de alta el registro');
            $table->timestamp('p59fealta')->nullable()->default(DB::raw("now()"))->comment('Fecha de alta del registro');
            $table->string('p59usumod', 20)->nullable()->comment('Usuario que efectuó la última modificación al registro');
            $table->timestamp('p59femod')->nullable()->default(DB::raw("now()"))->comment('Fecha de la última modificación');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per059');
    }
};
