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
        Schema::table('scm007', function (Blueprint $table) {
            $table->foreign(['c07id_pcia'], 'scm007_fk')->references(['c06id'])->on('scm006')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('scm007', function (Blueprint $table) {
            $table->dropForeign('scm007_fk');
        });
    }
};
