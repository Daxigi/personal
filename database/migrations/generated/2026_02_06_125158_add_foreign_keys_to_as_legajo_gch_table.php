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
        Schema::table('as_legajo_gch', function (Blueprint $table) {
            $table->foreign(['p01legajo'], 'as_legajo_gch_ka1')->references(['p01legajo'])->on('per001')->onUpdate('cascade')->onDelete('no action');
            $table->foreign(['leg_gch_id'], 'as_legajo_gch_ka2')->references(['gch_id'])->on('as_grupo_carga_horaria')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('as_legajo_gch', function (Blueprint $table) {
            $table->dropForeign('as_legajo_gch_ka1');
            $table->dropForeign('as_legajo_gch_ka2');
        });
    }
};
