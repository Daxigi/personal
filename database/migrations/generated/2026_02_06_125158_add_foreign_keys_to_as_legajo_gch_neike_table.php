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
        Schema::table('as_legajo_gch_neike', function (Blueprint $table) {
            $table->foreign(['leg_gch_id_neike'], 'as_legajo_gch_neike_ka2')->references(['gch_id_neike'])->on('as_grupo_carga_horaria_neike')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('as_legajo_gch_neike', function (Blueprint $table) {
            $table->dropForeign('as_legajo_gch_neike_ka2');
        });
    }
};
