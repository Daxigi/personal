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
        Schema::table('per006', function (Blueprint $table) {
            $table->foreign(['p06fpv'], 'per006_ca1')->references(['p57fpv'])->on('per057')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['p06agrup'], 'per006_ca2')->references(['p55agrup'])->on('per055')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('per006', function (Blueprint $table) {
            $table->dropForeign('per006_ca1');
            $table->dropForeign('per006_ca2');
        });
    }
};
