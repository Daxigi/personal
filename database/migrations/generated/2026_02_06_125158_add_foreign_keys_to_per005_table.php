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
        Schema::table('per005', function (Blueprint $table) {
            $table->foreign(['p05legajo'], 'per005_fk1')->references(['p01legajo'])->on('per001')->onUpdate('cascade')->onDelete('no action');
            $table->foreign(['id_nivel'], 'per005_fk2')->references(['id_nivel'])->on('sc_niv_educativo')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['p05tipocert'], 'per005_ka2')->references(['p68tipocert'])->on('per068')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['p05legajo', 'p05docum'], 'per005_ka_1')->references(['p04legajo', 'p04docum'])->on('per004')->onUpdate('cascade')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('per005', function (Blueprint $table) {
            $table->dropForeign('per005_fk1');
            $table->dropForeign('per005_fk2');
            $table->dropForeign('per005_ka2');
            $table->dropForeign('per005_ka_1');
        });
    }
};
