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
        Schema::table('per051', function (Blueprint $table) {
            $table->foreign(['p51jurorg'], 'per051_ca1')->references(['p52jur'])->on('per052')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['p51ambito'], 'per051_ca2')->references(['p53ambito'])->on('per053')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('per051', function (Blueprint $table) {
            $table->dropForeign('per051_ca1');
            $table->dropForeign('per051_ca2');
        });
    }
};
