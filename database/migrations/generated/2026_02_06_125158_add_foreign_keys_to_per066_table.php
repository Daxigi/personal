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
        Schema::table('per066', function (Blueprint $table) {
            $table->foreign(['p66rubro'], 'per066_ka_1')->references(['rubro'])->on('anx_rubros')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('per066', function (Blueprint $table) {
            $table->dropForeign('per066_ka_1');
        });
    }
};
