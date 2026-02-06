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
        Schema::table('sue039', function (Blueprint $table) {
            $table->foreign(['s39codliq'], 'sue039_s39codliq_fkey')->references(['s12codliq'])->on('sue012')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sue039', function (Blueprint $table) {
            $table->dropForeign('sue039_s39codliq_fkey');
        });
    }
};
