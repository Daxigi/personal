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
        Schema::table('neik99', function (Blueprint $table) {
            $table->foreign(['id_ce'], 'pk_id_ce')->references(['id_ce'])->on('neik99_tipo_ley')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('neik99', function (Blueprint $table) {
            $table->dropForeign('pk_id_ce');
        });
    }
};
