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
        Schema::create('sue066', function (Blueprint $table) {
            $table->comment('Tabla de S.A.C. intermedia
');
            $table->integer('s66anio');
            $table->smallInteger('s66semestre');
            $table->integer('s66legajo');
            $table->integer('s66documento');
            $table->decimal('s66hab_c_aporte')->nullable()->default(0);
            $table->decimal('s66hab_s_aporte')->nullable()->default(0);
            $table->integer('s66dias')->nullable();

            $table->primary(['s66anio', 's66semestre', 's66legajo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sue066');
    }
};
