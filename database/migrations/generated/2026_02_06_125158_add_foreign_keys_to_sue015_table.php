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
        Schema::table('sue015', function (Blueprint $table) {
            $table->foreign(['s15adic'], 'sue015_s15adic_fkey')->references(['s03adic'])->on('sue003')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['s15codliq'], 'sue015_s15codliq_fkey')->references(['s12codliq'])->on('sue012')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['s15legajo'], 'sue015_s15legajo_fkey')->references(['p01legajo'])->on('per001')->onUpdate('cascade')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sue015', function (Blueprint $table) {
            $table->dropForeign('sue015_s15adic_fkey');
            $table->dropForeign('sue015_s15codliq_fkey');
            $table->dropForeign('sue015_s15legajo_fkey');
        });
    }
};
