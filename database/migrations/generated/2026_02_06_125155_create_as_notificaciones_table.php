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
        Schema::create('as_notificaciones', function (Blueprint $table) {
            $table->comment('Notificaciones al 0800 de las inasistenia del personal');
            $table->decimal('id_gestion', 8, 0)->primary()->comment('Nro de Gestión');
            $table->decimal('dni_agente', 8, 0)->nullable()->comment('Nro de Documento del Agente');
            $table->string('domicilio_reposo', 200)->nullable()->comment('Domicilio de reposo declarado');
            $table->date('fecha_gestion')->nullable();
            $table->date('fecha_ausencia')->nullable();
            $table->date('fecha_reincorpora')->nullable();
            $table->decimal('dni_familiar', 8, 0)->nullable()->comment('Dni del familiar o persona que llama');
            $table->string('nombre_familiar', 100)->nullable()->comment('Nombre del familiar o persona que llama');
            $table->string('trabajo_declarado', 150)->nullable()->comment('Lugar de trabajo declarado');
            $table->string('causa_ausencia', 200)->nullable();
            $table->string('observaciones', 200)->nullable();
            $table->string('telefono', 20)->nullable()->comment('Teléfono de Contacto');
            $table->timestamp('fealta', 6)->nullable()->default(DB::raw("now()"));
            $table->string('usualta', 20)->nullable()->default('sin datos');
            $table->timestamp('femod', 6)->nullable();
            $table->string('usumod', 20)->nullable();
            $table->string('hora', 15)->nullable()->comment('GCH al momento de la notificacion');
            $table->string('dias', 150)->nullable()->comment('Días en que registra asistencia al momento de la notificacion');
            $table->string('imag_med', 100)->nullable();
            $table->string('sit_rev', 60)->nullable()->comment('situacion de revista al momento de la notificacion');
            $table->integer('legajo')->nullable()->comment('Legajo del agente de Planta,Contrato ó Neikes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_notificaciones');
    }
};
