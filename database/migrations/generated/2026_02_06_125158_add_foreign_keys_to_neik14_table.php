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
        Schema::table('neik14', function (Blueprint $table) {
            $table->foreign(['n14codliq'], 'neik14_n14codliq_fkey')->references(['s12codliq'])->on('sue012')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['n14legajo'], 'neik14_n14legajo_fkey')->references(['nk1legajo'])->on('neik01')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('neik14', function (Blueprint $table) {
            $table->dropForeign('neik14_n14codliq_fkey');
            $table->dropForeign('neik14_n14legajo_fkey');
        });
    }
};
