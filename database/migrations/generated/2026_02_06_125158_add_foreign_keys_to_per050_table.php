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
        Schema::table('per050', function (Blueprint $table) {
            $table->foreign(['p50jurtit'], 'per050_ca1')->references(['p52jur'])->on('per052')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('per050', function (Blueprint $table) {
            $table->dropForeign('per050_ca1');
        });
    }
};
