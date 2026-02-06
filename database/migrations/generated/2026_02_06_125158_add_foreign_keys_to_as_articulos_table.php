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
        Schema::table('as_articulos', function (Blueprint $table) {
            $table->foreign(['ord_id'], 'as_articulos_fk1')->references(['ord_id'])->on('as_ordenanzas')->onUpdate('cascade')->onDelete('no action');
            $table->foreign(['id_estado'], 'as_articulos_fk2')->references(['id_estado'])->on('as_ord_estados')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('as_articulos', function (Blueprint $table) {
            $table->dropForeign('as_articulos_fk1');
            $table->dropForeign('as_articulos_fk2');
        });
    }
};
