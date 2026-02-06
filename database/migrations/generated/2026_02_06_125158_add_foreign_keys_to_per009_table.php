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
        Schema::table('per009', function (Blueprint $table) {
            $table->foreign(['p09legajo'], 'per009_ka1')->references(['p01legajo'])->on('per001')->onUpdate('cascade')->onDelete('no action');
            $table->foreign(['p09tipo_nov'], 'per009_ka2')->references(['p60tipo_nov'])->on('per060')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('per009', function (Blueprint $table) {
            $table->dropForeign('per009_ka1');
            $table->dropForeign('per009_ka2');
        });
    }
};
