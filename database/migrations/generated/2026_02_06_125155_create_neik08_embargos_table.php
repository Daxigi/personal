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
        Schema::create('neik08_embargos', function (Blueprint $table) {
            $table->comment('Embargos');
            $table->integer('nk8legajo');
            $table->smallInteger('nk8embargo');
            $table->integer('nk8oficio')->nullable();
            $table->date('nk8fe_oficio')->nullable();
            $table->string('nk8juzgado', 50)->nullable();
            $table->string('nk8secretaria', 50)->nullable();
            $table->integer('nk8nro_expte')->nullable();
            $table->smallInteger('nk8anio_expte')->nullable();
            $table->string('nk8caratula', 200)->nullable();
            $table->decimal('nk8porcentaje', 5)->nullable();
            $table->date('nk8fe_inicio')->nullable();
            $table->smallInteger('nk8cod_deposito')->nullable();
            $table->integer('nk8nro_cuenta')->nullable();
            $table->smallInteger('nk8dig_cuenta')->nullable();

            $table->primary(['nk8legajo', 'nk8embargo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neik08_embargos');
    }
};
