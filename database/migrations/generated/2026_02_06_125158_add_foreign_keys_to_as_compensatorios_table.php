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
        Schema::table('as_compensatorios', function (Blueprint $table) {
            $table->foreign(['legajo'], 'as_compensatorios_ka1')->references(['p01legajo'])->on('per001')->onUpdate('cascade')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('as_compensatorios', function (Blueprint $table) {
            $table->dropForeign('as_compensatorios_ka1');
        });
    }
};
