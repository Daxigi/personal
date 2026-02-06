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
        Schema::create('nk_certif', function (Blueprint $table) {
            $table->bigIncrements('id_certif');
            $table->integer('cert_legajo')->nullable();
            $table->integer('cert_documento')->nullable();
            $table->string('cert_apyn', 150)->nullable();
            $table->string('cert_leyenda', 150)->nullable();
            $table->string('cert_n_heredera', 20)->nullable();
            $table->string('cert_c01leyen', 150)->nullable();
            $table->string('autorizante', 150)->nullable();
            $table->integer('estado')->nullable();
            $table->timestamp('fealta')->nullable()->default(DB::raw("now()"));
            $table->string('usualta', 20)->nullable();
            $table->timestamp('femod')->nullable();
            $table->string('usumod', 20)->nullable();
            $table->integer('anio')->nullable();
            $table->integer('mes')->nullable();
            $table->bigInteger('id_operacion')->nullable();
            $table->integer('diastrab')->nullable()->default(30);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nk_certif');
    }
};
