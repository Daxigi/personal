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
        Schema::table('per_doc_subtema', function (Blueprint $table) {
            $table->foreign(['tema_doc'], 'fk_t')->references(['tema_doc'])->on('per_doc_tema')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('per_doc_subtema', function (Blueprint $table) {
            $table->dropForeign('fk_t');
        });
    }
};
