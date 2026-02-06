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
        Schema::create('as_feria', function (Blueprint $table) {
            $table->bigIncrements('id_feria_legajo');
            $table->integer('p01legajo');
            $table->bigInteger('id_feria')->nullable();
            $table->string('art_id', 20);
            $table->date('fec_desde');
            $table->date('fec_hasta');
            $table->string('autorizante', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('as_feria');
    }
};
