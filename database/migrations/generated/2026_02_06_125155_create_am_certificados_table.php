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
        Schema::create('am_certificados', function (Blueprint $table) {
            $table->integer('documento')->comment('Nro. Documento');
            $table->integer('correl')->comment('Correlativo de registro para el agente');
            $table->integer('legajo')->comment('Nro. de Legajo');
            $table->integer('sit_revista')->comment('Situación de revista. En caso de que sea NEIKE (-1), los datos del agente deben buscarse en la tabla neik01');
            $table->date('fecha_certificado')->nullable()->default('\'now\'::text')->comment('Fecha del certificado');
            $table->string('art_id', 20)->comment('Id. del artículo de la norma que justifica la inasistencia');
            $table->smallInteger('dias_solicitados')->nullable();
            $table->smallInteger('dias_otorgados')->nullable();
            $table->date('fecha_desde')->comment('Primer día de licencia');
            $table->date('fecha_hasta')->comment('Último día de licencia. En caso de ser un solo día, fecha_desde y fecha_hasta deben ser iguales');
            $table->integer('documento_familiar')->nullable()->comment('Documento del familiar enfermo');
            $table->string('comentarios', 200)->nullable();
            $table->boolean('at_domicilio')->nullable();
            $table->boolean('at_consultorio')->nullable();
            $table->boolean('at_familiar')->nullable();
            $table->string('tipo_cert', 15)->nullable()->default('medico');
            $table->smallInteger('gch_asociado_tipo')->nullable();
            $table->smallInteger('gch_asociado_correl')->nullable();
            $table->integer('id_patologia')->nullable();
            $table->boolean('fuera_termino')->nullable()->default(false);
            $table->string('diag_ampliado', 150)->nullable();
            $table->date('fe_consulta')->nullable();
            $table->boolean('adj_hc')->nullable()->default(false);
            $table->boolean('adj_protocolo')->nullable()->default(false);
            $table->integer('id_sub_practica')->nullable();
            $table->boolean('at_internacion')->nullable();
            $table->string('prof_aut', 50)->nullable()->comment('Profesional Autorizante');
            $table->decimal('mat_prof')->nullable()->comment('Nro. de Matrícula Profesional');
            $table->string('com_int', 150)->nullable()->comment('Comentario sobre el lugar de Internación y número de sala');
            $table->string('com_priv', 400)->nullable()->comment('Comentario Privado como Secreto Profesional');
            $table->decimal('id_gestion', 8, 0)->nullable()->comment('Nro de Gestión en Notificaciones');
            $table->decimal('id_audi', 6, 0)->nullable()->comment('Código de Médico Auditor');

            $table->primary(['documento', 'correl']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('am_certificados');
    }
};
