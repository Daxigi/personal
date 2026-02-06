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
        Schema::create('per051', function (Blueprint $table) {
            $table->comment('Parámetro - Tabla de organismos que emiten títulos de estudios');
            $table->smallInteger('p51codorgtit')->primary()->comment('Código del Organismo');
            $table->string('p51nombreorg', 150)->comment('Nombre del Organismo');
            $table->smallInteger('p51jurorg')->comment('Jurisdicción del Organismo');
            $table->smallInteger('p51ambito')->comment('Ambito');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per051');
    }
};
