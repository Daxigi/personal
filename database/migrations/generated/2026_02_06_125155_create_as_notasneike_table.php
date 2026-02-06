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
        Schema::create('as_notasneike', function (Blueprint $table) {
            $table->comment('NOTAS  NEIKE en Novedades-Asistencia');
            $table->increments('id_nota')->comment('Nro de nota');
            $table->decimal('dni_nota', 8, 0)->nullable()->comment('Nro DNI del Agente');
            $table->string('nombre_nota', 150)->nullable()->comment('Nombre del agente');
            $table->date('fecha_nota')->nullable();
            $table->string('observaciones_nota', 150)->nullable()->comment('observaciones');
            $table->string('firmante_nota', 150)->nullable()->comment('firma de la nota');
            $table->date('fecha_graba')->nullable();
            $table->string('tipo', 50)->nullable();
            $table->timestamp('fealta')->nullable()->default(DB::raw("now()"));
            $table->timestamp('femod')->nullable();
            $table->string('usumod', 20)->nullable();
            $table->date('fec_recibido')->nullable();
            $table->string('usualta', 20)->nullable()->default('sin datos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_notasneike');
    }
};
