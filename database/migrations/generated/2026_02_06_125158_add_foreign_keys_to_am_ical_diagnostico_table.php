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
        Schema::table('am_ical_diagnostico', function (Blueprint $table) {
            $table->foreign(['p04legajo', 'p04docum'], 'am_ical_diagnostico_ka1')->references(['p04legajo', 'p04docum'])->on('per004')->onUpdate('cascade')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('am_ical_diagnostico', function (Blueprint $table) {
            $table->dropForeign('am_ical_diagnostico_ka1');
        });
    }
};
