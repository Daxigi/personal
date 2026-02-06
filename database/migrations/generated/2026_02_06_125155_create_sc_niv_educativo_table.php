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
        Schema::create('sc_niv_educativo', function (Blueprint $table) {
            $table->increments('id_nivel');
            $table->string('descripcion', 50);
            $table->smallInteger('jerarquia')->unique('sc_niv_edu_u1')->comment('Jerarquía que ocupa dentro de la lista');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sc_niv_educativo');
    }
};
