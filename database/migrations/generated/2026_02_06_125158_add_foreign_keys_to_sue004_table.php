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
        Schema::table('sue004', function (Blueprint $table) {
            $table->foreign(['s04fpv', 's04agrup', 's04nivel'], 'sue004_s04fpv_fkey')->references(['s01fpv', 's01agrup', 's01nivel'])->on('sue001')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sue004', function (Blueprint $table) {
            $table->dropForeign('sue004_s04fpv_fkey');
        });
    }
};
