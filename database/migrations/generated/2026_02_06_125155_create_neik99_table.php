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
        Schema::create('neik99', function (Blueprint $table) {
            $table->comment('Tabla que contiene personal foraneo.Por ahora solopara Sistema  S.A.C.');
            $table->integer('legajo')->nullable();
            $table->integer('documento')->nullable();
            $table->string('apyn', 150)->nullable();
            $table->integer('sit_rev')->nullable()->default(-1);
            $table->string('leyenda')->nullable();
            $table->text('depen')->nullable();
            $table->string('n_heredera', 15)->nullable();
            $table->string('c01leyen', 100)->nullable();
            $table->text('estado')->nullable();
            $table->date('feingreso')->nullable()->default(DB::raw("now()"));
            $table->integer('id_ce')->nullable()->comment('Codigo de tipo de externo');
            $table->date('fepromo')->nullable()->default(DB::raw("now()"))->comment('Fecha de Promoción');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neik99');
    }
};
