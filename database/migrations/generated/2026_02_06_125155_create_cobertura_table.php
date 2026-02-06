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
        Schema::create('cobertura', function (Blueprint $table) {
            $table->bigIncrements('id_cobertura');
            $table->smallInteger('id_tipo');
            $table->string('descripcion', 100);
            $table->string('domicilio', 200)->nullable();
            $table->string('telefonos', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('contactos', 150)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cobertura');
    }
};
