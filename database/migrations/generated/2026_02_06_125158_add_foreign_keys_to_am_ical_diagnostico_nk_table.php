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
        Schema::table('am_ical_diagnostico_nk', function (Blueprint $table) {
            $table->foreign(['nk2legajo', 'nk2docum'], 'am_ical_diagnostico_nk_ka1')->references(['nk2legajo', 'nk2docum'])->on('neik02')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('am_ical_diagnostico_nk', function (Blueprint $table) {
            $table->dropForeign('am_ical_diagnostico_nk_ka1');
        });
    }
};
