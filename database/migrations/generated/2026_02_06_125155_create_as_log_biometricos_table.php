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
        Schema::create('as_log_biometricos', function (Blueprint $table) {
            $table->increments('id_log_bio');
            $table->integer('id_biometrico');
            $table->timestamp('fecha_hora')->nullable()->default(DB::raw("now()"));
            $table->integer('logid_min');
            $table->integer('logid_max');
            $table->integer('cantidad_marcado');
            $table->integer('cantidad_no_marcado');
            $table->integer('cantidad_procesado');
            $table->boolean('activo')->nullable()->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_log_biometricos');
    }
};
