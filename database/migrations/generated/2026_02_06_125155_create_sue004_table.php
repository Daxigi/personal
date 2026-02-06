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
        Schema::create('sue004', function (Blueprint $table) {
            $table->comment('Tabla de adicionales asociados a la agrupamiento y nivel
');
            $table->date('s04fpv');
            $table->smallInteger('s04agrup');
            $table->smallInteger('s04nivel');
            $table->smallInteger('s04adicional');
            $table->string('s04tipovalor', 15)->nullable();
            $table->decimal('s04valor', 7)->nullable()->default(0);

            $table->primary(['s04fpv', 's04agrup', 's04nivel', 's04adicional']);
            $table->index(['s04fpv', 's04nivel', 's04agrup', 's04adicional'], 'indice_sue004');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue004');
    }
};
