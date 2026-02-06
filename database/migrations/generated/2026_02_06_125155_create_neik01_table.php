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
        Schema::create('neik01', function (Blueprint $table) {
            $table->comment('Maestro de relevamiento Plan Neike');
            $table->increments('nk1legajo')->comment('Clave principal');
            $table->smallInteger('nk1tipodoc')->default(5)->comment('Tipo de documento');
            $table->integer('nk1docum')->unique('neik01_cu01')->comment('Nro. de documento');
            $table->string('nk1apyn', 150)->comment('Apellido y nombres');
            $table->string('nk1sexo', 10)->comment('Sexo');
            $table->date('nk1fenac')->nullable()->comment('Fecha de nacimiento');
            $table->string('nk1locnac', 50)->nullable()->default('Corrientes')->comment('Localidad de nacimiento');
            $table->integer('nk1idpcianac')->nullable()->comment('Código de provincia');
            $table->string('nk1paisnac', 50)->default('Argentina')->comment('País de nacimiento');
            $table->date('nk1feadonac')->nullable()->comment('Fecha de adopción de la nacionalidad argentina');
            $table->integer('nk1codbadom')->nullable()->comment('Código de barrio');
            $table->integer('nk1codcadom')->nullable()->comment('Código de calle');
            $table->integer('nk1nropudom')->nullable()->comment('Nro. de puerta o casa');
            $table->string('nk1locdom', 50)->nullable()->comment('Localidad del domicilio');
            $table->integer('nk1idpciadom')->nullable()->comment('Provincia del domicilio');
            $table->string('nk1telefono', 50)->nullable()->comment('Teléfonos');
            $table->string('nk1email', 50)->nullable()->comment('Correo electrónico');
            $table->string('nk1estcivil', 30)->nullable()->comment('Estado civil');
            $table->boolean('nk1otroingreso')->nullable()->comment('Indicador de si tiene otros ingresos');
            $table->string('nk1actextra', 300)->nullable()->comment('Actividades o planes sociales extra');
            $table->string('nk1tipoestudio', 30)->comment('Tipo de estudios');
            $table->string('nk1titulo', 100)->nullable()->comment('Descripción del título');
            $table->boolean('nk1estudiante')->nullable()->comment('Indicador de si es estudiante al momento del relevamiento.');
            $table->string('nk1carrera', 100)->nullable()->comment('Carrera que está cursando');
            $table->smallInteger('nk1anio_car')->nullable()->comment('Año que está cursando');
            $table->date('nk1fe_act_car')->nullable()->comment('Fecha de ultima actualización datos de estudiante');
            $table->string('nk1con_info', 10)->comment('Nivel de conocimientos de informática (bueno/reg/ninguno)');
            $table->string('nk1descr_otro_oficio', 300)->nullable()->comment('Descripción de otros oficios o habilidades');
            $table->string('nk1cursos', 300)->nullable()->comment('Cursos de capacitación realizados');
            $table->string('nk1usualta', 20)->comment('Usuario que dió de alta el registro');
            $table->timestamp('nk1fealta')->nullable()->default(DB::raw("now()"))->comment('Fecha y hora del alta');
            $table->string('nk1usumod', 20)->comment('Usuario que efectuó la última modificación ');
            $table->timestamp('nk1femod')->nullable()->comment('Fecha y hora de la última modificación');
            $table->string('nk1pisodptodom', 50)->nullable()->comment('Piso y departamento');
            $table->string('nk1dom_libre', 200)->nullable()->comment('Domicilio estilo libre');
            $table->smallInteger('nk1tipo')->nullable()->comment('Tipo de Neike');
            $table->boolean('nk1obra_social')->nullable();
            $table->string('nk1observaciones_os', 100)->nullable();
            $table->integer('nk1_tiene_discapacidad')->nullable()->default(0)->comment('Si tiene discapacidad (combo) 0- Ninguno, 1- SI, 2- NO');
            $table->integer('nk1_tiene_cud')->nullable()->default(0)->comment('Si tiene discapacidad (combo) 0- Ninguno, 1- SI, 2- NO');
            $table->integer('nk1_numero_cud')->nullable();
            $table->timestamp('nk1_fecha_censo_2019')->nullable()->comment('fecha hora (de sistema) de censodo 2019');
            $table->timestamp('nk1_imprimir_censo_2019')->nullable()->comment('Se agrega la fecha hora de impresion, si ya esta impreso no se puede cambiar a null el campo nk1_fecha_censo_2019');
            $table->integer('nk1_id_tipo_disca')->nullable();
            $table->boolean('nk1_censado_2019')->nullable();
            $table->string('nk1_celular', 50)->nullable()->comment('Numero Celular de contacto');
            $table->string('nk1leyenda')->nullable();
            $table->smallInteger('nk1nrocuil')->nullable()->comment('Cuit para bancarizar');
            $table->smallInteger('nk1restocuil')->nullable()->comment('Resto cuit');
            $table->string('imag_neike', 100)->nullable();
            $table->integer('nk1_subcad')->nullable()->comment('se vincula a la tabla: public.neik12_subcate, ejemplo subcategoria de Becarios ');
            $table->string('cbu_cvu', 5)->nullable();
            $table->string('cbu_nro', 22)->nullable();
            $table->smallInteger('nivel')->nullable();

            $table->index(['nk1docum', 'nk1legajo'], 'documento_legajo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neik01');
    }
};
