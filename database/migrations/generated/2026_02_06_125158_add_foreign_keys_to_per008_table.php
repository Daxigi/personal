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
        Schema::table('per008', function (Blueprint $table) {
            $table->foreign(['p08legajo'], 'per008_ca1')->references(['p01legajo'])->on('per001')->onUpdate('cascade')->onDelete('no action');
            $table->foreign(['p08adicional'], 'per008_ca2')->references(['p56adicional'])->on('per056')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('per008', function (Blueprint $table) {
            $table->dropForeign('per008_ca1');
            $table->dropForeign('per008_ca2');
        });
    }
};
