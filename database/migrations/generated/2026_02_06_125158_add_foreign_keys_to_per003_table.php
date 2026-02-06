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
        Schema::table('per003', function (Blueprint $table) {
            $table->foreign(['p03legajo'], 'per003_ca1')->references(['p01legajo'])->on('per001')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('per003', function (Blueprint $table) {
            $table->dropForeign('per003_ca1');
        });
    }
};
