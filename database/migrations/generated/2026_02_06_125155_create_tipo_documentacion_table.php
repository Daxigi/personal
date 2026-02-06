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
        Schema::create('tipo_documentacion', function (Blueprint $table) {
            $table->bigIncrements('id_tipo_documentacion');
            $table->string('descripcion', 40)->nullable();
            $table->string('detalle', 500)->nullable();
            $table->boolean('activo')->default(true);
            $table->boolean('con_archivo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_documentacion');
    }
};
