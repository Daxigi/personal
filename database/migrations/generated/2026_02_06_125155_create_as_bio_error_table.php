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
        Schema::create('as_bio_error', function (Blueprint $table) {
            $table->bigIncrements('id_log');
            $table->timestamp('fecha_log')->nullable()->default(DB::raw("now()"));
            $table->bigInteger('documento')->nullable();
            $table->integer('id_biometrico')->nullable();
            $table->date('fecha_registro')->nullable();
            $table->string('hora_registro', 8)->nullable();
            $table->string('tipo_bio', 20)->nullable()->comment('Ejemplo: \'Facial\' o \'Digital\'');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_bio_error');
    }
};
