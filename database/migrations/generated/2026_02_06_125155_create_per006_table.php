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
        Schema::create('per006', function (Blueprint $table) {
            $table->comment('Escala - Tabla de Escalas');
            $table->date('p06fpv')->comment('Fecha de inicio de la vigencia de la escala');
            $table->smallInteger('p06agrup')->comment('Clase');
            $table->smallInteger('p06nivel')->comment('Categoría');
            $table->decimal('p06basico', 7)->nullable()->default(0)->comment('Básico');
            $table->string('p06descr', 100)->nullable()->comment('Descripción');
            $table->string('p06usualta', 20)->nullable();
            $table->timestamp('p06fealta')->nullable()->default(DB::raw("now()"));
            $table->string('p06usumod', 20)->nullable();
            $table->timestamp('p06femod')->nullable()->default(DB::raw("now()"));

            $table->primary(['p06fpv', 'p06agrup', 'p06nivel']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per006');
    }
};
