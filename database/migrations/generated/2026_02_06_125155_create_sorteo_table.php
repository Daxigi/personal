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
        Schema::create('sorteo', function (Blueprint $table) {
            $table->integer('documento');
            $table->string('apellido_y_nombres', 150)->nullable()->default('Sin datos');
            $table->string('domicilio', 150)->nullable()->default('Sin datos');
            $table->date('fe_nacimiento')->nullable();
            $table->char('genero', 1)->nullable();
            $table->char('estado_civil', 1)->nullable();
            $table->smallInteger('tipo_liq');
            $table->smallInteger('agrupamiento');
            $table->smallInteger('nivel');
            $table->string('leyenda', 100)->nullable();
            $table->string('depresu', 100)->nullable();
            $table->increments('orden');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sorteo');
    }
};
