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
        Schema::create('as_log', function (Blueprint $table) {
            $table->date('nov_fecha')->nullable();
            $table->date('fec_desde')->nullable();
            $table->date('fec_hasta')->nullable();
            $table->integer('p01legajo');
            $table->integer('p01docum')->nullable();
            $table->string('art_id', 20)->nullable();
            $table->string('nov_comentario', 100)->nullable();
            $table->bigIncrements('id_log');
            $table->string('op_alta', 100)->nullable();
            $table->string('fec_hora_alta', 35)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_log');
    }
};
