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
        Schema::create('per058', function (Blueprint $table) {
            $table->comment('Tabla de montos de adicionales asociables al Agente');
            $table->date('p58fpv')->comment('Fecha de puesta en vigencia del importe. NO ES Id. Escala');
            $table->smallInteger('p58adicional')->comment('Código de Adicional');
            $table->string('p58tipval', 15)->comment('Tipo de Valor');
            $table->decimal('p58valor', 7)->nullable()->default(0)->comment('Valor');
            $table->string('p58usualta', 20)->nullable()->comment('Usuario que dió de alta el registro');
            $table->timestamp('p58fealta')->nullable()->default(DB::raw("now()"))->comment('Fecha de alta del registro');
            $table->string('p58usumod', 20)->nullable()->comment('Usuario que efectuó la última modificación');
            $table->timestamp('p58femod')->nullable()->default(DB::raw("now()"))->comment('Fecha de la última modificación');

            $table->primary(['p58fpv', 'p58adicional']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per058');
    }
};
