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
        Schema::table('per004', function (Blueprint $table) {
            $table->foreign(['p04legajo'], 'per004_ka1')->references(['p01legajo'])->on('per001')->onUpdate('cascade')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('per004', function (Blueprint $table) {
            $table->dropForeign('per004_ka1');
        });
    }
};
