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
        Schema::create('relev01', function (Blueprint $table) {
            $table->comment('Relevamiento para el Reencasillamiento general - año 2010');
            $table->increments('r01planilla')->comment('Nro de planilla autonumérico');
            $table->smallInteger('r01tipodoc')->nullable()->default(5)->comment('Tipo de documento');
            $table->integer('r01docum')->comment('Nro. de documento');
            $table->string('r01apyn', 150)->comment('Apellido y nombres');
            $table->string('r01revista', 50)->comment('Situación de revista');
            $table->smallInteger('r01agrup')->comment('Agrupamiento actual');
            $table->smallInteger('r01nivel')->comment('Nivel actual');
            $table->char('r01depresu', 15)->comment('Dependencia donde presta servicio');
            $table->string('r01locdom', 50)->nullable()->default('Corrientes')->comment('Localidad del domicilio');
            $table->integer('r01idpciadom')->nullable()->default(7)->comment('Provincia del domicilio - por defecto 7:Corrientes');
            $table->string('r01telefono', 50)->nullable()->comment('Teléfonos');
            $table->string('r01email', 50)->nullable()->comment('E-mail');
            $table->string('r01primario', 12)->nullable()->comment('Nivel alcanzado de estudios primarios');
            $table->string('r01secundario', 12)->nullable()->comment('Nivel alcanzado de estudios secundarios');
            $table->string('r01tit_sec', 80)->nullable()->comment('Descripción del título secundario');
            $table->string('r01universitario', 12)->nullable()->comment('Nivel alcanzado en la universidad');
            $table->string('r01tit_uni', 80)->nullable()->comment('Descripción del título universitario');
            $table->string('r01func_actual', 100)->comment('Función que desempeña actualmente');
            $table->smallInteger('r01agrup_as')->nullable()->comment('Agrupamiento asignado');
            $table->date('r01fe_notif')->nullable()->comment('Fecha de la notificación del reencasillamiento');
            $table->string('r01obs', 300)->nullable()->comment('Observaciones de la notificación');
            $table->string('r01usualta', 20)->comment('Usuario que da de alta el registro');
            $table->timestamp('r01fealta')->nullable()->default(DB::raw("now()"))->comment('Fecha de alta del registro');
            $table->string('r01usumod', 20)->comment('Usuario que efectuó la última modificación');
            $table->timestamp('r01femod')->nullable()->default(DB::raw("now()"))->comment('Fecha y hora de la última modificación');
            $table->string('r01domicilio', 200)->nullable()->comment('Domicilio');

            $table->unique(['r01tipodoc', 'r01docum'], 'relev01_1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relev01');
    }
};
