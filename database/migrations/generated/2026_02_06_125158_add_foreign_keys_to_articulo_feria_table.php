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
        Schema::table('articulo_feria', function (Blueprint $table) {
            $table->foreign(['art_id'], 'articulo_feria_art_id_fkey')->references(['art_id'])->on('as_articulos')->onUpdate('cascade')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articulo_feria', function (Blueprint $table) {
            $table->dropForeign('articulo_feria_art_id_fkey');
        });
    }
};
