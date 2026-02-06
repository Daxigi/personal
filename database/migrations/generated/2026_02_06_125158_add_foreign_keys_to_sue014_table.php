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
        Schema::table('sue014', function (Blueprint $table) {
            $table->foreign(['s14codliq'], 'sue014_s14codliq_fkey')->references(['s12codliq'])->on('sue012')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['s14legajo'], 'sue014_s14legajo_fkey')->references(['p01legajo'])->on('per001')->onUpdate('cascade')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sue014', function (Blueprint $table) {
            $table->dropForeign('sue014_s14codliq_fkey');
            $table->dropForeign('sue014_s14legajo_fkey');
        });
    }
};
