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
        Schema::create('per005', function (Blueprint $table) {
            $table->comment('Tabla de certificados de escolaridad y de asistencia a instituciones especiales para atención a discapacitados.');
            $table->integer('p05legajo')->comment('Identificador del agente');
            $table->integer('p05docum')->comment('Documento de la persona a cargo');
            $table->smallInteger('p05id')->comment('Correlativo identificador del certificado');
            $table->smallInteger('p05tipocert')->comment('Tipo de certificado.
1-Escolaridad normal
2-Instituciones especiales p/discap.');
            $table->date('p05fecert')->comment('Fecha de emisión del certificado');
            $table->date('p05fepres')->comment('Fecha de presentación del certificado');
            $table->string('p05emisor', 150)->nullable()->comment('Institución emisora del certificado');
            $table->char('p05estado', 1)->nullable()->default('A')->comment('Estado del registro.
A-Activo / *-Baja');
            $table->string('p05usualta', 20)->nullable();
            $table->timestamp('p05fealta')->nullable()->default(DB::raw("now()"));
            $table->string('p05usumod', 20)->nullable();
            $table->timestamp('p05femod')->nullable()->default(DB::raw("now()"));
            $table->date('p05fevenc')->nullable();
            $table->integer('id_institucion')->nullable()->comment('Institución educativa - Serv. 185/sube/Instituciones');
            $table->smallInteger('id_nivel')->nullable()->comment('Nivel de la inst. que emite el certificado');
            $table->smallInteger('anio_cursado')->nullable()->comment('Año cursado según el certificado de escolaridad (1..8)');
            $table->string('observaciones', 400)->nullable()->comment('Observaciones del registro');
            $table->integer('p05mesliq')->nullable()->comment('Mes de liquidacion corresponde al campo: public.sue035.s35mesliq');
            $table->integer('p05anioliq')->nullable()->comment('Se carga por programa el año en que se va a liquidar este certificado.');

            $table->primary(['p05legajo', 'p05docum', 'p05id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per005');
    }
};
