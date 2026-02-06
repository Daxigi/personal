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
        Schema::create('per061', function (Blueprint $table) {
            $table->comment('Tabla de Tipos de Licencia');
            $table->smallInteger('p61tipo_lic')->primary()->comment('Código de licencia');
            $table->string('p61doc_aval', 50)->comment('Documentación respaldatoria. Ord./Art./Inciso');
            $table->string('p61descr', 100)->nullable()->comment('Descripción del tipo de licencia');
            $table->string('p61usualta', 20)->nullable()->comment('Usuario que dio de alta el registro');
            $table->timestamp('p61fealta')->nullable()->default(DB::raw("now()"))->comment('Fecha y hora del alta del registro');
            $table->string('p61usumod', 20)->comment('Usuario que efectuó la última modificación al registro');
            $table->timestamp('p61femod')->nullable()->default(DB::raw("now()"))->comment('Fecha de la última modificación');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per061');
    }
};
