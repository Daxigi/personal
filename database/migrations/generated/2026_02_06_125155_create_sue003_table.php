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
        Schema::create('sue003', function (Blueprint $table) {
            $table->comment('Tabla de conceptos/adicionales');
            $table->integer('s03adic')->primary();
            $table->string('s03descr', 300)->nullable();
            $table->boolean('s03remunerativo')->nullable()->default(true);
            $table->smallInteger('s03valor_asoc')->nullable();
            $table->string('s03tipoad', 10)->default('haber')->comment('Tipo de adicional (haber/descuento)');
            $table->boolean('s03salario')->nullable()->default(false)->index('sue003_i1');
            $table->smallInteger('s03orden')->nullable();
            $table->boolean('s03acum_sal')->nullable()->default(false);
            $table->boolean('s03acum_garant')->nullable()->default(true);
            $table->boolean('s03sac')->nullable()->default(true);
            $table->boolean('s03ganancia')->nullable()->default(true);

            $table->index(['s03adic'], 'indice_sue003');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue003');
    }
};
