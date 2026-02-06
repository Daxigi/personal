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
        Schema::table('sue023', function (Blueprint $table) {
            $table->foreign(['s23legajo'], 'sue023_s23legajo_fkey')->references(['p01legajo'])->on('per001')->onUpdate('cascade')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sue023', function (Blueprint $table) {
            $table->dropForeign('sue023_s23legajo_fkey');
        });
    }
};
