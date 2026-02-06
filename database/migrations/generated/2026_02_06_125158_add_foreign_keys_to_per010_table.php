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
        Schema::table('per010', function (Blueprint $table) {
            $table->foreign(['p10legajo'], 'per010_ca1')->references(['p01legajo'])->on('per001')->onUpdate('cascade')->onDelete('no action');
            $table->foreign(['p10tipo_seguro'], 'per010_ca2')->references(['p67tipo_seg'])->on('per067')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['p10empresa'], 'per010_ca3')->references(['p65id'])->on('per065')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('per010', function (Blueprint $table) {
            $table->dropForeign('per010_ca1');
            $table->dropForeign('per010_ca2');
            $table->dropForeign('per010_ca3');
        });
    }
};
