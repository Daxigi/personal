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
        Schema::table('per058', function (Blueprint $table) {
            $table->foreign(['p58adicional'], 'per058_ca1')->references(['p56adicional'])->on('per056')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('per058', function (Blueprint $table) {
            $table->dropForeign('per058_ca1');
        });
    }
};
