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
        Schema::table('sue005', function (Blueprint $table) {
            $table->foreign(['s05adic'], 'sue005_s05adic_fkey')->references(['s03adic'])->on('sue003')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['s05legajo'], 'sue005_s05legajo_fkey')->references(['p01legajo'])->on('per001')->onUpdate('cascade')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sue005', function (Blueprint $table) {
            $table->dropForeign('sue005_s05adic_fkey');
            $table->dropForeign('sue005_s05legajo_fkey');
        });
    }
};
