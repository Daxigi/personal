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
        Schema::table('sue045', function (Blueprint $table) {
            $table->foreign(['s45adic'], 'sue045_s45adic_fkey')->references(['s03adic'])->on('sue003')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sue045', function (Blueprint $table) {
            $table->dropForeign('sue045_s45adic_fkey');
        });
    }
};
