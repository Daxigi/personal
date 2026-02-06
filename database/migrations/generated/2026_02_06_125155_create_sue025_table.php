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
        Schema::create('sue025', function (Blueprint $table) {
            $table->comment('Tabla de agentes con Pasividad Anticipada');
            $table->date('s25fpv')->comment('Fecha de inicio de vigencia de la pasividad');
            $table->integer('s25legajo')->comment('Legajo');
            $table->smallInteger('s25porcen');
            $table->string('s25documento', 50)->nullable()->comment('Documento que respalda o acredita la  Pasividad');
            $table->date('s25fefin')->nullable()->comment('Fecha de finalización de la Pasividad');

            $table->primary(['s25fpv', 's25legajo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue025');
    }
};
