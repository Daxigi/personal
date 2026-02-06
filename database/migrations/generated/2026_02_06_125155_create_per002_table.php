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
        Schema::create('per002', function (Blueprint $table) {
            $table->comment('Tabla de títulos y cursos del agente');
            $table->smallInteger('p02id');
            $table->integer('p02legajo')->comment('Identificador del agente');
            $table->smallInteger('p02codtit')->index('fki_pr002_ca2')->comment('Código de tipo de título');
            $table->string('p02titulo', 100)->comment('Título');
            $table->smallInteger('p02codorgtit')->index('fki_pr002_ca3')->comment('Código del Organismo que expide el título o dicta el curso.');
            $table->date('p02feobttit')->comment('Fecha de obtención del título, diploma o certificado');
            $table->string('p02comtit', 300)->nullable()->comment('Comentario sobre el registro');
            $table->boolean('p02flagliqtit')->nullable()->comment('Indicador de que es usado en la liquidación');
            $table->string('p02usualta', 20)->nullable();
            $table->timestamp('p02fealta')->nullable()->default(DB::raw("now()"));
            $table->string('p02usumod', 20)->nullable();
            $table->timestamp('p02femod')->nullable()->default(DB::raw("now()"));

            $table->primary(['p02legajo', 'p02id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per002');
    }
};
