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
        Schema::create('sue024', function (Blueprint $table) {
            $table->comment('Tabla de agentes con subrogancias');
            $table->date('s24fpv')->comment('Fecha de inicio de vigencia de la subrogancia');
            $table->integer('s24legajo')->comment('Legajo');
            $table->smallInteger('s24agrup')->comment('Agrupamiento que subroga');
            $table->smallInteger('s24nivel')->comment('Nivel que subroga');
            $table->string('s24documento', 50)->nullable()->comment('Documento que respalda o acredita la
 subrogancia');
            $table->date('s24fefin')->nullable()->comment('Fecha de finalización de la subrogancia
');

            $table->primary(['s24fpv', 's24legajo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue024');
    }
};
