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
        Schema::table('neik15', function (Blueprint $table) {
            $table->foreign(['n15adic'], 'neik15_n15adic_fkey')->references(['s03adic'])->on('sue003')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['n15codliq'], 'neik15_n15codliq_fkey')->references(['s12codliq'])->on('sue012')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['n15legajo'], 'neik15_n15legajo_fkey')->references(['nk1legajo'])->on('neik01')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('neik15', function (Blueprint $table) {
            $table->dropForeign('neik15_n15adic_fkey');
            $table->dropForeign('neik15_n15codliq_fkey');
            $table->dropForeign('neik15_n15legajo_fkey');
        });
    }
};
