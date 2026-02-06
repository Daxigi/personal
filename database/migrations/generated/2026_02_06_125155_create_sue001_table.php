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
        Schema::create('sue001', function (Blueprint $table) {
            $table->comment('Tabla de escalas');
            $table->date('s01fpv');
            $table->smallInteger('s01agrup');
            $table->smallInteger('s01nivel');
            $table->decimal('s01basico', 7)->nullable()->default(0);
            $table->string('s01descr', 100)->nullable();
            $table->string('s01letra', 1)->nullable();

            $table->primary(['s01fpv', 's01agrup', 's01nivel']);
            $table->index(['s01fpv', 's01nivel', 's01agrup'], 'indice_sue001');
            $table->index(['s01agrup', 's01nivel'], 'indice_sue002');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue001');
    }
};
