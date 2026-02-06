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
        Schema::table('sue012', function (Blueprint $table) {
            $table->foreign(['s12tipo_liq'], 'sue012_s12tipo_liq_fkey')->references(['s10tipo_liq'])->on('sue010')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sue012', function (Blueprint $table) {
            $table->dropForeign('sue012_s12tipo_liq_fkey');
        });
    }
};
