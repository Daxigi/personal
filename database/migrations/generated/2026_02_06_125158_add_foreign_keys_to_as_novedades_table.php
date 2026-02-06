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
        Schema::table('as_novedades', function (Blueprint $table) {
            $table->foreign(['p01legajo'], 'as_novedades_ka1')->references(['p01legajo'])->on('per001')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['art_id'], 'as_novedades_ka2')->references(['art_id'])->on('as_articulos')->onUpdate('cascade')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('as_novedades', function (Blueprint $table) {
            $table->dropForeign('as_novedades_ka1');
            $table->dropForeign('as_novedades_ka2');
        });
    }
};
