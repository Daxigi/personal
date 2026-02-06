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
        Schema::table('neik07_adicionales', function (Blueprint $table) {
            $table->foreign(['nk7legajo'], 'neik01_fk1')->references(['nk1legajo'])->on('neik01')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('neik07_adicionales', function (Blueprint $table) {
            $table->dropForeign('neik01_fk1');
        });
    }
};
