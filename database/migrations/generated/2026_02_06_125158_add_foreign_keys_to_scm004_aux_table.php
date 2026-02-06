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
        Schema::table('scm004_aux', function (Blueprint $table) {
            $table->foreign(['codba'], 'scm004_aux_ka1')->references(['codba'])->on('scm003')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('scm004_aux', function (Blueprint $table) {
            $table->dropForeign('scm004_aux_ka1');
        });
    }
};
