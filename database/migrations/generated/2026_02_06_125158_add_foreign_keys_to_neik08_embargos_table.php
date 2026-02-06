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
        Schema::table('neik08_embargos', function (Blueprint $table) {
            $table->foreign(['nk8legajo'], 'nk8legajo')->references(['nk1legajo'])->on('neik01')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('neik08_embargos', function (Blueprint $table) {
            $table->dropForeign('nk8legajo');
        });
    }
};
