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
        Schema::table('neik55', function (Blueprint $table) {
            $table->foreign(['n05adic'], 'neik55_n05adic_fkey')->references(['s03adic'])->on('sue003')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['n05legajo'], 'neik55_n05legajo_fkey')->references(['nk1legajo'])->on('neik01')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('neik55', function (Blueprint $table) {
            $table->dropForeign('neik55_n05adic_fkey');
            $table->dropForeign('neik55_n05legajo_fkey');
        });
    }
};
