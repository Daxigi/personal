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
        Schema::table('sem003', function (Blueprint $table) {
            $table->foreign(['e03legajo'], 'sem003_fk1')->references(['p01legajo'])->on('per001')->onUpdate('cascade')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sem003', function (Blueprint $table) {
            $table->dropForeign('sem003_fk1');
        });
    }
};
