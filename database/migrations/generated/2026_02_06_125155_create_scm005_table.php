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
        Schema::create('scm005', function (Blueprint $table) {
            $table->comment('Tabla de tipos de documentos');
            $table->smallInteger('c05tipodoc')->default(0)->primary()->comment('CÃ³digo de tipo de documento');
            $table->string('c05descr', 60)->nullable()->comment('DescripciÃ³n');
            $table->string('c05formato', 20)->nullable();
            $table->string('c05expr_regular', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scm005');
    }
};
