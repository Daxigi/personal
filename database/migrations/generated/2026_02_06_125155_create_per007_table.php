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
        Schema::create('per007', function (Blueprint $table) {
            $table->comment('Tabla de adicionales relacionados a la Escala');
            $table->date('p07fpv')->comment('Fecha de inicio de la vigencia de la escala');
            $table->smallInteger('p07agrup')->comment('Agrupamiento');
            $table->smallInteger('p07nivel')->comment('Nivel');
            $table->smallInteger('p07adicional')->comment('Adicional');
            $table->string('p07tipval', 15)->nullable()->comment('Tipo de valor (importe/porcentaje)');
            $table->decimal('p07valor', 7)->nullable()->default(0)->comment('Valor');
            $table->string('p07usualta', 20)->nullable();
            $table->timestamp('p07fealta')->nullable()->default(DB::raw("now()"));
            $table->string('p07usumod', 20)->nullable();
            $table->timestamp('p07femod')->nullable()->default(DB::raw("now()"));
            $table->date('p07feini')->nullable()->comment('Fecha de inicio de la aplicación del adicional (incluida)');
            $table->date('p07fefin')->nullable()->comment('Fecha de finalización de la aplicación del adicional (incluida)');

            $table->primary(['p07fpv', 'p07agrup', 'p07nivel', 'p07adicional']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per007');
    }
};
