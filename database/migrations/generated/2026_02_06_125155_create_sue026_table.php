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
        Schema::create('sue026', function (Blueprint $table) {
            $table->comment('Tabla de valores básicos para calculo de conceptos de autoridades
');
            $table->date('s26fpv');
            $table->smallInteger('s26agrup');
            $table->smallInteger('s26nivel');
            $table->decimal('s26base', 7)->nullable()->default(0);
            $table->decimal('s26compl', 7)->nullable()->default(0);

            $table->primary(['s26fpv', 's26agrup', 's26nivel']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue026');
    }
};
