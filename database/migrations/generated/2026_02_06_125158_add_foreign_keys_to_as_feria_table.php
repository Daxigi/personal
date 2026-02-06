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
        Schema::table('as_feria', function (Blueprint $table) {
            $table->foreign(['art_id'], 'as_feria_art_id_fkey')->references(['art_id'])->on('as_articulos')->onUpdate('cascade')->onDelete('no action');
            $table->foreign(['id_feria'], 'as_feria_id_feria_fkey')->references(['id_feria'])->on('articulo_feria')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['p01legajo'], 'as_feria_p01legajo_fkey')->references(['p01legajo'])->on('per001')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('as_feria', function (Blueprint $table) {
            $table->dropForeign('as_feria_art_id_fkey');
            $table->dropForeign('as_feria_id_feria_fkey');
            $table->dropForeign('as_feria_p01legajo_fkey');
        });
    }
};
