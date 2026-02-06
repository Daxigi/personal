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
        Schema::create('per008', function (Blueprint $table) {
            $table->comment('Tabla de Adicionales relacionados al Agente');
            $table->integer('p08legajo')->comment('Legajo - Identificador del Agente');
            $table->smallInteger('p08adicional')->comment('Código del Adicional');
            $table->smallInteger('p08correl')->comment('Correlativo de adicionales asociados');
            $table->date('p08feini')->comment('Fecha de inicio de la vigencia del adicional');
            $table->date('p08fefin')->nullable()->comment('Fecha de caducidad del adicional');
            $table->string('p08usualta', 20)->nullable()->comment('Usuario que dió de alta el registro');
            $table->timestamp('p08fealta')->nullable()->default(DB::raw("now()"))->comment('Fecha y hora del alta');
            $table->string('p08usumod', 20)->nullable()->comment('Usuario que efectuó la última modificación');
            $table->timestamp('p08femod')->nullable()->default(DB::raw("now()"))->comment('Fecha y hora de la última modificación.');

            $table->primary(['p08legajo', 'p08correl', 'p08adicional']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per008');
    }
};
